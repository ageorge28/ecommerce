<?php

namespace App\Http\Controllers\Backend;

use DateTime;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.reports.index');
    }

    public function date(Request $request)
    {
        $date = new DateTime($request->date);
        $formatted_date = $date->format('d F Y');
        $orders = Order::where('order_date', $formatted_date)->orderBy('id', 'DESC')->get();
        return view('admin.reports.show', compact('orders'));
    }

    public function month(Request $request)
    {
        $month= $request->month;
        $year = $request->year_month;
        $orders = Order::where('order_month', $month)->where('order_year', $year)->orderBy('id', 'DESC')->get();
        return view('admin.reports.show', compact('orders'));
    }

    public function year(Request $request)
    {
        $year = $request->year;
        $orders = Order::where('order_year', $year)->orderBy('id', 'DESC')->get();
        return view('admin.reports.show', compact('orders'));
    }
}
