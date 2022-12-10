@extends('layouts.app')

@section('content')

<div class="body-content">
    <div class="container">
        <div class="row mt">
            @include('profile.layouts.menu')
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <h3 class="text-center">Cancelled Orders</h3>
                    <div class="card-body">
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr style="background-color:#e2e2e2">
                                            <td class="col-md-2">
                                                <label for="">Date</label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for="">Total</label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for="">Payment</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Invoice</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Order</label>
                                            </td>
                                            <td class="col-md-1">
                                                <label for="">Action</label>
                                            </td>
                                        </tr>
                                        @forelse($orders as $order)
                                        <tr>
                                            <td class="col-md-2">
                                                <label for="">{{ $order->order_date }}</label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for="">${{ $order->amount }}</label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for="">{{ $order->payment_type }}</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">{{ $order->invoice_number }}</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">
                                                    <span class="badge badge-pill badge-warning">
                                                        {{ $order->status }}
                                                    </span>
                                                </label>
                                            </td>
                                            <td class="col-md-1">
                                                <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>
                                                <a href="{{ route('user.orders.invoice', $order->id) }}" target="_blank" style="margin-top:5px" class="btn btn-sm btn-danger"><i class="fa fa-download"></i> Invoice</a>
                                            </td>
                                        </tr>
                                        @empty
                                            <h2 class="text-danger">Order Not Found</h2>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- End col-md-8 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection