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
								  <h4 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy (FUP)</a></h4>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Deskripsi  : <a href="script_homewifi.php"></a><a href="script_2p-3p.php"></a><a href="script_indibox.php"></a><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_stbtambahan.php">STB Tambahan</a></p>
						      <p><a href="desc_minipack.php">Minipack</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a> | <a href="desc_homewifi.php">Homewifi</a> | <a href="desc_netflix2.php">Netflix</a></p>
						      <p>&nbsp;</p>
						      <p><strong>Sekilas terkait netflix</strong></p>
						      <p>Netflix adalah layanan yang memungkinkan pengguna menonton tayangan kesukaan di mana pun, kapan pun, dan hampir lewat medium apa pun (smartphone, smartTV, tablet, PC, dan laptop).</p>
						      <p>Netflix ibarat toko penyewaan DVD, tetapi menawarkan film digital di dunia maya. Netflix bisa juga disamakan dengan layanan video berbayar di YouTube. </p>
						      <p>Mirip langganan televisi berbayar (cable tv), Netflix bersih dari iklan, penonton tak perlu menunggu jadwal penayangan serial televisi, dan bisa menentukan sendiri konten yang ingin dinikmati.</p>
						      <p>Kemudahan itu dibayar dengan harga berlangganan relatif murah. Mulai dari Rp 49.000 pengguna bisa mengakses koleksi film dan serial televisi yang terhimpun dalam perpustakaan Netflix.<br>
						        ada 4 jenis layanan Netflix yang bisa dinikmati. Layanan tersebut adalah HP, Basic, Standard, dan Premium.</p>
						      <p>&nbsp;</p>
						      <p><strong>Script untuk pelanggan yang memiliki akun/ berlangganan Netflix</strong></p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="64">
                                <col width="127">
                                <col width="797">
                                <tr height="20">
                                  <td height="20" width="64">NO</td>
                                  <td width="127">PRODUK</td>
                                  <td width="797">TAMBAHAN SCRIPT    NETFLIX</td>
                                </tr>
                                <tr height="60">
                                  <td rowspan="7" height="420">1</td>
                                  <td rowspan="7">UPGRADE</td>
                                  <td width="797">1.    Kalau bapak/ ibu (nama pelangganan) memiliki akun netflix, saat ini    netflixnya sudah bisa digunakan dengan indihomenya pak/bu, jadi kalau    ibu/bapak upgrade internetnya, nontonnya akan lebih nyaman karena    kecepatannya ditambah lebih cepat</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="797">2. Dengan upgrade kecepatan yang lebih tinggi,    bapak juga bisa meggunakan lebih banyak perangkat untuk streming, dan kabar    gembiranya, jika bapak memiliki akun netflix, bapak bisa buka dari jaringan    indihome. Misalnya putra/ putri bapak buka youtube dan anggota keluarga yang    lain nonton film di netflix tidak akan terjadi intermiten ataupun buffering.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="797">3. Untuk Netflix saat ini sudah bisa di akses    melalui jaringan indihome, jadi kalau Bapak/ibu sudah berlangganan Netflix    langsung saja gunakan Jaringan indihome bapak/ibu sebagai penunjang    internetnya. Apalagi kalau kecepatan Bapak/Ibu di upgrade ke..... dijamin    akses ke Netflix akan jauh lebih lancar.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="797">4. Bapak /ibu netflix hadir kembali di jaringan    indihome. Jadi bapak bisa menikmati film terfavorite keluarga menggunakan    jaringan internet indihome. Jadi upgrade kecepetan internet ke xx mpbs akan    mendukung jaringan internet dirumah bapak/ibu agar lebih stabil.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="797">5. Jika bapak/ ibu bersedia kami bantu upgrade    kecepatannya, selain kecepatan akan naik, kalau bapak ada langganan netflix    maka sudah bisa bapak/ ibu gunakan dengan internet indihomenya sehingga    bapak/ ibu bisa merasakan kenyamanan yg luar biasa karena dengan kecepatan    yang meningkat maka akses netflix bapak/ ibu juga akan lebih lancar</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="797">6. Bapak/ibu kita sampaikan juga kalau dulu    netflixkan belum bisa pakai internet indihome, sekarang sudah bisa    menggunakan indihome, jadi bapak dan keluarga bisa merasakan manfaat indihome    dirumah bapak lebih banyak lagi, mau kapan pun bisa bapak streaming dari    jaringan indihome bapak.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="797">7. Selain kecepatan akan naik, kabar gembiranya    jika bapak/ ibu berlangganan netflix, bapak/ ibu bisa gunakan jaringan    internet indihome untuk menonton tayangan kesukaan di mana pun, kapan pun,    dan lewat HP, tablet, laptop ataupun Smart TV sesuai paket netflix yang    dimiliki.</td>
                                </tr>
                                <tr height="40">
                                  <td rowspan="3" height="160">2</td>
                                  <td rowspan="3">HOMEWIFI</td>
                                  <td width="797">1.    Untuk homewifi ini bapak bisa berinternet di rumah dengan kecepatan 10 mbps,    selain akses ke berbagai website, saat ini bapak juga bisa akses ke    websitenya Netflix</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="797">2. Dengan berlangganan homewifi selain bisa    internetan bersama keluarga di rumah dengan kecepatan 10 mbps, jika bapak/    ibu memiliki akun netflix, sekarang bapak juga bisa menggunakan internetnya    untuk nonton film dan serial yang ada di netflix.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="797">3. ......kabar gembiranya jika bapak/ ibu    berlangganan netflix, bapak/ ibu bisa gunakan jaringan internet indihome    untuk menonton tayangan kesukaan di mana pun, kapan pun, dan lewat HP,    tablet, laptop ataupun Smart TV sesuai paket netflix yang dimiliki</td>
                                </tr>
                                <tr height="60">
                                  <td rowspan="2" height="100">3</td>
                                  <td rowspan="2">INDIBOX</td>
                                  <td width="797">1.    STB indibox ini juga bisa install aplikasi netflix atau bapak browsing    melalui google chrome, jadi apabila bapak/ ibu sudah berlangganan netflix dan    mempunyai akun sendiri, bapak/ ibu bisa menyaksikan netflix di televisi    bapak, tentunya dengan biaya berlangganan yang terpisah</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="797">2. ......kabar gembiranya jika bapak/ ibu    berlangganan netflix, bapak/ ibu bisa gunakan jaringan internet indihome    untuk menonton tayangan kesukaan di mana pun, kapan pun, melalui televisi    bapak/ ibu.</td>
                                </tr>
                              </table>
						      <p>Note <br>
						        1. jika ada improve dari script diatas mohon dikoordinasikan dahulu ke masing2 QAO site <br>
					          2. Jika saat penggunaan ada artikulasi yang tidak jelas, atau mengubah makna script maka akan direturn.</p>
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