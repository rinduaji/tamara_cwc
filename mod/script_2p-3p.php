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
						      <p>Script Penawaran : <a href="script_2p-3p.php">2P - 3P</a></p>
						      <p><a href="script_minipack.php">Minipack</a> | <a href="script_stbtambahan.php">STB Tambahan</a> | <a href="script_upgrade.php">Upgrade</a> | <a href="script_homewifi.php">Homewifi</a> | <a href="script_indibox.php">Indibox</a> | <a href="script_tambahan.php">Script Tambahan</a> | <a href="script_smooa.php">SMOOA</a><a href="ref_downgrade.php"></a> | <a href="script_video.php">OTT_Video</a> | <a href="script_catchplay.php">Catchplay</a> | <a href="script_FMC.php">FMC</a> | <a href="script_arpu.php">UPGRADE LOW ARPU 100K</a> | <a href="script_netflix.php">NETFLIX</a> | <a href="script_mola.php">MOLA</a> | <a href="script_all.php">All</a></p>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="322">
                                <col width="849">
                                <tr height="18">
                                  <td height="18" width="322"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="849"><div align="center"><strong>SCRIPT</strong> <strong>2P - 3P</strong></div></td>
                                </tr>
                                <tr height="37">
                                  <td height="37" width="322">GREATING</td>
                                  <td width="849">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="18">
                                  <td height="18" width="322">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="849">Benar saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no telepon xxx xxxxx</td>
                                </tr>
                                <tr height="55">
                                  <td height="55" width="322">APRESIASI</td>
                                  <td width="849">Terima kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom selama (sebutkan lama berlangganan) tahun<br>
                                      <br><br>
                                      Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="302">
                                  <td height="302" width="322">PENAWARAN<br></td>
                                  <td width="849">Dan saat ini telkom memiliki program yang sangat menarik untuk bapak/ ibu dan keluarga untuk mengisi keseharian dirumah, boleh minta waktunya sebentar?<br>
                                  Telkom memiliki program penambahan layanan  tv interaktif  yaitu  USSE TV <br>
                                  Dengan penawaran ini, bapak/ ibu akan mendapatkan tayangan berkualitas yang memiliki (sebutkan jumlah channelnya) channel, dengan berbagai macam fitur yang tidak dimiliki oleh penyedia lain, seperti:<br>
                                  - Layanan TV on Demand, dimana  bapak/ ibu dapat memutar acara yang telah tayang 7 hari yang lalu.<br>
                                  - Pause and rewind , dimana  bapak/ ibu dapat menghentikan dan melanjutkan kembali acara yang sedang berjalan, baik acara tersebut live.<br>
                                  - Karaoke on Demand , funtuk memutar lagu yang berisi teks lirik lagu tersebut dan berkaraoke ria.<br>
                                  - Video recorder , dimana bapak/ ibu dapat menyimpan berbagai program pilihan dari semua channel yang ada<br>
                                  - Dan yang paling menarik adalah harga penawaran yang kami tawarkan sangat ekonomis, hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/ Ibu sekarang plus PPN 11%<br>
                                   </td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="322">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="849">Untuk benefit produk dan tarif yang saya tawarkan apakah sudah cukup jelas?<br></td>
                                </tr>
                                <tr height="110">
                                  <td height="110" width="322">KESEDIAAN PELANGGAN<br></td>
                                  <td width="849">Apakah bapak/ ibu bersedia berlangganan (produk yang ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br></td>
                                </tr>
                                <tr height="106">
                                  <td height="106" width="322">KONTRAK<br></td>
                                  <td width="849">Baik Bapak/ ibu, sebagai bukti legalitas  percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                  Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                  Bapak/ ibu (nama pelanggan)  selaku penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap dengan kode area)<br>
                                  Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian lainnya seperti pemekaian telepon dan fitur lainnya.<br></td>
                                </tr>
                                <tr height="148">
                                  <td height="148" width="322">CLOSING<br></td>
                                  <td width="849">Jika nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama pelanggan) kembali ya?<br>
                                  Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan nama program), semoga programnya bermanfaat.<br>
                                    Selalu jaga kesehatan, selamat pagi/siang/malam pak/ bu (nama pelanggan).<br></tr>
                              </table>
                  <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="322">
                                <col width="849">
                                <tr height="18">
                                  <td height="18" width="322"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="849"><div align="center"><strong>SCRIPT</strong> <strong>2P - 3P + big combo</strong></div></td>
                                </tr>
                                <tr height="37">
                                  <td height="37" width="322">GREATING</td>
                                  <td width="849">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="18">
                                  <td height="18" width="322">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="849">Benar saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no telepon xxx xxxxx</td>
                                </tr>
                                <tr height="55">
                                  <td height="55" width="322">APRESIASI</td>
                                  <td width="849">Terima kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom selama (sebutkan lama berlangganan) tahun<br>
                                      <br><br>
                                      Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="302">
                                  <td height="302" width="322">PENAWARAN<br></td>
                                  <td width="849">Dan saat ini telkom memiliki program yang sangat menarik untuk bapak/ ibu dan keluarga untuk mengisi keseharian dirumah, boleh minta waktunya sebentar?<br>
                                  Saat ini Indihome memberikan kemudahan untuk menikmati tayangan TV interaktif, melalui paket bundling indihome TV dan minipack big combo.<br>
                                  Dengan paket bundling ini, bapak/ ibu akan mendapatkan tayangan berkualitas dan bisa menikmati hampir semua jenis channel, mulai dari berita dalam negeri dan luar negeri, sport, entertainment dan movie.<br>
                                  Paket ini sangat cocok untuk bapak/ ibu yang memiliki anggota keluarga yang punya hobi channel yang berbeda- beda.<br>
                                  Indihome TV juga memiliki berbagai macam fitur yang tidak dimiliki oleh penyedia lain.<br>
                                  - Layanan TV on Demand, dimana  bapak/ ibu dapat memutar acara yang telah tayang 7 hari yang lalu.<br>
                                  - Pause and rewind , dimana  bapak/ ibu dapat menghentikan dan melanjutkan kembali acara yang sedang berjalan, baik acara tersebut live.<br>
                                  - Karaoke on Demand , funtuk memutar lagu yang berisi teks lirik lagu tersebut dan berkaraoke ria.<br>
                                  - Video recorder , dimana bapak/ ibu dapat menyimpan berbagai program pilihan dari semua channel yang ada<br>
                                  <br><br>
                                  Yang paling menarik, harga yang kami tawarkan sangat ekonomis, hanya dengan penambahan (sesuai penawaran) ribu per bulan dari tagihan bapak/ Ibu sekarang plus PPN 11%
