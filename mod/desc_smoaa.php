<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");

if($login<>""){ $whr= "AND login='$login'";}
?>

<!doctype html>
<html lang="en">
	<title>REFERENSI</title>
<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='list_recall.php' method='post' accept-charset='UTF-8'>
						<div>
						
						<div class="row">
						<div class="col-md-12">
						  <div class="card ">
							  <div class="header">
								  <h4 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy (FUP)</a> | <a href="desc_tdkditawarkan.php">Tidak Bisa dilakukan Penawaran</a></h4>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Deskripsi  : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_smooa.php">SMOOA</a></p>
						      <p><a href="desc_minipack.php">Minipack</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a> | <a href="desc_homewifi.php">Homewifi</a> | <a href="desc_netflix2.php">Netflix</a> | <a href="desc_stbtambahan.php">STB Tambahan</a></p>
						      <p>&nbsp;</p>
						      <p><img src="../Downloads/smooa.jpeg" width="1200" height="386"></p>
						      <blockquote>
						        <p>Syarat &amp; Ketentuan	SMOOA<br>
						          1	Pelanggan eksiting Indihome atau potensial yang berada dalam jangkauan jaringan Indihome<br>
						          2	Pelanggan memiliki nomor Telkomsel minimal 3 untuk didaftarkan (1 nomor utama dan 2 member anggota)<br>
						          3	Untuk saat ini hanya nomor Prepaid aktif yang dapat dijadikan  Nomor Utama<br>
						          4	Tidak memiliki paket kuota keluarga<br>
						          5	Tidak bloked &amp; churn<br>
						          6	Customer type reguler atau telkomsel employees numbers (BO)<br>
						          7	Bukan halo data<br>
						          8	Bukan pelanggan corporate<br>
						          9	Paket SMOOA memiliki masa aktif 30 hari<br>
						          10	Diperpanjang secara otomatis<br>
						          11	Jika ada perubahan anggota, untuk internet bisa dinikmati oleh member baru, tetapi tidak bisa telepon dan SMS (bulan berjalan)<br>
						          12	Tidak ada prorate untuk quota dan tagihan<br>
						          13	Saat aktivasi, pelanggan sudah harus menyiapkan nomor pelanggan minimal 3 (1 utama, 2 member)<br>
						          14	Pembelian paket akan memperpanjang masa aktif semua member<br>
						          15	Jika nomor utama tidak sharing kuota, maka pemakaian tergantung masing- masing anggota<br>
						          16	Telkomsel akan cek status pelanggan indohome saat aktivasi/ lanjut berlangganan (aktive or isolir), jika status isolir maka otomatis akan berhenti berlangganan<br>
						          17	Penawaran special untuk pelanggan indihome<br>
						          18	Apabila nomor utama berhenti, maka semua akan berhenti (tidak bisa dialihkan)<br>
						          19	Untuk quota internet, jika sudah ditentukan diawal, dan ternyata quita salah satu member habis (sebelum masa aktif berakhir), maka tidak bisa ditambah dari member yang lain<br>
						          20	Kalau salah satu member menggunakan data banyak dan mau di stop, maka solusinya hanya mengeluarkan dari group (pastikan umlah member minimal 3)<br>
						          21	Member postpaid isolir, maka tidak bisa bergabungdan tidak bisa menikmati layanan<br>
						          22	Pelanggan belum memungkinkan untuk pindah paket baik saat renew atau aktivasi ulang<br>
						          23	1 nomor hanya bisa 1 group<br>
						          24	Pelanggan disarankan untuk mendowload aplikasi moodah di playstore<br>
						          25	Untuk call center bisa hubungi 188</p>
						        <p>&nbsp;</p>
						        <p>&nbsp;</p>
					          </blockquote>
						    </div>
						  </div>
						</div>
                </div>
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>