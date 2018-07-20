<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Favicons -->
  <link href="{{ asset('img/icon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/all.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">



  <!-- Morris chart -->
  {{-- <link rel="stylesheet" href="{{ asset('admin/bower_components/morris.js/morris.css') }}"> --}}
  <!-- jvectormap -->
  {{-- <link rel="stylesheet" href="{{ asset('admin/bower_components/jvectormap/jquery-jvectormap.css') }}"> --}}
  <!-- Date Picker -->
  {{-- <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}"> --}}
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}"> --}}
  <!-- bootstrap wysihtml5 - text editor -->
  {{-- <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}"> --}}


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="{{ route('home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>D</b>TI</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>DTI</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>

              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                  <p>
                  {{ Auth::user()->name }}
                    {{-- <small>Member since Nov. 2012</small> --}}
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat"><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>Cerrar Sesión</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="active treeview"><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i><span>Panel</span></a></li>
          <li class="header"></li>
          @can('categories.index')
            <li><a href="{{ route('categories.index') }}"><i class="glyphicon glyphicon-tag"></i><span>Categorias</span></a></li>     
          @endcan
          <li class="treeview">
            @can('posts.index')
            <a href="#">
              <i class="glyphicon glyphicon-pushpin"></i>
              <span>Eventos</span>
              <span class="pull-right-container">
              </span>
            </a>
            @endcan
              <ul class="treeview-menu">
              @can('posts.index')
                <li><a href="{{ route('posts.index') }}"><i class="fa fa-circle-o"></i><span>Todas las entradas</span></a></li>
              @endcan
              @can('posts.create')
                <li><a href="{{ route('posts.create') }}"><i class="fa fa-circle-o"></i><span>Agregar nueva</span></a></li>
              @endcan
              @can('tags.index')
                <li><a href="{{ route('tags.index') }}"><i class="fa fa-circle-o"></i><span>Etiquetas</span></a></li>
              @endcan
              </ul>
          </li>
          @can('services.index')
          <li><a href="{{ route('services.index') }}"><i class="glyphicon glyphicon-fire"></i><span>Servicios</span></a></li>
          @endcan
          @can('portfolios.index')
          <li><a href="{{ route('portfolios.index') }}"><i class="glyphicon glyphicon-briefcase"></i><span>Portafolio</span></a></li>
          @endcan
        {{-- @can('products.index')
          <li><a href="{{ route('products.index') }}"><i class="glyphicon glyphicon-pushpin"></i><span>Productos</span></a></li>
        @endcan --}}
        <li class="header"></li>
          
        @can('users.index')
          <li><a href="{{ route('users.index') }}"><i class="glyphicon glyphicon-user"></i><span>Usuario</span></a></li>
        @endcan
        @can('roles.index')
          <li><a href="{{ route('roles.index') }}"><i class="glyphicon glyphicon-tower"></i><span>Roles</span></a></li>
        @endcan
          <li class="treeview">
            @can('posts.index')
            <a href="#">
              <i class="glyphicon glyphicon-cog"></i>
              <span>Configuracion General</span>
              <span class="pull-right-container">
              </span>
            </a>
            @endcan
              <ul class="treeview-menu">
              @can('companies.edit')
                <li><a href="{{ route('companies.edit', 1) }}"><i class="fa fa-circle-o"></i><span>Empresa</span></a></li>
              @endcan
              @can('unities.index')
                <li><a href="{{ route('unities.index') }}"><i class="fa fa-circle-o"></i><span>Unidades</span></a></li>
              @endcan
              @can('customers.index')
                <li><a href="{{ route('customers.index') }}"><i class="fa fa-circle-o"></i><span>Clientes</span></a></li>
              @endcan
              @can('teams.index')
              <li><a href="{{ route('teams.index') }}"><i class="fa fa-circle-o"></i><span>Equipo de Trabajo</span></a></li>
              @endcan
              @can('testimonies.index')
              <li><a href="{{ route('testimonies.index') }}"><i class="fa fa-circle-o"></i><span>Testimonios</span></a></li>
              @endcan
              </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        @if(count($errors))
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-dismissible" role="alert" style="background: #f2dcdd; color: #aa3d40;" >
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Por favor, corrige los siguientes errores:</strong><br>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              </div>
          </div>
        @endif

        @if(session('info'))
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-dismissible" role="alert" style="background: #dbf4d3; color: #307e33;" >
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Aviso!</strong><br>{{ session('info') }}
                </div>
            </div>
          </div>
        @endif
      </section>
      @yield('content')
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">a@systems</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <!-- /.control-sidebar-menu -->
        </div>
        <!-- /.tab-pane -->

      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    {{-- <div class="control-sidebar-bg"></div> --}}
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src=" {{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  {{-- <script src=" {{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script> --}}
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  {{-- <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script> --}}
  <!-- Bootstrap 3.3.7 -->
  <script src=" {{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <!-- InputMask -->
  <script src="{{ asset('admin/plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{ asset('admin/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{ asset('admin/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <!-- Morris.js charts -->
  {{-- <script src=" {{ asset('admin/bower_components/raphael/raphael.min.js') }}"></script>
  <script src=" {{ asset('admin/bower_components/morris.js/morris.min.js') }}"></script> --}}
  <!-- Sparkline -->
  <script src=" {{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
  <!-- jvectormap -->
  <script src=" {{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src=" {{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src=" {{ asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  {{-- <script src=" {{ asset('admin/bower_components/moment/min/moment.min.js') }}"></script>
  <script src=" {{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script> --}}
  <!-- datepicker -->
  <script src=" {{ asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  {{-- <script src=" {{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script> --}}
  <!-- Slimscroll -->
  <script src=" {{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <!-- iCheck 1.0.1 -->
  <script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
  <!-- FastClick -->
  <script src=" {{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  <script src=" {{ asset('admin/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src=" {{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src=" {{ asset('admin/dist/js/demo.js') }}"></script>
  <!-- DataTables -->
  <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  @yield('scripts')
</body>
</html>
