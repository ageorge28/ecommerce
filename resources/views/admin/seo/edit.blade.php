@extends('admin.layouts.app')

@section('content')

<div class="container-full">

        <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">SEO Settings</h4>
			  {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('admin.seo.update') }}">
					
                    @csrf
                        
                    <div class="row">
						<div class="col-12">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Meta Title</h5>
                                        <div class="controls">
                                            <input type="text" name="meta_title" id="meta_title" value="{{ $seo->meta_title }}" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Meta Author</h5>
                                        <div class="controls">
                                            <input type="text" name="meta_author" id="meta_author" value="{{ $seo->meta_author }}" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Meta Keywords</h5>
                                        <div class="controls">
                                            <input type="text" name="meta_keywords" id="meta_keywords" value="{{ $seo->meta_keywords }}" class="form-control" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Meta Description</h5>
                                        <div class="controls">
                                            <textarea name="meta_description" id="meta_description" class="form-control" cols="35" rows="5">{{ $seo->meta_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
							</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Google Analytics</h5>
                                        <div class="controls">
                                            <textarea name="google_analytics" id="google_analytics" class="form-control" cols="35" rows="5">{{ $seo->google_analytics }}</textarea>
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