<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $Plant_data=Plant::all();
        // dd('Hello Home');
        return view('Frontend.Pages.Home.home',compact('Plant_data'));
    }
}
