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
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Rule : <a href="ref_ott.php">OTT</a></p>
						      <p>| <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade </a>| <a href="ref_all.php">All</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a><a href="ref_downgrade.php"></a> | <a href="ref_stb.php">STB</a> | <a href="ref_homewifi.php">Home WiFi</a> | <a href="ref_terbuka.php">Kalimat Terbuka</a> | <a href="ref_p3k.php">P3K</a> | <a href="ref_video.php"></a><a href="ref_2p3p.php">2P - 3P</a></p>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="66">
                                <col width="158">
                                <col width="624">
                                <tr height="19">
                                  <td height="19" width="66"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="158"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="624"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">Benefit    yang kami berikan sangat menarik selain film atau tayangannya akan update    bisa juga di gunakan di 5 perangkat&nbsp;</td>
                                </tr>
                                <tr height="77">
                                  <td height="77">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">Jika    ibu/pak&nbsp; berlangganan&nbsp; ott vidio ini,&nbsp;&nbsp; nanti ibu/pak&nbsp; bisa&nbsp;    menikmati tayangan olahraga seperti UEFA Champions League, dan ragam    event olahraga menarik lainnya, dan bpk ibu dan keluarga juga memiliki jutaan    konten menarik lainnya seperti film blockbuster dan box office Hollywood,    film dan series Korea, anime, drama Asia, serta ragam konten anak yang dapat    diakses dengan aman melalui fitur Kids Mode</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">Saat    ini kami memberikan promo menarik bayar 1 bulan dapat 3 bulan berlangganan</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">Fimnya    sudah sangat beragam, tidak hanya film dalam negri namun juga luar negri</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">Penawaran    yang kami sampaikan tentunya sangat bermanfaat selain menambah reverensi    tontonan bagi keluarga juga penambahannya cukup terjangkau, dengan penambahan    Rpxxxxxxxxx+ppn10% .</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">Mungkin    sekarang belum perlu, tapi seiring dengan berkembangnya aplikasi streaming    kedepannya, penawaran yang kami berikan cukup menarik selain variasi tontonan    lebih banyak dan harganya terjangkau</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">penawaran    kami ini sangat spesial bapak sayang jika dilewatkan , ini akan menambah    alternatif tontonan jika bapak berkumpul bersama keluarga, lebih ekonomis    juga bapak karena tdk perlu menggunakan paket data masing masing untuk    streaming</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">sepengetahuan    kami bapak sekarang jarang sekali keluarga nonton tv, lebih sering streaming    di masing masing hp, ott ini kami tawarkan agar jika berkumpul bersama    keluarga bisa streaming bersama di tv jadi bisa lebih hemat dan kebersamaan    bersama keluarga bisa lebih terjalin</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">saat    ini tayangan film ataupu acara hiburan semakin beragam, yang tentunya tidak    akan membosankan utk ditonton, sy yakin bpk/ibu menyukainya</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Belum perlu</td>
                                  <td width="624">mungkin    saat ini dirasa belum perlu, tapi saya yakin ketka bpk/ibu sudah berlangganan    dan meyaksikan tayangannya, bpk/ibu sekeluarga pasti akan menyukainya</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="66">OTT</td>
                                  <td width="158">Belum    perlu</td>
                                  <td width="624">Mungkin    saat ini Bapak/ Ibu merasa belum perlu, namun kami pastikan apabila ibu    berlangganan Catchplay/ OTT Video ini akan menjadi salah satu hiburan di    waktu luang, selain itu tidak semua pelanggan mendapatkan penawaran seperti    Bapak/ Ibu saat ini. Jadi sayang sekali apabila dilewatkan</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="66">OTT</td>
                                  <td width="158">Belum    perlu</td>
                                  <td width="624">belum    perlu, namun sangat disayangkan jika dilewatkan penawaran ini karena tayangan    lebih menarik dan beragam</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">bapak/ibu    jarang nonton karena mungkin tayangannya belum beragam, di penawaan yang kita    sampaikan ini sangat menarik sehingga keluarga akan merasa senang karena    banyak ragam film&nbsp; ,drama dan tayangan    lain yang cocok untuk anak-anak juga</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">Penawaran    yang kita sampaikan ini sangat cocok ditanyangkan dikeluarga bapak/ibu karena    tayangan filmnya juga akan update setiap minggunya ,kita yakin akan membuat    hari-hari bapak dan keluarga nyaman ketika kumpul dengan keluarga</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">karena    saat ini kan bapak belum berlangganan pak, nanti kedepannya bapak akan rajin    menonton karena sudah bisa menikmati langsung ribuan film</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">karena    saat ini kan bapak belum berlangganan pak, kalau sudah berlangganan bapak    nantinya bisa langsung menikmati film bloockbuster terbaru dan ribuan film    lainnya</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">Mengenai    gendrenya jauh lebih variatif sehingga tidak akan bosan untuk menonton</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">Mungkin    saat ini jarang menonton, jika nantinya pas kumpul bersama keluarga atau ada    kunjungan saudara jauh bisa dijadikan reverensi tontonan yang layak</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">untuk    ott vidio bukan hanya menyajikan streaming film tetapi olaraga , drama korea,    film animasi , film anak yang tentunya ini sangat cocok untuk berkumpul    bersama keluarga</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">menurut    kami nonton bareng itu salah satu kegiatan yang efektif untuk menjalin    kebersamaan, sayang jika dilewatkan pak, ini bisa menjadi alternatif hiburan    bersama keluarga</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">Mungkin    bpk/ibu jarang nonton karena waktunya terbatas, dengan beerangganan OTT ini    bpk/ibu bisa nonton kapanpun dan tinggal memilih fil apa yg ingin tonton</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Jarang nonton</td>
                                  <td width="624">Mungkin    bpk/ibu jarang nonton karena acara tv nya diatur oleh provider, sedangkan OTT    (vidio/catchplay) bpk/ibu bisa memilih seniri tayangan apa yg ingin ditonton</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="66">OTT</td>
                                  <td width="158">Jarang    nonton</td>
                                  <td width="624">mungkin    karena fitur sebelumnya belum lengkap jadi bapak/ ibu tdk tertarik utk    menonton tapi setelah bapak berlangganan OTT yg kami tawarkan saat ini untuk    jenis film dan fitur tayangannya jauh lebih bervariatif lagi pak</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="66">OTT</td>
                                  <td width="158">Jarang    nonton</td>
                                  <td width="624">mungkin    anggota keluarga yg lain ada yang suka menonton karena film2 yg ditayangkan    lebih beragam dan menarik</td>
                                </tr>
                                <tr height="96">
                                  <td height="96">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">Dengan    bpk berlangganan Catchplay ini bpk akan dapat menikmati tayangan film-film    Hollywood yang relatif baru tayang, film-film blockbuster terkemuka yang luas    dan banyak pilihan film internasional maupun lokal yang akan ditambahkan ke    layanan setiap minggunya, dan hny dengan biaya berlangganan Rp 60.000 plus    ppn 11%/bulannya dan jika bpk bersedia berlangganan hari ini, kami memberikan    promo menarik bayar 1 bulan dapat 3 bulan berlangganan</td>
                                </tr>
                                <tr height="77">
                                  <td height="77">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">&nbsp;Baik pak , untuk penawaran OTT VIDIO ini kan    kita berikan hanya untuk nomer nomer yang terpilih saja, dan untuk tarif    penambahan perbulannya&nbsp; hanya di 29K    perbulan +ppn11% namun benefit yang bapak dapatkan sangat banyak, yang    membuat tontonan bapak dan keluarga lebih beragam, dan tarif yang diberikan    cukup hemat karena benefitnya yang menarik</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">Saat    ini kami memberikan promo menarik bayar 1 bulan dapat 3 bulan berlangganan</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">tarif    nya sudah sangat hemat pak, kalau dibandingkan dengan benefit yang bapak    dapatkan (ulangi benefit)</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">Bapak    / ibu bisa bandingkan dengan aplikasi streaming lainnya di luar sana, harga    yang kami berikan lebih kompetitip selain itu juga variasi tontonan juga    lebih banyak</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">Tidak    hanya untuk 1 pengguna saja, namun bapak / ibu bisa di gunakan di 2 perangkat    menonton secara bersamaan.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">untuk    ott catchpay, harga penawaran kami sangat terjangkau, hanya dengan    penambahan&hellip;.. Bisa dipergunakan untuk 5 perangkat secara bergantian , jika    bersamaan bisa untuk 2 perangkat</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">harga    yang kami tawarkan sangat terjangkau, hanya 1 harga &hellip;&hellip;, untuk ott yang lain    ada harganya berdasarkan berapa perangkat yang dipergunakan</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">hanya    dengan mmbayar Rp. 29.000 utk catchplay, bpk/ibu sdh bisa menyakskan banyak    sekali film film terbaik baik dalam negeri ataupn luar negeri yang judulnya    bisa lebih dadri 100 film terbaik</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="624">tentunya    ini sagat murah kaerna bpk/ibu sdh bisa menyaksikan ratusan film tanpa harus    membeli/berlangganan satu per satu film</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="66">OTT</td>
                                  <td width="158">Pertimbangan    harga</td>
                                  <td width="624">Klo    dari segi harga sangat ekonomis pak/bu dengan fitur dan film film yang    tersedia kan sudah bervariatif jadi untuk menghibur bapak sekeluarga drumah</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="66">OTT</td>
                                  <td width="158">Pertimbangan    harga</td>
                                  <td width="624">Untuk    kualitas dan fitur yg lengkap hanya dengan penmabahan Rp. XX bapak sekeluarga    sudah bisa menikmati sensasi nonton Film bioskop dirumah pak. jadi tarif yang    diberikan sudah sangat terjangkau karena mencakup banyak film film box office    di dalamnya</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">OTT</td>
                                  <td>Sudah ada OTT lain</td>
                                  <td width="624">Saat    ini memang bpk/ibu sdh berlangganan dari provider lain, namun Dengan    berlangganan OTT dari Indihome kualitas gambar yg kami sediakan sudah HD dan    bisa digunakan di 5 perangkat jadi akan jauh lebih nyaman ketika menontonnya    bersama keluarga.</td>
                                </tr>
                                <tr height="115">
                                  <td height="115">OTT</td>
                                  <td>Sudah ada OTT lain</td>
                                  <td width="624">jikabapak/    ibu berlangganan bp/i sudah bisa mendapatkan akses hiburan terlengkap yang    dapat dinikmati keluarga di rumah dengan tayangan yg seru cocok untk bpk dan    kluarga pastinya, kami jaminkan b/i program ini akan memuaskan bagi keluarga,    karena beragam film blockbuster dan box office Hollywood, film dan series    Korea, anime, drama Asia dn ank ank nya ibu juga kita hadirkan konten anak    yang dapat diakses dengan aman melalui fitur Kids Mode,dan untuk tayangannya    juga akan lebih update</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Sudah ada OTT lain</td>
                                  <td width="624">untuk    filmnya kan berbeda pak, apalagi catchplay menyediakan film-film Hollywood    yang relatif baru tayang&nbsp;</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT</td>
                                  <td>Sudah ada OTT lain</td>
                                  <td width="624">kalau dicatchplay pak, untuk filmnya akan di update setiap minggu, dan untuk penggemar film bisa memilih tontonan 10 judul film setiap bulan gratis</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT</td>
                                  <td>Sudah ada OTT lain</td>
                                  <td width="624">Kelebihan    yang kami berikan selain harganya yg kompetitif, tayangan / variasi nya juga    lebih banyak</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT</td>
                                  <td>Sudah ada OTT lain</td>
                                  <td width="624">Untuk    film-filmnya akan diupdate secara berkala sehingga tidak monoton itu itusaja    (Cathplay)</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">OTT</td>
                                  <td>Sudah ada OTT lain</td>
                                  <td width="624">untuk    ott catchpay setiap peken judul judul filmnya akan diperbaharui, tentunya    akan lebih update dibanding ott yang lain</td>
                                </tr>
                                <tr height="19">
                                  <td height="19">OTT</td>
                                  <td>Sudah ada OTT lain</td>
                                  <td width="624">berbeda    dg OTT lainnya, OTT vidio/catchplay kami ini lebih update untuk tayangan    filmnya</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="66">OTT</td>
                                  <td width="158">Sudah    ada OTT lain</td>
                                  <td width="624">untuk    OTT yg kami tawarkan saat ini film filmnya lebih update dibanding dg yang    lain karena bapak sudah bisa menonton semua jenis film apapun<br>                                  </td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="66">OTT</td>
                                  <td width="158">Sudah    ada OTT lain</td>
                                  <td width="624">Baik    pak, disini untuk programnya kan bisa bapak banding kan, boleh bapak rasakan    benefitnya, didalamnya sudah ada Drama series, Film Blockbuster Hollywood,    ada Anime.... Jadi tayangannya sangat bervariatif Pak/Bu,&nbsp;</td>
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