<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonial.testimonial-list', compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.testimonial.testimonial-create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'person_name' => 'required',
            'person_designation' => 'required',
            'person_comment' => 'required',
        ]);

        if ($request->hasFile('person_image')) {

            $request->validate([
                'person_image' => 'image|mimes:png,jpg,jpeg,gif',
            ]);

            $ext = $request->file('person_image')->extension();
            $photoName = 'person_image' . '.' . $ext;

            $request->file('person_image')->move(public_path('uploads/'), $photoName);
        }

        if ($request->hasFile('bg_image')) {

            $request->validate([
                'bg_image' => 'image|mimes:png,jpg,jpeg,gif',
            ]);

            $ext = $request->file('bg_image')->extension();
            $bgName = 'bg_image' . '.' . $ext;

            $request->file('bg_image')->move(public_path('uploads/'), $bgName);
        }

        Testimonial::updateOrCreate([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'person_name' => $request->person_name,
            'person_designation' => $request->person_designation,
            'person_comment' => $request->person_comment,
            'person_image' => $photoName,
            'bg_image' => $bgName,
            'status' => $request->status,
        ]);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial Info Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testInfo = Testimonial::find($id);
        return view('admin.pages.testimonial.testimonial-edit', compact('testInfo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testInfo = Testimonial::find($id);

        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'person_name' => 'required',
            'person_designation' => 'required',
            'person_comment' => 'required',
        ]);

        if ($request->hasFile('person_image')) {

            $request->validate([
                'person_image' => 'image|mimes:png,jpg,jpeg,gif',
            ]);

            unlink(public_path('uploads/' . $testInfo->person_image));

            $ext = $request->file('person_image')->extension();
            $photoName = 'person_image' . '.' . $ext;

            $request->file('person_image')->move(public_path('uploads/'), $photoName);
            $testInfo->person_image = $photoName;
        }

        if ($request->hasFile('bg_image')) {

            $request->validate([
                'bg_image' => 'image|mimes:png,jpg,jpeg,gif',
            ]);

            unlink(public_path('uploads/' . $testInfo->bg_image));

            $ext = $request->file('bg_image')->extension();
            $bgName = 'bg_image' . '.' . $ext;

            $request->file('bg_image')->move(public_path('uploads/'), $bgName);
            $testInfo->bg_image = $bgName;

        }

        $testInfo->title = $request->title;
        $testInfo->sub_title = $request->sub_title;
        $testInfo->person_name = $request->person_name;
        $testInfo->person_designation = $request->person_designation;
        $testInfo->person_comment = $request->person_comment;
        $testInfo->status = $request->status;
        $testInfo->update();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial Info Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testInfo = Testimonial::where('id', $id)->first();

        $testInfo->delete();

        return redirect()->back()->with('success', 'Testimonial Info Deleted Successfully');

    }
}
