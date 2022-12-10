
    @foreach($products as $product)
    <div class="col-sm-6 col-md-4 wow fadeInUp">
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
        <!-- /.product-image -->
        </div>
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

    <!-- /.item --> 
