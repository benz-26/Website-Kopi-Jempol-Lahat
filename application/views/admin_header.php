<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kopi Cap Bukit Jempol Lahat - Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/fullcalendar/main.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/summernote/summernote-bs4.min.css">
  <script type="module" src="<?php echo base_url() ?>dist/admin/https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="<?php echo base_url() ?>dist/admin/https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="<?php echo base_url() ?>dist/admin/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url() ?>dist/admin/plugins/daterangepicker/daterangepicker.js"></script>
</head>




<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url() ?>dist/images/logo_kp.png" height="80" width="80">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url() ?>PSB/index_admin" class="nav-link">HOME</a>
        </li>
      </ul>
    </nav>
    <!-- sidebar -->

    <aside class="main-sidebar sidebar-dark-primary elevation-5 rounded">
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url() ?>dist/images/logo_kp.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Kopi Cap Bukit Jempol</a>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?php echo base_url() ?>PSB/admin" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Admin
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>PSB/produk" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>
                  Produk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>PSB/berita" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Berita
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>PSB/index" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Landing Page
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>PSB/logout" class="nav-link">
                <i class="nav-icon fas fa-times"></i>
                <p>
                  LOGOUT
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside> 
 