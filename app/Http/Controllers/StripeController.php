<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Mail\OrderMail;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class StripeController extends Controller
{
    public function order(Request $request)
    {

        if(session()->has('coupon'))
        {
            $total_amount = session()->get('coupon')['total_amount'];
        }
        else
        {
            $total_amount = round(Cart::total());
        }
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey('sk_test_fZUhra1PKXcfXe3JJIBfFaHD00dCZczk1s');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => $total_amount * 100,
            'currency' => 'INR',
            'description' => 'Easy Online Store',
            'source' => $token,
            'metadata' => ['order_id' => uniqid()],
        ]);

        // dd($charge);

        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'state_id' => $request->state_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'postcode' => $request->postcode,
            'notes' => $request->notes,
            'payment_type' => 'Stripe',
            'payment_method' => $charge->payment_method,
            'transaction_id' => $charge->balance_transaction,
            'currency' => $charge->currency,
            'amount' => $total_amount,
            'order_number' => $charge->metadata->order_id,
            'invoice_number' => 'EOS' . mt_rand(10000000, 99999999),
            'order_date' => Carbon::now()->format('d F Y'), 
            'order_month' => Carbon::now()->format('F'), 
            'order_year' => Carbon::now()->format('Y'), 
            'status' => 'Pending',
            'created_at' => Carbon::now()          
        ]);

        // Send Email
        $order = Order::findOrFail($order_id);
        $data = [
            'invoice_number' => $order->invoice_number,
            'amount' => $order->amount,
            'name' => $order->name,
            'email' => $order->email
        ];
        Mail::to($request->email)->send(new OrderMail($data));

        $carts = Cart::content();
        foreach($carts as $cart)
        {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'color' => $cart->options->color,
                'size' => $cart->options->size,
                'quantity' => $cart->qty,
                'price' => $cart->price,
                'created_at' => Carbon::now()
            ]);
        }

        if(session()->has('coupon'))
        {
            session()->forget('coupon');
        }

        Cart::destroy();    

        $notification = array (
            'message' => 'Order Placed Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }
}
