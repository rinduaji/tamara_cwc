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
						      <p>Rule : <a href="ref_2p3p.php">2P - 3P</a></p>
						      <p>| <a href="ref_homewifi.php">Home WiFi</a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_tmolo.php">TM_OLO</a> | <a href="ref_upgrade.php">Upgrade </a>| </p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="20">
                                  <td height="20" width="165"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="221"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="745"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">Sebelumnya    Mohon maaf utk ketidaknyamanan nya ya pak/bu..kita harapkan kedepan nya utk    penggunaan program yg bpk/ibu gunakan saat ini bisa berfungsi dengan    baik..<br>
                                    dan jika bpk / ibu bersedia berlangganan maka program ini bbisa sangat    berguna .. Karena dengan penambahan useetv ini bpk/ibu bisa menyaksikan    layanan televisi dengan 86 channel di dalamnya, selain itu juga bisa&nbsp; internetan, browsing, youtube bahkan    karokean.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">Mungkin    saat ini Bpk/Ibu merasa blm perlu tapi apabila Bpk/Ibu sudah    merasakan/menyaksikan programnya pasti ini sangat dirasakan manfaatnya karena    untuk tarif penambahan 60k+ppn 10%nya juga dikenakan mulai bulan depan, dan    tdk semua pelanggan mendapatkan penawaran ini &amp; keunggulannya modem sudah    hybrid ( kualitas nya sudah high definisi ) tv nya tidak perlu tv khusus    dengan tv tabung juga bisa dipergunakan. jdi fungsinya nanti seperti smart    tv.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">apakah    tidak disayangkan bu/pak ini penawarannya hanya 1 kali,selain itu benefit    yang bpk/ibu dapatkan juga banyak sekali dengan tarif yang hemat seperti    keunggulan nya sendiri ibu/bpk bisa,tv on demand,karaoke. bpk/ibu juga sdh    bisa mengakses langsung dari TV yang bpk/ibu gunakan</td>
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
                                  <td width="745">Program    nya kan sifatnya rekomendasi penawaran bu jadi tdk semua nomor salah satu nya    dinomor ibu..benefitnya sudah cukup banyak selain channel terbaru yg    diberikan alat nya pun sdh yg terbaru stb hybird kualitasnya sdh hd jadi    nanti tv ibu akan disetting spt smart tv..</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">sangat    sayang jikalau bpk/ibu lewatkan, krn program kita rekomendasi penawaran    langsung dari pusat, diberikan hanya PL telkom yg terpilih, jadi tidak semua    nomor mendapatkannya, dan jika ibu / bpk bersedia berlangganan maka&nbsp; utk    programnya ini boleh bpk/ibu optimalkan senyamannya bpk/ibu, krn utk    penambhan juga baru dikenakan di bln dpn, tapi nanti ketika programnya sudah    dipasangkan atau sudah aktif disistem</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">tp    sangat syg jikalau bpk lewatkn, karena programnya kita rekomendasi penawaran    lgsg dri pusat, dan utk penambahannya juga bukan ditagihkan skrg, tapi    ditagihkan nanti mulai bulan depan dan itupun belum full/prorata. Ketika    program sudh dipsgkan atau sudah aktif maka billing mulai berjalan. saya    yakin kdepannya akan sgt bermanfaat utk bpk dan keluarga, krn kedepannya tv    bpk sudh multifungsi, selain bisa menonton bpk juga sudah bisa akses inet    lgsg dri tvnya, jd pemakainnya sdh jauh efektif dan canggih penggunaaanya</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">baik,    sangat di sayangkan pak/buk utk melewatkan program ini, karna penawarannya    tidak semua pelanggan telkom kita bu/pak, hanya utk pelanggan terpilih saja    kita berikan pak/buk,&nbsp;&nbsp; kita yakin untuk programnya sangat    bermanfaat&nbsp; untuk dinikmati bersama keluarga di rumah, karena nanti    selain bapak bisa menikmati 95 channelnya (EntryHD), bapak bs juga    internetan, browing, yotube, streaming dan karokean&nbsp; dari langsung dri    tv bapak/ibu saat ini.</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">BELUM    PERLU</td>
                                  <td width="745">Sangat    di sayangkan jika bapak melewatkan penawaran ini,bapak akan sangat di    untungkan karena bapak nanti sudah bisa langsung internetan dri televisi    bapak krn bapak akan d brikan alat terbaru yaitu decoder hybrid yg berbasis    android.jd televisi bapak nanti itu selain untuk internetan bisa juga untuk    karaoke,streaming video,sosial media,browsing langsung dr televisi nya,jd    lebih puas,dan bapak juga akan d berikan 95 channel (EntryHD) unggulan lokal    dan international,dan pak tarifnya pun sudah d beri tarif khusus,tarifnya    hanya penambahan 60 rb + ppn 10% setiap bulan nya berlaki selama    berlanggana,dan kita pastika tidak akan ada kenaikan penambahan tarif lg    untuk program ini, krn ini bukan promo pak...klu promo kan 2 bulan 3    bulan,kalau ini tetap pak</td>
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
                                  <td width="745">Mohon    maaf untuk ketidaknyamanannya pak. Kami yakin program yang kami tawarkan ini    tidak akan mengecewakan bapak dan keluarga karena sudah dipilih melalui    rekomendasi kelayakan jaringan dari Telkom. Dan apabila ada kendala, kami    juga memberikan kemudahan untuk bapak dan keluarga membuat laporan pengaduan    melalui aplikasi my indihome agar bapak bisa memonitor progres laporannya    langsung dari aplikasi</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">KECEWA    DENGAN TELKOM</td>
                                  <td width="745">Sebelumnya    Mohon maaf utk ketidaknyamanan nya ya bu..kita harapkan kedepan nya utk    penggunaan program yg ibu gunakan saat ini bisa berfungsi dengan normal..jadi    memang saat ini ibu mendapatkan rekomendasi penawaran dengan tarif khusus dan    benefitnya pun sdh cukup banyak yg ibu dapatkan channelnya banyak dan    terbaru..alat stb nya pun sdh disediakan yg kualitas hd jadi bisa lgsg    internetan dari tv ibu..</td>
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
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">silahkan    ibu pergunakan agar bisa merasakan perbedaannya antara tv biasa dan tv cable    dari indihome. Karna dari segi kualitas gambar dan suara jauh lebih jernih    dan bagus</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">Baik,    begini pak, alat yg kami berikan ini bukan sperti tv Kabel biasa pak karna    tdak ada pada tv kabel lainnya. Nanti selain bpk sudah bisa menikmati 95    channel (paket entryHD) dan bs internetan dari tv bapak langsung, bpk jg bisa    menonton acara tv yang sudah lewat sampai dengan 7 hari ke belakang jdi kita    pastikan bapak tdak akan ketinggalan menonton channelnya. kita pastikan bapak    akan nyaman pak utk penggunaan program kita ini.</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">PAKAI    PROVIDER LAIN</td>
                                  <td width="745">baik    pak disini untuk programnya kan bisa bapak banding kan, boleh bapak rasakan    benefitnya yg sudah bisa internetan langsung dari tv, lengkap juga dgn 95    chanel (entryHD) yg bervariatif dan tentunya edukatif. Di program ini lengkap    juga dgn fitur video on demand, video recording, dan rewind&nbsp; tv. Program    ini juga sudah bisa karokean langsung dar&igrave; tv. Semua keunggulan ini saya    yakin tidak ada di penyedia tv kabel lainnya. Bpk juga saat ini diberikan    dengan tarif penambahan khusus/ bulannya hanya 60 rb + pajak 10 %. Dan    tagihannya berjalan di bulan depan ya pak.</td>
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
                                  <td height="60" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">TIDAK    MENARIK</td>
                                  <td width="745">Mohon    maaf sebelumnya bpk/ibu, untuk saat ini indihome memang belum ada kerja sama    dengan MNC grup, namun bpk/ibu tdk perlu khwatir karena channel2 yang    ditawarkan saat ini jg sudah banyak ada 95/149(tergantung paket yg    ditawarkan) chanel baik dalam dan luar negeri</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">Tidak    punya TV/TV tidak digunakan</td>
                                  <td width="745">Pemasangan    UseeTV yang saat ini ditawarkan menggunakan dekoder hybrid, jadi bpk/ibu tdk    perlu khawatir&nbsp; bisa    dipasangkan/digunakan ke perangkat yg support HDMI, seperti layar monitor    yang support HDMI<br>
                                      <br>
                                    (wajib ditanya&nbsp;    perangkat suport HDMI atau tidak)</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="165"><div align="center">2P - 3P</div></td>
                                  <td width="221">Tidak    punya TV/TV tidak digunakan</td>
                                  <td width="745">Baik    pak/ibu, disini tujuan saya menghubungi bpk/ibu agar kedepannya bisa    menggunakan layanan UseeTV ini dengan berbagai keunggulan, sehingga    menghadirkan fasilitas hiburan baru bagi keluarga dirumah</td>
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