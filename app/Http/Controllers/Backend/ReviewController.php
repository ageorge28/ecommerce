<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Product $product, Request $request)
    {
        $request->validate([
            'summary' => 'required'
        ]);

        Review::insert([
            'product_id' => $product->id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'summary' => $request->summary,
            'comment' => $request->comment,
            'status' => 0,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Review Will Be Approved By the Administrator',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        
        $notification = array (
            'message' => 'Review Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function pending()
    {
        $reviews = Review::where('status', 0)->orderBy('id', 'DESC')->get();
        return view('admin.reviews.pending', compact('reviews'));
    }

    public function approve(Review $review)
    {
        $review->update([
            'status' => 1
        ]);

        $notification = array (
            'message' => 'Review Approved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function published()
    {
        $reviews = Review::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('admin.reviews.published', compact('reviews'));
    }
}
