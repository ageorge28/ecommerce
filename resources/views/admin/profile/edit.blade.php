@extends('admin.layouts.app')

@section('content')

<div class="container-full">

        <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Edit Profile</h4>
			  {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
					
                    @csrf
                        
                    <div class="row">
						<div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required="" value="{{ $admin->name }}" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
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
                                            <input type="email" name="email" class="form-control" value="{{ $admin->email }}" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                            @error('email')
                                                <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                            @enderror
                                    </div>
                                </div>
                            </div>						
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Profile Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="profile_photo_path" class="form-control" id="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img id="showImage" style="width:100px; height:100px" class="" src="{{ !empty($admin->profile_photo_path) ? url('uploads/admin/' . $admin->profile_photo_path) : url('uploads/no_image.jpg') }}" alt="User Avatar">
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
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