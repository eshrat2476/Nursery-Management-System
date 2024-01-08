<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function list()
    {
        $Category_data = Category::paginate(5);
        return view('Backend.Admin.Pages.Category.list', compact('Category_data'));
    }



    //Delete

    public function delete($id)
    {
        $Category_data = Category::find($id);
        if ($Category_data) {
            $Category_data->delete();
        }

        notify()->success('Category Deleted Successfully.');
        return redirect()->back();
    }

    public function print()
    {
        $Category_data = Category::all();
        return view('Backend.Admin.Pages.Category.print', compact('Category_data'));
    }

    //Edit


    public function edit($id)
    {
        $Plant_item = Plant::all();

        $Category_data = Category::find($id);

        return view('Backend.Admin.Pages.Category.edit', compact('Category_data', 'Plant_item'));
    }

    //update

    public function update(Request $request, $id)
    {
        $Category_data = Category::find($id);

        if ($Category_data) {


            $Category_data->update([

                'categoryname' => $request->categoryname,
                'categorydescription' => $request->categorydescription,
            ]);

            notify()->success('Plant updated successfully.');
            return redirect()->back();
        }
    }




    public function create()
    {
        return view('Backend.Admin.Pages.Category.create');
    }





    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'categoryname' => 'required',
            'categorydescription' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }



        Category::create([
            'categoryname' => $request->categoryname,
            'categorydescription' => $request->categorydescription,
        ]);
        return redirect(route('admin_categories'));
    }
}
