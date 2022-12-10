<?php

namespace App\Http\Controllers\Backend;

use App\Models\ShippingState;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ShippingCity;
use App\Models\ShippingDistrict;
use Carbon\Carbon;

class ShippingStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippingStates = ShippingState::orderBy('id', 'DESC')->get();
        $shippingCities = ShippingCity::orderBy('name', 'ASC')->get();
        $shippingDistricts = ShippingDistrict::orderBy('name', 'ASC')->get();
        return view('admin.shipping.states.index', compact('shippingCities', 'shippingDistricts', 'shippingStates'));
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
            'district_id' => 'required',
            'name' => 'required',
        ]);

        ShippingState::insert([
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Shipping State Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingState  $shippingState
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingState $shippingState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingState  $shippingState
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingState $shippingState)
    {
        $shippingCities = ShippingCity::orderBy('name', 'ASC')->get();
        $shippingDistricts = ShippingDistrict::orderBy('name', 'ASC')->get();
        return view('admin.shipping.states.edit', compact('shippingState', 'shippingCities', 'shippingDistricts'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingState  $shippingState
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingState $shippingState)
    {
        $request->validate([
            'name' => 'required',
            'city_id' => 'required',
            'district_id' => 'required',            
        ]);

       $shippingState->update([
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'name' => $request->name,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Shipping State Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.shipping.states')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingState  $shippingState
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingState $shippingState)
    {
        $shippingState->delete();
        
        $notification = array (
            'message' => 'Shipping State Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.shipping.states')->with($notification);
    }

    public function ajax($district_id)
    {
        $shippingStates = ShippingState::where('district_id', $district_id)->orderBy('name', 'ASC')->get();
        return json_encode($shippingStates);
    }
}
