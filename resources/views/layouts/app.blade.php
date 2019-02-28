<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }} " rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
@include('partials.header')
@include('partials.navigation')
@yield('content')
@include('partials.footer')

<!-- Bootstrap core JavaScript -->

<script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.js ') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js') }}"></script>

<!-- Contact form JavaScript -->
<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('js/contact_me.js') }}"></script>

<!-- Custom scripts for txhis template -->
<script src="{{asset('js/agency.min.js')}}"></script>

</body>

</html>
