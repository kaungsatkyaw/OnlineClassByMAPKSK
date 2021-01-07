@extends('layouts.admin')

@section('title')
    New Category
@endsection

@section('content')
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
                            <li class="breadcrumb-item"><a href="{{route('category.index')}}">Home</a></li>
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
                            Edit Category
                            <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form role="form" action="{{ route('category.update',[$category->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="cname">Category Name:</label>
                                        <input type="input" class="form-control" id="cname" name="name"
                                            placeholder="Enter Category Name" value="{{$category->name}}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">Update Category</button>
                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
