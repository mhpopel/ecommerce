@extends('frontend.master')

@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2" style="display: flex; justify-content:center; flex-direction:column;align-items:center; gap:5px;">
                <img src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/'.$user->profile_photo_path):url('upload/user_images/avatar-1.png') }}"
                 style="border: 1px solid #fff; border-radius:50%; height:100px; width:100px;  " alt="" class="card-img-top">


                 <ul class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{ route('user.change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                 </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-center text-danger">
                            Hi...
                        </span>
                        <strong>{{ Auth::user()->name }}</strong>
                        Update your profile
                    </h3>
                    <div class="card-body" style="margin-bottom:5px">
                        <form action="{{ route('user.update.password') }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">Old Password <span></span></label>
                                <input type="password" name="old_password" required class="form-control unicase-form-control text-input"
                                id="name">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">New Password <span></span></label>
                                <input type="password" name="new_password" required class="form-control unicase-form-control text-input"
                                id="email">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">Confirm Password <span></span></label>
                                <input type="password" name="confirm_password"  required class="form-control unicase-form-control text-input"
                                id="phone">
                            </div>
                            <button type="submit" class="btn-upper btn btn-danger checkout-page-button">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection