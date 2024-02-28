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
						      <p>Rule : <a href="ref_indibox.php">Indibox</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade</a>  | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a><a href="ref_downgrade.php"></a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_stb.php">STB</a></p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="20">
                                  <td height="20" width="138"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="247"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="699"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">BELUM    PERLU</td>
                                  <td width="699">alat    keluaran terbaru,berbeda dengn televisi kabel yg ada yg tdk bisa dibawa    kemana-mana,untuk indibox bisa dibawa kemana2 asal ada jaringan wifi, dan tv    bisa di setting tv android</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">BELUM    PERLU</td>
                                  <td width="699">sayang    sekali di lewatkan pak karena keungulan indibox alatnya bs di bawa kemana2    karena sudah plug n play jadi jika di pasang ke tv yang sudah suport hdmi    maka sdh bs mnjadi smart tv</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">INDIBOX</td>
                                  <td width="247">BELUM    PERLU</td>
                                  <td width="699">Sebagai    perbandingan dgn produk yg lain biasanya tv kabel mempergunakan parabola,Utk    keunggulan Indibox ini diakses melalui jaringan internet pak/bu, sehingga    tampilan layar dapat lebih jernih dan stabil karna sudah menggunakan jaringan    ( fiber optik ), sehingga bapak dan keluarga di rumah bisa dimanjakan olah    tayangan-tayangan menarik yang kami sajikan.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">BELUM    PERLU</td>
                                  <td width="699">Apakah tidak disayangkan Bapak/Ibu? Dengan begitu banyak benefit dari dekoder Indibox produk unggulan dan sangat Flexibel sekali bisa di bawa kmn2 selama ada TV yang suport hdmi dan jaringan internet (jaringan inet bisa menggunakan provider apa saja dan sampaikan asalkan pemasangan pertama di INDIHOME yang di daftarkan dulu) juga bisa Mendonlot aplikasi yang diinginkan menjadi lebih mudah dan fleksibel sesuai keinginan bapak/ ibu</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">INDIBOX</td>
                                  <td width="247">BERHEMAT/    EFISIENSI</td>
                                  <td width="699">Harga    Indibox jauh lebih murah daripada membeli Smart TV baru.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">BERHEMAT/    EFISIENSI</td>
                                  <td width="699">Apabila    perangkat Indibox mengalami kerusakan selama berlangganan dengan IndiHome,    biaya perbaikan/perawatan gratis tidak dikenakan biaya apapun</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">HANYA    MAU MASA PROMO</td>
                                  <td width="699">silakan    Bp/Ibu, namun kami yakin program ini akan sangat bermanfaat bagi Bp/Ibu    karena kemudahan akses pada layanan indibox kami seperti bisa dibawa kemana    saja selama tersambung ke jaringan internet, hanya perlu berbicara dengan    google assistant yang berada diremote untuk mengakses youtube, dll</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">JARANG    DIGUNAKAN</td>
                                  <td width="699">kan    sayang pak/ bu daripada akses youtube atau inet lewat hp, melalui indibox    bisa langsung akses dari tv. layar lebih besar dan sudah ada google voice    input atau bisa menggunakan perintah suara. 133 film jg bisa langsung    dinikmati dengan gambar sudah HD.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">JARANG    DIGUNAKAN</td>
                                  <td width="699">Nantikan    dengan alat ini untuk pemakaian telefisinya lebih maksimal lagi, bisa digunkn    dg keluarga secara bersama, trus diisi lagi denggan benft portebel, dan bisa    langsung di toton di tv yang jauh lebih besar untuk tayangannya bapak&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">INDIBOX</td>
                                  <td width="247">JARANG    DIGUNAKAN</td>
                                  <td width="699">nah    bapak dengan adanya indibox ini bapak kan nanti bisa lebih mengunakan untuk    tv bapak jadi lebih seru</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">INDIBOX</td>
                                  <td width="247">JARANG    DIGUNAKAN</td>
                                  <td width="699">kami    sarankan ibu / bpk mengikuti program yg kami tawarkan karena indibox ini    dapat di akses bukan hanya di rumah bapak/ ibu yang menggunakan indihome    saja, karena setelah bpk/ibu sudah mengaktifkannya melalui jaringan indihome    di rumah, bpk/ibu juga dapat menggunakan indibox ini di lokasi tempat yang    berbeda asalkan lokasi yang bapak/ ibu gunakan terkoneksi oleh jaringan    internet. kami pastikan kualitas gambar sudah sangat ok dengan suara yang    jernih dan saya yakin kedepannya ibu / bpk memerlukan program yg kami    tawarkan Utk kebutuhan pendidikan putra putri bpk / ibu di rumah</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">KECEWA    DENGAN TELKOM</td>
                                  <td width="699">Mohon    maaf atas ketidaknyamanannya namun tidak perlu khawatir, jika bapak/ibu    terkendala dengan internet indihome bisa pergunakan&nbsp; provider internet lainnya, sehingga    penggunaan Indibox ini akan lebih maksimal. Yang paling penting aktivasi awal    dengan internet indihome yang kami tawarkan.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">KECEWA    DENGAN TELKOM</td>
                                  <td width="699">Bapak/    Ibu bisa bisa pergunakan alatnya diluar kota di rumah sodara atau di tempat    kerja karena alat nya sudah portable yang penting terkoneksi internet awal    dengan internet yang ditawarkan namun pemasangan kedua dan berikutnya bisa    dibawa kemana pun dan boleh dipasangkan dari koneksi internet dari provider    apapun.&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="699">Alat    Indibox sangat berbeda dari program sebelumnya, karena jauh lebih canggih    simple, praktis dan modern karena sudah portable bisa dibawa kemana    mana.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="699">Benefit    / fitur yang di dapatkan pelanggan jauh lebih banyak dan lebih modern,    pelanggan bisa nonton 133 movie yang telah tersedia, mulai dari film    Holywood, India, Asia, atau film anak - anak dengan kualitas tampilan gambar    sudah HD dan sudah dengan subtitle Indonesia.&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="699">Bisa    bermain games dan streaming Youtube di Televisi/TV.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="699">Tidak    sayang bpk/ibu, ini kan program terbaru yang ditawarkan oleh telkom, tentunya    programnya akan sangat bermanfaat bagi bpk/ibu beserta keluarga. Sudah lebih    praktis dalam penggunaannya dan tidak ada petugas yang datang ke lokasi untuk    pemasangan perangkat</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="699">sangat    disayangkan jika dilewatkan , karena disini kedepannya tv bpk/ibu&nbsp; bisa lebih canggih berbasis android    tampilan nya berubah dan fitur nya akan banyak , jadi penggunaannya lebih    aktif.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="699">&quot;bapak    apakah tdk sayang jika produknya dilewatkan,ketika produknya sudah aktif    bapak akan tau keunggulan dari produk kami, dan seberapa lama bapak    berlangganan produknya saya pastikan penambahan tarif normalnya tetap    perbulanya di&nbsp; 70rb+ppn10% ,dan tidak    akan ada kenaikan penambahan lagi...</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">PAKAI    PROVIDER LAIN</td>
                                  <td width="699">Bapak/Ibu    alat Indibox ini fitur nya jauh lebih lengkap karena sudah tersedia film    filmnya 133 film tanpa harus downlod dan berbayar.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">PAKAI    PROVIDER LAIN</td>
                                  <td width="699">Ibu    / bapak bisa untuk streaming youtube langsung di televisi, bahkan Indibox    sudah tersedia Youtube Kids jadi tayangan nya lebih aman untuk anak -    anak.&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">PAKAI    PROVIDER LAIN</td>
                                  <td width="699">Untuk    games nya pun sudah tersedia tinggal langsung dimainkan di Televisi    menggunakan perangkat remote yang sudah canggih yaitu remote Google voice    input artinya remote nya sudah ada perekam suaranya.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">PAKAI    PROVIDER LAIN</td>
                                  <td width="699">baik    jadi kalo untuk alat indibox ini untuk alatnya itu sudah portabel&nbsp; jadi bisa di bawa kemana mana bahkan di    bawa keluar kota sudah bisa untuk alat indiboxnya ini asalkan ada jaringan    internet dan televisi dan bisa dipindahkan kemanapun yang bapak inginkan    tanpa ada jarak maksimalnya.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">PAKAI    PROVIDER LAIN</td>
                                  <td width="699">Indibox    memiliki banyak film&nbsp; yang langsung    bisa ditonton, saat ini ada 133 film berbagai genre dan akan di update setiap    bulan &amp; bpk/ibu jg bisa instal berbagai aplikasi Android melalui Google    PlayStore</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">INDIBOX</td>
                                  <td width="247">PAKAI    PROVIDER LAIN</td>
                                  <td width="699">Baik    Bapak/Ibu... untuk alat indibox ini sudah tersedia game yang bisa langsung    dimainkan, 133 film yang diupdate secara berkala yang langsung bapak bisa    saksikan di tvnya serta untuk tayangan tayangannya pun sudah lengkap,    bapak/ibu cukup mengakses di menu video apps yg berisi beberapa aplikasi    tayangan tv yg berisi berita, sport (nba tv), tayangan anak, film, serial,dan    hiburan lainnya<br>                                  </td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="247">SUDAH    PERNAH DITAWARKAN</td>
                                  <td width="699">Perlu    saya sampaikan Bpk/Ibu untuk Indibox ini sangat berbeda dengan useetv krn    nantinya produk baru dr telkom ini selain sdh dibekali dengan 133 film    unggulan juga sdh bisa bongkar pasang aplikasi yang diiginkan seperti halnya    HP android krn sudah dibekali dengan playstore, jadi nanti juga bisa main    game, youtube dll.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">INDIBOX</td>
                                  <td width="247">SUDAH    PERNAH DITAWARKAN</td>
                                  <td width="699">Dan    kelebihannya indibox ini juga bisa dipindah pindah selama ada koneksi    internet dan tidak harus terhubung dengan jaringan indihome dirumah Bpk/Ibu    asalkan aktivasi pertama kali saja yg harus terhubung dengan indihome yang    terdaftar. Tidak hanya itu saja koneksi antara modem dan indibox sdh bisa    dengan wifi tdk perlu menggunakan kabel LAN jadi lebih praktis.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="247">TIDAK    ADA NETFLIX</td>
                                  <td width="699">Mohon    maaf bpk/ibu untuk saat ini memang belum ada kerja sama dengan netflix, namun    bpk/ibu tdk perlu khawatir untuk film berbagai genre juga sudah di sediakan,    dan saat ini ada 133 film dan akan terus di update</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">INDIBOX</td>
                                  <td width="247">Tidak    punya TV/TV tidak digunakan</td>
                                  <td width="699">alat    indibox ini fleksibel pak/bu karena tdk monoton di 1 tv atopun di 1 tempat    bisa digunakan, setelah bapak/ibu aktivasi indibox nya di nomor internet    terdaftar bapak/ibu sudah bisa gunakan indiboxnya di tv berbeda ato pun di    tempat berbeda selama tercover dengan jaringan internet untuk penggunaannya    pun sangat simple karena sudah kami setting untuk sistemnya itu plug and play    pak/bu artinya tinggal dicolokkan ke tv dari alat stb indibox melalui kabel    HDMInya</td>
                                </tr>
                                <tr height="200">
                                  <td height="200" width="138">INDIBOX</td>
                                  <td width="247">Tidak    punya TV/TV tidak digunakan</td>
                                  <td width="699">Oleh    karena itu agar Bapak/Ibu dan keluarga lebih sering menggunakan tvnya untuk    kumpul bersama keluarga karena sudah tersedia 133 film serta tayangan lain    yang lebih lengkap, bapak/ibu cukup mengakses di menu video apps yg berisi    beberapa aplikasi tayangan tv yg berisi berita, sport (nba tv), tayangan    anak, film, serial,dan hiburan lainnya<br>
                                    contoh : <br>
                                    1. vidio.com &raquo; live streaming acara tv nasional, dll<br>
                                    2. zee 5 tv : berisi tayangan film, berita, dan hiburan lainnya dari    india...<br>
                                    3. vlive : berisi tayangan hiburan dari korea seperti vlog artis    korea<br>
                                    4. nbc news : berita luar negeri<br>
                                  5. tubi tv : berisi film2 barat</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="40">
                                  <td height="40" width="138">INDIBOX</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">alatnya    masih alat terbaru, tidak setiap plg mendapatkan penawaran yg sama hanya plg    tertentu saja yg kami hubungi dan hanya kami sja yg bisa menawarkan kpd plg.</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">INDIBOX</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">dimana    jg nanti kan sdh ada film&quot; movie favorite yg kami berikan dan akan di    update secara bercakala</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">INDIBOX</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">utk    bpk/ibu kan penggunannya hanya internet saja oleh karena itu kami tawarkan    indibox agar bisa memaksimalkan penggunaan tv bpk/ibu yg nantinya akan kami    ubah menjadi smart tv berbasis android,kami jg sudah sediakan 133 movie yg    akan di update secara berkala bpk ibu jg bsa melakukan browsing layaknya    smartphone android (AO bsa tambahkan dg benefit lainnya)</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">INDIBOX</td>
                                  <td width="248">BELUM    PERLU&nbsp;</td>
                                  <td width="698">produk    ini sangat baru sekali dan masih tidak banyak yang memiliki kesempatan untuk    menikmatinya. untuk itu bapak sebagai pelanggan terpilih dari kami yang    mendapatkan kesempatan untuk merasakan berbagai fitur kecanggihan dari tv    bapak yang akan menjadi android tv dengan menggunakan indibox ini. mulai dari    menonton film tanpa download, mengakses youtube dan streaming siaran televisi    secara online. sayang sekali bila dilewatkan bapak</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">INDIBOX</td>
                                  <td width="248">BELUM    PERLU&nbsp;</td>
                                  <td width="698">bpk/ibu    untuk alat indiboxnya sdh di sediakan dari telkom jadi bpk/ibu tidak usah    membeli alat indiboxnya, indibox bsa merubah lcd tv atau led tv ibu yg biasa    bsa menjadi smart android tv selain itu alatnya portable bsa dipindahkan dari    satu tv ke tv yang lain asal ada jaringan inet dan tv kami yakin untuk    indiboxnya sangat menguntungkan bagi para pelanggan yg menyukai kemajuan    teknologi apalagi bsa streaming siaran tv local interlocal melalui vidio.com    yg ada di dalam aplikasi indiboxnya, bpk/ibu tidak akan rugi untuk    berlangganan indibox dan bsa di bandingkan dengan kompetitor lainya</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">INDIBOX</td>
                                  <td width="248">BELUM    PERLU&nbsp;</td>
                                  <td width="698">bpk/ibu    untuk alat indiboxnya sdh di sediakan dari telkom jadi bpk/ibu tidak usah    membeli alat indiboxnya, indibox bsa merubah lcd tv atau led tv ibu yg biasa    bsa menjadi smart android tv selain itu alatnya portable bsa di bawa kemana2    asal ada jaringan inet dan tv kami yakin untuk indiboxnya sangat    menguntungkan bagi para pelanggan yg menyukai kemajuan teknologi apalagi bsa    streaming siaran tv local interlocal melalui vidio.com yg ada di dalam    aplikasi indiboxnya, bpk/ibu tidak akan rugi untuk berlangganan indibox dan    bsa di bandingkan dengan kompetitor lainya</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">INDIBOX</td>
                                  <td width="248">Dampak    covid</td>
                                  <td width="698">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Produk ini sangat mendukung program pemerintah, bapak/ ibu akan sangat    terhibur dirumah menonton berbagai film dan serial yang telah kami sediakan    secara gratis, akses ke ribuan aplikasi dan game yang dapat dimainkan langsung    di Televisi bapak/ ibu, atau akses&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">INDIBOX</td>
                                  <td width="248">Dampak    covid</td>
                                  <td width="698">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Produk ini sangat mendukung program pemerintah, bapak/ ibu bisa Akses ke    1000 koleksi film yang tersedia di IndiBOX, buka aplikasi handphone dan main    game Android dari layar TV</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">INDIBOX</td>
                                  <td width="248">Dampak    covid</td>
                                  <td width="698">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Produk ini sangat mendukung program pemerintah, bapak/ ibu bisa Streaming    TV, Music, Games, Aplikasi dan Video On Demand (VOD). IndiBox juga    menyediakan Fitur Google Assistant yang memungkinkan melakukan pencarian    menggunakan Remotenya. Jadi bapak/ ibu dan keluarga tidak lagi&nbsp; nonton di layar HP yang bikin mata    perih.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">INDIBOX</td>
                                  <td width="248">ini    kan jarang saya pake TV drumah</td>
                                  <td width="698">maka    dari itu bu kami tawarkan untuk&nbsp; alat    indibox ini bisa dibawa kmna saja bu , ke rumah sodara atau ke tempat lain    asal terhub dgn internet dan TV yg support HDMI, jadi ibu bisa memakai    alatnya secara fleksibel,,, mau dimnapun dan bersama siapa pun bisa , asal    ada koneksi internet dan terhub dgn TV nya yg support HDMI</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">INDIBOX</td>
                                  <td width="248">Masih    nyaman dengan paket existing</td>
                                  <td width="698">Sangat    di sayangkan skli pak, karena prangkat indibox ini sifatnya portable namun    bukan modem portable, sangat mudah di gunakan dan di bawa kemn2 selama    terhubung ke jaringan inet dan tv, Jdi bukan hanya drmh bpk saja bisa    digunakan namun bisa bpk bawa kmn saja misalkan krmh saudara. yg nantinya dpt    mengubah tv biasa sprti smart tv dan di sediakan 133 film</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="127">
                                <col width="297">
                                <col width="848">
                                <tr height="40">
                                  <td height="40" width="153">INDIBOX</td>
                                  <td width="249">Menolak diawal    sebelum dilakukan penawaran</td>
                                  <td width="682">bapak/ibu ini    produk nya terbaru dan sudah canggih karena benefit yg ibu dapatkan lebih    bervariatif dibandingkan dengan TV berlangganan pada umumnya</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="153">INDIBOX</td>
                                  <td width="249">Pelanggan    tidak mengerti</td>
                                  <td width="682">baik    bapak/ibu disini sy jelaskan kembali penawaran alat indibox / set box hybrid    yg sudah berbasis android nya, jd alat ini jauh lebih canggih dan modern    karena alatnya bisa merubah tampilan Tv biasa menjadi TV android dan fitur2    nya pun lebih lengkap tdk seperti TV berlangganan pada umumnya. bahkan alat    nya sudah cabut pasang artinya tdk hanya di pasangkan di satu temapt saja    namun bisa di pasang di alat infocus layar monitor TV LED / LCD yg penting    tersedia jaringan inet dan ada slot HDMI nya. yang terpenting pemasangan awal    dg jaringan inet yg saat ini kami tawarkan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="153">INDIBOX</td>
                                  <td width="249">Sudah    berlangganan di nomor lain</td>
                                  <td width="682">baik    pak/bu tdk perlu khawatir meski ibu / bapak udh ada alat nya di nomer yg lain    namun untuk memberikan kelengkapan fasilitas drumh ibu agar tdk bosan bisa di    pasang kan alatnya ditempat / rumah ibu yg saat ini kami tawarkan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="153">INDIBOX</td>
                                  <td width="249">Sudah    memiliki smart TV</td>
                                  <td width="682">jadi    klu utk indibox ini pak lebih&nbsp; Flexibel    sekali&nbsp; dan bisa di bawa kmn2 juga    asalkan ada TV dan jaringan internet dan bisa juga untuk downoad aplikasi    yang bapak inginkan dan menjadi lebih mudah dan fleksibel sesuai keinginan    bapak</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="153">INDIBOX</td>
                                  <td width="249">Sudah    memiliki smart TV</td>
                                  <td width="682">&nbsp;di era teknologi yang semakin maju dan    dengan kesibukan masing2 orang yang cenderung mobile atau jarang ada dirumah.    dg indibox ini bapak bisa memindahkan alat indibox ini dari TV satu ke TV    lain tanpa perlu menarik kabel yang panjang sehingga lebih memudahkan    pelanggan jika pelanggan mobile</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="153">INDIBOX</td>
                                  <td width="249">Sudah    memiliki smart TV</td>
                                  <td width="682">di    indibox ini selain bpk bs browsing dan internetan langsung dr TV bpk , juga    bisa menonton 133 film yg akan diupdated pak , sehingga bpk tidak bosen pak    akan film2nya&nbsp; , dan penawaran ini juga    tdk diberikan ke smua pelanggan pak , hanya pelaggan2 terpilih saya hubungi    saja pak yg mendapatkan penawaran menarik ini&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="153">INDIBOX</td>
                                  <td width="249">Sudah    memiliki smart TV</td>
                                  <td width="682">Untuk    di produck kami pak / bu akan diberikan film-film sebanyak 133 yang akan    dilakukan update secara berkala selain itu memori jauh lebih besar mencapai    8Gb sehingga bisa menyimpan hasil download lebih banyak</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="153">INDIBOX</td>
                                  <td width="249">Sudah    memiliki smart TV</td>
                                  <td width="682">di    Indibox kan sdh tersedia 133 film yang akan kita update pak/bu secara    berkala, sdh bisa langsung bapak/ibu tonton bersama keluarga tidak perlu    repot untuk download2 lagi</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="153">INDIBOX</td>
                                  <td width="249">Sudah    memiliki smart TV</td>
                                  <td width="682">Selain    bisa membuat tv ibu menjadi tv android bisa juga game, bisa di tambahkan    stick yang colokannya usb untuk main game, dan jika ibu memiliki tv yang lain    yang belum smart tv bisa dipergunakan di tv tersebut jadi serasa ibu memiliki    beberapa tv android<br>
                                    Penggunaanya bukan hanya untuk tv di rumah saja, bisa dipindah pindahkan di    tv yang lain asalkan ada jaringan internet / wifi dan aktifasi pertama sudah    dilakukan di nomer indihome yang didaftarkan jadi misal ibu mau nonton&nbsp; tv dirumah saudara, kebetulan tvnya belum    smart , ibu bisa menggunakan indibox di rumah saudara asalkan ada tv yang    suport hdmi dan jaringan internet/wifi<br>
                                    Kelebihan yang lain indibox ini sudah dilengkapi play stor jadi jika    menginginkan aplikasi yang lain ibu bisa unduh aplikasinya<br>
                                  Jika smart tv biasanya sudah terseting aplikasi apa saja yang terinstal</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="153">INDIBOX</td>
                                  <td width="249">Sudah    memiliki smart TV</td>
                                  <td width="682">baik    pak/bu meskipun bapak sudah menggunakan smart tv tp alat ini bisa menambahkan    fitur jauh lebih lengkap di TV bapak seperti aplikasi untuk karoke Yokee kan    sudah tdk berbayar lagu2 nya pun sudah tersedia, kemudian bapak sudah    tersedia 133 movie tanpa harus bayar dan downlod lagi pak/ bu bahkan kualitas    tampilan gambar sudah HD.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="153">INDIBOX</td>
                                  <td width="249">Sudah    memiliki smart TV</td>
                                  <td width="682">Apalagi    Bapak/Ibu sudah memiliki smart Tv yang sangat cocok dengan indibox, keluarga    Bapak/Ibu<br>
                                    Akan sangat menikmati tontonan yang diberikan sebanyak 133 channel dengan    kualitas TV yang sudah mendukung,<br>
                                  Selain itu Bapak/Ibu bisa buka youtub, main games android dengan dengan    didukung google Assistant (perintah suara melalui remote TV),sangat menarik    kan buat Bapak/Ibu Programnya?</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>Update 9 April 2021 </p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="111">
                                <col width="155">
                                <col width="597">
                                <tr height="80">
                                  <td height="80" width="139">INDIBOX</td>
                                  <td width="249">BELUM PERLU</td>
                                  <td width="695">kami punya    solusi supaya bpk sekeluarga bisa menikmati hiburan yg berkualitas, dgn bpk    berlangganan indibox bpk akan mendapatkan film dan serial secara gratis dan    sdh lengkap ada film hollywood, India, Korea, termasuk film anak-anak dengan    kualitas HD lengkap dengan subtitle indonesia nya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="139">INDIBOX</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="695">bapak    tdk perlu khawatir utk pemasangannya cukup mudah, karena hanya tinggal    colokkan ke listrik bahkan kami menyediakan manual book nya juga utk panduan    pemasangannya. nanti akan ada kurir yg datang ke rumah bapak utk mengantar    perangkat nya setelah bpk klik link konfirmasi yg akan di kirimkan via    whatsapp</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="139">INDIBOX</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="695">alat    keluaran terbaru,berbeda dengn televisi kabel yg ada yg tdk bisa dibawa    kemana-mana,untuk indibox bisa dibawa kemana2 asal ada jaringan wifi, dan tv    bisa di setting tv android</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="139">INDIBOX</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="695">sayang    sekali di lewatkan pak karena keungulan indibox alatnya bs di bawa kemana2    karena sudah plug n play jadi jika di pasang ke tv yang sudah suport hdmi    maka sdh bs mnjadi smart tv</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="139">INDIBOX</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="695">Sebagai    perbandingan dgn produk yg lain biasanya tv kabel mempergunakan parabola,Utk    keunggulan Indibox ini diakses melalui jaringan internet pak/bu, sehingga    tampilan layar dapat lebih jernih dan stabil karna sudah menggunakan jaringan    ( fiber optik ), sehingga bapak dan keluarga di rumah bisa dimanjakan olah    tayangan-tayangan menarik yang kami sajikan.</td>
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