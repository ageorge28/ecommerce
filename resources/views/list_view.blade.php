@foreach($products as $product)
<div class="category-product-inner wow fadeInUp">
  <div class="products">
    <div class="product-list product">
      <div class="row product-list-row">
        <div class="col col-sm-4 col-lg-4">
          <div class="product-image">
            <div class="image"> <img src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" alt=""> </div>
          </div>
          <!-- /.product-image --> 
        </div>
        <!-- /.col -->
        <div class="col col-sm-8 col-lg-8">
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
              <span class="price"> ${{ $product->discount_price == 0 ? $product->selling_price : $product->discount_price }} </span> 
              <span class="price-before-discount">{{ $product->discount_price == 0 ? '' : '$' . $product->selling_price }}</span>
            </div>
            <!-- /.product-price -->
            <div class="description m-t-10">
              {{ session()->get('language') == 'Hindi' ? $product->short_description_hin : $product->short_description_en }}
            </div>
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <li class="add-cart-button btn-group">
                    <button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                    </li>
                    <button class="btn btn-primary icon" id="{{ $product->id }}" onclick="addToWishlist(this.id)" type="button"> <i class="fa fa-heart"></i> </button> 
                  {{-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li> --}}
                </ul>
              </div>
              <!-- /.action --> 
            </div>
            <!-- /.cart --> 
            
          </div>
          <!-- /.product-info --> 
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.product-list-row -->

      @php
        $discount = round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100);
      @endphp

      @if($product->discount_price == 0)
        <div class="tag new"><span>new</span></div>
      @else
      <div class="tag new"><span>{{ $discount }}%</span></div>
      @endif

    </div>
    <!-- /.product-list --> 
  </div>
  <!-- /.products --> 
</div>
<!-- /.category-product-inner -->
@endforeach