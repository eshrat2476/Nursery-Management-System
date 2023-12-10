<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        return view('Frontend.Pages.Cart.Cart');
    }


    public function fresh_cart(){
        $cart=session()->get('virtual_cart');
        if($cart){
            session()->forget('virtual_cart');
        }
        return redirect()->back();
    }


    public function addToCart($pId)
    {
        // dd($pId);
        $plant = Plant::find($pId);
        // dd($plant);
        $cart = session()->get('virtual_cart');
        if ($cart) {
            if (array_key_exists($pId, $cart)) {
                $cart[$pId]['quantity'] = $cart[$pId]['quantity'] + 1;
                $cart[$pId]['subtotal'] = $cart[$pId]['price'] * $cart[$pId]['quantity'];

                notify()->success('Quantity Update.');
                session()->put('virtual_cart', $cart);
                return redirect()->back();
            } else {
                $cart[$pId] = [
                    'id' => $pId,
                    'photo' => $plant->plantimage,
                    'name' => $plant->plantname,
                    'quantity' => 1,
                    'price' => $plant->plantprice,
                    'subtotal' => 1 * $plant->plantprice,
                ];

                notify()->success('Added to new card.');
                session()->put('virtual_cart', $cart);
                return redirect()->back();
            };
        } else {
            $new_cart[$pId] = [
                'id' => $pId,
                'photo' => $plant->plantimage,
                'name' => $plant->plantname,
                'quantity' => 1,
                'price' => $plant->plantprice,
                'subtotal' => 1 * $plant->plantprice,
            ];

            notify()->success('First Added to new card.');
            session()->put('virtual_cart', $new_cart);
            return redirect()->back();
        };

        return view('Frontend.Pages.Cart');
    }


    public function checkout()
    {
        return view('Frontend.Pages.Checkout.checkout');
    }
}
