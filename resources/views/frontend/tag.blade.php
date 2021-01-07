@extends('layouts.website')

@section('title')
    Unica:News
@endsection

@section('content')
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('include.header')
    <!-- Breadcrumb section -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
            <span><a href="{{route('frontend.news')}}"> Back</a></span> <i class="fa fa-angle-right"></i>
            <span>News</span>
        </div>
    </div>
    <!-- Breadcrumb section end -->

    <!-- Blog page section  -->
    <section class="blog-page-section spad pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 post-list">
                    @if ($tags->count() == 0)
                        <div align="center" class="mt-3">
                            <h3><i class="fas fa-exclamation-triangle"></i> Oop!. There is nothing news for that !.
                            </h3>
                        </div>
                    @else
                        @foreach ($tags as $new)
                            <a href="{{ route('frontend.detail', [$new->id]) }}">
                                <div class="post-item course-item p-3">
                                    <div class="post-thumb set-bg"
                                        data-setbg="{{ asset('storage/newsimg/' . $new->image) }}">
                                    </div>
                                    <div class="post-content">
                                        <h3>{{ ucfirst($new->title) }}</h3>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar-o"></i>
                                                {{ $new->created_at->format('d M Y') }}</span>
                                            <span><i class="fa fa-user"></i> {{ Str::ucfirst($new->category->name) }}</span>
                                        </div>
                                        <p>{!! Str::limit($new->description, 500, '...') !!}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif

                    <div>
                        {{ $tags->links() }}
                    </div>
                    {{-- <ul class="site-pageination">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul> --}}
                </div>
                <!-- sidebar -->
                <div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
                    <!-- widget -->
                    <div class="widget">
                        <form class="search-widget" action="{{ route('frontend.news') }}" method="POST">
                            @csrf
                            <input type="text" placeholder="Search..." name="q">
                            <button><i class="ti-search"></i></button>
                        </form>
                    </div>
                    <!-- widget -->
                    <div class="widget">
                        <h5 class="widget-title">Recent News</h5>
                        <div class="recent-post-widget">
                            <!-- recent post -->
                            @foreach ($recentnews as $rnew)
                                <a href="{{route('frontend.detail',$rnew->id)}}">
                                    <div class="rp-item course-item">
                                        <div class="rp-thumb set-bg"
                                            data-setbg="{{ asset('storage/newsimg/' . $rnew->image) }}"></div>
                                        <div class="rp-content">
                                            <h6>{{ $rnew->title }}</h6>
                                            <p><i class="fa fa-clock"></i> {{ $rnew->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- widget -->
                    <div class="widget">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tags">
                            @foreach ($categories as $c)
                                <a href="{{route('frontend.category',$c)}}">{{ Str::upper($c->name) }}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- widget -->
                    <div class="widget">
                        <h4 class="widget-title">Categories</h4>
                        <ul>
                            @foreach ($categories as $c)
                                <li><a href="{{route('frontend.category',$c)}}">{{ Str::ucfirst($c->name) }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- widget -->
                    <div class="widget">
                        <img src="{{asset('frontend/img/ad.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog page section end -->


    <!-- Newsletter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                        <h3>NEWSLETTER</h3>
                        <p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="Enter your email">
                        <button class="site-btn">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->
    @include('include.footer')

@endsection
