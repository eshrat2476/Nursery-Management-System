<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\deliverymen;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{

    public function list(){
        $Delivery_data=deliverymen::all();
        return view('Backend.Admin.Pages.Delivery.list',compact('Delivery_data'));
    }


    public function create(){
        return view('Backend.Admin.Pages.Delivery.create');
    }



    public function store(Request $request)
    {
        // dd($request);
        deliverymen::create([
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,



        ]);
        return redirect(Route('Delivery.list'));
    }
}
