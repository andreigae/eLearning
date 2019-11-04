@extends('layouts.app')

@section('title', __('Mis Cursos')." | eLearning")

@section('content')
    <div class="row movileview">
        <div class="d-none d-lg-block col-12">
            <ol class="breadcrumb pb-1 mb-1">
                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                <li class="breadcrumb-item"><a href="student-browse-courses.html">Courses</a></li>
                <li class="breadcrumb-item active">The MVC architectural pattern</li>
            </ol>
            <h1 class="h2">{{$data[1]["title0"].". ".$data[1]["title1"]}}</h1>
        </div>


            <div class="row" >


                @include('partials.course.viewcourse.mobile-navigation')


                <div class="col-md-8 col-lg-8 col-xl-8" style="max-width: 1500px; padding: 0">

                    @include('partials.course.viewcourse.video-course')




                    <div class="d-xs-block d-md-none p-1">
                        <div class="card cardnoborder">
                            <div class="card-header card-header-noborder">
                                <div class="media align-items-center">

                                    <div class="media-body">
                                        <h4 class="card-title">RECURSOS</h4>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group list-group-fit">
                                <li class="list-group-item">
                                    <div class="media">

                                        <div class="media-left">
                                            <i  class="fa fa-cloud-download" aria-hidden="true"></i>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" style="color: #000"> 1. The MVC architectural pattern</a>
                                        </div>


                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">

                                        <div class="media-left">
                                            <i  class="fa fa-cloud-download" aria-hidden="true"></i>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" style="color: #000"> 2. The MVC architectural pattern</a>
                                        </div>



                                    </div>
                                </li>

                            </ul>


                        </div>
                    </div>

                    <div class="card cardnoborder p-1">
                        <div class="card-header card-header-noborder">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <h4 class="card-title">ABOUT THIS LESSON</h4>
                                </div>
                            </div>
                        </div>


                        <div class="card-body" style="padding-bottom: 0">



                            {!!nl2br(e($data[1]["Description"])) !!}



                            <p>  Congratulations on completing week one! As soon as you've finished watching all of the training videos in full please complete the action items below.
                            </p>

                            <p>  This is an "implementation program" and to get results you must do the work. Completing the worksheets and uploading them to our action items storage system keeps all of your worksheets safe in one place. We refer back to these worksheets throughout the program so we recommend you upload them.
                            </p>


                            <p>  A full overview of the program and the core parts we focus on to get results. This video is extremely important to understand the road ahead
                            </p>


















                            <ul class="list-group" style="border:none;">

                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 1. Have you viewed all of week one's videos in full?</b>
                                            <div class="text-dark" href="#">Simple yes/no question.</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">help</a>

                                        </div>
                                    </div>
                                </li>


                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 2. Complete the chart of truth worksheet for your niche</b>
                                            <div class="text-dark" href="#">Download the worksheet, complete it and then upload the pdf here</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">assignment</a>

                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 3. Complete the niche definition worksheet</b>
                                            <div class="text-dark" href="#">Download the worksheet, complete it and then upload the pdf here</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">assignment</a>

                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 4. Complete the 10 smart market questions worksheet</b>
                                            <div class="text-dark" href="#">Download the worksheet, complete it and then upload the pdf here</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">assignment</a>

                                        </div>
                                    </div>
                                </li>



                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 5. Complete the client avatar worksheet</b>
                                            <div class="text-dark" href="#">Download the worksheet, complete it and then upload the pdf here</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">assignment</a>

                                        </div>
                                    </div>
                                </li>



                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 6. Complete the mvo worksheet</b>
                                            <div class="text-dark" href="#">Download the worksheet, complete it and then upload the pdf here</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">assignment</a>

                                        </div>
                                    </div>
                                </li>



                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 7. Complete the niche-offer-result hypothesis worksheet</b>
                                            <div class="text-dark" href="#">Download the worksheet, complete it and then upload the pdf here</div>
                                        </div>
                                        <div class="media-right my-auto" >
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">assignment</a>

                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 8. Complete the message-hypothesis worksheet</b>
                                            <div class="text-dark" href="#">Download the worksheet, complete it and then upload the pdf here</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">assignment</a>

                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">
                                            <b class="text-primary"> 9. Have you joined the Facebook group?</b>
                                            <div class="text-dark" href="#">Simple yes/no question.</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">help</a>

                                        </div>
                                    </div>
                                </li>


                                <li class="list-group-item" style="margin-bottom:20px; border:none; background: #f0f8ff">
                                    <div class="media">
                                        <div class="media-body">


                                            <b class="text-primary"> 10. ¿Cómo te sientes después de haner completado tu primera semana?</b>
                                            <div class="text-dark" href="#">Proporcione una respuesta simple de uno o dos parrafos para hacernos saber cómo te sientes a medida que avanzas.</div>
                                        </div>
                                        <div class="media-right my-auto">
                                            <a class="material-icons text-primary" href="#" style="text-decoration: none; font-size: 38px;">help</a>

                                        </div>
                                    </div>
                                </li>


                            </ul>






























                        </div>

                        <div class="row d-none d-md-flex" style="padding: 1.25rem; padding-top: 0;">
                            <div class="col">

                                @if($data[1]['class']>1)
                                    <a type="button" class="btn btn-dark" href="{{ URL::route('ShowClass', array('Modulo' => $data[1]['Modulo'], "class"=>$data[2]["previews"])) }}">
                                        <i class="material-icons mr-1">chevron_left</i> Lección Anterior
                                    </a>
                                @endif


                            </div>

                            <div class="col text-right">



                                <a type="button" class="btn btn-dark" href="{{ URL::route('ShowClass', array('Modulo' => $data[1]['Modulo'], "class"=>  $data[2]["next"])) }}">
                                    Lección Siguiente  <i class="material-icons mr-1">chevron_right</i>
                                </a>

                            </div>
                        </div>


























                    </div>


                </div>

                <div class="col-md-4 col-lg-4 col-xl-4 col-xxl d-none d-md-block">
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
                                <option selected="true">Modulo 1</option>
                                <option value="1">Modulo 2</option>
                                <option value="2">Modulo 3</option>
                                <option value="3">Modulo 4</option>
                            </select>
                        </div>
                    </div>

                    <!-- Lessons -->
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






    </div>
@endsection





@section('footer')
    @include('partials.course.viewcourse.mobile-navigation-footer')
@endsection


@push('scripts')
    <script>

        // Expand Colaps
        $('#collapse1').on('show.bs.collapse', function() {
            $("#keymobilenavbar").addClass('fa-chevron-up').removeClass("fa-chevron-down");
        });

        $('#collapse1').on('hidden.bs.collapse', function() {
            $("#keymobilenavbar").addClass('fa-chevron-down').removeClass("fa-chevron-up");
        });

    </script>
@endpush

