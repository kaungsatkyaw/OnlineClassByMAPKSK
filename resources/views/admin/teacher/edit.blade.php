@extends('layouts.admin')

@section('title')
    Teachers
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Teachers</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Teachers</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            Edit Teacher
                            <a href="{{ route('teacher.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>
                    <form role="form" action="{{ route('teacher.update',[$teacher->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            @include('include.error')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter name" value="{{$teacher->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Enter email" value="{{$teacher->email}}" required>
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
                                            <img src="{{asset('storage/teacherimg/'. $teacher->image) }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position">Position:</label>
                                <input type="text" class="form-control" name="position" id="position"
                                    placeholder="Enter position" value="{{$teacher->position}}" required>
                            </div>
                            <div class="form-group">
                                <label for="workingat">Working At:</label>
                                <input type="text" class="form-control" name="workingat" id="workingat"
                                    placeholder="Enter Working At" value="{{$teacher->workingat}}" required>
                            </div>
                            <div class="form-group">
                                <label for="bio">Bio:</label>
                                <textarea name="bio" class="form-control newsdescription" id="bio"
                                    placeholder="Enter Bio">{!! $teacher->bio !!}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Teacher</button>

                        </div>
                        <!-- /.card-body -->



                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
