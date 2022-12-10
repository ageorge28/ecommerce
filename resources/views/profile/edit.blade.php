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
                    <h3 class="text-center">Update Your Profile</h3>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="name">Name: <span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="email">Email Address <span>*</span></label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="phone">Phone<span>*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="phone">Profile Photo<span>*</span></label>
                                <input type="file" class="form-control" id="profile_photo_path" name="profile_photo_path">
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