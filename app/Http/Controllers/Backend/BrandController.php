<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
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
            'name_en' => 'required',
            'name_hin' => 'required',
            'image' => 'required'
        ],
        [
            'name_en.required' => 'Please input the brand name in English',
            'name_hin.required' => 'Please input the brand name in Hindi',            
        ]);

        $image = $request->file('image');
        $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('public/uploads/brands/' . $generated_image);

        Brand::insert([
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
            'image' => $generated_image
        ]);

        $notification = array (
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name_en' => 'required',
            'name_hin' => 'required',
        ]);

        if($request->file('image'))
        {
            unlink('public/uploads/brands/'. $brand->image);
            $image = $request->file('image');
            $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('public/uploads/brands/' . $generated_image);

            $brand->update([
                'name_en' => $request->name_en,
                'name_hin' => $request->name_hin,
                'slug_en' => Str::slug($request->name_en, '-'),
                'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
                'image' => $generated_image
            ]);
        }
        else
        {
            $brand->update([
                'name_en' => $request->name_en,
                'name_hin' => $request->name_hin,
                'slug_en' => Str::slug($request->name_en, '-'),
                'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-')
            ]);
        }

        $notification = array (
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.brands')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        unlink('public/uploads/brands/'. $brand->image);
        $brand->delete();
        
        $notification = array (
            'message' => 'Brand Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.brands')->with($notification);
    }
}
