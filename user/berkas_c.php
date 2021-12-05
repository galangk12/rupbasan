<?php
require_once '../config/database.php';
$email=$_SESSION['email'];
$q1=mysqli_query($koneksi,"SELECT * FROM users WHERE email = '$email' ");
$d1=mysqli_fetch_array($q1);
 ?>
<div class="alert alert-danger alert-dismissible" style="width:100%;">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-info"></i>Perhatian.</h5>
Silakan Pilih  Prosedur Dibawah Ini :
</div>
<div class="card card-danger card-tabs" style="width:100%;">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Basan Baran Dikembalikan<br> Kepada Pemilik/Berhak</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Basan Baran Dirampas Oleh Negara Untuk Dilelang, Dll<br>
Atau Disimpan Dirupbasan Sebagai Barang Bukti </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Basan Baran Setelah Proses Penghapusan<br>&nbsp;</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
									<!--TAB1------------->
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
										<p>Mohon Upload Berkas Berikut :</p>
										 <form  action="upload_berkas.php?page=berkasc1" method="post" enctype="multipart/form-data">
											 <input type="hidden" name="id_prosedurc" value="1">
											 <input type="hidden" name="id_user" value="<?php echo $d1['id_user'] ?>">
											<div class="form-group">
															 <label for="ip1">Surat Permintaan Dari Instansi Berwenang </label>
															 <div class="input-group">
																 <div class="custom-file">
																	 <input type="file"  name="SPDIB" required>
																 </div>
															 </div>
												</div>
												<div class="form-group">
																<label for="ip2">Surat Penetapan Putusan Pengadilan </label>
																 <div class="input-group">
																	 <div class="custom-file">
																		 <input type="file"  name="SPP" required>
																	 </div>
																 </div>
													</div>
													<div class="form-group">
																	<label for="ip3">Berita Acara Pelaksanaan </label>
																	 <div class="input-group">
																		 <div class="custom-file">
																			 <input type="file"  name="BAP" required>
																		 </div>
																	 </div>
														</div>
														<button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
										 </form>
									 </div>
									 <!--TAB2------------->
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
										<p>Mohon Upload Berkas Berikut :</p>
										<form  action="upload_berkas.php?page=berkasc2" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_prosedurc" value="2">
											<input type="hidden" name="id_user" value="<?php echo $d1['id_user'] ?>">
										 <div class="form-group">
															<label for="ip1">Surat Permintaan Dari Instansi Berwenang</label>
															<div class="input-group">
																<div class="custom-file">
																	<input type="file"  name="SPDIB" required>
																</div>
															</div>
											 </div>
											 <div class="form-group">
															 <label for="ip2">Surat Putusan Pengadilan</label>
																<div class="input-group">
																	<div class="custom-file">
																		<input type="file"  name="SPP" required>
																	</div>
																</div>
												 </div>
												 <div class="form-group">
																 <label for="ip3">Berita Acara Pelaksanaan Putusan </label>
																	<div class="input-group">
																		<div class="custom-file">
																			<input type="file"  name="BAP" required>
																		</div>
																	</div>
													 </div>
													 <button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
										</form>
                  </div>
									<!--TAB3------------->
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
										<p>Mohon Upload Berkas Berikut :</p>
										 <form  action="upload_berkas.php?page=berkasc3" method="post" enctype="multipart/form-data">
											 <input type="hidden" name="id_prosedurc" value="3">
											 <input type="hidden" name="id_user" value="<?php echo $d1['id_user'] ?>">
											<div class="form-group">
															 <label for="ip1">Surat Perintah/Persetujuan Dari Instansi Terkait/Pengadilan </label>
															 <div class="input-group">
																 <div class="custom-file">
																	 <input type="file"  name="SPDIT" required>
																 </div>
															 </div>
												</div>
												<div class="form-group">
																 <label for="ip1">Berita Acara Pelaksanaan </label>
																 <div class="input-group">
																	 <div class="custom-file">
																		 <input type="file"  name="BAP" required>
																	 </div>
																 </div>
													</div>
														<button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
										 </form>
                  </div>
									<!--TAB4------------->

                </div>
              </div>
              <!-- /.card -->
            </div>
