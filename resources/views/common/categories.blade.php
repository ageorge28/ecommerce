@php
    $categories = \App\Models\Category::orderBy('name_en', 'ASC')->get();
@endphp

<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head">
      <i class="icon fa fa-align-justify fa-fw"></i> 
      @if(session()->get('language') == 'Hindi') श्रेणियाँ @else Categories @endif
    </div>
    <nav class="yamm megamenu-horizontal">
      <ul class="nav">
        @foreach($categories as $category)
          <li class="dropdown menu-item"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon {{ $category->icon }}"></i>
              {{ session()->get('language') == 'Hindi' ? $category->name_hin : $category->name_en }}
            </a>
            <ul class="dropdown-menu mega-menu">
              <li class="yamm-content">
                <div class="row">
                  @php
                    $subcategories = \App\Models\SubCategory::where('category_id', $category->id)->orderBy('name_en', 'ASC')->get();
                  @endphp
                  @foreach($subcategories as $subcategory)
                  <div class="col-sm-12 col-md-3">
                    <a href="{{ route('products.subcategory', $subcategory->slug_en) }}">
                      <h2 class="title">
                        {{ session()->get('language') == 'Hindi' ? $subcategory->name_hin : $subcategory->name_en }}
                      </h2>
                    </a>
                    <ul class="links list-unstyled">
                      @php
                        $subsubcategories = \App\Models\SubSubCategory::where('subcategory_id', $subcategory->id)->orderBy('name_en', 'ASC')->get();
                      @endphp
                      @foreach($subsubcategories as $subsubcategory)
                        <li>
                            <a href="{{ route('products.subsubcategory', $subsubcategory->slug_en) }}">
                              {{ session()->get('language') == 'Hindi' ? $subsubcategory->name_hin : $subsubcategory->name_en }}
                            </a>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                  @endforeach
                  <!-- /.col -->

                </div>
                <!-- /.row --> 
              </li>
              <!-- /.yamm-content -->
            </ul>
          <!-- /.dropdown-menu --> 
          </li>
        <!-- /.menu-item -->
        @endforeach      
      </ul>
      <!-- /.nav --> 
    </nav>
    <!-- /.megamenu-horizontal --> 
  </div>