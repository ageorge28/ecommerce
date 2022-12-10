<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\MultiImage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('name_en')->get();
        $categories = Category::orderBy('name_en')->get();
        return view('admin.products.create', compact('brands', 'categories'));
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
            'digital_file' => 'mimes:png,jpg,gif,pdf,xls,csv|max:2048'
        ]);

        if($file = $request->file('digital_file'))
        {
            $destinationPath = 'public/uploads/pdfs';
            $digital_file = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $digital_file);
        }
        else
        {
            $digital_file = NULL;
        }

        $thumbnail = $request->file('thumbnail');
        $generated_thumbnail = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
        Image::make($thumbnail)->resize(917, 1000)->save('public/uploads/products/thumbnails/' . $generated_thumbnail);

        $product_id = Product::insertGetId([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'name_en' => $request->name_en,
            'name_hin' => $request->name_hin,
            'slug_en' => Str::slug($request->name_en, '-'),
            'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),          
            'product_code' => $request->product_code,
            'quantity' => $request->quantity,
            'tags_en' => $request->tags_en,
            'tags_hin' => $request->tags_hin,
            'size_en' => $request->size_en,
            'size_hin' => $request->size_hin,
            'color_en' => $request->color_en,
            'color_hin' => $request->color_hin,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_description_en' => $request->short_description_en,
            'short_description_hin' => $request->short_description_hin,
            'long_description_en' => $request->long_description_en,
            'long_description_hin' => $request->long_description_hin,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'digital_file' => $digital_file,
            'thumbnail' => $generated_thumbnail,
            'status' => 1,
            'created_at' => Carbon::now()
        ]);

        // Multiple Images Upload
        $images = $request->file('multi_images');
        foreach($images as $image)
        {
            $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(917, 1000)->save('public/uploads/products/multiple-images/' . $generated_image);
            MultiImage::insert([
                'product_id' => $product_id,
                'name' => $generated_image,
                'created_at' => Carbon::now()
            ]);
        }

        $notification = array (
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.products')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $subsubcategories = SubSubCategory::all();
        $multiImages = MultiImage::where('product_id', $product->id)->get();
        return view('admin.products.edit', compact('product', 'brands', 'categories', 'subcategories', 'subsubcategories', 'multiImages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if($file = $request->file('digital_file'))
        {
            $destinationPath = 'public/uploads/pdfs';
            if($product->digital_file)
            {
                unlink($destinationPath . $product->digital_file);
            }
            $digital_file = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $digital_file);

            $product->update([
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'subsubcategory_id' => $request->subsubcategory_id,
                'name_en' => $request->name_en,
                'name_hin' => $request->name_hin,
                'slug_en' => Str::slug($request->name_en, '-'),
                'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),          
                'product_code' => $request->product_code,
                'quantity' => $request->quantity,
                'tags_en' => $request->tags_en,
                'tags_hin' => $request->tags_hin,
                'size_en' => $request->size_en,
                'size_hin' => $request->size_hin,
                'color_en' => $request->color_en,
                'color_hin' => $request->color_hin,
                'selling_price' => $request->selling_price,
                'discount_price' => $request->discount_price,
                'short_description_en' => $request->short_description_en,
                'short_description_hin' => $request->short_description_hin,
                'long_description_en' => $request->long_description_en,
                'long_description_hin' => $request->long_description_hin,
                'hot_deals' => $request->hot_deals,
                'featured' => $request->featured,
                'special_offer' => $request->special_offer,
                'special_deals' => $request->special_deals,
                'digital_file' => $digital_file,
                'status' => 1,
                'created_at' => Carbon::now()
            ]);
        }

        else 
        {
            $product->update([
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'subsubcategory_id' => $request->subsubcategory_id,
                'name_en' => $request->name_en,
                'name_hin' => $request->name_hin,
                'slug_en' => Str::slug($request->name_en, '-'),
                'slug_hin' =>Str::of($request->name_hin)->replace(' ', '-'),          
                'product_code' => $request->product_code,
                'quantity' => $request->quantity,
                'tags_en' => $request->tags_en,
                'tags_hin' => $request->tags_hin,
                'size_en' => $request->size_en,
                'size_hin' => $request->size_hin,
                'color_en' => $request->color_en,
                'color_hin' => $request->color_hin,
                'selling_price' => $request->selling_price,
                'discount_price' => $request->discount_price,
                'short_description_en' => $request->short_description_en,
                'short_description_hin' => $request->short_description_hin,
                'long_description_en' => $request->long_description_en,
                'long_description_hin' => $request->long_description_hin,
                'hot_deals' => $request->hot_deals,
                'featured' => $request->featured,
                'special_offer' => $request->special_offer,
                'special_deals' => $request->special_deals,
                'status' => 1,
                'created_at' => Carbon::now()
            ]);
        }


        $notification = array (
            'message' => 'Product Updated Without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.products')->with($notification);
    }

    public function updateImages(Request $request)
    {
        $images = $request->multi_images;

        foreach($images as $id => $image)
        {
            $deletedImage = MultiImage::findOrFail($id);
            unlink('public/uploads/products/multiple-images/' . $deletedImage->name);
            $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(917, 1000)->save('public/uploads/products/multiple-images/' . $generated_image);
        
            $deletedImage->update([
                'name' => $generated_image,
                'updated_at' => Carbon::now()
            ]);
        } // End foreach

        $notification = array (
            'message' => 'Product Images Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    public function updateThumbnail(Request $request, Product $product)
    {
        if($request->file('thumbnail'))
        {
            $oldImage = $product->thumbnail;
            $image = $request->thumbnail;
            unlink('public/ploads/products/thumbnails/' . $oldImage);
            $generated_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(917, 1000)->save('public/uploads/products/thumbnails/' . $generated_image);
            $product->update([
                'thumbnail' => $generated_image,
            ]);
        }

        $notification = array (
            'message' => 'Product Thumbnail Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $images = MultiImage::where('product_id', $product->id)->get();
        foreach($images as $image)
        {
            unlink('public/uploads/products/multiple-images/' . $image->name);
            $image->delete();    
        }

        unlink('public/uploads/products/thumbnails/' . $product->thumbnail);

        $product->delete();

        $notification = array (
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteImage(Request $request, MultiImage $image)
    {
        unlink('public/uploads/products/multiple-images/' . $image->name);
        $image->delete();
        
        $notification = array (
            'message' => 'Product Image Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);
    }

    public function activate(Product $product)
    {
        $product->status = 1;
        $product->save();

        $notification = array (
            'message' => 'Product Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deactivate(Product $product)
    {
        $product->status = 0;
        $product->save();

        $notification = array (
            'message' => 'Product Deactivated Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function stock()
    {
        $products = Product::latest()->get();
        return view('admin.products.stock', compact('products'));
    }
}
