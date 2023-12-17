<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CareTips;
use Illuminate\Http\Request;

class CareTipsController extends Controller
{
    public function caretipslist()
    {

        $CareTips_data=CareTips::all();
        return view('Frontend.Pages.Care&Tips.Care&Tips',compact('CareTips_data'));
    }
}
