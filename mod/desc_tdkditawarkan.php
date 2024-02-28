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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a></h5>
							  </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>Deskripsi  : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a>tidak bisa dilakukan penawaran</p>
						      <p>&nbsp;</p>
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