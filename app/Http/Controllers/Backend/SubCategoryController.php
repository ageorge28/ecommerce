<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        $categories = Category::all();
        return view('admin.subcategories.index', compact('subcategories', 'categories'));
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
            'category_id' => 'required',
            'name_en' => 'required',
            'name_hin' => 'required'
        ]);

        SubCategory::insert([
            'category_id' => $request->category_id,
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
        ]);

        $notification = array (
            'message' => 'Sub Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.subcategories.edit', compact('subCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'name_en' => 'required',
            'name_hin' => 'required',
            'category_id' => 'required'
        ]);

       $subCategory->update([
            'category_id' => $request->category_id,
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
        ]);

        $notification = array (
            'message' => 'Sub Category Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.subcategories')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        
        $notification = array (
            'message' => 'Sub Category Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.subcategories')->with($notification);
    }

    public function ajax($category_id)
    {
        $subcategories = SubCategory::where('category_id', $category_id)->orderBy('name_en', 'ASC')->get();
        return json_encode($subcategories);
    }
}
