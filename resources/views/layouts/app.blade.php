<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

@php
    $seo = \App\Models\Seo::first();
@endphp

<meta name="title" content="{{ $seo->meta_title }}">
<meta name="description" content="{{ $seo->meta_description }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="{{ $seo->meta_author }}">
<meta name="keywords" content="{{ $seo->meta_keywords }}">
<meta name="robots" content="all">
<title>@yield('title')</title>

	<link rel="shortcut icon" type="image/png" href="{{ asset('/frontend/images/favicon.png') }}">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/blue.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/owl.transitions.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/rateit.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css') }}">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<style type="text/css">
  .checked {
      color: orange;
  }
  </style>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
  {{ $seo->google_analytics }}
</script>

</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
@include('layouts.header')

<!-- ============================================== HEADER : END ============================================== -->
@yield('content')
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
@include('layouts.footer')
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script> 
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('frontend/js/bootstrap-hover-dropdown.min.js') }}"></script> 
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('frontend/js/echo.min.js') }}"></script> 
<script src="{{ asset('frontend/js/jquery.easing-1.3.min.js') }}"></script> 
<script src="{{ asset('frontend/js/bootstrap-slider.min.js') }}"></script> 
<script src="{{ asset('frontend/js/jquery.rateit.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/lightbox.min.js') }}"></script> 
<script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script> 
<script src="{{ asset('frontend/js/wow.min.js') }}"></script> 
<script src="{{ asset('frontend/js/scripts.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 

<script type="text/javascript">

    @if(session('message'))
      var type = "{{ Session::get('alert-type', 'info') }}"
      switch(type)
      {
        case 'info' : toastr.info(" {{ session('message') }} ")
        break;
        case 'success' : toastr.success(" {{ session('message') }} ")
        break;
        case 'warning' : toastr.warning(" {{ session('message') }} ")
        break;
        case 'error' : toastr.error(" {{ session('message') }} ")
        break;
      }
    @endif

</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Add To Cart Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span id="pname"></span></h5>
        <button type="button" class="close" data-dismiss="modal" id="closeModal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          
          <div class="col-md-4">
            <div class="card">
              <img id="pimage" src="" class="card-img-top" alt="..." style="height:200px; width:180px">
            </div>
          </div>

          <div class="col-md-4">
            <ul class="list-group">
              <li class="list-group-item">Price: $<strong id="pprice"></strong>&nbsp;<del id="poldprice"></del></li>
              <li class="list-group-item">Code:<strong id="pcode"></strong></li>
              <li class="list-group-item">Category:<strong id="pcategory"></strong></li>
              <li class="list-group-item">Brand:<strong id="pbrand"></strong></li>
              <li class="list-group-item">Stock:
                <strong id="pstock">
                  <span id="available" class="badge badge-pill badge-success" style="background-color:green; color:white;">Available</span>
                  <span id="outofstock" class="badge badge-pill badge-danger" style="background-color:red; color:white;">Out Of Stock</span>
                </strong>
              </li>
            </ul>
          </div>

          <div class="col-md-4">
            <div id="colors" class="form-group">
              <label for="pcolor">Choose Color:</label>
              <select class="form-control" id="pcolor" name="pcolor">
              </select>
            </div>
            <div id="sizes" class="form-group">
              <label for="psize">Choose Size:</label>
              <select class="form-control" id="psize" name="psize">
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Quantity</label>
              <input type="number" class="form-control" id="pquantity" name="pquantity" value="1" min="1" />
            </div>

            <input type="hidden" id="product_id" name="product_id" />
            <button type="submit" class="btn btn-primary mb-2" id="addToCart">Add To Cart</button>
          </div>

        </div>

        <!-- Add to Cart Functionality -->

      </div>
   
   
   
   
   
    </div>
  </div>
</div>

