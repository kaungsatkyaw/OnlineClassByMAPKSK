<!-- header section -->
<header class="header-section">
    <div class="container">
        <!-- logo -->
        <a href="{{route('home')}}" class="site-logo"><img src="{{ asset('frontend/img/logo-light.png') }}" alt=""></a>
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div class="header-info">
            <div class="hf-item">
                <i class="fa fa-clock"></i>
                <p style="color: #fff"><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
            </div>
            <div class="hf-item">
                <i class="fa fa-map-marker-alt"></i>
                <p style="color: #fff"><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
            </div>
        </div>
    </div>
</header>
<!-- header section end-->


<!-- Header section  -->
<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            {{-- <a href=""><i class="fa fa-search"></i></a> --}}
            @if (Auth::check())
                @if (Auth::user()->is_admin == 0)
                    <a href="{{route('frontend.profile')}}" class="login_name1">{{ Auth::user()->name}}</a>
                @endif
                
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}"><i class="fa fa-user"></i></a>
                <a href="{{ route('register') }}"><i class="fas fa-address-book"></i></a>
            @endif
        </div>
        <ul class="main-menu">
            <li class="{{ Request::is('/') ?  'active' : null }}"><a href="{{url('/')}}">Home</a></li>
            <li class="{{ Request::segment(1) === 'courses' ? 'active' : null }}"><a href="{{route('frontend.courses')}}">COURSES</a></li>
            <li class="{{ Request::segment(1) === 'news' ? 'active' : null }}"><a href="{{route('frontend.news')}}">News</a></li>
            <li class="{{ Request::segment(1) === 'events' ? 'active' : null }}"><a href="{{route('frontend.event')}}">Event</a></li>
            <li class="{{ Request::segment(1) === 'about' ? 'active' : null }}"><a href="{{route('frontend.about')}}">About us</a></li>
            <li class="{{ Request::segment(1) === 'contact' ? 'active' : null }}"><a href="{{route('frontend.contact')}}">Contact</a></li>
        </ul>
    </div>
</nav>
<!-- Header section end -->
