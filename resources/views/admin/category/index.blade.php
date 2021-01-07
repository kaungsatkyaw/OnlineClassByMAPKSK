@extends('layouts.admin')

@section('title')
    Category List
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                            Category lists
                            <a href="{{route('category.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Category</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <t-head>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </t-head>
                            @foreach ($categories as $category)
                            <t-body>
                                <tr>
                                    <td>{{$category->id}}.</td>
                                    <td>{{ucfirst($category->name)}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('category.edit',[$category->id])}}" class="btn btn-info btn-sm mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <form action="{{route('category.destroy',[$category->id])}}" method="POST">
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
