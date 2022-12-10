@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Brands <span class="badge badge-pill badge-danger">{{ count($brands) }}</span></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name (English)</th>
                                            <th>Name (Hindi)</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $brand->name_en }}</td>
                                                <td>{{ $brand->name_hin }}</td>
                                                <td><img src="{{ asset('uploads/brands/'. $brand->image) }}"
                                                        style="width:70px; height:40px" /></td>
                                                <td>
                                                    <a href="{{ route('admin.brands.edit', ['brand' => $brand->id]) }}" class="btn btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                                    <a id="delete" href="{{ route('admin.brands.delete', ['brand' => $brand->id]) }}" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>

                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- /.box -->
                </div>
                <!-- /.col -->

                <div class="col-4">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Brand</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.brands.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <h5>Brand Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name_en" id="name_en" class="form-control"
                                                required="" data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name_en')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Brand Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name_hin" id="name_hin" class="form-control"
                                                required="" data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name_hin')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Brand Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" id="image" class="form-control" required
                                                data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                        </div>
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add">
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
