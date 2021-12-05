<?php
error_reporting(0);
require_once 'session.php';
require_once '../config/database.php';
$page=isset($_GET['page']) ? ($_GET['page']) : "";
if($page=='logout'){
$_SESSION = [];
echo "<script>window.location.href=('../index.php');</script>
 "; }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Sistem Administrasi Pengelolaan Basan Baran</title>
<link rel="icon"
      type="image/png"
      href="../dist/logonya.png">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-danger navbar-dark">
	<!-- Left navbar links -->

	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="index.php" class="nav-link">Beranda</a>
		</li>
	</ul>
	<!-- SEARCH FORM -->
	</nav>
	<!-- /.navbar -->
	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-info elevation-4">
	<!-- Brand Logo -->
	<a href="index.php" class="brand-link">
	<img src="../dist/logone.png" alt="SisfoLogo" class="brand-image img-circle elevation-5" style="opacity: .8">
	<span class="brand-text font-weight-light">Administrator</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<!-- Sidebar Menu -->
		<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item">
				<a href="index.php" class="nav-link">
				<i class="fa fa-home nav-icon"></i>
				<p>
					 Dashboard
				</p>
				</a>
			</li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fa fa-sticky-note nav-icon"></i>
          <p>
            Informasi Berkas
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?page=berkas_a" class="nav-link">
              <p>&rarr; Penerimaan Basan Baran</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=berkas_b" class="nav-link">
              <p>&rarr; Pengeluaran Basan Baran<br>Sebelum Putusan Pengadilan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=berkas_c" class="nav-link">
              <p>&rarr; Pengeluaran Basan Baran<br>Setelah Putusan Pengadilan</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
				<a href="index.php?page=users" class="nav-link">
				<i class="fa fa-users nav-icon"></i>
				<p>
					 Informasi User
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="index.php?page=settings" class="nav-link">
				<i class="fa fa-user nav-icon"></i>
				<p>
					 Administrator
				</p>
				</a>
			</li>
			<br>
			<br>
			<li class="nav-item">
				<a href="index.php?page=logout" class="nav-link">
				<i class="fa fa-power-off nav-icon"></i>
				<p>
					 Logout
				</p>
				</a>
			</li>
		</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
	</aside>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<div class="content">
		    <?php include 'header.php'; ?>
				<div class="row">
          <?php if($page=='settings') {
              include 'settings.php';
          }
          elseif($page=='berkas_a') {
            include 'berkas_a.php';
          }
          elseif($page=='berkas_b') {
            include 'berkas_b.php';
          }
          elseif($page=='berkas_c') {
            include 'berkas_c.php';
          }
          elseif($page=='users') {
            include 'users.php';
          }
          elseif($page=='edit_user') {
            include 'users-edit.php';
          }
          elseif($page=='berhasil') {
            echo "<script>window.alert('Berkas Berhasil Diupload')</script>";
          }
          elseif($page=='gagal') {
            echo "<script>window.alert('Berkas Gagal Diupload')</script>";
          }
          elseif($page=='b_hapus') {
            echo "<script>window.alert('Berkas Berhasil Dihapus')</script>";
          }
          elseif($page=='g_hapus') {
            echo "<script>window.alert('Berkas Gagal Dihapus')</script>";
          }
          else {
            include('chart.php');
          }

           ?>

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!-- Main Footer -->
	<footer class="main-footer">
	<!-- To the right -->
	<!-- Default to the left -->
	<strong>Copyright &copy; 2020 <a href="#">Sistem Administrasi Pengelolaan Basan Baran</a>. </strong> All rights reserved. </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!--- Chart.js--->
</body>
</html>
