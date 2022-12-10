<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Order;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfirmedOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 'Confirmed')->orderBy('id', 'DESC')->get();
        return view('admin.orders.confirmed.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        return view('admin.orders.show', compact('orderItems', 'order'));
    }

    public function update(Order $order)
    {
        $order->status = 'Processing';
        $order->updated_at = Carbon::now();
        $order->save();
        
        $notification = array (
            'message' => 'Order Processed Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.orders.confirmed')->with($notification);
    }

    public function download(Order $order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        // return view('profile.invoice', compact('orderItems', 'order'));
        $pdf = PDF::loadView('admin.orders.invoice', compact('orderItems', 'order'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);

        return $pdf->download('invoice.pdf');
    }
}
