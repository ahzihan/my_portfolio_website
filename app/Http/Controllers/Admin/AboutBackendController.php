<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutBackendController extends Controller
{

    public function index()
    {
        $aboutInfo = About::where('id', 1)->first();
        return view('admin.pages.about', compact('aboutInfo'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $aboutInfo = About::where('id', 1)->first();

        $request->validate([
            'title' => 'required',
            'name' => 'required'
        ]);

        if($request->hasFile('image_one')){

            $request->validate([
                'image_one' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$aboutInfo->image_one));

            $ext=$request->file('image_one')->extension();
            $photoName='image_one'.'.'.$ext;

            $request->file('image_one')->move(public_path('uploads/'),$photoName);
            $aboutInfo->image_one = $photoName;

        }

        $aboutInfo->title=$request->title;
        $aboutInfo->sub_title=$request->sub_title;
        $aboutInfo->name=$request->name;
        $aboutInfo->email=$request->email;
        $aboutInfo->phone=$request->phone;
        $aboutInfo->sort_description=$request->sort_description;
        $aboutInfo->long_description=$request->long_description;
        $aboutInfo->update();

        return redirect()->back()->with('success', 'About Info Updated Successfully');
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
