<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class AdminExperienceController extends Controller
{
    public function index()
    {
        $expInfo = Experience::orderBy('item_order','asc')->get();
        return view('admin.pages.experience.experience-list', compact('expInfo'));
    }


    public function create()
    {
        return view('admin.pages.experience.experience-create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'designation' => 'required',
            'duration' => 'required'
        ]);

        Experience::updateOrCreate([
            'company_name' => $request->company_name,
            'designation' => $request->designation,
            'duration' => $request->duration,
            'item_order' => $request->item_order,
        ]);

        return redirect()->route('experience.index')->with('success', 'Experience Info Inserted Successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $expInfo=Experience::find($id);
        return view('admin.pages.experience.experience-edit',compact('expInfo'));
    }


    public function update(Request $request, string $id)
    {
        $expInfo = Experience::find($id);

        $request->validate([
            'company_name' => 'required',
            'designation' => 'required',
            'duration' => 'required'
        ]);

        $expInfo->company_name=$request->company_name;
        $expInfo->designation=$request->designation;
        $expInfo->duration=$request->duration;
        $expInfo->item_order=$request->item_order;
        $expInfo->update();

        return redirect()->route('experience.index')->with('success', 'Experience Info Updated Successfully');
    }


    public function destroy(string $id)
    {
        $expInfo = Experience::where('id', $id)->first();
        $expInfo->delete();

        return redirect()->route('experience.index')->with('success', 'Experience Info Deleted Successfully');
    }
}
