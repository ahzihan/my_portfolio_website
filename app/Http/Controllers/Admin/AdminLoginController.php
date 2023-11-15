<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Mail\WebsiteMail;
use App\Models\Admin as AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminLoginController extends Controller
{
    function login(){
        return view('admin.pages.login');
    }

    function loginSubmit(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credential=[
            'email' => $request->email,
            'password' => $request->password,
        ];


        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('dashboard');
        }else{
           return redirect()->route('login')->with('error', 'Invalid Info!, Please Try Again');
        }

    }

    function logOut(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    function forgetPassword(){
        return view('admin.pages.forget-password');
    }

    function forgetPasswordSubmit(Request $request){

        $request->validate([
            'email' => 'required|email'
        ]);

        $admin=AdminModel::where('email',$request->email)->first();

        if(!$admin){
            return redirect()->back()->with('error', 'Your email address does not match!');
        }

        $token=hash('sha256',time());

        $admin->token=$token;
        $admin->update();

        $reset_link=url('admin/reset-password/'.$token.'/'.$request->email);
        $subject="Reset Password Link";
        $message="Please, Reset Your Password ";
        $message.='<a href="'.$reset_link.'">Click Here</a>';

        Mail::to($request->email)->send(new WebsiteMail($subject,$message));
        return redirect()->route('login')->with('success', 'Please, Check your email and flow the steps there');

    }

    function resetPassword($token, $email){
        $adminInfo = AdminModel::where('token',$token)->where('email', $email)->first();

        if(!$adminInfo){
            return redirect()->route('login');
        }

        return view('admin.pages.reset-password',compact('token','email'));
    }

    function resetPasswordSubmit(Request $request){

        $request->validate([
            'password' => 'required',
            'reset_password' => 'required|same:password',
        ]);

        $adminInfo = AdminModel::where('token', $request->token)->where('email', $request->email)->first();

        $adminInfo->password=Hash::make($request->password);
        $adminInfo->token='';
        $adminInfo->update();

        return redirect()->route('login')->with('success', 'Password Reset Successfully!');
    }

}
