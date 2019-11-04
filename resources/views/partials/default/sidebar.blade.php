


<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content ">
        <div class="sidebar sidebar-left o-hidden ps ps--active-y sidebar-light" data-perfect-scrollbar>
            <div class="sidebar-p-y">
                <div class="sidebar-heading">{{__("Accesos Rapidos")}}</div>
                <ul class="sidebar-menu sm-active-button-bg">

                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="upgrade-account">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> {{__("Mejorar Cuenta")}}
                        </a>
                    </li>

                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ URL::to('/referral')}}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons text-danger">favorite</i> {{__("Recomienda a un amigo")}}
                        </a>
                    </li>
                </ul>
                <!-- Account menu -->
                <div class="sidebar-heading">{{__("Cuenta")}} </div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item {{ (request()->is(['pay-method*', 'edit-account', 'edit-password', 'upgrade-account', 'email-preferences', 'referral']) ) ? 'open' : '' }}">
                        <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#account_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                            {{__("Cuenta")}}
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu sm-indent collapse {{ (request()->is(['pay-method*', 'edit-account', 'edit-password',  'upgrade-account', 'email-preferences', 'referral']) ) ? 'show' : '' }}" id="account_menu">

                            <li class="sidebar-menu-item {{ (request()->is('edit-account*')) ? 'active' : '' }}" >
                                <a class="sidebar-menu-button" href="{{ URL::to('/edit-account')}}">
                                    <span class="sidebar-menu-text">{{__("Mi Cuenta")}}</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{ (request()->is('upgrade-account*')) ? 'active' : '' }}">
                                <a class="sidebar-menu-button" href="{{ URL::to('/upgrade-account')}}">
                                    <span class="sidebar-menu-text">{{__("Mejorar Cuenta")}}</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{ (request()->is('pay-method*')) ? 'active' : '' }}">
                                <a class="sidebar-menu-button" href="{{ URL::to('/pay-method')}}">
                                    <span class="sidebar-menu-text"> {{__("Metodos de pago")}}</span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item  {{ (request()->is('edit-password*')) ? 'active' : '' }}">
                                <a class="sidebar-menu-button" href="{{ URL::to('edit-password')}}">
                                    <span class="sidebar-menu-text">{{__("Cambiar Contraseña")}}</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{ (request()->is('referral*')) ? 'active' : '' }}">
                                <a class="sidebar-menu-button" href="{{ URL::to('/referral')}}">
                                    <span class="sidebar-menu-text ">{{__("Recomienda a un amigo")}}</span>
                                </a>
                            </li>





                            <li class="sidebar-menu-item {{ (request()->is('email-preferences*')) ? 'active' : '' }}">
                                <a class="sidebar-menu-button" href="{{ URL::to('email-preferences')}}">
                                    <span class="sidebar-menu-text">{{__("Preferencias de Emails")}} </span>
                                </a>
                            </li>



                        </ul>
                    </li>

                </ul>
                <div class="sidebar-heading">{{__("Estudiante")}} </div>
                <ul class="sidebar-menu sm-active-button-bg">

                    <li class="sidebar-menu-item {{ (request()->is('my-programs*')) ? 'active' : '' }}">
                        <a class="sidebar-menu-button" href="/my-programs">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i>{{__("Mis programas")}}
                        </a>
                    </li>

                    <li class="sidebar-menu-item {{ (request()->is('view-course*')) ? 'active' : '' }}">
                        <a class="sidebar-menu-button" href="/view-course">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> {{__("Continuar leccion")}}
                        </a>
                    </li>



                    <li class="sidebar-menu-item {{ (request()->is('action-plan*')) ? 'active' : '' }}">
                        <a class="sidebar-menu-button" href="/action-plan">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">class</i> {{__("Plan de Acción")}}
                        </a>
                    </li>


                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="/my-progress">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">poll</i> {{__("Mi progreso")}}
                        </a>
                    </li>


                    <li class="sidebar-menu-item {{ (request()->is(['foro', 'forum-thread']) ) ? 'open' : '' }}">


                        <a class="sidebar-menu-button" data-toggle="collapse" href="#forum_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                            {{__("Comunidad")}}
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>


                        <ul class="sidebar-submenu sm-indent collapse {{ (request()->is(['foro', 'forum-thread']) ) ? 'show' : '' }}" id="forum_menu">

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="forum">
                                    <span class="sidebar-menu-text">{{__("Cómo conseguir ayuda")}} </span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{ (request()->is('forum-thread*')) ? 'active' : '' }}">
                                <a class="sidebar-menu-button" href="/forum-thread">
                                    <span class="sidebar-menu-text">{{__("Q&A Semanales")}}  </span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-forum-ask.html">
                                    <span class="sidebar-menu-text">{{__("Grupos de facebook")}} </span>
                                </a>
                            </li>


                        </ul>
                    </li>



                    <li class="sidebar-menu-item {{ (request()->is(['help', 'thread']) ) ? 'open' : '' }}">


                        <a class="sidebar-menu-button" data-toggle="collapse" href="#help_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i>
                            {{__("Soporte")}}
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>


                        <ul class="sidebar-submenu sm-indent collapse {{ (request()->is(['help', 'thread']) ) ? 'show' : '' }}" id="help_menu">

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="forum">
                                    <span class="sidebar-menu-text">{{__("Cómo conseguir ayuda")}} </span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{ (request()->is('forum-thread*')) ? 'active' : '' }}">
                                <a class="sidebar-menu-button" href="/forum-thread">
                                    <span class="sidebar-menu-text">{{__("Centro de soporte")}}  </span>
                                </a>
                            </li>




                        </ul>
                    </li>




                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ URL::to('/logout')}}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> {{__("Cerrar Sesion")}}
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>










