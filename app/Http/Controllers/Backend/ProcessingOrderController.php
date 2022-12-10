<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcessingOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 'Processing')->orderBy('id', 'DESC')->get();
        return view('admin.orders.picked.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        return view('admin.orders.show', compact('orderItems', 'order'));
    }

    public function update(Order $order)
    {
        $order->status = 'Picked';
        $order->updated_at = Carbon::now();
        $order->save();
        
        $notification = array (
            'message' => 'Order Picked Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.orders.processing')->with($notification);
    }

}