Dan khusus penawaran hari ini jika bapak/ ibu bersedia berlangganan, kami berikan tarif promo di 3 bulan pertama, hanya dengan penambahan (sesuai penawaran) ribu per bulan dari tagihan bapak/ ibu sekarang plus PPN 11%<br>  
                                </td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="322">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="849">Untuk benefit produk dan tarif yang saya tawarkan apakah sudah cukup jelas?<br></td>
                                </tr>
                                <tr height="110">
                                  <td height="110" width="322">KESEDIAAN PELANGGAN<br></td>
                                  <td width="849">Apakah bapak/ ibu bersedia berlangganan (produk yang ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br></td>
                                </tr>
                                <tr height="106">
                                  <td height="106" width="322">KONTRAK<br></td>
                                  <td width="849">Baik Bapak/ ibu, sebagai bukti legalitas  percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                  Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                  Bapak/ ibu (nama pelanggan)  selaku penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap dengan kode area)<br>
                                  Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian lainnya seperti pemekaian telepon dan fitur lainnya.<br></td>
                                </tr>
                                <tr height="148">
                                  <td height="148" width="322">CLOSING<br></td>
                                  <td width="849">Jika nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama pelanggan) kembali ya?<br>
                                  Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan nama program), semoga programnya bermanfaat.<br>
                                    Selalu jaga kesehatan, selamat pagi/siang/malam pak/ bu (nama pelanggan).<br></tr>
                              </table>
                  <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="322">
                                <col width="849">
                                <tr height="18">
                                  <td height="18" width="322"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="849"><div align="center"><strong>SCRIPT</strong> <strong>2P - 3P + big combo</strong></div></td>
                                </tr>
                                <tr height="37">
                                  <td height="37" width="322">GREATING</td>
                                  <td width="849">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="18">
                                  <td height="18" width="322">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="849">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="55">
                                  <td height="55" width="322">APRESIASI</td>
                                  <td width="849">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                    Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa    menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="37">
                                  <td height="37" width="322">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="849">Dengan    kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau    belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="302">
                                  <td height="302" width="322">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="849">Dan    saat ini telkom memiliki program yang sangat menarik untuk bapak/ ibu dan    keluarga untuk mengisi keseharian dirumah, boleh minta waktunya    sebentar?<br>
                                    Saat ini Indihome memberikan kemudahan untuk menikmati tayangan TV    interaktif, melalui paket bundling indihome TV dan minipack big combo.<br>
                                    Dengan paket bundling ini, bapak/ ibu akan mendapatkan tayangan berkualitas    dan bisa menikmati hampir semua jenis channel, mulai dari berita dalam negeri    dan luar negeri, sport, entertainment dan movie.<br>
                                    Indihome TV juga memiliki berbagai macam fitur yang tidak dimiliki oleh    penyedia lain.<br>
                                    - Layanan TV on Demand, dimana&nbsp;    bapak/ ibu dapat memutar acara yang telah tayang 7 hari yang    lalu.<br>
                                    - Pause and rewind , dimana&nbsp; bapak/    ibu dapat menghentikan dan melanjutkan kembali acara yang sedang berjalan,    baik acara tersebut live.<br>
                                    - Karaoke on Demand , funtuk memutar lagu yang berisi teks lirik lagu    tersebut dan berkaraoke ria.<br>
                                    - Video recorder , dimana bapak/ ibu dapat menyimpan berbagai program    pilihan dari semua channel yang ada<br>
                                    <br>
                                    Yang paling menarik, harga yang kami tawarkan sangat ekonomis, hanya dengan    penambahan (sesuai penawaran) ribu per bulan dari tagihan bapak/ Ibu sekarang    plus PPN 11%<br>
                                    Dan khusus penawaran hari ini jika bapak/ ibu bersedia berlangganan, kami    berikan tarif promo di 3 bulan pertama, hanya dengan penambahan (sesuai    penawaran) ribu per bulan dari tagihan bapak/ ibu sekarang plus PPN 11%</td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="322">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="849">&nbsp;Memastikan pemahaman pelanggan    terhadap<br>
                                    penawaran yang dilakukan<br>
                                    Script:<br>
                                    &nbsp;Untuk benefit    produk dan tarif yang saya tawarkan<br>
                                    apakah sudah cukup jelas?<br>
                                    <br>                                  </td>
                                </tr>
                                <tr height="110">
                                  <td height="110" width="322">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="849">Apakah bapak/ ibu bersedia berlangganan (produk yang    ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br>
                                      <br>
                                      <br>
                                    Jika pelanggan menjawab tidak jelas (contoh: he    eh, hem)<br>
                                    Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br>
                                    Untuk pelanggan pasif, saat bertanya kesediaan    pelanggan harus digiring dengan jawaban bersedia</td>
                                </tr>
                                <tr height="106">
                                  <td height="106" width="322">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="849">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), Bapak/ ibu    (nama pelanggan)&nbsp; selaku penanggung    jawab nomor telepon (sebutkan nomor Indihome pelanggan), Telah setuju untuk    berlangganan Paket bundling indihome TV dan minipack Big Combo dengan    penambahan biaya berlangganan per bulan sebesar (sesuai penawaran) ribu    rupiah per bulan plus PPN 11% diluar pemakaian lainnya seperti pemakaian    telepon dan fitur lainnya.&nbsp; <br>
                                    Untuk 3 bulan pertama kami berikan tarif promo, penambahan (sesuai    penawaran) ribu per bulan dari tagihan bapak/ ibu sekarang plus PPN 11%</td>
                                </tr>
                                <tr height="148">
                                  <td height="148" width="322">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="849">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
                                      <br>
                                    Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama    pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan    nama program), semoga programnya bermanfaat.<br>
                                    <br>
                                    Selalu jaga kesehatan dan ikuti himbauan pemerintah    untuk social distancing pak/ bu, semoga kita terhindar dari segala penyakit,    , selamat pagi/siang/malam pak/ bu (nama pelanggan).</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="466">
                                <col width="730">
                                <tr height="28">
                                  <td height="28" width="466"><div align="center">FLOW</div></td>
                                  <td width="730"><div align="center">SCRIPT 2P3P    BUNDLING DISNEY + HOSTAR</div></td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="466">GREATING</td>
                                  <td width="730">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="230">
                                  <td height="230" width="466">KONFIRMASI NO FASTEL DAN PJ<br>
                                      <br>
                                    Hindari penggunaan kata bertanggung jawab (membuat pelanggan tidak    nyaman)<br>
                                    <br>
                                    Mengaku bertanggung jawab tetapi bukan atas nama verified:<br>
                                    a. Harus melakukan verifikasi mengenai tempat pembayaran atau jumlah    tagihan terakhir (dijawab dengan&nbsp; benar    sesuai yang tertera di aplikasi)<br>
                                    b. Memastikan kembali, &quot;bpk/ibu (sebutkan nama penerima tlpn), untuk    persetujuan penawaran ini, apakah kami perlu menghubungi yang lain? (misal:    pimpinan, Orang tua, Suami atau Istri dsb, jika iya, minta nomor    kontaknya&quot;</td>
                                  <td width="730">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="466">APRESIASI</td>
                                  <td width="730">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="466">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="730">Dengan    kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau    belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="493">
                                  <td height="493" width="466">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="730">Saat    ini telkom memiliki program yang sangat menarik kepada bapak/ ibu dan    keluarga untuk mengisi keseharian dirumah, boleh minta waktunya    sebentar?<br>
                                    Telkom memiliki program penambahan layanan&nbsp;    tv interaktif&nbsp; yaitu&nbsp; Indihome TV<br>
                                    Dengan penawaran ini, bapak/ ibu akan mendapatkan tayangan berkualitas yang    memiliki 36 channel, mulai dari tayangan lokal, movies, inhouse, kids, religi,    lifestyle, gent ent dan sports<br>
                                    Indihome TV juga memiliki berbagai macam fitur yang tidak dimiliki oleh    penyedia TV interaktif lain, seperti:<br>
                                    - Layanan TV on Demand, dimana&nbsp;    bapak/ ibu dapat memutar acara yang telah tayang 7 hari yang    lalu.<br>
                                    - Pause and rewind , dimana&nbsp; bapak/    ibu dapat menghentikan dan melanjutkan kembali acara yang sedang berjalan,    baik acara tersebut live.<br>
                                    - Karaoke on Demand , untuk memutar lagu yang berisi teks lirik lagu    tersebut dan berkaraoke ria.<br>
                                    - Video recorder , dimana bapak/ ibu dapat menyimpan berbagai program    pilihan dari semua channel yang ada<br>
                                    - Harga penawaran yang kami tawarkan sangat ekonomis, hanya dengan    penambahan (sebutkan tarif) dari tagihan bapak/ Ibu sekarang plus PPN    11%<br>
                                    <br>
                                    Yang paling menarik, jika bersedia berlangganan hari ini, bapak/ ibu bebas    akses aplikasi terlengkap dengan konten beragam yaitu Disney+ Hotstar.    Bapak/ibu bisa&nbsp; menikmati koleksi    film-film produksi Disney, Marvel, Pixar, Lucas Films (Star Wars), 20th    Century Fox sampai National Geographic, film blockbuster Hollywood, berbagai    konten dari judul box office Indonesia, dan drama hingga film korea.<br>
                                    <br>
                                    Saat pemasangan perangkat, bapak/ ibu juga tidak perlu khawatir karena    tenisi kami akan mengikuti protokol kesehatan covid 19&nbsp; (Teknisi yang datang sudah lulus screening    suhu dan menggunakan masker)</td>
                                </tr>
                                <tr height="19">
                                  <td height="19" width="466">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="730">Untuk    (sebutkan nama program) yang saya tawarkan, silahkan jika ada yang ingin    ditanyakan pak/ bu (nama pelangga)?</td>
                                </tr>
                                <tr height="307">
                                  <td height="307" width="466">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="730">Bagaimana    pak/ bu (nama pelanggan), apakah bapak/ibu bersedia untuk berlangganan    Program (sebut nama program yang ditawarakan)?<br>
                                    Untuk proses pemasangan, bapak/ ibu akan dihubungi kembali maksimal 1-3    hari kedepan oleh teknisi kami.<br>
                                    <br>
                                    Jika pelanggan menjawab tidak jelas (contoh: he eh, hem)<br>
                                    Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br>
                                    Untuk pelanggan pasif, saat bertanya kesediaan pelanggan harus digiring    dengan jawaban bersedia<br>
                                    <br>
                                    Sebagai syarat berlangganan Bapak/ ibu harus memiliki    akun myIndiHome yang telah terdaftar dengan nomor (sebutkan nomor indihome    pelanggan) dan Saat login pertama kali di Disney+ Hotstar, bapak/ ibu perlu    membuat akun Disney+ Hotstar<br>
                                    <br>
                                    Untuk dapat menonton berbagai tayangan di Disney+ Hotstar, Anda dapat    mengunduh aplikasi Disney+ Hotstar melalui IndiHome Apps Store pada STB    IndiHome TV Anda dan untuk perangkat telepon selular atau tablet bisa melalui    Play Store (Android), App Store (iOS) atau di perangkat yang mendukung dan    masuk menggunakan nomor seluler Anda yang terdaftar di IndiHome</td>
                                </tr>
                                <tr height="134">
                                  <td height="134" width="466">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="730">&nbsp;Baik Bapak/ ibu, sebagai bukti    legalitas&nbsp; percakapan ini direkam oleh    Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun),<br>
                                    Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br>
                                    Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian    lainnya seperti pemekaian telepon dan fitur lainnya. Dari total pembayaran    indihome bapak/ ibu akan ditambah PPN 11%</td>
                                </tr>
                                <tr height="174">
                                  <td height="174" width="466">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="730">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
                                      <br>
                                    Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama    pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan    nama program), semoga programnya bermanfaat.<br>
                                    <br>
                                    Selalu jaga kesehatan dan ikuti himbauan pemerintah untuk social distancing    pak/ bu, semoga kita terhindar dari segala penyakit, , selamat    pagi/siang/malam pak/ bu (nama pelanggan).</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
					          <table border="3" cellpadding="0" cellspacing="0">
                                <col width="322">
                                <col width="849">
                                <tr height="18">
                                  <td height="18" width="322"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="849"><div align="center"><strong>SCRIPT</strong></div></td>
                                </tr>
                                <tr height="37">
                                  <td height="37" width="322">GREATING</td>
                                  <td width="849">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="18">
                                  <td height="18" width="322">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="849">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="55">
                                  <td height="55" width="322">APRESIASI</td>
                                  <td width="849">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                    Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa    menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="37">
                                  <td height="37" width="322">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="849">Dengan    kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau    belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="258">
                                  <td height="258" width="322">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="849">Dan    saat ini telkom memiliki program yang sangat menarik untuk bapak/ ibu dan    keluarga untuk mengisi keseharian dirumah, boleh minta waktunya    sebentar?<br>
                                    Telkom memiliki program penambahan layanan&nbsp;    tv interaktif&nbsp; yaitu&nbsp; USSE TV <br>
                                    Dengan penawaran ini,    bapak/ ibu akan mendapatkan tayangan berkualitas yang memiliki (sebutkan    jumlah channelnya) channel, dengan berbagai macam fitur yang tidak dimiliki    oleh penyedia lain, seperti:<br>
                                    - Layanan TV on Demand, dimana&nbsp;    bapak/ ibu dapat memutar acara yang telah tayang 7 hari yang    lalu.<br>
                                    - Pause and rewind , dimana&nbsp; bapak/    ibu dapat menghentikan dan melanjutkan kembali acara yang sedang berjalan,    baik acara tersebut live.<br>
                                    - Karaoke on Demand , funtuk memutar lagu yang berisi teks lirik lagu    tersebut dan berkaraoke ria.<br>
                                    - Video recorder , dimana bapak/ ibu dapat menyimpan berbagai program    pilihan dari semua channel yang ada<br>
                                    - Dan yang paling menarik adalah harga penawaran yang kami tawarkan sangat    ekonomis, hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/ Ibu    sekarang plus PPN 11%<br>
                                    <br>
                                    Saat pemasangan perangkat, bapak/ ibu tidak    perlu khawatir karena tenisi kami akan mengikuti protokol kesehatan covid    1&nbsp; (Teknisi yang datang sudah lulus    screening suhu dan menggunakan masker)</td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="322">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="849">&nbsp;Memastikan pemahaman pelanggan    terhadap<br>
                                    penawaran yang dilakukan<br>
                                    Script:<br>
                                    &nbsp;Untuk benefit    produk dan tarif yang saya tawarkan<br>
                                    apakah sudah cukup jelas?<br>
                                    <br>                                  </td>
                                </tr>
                                <tr height="110">
                                  <td height="110" width="322">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="849">Apakah bapak/ ibu bersedia berlangganan (produk yang    ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br>
                                      <br>
                                      <br>
                                    Jika pelanggan menjawab tidak jelas (contoh: he    eh, hem)<br>
                                    Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br>
                                    Untuk pelanggan pasif, saat bertanya kesediaan    pelanggan harus digiring dengan jawaban bersedia</td>
                                </tr>
                                <tr height="164">
                                  <td height="164" width="322">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="849">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                    Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br>
                                    Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian    lainnya seperti pemekaian telepon dan fitur lainnya. Dari total pembayaran    indihome bapak/ ibu akan ditambah ppn 11%</td>
                                </tr>
                                <tr height="148">
                                  <td height="148" width="322">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="849">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
                                      <br>
                                    Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama    pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan    nama program), semoga programnya bermanfaat.<br>
                                    <br>
                                    Selalu jaga kesehatan dan ikuti himbauan pemerintah    untuk social distancing pak/ bu, semoga kita terhindar dari segala penyakit,    , selamat pagi/siang/malam pak/ bu (nama pelanggan).</td>
                                </tr>
                              </table>
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