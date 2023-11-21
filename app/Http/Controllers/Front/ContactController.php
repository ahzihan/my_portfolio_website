<?php

namespace App\Http\Controllers\Front;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function ContactPage(){
        $data['socialInfo'] = Social::where('id', 1)->first();

        return view('front.pages.contact-page',$data);
    }
}
