<?php
require_once '../config/database.php';
$email=$_SESSION['email'];
$q1=mysqli_query($koneksi,"SELECT * FROM users WHERE email = '$email' ");
$d1=mysqli_fetch_array($q1);
 ?>
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
                    <table class="table" style="font-size:14px; text-align:center;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Surat Permintaan Dari<br> Instansi Berwenang</th>
                        <th style="vertical-align: middle;">Surat Penetapan<br>Putusan Pengadilan</th>
                        <th style="vertical-align: middle;">Berita Acara Pelaksanaan</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $us=$d1['id_user'];
                      $query1=mysqli_query($koneksi,"SELECT * FROM prosedur_c_g Where id_user='$us' and id_prosedurc='1'");
                      while ($data1=mysqli_fetch_array($query1)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><a download="SPDIB - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasC/C1/<?php echo $data1['SPDIB'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasC/C1/<?php echo $data1['SPDIB'] ?>"/></a>
                        </td>
                        <td><a download="SPP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasC/C1/<?php echo $data1['SPP'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasC/C1/<?php echo $data1['SPP'] ?>"/></a>
                        </td>
                        <td><a download="BAP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasC/C1/<?php echo $data1['BAP'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasC/C1/<?php echo $data1['SPDIB'] ?>"/></a>
                        </td>
                        <td><a href="upload_berkas.php?page=hapus_berkasc1&id=<?php echo $data1['id_proc_g'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
									 </div>
									 <!--TAB2------------->
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <table class="table" style="font-size:14px; text-align:center;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Surat Permintaan Dari<br> Instansi Berwenang</th>
                        <th style="vertical-align: middle;">Surat Penetapan Putusan Pengadilan</th>
                        <th style="vertical-align: middle;">Berita Acara Pelaksanaan Putusan</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $us=$d1['id_user'];
                      $query1=mysqli_query($koneksi,"SELECT * FROM prosedur_c_g Where id_user='$us' and id_prosedurc='2'");
                      while ($data1=mysqli_fetch_array($query1)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><a download="SPDIB - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasC/C2/<?php echo $data1['SPDIB'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasC/C2/<?php echo $data1['SPDIB'] ?>"/></a>
                        </td>
                        <td><a download="SPP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasC/C2/<?php echo $data1['SPP'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasC/C2/<?php echo $data1['SPP'] ?>"/></a>
                        </td>
                        <td><a download="BAP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasC/C1/<?php echo $data1['BAP'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasC/C2/<?php echo $data1['BAP'] ?>"/></a>
                        </td>
                        <td><a href="upload_berkas.php?page=hapus_berkasc2&id=<?php echo $data1['id_proc_g'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
									<!--TAB3------------->
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    <table class="table" style="font-size:14px; text-align:center;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Surat Perintah/Persetujuan<br> Dari Instansi Terkait/Pengadilan</th>
                        <th style="vertical-align: middle;">Berita Acara Pelaksanaan</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $us=$d1['id_user'];
                      $query1=mysqli_query($koneksi,"SELECT * FROM prosedur_c_g Where id_user='$us' and id_prosedurc='3'");
                      while ($data1=mysqli_fetch_array($query1)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><a download="SPDIT - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasC/C3/<?php echo $data1['SPDIT'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasC/C3/<?php echo $data1['SPDIT'] ?>"/></a>
                        </td>
                        <td><a download="BAP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasC/C3/<?php echo $data1['BAP'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasC/C3/<?php echo $data1['BAP'] ?>"/></a>
                        </td>
                        <td><a href="upload_berkas.php?page=hapus_berkasc3&id=<?php echo $data1['id_proc_g'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>

                </div>
              </div>
              <!-- /.card -->
            </div>
