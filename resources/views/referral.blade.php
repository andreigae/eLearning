@extends('layouts.app')

@section('title', __('Mis Cursos')." | eLearning")

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
    <li class="breadcrumb-item active">Recomienda a un amigo</li>
</ol>
<h1 class="h2">Recomienda a un amigo</h1>

<div class="card">
    <ul class="nav nav-tabs nav-tabs-card">
        <li class="nav-item">
            <a class="nav-link active" href="#first" data-toggle="tab">Enviar Invitacion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#second" data-toggle="tab">Mis Ganancias</a>
        </li>
    </ul>



    <div class="tab-content card-body">



        <div class="tab-pane active" id="first">



                <div class="form-group row">
                    <div class="col">

                        <h1 class="h3"> Regalales a tus amigos una prueba gratuita</h1>

                        <p>
                            Invita a tus amigos a probar el training de forma totalmente gratuita. ¡Si se inscriben al programa completo,<b> te pagaremos 200€!</b>
                        </p>

                    </div>
                </div>

                <h4>Como Funciona:</h4>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item border-top-0">1. Invite a tu amigo a probar el training de forma totalmente gratuita ingresando su nombre y correo electrónico a continuación. </li>
                    <li class="list-group-item">2. Tu amigo recibirá un correo electrónico invitándole a iniciar una prueba gratuita. </li>
                    <li class="list-group-item border-bottom-0">3. Si tu amigo se registra y adquiere el training completo, ganarás 200€ que podras transferirlos a tu cuenta de paypal.</li>
                </ul>

                <p> Recomendar el training a los amigos, normalmente estaba limitado a 5 invitaciones por usuario, ¡pero ahora es  ILIMITADO!
                    <br>
                    Puedes recomendar a tandas personas como deseas
                    <br>
                    <b>Los estudiantes están ganando entre 200€ y 2000€ / mes solamente recomendando el training a los amigos.</b>


                </p>

                <h4>Invita a un amigo</h4>



                <div class="alert alert-info" role="alert">
                    <a  class="text-dark" href="{{ URL::to('/edit-account')}}" class="p">
                        <strong>¡Espera!</strong>
                        Tener una foto de perfil mejora las posibilidades de que tus amigos se registren porque podemos personalizar la experiencia. Haga clic aquí para subir una.
                    </a>

                 </div>

            <form action="#" class="form-horizontal">


                <div class="form-group row" id="needs-validation1">
                    <label for="website" class="col-sm-3 col-form-label form-label">Nombre</label>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons md-18 text-muted">perm_identity</i>
                                </div>
                            </div>
                            <input type="text" id="id_user" class="form-control" placeholder="Nombre Amigo" required >
                            <div class="invalid-feedback">Porfavor Introduzca el nombre de su amigo.</div>

                        </div>
                    </div>
                </div>

                <div class="form-group row" id="needs-validation2">
                    <label for="email" class="col-sm-3 col-form-label form-label">Correo Electronico </label>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons md-18 text-muted">mail</i>
                                </div>
                            </div>
                            <input type="text" id="email" class="form-control" placeholder="Correo Electronico Amigo" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{1,10}$">
                            <div class="invalid-feedback">Porfavor Introduzca una direccion de email valida.</div>
                        </div>
                    </div>
                </div>


                <div class="form-group row border-0">
                    <label for="billing_address" class="col-sm-3 col-form-label form-label">Mensaje</label>
                    <div class="col">

                        <div class="border-1 pl-3">

                            <div class="pt-20pt pb-20pt border-bottom-1 text-secondary ">
                                Hola <b id="msg-name">[Name]</b>
                            </div>
                            <textarea class="text-dark form-control form-control-flush pr-2" rows="7">

