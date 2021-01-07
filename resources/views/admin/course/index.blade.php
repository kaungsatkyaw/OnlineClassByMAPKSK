@extends('layouts.admin')

@section('title')
    Course
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
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
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
                            Course List
                            <a href="{{route('course.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Course</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <t-head>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Teacher</th>
                                    <th>Price</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </t-head>
                            @foreach ($courses as $course)
                            <t-body >
                                <tr>
                                    <td>{{$course->id}}.</td>
                                    <td>{{Str::limit($course->title,25)}}</td>
                                    <td><img src="{{ asset('storage/courseimg/'.$course->image) }}" width="100px" height="65px"></td>
                                    <td>{!! $course->description !!}</td>
                                    <td>{{$course->category->name}}</td>
                                    <td>U MG MG</td>
                                    {{-- <td>{{ $course->created_at->diffForHumans() }}</td> --}}
                                    <td>{{ $course->price}}</td>
                                    <td>{{ $course->range}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('course.edit',[$course->id])}}" class="btn btn-info btn-sm mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <form action="{{route('course.destroy',[$course->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </t-body>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

