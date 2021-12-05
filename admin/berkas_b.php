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
                    <table class="table" style="font-size:14px;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Nama Lengkap</th>
                        <th style="vertical-align: middle;">Instansi</th>
                        <th style="vertical-align: middle;">Berkas</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g a JOIN users b ON a.id_user = b.id_user WHERE id_prosedurb='1'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['instansi'] ?></td>
                        <td>
                          <a download="SPDIB_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B1/<?php echo $data['SPDIB'] ?>">Surat Permintaan Dari Instansi Berwenang</a><br>
                          <a download="Spen_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B1/<?php echo $data['Spen'] ?>">Surat Pengantar</a><br>
                          <a download="BAPel_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B1/<?php echo $data['BAPel'] ?>">Berita Acara Pelaksanaan</a><br>
                          <a download="Sper_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B1/<?php echo $data['Sper'] ?>">Surat Perintah</a>
                        </td>
                        <td><a href="../admin/info_berkas.php?page=hapus_berkasb1&id=<?php echo $data['id_prosedurb']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
									 </div>
									 <!--TAB2------------->
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <table class="table" style="font-size:14px;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Nama Lengkap</th>
                        <th style="vertical-align: middle;">Instansi</th>
                        <th style="vertical-align: middle;">Berkas</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g a JOIN users b ON a.id_user = b.id_user WHERE id_prosedurb='2'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['instansi'] ?></td>
                        <td>
                          <a download="SPD2_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B2/<?php echo $data['SPD2'] ?>">Surat Permintaan Dari Penyidik Dan Penuntut Umum</a><br>
                          <a download="SPePe_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B2/<?php echo $data['SPePe'] ?>">Surat Penetapan Pengadilan</a><br>
                          <a download="BAPel_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B2/<?php echo $data['BAPel'] ?>">Berita Acara Pelaksanaan</a><br>
                        </td>
                        <td><a href="../admin/info_berkas.php?page=hapus_berkasb2&id=<?php echo $data['id_prosedurb']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
									<!--TAB3------------->
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    <table class="table" style="font-size:14px;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Nama Lengkap</th>
                        <th style="vertical-align: middle;">Instansi</th>
                        <th style="vertical-align: middle;">Berkas</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g a JOIN users b ON a.id_user = b.id_user WHERE id_prosedurb='3'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['instansi'] ?></td>
                        <td>
                          <a download="SPDKA_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B3/<?php echo $data['SPDKA'] ?>">Surat Perintah/Permintaan Dari Kejaksaan Agung</a>
                        </td>
                        <td><a href="../admin/info_berkas.php?page=hapus_berkasb3&id=<?php echo $data['id_prosedurb']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
									<!--TAB4------------->
                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                    <table class="table" style="font-size:14px;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Nama Lengkap</th>
                        <th style="vertical-align: middle;">Instansi</th>
                        <th style="vertical-align: middle;">Berkas</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g a JOIN users b ON a.id_user = b.id_user WHERE id_prosedurb='4'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['instansi'] ?></td>
                        <td>
                          <a download="PLPT_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B4/<?php echo $data['PLPT'] ?>">Pelaksanaan Lelang Atas Persetujuan Terdakwa Atas Kuasanya</a><br>
                          <a download="SPDIB_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B4/<?php echo $data['SPDIB'] ?>">Surat Permintaan Dari Instansi Berwenang</a><br>
                          <a download="BAPL_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B4/<?php echo $data['BAPL'] ?>">Berita Acara Pelaksanaan Lelang</a>
                        </td>
                        <td><a href="../admin/info_berkas.php?page=hapus_berkasb4&id=<?php echo $data['id_prosedurb']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
									<!--TAB5------------->
									<div class="tab-pane fade" id="custom-tabs-four-settings2" role="tabpanel" aria-labelledby="custom-tabs-four-settings2-tab">
                    <table class="table" style="font-size:14px;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Nama Lengkap</th>
                        <th style="vertical-align: middle;">Instansi</th>
                        <th style="vertical-align: middle;">Berkas</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g a JOIN users b ON a.id_user = b.id_user WHERE id_prosedurb='4'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['instansi'] ?></td>
                        <td>
                          <a download="SPDIB_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B5/<?php echo $data['SPDIB'] ?>">Surat Permintaan Dari Instansi Berwenang</a><br>
                          <a download="SPePe_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B5/<?php echo $data['SPePe'] ?>">Surat Penetapan Pengadilan</a><br>
                          <a download="BAPel_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B5/<?php echo $data['BAPel'] ?>">Berita Acara Pelaksanaan</a><br>
                          <a download="SPP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B5/<?php echo $data['SPP'] ?>">Surat Perintah Penyitaan</a><br>
                          <a download="BAPen_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B5/<?php echo $data['BAPen'] ?>">Berita Acara Penyitaan</a><br>
                          <a download="SIP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasB/B5/<?php echo $data['SIP'] ?>">Surat Izin Penyitaan	</a>
                        </td>
                        <td><a href="../admin/info_berkas.php?page=hapus_berkasb5&id=<?php echo $data['id_prosedurb']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
