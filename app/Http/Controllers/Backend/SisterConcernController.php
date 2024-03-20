<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SisterConcern;
use Illuminate\Http\Request;

class SisterConcernController extends Controller
{
    public function index()
    {
        return view('backend.sister-concern.insert');
    } //
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        ]);
        
        if ($request->logo) {
            $sister = new SisterConcern;
            $ImageName = rand() . '.' . $request->logo->extension();
            $request->logo->move(public_path('uploads/sister-concern'), $ImageName);
            $sister->logo = $ImageName;
            $sister->name = $request->name;
            $sister->description = $request->description;
            $sister->save();
            $notification = array(
                'message' => 'Sister Company Successfully Inserted',
                'alert-type' => 'info'
            );
            return redirect()->route('view.sister')->with($notification);
        }
        $notification = array(
            'message' => 'Sister Company Successfully Inserted',
            'alert-type' => 'info'
        );
        return redirect()->route('view.sister')->with($notification);
    }
    public function view()
    {
        $sisters = SisterConcern::latest()->get();
        return view('backend.sister-concern.view', compact('sisters'));
    } //
    public function edit($id)
    {
        $sister = SisterConcern::findOrFail($id);
        return view('backend.sister-concern.edit', compact('sister'));
    } //
    // Update Section Details
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'logo' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        // ]);
        if ($request->logo) {
            $sister = SisterConcern::findOrFail($id);
            $ImageName = rand() . '.' . $request->logo->extension();
            $request->logo->move(public_path('uploads/sister-concern'), $ImageName);
            $path = public_path('uploads/sister-concern/' . $sister->logo);
            if (file_exists($path)) {
                @unlink($path);
            }
            $sister->logo = $ImageName;
            $sister->name = $request->name;
            $sister->description = $request->description;
            $sister->update();
            $notification = array(
                'message' => 'Sister Company Successfully Updated',
                'alert-type' => 'info'
            );
            return redirect()->route('view.sister')->with($notification);
        } else {
            $sister = SisterConcern::findOrFail($id);
            $sister->name = $request->name;
            $sister->description = $request->description;
            $sister->update();
            $notification = array(
                'message' => 'Sister Company Successfully Updated',
                'alert-type' => 'info'
            );
            return redirect()->route('view.sister')->with($notification);
        }
    }
    //End  Method

    //Delete Section Details
    public function delete($id)
    {
        $sister = SisterConcern::findOrFail($id);
        $sister->delete();
        $notification = array(
            'message' => 'Sister Company Successfully Deleted',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
