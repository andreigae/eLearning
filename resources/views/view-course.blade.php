<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View course | Guia para emprender</title>


    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots" content="noindex">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ URL::asset('assets/css/material-icons.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{ URL::asset('assets/css/fontawesome.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">

    <!-- App CSS -->
    <link type="text/css" href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet">


    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ URL::asset('assets/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">

</head>

<body class=" layout-fluid">

    @include('partials.default.navbar')
    <!-- Header Layout Content -->

    <div class="mdk-header-layout__content">

        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                <div class="container-fluid page__container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="student-browse-courses.html">Courses</a></li>
                        <li class="breadcrumb-item active">The MVC architectural pattern</li>
                    </ol>
                    <h1 class="h2">Introduccion</h1>
                    <div class="row">



                        <div class="col-md-4 d-xs-block d-md-none">
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
                                        <option selected="true">Seccion 1</option>
                                        <option value="1">Seccion 2</option>
                                        <option value="2">Seccion 3</option>
                                        <option value="3">Seccion 4</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Lessons -->
                            <ul class="card list-group list-group-fit">


                                <li class="list-group-item active">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-white">1.</div>
                                        </div>
                                        <div class="media-body">
                                            <a class="text-white" href="#">Introduccion</a>
                                        </div>
                                        <div class="media-right">
                                            <small class="text-white">2:03</small>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">2.</div>
                                        <div class="media-body">
                                            <a class="text-dark" href="#">The MVC architectural pattern</a>
                                        </div>
                                        <div class="media-right">
                                            <small>25:01</small>
                                        </div>
                                    </div>
                                </li>



                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-dark">3.</div>
                                        </div>
                                        <div class="media-body">
                                            <a class="text-dark" href="#">Database Models</a>
                                        </div>
                                        <div class="media-right">
                                            <small class="text-dark">12:10</small>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted">4.</div>
                                        </div>
                                        <div class="media-body">
                                            <div class="text-muted-light">Database Access</div>
                                        </div>
                                        <div class="media-right">
                                            <small class="badge badge-primary ">PRO</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted">5.</div>
                                        </div>
                                        <div class="media-body">
                                            <div class="text-muted-light">Eloquent Basics</div>
                                        </div>
                                        <div class="media-right">
                                            <small class="badge badge-primary ">PRO</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted">6.</div>
                                        </div>
                                        <div class="media-body">
                                            <div class="text-muted-light">Take Quiz</div>
                                        </div>
                                        <div class="media-right">
                                            <small class="badge badge-primary ">PRO</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>







                        </div>






















                        <div class="col-md-8">


                            <div class="card">
                                <div class="embed-responsive embed-responsive-16by9" style="border: 1px solid #f0f1f2;">
                                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
                                </div>

                                <div class="row" style="padding: 10px; ">
                                    <div class="col">

                                        <button type="button" class="btn btn-dark">
                                            <i class="material-icons mr-1">chevron_left</i> Leccion Anterior
                                        </button>


                                    </div>

                                    <div class="col text-right">

                                        <button type="button" class="btn btn-dark">
                                            Leccion Siguiente  <i class="material-icons mr-1">chevron_right</i>
                                        </button>

                                    </div>
                                </div>

                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta eius enim inventoreus optio ratione veritatis. Beatae deserunt illum ipsam magniima mollitia officiis quia tempora!
                                </div>
                            </div>



                            <div class="d-xs-block d-md-none">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="media align-items-center">

                                            <div class="media-body">
                                                <h4 class="card-title">Recursos</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-group list-group-fit">
                                        <li class="list-group-item">
                                            <div class="media">

                                                <div class="media-body">
                                                    <a href="#" style="color: #000"> 1. The MVC architectural pattern</a>
                                                </div>

                                                <div class="media-right">
                                                    <i  class="fa fa-cloud-download" aria-hidden="true"></i>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">

                                                <div class="media-body">
                                                    <a href="#" style="color: #000"> 2. The MVC architectural pattern</a>
                                                </div>

                                                <div class="media-right">
                                                    <i  class="fa fa-cloud-download" aria-hidden="true"></i>
                                                </div>

                                            </div>
                                        </li>

                                    </ul>


                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <h4 class="card-title">Sobre esta clase</h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-body">

                                  <p>  A full overview of the program and the core parts we focus on to get results. This video is extremely important to understand the road ahead
                                  </p>

                                    <p>  A full overview of the program and the core parts we focus on to get results. This video is extremely important to understand the road ahead
                                    </p>


                                    <p>  A full overview of the program and the core parts we focus on to get results. This video is extremely important to understand the road ahead
                                    </p>


                                    <div class="row mb-2" >
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

                        <div class="col-md-4 d-none d-md-block">
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
                                        <option selected="true">Seccion 1</option>
                                        <option value="1">Seccion 2</option>
                                        <option value="2">Seccion 3</option>
                                        <option value="3">Seccion 4</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Lessons -->
                            <ul class="card list-group list-group-fit">


                                <li class="list-group-item active">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-white">1.</div>
                                        </div>
                                        <div class="media-body">
                                            <a class="text-white" href="#">Introduccion</a>
                                        </div>
                                        <div class="media-right">
                                            <small class="text-white">2:03</small>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">2.</div>
                                        <div class="media-body">
                                            <a class="text-dark" href="#">The MVC architectural pattern</a>
                                        </div>
                                        <div class="media-right">
                                            <small>25:01</small>
                                        </div>
                                    </div>
                                </li>



                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-dark">3.</div>
                                        </div>
                                        <div class="media-body">
                                            <a class="text-dark" href="#">Database Models</a>
                                        </div>
                                        <div class="media-right">
                                            <small class="text-dark">12:10</small>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted">4.</div>
                                        </div>
                                        <div class="media-body">
                                            <div class="text-muted-light">Database Access</div>
                                        </div>
                                        <div class="media-right">
                                            <small class="badge badge-primary ">PRO</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted">5.</div>
                                        </div>
                                        <div class="media-body">
                                            <div class="text-muted-light">Eloquent Basics</div>
                                        </div>
                                        <div class="media-right">
                                            <small class="badge badge-primary ">PRO</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted">6.</div>
                                        </div>
                                        <div class="media-body">
                                            <div class="text-muted-light">Take Quiz</div>
                                        </div>
                                        <div class="media-right">
                                            <small class="badge badge-primary ">PRO</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>



                            <div class="card">
                                <div class="card-header">
                                    <div class="media align-items-center">

                                        <div class="media-body">
                                            <h4 class="card-title">Recursos</h4>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-group list-group-fit">
                                    <li class="list-group-item">
                                        <div class="media">

                                            <div class="media-body">
                                                <a href="#" style="color: #000"> 1. The MVC architectural pattern</a>
                                            </div>

                                            <div class="media-right">
                                                <i  class="fa fa-cloud-download" aria-hidden="true"></i>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">

                                            <div class="media-body">
                                                <a href="#" style="color: #000"> 2. The MVC architectural pattern</a>
                                            </div>

                                            <div class="media-right">
                                                <i  class="fa fa-cloud-download" aria-hidden="true"></i>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            @include('partials.default.sidebar')

        </div>



    </div>
</div>



    <!-- jQuery -->
    <script src="{{ URL::asset('assets/vendor/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ URL::asset('assets/vendor/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap.min.js') }}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ URL::asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>

    <!-- MDK -->
    <script src="{{ URL::asset('assets/vendor/dom-factory.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/material-design-kit.js') }}"></script>

    <!-- App JS -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    <!-- Highlight.js -->
    <script src="{{ URL::asset('assets/js/hljs.js') }}"></script>


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


    </script>


</body>

</html>
