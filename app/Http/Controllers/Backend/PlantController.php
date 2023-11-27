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
        $Plant_data = Plant::Paginate(5);
        return view('Backend.Admin.Pages.Plant.list', compact('Plant_data'));
    }

    //Delete//

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

            $fileName = $Plant_item->plantimage;
            if ($request->hasFile('plantimage')) {
                $file = $request->file('plantimage');
                $file_name = date('YmdHis') . '.' . $file->getClientOriginalExtension();

                $file->storeAs('uploads/', $file_name);
            }

            $Plant_item->update([
                'plantname' => $request->plantname,
                'plantprice' => $request->plantprice,
                'plantimage' => $file_name,
                'plantcategory' => $request->category_name,
                'plantdescription' => $request->plantdescription
            ]);

            notify()->success('Product updated successfully.');
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
            'category_name' => 'required',
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
            'plantimage' => $file_name,
            'plantcategory' => $request->category_name,
            'plantdescription' => $request->plantdescription,
        ]);
        return redirect(route('admin_plants'));
    }
}
