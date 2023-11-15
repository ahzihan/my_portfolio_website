<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomeController extends Controller
{
    public function HomePage(){
        return view('front.pages.home-page');
    }
}
