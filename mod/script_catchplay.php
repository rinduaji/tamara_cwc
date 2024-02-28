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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy</a> <a href="desc_tdkditawarkan.php">| </a><a href="promo.php">Promo Indihome TV</a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>Script Penawaran : <a href="script_catchplay.php">Catchplay</a><a href="script_2p-3p.php"></a></p>
						      <p><a href="script_minipack.php">Minipack</a> | <a href="script_stbtambahan.php">STB Tambahan</a> | <a href="script_upgrade.php">Upgrade</a> | <a href="script_homewifi.php">Homewifi</a> | <a href="script_indibox.php">Indibox</a> | <a href="script_tambahan.php">Script Tambahan</a> | <a href="script_smooa.php">SMOOA</a><a href="ref_downgrade.php"></a> | <a href="script_video.php">OTT_Video</a> | <a href="script_FMC.php">FMC</a> | <a href="script_arpu.php">UPGRADE LOW ARPU 100K</a> | <a href="script_netflix.php">NETFLIX</a> | <a href="script_mola.php">MOLA</a> | <a href="script_2p-3p.php">2P - 3P</a> | <a href="script_all.php">All</a></p>
						      <p>&nbsp;</p>
					          <table border="2" cellpadding="0" cellspacing="0">
                                <col width="322">
                                <col width="849">
                                <tr height="28">
                                  <td height="28" width="322"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="849"><div align="center"><strong>SCRIPT</strong></div></td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="322">GREATING</td>
                                  <td width="849">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="19">
                                  <td height="19" width="322">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="849">Benar saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no telepon xxx xxxxx</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="322">APRESIASI</td>
                                  <td width="849">Terima kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                      Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="307">
                                  <td height="307" width="322">PENAWARAN<br></td>
                                  <td width="849">Saat    ini telkom memiliki layanan yang dirancang untuk pecinta film dengan    menyediakan koleksi blockbuster terkemuka untuk bapak/ ibu dan keluarga    dirumah, boleh minta waktunya sebentar?<br>
                                  Telkom memiliki layanan streaming yang menghadirkan tayangan seru, menarik, serta eksklusif untuk bapak/ ibu dan keluarga yaitu CATCHPLAY, merupakan penyedia layanan media streaming internet yang menawarkan konten versi digital dari film-film dan program-program blockbuster Hollywood, Asia, dan Indonesia.<br>
                                  CATCHPLAY menyediakan film-film Hollywood yang relatif baru tayang, film-film blockbuster terkemuka yang luas dan banyak pilihan film internasional maupun lokal yang akan ditambahkan ke layanan setiap minggu untuk memastikan pilihan terbaik dan pengalaman yang tidak tertandingi yang dirancang untuk bapak/ ibu.<br>
                                    Dengan CATCHPLAY, bapak/ ibu  bisa merasakan nonton bioskop setiap hari di rumah.<br>
                                    <br>
                                    Harga penawaran yang kami berikan sangat ekonomis, hanya dengan penambahan (sesuai penawaran) ribu per bulan dari tagihan bapak/ Ibu sekarang plus PPN 11%</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="322">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="849">Untuk benefit produk dan tarif yang saya tawarkan apakah sudah cukup jelas?</td>
                                </tr>
                                <tr height="134">
                                  <td height="134" width="322">KESEDIAAN PELANGGAN<br></td>
                                  <td width="849">Apakah bapak/ ibu bersedia berlangganan (produk yang ditawarkan) dengan tarif penambahan setiap bulan (tarif) plus ppn 11%?<br></td>
                                </tr>
                                <tr height="125">
                                  <td height="125" width="322">KONTRAK<br></td>
                                  <td width="849">Baik Bapak/ ibu, sebagai bukti legalitas  percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                  Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                  Bapak/ ibu (nama pelanggan)  selaku penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap dengan kode area)<br>
                                  Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya berlangganan per bulan sebesar (tarif saat penawaran) rupiah diluar pemakaian lainnya seperti pemekaian telepon dan fitur lainnya.</td>
                                </tr>
                                <tr height="167">
                                  <td height="167" width="322">CLOSING<br></td>
                                  <td width="849">Jika nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama pelanggan) kembali ya?<br>
                                  Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan nama program), semoga programnya bermanfaat.<br>
                                    Selalu jaga kesehatan, selamat pagi/siang/malam pak/ bu (nama pelanggan).</td>
                                </tr>
                              </table>
                  <p>&nbsp;</p>
					          <table border="2" cellpadding="0" cellspacing="0">
                                <col width="322">
                                <col width="849">
                                <tr height="28">
                                  <td height="28" width="322"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="849"><div align="center"><strong>SCRIPT</strong></div></td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="322">GREATING</td>
                                  <td width="849">Selamat    Pagi/Siang/Sore.<br>
                                    Perkenalkan dengan saya (nama agent) dari Indihome</td>
                                </tr>
                                <tr height="19">
                                  <td height="19" width="322">KONFIRMASI NO FASTEL DAN PJ</td>
                                  <td width="849">Benar    saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik dari no    telepon xxx xxxxx</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="322">APRESIASI</td>
                                  <td width="849">Terima    kasih pak/ ibu (nama pelanggan) sudah menjadi menjadi pelanggan setia telkom    selama (sebutkan lama berlangganan) tahun<br>
                                      <br>
                                    Semoga bapak/ibu dan keluarga dalam keadaan sehat dan tetap bisa    menjalankan aktivitas seperti biasa.</td>
                                </tr>
                                <tr height="307">
                                  <td height="307" width="322">PENAWARAN<br>
                                      <br>
                                    Point penting,<br>
                                    - Kata penawaran<br>
                                    - Nama program<br>
                                    - Kegunaan program<br>
                                    - Tarif</td>
                                  <td width="849">Saat    ini telkom memiliki layanan yang dirancang untuk pecinta film dengan    menyediakan koleksi blockbuster terkemuka untuk bapak/ ibu dan keluarga    dirumah, boleh minta waktunya sebentar?<br>
                                    Bapak/ ibu dapat menikmati dan mengakses film melalui layanan streaming    kami yaitu CATCHPLAY.<br>
                                    CATCHPLAY menyediakan film-film Hollywood yang relatif baru tayang,    film-film blockbuster terkemuka yang luas dan banyak pilihan film    internasional maupun lokal yang akan ditambahkan ke layanan setiap minggu    untuk memastikan pilihan terbaik dan pengalaman yang tidak tertandingi yang    dirancang untuk bapak/ ibu.<br>
                                    <br>
                                    Bapak/ ibu dapat menikmati film-film baru, seperti    Steve Job, Hunger Games Mocking Jay 2, Sister, Point Break, The Last Witch    Hunter, The Litle Prince dan Gods of Egypt (cek katalog update)<br>
                                    <br>
                                    Dengan berlangganan CATCHPLAY,&nbsp; Bapak/ ibu dapat menikmati dan mengakses    film tak terbatas kapan pun dan di mana pun.<br>
                                    <br>
                                    Untuk hari ini harga penawaran yang kami tawarkan sangat menarik dan    ekonomis, hanya dengan penambahan (sebutkan tarif) dari tagihan bapak/ Ibu    sekarang (info PPN jika blm masuk)<br>
                                    Khusus hari ini jika bapak/ ibu bersedia    berlangganan, kami memberikan promo menarik bayar 1 bulan dapat 3 bulan    berlangganan (tergantung promo yang berlaku)</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="322">BERIKAN KESEMPATAN PELANGGAN MERESPON</td>
                                  <td width="849">Untuk    (sebutkan nama program) yang saya tawarkan, silahkan jika ada yang ingin    ditanyakan pak/ bu (nama pelangga)?</td>
                                </tr>
                                <tr height="134">
                                  <td height="134" width="322">KESEDIAAN PELANGGAN<br>
                                      <br>
                                    point penting:<br>
                                    - Pertanyaan kesediaan wajib menggunakan 5W 1H<br>
                                    - kata bersedia berlangganan<br>
                                    - nama program</td>
                                  <td width="849">Bagaimana    pak/ bu (nama pelanggan), apakah bapak/ibu bersedia untuk berlangganan    Program (sebut nama program yang ditawarakan)?<br>
                                      <br>
                                    Jika pelanggan menjawab tidak jelas (contoh: he eh,    hem)<br>
                                    Jika bapak/ ibu bersedia, sebagai syarat berlangganan silahkan bisa dijawab    dengan kata bersedia<br>
                                    Untuk pelanggan pasif, saat bertanya kesediaan    pelanggan harus digiring dengan jawaban bersedia</td>
                                </tr>
                                <tr height="125">
                                  <td height="125" width="322">KONTRAK<br>
                                      <br>
                                    Jelas<br>
                                    Tidak terputus</td>
                                  <td width="849">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom , kami konfirmasi ulang:<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), <br>
                                    Bapak/ ibu (nama pelanggan)&nbsp; selaku    penanggung jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap    dengan kode area)<br>
                                    Telah setuju untuk berlangganan (sesuai penawaran) dengan penambahan biaya    berlangganan per bulan sebesar (tarif saat penawaran, dan&nbsp; PPN jika belum termasuk) rupiah diluar    pemakaian lainnya seperti pemekaian telepon dan fitur lainnya.</td>
                                </tr>
                                <tr height="167">
                                  <td height="167" width="322">CLOSING<br>
                                    - memastikan kembali pelanggan sudah jelas atau memberikan jeda sebelum    menutup telepon<br>
                                    - Menyampaikan salam buddies (contoh: selamat beraktivitas, selamat    beristirahat, semoga hari bapak/ ibu menyenangkan, sukses selalu)</td>
                                  <td width="849">Jika    nanti ada data yang belum lengkap, saya boleh menghubungi bapak/ ibu (nama    pelanggan) kembali ya?<br>
                                      <br>
                                    Sebelum saya tutup, ada lagi yang ingin ditanyakan pak/ bu (nama    pelanggan)<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan (sebutkan    nama program), semoga programnya bermanfaat.<br>
                                    <br>
                                    (salam budies: selamat beraktifitas/ Selamat beristirahat/ sehat selalu/    dll)</td>
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