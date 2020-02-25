@extends('layouts.app')

@section('title', 'Editar Cuenta | eLearning')


@section('content')
<div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                    <li class="breadcrumb-item active">Editar Cuenta</li>
                </ol>
                <h1 class="h2">Editar mi Cuenta</h1>

                <div class="card">
                    <ul class="nav nav-tabs nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" href="#first" data-toggle="tab">Mi Cuenta</a>
                        </li>
                    </ul>
                    <div class="tab-content card-body">
                        <div class="tab-pane active" id="first">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <label for="avatar" class="col-sm-3 col-form-label form-label">Imagen de perfil</label>
                                    <div class="col-sm-9">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <div class="icon-block rounded">
                                                    <i class="material-icons text-muted-light md-36">photo</i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="custom-file" style="width: auto;">
                                                    <input type="file" id="avatar" class="custom-file-input">
                                                    <label for="avatar" class="custom-file-label">Seleccionar una foto</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-bottom" style="margin-bottom: 15px; margin-top: 15px;"> Cambiar mis datos personales</div>

                                <div class="form-group row">
                                    <label for="name" class="mt-2 col-sm-3 col-form-label form-label">Nombre Completo</label>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-md-6 mt-2">
                                                <input id="name" type="text" class="form-control" placeholder="Nombre">
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <input type="text" class="form-control" placeholder="Apellidos">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label form-label">Correo Electronico</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">mail</i>
                                                </div>
                                            </div>
                                            <input type="text" id="email" class="form-control" placeholder="Correo Electronico" value="contact@example.com">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="website" class="col-sm-3 col-form-label form-label">Telefono</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">phone</i>
                                                </div>
                                            </div>
                                            <input type="text" id="website" class="form-control" placeholder="www." value="0034644737767">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="website" class="col-sm-3 col-form-label form-label">Id Usuario</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">perm_identity</i>
                                                </div>
                                            </div>
                                            <input type="text" id="id_user" class="form-control" disabled value="11006789">
                                        </div>
                                    </div>
                                </div>


                                <div class="border-bottom" style="margin-bottom: 15px; margin-top: 30px;"> Datos de Factuarcion</div>

                                <div class="form-group row">
                                    <label for="name_on_invoice" class="col-sm-3 col-form-label form-label">Name on Invoice</label>
                                    <div class="col-sm-6 col-md-6">
                                        <input id="name_on_invoice" type="text" class="form-control" value="Adrian Demian">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="billing_address" class="col-sm-3 col-form-label form-label">Address</label>
                                    <div class="col-sm-6 col-md-6">
                                        <input id="billing_address" type="text" class="form-control" value="Sunny Street, 21, Miami, Florida">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="billing_country" class="col-sm-3 col-form-label form-label">Country</label>
                                    <div class="col-sm-6 col-md-6">
                                        <select id="billing_country" class="custom-control custom-select form-control">
                                            <option value="1" selected>USA</option>
                                            <option value="2">India</option>
                                            <option value="3">United Kingdom</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-8 offset-sm-3">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-primary">Save Changes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
</div>
@endsection
