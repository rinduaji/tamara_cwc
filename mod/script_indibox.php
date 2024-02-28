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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a>  <a href="desc_tdkditawarkan.php">  | <a href="fup.php">FUP</a></a> | <a href="promo.php">Promo Indihome TV</a> | <a href="script_terima_ggn.php">Script Terima Komplain Gangguan </a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>Script Penawaran : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php">Indibox</a></p>
						      <p><a href="script_minipack.php">Minipack</a> | <a href="script_stbtambahan.php">STB Tambahan</a> | <a href="script_upgrade.php">Upgrade</a> | <a href="script_homewifi.php">Homewifi</a> | <a href="script_tambahan.php">Script Tambahan</a> | <a href="script_smooa.php">SMOOA</a><a href="ref_downgrade.php"></a> | <a href="script_video.php">OTT_Video</a> | <a href="script_catchplay.php">Catchplay</a> | <a href="script_FMC.php">FMC</a> | <a href="script_arpu.php">UPGRADE LOW ARPU 100K</a> | <a href="script_netflix.php">NETFLIX</a> | <a href="script_mola.php">MOLA</a> | <a href="script_2p-3p.php">2P - 3P</a> | <a href="script_all.php">All</a></p>
						      <p>&nbsp;</p>
						      <table border="4" cellpadding="0" cellspacing="0">
                                <col width="246">
                                <col width="854">
                                <tr height="28">
                                  <td height="28" width="246"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="854"><div align="center"><strong>SCRIPT</strong></div></td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="246">GREATING</td>
                                  <td width="854">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="19">
                                  <td height="19" width="246">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="854">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="246">APRESIASI</td>
                                  <td width="854">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                    Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa    menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="246">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="854">Dengan    kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau    belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="470">
                                  <td height="470" width="246">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="854">Dan    saat ini telkom memiliki program yang sangat menarik untuk bapak/ ibu dan    keluarga untuk mengisi keseharian dirumah, boleh minta waktunya    sebentar?<br>
                                    Telkom memiliki IndiBox, yaitu perangkat seperti STB yang dapat memberikan    pengalaman seru di layar lebar / TV.<br>
                                    Dengan perangkat Indibox ini, bapak/ibu bisa menikmati:<br>
                                    - Berbagai film dan serial yang telah kami sediakan secara gratis, mulai    dari film hollywood, India, Korea, termasuk film anak-anak dengan kualitas HD    lengkap dengan subtitle indonesia nya<br>
                                    - Akses ke siaran TV lokal dan internasional melalui aplikasi UseeTV    Go<br>
                                    - Akses Youtube di TV<br>
                                    - Akses ke ribuan aplikasi dan game yang dapat dimainkan langsung di TV,    dll<br>
                                    <br>
                                    Jika Bapak / Ibu berkenan, perangkat Indibox akan dikirimkan menggunakan    kurir partner kami dan juga pemasangannya bisa dilakukan oleh Bapak/Ibu    secara langsung (jelaskan apabila pelanggan menanyakan), akan ada manual book    cara pemasangan Indibox didalam box yang dikirimkan. <br>
                                    <br>
                                    Dan yang paling menarik adalah harga penawaran yang kami tawarkan sangat    ekonomis, yaitu hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/    Ibu sekarang plus PPN 11%<br>
                                    Pemasangannya sangat mudah Play n Plug, saat kabel terpasang otomatis    indibox sudah dapat digunakan. Perangkat yang akan di dapatkan pelanggan :    STB Indibox, Remote, kabel HDMI, kabel power, kabel LAN dan manual    book.<br>
                                    Ada 3 kabel yang diberikan, satu kabel HDMI : digunakan untuk menghubungkan    Indibox dan TV, satu kabel LAN dan satu kabel Power</td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="246">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="854">&nbsp;Memastikan pemahaman pelanggan    terhadap<br>
                                    penawaran yang dilakukan<br>
                                    Script:<br>
                                    &nbsp;Untuk benefit    produk dan tarif yang saya tawarkan<br>
                                    apakah sudah cukup jelas?<br>
                                    <br>                                  </td>
                                </tr>
                                <tr height="238">
                                  <td height="238" width="246">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="854">Apakah bapak/ ibu bersedia berlangganan (produk yang    ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br>
                                      <br>
                                      <br>
                                    Jika pelanggan menjawab tidak jelas (contoh: he    eh, hem)<br>
                                    Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br>
                                    Untuk pelanggan pasif, saat bertanya kesediaan    pelanggan harus digiring dengan jawaban bersedia</td>
                                </tr>
                                <tr height="146">
                                  <td height="146" width="246">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="854">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                    Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br>
                                    Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian    lainnya seperti pemekaian telepon dan fitur lainnya. Dari total pembayaran    indihome bapak/ ibu akan ditambah PPN 11%</td>
                                </tr>
                                <tr height="188">
                                  <td height="188" width="246">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="854">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
                                      <br>
                                    Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama    pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan    nama program), semoga programnya bermanfaat.<br>
                                    <br>
                                    Selalu jaga kesehatan dan ikuti himbauan pemerintah    untuk social distancing pak/ bu, semoga kita terhindar dari segala penyakit,    , selamat pagi/siang/malam pak/ bu (nama pelanggan).</td>
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