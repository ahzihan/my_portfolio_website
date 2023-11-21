<?php

namespace App\Http\Controllers\Front;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function ServicePage(){
        $data['socialInfo'] = Social::where('id', 1)->first();

        return view('front.pages.service-page',$data);
    }
}
