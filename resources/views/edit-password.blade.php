@extends('layouts.app')

@section('title', 'Cambiar Contraseña | eLearning')

@section('content')
<div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                    <li class="breadcrumb-item active">Cambiar contraseña</li>
                </ol>
                <h2 class="h2">Cambiar contraseña</h2>

                <div class="card">

                    <div class="tab-content card-body">

                            <form action="#" class="form-horizontal">

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label form-label">Contraseña Actual</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">lock</i>
                                                </div>
                                            </div>
                                            <input type="password" id="password" class="form-control" placeholder="Contraseña Actual">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label form-label">Contraseña Nueva </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">lock</i>
                                                </div>
                                            </div>
                                            <input type="password" id="password" class="form-control" placeholder="Contraseña Nueva ">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label form-label">Confirmar Contraseña</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">lock</i>
                                                </div>
                                            </div>
                                            <input type="password" id="password" class="form-control" placeholder="Confirmar Contraseña">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col offset-md-4">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-primary">Guardar Cambios</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
</div>
@endsection
