@extends('layouts.app2')

@section('title', __('Mis Cursos')." | eLearning")


@push('styles')

    <style>
         .select-dropdown{
            overflow: hidden;
            max-height: 450px;
         }

          .dropdown-trigger{
            text-overflow: ellipsis;
            max-width: 100%!important;
          }
            .dropdown-content {
                display: block;
                width: 100%!important;
                left: 0px!important;
                top: 55px!important;
            }

            .custom-select2 {
              height: 56px!important;
              border-radius: 5px!important;
              color: #ffff;

            }

            .select-dropdown {
                border:1px solid #2196f3;
                width: 100%!important;
                left: 0px!important;
                border-radius:2px;
                box-shadow: 0px 0px 19px -6px rgba(109,132,150,0.7)!important;

            }

            input-field{

            }

            .select-wrapper {
                height: 50px!important;
                background: #2196f3!important;
            }



            .select-wrapper input.select-dropdown {
            position: relative;
            cursor: pointer;
            background-color: transparent!important;
            border: none;
            border-bottom: 1px solid #9e9e9e;
            outline: none;
            height: 46px!important;
        }

            .select-wrapper{
                display: inline-block;
                width: 100%;
                padding: .5rem 1.75rem .5rem .75rem;
                font-weight: 400;
                line-height: 1.5;
                vertical-align: middle;
                border-radius: .25rem;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                 margin-bottom: 30px;
            }



            .select-wrapper input[type="text"] {
                color:#ffffff;
                margin-top: -5px!important;
                border: none!important;
                font-size: 14px!important;

            }


            .select-wrapper .caret {
                fill: rgba(255, 255, 255, 0.87)!important;
            }

ul:not(.browser-default) {
  padding-left: 0;
  list-style-type: none;
}

ul:not(.browser-default) > li {
  list-style-type: none;
}




.dropdown-content {
  background-color: #fff;
  margin: 0;
  display: none;
  min-width: 100px;
  overflow-y: auto;
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9999;
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
}

.dropdown-content:focus {
  outline: 0;
}

.dropdown-content li {
  clear: both;
  color: rgba(0, 0, 0, 0.87);
  cursor: pointer;
  min-height: 50px;
  line-height: 1.5rem;
  width: 100%;
  text-align: left;
}

.dropdown-content li:hover, .dropdown-content li.active {
  background-color: #eee;
}

.dropdown-content li:focus {
  outline: none;
}

.dropdown-content li.divider {
  min-height: 0;
  height: 1px;
}

.dropdown-content li > a, .dropdown-content li > span {
  font-size: 16px;
  color: #00000;
  display: block;
  line-height: 22px;
  padding: 14px 16px;
}

.dropdown-content li > span > label {
  top: 1px;
  left: 0;
  height: 18px;
}

.dropdown-content li > a > i {
  height: inherit;
  line-height: inherit;
  float: left;
  margin: 0 24px 0 0;
  width: 24px;
}

body.keyboard-focused .dropdown-content li:focus {
  background-color: #dadada;
}


.dropdown-trigger {
  cursor: pointer;
}

/* Select Field
   ========================================================================== */
select {
  display: none;
}

select.browser-default {
  display: block;
}

select {
  background-color: rgba(255, 255, 255, 0.9);
  width: 100%;
  padding: 5px;
  border: 1px solid #f2f2f2;
  border-radius: 2px;
  height: 3rem;
}

.select-label {
  position: absolute;
}

.select-wrapper {
  position: relative;
}

.select-wrapper.valid + label,
.select-wrapper.invalid + label {
  width: 100%;
  pointer-events: none;
}

.select-wrapper input.select-dropdown {
  position: relative;
  cursor: pointer;
  background-color: transparent;
  border: none;
  border-bottom: 1px solid #9e9e9e;
  outline: none;
  height: 3rem;
  line-height: 3rem;
  width: 100%;
  font-size: 16px;
  margin: 0 0 8px 0;
  padding: 0;
  display: block;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  z-index: 1;
}

.select-wrapper input.select-dropdown:focus {
  border-bottom: 1px solid #00000;
}

.select-wrapper .caret {
  position: absolute;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto 0;
  z-index: 0;
  fill: rgba(0, 0, 0, 0.87);
}

.select-wrapper + label {
  position: absolute;
  top: -26px;
  font-size: 0.8rem;
}

select:disabled {
  color: rgba(0, 0, 0, 0.42);
}

.select-wrapper.disabled + label {
  color: rgba(0, 0, 0, 0.42);
}

.select-wrapper.disabled .caret {
  fill: rgba(0, 0, 0, 0.42);
}

