<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Slider;
use App\Mail\SendEmail;
use App\Models\Product;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name_en', 'ASC')->get();
        $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $products = Product::where('status', 1)->orderBy('id', 'DESC')->get();
        $featured = Product::where('featured', 1)->where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();       
        $special_offer = Product::where('special_offer', 1)->where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();       
        $special_deals = Product::where('special_deals', 1)->where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();   
        
        $skip_category_0 = Category::skip(0)->first();
        $skip_product_0 =Product::where('status', 1)->where('category_id', $skip_category_0->id)->orderBy('id', 'DESC')->get();

        $skip_category_1 = Category::skip(1)->first();
        $skip_product_1 =Product::where('status', 1)->where('category_id', $skip_category_1->id)->orderBy('id', 'DESC')->get();

        $skip_brand_0 = Brand::skip(0)->first();
        $skip_brand_product_0 =Product::where('status', 1)->where('brand_id', $skip_brand_0->id)->orderBy('id', 'DESC')->get();

        $blogs = Blog::latest()->get();

        return view('index', compact('categories', 'sliders', 'products', 'featured', 'special_offer', 'special_deals', 'skip_category_0', 'skip_product_0', 'skip_category_1', 'skip_product_1', 'skip_brand_0' , 'skip_brand_product_0', 'blogs'));
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function product($slug)
    {
        $product = Product::where('slug_en', $slug)->first();
        $multiImages = MultiImage::where('product_id', $product->id)->get();
        $related_products = Product::where('category_id', $product->category_id)->where('id', '!=' , [$product->id])->get();
        return view('products.show', compact('product', 'multiImages', 'related_products'));
    }

    public function tag($tag, Request $request)
    {
        $products = Product::where('tags_en', 'like', '%' . $tag . '%')->where('status', 1)->orderBy('id', 'DESC')->paginate(3);
        $categories = Category::orderBy('name_en', 'ASC')->get();

        if($request->ajax())
        {
            $grid_view = view('grid_view', compact('products'))->render();
            $list_view = view('list_view', compact('products'))->render();

            return response()->json([
                'grid_view' => $grid_view,
                'list_view' => $list_view
            ]);
        }
        return view('tags', compact('products', 'categories', 'tag'));
    }

    public function subcategory($subcategory_slug, Request $request)
    {
        $subcategory = SubCategory::where('slug_en', $subcategory_slug)->first();
        $products = Product::where('subcategory_id', $subcategory->id)->where('status', 1)->orderBy('id', 'DESC')->paginate(3);
        $categories = Category::orderBy('name_en', 'ASC')->get();

        if($request->ajax())
        {
            $grid_view = view('grid_view', compact('products'))->render();
            $list_view = view('list_view', compact('products'))->render();

            return response()->json([
                'grid_view' => $grid_view,
                'list_view' => $list_view
            ]);
        }

        return view('subcategories', compact('products', 'categories', 'subcategory'));
    }

    public function subsubcategory($subsubcategory_slug, Request $request)
    {
        $subsubcategory = SubSubCategory::where('slug_en', $subsubcategory_slug)->first();
        $products = Product::where('subsubcategory_id', $subsubcategory->id)->where('status', 1)->orderBy('id', 'DESC')->paginate(3);
        $categories = Category::orderBy('name_en', 'ASC')->get();

        // Load more products with AJAX
        if($request->ajax())
        {
            $grid_view = view('grid_view', compact('products'))->render();
            $list_view = view('list_view', compact('products'))->render();

            return response()->json([
                'grid_view' => $grid_view,
                'list_view' => $list_view
            ]);
        }

        return view('subsubcategories', compact('products', 'categories', 'subsubcategory'));
    }

    public function ajaxShow(Product $product)
    {
        $colors = explode(',' , $product->color_en);
        $sizes = explode(',' , $product->size_en);
        $category = $product->category->name_en;
        $brand = $product->brand->name_en;

        return response()->json(array(
            'product' => $product,
            'colors' => $colors,
            'sizes' => $sizes,
            'category' => $category,
            'brand' => $brand
        ));
    }

    // Search for products
    public function search()
    {
        $search = $_GET['search'];
        $products = Product::where('name_en', 'LIKE', '%' . $search . '%')
                        ->orWhere('short_description_en', 'LIKE', '%' . $search . '%')
                        ->orWhere('long_description_en', 'LIKE', '%' . $search . '%')
                        ->paginate(6);
        $categories = Category::orderBy('name_en', 'ASC')->get();
        return view('search.index', compact('products', 'search', 'categories'));      
    }

    public function advancedSearch(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name_en', 'LIKE', '%' . $search . '%')
                        ->orWhere('short_description_en', 'LIKE', '%' . $search . '%')
                        ->orWhere('long_description_en', 'LIKE', '%' . $search . '%')
                        ->select('name_en', 'thumbnail', 'selling_price', 'slug_en')
                        ->limit(5)
                        ->get();
        return view('search.advanced', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $contact = [
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'comments' => $request->comments
        ];

        Mail::to('ageorge28@gmail.com')->send(new SendEmail($contact));

        $notification = array (
            'message' => 'Message Sent',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
