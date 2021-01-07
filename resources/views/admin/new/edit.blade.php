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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
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
                            Edit News
                            <a href="{{ route('pagenew.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>
                    <form role="form" action="{{ route('pagenew.update',[$pagenew->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            @include('include.error')
                            <div class="form-group">
                                <label for="name">Title:</label>
                                <input type="text" class="form-control" name="title" id="name"
                                    placeholder="Enter title" value="{{$pagenew->title}}" required>
                            </div>
                            <div class="form-group">
                                <label for="select">Category:</label>

                                <select name="category" id="select" class="form-control" required>
                                    <option value="" selected style="display:none;">Select Category</option>
                                    @foreach ($categories as $c)
                                        <option value="{{ $c->id }}" @if($pagenew->category_id == $c->id) selected @endif >{{ $c->name }}</option>
                                    @endforeach
                                </select>
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
                                            <img src="{{asset('storage/newsimg/'. $pagenew->image) }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control newsdescription" id="description"
                                    placeholder="Enter Description">{!! $pagenew->description !!}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update News</button>

                        </div>
                        <!-- /.card-body -->



                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
