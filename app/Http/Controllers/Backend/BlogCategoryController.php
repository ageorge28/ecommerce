<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategories = BlogCategory::all();
        return view('admin.blogcategory.index', compact('blogCategories'));
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
        ]);

        BlogCategory::insert([
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        return view('admin.blogcategory.edit', compact('blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        $request->validate([
            'name_en' => 'required',
            'name_hin' => 'required',
        ]);

       $blogCategory->update([
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.blog.category')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        
        $notification = array (
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.blog.category')->with($notification);
    }
}
