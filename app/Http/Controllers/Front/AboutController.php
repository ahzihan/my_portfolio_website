<?php

namespace App\Http\Controllers\Front;

use App\Models\About;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function AboutPage(){
        $data['aboutInfo'] = About::where('id', 1)->first();
        $data['socialInfo'] = Social::where('id', 1)->first();

        return view('front.pages.about-page', $data);
    }
}
