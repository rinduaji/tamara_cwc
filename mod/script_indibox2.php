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
						      <p>Script Penawaran : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php">Indibox</a></p>
						      <p><a href="script_minipack.php">Minipack</a> | <a href="script_stbtambahan.php">STB Tambahan</a> | <a href="script_upgrade.php">Upgrade</a> | <a href="script_tambahan.php">Script Tambahan</a> | <a href="script_2p-3p.php">2P - 3P</a> | <a href="script_homewifi.php">Homewifi</a></p>
						      <p>&nbsp;</p>
						      <table width="1094" border="1">
						        <tr height="28">
                                  <td width="310" height="28"><div align="center"><strong>FLOW</strong></div></td>
						          <td width="820"><div align="center"><strong>SCRIPT</strong></div></td>
					            </tr>
						        <tr height="40">
                                  <td height="40">GREATING</td>
						          <td>Selamat    Pagi/Siang/Sore.<br />
						            Perkenalkan dengan saya (nama agent) dari Tim Sales Telkom</td>
					            </tr>
						        <tr height="20">
                                  <td height="20">KONFIRMASI NO FASTEL DAN PJ</td>
						          <td>Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
					            </tr>
						        <tr height="44">
                                  <td rowspan="2" height="64">APRESIASI<br />
                                      <br />
                                    (pilih salah satu script)</td>
						          <td>Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun</td>
					            </tr>
						        <tr height="20">
                                  <td height="20">Terima kasih pak/ bu (nama pelanggan, untuk    pembayaran indihome sudah kami terima (sebutkan tanggal pembayarannya)</td>
					            </tr>
						        <tr height="40">
                                  <td height="40">EXPERIENCE PELANGGAN</td>
						          <td>Saat    ini bapak/ibu berlangganan telpon, bagaimana penggunaan selama ini apakah    sangat membantu bapak/ibu dan anggota keluarga lainnya</td>
					            </tr>
						        <tr height="40">
                                  <td height="40">IDENTIFIKASI KEBUTUHAN</td>
						          <td>Jika    bapak/ibu membutuhkan layanan hiburan seperti film gratis, game, dan music di    TV dengan harga ekonomis, saat ini Telkom memiliki penawaran menarik. Boleh    saya jelaskan, pak/bu?</td>
					            </tr>
						        <tr height="400">
                                  <td height="400">PENAWARAN<br />
                                      <br />
                                    Point penting,<br />
                                    - Kata penawaran<br />
                                    - Nama program<br />
                                    - Kegunaan program<br />
                                    - Tarif</td>
						          <td>Saat    ini telkom memiliki layanan IndiBox, yaitu perangkat seperti STB yang dapat    memberikan pengalaman seru di layar lebar / TV, seperti yang ada pada    smartphones.<br />
						            Dengan perangkat Indibox ini, bapak/ibu bisa menikmati:<br />
						            - Berbagai film dan serial yang telah kami sediakan secara gratis, mulai    dari film hollywood, India, Korea, termasuk film anak-anak dengan kualitas HD    lengkap dengan subtitle indonesia nya<br />
						            - Akses ke siaran TV lokal dan internasional melalui aplikasi Video.com<br />
						            - Akses Youtube di TV<br />
						            - Akses ke ribuan aplikasi dan game yang dapat dimainkan langsung di TV,    dll<br />
						            <br />
						            Jika Bapak / Ibu berkenan, perangkat Indibox akan dikirimkan menggunakan    kurir partner kami dan juga pemasangannya bisa dilakukan oleh Bapak/Ibu    secara langsung (jelaskan apabila pelanggan menanyakan), akan ada manual book    cara pemasangan Indibox didalam box yang dikirimkan. <br />
						            <br />
						            Dan yang paling menarik adalah harga penawaran yang kami tawarkan sangat    ekonomis, yaitu hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/    Ibu sekarang plus PPN 10%<br />
						            Pemasangannya sangat mudah Play n Plug, saat kabel terpasang otomatis    indibox sudah dapat digunakan. Perangkat yang akan di dapatkan pelanggan :    STB Indibox, Remote, kabel HDMI, kabel power, kabel LAN dan manual    book.<br />
						            Ada 3 kabel yang diberikan, satu kabel power : digunakan untuk    menghubungkan Indibox ke power listrik, satu kabel HDMI : digunakan untuk    menghubungkan Indibox dan TV, satu kabel UTP : digunakan untuk menghubungkan    Indibox dgn ONT/Modem Internet)&nbsp;</td>
					            </tr>
						        <tr height="40">
                                  <td height="40">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
						          <td>Untuk    (sebutkan nama program) yang saya tawarkan, silahkan jika ada yang ingin    ditanyakan pak/ bu (nama pelanggan)?</td>
					            </tr>
						        <tr height="140">
                                  <td height="140">KESEDIAAN PELANGGAN<br />
                                      <br />
                                    point penting:<br />
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br />
                                    - kata bersedia berlangganan<br />
                                    - nama program</td>
						          <td>Bagaimana    pak/ bu (nama pelanggan), apakah bapak/ibu bersedia untuk berlangganan    Program (sebut nama program yang ditawarakan)?<br />
						            Untuk proses pemasangan, bapak/ ibu akan dihubungi kembali maksimal 7 hari    kedepan oleh teknisi kami.<br />
						            <br />
						            Jika pelanggan menjawab tidak jelas (contoh: he eh,    hem)<br />
						            Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br />
						            Untuk pelanggan pasif, saat bertanya kesediaan    pelanggan harus digiring dengan jawaban bersedia</td>
					            </tr>
						        <tr height="147">
                                  <td height="147">KONTRAK<br />
                                      <br />
                                    Jelas<br />
                                    Tidak terputus</td>
						          <td>Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br />
						            Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br />
						            Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br />
						            Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian    lainnya seperti pemekaian telepon dan fitur lainnya. Dari total pembayaran    indihome bapak/ ibu akan ditambah ppn 10%</td>
					            </tr>
						        <tr height="190">
                                  <td height="190">CLOSING<br />
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br />
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
						          <td>Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br />
                                      <br />
						            Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama    pelanggan)<br />
						            <br />
						            Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan    nama program). Semoga programnya bermanfaat<br />
						            Selamat beraktifitas, selamat pagi/siang/malam pak/ bu (nama pelanggan).</td>
					            </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="239">
                                <col width="831">
                                <tr height="28">
                                  <td height="28" width="239"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="831"><div align="center"><strong>SCRIPT</strong></div></td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="239">GREATING</td>
                                  <td width="831">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Tim Sales Telkom</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="239">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="831">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="239">APRESIASI</td>
                                  <td width="831">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                    Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa    menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="239">EXPERIENCE PELANGGAN &amp; IDENTIFIKASI KEBUTUHAN PELANGGAN</td>
                                  <td width="831">Dengan    kondisi saat ini, apakah ada anggota keluarga bapak/ ibu yang bekerja atau    belajar dari rumah pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="471">
                                  <td height="471" width="239">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="831">Dan    saat ini telkom memiliki program yang sangat menarik untuk bapak/ ibu dan    keluarga untuk mengisi keseharian dirumah, boleh minta waktunya    sebentar?<br>
                                    Telkom memiliki IndiBox, yaitu perangkat seperti STB yang dapat memberikan    pengalaman seru di layar lebar / TV.<br>
                                    Dengan perangkat Indibox ini, bapak/ibu bisa menikmati:<br>
                                    - Berbagai film dan serial yang telah kami sediakan secara gratis, mulai    dari film hollywood, India, Korea, termasuk film anak-anak dengan kualitas HD    lengkap dengan subtitle indonesia nya<br>
                                    - Akses ke siaran TV lokal dan internasional melalui aplikasi UseeTV    Go<br>
                                    - Akses Youtube di TV<br>
                                    - Akses ke ribuan aplikasi dan game yang dapat dimainkan langsung di TV,    dll<br>
                                    <br>
                                    Jika Bapak / Ibu berkenan, perangkat Indibox akan dikirimkan menggunakan    kurir partner kami dan juga pemasangannya bisa dilakukan oleh Bapak/Ibu    secara langsung (jelaskan apabila pelanggan menanyakan), akan ada manual book    cara pemasangan Indibox didalam box yang dikirimkan. <br>
                                    <br>
                                    Dan yang paling menarik adalah harga penawaran yang kami tawarkan sangat    ekonomis, yaitu hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/    Ibu sekarang plus PPN 10%<br>
                                    Pemasangannya sangat mudah Play n Plug, saat kabel terpasang otomatis    indibox sudah dapat digunakan. Perangkat yang akan di dapatkan pelanggan :    STB Indibox, Remote, kabel HDMI, kabel power, kabel LAN dan manual    book.<br>
                                    Ada 3 kabel yang diberikan, satu kabel HDMI : digunakan untuk menghubungkan    Indibox dan TV, satu kabel LAN dan satu kabel Power</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="239">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="831">Untuk    (sebutkan nama program) yang saya tawarkan, silahkan jika ada yang ingin    ditanyakan pak/ bu (nama pelanggan)?</td>
                                </tr>
                                <tr height="239">
                                  <td height="239" width="239">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="831">Bagaimana    pak/ bu (nama pelanggan), apakah bapak/ibu bersedia untuk berlangganan    Program (sebut nama program yang ditawarakan)?<br>
                                      <br>
                                      <br>
                                    Jika pelanggan menjawab tidak jelas (contoh: he eh,    hem)<br>
                                    Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br>
                                    Untuk pelanggan pasif, saat bertanya kesediaan    pelanggan harus digiring dengan jawaban bersedia</td>
                                </tr>
                                <tr height="147">
                                  <td height="147" width="239">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="831">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                    Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br>
                                    Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian    lainnya seperti pemekaian telepon dan fitur lainnya. Dari total pembayaran    indihome bapak/ ibu akan ditambah ppn 10%</td>
                                </tr>
                                <tr height="190">
                                  <td height="190" width="239">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="831">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
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