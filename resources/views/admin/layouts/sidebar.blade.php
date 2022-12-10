@php
  $prefix = request()->route()->getPrefix();
  $route = Route::current()->getName();
@endphp

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
						  <h3><b>Easy</b> Shop</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ request()->is('*dashboard') ? 'active' : '' }}">
          <a href="{{ route('admin.dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  

        @php
          $admin = auth()->guard('admin')->user();
        @endphp
		
        @if($admin->brands == 1)
        <li class="treeview {{ request()->is('*brands') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*brands') ? 'active' : '' }}"><a href="{{ route('admin.brands') }}"><i class="ti-more"></i>All Brands</a></li>
            {{-- <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li> --}}
          </ul>
        </li> 
        @else
        @endif
		  
        @if($admin->categories == 1)
        <li class="treeview {{ request()->is('*categories') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('categories*') ? 'active' : '' }}"><a href="{{ route('admin.categories') }}"><i class="ti-more"></i>All Categories</a></li>
            <li class="{{ request()->is('subcategories*') ? 'active' : '' }}"><a href="{{ route('admin.subcategories') }}"><i class="ti-more"></i>All Sub Categories</a></li>            
            <li class="{{ request()->is('subsubcategories*') ? 'active' : '' }}"><a href="{{ route('admin.subsubcategories') }}"><i class="ti-more"></i>All Sub Sub Categories</a></li>
          </ul>
        </li>
        @else
        @endif
		
        @if($admin->products == 1)
        <li class="treeview {{ request()->is('*products*') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.products.create') }}"><i class="ti-more"></i>Add Product</a></li>
            <li><a href="{{ route('admin.products') }}"><i class="ti-more"></i>Manage Products</a></li>
          </ul>
        </li> 	
        @else
        @endif	  

        @if($admin->slider == 1)
        <li class="treeview class="{{ request()->is('*sliders') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*sliders') ? 'active' : '' }}"><a href="{{ route('admin.sliders') }}"><i class="ti-more"></i>Manage Slider</a></li>
          </ul>
        </li> 		
        @else
        @endif
		 
        @if($admin->coupons == 1)
        <li class="treeview class="{{ request()->is('*coupons') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*coupons') ? 'active' : '' }}"><a href="{{ route('admin.coupons') }}"><i class="ti-more"></i>Manage Coupon</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($admin->shipping == 1)
        <li class="treeview class="{{ request()->is('*shipping') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Shipping</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*cities') ? 'active' : '' }}"><a href="{{ route('admin.shipping.cities') }}"><i class="ti-more"></i>Manage Cities</a></li>
            <li class="{{ request()->is('*districts') ? 'active' : '' }}"><a href="{{ route('admin.shipping.districts') }}"><i class="ti-more"></i>Manage Districts</a></li>
            <li class="{{ request()->is('*states') ? 'active' : '' }}"><a href="{{ route('admin.shipping.states') }}"><i class="ti-more"></i>Manage States</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($admin->reviews == 1)
        <li class="treeview class="{{ request()->is('*reviews') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Reviews</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*/reviews/pending') ? 'active' : '' }}"><a href="{{ route('admin.reviews.pending') }}"><i class="ti-more"></i>Pending Reviews</a></li>
            <li class="{{ request()->is('*/reviews/published') ? 'active' : '' }}"><a href="{{ route('admin.reviews.published') }}"><i class="ti-more"></i>Published Reviews</a></li>
          </ul>
        </li> 
        @else
        @endif

        <li class="treeview class="{{ request()->is('*comments') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Comments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*/comments/pending') ? 'active' : '' }}"><a href="{{ route('admin.comments.pending') }}"><i class="ti-more"></i>Pending Comments</a></li>
            <li class="{{ request()->is('*/comments/published') ? 'active' : '' }}"><a href="{{ route('admin.comments.published') }}"><i class="ti-more"></i>Published Comments</a></li>
          </ul>
        </li> 

        <li class="header nav-small-cap">User Interface</li>

        @if($admin->orders == 1)
        <li class="treeview class="{{ request()->is('*orders') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*/orders/pending') ? 'active' : '' }}"><a href="{{ route('admin.orders.pending') }}"><i class="ti-more"></i>Pending Orders</a></li>
            <li class="{{ request()->is('*confirmed') ? 'active' : '' }}"><a href="{{ route('admin.orders.confirmed') }}"><i class="ti-more"></i>Confirmed Orders</a></li>
            <li class="{{ request()->is('*processing') ? 'active' : '' }}"><a href="{{ route('admin.orders.processing') }}"><i class="ti-more"></i>Processing Orders</a></li>
            <li class="{{ request()->is('*picked') ? 'active' : '' }}"><a href="{{ route('admin.orders.picked') }}"><i class="ti-more"></i>Picked Orders</a></li>
            <li class="{{ request()->is('*shipped') ? 'active' : '' }}"><a href="{{ route('admin.orders.shipped') }}"><i class="ti-more"></i>Shipped Orders</a></li>
            <li class="{{ request()->is('*delivered') ? 'active' : '' }}"><a href="{{ route('admin.orders.delivered') }}"><i class="ti-more"></i>Delivered Orders</a></li>
            <li class="{{ request()->is('*cancelled') ? 'active' : '' }}"><a href="{{ route('admin.orders.cancelled') }}"><i class="ti-more"></i>Cancelled Orders</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($admin->reports == 1)
        <li class="treeview class="{{ request()->is('*reports') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*reports') ? 'active' : '' }}"><a href="{{ route('admin.reports') }}"><i class="ti-more"></i>All Reports</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($admin->stock == 1)
        <li class="treeview class="{{ request()->is('*stock') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*stock') ? 'active' : '' }}"><a href="{{ route('admin.stock') }}"><i class="ti-more"></i>Product Stock</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($admin->users == 1)
        <li class="treeview class="{{ request()->is('*users') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*users') ? 'active' : '' }}"><a href="{{ route('admin.users') }}"><i class="ti-more"></i>All Users</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($admin->adminuserrole == 1)
        <li class="treeview class="{{ request()->is('*adminuserrole') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Admin User Role</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*/adminuserrole') ? 'active' : '' }}"><a href="{{ route('admin.adminuserrole') }}"><i class="ti-more"></i>All Admin Users</a></li>
          </ul>
        </li> 
        @else
        @endif
		
        @if($admin->blog == 1)
        <li class="treeview class="{{ request()->is('*blog') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*/blog/category') ? 'active' : '' }}"><a href="{{ route('admin.blog.category') }}"><i class="ti-more"></i>Blog Categories</a></li>
            <li class="{{ request()->is('*blog') ? 'active' : '' }}"><a href="{{ route('admin.blog') }}"><i class="ti-more"></i>Blog Posts</a></li>
            <li class="{{ request()->is('*/blog/create') ? 'active' : '' }}"><a href="{{ route('admin.blog.create') }}"><i class="ti-more"></i>Add Blog Post</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($admin->settings == 1)
        <li class="treeview class="{{ request()->is('*settings') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*settings') ? 'active' : '' }}"><a href="{{ route('admin.settings.edit') }}"><i class="ti-more"></i>Site Settings</a></li>
            <li class="{{ request()->is('*seo') ? 'active' : '' }}"><a href="{{ route('admin.seo.edit') }}"><i class="ti-more"></i>SEO Settings</a></li>
          </ul>
        </li> 
        @else
        @endif

        @if($admin->returns == 1)
        <li class="treeview class="{{ request()->is('*returns') ? 'active' : '' }}">
          <a href="#">
            <i data-feather="file"></i>
            <span>Return Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('*request') ? 'active' : '' }}"><a href="{{ route('admin.returns.request') }}"><i class="ti-more"></i>Return Requests</a></li>
            <li class="{{ request()->is('*returns') ? 'active' : '' }}"><a href="{{ route('admin.returns') }}"><i class="ti-more"></i>All Returns</a></li>
          </ul>
        </li> 
        @else
        @endif

       
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>