Recientemente me uní a un programa de entrenamiento que me ayudó a comenzar mi propio negocio de consultaría y mejorar mi vida para mejor.
Si te unes usando mi invitación, obtendrás una prueba gratuita y un descuento en el precio oficial.
Este programa cambió mi vida y sé que tambien puede hacer lo mismo por ti.
</textarea>


                            <div class="pb-20pt pt-20pt border-top-1 text-secondary">

                                ¡ Haga clic en el botón de abajo para aceptar mi invitación si quieres saber mas!

                            </div>



                            </div>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-8 offset-sm-3">
                        <div class="media align-items-center">
                            <div class="media-left">
                                <a href="#" class="btn btn-primary">Enviar Invitación</a>
                            </div>
                        </div>
                    </div>
                </div>



            </form>
        </div>

        <div class="tab-pane" id="second">

            <h1 class="h3"> Mis Ganacias y Seguimiento </h1>
            <p>Mas abajo puede ver sus invitaciones enviadas desde nuestra plataforma, el numero de usuarios registrados y activados, sus ganancias y saldo de cuenta disponible para retirar.</p>

            <div class="row">

                <div class="col-md-4 pt-20pt pl-20pt pr-20pt">
                    <div style="box-shadow: 10px 10px 5px #d1d1d1;" class="alert bg-dark text-white text-center pt-32pt pb-32pt mb-12pt rounded font-size-32pt" role="alert">
                        <strong>10</strong>
                    </div>

                    <div class="text-center text-dark ">Amigos Invitados desde tu cuenta</div>
                </div>

                <div class="col-md-4 pt-20pt pl-20pt pr-20pt">
                    <div style="box-shadow: 10px 10px 5px #d1d1d1;" class="alert bg-dark text-white text-center pt-32pt pb-32pt mb-12pt rounded font-size-32pt" role="alert">
                        <strong>4</strong>
                    </div>

                    <div class="text-center text-dark ">Amigos Registrados - Plan Gratis</div>

                </div>

                <div class="col-md-4 pt-20pt pl-20pt pr-20pt">

                    <div style="box-shadow: 10px 10px 5px #d1d1d1;" class="alert bg-info text-white text-center pt-32pt pb-32pt mb-12pt rounded font-size-32pt" role="alert">
                        <strong>3</strong>
                    </div>

                    <div class="text-center text-dark ">Amigos Registrados - Plan Pago</div>


                </div>

            </div>

            <div class="row justify-content-center"  style="">

                <div class="col-md-4 pt-20pt pl-20pt pr-20pt">

                    <div style="box-shadow: 10px 10px 5px #d1d1d1;" class="alert bg-info text-white text-center pt-32pt pb-32pt mb-12pt rounded font-size-32pt" role="alert">
                        <strong>600€</strong>
                    </div>

                    <div class="text-center text-dark ">Ganancias pendientes</div>
                </div>


                <div class="col-md-4 pt-20pt pl-20pt pr-20pt">
                    <div style="box-shadow: 10px 10px 5px #d1d1d1;" class="alert bg-primary text-white text-center pt-32pt pb-32pt mb-12pt rounded font-size-32pt" role="alert">
                        <strong>0€</strong>
                    </div>

                    <div class="text-center text-dark ">Tus Ganancias Disponibles</div>
                </div>


             </div>

            <div class="row mt-32pt">

                <div class="col-12 alert alert-info alert-dismissible  text-dark border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Todos los fondos que aparecen como "pendientes" en el saldo de su cuenta se retendrán durante 15 días, desde la adquision del plan de pago por parte del cliente recomendado,  con el fin de asegurarse de que el cliente no solicite un reembolso ni abra una disputa de la transacción.
                </div>


                <div class="col-12 alert alert-info alert-dismissible  text-dark border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Después de que los fondos se hayan retenido durante 15 días, pasaran a estar disponibles en el saldo de su cuenta y podrá retirarlos.
                </div>





            </div>



            <div class="row">
                <!-- Wrapper -->
                <div class="table-responsive" data-toggle="lists" data-lists-values='["name", "age"]'>

                    <!-- Search -->
                    <div class="search-form search-form--light mb-3">
                        <input type="text" class="form-control search" placeholder="Buscar">
                        <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                    </div>

                    <!-- Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th style="width: 100px;" class="text-center">Activo</th>
                                <th style="width: 130px;" class="text-center">Fecha registro</th>
                                <th style="width: 110px;" class="text-center">Plan Actual</th>
                                <th style="width: 110px;" class="text-center">Fecha Upgrade</th>
                                <th style="width: 60px;" class="text-center">Ganancia Pendiente</th>
                                <th style="width: 60px;" class="text-center">Ganancia Efectiva</th>

                                <th style="width: 24px;"></th>
                            </tr>
                        </thead>

                        <tbody class="list">

                        <tr>
                            <td>

                                <div class="media align-items-center">
                                    <div class="avatar avatar-sm mr-3">
                                        <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body">

                                        <span class="name">Andrei Gae</span>

                                    </div>
                                </div>

                            </td>


                            <td class="text-center"><small class="text-muted ">Hace 3 días</small></td>
                            <td class="text-center">14/07/2019</td>
                            <td class="text-center">Pago</td>
                            <td class="text-center">14/07/2019</td>
                            <td class="text-center">200€</td>
                            <td class="text-center">200€</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Ver mas</a>
                                        <a class="dropdown-item" href="#"></a>
                                        <a class="dropdown-item" href="#">Mandar un nuevo mensaje</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Ocultar Registro</a>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td>

                                <div class="media align-items-center">
                                    <div class="avatar avatar-sm mr-3">
                                        <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body">

                                        <span class="name">Iosif Gae</span>

                                    </div>
                                </div>

                            </td>


                            <td class="text-center"><small class="text-muted ">Hace 3 días</small></td>
                            <td class="text-center">14/07/2019</td>
                            <td class="text-center">Pago</td>
                            <td class="text-center">14/07/2019</td>
                            <td class="text-center">200€</td>
                            <td class="text-center">200€</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Ver mas</a>
                                        <a class="dropdown-item" href="#"></a>
                                        <a class="dropdown-item" href="#">Mandar un nuevo mensaje</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Ocultar Registro</a>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td>

                                <div class="media align-items-center">
                                    <div class="avatar avatar-sm mr-3">
                                        <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body">

                                        <span class="name">Adin Gae</span>

                                    </div>
                                </div>

                            </td>


                            <td class="text-center"><small class="text-muted ">Hace 3 días</small></td>
                            <td class="text-center">14/07/2019</td>
                            <td class="text-center">Pago</td>
                            <td class="text-center">14/07/2019</td>
                            <td class="text-center">200€</td>
                            <td class="text-center">200€</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Ver mas</a>
                                        <a class="dropdown-item" href="#"></a>
                                        <a class="dropdown-item" href="#">Mandar un nuevo mensaje</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Ocultar Registro</a>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td>

                                <div class="media align-items-center">
                                    <div class="avatar avatar-sm mr-3">
                                        <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body">

                                        <span class="name">Iosif Gae</span>

                                    </div>
                                </div>

                            </td>


                            <td class="text-center"><small class="text-muted ">Hace 3 días</small></td>
                            <td class="text-center">14/07/2019</td>
                            <td class="text-center">Pago</td>
                            <td class="text-center">14/07/2019</td>
                            <td class="text-center">200€</td>
                            <td class="text-center">200€</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Ver mas</a>
                                        <a class="dropdown-item" href="#"></a>
                                        <a class="dropdown-item" href="#">Mandar un nuevo mensaje</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Ocultar Registro</a>
                                    </div>
                                </div>


                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>



         </div>







    </div>
</div>

@endsection


@push('scripts')
    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>
    <!-- Tables -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>

    <script>
        $("#id_user").on('input', function() {
            if($(this).val()!=""){
                $('#msg-name').text($(this).val());
            } else{
                $('#msg-name').text("[Name]");
            }
        });

        $('#needs-validation1').on('input', function() {
            $('#needs-validation1').addClass('was-validated');
        })
        $('#needs-validation2').on('input', function() {
            $('#needs-validation2').addClass('was-validated');
        })
    </script>
@endpush




