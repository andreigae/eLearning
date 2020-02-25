@extends('layouts.app')

@section('title', 'Preferencias de Email | eLearning')

@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Edit Account</li>
    </ol>

    <h1 class="h2">Preferencias de emails</h1>

    <div class="card">

        <div class="tab-content card-body">

            <form action="#" class="form-horizontal">


                <div class="form-group row">
                    <div class="col">
                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                            <input checked="" type="checkbox" id="subscribe1" class="custom-control-input">
                            <label class="custom-control-label" for="subscribe1"> </label>
                        </div>
                        <label class="align-top" for="subscribe1">ACTUALIZACIONES EN LOS PRODUCTOS ADQUIRIDOS</label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                            <input checked="" type="checkbox" id="subscribe2" class="custom-control-input">
                            <label class="custom-control-label" for="subscribe2"> </label>
                        </div>
                        <label class="align-top" for="subscribe2">ACTUALIZACIONES EN LOS PRODUCTOS DE GUIAPARAEMPRENDER.NET</label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                            <input checked="" type="checkbox" id="subscribe3" class="custom-control-input">
                            <label class="custom-control-label" for="subscribe3"> </label>
                        </div>
                        <label class="align-top" for="subscribe3">ACTUALIZACIONES EN LOS PRODUCTOS DE TRUSTCONSULTING.ES</label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                            <input checked="" type="checkbox" id="subscribe4" class="custom-control-input">
                            <label class="custom-control-label" for="subscribe4"> </label>
                        </div>
                        <label class="align-top" for="subscribe4">EMAILS PROMOCIONALES</label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <div class="media-left">
                            <a href="#" id="accomplished" class="btn btn-primary">Guardar Cambios</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection



@push('styles')
        <!-- sweetalerts -->
        <link type="text/css" href="{{ URL::asset('assets/css/sweetalert.css') }}" rel="stylesheet">
@endpush


@push('scripts')
        <script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
        <script>
            $('#accomplished').on("click", function() {
                swal({
                    class:"btn btn-success",
                    title:"Guardado!",
                    text:"Tus preferencias se han guardado correctamente!",
                    type:"success",
                    confirmButtonColor: '#039be5',
                    confirmButtonText: 'Gracias',
                });
            });

        </script>
@endpush
