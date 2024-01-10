<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CareTips;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CareTipsController extends Controller
{
    public function list()
    {
        $CareTips_data = CareTips::paginate(5);
        return view('Backend.Admin.Pages.CareTips.list', compact('CareTips_data'));
    }


//Delete

public function delete($id)
{
    $CareTips_data = CareTips::find($id);
    if ($CareTips_data) {
        $CareTips_data->delete();
    }

    notify()->success('Care&Tips Deleted Successfully.');
    return redirect()->back();
}


//Edit


public function edit($id)
{
    $Plant_item = Plant::all();

    $CareTips_data = CareTips::find($id);

    return view('Backend.Admin.Pages.CareTips.edit', compact('CareTips_data','Plant_item'));
}

//update

public function update(Request $request, $id)
{
    $CareTips_data = CareTips::find($id);

    if ($CareTips_data) {


        $CareTips_data->update([

            'plantname' => $request->plantname,
            'caretips' => $request->caretips,
            'pesticides'=>$request->pesticides,
        ]);

        notify()->success('Care&Tips updated successfully.');
        return redirect()->back();
    }
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
            'pesticides'=>'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }


        CareTips::create([
            'plantname' => $request->plantname,
            'caretips' => $request->caretips,
            'pesticides'=>$request->pesticides,
        ]);

        return redirect(route('admin_care_tips'));
    }
}
