<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        // dd('Hello Home');
        return view('Frontend.Pages.Home.home');
    }
}
