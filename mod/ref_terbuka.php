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
						      <p>Rule : <a href="ref_terbuka.php">Kalimat Terbuka</a><a href="ref_downgrade.php"></a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_all.php">All</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_downgrade2.php"></a><a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a><a href="ref_downgrade.php"></a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_p3k.php">P3K</a></p>
						      <p>&nbsp;</p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="124">
                                <col width="673">
                                <tr height="20">
                                  <td height="20" width="124"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="673"><div align="center"><strong>KALIMAT TERBUKA</strong></div></td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Indihome 2P to    3P</td>
                                  <td>Kalau bapak/ ibu,    tayangan yang disukai seperti apa?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Indihome 2P to    3P</td>
                                  <td>Kalau yang lebih suka    nonton televisi siapa pak/ bu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Indihome 2P to    3P</td>
                                  <td>Untuk televisinya,    selain menonton acara yang disukai, biasa bapak/ ibu pergunakan untuk apa?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Indihome 2P to    3P</td>
                                  <td>Untuk Televisinya    lebih sering nonton di jam brapa Pak/bu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Indihome 2P to    3P</td>
                                  <td>Keluarga Bapak/Ibu    senang dengan tayangan apa?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Mini Pack</td>
                                  <td>Kalau bapak/ ibu,    tayangan yang disukai seperti apa?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Mini Pack</td>
                                  <td>Kalau boleh saya    tahu, film yang bapak/ ibu sukai&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Mini Pack</td>
                                  <td width="673">Dirumah    yang paling sering nonton TV siapa pak/ ibu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Mini Pack</td>
                                  <td width="673">keluarga    bapak/ibu lebih sering menonton tayangan apa?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">SMOOA</td>
                                  <td>Kalau dirumah/ kantor    akses internet kan menggunakan indihome, jika diluar rumah bagaimana pak/ bu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">STB Tambahan</td>
                                  <td>Dirumah yang paling    sering nonton TV siapa pak/ ibu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">STB Tambahan</td>
                                  <td>Kalau yang lebih suka    nonton televisi siapa pak/ bu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">STB Tambahan</td>
                                  <td>Untuk televisi yang    digunakan dirumah ada berapa pak/ bu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Upgrade    Indihome</td>
                                  <td>Berapa banyak    perangkat yang terhubung pak/ bu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Upgrade    Indihome</td>
                                  <td>Internetnya digunakan    untuk keperluan apa saja pak/ bu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">Upgrade    Indihome</td>
                                  <td>Yang menggunakan    internet dirumah ada berapa orang pak/ bu?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">HOME WIFI&nbsp;</td>
                                  <td>untuk akses internet    bapak/ ibu dan keluarga menggunakan apa?</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">HOME WIFI&nbsp;</td>
                                  <td>Anggota keluarga yang    menggunakan internet ada berapa orang?</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0" bordercolor="3">
                                <col width="154">
                                <col width="738">
                                <tr height="49">
                                  <td height="49" width="154"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="738"><div align="center"><strong>KALIMAT TERBUKA</strong></div></td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Aplikasi streaming    apa yang sudah pernah bapak/ibu pakai?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Aplikasi streaming    video apa yang sudah pernah bapak/ibu ketahui?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Bapak/ ibu pernah    berlangganan streaming film di indihome Tvnya?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Berapakah yang    biasanya di bayarkan setiap bulannya untuk penggunaan internet saja?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td width="738">Biasanya    tayangan seperti apa yang bapak/ibu sukai saat dirumah atau berkumpul dengan    keluarga?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Di keluarga yang suka    nonton netflix siapa pak?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Dirumah siapa sajakah    yg menggunakan inet dan usee tvnya ibu?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Film Action/streaming    apa yang sering bapak/ibu tonton dirumah?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Kalau nonton    streaming acara yang paling digemari apa?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Kalau streaming film    biasanya dari mana pak/bu?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Ketika dirumah    biasanya bapak / ibu yang sering ditonton bersama keluarga acara/tayangan apa    saat santai?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Saat ini kecepatan    internet bapak/ ibu berapa?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Selama ini bapak/ibu    menggunakan aplikasi apa untuk menonton tayangan hiburan dirumah?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Setiap bulan kira    kira berapa pengeluaran bapak / ibu untuk kebutuhan internet&nbsp; ?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Tontonan kesukaan    keluarga biasa acara apa ya pak/bu?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Untuk genre/ jenis    film yang paling bapak/ ibu sukai apa?</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Untuk keluarga    dirumah yang lebih sering menonton tv siapa bapak/ibu?</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">OTT/ Bundling    netflix</td>
                                  <td width="738">Yang    biasa bapak/ ibu tonton dirumah film-film apa saja? disini kami ada penawaran    paket bundling upgrade internet dengan netflix jadi tontonan bapak/ ibu    dirumah bisa lebih beragam lagi dengan streaming netflix tanpa buffering dan    yang diputar kapan saja</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT/ Bundling    netflix</td>
                                  <td>Yang sering nonton    film/series dirumah dengan siapa bapak/ibu?</td>
                                </tr>
                              </table>
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