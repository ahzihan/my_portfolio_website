<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    function editProfile(){
        return view('admin.pages.profile');
    }

    function updateProfile(Request $request){

        $adminInfo = Admin::where('email', Auth::guard('admin')->user()->email)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        if($request->password != ''){
            $request->validate([
                'password' => 'required',
                'reset_password' => 'required|same:password',
            ]);

            $adminInfo->password = Hash::make($request->name);

        }

        if($request->hasFile('photo')){

            $request->validate([
                'photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$adminInfo->photo));

            $ext=$request->file('photo')->extension();
            $photoName='admin'.'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$photoName);
            $adminInfo->photo = $photoName;

        }

        $adminInfo->name=$request->name;
        $adminInfo->email=$request->email;
        $adminInfo->update();

        return redirect()->back()->with('success', 'Profile Info Updated Successfully');
    }

}
