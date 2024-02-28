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
    <style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
    </style>
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
						      <p>Script Penawaran  : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="script_tambahan.php">Script Tambahan</a></p>
						      <p><a href="script_minipack.php">Minipack</a> | <a href="script_stbtambahan.php">STB Tambahan</a> | <a href="script_homewifi.php">Homewifi</a> | <a href="script_indibox.php">Indibox</a> | <a href="script_tambahan.php">Script Tambahan</a> | <a href="script_smooa.php">SMOOA</a><a href="ref_downgrade.php"></a> | <a href="script_video.php">OTT_Video</a> | <a href="script_catchplay.php">Catchplay</a> | <a href="script_FMC.php">FMC</a> | <a href="script_arpu.php">UPGRADE LOW ARPU 100K</a> | <a href="script_netflix.php">NETFLIX</a> | <a href="script_mola.php">MOLA</a> | <a href="script_2p-3p.php">2P - 3P</a> | <a href="script_all.php">All</a></p>
						      <p>&nbsp;</p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="219">
                                <col width="874">
                                <tr height="17">
                                  <td height="17" width="219"><div align="center" class="style1">FLOW</div></td>
                                  <td width="874"><div align="center" class="style1">SCRIPT (PLC)</div></td>
                                </tr>
                                <tr height="34">
                                  <td height="34" width="219">GREATING</td>
                                  <td width="874">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="17">
                                  <td height="17" width="219">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="874">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="51">
                                  <td height="51" width="219">APRESIASI</td>
                                  <td width="874">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                    Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa    menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="34">
                                  <td height="34" width="219">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="874">Dengan    kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau    belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="170">
                                  <td height="170" width="219">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="874">Dan    saat ini telkom memiliki program yang sangat menarik untuk bapak/ ibu dan    keluarga untuk mengisi keseharian dirumah, boleh minta waktunya    sebentar?<br>
                                    Telkom memiliki program STB TAMBAHAN&nbsp;    menggunakan sistem Power Line Communication, dengan program ini bapak/    ibu bisa menikmati tayangan UseeTV yang beragam di televisi yang berbeda    dalam waktu yang bersamaan. Sama dengan STB bapak/ ibu yang sekarang, STB    tambahan ini juga berbasis Andsoid, jadi bapak/ ibu bisa merasakan pengalaman    menggunakan Smart TV, bisa browsing, streaming, mengakses aplikasi, ataupun    menonton YouTube<br>
                                    - Dan yang paling menarik adalah harga penawaran yang    kami tawarkan sangat ekonomis, hanya dengan penambahan 100 ribu rupiah dari    tagihan bapak/ Ibu sekarang plus PPN 10%, sudah termasuk didalamnya biaya    dengan garansi alat 1 tahun.<br>
                                    <br>
                                    Saat pemasangan perangkat, bapak/ ibu tidak    perlu khawatir karena teknisi kami akan mengikuti protokol kesehatan covid 19    (Teknisi yang datang sudah lulus screening suhu dan menggunakan masker)</td>
                                </tr>
                                <tr height="34">
                                  <td height="34" width="219">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="874">Untuk    (sebutkan nama program) yang saya tawarkan, silahkan jika ada yang ingin    ditanyakan pak/ bu (nama pelangga)?</td>
                                </tr>
                                <tr height="119">
                                  <td height="119" width="219">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="874">Bagaimana    pak/ bu (nama pelanggan), apakah bapak/ibu bersedia untuk berlangganan    Program (sebut nama program yang ditawarakan)?<br>
                                    Untuk proses pemasangan, bapak/ ibu akan dihubungi kembali maksimal 3 hari    kedepan oleh teknisi kami. <br>
                                    <br>
                                    Jika pelanggan menjawab tidak jelas (contoh: he eh,    hem)<br>
                                    Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br>
                                    Untuk pelanggan pasif, saat bertanya kesediaan    pelanggan harus digiring dengan jawaban bersedia</td>
                                </tr>
                                <tr height="85">
                                  <td height="85" width="219">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="874">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                    Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br>
                                    Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian    lainnya seperti pemekaian telepon dan fitur lainnya. Dari total pembayaran    indihome bapak/ ibu akan ditambah ppn 10%</td>
                                </tr>
                                <tr height="154">
                                  <td height="154" width="219">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="874">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
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