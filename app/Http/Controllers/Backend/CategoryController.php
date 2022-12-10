<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
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
            'icon' => 'required'
        ]);

        Category::insert([
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
            'icon' => $request->icon
        ]);

        $notification = array (
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_en' => 'required',
            'name_hin' => 'required',
            'icon' => 'required'
        ]);

       $category->update([
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
            'icon' => $request->icon
        ]);

        $notification = array (
            'message' => 'Category Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.categories')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        
        $notification = array (
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.categories')->with($notification);
    }
}
