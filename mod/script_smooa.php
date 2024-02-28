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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">FUP</a> <a href="desc_tdkditawarkan.php">| Tidak Bisa dilakukan Penawaran</a>  <a href="desc_tdkditawarkan.php">| </a><a href="promo.php">Promo Indihome TV</a> | <a href="script_terima_ggn.php">Script Terima Komplain Gangguan </a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>Script Penawaran : <a href="script_smooa.php">SMOOA</a><a href="script_2p-3p.php"></a></p>
						      <p><a href="script_minipack.php">Minipack</a> | <a href="script_stbtambahan.php">STB Tambahan</a> | <a href="script_upgrade.php">Upgrade</a> | <a href="script_homewifi.php">Homewifi</a> | <a href="script_indibox.php">Indibox</a> | <a href="script_tambahan.php">Script Tambahan</a> <a href="ref_downgrade.php"></a> | <a href="script_video.php">OTT_Video</a> | <a href="script_catchplay.php">Catchplay</a> | <a href="script_FMC.php">FMC</a> | <a href="script_arpu.php">UPGRADE LOW ARPU 100K</a> | <a href="script_netflix.php">NETFLIX</a> | <a href="script_mola.php">MOLA</a> | <a href="script_2p-3p.php">2P - 3P</a> | <a href="script_all.php">All</a></p>
						      <p>&nbsp;</p>
						      <table border="4" cellpadding="0" cellspacing="0">
                                <col width="298">
                                <col width="1019">
                                <tr height="21">
                                  <td height="21" width="298"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="1019"><div align="center"><strong>SMOOA</strong></div></td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="298">GREETING</td>
                                  <td width="1019">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="298">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="1019">Benar saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no telepon xxx xxxxx</td>
                                </tr>
                                <tr height="62">
                                  <td height="62" width="298">APRESIASI</td>
                                  <td width="1019">Terima kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                      Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="298">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="1019">Dengan kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="395">
                                  <td rowspan="4" height="749" width="298">PENAWARAN<br></td>
                                  <td width="1019">Saat ini Telkom memiliki program yang sangat menarik untuk bapak/ ibu dan keluarga, boleh minta waktunya sebentar?<br>
                                  Telkom memiliki SMOOA, yaitu Paket Kuota Keluarga untuk pelanggan telkomsel, merupakan paket data, voice, dan sms kuota keluarga dari telkomsel yang bisa dinikmati dengan anggota keluarga atau teman.
                                  Dengan SMOOA, bapak/ibu bisa menikmati:<br>
                                  - Gratis nelp dan sms ke sesama anggota<br>
                                  - Paket data dengan kuota lebih besar, yang bisa dipakai semua anggota secara bersamaan<br>
                                  - Mendapatkan quota nelp dan sms ke all operator/ diluar member<br>
                                  - Memperpanjang masa aktif anggota<br>
                                    <br>
                                    
                                    Paket kuota keluarga ini berlaku secara nasional untuk semua jaringan (2G, 3G, dan 4G) dan dapat digunakan secara bersama-sama oleh  semua anggota yang terdaftar.<br>
                                    Yang paling menarik adalah harga penawaran yang kami tawarkan sangat    ekonomis, untuk 4 pilihan paket yatu,<br>
                                    <br>
                                    Yang paling menarik adalah harga penawaran yang kami tawarkan sangat ekonomis, untuk 4 pilihan paket yatu, <br>
                                    <br>
                                    Untuk paket silver 75 ribu plus PPN 11%, bapak/ ibu akan mendapatkan kuota internet 15 GB, telepon dan SMS ke sesama anggota tanpa batas jika  bapak/ ibu pelanggan prabayar, sedangkan untuk pengguna kartu halo, mendapatkan 500 menit telepon dan 500 sms untuk ke sesama anggota.<br>
                                    Benefit menarik lainnya, untuk operator lain atau diluar anggota bapak/ ibu mendapatkan 30 menit telepon dan 30 sms untuk pelanggan prabayar <br>
                                    Paket ini berlaku selama 30 hari dan akan diperpanjang secara otomatis.<br>
                                    Untuk jumlah anggota minimal 3 orang, maksimal 6 orang termasuk nomor utama<br></td>
                                </tr>
                                <tr height="104">
                                  <td height="104" width="1019">Untuk paket gold 155 ribu plus PPN 11%, bapak/ ibu akan mendapatkan kuota internet 35 GB, telepon dan SMS ke sesama anggota tanpa batas jika  bapak/ ibu pelanggan prabayar, sedangkan untuk pengguna kartu halo, mendapatkan 500 menit telepon dan 500 sms untuk ke sesama anggota.<br>
                                  Benefit menarik lainnya, untuk operator lain atau diluar anggota bapak/ ibu mendapatkan 50  menit telepon dan 50 sms. untuk pelanggan prabayar Paket ini berlaku selama 30 hari dan akan diperpanjang secara otomatis.<br>
                                  Untuk jumlah anggota minimal 3 orang, maksimal 6 orang termasuk nomor utama<br></td>
                                </tr>
                                <tr height="125">
                                  <td height="125" width="1019">Untuk paket platinum 280 ribu plus PPN 11%, bapak/ ibu akan mendapatkan kuota internet 80 GB, telepon dan SMS ke sesama anggota tanpa batas jika  bapak/ ibu pelanggan prabayar, sedangkan untuk pengguna kartu halo, mendapatkan 500 menit telepon dan 500 sms untuk ke sesama anggota.<br>
                                  Benefit menarik lainnya, untuk operator lain atau diluar anggota bapak/ ibu mendapatkan 100  menit telepon dan 100 sms. untuk pelanggan prabayar Paket ini berlaku selama 30 hari dan akan diperpanjang secara otomatis.<br>
                                    Untuk jumlah anggota minimal 3 orang, maksimal 6 orang termasuk nomor utama.<br></td>
                                </tr>
                                <tr height="125">
                                  <td height="125" width="1019">Untuk paket diamond 625 ribu plus PPN 11%, bapak/ ibu akan mendapatkan kuota internet 200 GB, telepon dan SMS ke sesama anggota tanpa batas jika  bapak/ ibu pelanggan prabayar, sedangkan untuk pengguna kartu halo, mendapatkan 500 menit telepon dan 500 sms untuk ke sesama anggota<br>
                                  Benefit menarik lainnya, untuk operator lain atau diluar anggota bapak/ ibu mendapatkan 200  menit telepon dan 200 sms untuk pelanggan prabayar Paket ini berlaku selama 30 hari dan akan diperpanjang secara otomatis.<br>
                                  Untuk jumlah anggota minimal 3 orang, maksimal 6 orang termasuk nomor utama</td>
                                </tr>
                                <tr height="146">
                                  <td height="146" width="298">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="1019">Untuk benefit produk dan tarif yang saya tawarkan apakah sudah cukup jelas?</td>
                                </tr>
                                <tr height="432">
                                  <td height="432" width="298">KESEDIAAN PELANGGAN<br></td>
                                  <td width="1019">Apakah bapak/ ibu bersedia berlangganan (produk yang ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br>
                                      <br>
                                      Untuk proses berlangganan, bisa diinformasikan nomor nomor prabayar (boleh simpati atau as) yang kita daftarkan sebagai nomor utama pak/ bu (nama pelanggan)?<br>
                                      Saya informasikan untuk persyaratan nomor yang akan menjadi member pak/ bu (nama pelanggan), <br>
                                      1. Minimal 3 nomor telkomsel (1 nomor utama dan 2 anggota), masimal 6 nomor telkomsel (1 nomor utama dan 5 anggota)<br>
                                      2. Nomor utama prabayar aktif, member anggota bisa prabayar dan kartu halo<br>
                                      3. Selama berlangganan pastikan nomor aktiv dan tidak isolir<br>
                                    <br>
                                    Notifikasi program aktif akan dikirimkan ke no hp bapak/ ibu, dan untuk melihat sisa quota, menambah dan mengurangi member Bapak/Ibu bisa dilakukan melalui  web myindihome : https://myih.telkom.co.id/<br></td>
                                </tr>
                                <tr height="198">
                                  <td height="198" width="298">KONTRAK<br></td>
                                  <td width="1019">Baik Bapak/ ibu, sebagai bukti legalitas  percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                  Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun),<br>
                                  Bapak/ ibu (nama pelanggan)  selaku penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap dengan kode area)<br>
                                  Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya berlangganan per bulan sebesar (tarif saat penawaran) rupiah. Dari total pembayaran indihome bapak/ ibu akan ditambah PPN 11%<br>
                                    <br>
                                    Biaya berlanggan smooa ini akan disatukan dengan tagihan Indihome  bapak/ibu setiap bulannya<br></td>
                                </tr>
                                <tr height="167">
                                  <td height="167" width="298">CLOSING<br></td>
                                  <td width="1019">Jika nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama pelanggan) kembali ya?<br>
                                  Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan nama program), semoga programnya bermanfaat.<br>
                                    Selalu jaga kesehatan, selamat pagi/siang/malam pak/ bu (nama pelanggan).</td>
                                </tr>
                              </table>
                  <p>&nbsp;</p>
						      <table border="4" cellpadding="0" cellspacing="0">
                                <col width="298">
                                <col width="1019">
                                <tr height="21">
                                  <td height="21" width="298"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="1019"><div align="center"><strong>SMOOA</strong></div></td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="298">GREETING</td>
                                  <td width="1019">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="298">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="1019">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="62">
                                  <td height="62" width="298">APRESIASI</td>
                                  <td width="1019">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                    Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa    menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="298">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="1019">Dengan    kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau    belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="395">
                                  <td rowspan="4" height="749" width="298">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="1019">Saat    ini Telkom memiliki program yang sangat menarik untuk bapak/ ibu dan    keluarga, boleh minta waktunya sebentar?<br>
                                    Telkom memiliki SMOOA, yaitu Paket Kuota Keluarga untuk pelanggan    telkomsel, merupakan paket data, voice, dan sms kuota keluarga dari telkomsel    yang bisa dinikmati dengan anggota keluarga atau teman.<br>
                                    Dengan SMOOA, bapak/ibu bisa menikmati:<br>
                                    - Gratis nelp dan sms ke sesama anggota<br>
                                    - Paket data dengan kuota lebih besar, yang bisa dipakai semua anggota    secara bersamaan<br>
                                    - Mendapatkan quota nelp dan sms ke all operator/ diluar member<br>
                                    - Memperpanjang masa aktif anggota<br>
                                    <br>
                                    Paket kuota keluarga ini berlaku secara nasional untuk semua jaringan (2G,    3G, dan 4G) dan dapat digunakan secara bersama-sama oleh&nbsp; semua anggota yang terdaftar.<br>
                                    <br>
                                    Yang paling menarik adalah harga penawaran yang kami tawarkan sangat    ekonomis, untuk 4 pilihan paket yatu,<br>
                                    <br>
                                    Untuk paket silver 75 ribu plus PPN 11%, bapak/ ibu akan mendapatkan kuota internet 15 GB, telepon dan    SMS ke sesama anggota tanpa batas jika&nbsp;    bapak/ ibu pelanggan prabayar, sedangkan untuk pengguna kartu halo,    mendapatkan 500 menit telepon dan 500 sms untuk ke sesama anggota.<br>
                                    Benefit menarik lainnya, untuk operator lain atau diluar anggota bapak/ ibu    mendapatkan 30 menit telepon dan 30 sms untuk    pelanggan prabayar <br>
                                    Paket ini berlaku selama 30 hari dan akan diperpanjang secara    otomatis.<br>
                                    Untuk jumlah anggota minimal 3 orang, maksimal 6 orang termasuk nomor utama</td>
                                </tr>
                                <tr height="104">
                                  <td height="104" width="1019">Untuk paket gold 155 ribu plus PPN 11%, bapak/ ibu akan    mendapatkan kuota internet 35 GB, telepon dan SMS ke sesama anggota tanpa    batas jika&nbsp; bapak/ ibu pelanggan    prabayar, sedangkan untuk pengguna kartu halo, mendapatkan 500 menit telepon    dan 500 sms untuk ke sesama anggota.<br>
                                    Benefit menarik lainnya, untuk operator lain atau diluar anggota bapak/ ibu    mendapatkan 50&nbsp; menit telepon dan 50    sms. untuk pelanggan prabayar <br>
                                    Paket ini berlaku selama 30 hari dan akan diperpanjang secara    otomatis.<br>
                                    Untuk jumlah anggota minimal 3 orang, maksimal 6 orang termasuk nomor utama</td>
                                </tr>
                                <tr height="125">
                                  <td height="125" width="1019">Untuk paket platinum 280 ribu plus PPN 11%, bapak/ ibu akan    mendapatkan kuota internet 80 GB, telepon dan SMS ke sesama anggota tanpa    batas jika&nbsp; bapak/ ibu pelanggan    prabayar, sedangkan untuk pengguna kartu halo, mendapatkan 500 menit telepon    dan 500 sms untuk ke sesama anggota.<br>
                                    Benefit menarik lainnya, untuk operator lain atau diluar anggota bapak/ ibu    mendapatkan 100&nbsp; menit telepon dan 100    sms. untuk pelanggan prabayar<br>
                                    Paket ini berlaku selama 30 hari dan akan    diperpanjang secara otomatis.<br>
                                    Untuk jumlah anggota minimal 3 orang, maksimal 6 orang termasuk nomor utama</td>
                                </tr>
                                <tr height="125">
                                  <td height="125" width="1019">Untuk paket diamond 625 ribu plus PPN 11%, bapak/ ibu akan    mendapatkan kuota internet 200 GB, telepon dan SMS ke sesama anggota tanpa    batas jika&nbsp; bapak/ ibu pelanggan    prabayar, sedangkan untuk pengguna kartu halo, mendapatkan 500 menit telepon    dan 500 sms untuk ke sesama anggota.<br>
                                    Benefit menarik lainnya, untuk operator lain atau diluar anggota bapak/ ibu    mendapatkan 200&nbsp; menit telepon dan 200    sms untuk pelanggan prabayar <br>
                                    Paket ini berlaku selama 30 hari dan akan diperpanjang secara    otomatis.<br>
                                    Untuk jumlah anggota minimal 3 orang, maksimal 6 orang termasuk nomor utama</td>
                                </tr>
                                <tr height="146">
                                  <td height="146" width="298">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="1019">&nbsp;Memastikan pemahaman pelanggan    terhadap<br>
                                    penawaran yang dilakukan<br>
                                    Script:<br>
                                    &nbsp;Untuk benefit    produk dan tarif yang saya tawarkan<br>
                                    apakah sudah cukup jelas?<br>
                                    <br>                                  </td>
                                </tr>
                                <tr height="432">
                                  <td height="432" width="298">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="1019">Apakah bapak/ ibu bersedia berlangganan (produk yang    ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br>
                                      <br>
                                    Untuk proses berlangganan, bisa diinformasikan nomor nomor prabayar (boleh    simpati atau as) yang kita daftarkan sebagai nomor utama pak/ bu (nama    pelanggan)?<br>
                                    Saya informasikan untuk persyaratan nomor yang akan menjadi member pak/ bu    (nama pelanggan), <br>
                                    1. Minimal 3 nomor telkomsel (1 nomor utama dan 2 anggota), masimal 6 nomor    telkomsel (1 nomor utama dan 5 anggota)<br>
                                    2. Nomor utama prabayar aktif, member anggota bisa prabayar dan kartu    halo<br>
                                    3. Selama berlangganan pastikan nomor aktiv dan tidak isolir<br>
                                    <br>
                                    Notifikasi program aktif akan dikirimkan ke no    hp bapak/ ibu, dan untuk melihat sisa quota, menambah dan mengurangi member    Bapak/Ibu bisa dilakukan melalui&nbsp; web    myindihome : https://myih.telkom.co.id/<br>                                  </td>
                                </tr>
                                <tr height="198">
                                  <td height="198" width="298">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="1019">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                    Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br>
                                    Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran) rupiah. Dari total    pembayaran indihome bapak/ ibu akan ditambah PPN 11%<br>
                                    <br>
                                    Biaya berlanggan smooa ini akan disatukan dengan    tagihan Indihome&nbsp; bapak/ibu setiap    bulannya<br>
                                    <br>
                                    Program ini tidak untuk diperjualbelikan ya pak/ bu (nama pelanggan)</td>
                                </tr>
                                <tr height="167">
                                  <td height="167" width="298">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="1019">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
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