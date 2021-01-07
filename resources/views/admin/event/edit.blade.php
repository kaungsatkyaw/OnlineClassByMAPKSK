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
                            <li class="breadcrumb-item active">Events</li>
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
                            Edit Event
                            <a href="{{ route('event.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>
                    <form role="form" action="{{ route('event.update',[$event->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            @include('include.error')
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="Enter title" value="{{$event->title}}" required>
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
                                            <img src="{{asset('storage/Eventimg/'. $event->image) }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="place">Place:</label>
                                <input type="text" class="form-control" name="place" id="place"
                                    placeholder="Enter Place" value="{{$event->place}}" required>
                            </div>
                            <div class="form-group">
                                <label for="date">date:</label>
                                <input type="date" id="date" name="date" class="form-control" value="{{$event->date}}">
                            </div>
                            <div class="form-group">
                                <label for="time">Time:</label>
                                <input type="time" class="form-control" name="time" id="time" value="{{$event->time}}"
                                 required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Event</button>

                        </div>
                        <!-- /.card-body -->



                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
