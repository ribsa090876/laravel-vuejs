<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
    <title>Laravel & Vue JS</title>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    <!-- Navbar -->
@include('Template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('Template.left-sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
            <router-view></router-view>
        </div><!-- /.container-fluid -->
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('Template.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  @include('Template.script')
</body>
</html>
