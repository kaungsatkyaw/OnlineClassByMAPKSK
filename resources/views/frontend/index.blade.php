@extends('layouts.website')

@section('title')
    Unica
@endsection
@section('content')
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('include.header')


    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/img/hero-slider/1.jpg') }}">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Award Winning UNIVERSITY</div>
                                <h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
                                <p class="hs-des">Education is not just about going to school and getting a degree. It's
                                    about widening your<br> knowledge and absorbing the truth about life. Knowledge is
                                    power.</p>
                                <div class="site-btn">GET STARTED</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{ asset('frontend/img/hero-slider/2.jpg') }}">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Award Winning UNIVERSITY</div>
                                <h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
                                <p class="hs-des">Education is not just about going to school and getting a degree. It's
                                    about widening your<br> knowledge and absorbing the truth about life. Knowledge is
                                    power.</p>
                                <div class="site-btn">GET STARTED</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Counter section  -->
    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="big-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="counter-content">
                        <h2>NEXT COUSRE: Sales & Marketing Alignment</h2>
                        <p><i class="fa fa-calendar-o"></i>07:00 PM - 09:00 PM</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="counter">
                        <div class="counter-item">
                            <h4>20</h4>Days
                        </div>
                        <div class="counter-item">
                            <h4>08</h4>Hrs
                        </div>
                        <div class="counter-item">
                            <h4>40</h4>Mins
                        </div>
                        <div class="counter-item">
                            <h4>56</h4>secs
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->


    <!-- Services section -->
    <section class="service-section spad">
        <div class="container services">
            <div class="section-title text-center">
                <h3>OUR SERVICES</h3>
                <p>We provides the opportunity to prepare for life</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{ asset('frontend/img/services-icons/1.png') }}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Art Studio</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.
                            Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{ asset('frontend/img/services-icons/2.png') }}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Great Facility</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.
                            Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{ asset('frontend/img/services-icons/3.png') }}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Activity Hub</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.
                            Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{ asset('frontend/img/services-icons/4.png') }}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Fully Qualified</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.
                            Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{ asset('frontend/img/services-icons/5.png') }}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Flexible Schedule</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.
                            Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{ asset('frontend/img/services-icons/6.png') }}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Chemistry Lab</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.
                            Aenean dos cursus lania.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->


    <!-- Enroll section -->
    <section class="enroll-section spad set-bg" data-setbg="img/enroll-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h3>ENROLLMENT</h3>
                        <p>Get started with us to explore the exciting</p>
                    </div>
                    <div class="enroll-list text-white">
                        <div class="enroll-list-item">
                            <span>1</span>
                            <h5>Contact</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices
                                augue.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>2</span>
                            <h5>Consulting</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices
                                augue.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>3</span>
                            <h5>Register</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices
                                augue.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                    <img src="{{ asset('frontend/img/encroll-img.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Enroll section end -->



    <!-- Courses section -->
    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>OUR COURSES</h3>
                <p>Building a better world, one course at a time</p>
            </div>
            <div class="row">
                <!-- course item -->
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 ">
                        <a href="{{route('frontend.show',$course->id)}}">
                            <div class="course-item p-3">
                                <div class="course-thumb">
                                    <img src="{{ asset('pic/course/' . $course->image) }}"
                                        style="min-height: 215px;">
                                    <div class="course-cat">
                                        <span>{{ $course->category->name }}</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <div class="date"><i class="fa fa-clock-o"></i> {{ $course->range }}</div>
                                    <h4>{{ ucwords($course->title) }}</h4>
                                    <h4 class="cource-price">${{ $course->price }}<span>/month</span></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Courses section end-->


    <!-- Fact section -->
    <section class="fact-section spad set-bg" data-setbg="{{ asset('frontend/img/fact-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="fact-text">
                        <h2>50</h2>
                        <p>YEARS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                        <h2>80</h2>
                        <p>TEACHERS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>500</h2>
                        <p>STUDENTS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                        <h2>800+</h2>
                        <p>LESSONS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fact section end-->


    <!-- Event section -->
    <section class="event-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>OUR EVENTS</h3>
                <p>Our department initiated a series of events</p>
            </div>
            <div class="row">
                @foreach ($events as $event)
                <div class="col-md-6 event-item">
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
    <!-- Event section end -->


    <!-- Gallery section -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gallery-item gi-big set-bg" data-setbg="{{ asset('frontend/img/gallery/1.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/gallery/1.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/gallery/2.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/gallery/2.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/gallery/3.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/gallery/3.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-long set-bg" data-setbg="{{ asset('frontend/img/gallery/5.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/gallery/5.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-big set-bg" data-setbg="{{ asset('frontend/img/gallery/8.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/gallery/8.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-long set-bg" data-setbg="{{ asset('frontend/img/gallery/4.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/gallery/4.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/gallery/6.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/gallery/6.jpg') }}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{ asset('frontend/img/gallery/7.jpg') }}">
                <a class="img-popup" href="{{ asset('frontend/img/gallery/7.jpg') }}"><i class="ti-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery section -->


    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>LATEST NEWS</h3>
                <p>Get latest breaking news & top stories today</p>
            </div>
            <div class="row">
                @foreach ($news as $new)
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="blog-item course-item p-3">
                                <div class="blog-thumb set-bg" data-setbg="{{ asset('pic/newsimg/' . $new->image) }}">
                                </div>
                                <div class="blog-content">
                                    <h4>{{ $new->title }}</h4>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar-o"></i>
                                            {{ $new->created_at->format('d M Y') }}</span>
                                        <span><i class="fa fa-user"></i> Admin</span>
                                    </div>
                                    <p>{!! Str::limit($new->description, 200, '...') !!}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Blog section -->

    @include('include.footer')

@endsection
