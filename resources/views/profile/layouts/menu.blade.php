<div class="col-md-2">
    <br/>
    <img class="card-img-top" style="border-radius:50%" height="100%" width="100%" src="{{ !empty($user->profile_photo_path) ? url('uploads/user/' . $user->profile_photo_path) : url('uploads/no_image.jpg') }}" />
    <br/><br/>
    <ul class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a> 
        <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm btn-block">Update Profile</a> 
        <a href="{{ route('user.orders') }}" class="btn btn-primary btn-sm btn-block">My Orders</a>
        <a href="{{ route('user.orders.returns') }}" class="btn btn-primary btn-sm btn-block">Return Orders</a>
        <a href="{{ route('user.orders.cancelled') }}" class="btn btn-primary btn-sm btn-block">Cancel Orders</a>
        <a href="{{ route('password.edit') }}" class="btn btn-primary btn-sm btn-block">Change Password</a> 
        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a> 
    </ul>
</div>