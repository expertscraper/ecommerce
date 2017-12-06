
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{!! asset('css/ionicons.min.css') !!}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{!! asset('css/jquery-jvectormap-1.2.2.css') !!}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('css/AdminLTE.min.css') !!}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{!! asset('css/_all-skins.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
  <!-- <link rel="stylesheet" href="{!! asset('css/kendo.default.min.css') !!}"> -->
  <!-- <link rel="stylesheet" href="{!! asset('css/kendo.rtl.min.css') !!}"> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{!! asset('css/datepicker3.css') !!}">
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrapValidator.min.css')}}">
<script type="text/javascript" src = "{{ asset('js/bootstrapValidator.min.js')}}"></script>  -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    /*#loadingDiv { position: fixed; top:50%; left:50%; } */
    #loadingDiv
    {
    display : none;
    }
    #loadingDiv.show{
      position:absolute;
      top:0px;
      right:0px;
      width:100%;
      height:100%;
      background-color:#666;
      background-image:url("{!! asset('img/loading.gif') !!}");
      background-repeat:no-repeat;
      background-position:center;
      z-index:10000000;
      opacity: 0.4;
      filter: alpha(opacity=40); /* For IE8 and earlier */
    }  
  </style>
</head>
<body class="skin-blue sidebar-mini" id="app">
<div class="wrapper">
  <div id="loadingDiv">
    <div>
    </div>
  </div>
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
  <span class="sr-only">Toggle navigation</span>
</a>
<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
    @if (Auth::guest())
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
    @else
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
      </a>
      <ul class="dropdown-menu">
        
        <li class="user-header">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

          <!-- <p>
            Alexander Pierce - Web Developer
            <small>Member since Nov. 2012</small>
          </p> -->
        </li>
        
        <!-- <li class="user-body">
          <div class="row">
            <div class="col-xs-4 text-center">
              <a href="#">Followers</a>
            </div>
            <div class="col-xs-4 text-center">
              <a href="#">Sales</a>
            </div>
            <div class="col-xs-4 text-center">
              <a href="#">Friends</a>
            </div>
          </div>
        
        </li> -->
        
        <li class="user-footer">
          <div class="pull-left">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
          </div>
          <div class="pull-right">
            <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          
          </div>
        </li>
      </ul>
    </li>
    @endif
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
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      @include('layouts.sidebar')
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <!-- <section class="content"> -->
    <!-- <div id="page-wrapper"> -->
        <!-- <div class="container-fluid"> -->
            <!-- Page Heading -->
            <!-- <div class="row" id="main" > -->
                <!-- <div class="col-sm-12 col-md-12 well" id="content"> -->
                @yield('content')
                <!-- </div> -->
            <!-- </div> -->
            
        <!-- </div> -->
        
    <!-- </div> -->
   
    <!-- </section> -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-default" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Default Modal</h4>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="#">Admin Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<!-- FastClick -->
<!-- <script src="{!! asset('js/fastclick.js') !!}"></script> -->
<!-- AdminLTE App -->
<script src="{!! asset('js/adminlte.js') !!}"></script>
<script src="{!! asset('js/vue.js') !!}"></script>
@yield('script')
<script type="text/javascript">
  $(document)
      .ajaxStart(function () {
        $("#loadingDiv").addClass('show');
      })
      .ajaxStop(function () {
        $("#loadingDiv").removeClass('show');
      });
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/en.js"></script> -->
<!-- Sparkline -->
<!-- <script src="{!! asset('js/jquery.sparkline.min.js') !!}"></script> -->
<!-- jvectormap -->
<!-- <script src="{!! asset('js/jquery-jvectormap-1.2.2.min.js') !!}"></script> -->
<!-- <script src="{!! asset('js/jquery-jvectormap-world-mill-en.js') !!}"></script> -->
<!-- SlimScroll 1.3.0 -->
<!-- <script src="{!! asset('js/jquery.slimscroll.min.js') !!}"></script> -->
<!-- ChartJS 1.0.1 -->
<!-- <script src="{!! asset('js/Chart.min.js') !!}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{!! asset('js/dashboard2.js') !!}"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="{!! asset('js/demo.js') !!}"></script> -->

</body>
</html>
