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
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_c_g a JOIN users b ON a.id_user = b.id_user WHERE id_prosedurc='1'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['instansi'] ?></td>
                        <td>
                          <a download="SPDIB_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasC/C1/<?php echo $data['SPDIB'] ?>">Surat Permintaan Dari Instansi Berwenang</a><br>
                          <a download="SPP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasC/C1/<?php echo $data['SPP'] ?>">Surat Penetapan Putusan Pengadilan</a><br>
                          <a download="BAP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasC/C1/<?php echo $data['BAP'] ?>">Berita Acara Pelaksanaan</a>
                        </td>
                        <td><a href="../admin/info_berkas.php?page=hapus_berkasc1&id=<?php echo $data['id_prosedurc']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_c_g a JOIN users b ON a.id_user = b.id_user WHERE id_prosedurc='2'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['instansi'] ?></td>
                        <td>
                          <a download="SPDIB_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasC/C2/<?php echo $data['SPDIB'] ?>">Surat Permintaan Dari Instansi Berwenang</a><br>
                          <a download="SPP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasC/C2/<?php echo $data['SPP'] ?>">Surat Putusan Pengadilan</a><br>
                          <a download="BAP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasC/C2/<?php echo $data['BAP'] ?>">Berita Acara Pelaksanaan Putusan</a>
                        </td>
                        <td><a href="../admin/info_berkas.php?page=hapus_berkasc2&id=<?php echo $data['id_prosedurc']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_c_g a JOIN users b ON a.id_user = b.id_user WHERE id_prosedurc='3'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['instansi'] ?></td>
                        <td>
                          <a download="SPDIT_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasC/C3/<?php echo $data['SPDIT'] ?>">Surat Perintah/Persetujuan Dari Instansi Terkait/Pengadilan</a><br>
                          <a download="BAP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasC/C3/<?php echo $data['BAP'] ?>">Berita Acara Pelaksanaan</a>
                        </td>
                        <td><a href="../admin/info_berkas.php?page=hapus_berkasc3&id=<?php echo $data['id_prosedurc']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>

                </div>
              </div>
              <!-- /.card -->
            </div>
