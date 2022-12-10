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
                            <h3 class="box-title">
                                Blog Posts 
                                <span class="badge badge-pill badge-danger">{{ count($blogs) }}</span>
                            </h3>
                            <a href="{{ route('admin.blog.create') }}" class="btn btn-success" style="float:right">Add Blog Post</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Blog Category </th>
                                            <th>Blog Image</th>
                                            <th>Blog Title English</th>
                                            <th>Blog Title Hindi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>{{ $blog->blogcategory->name_en }}</td>
                                                <td><img src="{{ asset('uploads/blog/' . $blog->image) }}" style="height:60px; width:60px"</td>
                                                <td>{{ $blog->title_en }}</td>
                                                <td>{{ $blog->title_hin }}</td>
                                                <td>
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                                    <a id="delete" href="{{ route('admin.blog.delete', $blog->id) }}" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->

@endsection
