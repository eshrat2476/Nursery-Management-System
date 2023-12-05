<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        $order_data = Order::all();
        return view('Backend.Admin.Pages.Order.list',compact('order_data'));
    }
}
