<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderPlace(Request $request)
    {
        //validation here

        // dd($request->all());

        $cart = session()->get('virtual_cart');

        //create order
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'status' => 'pending',
            'total_price' => array_sum(array_column($cart, 'subtotal')),
            'address' => $request->address,
            'receiver_mobile' => $request->phone_number,
            'receiver_name' => $request->name,
            'transaction_id' => date('Ymdhis'),
            'payment_status' => 'null',
            'payment_method' => $request->payment_method,
            'receiver_email' => $request->email_address,
        ]);


        // dd($cart);
        //create order details
        foreach ($cart as $key => $item) {
            OrderDetails::create([
                'order_id' => $order->id,
                // 'product_id'=>$key,
                'plant_id' => $item['id'],
                'quantity' => $item['quantity'],
                'subtotal' => $item['subtotal'],
            ]);
        }

        session()->forget('virtual_cart');

        $this->payment($order);


        notify()->success('Order placed success.');
        return redirect()->back();
    }

    public function payment($order)
    {
        // dd($order);

        $post_data = array();
        $post_data['total_amount'] = $order->total_price; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $order->transaction_id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $order->receiver_name;
        $post_data['cus_email'] = $order->receiver_email;
        $post_data['cus_add1'] = $order->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $order->receiver_mobile;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        // dd($post_data);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    public function orderdetails($id)
    {
        // dd('Hello');
        $order = Order::with('details')->find($id);
        $orderdetails = OrderDetails::where('order_id', $id)->get();
        // dd($orderdetails);
        return view('Frontend.Pages.OrderDetails.OrderDetails', compact('order', 'orderdetails'));
    }
}
