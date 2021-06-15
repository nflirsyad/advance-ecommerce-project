@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br>
                <img class="card-img-top" style="border-radius: 50%; width:175px; height:175px;" src="{{(!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" width="100%" height="100%"><br><br>
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="{{ route('dashboard') }}" style="color:black;">Home</a></li>
                        <li class="list-group-item"><a href="{{ route('user.profile') }}" style="color:black;">Profile Update</a></li>
                        <li class="list-group-item"><a href="{{route('change.password')}}" style="color:black;">Change Password</a></li>
                        <a href="{{route('user.logout')}}" style="margin-top: 15px;" class="btn btn-danger btn-sm btn-block">Logout</a>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">

            </div>

            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text">Hi,</span>
                        <strong>{{Auth::user()->name}}</strong>
                        Welcome to Hi Mart !
                    </h3>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection