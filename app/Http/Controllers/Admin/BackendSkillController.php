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
        return view('admin.pages.skill.skill-list', compact('skills'));
    }


    public function create()
    {
        $skillInfo = Skill::where('id', 1)->first();
        return view('admin.pages.skill.skill-create', compact('skillInfo'));
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

        return redirect()->route('skill.index')->with('success', 'Skill Info Inserted Successfully');
    }


    public function show(string $id)
    {
        $skillId = Skill::where('id', $id)->first();
        $skillId->delete();

        return redirect()->route('skill.index')->with('success', 'Skill Info Deleted Successfully');
    }


    public function edit(string $id)
    {

        $skillInfo=Skill::find($id);
        return view('admin.pages.skill.skill-edit',compact('skillInfo'));
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

        return redirect()->route('skill.index')->with('success', 'Skill Info Updated Successfully');

    }


    // public function destroy($id)
    // {
    //     dd($id);
    //     $skillId = Skill::where('id', $id)->first();
    //     $skillId->delete();

    //     return redirect()->route('skill.index')->with('success', 'Skill Info Deleted Successfully');

    // }
}
