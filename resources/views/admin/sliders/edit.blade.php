@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Slide</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.sliders.update', ['slider' => $slider->id]) }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <h5>Title</h5>
                                        <div class="controls">
                                            <input type="text" name="title" id="title" class="form-control"
                                                value="{{ $slider->title }}" />
                                            <div class="help-block"></div>
                                        </div>
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Description</h5>
                                        <div class="controls">
                                            <input type="text" name="description" id="description" class="form-control"
                                                value="{{ $slider->description }}">
                                            <div class="help-block"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Slide Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" id="image" class="form-control"
                                                data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                        </div>
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                                    </div>
                                </form>
                                <!-- /.col -->

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- /.box -->
                </div>

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->

@endsection
