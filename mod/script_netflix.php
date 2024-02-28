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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">FUP</a> <a href="desc_tdkditawarkan.php">| </a><a href="promo.php">Promo Indihome TV</a> | <a href="script_terima_ggn.php">Script Terima Komplain Gangguan</a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>Script Penawaran : <a href="script_netflix.php">NETFLIX</a><a href="script_2p-3p.php"></a></p>
						      <p><a href="script_minipack.php">Minipack</a> | <a href="script_stbtambahan.php">STB Tambahan</a> | <a href="script_upgrade.php">Upgrade</a> | <a href="script_homewifi.php">Homewifi</a> | <a href="script_indibox.php">Indibox</a> | <a href="script_tambahan.php">Script Tambahan</a> | <a href="script_smooa.php">SMOOA</a><a href="ref_downgrade.php"></a> | <a href="script_catchplay.php">Catchplay</a> | <a href="script_FMC.php">FMC</a> | <a href="script_arpu.php">UPGRADE LOW ARPU 100K</a> | <a href="script_mola.php">MOLA</a> | <a href="script_2p-3p.php">2P - 3P</a> | <a href="script_all.php">All</a></p>
						      <p>&nbsp;</p>
					          <table border="4" cellpadding="0" cellspacing="0">
                                <col width="322">
                                <col width="849">
                                <tr height="18">
                                  <td height="18" width="322"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="849"><div align="center"><strong>SCRIPT HSSP1</strong></div></td>
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
                                      <br>
                                      Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="166">
                                  <td height="166" width="322">PENAWARAN<br></td>
                                  <td width="849">Telkom memiliki program yang sangat menarik untuk bapak/ ibu dan keluarga dalam mengisi keseharian dirumah.<br>
                                  Boleh minta waktunya sebentar?<br><br>
                                  Saat ini Indihome memberikan kemudahan untuk menikmati tayangan yang ditawarkan Netflix, melalui paket bundling peningkatan kecepatan ke (30/ 50/100) mbps, akses Netflix, dan  WeTV/ Disney+ Hotstar (pilih salah satu).<br>
                                  <br>
                                  Dengan paket bundling ini, bapak/ ibu akan diberikan pengalaman yang lebih baik, streaming netflix sepuasnya,  jaminan akses tanpa lag, bandwidth priotitas dengan internet cepat dan stabil dari IndiHome.<br>
                                  Bapak/ ibu bisa merasakan serunya nonton film, drama series, TV series, berbagai acara TV pemenang penghargaan, anime, dokumenter, hingga Netflix Original, dan  bisa nonton beragam tayangan favorit  yang dapat dinikmati keluarga di rumah.<br><br>
                                  Dan yang lebih menarik, selain netflix dan peningkatan kecepatan ke (30/ 50/100) mbps, bapak/ ibu juga akan mendapatkan layanan WeTV/ Disney+ Hotstar.<br>
                                  (disney+hotstar: bapak/ibu dapat menikmati berbagai tayangan hits global, regional, dan Indonesia. Film-film blockbuster Hollywood dan berbagai film yang meraih penghargaan milik Disney, Marvel, Star Wars, Pixar, National Geographic).<br>
                                  (WeTV iflix: bapak/ibu dapat menikmati berbagai tayangan serial WeTV Original dan berbagai hiburan Asia terbaik melalui layar IndiHome TV Anda. Menghadirkan beragam film, series dan tayangan lainnya dari Indonesia, Tiongkok, Korea, hingga Jepang yang selalu diupdate setiap harinya).<br><br>
                                  Bapak/ibu bisa menikmati semua benefitnya di dalam satu tagihan saja tanpa harus memiliki kartu kredit. Jadi tidak repot bayar tagihan IndiHome dan Netflix secara terpisah setiap bulannya. <br><br>
                                  Untuk hari ini harga penawaran yang kami tawarkan sangat menarik dan ekonomis, hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/ Ibu sekarang plus PPN 11%.<br>
                                </td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="322">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="849">Untuk benefit produk dan tarif yang saya tawarkan apakah sudah cukup jelas?<br></td>
                                </tr>
                                <tr height="110">
                                  <td height="110" width="322">KESEDIAAN PELANGGAN<br></td>
                                  <td width="849">Apakah bapak/ ibu bersedia berlangganan (produk yang ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br><br>
                                  Bapak/ ibu akan menerima link aktivasi melalui email, saya sebutkan untuk emailnya (sebutkan email pelanggan), apakah sudah sesuai?<br>
                                  Silahkan nanti diklik link aktivasinya agar Netflixnya bisa digunakan<br>
                                  </td>
                                </tr>
                                <tr height="92">
                                  <td height="92" width="322">KONTRAK<br></td>
                                  <td width="849">Baik Bapak/ ibu, sebagai bukti legalitas  percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                  Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                  Bapak/ ibu (nama pelanggan)  selaku penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap dengan kode area)<br>
                                  Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian lainnya seperti pemekaian telepon dan fitur lainnya.</td>
                                </tr>
                                <tr height="148">
                                  <td height="148" width="322">CLOSING<br></td>
                                  <td width="849">Jika nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama pelanggan) kembali ya?<br>
                                  Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan nama program), semoga programnya bermanfaat.<br>
                                    Selalu jaga kesehatan, selamat pagi/siang/malam pak/ bu (nama pelanggan).</td>
                                </tr>
                              </table>
                  <p>&nbsp;</p>
					          <table border="4" cellpadding="0" cellspacing="0">
                                <col width="322">
                                <col width="849">
                                <tr height="18">
                                  <td height="18" width="322"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="849"><div align="center"><strong>SCRIPT HSSP2</strong></div></td>
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
                                      <br>
                                      Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="166">
                                  <td height="166" width="322">PENAWARAN<br></td>
                                  <td width="849">Telkom memiliki program yang sangat menarik untuk bapak/ ibu dan keluarga dalam mengisi keseharian dirumah.<br>
                                  Boleh minta waktunya sebentar?<br><br>
                                  Saat ini Indihome memberikan bonus peningkatan kecepatan internet bapak/ ibu, dari kecepatan sekarang menjadi (30/ 50/100) mbps agar bapak/ ibu untuk menikmati  keseruan streaming tayangan Netflix sepuasnya.<br>
                                  <br>
                                  Dengan program ini, bapak/ ibu bisa mendapatkan pengalaman internet yang lebih cepat dan baik, streaming netflix dan WeTV/ Disney+ Hotstar (pilih salah satu) sepuasnya,  jaminan akses tanpa lag, bandwidth priotitas dengan internet cepat dan stabil dari IndiHome.<br><br>
                                  Sebelumnya apakah Bapak/Ibu sudah berlangganan Netflix?<br><br>
                                  (Jika Iya)<br>
                                  Untuk metode pembayaran yang bapak/ ibu gunakan apa? (Kartu Kredit/GoPay/Digital Payment, dll)<br><br>
                                  Kami bisa membantu proses pemindahan pembayaran Netflix Bapak/Ibu, dari metode pembayaran yang saat ini Bapak/Ibu gunakan, menjadi satu penagihan melalui tagihan IndiHome dengan bonus penambahan kecepatan ke(30/ 50/100) mbps. Jadi bapak/ ibu tidak repot bayar tagihan IndiHome dan Netflix secara terpisah setiap bulannya.<br>
                                  Hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/ Ibu sekarang plus PPN 11% untuk pemindahan tagihan netflix ke IndiHome, Bapak/Ibu sudah mendapatkan bonus extra upgrade speed streaming dan WeTV Iflix/Disney+ Hotstar.<br>
                                </td>
                                </tr>
                                <tr height="129">
                                  <td height="129" width="322">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="849">Sebelumnya apakah Bapak/Ibu sudah berlangganan Netflix?<br>
                                  (jika Tidak)<br>
                                  Saya jelaskan terlebih dahulu pak/ bu,<br>
                                  Bapak/ ibu bisa merasakan serunya nonton film, drama series, TV series, berbagai acara TV pemenang penghargaan, anime, dokumenter, hingga Netflix Original, dan  bisa nonton beragam tayangan favorit yang dapat dinikmati keluarga di rumah.<br><br>
                                  Dan yang lebih menarik, selain netflix, bapak/ ibu juga akan mendapatkan bonus upgrade streaming dan layanan WeTV/ Disney+ Hotstar (pilih salah satu)<br>
                                  (disney+hotstar: bapak/ibu dapat menikmati berbagai tayangan hits global, regional, dan Indonesia. Film-film blockbuster Hollywood dan berbagai film yang meraih penghargaan milik Disney, Marvel, Star Wars, Pixar, National Geographic).<br>
                                  (WeTV iflix: bapak/ibu dapat menikmati berbagai tayangan serial WeTV Original dan berbagai hiburan Asia terbaik melalui layar IndiHome TV Anda. Menghadirkan beragam film, series dan tayangan lainnya dari Indonesia, Tiongkok, Korea, hingga Jepang yang selalu diupdate setiap harinya).<br><br>
                                  Untuk  akses netflix dengan bonus penambahan kecepatan ke(30/ 50/100) mbps, kami berikan penawaran dengan harga yang sangat menarik, hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/ Ibu sekarang plus PPN 11%.<br>
                                  Bapak/ibu bisa menikmati internet lebih cepat dan semua benefit lainnya di dalam satu tagihan saja tanpa harus memiliki kartu kredit. Jadi tidak repot bayar tagihan IndiHome dan Netflix secara terpisah setiap bulannya. Bapak/Ibu juga sudah mendapatkan bonus extra upgrade speed streaming dan WeTV Iflix/Disney+ Hotstar.<br>
                                </td>
                                </tr>
                                <tr height="110">
                                  <td height="110" width="322">KESEDIAAN PELANGGAN<br></td>
                                  <td width="849">Untuk benefit produk dan tarif yang saya tawarkan apakah sudah cukup jelas?<br>
                                  </td>
                                </tr>
                                <tr height="92">
                                  <td height="92" width="322">KONTRAK<br></td>
                                  <td width="849">(untuk pelanggan yang sudah punya netflix)<br>
                                  Apakah bapak/ ibu bersedia berlangganan Netflix dengan pemindahan biaya berlangganan Netflix ke tagihan IndiHome Bapak/Ibu setiap bulan sebesar (tarif) plus ppn 11%? <br><br>
                                  Bapak/ ibu akan menerima link aktivasi melalui email, saya sebutkan untuk emailnya (sebutkan email pelanggan), apakah sudah sesuai?<br>
                                  Silahkan nanti diklik link aktivasinya dan ikuti petunjuk dari link tersebut agar tagihan Netflix berpindah ke tagihan IndiHome dan benefit upgrade speed serta OTT tambahan dapat digunakan termasuk apabila <br>
                                  Bapak/Ibu menginginkan upgrade plan ke Standard/Premium<br><br>
                                  (untuk pelanggan akun baru)<br>
                                  Apakah bapak/ ibu bersedia berlangganan Netflix dengan penambahan biaya setiap bulan sebesar (tarif) plus ppn 11%?<br><br>
                                  Bapak/ ibu akan menerima link aktivasi melalui email, saya sebutkan untuk emailnya (sebutkan email pelanggan), apakah sudah sesuai?<br>
                                  Silahkan nanti diklik link aktivasinya dan ikuti petunjuk dari link tersebut agar layanan Netflix, benefit upgrade speed serta OTT tambahan dapat digunakan dan ditagihkan melalui tagihan IndiHome Bapak/Ibu.<br>
                                </td>
                                </tr>
                                <tr height="148">
                                  <td height="148" width="322">CLOSING<br></td>
                                  <td width="849">Baik Bapak/ ibu, sebagai bukti legalitas  percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                  Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                  Bapak/ ibu (nama pelanggan)  selaku penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap dengan kode area)<br>
                                  Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya berlangganan per bulan sebesar (tarif saat penawaran) rupiah plus ppn 11% diluar pemakaian lainnya seperti pemekaian telepon dan fitur lainnya</td>
                                </tr>
                                <tr height="148">
                                  <td height="148" width="322">CLOSING<br>
                                  - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum menutup telepon<br>
                                  - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="849">Jika nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama pelanggan) kembali ya?<br>
                                  Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan nama program), semoga programnya bermanfaat.<br>
                                    Selalu jaga kesehatan, selamat pagi/siang/malam pak/ bu (nama pelanggan).<br></td>
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