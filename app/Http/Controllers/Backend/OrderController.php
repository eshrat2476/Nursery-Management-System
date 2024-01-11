<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\deliverymen;
use App\Models\Order;
use App\Models\Plant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        // dd('hi');
        $deliveryman = deliverymen::all();
        $order_data = Order::all();
        // dd($order_data);
        return view('Backend.Admin.Pages.Order.list', compact('order_data', 'deliveryman'));
    }


    public function order_details($id)
    {
        $order = Order::with('details')->find($id);
        //dd($order);
        return view('Frontend.Pages.OrderDetails.OrderDetails', compact('order'));
    }


    public function search(Request $request)
    {
        // dd(request()->all())

        if ($request->search) {
            $plants = Order::where('id', 'LIKE', '%' . $request->search . '%')->get();
            //select * from Plants where id like % rose %;
        } else {
            $plants = Order::all();
        }
        return redirect()->back();
    }




    public function view($id)
    {

        $deliveryman = deliverymen::all();
        // dd($deliveryman) ;
        $order = Order::with('details')->find($id);
        // dd($order);
        return view('Backend.Admin.Pages.Order.view', compact('order', 'deliveryman'));
    }



    public function status(Request $request, $id)
    {
        // dd('hi');
        $order = Order::find($id);
        // dd($order);
        $order->update([
            'status' => ($request->deliveryMan),
        ]);
        return view('Backend.Admin.Pages.Order.view', compact('order'));
    }



    public function deliveryman(Request $request, $id)
    {
        // $request->all();
        //  dd($request->all());
        $order = Order::find($id);
        // dd($order);
        $order->update([
            'deliverymen' => $request->deliveryMan,
            'status' => $request->status,


        ]);
        return redirect()->back();
    }
}
