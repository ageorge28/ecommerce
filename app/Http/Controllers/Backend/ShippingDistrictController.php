<?php

namespace App\Http\Controllers\Backend;

use App\Models\ShippingDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ShippingCity;
use Carbon\Carbon;

class ShippingDistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippingDistricts = ShippingDistrict::orderBy('id', 'DESC')->get();
        $shippingCities = ShippingCity::orderBy('name', 'ASC')->get();
        return view('admin.shipping.districts.index', compact('shippingDistricts', 'shippingCities'));
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
            'city_id' => 'required',
            'name' => 'required',
        ]);

        ShippingDistrict::insert([
            'city_id' => $request->city_id,
            'name' => $request->name,
        ]);

        $notification = array (
            'message' => 'Shipping District Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingDistrict  $shippingDistrict
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingDistrict $shippingDistrict)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingDistrict  $shippingDistrict
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingDistrict $shippingDistrict)
    {
        $shippingCities = ShippingCity::orderBy('name', 'ASC')->get();
        return view('admin.shipping.districts.edit', compact('shippingDistrict', 'shippingCities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingDistrict  $shippingDistrict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingDistrict $shippingDistrict)
    {
        $request->validate([
            'name' => 'required',
            'city_id' => 'required'
        ]);

       $shippingDistrict->update([
            'city_id' => $request->city_id,
            'name' => $request->name,
        ]);

        $notification = array (
            'message' => 'Shipping District Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.shipping.districts')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingDistrict  $shippingDistrict
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingDistrict $shippingDistrict)
    {
        $shippingDistrict->delete();
        
        $notification = array (
            'message' => 'Shipping District Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.shipping.districts')->with($notification);
    }

    public function ajax($city_id)
    {
        $shippingDistricts = ShippingDistrict::where('city_id', $city_id)->orderBy('name', 'ASC')->get();
        return json_encode($shippingDistricts);
    }
}
