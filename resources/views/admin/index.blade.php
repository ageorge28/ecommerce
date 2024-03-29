@extends('admin.layouts.app')

@section('content')

@php
    $date = date('d-m-y');
    $today = \App\Models\Order::where('order_date', $date)->sum('amount');

    $month = date('F');
    $this_month = \App\Models\Order::where('order_month', $month)->sum('amount');

    $year = date('Y');
    $this_year = \App\Models\Order::where('order_year', $year)->sum('amount');

    $pending = \App\Models\Order::where('status', 'Pending')->orderBy('id', 'DESC')->get();


@endphp

<div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-primary-light rounded w-60 h-60">
                            <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Today's Sale</p>
                            <h3 class="text-white mb-0 font-weight-500">${{ number_format($today, 2, '.', ',') }} <small class="text-success"><i class="fa fa-caret-up"></i>USD</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-warning-light rounded w-60 h-60">
                            <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">This Month's Sale</p>
                            <h3 class="text-white mb-0 font-weight-500">${{ number_format($this_month, 2, '.', ',') }} <small class="text-success"><i class="fa fa-caret-up"></i>USD</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-info-light rounded w-60 h-60">
                            <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">This Year's Sale</p>
                            <h3 class="text-white mb-0 font-weight-500">${{ number_format($this_year, 2, '.', ',') }} <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-danger-light rounded w-60 h-60">
                            <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Pending Orders</p>
                            <h3 class="text-white mb-0 font-weight-500">{{ count($pending) }} <small class="text-danger"><i class="fa fa-caret-up"></i>Orders</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                            Recent Orders
                            <small class="subtitle"></small>
                        </h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <thead>
                                    <tr class="text-uppercase bg-lightest">
                                        <th style="min-width: 100px"><span class="text-white">Date</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Invoice</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Amount</span></th>
                                        <th style="min-width: 150px"><span class="text-fade">Payment</span></th>
                                        <th style="min-width: 130px"><span class="text-fade">Status</span></th>
                                        <th><span class="text-fade">Process</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pending as $order)
                                    <tr>										
                                        <td class="pl-0 py-8">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="text-fade d-block">{{ \Carbon\Carbon::parse($order->order_date)->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ $order->invoice_number }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                ${{ number_format($order->amount, 2, '.', ',') }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $order->payment_type }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary-light badge-lg">
                                                {{ $order->status }}
                                            </span>
                                        </td>
                                        <td class="">
                                            <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                            <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
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
    </section>
    <!-- /.content -->
</div>

  @endsection