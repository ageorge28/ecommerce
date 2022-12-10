<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategories = BlogCategory::orderBy('name_en', 'ASC')->get();
        return view('admin.blog.create', compact('blogCategories'));
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
            'title_en' => 'required',
            'title_hin' => 'required',
            'blogcategory_id' => 'required',
            'image' => 'required',
            'description_en' => 'required',
            'description_hin' => 'required',
        ]);

        $image = $request->file('image');
        $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(780, 433)->save('public/uploads/blog/' . $generated_image);
        
        Blog::insert([
            'title_en' => $request->title_en,
            'title_hin' => $request->title_hin,
            'description_en' => $request->description_en,
            'description_hin' => $request->description_hin,
            'slug_en' => Str::slug($request->title_en, '-'),
            'slug_hin' =>Str::of($request->title_hin)->replace(' ', '-'),
            'blogcategory_id' => $request->blogcategory_id,
            'image' => $generated_image,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Blog Post Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.blog')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogCategories = BlogCategory::orderBy('name_en', 'ASC')->get();
        return view('admin.blog.edit', compact('blogCategories', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title_en' => 'required',
            'title_hin' => 'required',
            'blogcategory_id' => 'required',
            'description_en' => 'required',
            'description_hin' => 'required',
        ]);

        if($request->file('image'))
        {
            unlink('public/uploads/blog/'. $blog->image);
            $image = $request->file('image');
            $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('public/uploads/blog/' . $generated_image);

            $blog->update([
                'title_en' => $request->title_en,
                'title_hin' => $request->title_hin,
                'description_en' => $request->description_en,
                'description_hin' => $request->description_hin,
                'slug_en' => Str::slug($request->title_en, '-'),
                'slug_hin' =>Str::of($request->title_hin)->replace(' ', '-'),
                'blogcategory_id' => $request->blogcategory_id,
                'image' => $generated_image,
                'updated_at' => Carbon::now()
            ]);
        }
        else
        {
            $blog->update([
                'title_en' => $request->title_en,
                'title_hin' => $request->title_hin,
                'description_en' => $request->description_en,
                'description_hin' => $request->description_hin,
                'slug_en' => Str::slug($request->title_en, '-'),
                'slug_hin' =>Str::of($request->title_hin)->replace(' ', '-'),
                'blogcategory_id' => $request->blogcategory_id,
                'updated_at' => Carbon::now()
            ]);
        }

        $notification = array (
            'message' => 'Blog Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.blog')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        unlink('public/uploads/blog/'. $blog->image);
        $blog->delete();
        
        $notification = array (
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('admin.blog')->with($notification);
    }
}
