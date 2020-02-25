
<div class="col-md-4 d-xs-block d-md-none ">

<div class="d-flex align-items-center justify-content-center">

    @if($progress->contains($lesson))
        @if($progress->find($lesson)->pivot->status==1)
           <i class="material-icons text-primary " style="font-size: 50px; padding-bottom: 20px;">check_circle</i>
        @else
          <i class="material-icons text-primary " style="font-size: 50px; padding-bottom: 20px;">radio_button_unchecked</i>
        @endif

      @else
        <i class="material-icons text-primary " style="font-size: 50px; padding-bottom: 20px;">radio_button_unchecked</i>
    @endif

</div>

<div class="d-flex align-items-center justify-content-center">
    <ol class="breadcrumb m-0 d-flex align-items-center justify-content-center">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item"><a href="/my-programs">Courses</a></li>
        <li class="breadcrumb-item"><a href="{{ URL::route('ShowCouseLesson', ['course'=>$course->id])}}">{{ $course->name}}</a> </li>
        <li class="breadcrumb-item active">{{ $module->name}}</li>
    </ol>
</div>

<div class="d-flex align-items-center justify-content-center">
    <h1 class="h2 m-0 text-center">{{$lesson->position}} . {{$lesson->name}}</h1>
</div>
<div class="d-flex align-items-center justify-content-center">
    <a data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
        <i class="fas fa-chevron-down" id="keymobilenavbar"  style="font-size: 25px;"></i>
    </a>
</div>


<div id="collapse1" class="collapse">

    <div style="background: #000; color: #fff; border-radius: 6px;  ">
        <div class="card-body text-center">
            <p>
                WEEK THEME
            </p>
            <p>
                <strong style="font-size: 23px;color: #ffa726;"> Fundamentals and Foundations</strong>
            </p>
        </div>
    </div>

    <div style="margin-top: 25px; margin-bottom:30px;">
        <small>25% Complete</small>
        <div class="progress" style="height: 15px;">
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <div style="margin-top: 10px; margin-bottom: 5px;">
        <div class="form-group">
            <select id="custom-select" class="form-control custom-select2 form-control-lg " style="height: 50px;">

                @foreach ($course->modules as $moduleforeach)
                    @if($moduleforeach->id == $module->id)
                        <option selected="true" value="{{ $moduleforeach->id}}">{{ $moduleforeach->name }}</option>
                      @else
                        <option value="{{ $moduleforeach->id}}">{{ $moduleforeach->name }}</option>
                     @endif
                @endforeach


            </select>
        </div>
    </div>


    <ul class="card list-group list-group-fit">
      @foreach ($module->lessons as $item)
        @if($item->id == $lesson->id)
          <li class="list-group-item active">
              <div class="row">
                     <div class="media-left justify-content-center align-self-center">
                      <div class="text-white"> {{ $item->position }}</div>
                  </div>
                  <div class="media-body justify-content-center align-self-center">
                      <a class="text-white"  href="{{ URL::route('ShowCouseLesson', ['course'=>$course->id, 'module'=>$module->position, 'lesson'=>$item->position ])}}">{{ $item->name }}</a>
                  </div>
                  <div class="media-right justify-content-center align-self-center">

                    @if($progress->contains($item))
                        @if($progress->find($item)->pivot->status==1)
                           <i class="material-icons text-white">check_circle</i>
                        @else
                          <i class="material-icons text-white">radio_button_unchecked</i>
                        @endif


                      @else
                        <i class="material-icons text-white">radio_button_unchecked</i>
                    @endif



                  </div>
              </div>
          </li>
        @else
          <li class="list-group-item ">
              <div class="row">
                     <div class="media-left justify-content-center align-self-center">
                      <div class="text-dark"> {{ $item->position }}</div>
                  </div>
                  <div class="media-body justify-content-center align-self-center">
                      <a class="text-dark"  href="{{ URL::route('ShowCouseLesson', ['course'=>$course->id, 'module'=>$module->position, 'lesson'=>$item->position ])}}">{{ $item->name }}</a>
                  </div>
                  <div class="media-right justify-content-center align-self-center">

                    @if($progress->contains($item))
                        @if($progress->find($item)->pivot->status==1)
                           <i class="material-icons text-primary">check_circle</i>
                        @else
                          <i class="material-icons text-primary">radio_button_unchecked</i>
                        @endif

                      @else
                        <i class="material-icons text-primary">radio_button_unchecked</i>
                    @endif



                  </div>
              </div>
          </li>
        @endif
      @endforeach

    </ul>
</div>

</div>










