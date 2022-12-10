<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name_en', 'ASC')->get();
        $brands = Brand::orderBy('name_en', 'ASC')->get();

        $products = Product::query();

        if(!empty($_GET['category']) && empty($_GET['brand']))
        {
            $slugs = explode(',', $_GET['category']);
            $categoryIds = Category::select('id')->whereIn('slug_en', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('category_id', $categoryIds)->where('status', 1)->orderBy('id', 'DESC')->paginate(6);
        }
        elseif(!empty($_GET['brand']) && empty($_GET['category']))
        {
            $slugs = explode(',', $_GET['brand']);
            $brandIds = Brand::select('id')->whereIn('slug_en', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('brand_id', $brandIds)->where('status', 1)->orderBy('id', 'DESC')->paginate(6);
        }
        elseif(!empty($_GET['brand']) && !empty($_GET['category']))
        {
            $brandslugs = explode(',', $_GET['brand']);
            $categoryslugs = explode(',', $_GET['category']);
            $brandIds = Brand::select('id')->whereIn('slug_en', $brandslugs)->pluck('id')->toArray();
            $categoryIds = Category::select('id')->whereIn('slug_en', $categoryslugs)->pluck('id')->toArray();
            $products = $products->whereIn('brand_id', $brandIds)->whereIn('category_id', $categoryIds, 'or')->where('status', 1)->orderBy('id', 'DESC')->paginate(6);
        }
        else 
        {
            $products = Product::where('status', 1)->orderBy('id', 'DESC')->paginate(6);           
        }

        return view('shop.index', compact('categories', 'products', 'brands'));
    }

    public function filter(Request $request)
    {
        $data = $request->all();

        // Filter Category
        $categoryUrl = "";
        if(!empty($data['category']))
        {
            foreach($data['category'] as $category)
            {
                if(empty($categoryUrl))
                {
                    $categoryUrl .= '&category=' . $category;
                }
                else
                {
                    $categoryUrl .= ',' . $category;
                }
            }
        }

        $brandUrl = "";
        if(!empty($data['brand']))
        {
            foreach($data['brand'] as $brand)
            {
                if(empty($brandUrl))
                {
                    $brandUrl .= '&brand=' . $brand;
                }
                else
                {
                    $brandUrl .= ',' . $brand;
                }
            }
        }

        return redirect()->route('shop', $categoryUrl . $brandUrl);
    }
}
