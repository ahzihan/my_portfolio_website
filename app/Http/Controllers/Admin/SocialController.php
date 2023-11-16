<?php

namespace App\Http\Controllers\Admin;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{

    public function index()
    {
        $socialInfo = Social::where('id', 1)->first();
        return view('admin.pages.social', compact('socialInfo'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $socialInfo = Social::where('id', 1)->first();

        $socialInfo->facebook=$request->facebook;
        $socialInfo->linkedin=$request->linkedin;
        $socialInfo->twitter=$request->twitter;
        $socialInfo->github=$request->github;
        $socialInfo->youtube=$request->youtube;
        $socialInfo->instagram=$request->instagram;
        $socialInfo->weblink=$request->weblink;
        $socialInfo->update();

        return redirect()->back()->with('success', 'Social Info Updated Successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
