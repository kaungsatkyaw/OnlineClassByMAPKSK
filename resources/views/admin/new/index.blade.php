@extends('layouts.admin')

@section('title')
    News
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">News</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">New</li>
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
                            Latest New
                            <a href="{{route('pagenew.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </t-head>
                            @foreach ($news as $new)
                            <t-body >
                                <tr>
                                    <td>{{$new->id}}.</td>
                                    <td>{{ucfirst($new->title)}}</td>
                                    <td><img src="{{ asset('storage/newsimg/'.$new->image) }}" width="100px" height="65px"></td>
                                    <td>{!! $new->description !!}</td>
                                    <td>{{$new->category->name}}</td>
                                    {{-- <td>{{ $new->created_at->diffForHumans() }}</td> --}}
                                    <td>{{ $new->created_at->format('d/m/Y') }}</td>
                                    <td class="d-flex">
                                        <a href="{{route('pagenew.edit',[$new->id])}}" class="btn btn-info btn-sm mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <form action="{{route('pagenew.destroy',[$new->id])}}" method="POST">
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

