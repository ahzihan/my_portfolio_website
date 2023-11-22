<?php

namespace App\Http\Controllers\Front;

use App\Models\About;
use App\Models\Skill;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Counter;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function HomePage(){

        $data['bannerInfo'] = Banner::where('id', 1)->first();
        $data['aboutInfo'] = About::where('id', 1)->first();
        $data['socialInfo'] = Social::where('id', 1)->first();
        $data['skillLeft'] = Skill::where('position','Left')->get();
        $data['skillRight'] = Skill::where('position','Right')->get();
        $data['eduInfo'] = Education::orderBy('item_order', 'asc')->get();
        $data['expInfo'] = Experience::orderBy('item_order', 'asc')->get();
        $data['counterInfo'] = Counter::where('id', 1)->first();


        return view('front.pages.home-page',$data);
    }

}
