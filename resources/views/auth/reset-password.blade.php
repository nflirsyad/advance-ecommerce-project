@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="">Home</a></li>
                <li class='active'>Reset Password</li>
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
                    <h4 class="">Reset Password</h4>


                    <form method="POST" action="{{ route('password.update') }}" class="register-form outer-top-xs" role="form">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address<span>*</span></label>
                            <input id="email" type="email" name="email" class="form-control unicase-form-control text-input">
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Password<span>*</span></label>
                            <input id="password" type="password" name="password" class="form-control unicase-form-control text-input">
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Confirm Password<span>*</span></label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control unicase-form-control text-input">
                        </div> 

                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">reset password</button>
                    </form>
                </div>

            </div>
        </div>
        @include('frontend.body.brands')
    </div>
</div>
@endsection