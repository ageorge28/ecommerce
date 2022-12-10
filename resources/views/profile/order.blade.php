@extends('layouts.app')

@section('content')

<div class="body-content">
    <div class="container">
        <div class="row mt-10">
            @include('profile.layouts.menu')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Shipping Details</h4>
                            </div>
                            <div class="card-body" style="background-color:#e9ebec">
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Order Details
                                    <span class="text-danger">Invoice: {{ $order->invoice_number }}</span>
                                </h4>
                            </div>
                            <div class="card-body" style="background-color:#e9ebec">
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
                                        <th>{{ $order->amount }}</th>
                                    </tr>
                                    <tr>
                                        <th>Order: </th>
                                        <th><span class="badge badge-pill badge-warning">{{ $order->status }}</span></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr style="background-color:#e2e2e2">
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
                                        <td class="col-md-2">
                                            <label for="">Download</label>
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
                                        <td class="col-md-2">
                                            <label for="">
                                                @if($order->status == 'Pending')
                                                    <strong>
                                                        <span style="background:#418DB9" class="badge badge-pill badge-success">
                                                            No File 
                                                        </span>
                                                    </strong>
                                                @elseif($order->status == 'Confirmed')
                                                    @if(!is_null($orderItem->product->digital_file))
                                                        <a target="_blank" href="{{ asset('uploads/pdfs/' . $orderItem->product->digital_file) }}">
                                                            <span style="background:red" class="badge badge-pill badge-success">
                                                                Download Ready
                                                            </span>    
                                                        </a>
                                                    @endif
                                                @endif
                                            </label>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div> <!-- End col-md-8 -->
                </div>

                @if($order->status == 'Delivered')
                    @if($order->return_reason == NULL)
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('user.orders.return', $order->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Order Return Reason:</label>
                                    <textarea id="return_reason" name="return_reason" class="form-control" cols="30" rows="5" placeholder="Return Reason"></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger">Return</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-md-12">
                            <span class="badge badge-pill badge-danger" style="background:red">You have requested return</span>
                        </div>
                    </div>
                    @endif
                @endif
                <br />
            </div>

        </div>
    </div>
</div>

@endsection