@extends('layouts.login')

@section('title', 'Login | eLearning')


@section('content')

    <div class="d-flex align-items-center" style="min-height: 100vh">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px; margin-top: -30px;">




            <div class="text-center mt-0 mb-0">

            <a href="/" class="p-2 text-decoration-none d-flex justify-content-center">
                <i class="fas fa-graduation-cap mr-2" style="font-size:46px; color:#000000; "></i>
                <span class="d-none d-xs-md-block" style="font-size:30px; color:#000000;">{{(config('app.name'))}}</span>
            </a>
{{--
                <div class="avatar avatar-lg">
                    <img src="assets/images/logo/primary.svg" class="avatar-img rounded-circle" alt="LearnPlus" />
                </div> --}}
            </div>


            {{-- <div class="d-flex justify-content-center mb-5 navbar-light">
                <a href="dashboard.html" class="navbar-brand m-0">nLearning</a>
            </div> --}}



            <div class="card navbar-shadow">
                <div class="card-header text-center">
                    <h4 class="card-title">Iniciar Sesion</h4>
                    <p class="card-subtitle">Accede a tu cuenta</p>
                </div>
                <div class="card-body">



                    <a href="student-dashboard.html" class="btn btn-light btn-block">
                        <span class="fab fa-google mr-2"></span>
                        Continuar con Google
                    </a>

                    <div class="page-separator">
                        <div class="page-separator__text">o</div>
                    </div>

                    <form action="/" novalidate method="get">
                        <div class="form-group">
                            <label class="form-label" for="email">Tu correo Electronico:</label>
                            <div class="input-group input-group-merge">
                                <input id="email" type="email" required="" class="form-control form-control-prepended" placeholder="Correo Electronico">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fa fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Tu Contraseña:</label>
                            <div class="input-group input-group-merge">
                                <input id="password" type="password" required="" class="form-control form-control-prepended" placeholder="Contraseña">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fa fa-key"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
                        </div>
                        <div class="text-center">
                            <a href="forgot-password" class="text-black-70" style="text-decoration: underline;">¿Olvidaste tu contraseña? </a>
                        </div>
                    </form>
                </div>

                <!---
                <div class="card-footer text-center text-black-50">
                    ¿No estas registrado ? <a href="signup.html">Rregistrate ahora</a>
                </div>
                -->

            </div>
        </div>
    </div>

@endsection
