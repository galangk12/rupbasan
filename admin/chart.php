<?php
require_once("../config/database.php");
$q1=mysqli_query($koneksi,
"SELECT COUNT(*) FROM prosedur_a");
$r1=mysqli_fetch_array($q1);
$q2=mysqli_query($koneksi,
"SELECT COUNT(*) FROM prosedur_b_g");
$r2=mysqli_fetch_array($q2);
$q3=mysqli_query($koneksi,
"SELECT COUNT(*) FROM prosedur_c_g a");
$r3=mysqli_fetch_array($q3);
$rt =$r1[0] + $r2[0] + $r3[0];
 ?>
<section class="content" style="width:100%;">
<div class="container-fluid">
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-info"></i> Alert!</h5>
    Selamat Datang Di
Sistem Administrasi Pengelolaan Basan Baran
Kementrian Hukum Dan Hak Asasi Manusia RI
Rumah Penyimpanan Sitaan Negara Kelas I Surakarta</div>

	<div class="row">
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3><?php echo $rt ?></h3>

					<p>Total Berkas<br>&nbsp;</p>
				</div>
				<div class="icon">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=id_kelompok" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-danger">
				<div class="inner">
					<h3><?php echo $r1[0] ?></h3>

					<p>Penerimaan Basan Baran<br>&nbsp;</p>
				</div>
				<div class="icon">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=berkas_a" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-primary">
				<div class="inner">
					<h3><?php echo $r2[0] ?></h3>

					<p>Pengeluaran Basan Baran <br>Sebelum Putusan Pengadilan</p>
				</div>
				<div class="icon">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=berkas_b" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3><?php echo $r3[0] ?></h3>

					<p>Pengeluaran Basan Baran <br>Sesudah Putusan Pengadilan</p>
				</div>
				<div class="icon">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=berkas_c" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
</div>
</div>

</section>
