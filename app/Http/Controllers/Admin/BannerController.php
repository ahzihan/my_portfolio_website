<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        $bannerInfo = Banner::where('id', 1)->first();

        return view('admin.pages.banner', compact('bannerInfo'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $bannerInfo = Banner::where('id', 1)->first();

        $request->validate([
            'bnr_person_name' => 'required'
        ]);

        if($request->hasFile('bnr_photo')){

            $request->validate([
                'bnr_photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$bannerInfo->bnr_photo));

            $ext=$request->file('bnr_photo')->extension();
            $photoName='banner_img'.'.'.$ext;

            $request->file('bnr_photo')->move(public_path('uploads/'),$photoName);
            $bannerInfo->bnr_photo = $photoName;

        }

        $bannerInfo->bnr_title=$request->bnr_title;
        $bannerInfo->bnr_person_name=$request->bnr_person_name;
        $bannerInfo->bnr_person_designation=$request->bnr_person_designation;
        $bannerInfo->bnr_description=$request->bnr_description;
        $bannerInfo->bnr_btn_text=$request->bnr_btn_text;
        $bannerInfo->bnr_btn_url=$request->bnr_btn_url;
        $bannerInfo->update();

        return redirect()->back()->with('success', 'Banner Info Updated Successfully');
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
