@extends('layouts.app')

@section('title')
    {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
@endsection

@section('content')

<style type="text/css">
.checked {
    color: orange;
}
</style>

<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class='active'>
            {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
          </li>
        </ul>
      </div>
      <!-- /.breadcrumb-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.breadcrumb -->

    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-3 sidebar'>
                    <div class="sidebar-module-container">
                        <div class="home-banner outer-top-n">
                            <img src="{{ asset('frontend/images/banners/LHS-banner.jpg') }}" alt="Image">
                        </div>



                        <!-- ============================================== HOT DEALS ============================================== -->
                        @include('common.hotdeals')
                        <!-- ============================================== HOT DEALS: END ============================================== -->

                        <!-- ============================================== NEWSLETTER ============================================== -->
                        {{-- <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs">
                            <h3 class="section-title">Newsletters</h3>
                            <div class="sidebar-widget-body outer-top-xs">
                                <p>Sign Up for Our Newsletter!</p>
                                <form>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Subscribe to our newsletter">
                                    </div>
                                    <button class="btn btn-primary">Subscribe</button>
                                </form>
                            </div><!-- /.sidebar-widget-body -->
                        </div><!-- /.sidebar-widget --> --}}
                        <!-- ============================================== NEWSLETTER: END ============================================== -->

                        <!-- ============================================== Testimonials============================================== -->
                        @include('common.testimonials')

                        <!-- ============================================== Testimonials: END ============================================== -->



                    </div>
                </div><!-- /.sidebar -->
                <div class='col-md-9'>
                    <div class="detail-block">
                        <div class="row  wow fadeInUp">

                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">

                                    <div id="owl-single-product">

        

                                        @foreach($multiImages as $image)
                                            <div class="single-product-gallery-item" id="slide{{ $image->id }}">
                                                <a data-lightbox="image-1" data-title="Gallery"
                                                    href="{{ asset('public/uploads/products/multiple-images/' . $image->name) }}">
                                                    <img class="img-responsive" alt="" src="{{ asset('public/uploads/products/multiple-images/' . $image->name) }}"
                                                        data-echo="{{ asset('public/uploads/products/multiple-images/' . $image->name) }}" />
                                                </a>
                                            </div><!-- /.single-product-gallery-item -->
                                        @endforeach



                                    </div><!-- /.single-product-slider -->


                                    <div class="single-product-gallery-thumbs gallery-thumbs">

                                        <div id="owl-single-product-thumbnails">

                                            @foreach ($multiImages as $image)
                                                <div class="item">
                                                    <a class="horizontal-thumb active" data-target="#owl-single-product"
                                                        data-slide="1" href="#slide{{ $image->id }}">
                                                        <img class="img-responsive" width="85" alt=""
                                                            src="{{ asset('public/uploads/products/multiple-images /' . $image->name) }}"
                                                            data-echo="{{ asset('public/uploads/products/multiple-images/' . $image->name) }}" />
                                                    </a>
                                                </div>                                              
                                            @endforeach



                                        </div><!-- /#owl-single-product-thumbnails -->



                                    </div><!-- /.gallery-thumbs -->

                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class="product-info">
                                    <h1 class="name" id="pname" name="pname">
                                        {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
                                    </h1>

                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div>
                                                    @php
                                                        $rating = $product->reviews->avg('rating');                                                     
                                                    @endphp                                                 
                                                    @if($rating == NULL)
                                                        No rating yet
                                                    @else
                                                        <span class="fa fa-star {{ $rating >= 1 ? ' checked' : '' }}"></span>
                                                        <span class="fa fa-star {{ $rating >= 2 ? ' checked' : '' }}"></span>
                                                        <span class="fa fa-star {{ $rating >= 3 ? ' checked' : '' }}"></span>
                                                        <span class="fa fa-star {{ $rating >= 4 ? ' checked' : '' }}"></span>
                                                        <span class="fa fa-star {{ $rating == 5 ? ' checked' : '' }}"></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="reviews">
                                                    <a href="#" class="lnk">({{ count($product->reviews) }} Reviews)</a>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="stock-box">
                                                    <span class="label">Availability :</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    <span class="value">In Stock</span>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        {{ session()->get('language') == 'Hindi' ? $product->short_description_hin : $product->short_description_en }}
                                    </div><!-- /.description-container -->

                                    <div class="price-container info-container m-t-20">
                                        <div class="row">


                                            <div class="col-sm-6">
                                                <div class="price-box">
                                                    <span class="price">${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }}</span>                                                   
                                                    <span class="price-strike">{{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="favorite-button m-t-10">
                                                    <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button>



                                                    {{-- <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                        title="Add to Compare" href="#">
                                                        <i class="fa fa-signal"></i>
                                                    </a> --}}
                                                    {{-- <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                        title="E-mail" href="#">
                                                        <i class="fa fa-envelope"></i>
                                                    </a> --}}
                                                </div>
                                            </div>

                                        </div><!-- /.row -->

                                        <!-- Color and Size -->

                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="info-title control-label">Color: <span>*</span></label>
                                                    <select id="pcolor" name="pcolor" class="form-control unicase-form-control selectpicker" style="display: none;">
                                                        <option selected disabled>--Select color--</option>
                                                        @foreach(Str::of($product->color_en)->explode(',') as $color)
                                                            <option value="{{ $color }}">{{ $color }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                @if($product->size_en == null)
                                                @else
                                                    <div class="form-group">
                                                        <label class="info-title control-label">Size: <span>*</span></label>
                                                        <select id="psize" name="psize" class="form-control unicase-form-control selectpicker" style="display: none;">
                                                            <option selected disabled>--Select size--</option>
                                                            @foreach(Str::of($product->size_en)->explode(',') as $size)
                                                                <option value="{{ $size }}">{{ $size }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endif
                                            </div>

                                        </div><!-- /.row -->

                                        <!-- End Color and Size -->

                                    </div><!-- /.price-container -->

                                    <div class="quantity-container info-container">
                                        <div class="row">

                                            <div class="col-sm-2">
                                                <span class="label">Qty :</span>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <div class="arrows">
                                                            <div class="arrow plus gradient"><span
                                                                    class="ir"><i
                                                                        class="icon fa fa-sort-asc"></i></span></div>
                                                            <div class="arrow minus gradient"><span
                                                                    class="ir"><i
                                                                        class="icon fa fa-sort-desc"></i></span></div>
                                                        </div>
                                                        <input id="pquantity" name="pquantity" type="number" value="1" min="1" />
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}" />
                                            <div class="col-sm-7">
                                                <button id="addToCart" name="addToCart" class="btn btn-primary"><i
                                                        class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
                                            </div>


                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->

                                    <div class="addthis_inline_share_toolbox"></div>






                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active">
                                        <a data-toggle="tab" href="#description">
                                            {{ session()->get('language') == 'Hindi' ? 'विवरण' : 'DESCRIPTION' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#review">                                           
                                            {{ session()->get('language') == 'Hindi' ? 'समीक्षा' : 'REVIEW' }}
                                        </a>
                                    </li>
                                    <!--<li>-->
                                    <!--    <a data-toggle="tab" href="#tags">-->
                                    <!--        {{ session()->get('language') == 'Hindi' ? 'टैग' : 'TAGS' }}-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">
                                                {!! session()->get('language') == 'Hindi' ? $product->long_description_hin : $product->long_description_en !!}
                                            </p>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Customer Reviews</h4>

                                                <div class="reviews">

                                                    @foreach($product->reviews->take(5) as $review)

                                                        @if($review->status == 0)
                                                        @else
                                                            <div class="review">

                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <img src="{{ !empty($review->user->profile_photo_path) ? url('uploads/user/' . $review->user->profile_photo_path) : url('uploads/no_image.jpg') }}" style="border-radius: 50%" width="40px" height="40px" />
                                                                        <b>{{ $review->user->name }}</b>
                                                                        @if($review->rating == NULL)
                                                                        @else
                                                                            <span class="fa fa-star {{ $review->rating >= 1 ? ' checked' : '' }}"></span>
                                                                            <span class="fa fa-star {{ $review->rating >= 2 ? ' checked' : '' }}"></span>
                                                                            <span class="fa fa-star {{ $review->rating >= 3 ? ' checked' : '' }}"></span>
                                                                            <span class="fa fa-star {{ $review->rating >= 4 ? ' checked' : '' }}"></span>
                                                                            <span class="fa fa-star {{ $review->rating == 5 ? ' checked' : '' }}"></span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-md-4">          
                            
                                                                    </div>
                                                                </div> <!-- end row -->

                                                                <div class="review-title">
                                                                    <span class="summary">
                                                                        {{ $review->summary }}
                                                                    </span>
                                                                    <span class="date">
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span>{{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</span>
                                                                    </span>
                                                                </div>
                                                                <div class="text">"{{ $review->comment }}"</div>
                                                            </div>
                                                        @endif
                                                    @endforeach


                                                </div><!-- /.reviews -->



                                            </div><!-- /.product-reviews -->



                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    {{-- <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cell-label">&nbsp;</th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="cell-label">Quality</td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Price</td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Value</td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality"
                                                                            class="radio" value="5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive --> --}}
                                                </div><!-- /.review-table -->

                                                <div class="review-form">
                                                    @auth
                                                        <div class="form-container">
                                                            <form role="form" class="cnt-form" method="post" action="{{ route('reviews.store', $product->id) }}">
                                                                @csrf
                                                                <div class="table-responsive">
                                                                    <table class="table">	
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="cell-label">&nbsp;</th>
                                                                                <th>1 star</th>
                                                                                <th>2 stars</th>
                                                                                <th>3 stars</th>
                                                                                <th>4 stars</th>
                                                                                <th>5 stars</th>
                                                                            </tr>
                                                                        </thead>	
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="cell-label">Quality</td>
                                                                                <td><input type="radio" name="rating" class="radio" value="1"></td>
                                                                                <td><input type="radio" name="rating" class="radio" value="2"></td>
                                                                                <td><input type="radio" name="rating" class="radio" value="3"></td>
                                                                                <td><input type="radio" name="rating" class="radio" value="4"></td>
                                                                                <td><input type="radio" name="rating" class="radio" value="5"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table><!-- /.table .table-bordered -->
                                                                </div><!-- /.table-responsive -->
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        {{-- <div class="form-group">
                                                                            <label for="exampleInputName">Your Name <span
                                                                                    class="astk">*</span></label>
                                                                            <input type="text" class="form-control txt"
                                                                                id="exampleInputName" placeholder="">
                                                                        </div><!-- /.form-group --> --}}
                                                                        <div class="form-group">
                                                                            <label for="summary">Summary <span
                                                                                    class="astk">*</span></label>
                                                                            <input type="text" class="form-control txt"
                                                                                id="summary" name="summary" placeholder="Summary" required>
                                                                        </div><!-- /.form-group -->
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputReview">Review <span
                                                                                    class="astk">*</span></label>
                                                                            <textarea class="form-control txt txt-review"
                                                                                id="comment" name="comment" rows="4"
                                                                                placeholder="Comments"></textarea>
                                                                        </div><!-- /.form-group -->
                                                                    </div>
                                                                </div><!-- /.row -->

                                                                <div class="action text-right">
                                                                    <button class="btn btn-primary btn-upper" type="submit">SUBMIT
                                                                        REVIEW</button>
                                                                </div><!-- /.action -->

                                                            </form><!-- /.cnt-form -->
                                                        </div><!-- /.form-container -->
                                                    @else
                                                        <p>
                                                            <b>
                                                                Please log in to add your product review. 
                                                                <a href="{{ route('login') }}">Click here to log in.</a>
                                                            </b>
                                                        </p>
                                                    @endauth

                                                </div><!-- /.review-form -->

                                            </div><!-- /.product-add-review -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                    <div id="tags" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">Product Tags</h4>
                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-container">

                                                    <div class="form-group">
                                                        <label for="exampleInputTag">Add Your Tags: </label>
                                                        <input type="text" id="exampleInputTag" class="form-control txt">


                                                    </div>

                                                    <button class="btn btn-upper btn-primary" type="submit">ADD
                                                        TAGS</button>
                                                </div><!-- /.form-container -->
                                            </form><!-- /.form-cnt -->

                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use
                                                        single quotes (') for phrases.</span>
                                                </div>
                                            </form><!-- /.form-cnt -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->

                    <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">
                            {{ session()->get('language') == 'Hindi' ? 'नवीनतम ब्लॉग' : 'Related Products' }}
                        </h3>
                        <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                            @foreach($related_products as $product)
                                <div class="item item-carousel">
                                    <div class="products">

                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="{{ route('products.show', $product->slug_en) }}"><img src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""></a>
                                                </div><!-- /.image -->

                                                @php
                                                    $discount = round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100);
                                                @endphp
                    
                                                @if($product->discount_price == 0)
                                                    <div class="tag sale"><span>sale</span></div>
                                                @else
                                                <div class="tag new"><span>{{ $discount }}%</span></div>
                                                @endif
                                            </div><!-- /.product-image -->


                                            <div class="product-info text-left">
                                                <h3 class="name">
                                                    <a href="{{ route('products.show', $product->slug_en) }}">
                                                        {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
                                                    </a>
                                                </h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>

                                                <div class="product-price">
                                                    <span class="price">${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
                                                    <span class="price-before-discount"> {{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span>                     
                                                </div><!-- /.product-price -->

                                            </div><!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">

                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                          </li>
                                                          <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button>

{{-- 
                                                        <li class="lnk">
                                                            <a class="add-to-cart" href="detail.html" title="Compare">
                                                                <i class="fa fa-signal"></i>
                                                            </a>
                                                        </li> --}}
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->
                                        </div><!-- /.product -->

                                    </div><!-- /.products -->
                                </div><!-- /.item -->
                            @endforeach

                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

                </div><!-- /.col -->
                <div class="clearfix"></div>
            </div><!-- /.row -->
        </div>
    </div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61c854b2571e42ee"></script>

@endsection
