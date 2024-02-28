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
						      <p>Rule : <a href="ref_homewifi.php">Home WiFi</a></p>
						      <p><a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade </a>| <a href="ref_all.php">All</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a><a href="ref_downgrade.php"></a> | <a href="ref_stb.php">STB</a> | <a href="ref_2p3p.php">2P - 3P</a></p>
						      <p>&nbsp;</p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="125">
                                <col width="341">
                                <col width="652">
                                <tr height="20">
                                  <td height="20" width="125"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="341"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="652"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">Iya    pak. Tapi disini krna tlpnya sdh support fiber,&nbsp; bapak juga sdh bs    mengakses internet wifi dirumah bapak, jadi bpk dan keluarga tidak hanya    menggunakan telp nya saja, dan tarifnya kami berikan tarif promo slma12 bln    dgn penambahan perbulan&nbsp; ....k+ppn 10%    . setalah masa promo dikenakan tarif normal perbulan ..... k +ppn 10% , Untuk    jaringannya, kami pastikan internet dari kami jauh lebih stabil pak</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">utk    jaringan internet dari Telkom kami pastikan jauh lebih stabil...bahkan utk    tarifnya skrg kami berikan promo slma 12 bln ckup dgn penambahan    perbulan&nbsp; ....k+ppn 10%&nbsp; jadi bapak dan keluaga bisa menghemat    pengeluaran untuk membeli paket data.&nbsp;setalah masa promo dikenakan tarif    normal perbulan ..... k +ppn 10%</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">penawaran    kami sayang jika dilewatkan Pak. Semisal Bpk beli paket data, 2gb saja sdh    45rb, dan hanya bisa digunakan&nbsp; 1 hp. Kalau disini kami tawarkan paket    50gb dengan kecepatan up to 10M , promo selama 12 bulan dengan penambahannya    hanya 32 k&nbsp; perbulan ditambah pajak    10%&nbsp; setelah masa promo dikenakan tarif    normal perbulan 140 k +ppn 10% dan jg bs penggunaan banyak org, sangat hemat    dan bermanfaatkan pak</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">Kan    sayang pak kalau dilewatkan penawaran ini. Bapak bisa bandingkan dengan    penggunaan provider lain dikuota yang sama. Tentu yang kami tawarkan lebih    banyak manfaatnya dan pastinya lebih murah</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">Bapak/ibu    kan sayang programnya kalau dilewatkan, apabila bpk/ibu bersedia    berlangganan, programnya bisa digunakan bersama keluarga di rumah dan lebih    hemat sampai 12 bulan (1 tahun ke depan) karena penambahan perbulannya cukup    32rb +ppn 10 % diluar penggunaan lainnya sudah bisa gunakan 50gb dengan    kecepatan 10mbps jadi lebih nyaman menggunakan internet dirumah,&nbsp;setelah    masa promo dikenakan tarif normal perbulan 140 k +ppn 10%</td>
                                </tr>
                                <tr height="152">
                                  <td height="152" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">kan    sayang pak/bu kalau programnya dilewatkan, karena untuk penawaran ini saya    tidak bisa pastikan apakah kedepannya bapak/ibu akan mendapatkan kesempatan    yang sama atau tidak. Jadi jika bpk bersedia berlangganan maka programnya bs    digunakan dg optimal karena tarifnya pun sangat murah promo selama 12    bulan&nbsp; hanya penambhan Rp. 32000/bulan    + ppn 10%, setelah masa promo dikenakan tarif normal perbulan 140 k +ppn 10%    bpk/ibu sudah&nbsp; bisa menikmati fasilitas inet kec 10mbps dengan kuota    50GB.dan sebagai bahan perbandingan, jika bpk/ibu beli paket data atau    voucher hanya bisa digunakan utk pribadi, sementara untuk program home wifi    ini bisa digunakan oleh seluruh anggota keluarga yang ada dirumah.</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">jika    dibandingkan kalau bapak beli paket data handpone lebih mahal,dan hanya bisa    digunakan sendiri, kalau dgn home wifi bisa digunakan semua keluarga dan    tarif yg diberikan juga sangat hemat pak dengan kec 10 m quota 50 GB dengan    biaya berlangganan perbulan 32.000rb/bln, promo selama 12 bulan , setelah    masa promo dikenakan tarif normal perbulan 140 k +ppn 10%</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">Baik    Bapak/ Ibu sebagai bahan pertimbangan untuk beli paket data dengan Quata    50Gbyte tarifnya lebih mahal, dan hanya bisa di gunakan sendiri saja, berbeda    dengan Home wifi yang kita tawarkan saat ini, selain kecepatannya lebih    stabil, bisa di gunakan semua anggota keluarga, apabila bapak/ Ibu setuju,    akan mendapatkan harga promo sampai dengan 12 bulan kedepan, penambahan Rp xx    + pajak 10% per bulan&nbsp; di luar    pemakaian lainnya, setelah masa promo dikenakan tarif normal perbulan 140 k    +ppn 10%</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">krn    kedepannya bpk/ibu blm tentu mendapatkan penawaran yg sama. Sebagai bahan    perbandingan jika bpk/ibu pakai paket data 2GB sudah barang tentu bayar    sekitar 60 ribuan, disini cukup dgn penambahan Rp. 32rb + ppn 10%&nbsp; perbulan bpk/ibu sudah memperoleh kuota 50    GB dgn kecepatan 10 Mbps, promo selama 12 bulan , setelah masa promo    dikenakan tarif normal perbulan 140 k +ppn 10% ,kan tentunya jauh kebih hemat    utk bpk/ibu.&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">klau    menggunakan operator seluler kan mahal ibuk, nah ini kmi berikan hrga    trjangkau tdk ada biaya instalasi ibuk sudah bisa mnikmati kec inet 10 mbps    kuota 50gb dg tarf khusus pnambhan perbulan&nbsp;    32k +ppn 10%&nbsp;, promo selama 12 bulan , setelah masa promo    dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">Dengan    adanya trif yang terjangaku ibu tidak perlu mengunakan paketan data lagi dan    untuk produk ini sudh bisa di gunakan untuk seluruh keluarga, disamping harga    yang lumayan bisa bersaing dengan quota peketan yang ibu/bapak gunkan selama    ini .</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">Penambahan    yg kami tawarkan tdk mahal bpk krn penambahan harga perbulan&nbsp; yang kami    sampaikan lebih terjangkau dari pada yang lain</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">mohon    maaf pak untuk produk yg bpk gunakan saat ini dikec brp mbps pak? Dan    perbulannya bpk bayarkan brp? Kalau di kami lebih murah pak apalagi ini    promonya 12 bulan lho pak. Cukup dg penambahan perbulan 32k +ppn 10% ,setelah    masa promo dikenakan tarif normal perbulan 140 k +ppn 10%,&nbsp; bpk sdh bisa menikmati inet kec 10mbps dg    kuota 50 Gb kan sangat murah sekali pak dan jika kuota hbs bpk bisa melakukan    top up pembelian quota melalui myindihome, sangat muda dan praktis,&nbsp;</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">baik    pak/bu jika paketan data bpk hnya bisa gunakan sendiri kalau home wifi ini    bisa digunakan serumah pak dan lebih hemat. Bayangkan pak Misal bpk    menggunakan paketan data, minimal per orang mengeluarkan uang 50k dan ada brp    orang yg tinggal di rumah bpk. sedangkan disini bpk cukup&nbsp; dg penambahan    perbulan 32k +ppn 10% bpk sdh bisa menikmati inet kec 10mbps dg kuota 50 Gb    kan sangat murah sekali pak dan sudah bisa digunakan rame-rame, promo selama    12 bulan , setelah masa promo dikenakan tarif normal perbulan 140 k +ppn    10%&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">kalau    pket data kan mahal ibu minim 1bln 50rb dn itupun tdk abis dlm 1bln ,klau ini    kan dg pnmbahan 32000 +ppn 10 % perbulan, promo selama 12 bulan , setelah    masa promo dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp; kec lebih stabil dibanding paket data bisa    digunkan 1 kluarga kan jauh lbih hemat ibu dibanding paket data yg biasanya    ibu dpt kisaran 6Gb itupun tdk bisa dipkek dengan banyak orang&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">Bisa    dibandingkan keunggulan produk kami krn dengan cukup menambhkan Rp.xxx tiap    bulan sdh mendapatkan kec.10 Mbps dan qoutanya 50 GB/100 GB dan perlu    diketahui tdk semua pelangan punya kesempatan ini.promo selama 12 bulan ,    setelah masa promo dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">Selama    12 bulan bpk/ibu diberikn promo 32rb /bulan yg mana tarif normalnya 140rb per    blnnya maka disini ada penghematan biaya 108rb tiap bulan selama 12 bulan    jadi tentunya sangat perlu dipertimbagkan penawaran kami, setelah masa promo    dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">Sudah    pakai fiber optik lebih cepat lebih stabil, bpk tidak perlu beli paketan lagi    bisa inet dirumah paketan kan mahal pak. sayang pak klo dilewatkan diberikan    tarif khusus pak.</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">iya    buk, utk yg indihome kan d nmr lain..ini nmr yg ini mendapatkan penawaran    khusus ibuk juga bs menikmati internet wifi dgn tarif promo slma 12 bulan    buk, cukup dgn penambahan perbulan 32k + ppn 10%,setelah masa promo dikenakan    tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">KECEWA    DENGAN TELKOM</td>
                                  <td width="652">Mohon    maaf atas ketidaknyaman nya pak.../bu... namun bpk/ibu jgn khawatir krn saat    ini utk keluhan pelanggan terkait gangguan fasilitas telkom sdh di permudah    utk laporan nya, bpk/ibu bisa langsung hub call center kami di 147, atau bisa    jg melalui web kami, dan bisa jg melalui aplikasi my indihome. Kami yakin    program yang kami tawarkan ini tidak akan mengecewakan bapak dan keluarga    karena sudah dipilih melalui kelayakan jaringan dari Telkom</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">KECEWA    DENGAN TELKOM</td>
                                  <td width="652">mohon    maaf ya B/I untuk ketidaknyamanan ny untuk kendala B/I bisa laporkan melalui    147 atau boleh langsung ke plaza telkom , dari website kita atau melalui    aplikasi myindihome juga bisa y B/I</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">KECEWA    DENGAN TELKOM</td>
                                  <td width="652">Baik    pak, sebelumnya maaf ya pak atas ketidaknyamanan bapak dengan keluarga. Jika    ada kendala boleh langsung menghubungi kita ya pak ke layanan call center    kita di 147 , plasa Telkom , dari website kita atau melalui aplikasi    myindihome</td>
                                </tr>
                                <tr height="38">
                                  <td rowspan="2" height="171" width="125">HOMEWIFI</td>
                                  <td rowspan="2" width="341">KECEWA    DENGAN TELKOM</td>
                                  <td width="652">mohon    maaf atas ketidak nyamanannya pak/bu&hellip;untuk kendalanya akan coba kita bantu    lapor agar&nbsp; kedepannya segera ada perbaikan dan berfungsi normal    kembali.</td>
                                </tr>
                                <tr height="133">
                                  <td height="133" width="652">dan utk penawaran program kami ini, sangat    disayangkan sekali jika bpk/ibu lewatkan begitu saja, karena kedepannya    bpk/ibu bisa rasakan manfaat dari program tersebut. &nbsp; kita pastikan utk    layanan internetnya sudah super cepat dimana untuk jaringannya sendiri sudah    menggunakan fiber optik dan tarif yang kami berikan juga sudah sangat hemat    dan spesial, hanya dengan Rp. 32rb/bulan + ppn 10% saja bpk/ibu sudah bisa    menikmati internet dengan kecepatan 10mbps kuota 50GB, promo selama 12 bulan    , setelah masa promo dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="133">
                                  <td height="133" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">Jika    bapak/ibu sudah aktif wifi dengan provider lain,tdk jadi msalah kalau mau    menggunakan wifi dr telkom saat ini.bpk/ibu bisa bandingkan untuk kdepannya    dari segi pemakaian dan tarif,kita yakin dgn internet wifi yg kita berikan    saat ini sangat baik.dr segi pemakaian jaringan nya sudah support dgn jringan    fiber dan tarif yg sangat hemat,dan bila kbutuhan pemakaian internet    bapak/ibu dirumah bnyak bisa mnjadi alternatif dlm pemakaian,bisa mnggunakan    provider telkom bisa juga mnggunakan wifi dr provider lain krn masing2kan    memiliki nama wifi n password yg berbeda.sangat sayang jika dilewatkan    program ini krn tarif sngat hemat&nbsp;</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">mohon    maaf pak atas ketidaknyamananya&quot;kan sayang jikalau bapak lewatkan, ini    dengan kec 10M Quota 50GB penambahan tarif hanya 32.000rb/bulan + ppn    10%&nbsp; jika dibandingkan jika bapak beli    paket data inet, quota 10GB sampai 50rb dan hanya sendiri saja menggunakan,    namun kalau dirumah bisa digunakan dengan seluruh keluarga dirumah, 24jam    penggunaan , promo selama 12 bulan , setelah masa promo dikenakan tarif    normal perbulan 140 k +ppn 10%&nbsp; kan    jauh lebih hemat masa promo 1 tahun</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">Kami    pastikan ini tdk mahal pak krn ini penawaran khusus bagi pelanggan setia    telkom ( tdk smua pelanggan mendapatkan penawaran ini )&nbsp;</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="125">HOMEWIFI</td>
                                  <td width="341">JARANG    DIGUNAKAN</td>
                                  <td width="652">karna    saat ini telkom berikan tarif promo yg sangat hemat,dengan tarif penambahan    perbulan 32ribu+ppn 10% , promo selama 12 bulan , setelah masa promo    dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp; bapak/ ibu bisa menggunakan WiFi dirumah    bersama kluarga. Krn WiFi bisa digunakan lebih dari satu org, semua kluarga    yg ada dirumah bisa pakai slama 24 jam dengan kuota yg disediakan sbnyak    50Gb.Jadi jika ada kluarga yg datang krumah bapak/ibu bisa berbagi penggunaan    wifinya</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="125">HOMEWIFI</td>
                                  <td width="341">JARANG    DIGUNAKAN</td>
                                  <td width="652">digali&nbsp;    penggunaan inet sebalumnya untuk keperluan apa? Bila untuk download atau    streaming bisa lebih lancar</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="125">HOMEWIFI</td>
                                  <td width="341">JARANG    DIGUNAKAN</td>
                                  <td width="652">di    era teknologi membutuhkan kec yang tinggi bisa searching,browsing sepuasnya    tnpa takut kantong jebol</td>
                                </tr>
                                <tr height="152">
                                  <td height="152" width="125">HOMEWIFI</td>
                                  <td width="341">KECEWA    DENGAN TELKOM</td>
                                  <td width="652">Mohon    maaf ya pak untuk ketidaknyamanannya, untuk program yang kemarin kita    tawarkan masih belum bisa di proses, maka dari itu saya menghubungi bapak    agar kedepannya bapak dan keluarga bisa menikmati fasilitas internet dirumah,    kami berikan penawaran khusus buat bpk sekeluarga untuk bs menggunakan    internet di rmh bpk, krn seiring dgn perkembangan informasi saat ini sangat    pesat pak&nbsp; , maka tehnologi dan informasi adalah 2 hal yg sangat penting    pak buat pelanggan, dan dgn penawaran ini bpk bs mennggunakan internet dgn    quota 50 G dan kec 10 M hanya dgn penambahan perbulan 32 rb plus ppn 10    persen , promo selama 12 bulan , setelah masa promo dikenakan tarif normal    perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">KECEWA    DENGAN TELKOM</td>
                                  <td width="652">Mohon    maaf untuk ketidaknyamanannya pak. Kami yakin program yang kami tawarkan ini    tidak akan mengecewakan bapak dan keluarga karena sudah dipilih melalui    kelayakan jaringan dari Telkom. Dan apabila ada kendala, kami juga memberikan    kemudahan untuk bapak dan keluarga membuat laporan pengaduan melalui aplikasi    my indihome agar bapak bisa memonitor progres laporannya langsung dari    aplikasi</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">karena    sayang ya pak/bu jika dilewatkan karena untuk saat ini sudah jauh dihematkan    oleh telkom hanya dengan penambahan Rp 32.000 perbulan + ppn 10% bapak/ibu    sudah bisa menikmati kuota 50gb dgn kec. 10mbps, promo selama 12 bulan ,    setelah masa promo dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">sayang    ya pak/bu jika dilewatkan karena untuk saat ini sudah jauh dihematkan oleh    telkom hanya dengan penambahan Rp 32.000 perbulam + ppn 10% bapak/ibu sudah    bisa menikmati kuota 50gb dgn kec. 10mbps karena kalau dibandingkan dengan    paket data ini sudah jauh lebih hemat&nbsp;, promo selama 12 bulan , setelah    masa promo dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td rowspan="2" height="152" width="125">HOMEWIFI</td>
                                  <td rowspan="2" width="341">BELUM    PERLU</td>
                                  <td width="652">Kan    sayang pak kalau dilewatkan penawarannya, krn kedepannya bpk blm tentu dpt    penawaran yg sama. Apalagi tarif yg kami tawarkani ini jauh lebih hemat,    cukup dgn penambahan perbulan&nbsp; 32 rb    plus ppn 10 % ibu dan keluarga sdh bisa dptkan inet kec 10 Mbps kuota 50 Gb.    promo selama 12 bulan , setelah masa promo dikenakan tarif normal perbulan    140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="652">Sbg bahan perbandingan klu bpk beli paket data    handphone 5 Gb itu sdh 60rb an, paket yg&nbsp; kami tawarkan jauh lebih hemat    pak, 50gb cuma 32rb perbulan + ppn 10%. penambahan tarif nya baru ditagihkan    sejak aktif program nya, promo selama 12 bulan , setelah masa promo dikenakan    tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">Mungkin    saat ini&nbsp; blm begitu memerlukan tp&nbsp; kdpnnya jika&nbsp; memerlukan    sewaktu2, tdk perlu antri atau menghubungi chanel telkom untuk diberikan    penawaran ini , tidak semua pelanggan mendapatkan penawaran spesial dengan    harga spesial juga&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">tidak    ada lagi buffering, intermiten, penggunaan internet akan jauh lebih stabil</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">Di    sini kan bapak dengan harga yg sangat terjangkau bapak sudah mendapatkan    kecepatan internet yg tinggi yaitu 10 mbps dengan kuota yg sudah besar 50GB    dan walaupun kuotanya sudah habis bapak masih bisa top up atau tambah kuota    dg harga yang terjangkau sesuai kebutuhan.</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">PAKAI    PROVIDER LAIN</td>
                                  <td width="652">Baik    Bapak / Ibu walaupun sudah mengunakan provider lain kan tidak masalah Bapak /    Ibu. Bapak / Ibu bisa pertimbangkan dari segi tarif dan kecepatan yg kita    berikan. Kalau dengan paket data, tarif utk Quota 50GB kan lebih mahal Bapak    / Ibu. Tapi dengan Homewifi/Internetwifi Hanya dengan penambahan Rp 32rb +    ppn 10% saja diluar penggunaan lainnya setiap bulan, promo selama 12 bulan ,    setelah masa promo dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU</td>
                                  <td width="652">Bapak    / Ibu&nbsp; untuk tarifnya ini sudah kita berikan dengan tarif promo, jadi    hanya dengan penambahan&nbsp; Rp    32.000/bulan + ppn10%&nbsp; diluar penggunaan lainnya ,programnya bisa bapak/    Ibu nikmati selama 12 bln kdpn&nbsp; ,&nbsp;setelah masa promo dikenakan    tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">Penawaran    ini cukup murah bapak. Karena untuk harga kuota yang sama bapak harus    membayar lebih dari yang kami tawarkan. Hanya dengan penambahan 32 ribu + ppn    10% perbulan bapak sudah mendapatkan kuota internet 50 gb dengan kecepatan 10    mbps.&nbsp;promo selama 12 bulan , setelah masa promo dikenakan tarif normal    perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">Boleh    bapak/ibu bandingkan harga paket data saat ini 10 gb saja diatas 50rban.    Namun .. disini telkom berikan bapak bukan hanya 10gb melainkan sudah 50gb    hanya dengan menambahkan biaya berlangganan per bulannya 32rb + ppn 10%    diluar penggunaan lainnya jika ada&nbsp;, promo selama 12 bulan , setelah    masa promo dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">Kita    pastikan ini tarif yg paling hemat yg kita berikan kpda bpk/ibu.krn dengan    penambahan perbulan 32ribu+ppn10% bapak/ibu sudah mndapatkan kuota internet    sbnyak 50Gb. Bila kita bandingkan dgn pmakaian paket data, kuota 4GB saja    tarif nya sampai kurang lebih 50ribu, promo selama 12 bulan , setelah masa    promo dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">Baik    Bu sebagai bahan pertimbangan untuk beli paket data dengan Qoata 50Gbyte    tarifnya lebih mahal, dan hanya bisa di gunakan sendiri saja, berbeda dengan    Home wi fi yang kita tawarkan saat ini, selain kecepatannya lebih    stabil,harga yang cukup hemat, bisa di gunakan anggota keluarga yg ada drmh    ,&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">HARGA    MAHAL</td>
                                  <td width="652">program    ini bersifat penawaran khusus&nbsp; kepada ibu , dan untuk tarif nya ini    sudah kita berikan dengan tarif promo, jadi hanya dengan penambahan Rp 32.000    / bulan + ppn10%&nbsp; diluar penggunaan lainnya ,masa promo programnya juga    selama 12 bln&nbsp; kedepan , dan&nbsp;&nbsp; anggota keluarga bisa    menggunakan internet wi fi secara bersamaan, setelah masa promo dikenakan    tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">BELUM    PERLU&nbsp;</td>
                                  <td width="652">dengan    trif yang terjangaku tembahn tarif 32 rbu/bln+ ppn 10% bpk/ibu tidak perlu    mengunakan paketan data lagi lbh terjangkau harganya, bsa di gunakan sampai 2    user speed inet 10&nbsp; mbps kuota 50G dan untuk produk ini sudh bisa di    gunakan untuk seluruh keluarga selain itu bsa di gunakan 24 jam tanpa di    batasi waktu seperti paketan data yg terkadang ada batasan waktunya, promo    selama 12 bulan , setelah masa promo dikenakan tarif normal perbulan 140 k    +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="57">
                                  <td rowspan="2" height="133" width="125">HOMEWIFI</td>
                                  <td rowspan="2" width="341">Dampak    covid</td>
                                  <td width="652">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika dilihat dari benefit yang akan    bapak/ ibu dapatkan, akan membuat harga yang saya tawarkan menjadi sangat    ekonomis pak/ bu,</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="652">Produk ini sangat mendukung program pemerintah,    bapak tidak perlu keluar rumah untuk melakukan transaksi apapun (ini akan    memudahkan bapak dalam melakukan transaksi online) sehingga&nbsp; bapak bisa    menggunakan jar inetnya untuk melakukan transaksi online apapun pak (mulai dr    transaksi jual beli, perbankkan, bahkan kegiatan belajar dirumah)</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">JARANG    DIPAKAI</td>
                                  <td width="652">tidak    disayangkan pak, trfnya sangat hemat hanya di kenakan 32K ditambah ppn 10%    perbulan,bapak sudah mendapatkan kuota 50G dgn kecepatan 10M, berlaku selama    12 bulan, setelahmasa promo habis baru di kenakan trf normnalnya 140K</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Masih    nyaman dengan paket existing</td>
                                  <td width="652">jika    b/i berlangganan homewifi akan lebih menguntungkan sekaligus lbh hemat pak    drpd menggunakan paket data habisnya lbh banyak. Apalagi b/i skrg diberikan    trf promo selama 1 thn 32k per bulan&nbsp;    plus ppn 10% setelah masa promo akan kembali ke trf normal 140k plus    ppn 10%. Penggunaan homewifi signal nya jg lbh stabil ya pak/buk</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">PELANGGAN    SUDAH BERLANGGANAN INTERNET LAIN</td>
                                  <td width="652">Kami    tidak mengubah internet yang saat ini sudah ibu gunakan, kami berikan tawaran    homewifi dengan penambahan tarifnya hanya 32rb perbulan plus ppn 10%, promo    selama 12 bulan , setelah masa promo dikenakan tarif normal perbulan 140 k    +ppn 10%&nbsp; jadi misalkan internet ibu    yang lain sedang kendala ibu tidak perlu khawatir karena masih tetap bisa    internetan di rumah</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Pertimbangan    harga</td>
                                  <td width="652">Sebelumnya    kan ..bapak hanya menggunakan telp saja ..nnti bpk sudah bisa menggunakan    internet bapak&nbsp; dgn kec 10m kuota 50gg dan untuk tarifnya&nbsp; juga    kita berikan sgt ekonomis pnmbhn 32rbu +Ppn10% setiap bulannya dan promo    berlaku selama 1 tahun&nbsp;, setelah masa promo dikenakan tarif normal    perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">Pertimbangan    harga</td>
                                  <td width="652">Kan    sayang pak, Kl bapak bersedia kedepannya bapak bs akses internet dengan kec    10M dgn kuota 50g per bulan dgn tarif promo hny 32rb+PPN 10% per bulan selama    masa promo 1 thn, setelah masa promo dikenakan tarif normal perbulan 140 k    +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Pertimbangan    harga</td>
                                  <td width="652">Apa    tdk disayangkan bu/pak, sekarang bapak sudah bisa menggunakan internet    dirumah 10mb kuota 50gb, sehingga bpak/ibu tdk perlu membeli pakt hp..    Bersama kluarga sdh bisa mengakses internet dgn promo 1 tahun perbulan hanya    menambahkan 32000+ppn10% saja, setelah masa promo dikenakan tarif normal    perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Untuk    internet yg saat ini sudah ada ttp bisa digunakan, hanya saja, misalkan    internet ibu sedang kendala putus2 atau lambat, ibu tidak perlu khawatir    karena masih tetap bisa internetan di rumah dengan wifi yang kami tawarkan    ini.</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Perlu    dipertimbangkan P/i penawaran dr kami meskipun saat ini sdh ada inet dirumah    bisa digunakan sbg pilihan alternatif jika kedepan inet yg sdh ada mengalami    kendala namun p/i masih punya inet yg lain sehingga kbutuhan akan inet tdk    akan terhambat terlebih lagi dr sisi tarif sangat terjangkau.</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Iya    pak jadi begini, bp memang sudah ada inet indihome ditmpt. tapi kan nantik    jika bp berlangganan inet promo yg saya sampaikan juga bp nantik    keuntungannya ada 2 fasilitas inet jdi kalo 1 nya kurang stabil bp bisa pakek    inet yg promo. dan mungkin juga bp bisa pergunaan untuk tempt usaha. ini    jaringannya juga tidak akan bentrok degan inet yg sudah aktif sblmnya pk</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Dengan    internet yang promo ini bapak bisa mengunakan secara lebih tenang bapak karna    tidak harus berebut sinyal dengan angota keluarga yang lain, sehingga    penggunaan lebih efektif bapak dan tidak semua nomer mendaptkan fasilitas    seperti ini bapak.</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Disini    indihome sedang ada promo selama 1 thn , jauh lebih hemat dari harga    normal,yaitu 32 rb + ppn 10% perbulannya, setelah masa promo dikenakan tarif    normal perbulan 140 k +ppn 10%&nbsp;    ,indihome skrg kualitasnya jauh lebih bagus,silahkan bapak/Ibu dapat    gunakan ,lumayan kan bisa menghemat tarif internet selama 1 thn&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">Pelanggan    tidak mengerti</td>
                                  <td width="652">baik    bapak/ibu ini ada penawaran untuk pemasangan jaringan internet, ibu dan    kluarga jd tdk perlu menggunakan paket data lagi klo drumah, karena kami    tawarkan kuota 50GB. untuk penambahan biaya berlangganan sudah sangat hemat    bahkan bapak/ibu diberikan promo selama 12 bulan dengan penambahan biaya    hanya 32rb plus ppn 10% stiap bulannya. nanti di bulan ke 13 dikenakan tarif    normal 140rb plus ppn 10% stiap bulannya selama berlangganan.</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">bisa    dipertimbgakan penawaran dari kami, karena kebutuhan internet bapak/ibu    banyak bisa menjadi alternatif dalam pemakaian dan tarif pun sangat hemat    dengan penambahan setiap bulan 32rb + ppn 10 % sdh bisa menikmati inet kec 10    mbps dengan kuota 50 Gb bisa dinikmati rame-rame sehingga bapak/ibu memiliki    alternatif akses internet lainnya, promo selama 12 bulan , setelah masa promo    dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">Bapak/ibu    kita kedepannya tidak tau kebutuhan internet keluarga bapak. Dengan tarif    penambahan 32rb setiap bulan bisa menikmati internetnya dan tagihan berjalan    bulan depan, promo selama 12 bulan , setelah masa promo dikenakan tarif    normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">Disini    kan jauh lebih murah utk tarifnya karena promo,sedangkan kualitasnya sama    dengan yg bpk/ibu gunakan saat ini,tapi kami tidak mengganggu kualitas    jaringan yg digunakan bpk/ibu sebelumnya</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">bu/pak    untuk internet yang ini pengunaan nya bapak bs di bagi dengan angota    keluarga&nbsp; yang lain biar akses internet nya yg utama tidak lambat,karena    penmbhan nya juga cukup murah hanya 32rb setiap bulan nya +ppn 10%, promo    selama 12 bulan , setelah masa promo dikenakan tarif normal perbulan 140 k    +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">jika    b/i berlangganan homewifi akan lebih menguntungkan nanti kebijakan sepenuhnya    ada di pelangan, bapak kan bs membandingkan,memaximalkan,memanfaatkan&nbsp;    dari sebelumnya cmn pakai satu inet sekarang 2 inet pasti kan sangat berbeda    untuk akses internetnya jadi lebih cepat,dan pnmbhan nya cukup murah hanya    32k setiap bulan +ppn 10% , promo selama 12 bulan , setelah masa promo    dikenakan tarif normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">bu/pi    silahkan untuk kedepan nya b/i bs evaluasi terkait pengunaan 2 inet nya    seperti apa,saya yakin ini&nbsp; sangat bermanfaat untuk b/i,akan tetapi jika    sdh aktif maka bill sudah berjalan</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">Ini    sebagai bahan perbandingan saja, biasanya bpk membeli paket data dr hp /    ponsel bpk berapa.... Pasti lebih mahal, skrg kl membeli paketan data yg 50gg    saja dr hapenya bpk gunakan saat ini msh diatas 100rb rupiah, itu pun hanya    bisa digunakan 1 pengguna saja yaitu bpk, bisa dibagipun dgn thathering tp    kan harus menyita waktu bpk dan hp cpat panas dan boros btrai... Tetapi    dengan adanya penawaran dr kami Home wifi namanya bpk sudah menghemat biaya    pembelian quota selama 1th.</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Untuk    internet yg saat ini sudah ada ttp bisa digunakan, hanya saja, misalkan    internet ibu sedang kendala putus2 atau lambat, ibu tidak perlu khawatir    karena masih tetap bisa internetan di rumah dengan wifi yang kami tawarkan    ini.</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Perlu    dipertimbangkan P/i penawaran dr kami meskipun saat ini sdh ada inet dirumah    bisa digunakan sbg pilihan alternatif jika kedepan inet yg sdh ada mengalami    kendala namun p/i masih punya inet yg lain sehingga kbutuhan akan inet tdk    akan terhambat terlebih lagi dr sisi tarif sangat terjangkau.</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Iya    pak jadi begini, bp memang sudah ada inet indihome ditmpt. tapi kan nantik    jika bp berlangganan inet promo yg saya sampaikan juga bp nantik    keuntungannya ada 2 fasilitas inet jdi kalo 1 nya kurang stabil bp bisa pakek    inet yg promo. dan mungkin juga bp bisa pergunaan untuk tempt usaha. ini    jaringannya juga tidak akan bentrok degan inet yg sudah aktif sblmnya pk</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Dengan    internet yang promo ini bapak bisa mengunakan secara lebih tenang bapak karna    tidak harus berebut sinyal dengan angota keluarga yang lain, sehingga    penggunaan lebih efektif bapak dan tidak semua nomer mendaptkan fasilitas    seperti ini bapak.</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">Pakai    provider lain</td>
                                  <td width="652">Disini    indihome sedang ada promo selama 1 thn , jauh lebih hemat dari harga    normal,penambahan hanya 32 rb / bulan + ppn 10% , setelah masa promo    dikenakan tarif normal perbulan 140 k +ppn 10% ,indihome skrg kualitasnya    jauh lebih bagus,silahkan bandingkan sendiridg ibuk /bpk gunakan ,kan lumayan    bisa menghemat tarif internet selama 1 thn&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">Pelanggan    tidak mengerti</td>
                                  <td width="652">baik    bapak/ibu ini ada penawaran untuk pemasangan jaringan internet, ibu dan    kluarga jd tdk perlu menggunakan paket data lagi klo drumah, karena kami    tambahkan kuota 50GB. untuk penambahan biaya berlangganan sudah sangat hemat    bahkan bapak/ibu diberikan promo selama 12 bulan dengan penambahan biaya    hanya 32rb plus ppn 10% stiap bulannya. nanti di bulan ke 13 dikenakan tarif    normal 140rb plus ppn 10% stiap bulannya selama berlangganan.&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">bisa    dipertimbgakan bila kebutuhan internet bapak/ibu banyak bisa menjadi    alternatif dalam pemakaian karena tarif sangat hemat dengan penmbhan setiap    bulan 32rb + ppn 10 % sdh bisa menikmati inet kec 10 mbps dengan kuota 50 Gb    bisa dinikmati rame-rame sehingga bapak/ibu memiliki alternatif akses    internet lainnya, promo selama 12 bulan , setelah masa promo dikenakan tarif    normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">Bapak/ibu&nbsp; kita kedepannya tidak tau kebutuhan    internet keluarga bapak. Dengan tarif penambahan 32rb setiap bulan +ppn 10%    bisa menikmati internetnya dan program aktif biling berjalan , promo selama    12 bulan , setelah masa promo dikenakan tarif normal perbulan 140 k +ppn    10%&nbsp;</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">Disini    kan jauh lebih murah utk tarifnya karena promo,sedangkan kualitasnya sama    dengan yg bpk/ibu gunakan saat ini,tapi kami tidak mengganggu kualitas    jaringan yg digunakan bpk/ibu sebelumnya,silahkan bandingakn sendiri    kualitasnya</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">bu/pak    untuk internet yang ini pengunaan nya bapak bs di bagi dengan angota    keluarga&nbsp; yang lain biar akses internet nya yg utama tidak lambat,karena    penmbhan nya juga cukup murah hanya 32rb + Ppn 10% setiap bulan nya, promo    selama 12 bulan , setelah masa promo dikenakan tarif normal perbulan 140 k    +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">jika    b/i berlangganan homewifi akan lebih menguntungkan nanti kebijakan sepenuhnya    ada di pelangan, bapak kan bs memaximalkan pemakaiannya dari sebelumnya cmn    pakai satu inet sekarang 2 inet pasti kan sangat berbeda untuk akses    internetnya jadi lebih cepat,dan pnmbhan nya cukup murah hanya 32k setiap    bulan + ppn 10 %, promo selama 12 bulan , setelah masa promo dikenakan tarif    normal perbulan 140 k +ppn 10%&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">bu/pi    silahkan untuk kedepan nya b/i bs evaluasi terkait pengunaan 2 inet nya    seperti apa,saya yakin ini&nbsp; sangat bermanfaat untuk b/i,akan tetapi jika    sdh aktif maka bill sudah berjalan</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="125">HOMEWIFI</td>
                                  <td width="341">Sudah    berlangganan di nomor lain</td>
                                  <td width="652">Ini    sebagai bahan perbandingan saja, biasanya bpk membeli paket data dr hp /    ponsel bpk berapa.... Pasti lebih mahal, skrg kl membeli paketan data yg 50gg    saja dr hapenya bpk gunakan saat ini msh diatas 100rb rupiah, itu pun hanya    bisa digunakan 1 pengguna saja yaitu bpk, bisa dibagipun dgn thathering tp    kan harus menyita waktu bpk dan hp cpat panas dan boros btrai... Tetapi    dengan adanya penawaran dr kami Home wifi namanya bpk sudah menghemat biaya    pembelian quota selama 1th.</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
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