<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    {!! Html::style('admin_theme/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome Icons -->
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {!! Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}
    <!-- jvectormap -->
    {!! Html::style('admin_theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
    <!-- Theme style -->
    {!! Html::style('admin_theme/dist/css/AdminLTE.min.css') !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('admin_theme/dist/css/skins/_all-skins.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      @include('admin.common.header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('admin.common.rightsidebar')

      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"></li>
          </ol>
        </section>
      <div class="container">
		@yield('content')
      </div>
	</div>
      <!-- /.content-wrapper -->
      @include('admin.common.footer')
      

      <!-- Control Sidebar -->
      @include('admin.common.controllsidebar')
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    {!! Html::script('admin_theme/plugins/jQuery/jQuery-2.1.4.min.js') !!}
    <!-- Bootstrap 3.3.2 JS -->
    {!! Html::script('admin_theme/bootstrap/js/bootstrap.min.js') !!}
    <!-- FastClick -->
    {!! Html::script('admin_theme/plugins/fastclick/fastclick.min.js') !!}
    <!-- AdminLTE App -->
    {!! Html::script('admin_theme/dist/js/app.min.js') !!}
    <!-- Sparkline -->
    {!! Html::script('admin_theme/plugins/sparkline/jquery.sparkline.min.js') !!}
    <!-- jvectormap -->
    {!! Html::script('admin_theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
    {!! Html::script('admin_theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
    <!-- SlimScroll 1.3.0 -->
    {!! Html::script('admin_theme/plugins/slimScroll/jquery.slimscroll.min.js') !!}
    <!-- ChartJS 1.0.1 -->
    {!! Html::script('admin_theme/plugins/chartjs/Chart.min.js') !!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!! Html::script('admin_theme/dist/js/pages/dashboard2.js') !!}
    <!-- AdminLTE for demo purposes -->
    {!! Html::script('admin_theme/dist/js/demo.js') !!}
  </body>
</html>
