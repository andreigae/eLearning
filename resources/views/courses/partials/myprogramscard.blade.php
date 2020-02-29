<div class="card" style="border:none;box-shadow: 0px 0px 15px 0px rgba(89, 89, 90, 0.6);">
    <a style="height: 100%; background-color: #000" class="stretched-link" href="{{ route('ShowCouseLesson', ['course'=>$course->id]) }}">
        <img src="{{ $course->image }}" alt="Card image cap" style="width:100%; min-height: 190px;">

    </a>
    <div class="card-header text-center">
        <h4 class="card-title mb-0"><a href="/view-course/1">{{ $course->name}}</a></h4>

        <small>{{ $course->pivot->progress }}% {{__("Completado")}}</small>
        <div class="progress" style="height: 15px;">
            <div class="progress-bar" role="progressbar" style="width: {{ $course->pivot->progress }}%;" aria-valuenow="{{ $course->pivot->progress }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <div class="card-footer bg-white text-center ">


        <a href="{{route('ShowCouseLesson', ['course'=>$course->id, 'module'=>1, 'lesson'=>1]) }}" class="btn btn-primary btn-sm botonContinuarCurso">{{__("Continuar")}} <i class="material-icons btn__icon--right">play_circle_outline</i></a>
    </div>
</div>

