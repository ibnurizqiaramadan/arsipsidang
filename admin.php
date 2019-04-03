<!DOCTYPE html>
<html>
<head>
  <?php include './system/function.php'; ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dokumentasi Skripsi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./assets/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="./assets/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./assets/adminlte/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url('admin.php'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Arsip</b>Skripsi</span>
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
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="./assets/img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <!-- Menu Body -->
              <li class="user-body">
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
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
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
          <img src="./assets/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php
          if (isset($_GET['menu']) && isset($_GET['submenu'])) {
            $menu = $_GET['menu'];
            $submenu = $_GET['submenu'];
          } else {
            $menu = 'dashboard';
            $submenu ='';
          }
         ?>
        <li <?php echo ($menu == 'dashboard') ? 'class="active"' : null; ?>>
          <a href="<?php echo base_url('admin.php'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php echo ($menu == 'form') ? 'active' : null; ?>">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ( $menu == 'form' && (isset($submenu) ? $submenu : null) == 'prasidang') ? 'class="active"' : null; ?>><a href="<?php echo Page("form", "prasidang", "pendaftaranprasidang"); ?>"><i class="fa fa-circle-o"></i> Pendaftaran Prasidang</a></li>
            <li <?php echo ( $menu == 'form' && (isset($submenu) ? $submenu : null) == 'penilaian') ? 'class="active"' : null; ?>><a href="<?php echo Page("form", "penilaian", "penilaian"); ?>"><i class="fa fa-circle-o"></i> Form Penilaian</a></li>
            <li <?php echo ( $menu == 'form' && (isset($submenu) ? $submenu : null) == 'nilaisidang') ? 'class="active"' : null; ?>><a href="<?php echo Page("form", "nilaisidang", "beranda"); ?>"><i class="fa fa-circle-o"></i> Form Penilaian Sidang Akhir</a></li>
          </ul>
        </li>
        <li class="treeview <?php echo ($menu == 'list') ? 'active' : null; ?>">
          <a href="#">
            <i class="fa fa-book"></i> <span>List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ( $menu == 'list' && (isset($submenu) ? $submenu : null) == 'prasidang') ? 'class="active"' : null; ?>><a href="<?php echo Page("list", "prasidang", "listprasidang"); ?>"><i class="fa fa-circle-o"></i> List Prasidang</a></li>
            <li <?php echo ( $menu == 'list' && (isset($submenu) ? $submenu : null) == 'sidang') ? 'class="active"' : null; ?>><a href="<?php echo Page("list", "sidang", "listsidang"); ?>"><i class="fa fa-circle-o"></i> List Sidang</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <?php
        $ambil = 'page';
          $pages_dir = 'pages';
          if(!empty($_GET["$ambil"])){
            $pages = scandir($pages_dir , 0);
            unset($pages[0]);
            unset($pages[1]);
            $tugas = $_GET["$ambil"];
            if(in_array($tugas.'.php',$pages)){
              include($pages_dir.'/'.$tugas.'.php');
            } else {
              include($pages_dir.'/404.php');
            }
          } else {
            include($pages_dir.'/beranda.php');
          }
        ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <a href="#">Bar-Bar 2018</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="./assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="./assets/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="./assets/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="./assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="./assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="./assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="./assets/adminlte/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./assets/adminlte/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
    $(document).ready(function(){
        $('#table-list-prasidang').DataTable();
    });
</script>
</body>
</html>
