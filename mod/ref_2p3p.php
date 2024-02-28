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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a>| <a href="promo.php">Promo Indihome TV</a> | <a href="script_terima_ggn.php">Script Terima Komplain Gangguan </a></h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>Rule : <a href="ref_2p3p.php">2P - 3P</a></p>
						      <p>| <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB Tambahan</a> | <a href="ref_upgrade.php">Upgrade </a>| <a href="ref_all.php">All</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do &amp; don't</a><a href="ref_downgrade.php"></a> | <a href="ref_stb.php">STB</a> | <a href="ref_homewifi.php">Home WiFi</a> | <a href="ref_terbuka.php">Kalimat Terbuka</a> | <a href="ref_p3k.php">P3K</a> | <a href="ref_video.php"></a><a href="ref_ott.php">OTT</a> | <a href="ref_kalibrasi.php">Kalibrasi</a><a href="ref_all.php"></a><a href="ref_risalahkalibrasi.php"></a> | <a href="ref_netflix.php">Netflix</a></p>
						      <p>&nbsp;</p>
						      <p>DAPROS TIDAK SUPPORT</p>
						      <table cellspacing="0" cellpadding="0">
                                <col width="73">
                                <col width="113">
                                <col width="98">
                                <tr height="19">
                                  <td height="19" width="73"><div align="center">1</div></td>
                                  <td width="113">PDD tidak boleh</td>
                                  <td width="98"></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center">2</div></td>
                                  <td colspan="2">TV tidak ada/ tidak bisa digunakan</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center">3</div></td>
                                  <td colspan="2">Prefix papua tidak boleh    2P3P</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172013</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172009</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172011</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172008</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172203</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172904</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">1729158</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172925</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172924</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172906</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172914</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172920</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172928</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172723</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172723</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172727</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172727</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172727</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172314</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172314</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172311</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172313</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172312</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172326</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172328</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172329</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172332</div></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172331</div></td>
                                  <td></td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>Update 16 Juli 2022 </p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="48">
                                <col width="170">
                                <col width="425">
                                <tr height="20">
                                  <td height="20" width="96">RULE</td>
                                  <td width="166">REASON DECLINE</td>
                                  <td width="820">REFERENSI    SCRIPT PENAWARAN</td>
                                </tr>
                                <tr height="100">
                                  <td height="100">2P - 3P</td>
                                  <td>SUDAH MEMILIKI STB    LAIN</td>
                                  <td width="820">Mungkin    bapak sudah memiliki stb yg lain, tetapi keunggulan indihome tv kami adalah    sudah support tv digital, terdapat chanel lokal dan internasional yang bisa    menambahn variasi tontonan bagi keluarga, selain itu terdapat fitur pause    &amp; rewind yang tidak ada di stb lain pak/bu.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">2P - 3P</td>
                                  <td>SUDAH MEMILIKI STB    LAIN</td>
                                  <td width="820">istimewanya    selain stb dari kami sudah suport untuk tayangan digital yang dicanangkan    pemerintah bapak dan ibu juga akan mendapatkan tayangan yang lebih beragam    .... (sampaikan kembali benefit paket yang ditawarkan beserta tarifnya )</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">2P - 3P</td>
                                  <td>SUDAH MEMILIKI STB    LAIN</td>
                                  <td width="820">kalau    stb bapak yang sekarang kan hanya untuk browsing ya pak ya, kalau stb dari    indihome ini selain bisa browsing juga sdh dilengkapi dgn (jlh channel yang    ditawarakan) channel yang beragam, ada channel (sampaikan deskripsi channel)</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">2P - 3P</td>
                                  <td>SUDAH MEMILIKI STB    LAIN</td>
                                  <td width="820">Bisa    kita jelaskan sebentar pak penawaran kita ini sangat menarik karena kelebihan    dari stb indihome yang kami tawarkan bisa juga tv on dimand jadi jika ada    tayangan yang terlewatkan bapak bisa nonton kembali sampai 7 hari ke belakang</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">2P - 3P</td>
                                  <td>SUDAH MEMILIKI STB    LAIN</td>
                                  <td width="820">Kelebihan    STB Indihome TV kami, selain bisa menonton channel tv lokal, bapak/ibu bisa    juga menonton channel tv internasional yang lebih beragam, dan tentunya tidak    akan mengurangi kuota internet.</td>
                                </tr>
                                <tr height="20">
                                  <td height="20">2P - 3P</td>
                                  <td>SUDAH MEMILIKI STB    LAIN</td>
                                  <td width="820">fitur    di ussetv lebih banyak dan bervariatif dibanding modem lain</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="20">
                                  <td height="20" width="165"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="221" align="right" valign="bottom"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="745"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">Sebelumnya Mohon maaf utk ketidaknyamanan nya ya pak/bu..kita harapkan kedepan nya utk penggunaan program yg bpk/ibu gunakan saat ini bisa berfungsi dengan baik..<br>
                                  dan jika bpk / ibu bersedia berlangganan maka program ini bisa sangat berguna .. Karena dengan penambahan useetv ini bpk/ibu bisa menyaksikan layanan televisi dengan xx channel di dalamnya, selain itu juga bisa  internetan, browsing, youtube bahkan karokean.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">Mungkin saat ini Bpk/Ibu merasa blm perlu tapi apabila Bpk/Ibu sudah merasakan/menyaksikan programnya pasti ini sangat dirasakan manfaatnya karena untuk tarif penambahan 60k+ppn 10%nya juga dikenakan mulai bulan depan, dan tdk semua pelanggan mendapatkan penawaran ini &amp; keunggulannya modem sudah hybrid ( kualitas nya sudah high definisi ) tv nya tidak perlu tv khusus dengan tv tabung juga bisa dipergunakan. jdi fungsinya nanti seperti tv interaktif.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">apakah    tidak disayangkan bu/pak ini penawarannya hanya 1 kali,selain itu benefit    yang bpk/ibu dapatkan juga banyak sekali dengan tarif yang hemat seperti    keunggulan nya sendiri ibu/bpk bisa,tv on demand,karaoke. bpk/ibu juga sdh    bisa mengakses langsung dari TV yang bpk/ibu gunakan (tidak berlaku jika pelanggan perlu konfirmasi pihak lain) </td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">dengan    migrasi ke program 3p yang semula bapak hanya menikmati internet dan telpon    saja, selanjutnya bapak bisa menikmati layanan tv kabelnya juga yang tentunya    disini akan memberikan manfaat yang lebih ke pada bapak dan keluarga, contoh    bapak tidak perlu khawatir dengan tontonan anak anak karena bapak bisa    mengontrol dan mengaturnya besar harapan kami bapak akan selalu mempergunakan    program kami</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">ibu/bapak    untuk programnya memang tidak semua kami hubungi, jadi hanya pelanggan2 yg    direkomndasikan langsung dari telkom saja yang bisa mendapatkan program ini</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">sangat    disayangkan jika bapak tidak berlangganan program yang kami tawarkan, karena    program yang saat ini kami tawarkan hanya untuk pelanggan pilihan, yang    dilihat dari pembayarn selalu lancar.silakan bapak program ini akan sangat    bermanfaat buat bapak dan keluarga</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">untuk    saat ini mungkin belum perlu pak, namun dengan pesatnya perkembangan    teknologi, nanti bpk/ibu tidak hanya bisa menonton usee tv tp juga browsing    dan streaming youtube melalui tv krn STB nya sudah hybrid pak/bu. selain itu    usee tv jg memiliki keunggulan fitur play back, pause and rewind dan juga    record pak/bu</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">sayang    untuk dilewatkan pak/bu, penawarannya tidak kita berikan kepada semua    pelanggan setiap saat, jd hanya untuk yang terpilih saat ini saja yg bisa    mendapatkannya,&nbsp; nah ini kita yakin untuk programnya sangat nyaman untuk    bersama keluarga di rumah, karena selain bapak mendapatkan 95 channelnya    (EntryHD), bapak bs internetan, bahkan karokean&nbsp; dari tvnya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">Program    nya kan sifatnya  penawaran bu jadi tdk semua nomor salah satu nya    dinomor ibu..benefitnya sudah cukup banyak selain channel terbaru yg    diberikan alat nya pun sdh yg terbaru stb hybird kualitasnya sdh hd jadi    nanti tv ibu akan disetting spt smart tv..</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">tp    sangat syg jikalau bpk lewatkn, karena programnya kita  penawaran    lgsg dri pusat, dan utk penambahannya juga bukan ditagihkan skrg, tapi    ditagihkan nanti mulai bulan depan dan itupun belum full/prorata. Ketika    program sudh dipsgkan atau sudah aktif maka billing mulai berjalan. saya    yakin kdepannya akan sgt bermanfaat utk bpk dan keluarga, krn kedepannya tv    bpk sudh multifungsi, selain bisa menonton bpk juga sudah bisa akses inet    lgsg dri tvnya, jd pemakainnya sdh jauh efektif dan canggih penggunaaanya</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">baik,    sangat di sayangkan pak/buk utk melewatkan program ini, karna penawarannya    tidak semua pelanggan telkom kita bu/pak, hanya utk pelanggan terpilih saja    kita berikan pak/buk,&nbsp;&nbsp; kita yakin untuk programnya sangat    bermanfaat&nbsp; untuk dinikmati bersama keluarga di rumah, karena nanti    selain bapak bisa menikmati 95 channelnya (EntryHD), bapak bs juga    internetan, browing, yotube, streaming dan karokean&nbsp; dari langsung dri    tv bapak/ibu saat ini.</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">Sangat    di sayangkan jika bapak melewatkan penawaran ini,bapak akan sangat di    untungkan karena bapak nanti sudah bisa langsung internetan dri televisi    bapak krn bapak akan d brikan alat terbaru yaitu decoder hybrid. jd televisi bapak nanti itu selain untuk internetan bisa juga untuk    karaoke,streaming video,sosial media,browsing langsung dr televisi nya,jd    lebih puas,dan bapak juga akan d berikan 95 channel (EntryHD) unggulan lokal    dan international,dan pak tarifnya pun sudah d beri tarif khusus,tarifnya    hanya penambahan 60 rb + ppn 10% setiap bulan nya berlaki selama    berlanggana,dan kita pastika tidak akan ada kenaikan penambahan tarif lg    untuk program ini, krn ini bukan promo pak...klu promo kan 2 bulan 3    bulan,kalau ini tetap pak</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">Bpk    tdk perlu khawatir saya yakin bahwa program ini akan sangat bermanfaat bagi    bpk kedpnnya, sehubungan dgn perkembangan tehnologi maka kebutuhan akan    tayangan TV juga akan semakin meningkat pak&nbsp; ( benefit ) dan tarif    penambahan 66rb rupiah sudah bs mendapatkan 95 chanel (EntryHD)&nbsp; sehingga dgn penawaran ini tarif    perchanelnya juga sangat hemat pak&nbsp; , sehingga dr penawaran ini bpk bs    mendapatkan variasi tayangan TV semakin banyak dgn tarif yg hemat&nbsp;&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">disinikan    penambahannya hanya 60 ribu , utk biaya pemasangan tidak dikenakan biaya    tambahan lagi seperti fasilitas remote, stb, kabel difasilitasi oleh    kami.&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">pembayarannya    kan mulai bulan depan dan itupun masih dengan prorata atau belum full    penambahannya baru bulan kedua full 60rbu/120rbu. Dan untuk pemasangan    alatnya tdk dieknakan biaya jadi ibu tidak perlu khawatir lg</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">bp/ibu    berhak mendapatkan tarif khusus xxxx + ppn 10% ,dg bln dpn/bln pertama    dikenakan tarif prorata dan bln selanjutnya dikenakan tarif normal per bln    nya . Dan bpk/ibu yang tadinya akses internet sperti youtube, nonton film    melalui hp, nanti stlh berlangganan useetv bpk/ibu bsa mengakses youtube,    tvod, streaming dll melalui televisi</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Penawaran    y diberikan khusus pelanggan terpilih saja pak/bu dan tarif penambahan y pun    dberikan tarif khusus hanya 60000 plus ppn 10% ini selamanya bukan promo    beberapa bulan saja dan pemasangan y pun sudah kami gratiskan alat instalasi    termasuk dekodernya sudah dsediakan jd bapak /ibu tdk perlu memberikan uang    tips apapun kepada petugas kami&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Penambahan    yg kami tawarkan tdk mahal pak/bu krn harga promo ini berlaku selama bpk/ibu    berlangganan program yg kami tawarkan<br>
                                    Kami pastikan ini tdk mahal pak/bu krn ini penawaran khusus bagi pelanggan    setia Telkom (tdk smua plg mendapatkan penawaran ini )</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Bapak,    tarif yang kami tawarkan cukup murah. Hanya dengan penambahan 60 rb + ppn 10%    perbulan, bapak bisa menikmati 95 channel (entryHD) terbaik dari lokal maupun    international. Selain itu ibu diberikan setup box agar ditelevisinya bisa    mlakukan browsing dan streaming youtube&nbsp; Selain itu bapak juga bisa    nonton siaran 7 hari yang lalu apabila tidak sempat menonton livenya dan juga    karaoke langsung dari televisi layaknya smart tv seharga belasan juta rupiah</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Bapak,    tarif yang kami tawarkan cukup murah. Hanya dengan penambahan 60 rb + ppn 10%    perbulan, bapak bisa menikmati 95 channel (EntryHD) terbaik dari lokal maupun    international. Selain itu bpk diberikan setup box agar ditelevisinya bisa    mlakukan browsing dan streaming youtube&nbsp; Selain itu bapak juga bisa    nonton siaran 7 hari yang lalu apabila tidak sempat menonton livenya dan juga    karaoke langsung dari televisi layaknya smart tv seharga belasan juta rupiah.    Dan program khusus yg sudah bisa karokean langsung dar&igrave; tv yg kita yakin    pak/bu untuk fitur2 ini tidak ada di penyedia tv kabel lainnya</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Sangat    sayang sekali ibu lewatkan program nya karna tdk semua nomor yg mendapatkan    penawaran nya salah satunya di nomor ibu<br>
                                    Tarifnya pun ibu diberikan tarif khusus hanya penambahan 66rb setiap bulan    selama berlanggan jadi bukan dengan tarif promo yg sewaktu2 bisa berubah.    Penambahannya pun baru dimulai dibulan depan itupun masih prorata nanti baru    mulai full dibulan keduanya (sebutkan nama bulannya). Jika ibu bersedia    berlangganan maka ibu bs merasakan keunggulan programnya dan saya pastikan    ini sangat bermanfaat buat ibu , krn programnya berkualitas&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">baik    B/I disini kan B/I sudah diberikan tarif khusus ny dengan penambahan 60.000    saja + ppn 10% selama berlangganan B/I sudah bisa menikmati 95 channel    (EntryHD) terbaik dari Telkomnya baik lokal dan internasionalnya, dan B/I    juga sudah bisa melakukan browsing, youtube, streaming ataupun karokean    langsung dari tv B/I dan pada saat pemasangan B/I tidak perlu memberikan uang    apapun kepada petugas kita karna untuk biaya pemasangan serta instalasinya    sudah digratiskan oleh pihak telkom</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Kan    sangat sayang pak,&nbsp; karena disini bapak langsung direcomendasikan dari    telkomnya jdi bapak diberikan tarif khusus dan ini juga tidak ke semua    pelnggan, kita berikan hanya kepada pelanggan terpilih saja dan untuk tarif    juga bapak diberikan tarif khusus dengan penambahan 60k + ppn 10% per bulan    sudah bisa bapak nikmati selama berlangganan.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Baik    pak , untuk penawaran nya ini kan kita berikan hanya untuk nomor yang    terpilih saja pak bukan untuk semua pelanggan indihome, dan untuk tarif    penambahan perbulannya pun bpk di beri tarif penambahan khusus hanya di 60rb    + pajak 10% ,jika bapak bersedia berlangganan bapak bisa bandingkan nantinya    dengan benefit yang bapak dapatkan bersama keluarga karena kita yakin    programnya sangat bermanfaat.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">HARGA    MAHAL</td>
                                  <td width="745">Bpk    tdk perlu khawatir saya yakin bahwa program ini akan sangat bermanfaat bagi    bpk kedpnnya, sehubungan dgn perkembangan tehnologi maka kebutuhan akan    tayangan TV juga akan semakin meningkat pak&nbsp; ( benefit ) dan tarif    penambahan 66rb rupiah sudah bs mendapatkan 95 chanel sehingga dgn penawaran    ini tarif perchanelnya juga sangat hemat pak&nbsp; , sehingga dr penawaran    ini bpk bs mendapatkan variasi tayangan TV semakin banyak dgn tarif yg    hemat&nbsp;&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">JARANG    DIGUNAKAN</td>
                                  <td width="745">Pak/bu    program ini kami berikan setiap bulan dan setiap hari selama 24 jam penuh.    Dan tidak mungkin bpk/ibu 24 jam itu tidak berada dirumah. Jadi kalau    misalnya bpk/ibu sudah di rumah atau sedang libur, bpk/ibu bisa menonton    tayangan usee tv dgn keluarga bpk/ibu.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">Mohon    maaf untuk ketidaknyamanannya pak. Kami yakin program yang kami tawarkan ini    tidak akan mengecewakan bapak dan keluarga karena sudah dipilih melalui     kelayakan jaringan dari Telkom. Dan apabila ada kendala, kami    juga memberikan kemudahan untuk bapak dan keluarga membuat laporan pengaduan    melalui aplikasi my indihome agar bapak bisa memonitor progres laporannya    langsung dari aplikasi</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">Sebelumnya    Mohon maaf utk ketidaknyamanan nya ya bu..kita harapkan kedepan nya utk    penggunaan program yg ibu gunakan saat ini bisa berfungsi dengan normal..jadi    memang saat ini ibu mendapatkan  penawaran dengan tarif khusus dan    benefitnya pun sdh cukup banyak yg ibu dapatkan channelnya banyak dan    terbaru..alat stb nya pun sdh disediakan yg kualitas hd jadi bisa lgsg    internetan dari tv ibu..</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">Mohon    maaf untuk ketidaknyamanannya. Tapi kami yakin bapak tidak kecewa dengan    penawaran ini karena untuk prosesnya sudah dimudahkan dan sudah melalui    survey kelayakan jaringan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">mohon    maaf ya B/I untuk ketidaknyamanan ny kita akan bantu konfirmasi untuk kendala    B/I saat ini namun jika B/I nanti ada kendala lagi boleh B/I laporkan melalui    147 atau boleh langsung ke plasa telkom ny B/I</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">Mohon    maaf&nbsp; pak atas ketidaknyamanan nya ,kita pastikan kedepannya&nbsp; hal    tersebut tdk terjadi lagi, semoga kedepannya program telkom yg bapak gunakan    semakin membaik kedepannya.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">Mohon    maaf ya ibu untuk ketidaknyamanan ny kita akan bantu konfirmasi untuk kendala    Ibu saat ini namun jika Ibu nanti ada kendala lagi boleh Ibu laporkan melalui    147 atau boleh langsung ke plaza telkom nya , kemudian infokan program    penawaran nya&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">untuk    tarifnya berlaku selama bpk/ibu berlangganan tidak promo2 lg, kalau promo ada    masa berlakunya pak, namun ini tidak.. penambahannya Flat setiap bulannya,    cukup dengan penambahan xxx (sebutkan tarif berlangganan dengan lengkap)</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">Untuk    pemasangan UseeTV ini bpk/ibu sudah dapatkan banyak fitur yang tidak dimiliki    oleh provider lain seperti : Layanan TV on Demand, Pause and Rewind, Karaoke    on Demand, Video Recorder dan Parenting Control sehingga untuk penggunaan nya    nanti jauh lebih nyaman dan bermanfaat</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">Sebagai    perbandingan dgn produk yg lain biasanya tv kabel mempergunakan parabola,Utk    keunggulan UseeTV ini diakses melalui jaringan internet sehingga lebih stabil    dan jaringan sdh handal ( fiber optik ) --&gt; dengan catatan tidak    menyebutkan nama provider lain</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">Dengan    menggunakan Indihome Migrasi 2P to 3P jaringan nya lebih stabil di banding    dengan provider lain, karena untuk indihome sendiri sudah menggunakan FO,    jadi tidak akan terganggu pengaruh dari cuaca--&gt; dengan catatan tidak    menyebutkan nama provider lain</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">Selain    itu fasilitas UseeTV memiliki 7 kelebihan diantaranya - TVOD ( Tv on demand )    bisa menonton film &amp; acara favorit yg terlewatkan hingga 7 hari    kebelakang - VOD ( Video on demand ) UseeTV Cable menyajikan berbagai macam    film bagi Anda film nasional,internasional, dokumenter,sport dll melalui menu    VIDEOS Pda EPG - Pause / Play &amp; Rewind jika bpk / ibu sedang sibuk masak    atau ke toilet bisa di pause &amp; play kembali maupun rewind - Video    recorder bisa merekam suatu program acara maupun film favorit&nbsp; - Karaoke    - Mendengarkan musik dari berbagai genre ( pop,r&amp;b, jazz &amp; rock ) -    Parental block yaitu bisa memblock atau mengunci tayangan film dewasa melalui    remote useetv</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">benefit    : jadi dengan program migrasi useetv ini bpk bisa mengakses inet melalui tv,    misalnya nonton youtube streaming, maupun browsing.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">Baik,    begini pak, alat yg kami berikan ini bukan sperti tv Kabel biasa pak karna    tdak ada pada tv kabel lainnya. Nanti selain bpk sudah bisa menikmati 95    channel (paket entryHD) dan bs internetan dari tv bapak langsung, bpk jg bisa    menonton acara tv yang sudah lewat sampai dengan 7 hari ke belakang jdi kita    pastikan bapak tdak akan ketinggalan menonton channelnya. kita pastikan bapak    akan nyaman pak utk penggunaan program kita ini.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">Baik...begini    Bapak / Ibu , untuk penawaran Usee TV kita ini , alat yang kita berikan    berupa STB Hybrid, selain Bapak / Ibu bisa menikmati channel yang di sediakan    , dari televisi Bapak / Ibu juga bisa Internetan, nonton youtube, streaming    dan Bapak / ibu bisa juga menikmati fitur lainnya&nbsp; seperti TV on demand,    Video on demand, serta ada fitur pause dan rewind, dan bisa saya pastikan    bapak/ Ibu akan jauh lebih nyaman...</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">SUDAH    PERNAH BERLANGGANAN</td>
                                  <td width="745">Mohon    maaf sebelumnya mengapa bpk/ibu berhenti berlangganan? karena benefitnya pun    sdh cukup banyak yang bpk/ibu dapatkan, channelnya banyak dan terbaru, serta    dekoder/stb nya pun sudah yang hibrid jadi bpk/ibu bisa langsung internetan    dari tv</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">SUDAH    PERNAH BERLANGGANAN</td>
                                  <td width="745">Program    yang ditawarkan ini pasti akan bermanfaat untuk bpk/ibu beserta keluarga,    penggunaan televisi bpk/ibu nantinya akan terasa lebih maksimal dengan    benefit-benefit yang kami berikan. Seluruh anggota keluarga dirumah sudah    bisa menggunakan televisi yang jauh lebih canggih dari biasanya.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60"><div align="center">2P - 3P</div></td>
                                  <td>TIDAK    MENARIK</td>
                                  <td>Mohon    maaf sebelumnya bpk/ibu, untuk saat ini indihome memang belum ada kerja sama    dengan MNC grup, namun bpk/ibu tdk perlu khwatir karena channel2 yang    ditawarkan saat ini jg sudah banyak ada 95/149(tergantung paket yg    ditawarkan) chanel baik dalam dan luar negeri</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>Update 9 April 2021 </p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="111">
                                <col width="155">
                                <col width="597">
                                <tr height="80">
                                  <td height="80" width="97"><div align="center">2P - 3P</div></td>
                                  <td width="170">PROVIDER LAIN</td>
                                  <td width="815">kalau paket tv    berlangganan yang bapak gunakan saat ini maaf apakah sudah menyediakan fitur    Pause pak? jadi kalau bapak sedang nonton acara kegemaran dan harus    meninggalkan tv nya, acara bisa dihentikan terlebih dahulu?<br>
                                  tidak hany itu pak, masih banyak fitur2 lainnya yang hany ada di useetv    indihome</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="97"><div align="center">2P - 3P</div></td>
                                  <td width="170">JARANG    DIGUNAKAN</td>
                                  <td width="815">Baik    pak/bu jika berlangganan ussetv ini mungkin bapak dan keluarga akan lebih    aktif dalam penggunaan fasilitas telkomnya, krn dengan pemasangan useetv ini,    channel yg kita sediakan juga 95channel dan juga sudah bisa membuka youtube    dari televisi bapak, jadi lebih menarik jika bapak mengambil paket yang kita    tawarkan ini</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="97"><div align="center">2P - 3P</div></td>
                                  <td width="170">BELUM    PERLU</td>
                                  <td width="815">dengan    migrasi ke program 3p yang semula bapak hanya menikmati internet dan telpon    saja, selanjutnya bapak bisa menikmati layanan tv kabelnya juga yang tentunya    disini akan memberikan manfaat yang lebih ke pada bapak dan keluarga, contoh    bapak tidak perlu khawatir dengan tontonan anak anak karena bapak bisa    mengontrol dan mengaturnya besar harapan kami bapak akan selalu mempergunakan    program kami</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="97"><div align="center">2P - 3P</div></td>
                                  <td width="170">HARGA    MAHAL</td>
                                  <td width="815">Bapak,    tarif yang kami tawarkan cukup murah. Hanya dengan penambahan 60 rb + ppn 10%    perbulan, bapak bisa menikmati 95 channel (entryHD) terbaik dari lokal maupun    international. Selain itu ibu diberikan setup box agar ditelevisinya bisa    mlakukan browsing dan streaming youtube&nbsp; Selain itu bapak juga bisa    nonton siaran 7 hari yang lalu apabila tidak sempat menonton livenya dan juga    karaoke langsung dari televisi layaknya smart tv seharga belasan juta rupiah</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">BELUM    PERLU</td>
                                  <td width="815">Benefitnya    yang ibu/bpk dapatkan nanti sudah cukup banyak, untuk channel2nya saja kita    sudah berikan sebanyak 95ch unggulan, tayangan lokal maupun luar negri. Jd    nanti sudah bisa dimaksimalkan penggunaannya. Bahkan untuk alat nya juga sdh    yg terbaru stb hybird, jadi nanti bpk/ibu sudah bisa menonton seperti di    smart tv. Kedepannya bisa bapak evaluasi penggunaanya dan kami yakin bapak    akan terus berlangganan</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">BELUM    PERLU</td>
                                  <td width="815">Untuk    program yg kita berikan ini adalah program spesial dan tidak semua pelanggan    mendapatkannya, yang mana bpk/ibu sudah bisa memaksimalkan pmakaian inet    bpk/ibu. Biasanya hnya bpk/ibu nikmati di hp, kdepannya&nbsp; sdah multi fungsi bukan hanya utk sekedar    menonton tapi juga sudah bisa internetan, browing, yotube, dan streaming    langsung dri layar televisi bapak/ibu</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">Belum    perlu</td>
                                  <td width="815">Disaat    pandemi sperti sekarang, pastinya keluarga bpk banyak menghabiskan waktu di    rumah, agar kegiatan di rumahnya semakin menyenangkan alangkah baiknya    apabila ditemani dengan menonton acara televisi dari Indihome karena    mempunyai beragam macam acara mulai dari hiburan, anak-anak, film,musik,    olahraga, berita dll. Tentunya dengan harga yang sangat terjangkau, hanya Rp    60rb saja per bulannya plus ppn 105</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">Mahal</td>
                                  <td width="815">Bapak/ibu    kan sudah berlangganan INDIHOME jadi sayang pak/bu kalau di lewatkan    penawaran dari kami..karen benefit dr UseeTV yang kami tawarkan bisa di    gunakan oleh keluarga di rumah..selain tontonan dr TV biasa yang bapak/ibu    tonton setiap harinya, keluarga bapak bisa menonton Channel2 yang menarik dr    UseeTV yang kami tawarkan, ada ...... CH (sebutkan jumlah ch yang akan di    tawarkan) loh pa... menarik kan? tambahannya juga hanya RP..... + ppn 10%    cukup murahkan pak/bu dengan mendapatkan Ch sebanyak .......(sebutkan jumlah    ch yang akan di tawarkan)</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">Tidak    mau karena tidak ada MNC&nbsp;</td>
                                  <td width="815">bpk/ibu    untuk saat ini indihome memang belum ada kerja sama dengan MNC group, namun    bpk/ibu tdk perlu khawatir karena channel2 yang ditawarkan saat ini jg sudah    banyak sekali ada 95 Chanel, baik chanel dalam dan luar negeri bahkan    Bapak/ibu&nbsp; juga menikmati fitur TV on    demand, Video on demand, serta ada fitur pause dan rewind, dan bisa saya    pastikan tayangan bpk akan lbh bervariasi&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">BELUM    PERLU</td>
                                  <td width="815">Bapak    ibu tdk perlu khawatir,karena kita disini akan menambahkan fasilitas yg jauh    lebih modern yg akan dipasangkan di TV bapak yg biasa yg dimana nantinya akan    seperti TV Smart atau TV pintar. Dg hanya penambahan biaya berlangganan yg    ekonomis cukup di 60k plus ppn 10% setiap bulannya ibu atau bapak sudah bisa    menikmati layanan di TV nya seperti browsing internet,streaming yutub,tv on    demand dan masih banyak lagi</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">Belum    perlu</td>
                                  <td width="815">Disini    bisa dinilai sendri pak dr segi manfaatnya untuk bpk dn sekeluarga sprti apa,    jika nnti sekiranya bermnfaat untk bpk n seklurga baru nnti bs dipergunkn    untk benft dn keuntungannya slma bpk berlnggnan indihomenya pun juga bisa</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">BELUM    PERLU&nbsp;</td>
                                  <td width="815">Bapak/ibu    keunggulan dari produk ini bapak tidak perlu membeli tv baru, cukup gunakan    tv yang ada saja sudah bisa menjadi smart tv yang kekinian bapak&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">Jarang    Nonton TV</td>
                                  <td width="815">Jika    bapak/ibu jarang menonton tv , tapi dirumah masih ada&nbsp; keluarga yang lain ya pak/bu .. saya yakin    jika keluarga&nbsp; bapak/ibu diberikan    fasilitas lebih dengan program useetv pasti sangat senang.. nanti bapak dan    keluarga nontonnya lebih seru dan tidak monoton pak</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">Belum    perlu</td>
                                  <td width="815">TAYANGAN    DI TV LEBIH MENARIK DAN BERMANFAAT DAN MEMBERI EDUKASI</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">tidak    sempat nonton/tdk ada waktu nonton:</td>
                                  <td width="815">untuk    penggunaan useetvnya bisa ditonton semua kalangan mulai dari anak hingga    dewasa karena tayangannya juga sudah beragam dan bervariatif sehingga jauh    lebih menarik untuk menonton tvnya bahkan bisa juga manfaatkan aplikasi    useetv go jika memang bapak/ibu tdk sempat menonton</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">lagi    masa pandemi</td>
                                  <td width="815">&nbsp;jadi disinikan lagi masa pandemi bapak ibu    dan biasanya kan klo lagi pandemi kan keluarga kebanyakan kumpul dirumah    ,,nah maka dari itu misalnya lagi kumpul keluarga dirumah bosen atau jenuh    kan bisa nnton film, youtube-an,dan tidak perlu kebioskop klo mau nnton film2    unggulan di usee tvnya bapak/ibu bisa</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">Belum    perlu</td>
                                  <td width="815">Sebenarnya    bapak tidak perlu khawatir , Kalau dari segi benefit sudah sangat bagus    sekali . Namun utk berapa lama bpk ingin berlangganan itu adalah hak bapak yg    menentukan. Jika program penawaran ini bermanfaat dan menarik bagi bapak dan    keluarga. bapak ingin berlangganan sampai berapa lama pun bahkan selamanya    pun utk yg kami sampaikan tdk akan ada perubahan. Yang jelas ketika program    aktif,, billing sdh mulai berjalan</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">&nbsp;Sibuk kerja jarang nyalain tv</td>
                                  <td width="815">mngkin    disini penggunaan useetv nya bisa di perkenakan sebagai media hiburan ketika    bapak/ibu sedang berada di rumah/berkumpul bersama keluarga disaat libur,    jadi bisa di maksimalkan kembali apalagi bisa di pergunakan streaming dan    channel kualitas sudah HD channel internasional pun juga ada</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">Belum    perlu</td>
                                  <td width="815">sayang    sekali pak jika di&nbsp; lewatkan karena    kami yakin untuk usee tv nya sangat bermnfaat bagi bapak dan keluarga</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="97"><div align="center">2P-3P</div></td>
                                  <td width="170">tarif    mahal</td>
                                  <td width="815">pak    tidak perlu khawatir nanti untuk biaya pemasangan sudah tidak di kenkan biaya    dan untuk tagihan nya pun baru di kenkan bulan depan dan belum penuh baru    penuh di bulan ke dua akan tetapi bapak sudah bisa menikamti usee tv nya 3    hari ke depan</td>
                                </tr>
				   </table>
						      <p>&nbsp;</p>
						      <p>Update 29 Oktober 2021 </p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="111">
                                <col width="155">
                                <col width="597">
                                <tr height="80">
                                  <td height="80" width="97"><div align="center">2P - 3P</div></td>
                                  <td width="170">HARGA MAHAL</td>
                                  <td width="815">DIBANDING PROVIDER LAIN	Produk kita berbeda pa/ bu, jaringan lebih stabil jika cuaca ektrim, misalnya hujan</td>
                                </tr>
				  </table>
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