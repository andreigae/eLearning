@extends('layouts.login')

@section('title', 'Login | eLearning')


@section('content')

    <div class="d-flex align-items-center" style="min-height: 100vh">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px;">
            <div class="text-center mt-5 mb-1">
                <div class="avatar avatar-lg">
                    <img src="assets/images/logo/primary.svg" class="avatar-img rounded-circle" alt="LearnPlus" />
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5 navbar-light">
                <a href="dashboard.html" class="navbar-brand m-0">Guía para emprender</a>
            </div>
            <div class="card navbar-shadow">
                <div class="card-header text-center">
                    <h4 class="card-title">Iniciar Sesion</h4>
                    <p class="card-subtitle">Accede a tu cuenta</p>
                </div>
                <div class="card-body">
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
