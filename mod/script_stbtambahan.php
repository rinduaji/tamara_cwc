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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">FUP</a> <a href="desc_tdkditawarkan.php">| </a><a href="promo.php">Promo Indihome TV</a> | <a href="script_terima_ggn.php">Script Terima Komplain Gangguan </a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>Script Penawaran  : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php">STB Tambahan</a></p>
						      <p><a href="script_minipack.php">Minipack</a> | <a href="script_upgrade.php">Upgrade</a> | <a href="script_homewifi.php">Homewifi</a> | <a href="script_indibox.php">Indibox</a> | <a href="script_tambahan.php">Script Tambahan</a> | <a href="script_smooa.php">SMOOA</a><a href="ref_downgrade.php"></a> | <a href="script_video.php">OTT_Video</a> | <a href="script_catchplay.php">Catchplay</a> | <a href="script_FMC.php">FMC</a> | <a href="script_arpu.php">UPGRADE LOW ARPU 100K</a> | <a href="script_netflix.php">NETFLIX</a> | <a href="script_mola.php">MOLA</a> | <a href="script_2p-3p.php">2P - 3P</a> | <a href="script_all.php">All</a></p>
						      <p>&nbsp;</p>
						      <table border="4" cellpadding="0" cellspacing="0">
                                <col width="226">
                                <col width="899">
                                <tr height="18">
                                  <td height="18" width="226"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="899"><div align="center"><strong>SCRIPT (PLC)</strong></div></td>
                                </tr>
                                <tr height="37">
                                  <td height="37" width="226">GREATING</td>
                                  <td width="899">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="18">
                                  <td height="18" width="226">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="899">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="55">
                                  <td height="55" width="226">APRESIASI</td>
                                  <td width="899">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                    Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa    menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="55">
                                  <td height="55" width="226">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="899">Dengan    kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau    belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="202">
                                  <td height="202" width="226">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="899">Dan    saat ini telkom memiliki program yang sangat menarik untuk bapak/ ibu dan    keluarga untuk mengisi keseharian dirumah, boleh minta waktunya    sebentar?<br>
                                    Telkom memiliki program STB TAMBAHAN&nbsp;    menggunakan sistem Power Line Communication, dengan program ini bapak/    ibu bisa menikmati tayangan UseeTV yang beragam di televisi yang berbeda    dalam waktu yang bersamaan. Sama dengan STB bapak/ ibu yang sekarang, STB    tambahan ini juga berbasis Andsoid, jadi bapak/ ibu bisa merasakan pengalaman    menggunakan Smart TV, bisa browsing, streaming, mengakses aplikasi, ataupun    menonton YouTube<br>
                                    - Dan yang paling menarik adalah harga penawaran yang    kami tawarkan sangat ekonomis, hanya dengan penambahan 100 ribu rupiah dari    tagihan bapak/ Ibu sekarang plus PPN 11%, sudah termasuk didalamnya biaya dengan garansi alat 1    tahun.<br>
                                    <br>
                                    Saat pemasangan perangkat, bapak/ ibu tidak    perlu khawatir karena teknisi kami akan mengikuti protokol kesehatan covid 19    (Teknisi yang datang sudah lulus screening suhu dan menggunakan masker)</td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="226">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="899">&nbsp;Memastikan pemahaman pelanggan    terhadap<br>
                                    penawaran yang dilakukan<br>
                                    Script:<br>
                                    &nbsp;Untuk benefit    produk dan tarif yang saya tawarkan<br>
                                    apakah sudah cukup jelas?<br>
                                    <br>                                  </td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="226">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="899">Apakah bapak/ ibu bersedia berlangganan (produk yang    ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br>
                                    Untuk proses pemasangan, bapak/ ibu akan dihubungi kembali maksimal 3 hari    kedepan oleh teknisi kami. <br>
                                    Saat pemasangan perangkat, bapak/ ibu tidak    perlu khawatir karena tenisi kami akan mengikuti protokol kesehatan covid    1&nbsp; (Teknisi yang datang sudah lulus    screening suhu dan menggunakan masker)<br>
                                    Jika pelanggan menjawab tidak jelas (contoh: he    eh, hem)<br>
                                    Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br>
                                    Untuk pelanggan pasif, saat bertanya kesediaan    pelanggan harus digiring dengan jawaban bersedia</td>
                                </tr>
                                <tr height="98">
                                  <td height="98" width="226">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="899">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                    Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br>
                                    Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian    lainnya seperti pemekaian telepon dan fitur lainnya. Dari total pembayaran    indihome bapak/ ibu akan ditambah PPN 11%</td>
                                </tr>
                                <tr height="148">
                                  <td height="148" width="226">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="899">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
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