<?php

namespace App\Http\Controllers\Front;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function BlogPage(){
        $data['socialInfo'] = Social::where('id', 1)->first();

        return view('front.pages.blog-page',$data);
    }
}
