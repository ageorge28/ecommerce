<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function pending()
    {
        $comments = Comment::where('status', 0)->orderBy('id', 'DESC')->get();
        return view('admin.comments.pending', compact('comments'));
    }

    public function published()
    {
        $comments = Comment::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('admin.comments.published', compact('comments'));
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
    public function store(Blog $blog, Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        Comment::insert([
            'user_id' => Auth::id(),
            'blog_id' => $blog->id,
            'comment' => $request->comment,
            'status' => 0,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Comment Will Be Approved By Admin',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function approve(Comment $comment)
    {
        $comment->update([
            'status' => 1
        ]);

        $notification = array (
            'message' => 'Comment Approved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        $notification = array (
            'message' => 'Comment Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
