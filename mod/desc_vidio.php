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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy (FUP)</a> | <a href="desc_tdkditawarkan.php">Tidak Bisa dilakukan Penawaran</a></h5>
							  </div>
						    <div style="overflow-x:auto;">
						      <h5>&nbsp;</h5>
						      <h5>Deskripsi  : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_vidio.php">VIDIO EPL </a></h5>
						      <p><a href="desc_minipack.php">Minipack</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a> | <a href="desc_homewifi.php">Homewifi</a> | <a href="desc_netflix2.php">Netflix</a> | <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_smooa.php">SMOOA</a> | <a href="desc_stbtambahan.php">STB Tambahan</a></p>
						      <p>&nbsp;</p>
						      <p><strong>Benefit VIDEO EPL</strong></p>
						      <p><br>
						        Bisa menikmati Liga Inggris tanpa harus berlangganan dengan layanan dari luar negeri.<br>
						        Dapat menyaksikan seluruh pertandingan <strong>English Premier League musim 2022/ 2023</strong>.<br>
					          Selain streaming bola, juga bisa mendapatkan konten drama korea, sinetron, pertandingan e-sports, NBA, film serta konten-konten original Vidio </p>
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