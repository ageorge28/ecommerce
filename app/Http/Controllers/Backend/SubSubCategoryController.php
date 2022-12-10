<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsubcategories = SubSubCategory::all();
        $categories = Category::orderBy('name_en', 'ASC')->get();
        return view('admin.subsubcategories.index', compact('subsubcategories', 'categories'));
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
            'subcategory_id' => 'required',
            'name_en' => 'required',
            'name_hin' => 'required'
        ]);

        SubSubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
        ]);

        $notification = array (
            'message' => 'Sub Sub Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubSubCategory  $subSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubSubCategory $subSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubSubCategory  $subSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSubCategory $subSubCategory)
    {
        $categories = Category::orderBy('name_en', 'ASC')->get();
        $subcategories = SubCategory::orderBy('name_en', 'ASC')->get();
        return view('admin.subsubcategories.edit', compact('subSubCategory', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubSubCategory  $subSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubSubCategory $subSubCategory)
    {
        $request->validate([
            'name_en' => 'required',
            'name_hin' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',            
        ]);

       $subSubCategory->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-')
        ]);

        $notification = array (
            'message' => 'Sub Sub Category Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.subsubcategories')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubSubCategory  $subSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSubCategory $subSubCategory)
    {
        $subSubCategory->delete();
        
        $notification = array (
            'message' => 'Sub Sub Category Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.subsubcategories')->with($notification);
    }

    public function ajax($subcategory_id)
    {
        $subsubcategories = SubSubCategory::where('subcategory_id', $subcategory_id)->orderBy('name_en', 'ASC')->get();
        return json_encode($subsubcategories);
    }
}
