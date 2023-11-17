<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class BackendSkillController extends Controller
{

    public function index()
    {
        $skills = Skill::all();
        return view('admin.pages.skill-list', compact('skills'));
    }


    public function create()
    {
        $skillInfo = Skill::where('id', 1)->first();
        return view('admin.pages.skill-create', compact('skillInfo'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'skill_name' => 'required',
            'score' => 'required'
        ]);

        Skill::updateOrCreate([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'skill_name' => $request->skill_name,
            'score' => $request->score,
            'position' => $request->position,
            'status' => $request->status
        ]);


        return redirect()->back()->with('success', 'Skill Info Updated Successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $skillInfo=Skill::find($id);
        return view('pages.skill-edit',compact('skillInfo'));
    }


    public function update(Request $request, string $id)
    {
        $skillInfo = Skill::find($id);

        $request->validate([
            'skill_name' => 'required',
            'score' => 'required'
        ]);

        $skillInfo->title=$request->title;
        $skillInfo->sub_title=$request->sub_title;
        $skillInfo->skill_name=$request->skill_name;
        $skillInfo->score=$request->score;
        $skillInfo->position=$request->position;
        $skillInfo->status=$request->status;
        $skillInfo->update();

        return redirect()->back()->with('success', 'Skill Info Updated Successfully');
    }


    public function destroy(string $id)
    {
        $skillId = Skill::find($id);
        $skillId->delete();

        return redirect()->back()->with('success', 'Skill Info Deleted Successfully');

    }
}
