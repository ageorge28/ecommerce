<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReturnController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->where('return_reason', '!=', NULL)->orderBy('order_date', 'DESC')->get();
        return view('profile.returns', compact('orders'));
    }
}
