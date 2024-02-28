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
						      <p>Deskripsi  : <a href="desc_up-gamer.php">Upgrade Gamer</a> </p>
						      <p><a href="desc_stbtambahan.php">STB Tambahan</a> | <a href="desc_minipack.php">Minipack</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_homewifi.php">Homewifi</a></p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="360">
                                <col width="541">
                                <col width="380">
                                <col width="105">
                                <tr height="24">
                                  <td height="24" width="360"><div align="center"><strong>DESKRIPSI    PRODUK</strong></div></td>
                                  <td width="541"><div align="center"><strong>KEUNGGULAN</strong></div></td>
                                  <td width="380"><div align="center"><strong>BENEFIT PRODUK</strong></div></td>
                                  <td width="105"><div align="center"><strong>KETENTUAN</strong></div></td>
                                </tr>
                                <tr height="63">
                                  <td rowspan="10" height="252" width="360">Layanan HSI Gamer merupakan    layanan internet dengan value added service berupa gimik benefit yang akan    diberikan oleh Game Publishers. Benefit yang diberikan dapat berupa in-game    items, in-game currency, double experience/drop rate, dan lainnya.</td>
                                  <td width="541">Mendapatkan    domain dan IP Pool khusus yang akan didaftarkan oleh Game Publishers</td>
                                  <td width="380">Mempermudah    dalam hal pemasangan tanpa harus datang ke kantor telkom</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Pengguna lebih banyak</td>
                                  <td width="380">Berlangganan    praktis dan tidak ribet</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Kecepatan lebih cepat dari paket sebelumnya</td>
                                  <td width="380">Pembayaran    sekaligus digabungkan dengan billing Telkom</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Download lebih cepat</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Upload lebih cepat</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Lebih stabil&nbsp;</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Koneksi lancar tidak terpengaruh cuaca</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Untuk main games lebih lancar dan stabil</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Tidak buffering saat menonton youtube</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="541">Tidak putus-putus</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
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