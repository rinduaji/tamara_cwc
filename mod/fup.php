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
							    <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a>| <a href="promo.php">Promo Indihome TV</a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <h5>&nbsp;</h5>
						      <h5><a href="fup.php">Fair Usage Policy</a> dan <a href="desc_tdkditawarkan.php">Deskripsi tidak bisa di tawarkan</a> </h5>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p><strong>Update : 27 Februari 2023</strong></p>
						      <p><img src="../assets/img/Tabel_FUP_Reg_dan_Low FUP.jpeg" width="1024" height="644"></p>
                  <p><img src="../assets/img/gambar1-2023-03-03.jpeg" width="1024" height="300"></p>
                  <p><img src="../assets/img/gambar2-2023-03-03.jpeg" width="650" height="300"></p>
						      <p>&nbsp;</p>
						      <p><strong>Deskripsi  : tidak bisa dilakukan penawaran</strong></p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="106">
                                <col width="544">
                                <col width="93">
                                <tr height="20">
                                  <td height="20" width="106"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="544"><div align="center"><strong>TIDAK BISA    DITAWARKAN</strong></div></td>
                                  <td width="93"><div align="center"><strong>Script Edukasi</strong></div></td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="11" height="220" width="106">2P - 3P</td>
                                  <td width="544">Fastel    cabut/ tidak aktif</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel gangguan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel isolir</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Pelanggan mau pindah</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Rumah kosong</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah ada permintaan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah berlangganan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Televisi rusak</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak ada televisi</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Beda gedung dengan pemasangan internet</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak berlangganan internet indihome</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="8" height="160" width="106">HOME WIFI</td>
                                  <td width="544">Fastel    cabut/ tidak aktif</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel gangguan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel isolir</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Pelanggan mau pindah</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Rumah kosong</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah ada permintaan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah berlangganan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak ada modem/ modem rusak</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="11" height="220" width="106">STB TAMBAHAN</td>
                                  <td width="544">Fastel    cabut/ tidak aktif</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel gangguan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel isolir</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Hanya memiliki 1 televisi</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Pelanggan mau pindah</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Rumah kosong</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah ada permintaan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah berlangganan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">-</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak 1&nbsp;    fasa</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak berlangganan usee TV</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="10" height="200" width="106">MINIPACK</td>
                                  <td width="544">Fastel    cabut/ tidak aktif</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel gangguan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel isolir</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Pelanggan mau pindah</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Pelanggan starter tidak bisa ditawari minipack    HD</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Remote rusak</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Rumah kosong</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">STB tidak support</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah ada permintaan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah berlangganan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="12" height="240" width="106">INDIBOX</td>
                                  <td width="544">Fastel    cabut/ tidak aktif</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel gangguan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel isolir</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Pelanggan mau pindah</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Perangkat tidak bisa dikirim ke beda kota</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Rumah kosong</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah ada permintaan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah berlangganan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak ada converter</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak ada info aktivasi dinomor terdaftar</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak ada televisi atau perangkat tidak support    HDMI (laptop/ PC karea HDMI output)</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak tanya alamat jelas (ancar- ancar)</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="9" height="180" width="106">UPGRADE</td>
                                  <td width="544">Fastel    cabut/ tidak aktif</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel gangguan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Fastel isolir</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Pelanggan mau pindah</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Revenue turun</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Rumah kosong</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah ada permintaan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Sudah berlangganan</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="544">Tidak pakai script downgrade</td>
                                  <td width="93">&nbsp;</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p class="style1">Note : disampaikan hanya jika pelanggan menanyakan (expired) </p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="67">
                                <col width="623">
                                <tr height="20">
                                  <td height="20" width="67"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="623"><div align="center"><strong>SCRIPT</strong></div></td>
                                </tr>
                                <tr height="137">
                                  <td height="137" width="67">10Mbps</td>
                                  <td width="623">Baik    Pak/Bu, Mengenai FUP tidak perlu khawatir karena<br>
                                    Jika penggunaan internet bapak/ibu mencapai 0 s.d 300GB, Maka kecepatan    internetnya tetap di 10Mbps. Jika penggunaan internet mencapai lebih dari 300    s.d 350GB, Maka kecepatan internetnya akan menjadi 7,5Mbps. dan Jika    penggunaan internetnya melebihi 350GB, Maka kecepatan internetnya akan    menjadi 3Mbps.&nbsp;</td>
                                </tr>
                                <tr height="137">
                                  <td height="137" width="67">20Mbps</td>
                                  <td width="623">Baik    Pak/Bu, Mengenai FUP tidak perlu khawatir karena<br>
                                    Jika penggunaan internet bapak/ibu mencapai 0 s.d 500GB, Maka kecepatan    internetnya tetap di 20Mbps. Jika penggunaan internet mencapai lebih dari 500    s.d 750GB, Maka kecepatan internetnya akan menjadi 10Mbps. dan Jika    penggunaan internetnya melebihi 750GB, Maka kecepatan internetnya akan    menjadi 4Mbps.&nbsp;</td>
                                </tr>
                                <tr height="137">
                                  <td height="137" width="67">30Mbps</td>
                                  <td width="623">Baik    Pak/Bu, Mengenai FUP tidak perlu khawatir karena<br>
                                    Jika penggunaan internet bapak/ibu mencapai 0 s.d 700GB, Maka kecepatan    internetnya tetap di 30Mbps. Jika penggunaan internet mencapai lebih dari 700    s.d 1100GB, Maka kecepatan internetnya akan menjadi 15Mbps. dan Jika    penggunaan internetnya melebihi 1100GB, Maka kecepatan internetnya akan    menjadi 6Mbps.&nbsp;</td>
                                </tr>
                                <tr height="138">
                                  <td height="138" width="67">40Mbps</td>
                                  <td width="623">Baik    Pak/Bu, Mengenai FUP tidak perlu khawatir karena<br>
                                    Jika penggunaan internet bapak/ibu mencapai 0 s.d 800GB, Maka kecepatan    internetnya tetap di 40Mbps. Jika penggunaan internet mencapai lebih dari 800    s.d 1500GB, Maka kecepatan internetnya akan menjadi 20Mbps. dan Jika    penggunaan internetnya melebihi 1500GB, Maka kecepatan internetnya akan    menjadi 8Mbps.&nbsp;</td>
                                </tr>
                                <tr height="138">
                                  <td height="138" width="67">50Mbps</td>
                                  <td width="623">Baik    Pak/Bu, Mengenai FUP tidak perlu khawatir karena<br>
                                    Jika penggunaan internet bapak/ibu mencapai 0 s.d 1200GB, Maka kecepatan    internetnya tetap di 50Mbps. Jika penggunaan internet mencapai lebih dari    1200 s.d 1800GB, Maka kecepatan internetnya akan menjadi 25Mbps. dan Jika    penggunaan internetnya melebihi 1800GB, Maka kecepatan internetnya akan    menjadi 10Mbps.&nbsp;</td>
                                </tr>
                                <tr height="138">
                                  <td height="138" width="67">100Mbps</td>
                                  <td width="623">Baik    Pak/Bu, Mengenai FUP tidak perlu khawatir karena<br>
                                    Jika penggunaan internet bapak/ibu mencapai 0 s.d 1800GB, Maka kecepatan    internetnya tetap di 100Mbps. Jika penggunaan internet mencapai lebih dari    1800 s.d 2000GB, Maka kecepatan internetnya akan menjadi 50Mbps. dan Jika    penggunaan internetnya melebihi 2000GB, Maka kecepatan internetnya akan    menjadi 20Mbps.&nbsp;</td>
                                </tr>
                                <tr height="137">
                                  <td height="137" width="67">200Mbps</td>
                                  <td width="623">Baik    Pak/Bu, Mengenai FUP tidak perlu khawatir karena<br>
                                    Jika penggunaan internet bapak/ibu mencapai 0 s.d 3000GB, Maka kecepatan    internetnya tetap di 200Mbps. Jika penggunaan internet mencapai lebih dari    3000GB, Maka kecepatan internetnya akan menjadi 100Mbps.&nbsp;</td>
                                </tr>
                                <tr height="137">
                                  <td height="137" width="67">300Mbps</td>
                                  <td width="623">Baik    Pak/Bu, Mengenai FUP tidak perlu khawatir karena<br>
                                    Jika penggunaan internet bapak/ibu mencapai 0 s.d 4000GB, Maka kecepatan    internetnya tetap di 300Mbps. Jika penggunaan internet mencapai lebih dari    4000GB, Maka kecepatan internetnya akan menjadi 150Mbps.&nbsp;</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>=================================================================================================================</p>
						      <p>&nbsp;</p>
						      <p><strong>Tabel FUP Reguler Selama Covid-19 </strong></p>
						      <p><strong>(FUP COVID SUDAH TIDAK DIPERGUNAKAN Update info 19 Mei 2020, source by : Nadesia Geogema - CRL)</strong></p>
						      <p><img src="../assets/img/fup_covid.jpeg" width="970" height="306"></p>
						      <p>&nbsp;</p>
						      <p><strong>Tabel FUP Reguler </strong></p>
						      <p><img src="../assets/img/reguler_fup.jpeg" width="964" height="333"></p>
						      <p>&nbsp;</p>
						      <p><strong>Tabel Low FUP</strong> <strong> (saat ini telkom sudah tidak menjual produk ini) </strong></p>
						      <p><img src="../assets/img/low_fup.jpeg" width="980" height="441"></p>
						      <p>&nbsp;</p>
						      <p><strong>Tabel Up Stream dan Down Stream</strong> (<em><strong>expired</strong></em>) </p>
						      <p><img src="../assets/img/up_downstream.jpeg" width="620" height="270"></p>
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