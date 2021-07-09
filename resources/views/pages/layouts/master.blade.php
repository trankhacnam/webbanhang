<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('bower_components/user_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/user_assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/user_assets/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/user_assets/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/user_assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/user_assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/user_assets/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('bower_components/user_assets/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('bower_components/user_assets/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('bower_components/user_assets/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('bower_components/user_assets/images/ico/apple-touch-icon-57-precomposed.png') }}">
    @yield('css')
</head><!--/head-->

<body>
    @include('pages.layouts.header')
    @include('pages.layouts.slider')
    @yield('content')
    @include('pages.layouts.footer')

    <script src="{{ asset('bower_components/user_assets/js/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/user_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/user_assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('bower_components/user_assets/js/price-range.js') }}"></script>
    <script src="{{ asset('bower_components/user_assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('bower_components/user_assets/js/main.js') }}"></script>
    @yield('js')
</body>
</html>
