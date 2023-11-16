<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePage(){
        $bannerInfo = Banner::where('id', 1)->first();
        return view('front.pages.home-page',compact('bannerInfo'));
    }
}
