@extends('layouts.app')

@section('title', __('Mis Cursos')." | eLearning")


@push('styles')

    <style>
         .select-dropdown{
            overflow: hidden;
            max-height: 350px;
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












.square-box{
    position: relative;
    overflow: hidden;
    background: #4679BD;
}
.square-box:before{
    content: "";
    display: block;
    padding-top: 6%;

}

.square-box:after{
    content: "";
    display: block;
    padding-bottom: 6%;
}
.square-content{
    position:  absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    color: white;
    text-align: center;
}









.select-wrapper input.select-dropdown {
  font-size: 17px!important;
}





  h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5{
    font-family: serif;
    line-height: 1;
  }

  body{
    font-family: serif;
    font-size: 1em;
    /*font-family: Sagona-Medium,Georgia,serif;*/
  }

  .sidebar-menu-button {
    font-size: 17px;
}


</style>

@endpush

@section('content')
<div class="container-fluid horizontalw">
    <div class="row" style="    margin-right: 0; margin-left: 0;">


        <div class="d-none d-md-block col-12" style="padding-left: 4px;">
            <ol class="breadcrumb pb-1 mb-1">
                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                <li class="breadcrumb-item"><a href="student-browse-courses.html">Courses</a></li>
                <li class="breadcrumb-item active">The MVC architectural pattern</li>
            </ol>

            <h1 class="h2">{{$lesson->name}}</h1>
        </div>












                @include('courses.partials.mobile-navigation')


                <div class="col-md-8 col-lg-8 col-xl-8" style="max-width: 1500px; padding: 0; margin-bottom: 30px">

                    @include('courses.partials.video-course')




                    <div class="d-xs-block d-md-none p-1">
                        <div class="card cardnoborder">
                            <div class="card-header card-header-noborder">
                                <div class="media align-items-center">

                                    <div class="media-body">
                                        <h4 class="card-title">RECURSOS</h4>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group list-group-fit mb-0">
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


                        <div class="card-body" >

                             <p>  Primer Parrafo                            </p>
                             <p>  Segundo Parrafo                            </p>



                            {!!nl2br(e($lesson->largedescription)) !!}






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
                    <div class="square-box" style="background: #000; color: #fff; border-radius: 6px;  ">
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







                    </div>






















                     <div class="input-field">
                        <select id="mybox" >

                            @foreach ($course->modules as $moduleforeach)
                                @if($moduleforeach->id == $module->id)
                                    <option selected="true" value="{{ $moduleforeach->id}}">{{ $moduleforeach->name }}</option>
                                  @else
                                    <option value="{{ $moduleforeach->id}}">{{ $moduleforeach->name }}</option>
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




                    <!-- Lessons -->
                    <ul class="card list-group list-group-fit">

                          @foreach ($module->lessons as $item)

                            @if($item->id == $lesson->id)
                              <li class="list-group-item active">
                                  <div class="row">

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








                   <div class="card d-none d-md-none d-lg-block p-1">
                        <div class="cardnoborder">
                            <div class="card-header card-header-noborder">
                                <div class="media align-items-center">

                                    <div class="media-body">
                                        <h4 class="card-title">RECURSOS</h4>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group list-group-fit  mb-0">

                                @foreach($files as $file)
                                  <li class="list-group-item">
                                      <div class="media">

                                          <div class="media-left">
                                              <i  class="fa fa-cloud-download" aria-hidden="true"></i>
                                          </div>

                                          <div class="media-body">
                                              <a target="_blank" href=" {{ URL::asset($file->path) }}" style="color: #000"> {{ $file->name }}</a>
                                          </div>


                                      </div>
                                  </li>
                                @endforeach



                            </ul>


                        </div>
                    </div>

                </div>








    </div>
</div>

@endsection





@section('footer')
    @include('courses.partials..mobile-navigation-footer')
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
            url: " {{ route('getlink',  "$lesson->videourl" )}}",
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

