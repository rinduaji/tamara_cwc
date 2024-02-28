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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a>| <a href="promo.php">Promo Indihome TV</a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Rule : <a href="ref_kalibrasi.php">Risalah Kalibrasi</a><a href="ref_all.php"></a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_smoo.php">SMOOA</a>  | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a> | <a href="ref_all.php">All</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_stb.php">STB</a> | <a href="ref_terbuka.php">Kalimat Terbuka</a><a href="ref_downgrade.php"></a> | <a href="ref_p3k.php">P3K</a></p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/rispat8mar22.jpg" width="713" height="577"></p>
						      <p><img src="../agency/img/rispat1.jpg" width="1097" height="784"></p>
						      <p><img src="../agency/img/rispat2.jpg" width="1097" height="392"></p>
						      <p><img src="../agency/img/rispat3.jpg" width="1119" height="590"></p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/kalibrasi090822a.jpg" width="1111" height="783"></p>
						      <p><img src="../agency/img/kalibrasi090822b.jpg" width="1107" height="585"></p>
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