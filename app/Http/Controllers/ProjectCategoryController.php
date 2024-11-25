<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        return view('backend.projects-category.category');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:99',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '500',
                'error' => $validator->messages()
            ]);
        }
        $category = new ProjectCategory;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();

        return response()->json([
            'status' => 200,
            'message' => 'Project Category Saved Successfully',
        ]);
    }
    public function view()
    {
        $category = ProjectCategory::get();
        return response()->json([
            "status" => 200,
            "data" => $category,
        ]);
    }

    public function updateStatus($id)
    {
        $category = ProjectCategory::findOrFail($id);

        // Debugging line to check current status
        Log::info('Category current status: ' . $category->status);

        $category->status = $category->status ? 0 : 1;
        $category->save(); // Use save() instead of update()

        // Debugging line to check updated status
        Log::info('Category updated status: ' . $category->status);

        return response()->json([
            'status' => 200,
            'message' => 'Project Category Status Update Successfully',
        ]);
    }

    public function edit($id)
    {
        $category = ProjectCategory::findOrFail($id);
        return response()->json([
            "status" => 200,
            "data" => $category,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:99',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '500',
                'error' => $validator->messages()
            ]);
        }
        $category = ProjectCategory::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();

        return response()->json([
            'status' => 200,
            'message' => 'Project Category Update Successful',
        ]);
    }

    public function delete($id)
    {
        $category = ProjectCategory::findOrFail($id);
        $category->delete();
        return response()->json([
            "status" => 200,
            "message" => 'Project Category Deleted Successful',
        ]);
    }
}
