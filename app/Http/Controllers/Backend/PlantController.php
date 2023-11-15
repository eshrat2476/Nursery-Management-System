<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function list(){
        $Plant_data=Plant::Paginate(10);
        return view('Backend.Admin.Pages.Plant.list',compact('Plant_data'));
    }


    public function create(){
        return view('Backend.Admin.Pages.Plant.create');
    }

    public function store(Request $request){
        Plant::create([
            'plantname'=>$request->plantname,
            'plantprice'=>$request->plantprice,
            'plantimage'=>$request->plantimage,
            'plantdescription'=>$request->plantdescription,
        ]);
    return redirect(route('admin_plants'));
    }


}

