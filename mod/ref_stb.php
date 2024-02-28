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
						      <p>Rule : <a href="ref_stb.php">STB</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> |<a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a>  | <a href="ref_all.php">All</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> </p>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="76">
                                <col width="155">
                                <col width="597">
                                <tr height="20">
                                  <td height="20" width="76"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="155"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="597"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="76">STB</td>
                                  <td width="155">BELUM    PERLU</td>
                                  <td width="597">&nbsp;Apa tidak sangat disayangkan pak? Karna    untuk perangkatnya nanti sudah menggunakan sistem yg terbaru yaitu sistem PLC    jd tidak perlu menggunakan tambahan kabel lagi dan juga tidak akan merusak    interior rumah bpk/ibu, perangkatnya juga sudah bisa dipindah2kan dari satu    ruangan ke ruangan lain selama masih terhub ke dlm jaringan listrik 1 fasa.    Kedepannya bpk/ibu dan keluarga sudah bisa menonton channel yg berbeda di tv    kedua dlm waktu bersamaan.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="76">STB</td>
                                  <td width="155">BELUM    PERLU</td>
                                  <td width="597">Kedepannya    untuk tampilan tv bapak sudah sama seperti Smart Tv. Perangkatnya sudah    menggunakan sistem terbaru jd sudah bisa dipindah-pindahkan dari satu ruangan    ke ruangan lainnya selama masih terhub ke dlm jaringan listrik 1 fasa. Kita    pastikan penawaran yang kita berikan sangat menguntungkan untuk bapak/ibu dan    keluarga di rumah. Nanti boleh silahkan dimaksimalkan untuk penggunannya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="76">STB</td>
                                  <td width="155">BELUM    PERLU</td>
                                  <td width="597">dirumah    kan pasti setiap anggota kluarga memiliki channel2 kegemaran masing2 ya pak,    apalagi masih dimasa pandemi seperti ini, kita lebih banyak dirumah. nah    kalao bapak tambah STB PLC nya, anggota keluarga tidak akan berebut channel    pak dan tidak akan bosan kalau lama dirumah</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="76">
                                <col width="155">
                                <col width="597">
                                <tr height="20">
                                  <td height="20" width="76"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="155"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="597"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="76">STB PLC</td>
                                  <td width="155">Sudah    cukup</td>
                                  <td width="597">Terkadang    dalam waktu bersamaan suka ada acara televisi yg disukai oleh keluarga, bapak    lagi menonton bola sedangkan anak bapak ingin menonton film. Dengan STB PLC    ini bapak dan keluarga bisa menonton bersamaan dg channel yang berbeda di tv    yang lainnya</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="76">STB PLC</td>
                                  <td width="155">BELUM    PERLU</td>
                                  <td width="597">penawaran    2ND STB PLC tidak semua PL mendapatkan penawaran <br>
                                    hanya dg berlangganan 100k/bulan<br>
                                    sudah dimendapatkan 1 set alat STB berbasis HYBIRD<br>
                                    yg mempunyai banyak benfit salah satu diantaranya bisa menonton 2 tayangan    yg berbeda di 2 tv yg berbeda buk , sehingga anggota keluarga ibu tdk akan    berebut dalam menonton chanel2 yg ada di useetv&nbsp;</td>
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