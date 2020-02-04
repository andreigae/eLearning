<div class="col-md-4 d-xs-block d-md-none ">

<div class="d-flex align-items-center justify-content-center">

   {{--  @if($data[1]["Estado"]==1) --}}
        <i class="material-icons text-primary " style="font-size: 50px; padding-bottom: 20px;">check_circle</i>
   {{--  @else
        <i class="material-icons text-primary " style="font-size: 50px; padding-bottom: 20px;">radio_button_unchecked</i>
    @endif --}}


</div>

<div class="d-flex align-items-center justify-content-center">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
        <li class="breadcrumb-item"><a href="student-browse-courses.html">Courses</a></li>
        <li class="breadcrumb-item active">The MVC architectural pattern</li>
    </ol>
</div>

<div class="d-flex align-items-center justify-content-center">

    <h1 class="h2 m-0 text-center">{{$lesson->name}}</h1>
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
               {{--  @foreach ($data[3] as $clave => $valor)
                    @if($data[1]['Modulo']==$valor['Modulo'])
                        <option selected="true" value="{{ $valor['Modulo']}}">{{ $valor['ModuloTitle']}}</option>
                      @else
                        <option value="{{ $valor['Modulo']}}">{{ $valor['ModuloTitle']}}</option>
                    @endif
                @endforeach --}}
            </select>
        </div>
    </div>































{{--
    <ul class="card list-group list-group-fit">


        @foreach ($data[0] as $clave => $valor)
            @if($data[1]['Modulo']==$valor['Modulo'] and $data[1]['class']==$valor['class'])
                <li class="list-group-item active">
                    <div class="media">
                        <div class="media-left">
                            <div class="text-white">{{ $valor['title0'] }}</div>
                        </div>
                        <div class="media-body">
                            <a class="text-white"  href="{{ URL::route('ShowClass', array('Modulo' => $valor['Modulo'], "class"=>$valor['class'])) }}">{{$valor['title1']}}</a>
                        </div>
                        <div class="media-right">
                            @if($valor['Estado']==1)
                                <i class="material-icons text-white">check_circle</i>
                            @else
                                <i class="material-icons text-white">lens</i>
                            @endif
                        </div>
                    </div>
                </li>
            @else
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="text-dark"> {{$valor['title0']}}</div>
                        </div>
                        <div class="media-body">
                            <a class="text-dark" href="{{ URL::route('ShowClass', array('Modulo' => $valor['Modulo'], "class"=>$valor['class'])) }}">{{$valor['title1']}}</a>
                        </div>
                        <div class="media-right">
                            @if($valor['Estado']==0)
                                <i class="material-icons text-primary">radio_button_unchecked</i>
                            @else
                                <i class="material-icons text-primary">check_circle</i>
                            @endif
                        </div>
                    </div>
                </li>
            @endif
        @endforeach

    </ul>
</div>

</div>
 --}}