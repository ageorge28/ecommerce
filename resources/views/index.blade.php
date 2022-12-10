@extends('layouts.app')

@section('title')
  Home | Easy Online Shop
@endsection

@section('content')

<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        @include('common.categories')
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        <!-- ============================================== HOT DEALS ============================================== -->
        @include('common.hotdeals')
        <!-- ============================================== HOT DEALS: END ============================================== --> 
        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">
            {{ session()->get('language') == 'Hindi' ? 'विशेष पेशकश' : 'Special Offer' }}
          </h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">


                <div class="item">
                  <div class="products special-product">
                    @foreach($special_offer as $product)
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="{{ route('products.show', $product->slug_en) }}"> <img src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""> </a> </div>
                                <!-- /.image --> 
                                
                              </div>
                              <!-- /.product-image --> 
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="{{ route('products.show', $product->slug_en) }}">
                                    {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
                                  </a>
                                </h3>
                                <div class="">
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
                                <div class="product-price"> 
                                  <span class="price"> $ {{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
                                </div>
                                <!-- /.product-price --> 
                                
                              </div>
                            </div>
                            <!-- /.col --> 
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                    @endforeach
                  </div>
                </div>


            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 
        <!-- ============================================== PRODUCT TAGS ============================================== -->

        <!-- /.sidebar-widget --> 
        <!-- ============================================== PRODUCT TAGS : END ============================================== --> 
        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">
            {{ session()->get('language') == 'Hindi' ? 'विशेष सौदे' : 'Special Deals' }}
          </h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">

              <div class="item"> 
                <div class="products special-product">

                  @foreach($special_deals as $product)
                    <div class="product">
                      <div class="product-micro">
                        <div class="row product-micro-row">
                          <div class="col col-xs-5">
                            <div class="product-image">
                              <div class="image"> <a href="{{ route('products.show', $product->slug_en) }}"> <img src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}"  alt=""> </a> </div>
                              <!-- /.image --> 
                              
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-xs-7">
                            <div class="product-info">
                              <h3 class="name"><a href="{{ route('products.show', $product->slug_en) }}">{{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}</a></h3>
                              <div class="">
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
                              <div class="product-price">
                                 <span class="price"> ${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
                              </div>
                              <!-- /.product-price --> 
                              
                            </div>
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-micro-row --> 
                      </div>
                      <!-- /.product-micro --> 
                      
                    </div>
                  @endforeach

                </div>
              </div>

            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
        <!-- ============================================== NEWSLETTER ============================================== -->
        {{-- <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
          <h3 class="section-title">Newsletters</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <p>Sign Up for Our Newsletter!</p>
            <form>
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
              </div>
              <button class="btn btn-primary">Subscribe</button>
            </form>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div> --}}
        <!-- /.sidebar-widget --> 
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        
        <!-- ============================================== Testimonials============================================== -->
        @include('common.testimonials')
        
        <!-- ============================================== Testimonials: END ============================================== -->
        
        <div class="home-banner"> <img src="{{ asset('frontend/images/banners/LHS-banner.jpg') }}" alt="Image"> </div>
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            @foreach($sliders as $slider)
              <div class="item" style="background-image: url({{ asset('uploads/slider/' . $slider->image) }});">
                <div class="container-fluid">
                  <div class="caption bg-color vertical-center text-left">
                    <div class="slider-header fadeInDown-1">Top Brands</div>
                    <div class="big-text fadeInDown-1"><span style="color:lightgrey">{{ $slider->title }}</span></div>
                    <div class="excerpt fadeInDown-2 hidden-xs"> <span style="color:lightgrey">{{ $slider->description }}</span> </div>
                    <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                  </div>
                  <!-- /.caption --> 
                </div>
                <!-- /.container-fluid --> 
              </div>
              <!-- /.item -->
            @endforeach
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        
        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">money back</h4>
                    </div>
                  </div>
                  <h6 class="text">30 Days Money Back Guarantee</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">free shipping</h4>
                    </div>
                  </div>
                  <h6 class="text">Shipping on orders over $99</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Special Sale</h4>
                    </div>
                  </div>
                  <h6 class="text">Extra $5 off on all items </h6>
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">
              {{ session()->get('language') == 'Hindi' ? 'नये उत्पाद' : 'New Products' }}
            </h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active">
                <a data-transition-type="backSlide" href="#all" data-toggle="tab">
                  {{ session()->get('language') == 'Hindi' ? 'सभी' : 'All' }}
                </a>
              </li>
              @foreach($categories as $category)
                <li>
                  <a data-transition-type="backSlide" href="#{{ $category->slug_en }}" data-toggle="tab">
                    {{ session()->get('language') == 'Hindi' ? $category->name_hin : $category->name_en }}
                  </a>
                </li>
              @endforeach
              {{-- <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
              <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li> --}}
            </ul>
            <!-- /.nav-tabs --> 
          </div>

          <div class="tab-content outer-top-xs">






            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  

                  @foreach($products as $product)
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="{{ route('products.show', $product->slug_en) }}"><img  src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->
                            @php
                              $discount = round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100);
                            @endphp

                            @if($product->discount_price == 0)
                              <div class="tag new"><span>new</span></div>
                            @else
                            <div class="tag new"><span>{{ $discount }}%</span></div>
                            @endif
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="{{ route('products.show', $product->slug_en) }}">
                                {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
                              </a>
                            </h3>
                            <div class="">
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
                            <div class="description"></div>
                            <div class="product-price"> 
                              <span class="price">${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
                              <span class="price-before-discount"> {{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span> 
                            </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button>
                                {{-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> --}}
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div>
                  @endforeach
                  <!-- /.item -->

                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->


            @foreach($categories as $category)
              <div class="tab-pane" id="{{ $category->slug_en }}">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                    @php
                      $category_products = \App\Models\Product::where('category_id', $category->id)->get();
                    @endphp

                    @forelse($category_products as $category_product)
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image"> <a href="{{ route('products.show', $category_product->slug_en) }}"><img  src="{{ asset('uploads/products/thumbnails/' . $category_product->thumbnail) }}" alt=""></a> </div>
                              <!-- /.image -->
                              @php
                                $discount = round((($category_product->selling_price - $category_product->discount_price) / $category_product->selling_price) * 100);
                              @endphp

                              @if($product->discount_price == 0)
                                <div class="tag sale"><span>sale</span></div>
                              @else
                              <div class="tag sale"><span>{{ $discount }}%</span></div>
                              @endif

                              </div>
                            <!-- /.product-image -->
                            
                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="{{ route('products.show', $category_product->slug_en) }}">
                                  {{ session()->get('language') == 'Hindi' ? $category_product->name_hin : $category_product->name_en }}
                                </a>
                              </h3>
                              <div class="">
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
                              <div class="description"></div>
                              <div class="product-price"> <span class="price"> ${{ $category_product->discount_price == 0 ? $category_product->selling_price : $category_product->discount_price }}</span> <span class="price-before-discount"> {{ $category_product->discount_price == 0 ? '' : '$' . $category_product->selling_price }}</span> </div>
                              <!-- /.product-price --> 
                              
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button>
                                  {{-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> --}}
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                          </div>
                          <!-- /.product --> 
                          
                        </div>
                        <!-- /.products --> 
                      </div>
                      <!-- /.item -->

                    @empty

                      <h5 class="text-danger">
                        {{ session()->get('language') == 'Hindi' ? 'कोई उत्पाद नहीं मिला' : 'No Products Found' }}
                      </h5>

                    @endforelse                    

                  </div>
                  <!-- /.home-owl-carousel --> 
                </div>
                <!-- /.product-slider --> 
              </div>
            @endforeach
            <!-- /.tab-pane -->

            
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-7 col-sm-7">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/images/banners/home-banner1.jpg') }}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col -->
            <div class="col-md-5 col-sm-5">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/images/banners/home-banner2.jpg') }}" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">
            {{ session()->get('language') == 'Hindi' ? 'विशेष रुप से प्रदर्शित प्रोडक्टस' : 'Featured Products' }}
          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            
            @foreach($featured as $product)
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="{{ route('products.show', $product->slug_en) }}"><img  src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      @php
                        $discount = round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100);
                      @endphp

                      @if($product->discount_price == 0)
                        <div class="tag hot"><span>hot</span></div>
                      @else
                        <div class="tag hot"><span>{{ $discount }}%</span></div>
                      @endif    

                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="{{ route('products.show', $product->slug_en) }}">
                          {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
                        </a>
                      </h3>
                      <div class="">
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
                      <div class="description"></div>
                      <div class="product-price"> 
                        <span class="price"> ${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
                        <span class="price-before-discount">{{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span> 
                      </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button>
                          {{-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> --}}
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
            @endforeach
            <!-- /.item -->

          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 




        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">
            {{ session()->get('language') == 'Hindi' ? $skip_category_0->name_hin : $skip_category_0->name_en }}
          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            
            @foreach($skip_product_0 as $product)
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="{{ route('products.show', $product->slug_en) }}"><img  src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      @php
                        $discount = round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100);
                      @endphp

                      @if($product->discount_price == 0)
                        <div class="tag hot"><span>hot</span></div>
                      @else
                        <div class="tag hot"><span>{{ $discount }}%</span></div>
                      @endif    

                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="{{ route('products.show', $product->slug_en) }}">
                          {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
                        </a>
                      </h3>
                      <div class="">
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
                      <div class="description"></div>
                      <div class="product-price"> 
                        <span class="price"> ${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
                        <span class="price-before-discount">{{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span> 
                      </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button>
                          {{-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> --}}
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
            @endforeach
            <!-- /.item -->

          </div>
          <!-- /.home-owl-carousel --> 
        </section>





        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">
            {{ session()->get('language') == 'Hindi' ? $skip_category_1->name_hin : $skip_category_1->name_en }}
          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            
            @foreach($skip_product_1 as $product)
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="{{ route('products.show', $product->slug_en) }}"><img  src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      @php
                        $discount = round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100);
                      @endphp

                      @if($product->discount_price == 0)
                        <div class="tag hot"><span>hot</span></div>
                      @else
                        <div class="tag hot"><span>{{ $discount }}%</span></div>
                      @endif    

                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="{{ route('products.show', $product->slug_en) }}">
                          {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
                        </a>
                      </h3>
                      <div class="">
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
                      <div class="description"></div>
                      <div class="product-price"> 
                        <span class="price"> ${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
                        <span class="price-before-discount">{{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span> 
                      </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button>
                          {{-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> --}}
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
            @endforeach
            <!-- /.item -->

          </div>
          <!-- /.home-owl-carousel --> 
        </section>





        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <div class="col-md-12">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{ asset('frontend/images/banners/home-banner.jpg') }}" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">New Mens Fashion<br>
                      <span class="shopping-needs">Save up to 40% off</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">NEW</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 




        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">
            {{ session()->get('language') == 'Hindi' ? $skip_brand_0->name_hin : $skip_brand_0->name_en }}
          </h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            
            @foreach($skip_brand_product_0 as $product)
              <div class="item item-carousel">
                <div class="products">
                  <div class="product">
                    <div class="product-image">
                      <div class="image"> <a href="{{ route('products.show', $product->slug_en) }}"><img  src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""></a> </div>
                      <!-- /.image -->
                      
                      @php
                        $discount = round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100);
                      @endphp

                      @if($product->discount_price == 0)
                        <div class="tag hot"><span>hot</span></div>
                      @else
                        <div class="tag hot"><span>{{ $discount }}%</span></div>
                      @endif    

                    </div>
                    <!-- /.product-image -->
                    
                    <div class="product-info text-left">
                      <h3 class="name">
                        <a href="{{ route('products.show', $product->slug_en) }}">
                          {{ session()->get('language') == 'Hindi' ? $product->name_hin : $product->name_en }}
                        </a>
                      </h3>
                      <div class="">
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
                      <div class="description"></div>
                      <div class="product-price"> 
                        <span class="price"> ${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
                        <span class="price-before-discount">{{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span> 
                      </div>
                      <!-- /.product-price --> 
                      
                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                          </li>
                          <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button>
                          {{-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> --}}
                        </ul>
                      </div>
                      <!-- /.action --> 
                    </div>
                    <!-- /.cart --> 
                  </div>
                  <!-- /.product --> 
                  
                </div>
                <!-- /.products --> 
              </div>
            @endforeach
            <!-- /.item -->

          </div>
          <!-- /.home-owl-carousel --> 
        </section>






        <!-- ============================================== BEST SELLER ============================================== -->
        
        {{-- <div class="best-deal wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">Best seller</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{ asset('frontend/images/products/p20.jpg') }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{ asset('frontend/images/products/p21.jpg') }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{ asset('frontend/images/products/p22.jpg') }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{ asset('frontend/images/products/p23.jpg') }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{ asset('frontend/images/products/p24.jpg') }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{ asset('frontend/images/products/p25.jpg') }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products best-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{ asset('frontend/images/products/p26.jpg') }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="{{ asset('frontend/images/products/p27.jpg') }}" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col2 col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div> --}}
        <!-- /.sidebar-widget --> 
        <!-- ============================================== BEST SELLER : END ============================================== --> 
        
        <!-- ============================================== BLOG SLIDER ============================================== -->
        <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">
            {{ session()->get('language') == 'Hindi' ? 'नवीनतम ब्लॉग' : 'latest blog' }}
          </h3>
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">

              @foreach($blogs as $blog)
              <div class="item">
                <div class="blog-post">
                  <div class="blog-post-image">
                    <div class="image"> <a href="{{ route('blog.show', $blog->id) }}"><img src="{{ asset('uploads/blog/' . $blog->image) }}" alt=""></a> </div>
                  </div>
                  <!-- /.blog-post-image -->
                  
                  <div class="blog-post-info text-left">
                    <h3 class="name">
                      <a href="{{ route('blog.show', $blog->id) }}">
                        {{ session()->get('language') == 'Hindi' ? $blog->title_hin : $blog->title_en }}
                      </a>
                    </h3>
                    <span class="info">By Jone Doe &nbsp;|&nbsp; {{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }} </span>
                    <p class="text">
                      {!! session()->get('language') == 'Hindi' ? Str::limit($blog->description_hin, 100) : Str::limit($blog->description_en, 100) !!}
                    </p>
                    <a href="{{ route('blog.show', $blog->id) }}" class="lnk btn btn-primary">Read more</a> </div>
                  <!-- /.blog-post-info --> 
                  
                </div>
                <!-- /.blog-post --> 
              </div>
              <!-- /.item -->
              @endforeach
              
            </div>
            <!-- /.owl-carousel --> 
          </div>
          <!-- /.blog-slider-container --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== BLOG SLIDER : END ============================================== --> 
        
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        {{-- <section class="section wow fadeInUp new-arriavls">
          <h3 class="section-title">New Arrivals</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('frontend/images/products/p19.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('frontend/images/products/p28.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('frontend/images/products/p30.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('frontend/images/products/p1.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('frontend/images/products/p2.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="{{ asset('frontend/images/products/p3.jpg') }}" alt=""></a> </div>
                    <!-- /.image -->
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </section> --}}
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    @include('layouts.brands')
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>

@endsection