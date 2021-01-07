@extends('layouts.admin')

@section('title')
    Events
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Events</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Event</li>
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
                            Add New Event
                            <a href="{{ route('event.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>
                    <form role="form" action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @include('include.error')
                            <div class="form-group">
                                <label for="name">Title:</label>
                                <input type="text" class="form-control" name="title" id="name"
                                    placeholder="Enter title" required>
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
                                <label for="place">Place:</label>
                                <input type="text" class="form-control" name="place" id="place"
                                    placeholder="Enter Place" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" id="date" name="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="time">Time:</label>
                                <input type="time" class="form-control" name="time" id="time"
                                 required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Event</button>

                        </div>
                        <!-- /.card-body -->



                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
