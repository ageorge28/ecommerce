@extends('layouts.app')

@section('content')

<div class="body-content">
    <div class="container">
        <div class="row mt">
            @include('profile.layouts.menu')
            <div class="col-md-2">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">Change Your Password</h3>
                    <div class="card-body">
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="current_password">Current Password: <span>*</span></label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                @error('current_password')
                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password">New Password:<span>*</span></label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password_confirmation">Confirm Password:<span>*</span></label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                @error('password_confirmation')
                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Update</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection