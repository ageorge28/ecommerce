<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        $blogCategories = BlogCategory::orderBy('name_en', 'ASC')->get();
        return view('blog.index', compact('blogs', 'blogCategories'));
    }

    public function show(Blog $blog)
    {
        $blogCategories = BlogCategory::orderBy('name_en', 'ASC')->get();
        $comments = Comment::where('blog_id', $blog->id)->where('status', 1)->orderBy('id', 'ASC')->get();
        return view('blog.show', compact('blog', 'blogCategories', 'comments'));
    }

    public function category(BlogCategory $blogCategory)
    {
        $blogs = Blog::where('blogcategory_id', $blogCategory->id)->orderBy('id', 'DESC')->get();
        $blogCategories = BlogCategory::orderBy('name_en', 'ASC')->get();
        return view('blog.category', compact('blogs', 'blogCategories'));
    }
}
