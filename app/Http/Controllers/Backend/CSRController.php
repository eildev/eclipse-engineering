<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CSRActivities;
use App\Models\SisterConcern;
use Illuminate\Http\Request;

class CSRController extends Controller
{
    public function index()
    {
        return view('backend.csr.insert');
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
            $request->image->move(public_path('uploads/csr/'), $imageName);
            $news = new CSRActivities;
            $news->title = $request->title;
            $news->description = $request->description;
            $news->image = $imageName;
            $news->save();
            return back()->with('message', 'CSR Successfully Saved');
        }
    }
    public function view()
    {
        $allData = CSRActivities::all();
        return view('backend.csr.view', compact('allData'));
    }
    public function edit($id)
    {
        $data = CSRActivities::findOrFail($id);
        return view('backend.csr.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        if ($request->image) {
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/csr/'), $imageName);
            $news = CSRActivities::findOrFail($id);
            $path = public_path('uploads/csr/') . $news->image;
            if (file_exists($path)) {
                @unlink($path);
            }
            $news->title = $request->title;
            $news->description = $request->description;
            $news->image = $imageName;
            $news->update();
            return redirect()->route('view.csr')->with('message', 'CSR Successfully updated');
        } else {
            $news = CSRActivities::findOrFail($id);
            $news->title = $request->title;
            $news->description = $request->description;
            $news->update();
            return redirect()->route('view.csr')->with('message', 'CSR Successfully updated');
        }
    }
    public function delete($id)
    {
        $news = CSRActivities::findOrFail($id);
        $path = public_path('uploads/csr/') . $news->image;
        if (file_exists($path)) {
            @unlink($path);
        }
        $news->delete();
        return back()->with('message', 'CRS Successfully Deleted');
    }
    public function status($id)
    {
        $news = CSRActivities::findOrFail($id);
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
