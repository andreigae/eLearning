<div class="col-md-12 col-lg-6 col-xl-4 col-xxl-3 colmaxwidth_course_list ">
    <div class="card" style="border:none;box-shadow: 0px 0px 15px 0px rgba(89, 89, 90, 0.6);">
        <a href="{{ route('ShowModule', [1]) }}">
            <img src="{{ URL::asset('assets/images/vuejs.png') }}" alt="Card image cap" style="height:70%;width:100%; min-height: 190px;">
        </a>
        <div class="card-header text-center">
            <h4 class="card-title mb-0"><a href="/view-course/1">Bussiness Accelerator</a></h4>

            <small>25% {{__("Completado")}}</small>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="card-footer bg-white text-center ">
            <a href="/view-course/1" class="btn btn-primary btn-sm botonContinuarCurso">{{__("Continuar")}} <i class="material-icons btn__icon--right">play_circle_outline</i></a>
        </div>
    </div>
</div>
