<?php
require_once("../config/database.php");
$us=$_SESSION['email'];
$q1=mysqli_query($koneksi,
"SELECT COUNT(*) FROM prosedur_a a JOIN users b ON a.id_user=b.id_user WHERE b.email='$us'");
$r1=mysqli_fetch_array($q1);
$q2=mysqli_query($koneksi,
"SELECT COUNT(*) FROM prosedur_b_g a JOIN users b ON a.id_user=b.id_user WHERE b.email='$us'");
$r2=mysqli_fetch_array($q2);
$q3=mysqli_query($koneksi,
"SELECT COUNT(*) FROM prosedur_c_g a JOIN users b ON a.id_user=b.id_user WHERE b.email='$us'");
$r3=mysqli_fetch_array($q3);
$rt =$r1[0] + $r2[0] + $r3[0];
 ?>
 <style media="screen">

:root {
--white: #ffffff;
--black: #000000;
--red:#dc3545;
--gray:#ebebeb;
--box-shadow1:0px 0px 18px 2px rgba(10, 55, 90, 0.15);
}
:focus{
  outline: 0px solid transparent !important;
}
.timeline {
  padding: 50px 0;
  position: relative;
}
.timeline-nodes {
      padding-bottom: 25px;
      position: relative;
  }
.timeline-nodes:nth-child(even) {
  flex-direction: row-reverse;
}
.timeline h4, .timeline p {
  padding: 5px 15px;
}
.timeline h4{
  font-weight: lighter;
  background: var(--red);
}
.timeline p, .timeline time {
  color: var(--red)
}
.timeline::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 50%;
  width: 0;
  border-left: 2px dashed var(--red);
  height: 100%;
  z-index: 1;
  transform: translateX(-50%);
}
.timeline-content {
  border: 1px solid var(--red);
  position: relative;
  border-radius: 0 0 10px 10px;
  box-shadow: 0px 3px 25px 0px rgba(10, 55, 90, 0.2)
}
.timeline-nodes:nth-child(odd) h3,
.timeline-nodes:nth-child(odd) p {
  text-align: right;
}
.timeline-nodes:nth-child(odd) .timeline-date {
  text-align: left;
}

.timeline-nodes:nth-child(even) .timeline-date {
  text-align: right;
}
.timeline-nodes:nth-child(odd) .timeline-content::after {
  content: "";
  position: absolute;
  top: 5%;
  left: 100%;
  width: 0;
  border-left: 10px solid var(--red);
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-content::after {
  content: "";
  position: absolute;
  top: 5%;
  right: 100%;
  width: 0;
  border-right: 10px solid var(--red);
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}
.timeline-image {
  position: relative;
  z-index: 100;
}
.timeline-image::before {
  content: "";
  width: 80px;
  height: 80px;
  border: 2px dashed var(--red);
  border-radius: 50%;
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background-color: #fff;
  z-index: 1;


}
.timeline-image img {
  position: relative;
  z-index: 100;
}
/*small device style*/

@media (max-width: 767px) {
  .timeline-nodes:nth-child(odd) h3,
  .timeline-nodes:nth-child(odd) p {
  text-align: left
}
.timeline-nodes:nth-child(even) {
  flex-direction: row;
}
  .timeline::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 4%;
  width: 0;
  border-left: 2px dashed var(--red);
  height: 100%;
  z-index: 1;
  transform: translateX(-50%);
}
.timeline h4 {
  font-size: 1.7rem;
}
.timeline p {
  font-size: 14px;
}
.timeline-image {
  position: absolute;
  left: 0%;
  top: 60px;
  /*transform: translateX(-50%;);*/
}
.timeline-nodes:nth-child(odd) .timeline-content::after {
  content: "";
  position: absolute;
  top: 5%;
  left: auto;
  right: 100%;
  width: 0;
  border-left: 0;
  border-right: 10px solid var(--red);
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-content::after {
  content: "";
  position: absolute;
  top: 5%;
  right: 100%;
  width: 0;
  border-right: 10px solid var(--red);
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
}
.timeline-nodes:nth-child(even) .timeline-date {
  text-align: left;
}
.timeline-image::before {
  width: 65px;
  height: 65px;
}
}

/*extra small device style */
@media (max-width: 575px) {
  .timeline::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 3%;
}
.timeline-image {
  position: absolute;
  left: -5%;
  }
.timeline-image::before {
  width: 60px;
  height: 60px;
}
}
 </style>
 <div class="alert alert-danger alert-dismissible">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 <h5><i class="icon fas fa-info"></i>Perhatian.</h5>
 Selamat Datang Di Sistem Administrasi Pengelolaan Basan Baran Rumah Penyimpanan Sitaan Negara Kelas I Surakarta,
 Silakan Ikuti Panduan Dibawah Ini Untuk Mengupload Berkas-Berkas Yang Diajukan.
 </div>
<section class="content" style="width:100%;">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3><?php echo $rt; ?></h3>

					<p>Total Berkas<br>&nbsp;</p>
				</div>
				<div class="icon">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				<a href="#" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-danger">
				<div class="inner">
					<h3><?php echo $r1[0]; ?></h3>

					<p>Penerimaan Basan Baran<br>&nbsp;</p>
				</div>
				<div class="icon">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=infoberkas_a" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-primary">
				<div class="inner">
					<h3><?php echo $r2[0]; ?></h3>

					<p>Pengeluaran Basan Baran <br>Sebelum Putusan Pengadilan</p>
				</div>
				<div class="icon">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=infoberkas_b" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3><?php echo $r3[0]; ?></h3>

					<p>Pengeluaran Basan Baran <br>Sesudah Putusan Pengadilan</p>
				</div>
				<div class="icon">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				<a href="index.php?page=infoberkas_c" class="small-box-footer">Informasi <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
