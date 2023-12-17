<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offerlist(){

        $Offers_data=Offers::all();
        return view('Frontend.Pages.Offers.Offers',compact('Offers_data')); 
    
    }
}
