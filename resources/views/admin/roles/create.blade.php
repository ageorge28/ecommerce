@extends('admin.layouts.app')

@section('content')

<div class="container-full">

        <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Create Admin User</h4>
			  {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('admin.adminuserrole.store') }}" enctype="multipart/form-data">
					
                    @csrf
                        
                    <div class="row">
						<div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                            @error('name')
                                                <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                            @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>						


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Phone <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="phone" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>						


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Admin User Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="profile_photo_path" class="form-control" id="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img id="showImage" style="width:100px; height:100px" class="" src="{{ url('uploads/no_image.jpg') }}" alt="User Avatar">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_1" name="brands"
                                                    value="1">
                                                <label for="checkbox_1">Brands</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_2" name="categories"
                                                    value="1">
                                                <label for="checkbox_2">Categories</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_3" name="products"
                                                    value="1">
                                                <label for="checkbox_3">Products</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_4" name="slider"
                                                    value="1">
                                                <label for="checkbox_4">Slider</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_5" name="coupons"
                                                    value="1">
                                                <label for="checkbox_5">Coupons</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_6" name="shipping" value="1">
                                                <label for="checkbox_6">Shipping</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_7" name="blog" value="1">
                                                <label for="checkbox_7">Blog</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_8" name="settings" value="1">
                                                <label for="checkbox_8">Settings</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_9" name="returns" value="1">
                                                <label for="checkbox_9">Returns</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_10" name="reviews" value="1">
                                                <label for="checkbox_10">Reviews</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_11" name="orders"
                                                    value="1">
                                                <label for="checkbox_11">Orders</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_12" name="stock"
                                                    value="1">
                                                <label for="checkbox_12">Stock</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_13" name="reports"
                                                    value="1">
                                                <label for="checkbox_13">Reports</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_14" name="users"
                                                    value="1">
                                                <label for="checkbox_14">Users</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="checkbox_15" name="adminuserrole"
                                                    value="1">
                                                <label for="checkbox_15">Admin User Role</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Admin User">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>


@endsection