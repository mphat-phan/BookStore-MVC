<?php
  // khác port => http://localhost/Bookstore/
  // có port => http://localhost:(PORT)/Bookstore/
  define ('URL', 'http://localhost:88/Bookstore/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="#">
          Import
        </a>              
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="#">
          Export
        </a>              
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="#">
          Report
        </a>              
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">      
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>          
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">                    
          <a href="#" class="dropdown-item">
          <i class="fas fa-user"></i> Profile
          </a>
          <a href="#" class="dropdown-item">
          <i class="fas fa-sign-out-alt"></i> Logout
          </a>                              
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <i class="fa fa-book" aria-hidden="true"></i>      
      <span class="brand-text font-weight-light">Bookstore</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo constant("URL") ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Đoàn Chí Quang</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard                
              </p>
            </a>            
          </li>                                        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Quản lý sản phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thể loại</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tác giả</p>
                </a>
              </li>               
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Quản lý hóa đơn                
              </p>
            </a>            
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Quản lý nhân viên               
              </p>
            </a>            
          </li><li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-truck-loading"></i>
              <p>
                Quản lý nhập hàng              
              </p>
            </a>            
          </li>           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>Sell</p>
            </a>            
          </li>                                                                            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Require nội dung ngay chỗ này -->
  
  <!-- end require nội dung ngay chỗ này -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021</strong>
    All rights reserved.    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo constant('URL') ?>public/assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo constant('URL') ?>public/assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo constant('URL') ?>public/assets/dist/js/pages/dashboard3.js"></script>
</body>
</html>
