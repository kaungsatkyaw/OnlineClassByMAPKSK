@extends('layouts.admin')

@section('title')
    New Course
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Course</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Course</li>
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
                            Add Course
                            <a href="{{ route('course.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>
                    <form role="form" action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @include('include.error')
                            <div class="form-group">
                                <label for="name">Title:</label>
                                <input type="text" class="form-control" name="title" id="name"
                                    placeholder="Enter title" required>
                            </div>
                            <div class="form-group">
                                <label for="select">Category:</label>

                                <select name="category" id="select" class="form-control" required>
                                    <option value="" selected style="display:none;">Select Category</option>
                                    @foreach ($categories as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select1">Teacher:</label>

                                <select name="teacher" id="select" class="form-control" required>
                                    <option value="" selected style="display:none;">Choose Teacher</option>
                                    @foreach ($teachers as $t)
                                        <option value="{{ $t->id }}">{{ $t->name }}</option>
                                    @endforeach
                                </select>
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
                                <label>Date range:</label>

                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="far fa-calendar-alt"></i>
                                    </span>
                                  </div>
                                  <input type="text" name="range" class="form-control float-right" id="reservation">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="price">Price :</label>
                                <input type="text" class="form-control" name="price" id="name"
                                    placeholder="Enter price" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control newsdescription" id="description"
                                    placeholder="Enter Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Course</button>

                        </div>
                        <!-- /.card-body -->



                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
