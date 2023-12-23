<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CareTips;
use App\Models\Category;
use App\Models\Offers;
use App\Models\Order;
use App\Models\Plant;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('Backend.Admin.Master');
    }

    public function dashboardhome(){

    $plantsCount=Plant::all()->count();
    $plantsCategoryCount=Category::all()->count();
    $ordersCount=Order::all()->count();
    $userCount=User::all()->count();
    $offersCount=Offers::all()->count();
    $careCount=CareTips::all()->count();

        return view('Backend.Admin.Pages.Home.Dashboard',compact('plantsCount','plantsCategoryCount','ordersCount','userCount','offersCount','careCount'));
    }
}
