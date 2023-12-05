<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function list(){
        $Offers_data=Offers::paginate(5);
        return view('Backend.Admin.Pages.Offer.list',compact('Offers_data'));
    }

//View

public function view($id)
{
    $Plant_item = Plant::all();

    $Offers_data = Offers::find($id);

    return view('Backend.Admin.Pages.Offer.view', compact('Offers_data','Plant_item'));
}


//Delete

public function delete($id)
{
    $Offers_data = Offers::find($id);
    if ( $Offers_data) {
        $Offers_data->delete();
    }

    notify()->success('Offer Deleted Successfully.');
    return redirect()->back();
}

//Edit


public function edit($id)
{
    $Plant_item = Plant::all();

    $Offers_data = Offers::find($id);

    return view('Backend.Admin.Pages.Offer.edit', compact('Offers_data','Plant_item'));
}

//update

public function update(Request $request, $id)
{
    $Offers_data = Offers::find($id);

    if ($Offers_data) {

        $Offers_data->update([

            'plantname'=>$request->plantname,
            'originalprice'=>$request->originalprice,
            'offerprice'=>$request->offerprice,
            'offerstatus'=>$request->offerstatus,
        ]);

        notify()->success('Offer updated successfully.');
        return redirect()->back();
    }
}



    public function create(){
        return view('Backend.Admin.Pages.Offer.create');
    }

    public function store(Request $request){

        $validate=Validator::make($request->all(),[

            'plantname'=>'required',
            'originalprice'=>'required',
            'offerprice'=>'required',
            'offerstatus'=>'required',

        ]);

        if($validate->fails()){
        return redirect()->back()->withErrors($validate);
        }
           
        Offers::create([
            'plantname'=>$request->plantname,
            'originalprice'=>$request->originalprice,
            'offerprice'=>$request->offerprice,
            'offerstatus'=>$request->offerstatus,
        ]);
        return redirect(route('admin_offers'));

    }

}
