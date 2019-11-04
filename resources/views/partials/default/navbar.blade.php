
<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->

    <div id="header" data-fixed class="mdk-header js-mdk-header mb-0">
        <div class="mdk-header__content">

            <!-- Navbar -->


            <nav id="default-navbar" class="navbar navbar-expand navbar-dark m-0 bg-dark mdk-header--fixed" data-primary="data-primary">
                <div class="container-fluid">


				<div class="navlogo navbar p-0">
				   <div class="d-md-flex d-lg-none pr-2">
						 <!-- Toggle sidebar -->
						<button class="navbar-toggler d-block d-lg-none" data-toggle="sidebar" type="button">
							<span class="material-icons">menu</span>
						</button>
					</div>

					<!-- Brand -->
					<a href="/" class="navbar-brand sidebar-menu-button p-0 pr-lg-3  pr-md-0">

                        <i class="fas fa-graduation-cap mr-2" style="font-size:26px; "></i>
						<span class="d-none d-xs-md-block">{{(config('app.name'))}}</span>
					</a>
				</div>


					<div class="d-md-none d-lg-flex ">
						 <!-- Toggle sidebar -->
						<button class="navbar-toggler d-md-none d-lg-block" data-toggle="sidebar" type="button">
							<span class="material-icons">menu</span>
						</button>

						<button class="navbar-toggler d-md-none  d-lg-block " onclick="Fullscreen()" type="button">
								<span class="material-icons" style="font-size: 28px;" id="iconFullScreen">fullscreen</span>
								<span class="material-icons" style="font-size: 28px;display:none;" id="iconFullScreen2">fullscreen_exit</span>
						</button>

					</div>




                    <div class="flex"></div>



                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap  d-lg-flex" >

                        <!-- Soporte dropdown -->
                        <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full" >

                            <button style="cursor:pointer" class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll data-caret="false">
                                <a class="nav-link dropdown-toggle"  role="button">


                                    <img src="{{ URL::asset(session('applocaleFlag'))}}"  alt="{{(config('app.name'))}}" style="width: 35px;height: 35px;" />

                                </a>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right lang">
                                <div data-perfect-scrollbar class="position-relative">
                                    <div class="dropdown-header"><strong>{{__("Idioma")}}</strong></div>
                                    <div class="list-group list-group-flush mb-0">
                                        <a href="{{ route('set_language', ["es"]) }}" class="list-group-item list-group-item-action lang-item ">
                                            <span >
                                                  <img src="{{ URL::asset('assets/images/Lang/spain.svg')}}" class="mr-2" alt="{{(config('app.name'))}}" style="width: 45px;height: 35px;" />  {{__("Español")}}
                                            </span>
                                        </a>

                                        <a href="{{ route('set_language', ["en"]) }}" class="list-group-item list-group-item-action lang-item ">
                                            <span >
                                                   <img src="{{ URL::asset('assets/images/Lang/united-states.svg')}}" class="mr-2" alt="{{(config('app.name'))}}" style="width: 45px;height: 35px;" />  {{__("Ingles")}}
                                            </span>
                                        </a>

                                        <a href="{{ route('set_language', ["ro"]) }}" class="list-group-item list-group-item-action lang-item ">
                                            <span >
                                                   <img src="{{ URL::asset('assets/images/Lang/romania.svg')}}" class="mr-2" alt="{{(config('app.name'))}}" style="width: 45px;height: 35px;" /> {{__("Rumano")}}
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- // END Soporte dropdown -->


                    </ul>


                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex" >

                        <!-- Soporte dropdown -->
                        <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full" >

                            <button style="cursor:pointer" class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll data-caret="false">
                                <a class="nav-link dropdown-toggle"  role="button">
                                    <span> {{__("Soporte")}} </span>
                                </a>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar class="position-relative">
                                    <div class="dropdown-header "><strong>{{__("Soporte")}}</strong></div>
                                    <div class="list-group list-group-flush mb-0">
                                        <a href="student-messages.html" class="list-group-item list-group-item-action ">
                                            <span class="d-flex">
                                                   {{__("Cómo conseguir ayuda")}}
                                            </span>
                                        </a>

                                        <a href="student-messages.html" class="list-group-item list-group-item-action ">
                                            <span class="d-flex">
                                                   {{__("Centro de soporte")}}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- // END Soporte dropdown -->


                    </ul>


                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap">


                        <!-- User dropdown -->
                        <li class="nav-item dropdown dropdown-account dropdown-menu-sm-full">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img src="{{ URL::asset('assets/images/people/50/guy-6.jpg')}}" alt="Avatar" class="rounded-circle" width="40"></a>


                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar class="position-relative">
                                    <div class="dropdown-header"><strong>{{__("Cuenta")}}</strong></div>
                                    <div class="list-group list-group-flush mb-0">
                                        <a href="/edit-account" class="list-group-item list-group-item-action unread">
                                            <span class="d-flex">
                                                    <i class="material-icons material-icons-navbar">person</i> {{__("Mi Cuenta")}}
                                            </span>
                                        </a>

                                        <a href="/edit-password" class="list-group-item list-group-item-action">
                                            <span class="d-flex">
                                                    <i class="material-icons material-icons-navbar">edit</i> {{__("Cambiar Contraseña")}}
                                            </span>
                                        </a>

                                        <a href="/logout" class="list-group-item list-group-item-action">
                                            <span class="d-flex">
                                                     <i class="material-icons material-icons-navbar">lock</i> {{__("Cerrar Sesion")}}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- // END User dropdown -->







                    </ul>
                    <!-- // END Menu -->






















                </div>
            </nav>
            <!-- // END Navbar -->

        </div>
    </div>

    <!-- // END Header -->


	<script>
	//Full Screen
	iconFullScreen
	var elem = document.documentElement;
	var icon1 = document.getElementById("iconFullScreen");
	var icon2 = document.getElementById("iconFullScreen2");




	var fullscreencheck=0;
	function Fullscreen() {
	  if(fullscreencheck==0){
		  icon1.style.display = "none";
		  icon2.style.display = "block";
		  fullscreencheck = 1;
		  openFullscreen();
	  }else{
		  icon1.style.display = "block";
		  icon2.style.display = "none";
		  closeFullscreen();
		  fullscreencheck = 0;
	  }
	}


	function openFullscreen() {
	  if (elem.requestFullscreen) {
		elem.requestFullscreen();
	  } else if (elem.mozRequestFullScreen) { /* Firefox */
		elem.mozRequestFullScreen();
	  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
		elem.webkitRequestFullscreen();
	  } else if (elem.msRequestFullscreen) { /* IE/Edge */
		elem.msRequestFullscreen();
	  }
	}

	function closeFullscreen() {
	  if (document.exitFullscreen) {
		document.exitFullscreen();
	  } else if (document.mozCancelFullScreen) {
		document.mozCancelFullScreen();
	  } else if (document.webkitExitFullscreen) {
		document.webkitExitFullscreen();
	  } else if (document.msExitFullscreen) {
		document.msExitFullscreen();
	  }
	}

</script>