.select-wrapper input.select-dropdown:disabled {
  color: rgba(0, 0, 0, 0.42);
  cursor: default;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.select-wrapper i {
  color: rgba(0, 0, 0, 0.3);
}

.select-dropdown li.disabled,
.select-dropdown li.disabled > span,
.select-dropdown li.optgroup {
  color: rgba(0, 0, 0, 0.3);
  background-color: transparent;
}

body.keyboard-focused .select-dropdown.dropdown-content li:focus {
  background-color: #2196f3;
}

.select-dropdown.dropdown-content li:hover {
  background-color: #2196f3;
  color:#ffffff;
}

.select-dropdown.dropdown-content li.selected {
  background-color: #2196f3;
  color:#ffffff;
}

.prefix ~ .select-wrapper {
  margin-left: 3rem;
  width: 92%;
  width: calc(100% - 3rem);
}

.prefix ~ label {
  margin-left: 3rem;
}

.select-dropdown li img {
  height: 40px;
  width: 40px;
  margin: 5px 15px;
  float: right;
}

.select-dropdown li.optgroup {
  border-top: 1px solid #eee;
}

.select-dropdown li.optgroup.selected > span {
  #background: #2196f3;
  color: #ffffff;
}

.select-dropdown li.optgroup.selected > span:focus {
  #background: #2196f3;
  color: #ffffff;
}

.select-dropdown li.optgroup > span {
  color: rgba(0, 0, 0, 0.4);
}

.select-dropdown li.optgroup ~ li.optgroup-option {
  padding-left: 1rem;
}
</style>

@endpush

@section('content')
    <div class="row movileview">
        <div class="d-none d-md-block col-12" style="padding-left: 4px;">
            <ol class="breadcrumb pb-1 mb-1">
                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                <li class="breadcrumb-item"><a href="student-browse-courses.html">Courses</a></li>
                <li class="breadcrumb-item active">The MVC architectural pattern</li>
            </ol>
            <h1 class="h2">{{$data[1]["title0"].". ".$data[1]["title1"]}}</h1>
        </div>


            <div class="row movileview" >


                @include('partials.course.viewcourse.mobile-navigation')


                <div class="col-md-8 col-lg-8 col-xl-8" style="max-width: 1500px; padding: 0; margin-bottom: 30px">

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



{{--
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




                        <div class="row  d-none d-md-flex " style="padding: 1.25rem; padding-top: 0;">
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


 --}}





                        <div class="card cardnoborder p-1">
                        <div class="card-header card-header-noborder">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <h4 class="card-title">ABOUT THIS LESSON</h4>
                                </div>
                            </div>
                        </div>


                        <div class="card-body" >

                             <p>  Primer Parrafo                            </p>
                             <p>  Segundo Parrafo                            </p>
                            {!!nl2br(e($data[1]["Description"])) !!}






                            <div class="row mb-5" >
                                        <div class="col-9 col-xs-9 col-md-9 col-lg-9">
                                            TRANSCRIPCIÓN DEl VIDEO
                                        </div>
                                        <div  class="col-3 col-xs-3 col-md-3 col-lg-3 text-right" >
                                           <a id="expended" class="rgba-red-strong" disabled="disabled" style="cursor:pointer; color:#2196f3 ">
                                               Leer Todo
                                           </a>
                                        </div>
                                    </div>

                                    <div style="background: #fafafa; padding-left: 10px; ">
                                        <div id="textexpanded" class="scroll" style="height: 300px; overflow-y: auto; padding: 10px;">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis felis orci, hendrerit et gravida vel, dignissim eu dui. Mauris ipsum lectus, lobortis quis sagittis vel, fringilla nec nisl. Vivamus facilisis ullamcorper diam, ac placerat libero. Pellentesque nec interdum nisi. Quisque commodo erat at est rhoncus molestie. Etiam vulputate pellentesque ante, eu aliquet nisl mattis nec. Morbi molestie pretium leo id blandit. Quisque lacinia lacus id enim euismod condimentum. Vivamus aliquet justo ut dapibus suscipit. Maecenas eu nisi pulvinar, vestibulum mauris ut, rutrum orci. Fusce vehicula viverra felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisl lectus, suscipit eu pellentesque ultrices, commodo eget velit. Vivamus mattis vel nisi non laoreet.
                                            </p>
                                            <p>
                                                Fusce gravida felis odio, non lacinia diam pellentesque vel. Integer tincidunt, massa in sodales efficitur, mi mauris viverra risus, at aliquam justo mauris lobortis lectus. Proin finibus et tellus in consectetur. Vivamus ultrices viverra euismod. In et pulvinar orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut elementum tempus feugiat. Nullam fringilla nulla lectus, ut fermentum sapien volutpat a. Aenean sit amet neque vehicula, finibus mauris et, venenatis elit. Nunc ut tincidunt purus. Sed vehicula massa ut dui commodo dictum.
                                            </p>
                                            <p>
                                                Proin vulputate commodo feugiat. Quisque consectetur rutrum est, ut tincidunt nunc finibus interdum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla sollicitudin euismod dui, non congue diam mattis at. Cras porttitor tellus sem, non maximus elit posuere sed. Proin ultrices lacus vitae vestibulum tristique. Cras ultrices eleifend mauris ac ultrices. Suspendisse at arcu in erat ultricies ultrices. Donec facilisis dui nulla, eu accumsan ante facilisis vitae. Aenean volutpat tellus eu cursus ultrices.
                                            </p>
                                            <p>
                                                Integer pulvinar turpis ac mi vehicula condimentum in ut nunc. Suspendisse eget tristique sapien. Pellentesque massa dui, tempus ac nibh eu, finibus dignissim lectus. Nam felis tortor, semper ac eleifend sit amet, molestie pellentesque metus. Cras at luctus dui, a rutrum diam. Curabitur tincidunt vulputate arcu ut tincidunt. Morbi vestibulum consectetur eros, lobortis gravida quam tempor vitae. Donec tempor est vitae est iaculis, maximus porta risus lacinia. Donec eu diam ultrices, ultrices neque vel, semper dui.
                                            </p>
                                            <p>
                                                Fusce hendrerit sodales ipsum, eu pharetra nulla imperdiet ac. In in ornare metus. Quisque eget volutpat orci. Sed id justo vel eros luctus dignissim. Morbi placerat facilisis quam non elementum. Nam lacus magna, consequat in iaculis nec, tempus eu nunc. Nullam faucibus nunc at pretium sodales. Aenean malesuada justo at lacus gravida cursus. Curabitur ut lacinia lorem, a vehicula eros. Donec at efficitur metus. Quisque leo orci, porttitor in ultrices ornare, cursus eu nunc. In justo erat, varius sed elit vitae, viverra ultricies elit.
                                            </p>
                                        </div>

                                        <div id="VerTodoBoton" class="text-center " style="padding: 20px">
                                            <button type="button" class="btn btn-primary">Ver Todo</button>
                                        </div>
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

                        <small>Progreso:</small>


                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>

{{--
                        <div class="progress" style="height: 15px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}

                    </div>






















                     <div class="input-field">
                        <select id="mybox" >
                                @foreach ($data[3] as $clave => $valor)
                                    @if($data[1]['Modulo']==$valor['Modulo'])
                                        <option selected="true" value="{{ $valor['Modulo']}}">{{ $valor['ModuloTitle']}}</option>
                                      @else
                                        <option value="{{ $valor['Modulo']}}">{{ $valor['ModuloTitle']}}</option>
                                    @endif
                                @endforeach
                        </select>
                      </div>



                    @push('scripts')
                        <script>

                         $(document).ready(function(){
                            var instance = $('#mybox').formSelect();
                            $("#mybox").on('change', function() {
                              $("#mybox").formSelect();
                              new PerfectScrollbar('.dropdown-content');

                            });

                            new PerfectScrollbar('.dropdown-content');
                        });

                      </script>

                    @endpush

{{--

                    <div style="margin-top: 10px; margin-bottom: 5px;">
                        <div class="form-group">
                            <select id="custom-select" class="form-control custom-select2 form-control-lg " style="height: 50px;">

                                @foreach ($data[3] as $clave => $valor)
                                    @if($data[1]['Modulo']==$valor['Modulo'])
                                        <option selected="true" value="{{ $valor['Modulo']}}">{{ $valor['ModuloTitle']}}</option>
                                      @else
                                        <option value="{{ $valor['Modulo']}}">{{ $valor['ModuloTitle']}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div> --}}


                    <!-- Lessons -->
                    <ul class="card list-group list-group-fit">
                        @foreach ($data[0] as $clave => $valor)
                            @if($data[1]['Modulo']==$valor['Modulo'] and $data[1]['class']==$valor['class'])
                                <li class="list-group-item active">
                                    <div class="row">
                                        <div class="media-left justify-content-center align-self-center">
                                            <div class="text-white">{{ $valor['title0'] }}</div>
                                        </div>
                                        <div class="media-body justify-content-center align-self-center">
                                            <a class="text-white"  href="{{ URL::route('ShowClass', array('Modulo' => $valor['Modulo'], "class"=>$valor['class'])) }}">{{$valor['title1']}}</a>
                                        </div>
                                        <div class="media-right justify-content-center align-self-center">
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
                                    <div class="row">




                                           <div class="media-left justify-content-center align-self-center">
                                            <div class="text-dark"> {{$valor['title0']}}</div>
                                        </div>
                                        <div class="media-body justify-content-center align-self-center">
                                            <a class="text-dark" href="{{ URL::route('ShowClass', array('Modulo' => $valor['Modulo'], "class"=>$valor['class'])) }}">{{$valor['title1']}}</a>
                                        </div>
                                        <div class="media-right justify-content-center align-self-center">
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








                   <div class="card d-none d-md-none d-lg-block p-1">
                        <div class="cardnoborder">
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
                                            <a href="https://00e9e64bacadb04ec15ed20f13ae84bb8263b84842ea916aa3-apidata.googleusercontent.com/download/drive/v3/files/1L9daSK82la6RJor-2_MeDXCsVDIuunnK?qk=AD5uMEu_-y2yvbZSH-XgaIkkhdEipOxkONom85LcpoVSzQAC7dNQcPIMEIl1-jb0chk6tq8MtJUf8kSbzxtgoKMkW7_LB0wm3D2GOjwIY9yAFaGfDR36CPGAC5dKPZmzo7PotZ1IbMv6VCdnFXsciTHaZh8AsQNJRNY5IqCmGSbOIB3zbGF04g8HjuA_wSK6eHomOB8U0yjmvvdiclTyg6O0pUrqLenIf943KumETQXgoL7-hNqfxs6r1Sw-zfMWMKRjI-0ybhDOC1sNqXB8L-b6FdPkAVM8Je_HVkHceKokszKUOQ7OPYVPA0YOGZ9r5APGiIzm6eA31WpPCQfMt1vi-Ou85QrixGPl2n-mufmTfPcB8HpXr5cRje9LY43K_NrEgXrNfpqiG-i6v7J6b_0xE1vFGZtDZ6U7x5AjZe53YAAAWDM2beXX2GsWpE_DkWV9mIVcwbWQm_Ts-dPLe7UjOCDaPq1oDEyCVQbKHcL5yfD4CVJ7e6rOXtwA0V5sQDUK54vDFY_T9EfMeeuxeVWJJ4_4iBKLdlp-MDiohldtPpCjG9UvNr7qn9FHnOkDHreWHKfw9SqsBlZSUIuI6PLiYB8oqTzPEMx4Ynb8himKmiXxubF30TVfB5BN3Lz6OfxQJ-IxBGY9gJbRYzxW0I4s-5bm9vffHfqjAekPf2s56HfV365I9_6JpCOgox4UXtucIS4YvPKVdnDQzc4aUB82qht7UDfsv0D8iXjn9SDfT7xBSXqE1cUqo6QRe_ft5tCxtO5BMSSFl2i8F1jTZ1mkAVi7yS-kMjPaE_vrXEdejhPvMaNLh7mM8nM_ZkrrsFkMBhYD8qZ1DX9K00TxTUfjWBHXCLJMjsIRG_ec303O98Z1bNGaByoNR8lYn9EUjs_Ci5jrLR3pTe-mSS3wqwMZhgc81at65e6klo-F7gx8yJ-kWmtH9DNKHLwqatemEx7ePh5MdSQDyWZhf7wMs3XYSQ8jc5cKzQ" style="color: #000"> 1. The MVC architectural pattern</a>
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






                </div>





            </div>








    </div>
@endsection





@section('footer')
    @include('partials.course.viewcourse.mobile-navigation-footer')
@endsection


@push('scripts')
    <script>

    var expanded=0;

    $("#expended").click(function() {
        expand()
    });

    $("#VerTodoBoton").click(function() {
        expand()
    });


    function expand(){
        if (expanded == 0) {
            expanded = 1;
            $("#textexpanded").css('height', 'auto');
            $("#expended").text("Ver Menos");
            $("#VerTodoBoton").hide();

        } else {
            expanded = 0;
            $("#textexpanded").css('height', '300px');
            $("#expended").text("Ver Todo");
            $("#VerTodoBoton").show();
        }
    }



        // Expand Colaps
        $('#collapse1').on('show.bs.collapse', function() {
            $("#keymobilenavbar").addClass('fa-chevron-up').removeClass("fa-chevron-down");
        });

        $('#collapse1').on('hidden.bs.collapse', function() {
            $("#keymobilenavbar").addClass('fa-chevron-down').removeClass("fa-chevron-up");
        });




    // LOAD URL VIDEO ASINCRONICAMENTE
        var myvideo =  document.getElementById("myVideo");
        var playasked=0;
        myvideo.onplay = function() {
            playasked=1;
        };

        $.ajax({
            url: '{{ route('getlink',  $data[1]["videourl"] )}}',
            success: function(data) {
                document.getElementById("mp4_src").src = data;
                myvideo.autoplay = false;
                myvideo.load();
                if(playasked==1){
                     myvideo.play();
                }

            },
            error: function() {
                console.log("No se ha podido obtener la información");
            }
        });




    </script>





      <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

@endpush

