<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('Backend.Admin.Master');
    }

    public function dashboardhome(){
        return view('Backend.Admin.Pages.Home.Dashboard');
    }
}