<script type="text/javascript">

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
  });

  function ajaxShow(id)
  {
    // alert(id);
    $.ajax({
      type: 'GET',
      url: '{{ url("/products/ajax/show") }}/' + id,
      dataType: 'json',
      success: function(data) {
        $('#pname').text(data.product.name_en);
        $('#pimage').attr('src', '{{ asset("uploads/products/thumbnails/") }}' + '/' + data.product.thumbnail);
        $('#pcode').text(data.product.product_code);
        $('#pcategory').text(data.category);
        $('#pbrand').text(data.brand);
        $('#product_id').val(id);
        $('#pquantity').val(1);

        if(data.product.quantity > 0)
        {
          $('#available').show();
          $('#outofstock').hide();
        }
        else
        {
          $('#available').hide();
          $('#outofstock').show();
        }

        if(data.product.discount_price == 0 || data.product.discount_price == null)
        {
          $('#pprice').text(data.product.selling_price);
          $('#poldprice').empty();
        }
        else
        {
          $('#pprice').text(data.product.discount_price);
          $('#poldprice').text(data.product.selling_price);
        }

        $('select[name="pcolor"]').empty();
        if(data.colors == "")
        {
          $('#colors').hide();
        }
        else
        {
          $('#colors').show();
          $.each(data.colors, function(key, value) {
            $('select[name="pcolor"]').append('<option value="' + value + '">' + value + '</option>');
          });
        }

        $('select[name="psize"]').empty();
        if(data.sizes == "")
        {
          $('#sizes').hide();
        }
        else
        {
          $('#sizes').show();
          $.each(data.sizes, function(key, value) {
            $('select[name="psize"]').append('<option value="' + value + '">' + value + '</option>');
          });
        }
      }
    });
  }

</script>

<script type="text/javascript">
          
  $('#addToCart').click(function() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    });

    var product_name = $('#pname').text();
    var id = $('#product_id').val();
    var color = $('#pcolor option:selected').text();
    var size = $('#psize option:selected').text();
    var quantity = $('#pquantity').val();
    
    $.ajax({
      type: 'post',
      dataType : 'json',
      url:'{{ url('/cart/store') }}/' + id,
      data : {
        color: color,
        size: size,
        quantity: quantity,
        product_name: product_name,
      },
      success: function(data) {

        miniCart();

        $('#closeModal').click();
        // console.log(data);
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          icon: 'success',
          showConfirmButton: false,
          timer: 3000
        });

        if($.isEmptyObject(data.error))
        {
          Toast.fire({
            type: 'success',
            title: data.success
          });
        }
        else
        {
          Toast.fire({
            type: 'error',
            title: data.error
          });
        }

      },
    });

  });

</script>

<script type="text/javascript">
          
  function miniCart() 
  {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    $.ajax({
      type: 'GET',
      dataType : 'json',
      url:'{{ url('/cart/mini') }}',

      success: function(response) {
        
        $('#cartSubTotal').text('$' + response.cartTotal);
        $('#cartQuantity').text(response.cartQuantity);
        $('#cartTotal').text(response.cartTotal);

        var miniCart="";
        
        $.each(response.carts, function(key, cart) {
          miniCart += '<div class="cart-item product-summary"><div class="row"><div class="col-xs-4"><div class="image"> <a href="detail.html"><img src="' + '{{ asset('uploads/products/thumbnails') }}' + '/' + cart.options.image + '" alt=""></a> </div></div><div class="col-xs-7"><h3 class="name"><a href="' + '{{ url('/') }}' + '">' + cart.name + '</a></h3><div class="price">$' + cart.price + ' * ' + cart.qty + '</div></div><div class="col-xs-1 action"> <button type="submit" id="' + cart.rowId + '" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div></div></div><div class="clearfix"></div><hr>';
        });

        $('#miniCart').html(miniCart);

      },
    });

  }

  miniCart();

  function miniCartRemove(rowId)
  {
    $.ajax({
      type: 'GET',
      url: '{{ url('cart/mini/delete') }}/' + rowId,
      dataType: 'json',
      success: function(data) {

        miniCart();

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          icon: 'success',
          showConfirmButton: false,
          timer: 3000
        });

        if($.isEmptyObject(data.error))
        {
          Toast.fire({
            type: 'success',
            title: data.success
          });
        }
        else
        {
          Toast.fire({
            type: 'error',
            title: data.error
          });
        }

      }
    });
  }

</script>


<!-- Add to Wishlist -->

<script type="text/javascript">

