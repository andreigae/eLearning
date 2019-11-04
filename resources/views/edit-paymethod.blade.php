@extends('layouts.app')

@section('title', 'Cambiar Metodos de pago | eLearning')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Edit Account</li>
    </ol>

    <h1 class="h2">Cambiar metodos de pago</h1>

    <div class="card">
        <div class="list-group list-group-fit">
            <div class="list-group-item py-3">
                        <span class="d-flex align-items-center">
                            <img src="{{ URL::asset('assets/images/visa.svg')}}" alt="cc" width="40" class="mr-3">
                            <span class="flex" style="white-space: nowrap;">
                                Tu metodo de pago actual es:
                                <strong>Visa XXXX2819</strong>
                            </span>
                        </span>
            </div>
            <div class="list-group-item" style="border-bottom: 0!important">
                <fieldset role="group" aria-labelledby="label-type" class="m-0 form-group">
                    <div class="form-row">
                        <label for="payment_cc" id="label-type" class="col-md-3 col-form-label form-label">Metodo de pago por defecto</label>
                        <div role="group" aria-labelledby="label-type" class="col-md-9">
                            <div role="group" class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-secondary active">
                                    <input type="radio" id="payment_cc" name="payment_type" value="cc" checked="" aria-checked="true" /> Tarjeta de debido o credito
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" id="payment_pp" name="payment_type" value="pp" aria-checked="true" /> PayPal
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>




            <div class="row border-0" id="creditCardDIV" >



                <div class="col-lg-6 col-xs-md-12 col-xl-7 ">

                    <div class="list-group-item border-0">
                        <div role="group" aria-labelledby="label-cc" class="m-0 form-group">
                            <div class="form-row">
                                <label id="label-cc" for="cc" class="col-md-3 col-form-label form-label">Numero Tarjeta</label>
                                <div class="col-md-9">
                                    <input id="cc" type="text" placeholder="XXXX XXXX XXXX XXXX" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item border-0">
                        <div role="group" aria-labelledby="label-cvv" class="m-0 form-group">
                            <div class="form-row">
                                <label id="label-cvv" for="cvv" class="col-md-3 col-form-label form-label">Codigo de Seguridad (CVV)</label>
                                <div class="col-md-9">
                                    <input id="cvv" type="password" placeholder="CVV" class="form-control" style="width: 100px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item border-0">
                        <div role="group" aria-labelledby="label-expire_month" class="m-0 form-group">
                            <div class="form-row">
                                <label id="label-expire_month" for="expire_month" class="col-md-3 col-form-label form-label">Fecha de expiracion</label>
                                <div class="col-md-9">
                                    <div class="form-row">
                                        <div class="col-auto">
                                            <select id="expire_month" class="form-control custom-select" style="width: 140px;">
                                                <option value="1">Enero</option>
                                                <option value="2">Febrero</option>
                                                <option value="3">Marzo</option>
                                                <option value="4">Abril</option>
                                                <option value="5">Mayo</option>
                                                <option value="6">Junio</option>
                                                <option value="7">Julio</option>
                                                <option value="8">Agosto</option>
                                                <option value="9">Septiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Noviembre</option>
                                                <option value="12">Diciembre</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <select id="expire_year" class="form-control custom-select" style="width: 100px;">
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

            <div class="list-group list-group-fit" style="display: none" id="paypalDIV">


             <form id="needs-validation" role="form" action="#">

                <div class="list-group-item border-0" >
                    <div role="group" aria-labelledby="label-cc" class="m-0 form-group">
                        <div class="form-row">
                            <label id="label-pp" for="pp" class="col-md-3 col-form-label form-label">PayPal Email</label>
                            <div class="col-md-9">
                                <input id="pp" type="email" placeholder="user@example.com" class="form-control" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{1,10}$">
                                <div class="invalid-feedback">Porfavor Introduzca una direccion de email valida.</div>
                                <div class="valid-feedback">Todo ok</div>
                            </div>
                        </div>
                    </div>
                </div>
             </form>
            </div>


            <div class="list-group-item">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ URL::to("/pay-method")}}" class="btn btn-dark">Volver</a>
            </div>

            </from>
        </div>
    </div>
@endsection


@push('scripts')
<script>
    $('input[type="radio"][name="payment_type"]').change(function() {

        if(this.checked) {
            if ($(this).val() == "cc") {
                $("#creditCardDIV").show();
                $("#paypalDIV").hide();
            } else {
                $("#paypalDIV").show();
                $("#creditCardDIV").hide();
            }
        }
    });

    $('#needs-validation').on('input', function() {
        $('#needs-validation').addClass('was-validated');
    })

</script>
@endpush
