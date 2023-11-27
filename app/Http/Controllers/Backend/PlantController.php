<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $plant_category=Category::all();
        return view('Backend.Admin.Pages.Plant.create',compact('plant_category'));
    }



    public function store(Request $request){
        //dd($request);

     $validate=Validator::make($request->all(),[
        'plantname'=>'required',
        'plantprice'=>'required',
        'plantimage'=>'required',
        'category_name'=>'required',
        'plantdescription'=>'required'
     ]);

     if($validate->fails()){
        return redirect()->back()->withErrors($validate);
     }


     $file_name=null;
     if($request->hasFile('plantimage')){
        $photo=$request->file('plantimage');
        $file_name=date('YmdHis').'.'.$photo->getClientOriginalExtension();
        $photo->storeAs('uploads/',$file_name);
     }


        Plant::create([
            'plantname'=>$request->plantname,
            'plantprice'=>$request->plantprice,
            'plantimage'=>$file_name,
            'plantcategory'=>$request->category_name,
            'plantdescription'=>$request->plantdescription,
        ]);
    return redirect(route('admin_plants'));
    }


}

