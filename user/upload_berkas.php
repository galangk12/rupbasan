<?php
require_once '../config/database.php';
$page=isset($_GET['page']) ? ($_GET['page']) : "";
//INSERT BERKAS//
if($page=='berkasa') {
$id_user=$_POST['id_user'];
$spp = $_FILES['spp']['name'];
$sip = $_FILES['sip']['name'];
$spdip = $_FILES['spdip']['name'];
$ba = $_FILES['ba']['name'];
$file_tmpspp = $_FILES['spp']['tmp_name'];
$file_tmpsip = $_FILES['sip']['tmp_name'];
$file_tmpspdip = $_FILES['spdip']['tmp_name'];
$file_tmpba = $_FILES['ba']['tmp_name'];
$tempat = "../image/BerkasA/";
$query = "INSERT INTO prosedur_a (id_user,spp,sip,spdip,ba)
VALUES ('$id_user','$spp','$sip','$spdip','$ba')";
if(mysqli_query($koneksi,$query)) {
  move_uploaded_file($file_tmpspp,$tempat.$spp);
  move_uploaded_file($file_tmpsip,$tempat.$sip);
  move_uploaded_file($file_tmpspdip,$tempat.$spdip);
  move_uploaded_file($file_tmpba,$tempat.$ba);
  header("location:index.php?page=berhasil");
}
else {
  header("location:index.php?page=gagal");
}
}
elseif($page=='berkasb1') {
$id_prosedurb=$_POST['id_prosedurb'];
$id_user=$_POST['id_user'];
$SPDIB = $_FILES['SPDIB']['name'];
$Spen = $_FILES['Spen']['name'];
$Sper = $_FILES['Sper']['name'];
$BAPel = $_FILES['BAPel']['name'];
$file_tmpSPDIB = $_FILES['SPDIB']['tmp_name'];
$file_tmpSpen = $_FILES['Spen']['tmp_name'];
$file_tmpSper = $_FILES['Sper']['tmp_name'];
$file_tmpBAPel = $_FILES['BAPel']['tmp_name'];
$tempat = "../image/BerkasB/B1/";

$query = "INSERT INTO prosedur_b_g (id_prosedurb,id_user,BAPel,Spen,Sper,SPDIB)
VALUES ('$id_prosedurb','$id_user','$BAPel','$Spen','$Sper','$SPDIB')";
if(mysqli_query($koneksi,$query)) {
  move_uploaded_file($file_tmpSPDIB,$tempat.$SPDIB);
  move_uploaded_file($file_tmpSpen,$tempat.$Spen);
  move_uploaded_file($file_tmpSper,$tempat.$Sper);
  move_uploaded_file($file_tmpBAPel,$tempat.$BAPel);
  header("location:index.php?page=berhasil");
}
else {
  header("location:index.php?page=gagal");
}
}
elseif($page=='berkasb2') {
$id_prosedurb=$_POST['id_prosedurb'];
$id_user=$_POST['id_user'];
$SPD2 = $_FILES['SPD2']['name'];
$SPePe = $_FILES['SPePe']['name'];
$BAPel = $_FILES['BAPel']['name'];
$file_tmpSPD2 = $_FILES['SPD2']['tmp_name'];
$file_tmpSPePe = $_FILES['SPePe']['tmp_name'];
$file_tmpBAPel = $_FILES['BAPel']['tmp_name'];
$tempat = "../image/BerkasB/B2/";
$query = mysqli_query($koneksi,"INSERT INTO prosedur_b_g (id_prosedurb,id_user,SPD2,SPePe,BAPel)
VALUES ('$id_prosedurb','$id_user','$SPD2','$SPePe','$BAPel')");
if($query) {
  move_uploaded_file($file_tmpSPD2,$tempat.$SPD2);
  move_uploaded_file($file_tmpSPePe,$tempat.$SPePe);
  move_uploaded_file($file_tmpBAPel,$tempat.$BAPel);
  header("location:index.php?page=berhasil");
}
else {
  header("location:index.php?page=gagal");
}
}
elseif($page=='berkasb3') {
$id_prosedurb=$_POST['id_prosedurb'];
$id_user=$_POST['id_user'];
$SPDKA = $_FILES['SPDKA']['name'];
$file_tmpSPDKA = $_FILES['SPDKA']['tmp_name'];
$tempat = "../image/BerkasB/B3/";
$query = mysqli_query($koneksi,"INSERT INTO prosedur_b_g (id_prosedurb,id_user,SPDKA)
VALUES ('$id_prosedurb','$id_user','$SPDKA')");
if($query) {
  header("location:index.php?page=berhasil");
  move_uploaded_file($file_tmpSPDKA,$tempat.$SPDKA);
}
else {
  header("location:index.php?page=gagal");
}
}
elseif($page=='berkasb4') {
$id_prosedurb=$_POST['id_prosedurb'];
$id_user=$_POST['id_user'];
$PLPT = $_FILES['PLPT']['name'];
$BAPL = $_FILES['BAPL']['name'];
$SPDIB = $_FILES['SPDIB']['name'];
$file_tmpPLPT = $_FILES['PLPT']['tmp_name'];
$file_tmpBAPL = $_FILES['BAPL']['tmp_name'];
$file_tmpSPDIB = $_FILES['SPDIB']['tmp_name'];
$tempat = "../image/BerkasB/B4/";
$query = mysqli_query($koneksi,"INSERT INTO prosedur_b_g (id_prosedurb,id_user,PLPT,BAPL,SPDIB)
VALUES ('$id_prosedurb','$id_user','$PLPT','$BAPL','$SPDIB')");
if($query) {
  move_uploaded_file($file_tmpPLPT,$tempat.$PLPT);
  move_uploaded_file($file_tmpBAPL,$tempat.$BAPL);
  move_uploaded_file($file_tmpSPDIB,$tempat.$SPDIB);
  header("location:index.php?page=berhasil");
}
else {
  header("location:index.php?page=gagal");
}
}
elseif($page=='berkasb5') {
$id_prosedurb=$_POST['id_prosedurb'];
$id_user=$_POST['id_user'];
$SPDIB = $_FILES['SPDIB']['name'];
$SPePe = $_FILES['SPePe']['name'];
$BAPel = $_FILES['BAPel']['name'];
$SPP = $_FILES['SPP']['name'];
$BAPen = $_FILES['BAPen']['name'];
$SIP = $_FILES['SIP']['name'];
$file_tmpSPDIB = $_FILES['SPDIB']['tmp_name'];
$file_tmpSPePe = $_FILES['SPePe']['tmp_name'];
$file_tmpBAPel = $_FILES['BAPel']['tmp_name'];
$file_tmpSPP = $_FILES['SPP']['tmp_name'];
$file_tmpBAPen = $_FILES['BAPen']['tmp_name'];
$file_tmpSIP = $_FILES['SIP']['tmp_name'];
$tempat = "../image/BerkasB/B5/";
$query = mysqli_query($koneksi,"INSERT INTO prosedur_b_g (id_prosedurb,id_user,SPDIB,SPePe,BAPel,SPP,BAPen,SIP)
VALUES ('$id_prosedurb','$id_user','$SPDIB','$SPePe','$BAPel','$SPP',' $BAPen','$SIP')");
if($query) {
  move_uploaded_file($file_tmpSPDIB,$tempat.$SPDIB);
  move_uploaded_file($file_tmpSPePe,$tempat.$SPePe);
  move_uploaded_file($file_tmpBAPel,$tempat.$BAPel);
  move_uploaded_file($file_tmpSPP,$tempat.$SPP);
  move_uploaded_file($file_tmpBAPen,$tempat.$BAPen);
  move_uploaded_file($file_tmpSIP,$tempat.$SIP);
  header("location:index.php?page=berhasil");
}
else {
  header("location:index.php?page=gagal");
}
}
elseif($page=='berkasc1') {
$id_prosedurc=$_POST['id_prosedurc'];
$id_user=$_POST['id_user'];
$SPDIB = $_FILES['SPDIB']['name'];
$SPP = $_FILES['SPP']['name'];
$BAP = $_FILES['BAP']['name'];
$file_tmpSPDIB = $_FILES['SPDIB']['tmp_name'];
$file_tmpSPP = $_FILES['SPP']['tmp_name'];
$file_tmpBAP = $_FILES['BAP']['tmp_name'];
$tempat = "../image/BerkasC/C1/";
$query = mysqli_query($koneksi,"INSERT INTO prosedur_c_g (id_prosedurc,id_user,BAP,SPP,SPDIB)
VALUES ('$id_prosedurc','$id_user','$BAP','$SPP','$SPDIB')");
if($query) {
  move_uploaded_file($file_tmpSPDIB,$tempat.$SPDIB);
  move_uploaded_file($file_tmpSPP,$tempat.$SPP);
  move_uploaded_file($file_tmpBAP,$tempat.$BAP);
  header("location:index.php?page=berhasil");
}
else {
  header("location:index.php?page=gagal");
}
}
elseif($page=='berkasc2') {
$id_prosedurc=$_POST['id_prosedurc'];
$id_user=$_POST['id_user'];
$SPDIB = $_FILES['SPDIB']['name'];
$SPP = $_FILES['SPP']['name'];
$BAP = $_FILES['BAP']['name'];
$file_tmpSPDIB = $_FILES['SPDIB']['tmp_name'];
$file_tmpSPP = $_FILES['SPP']['tmp_name'];
$file_tmpBAP = $_FILES['BAP']['tmp_name'];
$tempat = "../image/BerkasC/C2/";
$query = mysqli_query($koneksi,"INSERT INTO prosedur_c_g (id_prosedurc,id_user,BAP,SPP,SPDIB)
VALUES ('$id_prosedurc','$id_user','$BAP','$SPP','$SPDIB')");
if($query) {
  move_uploaded_file($file_tmpSPDIB,$tempat.$SPDIB);
  move_uploaded_file($file_tmpSPP,$tempat.$SPP);
  move_uploaded_file($file_tmpBAP,$tempat.$BAP);
  header("location:index.php?page=berhasil");
}
else {
  header("location:index.php?page=gagal");
}
}
elseif($page=='berkasc3') {
$id_prosedurc=$_POST['id_prosedurc'];
$id_user=$_POST['id_user'];
$SPDIT = $_FILES['SPDIT']['name'];
$BAP = $_FILES['BAP']['name'];
$file_tmpSPDIT = $_FILES['SPDIT']['tmp_name'];
$file_tmpBAP = $_FILES['BAP']['tmp_name'];
$tempat = "../image/BerkasC/C3/";
$query = mysqli_query($koneksi,"INSERT INTO prosedur_c_g (id_prosedurc,id_user,BAP,SPDIT)
VALUES ('$id_prosedurc','$id_user','$BAP','$SPDIT')");
if($query) {
  move_uploaded_file($file_tmpSPDIT,$tempat.$SPDIT);
  move_uploaded_file($file_tmpBAP,$tempat.$BAP);
  header("location:index.php?page=berhasil");
}
else {
  header("location:index.php?page=gagal");
}
}

//HAPUS BERKAS//
elseif($page=='hapus_berkasa'){
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
