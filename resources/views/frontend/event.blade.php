@extends('layouts.website')

@section('title')
    Unica:Events
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
        <span>Events</span>
    </div>
</div>
<!-- Breadcrumb section end -->


<!-- events section -->
<section class="full-courses-section spad pt-0">
    <div class="container">
        <div class="row">
            <!-- event item -->
            @foreach ($events as $event)
            <div class="col-lg-4 col-md-6 event-item">
                <div class="event-thumb">
                    <img src="{{ asset('pic/Eventimg/' . $event->image) }}" alt="">
                    <div class="event-date">
                        <span>{{ $event->date}}</span>
                    </div>
                </div>
                <div class="event-info">
                    <h4><?php
                        $newtext = wordwrap($event->title,  30, "<br>", true);
                        
                        echo $newtext;
                        ?></h4>
                    <p><i class="fa fa-calendar"></i> {{$event->time}} <i class="fa fa-map-marker"></i> {{$event->place}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Courses section end-->


@include('include.footer')

@endsection
