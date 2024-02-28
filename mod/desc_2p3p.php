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
						      <p>Deskripsi  : <a href="desc_2p3p.php">2P-3P</a></p>
						      <p><a href="desc_stbtambahan.php">STB Tambahan</a> | <a href="desc_minipack.php">Minipack</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a> | <a href="desc_homewifi.php">Homewifi</a></p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
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
                                  <td rowspan="14" height="651" width="360">Program penambahan layanan&nbsp; tv interaktif, yang memberikan    tayangan&nbsp; berkualitas dan memberikan    berbagai macam fitur yang tidak ada di penyedia layanan lainnya</td>
                                  <td width="615">Menggunakan    STB Hybrid</td>
                                  <td width="380">Mempermudah    dalam hal pemasangan tanpa harus datang ke kantor telkom</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Output resolusi layar yang jernih dengan    pilihan HD</td>
                                  <td width="380">Berlangganan    praktis dan tidak ribet</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Merasakan pengalaman Smart TV bahkan pada TV    biasa</td>
                                  <td width="380">Pembayaran    sekaligus digabungkan dengan billing Telkom</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="615">Useetv juga dapat di nikmati oleh berbagai    perangkat lainya (Monitor atau infokus di dukung kabel HDMI), dan dapat di    bagi menjadi beberapa tv</td>
                                  <td width="380">Nonton    youtube langsung di TV, nggak ada lagi nonton di handphone yang bikin mata    perih.</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="63">
                                  <td height="63" width="615">UseeTV menggunakan teknologi adaptive streaming    yang memungkinkan layanan UseeTV tetap jalan pada kecepatan internet minimum    yang didapat. Kualitas gambar video disesuaikan dengan kecepatan internet    yang diperoleh</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="84">
                                  <td height="84" width="615">TV on Demand merupakan layanan yang dapat    digunakan untuk menayangkan ulang acara-acara live TV tertentu dengan rentang    waktu 7 (tujuh) hari ke belakang. Misalnya, Anda dapat menyaksikan kembali    pertandingan sepak bola tim favorit Anda yang pertandingannya terlewat    beberapa hari</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="126">
                                  <td height="126" width="615">Video-on-demand (disingkat VOD), Fitur yang    memungkinkan Pelanggan untuk dapat memilih sendiri (on demand) film dan    series pilihan yang disediakan di waktu yang diinginkan.<br>
                                    Pilihan:<br>
                                    1. iflix (gratis)<br>
                                    2. catchplay (berbayar)<br></td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="84">
                                  <td height="84" width="615">Video Recorder pada Usee TV merupakan layanan    penyimpanan yang disediakan oleh UseeTV dan dapat Anda gunakan untuk    menyimpan program pilihan dari berbagai channel yang tersedia. Selain itu,    Anda juga dapat merekam video/program TV yang sedang tayang maupun yang akan    tayang.&nbsp;</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Karaoke, Nikmati konten karaoke menarik untuk    si kecil di menu Karaoke On Demand</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Fitur Playback, Anda bisa menonton ulang acara    TV kesukaan hingga 7 hari</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="615">Bisa pause, tekan Pause pada remote control    untuk menghentikan tayangan dan jika Anda siap untuk kembali menonton, tekan    Play</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="615">Untuk menonton kembali dan menonton momen awal    program, tekan Rewind. Ketika Anda mencapai titik yang ingin Anda tonton,    tekan Play.</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Bisa Browsing Internet</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="615">Bisa Streaming YouTube</td>
                                  <td width="380">&nbsp;</td>
                                  <td width="105">&nbsp;</td>
                                </tr>
                              </table>
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