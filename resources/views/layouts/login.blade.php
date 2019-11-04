<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots" content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css" href="{{ URL::asset('assets/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css" href="{{ URL::asset('assets/css/material-icons.css') }}" rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css" href="{{ URL::asset('assets/css/fontawesome.css') }}" rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css" href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">

    </head>

    <body class="login">

        @yield('content')

        <!-- jQuery -->
        <script src="{{ URL::asset('assets/vendor/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ URL::asset('assets/vendor/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/bootstrap.min.js') }}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ URL::asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>

        <!-- MDK -->
        <script src="{{ URL::asset('assets/vendor/dom-factory.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/material-design-kit.js') }}"></script>

        <!-- App JS -->
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>

        <!-- Highlight.js -->
        <script src="{{ URL::asset('assets/js/hljs.js') }}"></script>


    </body>

</html>
