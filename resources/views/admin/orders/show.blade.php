@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-6 col-12">
                    <div class="box box-solid box-inverse box-info">
                      <div class="box-header with-border">
                        <h4 class="box-title">Shipping Details</strong></h4>
                      </div>
    
                      <div class="box-body">
                        <table class="table">
                            <tr>
                                <th>Name: </th>
                                <th>{{ $order->name }}</th>
                            </tr>
                            <tr>
                                <th>Phone: </th>
                                <th>{{ $order->phone }}</th>
                            </tr>
                            <tr>
                                <th>Email: </th>
                                <th>{{ $order->email }}</th>
                            </tr>
                            <tr>
                                <th>City: </th>
                                <th>{{ $order->city->name }}</th>
                            </tr>
                            <tr>
                                <th>District: </th>
                                <th>{{ $order->district->name }}</th>
                            </tr>
                            <tr>
                                <th>State: </th>
                                <th>{{ $order->state->name }}</th>
                            </tr>
                            <tr>
                                <th>Postal Code: </th>
                                <th>{{ $order->postcode }}</th>
                            </tr>
                            <tr>
                                <th>Order Date: </th>
                                <th>{{ $order->order_date }}</th>
                            </tr>
                        </table>
                    </div>
                    </div>
                  </div>


                  <div class="col-md-6 col-12">
                    <div class="box box-solid box-inverse box-info">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                            Order Details
                            <span class="text-danger">Invoice: {{ $order->invoice_number }}</span>
                        </h4>
                      </div>
    
                      <div class="box-body">
                        <table class="table">
                            <tr>
                                <th>Name: </th>
                                <th>{{ $order->user->name }}</th>
                            </tr>
                            <tr>
                                <th>Phone: </th>
                                <th>{{ $order->user->phone }}</th>
                            </tr>
                            <tr>
                                <th>Payment Type: </th>
                                <th>{{ $order->payment_type }}</th>
                            </tr>
                            <tr>
                                <th>Transaction ID: </th>
                                <th>{{ $order->transaction_id }}</th>
                            </tr>
                            <tr>
                                <th>Invoice: </th>
                                <th class="text-danger">{{ $order->invoice_number }}</th>
                            </tr>
                            <tr>
                                <th>Order Total: </th>
                                <th>${{ $order->amount }}</th>
                            </tr>
                            <tr>
                                <th>Order: </th>
                                <th><span class="badge badge-pill badge-primary">{{ $order->status }}</span></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>
                                    @if($order->status == 'Pending')
                                        <a href="{{ route('admin.orders.pending.update', $order->id) }}" id="confirm" class="btn btn-block btn-success">Confirm Order</a>
                                    @endif
                                    @if($order->status == 'Confirmed')
                                        <a href="{{ route('admin.orders.confirmed.update', $order->id) }}" id="processing" class="btn btn-block btn-success">Process Order</a>
                                    @endif
                                    @if($order->status == 'Processing')
                                        <a href="{{ route('admin.orders.processing.update', $order->id) }}" id="picked" class="btn btn-block btn-success">Pick Order</a>
                                    @endif
                                    @if($order->status == 'Picked')
                                        <a href="{{ route('admin.orders.picked.update', $order->id) }}" id="shipped" class="btn btn-block btn-success">Ship Order</a>
                                    @endif
                                    @if($order->status == 'Shipped')
                                        <a href="{{ route('admin.orders.shipped.update', $order->id) }}" id="delivered" class="btn btn-block btn-success">Deliver Order</a>
                                    @endif
                                    @if($order->status == 'Delivered')
                                        <a href="{{ route('admin.orders.delivered.update', $order->id) }}" id="cancelled" class="btn btn-block btn-success">Cancel Order</a>
                                    @endif
                                </th>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="box box-solid box-inverse box-info">
                      <div class="box-header with-border">
                        <h4 class="box-title">Order Items</h4>
                      </div>
    
                      <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-md-2">
                                            <label for="">Image</label>
                                        </td>
                                        <td class="col-md-3">
                                            <label for="">Product Name</label>
                                        </td>
                                        <td class="col-md-3">
                                            <label for="">Product Code</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for="">Color</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for="">Size</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for="">Quantity</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for="">Price</label>
                                        </td>
                                    </tr>
                                    @foreach($orderItems as $orderItem)
                                    <tr>
                                        <td class="col-md-2">
                                            <label for=""><img style="width:50px; height:50px" src="{{ asset('uploads/products/thumbnails/' . $orderItem->product->thumbnail) }}" /></label>
                                        </td>
                                        <td class="col-md-3">
                                            <label for="">{{ $orderItem->product->name_en }}</label>
                                        </td>
                                        <td class="col-md-3">
                                            <label for="">{{ $orderItem->product->product_code }}</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for="">{{ $orderItem->color }}</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for="">{{ $orderItem->size }}</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for="">{{ $orderItem->quantity }}</label>
                                        </td>
                                        <td class="col-md-2">
                                            <label for="">${{ $orderItem->price }} </label>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                  </div>

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->

@endsection
