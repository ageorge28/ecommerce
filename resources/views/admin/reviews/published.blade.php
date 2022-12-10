@extends('admin.layouts.app')

@section('content')

<style type="text/css">
.checked {
  color: orange;
}
</style>
    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Published Reviews</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Summary</th>
                                            <th>Comment</th>
                                            <th>Rating</th>
                                            <th>User</th>
                                            <th>Product</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews as $review)
                                            <tr>
                                                <td>{{ $review->summary }}</td>
                                                <td>{{ $review->comment }}</td>
                                                <td>{{ $review->rating }}</td>
                                                <td>{{ $review->user->name }}</td>
                                                <td>{{ $review->product->name_en }}</td>
                                                <td>
                                                    @if($review->status == 0)
                                                        <span class="badge badge-pill badge-primary">Pending</span>
                                                    @elseif($review->status == 1)
                                                        <span class="badge badge-pill badge-success">Published</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a id="delete" href="{{ route('admin.reviews.delete', $review->id) }}" class="btn btn-danger" title="Delete">Delete</a>                                                  
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
