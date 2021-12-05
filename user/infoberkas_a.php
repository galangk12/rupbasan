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
        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Penerimaan Basan Baran</a>
      </li>
    </ul>
  </div>
        <table class="table" style="font-size:14px; text-align:center;">
          <tr>
            <th style="vertical-align: middle;">No</th>
            <th style="vertical-align: middle;">Surat Perintah Penyitaan</th>
            <th style="vertical-align: middle;">Surat Izin Penyitaan</th>
            <th style="vertical-align: middle;">Surat Pengantar Dari Instansi Penitip</th>
            <th style="vertical-align: middle;">TTD BA Penerimaan Barang Bukti</th>
            <th style="vertical-align: middle;">Aksi</th>
          </tr>
          <?php
          $no=1;
          $us=$d1['id_user'];
          $query=mysqli_query($koneksi,"SELECT * FROM prosedur_a Where id_user='$us'");
          while ($data=mysqli_fetch_array($query)) {
           ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><a download="SPP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasA/<?php echo $data['spp'] ?>">
              <img style="width:100px;height:100px;" src="../image/berkasA/<?php echo $data['spp'] ?>"/></a>
            </td>
            <td><a download="SIP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasA/<?php echo $data['sip'] ?>">
              <img style="width:100px;height:100px;" src="../image/berkasA/<?php echo $data['sip'] ?>"/></a>
            </td>
            <td><a download="SPDIP - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasA/<?php echo $data['spdip'] ?>">
              <img style="width:100px;height:100px;" src="../image/berkasA/<?php echo $data['spdip'] ?>"/></a>
            </td>
            <td><a download="BA - <?php echo $d1['instansi'] ?>.jpg" href="../image/berkasA/<?php echo $data['ba'] ?>">
              <img style="width:100px;height:100px;" src="../image/berkasA/<?php echo $data['ba'] ?>"/></a>
            </td>
            <td><a href="upload_berkas.php?page=hapus_berkasa&id=<?php echo $data['id_prosedura']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
        <?php } ?>
        </table>
      </div>