</div>
<div class="row">
  <div class="timeline">
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h4 class=" text-light ">Prosedur Penerimaan Basan Baran<br>&nbsp;</h4>
            <p style="text-align:left;color:black;">
              <b>1. Diperlukan Adanya :</b> <br>
                - Surat Perintah Penyitaan<br>
                - Surat Izin Penyitaan<br>
                - Surat Pengantar Dari Instansi Penitip<br>
                - Menandatangani B.A Penerimaan Barang Bukti<br>
                <b>2. Klik Menu Upload Berkas.<br>
                3. Pilih Menu Penerimaan Basan Baran.<br>
                4. Upload Berkas Tersebut Di Form Yang Disediakan.<br>
                5. Klik Upload Berkas.</b><br>
            </p>
          </div>
          <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="../dist/a.png" class="img-fluid" alt="img">
          </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
          </div>
        </div>
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h4 class=" text-light">Prosedur Pengeluaran Basan Baran<br>Sebelum Adanya Putusan Pengadilan</h4>
            <p style="color:black;">
              <b>1. Perhatikan  Prosedur Yang Ingin Diajukan :</b><br>
&bull; Dalam Hal Perkara Dihentikan Karena Tidak Cukup Bukti Diperlukan Adanya :<br>
- Surat Permintaan Dari Instansi Berwenang<br>
- Surat Pengantar<br>
- Surat Perintah<br>
- Berita Acara Pelaksanaan<br>
&bull; Dalam Hal Perkara Belum Merupakan Suatu Tindak Pidana Diperlukan Adanya :<br>
- Surat Permintaan Dari Penyidik Dan Penuntut Umum<br>
- Surat Penetapan Pengadilan<br>
- Berita Acara Pelaksanaan<br>
&bull; Dalam Hal Perkara Dihentikan Untuk Kepentingan Umum diperlukan Adanya :<br>
- Surat Perintah/Permintaan Dari Kejaksaan Agung<br>
&bull; Dalam Hal Tindakan Jual Lelang Wajib Diperhatikan/Diperlukan Adanya :<br>
- Pelaksanaan Lelang Atas Persetujuan Terdakwa Atas Kuasanya<br>
- Surat Permintaan Dari Instansi Berwenang<br>
&bull; Dalam Hal Pengeluaran Basan Atas Permintaan Pejabat Yang Berwenang Secara Yudiris Untuk Pinjam Pakai Diperlukan Adanya :<br>
- Surat Permintaan Dari Instansi Yang Berwenang<br>
- Surat Penetapan Pengadilan<br>
- Berita Acara Pelaksanaan<br>
- Surat Perintah Penyitaan<br>
- Berita Acara Penyitaan<br>
- Surat Izin Penyitaan<br>
<b>2. Klik Menu Upload Berkas.<br>
3. Pilih Menu Pengeluaran Basan Baran Sebelum Putusan Pengadilan.<br>
4. Pilih Prosedur Yang Ingin Diajukan.<br>
5. Upload Berkas Tersebut Di Form Yang Disediakan.<br>
6. Klik Upload Berkas.</b><br>
            </p>
          </div>
          <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="../dist/b.png" class="img-fluid" alt="img">
          </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
          </div>
        </div>
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h4 class=" text-light">Prosedur Pengeluaran Basan Baran<br>Sesudah Adanya Putusan Pengadilan</h4>
            <p style="text-align: left; color:black;">
              <b>1. Perhatikan  Prosedur Yang Ingin Diajukan :</b><br>
&bull; Basan Baran Dikembalikan Kepada Pemilik/Berhak :<br>
- Surat Permintaan Dari Instansi Yang Berwenang<br>
- Surat Penetapan/Putusan Pengadilan<br>
- Berita Acara Pelaksanaan<br>
&bull; Basan Baran Dirampas Oleh Negara Untuk Dilelang, Dimusnahkan,
Dirusakkan, Diserahkan Kepada Instansi Yang Telah Ditetapkan Dan Atau
Disimpan Di Rupbasan Sebagai Barang Bukti Dalam Perkara Lain :<br>
- Surat Putusan Pengadilan<br>
- Berita Acara Pelaksanaan Putusan<br>
- Surat Permintaan Dari Instansi Berwenang<br>
&bull; Basan Baran Setelah Proses Penghapusan Karena Kerusakan, Penyusutan,
Kebanjiran, Bencana Alam, Barang Temuan Dan Barang Bukti Tidak Diambil :
*Pelaksanaan Pengeluaran Atas Dasar Penghapusan :<br>
- Surat Perintah/Persetujuan Dari Instansi Terkait/Pengadilan<br>
- Berita Acara Pelaksanaan<br>
              <b>2. Klik Menu Upload Berkas.<br>
              3. Pilih Menu Pengeluaran Basan Baran Sesudah Putusan Pengadilan.<br>
              4. Pilih Prosedur Yang Ingin Diajukan.<br>
              5. Upload Berkas Tersebut Di Form Yang Disediakan.<br>
              6. Klik Upload Berkas.</b><br>
            </p>
          </div>
          <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
            <img src="../dist/c.png" class="img-fluid" alt="img">
          </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
          </div>
        </div>
      </div>
</div>
</div>


</section>
