<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Unica University Template">
    <meta name="keywords" content="event, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/login_register.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/style.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    @yield('content')
</body>

    <!--====== Javascripts & Jquery ======-->
    <script src="{{ secure_asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ secure_asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('frontend/js/jquery.countdown.js') }}"></script>
    <script src="{{ secure_asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ secure_asset('frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ secure_asset('frontend/js/main.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
    <script src="{{ secure_asset('frontend/js/map.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success')}}");
    @endif
    </script>
</html>
