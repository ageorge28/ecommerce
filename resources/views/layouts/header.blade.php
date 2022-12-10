<header class="header-style-1"> 
  
@php
  $setting = \App\Models\Setting::first();
@endphp

  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            {{-- <li><a href="#"><i class="icon fa fa-user"></i>
              @if(session()->get('language') == 'Hindi') मेरा खाता @else My Account @endif
            </a></li> --}}
            <li><a href="{{ route('wishlist') }}"><i class="icon fa fa-heart"></i>
              @if(session()->get('language') == 'Hindi') इच्छा-सूची@else Wishlist @endif
            </a></li>
            <li><a href="{{ route('cart') }}"><i class="icon fa fa-shopping-cart"></i>
              @if(session()->get('language') == 'Hindi') मेरी गाड़ी @else My Cart @endif
            </a></li>
            <li><a href="{{ route('checkout') }}"><i class="icon fa fa-check"></i>
              @if(session()->get('language') == 'Hindi') चेक आउट @else Checkout @endif
            </a></li>
            <li><a data-toggle="modal" data-target="#orderTracking" href=""><i class="icon fa fa-check"></i>
              @if(session()->get('language') == 'Hindi') आदेश ट्रैकिंग @else Order Tracking @endif
            </a></li>
            <li>
              @auth
                <a href="{{ route('dashboard') }}"><i class="icon fa fa-user"></i>
                  @if(session()->get('language') == 'Hindi') उपयोगकर्ता प्रोफ़ाइल @else User Profile @endif              
                </a>
              @else
                <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>
                  @if(session()->get('language') == 'Hindi') लॉग इन/रजिस्टर @else Login/Register @endif                
                </a>
              @endauth
            </li>
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-small"> 
              <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                <span class="value">@if(session()->get('language') == 'Hindi') भाषा @else Language @endif</span>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                @if (session()->get('language') == 'Hindi')
                  <li><a href="{{ route('language.english') }}">English</a></li>
                @else
                  <li><a href="{{ route('language.hindi') }}">हिंदी</a></li>                
                @endif
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{ route('home') }}"> <img src="{{ asset('uploads/logo/' . $setting->logo) }}" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          @php
            $categories = \App\Models\Category::orderBy('name_en', 'ASC')->get();
          @endphp
          
          <div class="search-area">
            <form method="GET" action="{{ route('search') }}">
              @csrf
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> 
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#">
                      @if(session()->get('language') == 'Hindi') श्रेणियाँ @else Categories @endif
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu" >
                      @foreach($categories as $category)
                      <li class="menu-header">
                        {{ session()->get('language') == 'Hindi' ? $category->name_hin : $category->name_en }}
                      </li>
                      @endforeach
                    </ul>
                  </li>
                </ul>
                <input class="search-field" name="search" id="search" onfocus="search_result_show()" onblur="search_result_hide()" placeholder="Search here..." />
                <button class="search-button" type="submit"></button> </div>
            </form>
            <div id="searchProducts"></div>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count" id="cartQuantity"></span></div>
              <div class="total-price-basket"> 
                <span class="lbl">
                  @if(session()->get('language') == 'Hindi') कार्ट @else cart @endif -
                </span> 
                <span class="total-price"> 
                  <span class="sign">$</span>
                  <span id="cartTotal" name="cartTotal" class="value"></span> 
                </span> 
              </div>
            </div>
            </a>
            <ul class="dropdown-menu">
              <li>

                <div id="miniCart"></div>

                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span id="cartSubTotal" class='price'></span> </div>
                  <div class="clearfix"></div>
                  <a href="{{ route('checkout') }}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> 
                  <a href="{{ route('home') }}" >
                    @if(session()->get('language') == 'Hindi') घर @else Home @endif
                  </a> 
                </li>

                @php
                  $categories = \App\Models\Category::orderBy('name_en', 'ASC')->get();
                @endphp

                @foreach($categories as $category)
                  <li class="dropdown yamm mega-menu"> 
                    <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                      {{ session()->get('language') == 'Hindi' ? $category->name_hin : $category->name_en }}
                    </a>
                    <ul class="dropdown-menu container">
                      <li>
                        <div class="yamm-content ">
                          <div class="row">
                            @php
                              $subcategories = \App\Models\SubCategory::where('category_id', $category->id)->orderBy('name_en', 'ASC')->get();
                            @endphp
                            @foreach($subcategories as $subcategory)
                              <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title"> {{ session()->get('language') == 'Hindi' ? $subcategory->name_hin : $subcategory->name_en }}</h2>
                                @php
                                  $subsubcategories = \App\Models\SubSubCategory::where('subcategory_id', $subcategory->id)->orderBy('name_en', 'ASC')->get();
                                @endphp
                                <ul class="links">
                                  @foreach($subsubcategories as $subsubcategory)
                                    <li><a href="{{ route('products.subsubcategory', $subsubcategory->slug_en) }}">{{ session()->get('language') == 'Hindi' ? $subsubcategory->name_hin : $subsubcategory->name_en }}</a></li>
                                  @endforeach
                                </ul>
                              </div>
                            @endforeach
                            <!-- /.col -->
                                                    
                            <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="{{ asset('frontend/images/banners/top-menu-banner.jpg') }}" alt=""> </div>
                            <!-- /.yamm-content --> 
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                @endforeach
                <li> <a href="{{ route('shop') }}">                    
                  @if(session()->get('language') == 'Hindi') दुकान @else Shop @endif
                </a> </li>
                <li class="dropdown  navbar-right special-menu"> <a href="{{ route('contact') }}">
                  @if(session()->get('language') == 'Hindi') संपर्क @else Contact @endif
                </a> </li>
                <li class="dropdown  navbar-right special-menu"> <a href="{{ route('blog') }}">
                  @if(session()->get('language') == 'Hindi') ब्लॉग @else Blog @endif
                </a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  

  
<!-- Modal -->
<div class="modal fade" id="orderTracking" tabindex="-1" aria-labelledby="orderTrackinglLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderTrackinglLabel">Track Your Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{ route('user.orders.track') }}">
          @csrf
          <div class="modal-body">
            <label>Invoice Code</label>
            <input type="text" name="invoice_number" id="invoice_number" required class="form-control" 
            placeholder="Your Order Invoice Number" />
            <br />
            <button class="btn btn-danger" style="" type="submit">Track Now</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>



</header>

<style type="text/css">

  .search-area {
    position: relative;
  }

  #searchProducts {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background:#ffffff;
    z-index: 999;
    border-radius: 8px;
    margin-top: 5px;
  }
</style>