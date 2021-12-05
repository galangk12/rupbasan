<?php
$page=isset($_GET['page']) ? ($_GET['page']) : "";
if ($page=='logins') {
	logins ();
}
function logins() {
include "config/database.php";
$email=$_POST['email'];
$pass=$_POST['password'];
$query="SELECT * FROM users where email='$email' AND password='$pass'";
$data=mysqli_query($koneksi,$query);
$cek=mysqli_fetch_array($data);
if ($cek['email']==$email && $cek['password']==$pass) {
session_start();
	$_SESSION['email']=$email;
	$_SESSION['level']=$cek['level'];
	if ($cek['level']=='admin') {
		header("location:admin/index.php");

	}
	elseif ($cek['level']=='user') {
		header("location:user/index.php");

	}
}
else{
 header("location:index.php?page=gagal");;
}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sistem Administrasi Pengelolaan Basan Baran</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<script type="text/javascript">
function myFunction() {
var x = document.getElementById("pass");
if (x.type === "password") {
	x.type = "text";
} else {
	x.type = "password";
}
}
function myFunction2() {
var x = document.getElementById("pass2");
if (x.type === "password") {
	x.type = "text";
} else {
	x.type = "password";
}
}
</script>
<style>
.table > tbody > tr > td {
	 vertical-align: middle;
}
</style>
</head>
<body class="hold-transition login-page">
	<?php if($page=='gagal') { ?>
		<script type="text/javascript">
		alert('Maaf Email/Password Salah.')
		</script>
	<?php } ?>
	<div class="login-box" style="width:50%;">
			<table class="table bg-white">
				<td class="text-center bg-danger">
					<div class="login-logo">
						<img src="dist/logone.png" alt="Logo" style="width:35%;height:35%;" ><br>
						<p style="font-size:16px">
							Selamat Datang Di<br>Sistem Administrasi Pengelolaan Basan Baran<br>
						Kementrian Hukum Dan Hak Asasi Manusia RI<br>
						Rumah Penyimpanan Sitaan Negara Kelas I Surakarta</p>
					</div>
				</td>
				<td class="text-center ">
					<form action="index.php?page=logins" method="post">
						<div class="input-group mb-3">
							<input type="text" name="email" class="form-control" placeholder="Email" required>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input id="pass" type="password" name="password" class="form-control" placeholder="Password" required>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<div class="form-check">
								&nbsp;&nbsp;<input type="checkbox" class="form-check-input" onclick="myFunction()">
								<label class="form-check-label">Lihat Password</label>
							</div>
						</div>
						<div class="row">
							<div class="col-7">
								<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-default">
                  Registrasi
                </button>
							</div>
							<!-- /.col -->
							<div class="col-4">
								<button type="submit" class="btn btn-danger btn-block">Masuk</button>
							</div>

							<!-- /.col -->
						</div>
					</form><br>
					<a href="#" data-toggle="modal" data-target="#modal-lupa">Lupa Password ?</a>
				</td>
			</table>
			<div class="modal fade" id="modal-default">
		        <div class="modal-dialog">
		          <div class="modal-content">
		            <div class="modal-header bg-danger">
		              <h4 class="modal-title">Form Registrasi</h4>
		              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		              </button>
		            </div>
		            <div class="modal-body">
									<form action="config/data.php?page=registrasi" method="post">
					          <div class="input-group mb-3">
					            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
					            <div class="input-group-append">
					              <div class="input-group-text">
					                <span class="fas fa-user"></span>
					              </div>
					            </div>
					          </div>
					          <div class="input-group mb-3">
					            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
					            <div class="input-group-append">
					              <div class="input-group-text">
					                <span class="fas fa-user-secret"></span>
					              </div>
					            </div>
					          </div>
					          <div class="input-group mb-3">
					            <input type="text" name="instansi" class="form-control" placeholder="Nama Instansi" required>
					            <div class="input-group-append">
					              <div class="input-group-text">
					                <span class="fas fa-university"></span>
					              </div>
					            </div>
					          </div>
					          <div class="input-group mb-3">
					            <input type="text" name="email" class="form-control" placeholder="Email" required>
					            <div class="input-group-append">
					              <div class="input-group-text">
					                <span class="fas fa-envelope"></span>
					              </div>
					            </div>
					          </div>
					          <div class="input-group mb-3">
					            <input type="text" name="nohp" class="form-control" placeholder="No HP" required>
					            <div class="input-group-append">
					              <div class="input-group-text">
					                <span class="fas fa-phone"></span>
					              </div>
					            </div>
					          </div>
					          <div class="input-group mb-3">
					            <input id="pass2" type="password" name="password" class="form-control" placeholder="Password" required>
					            <div class="input-group-append">
					              <div class="input-group-text">
					                <span class="fas fa-lock"></span>
					              </div>
					            </div>
					          </div>
										<div class="form-group row">
	        						<div class="form-check">
	         							&nbsp;&nbsp;<input type="checkbox" class="form-check-input" onclick="myFunction2()">
	          						<label class="form-check-label">Lihat Password</label>
	        						</div>
	       						</div>
		            </div>
		            <div class="modal-footer justify-content-between">
		              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
		              <button type="submit" class="btn btn-danger">Daftar</button>
									</form>
		            </div>
		          </div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		      </div>


<?php
require_once 'config/database.php';
$qq=mysqli_query($koneksi,"SELECT nohp FROM users where level='admin'");
$ad=mysqli_fetch_array($qq);
 ?>
					<div class="modal fade" id="modal-lupa">
				        <div class="modal-dialog">
				          <div class="modal-content">
				            <div class="modal-header bg-danger">
				              <h5 class="modal-title">Lupa Password</h5>
				              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
				            </div>
		<div class="modal-body">
			<p>Harap Hubungi Administrator Ke Nomor HP/WA : <?php echo $ad['nohp'] ?>. Terimakasih.</p>
		</div>
	</div>
</div>
</div
</body>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->

</html>
