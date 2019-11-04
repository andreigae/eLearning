@extends('layouts.app')

@section('title', __('Mejorar cuenta')." | eLearning")

@section('content')
    <div class="row m-0">
        <div class="col-lg container-fluid page__container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                <li class="breadcrumb-item active">Mejorar Cuenta</li>
            </ol>

            <h1 class="h2">Mejorar Cuenta</h1>



            <div class="row card-group-row mb-40pt">
                <div class="col-lg-6 col-sm-12 card-group-row__col">

                    <div class="card card-group-row__card text-center o-hidden card--raised navbar-shadow">

                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1 mb-16pt">
                                        <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                                            <i class="material-icons">person</i>
                                        </span>
                                <h4 class="mb-8pt">Free Trial</h4>
                                <p class="text-black-70">

                                    Acceso completo al modulo 1 y 2
                                    <br>
                                    Aprende como establecer los cimientos de tu negocio
                                    <br>

                                    y a encontrar tu nicho de mercado perfecto

                                    <br>
                                    <br>

                                    Acceso al grupo gratuito de facebook

                                </p>
                            </div>
                            <p class="d-flex justify-content-center align-items-center m-0 mt-2">
                                <span class="h1 m-0 font-weight-normal">Gratis</span>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="student-signup.html" class="btn btn-outline-secondary disabled">Suscripcion Actual</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-sm-12 card-group-row__col">

                    <div class="card card-group-row__card text-center o-hidden">

                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1 mb-16pt">
                                        <span class="w-64 h-64 icon-holder icon-holder--outline-primary rounded-circle d-inline-flex mb-16pt">
                                            <i class="material-icons">person</i>
                                        </span>
                                <h4 class="mb-8pt">Acceso Completo</h4>
                                <p class="text-black-70">Obten acceso completo al programa y <br> desbloquea todas las funcionalidades del sistema</p>
                            </div>
                            <p class="d-flex justify-content-center align-items-center m-0">
                                <span class="h1 m-0 font-weight-normal">499€</span>
                            </p>
                            <p class="lh-1 text-muted mb-0"><small>(Pago Unico)</small></p>

                            <div class="input-group " style="padding-left: 25%; padding-right: 25%; padding-top:12px;">
                                <input type="text" class="form-control" placeholder="Codigo Descuento" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                <div class="input-group-prepend cursor-pointer">
                                    <div class=".input-group-text-codigodto btn btn-primary"  style="cursor: pointer;" id="btnGroupAddon"><i class="material-icons ">done</i></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="student-account-billing-payment-information.html" class="btn btn-primary">Empezar Ahora</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
