<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('public/backend/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('public/backend/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('public/backend/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/backend/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{url('public/backend/css/_all-skins.min.css')}}">
  <script src="{{url('public/backend/js/jquery.min.js')}}"></script>
 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{url('Admin')}}" class="logo">
     <span class="logo-lg"><b>Admin</b>OK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
  
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('public/backend/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>OK Team</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
     
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Posts</span>
           
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('all-posts')}}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{url('new-post')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
 
          <li>
          <a href="{{url('categories')}}">
            <i class="fa fa-circle-o text-aqua"></i> 
            <span>Categories</span>
            <span class="pull-right-container"></span>  
          </a>
        </li>

        <li>
          <a href="{{url('setups')}}">
            <i class="fa fa-circle-o text-aqua"></i> 
            <span>Website Settings</span>
            <span class="pull-right-container"></span>  
          </a>
        </li>
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2020 <a href="https://www.facebook.com/osamakhan1997">Osama Khan</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{url('public/backend/js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('public/backend/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/backend/js/adminlte.min.js')}}"></script>

</body>
</html>
