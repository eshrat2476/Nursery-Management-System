<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CareTips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CareTipsController extends Controller
{
    public function list()
    {
        $CareTips_data = CareTips::paginate(2);
        return view('Backend.Admin.Pages.CareTips.list', compact('CareTips_data'));
    }



    public function create()
    {
        return view('Backend.Admin.Pages.CareTips.create');
    }

    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [

            'plantname' => 'required',
            'caretips' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }


        CareTips::create([
            'plantname' => $request->plantname,
            'caretips' => $request->caretips,
        ]);

        return redirect(route('admin_care_tips'));
    }
}
