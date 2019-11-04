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
                <!-- Brand -->
                <a href="student-dashboard.html" class="navbar-brand m-0">
                    Guia para emprender
                </a>
            </div>
            <div class="card navbar-shadow">
                <div class="card-header text-center">
                    <h4 class="card-title">Recupera tu cuenta</h4>
                    <p class="card-subtitle">Reestablecer la conraseña de tu cuenta</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-light border-1 border-left-3 border-left-primary d-flex" role="alert">
                        <i class="material-icons text-success mr-3">check_circle</i>
                        <div class="text-body">Si tu email esta registrado en el sistema, recibira un correo con las intrucciones para reestablecer su contraseña.</div>
                    </div>

                    <form action="student-dashboard.html" novalidate method="get">
                        <div class="form-group">
                            <label class="form-label" for="email">Tu correo electronico:</label>
                            <div class="input-group input-group-merge">
                                <input id="email" type="email" required="" class="form-control form-control-prepended" placeholder="Correo electronico">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
                <div class="card-footer text-center text-black-50">¿Recuerdas tu contraseña? <a href="/login">Iniciar sesion</a></div>
            </div>
        </div>
    </div>
@endsection
