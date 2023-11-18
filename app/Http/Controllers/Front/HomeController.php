<?php

namespace App\Http\Controllers\Front;

use App\Models\About;
use App\Models\Banner;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;

class HomeController extends Controller
{
    public function HomePage(){

        $data['bannerInfo'] = Banner::where('id', 1)->first();
        $data['aboutInfo'] = About::where('id', 1)->first();
        $data['socialInfo'] = Social::where('id', 1)->first();
        $data['skillLeft'] = Skill::where('position','Left')->get();
        $data['skillRight'] = Skill::where('position','Right')->get();

        return view('front.pages.home-page',$data);
    }

}
