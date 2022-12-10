<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CancelledOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 'Cancelled')->orderBy('id', 'DESC')->get();
        return view('admin.orders.cancelled.index', compact('orders'));
    }
    
    public function show(Order $order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        return view('admin.orders.show', compact('orderItems', 'order'));
    }
}
