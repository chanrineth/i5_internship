<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>@yield('title') | Creative Blog</title>

    <!-- Font Awesome Icons -->
    <link href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('/node_modules/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="{{ asset('/css/creative.css') }}" rel="stylesheet">
    @yield('css')

</head>

<body id="page-top">

@include('partials.navigation')
@include('partials.header')
@yield('content')
@include('partials.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('/node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>


@yield('script')

<!-- Custom scripts for this template -->
<script src="{{ asset('/js/creative.min.js') }}"></script>

</body>

</html>
