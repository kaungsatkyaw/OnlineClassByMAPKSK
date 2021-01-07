@extends('layouts.admin')

@section('title')
    Feedback
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Feedback</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Feedback</li>
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
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <t-head>
                                <tr>
                                    <th>Id</th>
                                    <th>User Name</th>
                                    <th>Feedback</th>
                                    <th>Action</th>
                                </tr>
                            </t-head>
                            @foreach ($feedbacks as $feedback)
                            <t-body >
                                <tr>
                                    <td>{{$feedback->id}}.</td>
                                    <td>{{$feedback->user->name}}</td>
                                    <td>{{$feedback->feedback}}</td>
                                    <td>
                                        <form action="{{route('feedbackAdmin.destroy',[$feedback->id])}}" method="POST">
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

