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
								  <h4 align="center" class="title"><a href="p3k.php">P3K</a> || <a href="monpros.php">Jobdesk</a></h4>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="115">
                                <col width="97">
                                <col width="330">
                                <col width="339">
                                <col width="794">
                                <tr height="21">
                                  <td colspan="5" rowspan="2" height="42" width="1675"><div align="center"><strong>STANDARD PENILAIAN VALIDASI    LAYANAN TAM</strong></div></td>
                                </tr>
                                <tr height="21"> </tr>
                                <tr height="21">
                                  <td rowspan="2" height="42" width="115"><div align="center"><strong>Kategori</strong></div></td>
                                  <td width="97"><div align="center"></div></td>
                                  <td colspan="2" width="669"><div align="center"><strong>Scoring    Indicator</strong></div></td>
                                  <td rowspan="2" width="794"><div align="center"><strong>Keterangan</strong></div></td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="97"><div align="center"></div></td>
                                  <td width="330"><div align="center"><strong>Valid</strong></div></td>
                                  <td width="339"><div align="center"><strong>Tidak    Valid</strong></div></td>
                                </tr>
                                <tr height="222">
                                  <td rowspan="3" height="432" width="115">P3</td>
                                  <td width="97">Penanggung    Jawab</td>
                                  <td width="330">1.    Memastikan penerima telepon adalah penanggung jawab untuk pembayaran    fastel<br>
                                    2. Konfirmasi nomor HP pelanggan</td>
                                  <td width="339">1.    Agent tidak memastikan penerima telepon sebagai penanggung jawab untuk    pembayaran fastel<br>
                                    2. Tidak konfirmasi nomor HP pelanggan</td>
                                  <td width="794">Jika    agent menghubungi nomor HP pelanggan, point 2 tidak diperlukan.<br>
                                    Tetapi jika agent menghubugi no pstn, cukup sebutkan nomor yang terdaftar.    Apabila tidak ada, agent wajib meminta nomor HP pelanggan.<br>
                                    <br>
                                    <br>
                                    Untuk penggunaan pribadi, jika terhubung ke nomor HP pelanggan yang    terdaftar di aplikasi CEM 3, SRAS, Inbound form webcare tidak perlu    Memastikan penerima telepon adalah penanggung jawab untuk pembayaran fastel    (Ketentuan ini tidak berlaku jika, 1. Saat offering ada pernyataan pelanggan    dia bukan yang bertanggung jawab, 2. Saat tanya kesediaan pelanggan    mengatakan mau konfirmasi terlebih dahulu kepihak lain)</td>
                                </tr>
                                <tr height="126">
                                  <td height="126" width="97">Penawaran</td>
                                  <td width="330">1.    Agent memperkenal/ mendefinisikan produk yang ditawarkan oleh TELKOM<br>
                                    2. Agent menginformasi&nbsp; benefit    dengan benar<br>
                                    3. Agent menginformasi&nbsp; harga dengan    benar<br>
                                    4. Agent menginformasikan ketentuan program dengan benar</td>
                                  <td width="339">1.    Agent tidak memperkenalkan/mendefinisikan produk yang    ditawarkan oleh TELKOM<br>
                                    2. Salah menginformasikan benefit<br>
                                    3. Salah menginformasikan harga<br>
                                    4. Salah menginformasikan ketentuan program</td>
                                  <td width="794">Benar    : Informasi jelas dan tidak menyesatkan pelanggan<br>
                                      <br>
                                    &nbsp;Jika ada pernyataan dari pelanggan,    sudah tua, dalam kondisi diperjalanan, berkendara, melakukan aktifitas lain,    terburu-buru, komunikasi tidak jelas (kemerosok, putus-putus, hilang sinyal)    atau hal lain yang dapat menyebabkan pelanggan tidak fokus, agent wajib    menanyakan kesediaan pelanggan untuk melanjutkan penawaran atau ditawarkan    untuk dihubungi kembali.</td>
                                </tr>
                                <tr height="84">
                                  <td height="84" width="97">Pernyataan Kesediaan</td>
                                  <td width="330">1.    Pelanggan menyatakan kesediaan dengan mengatakan iya (atau kata lain yang    mengandung arti yang sama)<br>
                                    2. Pelanggan sadar</td>
                                  <td width="339">1.    Jawaban pelanggan untuk kesediaan bukan &quot;iya&quot; (terkesan ragu- ragu:    ehhmm, he eh dll)<br>
                                    2. Pelanggan tidak sadar</td>
                                  <td width="794">Pelanggan    sadar : Ada pertanyaan dari pelanggan, apabila tidak ada agent bisa    mengarahkan pelanggan untuk mejawab 'BERSEDIA' saat ditanyakan kesediaan    (untuk menggantikan kata iya)</td>
                                </tr>
                              </table>
						      <p><img src="../agency/img/p3k2.jpeg" width="656" height="346"></p>
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