@extends('admin.layouts.app')

@section('content')

    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3>View Product</h3>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">


                    <div class="col-12">

                        <div class="box">

                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Brand Name English</h5>
                                            <div class="controls">
                                                {{ $product->brand->name_en }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Category Name English</h5>
                                            <div class="controls">
                                                {{ $product->category->name_en }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Sub Category Name English</h5>
                                            <div class="controls">
                                                {{ $product->subcategory->name_en }}
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Sub Sub Category Name English</h5>
                                            <div class="controls">
                                                {{ $product->subsubcategory->name_en }}
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Name English</h5>
                                            <div class="controls">
                                                {{ $product->name_en }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Name Hindi</h5>
                                            <div class="controls">
                                                {{ $product->name_hin }}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Product Code</h5>
                                            <div class="controls">
                                                {{ $product->product_code }}
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Quantity</h5>
                                            <div class="controls">
                                                {{ $product->quantity }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Tags English</h5>
                                            <div class="controls">
                                                @foreach(Str::of($product->tags_en)->explode(',') as $tag_en)
                                                    <span class="badge badge-pill badge-info">{{ $tag_en }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Product Tags Hindi</h5>
                                            <div class="controls">
                                                @foreach(Str::of($product->tags_hin)->explode(',') as $tag_hin)
                                                    <span class="badge badge-pill badge-info">{{ $tag_hin }}</span>
                                                @endforeach
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Size English</h5>
                                            <div class="controls">
                                                @foreach(Str::of($product->size_en)->explode(',') as $size_en)
                                                    <span class="badge badge-pill badge-info">{{ $size_en }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Size Hindi</h5>
                                            <div class="controls">
                                                @foreach(Str::of($product->size_hin)->explode(',') as $size_hin)
                                                    <span class="badge badge-pill badge-info">{{ $size_hin }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Colors English</h5>
                                            <div class="controls">
                                                @foreach(Str::of($product->color_en)->explode(',') as $color_en)
                                                    <span class="badge badge-pill badge-info">{{ $color_en }}</span>
                                                @endforeach
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Colors Hindi</h5>
                                            <div class="controls">
                                                @foreach(Str::of($product->color_hin)->explode(',') as $color_hin)
                                                    <span class="badge badge-pill badge-info">{{ $color_hin }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <h5>Selling Price</h5>
                                            <div class="controls">
                                                {{ $product->selling_price }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <h5>Discount Price</h5>
                                            <div class="controls">
                                                {{ $product->discount_price }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Short Description English</h5>
                                            <div class="controls">
                                                {!! $product->short_description_en !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Short Description Hindi</h5>
                                            <div class="controls">
                                                {!! $product->short_description_hin !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Long Description English</h5>
                                            <div class="controls">
                                                {!! $product->long_description_en !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Long Description Hindi</h5>
                                            <div class="controls">
                                                {!! $product->long_description_hin !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <fieldset>
                                                    @if($product->hot_deals == 1)
                                                        <span class="badge badge-pill badge-success">Hot Deals Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Hot Deals Inactive</span>
                                                    @endif
                                                </fieldset>
                                                <br />
                                                <fieldset>
                                                    @if($product->featured == 1)
                                                        <span class="badge badge-pill badge-success">Featured Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Featured Inactive</span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <fieldset>
                                                    @if($product->special_offer == 1)
                                                        <span class="badge badge-pill badge-success">Special Offer Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Special Offer Inactive</span>
                                                    @endif
                                                </fieldset>
                                                <br />
                                                <fieldset>
                                                    @if($product->special_deals == 1)
                                                        <span class="badge badge-pill badge-success">Special Deals Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Special Deals Inactive</span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />

                            </div>

                            <!-- /.row -->


                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /.box -->

            </div>         
            <!-- ./col -->
    <!-- /.row -->
        </section>

        <!-- Multiple Image Update -->
        <section class="content">

            <div class="row">

                <div class="col-md-12">
                    <div class="box bt-3 border-info">

                      <div class="box-header">
                        <h4 class="box-title">Product<strong> Multiple Images</strong></h4>
                      </div>
    
                      <div class="box-body">
 
                            <div class="row row-sm">
                                @foreach($product->images as $image)
                                    <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="{{ asset('uploads/products/multiple-images/' . $image->name) }}" style="height:130px;width:280px">
                                        </div>
                                    </div>
                                @endforeach
                            </div>                 

                      </div>

                    </div>
                </div>

            </div>

        </section>

        <section class="content">

            <div class="row">

                <div class="col-md-12">
                    <div class="box bt-3 border-info">

                      <div class="box-header">
                        <h4 class="box-title">Product<strong> Thumbnail</strong></h4>
                      </div>
    
                      <div class="box-body">
  
                            <div class="row row-sm">
                                    <div class="col-md-3">
                                        <div class="card" style="width: 18rem;">
                                            <img id="mainThumbnail" class="card-img-top" src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" style="height:130px;width:280px">
                                          </div>
                                    </div>
                            </div>
             

                      </div>

                    </div>
                </div>

            </div>

        </section>

    <!-- /.content -->
    </div>


@endsection
