<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TecnoSystems 2.0</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">    

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>TS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>TecnoSystems 2.0</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="group-addon"><i class="fa fa-user" aria-hidden="true"></i>  BIENVENIDO:  </span>
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      SISTEMA DE GESTION PARA REGISTRO DE PACIENTES         
                      <small>CONTACTO</small>
                      <small>Email: anadonleandro@gmail.com</small>
                      <small>Tel: 0342-154789156 Santa Fe, Argentina</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            CERRAR SESION
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <!--<li class="treeview">
              <a href="{{'/events'}}">
                <i class="fa fa-calendar"></i>
                <span> Calendario</span>
              </a>
            </li>-->
            <li class="treeview">
              <a href="{{url('/talleres')}}">
                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                <span> Admisiones</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('archivo/admisiones')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gestionar</a></li>
                <li><a href="{{url('/admisionestado')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar x Estado</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span> Turnos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('archivo/turnos')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gestionar</a></li>
                <li><a href="{{url('/turnoestado')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar x Estado</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span> Pacientes</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('archivo/pacientes')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gestionar</a></li>
                <li><a href="{{url('/archivo/pacientetalleres/create')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Asignar Talleres</a></li>
                <li><a href="{{url('/archivo/pacienteacompanantes/create')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Asignar Acompañante Terap.</a></li>
                <li><a href="{{url('/pacientetaller')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar Paciente/Talleres</a></li>
                <li><a href="{{url('/pacientefecha')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar Paciente/Turnos</a></li>
                <li><a href="{{url('/pacientefechados')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar Paciente/Acomp.</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user-md"></i>
                <span> Profesionales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('archivo/profesionales')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gestionar</a></li>
                <li><a href="{{url('/archivo/profesionaltalleres/create')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Asignar Talleres</a></li>
                <li><a href="{{url('/profesionaltaller')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar Profesional/Talleres</a></li>
                <li><a href="{{url('/profesionalfecha')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar Profesional/Turnos</a></li>
                <li><a href="{{url('/profesionalesfecha')}}"><i class="fa fa-search" aria-hidden="true"></i> Consulta General de Turnos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-street-view"></i>
                <span> Acompañantes Terap.</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('archivo/acompanantes')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gestionar</a></li>
                <li><a href="{{url('/acompanantefecha')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar Acompañante/Días</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tachometer"></i>
                <span> Talleres</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('archivo/talleres')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gestionar</a></li>
                <li><a href="{{url('/talleres')}}"><i class="fa fa-search" aria-hidden="true"></i> Consultar Taller/Días</a></li>
              </ul>
            </li>
            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-binoculars"></i>
                <span>Consultas Generales</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                
                
              </ul>
            </li> 
            <li class="treeview">
              <a href="#">
                <i class="fa fa-binoculars"></i>
                <span>Consulta Acompañantes</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
              </ul>
            </li> 
            <li class="treeview">
              <a href="#">
                <i class="fa fa-binoculars"></i>
                <span>Consulta Pacientes</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
              </ul>
            </li>-->                
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user-plus"></i> <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('archivo/usuarios')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gestionar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{url('/informacion')}}">
                <i class="fa fa-info-circle"></i>
                <span> Acerca de</span>
              </a>
            </li>  
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de Gestión de Pacientes</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              @yield('contenido')
                              <!--Fin Contenido-->
                           </div>
                        </div>
                        
                      </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versión</b> 1.1.2018
        </div>
        <strong>Copyright &copy; TecnoSystems 2.0</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
