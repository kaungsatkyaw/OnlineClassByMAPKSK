@extends('layouts.admin')

@section('title')
    Profile
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4">
                                    <img src="{{ asset('storage/userimg/'. Auth::user()->image) }}" width="150" height="150" alt="" class="rounded-circle" >
                                    <h4 class="mt-2" style="font-weight: 400 !important;">{{Auth::user()->name}}</h4>
                                    <h6 class="mt-1" style="margin-bottom: 10px;font-weight: 300;color: #a1aab2;">Admin</h6>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <small class="text-muted">Email address</small>
                                <h6>{{Auth::user()->email}}</h6>
                                <small class="text-muted">Phone</small>
                                <h6>{{Auth::user()->phone}}</h6>
                                <small class="text-muted">Address</small>
                                <h6>{{Auth::user()->address}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
                                        Profile Update
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">
                                        Change Password
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tab-space">
                                <div class="tab-pane active" id="link1" aria-expanded="true">
                                    <form role="form" action="{{route('admin.updateProfile.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="card-body">
                                            @include('include.error')
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Enter title" value="{{Auth::user()->name}}" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label for="img">Image:</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image" id="img">
                                                            <label for="img" class="custom-file-label">Choose File</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 text-right">
                                                        <div style="max-width:150px;max-height:150px;overflow-hidden;margin-left:auto;">
                                                            <img src="{{asset('storage/profileimg/'. Auth::user()->image) }}" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="text" class="form-control" name="email" id="email"
                                                    placeholder="Enter Email" value="{{Auth::user()->email}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone Number:</label>
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    placeholder="Enter Phone Number" value="{{Auth::user()->phone}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address:</label>
                                                <input type="text" class="form-control" name="address" id="address"
                                                    placeholder="Enter Email" value="{{Auth::user()->address}}" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="link2" aria-expanded="false">
                                    <form method="POST" action="{{ route('change.password') }}">
                                        @csrf 
                                        <div class="card-body">
                                            @include('include.error')
                                            <input type="text" class="form-control" style="display:none;" name="email" id="email" value="{{Auth::user()->email}}" required>
                                            <div class="form-group">
                                                <label for="password">Current Password:</label>
                                                <input type="password" class="form-control" name="current_password" autocomplete="current-password" id="password"
                                                    placeholder="Current Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">New Password:</label>
                                                <input type="password" class="form-control" name="new_password" autocomplete="current-password" id="new_password"
                                                    placeholder="New Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Re-type New Password:</label>
                                                <input type="password" class="form-control" name="new_confirm_password" autocomplete="current-password" id="new_confirm_password"
                                                    placeholder="Re-type New Password" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
