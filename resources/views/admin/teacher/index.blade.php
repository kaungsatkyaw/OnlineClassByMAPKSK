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
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Teacher</li>
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
                            Teacher All
                            <a href="{{route('teacher.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <t-head>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Working At</th>
                                    <th>Bio</th>
                                    <th>Action</th>
                                </tr>
                            </t-head>
                            @foreach ($teachers as $teacher)
                            <t-body >
                                <tr>
                                    <td>{{$teacher->id}}.</td>
                                    <td>{{ucfirst($teacher->name)}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td><img src="{{ asset('storage/teacherimg/'.$teacher->image) }}" width="100px" height="65px"></td>
                                    <td>{{$teacher->position}}</td>
                                    <td>{{$teacher->workingat}}</td>
                                    <td>{!! $teacher->bio !!}</td>
                                    <td class="d-flex">
                                        <a href="{{route('teacher.edit',[$teacher->id])}}" class="btn btn-info btn-sm mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <form action="{{route('teacher.destroy',[$teacher->id])}}" method="POST">
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

