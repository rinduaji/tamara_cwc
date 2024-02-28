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
						      <p>Rule : <a href="ref_tmolo.php">TM_OLO</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_homewifi.php">Home WiFi</a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a><a href="ref_tmolo.php"></a> | <a href="ref_upgrade.php">Upgrade</a></p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="20">
                                  <td height="20" width="165"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="221"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="745"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165">TM OLO</td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Bapak    tidak perlu khawatir untuk tagihan pertama (sebutkan bulannya) itu akan di    kenakan prorata (belum di hitung full) sesuai dengan penggunaan bapak/ibu,    dan mulai terhitung tagihan normal itu nanti di bulan kedua (sebutkan nama    bulan)</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165">TM OLO</td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Dengan    tarif penambahan hanya xxx + ppn 10% sangat hemat sekali dikarenakan    programnya pun berlaku selama berlangganan atau s.d 31 Maret 2018, Dan tdk    semua pelanggan mendapatkan penawaran&nbsp; promo ini, hanya pelanggan    Terpilih saja yang memndapatkan penawaran khusus ini.</td>
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