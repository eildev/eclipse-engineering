<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        return view('backend.faq.insert');
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|max:250',
            'description' => 'required'
        ]);
            $news = new FAQ;
            $news->question = $request->question;
            $news->description = $request->description;
            $news->save();
            return back()->with('message', 'FAQ Successfully Saved');
    }
    public function view()
    {
        $allData = FAQ::all();
        return view('backend.faq.view', compact('allData'));
    }
    public function edit($id)
    {
        $data = FAQ::findOrFail($id);
        return view('backend.faq.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        
            $news = FAQ::findOrFail($id);
            $news->question = $request->question;
            $news->description = $request->description;
            $news->update();
            return redirect()->route('view.faq')->with('message', 'FAQ Successfully updated');
        
    }
    public function delete($id)
    {
        $news = FAQ::findOrFail($id);
        $news->delete();
        return back()->with('message', 'CRS Successfully Deleted');
    }
    public function status($id)
    {
        $news = FAQ::findOrFail($id);
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
