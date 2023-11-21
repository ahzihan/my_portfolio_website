<?php

namespace App\Http\Controllers\Front;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function PortfolioPage(){
        $data['socialInfo'] = Social::where('id', 1)->first();

        return view('front.pages.portfolio-page',$data);
    }
}
