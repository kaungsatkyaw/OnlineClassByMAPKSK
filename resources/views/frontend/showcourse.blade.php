@extends('layouts.website')

@section('title')
    Course : Detail
@endsection

@section('content')
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('include.header')
    @foreach ($courses as $course)

        <!-- Breadcrumb section -->
        <div class="site-breadcrumb" style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('{{ asset('pic/courseimg/' . $course->image) }}') no-repeat;
                                            background-position:top;background-size:cover;">
            <div class="container">
                <a href="{{ url('/') }}">
                    <font color="#f6783a"><i class="fa fa-home"></i>Home</font>
                </a> <i class="fa fa-angle-right"></i>
                <span><a href="{{ route('frontend.courses') }}">
                        <font color="#f6783a">Back</font>
                    </a></span> <i class="fa fa-angle-right"></i>
                <span>Course Detail</span>
            </div>
            <br>
            <div style="height: 150px;" class="container mb-fix my-5 ">
                <h3 style="color:#fff;">{{ $course->title }}</h3>
                <p class="my-4" style="color: #fff;letter-spacing:1px;font-weight:50px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus
                    sed
                    in nunc.
                    Vestibulum tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa
                    malesuada.
                </p>
                <img src="{{ asset('frontend/img/member/3.jpg') }}" alt="" width="40px"
                    style="height: 40px;border-radius:50%;margin-right:20px;"> <a href="#"><span
                        style="font-size: 13px;color:#fff;margin-right:20px;"> {{$course->teacher->name}}</span></a><i class="fa fa-clock"
                    style="color:#fa783a;"></i> <span
                    style="font-size: 13px;color:#fff;">{{ $course->created_at->format('d M Y') }}</span>
            </div>
        </div>
        <!-- Breadcrumb section end -->

        <section class="blog-page-section spad py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="mb-4">Overview</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie
                            rhoncus sed in nunc. Vestibulum tincidunt facilisis ligula sed viverra. Duis porttitor sapien
                            maximus, volutpat massa malesuada. Curabitur orci est, ut molestie eget orci, tincidunt dictum
                            felis.
                            Cras ante nunc, pharetra eu rutrum aliquet, egestas eget ex. Suspendisse potenti. Quisque
                            asvitae
                            eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh
                            <br><br>
                            Fusce imperdiet, eros non fringilla auctor, dolor leo blandit magna, in pretium erat elit id
                            neque.
                            Nulla sagittis consequat arcu euscura dignissim. Donec ultricies id ante vel blandit. Integer
                            sit
                            amet erat tincidunt, dictum orci non, tincidunt nisi. Crasania nisl eu aliquet pharetra. Duis
                            finibus pulvinar tellus, sed convallis lectus faucibus vitae.
                            Fusce rhoncus placerat magna, nec fermentum ex tristique eu. Donec aliquet purus lectus, ut
                            finibus
                            augue porta ac. Nullam ultricies tempus libero.</p>
                        <br>
                        <h3 class="my-3">Course Feature</h3>
                        <div class="row my-4">
                            <div class="col-md-4 my-2">
                                <i class="fa fa-user mr-2" style="color:#fa783a;"></i> Instructor: U MG MG
                            </div>
                            <div class="col-md-4 my-2">
                                <i class="fa fa-tag mr-2" style="color:#fa783a;"></i> Category: Python
                            </div>
                            <div class="col-md-4 my-2">
                                <i class="fa fa-users mr-2" style="color:#fa783a;"></i> Students: 41
                            </div>
                            <div class="col-md-4 my-2">
                                <i class="fa fa-clock mr-2" style="color:#fa783a;"></i> Duration: 12 weeks
                            </div>
                            <div class="col-md-4 my-2">
                                <i class="fas fa-globe-europe mr-2" style="color:#fa783a;"></i> language: English
                            </div>
                            <div class="col-md-4 my-2">
                                <i class="fas fa-book-open mr-2" style="color:#fa783a;"></i> Lessons: 121
                            </div>
                        </div>
                        <br>
                        <h3 class="mb-3">Course Content</h3>
                        <div style="background:#edebeb;border-radius:10px;font-size:14px;"
                            class="d-flex justify-content-between align-items-center p-2 mb-3">
                            <div><i class="fa fa-angle-right mx-2"></i> Introduction</div>
                            <div><button class="btn btn-info btn-sm" style="border-radius: 50px;font-size:12px;">view
                                    course</button></div>
                        </div>
                        <div style="background:#edebeb;border-radius:10px;font-size:14px;"
                            class="d-flex justify-content-between align-items-center p-2 mb-3">
                            <div><i class="fa fa-angle-right mx-2"></i> 1.1 What is Python</div>
                            <div><button class="btn btn-info btn-sm" style="border-radius: 50px;font-size:12px;">view
                                    course</button></div>
                        </div>
                        <div style="background:#edebeb;border-radius:10px;font-size:14px;"
                            class="d-flex justify-content-between align-items-center p-2 mb-3">
                            <div><i class="fa fa-angle-right mx-2"></i> 1.2 Variable</div>
                            <div><button class="btn btn-info btn-sm" style="border-radius: 50px;font-size:12px;">view
                                    course</button></div>
                        </div>
                        <div style="background:#edebeb;border-radius:10px;font-size:14px;"
                            class="d-flex justify-content-between align-items-center p-2 mb-3">
                            <div><i class="fa fa-angle-right mx-2"></i> 1.3 Conditions</div>
                            <div><button class="btn btn-info btn-sm" style="border-radius: 50px;font-size:12px;">view
                                    course</button></div>
                        </div>
                        <div style="background:#edebeb;border-radius:10px;font-size:14px;"
                            class="d-flex justify-content-between align-items-center p-2 mb-3">
                            <div><i class="fa fa-angle-right mx-2"></i> 1.4 Array</div>
                            <div><button class="btn btn-info btn-sm" style="border-radius: 50px;font-size:12px;">view
                                    course</button></div>
                        </div>
                        <div style="background:#edebeb;border-radius:10px;font-size:14px;"
                            class="d-flex justify-content-between align-items-center p-2 mb-3">
                            <div><i class="fa fa-angle-right mx-2"></i> 1.5 Loops</div>
                            <div><button class="btn btn-info btn-sm" style="border-radius: 50px;font-size:12px;">view
                                    course</button></div>
                        </div>
                        <div style="background:#edebeb;border-radius:10px;font-size:14px;"
                            class="d-flex justify-content-between align-items-center p-2 mb-3">
                            <div><i class="fa fa-angle-right mx-2"></i> 2.1 Simple Program</div>
                            <div><button class="btn btn-info btn-sm" style="border-radius: 50px;font-size:12px;">view
                                    course</button></div>
                        </div>
                        <div style="background:#edebeb;border-radius:10px;font-size:14px;"
                            class="d-flex justify-content-between align-items-center p-2 mb-3">
                            <div><i class="fa fa-angle-right mx-2"></i> 2.2 Prime number Program</div>
                            <div><button class="btn btn-info btn-sm" style="border-radius: 50px;font-size:12px;">view
                                    course</button></div>
                        </div>
                        <br><br>
                        <div class="d-flex justify-content-between">
                            <h4 class="comment-title">Leave Your Comment</h4>
                            <h6>Total Review: </h6>
                        </div>

                        <br>

                        <div class="comment-warp">
                            @if ($course->feedback->count() == 0)
                                <h4 class="comment-title">No Comments</h4>
                            @else
                                <h4 class="comment-title">{{ $course->feedback->count() }} Comments</h4>
                            @endif

                            <ul class="comment-list">
                                @foreach ($course->feedback as $f)
                                    <li>
                                        <div class="comment">
                                            <div class="comment-avator set-bg"
                                                data-setbg="{{ asset('frontend/img/blog/comment/1.jpg') }}"></div>
                                            <div class="comment-content">

                                                <span class="c-date">{{ $f->created_at->format('d M Y') }}</span>
                                                <h5>{{ Str::ucfirst($f->user->name) }}</h5>
                                                <p>{{ $f->text }}</p>

                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="comment-form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{ route('feedback.store') }}" method="POST">
                                        @csrf
                                        <textarea placeholder="Your Message" name="feedback" required></textarea>
                                        <input type="hidden" name="course" value="{{ $course->id }}">
                                        @if (Auth::check())
                                            <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                                        @endif
                                        <button class="site-btn" type="submit">SEND COMMENT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" style="background: #fa783a;">
                                <h3 style="color: #fff;">$ Price</h3>
                            </div>
                            <div class="card-body">
                                <h4>$ {{ $course->price }}/ month</h4>
                                <h5 class="py-2" style="color:#797979;"><strike>$ 170 / month</strike></h5>
                                @if (Auth::check())
                                    @if ($student_panding == 1)
                                        @foreach ($student_tocancel as $s)
                                            <a href="{{route('student.cancel_req',[$s->id])}}"><button class="btn btn-sm btn-danger mt-3 py-3"
                                            style="width:100%;">Cancel
                                            </button></a>
                                        @endforeach
                                    @elseif($student_access == 1)
                                        <button disabled class="btn btn-sm btn-info mt-3 py-3"
                                        style="width:100%;">ALREADY PURCHASED
                                        </button>
                                    @endif
                                @endif
                                <form action="{{ route('student') }}" method="POST">
                                    @csrf
                                    @if (Auth::check())
                                        <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                                    @endif
                                    <input type="hidden" name="course" value="{{ $course->id }}">
                                    @if (Auth::check())
                                        @if($student==1)
                                            
                                        @else
                                            <button type="submit" class="btn btn-sm btn-info mt-3 py-3" style="width:100%;">BUY
                                                THIS COURSE</button>
                                        @endif
                                    @else
                                        <button type="submit" class="btn btn-sm btn-info mt-3 py-3" style="width:100%;">BUY
                                        THIS COURSE</button>
                                    @endif


                                </form>
                            </div>
                        </div><br>
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="fa fa-user"></i> Instructor Info</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('pic/teacherimg/' . $course->teacher->image) }}" width="100%"
                                            style="min-height: 125px;" style="border-radius:10px;">
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <span style="font-size: 16px;font-weight:bold;">
                                            <font color="#fa783a;" size="1px"><i class="fa fa-circle"></i></font>
                                            {{ $course->teacher->name }}
                                        </span>
                                        <p>
                                            <font color="#fa783a;" size="1px"><i class="fa fa-circle"></i></font> {{$course->teacher->position}}
                                            <br>
                                            <font color="#fa783a;" size="1px"><i class="fa fa-circle mr-1"></i></font>
                                            <small>{{ $course->teacher->email }}</small>
                                        </p>

                                        <div class="social">
                                            <a href=""><i class="fab fa-twitter-square"></i></a>
                                            <a href=""><i class="fab fa-facebook-square"></i></a>
                                            <a href=""><i class="fab fa-google-plus-square"></i></a>
                                            <a href=""><i class="fab fa-linkedin"></i></a>
                                            <a href=""><i class="fa fa-rss-square"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <center><img src="{{ asset('frontend/img/ad.jpg') }}" alt=""></center>

                    </div>
                </div>
            </div>
        </section>

    @endforeach
    @include('include.footer')
@endsection
