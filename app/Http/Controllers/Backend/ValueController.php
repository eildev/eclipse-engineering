<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Value;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function index()
    {
        return view('backend.value.insert');
    } //
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $value = new Value;
        $value->title = $request->title;
        $value->description = $request->description;
        $value->icon = $request->icon;
        $value->save();
        $notification = array(
            'message' => 'Value Successfully Inserted',
            'alert-type' => 'info'
        );
        return redirect()->route('view.value')->with($notification);
    }
    public function view()
    {
        $values = Value::latest()->get();
        return view('backend.value.view', compact('values'));
    } //
    public function edit($id)
    {
        $value = Value::findOrFail($id);
        return view('backend.value.edit', compact('value'));
    } //
    //Update Section Details
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        $value = Value::findOrFail($id);
        $value->title = $request->title;
        $value->description = $request->description;
        $value->icon = $request->icon;
        $value->update();

        $notification = [
            'message' => 'Value Successfully Updated',
            'alert-type' => 'info'
        ];

        return redirect()->route('view.value')->with($notification);
    }
    //End  Method

    //Delete Section Details
    public function delete($id)
    {
        $value = Value::findOrFail($id);
        $value->delete();
        $notification = array(
            'message' => 'Value Successfully Deleted',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
