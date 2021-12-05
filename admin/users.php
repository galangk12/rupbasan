<?php

 ?>
 <div class="card card-danger card-tabs" style="width:100%">
 	<div class="card-header p-0 pt-1">
 		<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
 			<li class="pt-2 px-3">
 				<h3 class="card-title"></h3>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link active" id="custom-tabs-two-data-tab" data-toggle="pill" href="#custom-tabs-two-data" role="tab" aria-controls="custom-tabs-two-data" aria-selected="true">Informasi User</a>
 			</li>
 		</ul>
 	</div>
 	<div class="card-body">
 		<div class="tab-content" id="custom-tabs-two-tabContent">
 			<div class="tab-pane fade show active" id="custom-tabs-two-data" role="tabpanel" aria-labelledby="custom-tabs-two-data-tab">
<table class="table">
  <tr>
    <th>No</th>
    <th>Nama Lengkap</th>
    <th>Jabatan</th>
    <th>Instansi</th>
    <th>Email</th>
    <th>No HP</th>
    <th>Password</th>
    <th colspan="2" class="text-center">Aksi</th>
  </tr>
  <?php
    $no=1;
    $q=mysqli_query($koneksi,"SELECT * FROM users WHERE level='user'");
    while ($d=mysqli_fetch_array($q)) {
   ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $d['nama_lengkap'] ?></td>
    <td><?php echo $d['jabatan'] ?></td>
    <td><?php echo $d['instansi'] ?></td>
    <td><?php echo $d['email'] ?></td>
    <td><?php echo $d['nohp'] ?></td>
    <td><?php echo $d['password'] ?></td>
    <td class="text-center">
      <a class="btn btn-primary" href="index.php?page=edit_user&id=<?php echo $d['id_user'] ?>">
        <i class="fa fa-edit"></i></a>
      <a class="btn btn-danger" href="config/data.php?page=hapus_user&id=<?php echo $d['id_user'] ?>">
        <i class="fa fa-trash"></i></a>
    </td>
  </tr>
<?php } ?>
</table>
</div>
</div>
</div>
</div>
