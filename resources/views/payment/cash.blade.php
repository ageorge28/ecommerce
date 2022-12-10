@extends('layouts.app')

@section('title')
    Cash On Delivery | Easy Online Shop
@endsection

@section('content')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Cash On Delivery</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="checkout-box ">

                    <div class="row">
                        
                        <div class="col-md-6">
                            <!-- checkout-progress-sidebar -->
                            <div class="checkout-progress-sidebar ">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="unicase-checkout-title">Your Shopping Amount</h4>
                                        </div>
                                        <div class="">
                                            <ul class="nav nav-checkout-progress list-unstyled">

                                                <li>
                                                    @if (session()->has('coupon'))
                                                        <strong>Subtotal: </strong>$ {{ $cartTotal }}
                                                        <hr />
                                                        <strong>Coupon: </strong>
                                                        {{ session()->get('coupon')['coupon_name'] }} (
                                                        {{ session()->get('coupon')['coupon_discount'] }}% )
                                                        <hr />
                                                        <strong>Discount: </strong>$
                                                        {{ ($cartTotal * session()->get('coupon')['coupon_discount']) / 100 }}
                                                        <hr />
                                                        <strong class="cart-grand-total">Grand Total: </strong>$
                                                        {{ $cartTotal - ($cartTotal * session()->get('coupon')['coupon_discount']) / 100 }}
                                                    @else
                                                        <strong>Subtotal: </strong>$ {{ $cartTotal }}
                                                        <hr />
                                                        <strong>Grand Total: </strong>$ {{ $cartTotal }}
                                                    @endif
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="checkout-progress-sidebar ">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="unicase-checkout-title">Select Payment Method</h4>
                                        </div>

                                        <form action="{{ route('cash.order') }}" method="post" id="payment-form">
                                            @csrf
                                            <div class="form-row">

                                                <img src="{{ asset('/frontend/images/payments/cash.png') }}" />

                                                <label for="card-element">
                                                <input type="hidden" name="name" value="{{ $data['name'] }}" />
                                                <input type="hidden" name="email" value="{{ $data['email'] }}" />
                                                <input type="hidden" name="phone" value="{{ $data['phone'] }}" />
                                                <input type="hidden" name="postcode" value="{{ $data['postcode'] }}" />
                                                <input type="hidden" name="city_id" value="{{ $data['city_id'] }}" />
                                                <input type="hidden" name="district_id" value="{{ $data['district_id'] }}" />
                                                <input type="hidden" name="state_id" value="{{ $data['state_id'] }}" />
                                                <input type="hidden" name="notes" value="{{ $data['notes'] }}" />
                                                </label>                                                
                                                <div id="card-element">
                                                <!-- A Stripe Element will be inserted here. -->
                                                </div>
                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                            </div>
                                            <br>
                                            <button class="btn btn-primary">Submit Payment</button>
                                        </form>
                
                

                                    </div>
                                </div>
                            </div>
                            <!-- checkout-progress-sidebar -->
                        </div>
                    </div><!-- /.row -->

            </div><!-- /.checkout-box -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            @include('layouts.brands')
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->

    

@endsection
