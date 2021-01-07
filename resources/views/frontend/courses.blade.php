@extends('layouts.website')

@section('title')
    Unica:Courses
@endsection

@section('content')
<div id="preloder">
    <div class="loader"></div>
</div>

@include('include.header')
<!-- Breadcrumb section -->
<div class="site-breadcrumb">
    <div class="container">
        <a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
        <span>Courses</span>
    </div>
</div>
<!-- Breadcrumb section end -->


<!-- Courses section -->
<section class="full-courses-section spad pt-0">
    <div class="container">
        <div class="row">
            <!-- course item -->
            @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 ">
            <a href="{{route('frontend.show',$course->id)}}">
                <div class="course-item p-3">
                    <div class="course-thumb">
                        <img src="{{asset('pic/courseimg/'.$course->image)}}" style="min-height: 215px;">
                        <div class="course-cat">
                            <span>{{$course->category->name}}</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> {{$course->range}}</div>
                        <h4>{{ucwords($course->title)}}</h4>
                        <h4 class="cource-price">${{$course->price}}<span>/month</span></h4>
                    </div>
                </div>
            </a>
            </div>

            @endforeach

        </div>
        <div>
            {{ $courses->links() }}
            {{-- <ul class="site-pageination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul> --}}
        </div>
    </div>
</section>
<!-- Courses section end-->


@include('include.footer')

@endsection