function addToWishlist(product_id)
  {
    $.ajax({

      type: 'POST',
      url: '{{ url('/user/wishlist/store') }}/' + product_id,
      dataType: 'json',

      success: function(data) {

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });

        if($.isEmptyObject(data.error))
        {
          Toast.fire({
            type: 'success',
            icon: 'success',
            title: data.success
          });
        }
        else
        {
          Toast.fire({
            type: 'error',
            icon: 'error',
            title: data.error
          });
        }

      }
    });
  }

</script>

<!-- Load Wishlist Data -->

<script type="text/javascript">

function wishlist() 
  {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    $.ajax({
      type: 'GET',
      dataType : 'json',
      url:'{{ url("/user/wishlist/show") }}',

      success: function(response) {
        
        var wishlist="";

        $.each(response, function(key, value) {
          wishlist += '<tr><td class="col-md-2"><img src="' + '{{ asset('uploads/products/thumbnails') }}/' + value.product.thumbnail + '" alt="imga"></td><td class="col-md-7"><div class="product-name"><a href="#">' + value.product.name_en +  '</a></div><div class="rating"><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star non-rate"></i><span class="review">( 06 Reviews )</span></div><div class="price">$' + (value.product.discount_price == 0 ? value.product.selling_price : value.product.discount_price + '<span>$' + value.product.selling_price + '</span>') + '</div></td><td class="col-md-2"><button class="btn btn-primary icon" data-toggle="modal" data-target="#exampleModal" id="' + value.product.id +  '" onclick="ajaxShow(this.id)" type="button"> <i class="fa fa-shopping-cart"></i>&nbsp;Add To Cart</button></td><td class="col-md-1 close-btn"><button type="submit" class="" id="' + value.id + '" onclick="wishlistRemove(this.id)" ><i class="fa fa-times"></i></a></td></tr>';
        });

        $('#wishlist').html(wishlist);

      },
    });

  }

  wishlist();


  function wishlistRemove(id)
  {
    $.ajax({
      type: 'GET',
      url: '{{ url('/user/wishlist/delete') }}/' + id,
      dataType: 'json',
      success: function(data) {

        wishlist();

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          icon: 'success',
          showConfirmButton: false,
          timer: 3000
        });

        if($.isEmptyObject(data.error))
        {
          Toast.fire({
            type: 'success',
            title: data.success
          });
        }
        else
        {
          Toast.fire({
            type: 'error',
            title: data.error
          });
        }

      }
    });
  }
  
  </script>


<!-- Cart Functions -->

