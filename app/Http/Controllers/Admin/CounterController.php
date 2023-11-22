<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    function editCounter(){
        $counterInfo = Counter::where('id', 1)->first();

        return view('admin.pages.counter',compact('counterInfo'));
    }

    function updateCounter(Request $request){

        $counterInfo = Counter::where('id', 1)->first();

        $request->validate([
            'clients_title' => 'required',
            'clients_number' => 'required',
            'product_title' => 'required',
            'product_number' => 'required',
            'project_title' => 'required',
            'project_number' => 'required',
            'student_title' => 'required',
            'student_number' => 'required'
        ]);

        if($request->hasFile('bg_image')){

            $request->validate([
                'bg_image' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$counterInfo->bg_image));

            $ext=$request->file('bg_image')->extension();
            $bg_image='counter_image'.'.'.$ext;

            $request->file('bg_image')->move(public_path('uploads/'),$bg_image);
            $counterInfo->bg_image = $bg_image;

        }

        $counterInfo->clients_title=$request->clients_title;
        $counterInfo->clients_number=$request->clients_number;
        $counterInfo->product_title=$request->product_title;
        $counterInfo->product_number=$request->product_number;
        $counterInfo->project_title=$request->project_title;
        $counterInfo->project_number=$request->project_number;
        $counterInfo->student_title=$request->student_title;
        $counterInfo->student_number=$request->student_number;
        $counterInfo->update();

        return redirect()->back()->with('success', 'Counter Info Updated Successfully');
    }
}
