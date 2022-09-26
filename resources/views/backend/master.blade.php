<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NGen IT</title>
    <!-- ================= Favicon ================== -->

    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">

    <!-- Styles -->
    <link href="{{ asset('assets/backend/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/lib/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @yield('content')


    <!-- jquery vendor -->
    <script src="{{ asset('assets/backend/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assets/backend/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/backend/js/lib/preloader/pace.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/backend/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/scripts.js') }}"></script>
</body>
</html>