<?php
require_once '../config/database.php';
$email=$_SESSION['email'];
$q1=mysqli_query($koneksi,"SELECT * FROM users WHERE email = '$email' ");
$d1=mysqli_fetch_array($q1);
 ?>
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
                    <table class="table" style="font-size:14px; text-align:center;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Surat Permintaan Dari<br> Instansi Berwenang</th>
                        <th style="vertical-align: middle;">Surat Pengantar</th>
                        <th style="vertical-align: middle;">Surat Perintah</th>
                        <th style="vertical-align: middle;">Berita Acara Pelaksanaan</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $us=$d1['id_user'];
                      $query=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g Where id_user='$us' and id_prosedurb='1'");
                      while ($data=mysqli_fetch_array($query)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><a download="SPDIB - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B1/<?php echo $data['SPDIB'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B1/<?php echo $data['SPDIB'] ?>"/></a>
                        </td>
                        <td><a download="SPen - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B1/<?php echo $data['Spen'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B1/<?php echo $data['Spen'] ?>"/></a>
                        </td>
                        <td><a download="SPer - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B1/<?php echo $data['Sper'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B1/<?php echo $data['Sper'] ?>"/></a>
                        </td>
                        <td><a download="BAPel - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B1/<?php echo $data['BAPel'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B1/<?php echo $data['BAPel'] ?>"/></a>
                        </td>
                        <td><a href="upload_berkas.php?page=hapus_berkasb1&id=<?php echo $data['id_prob_g'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
									 </div>
									 <!--TAB2------------->
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <table class="table" style="font-size:14px; text-align:center;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Surat Permintaan Dari<br> Penyidik Dan Penuntut Umum</th>
                        <th style="vertical-align: middle;">Surat Penetapan Pengadilan</th>
                        <th style="vertical-align: middle;">Berita Acara Pelaksanaan</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $us=$d1['id_user'];
                      $query1=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g Where id_user='$us' and id_prosedurb='2'");
                      while ($data1=mysqli_fetch_array($query1)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><a download="SPD2 - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B2/<?php echo $data1['SPD2'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B2/<?php echo $data1['SPD2'] ?>"/></a>
                        </td>
                        <td><a download="SPePe - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B2/<?php echo $data1['SPePe'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B2/<?php echo $data1['SPePe'] ?>"/></a>
                        </td>
                        <td><a download="BAPel - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B2/<?php echo $data1['BAPel'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B2/<?php echo $data1['BAPel'] ?>"/></a>
                        </td>
                        <td><a href="upload_berkas.php?page=hapus_berkasb2&id=<?php echo $data1['id_prob_g'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
									<!--TAB3------------->
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    <table class="table" style="font-size:14px; text-align:center;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Surat Perintah/Permintaan Dari Kejaksaan Agung</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $us=$d1['id_user'];
                      $query1=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g Where id_user='$us' and id_prosedurb='3'");
                      while ($data1=mysqli_fetch_array($query1)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><a download="SPDKA - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B3/<?php echo $data1['SPDKA'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B3/<?php echo $data1['SPDKA'] ?>"/></a>
                        </td>
                        <td><a href="upload_berkas.php?page=hapus_berkasb3&id=<?php echo $data1['id_prob_g'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
									<!--TAB4------------->
                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                    <table class="table" style="font-size:14px; text-align:center;">
                      <tr>
                        <th style="vertical-align: middle;">No</th>
                        <th style="vertical-align: middle;">Pelaksanaan Lelang Atas <br>Persetujuan Terdakwa Atas Kuasanya</th>
                        <th style="vertical-align: middle;">Surat Permintaan Dari<br> Instansi Berwenang</th>
                        <th style="vertical-align: middle;">Berita Acara<br> Pelaksanaan Lelang</th>
                        <th style="vertical-align: middle;">Aksi</th>
                      </tr>
                      <?php
                      $no=1;
                      $us=$d1['id_user'];
                      $query1=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g Where id_user='$us' and id_prosedurb='4'");
                      while ($data1=mysqli_fetch_array($query1)) {
                       ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><a download="PLPT - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B4/<?php echo $data1['PLPT'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B4/<?php echo $data1['PLPT'] ?>"/></a>
                        </td>
                        <td><a download="BAPL - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B4/<?php echo $data1['BAPL'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B4/<?php echo $data1['BAPL'] ?>"/></a>
                        </td>
                        <td><a download="SPDIB - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B4/<?php echo $data1['SPDIB'] ?>">
                          <img style="width:100px;height:100px;" src="../image/berkasB/B4/<?php echo $data1['SPDIB'] ?>"/></a>
                        </td>
                        <td><a href="upload_berkas.php?page=hapus_berkasb4&id=<?php echo $data1['id_prob_g'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
									<!--TAB5------------->
									<div class="tab-pane fade" id="custom-tabs-four-settings2" role="tabpanel" aria-labelledby="custom-tabs-four-settings2-tab">
                      <table class="table" style="font-size:14px; text-align:center;">
                        <tr>
                          <th style="vertical-align: middle;">No</th>
                          <th style="vertical-align: middle;">Surat Permintaan<br> Dari Instansi Berwenang</th>
                          <th style="vertical-align: middle;">Surat Penetapan<br> Pengadilan</th>
                          <th style="vertical-align: middle;">Berita Acara<br> Pelaksanaan</th>
                          <th style="vertical-align: middle;">Surat Perintah<br> Penyitaan</th>
                          <th style="vertical-align: middle;">Berita Acara<br> Penyitaan</th>
                          <th style="vertical-align: middle;">Surat Izin Penyitaan</th>
                          <th style="vertical-align: middle;">Aksi</th>
                        </tr>
                        <?php
                        $no=1;
                        $us=$d1['id_user'];
                        $query1=mysqli_query($koneksi,"SELECT * FROM prosedur_b_g Where id_user='$us' and id_prosedurb='4'");
                        while ($data1=mysqli_fetch_array($query1)) {
                         ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><a download="SPDIB - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B5/<?php echo $data1['SPDIB'] ?>">
                            <img style="width:100px;height:100px;" src="../image/berkasB/B5/<?php echo $data1['SPDIB'] ?>"/></a>
                          </td>
                          <td><a download="SPePe - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B5/<?php echo $data1['SPePe'] ?>">
                            <img style="width:100px;height:100px;" src="../image/berkasB/B5/<?php echo $data1['SPePe'] ?>"/></a>
                          </td>
                          <td><a download="BAPel - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B5/<?php echo $data1['BAPel'] ?>">
                            <img style="width:100px;height:100px;" src="../image/berkasB/B5/<?php echo $data1['BAPel'] ?>"/></a>
                          </td>
                          <td><a download="SPP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B5/<?php echo $data1['SPP'] ?>">
                            <img style="width:100px;height:100px;" src="../image/berkasB/B5/<?php echo $data1['SPP'] ?>"/></a>
                          </td>
                          <td><a download="BAPen - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B5/<?php echo $data1['BAPen'] ?>">
                            <img style="width:100px;height:100px;" src="../image/berkasB/B5/<?php echo $data1['BAPen'] ?>"/></a>
                          </td>
                          <td><a download="SIP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasB/B5/<?php echo $data1['SIP'] ?>">
                            <img style="width:100px;height:100px;" src="../image/berkasB/B5/<?php echo $data1['SIP'] ?>"/></a>
                          </td>
                          <td><a href="upload_berkas.php?page=hapus_berkasb5&id=<?php echo $data1['id_prob_g'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                      <?php } ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
