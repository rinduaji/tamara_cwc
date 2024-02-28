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
						      <p>&nbsp;</p>
						      <p>Deskripsi  : <a href="desc_up-reguler.php">Upgrade Reguler</a> </p>
						      <p><a href="desc_stbtambahan.php">STB Tambahan</a> | <a href="desc_minipack.php">Minipack</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a> | <a href="desc_homewifi.php">Homewifi</a></p>
						      <p>&nbsp;</p>
						      <p><img src="../Downloads/line_profile.jpg" width="1280" height="326"></p>
						      <p>&nbsp;</p>
						      <p align="center"><img src="../agency/img/upgrade.jpeg" alt="Upgrade HSI" width="595" height="481"></p>
							  <p align="center"><img src="../agency/img/upgrade2.jpeg" alt="Upgrade" width="595" height="481"></p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="360">
                                <col width="615">
                                <col width="380">
                                <col width="105">
                                <tr height="24">
                                  <td height="24" width="360"><div align="center"><strong>DESKRIPSI    PRODUK</strong></div></td>
                                  <td width="615"><div align="center"><strong>KEUNGGULAN</strong></div></td>
                                  <td width="380"><div align="center"><strong>BENEFIT PRODUK</strong></div></td>
                                  <td width="105"><div align="center"><strong>KETENTUAN</strong></div></td>
                                </tr>
                                <tr height="42">
                                  <td rowspan="9" height="609" width="360">Layanan Internet yang sangat    cepat dan stabil menggunakan media penghantar kabel Fiber Optik</td>
                                  <td width="615">Lebih    Cepat, Jaringan fiber optic mampu mentransfer data (bandwith) hingga ratusan    Mbps baik (Upload/Download), jauh lebih cepat dibandingkan jaringan kabel    koaksial atau kabel tembaga</td>
                                  <td width="380">Mempermudah    dalam hal pemasangan tanpa harus datang ke kantor telkom</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="63">
                                  <td height="63" width="615">Lebih Stabil, Dibandingkan dengan media    penghantar yang lain, kabel optik jauh lebih unggul dalam hal kestabilan    jaringan internet. Saat dilakukan sharing internet atau di gunakan secara    bersamaan jaringan internet menggunakan fiber optik sangat stabil.</td>
                                  <td width="380">Berlangganan    praktis dan tidak ribet</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="84">
                                  <td height="84" width="615">Lebih Handal, Media penghantar Fiber Optik    merupakan teknologin paling canggih saat ini selain mampu memberikan    kecepatan dan kestabilan dalam ber internet, kabel fiber optik juga mempu    bertahan dalam kondisi cuaca apapun seperti serangan petir dan gangguan    elekromagnet.&nbsp; Sehingga perangkat    elektronik yang terhubung dengan jaringan Indihome lebih aman</td>
                                  <td width="380">Harga    lebih Hemat</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="615">Lebih Canggih, Teknologi fiber optic merupakan    teknologi penghantaran data tercanggih dan terbaru yang digunakan dalam    layanan fixed broadband</td>
                                  <td width="380">Pembayaran    sekaligus digabungkan dengan billing Telkom</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="294">
                                  <td height="294" width="615">Pengguna lebih banyak<br>
                                    Referensi pengguanan:<br>
                                    10 Mbps:<br>
                                    &bull; Dapat digunakan oleh 2 pengguna internet dalam satu rumah.<br>
                                    &bull; Bisa digunakan oleh 3 &ndash; 4 smartphone / tablet, begitu juga pada PC /    Laptop. <br>
                                    20Mbps &ndash; 50 Mbps:<br>
                                    &bull; Dapat digunakan oleh 3 hingga 8 pengguna internet dalam satu rumah. <br>
                                    &bull; Bisa digunakan oleh 4 hingga 15 smartphone / tablet, serta PC / Laptop. <br>
                                    &bull; Sesuai bagi pengguna dengan kebutuhan browsing, download file, lagu dan    video, streaming Youtube video HD dan video OTT.<br>
                                    100 Mbps:<br>
                                    &bull; Dapat digunakan lebih dari 10 pengguna internet dalam satu rumah, atau    gedung multifungsi lainnya. <br>
                                    &bull; Bisa digunakan lebih dari 15 smartphone / tablet, serta PC / Laptop.</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Youtube-an lancar tanpa buffering</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Harga lebih hemat</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Cocok untuk game online</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Jangkauan wifi sd 15 meter</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                              </table>
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