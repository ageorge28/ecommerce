@extends('admin.layouts.app')

@section('content')

    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3>Add Product</h3>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="col-12">

                        <div class="box">

                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Brand Name English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="brand_id" id="brand_id" class="form-control" required>
                                                    <option value="" selected disabled>Select Brand</option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name_en }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="help-block"></div>
                                            </div>
                                            @error('brand_id')
                                                <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                            @enderror
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Category Name English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="category_id" id="category_id" required class="form-control">
                                                    <option value="" selected disabled>Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name_en }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="help-block"></div>
                                            </div>
                                            @error('category_id')
                                                <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                            @enderror
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Sub Category Name English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="subcategory_id" id="subcategory_id" required=""
                                                    class="form-control"  >
                                                    <option value="" selected disabled>Select Sub Category</option>

                                                </select>
                                                <div class="help-block"></div>
                                            </div>
                                            @error('subcategory_id')
                                                <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                            @enderror
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Sub Sub Category Name English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="subsubcategory_id" id="subsubcategory_id" required=""
                                                    class="form-control"  >
                                                    <option value="" selected disabled>Select Sub Sub Category</option>
                                                    {{-- @foreach ($subsubcategories as $subsubcategory)
                                            <option value="{{ $subsubcategory->id }}">{{ $subsubcategory->name_en }}</option>
                                        @endforeach --}}
                                                </select>
                                                <div class="help-block"></div>
                                            </div>
                                            @error('subsubcategory_id')
                                                <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                            @enderror
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Name English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="name_en" required>
                                                @error('name_en')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Name Hindi<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="name_hin" required />
                                                @error('name_hin')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Product Code<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="product_code" required>
                                                @error('product_code')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Quantity<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="number" name="quantity" required>
                                                @error('quantity')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Tags English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="tags_en" data-role="tagsinput" required
                                                    value="Lorem,Ipsum,Amet" />
                                                @error('tags_en')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Product Tags Hindi<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="tags_hin" data-role="tagsinput" required
                                                    value="Lorem,Ipsum,Amet" />
                                                @error('tags_en')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Size English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="size_en" data-role="tagsinput" 
                                                    value="Small,Medium,Large" />
                                                @error('size_en')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Product Size Hindi<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="size_hin" data-role="tagsinput" 
                                                    value="Small,Medium,Large" />
                                                @error('size_hin')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Colors English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="color_en" data-role="tagsinput"
                                                    value="Red,Black" />
                                                @error('color_en')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Colors Hindi<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="color_hin" data-role="tagsinput"
                                                    value="Red,Black" />
                                                @error('color_hin')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Selling Price<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="selling_price"  required/>
                                                @error('selling_price')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <h5>Discount Price<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="discount_price">
                                                @error('discount_price')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Main Thumbnail<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="file" name="thumbnail"
                                                    onchange="mainThumbnailUrl(this)">
                                                @error('thumbnail')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small>
                                                    </div>
                                                @enderror
                                                <img id="mainThumbnail" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Multiple Images<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="file" name="multi_images[]"
                                                    id="multi_image" multiple>
                                                @error('multi_image')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small>
                                                    </div>
                                                @enderror
                                                <div class="row" id="preview_image"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Short Description English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <textarea name="short_description_en" id="short_description_en" required
                                                    class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Short Description Hindi<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <textarea name="short_description_hin" id="short_description_hin" required
                                                    class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Long Description English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <textarea name="long_description_en" id="editor1" class="form-control"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Long Description Hindi<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <textarea name="long_description_hin" id="editor2" class="form-control"
                                                    required></textarea>
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
                                                    <input type="checkbox" id="hot_deals" name="hot_deals" value="1">
                                                    <label for="hot_deals">Hot Deals</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="featured" name="featured" value="1">
                                                    <label for="featured">Featured</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <fieldset>
                                                    <input type="checkbox" id="special_offer" name="special_offer"
                                                        value="1">
                                                    <label for="special_offer">Special Offer</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="special_deals" name="special_deals"
                                                        value="1">
                                                    <label for="special_deals">Special Deals</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Digital Product <span class="text-danger">pdf, xls, csv</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="file" name="digital_file">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br />

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input class="btn btn-round btn-primary" type="submit" value="Add Product" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- /.row -->


                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /.box -->
                </form>

            </div>         
            <!-- ./col -->
    <!-- /.row -->
        </section>
    <!-- /.content -->
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/admin/subcategories/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subcategory_id"]').empty();
                            $('select[name="subsubcategory_id"]').html('');
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name_en + '</option>')
                            });
                        }
                    });
                }
            });
            $('select[name="subcategory_id"]').on('change', function() {
                var subcategory_id = $(this).val();
                if (subcategory_id) {
                    $.ajax({
                        url: "{{ url('/admin/subsubcategories/ajax') }}/" + subcategory_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subsubcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subsubcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name_en + '</option>')
                            });
                        }
                    });
                }
            });
        });
    </script>

    <script type="text/javascript">
        function mainThumbnailUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThumbnail').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#multi_image').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                            .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                        e.target.result).width(80).height(
                                    80); //create image element 
                                    $('#preview_image').append(
                                    img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });
                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>

@endsection
