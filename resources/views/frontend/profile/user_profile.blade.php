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
                        Update Your Profile !
                    </h3>

                    <div class="card-body">
                        <form method="POST" action="{{route('user.profile.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name<span>*</span></label>
                                <input id="name" type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email<span>*</span></label>
                                <input id="email" type="email" name="email" class="form-control" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Phone<span>*</span></label>
                                <input id="phone" type="text" name="phone" class="form-control" value="{{$user->phone}}">
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">User Image<span>*</span></label>
                                <input type="file" name="profile_photo_path" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection