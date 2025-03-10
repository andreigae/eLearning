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
        <link type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css" href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">

    </head>

    <body class="login" style="
    background: url('{{ URL::asset('assets/images/background.png') }}') no-repeat 0; background-size:cover; background-color: #000;">

        <style type="text/css">
            .outer
                {
                   display: -ms-flexbox;
                   display: -webkit-flex;
                   display: flex;

                   /* Center vertically */
                   align-items: center;

                   /*Center horizontaly */
                   justify-content: center;

                   /*Center horizontaly ie */
                   -ms-flex-pack: center;

                    min-height: 100%;
                    height:100px;
                }

                 @media (min-width: 1200px) {
                    .outer-content {
                     max-width: 550px;
                   }
                }

               @media (max-width: 578px) {
                    .outer {
                      display: block;
                   }

                    body{
                      background: #ffffff!important;
                      background-image: none;
                    }

                    .card {
                     margin:0!important;
                     margin-bottom:0!important;
                     border-radius: 0!important;
                     border:0!important;
                     box-shadow:none!important;
                   }

                   .card-header{
                     border-radius: 0!important;
                   }
                }

                  @media screen and (max-height: 550px) and (min-width: 578px){
                    .outer {
                      display: block;
                      margin:auto;
                      min-width: 450px;
                      padding-top: 10px;
                     }

                     .outer-content{
                        margin:auto;
                     }
                  }

                  @media screen and (max-height: 550px) and (max-width: 578px)  {
                   .outer {
                      display: block;
                   }
                   .col-md-6{
                    flex: 0 0 100%;
                        max-width: 100%;
                    }
                    body{
                      background: #ffffff!important;
                      background-image: none;
                    }
                    .card {
                     margin:0!important;
                     margin-bottom:0!important;
                     border-radius: 0!important;
                     border:0!important;
                     box-shadow:none!important;
                   }

                   .card-header{
                     border-radius: 0!important;
                   }
                }
        </style>
        <div class="outer">
            <div class="col-sm-8 col-md-6 col-lg-4 outer-content" style="padding: 0;">
                @yield('content')
            </div>
        </div>


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
