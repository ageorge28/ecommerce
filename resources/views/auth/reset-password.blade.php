@extends('layouts.app')

@section('content')
       
        <div class="body-content">
            <div class="container">
                <div class="sign-in-page">
                    <div class="row">
                        <!-- Sign-in -->			
        <div class="col-md-6 col-sm-6 sign-in">
            <h4 class="">Reset Password</h4>
			<p>Forgot your password, no problem</p>
            <x-jet-validation-errors class="mb-4" />
            <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-group">
                    <label class="info-title" for="email">Email Address <span>*</span></label>
                    <input type="email" class="form-control unicase-form-control text-input" id="email" name="email">
                </div>

                <div class="form-group">
                    <label class="info-title" for="password">Password<span>*</span></label>
                    <input type="password" class="form-control unicase-form-control text-input" id="password" name="password">
                </div>

                <div class="form-group">
                    <label class="info-title" for="password_confirmation">Confirm Password<span>*</span></label>
                    <input type="password" class="form-control unicase-form-control text-input" id="password_confirmation" name="password_confirmation">
                </div>

                  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Reset Password</button>
            </form>					
        </div>
        <!-- Sign-in -->
        
        <!-- create a new account -->

        <!-- create a new account -->			</div><!-- /.row -->
                </div><!-- /.sigin-in-->


        @include('layouts.brands')
<!-- /.logo-slider --> 
<!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
    </div>
<!-- /.container --> 
</div>

@endsection