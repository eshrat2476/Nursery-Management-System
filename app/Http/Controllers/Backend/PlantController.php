<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlantController extends Controller


{
    public function list()
    {
        $Plant_data = Plant::with('category')->Paginate(5);
        // dd($Plant_data);
        return view('Backend.Admin.Pages.Plant.list', compact('Plant_data'));
    }


    public function print()
    {
        $Plant_data = Plant::all();
        return view('Backend.Admin.Pages.Plant.print', compact('Plant_data'));
    }


    //View

    public function view($id)
    {

        $Plant_item = Plant::find($id);

        $Category_data = Category::all();

        return view('Backend.Admin.Pages.Plant.view', compact('Category_data', 'Plant_item'));
    }





    //Delete

    public function delete($id)
    {
        $Plant_item = Plant::find($id);
        if ($Plant_item) {
            $Plant_item->delete();
        }

        notify()->success('Plant Deleted Successfully.');
        return redirect()->back();
    }

    //Edit


    public function edit($id)
    {
        $Plant_item = Plant::find($id);

        $Category_data = Category::all();

        return view('Backend.Admin.Pages.Plant.edit', compact('Category_data', 'Plant_item'));
    }

    //update

    public function update(Request $request, $id)
    {
        $Plant_item = Plant::find($id);

        if ($Plant_item) {

            $file_name = $Plant_item->plantimage;
            if ($request->hasFile('plantimage')) {
                $file = $request->file('plantimage');
                $file_name = date('YmdHis') . '.' . $file->getClientOriginalExtension();

                $file->storeAs('uploads/', $file_name);
            }

            $Plant_item->update([
                'plantname' => $request->plantname,
                'plantprice' => $request->plantprice,
                'plantimage' => $file_name,
                // 'plantcategory' => $request->categoryname,
                'plantdescription' => $request->plantdescription
            ]);

            notify()->success('Plant updated successfully.');
            return redirect()->back();
        }
    }


    public function create()
    {
        $plant_category = Category::all();
        return view('Backend.Admin.Pages.Plant.create', compact('plant_category'));
    }



    public function store(Request $request)
    {
        //dd($request);

        $validate = Validator::make($request->all(), [
            'plantname' => 'required',
            'plantprice' => 'required',
            'plantimage' => 'required',
            'category_id' => 'required',                 //input field name tarpor required
            'plantdescription' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }


        $file_name = null;
        if ($request->hasFile('plantimage')) {
            $photo = $request->file('plantimage');
            $file_name = date('YmdHis') . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('uploads/', $file_name);
        }



        Plant::create([
            'plantname' => $request->plantname,
            'plantprice' => $request->plantprice,
            'plantimage' => $file_name,                           //column name=>form input name
            'plantcategory' => $request->category_id,
            'plantdescription' => $request->plantdescription,
        ]);
        return redirect(route('admin_plants'));
    }
}
