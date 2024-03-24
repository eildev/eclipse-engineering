<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
    public function index()
    {
        return view('backend.carrier.insert');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:250',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        if ($request->image) {
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/carrier/'), $imageName);
            $news = new Carrier;
            $news->title = $request->title;
            $news->description = $request->description;
            $news->image = $imageName;
            $news->save();
            return back()->with('message', 'Carrier Successfully Saved');
        }
    }
    public function view()
    {
        $allData = Carrier::all();
        return view('backend.carrier.view', compact('allData'));
    }
    public function edit($id)
    {
        $data = Carrier::findOrFail($id);
        return view('backend.carrier.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        // $news = Carrier::findOrFail($id);
        // $news->title = $request->title;
        // $news->description = $request->description;
        // $news->update();
        // return redirect()->route('view.carrier')->with('message', 'Carrier Successfully updated');
        if ($request->image) {
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/carrier/'), $imageName);
            $news = Carrier::findOrFail($id);
            $path = public_path('uploads/carrier/') . $news->image;
            if (file_exists($path)) {
                @unlink($path);
            }
            $news->title = $request->title;
            $news->description = $request->description;
            $news->image = $imageName;
            $news->update();
            return redirect()->route('view.carrier')->with('message', 'Carrier Successfully updated');
        } else {
            $news = Carrier::findOrFail($id);
            $news->title = $request->title;
            $news->description = $request->description;
            $news->update();
            return redirect()->route('view.carrier')->with('message', 'Carrier Successfully updated');
        }
    }
    public function delete($id)
    {
        $news = Carrier::findOrFail($id);
        $path = public_path('uploads/carrier/') . $news->image;
        if (file_exists($path)) {
            @unlink($path);
        }
        $news->delete();
        return back()->with('message', 'Carrier Successfully Deleted');
    }
    public function status($id)
    {
        $news = Carrier::findOrFail($id);
        if ($news->status == 0) {
            $newStatus = 1;
        } else {
            $newStatus = 0;
        }

        $news->update([
            'status' => $newStatus
        ]);
        return redirect()->back()->with('message', 'Status Changed Successfully');
    }
}
