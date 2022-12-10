@extends('admin.layouts.app')

@section('content')

<div class="container-full">

        <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Site Settings</h4>
			  {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
					
                    @csrf
                        
                    <div class="row">
						<div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Site Logo</h5>
                                        <div class="controls">
                                            <input type="file" name="logo" id="logo" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Company Name</h5>
                                        <div class="controls">
                                            <input type="text" name="name" id="name" value="{{ $setting->name }}" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Company Address</h5>
                                        <div class="controls">
                                            <input type="text" name="address" id="address" value="{{ $setting->address }}" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Phone 1</h5>
                                        <div class="controls">
                                            <input type="text" name="phone1" id="phone1" value="{{ $setting->phone1 }}" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Phone 2</h5>
                                        <div class="controls">
                                            <input type="text" name="phone2" id="phone2" class="form-control" value="{{ $setting->phone2 }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Email</h5>
                                        <div class="controls">
                                            <input type="email" name="email" id="email" class="form-control" value="{{ $setting->email }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Facebook</h5>
                                        <div class="controls">
                                            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $setting->facebook }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Twitter</h5>
                                        <div class="controls">
                                            <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $setting->twitter }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>LinkedIn</h5>
                                        <div class="controls">
                                            <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $setting->linkedin }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>YouTube</h5>
                                        <div class="controls">
                                            <input type="text" name="youtube" id="youtube" class="form-control" value="{{ $setting->youtube }}" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
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

@endsection