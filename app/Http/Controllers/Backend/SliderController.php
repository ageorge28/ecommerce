<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
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
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(870, 370)->save('public/uploads/slider/' . $generated_image);

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $generated_image,
            'status' => 1
        ]);

        $notification = array (
            'message' => 'Slide Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if($request->file('image'))
        {
            unlink('public/uploads/slider/'. $slider->image);
            $image = $request->file('image');
            $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(870, 370)->save('public/uploads/slider/' . $generated_image);

            $slider->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $generated_image
            ]);
        }
        else
        {
            $slider->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        }

        $notification = array (
            'message' => 'Slider Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.sliders')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        unlink('public/uploads/slider/'. $slider->image);
        $slider->delete();
        
        $notification = array (
            'message' => 'Slide Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.sliders')->with($notification);
    }

    public function activate(Slider $slider)
    {
        $slider->status = 1;
        $slider->save();

        $notification = array (
            'message' => 'Slide Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deactivate(Slider $slider)
    {
        $slider->status = 0;
        $slider->save();

        $notification = array (
            'message' => 'Slide Dectivated Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }
}
