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
                            <h3 class="box-title">All Products <span class="badge badge-pill badge-danger">{{ count($products) }}</span></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name (English)</th>
                                            <th>Name (Hindi)</th>
                                            <th>Selling Price</th>
                                            <th>Quantity</th>
                                            <th>Discount Price</th>
                                            <th>Status</th>
                                            <th width="25%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td><img style="width:60px; height:px" src="{{ asset('uploads/products/thumbnails/' . $product->thumbnail) }}" /></td>
                                                <td>{{ $product->name_en }}</td>
                                                <td>{{ $product->name_hin }}</td>
                                                <td>{{ $product->selling_price }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                <td>
                                                    @if($product->discount_price > 0)
                                                        <span class="badge badge-pill badge-info">
                                                            {{ round((($product->selling_price - $product->discount_price) / $product->selling_price) * 100, 2) }} %
                                                        </span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">No Discount</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($product->status == 1)
                                                        <span class="badge badge-pill badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info" title="View"><i class="fas fa-eye"></i></a>
                                                    <a id="delete" href="{{ route('admin.products.delete', $product->id) }}" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                                    @if($product->status == 1)
                                                        <a href="{{ route('admin.products.deactivate', $product->id) }}" class="btn btn-danger" title="Deactivate"><i class="fas fa-arrow-down"></i></a>
                                                    @else
                                                        <a href="{{ route('admin.products.activate', $product->id) }}" class="btn btn-success" title="Activate"><i class="fas fa-arrow-up"></i></a>
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

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->

@endsection
