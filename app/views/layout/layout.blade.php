<head>
    <title>
        @yield('titulo')
    </title>
    @section('head')  
       <!-- {{ HTML::style('styles/app.v1.css'); }} -->
       {{ HTML::style('styles/jg.plus.css'); }}
       {{ HTML::style('styles/jg.styles.css'); }}

        <!-- Common Scripts: -->
        {{ HTML::script('scripts/jquery.js'); }}
        {{ HTML::script('scripts/notes.js'); }}
        {{ HTML::script('scripts/tasks.js'); }}      
        {{ HTML::script('scripts/apps.v1.js'); }}
        {{ HTML::script('scripts/jquery-ui.min.js'); }}
        {{ HTML::script('scripts/jquery.autosize.min.js'); }}   
        
    @show
 
</head>
<body>
    <section class="hbox stretch">
    <aside class="bg-primary aside-sm" id="nav"> 
    <section class="vbox"> 
        <header class="dker nav-bar"> 
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="body"> 
                <i class="icon-reorder"></i> 
            </a> 
            <a href="#" class="nav-brand" data-toggle="fullscreen"><img src="{{URL::to('')}}/images/JG-Logo.png" alt=""></a> 
            <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user">
             <i class="icon-comment-alt"></i> 
         </a> 
        </header> 
        <footer class="footer bg-gradient hidden-xs"> 
            <a href="{{URL::to('logout')}}" class="btn btn-sm btn-link m-r-n-xs pull-right"> 
                <i class="icon-off"></i> 
            </a> 
            <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm"> 
                <i class="icon-reorder"></i> 
            </a> 
        </footer> 
        <section> <!-- user --> 
          <div class="bg-success nav-user hidden-xs pos-rlt"> 
                <div class="nav-avatar pos-rlt"> 
                    <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown"> 
                        <img src="{{URL::to('')}}/images/user.png" alt="" class=""> 
                        {{Session::get('user')->first_name}}
                        <span class="caret caret-white"></span> 
                    </a> 
                    <ul class="dropdown-menu m-t-sm animated fadeInLeft"> 
                        <span class="arrow top"></span> 
                        <li> 
                            <a href="#">Mensajes</a> 
                        </li>
                        <li> 
                            <a href="{{URL::to('perfil')}}/{{Session::get('user')->id}}">Perfil</a> 
                        </li> 
                        <li> 
                            <a href="#"> 
                                <span class="badge bg-danger pull-right">3</span> Notificaciones 
                            </a> 
                        </li> 
                        <li class="divider"></li> 
                        
                       <li> 
                            <a href="{{URL::to('logout')}}">Logout</a> 
                        </li> 
                    </ul> 
                    <div class="visible-xs m-t m-b"> 
                        <a href="#" class="h3">{{Session::get('user')->first_name}} {{Session::get('user')->last_name}}</a> 
                        <p><i class="icon-map-marker"></i> Colombia, Cartagena</p> 
                    </div> 
                </div>  
                <div class="nav-msg"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                        <b class="badge badge-white count-n">2</b> 
                    </a> 
                    <section class="dropdown-menu m-l-sm pull-left animated fadeInRight"> 
                        <div class="arrow left"></div> 
                        <section class="panel bg-white"> 
                            <header class="panel-heading"> 
                                <strong>You have <span class="count-n">2</span> notifications</strong> 
                            </header> 
                            <div class="list-group"> 
                                <a href="#" class="media list-group-item"> 
                                    <span class="pull-left thumb-sm"> 
                                        <img src="/images/avatar.jpg" alt="John said" class="img-circle"> 
                                    </span> 
                                    <span class="media-body block m-b-none"> Use awesome animate.css<br> 
                                        <small class="text-muted">28 Aug 13</small> 
                                    </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">27 Aug 13</small> </span> </a> </div> <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="icon-cog"></i></a> <a href="#">See all the notifications</a> </footer> </section> </section> </div> 
                    </div>  
                    <nav class="nav-primary hidden-xs"> 
                        <ul class="nav"> 
                            <li class="{{ Request::is('home') ? 'active' : '' }}"> 
                                <a href="{{URL::to('home')}}"> <i class="icon-home"></i> <span>Home</span> </a> 
                            </li> 
                            @if(Session::get('user')->getGroups()[0]->name != "clientes")
                            <li class="{{ Request::is('programacion') ? 'active' : '' }}"> <a href="{{URL::to('programacion')}}"> <i class="icon-calendar nav-icon"></i> <span>Programacion</span> </a> 
                                </li>
                                 <li class="{{ Request::is('clientes') ? 'active' : '' }}"> <a href="{{URL::to('clientes')}}"> <i class="icon-group"></i> <span>Clientes</span> </a> 
                                </li> 
                            @endif
                                <li class="dropdown-submenu {{ Request::is('secretaria') ? 'active' : Request::is('coordinadores') ? 'active' : Request::is('tecnicos') ? 'active' : '' }}"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" > <i class="icon-user"></i> <span>Usuarios</span> <i class="icon-angle-right"></i></a> 
                                    <ul class="dropdown-menu"> 
                                        <li>
                                            <a href="{{URL::to('secretaria')}}">Secretaria</a> 
                                        </li> 
                                        <li>
                                            <a href="{{URL::to('coordinadores')}}"> Coordinadores</a> 
                                        </li> 
                                        <li>
                                            <a href="{{URL::to('tecnicos')}}">Técnicos</a> 
                                        </li> 
                                                                         
                                    </ul> 
                                </li> 
                                 <li class="{{ Request::is('bitacora') ? 'active' : '' }}"> <a href="{{URL::to('bitacora')}}"> <i class="icon-book"></i> <span>Bitácora</span> </a> 
                                </li> 
                                
                         <!--    <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-beaker"></i> <span>Usuarios</span> <i class="icon-angle-right"></i></a> 
                                <ul class="dropdown-menu"> 
                                    <li> <a href="#">Secretaria</a> 
                                    </li> 
                                    <li> <a href="#"> Ingenieros</a> 
                                    </li> 
                                    <li> <a href="#">Tecnicos</a> 
                                    </li> 
                            </ul> 
                        </li>  -->
                        <li class="dropdown-submenu {{ Request::is('pc') ? 'active' : Request::is('ups') ? 'active' : Request::is('soporte_tecnico') ? 'active' : Request::is('preventivo') ? 'active' : '' }}"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" > <i class="icon-pencil"></i> <span>Reportes</span> <i class="icon-angle-right"></i></a> 
                                    <ul class="dropdown-menu"> 
                                        <li>
                                        	<a href="{{URL::to('pc')}}">PC</a> 
                                        </li> 
                                        <li>
                                        	<a href="{{URL::to('ups')}}"> UPS</a> 
                                        </li> 
                                        <li>
                                        	<a href="{{URL::to('soporte_tecnico')}}">Soporte Técnico</a> 
                                        </li> 
                                       <li>
                                            <a href="{{URL::to('preventivo')}}">Mantenimiento Preventivo</a> 
                                        </li> 
                                    
                                    </ul> 
                                </li> 
                                 <li class="dropdown-submenu {{ Request::is('timeline') ? 'active' : '' }}"> 
                                    <a href="{{URL::to('timeline')}}"> <i class="icon-time"></i> 
                                    <span>TimeLine</span> </a>
                                </li> 
                        <!-- <li> <a href="mail.html"> <b class="badge bg-primary pull-right">3</b> 
                            <i class="icon-envelope-alt"></i> <span>Mensajes</span> </a> 
                            </li>  -->
                               
                               <!--  <li> <a href="#"> <i class="icon-pencil"></i> <span>Inventario</span> </a> 
                                </li> 
                                <li> <a href="#"> <i class="icon-calendar nav-icon"></i> <span>Calendario</span> </a> 
                                </li>  -->
                                
                            </ul> </nav> <!-- / nav --> <!-- note --> <!-- / note --> 
            </section>

             </section> 
         </aside> 
         <section id="content">
            <header class="header bg-white b-b"> <h1>Bienvenidos a JG Plus</h1> </header>
            <section class="vbox">
                    @section('edit-content')
                    @show                
            </section>
         </section>
     </section>

</body>
</html>