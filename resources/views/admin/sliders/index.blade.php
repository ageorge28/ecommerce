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
                            <h3 class="box-title">Slider</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $slider)
                                            <tr>
                                                <td><img src="/uploads/slider/{{ $slider->image }}" style="width:70px; height:40px" /></td>
                                                <td>
                                                    @if($slider->title == null)
                                                        <span class="badge badge-pill badge-danger">No Title</span>
                                                    @else
                                                        {{ $slider->title }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($slider->description == NULL)
                                                        <span class="badge badge-pill badge-danger">No Description</span>
                                                    @else
                                                        {{ $slider->description }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($slider->status == 1)
                                                    <span class="badge badge-pill badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-pill badge-danger">Inactive</span>
                                                @endif
                                                <td>
                                                    <a href="{{ route('admin.sliders.edit', ['slider' => $slider->id]) }}" class="btn btn-info btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                                    <a id="delete" href="{{ route('admin.sliders.delete', ['slider' => $slider->id]) }}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                                                    @if($slider->status == 1)
                                                        <a href="{{ route('admin.sliders.deactivate', $slider->id) }}" class="btn btn-danger btn-sm" title="Deactivate"><i class="fas fa-arrow-down"></i></a>
                                                    @else
                                                        <a href="{{ route('admin.sliders.activate', $slider->id) }}" class="btn btn-success btn-sm" title="Activate"><i class="fas fa-arrow-up"></i></a>
                                                    @endif
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
                            <h3 class="box-title">Add Slide</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.sliders.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <h5>Title</h5>
                                        <div class="controls">
                                            <input type="text" name="title" id="title" class="form-control" />
                                            <div class="help-block"></div>
                                        </div>

                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Description</h5>
                                        <div class="controls">
                                            <input type="text" name="description" id="description" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Slide Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" id="image" class="form-control" required
                                                data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                            @error('image')
                                                <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                            @enderror
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
