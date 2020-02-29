@extends('layouts.login')

@section('title', 'Login | eLearning')


@section('content')





            {{-- <div class="d-flex justify-content-center mb-5 navbar-light">
                <a href="dashboard.html" class="navbar-brand m-0">nLearning</a>
            </div> --}}

            <div class="card" style="

                        border: none;
                        border-radius: 5px;
                ">

                <div class="card-header text-center bg-dark p-3" style="border-top-left-radius: 5px;
                border-top-right-radius: 5px;" >
                    <h4 class="card-title  text-white">Iniciar Sesion</h4>
                    <p class="card-subtitle">Accede a tu cuenta</p>
                </div>
                <div class="card-body">



                    <a href="student-dashboard.html" class="btn btn-light btn-block border-dark">
                        <span class="fab fa-google mr-2"></span>
                        Iniciar sesion con Google
                    </a>

                    <div class="page-separator">
                        <div class="page-separator__text">o</div>
                    </div>




                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label class="form-label" for="email">Tu correo Electronico:</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="email"
                                    class="form-control form-control-prepended @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                    type="email"
                                    placeholder="Correo Electronico">

                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fa fa-envelope"></span>
                                    </div>
                                </div>



                            </div>

                              @error('email')
                               <div class="input-group input-group-merge">

                                    <strong style="color:red">{{ $message }}</strong>

                                </div>
                                @enderror

                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Tu Contraseña:</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control form-control-prepended @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="Contraseña">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fa fa-key"></span>
                                    </div>
                                </div>

                                @error('password')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar Usuario') }}
                                    </label>
                                </div>
                        </div>


                        <div class="form-group ">

                             <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Iniciar Sesion') }}
                                </button>

                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a href="{{ route('password.request') }}" class="text-black-70" style="text-decoration: underline;">
                                {{ __('¿Olvidaste tu contraseña? ') }}
                                </a>
                            </div>
                        @endif


                    </form>
                </div>

                <!---
                <div class="card-footer text-center text-black-50">
                    ¿No estas registrado ? <a href="signup.html">Rregistrate ahora</a>
                </div>
                -->

            </div>







@endsection








