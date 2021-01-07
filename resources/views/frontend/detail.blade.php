@extends('layouts.website')

@section('title')
    Unica:News Details
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
            <span>New Detail</span>
        </div>
    </div>
    <!-- Breadcrumb section end -->

    <section class="blog-page-section spad pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach ($news as $new)
                        <div class="post-item post-details">
                            <img src="{{ asset('pic/newsimg/' . $new->image) }}" class="post-thumb-full" alt="">
                            <div class="post-content">
                                <h3>{{ Str::ucfirst($new->title) }}</a></h3>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> {{ $new->created_at->format('d M Y') }}</span>
                                    <span><i class="fa fa-tag"></i> {{ $new->category->name }}</span>
                                </div>
                                <p>{!! $new->description !!}</p>
                                <p> Fusce imperdiet, eros non fringilla auctor, dolor leo blandit magna, in pretium erat
                                    elit id
                                    neque. Nulla sagittis consequat arcu euscura dignissim. Donec ultricies id ante vel
                                    blandit.
                                    Integer sit amet erat tincidunt, dictum orci non, tincidunt nisi. Crasania nisl eu
                                    aliquet
                                    pharetra. Duis finibus pulvinar tellus, sed convallis lectus faucibus vitae. Fusce
                                    rhoncus
                                    placerat magna, nec fermentum ex tristique eu. Donec aliquet purus lectus, ut finibus
                                    augue
                                    porta ac. Nullam ultricies tempus libero.</p>
                                <blockquote>“There is no end to education. It is not that you read a book, pass an
                                    examination,
                                    and finish with education. The whole of life, from the moment you are born to the moment
                                    you
                                    die.”</blockquote>
                                <p>Proin ac neque quis ex malesuada feugiat sed at ligula. Donec efficitur nisl tortor, eget
                                    auctor ex lobortis id. Duis cursus turpis nec venenatis dapibus. Nunc eget rhoncus
                                    purus, a
                                    semper orci. Mauris blandit non arcu malesuada aliquam. Fusce iaculis augue ut neque
                                    sollicitudin, quis interdum enim consectetur. Nullam ut facilisis erat, eget viverra
                                    sem.
                                    Nulla lobortis tempor magna in maximus. Fusce nec ante et nunc elementum rutrum ut in
                                    odio.
                                    Quisque cursus sit amet massa in mollis suspendisse ut ipsum a orci scelerisque
                                    tincidunt.
                                    Curabitur pellentesque lobortis ligula, in scelerisque felis volutpat nec.</p>
                                <p>Aenean et enim aliquet, rutrum ante auctor, euismod urna. Phasellus ac erat faucibus,
                                    laoreet
                                    massa id, sagittis orci. In placerat pharetra lectus vitae gravida. Interdum et
                                    malesuada
                                    fames ac ante ipsum primis in faucibus. Vivamus massa massa, porttitor eget consectetur
                                    sed,
                                    vulputate ac velit. Integer ullamcorper ante ex. Quisque vitae eleifend elit. Vestibulum
                                    mi
                                    lectus, euismod in nunc, posuere eleifend sapien. In commodo euismod lectus quis
                                    porttitor.
                                </p>
                                <div class="tag"><i class="fa fa-tag"></i> EDUCATION, MARKETING</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- sidebar -->
                <div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
                    <!-- widget -->
                    <div class="widget">
                        <h5 class="widget-title">Recent News</h5>
                        <div class="recent-post-widget">
                            <!-- recent post -->
                            @foreach ($recentnews as $rnew)
                                <a href="{{ route('frontend.detail', $rnew->id) }}">
                                    <div class="rp-item course-item">
                                        <div class="rp-thumb set-bg"
                                            data-setbg="{{ asset('pic/newsimg/' . $rnew->image) }}"></div>
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

    @include('include.footer')
@endsection
