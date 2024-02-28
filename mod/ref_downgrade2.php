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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a>| <a href="promo.php">Promo Indihome TV</a></h5>      
								  <h5>&nbsp;</h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Rule : <a href="ref_downgrade2.php">do and don't</a><a href="ref_downgrade.php"></a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_all.php">All</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_downgrade2.php"></a><a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a><a href="ref_downgrade.php"></a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_nba.php">NBA</a></p>
						      <p>&nbsp;</p>
						      <table border="4" cellpadding="0" cellspacing="0">
                                <col width="64">
                                <col width="181">
                                <col width="483">
                                <col width="523">
                                <tr height="21">
                                  <td colspan="4" height="21" width="1251"><div align="center"><strong>Do &amp; Don't saat melakukan penawaran&nbsp;</strong></div></td>
                                </tr>
                                <tr height="21">
                                  <td height="21"><div align="center"><strong>BULAN</strong></div></td>
                                  <td><div align="center"><strong>PRODUK</strong></div></td>
                                  <td><div align="center"><strong>DON'T</strong></div></td>
                                  <td><div align="center"><strong>DO</strong></div></td>
                                </tr>
                                <tr height="84">
                                  <td rowspan="25" height="1067">Nov-20</td>
                                  <td rowspan="9">ALL PRODUK</td>
                                  <td width="483">Saat    pelanggan perlu konfirmasi pihak lain, menyampaikan penawaran hanya hari ini,    seolah pelanggan tidak ada kesempatan untuk berfikir atau konsultasi, apalagi    digabung dengan nanti 3 hari kedepan dihubungi petugas lagi, seolah memang    agree bukan hari ini</td>
                                  <td width="523">Rayu pelanggan    dengan benefit dan tarif kembali</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Mengarahkan pelanggan untuk mendengarkan    rekaman di plasa telkom dan menuntut jika tidak sesuai</td>
                                  <td width="523">Baik    Bapak/ ibu, sebagai bukti legalitas&nbsp;    percakapan ini direkam oleh Telkom&hellip;..</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Menjanjikan ke pelanggan untuk kita bantu dan    konfirmasi ke petugas, kemudian diakhir mengarahkan pelanggan untuk lapor    kembali ke 147</td>
                                  <td width="523">Langsung    arahkan pelanggan untuk lapor, tanpa menjanjikan untuk membantu konfirmasi    keluhan pelanggan</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="483">Menjawab berbelit- belit, saat ditanya tarif    oleh pelanggan</td>
                                  <td width="523">Jawab    pertanyaan pelanggan terkait tarif dengan jelas dan benar</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="483">Penambahannya/tarifnya belum dikenakan bulan    ini</td>
                                  <td width="523">Begitu    program aktif penambahan tarifnya mulai berjalan</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Penyampaian produk dan tarif cepat</td>
                                  <td width="523">Jaga    intonasi, kecepatan berbicara saat menyampaikan produk dan tarif, agar tidak    ada kesalahpahaman informasi yang ke pelanggan</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="483">Penyampaian tarif terlalu jauh dari penjelasan    produk</td>
                                  <td width="523">Tarif    disampaikan, setelah menyampaikan produk yang ditawarkan</td>
                                </tr>
                                <tr height="63">
                                  <td height="63" width="483">Terhubung ke bukan atas nama pelanggan di    contact terdaftar, tapi tidak menanyakan hubungan kekerabatan.</td>
                                  <td width="523">Jika    terhubun ke bukan atas nama pelanggan di contact terdaftar, maka wajib    tanyakan hubungna kekerabatan dengan atas nama di aplikasi atau atau nama    verifiied&nbsp;</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Tidak menginformasikan simulasi tagihan    pelanggan kedepan</td>
                                  <td width="523">Jika    memang pelanggan memaksa, pastikan semua produk dan fitur dihitung baik yang    sudah lama berlangganan dan yang baru berlangganan-</td>
                                </tr>
                                <tr height="40">
                                  <td rowspan="3" height="122" width="181">2P-3P</td>
                                  <td width="483">Bisa    dipararelkan</td>
                                  <td width="523">tidak    bisa untuk pararel jika ingin menggunakan tv yang lain maka harus ada    penambahan stb</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Saat pelanggan masih mau pertimbangan atau    pikir- pikir dulu, agent edukasi seakan- akan&nbsp;    nanti ada petugas yang menghubungi kembali</td>
                                  <td width="523">&nbsp;jika pelanggan msh mau pikir2 maka rayu dgn    benefitnya / keunggulan produknya dan tarif berlangganan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="483">Merubah tv bapak menjadi smat tv berbasis    android tv</td>
                                  <td width="523">bapak/    ibu bisa memiliki layanan tv interaktif useetv</td>
                                </tr>
                                <tr height="42">
                                  <td rowspan="3" height="105">INDIBOX</td>
                                  <td width="483">Diawal    penawaran tidak boleh menyampaikan bisa internet browsing seolah perangkat    idibox adalah modem</td>
                                  <td width="523">sampaikan    sesuai scrib fungsi indibox untuk menonton tv dan dilanjutkan dengan benefit    yang ada sesuai scribt</td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="483">Langsung merubah tv bapak menjadi android tv</td>
                                  <td width="523">Dengan    IndiBox ini, akan memberikan pengalaman seru di layar lebar / TV</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Menyampaikan bisa internet browsing tapi tidak    menyampaikan harus download tv browser terlebih dahulu</td>
                                  <td width="523">jika    menyampaikan bisa internet browsing ao harus&nbsp;    menyampaikan terlebih dahulu download tv browser&nbsp;</td>
                                </tr>
                                <tr height="21">
                                  <td rowspan="3" height="147">MINIPACK</td>
                                  <td width="483">Chanelnya    sudah lengkap</td>
                                  <td width="523">tayangannya    lebih bervariatif</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Didepan disampaikan chanel chanel yang terkunci    akan dibukakan kembali</td>
                                  <td width="523">langsung    sampaikan penawaran paket add on minipack apa</td>
                                </tr>
                                <tr height="84">
                                  <td height="84" width="483">Menyampaikan restart STB nya bapak/ibu sudah    bisa menikmati, sebelum infokan tarif berlangganan atau tanpa kalimat    bersedia berlangganan</td>
                                  <td width="523">Sampaikan    dulu tarif berlangganan setelah info benefit, baru sampaikan restart STB    untuk mengaktifkan channelnya, sampaikan jika bersedia berlangganan program    akan aktif dalam 1x24 jam, bapak/ibu tinggal merestar STB nya&nbsp;</td>
                                </tr>
                                <tr height="42">
                                  <td rowspan="4" height="168">STB TAMBAHAN</td>
                                  <td width="483">Bisa    dipindah pindahkan tanpa menyampaikan harus berada dalam satu aliran listrik</td>
                                  <td width="523">Bisa    dipindahkan dari satu tv ke tv yang lain disetiap sudut rumah asalkan masih    dalam satu aliran listrik atau satu fasa listrik</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Saat pelanggan masih mau pertimbangan atau    pikir- pikir dulu, agent edukasi seakan- akan&nbsp;    nanti ada petugas yang menghubungi kembali</td>
                                  <td width="523">&nbsp;Jika pelanggan masih mau pikir- pikir maka    rayu dengan benefit/ keunggulan produknya dan tarif berlangganan</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Merubah tv bapak menjadi smat tv berbasis    android tv</td>
                                  <td width="523">STB    tambahan ini juga berbasis android, jadi bapak/ ibu bisa merasakan pengalaman    menggunakan Smart TV</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Tidak menggunakan kabel</td>
                                  <td width="523">Tidak    perlu instalasi kabel rumah karena alatnya melalui sambungan listrik 1 phasa</td>
                                </tr>
                                <tr height="84">
                                  <td rowspan="3" height="147">UPGRADE</td>
                                  <td width="483">Ketika    pelanggan mengatakan ingin downgrade, agent sampaikan kalimat jawab bisa,    iya, silahkan atau membuat kalimat seolah tampak mudah untuk downgrade    seperti cukup hubungi 147 atau plasa telkom terdekat nanti akan dibantu</td>
                                  <td width="523">Jika    pelanggan bertanya tentang downgrade, maka agent mohon membacakan script    downgrade sesuai tamara</td>
                                </tr>
                                <tr height="21">
                                  <td height="21">Menyampaikan FUP jika pelanggan tidak bertanya</td>
                                  <td width="523">FUP    disampaikan hanya jika pelanggan bertanya dan lengkap sesuai tabel</td>
                                </tr>
                                <tr height="42">
                                  <td height="42" width="483">Menginfokan tidak mengganggu jaringan    internetnya saat digunakan browsing atau youtube</td>
                                  <td width="523">(Karena    untuk browsing dan youtube mengambil quota internet)</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table width="1091" border="1" cellpadding="0" cellspacing="0">
                                <col width="64">
                                <col width="76">
                                <col width="399">
                                <col width="456">
                                <tr height="20">
                                  <td rowspan="2" height="100" width="64">Nov-21</td>
                                  <td width="76"><div align="center"><strong>PRODUK</strong></div></td>
                                  <td width="399"><div align="center"><strong>DON'T</strong></div></td>
                                  <td width="456"><div align="center"><strong>DO</strong></div></td>
                                </tr>
                                <tr height="80">
                                  <td height="80"><strong>HOME WIFI</strong></td>
                                  <td width="399">Jika    telpon tdk bisa digunakan pelanggan mengeluh matot, secara sistem telpon tdk    aktif tidak bisa ditawarkan HW.&nbsp;</td>
                                  <td width="456">Jika    telpon tidak bisa digunakan / pelanggan mengeluh mati total / telpon rusak,    tapi secara sistem aktif masih bisa ditawarkan homewifi, ao wajib mengedukasi    agar pelanggan melakukan pelaporan ke 147 atau sosmed agar telponnya bisa    digunakan kembali</td>
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