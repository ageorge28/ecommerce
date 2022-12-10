<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {
        return view('cart.index');
    }

    public function store(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if($product->discount_price == 0)
        {
            Cart::add([
                'id' => $product->id, 
                'name' => $request->product_name, 
                'qty' => $request->quantity, 
                'price' => $product->selling_price, 
                'weight' => 1, 
                'options' => [
                    'size' => $request->size,
                    'color' => $request->color,
                    'image' => $product->thumbnail
                ],
            ]);
            return response()->json(['success' => 'Successfully Added To Your Cart']);
        }
        else
        {
            Cart::add([
                'id' => $product->id, 
                'name' => $request->product_name, 
                'qty' => $request->quantity, 
                'price' => $product->discount_price, 
                'weight' => 1, 
                'options' => [
                    'size' => $request->size,
                    'color' => $request->color,
                    'image' => $product->thumbnail
                ],
            ]);
            return response()->json(['success' => 'Successfully Added To Your Cart']);
        }
    }

    public function miniCart()
    {
        $carts = Cart::content();
        $cartQuantity = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQuantity' => $cartQuantity,
            'cartTotal' => round($cartTotal, 2)
        ));
    }

    public function miniCartRemove($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => 'Product Removed From Cart']);
    }

    public function show()
    {
        $carts = Cart::content();
        $cartQuantity = Cart::count();
        $cartTotal = Cart::subtotal();

        return response()->json(array(
            'carts' => $carts,
            'cartQuantity' => $cartQuantity,
            'cartTotal' => round($cartTotal, 2)
        ));
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => 'Product Removed From Cart']);
    }

    // Increment the cart quantity
    public function increment($rowId)
    {
        $cart = Cart::get($rowId);
        Cart::update($rowId, $cart->qty + 1);
        return response()->json(['increment']);
    }

    // Decrement the cart quantity
    public function decrement($rowId)
    {
        $cart = Cart::get($rowId);
        Cart::update($rowId, $cart->qty - 1);
        return response()->json(['increment']);
    }

    // Apply Coupon
    public function applyCoupon(Request $request)
    {
        $coupon = Coupon::where('name', $request->coupon_name)->where('validity', '>=', Carbon::now()->format('Y-m-d'))->first();
        if($coupon)
        {
            session()->put('coupon', [
                'coupon_name' => $coupon->name,
                'coupon_discount' => $coupon->discount,
                'discount_amount' => round(Cart::total() * $coupon->discount / 100),
                'total_amount' => round(Cart::total() - Cart::total() * $coupon->discount / 100)
            ]);
            return response()->json(array(
                'success' => 'Coupon Applied Successfully',
                'validity' => true             
            ));
        }
        else 
        {
            return response()->json(['error' => 'Invalid Coupon']);
        }
    }

    public function calculateTotal()
    {
        if(session()->has('coupon'))
        {
            return response()->json(array(
                'subtotal' => Cart::total(),
                'coupon_name' => session()->get('coupon')['coupon_name'],
                'coupon_discount' => session()->get('coupon')['coupon_discount'],
                'discount_amount' => round(Cart::total() * (session()->get('coupon')['coupon_discount']) / 100),
                'total_amount' => round(Cart::total() - Cart::total() * (session()->get('coupon')['coupon_discount']) / 100)
            ));
        }
        else
        {
            return response()->json(array(
                'total' => Cart::total()
            ));
        }
    }

    // Remove coupon
    public function removeCoupon()
    {
        session()->forget('coupon');
        return response()->json([
            'success' => 'Coupon Removed Successfully'
        ]);
    }
}
