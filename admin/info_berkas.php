<?php
require_once '../config/database.php';
$page=isset($_GET['page']) ? ($_GET['page']) : "";


//HAPUS BERKAS//
if($page=='hapus_berkasa'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_a where id_prosedura='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasA/$dt[spp]";
  $t2="../image/berkasA/$dt[sip]";
  $t3="../image/berkasA/$dt[spdip]";
  $t4="../image/berkasA/$dt[ba]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_a where id_prosedura='$id'");

  if($query) {
    unlink($t1);
    unlink($t2);
    unlink($t3);
    unlink($t4);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
elseif($page=='hapus_berkasb1'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_b_g where id_prob_g='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasB/B1/$dt[SPDIB]";
  $t2="../image/berkasB/B1/$dt[Spen]";
  $t3="../image/berkasB/B1/$dt[Sper]";
  $t4="../image/berkasB/B1/$dt[BAPel]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_b_g where id_prob_g='$id'");

  if($query) {
    unlink($t1);
    unlink($t2);
    unlink($t3);
    unlink($t4);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
elseif($page=='hapus_berkasb2'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_b_g where id_prob_g='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasB/B2/$dt[SPD2]";
  $t2="../image/berkasB/B2/$dt[SPePe]";
  $t3="../image/berkasB/B2/$dt[BAPel]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_b_g where id_prob_g='$id'");

  if($query) {
    unlink($t1);
    unlink($t2);
    unlink($t3);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
elseif($page=='hapus_berkasb3'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_b_g where id_prob_g='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasB/B3/$dt[SPDKA]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_b_g where id_prob_g='$id'");

  if($query) {
    unlink($t1);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
elseif($page=='hapus_berkasb4'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_b_g where id_prob_g='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasB/B4/$dt[PLPT]";
  $t2="../image/berkasB/B4/$dt[SPDIB]";
  $t3="../image/berkasB/B4/$dt[BAPL]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_b_g where id_prob_g='$id'");

  if($query) {
    unlink($t1);
    unlink($t2);
    unlink($t3);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
elseif($page=='hapus_berkasb5'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_b_g where id_prob_g='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasB/B5/$dt[SPDIB]";
  $t2="../image/berkasB/B5/$dt[SPePe]";
  $t3="../image/berkasB/B5/$dt[BAPel]";
  $t4="../image/berkasB/B5/$dt[SPP]";
  $t5="../image/berkasB/B5/$dt[BAPen]";
  $t6="../image/berkasB/B5/$dt[SIP]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_b_g where id_prob_g='$id'");

  if($query) {
    unlink($t1);
    unlink($t2);
    unlink($t3);
    unlink($t4);
    unlink($t5);
    unlink($t6);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
elseif($page=='hapus_berkasc1'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_c_g where id_proc_g='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasC/C1/$dt[SPDIB]";
  $t2="../image/berkasC/C1/$dt[SPP]";
  $t3="../image/berkasC/C1/$dt[BAP]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_c_g where id_proc_g='$id'");

  if($query) {
    unlink($t1);
    unlink($t2);
    unlink($t3);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
elseif($page=='hapus_berkasc2'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_c_g where id_proc_g='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasC/C2/$dt[SPDIB]";
  $t2="../image/berkasC/C2/$dt[SPP]";
  $t3="../image/berkasC/C2/$dt[BAP]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_c_g where id_proc_g='$id'");

  if($query) {
    unlink($t1);
    unlink($t2);
    unlink($t3);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
elseif($page=='hapus_berkasc3'){
  $id=$_GET['id'];
  $tt= mysqli_query($koneksi,"SELECT * FROM prosedur_c_g where id_proc_g='$id'");
  $dt = mysqli_fetch_array($tt);
  $t1="../image/berkasC/C2/$dt[SPDIT]";
  $t2="../image/berkasC/C2/$dt[BAPL]";
  $query = mysqli_query($koneksi,"DELETE FROM prosedur_c_g where id_proc_g='$id'");

  if($query) {
    unlink($t1);
    unlink($t2);
    header("location:index.php?page=b_hapus");
  }
  else {
    header("location:index.php?page=g_hapus");
  }

}
  ?>
