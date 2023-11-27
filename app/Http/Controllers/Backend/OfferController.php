<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function list(){
        $Offers_data=Offers::paginate(5);
        return view('Backend.Admin.Pages.Offer.list',compact('Offers_data'));
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
