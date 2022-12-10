<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminReturnController extends Controller
{
    public function request()
    {
        $orders = Order::where('return_order', 1)->orderBy('id', 'DESC')->get();
        return view('admin.returns.request', compact('orders'));
    }

    public function approve(Order $order)
    {
        $order->update([
            'return_order' => 2
        ]);

        $notification = array (
            'message' => 'Order Returned Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function index()
    {
        $orders = Order::where('return_order', 2)->orderBy('id', 'DESC')->get();
        return view('admin.returns.index', compact('orders'));
    }
}
