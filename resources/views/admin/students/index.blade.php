@extends('layouts.admin')

@section('title')
    Students
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Students</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Students</li>
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
                            Student Request List
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <t-head>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>State</th>
                                    <th>Action</th>
                                </tr>
                            </t-head>
                            @foreach ($students as $student)
                            <t-body >
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->user->name}}</td>
                                    <td>{{$student->course->title}}</td>
                                    <td>@if ($student->confirm == 1)
                                            <span class="badge badge-success">student</span></td>
                                        @else
                                            <span class="badge badge-info">pending</span></td>
                                        @endif
                                    <td>
                                        @if ($student->confirm == 1)
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Kick</button>
                                        @else
                                            <a href="{{route('student.accept',[$student->id])}}"><button class="btn btn-success btn-sm mr-1"><i class="fa fa-check"></i> Accept</button></a>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Cancel</button>
                                        @endif
                                        
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

