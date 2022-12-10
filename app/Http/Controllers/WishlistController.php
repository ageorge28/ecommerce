<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishlists = Wishlist::where('user_id', Auth::id())->get();
        return view('wishlist.index', compact('wishlists'));
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
    public function store($id, Request $request)
    {
        if(Auth::check())
        {
            $wishlist = Wishlist::where('user_id', Auth::id())->where('product_id', $id)->first();
            if($wishlist == NULL)
            {
                Wishlist::insert([
                    'user_id' => Auth::id(),
                    'product_id' => $id,
                    'created_at' => Carbon::now()
                ]);
                return response()->json(['success' => 'Product Successfully Added To Your Wishlist']);
            }
            else
            {
                return response()->json(['error' => 'Product Already Present In Your Wishlist']);
            }
            
        }
        else
        {
            return response()->json(['error' => 'Please log into your account first']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $wishlist = Wishlist::with('product')->where('user_id', Auth::id())->get();
        return response()->json($wishlist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return response()->json(['success' => 'Product Removed From Your Wishlist']);
    }
}
