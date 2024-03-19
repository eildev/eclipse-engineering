<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Overview;

class OverviewController extends Controller
{
    public function index()
    {
        return view('backend.overview.insert');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'experience' => 'required|max:10',
            'icon_name' => 'required',
        ]);

        $overview = new Overview;
        $overview->title = $request->title;
        $overview->experience = $request->experience;
        $overview->icon_name = $request->icon_name;

        if ($request->hasFile('icon')) {
            $iconImage = rand() . '.' . $request->icon->extension();
            $request->icon->move(public_path('uploads/overview/'), $iconImage);
            $overview->icon = $iconImage;
        }

        $overview->save();

        return back()->with('message', 'Overview Successfully Saved');
    }

    public function view()
    {
        $allData = Overview::all();
        return view('backend.overview.view', compact('allData'));
    }
    public function edit($id)
    {
        $data = Overview::findOrFail($id);
        return view('backend.overview.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        if ($request->icon) {
            $iconImage = rand() . '.' . $request->icon->extension();
            $request->icon->move(public_path('uploads/overview/'), $iconImage);
            $overview = Overview::findOrFail($id);
            unlink(public_path('uploads/overview/') . $overview->icon);
            $overview->title = $request->title;
            $overview->experience = $request->experience;
            $overview->icon = $iconImage;
            $overview->icon_name = $request->icon_name;
            $overview->update();
            return redirect()->route('manage.overview')->with('message', 'Overview Successfully updated');
        } else {
            $overview = Overview::findOrFail($id);
            $overview->title = $request->title;
            $overview->experience = $request->experience;
            $overview->icon_name = $request->icon_name;
            $overview->update();
            return redirect()->route('manage.overview')->with('message', 'Overview Successfully updated');
        }
    }

    public function delete($id)
    {
        $overview = Overview::findOrFail($id);
        unlink(public_path('uploads/overview/') . $overview->icon);
        $overview->delete();
        return back()->with('message', 'overview Successfully deleted');
    }
    public function status($id)
    {
        $overview = Overview::findOrFail($id);
        if ($overview->status == 0) {
            $newStatus = 1;
        } else {
            $newStatus = 0;
        }

        $overview->update([
            'status' => $newStatus
        ]);
        return redirect()->back()->with('message', 'status changed successfully');
    }
}
