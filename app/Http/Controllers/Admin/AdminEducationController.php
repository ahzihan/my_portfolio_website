<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class AdminEducationController extends Controller
{

    public function index()
    {
        $eduInfo = Education::orderBy('item_order', 'asc')->get();

        return view('admin.pages.education.education-list', compact('eduInfo'));
    }


    public function create()
    {
        return view('admin.pages.education.education-create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'course_title' => 'required',
            'institute' => 'required',
            'duration' => 'required'
        ]);

        Education::updateOrCreate([
            'course_title' => $request->course_title,
            'institute' => $request->institute,
            'duration' => $request->duration,
            'item_order' => $request->item_order,
        ]);

        return redirect()->route('education.index')->with('success', 'Education Info Inserted Successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $eduInfo=Education::find($id);
        return view('admin.pages.education.education-edit',compact('eduInfo'));
    }


    public function update(Request $request, string $id)
    {
        $eduInfo = Education::find($id);

        $request->validate([
            'course_title' => 'required',
            'institute' => 'required',
            'duration' => 'required'
        ]);

        $eduInfo->course_title=$request->course_title;
        $eduInfo->institute=$request->institute;
        $eduInfo->duration=$request->duration;
        $eduInfo->item_order=$request->item_order;
        $eduInfo->update();

        return redirect()->route('education.index')->with('success', 'Education Info Updated Successfully');
    }


    public function destroy(string $id)
    {
        $eduInfo = Education::where('id', $id)->first();
        $eduInfo->delete();

        return redirect()->route('education.index')->with('success', 'Education Info Deleted Successfully');
    }
}
