<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use App\Models\ProjectDetails;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function index()
    {
        $projects = Projects::latest()->get();
        $projectsCategory = ProjectCategory::where('status', 1)->get();
        return view('backend.project_details.insert', compact('projects', 'projectsCategory'));
    } //
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'multi_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        //     'icon_name' => 'required',
        // ]);

        if ($request->multi_image) {
            $imageName = rand() . '.' . $request->multi_image->extension();
            $request->multi_image->move(public_path('uploads/projects/multi_img/'), $imageName);
            $project = new ProjectDetails;
            $project->category_id = $request->category_id;
            $project->title = $request->title;
            $project->icon_name = $request->icon_name;
            $project->description = $request->description;
            $project->image = $imageName;
            $project->save();
            $notification = array(
                'message' => 'Section Details Successfully Inserted',
                'alert-type' => 'info'
            );
            return redirect()->route('view.project.details')->with($notification);
        }
    }
    public function view()
    {
        $projects = ProjectDetails::latest()->get();
        return view('backend.project_details.view', compact('projects'));
    } //
    public function edit($id)
    {
        $projects = Projects::latest()->get();
        $projectDetails = ProjectDetails::findOrFail($id);
        $projectsCategory = ProjectCategory::where('status', 1)->get();
        return view('backend.project_details.edit', compact('projects', 'projectDetails', 'projectsCategory'));
    } //
    //Update Section Details
    public function update(Request $request, $id)
    {
        // @dd($request->all());
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'multi_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        //     'icon_name' => 'required',
        // ]);

        $project = ProjectDetails::findOrFail($id);
        if ($request->hasFile('multi_image')) {
            $imageName = rand() . '.' . $request->multi_image->extension();
            $request->multi_image->move(public_path('uploads/projects/multi_img/'), $imageName);

            $path = public_path('uploads/projects/multi_img/') . $project->image;
            if (file_exists($path)) {
                @unlink($path);
            }
            $project->image = $imageName;
        }
        $project->category_id = $request->category_id;
        $project->title = $request->title;
        $project->icon_name = $request->icon_name;
        $project->description = $request->description;
        $project->save();

        $notification = [
            'message' => 'Section Details Successfully Updated',
            'alert-type' => 'info'
        ];

        return redirect()->route('view.project.details')->with($notification);
    }
    //End  Method

    //Delete Section Details
    public function delete($id)
    {
        $project = ProjectDetails::findOrFail($id);
        $path = public_path('uploads/projects/multi_img/') . $project->image;
        if (file_exists($path)) {
            @unlink($path);
        }
        $project->delete();
        $notification = array(
            'message' => 'Section Details Successfully Deleted',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
