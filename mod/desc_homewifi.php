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
								  <h4 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a></h4>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Deskripsi  : <a href="desc_up-gamer.php"></a> Homewifi </p>
						      <p><a href="desc_stbtambahan.php">STB Tambahan</a> | <a href="desc_minipack.php">Minipack</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a></p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="382">
                                <col width="615">
                                <col width="419">
                                <col width="105">
                                <tr height="24">
                                  <td height="24" width="382"><div align="center"><strong>DESKRIPSI    PRODUK</strong></div></td>
                                  <td width="615"><div align="center"><strong>KEUNGGULAN</strong></div></td>
                                  <td width="419"><div align="center"><strong>BENEFIT PRODUK</strong></div></td>
                                  <td width="105"><div align="center"><strong>KETENTUAN</strong></div></td>
                                </tr>
                                <tr height="84">
                                  <td rowspan="5" height="189" width="382">layanan internet reguler dengan    kecepatan 10 Mbps kepada<br>
                                    pelanggan new homewifi (1P) dengan diberikan paket khusus</td>
                                  <td width="615">Handal,    Media penghantar Fiber Optik merupakan teknologi paling canggih saat ini    selain mampu memberikan kecepatan dan kestabilan dalam ber internet, kabel    fiber optik juga mempu bertahan dalam kondisi cuaca apapun seperti serangan    petir dan gangguan elekromagnet.&nbsp;    Sehingga perangkat elektronik yang terhubung dengan jaringan Indihome    lebih aman</td>
                                  <td width="419">Mempermudah    dalam hal pemasangan tanpa harus datang ke kantor telkom</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="615">Canggih, Teknologi fiber optic merupakan    teknologi penghantaran data tercanggih dan terbaru yang digunakan dalam    layanan fixed broadband</td>
                                  <td width="419">Berlangganan    praktis dan tidak ribet</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Pengguna lebih banyak</td>
                                  <td width="419">Pembayaran    sekaligus digabungkan dengan billing Telkom</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Youtube-an lancar tanpa buffering</td>
                                  <td width="419">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Jangkauan wifi sd 15 meter</td>
                                  <td width="419">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                              </table>
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