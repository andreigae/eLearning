@extends('layouts.app')

@section('title', 'Plan de acción | eLearning')


@section('content')

    <div class="row">
        <div class="col">
            <div class="card border-left-3 border-left-info">
                <div class="card-header d-flex align-items-center">
                    <div class="flex">
                        <h4 class="card-title"><a class="text-dark" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">Seccion 1</a></h4>
                        <p class="card-subtitle">The Fundamentals of bussiness</p>
                    </div>

                    <div class="">

                        <a data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                    </div>
                </div>

                <div id="collapse1" class="collapse show">
                    <div class="card-body" >
                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        <a href="#" class="btn btn-primary">Guardar</a>
                    </div>
                </div>
            </div>

            <div class="card border-left-3 border-left-warning">
                <div class="card-header d-flex align-items-center">
                    <div class="flex">
                        <h4 class="card-title"><a class="text-dark" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">Seccion 2 </a></h4>
                        <p class="card-subtitle">The Fundamentals of bussiness</p>
                    </div>

                    <div class="">

                        <a data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                    </div>
                </div>

                <div id="collapse2" class="collapse">
                    <div class="card-body" >
                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        <a href="#" class="btn btn-primary">Guardar</a>
                    </div>
                </div>
            </div>

            <div class="card border-left-3 border-left-warning">
                <div class="card-header d-flex align-items-center">
                    <div class="flex">
                        <h4 class="card-title"><a class="text-dark" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">Seccion 3</a></h4>
                        <p class="card-subtitle">The Fundamentals of bussiness</p>
                    </div>

                    <div class="">

                        <a data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                    </div>
                </div>

                <div id="collapse3" class="collapse ">
                    <div class="card-body" >
                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        <a href="#" class="btn btn-primary">Guardar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

