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
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
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
							    <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a>|  <a href="promo.php">Promo Indihome TV </a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <h5>&nbsp;</h5>
						      <p>&nbsp;</p>
						      <p>Promo Gimmick Add On Indihome TV</p>
						      <p>Deskripsi,<br>
						        Pelanggan eksisting diskon 20% selama 3 bulan utk add on  minipack:<br>
						        Inditainment 1<br>
						        IndiKorea<br>
						        IndiSport<br>
						        IndiNewa<br>
						        IndiJapan<br>
						        IndiBasketBall<br>
						        IndiAction<br>
						        indiscover</p>
						      <p>Ketentuan,<br>
						        1. Periode promo 22 Maret sd 9 Mei 2022<br>
						        2. Diskon yang diberikan akan dilakukan pro- rata sesuai  billing IndiHome</p>
						      <p>Simulasi,<br>
						        Pelanggan yang ditawarkan bulan Maret,<br>
						        - Tagihan bulan April prorata (normal + diskon 20%)<br>
						        - Tagihan bulan Mei diskon full 20%<br>
						        - Tagihan bulan Juni Diskon full 20%</p>
						      <p>Script penawaran,<br>
						        Dan saat ini telkom memiliki program yang sangat menarik  untuk bapak/ ibu dan keluarga untuk mengisi keseharian dirumah, boleh minta  waktunya sebentar?<br>
						        Kami menyediakan banyak pilihan paket yang memiliki channel  - channel yang sangat menarik. Bapak/ ibu bisa nonton channel-channel yang  diinginkan&nbsp; dengan mudah dan fleksibel  sesuai keinginan bapak/ ibu. Salah satu yang saya rasa cocok untuk&nbsp; pak/ bu (nama pelanggan) dan keluarga adalah  (sebutkan paket yang ingin ditawarkan), paket ini menayangkan beberapa channel  (jelaskan deskripsi paket)<br>
						        (Jelaskan ketentukan program dan masa berlaku jika ada)<br>
						        Dan yang paling menarik adalah harga penawaran yang kami  tawarkan sangat ekonomis, hanya dengan penambahan (sebutkan tarif) dari tagihan  bapak/ Ibu sekarang plus PPN 11%<br>
  <strong>Khusus hari ini jika bapak/ ibu bersedia berlangganan, untuk  3 bulan pertama kami memberikan diskon sebesar 20% dari harga normal</strong></p>
						      <p>Terima kasih</p>
						      <p><img src="..\agency\img\promo_clip_image002.jpg" alt="indi tv" width="624" height="398"></p>
						      <p>&nbsp;</p>
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