<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function showlist(){
        $Plant_data=Plant::all();
        return view('Frontend.Pages.Plants.Plants',compact('Plant_data'));
    }
}
