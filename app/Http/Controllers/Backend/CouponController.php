<?php

namespace App\Http\Controllers\Backend;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('id', 'DESC')->get();
        return view('admin.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'discount' => 'required',
            'validity' => 'required'
        ]);

        Coupon::insert([
            'name' => strtoupper($request->name),
            'discount' => $request->discount,
            'validity' => $request->validity,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Coupon Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        return view('admin.coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'name' => 'required',
            'discount' => 'required',
            'validity' => 'required'
        ]);

        $coupon->update([
            'name' => strtoupper($request->name),
            'discount' => $request->discount,
            'validity' => $request->validity,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Coupon Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.coupons')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        
        $notification = array (
            'message' => 'Coupon Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.coupons')->with($notification);
    }
}
