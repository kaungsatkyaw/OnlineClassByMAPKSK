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
                            Add New
                            <a href="{{ route('teacher.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>
                    <form role="form" action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @include('include.error')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="img">Image:</label>
                                <!-- <input type="file" name="image" id="img"> -->
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="img" required>
                                    <label for="img" class="custom-file-label">Choose File</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position">Position:</label>
                                <input type="text" class="form-control" name="position" id="position"
                                    placeholder="Enter position" required>
                            </div>
                            <div class="form-group">
                                <label for="workingat">Working At:</label>
                                <input type="text" class="form-control" name="workingat" id="workingat"
                                    placeholder="Enter working at" required>
                            </div>
                            <div class="form-group">
                                <label for="Bio">Bio:</label>
                                <textarea name="bio" class="form-control newsdescription" id="bio"
                                    placeholder="Enter Bio"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Teacher</button>

                        </div>
                        <!-- /.card-body -->



                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
