@extends('layouts.app')

@section('title')
  Login | Easy Online Shop
@endsection

@section('content')


        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="list-inline list-unstyled">
                        <li><a href="home.html">Home</a></li>
                        <li class='active'>Login</li>
                    </ul>
                </div><!-- /.breadcrumb-inner -->
            </div><!-- /.container -->
        </div><!-- /.breadcrumb -->
        
        <div class="body-content">
            <div class="container">
                <div class="sign-in-page">
                    <div class="row">
                        <!-- Sign-in -->			
        <div class="col-md-6 col-sm-6 sign-in">
            <h4 class="">
                @if(session()->get('language') == 'Hindi') दाखिल करना @else Sign In @endif
            </h4>
            <p class="">Hello, Welcome to your account.</p>
            {{-- <div class="social-sign-in outer-top-xs">
                <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
                <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
            </div> --}}

            <form class="register-form outer-top-xs" role="form" method="POST" action="{{ isset($guard) ? url($guard . '/login') : route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                    <input type="email" class="form-control unicase-form-control text-input" id="email" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                  <div class="form-group">
                    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                    <input type="password" class="form-control unicase-form-control text-input" id="password" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="radio outer-xs">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                      </label>
                      <a href="{{ route('password.request') }}" class="forgot-password pull-right">Forgot your Password?</a>
                </div>
                  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
            </form>					
        </div>
        <!-- Sign-in -->
        
        <!-- create a new account -->
        <div class="col-md-6 col-sm-6 create-new-account">
            <h4 class="checkout-subtitle">
                @if(session()->get('language') == 'Hindi') एक नया खाता बनाएं @else Create a new account @endif
            </h4>
            <p class="text title-tag-line">Create your new account.</p>

            <form class="register-form outer-top-xs" method="POST" action="{{ route('register') }}" role="form">
                @csrf
                <div class="form-group">
                    <label class="info-title" for="remail">Email Address <span>*</span></label>
                    <input type="email" class="form-control unicase-form-control text-input" id="email" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                <div class="form-group">
                    <label class="info-title" for="name">Name <span>*</span></label>
                    <input type="text" class="form-control unicase-form-control text-input" id="name" name="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="info-title" for="phone">Phone Number <span>*</span></label>
                    <input type="text" class="form-control unicase-form-control text-input" id="phone" name="phone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="info-title" for="password">Password <span>*</span></label>
                    <input type="password" class="form-control unicase-form-control text-input" id="password" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label class="info-title" for="password_confirmation">Confirm Password <span>*</span></label>
                    <input type="password" class="form-control unicase-form-control text-input" id="password_confirmation" name="password_confirmation">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
            </form>
            
            
        </div>	
        <!-- create a new account -->			</div><!-- /.row -->
                </div><!-- /.sigin-in-->


        @include('layouts.brands')
<!-- /.logo-slider --> 
<!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
    </div>
<!-- /.container --> 
</div>

@endsection