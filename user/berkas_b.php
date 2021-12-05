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
<div class="card card-danger card-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Perkara Dihentikan<br>Karena Tidak Cukup Bukti</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Perkara Belum Merupakan<br>Suatu Tindak Pidana </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Perkara Dihentikan<br>Untuk Kepentingan Umum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Tindakan Jual Lelang<br>&nbsp;&nbsp;&nbsp;</a>
                  </li>
									<li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings2-tab" data-toggle="pill" href="#custom-tabs-four-settings2" role="tab" aria-controls="custom-tabs-four-settings2" aria-selected="false">Pengeluaran Basan Atas Pejabat<br>Yang Berwenang Untuk Pinjam Pakai</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
									<!--TAB1------------->
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
										<p>Mohon Upload Berkas Berikut :</p>
										 <form  action="upload_berkas.php?page=berkasb1" method="post" enctype="multipart/form-data">
											 <input type="hidden" name="id_prosedurb" value="1">
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
																<label for="ip2">Surat Pengantar </label>
																 <div class="input-group">
																	 <div class="custom-file">
																		 <input type="file"  name="Spen" required>
																	 </div>
																 </div>
													</div>
													<div class="form-group">
																	<label for="ip3">Surat Perintah </label>
																	 <div class="input-group">
																		 <div class="custom-file">
																			 <input type="file"  name="Sper" required>
																		 </div>
																	 </div>
														</div>
														<div class="form-group">
																		<label for="ip3">Berita Acara Pelaksanaan </label>
																		 <div class="input-group">
																			 <div class="custom-file">
																				 <input type="file"  name="BAPel" required>
																			 </div>
																		 </div>
															</div>
														<button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
										 </form>
									 </div>
									 <!--TAB2------------->
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
										<p>Mohon Upload Berkas Berikut :</p>
										<form  action="upload_berkas.php?page=berkasb2" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_prosedurb" value="2">
											<input type="hidden" name="id_user" value="<?php echo $d1['id_user'] ?>">
										 <div class="form-group">
															<label for="ip1">Surat Permintaan Dari Penyidik Dan Penuntut Umum </label>
															<div class="input-group">
																<div class="custom-file">
																	<input type="file"  name="SPD2" required>
																</div>
															</div>
											 </div>
											 <div class="form-group">
															 <label for="ip2">Surat Penetapan Pengadilan </label>
																<div class="input-group">
																	<div class="custom-file">
																		<input type="file"  name="SPePe" required>
																	</div>
																</div>
												 </div>
												 <div class="form-group">
																 <label for="ip3">Berita Acara Pelaksanaan </label>
																	<div class="input-group">
																		<div class="custom-file">
																			<input type="file"  name="BAPel" required>
																		</div>
																	</div>
													 </div>
													 <button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
										</form>
                  </div>
									<!--TAB3------------->
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
										<p>Mohon Upload Berkas Berikut :</p>
										 <form  action="upload_berkas.php?page=berkasb3" method="post" enctype="multipart/form-data">
											 <input type="hidden" name="id_prosedurb" value="3">
											 <input type="hidden" name="id_user" value="<?php echo $d1['id_user'] ?>">
											<div class="form-group">
															 <label for="ip1">Surat Perintah/Permintaan Dari Kejaksaan Agung </label>
															 <div class="input-group">
																 <div class="custom-file">
																	 <input type="file"  name="SPDKA" required>
																 </div>
															 </div>
												</div>
														<button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
										 </form>
                  </div>
									<!--TAB4------------->
                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
										<p>Mohon Upload Berkas Berikut :</p>
										<form  action="upload_berkas.php?page=berkasb1" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_prosedurb" value="4">
											<input type="hidden" name="id_user" value="<?php echo $d1['id_user'] ?>">
										 <div class="form-group">
															<label for="ip1">Pelaksanaan Lelang Atas Persetujuan Terdakwa Atas Kuasanya </label>
															<div class="input-group">
																<div class="custom-file">
																	<input type="file"  name="PLPT" required>
																</div>
															</div>
											 </div>
											 <div class="form-group">
															 <label for="ip2">Berita Acara Pelaksanaan Lelang </label>
																<div class="input-group">
																	<div class="custom-file">
																		<input type="file"  name="BAPL" required>
																	</div>
																</div>
												 </div>
												 <div class="form-group">
																 <label for="ip3">Surat Permintaan Dari Instansi Berwenang </label>
																	<div class="input-group">
																		<div class="custom-file">
																			<input type="file"  name="SPDIB" required>
																		</div>
																	</div>
													 </div>
													 <button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
										</form>
                  </div>
									<!--TAB5------------->
									<div class="tab-pane fade" id="custom-tabs-four-settings2" role="tabpanel" aria-labelledby="custom-tabs-four-settings2-tab">
										<p>Mohon Upload Berkas Berikut :</p>
										<form  action="upload_berkas.php?page=berkasb5" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_prosedurb" value="5">
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
															 <label for="ip2">Surat Penetapan Pengadilan </label>
																<div class="input-group">
																	<div class="custom-file">
																		<input type="file"  name="SPePe" required>
																	</div>
																</div>
												 </div>
												 <div class="form-group">
																 <label for="ip3">Berita Acara Pelaksanaan </label>
																	<div class="input-group">
																		<div class="custom-file">
																			<input type="file"  name="BAPel" required>
																		</div>
																	</div>
													 </div>
													 <div class="form-group">
																	 <label for="ip4">Surat Perintah Penyitaan </label>
																		<div class="input-group">
																			<div class="custom-file">
																				<input type="file"  name="SPP" required>
																			</div>
																		</div>
														 </div>
														 <div class="form-group">
																		 <label for="ip5">Berita Acara Penyitaan </label>
																			<div class="input-group">
																				<div class="custom-file">
																					<input type="file"  name="BAPen" required>
																				</div>
																			</div>
															 </div>
															 <div class="form-group">
																			 <label for="ip6">Surat Izin Penyitaan </label>
																				<div class="input-group">
																					<div class="custom-file">
																						<input type="file"  name="SIP" required>
																					</div>
																				</div>
																 </div>
													 <button class="btn btn-danger"type="submit" name="submit">Upload Berkas</button>
										</form>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
