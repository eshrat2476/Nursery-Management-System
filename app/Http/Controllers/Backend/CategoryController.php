<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function list()
    {
        $Category_data = Category::paginate(5);
        return view('Backend.Admin.Pages.Category.list', compact('Category_data'));
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
