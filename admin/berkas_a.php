<div class="card card-danger card-tabs" style="width:100%;">
  <div class="card-header p-0 border-bottom-0">
    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Penerimaan Basan Baran</a>
      </li>
    </ul>
  </div>
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
          $query=mysqli_query($koneksi,"SELECT * FROM prosedur_a a JOIN users b ON a.id_user = b.id_user");
          while ($data=mysqli_fetch_array($query)) {
           ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama_lengkap'] ?></td>
            <td><?php echo $data['instansi'] ?></td>
            <td>
              <a download="SPP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasA/<?php echo $data['spp'] ?>">Surat Perintah Penyitaan</a><br>
              <a download="SIP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasA/<?php echo $data['sip'] ?>">Surat Izin Penyitaan</a><br>
              <a download="SPDIP_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasA/<?php echo $data['spdip'] ?>">Surat Pengantar Dari Instansi Penitip</a><br>
              <a download="TTDBA_<?php echo $data['instansi'] ?>_<?php echo date('d-m-y') ?>.jpg" href="../image/berkasA/<?php echo $data['ba'] ?>">TTD BA Penerimaan Barang Bukti	</a><br>
            </td>
            <td><a href="../admin/info_berkas.php?page=hapus_berkasa&id=<?php echo $data['id_prosedura']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
        <?php } ?>
        </table>
      </div>
