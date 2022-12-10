<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('profile.orders', compact('orders'));
    }

    public function show(Order $order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        return view('profile.order', compact('orderItems', 'order'));
    }

    public function invoice(Order $order)
    {
        $orderItems = OrderItem::where('order_id', $order->id)->get();
        // return view('profile.invoice', compact('orderItems', 'order'));
        $pdf = PDF::loadView('profile.invoice', compact('orderItems', 'order'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);

        return $pdf->download('invoice.pdf');
    }

    public function return(Order $order, Request $request)
    {
        $order->update([
            'return_date' => Carbon::now('d F Y'),
            'return_reason' => $request->return_reason,
            'return_order' => 1
        ]);

        $notification = array (
            'message' => 'Return Request Sent Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.orders')->with($notification);
    }

    public function cancelled()
    {
        $orders = Order::where('user_id', Auth::id())->where('status', 'Cancelled')->orderBy('order_date', 'DESC')->get();
        return view('profile.cancelled', compact('orders'));
    }

    public function track(Request $request)
    {
        $invoice_number = $request->invoice_number;
        $order = Order::where('invoice_number', $invoice_number)->first();

        if($order)
        {
            return view('profile.track', compact('order'));
        }
        else 
        {
            $notification = array (
                'message' => 'Invoice Number Is Invalid',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
