<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="manifest" href="{{ URL::asset('assets//manifest.json') }}">
        <meta name="theme-color" content="#0f1112">

        <title> @yield('title')</title>

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots" content="noindex">
        @stack("stylesFrist")

        <!-- Material Design Icons -->
        <link type="text/css" href="{{ URL::asset('assets/css/material-icons.css') }}" rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">

        <!-- App CSS -->
        <link type="text/css" href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ URL::asset('assets/css/mytheme.css') }}" rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css" href="{{ URL::asset('assets/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

@stack("styles")

    </head>

    <body class="body-fluid">
        @include('partials.default.navbar')
        <!-- Header Layout Content -->

        <div class="main">
        <div class="mdk-header-layout__content  content-p0" >

            <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
                <div class="mdk-drawer-layout__content page ">

                    @yield('content')

                </div>


                @include('partials.default.sidebar')

            </div>
        </div>

        @yield('footer')

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
@stack("scripts")


</div>
    </body>

</html>
