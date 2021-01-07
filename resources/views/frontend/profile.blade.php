@extends('layouts.website')

@section('title')
    Unica: Profile
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
        <span>Profile</span>
    </div>
</div>
<!-- Breadcrumb section end -->

{{-- main section --}}
<div class="container mb-5">
    <div class="row">
        <div class="col-lg-3">
            <img src="https://i.pinimg.com/236x/ac/cd/84/accd84c0bb47795fe2001c28bf4cae0a.jpg" class="img_profile_1" alt="" style="height:300px;">
        </div>
        <div class="col-lg-8">
            <div class="row info_text_frame">
                <div class="col-1 pr-0 icon1 text-right">
                    <i class="fas fa-user"></i>
                </div>
                <div class="col-11">
                    <h5>Name</h5>
                    <p>Kaung Sat Kyaw</p>
                </div>
                <div class="col-1 pr-0 mt-1 icon1 text-right">
                    <i class="fas fa-envelope-open"></i>
                </div>
                <div class="col-11 mt-1">
                    <h5>Email</h5>
                    <p>fired6559@gmail.com</p>
                </div>
                <div class="col-1 pr-0 mt-1 icon1 text-right">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="col-11 mt-1">
                    <h5>Phone No</h5>
                    <p>09692831204</p>
                </div>
                <div class="col-1 pr-0 mt-1 icon1 text-right">
                    <i class="fas fa-map-marker"></i>
                </div>
                <div class="col-11 mt-1">
                    <h5>Address</h5>
                    <p>Thingangyun, Nga Moe yeik, Yangon</p>
                </div>
                <div class="col-1 pr-0 mt-1 icon1 text-right">
                    <i class="fas fa-th-large"></i>
                </div>
                <div class="col-11 mt-1">
                    <h5>Learned Categories</h5>
                    <p>
                        <span class="badge badge-success">PHP</span>
                        <span class="badge badge-success">Laravel</span>
                        <span class="badge badge-success">Vue</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
            <button class="btn btn_edit1">Edit Info</button>
        </div>
    </div>
    {{-- courses  --}}
    <div class="mt-5">
        <h4 style="color: #f6783a;">YOUR COURSES</h4>
    </div>
    <div class="row">
        {{-- card --}}
        <div class="col-lg-4 col-md-6 col-mb-4 mt-5">
            <div class="single_course">
                <div class="course_head">
                    <img class="img-fluid" src="https://colorlib.com/preview/theme/edustage/img/courses/c1.jpg" alt="">
                </div>
                <div class="course_content">
                    <span class="category mb-4 d-inline-block">design</span>
                    <h4 class="mb-3"><a href="#" style="text-decoration: none;color:black;">Computer Engineering</a></h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.
                    </p>
                    <div class="d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="authr_meta">
                            <img src="https://i.pinimg.com/236x/57/f8/da/57f8da4a247c1f8bc99f582df885a0ed.jpg" alt="" class="rounded-circle">
                            <span class="d-inline-block ml-2">Kaung Sat</span>
                        </div>
                        <div class="mt-lg-0 mt-3">
                            <span class="meta-info mr-4">
                                <a href="#" style="text-decoration: none;color:black;">
                                    <i class="far fa-user"></i>
                                    <font class="ml-1">25</font>
                                </a>
                            </span>
                            <span class="meta-info">
                                <a href="#" style="text-decoration: none;color:black;">
                                    <i class="far fa-comment-alt"></i>
                                    <font class="ml-1">2</font>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-mb-4 mt-5">
            <div class="single_course">
                <div class="course_head">
                    <img class="img-fluid" src="https://colorlib.com/preview/theme/edustage/img/courses/c1.jpg" alt="">
                </div>
                <div class="course_content">
                    <span class="category mb-4 d-inline-block">design</span>
                    <h4 class="mb-3"><a href="#" style="text-decoration: none;color:black;">Computer Engineering</a></h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.
                    </p>
                    <div class="d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="authr_meta">
                            <img src="https://i.pinimg.com/236x/57/f8/da/57f8da4a247c1f8bc99f582df885a0ed.jpg" alt="" class="rounded-circle">
                            <span class="d-inline-block ml-2">Kaung Sat</span>
                        </div>
                        <div class="mt-lg-0 mt-3">
                            <span class="meta-info mr-4">
                                <a href="#" style="text-decoration: none;color:black;">
                                    <i class="far fa-user"></i>
                                    <font class="ml-1">25</font>
                                </a>
                            </span>
                            <span class="meta-info">
                                <a href="#" style="text-decoration: none;color:black;">
                                    <i class="far fa-comment-alt"></i>
                                    <font class="ml-1">2</font>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-mb-4 mt-5">
            <div class="single_course">
                <div class="course_head">
                    <img class="img-fluid" src="https://colorlib.com/preview/theme/edustage/img/courses/c1.jpg" alt="">
                </div>
                <div class="course_content">
                    <span class="category mb-4 d-inline-block">design</span>
                    <h4 class="mb-3"><a href="#" style="text-decoration: none;color:black;">Computer Engineering</a></h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.
                    </p>
                    <div class="d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="authr_meta">
                            <img src="https://i.pinimg.com/236x/57/f8/da/57f8da4a247c1f8bc99f582df885a0ed.jpg" alt="" class="rounded-circle">
                            <span class="d-inline-block ml-2">Kaung Sat</span>
                        </div>
                        <div class="mt-lg-0 mt-3">
                            <span class="meta-info mr-4">
                                <a href="#" style="text-decoration: none;color:black;">
                                    <i class="far fa-user"></i>
                                    <font class="ml-1">25</font>
                                </a>
                            </span>
                            <span class="meta-info">
                                <a href="#" style="text-decoration: none;color:black;">
                                    <i class="far fa-comment-alt"></i>
                                    <font class="ml-1">2</font>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-mb-4 mt-5">
            <div class="single_course">
                <div class="course_head">
                    <img class="img-fluid" src="https://colorlib.com/preview/theme/edustage/img/courses/c1.jpg" alt="">
                </div>
                <div class="course_content">
                    <span class="category mb-4 d-inline-block">design</span>
                    <h4 class="mb-3"><a href="#" style="text-decoration: none;color:black;">Computer Engineering</a></h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.
                    </p>
                    <div class="d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                        <div class="authr_meta">
                            <img src="https://i.pinimg.com/236x/57/f8/da/57f8da4a247c1f8bc99f582df885a0ed.jpg" alt="" class="rounded-circle">
                            <span class="d-inline-block ml-2">Kaung Sat</span>
                        </div>
                        <div class="mt-lg-0 mt-3">
                            <span class="meta-info mr-4">
                                <a href="#" style="text-decoration: none;color:black;">
                                    <i class="far fa-user"></i>
                                    <font class="ml-1">25</font>
                                </a>
                            </span>
                            <span class="meta-info">
                                <a href="#" style="text-decoration: none;color:black;">
                                    <i class="far fa-comment-alt"></i>
                                    <font class="ml-1">2</font>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- card --}}
    </div>
    {{-- end course --}}
</div>
@include('include.footer')
@endsection
{{-- end of main section --}}
