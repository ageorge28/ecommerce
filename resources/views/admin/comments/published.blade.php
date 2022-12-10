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
                            <h3 class="box-title">Published Comments</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Blog</th>
                                            <th>Comment</th>
                                            <th>User</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <td>{{ $comment->blog->title_en }}</td>
                                                <td>{{ $comment->comment }}</td>
                                                <td>{{ $comment->user->name }}</td>
                                                <td>
                                                    @if($comment->status == 0)
                                                        <span class="badge badge-pill badge-primary">Pending</span>
                                                    @elseif($comment->status == 1)
                                                        <span class="badge badge-pill badge-success">Published</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a id="delete" href="{{ route('admin.comments.delete', $comment->id) }}" class="btn btn-danger" title="Delete">Delete</a>                                                  
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
