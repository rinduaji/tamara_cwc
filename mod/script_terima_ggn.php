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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a>| <a href="promo.php">Promo Indihome TV</a> | <a href="script_terima_ggn.php"> Script Terima Komplain Gangguan </a></h5>
								  <p align="center" class="title">&nbsp;</p>
							  </div>
						    <div style="overflow-x:auto;">
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="31">
                                <col width="206">
                                <col width="496">
                                <tr height="21">
                                  <td height="21" colspan="3"><div align="center"><strong>Proses dan Script terima gangguan pelanggan</strong></div></td>
                                </tr>
                                <tr height="27">
                                  <td width="21" height="27"><div align="center">1</div></td>
                                  <td width="396">Empaty</td>
                                  <td width="705">Baik pak/ bu    (nama pelanggan), saat ini sedang ada kendala untuk penggunaan indihomenya    ya<br>
                                  Bisa diinformasikan kendalanya seperti apa pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="14">
                                  <td height="14"><div align="center">2</div></td>
                                  <td colspan="2">Input gangguan pada aplikasi TAMARA</td>
                                </tr>
                                <tr height="109">
                                  <td height="109"><div align="center">3</div></td>
                                  <td>Informasikan    rangkuman kendala pelanggan</td>
                                  <td width="705">Kami    bantu untuk teruskan keluhan gangguan (sebutkan produknya) bapak/ ibu,<br>
                                    Dengan bapak/ ibu (nama pelanggan)<br>
                                    Nomor indihome/ fastel (sebutkan nomor fastel)<br>
                                    Kendala (sebutkan kendala pelanggan)<br>
                                    Nomor yang hubungi (sebutkan nomor hp pelanggan)<br>
                                    <br>
                                  terima kasih, data nya sudah kami terima bpk/ibu, selanjutnya akan ada    rekan kami yang akan menghubungi bpk / ibu dari 021147</td>
                                </tr>
                                <tr height="36">
                                  <td height="36"><div align="center">4</div></td>
                                  <td width="396">Tanyakan    kepada pelanggan apakah boleh lanjut untuk penawaran</td>
                                  <td width="705">Mhn    maaf, sebelum kami akhiri,. ada penawaran menarik yang ingin kami    informasikan kepada bapak/ ibu (nama pelanggan), boleh minta waktunya    sebentar?</td>
                                </tr>
                                <tr height="26">
                                  <td height="26"><div align="center">5</div></td>
                                  <td colspan="2">Agent melanjutkan penawaran</td>
                                </tr>
                                <tr height="18">
                                  <td colspan="3" rowspan="7" height="126">note<br>
                                    - poin ke 4-5 dapat dilanjutkan jika kondisi pelanggan tidak HC : pelanggan    di awal menolak karena fastel gangguan namun masih ada potensi untuk di    offering kembali di waktu yang sama<br>
                                    - namun jika pelanggan benar-benar tidak berkenan, intonasi menunjukkan    tidak ada potensi untuk lanjut offering, agent bisa lanjut clossing dengan    menyampaiakan salam empaty <br>
                                    mohon maaf atas ketidaknyamanannya, informasi keluhan bpk/ibu sudah kami    teruskan, selanjutnya akan ada rekan kami yang akan menghubungi bpk / ibu    dari 021147<br>                                  </td>
                                </tr>
                                <tr height="18"> </tr>
                                <tr height="18"> </tr>
                                <tr height="18"> </tr>
                                <tr height="18"> </tr>
                                <tr height="18"> </tr>
                                <tr height="18"> </tr>
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