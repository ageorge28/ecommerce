<?php

namespace App\Http\Controllers\Backend;

use App\Models\ShippingCity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ShippingCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippingCities = ShippingCity::orderBy('id', 'DESC')->get();
        return view('admin.shipping.cities.index', compact('shippingCities'));
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
            'name' => 'required'
        ]);

        ShippingCity::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Shipping City Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingCity  $shippingCity
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingCity $shippingCity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingCity  $shippingCity
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingCity $shippingCity)
    {
        return view('admin.shipping.cities.edit', compact('shippingCity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingCity  $shippingCity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingCity $shippingCity)
    {
        $request->validate([
            'name' => 'required',
        ]);

       $shippingCity->update([
            'name' => $request->name,
        ]);

        $notification = array (
            'message' => 'Shipping City Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.shipping.cities')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingCity  $shippingCity
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingCity $shippingCity)
    {
        $shippingCity->delete();
        
        $notification = array (
            'message' => 'Shipping City Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.shipping.cities')->with($notification);
    }
}
