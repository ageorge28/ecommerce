<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ShippedOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 'Shipped')->orderBy('id', 'DESC')->get();
        return view('admin.orders.shipped.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        return view('admin.orders.show', compact('orderItems', 'order'));
    }

    public function update(Order $order)
    {
        $order->status = 'Delivered';
        $order->updated_at = Carbon::now();
        $order->save();
        
        $orderItems = OrderItem::where('order_id', $order->id)->get();

        foreach($orderItems as $item)
        {
            Product::findOrFail($item->product_id)->update([
                'quantity' => DB::raw('quantity-' . $item->quantity)
            ]);
        }

        $notification = array (
            'message' => 'Order Delivered Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.orders.shipped')->with($notification);
    }
}
