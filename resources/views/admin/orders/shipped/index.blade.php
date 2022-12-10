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
                            <h3 class="box-title">Shipped Orders</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Invoice</th>
                                            <th>Amount</th>
                                            <th>Payment</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->order_date }}</td>
                                                <td>{{ $order->invoice_number }}</td>
                                                <td>${{ $order->amount }}</td>
                                                <td>{{ $order->payment_type }}</td>
                                                <td>
                                                    <span class="badge badge-pill badge-primary">{{ $order->status }}</span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.orders.shipped.show', $order->id) }}" class="btn btn-info" title="View"><i class="fas fa-eye"></i></a>
                                                    <a target="_blank" href="{{ route('admin.orders.confirmed.download', $order->id) }}" class="btn btn-danger" title="Invoice Download"><i class="fa fa-download"></i></a>
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
