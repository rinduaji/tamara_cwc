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
						      <h5>Deskripsi  : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_all.php">All</a><a href="desc_stbtambahan.php"></a></h5>
						      <p><a href="desc_minipack.php">Minipack</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a> | <a href="desc_homewifi.php">Homewifi</a> | <a href="desc_netflix2.php">Netflix</a> | <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_smooa.php">SMOOA</a> | <a href="desc_vidio.php">VIDIO EPL</a> | <a href="desc_stbtambahan.php">STB Tambahan</a> </p>
						      <p>&nbsp;</p>
						      <p>Update Info Tayangan Olahraga</p>
						      <p>- LA LIGA/Liga Spanyol, Liga 1/Liga Prancis, Series A, Major League/Liga Amerika Serikat (Beinsport)<br>
						        - BUNDESLIGA GERMAN  (Mola TV, wajib download aplikasi Mola TV dan berlangganan)<br>
						        - UEFA Champion League dan UEFA Europe League (Champion TV, melalui aplikasi vidio dan berbayar)<br>
						        - BRI Liga 1 Indonesia (Usee Sport/Indisport 2)<br>
						        - AFF ADA DI VIDEO.COM<br>
						        - IBL (UseeSport / UseeSport 2 / IndiSport 2) <br>
						        - AFF (Vidio.com)</p>
						      <p>Untuk di paket essential, tayangan olahraga liga eropa:<br>
						        1. Channel BeIN Sports:<br>
						        - Seria A (Italia)<br>
						        - La Liga (Spanyol)<br>
						        - Ligue 1 (Perancis)<br>
						        - Emirates FA Cup (Inggris)<br>
						        - FA Cup Community Sheild (Inggris)<br>
						        - MLS / Major League Soccer (Amerika Serikat)</p>
						      <p>Tayangan liga eropa lainnya:<br>
						        Pelanggan harus berlangganan diluar paket essential:</p>
						      <p>1. Aplikasi OTT Vidio:<br>
						        - UEFA Champions League (Eropa)<br>
						        - UEFA Europa League (Eropa)<br>
						        - UEFA Europa Conference League (Eropa)<br>
						        - UEFA Youth League (Eropa)<br>
						        - Seria A (Italia)<br>
						        - La Liga (Spanyol)<br>
						        - Emirates FA Cup (Inggris)<br>
						        - English Premiere Leage (Liga Inggris) (Paket Vidio Diamond 79rb/bulan)</p>
						      <p>Note:<br>
						        Liga 1 dan Liga 2 (indonesia): saat ini kan dihentikan dulu (blm jelas kapan akan dilanjutkan) terkait tragedi kanjuruhan</p>
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