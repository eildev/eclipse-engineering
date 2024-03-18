<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('backend.projects.insert');
    }
    //
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);
        if ($request->image) {
            $ImageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/projects'), $ImageName);
            Projects::insert([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'image' =>  $ImageName,
                'created_at' => Carbon::now(),
            ]);
        } else {
            Projects::insert([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
        }
        $notification = array(
            'message' => 'Projects Inserted Successfully',
            'alert-type' => 'info'
        );
        // return redirect()->route('view.projects')->with($notification);
        return back()->with($notification);
    } //
    public function view()
    {
        $projects = Projects::latest()->get();
        return view('backend.projects.view', compact('projects'));
    } //
    public function  edit($id)
    {
        $project = Projects::findOrFail($id);
        return view('backend.Projects.edit', compact('project'));
    } //
    public function update(Request $request, $id)
    {
        $projectsIamge =  Projects::findOrFail($id);
        if ($request->image) {
            $ImageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/projects'), $ImageName);
            $path = public_path('uploads/projects/') . $projectsIamge->image;
            if (file_exists($path)) {
                @unlink($path);
            }
            Projects::findOrFail($id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'image' =>  $ImageName,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Section Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('view.projects')->with($notification);
        } else {
            Projects::findOrFail($id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Section Updated Without Image Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('view.projects')->with($notification);
        } //End 
    }
    public function delete($id)
    {
        $project = Projects::findOrFail($id);
        $path = public_path('uploads/projects/') . $project->image;
        if (file_exists($path)) {
            @unlink($path);
        }
        Projects::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Section Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('view.projects')->with($notification);
    }
}
