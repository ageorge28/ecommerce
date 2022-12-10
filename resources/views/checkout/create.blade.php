@extends('layouts.app')

@section('title')
    Checkout | Easy Online Shop
@endsection

@section('content')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Checkout</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="checkout-box ">
                <form class="register-form" role="form" method="POST" action="{{ route('checkout.store') }}">

                    @csrf

                    <div class="row">
                        
                        <div class="col-md-8">
                            <div class="panel-group checkout-steps" id="accordion">
                                <!-- checkout-step-01  -->
                                <div class="panel panel-default checkout-step-01">

                                    <div id="collapseOne" class="panel-collapse collapse in">

                                        <!-- panel-body  -->
                                        <div class="panel-body">
                                            <div class="row">

                                                <!-- guest-login -->
                                                <div class="col-md-6 col-sm-6 already-registered-login">
                                                    <h4 class="checkout-subtitle"><b>Shipping Address</b></h4>

                                                    <div class="form-group">
                                                        <label class="info-title" for="name"><b>Shipping Name</b><span
                                                                class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control unicase-form-control text-input" id="name"
                                                            name="name" placeholder="" value="{{ Auth::user()->name }}"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="info-title" for="email"><b>Shipping Email</b><span
                                                                class="text-danger">*</span></label>
                                                        <input type="email"
                                                            class="form-control unicase-form-control text-input" id="email"
                                                            name="email" placeholder="" value="{{ Auth::user()->email }}"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="info-title" for="phone"><b>Shipping Phone</b><span
                                                                class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control unicase-form-control text-input" id="phone"
                                                            name="phone" placeholder="" value="{{ Auth::user()->phone }}"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="info-title" for="postcode"><b>Postal Code</b><span
                                                                class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control unicase-form-control text-input"
                                                            id="postcode" name="postcode" placeholder="Postal Code"
                                                            required>
                                                    </div>

                                                </div>
                                                <!-- guest-login -->

                                                <!-- already-registered-login -->
                                                <div class="col-md-6 col-sm-6 already-registered-login">
                                                    <div class="form-group">
                                                        <b>Shipping City</b><span class="text-danger">*</span>
                                                        <div class="controls">
                                                            <select name="city_id" id="city_id" required=""
                                                                class="form-control" aria-invalid="false">
                                                                <option value="" selected disabled>Select City</option>
                                                                @foreach ($shippingCities as $shippingCity)
                                                                    <option value="{{ $shippingCity->id }}">
                                                                        {{ $shippingCity->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="help-block"></div>
                                                        </div>
                                                        @error('city_id')
                                                            <div class="form-control-feedback">
                                                                <small>{{ $message }}</small></div>
                                                        @enderror
                                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Shipping District</b><span class="text-danger">*</span>
                                                        <div class="controls">
                                                            <select name="district_id" id="district_id" required=""
                                                                class="form-control" aria-invalid="false">
                                                                <option value="" selected disabled>Select District</option>
                                                                @foreach ($shippingDistricts as $shippingDistrict)
                                                                    <option value="{{ $shippingDistrict->id }}">
                                                                        {{ $shippingDistrict->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="help-block"></div>
                                                        </div>
                                                        @error('district_id')
                                                            <div class="form-control-feedback">
                                                                <small>{{ $message }}</small></div>
                                                        @enderror
                                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Shipping State</b><span class="text-danger">*</span>
                                                        <div class="controls">
                                                            <select name="state_id" id="state_id" required=""
                                                                class="form-control" aria-invalid="false">
                                                                <option value="" selected disabled>Select State</option>
                                                                @foreach ($shippingStates as $shippingState)
                                                                    <option value="{{ $shippingState->id }}">
                                                                        {{ $shippingState->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="help-block"></div>
                                                        </div>
                                                        @error('district_id')
                                                            <div class="form-control-feedback">
                                                                <small>{{ $message }}</small></div>
                                                        @enderror {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="info-title" for="notes"><b>Notes</b></label>
                                                        <textarea class="form-control" cols="30" rows="5"
                                                            placeholder="Notes" id="notes" name="notes"></textarea>
                                                    </div>

                                                </div>
                                                <!-- already-registered-login -->



                                            </div>
                                        </div>
                                        <!-- panel-body  -->



                                    </div><!-- row -->
                                </div>
                                <!-- checkout-step-01  -->


                            </div><!-- /.checkout-steps -->
                        </div>

                        <div class="col-md-4">
                            <!-- checkout-progress-sidebar -->
                            <div class="checkout-progress-sidebar ">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                                        </div>
                                        <div class="">
                                            <ul class="nav nav-checkout-progress list-unstyled">

                                                @foreach ($carts as $cart)
                                                    <li>
                                                        <strong>Image: </strong>
                                                        <img style="height:50px;width:50px"
                                                            src="{{ asset('uploads/products/thumbnails/' . $cart->options->image) }}" />
                                                    </li>
                                                    <li>
                                                        <strong>Quantity: </strong>
                                                        ( {{ $cart->qty }} )

                                                        <strong>Color: </strong>
                                                        {{ $cart->options->color }}

                                                        <strong>Size: </strong>
                                                        {{ $cart->options->size }}
                                                    </li>
                                                    <hr />
                                                @endforeach

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

                            <div class="checkout-progress-sidebar ">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="unicase-checkout-title">Select Payment Method</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="payment_method">Stripe</label>
                                                <input type="radio" name="payment_method" value="stripe" />
                                                <img src="{{ asset('/frontend/images/payments/4.png') }}" />
                                            </div> <!-- End col -->
                                            {{-- <div class="col-md-4">
                                                <label for="payment_method">Card</label>
                                                <input type="radio" name="payment_method" value="card" />
                                                <img src="{{ asset('/frontend/images/payments/3.png') }}" />
                                            </div> <!-- End col --> --}}
                                            <div class="col-md-6">
                                                <label for="payment_method">Cash</label>
                                                <input type="radio" name="payment_method" value="cash" />
                                                <img src="{{ asset('/frontend/images/payments/6.png') }}" />
                                            </div> <!-- End col -->
                                        </div> <!-- End row -->
                                        <hr />
                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Payment
                                            Step</button>

                                    </div>
                                </div>
                            </div>
                            <!-- checkout-progress-sidebar -->
                        </div>
                    </div><!-- /.row -->

                </form>
            </div><!-- /.checkout-box -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            @include('layouts.brands')
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="city_id"]').on('change', function() {
                var city_id = $(this).val();
                if (city_id) {
                    $.ajax({
                        url: "{{ url('/shipping/districts/ajax') }}/" + city_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="district_id"]').empty();
                            $('select[name="state_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="district_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>')
                            });
                        }
                    });
                }
            })
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="district_id"]').on('change', function() {
                var district_id = $(this).val();
                if (city_id) {
                    $.ajax({
                        url: "{{ url('/shipping/states/ajax') }}/" + district_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="state_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="state_id"]').append('<option value="' +
                                    value.id + '">' + value.name + '</option>')
                            });
                        }
                    });
                }
            })
        });
    </script>

@endsection
