<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlantController extends Controller
{
    public function list(){
        $Plant_data=Plant::Paginate(2);
        return view('Backend.Admin.Pages.Plant.list',compact('Plant_data'));
    }


    public function create(){
        return view('Backend.Admin.Pages.Plant.create');
    }



    public function store(Request $request){

     $validate=Validator::make($request->all(),[
        'plantname'=>'required',
        'plantprice'=>'required',
        'plantimage'=>'required',
        'plantdescription'=>'required'
     ]);

     if($validate->fails()){
        return redirect()->back()->withErrors($validate);
     }


        Plant::create([
            'plantname'=>$request->plantname,
            'plantprice'=>$request->plantprice,
            'plantimage'=>$request->plantimage,
            'plantdescription'=>$request->plantdescription,
        ]);
    return redirect(route('admin_plants'));
    }


}

