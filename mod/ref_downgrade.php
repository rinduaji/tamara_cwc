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
    <style type="text/css">
<!--
.style3 {font-size: 16px}
.style4 {font-size: 18}
-->
    </style>
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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a>| <a href="promo.php">Promo Indihome TV</a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Rule : <a href="ref_downgrade.php">Downgrade</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_all.php">All</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_downgrade2.php">do and don't</a><a href="ref_downgrade.php"></a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_nba.php">NBA</a></p>
						      <p>&nbsp;</p>
						      <ul class="style3"><li class="style4">Jika pelanggan menginginkan downgrade sampaikan untuk downgrade  tergantung ketersediaan paket dan harga yg berlaku jika pelanggan mendesak bisa  downgrade apa tidak sampaikan Kami tidak bisa memastikan bisa pak/ bu, Karena  sebelum downgrade akan dilakukan.pemgecekan ketersediaan paketnya dulu, kami  yakin program yg kami tawarkan ini akan sangat bermanfaat, besar harapan kami  bapak tetap berlangganan program yang kami tawarkan</li>
						        <li class="style4"> Jika pelanggan menginginkan cabut program lain selain yang  ditawarkan maka hendaknya agent menanyakan alasan pelanggan cabut kemudian  infokan untuk permintaan pelanggan, Bapak/ ibu bisa hubungi 147 untuk  permintaahan dan keluhannya</li>
						        <li class="style4"> Jika pelanggan mengatakan saya mau pakai 1 bulan dulu (coba dulu  satu bulan ) nanti kalau nggak sesuai saya mau cabut ( contoh produk stb ) maka  hendaknya agent menyampaikan Untuk berlangganan bapak / ibu bisa sesuaikan  dengan kebutuhan. Tapi kami yakin STB tambahan ini akan sangat bermanfaat untuk  bapak / ibu dan keluarga </li>
						        <li class="style4"> Jika pelanggan masih mendesak sampaikan untuk permintaan atau  keluhan bapak konfirmasi ke 147 atau plasa telkom terdekat karena dikami hanya  penawaran saja</li>
						        <li class="style4"> Intinya tidak boleh mengatakan bisa atau kebijakan kami  kembalikan kepada pelanggan ketika pelanggan mengatakan mau downgrade</li>
						        <li class="style4"> Tidak ada prorata untuk cabut stb</li>
			                  </ul>
						      <blockquote>
						        <p>Sekilas Info Siang 7 Nov 2020<br>
						          1. Case Upgrade, jika paket dasarnya pelanggan 10Mbps, 3Mbps, 2Mbps, 1Mbps, 512Kbps dan 384Kbps menanyakan bisa kembali ke paket semula atau bisa downgrade maka harus di jawab &quot;Tidak bisa kembali ke paket semula. 
						          (Dari case pelanggan, remind dari witel, 10 Mbps kebawah sudah tidak dijual)<br>
						          2. Jika Paket pelanggan dasarnya adalah 20M maka ketentuan downgrade<br>
						          Jadi contoh kalimatnya bisa dipakai : <br>
						          - Untuk downgrade tergantung ketersediaan paket dan harga akan menyesuaikan pada saat melakukan downgrade<br>
						          - Kami tidak bisa memastikan, mungkin ibu bisa call ke 147<br>
						          - Saat ini tidak bisa kami pastikan, ........</p>
					          </blockquote>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
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