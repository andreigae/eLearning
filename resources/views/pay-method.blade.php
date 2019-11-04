
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Metodo de pago | Guía para emprender</title>

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

<body class="layout-fluid">

@include('partials.default.navbar')


<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
        <div class="mdk-drawer-layout__content page ">

            <div class="container-fluid page__container p-0">
                <div class="row m-0">
                    <div class="col-lg container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">Edit Account</li>
                        </ol>

                        <h1 class="h2">Metodo de pago</h1>

                        <div class="card">
                            <div class="list-group list-group-fit">






                                <div class="row border-0" >



                                    <div class="col-lg-6 col-xs-md-12 col-xl-7 p-12pt ">

                                        <div class="list-group-item border-0 text-center text-lg-left">
                                            <h3>Tu metodo de pago actual es: <b> Pago con Tarjeta</b></h3>
                                            <h5>Puedes pagar con:</h5>
                                            <img src="{{ URL::asset("assets/images/paypal-visa-mastercard.png")}}" style="width: 300px;" >
                                        </div>

                                        <div class="list-group-item border-0 mt-3 text-center text-lg-left">
                                            <a href="{{ URL::to("/pay-method/edit-paymethod")}}" class="btn btn-primary">Editar mis metodos de pago</a>
                                        </div>


                                    </div>
                                    <div class="col-lg-6 col-xs-md-12 col-xl-5" >
                                        <div class="d-flex justify-content-center" style="background: #fbfbfc; padding: 20px;">

                                            <div  style="background-position: 0px -20px!important; background-image: url('{{ URL::asset("assets/images/globe.png")}}'); box-shadow: 0 10px 40px rgba(0,0,0,.1);border-radius: 20px; border:1px solid #e8e8e8; width: 400px; height: 230px; padding: 20px;">

                                                <img src="{{ URL::asset("assets/images/visa.svg")}}" class="float-right" width="60" height="60" >

                                                <img src="{{ URL::asset("assets/images/chipcard.png")}}" width="50" height="50" style="margin-top: 60px" >

                                                <div class="row" style="margin-top: 10px">
                                                    <div class="col" style="font-size: 23px">
                                                        XXXX XXXX XXXX 6154
                                                    </div>
                                                </div>
                                                <div class="row mt-1" >
                                                    <div class="col font-size-20pt">
                                                        Andrei Gae
                                                    </div>
                                                    <div class="col font-size-20pt text-right mr-2">
                                                        12/21
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>






                            </div>
                        </div>

                    </div>




                </div>
            </div>

        </div>



        @include('partials.default.sidebar')

    </div>



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
