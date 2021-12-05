<?php
require_once '../config/database.php';
$email=$_SESSION['email'];
$q1=mysqli_query($koneksi,"SELECT * FROM users WHERE email = '$email' ");
$d1=mysqli_fetch_array($q1);
 ?>
<div class="card card-danger card-tabs" style="width:100%">
	<div class="card-header p-0 border-bottom-0">
		<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Penerimaan Basan Baran</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		<div class="tab-content" id="custom-tabs-two-tabContent">
			<div class="tab-pane fade show active" id="custom-tabs-two-data" role="tabpanel" aria-labelledby="custom-tabs-two-data-tab">
				<p>Mohon Upload Berkas Berikut :</p>
        <form action="upload_berkas.php?page=berkasa" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id_user" value="<?php echo $d1['id_user'] ?>">
					<div class="form-group">
									 <label for="ip1">Surat Perintah Penyitaan </label>
									 <div class="input-group">
										 <div class="custom-file">
											 <input type="file"  name="spp">
										 </div>
									 </div>
						</div>
						<div class="form-group">
										<label for="ip2">Surat Izin Penyitaan </label>
										 <div class="input-group">
											 <div class="custom-file">
												 <input type="file"  name="sip">
											 </div>
										 </div>
							</div>
							<div class="form-group">
											<label for="ip3">Surat Pengantar Dari Instansi Penitip </label>
											 <div class="input-group">
												 <div class="custom-file">
													 <input type="file"  name="spdip">
												 </div>
											 </div>
								</div>
								<div class="form-group">
												<label for="ip3">TTD BA Penerimaan Barang Bukti</label>
												 <div class="input-group">
													 <div class="custom-file">
														 <input type="file"  name="ba">
													 </div>
												 </div>
									</div>
								<button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
        </form>
      </div>
    </div>
  </div>
</div>
