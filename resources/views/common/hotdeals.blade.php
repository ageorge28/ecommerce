@php
    $hot_deals = \App\Models\Product::where('hot_deals', 1)->where('status', 1)->where('discount_price', '!=', 0)->orderBy('id', 'DESC')->limit(3)->get();       
@endphp

<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">
      @if(session()->get('language') == 'Hindi') जबरदस्त सौदे @else Hot Deals @endif
    </h3>
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">

      @foreach($hot_deals as $product)
      <div class="item">
        <div class="products">
          <div class="hot-deal-wrapper">
            <div class="image"> <img src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""> </div>
            
            @php
              $discount = round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100);
            @endphp

            @if($product->discount_price != 0)
              <div class="sale-offer-tag">
                <span>{{ $discount }}%<br>off</span>
              </div>
            @endif
              
            <div class="timing-wrapper">
              <div class="box-wrapper">
                <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
              </div>
              <div class="box-wrapper">
                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
              </div>
              <div class="box-wrapper">
                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
              </div>
              <div class="box-wrapper hidden-md">
                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
              </div>
            </div>
          </div>
          <!-- /.hot-deal-wrapper -->
          
          <div class="product-info text-left m-t-20">
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
              <span class="price"> ${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
              <span class="price-before-discount">{{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span>
              </div>
            <!-- /.product-price --> 
            
          </div>
          <!-- /.product-info -->
          
          <div class="cart clearfix animate-effect">
            <div class="action">
              <div class="add-cart-button btn-group">
                {{-- <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                <button class="btn btn-primary cart-btn" type="button">Add to cart</button> --}}

                <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

              </div>
            </div>
            <!-- /.action --> 
          </div>
          <!-- /.cart --> 
        </div>
      </div>
      @endforeach

    </div>
    <!-- /.sidebar-widget --> 
  </div>