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
                            <h3 class="box-title">Admin Users</h3>
                            <a href="{{ route('admin.adminuserrole.create') }}" class="btn btn-danger" style="float:right">Add Admin User</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Access</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $admin)
                                            <tr>
                                                <td>
                                                    <img style="width:50px; height:50px" src="{{ asset('uploads/admin/' . $admin->profile_photo_path) }}" />
                                                </td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>
                                                    @if($admin->brands == 1)
                                                        <span class="badge btn-primary">Brands</span>
                                                    @else
                                                    @endif
                                                    @if($admin->categories == 1)
                                                        <span class="badge btn-secondary">Categories</span>
                                                    @else
                                                    @endif
                                                    @if($admin->products == 1)
                                                        <span class="badge btn-success">Products</span>
                                                    @else
                                                    @endif
                                                    @if($admin->slider == 1)
                                                        <span class="badge btn-danger">Slider</span>
                                                    @else
                                                    @endif
                                                    @if($admin->coupons == 1)
                                                        <span class="badge btn-warning">Coupons</span>
                                                    @else
                                                    @endif
                                                    @if($admin->shipping == 1)
                                                        <span class="badge btn-info">Shipping</span>
                                                    @else
                                                    @endif
                                                    @if($admin->blog == 1)
                                                        <span class="badge btn-light">Blog</span>
                                                    @else
                                                    @endif
                                                    @if($admin->settings == 1)
                                                        <span class="badge btn-dark">Settings</span>
                                                    @else
                                                    @endif
                                                    @if($admin->returns == 1)
                                                        <span class="badge btn-primary">Returns</span>
                                                    @else
                                                    @endif
                                                    @if($admin->reviews == 1)
                                                        <span class="badge btn-secondary">Reviews</span>
                                                    @else
                                                    @endif
                                                    @if($admin->orders == 1)
                                                        <span class="badge btn-success">Orders</span>
                                                    @else
                                                    @endif
                                                    @if($admin->stock == 1)
                                                        <span class="badge btn-danger">Stock</span>
                                                    @else
                                                    @endif
                                                    @if($admin->reports == 1)
                                                        <span class="badge btn-warning">Reports</span>
                                                    @else
                                                    @endif
                                                    @if($admin->users == 1)
                                                        <span class="badge btn-info">Users</span>
                                                    @else
                                                    @endif
                                                    @if($admin->adminuserrole == 1)
                                                        <span class="badge btn-light">Admin User Role</span>
                                                    @else
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.adminuserrole.edit', $admin->id) }}" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                                    <a id="delete" href="{{ route('admin.adminuserrole.delete', $admin->id) }}" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
