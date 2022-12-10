<?php

namespace App\Http\Controllers;

use App\Models\ShippingCity;
use Illuminate\Http\Request;
use App\Models\ShippingState;
use App\Models\ShippingDistrict;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function create()
    {
        if (Auth::check())
        {
            if(Cart::total() > 0)
            {
                $carts = Cart::content();
                $cartQuantity = Cart::count();
                $cartTotal = Cart::total();
                $shippingCities = ShippingCity::orderBy('name', 'ASC')->get();
                $shippingDistricts = ShippingDistrict::orderBy('name', 'ASC')->get();
                $shippingStates = ShippingState::orderBy('name', 'ASC')->get();
                return view('checkout.create', compact('carts', 'cartQuantity', 'cartTotal', 'shippingCities', 'shippingDistricts' , 'shippingStates'));
            }
            else
            {
                $notification = array (
                    'message' => 'Please add atleast 1 item to your shopping cart',
                    'alert-type' => 'error'
                );
                return redirect()->route('home')->with($notification);               
            }
        }
        else
        {
            $notification = array (
                'message' => 'Please log in first',
                'alert-type' => 'error'
            );
            return redirect()->route('login')->with($notification);
        }
    }

    public function store(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['postcode'] = $request->postcode;
        $data['city_id'] = $request->city_id;
        $data['district_id'] = $request->district_id;
        $data['state_id'] = $request->state_id;
        $data['notes'] = $request->notes;

        $cartTotal = Cart::total();

        if($request->payment_method == 'stripe')
        {
            return view('payment.stripe', compact('data', 'cartTotal'));
        }
        elseif($request->payment_method == 'card')
        {
            return view('payment.card', compact('data'));
        }
        elseif($request->payment_method == 'cash')
        {
            return view('payment.cash', compact('data', 'cartTotal'));
        }

    }

}
