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
                            <h3 class="box-title">Sub Categories <span class="badge badge-pill badge-danger">{{ count($subcategories) }}</span></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Name (English)</th>
                                            <th>Name (Hindi)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subcategories as $subcategory)
                                            <tr>
                                                <td>{{ $subcategory->category->name_en }}</td>
                                                <td>{{ $subcategory->name_en }}</td>
                                                <td>{{ $subcategory->name_hin }}</td>
                                                <td>
                                                    <a href="{{ route('admin.subcategories.edit', $subcategory->id) }}" class="btn btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                                    <a id="delete" href="{{ route('admin.subcategories.delete', $subcategory->id) }}" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
                            <h3 class="box-title">Add Sub Category</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.subcategories.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <h5>Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id" id="category_id" required="" class="form-control" aria-invalid="false">
                                                <option value="" selected disabled>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                                @endforeach
                                            </select>
                                        <div class="help-block"></div></div>
                                        @error('category_id')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Sub Category Name English<span class="text-danger">*</span></h5>
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
                                        <h5>Sub Category Name Hindi<span class="text-danger">*</span></h5>
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
