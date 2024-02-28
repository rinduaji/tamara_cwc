<?php
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$area = $_SESSION['area'];
$jabatan = $_SESSION['jabatan'];
$con=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");
$tgl = date("Y-m-d h:i:s");
$date_now = date("Y-m-d");
$hari_ini = date("d");
$bulan_ini = date("m");
$tahun_ini = date("Y");
$blnin=array('','JANUARI','FEBRUARI','MARET','APRIL','MEI','JUNI','JULI','AGUSTUS','SEPTEMBER','OKTOBER','NOVEMBER','DESEMBER');
$query_tampil = "SELECT b.login,a.user2,a.user3,a.user5,b.pola,c.masuk,c.pulang,c.ist1,c.ist2,c.ist3,c.ist4 
FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1=b.login INNER JOIN 
  app_tam_master_pola as c ON c.pola=b.pola WHERE b.login='$login' AND b.tgl_masuk='$date_now'";
$hasil_tampil=mysqli_query($con,$query_tampil);
$row_tampil=mysqli_fetch_row($hasil_tampil);
// print_r($row_tampil);

$sql1="select * from app_tam_roosterfix where login='$login' AND tgl_masuk='$date_now'";
	//echo "$sql";
$hasil1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_row($hasil1);
$id_rooster = $row1[0];

$sql="select * from app_tam_absen where username='$login' AND DAY(date_absen)='$hari_ini' AND MONTH(date_absen)='$bulan_ini' AND YEAR(date_absen)='$tahun_ini' AND keterangan='IN'";
//echo "$sql";
$hasil=mysqli_query($con,$sql);
$row=mysqli_fetch_row($hasil);
$cekButton = $row[3];

$sqlAbsenPulang="select * from app_tam_absen where username='$login' AND DAY(date_absen)='$hari_ini' AND MONTH(date_absen)='$bulan_ini' AND YEAR(date_absen)='$tahun_ini' AND keterangan='OUT'";
//echo "$sqlAbsenPulang";
$hasilAbsenPulang=mysqli_query($con,$sqlAbsenPulang);
$rowPulang=mysqli_fetch_row($hasilAbsenPulang);
$cekButtonPulang = $rowPulang[3];

$sqlcekabsen="select * from app_tam_absen where username='$login' AND keterangan='OUT' AND id_rooster=$id_rooster";
//echo "$sql";
// print_r($sqlcekabsen); 
$cekabsen=mysqli_query($con,$sqlcekabsen);
$totalcekabsen=mysqli_num_rows($cekabsen);
// print_r(($cekButton));
// die();
if($totalcekabsen > 0) {
	echo "<script>alert('Anda sudah absen hari ini Absen.');</script>";
}
else {
if(isset($save) AND isset($status)) {
	//echo "$txtlogin";
	if ($row[0]<>''){
		echo "<script>alert('Gagal Absen Masuk.');window.location='absen.php';</script>";
	}
	else{
   
	$sql3="INSERT INTO app_tam_absen (username, id_rooster, status, date_absen, keterangan) 
									VALUES ('$login', $id_rooster, '$status', '$tgl', 'IN')";
	
	//echo $sql3."<br>";

	if(!mysqli_query($con,$sql3)) {
		echo "<script>alert('Gagal Absen Masuk.');window.location='absen.php';</script>";
	} 
	else {
		echo "<script>alert('Absen Masuk Berhasil.');window.location='absen.php';</script>";
	}
   
	}
}

if(isset($savePulang) AND isset($status)) {
	//echo "$txtlogin";
	if ($rowPulang[0]<>''){
		echo "<script>alert('Gagal Absen Pulang.');window.location='absen.php';</script>";
	}
	else{
   
	$sql3="INSERT INTO app_tam_absen (username, id_rooster, status, date_absen, keterangan) 
									VALUES ('$login', $id_rooster, '$status', '$tgl', 'OUT')";
	
	//echo $sql3."<br>";

	if(!mysqli_query($con,$sql3)) {
		echo "<script>alert('Gagal Absen Pulang.');window.location='absen.php';</script>";
	} 
	else {
		echo "<script>alert('Absen Pulang Berhasil.');window.location='absen.php';</script>";
	}
   
	}
}
// print($query_tampil);
}
?>				


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
	<title>ABSEN CWC TAMARA</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Parallax HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Meghna Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="meghna" />
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="../assets/absen/plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="../assets/absen/plugins/bootstrap/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../assets/absen/plugins/animate-css/animate.css">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="../assets/absen/plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="../assets/absen/plugins/slick-carousel/slick.css">
	<link rel="stylesheet" href="../assets/absen/plugins/slick-carousel/slick-theme.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="../assets/absen/css/style.css">


</head>

<body id="home" data-spy="scroll" data-target=".navbar-nav" data-offset="80">
	<!--
	Start Preloader
	==================================== -->
	<div class="preloader">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>
	<!-- End Preloader
	==================================== -->

 <!--
Welcome Slider
==================================== -->

 <section class="hero-area overlay" style="background-image: url('../assets/absen/images/banner/time.jpg');">
 	<!-- <video autoplay muted loop class="hero-video">
		<source src="images/banner/hero-video.mp4" type="video/mp4">
	</video> -->
 	<div class="block">
 		<h1>ABSENSI CWC TAMARA</h1>
 		<p>Silahkan Absen Terlebih dahulu!</p>
		<br>
		 <div class="row">
			<div class="col">
				<label for="username"><p>USERNAME</p></label>
				<input type="text" class="form-control" name="username" placeholder="username" aria-label="username">
			</div>
			<div class="col">
				<label for="nama"><p>NAMA</p></label>
				<input type="text" class="form-control" name="nama" placeholder="nama" aria-label="nama">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="area"><p>AREA</p></label>
				<input type="text" class="form-control" name="area" placeholder="area" aria-label="area">
			</div>
			<div class="col">
				<label for="jabatan"><p>JABATAN</p></label>
				<input type="text" class="form-control" name="jabatan" placeholder="jabatan" aria-label="jabatan">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="pola"><p>POLA</p></label>
				<input type="text" class="form-control" name="pola" placeholder="pola" aria-label="pola">
			</div>
		</div>
 		<a href="#services" class="btn btn-transparent smooth-scroll">ABSEN MASUK</a>
 	</div>
 </section>

	<!-- 
	Essential Scripts
	=====================================-->
	
	<!-- Main jQuery -->
	<script src="../assets/absen/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 3.1 -->
	<script src="../assets/absen/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- Slick Carousel -->
	<script src="../assets/absen/plugins/slick-carousel/slick.min.js"></script>
	<!-- Portfolio Filtering -->
	<script src="../assets/absen/plugins/filterzr/jquery.filterizr.min.js"></script>
	<!-- Magnific popup -->
	<script src="../assets/absen/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<!-- Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
	<script src="../assets/absen/plugins/google-map/gmap.js"></script>
	<!-- wow.min Script -->
	<script src="../assets/absen/plugins/wow/wow.min.js"></script>
	<!-- Custom js -->
	<script src="../assets/absen/js/script.js"></script>
	
	</body>
</html>