<script type="text/javascript">

  function cart() 
    {
  
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
      });
      
      $.ajax({
        type: 'GET',
        dataType : 'json',
        url:'{{ url("/user/cart/show") }}',
  
        success: function(response) {
          
          var cart="";
  
          $.each(response.carts, function(key, value) {
            cart += '<tr><td class="col-md-2"><img style="width:60px;height:60px" src="' + '{{ asset('uploads/products/thumbnails') }}/' + value.options.image + '" alt="imga"></td><td class="col-md-2"><div class="product-name"><a href="#">' + value.name +  '</a></div><div class="price">$' + value.price + '</div></td><td class="col-md-2 text-center"><strong>' + (value.options.color == null ? '' : value.options.color) + '</strong></td><td class="col-md-2 text-center"><strong>' + (value.options.size == null ? '' : value.options.size) + '</strong></td><td class="col-md-2 text-center"><button type="submit" class="btn btn-danger btn-sm"' + (value.qty > 1 ? '' : ' disabled ' ) + 'id="' + value.rowId + '" onclick="cartDecrement(this.id)" >-</button><input style="width:30px; text-align:center; margin: 0;" type="number" value="' + value.qty + '" min="1" max="100" disabled /><button type="submit" class="btn btn-success btn-sm" id="' + value.rowId + '" onclick="cartIncrement(this.id)" >+</button></td><td class="col-md-2 text-center">$' + value.subtotal + '</td><td class="col-md-1 close-btn"><button type="submit" class="" id="' + value.rowId + '" onclick="cartRemove(this.id)" ><i class="fa fa-times"></i></a></td></tr>';
          });
  
          $('#cart').html(cart);
          totalCalculation();
  
        },
      });
  
    }
  
    cart();
  
  
    function cartRemove(id)
    {
      $.ajax({
        type: 'GET',
        url: '{{ url('/user/cart/delete') }}/' + id,
        dataType: 'json',
        success: function(data) {
  
          cart();
          miniCart();
          totalCalculation();
  
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            icon: 'success',
            showConfirmButton: false,
            timer: 3000
          });
  
          if($.isEmptyObject(data.error))
          {
            Toast.fire({
              type: 'success',
              title: data.success
            });
          }
          else
          {
            Toast.fire({
              type: 'error',
              title: data.error
            });
          }
  
        }
      });
    }

    // Increment the cart quantity
    function cartIncrement(rowId)
    {
      $.ajax({
        type: 'GET',
        url: '{{ asset("/user/cart/increment") }}/' + rowId,
        dataType: 'json',
        success: function(data) {
          cart();
          miniCart();
          totalCalculation();
        }
      });
    }

    // Decrement the cart quantity
    function cartDecrement(rowId)
    {
      $.ajax({
        type: 'GET',
        url: '{{ asset("/user/cart/decrement") }}/' + rowId,
        dataType: 'json',
        success: function(data) {
          cart();
          miniCart();
          totalCalculation();
        }
      });
    }
   
    </script>


    <!-- Apply Coupon -->
    <script type="text/javascript">

    totalCalculation();

    $('#applyCoupon').on('click', function() {
    
      var coupon_name = $('#coupon_name').val();
      $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '{{ asset("/user/cart/coupon/apply") }}',
        data: { coupon_name: coupon_name },
        success: function(data) {
          if(data.validity == true)
          {
            $('#couponField').hide();
          }
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
          if($.isEmptyObject(data.error))
          {
            Toast.fire({
              type: 'success',
              title: data.success,
              icon: 'success',
            });
          }
          else
          {
            Toast.fire({
              type: 'error',
              title: data.error,
              icon: 'error'
            });
          }
          totalCalculation();
        }
      });
    });

    totalCalculation();

    function totalCalculation()
    {
      $.ajax({
        type: 'GET',
        url: '{{ asset("/user/cart/total/calculate") }}',
        dataType: 'json',
        success: function(data) {
          if(data.total)
          {
            $('#totalCalculation').html('<tr><th><div class="cart-sub-total">Subtotal<span class="inner-left-md">$' + data.total + '</span></div><div class="cart-grand-total">Grand Total<span class="inner-left-md">$' + data.total + '</span></div></th></tr>');
          }
          else
          {
            $('#totalCalculation').html('<tr><th><div class="cart-sub-total">Subtotal<span class="inner-left-md">$' + data.subtotal + '</span></div><div class="cart-sub-total">Coupon<span class="inner-left-md">' + data.coupon_name + '</span><button type="submit" onclick="removeCoupon()"><i class="fa fa-times"></i></button></div><div class="cart-sub-total">Discount<span class="inner-left-md">$' + data.discount_amount + '</span></div><div class="cart-grand-total">Grand Total<span class="inner-left-md">$' + data.total_amount + '</span></div></th></tr>');
          }
        }
      });
    }

    totalCalculation();

    function removeCoupon()
    {
      $.ajax({
        type: 'GET',
        url: '{{ asset("/user/cart/coupon/remove") }}',
        dataType: 'json',
        success: function(data) {
          $('#coupon_name').val('');
          $('#couponField').show();
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
          if($.isEmptyObject(data.error))
          {
            Toast.fire({
              type: 'success',
              title: data.success,
              icon: 'success',
            });
          }
          else
          {
            Toast.fire({
              type: 'error',
              title: data.error,
              icon: 'error'
            });
          }
          totalCalculation();
        }
      });
    }


$('#search').on('keyup', function () {
    let search = $('#search').val();
    
    if(search.length > 0)
    {
      $.ajax({
        data: {
            search: search
        },
        url: "{{ route('search.advanced') }}",
        method: 'POST',
        beforSend: function (request) {
            return request.setRequestHeader('X-CSRF-Token', ('meta[name="csrf-token"]'));
        },
        success: function (result) {
            $('#searchProducts').html(result);
        }
      }); // End Ajax
    }

    if(search.length < 1)
    {
      $('#searchProducts').html(" ");
    }

});

function search_result_show()
{
  $('#searchProducts').slideDown();
}

function search_result_hide()
{
  $('#searchProducts').slideUp();
}

  </script>

</body>
</html>