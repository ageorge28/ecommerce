<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PendingOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 'Pending')->orderBy('id', 'DESC')->get();
        return view('admin.orders.pending.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        return view('admin.orders.show', compact('orderItems', 'order'));
    }

    public function update(Order $order)
    {
        $order->status = 'Confirmed';
        $order->updated_at = Carbon::now();
        $order->save();
        
        $notification = array (
            'message' => 'Order Confirmed Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.orders.pending')->with($notification);
    }
}
