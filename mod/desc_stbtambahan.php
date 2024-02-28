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
						      <h5>Deskripsi  : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_stbtambahan.php">STB Tambahan</a></h5>
						      <p><a href="desc_minipack.php">Minipack</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a> | <a href="desc_homewifi.php">Homewifi</a> | <a href="desc_netflix2.php">Netflix</a> | <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_smooa.php">SMOOA</a> | <a href="desc_vidio.php">VIDIO EPL</a> | <a href="desc_all.php">All</a></p>
						      <p>&nbsp;</p>
						      <table width="1096" border="1">
						        <tr height="24">
                                  <td width="254" height="24"><div align="center"><strong>DESKRIPSI    PRODUK</strong></div></td>
						          <td width="334"><div align="center"><strong>KEUNGGULAN</strong></div></td>
						          <td width="334"><div align="center"><strong>BENEFIT PRODUK</strong></div></td>
						          <td width="146"><div align="center"><strong>KETENTUAN</strong></div></td>
					            </tr>
						        <tr height="42">
                                  <td rowspan="18" height="798">Mau nonton tayangan IndiHome TV    di TV yang berbeda dalam waktu bersamaan tanpa pemasangan kabel tambahan yang    dapat mengganggu keindahan rumah Anda? Kini hadir, bundling penyewaan Hybrid    Box (STB) Tambahan dan PLC untuk menjawab permasalahan Anda!<br />
                                      <br />
                                    Hybrid Box (STB) Tambahan dapat membantu Anda menonton tayangan IndiHome TV    di TV yang berbeda dalam waktu bersamaan. Pemasangannya didukung dengan    perangkat PLC, yaitu alat yang digunakan untuk mengurangi pemasangan kabel    yang dapat mengganggu keindahan rumah. Hybrid Box (STB) Tambahan memberikan    Anda pengalaman menggunakan Smart TV bahkan pada TV biasa sekalipun. Browsing    internet, mengakses aplikasi dan streaming YouTube dengan mudah hanya melalui    layar TV Anda.</td>
						          <td>Hybrid    Box IndiHome memiliki tampilan gambar pada layar lebih jernih dan jelas</td>
						          <td>Mempermudah    dalam hal pemasangan tanpa harus datang ke kantor telkom</td>
						          <td>Untuk    pelanggan yang memiliki 2 televisi atau lebih</td>
					            </tr>
						        <tr height="21">
                                  <td height="21">Mempunyai kemampuan untuk memutar konten video    dengan resolusi HD dan 4K</td>
						          <td>Berlangganan    praktis dan tidak ribet</td>
						          <td>Dilengkapi    kabel RCA untuk pengguna TV tabung</td>
					            </tr>
						        <tr height="42">
                                  <td height="42">Memiliki fitur layaknya perangkat Android    dengan dukungan aplikasi yang beragam (browsing, streaming)</td>
						          <td>Cara    pemasangan mudah dan tidak ribet.</td>
						          <td>Tidak    bisa ke TV hitam putih</td>
					            </tr>
						        <tr height="84">
                                  <td height="84">Memiliki external storage yang dapat ditambah    dengan koneksi USB dan micro SD</td>
						          <td>Tidak    memerlukan tambahan kabel dan tanpa melubangi tembok dan/atau langit-langit    rumah</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="21">
                                  <td height="21">Port USB bisa digunakan untuk hal lain seperti    external IP Camera</td>
						          <td>Kenyamanan    akses di tiap sudut rumah&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="42">
                                  <td height="42">Memiliki layanan OTT yang memberikan kemampuan    bagi pelanggan untuk mengakses ribuan konten video</td>
						          <td>Tidak    perlu membeli perangkat baru, karena hanya membutuhkan instalasi listrik    rumah 1 fasa</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="42">
                                  <td height="42">&nbsp;</td>
						          <td>Nonton    youtube langsung di TV, nggak ada lagi nonton di handphone yang bikin mata    perih.</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="84">
                                  <td height="84">TV on Demand merupakan layanan yang dapat    digunakan untuk menayangkan ulang acara-acara live TV tertentu dengan rentang    waktu 7 (tujuh) hari ke belakang. Misalnya, Anda dapat menyaksikan kembali    pertandingan sepak bola tim favorit Anda yang pertandingannya terlewat    beberapa hari</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="126">
                                  <td height="126">Video-on-demand (disingkat VOD), Fitur yang    memungkinkan Pelanggan untuk dapat memilih sendiri (on demand) film dan    series pilihan yang disediakan di waktu yang diinginkan.<br />
                                    Pilihan:<br />
                                    1. iflix (gratis)<br />
                                    2. catchplay (berbayar)<br /></td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="84">
                                  <td height="84">Video Recorder pada Usee TV merupakan layanan    penyimpanan yang disediakan oleh UseeTV dan dapat Anda gunakan untuk    menyimpan program pilihan dari berbagai channel yang tersedia. Selain itu,    Anda juga dapat merekam video/program TV yang sedang tayang maupun yang akan    tayang.&nbsp;</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="21">
                                  <td height="21">Karaoke, Nikmati konten karaoke menarik untuk    si kecil di menu Karaoke On Demand</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="21">
                                  <td height="21">Fitur Playback, Anda bisa menonton ulang acara    TV kesukaan hingga 7 hari</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="42">
                                  <td height="42">Bisa pause, tekan Pause pada remote control    untuk menghentikan tayangan dan jika Anda siap untuk kembali menonton, tekan    Play</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="42">
                                  <td height="42">Untuk menonton kembali dan menonton momen awal    program, tekan Rewind. Ketika Anda mencapai titik yang ingin Anda tonton,    tekan Play.</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="21">
                                  <td height="21">Memiliki fitur layaknya perangkat Android    dengan dukungan aplikasi yang beragam</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="21">
                                  <td height="21">Memiliki external storage yang dapat ditambah    dengan koneksi USB dan micro SD</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="21">
                                  <td height="21">Port USB bisa digunakan untuk hal lain seperti    external IP Camera</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
						        <tr height="21">
                                  <td height="21">Akses Foto dan Video via Home Media</td>
						          <td>&nbsp;</td>
						          <td>&nbsp;</td>
					            </tr>
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