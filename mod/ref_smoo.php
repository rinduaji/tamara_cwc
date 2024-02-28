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
						      <p>Rule : <a href="ref_all.php"></a><a href="ref_smoo.php">SMOOA</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_all.php">All</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_stb.php">STB</a> </p>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="361">
                                <col width="705">
                                <tr height="20">
                                  <td height="20" width="219"><div align="center"><strong>REASON    DECLINE</strong></div></td>
                                  <td width="865"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN<br>
                                  </strong></div></td>
                                </tr>
                                <tr height="100">
                                  <td rowspan="4" height="300">BELUM    BUTUH</td>
                                  <td width="865">bapak/ibu    untuk penawaran program ini sangat menguntungkan ke depannya, karena dengan    jumlah kuota yg diberikan , bapak/ibu bisa membaginya kepada sesama anggota    terdaftar. Selain itu untuk pelanggan prepaid bisa telfon dan sms juga&nbsp; pak/bu unlimited ke sesama anggota    kapanpun.Jadi silahkan bapak/ibu dipertimbangkan kembali terakit penawaran yg    kami sampaikan tadi. Agar, nanti bisa langsung menggunakna program yg tadi    kami sampaikan.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="865">Dengan berlangganan SMOOA, maka Bapak/ibu tidak    perlu lagi membeli paket data secara terpisah untuk masing-masing anggota    keluarga, tentunya untuk dana yang dikeluarkan juga jauh lebih hemat, serta    lebih praktis karena pembayaran&nbsp;    program smooa ini nanti akan ditagihkan bersamaan dengan tagihan    Indihome.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="865">Untuk paket SMOOA ini lebih hemat...karena bisa    dishare ke anggota keluarga untuk paket kuota internet nya.jadibisa digunakan    untuk anggota yg terdaftar tanpa membeli paket data pribadi diluar.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="865">Apakah tidak di sayangkan pak/bu jika di    lewatkan, karna disini benefit yang akan di dapatkan bapak/ibu kan sangat    banyak, disini kan bpk/ibu bisa menikmati sharing kuota dengan keluarga dan    juga nelpon dan sms jadi lebih hemat pengeluaran bpak/bu, jadi tidak    menghabiskan bnyak biaya hanya untuk kebutuhan internet dan pulsa<br>                                  </td>
                                </tr>
                                <tr height="160">
                                  <td rowspan="2" height="340">HARGA    MAHAL</td>
                                  <td width="865">oh    tidak pak/bu, paket ini tidak mahal, misalnya untuk program paket silver    hanya dengan tarif berlangganan 75k + ppn 10% setiap bulannya, keuntungannya    bapak/ibu bisa dapat langsung 10GB kuota internet unlimited yg bisa    dibagi-bagi ke sesama, Benefit menarik lainnya jika&nbsp; bapak/ ibu pelanggan prabayar, bisa telepon    dan SMS ke sesama anggota tanpa batas. Sedangkan untuk keluar anggota, bapak/    ibu mendapatkan 30 menit telepon dan 30 sms.<br>
                                  Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal pak/bu seperti tdk perlu keluar rumah buat beli paketan sendiri.</td>
                                </tr>
                                <tr height="180">
                                  <td height="180" width="865">progRAM    ini kan tdk semua PL mendapatkan penawaran pak/buk, keuntungan terbesar nya    hanya dg berlangganan penambahan perbulan 75000 + ppn 10%&nbsp; bp/buk bisa menikmati paket silver , bapak/    ibu akan mendapatkan kuota internet 10 GB. <br>
                                    Benefit menarik lainnya jika&nbsp; bapak/    ibu pelanggan prabayar, bisa telepon dan SMS ke sesama anggota tanpa batas.    Sedangkan untuk keluar anggota, bapak/ ibu mendapatkan 30 menit telepon dan    30 sms.<br>
                                  Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal.. perbandingannya kan kalau bp beli paket kuota diluar dapatnya kan    hanya kuota inet saja pk sedangkan untuk jatah paket telp bp/ibu masih harus    beli pulsa telp lagi itupun blm tentu unlimited pak/buk jadi bandingannya    jauh lebih mahal.</td>
                                </tr>
                                <tr height="160">
                                  <td rowspan="3" height="380">BELUM PERLU</td>
                                  <td width="865">*SUDAH PAKAI    WIFI* <br>
                                  betul memang penggunaan inet dirumah menggunakan wifi , namun ketika berada    diluar rumah pasti membutuhkan yg namanya paket data pak/bu , jadi bisa    digunakan secara maksimal dan jika bpk/ibu tidak membutuhkan paket datanya    maka bisa di share ke anggota lainnya yang mungkin aktivitas nya banyak    diluar seperti putra putrinya atau anggota keluarga yang lain. Karena ini    sangat menghemat sekali pak/bu dirumah pun bpk/ibu bisa menggunakan vitur    yang telepon&amp;sms sesama anggota nya unlimited tanpa batas jadi tidak    perlu beli pulsa lagi<br>                                  </td>
                                </tr>
                                <tr height="160">
                                  <td height="160" width="865">*SUDAH PAKAI PAKETAN DATA* <br>
                                    Pak ini kan bapak kalo diluar rumah kan menggunakan paket data ya pak? Iya,    nah ini kan harga paketan kan sekitar 50ribu pak kalo dikali 6 orang sudah    mahal kan pak tapi kalo ini kan lebih hemat pak penambahan perbulan hanya 75    ribu + ppn 10% sudah bisa digunakan 6 orang anggota pak.Benefit menarik    lainnya jika&nbsp; bapak/ ibu pelanggan    prabayar, bisa telepon dan SMS ke sesama anggota tanpa batas. Sedangkan untuk    keluar anggota, bapak/ ibu mendapatkan 30 menit telepon dan 30 sms.<br>
                                  Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal jadi lebih hemat pak</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="865">*SUDAH PAKAI PAKETAN DATA* <br>
                                  Bapak kalau bpk beli kuota pribadi tdk bisa dibagi2kan ke anggota keluarga    atau teman yg membutuhkan. Apalagi disini dengan sesama anggota bisa    telp&amp;sms tanpa batas.</td>
                                </tr>
                                <tr height="180">
                                  <td height="180">PIKIR-PiKIR</td>
                                  <td width="865">Benefit    program ini sangat banyak pak/bu, pertama Ibu/bapak mendapatkan kuota    internet yang bisa di share/ di bagi2kan kepada anggota yang terdaftar,    Benefit menarik lainnya jika&nbsp; bapak/    ibu pelanggan prabayar, bisa telepon dan SMS ke sesama anggota tanpa batas.    Sedangkan untuk keluar anggota, bapak/ ibu mendapatkan 30 menit telepon dan    30 sms.<br>
                                    Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal<br>
                                    <br>
                                    hanya 75k/bulan ibu bisa menggunakan untuk 3-6, tentu lebih hemat karena    ibu/bapak<br>
                                  Tidak perlu membeli paket data atau membeli pulsa tambahan</td>
                                </tr>
                                <tr height="60">
                                  <td rowspan="2" height="180">HARGA    MAHAL</td>
                                  <td width="865">&nbsp;program ini justru lebih menghemat biaya    pak/buk, dengan 75k sudah mendapatkan 10gb terlebih bisa dikontrol pengunaan    melalui aplikasi semoa. Bukan hanya itu, bisa sms dan telepon ke sesama    anggotapun jugu lebih maksimal</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="865">Disini dengan penambahan 75 jatuhnya sangat    murah sangat efisien pak, karena disini bayarnya 1, tapi manfaatnya,    benefitnya bisa dirasakan bersama2, jadi bapak tidak perlu beli paket data,    tidak perlu beli pulsa, karena sudah jadi 1 sama tagihan indihomenya&quot;<br>
                                      <br>
                                  Tanya harga paketan pl kalau beli, kalo semisal lebih mahal langsung    edukasi bandingkan dengan berlangganan smooa yg lebih murah dan bisa    dirasakan bersama2 benefitnya</td>
                                </tr>
                                <tr height="40">
                                  <td rowspan="3" height="80">BELUM    PERLU</td>
                                  <td width="865">sangat    disayangkan kalo bpk lewatkan krn quotanya besar dan bisa dibagi bagi ke    sesama anggota yang terdaftar</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="865">kalo tdk ada jaringan inet, bpk/ibu tetap bisa    berkomunikasi dgn jaringan 2g/3g/4g/4g lte.</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="865">dapat mengganti anggota smooa yg paling    membutuhkan utk komunikasi bila hpnya belum android.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100">JARANG    DIGUNAKAN</td>
                                  <td width="865">kan    begini bp, untuk penggunaan internet kalo di rumah bp menggunakan    indihome/WiFi?? Sedangkan smooa ini bisa dipergunakan di luar rumah. Jadi bp    tidak perlu beli paket data sendiri2 untuk istri, anak atau anggota keluarga    lain. Jadi cukup menggunakan layanan Smooa paket silver kuota 10gb saja sudah    cukup bisa mengcover kebutuhan internet bp pada saat penggunaan di luar rumah    apalagi ini bisa di share dg anggota keluarga yang terdaftar 3-6 nomor. Jadi    sangat hemat bp</td>
                                </tr>
                                <tr height="60">
                                  <td rowspan="3" height="140">HARGA    MAHAL</td>
                                  <td width="865">sangat    disayangkan bp kalau semisal dilewatkan, soalnya langganan smooa ini sangat    menguntungkan dari segi tarif dan ekonomis. Karena dg penambahan di angka    75rb ppn 10% bp sudah bisa menikmati smooa dg paket silver yang mana bisa    dipergunakan 3-6 nomor anggota terdaftar</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="865">Lebih hemat karena bisa di bagi dgn anggota    keluarga atau teman, jadi tidak harus beli paket data sendiri-sendiri</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="865">Tidak perlu beli pulsa lagi untuk telfon sms    karena sudah dapat unlimited ke sesama anggota untuk pelanggan prepaid</td>
                                </tr>
                                <tr height="40">
                                  <td height="40">MASIH    PIKIR-PIKIR</td>
                                  <td width="865">bpk    tidak perlu repot beli paket data krn masa berlakunya selama 30 hari dan akan    diperpanjang secara otomatis</td>
                                </tr>
                                <tr height="40">
                                  <td rowspan="2" height="100">&nbsp;</td>
                                  <td width="865">&quot;program    yang kami tawarkan saat ini lebih murah pak, karena nantinya kuota internet    semakin dibutuhkan, jadi lebih murah dan bermanfaat kalau berlanganan    sekarang&quot;&quot;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="865">program ini pilihan paketnya beragam pak&nbsp; , sehingga bpk bs memilih paket sesuai dgn    kebutuhan bpk , dan juga selain itu bpk juga bs menentukan / mengganti no    membernya shg lbh efektif untuk penggunaan paket internetnya pak ,</td>
                                </tr>
                                <tr height="40">
                                  <td rowspan="2" height="80">BELUM    BUTUH</td>
                                  <td width="865">&quot;Bapak    bisa membuktikan sendiri pak manfaat nya untuk saat ini sangat banyak,    daripada masing2 anggota keluarga beli paketan kuota&quot;&quot;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="865">&quot;&quot;mumpung ada penawaran programnya    pak, bapak bisa membuktikan sendiri manfaat nya, lebih praktis berlanganan    sekarang daripada nanti bapak mengajukan sendiri, belum tentu programnya    masih ada&quot;&quot;</td>
                                </tr>
                                <tr height="160">
                                  <td height="160">Mahal</td>
                                  <td width="865">Terima    kasih untuk responnya pak/ibu&hellip;..jika dilihat dengan benefit yang sdh saya    sampaikan tadi&nbsp; pak/ibu justru bpk/ibu    bisa berhemat karena dengan penambahan 75rb sudah bisa digunakan 3-6 nomor    dalam artian qouta internet bisa dibagi yang lebih wow Benefit menarik    lainnya jika&nbsp; bapak/ ibu pelanggan    prabayar, bisa telepon dan SMS ke sesama anggota tanpa batas. Sedangkan untuk    keluar anggota, bapak/ ibu mendapatkan 30 menit telepon dan 30 sms.<br>
                                  Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal.Nah coba dibandingkan jika 3-6 nomor telkomsel tersebut masing2 harus    membeli pulsa tentu akan lebih tinggi biayanya.....</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">Mahal</td>
                                  <td width="865">dengan    adanya program ini masa aktif kartu semua anggota kan otomatis diperpanjang    30 hari nah tentunya ini kan lebih praktis dan menghemat biaya krn kita tdk    perlu harus beli pulsa lagi untuk memperpanjang masa aktif kartu prabayarnya    dan semua benefit tetap bisa digunakan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">Mahal</td>
                                  <td width="865">Salah    satu benefit program ini bpk/ibu ada fasilitas unlimited telp/sms kesasama    anggota preiped nah ini tentu bisa menghemat pengeluaran dibandingkan harus    telp menggunakan WA tentu akan banyak konsumsi qouta internet dan ketika    qouta habis pasti harus isi pulsa lagi.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100">Paket data    masih banyak</td>
                                  <td width="865">Tidak    perlu kuatir bpk/ibu krn qouta inet yg masih ada masih bisa digunakan dan    tidak hangus,ketika qouta inet habis baru akan dianjutkan dengan qouta inet    SMOOA, terlebih lagi jika sdh aktif masa aktif kartupun secara otomatis    diperpanjang 30 hari jadi lebih praktis krn tdk perlu beli pulsa dulu    kemudian beli paket internet baru bisa digunakan nah dengan berlanggnan    program ini daftar sekali bisa digunakan selamanya tanpa takut lupa kartunya    hangus.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="219">Nomor telkomsel tdk ada/member kurang</td>
                                  <td width="865">Untuk    saat ini rata2 HP sdh dibekali dengan dual sim card pak/ibu&hellip;jadi nanti bisa    beli perdana telkomsel untuk daftarkan, melihat benefit cukup banyak yang    bisa didapatkan tentu hal ini akan menjadikan keuntungan tersendiri dalam    jangka panjang</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">Qouta internet    sedikit</td>
                                  <td width="865">Kita    ada banyak pilihan paket pak/ibu..tinggal disesuaikan dengan kebutuhan (    sebutkan pilhan paket) nah nanti jika merasa kurang masih bisa melakukan top    up pembelian qouta inet reguler&hellip;.terlebih masih ada benefit telp dan sms yang    masih bisa diggunakan jadi tentu akan menjamin kumunikasi bpk/ibu dengan    kartu telkomselnya tidak akan terhambat</td>
                                </tr>
                                <tr height="57">
                                  <td rowspan="3" height="257">HARGA MAHAL</td>
                                  <td width="865">nanti    nya bpk /ibu untuk 10gb kan sudah bisa di bagikan dengan angota keluarga yang    lain bukan lewat tethering tapi bs lgsung di tembak kuota ke nomer angota    keluarga nya jadi angota keluarga yang lain tidak perlu beli paket data lagi</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="865">pak/bu ini kan sangat hemat karena ibu tidak    perlu isi pulsa lagi karena otomatis akan mempeparnjang masa aktif nomer tsel    nya pak/bu dan pak/bu juga mendapatakan Benefit menarik lainnya jika&nbsp; bapak/ ibu pelanggan prabayar, bisa telepon    dan SMS ke sesama anggota tanpa batas. Sedangkan untuk keluar anggota, bapak/    ibu mendapatkan 30 menit telepon dan 30 sms.<br>
                                  Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="865">nah    bpk/ibu bs&nbsp; coba bandingkan jika    anggota keluarga bapak/ibu ada 3 orang yg masing2 membeli pulsa atau paket    data sendiri, sehingga jika dikalkulasikan jauh lebih besar tarif yg    dikeluarkan. Nah, jika bapak/ibu bersedia penawaran ini dg paket silver yg    tarifnya hanya 75k plus ppn 10% perbulan, maka akan lebih hemat semisal    bapak/ibu bagi dengan 3 orang</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="3" height="60">sisa    kuota inet masih bnyak</td>
                                  <td rowspan="3" width="865">pak/bu tidak perlu khawatir untuk kuota inet paket smooa ini    sudah berlaku nasional dan&nbsp; all    jaringan jadi jika kuota ibu masih ada maka yang terpakai adalah kuota yang    ada sekarang untuk kouta dari smooa akan terpakai jika kuota inet ibu sudah    habis</td>
                                </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20">
                                  <td rowspan="3" height="60" width="219">pemakaian internet tidak bnyak    karena sudah pakai wifi</td>
                                  <td rowspan="3" width="865">pak/bu untuk inet smooa ini bs di gunakan di    luar wifi,jadi semisal bapak sedang berada di luar jangkauan wifi kan masih    tetap bisa di gunakan internetnya sehingga bapak tidak perlu isi kuota    lagi&nbsp; untuk no hp nya dan untuk kuota    nya juga bisa di bagi dengan yang lain semisal angota keluarga bpak/ibu ada    yang butuh kuota inet lebih bnyak kan bisa di bagi sehinga lebih    menguntungkan</td>
                                </tr>
                                <tr height="20"> </tr>
                                <tr height="20"> </tr>
                                <tr height="20">
                                  <td rowspan="3" height="100">BELUM    PERLU</td>
                                  <td width="865">quotanya    bisa dbagikan,bila kehabisan pulsa bapak/ibu bisa sms dan telpon kesesama    anggota yang terdaftar</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="865">bpk/ibu lbh hemat karena yg beli paket cm no    bapk/ibu yg lainnya bisa disharing</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="865">Bila bpk/ibu diluar rumah/diluar kantor lebih    hemat karena bisa sharing quota jdi tdk perlu beli paket data untuk non    anggota&nbsp; keluarganya,karena kadang saat    beli paket data tdk habis malah hangus,kl bisa share kuota enak bpk/ibu jadi    lebih hemat</td>
                                </tr>
                                <tr height="40">
                                  <td height="40">JARANG    DIGUNAKAN</td>
                                  <td width="865">jaringannya    nasional,bs dibawa kemana-mana walpun bpk/ibu berpisah dari membernya,juga    bisa dijatah kuotanya</td>
                                </tr>
                                <tr height="40">
                                  <td rowspan="3" height="100">HARGA    MAHAL</td>
                                  <td width="865">kuota    datadi HP yg sdh aktif kan tdk bisa dishare bpk/ibu, tpi dengan smooa paket    keluarga ini bisa dibagi dan dapat kuota sms dan tlpon</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="865">harganya ekonomis,di my telkomsel itu harganya    lebih mahal dikita nbh 75 rb untuk 30 hari dan diperpnjang otomatis,</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="865">tidak perlu beli pulsa telkomsel lagi</td>
                                </tr>
                                <tr height="100">
                                  <td height="100">Mahal</td>
                                  <td width="865">baik    pak, penawaran ini tidak untuk semua pelanggan pak, karna hanya pelanggan    indihome yg menggunakan kartu telkomsel yg kami hub saat ini,<br>
                                  mendapatkan penawaran smooa ini dipaket silver ini, bapak bisa mendapatkan    kuota 10 gb pak, dan itu kuota utama pak, untuk tarifny sngat terjangkau    hanya 75k+ppn10persen, <br>                                  </td>
                                </tr>
                                <tr height="140">
                                  <td height="140">Mahal</td>
                                  <td width="865">Yang    paling menarik adalah harga penawaran yang kami tawarkan sangat ekonomis,    Untuk paket silver penambahan biaya berlangganan setiap bulannya cukup dengan    75k + PPN 10%, bapak/ ibu sudah mendapatkan kuota internet sebsar 10 GB.    Benefit menarik lainnya jika&nbsp; bapak/    ibu pelanggan prabayar, bisa telepon dan SMS ke sesama anggota tanpa batas.    Sedangkan untuk keluar anggota, bapak/ ibu mendapatkan 30 menit telepon dan    30 sms.<br>
                                  Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal</td>
                                </tr>
                                <tr height="120">
                                  <td height="120">Belum Perlu    Paket&nbsp;</td>
                                  <td width="865">Apakah    tidak syg pak, ini kan bisa bp pakek diluar rumah lumayan pak 10gb kuota    perbulannya.. keuntungan lain Benefit menarik lainnya jika&nbsp; bapak/ ibu pelanggan prabayar, bisa telepon    dan SMS ke sesama anggota tanpa batas. Sedangkan untuk keluar anggota, bapak/    ibu mendapatkan 30 menit telepon dan 30 sms.<br>
                                    Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal<br>
                                  pda bp beli kuota kan dptnya cuma kuota inet saja</td>
                                </tr>
                                <tr height="80">
                                  <td height="80">Sudah    menggunakan Internet wifi dirumah</td>
                                  <td width="865">Baik    bapak karna untuk progam ini kan di khususkan untuk penguna nomer telkomsel    jadi bapak bisa menggunakan untuk di luar rumah jika tidak ada layanan wifi    internet, dan bapak bisa menggunakan kuota sms serta tlpun untuk mengehemat    pulsa dasar yang sudah bapak gunakan untuk mengobrol ke sesama anggota bapak    jadi lebih hemat bapak</td>
                                </tr>
                                <tr height="60">
                                  <td height="60">Tidak    menggunakan kartu Telkomsel&nbsp;</td>
                                  <td width="865">Mungkin    disini bapak sudah menggunakan hp android bapak yang sudah memiliki 2 sim    card secara otomatis bisa di pasang pak untuk penggunana kartu telkomsel jadi    bapak tidak perlu membuang kartu lama bapak yang sudah lama bapak gunakan&nbsp;</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>Update 9 April 2021 </p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="155">
                                <col width="597">
                                <tr height="120">
                                  <td height="120" width="253">BELUM    PERLU</td>
                                  <td width="832">untuk penawaran    SMOOA ini sangat menguntungkan ke depannya, sayang jika penawaran nya    dilewatkan karena dengan jumlah kuota yg diberikan bapak/ibu bisa membaginya    kepada sesama anggota yang terdaftar. Selain itu untuk pelanggan prepaid juga    bisa telfon dan sms pak/bu unlimited ke sesama anggota kapanpun. Jadi    silahkan bapak/ibu dipertimbangkan kembali terkait penawaran yg kami    sampaikan tadi. Agar, nanti bisa langsung menggunakan program yg tadi kami    sampaikan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="253">HARGA MAHAL</td>
                                  <td width="832">isini    dengan penambahan 75rb akan menjadi sangat murah dan sangat efisien pak,    manfaatnya bisa dirasakan bersama2, jadi bapak tidak perlu beli paket data,    tidak perlu beli pulsa, karena tagihannya sudah digabungkan dgn tagihan    indihomenya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="253">Sudah berlangganan paket</td>
                                  <td width="832">Apabila    bapak sudah berlangganan paket internet, bisa saja programnya&nbsp; berlangganan saat ini dan untuk kuota    internetnya sementara diberikan kepada anggota yang lainnya,misalkan bapak    cukup 1GB, sisanya bisa diberikan terlebih dahulu ke anggota yang lain,bulan    depan baru kuota inetnya&nbsp; untuk    nomor&nbsp; bapak lebih besar</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="253">Sudah berlangganan paket</td>
                                  <td width="832">Paketnya    fleksible pak/bu, jika bapak/ibu memiliki kuota yang memang banyak, paketnya    bisa di alihkan kepada anggota yang memerlukan data internetnya, jadi untuk    pengeluaran lebih efisien/mengirit pengeluaran untuk paket data pak/bu.. Dan    paket data kan digunakan saat di luar rumah saja ya pak/bu..kalau di rumah    bapak/ibu dan keluarga cukup menggunakan WIFI saja.</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="253">BELUM PERLU</td>
                                  <td width="832">bapak/ibu    untuk penawaran program ini sangat menguntungkan ke depannya, karena dengan    jumlah kuota yg diberikan , bapak/ibu bisa membaginya kepada sesama anggota    terdaftar. Selain itu untuk pelanggan prepaid bisa telfon dan sms juga&nbsp;    pak/bu unlimited ke sesama anggota kapanpun.Jadi silahkan bapak/ibu    dipertimbangkan kembali terakit penawaran yg kami sampaikan tadi. Agar, nanti    bisa langsung menggunakna program yg tadi kami sampaikan.</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="253">BELUM PERLU</td>
                                  <td width="832">Dengan    berlangganan SMOOA, maka Bapak/ibu tidak perlu lagi membeli paket data secara    terpisah untuk masing-masing anggota keluarga, tentunya untuk dana yang    dikeluarkan juga jauh lebih hemat, serta lebih praktis karena    pembayaran&nbsp; program smooa ini nanti akan ditagihkan bersamaan dengan    tagihan Indihome.</td>
                                </tr>
                                <tr height="57">
                                  <td height="57" width="253">BELUM PERLU</td>
                                  <td width="832">Untuk    paket SMOOA ini lebih hemat...karena bisa dishare ke anggota keluarga untuk    paket kuota internet nya.jadibisa digunakan untuk anggota yg terdaftar tanpa    membeli paket data pribadi diluar.</td>
                                </tr>
                                <tr height="76">
                                  <td height="76" width="253">BELUM PERLU</td>
                                  <td width="832">Apakah    tidak di sayangkan pak/bu jika di lewatkan, karna disini benefit yang akan di    dapatkan bapak/ibu kan sangat banyak, disini kan bpk/ibu bisa menikmati    sharing kuota dengan keluarga dan juga nelpon dan sms jadi lebih hemat    pengeluaran bpak/bu, jadi tidak menghabiskan bnyak biaya hanya untuk    kebutuhan internet dan pulsa</td>
                                </tr>
                                <tr height="171">
                                  <td height="171" width="253">HARGA MAHAL</td>
                                  <td width="832">oh    tidak pak/bu, paket ini tidak mahal, misalnya untuk program paket silver    hanya dengan tarif berlangganan 75k + ppn 10% setiap bulannya, keuntungannya    bapak/ibu bisa dapat langsung 10GB kuota internet unlimited yg bisa    dibagi-bagi ke sesama, Benefit menarik lainnya jika&nbsp; bapak/ ibu    pelanggan prabayar, bisa telepon dan SMS ke sesama anggota tanpa batas.    Sedangkan untuk keluar anggota, bapak/ ibu mendapatkan 30 menit telepon dan    30 sms.<br>
                                  Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal pak/bu seperti tdk perlu keluar rumah buat beli paketan sendiri.</td>
                                </tr>
                                <tr height="209">
                                  <td height="209" width="253">HARGA MAHAL</td>
                                  <td width="832">progRAM    ini kan tdk semua PL mendapatkan penawaran pak/buk, keuntungan terbesar nya    hanya dg berlangganan penambahan perbulan 75000 + ppn 10%&nbsp; bp/buk bisa    menikmati paket silver , bapak/ ibu akan mendapatkan kuota internet 10    GB.<br>
                                    Benefit menarik lainnya jika&nbsp; bapak/ ibu pelanggan prabayar, bisa    telepon dan SMS ke sesama anggota tanpa batas. Sedangkan untuk keluar    anggota, bapak/ ibu mendapatkan 30 menit telepon dan 30 sms.<br>
                                  Jika bapak/ ibu pengguna kartu halo, mendapatkan 500 menit telepon dan 500    sms untuk ke sesama anggota. Sedangkan untuk keluar anggota, berlaku tarif    normal.. perbandingannya kan kalau bp beli paket kuota diluar dapatnya kan    hanya kuota inet saja pk sedangkan untuk jatah paket telp bp/ibu masih harus    beli pulsa telp lagi itupun blm tentu unlimited pak/buk jadi bandingannya    jauh lebih mahal.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="253">BELUM PERLU</td>
                                  <td width="832">apa    tidak disayangkan bapak / ibu, karena penggunaan kuota internet nya akan    lebih praktis, dengan biaya berlangganan per bulan sebesar 75k belum termasuk    ppn 10%, bapak / ibu sudah bisa mendapatkan paket kuota internet sebesar 10gb    (silver) dan bisa di bagikan untuk anggota keluarganya, disini juga bapak /    ibu bisa membatasi penggunaan pemakaian kuota internetnya agar tidak terlalu    boros untuk setiap bulannya</td>
                                </tr>
                                <tr height="180">
                                  <td height="180" width="253">HARGA MAHAL</td>
                                  <td width="832">untuk    penawaran paket smooa nya ini bapak / ibu sudah mendapatkan banyak sekali    benefit dalam pemakaiannya, selain mendapatkan kuota internet keluarga 10gb    (silver) yang bisa di bagikan ke anggota terdaftar, dengan biaya berlangganan    sebesar 75k per bulan belum termasuk ppn 10%, bapak / ibu pengguna kartu    prabayar akan mendapat akses telpon dan sms unlimited untuk sesama anggota    nya, namun jika untuk penggunaan diluar anggota bapak / ibu akan mendapatkan    30menit telpon dan 30 sms. selain itu untuk pengguna pengguna pascabayar    bapak / ibu juga akan mendapatkan benefit yaitu 500menit telpon dan 500 sms    untuk sesama anggotanya, sedangkan untuk penggunaan keluar anggotanya akan    dikenakan tarif normal</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="253">BELUM PERLU</td>
                                  <td width="832">untuk    setiap bulannya bapak / ibu pasti ada penggunaan kuota internet kan di luar    rumah? nah untuk penawaran paket smooa ini bapak / ibu tidak perlu ribet    dalam pengisian kuota internet yang dimiliki, kalau yang biasa habis kan    bapak / ibu harus beli pulsa dahulu, lalu melakukan aktivasi ulang paket nya.    Kalau dengan paket smooa ini bapak cukup aktivasi di awal, kemudian jika    setelah 30hari kuota internet bapak habis, kuota internet dari paket smooa    ini akan langsung masuk ke nomor utama dan bisa di akses dan dibagikan    kembali untuk bapak / ibu dan anggota yang terdaftar</td>
                                </tr>
                                <tr height="180">
                                  <td height="180" width="253">HARGA MAHAL</td>
                                  <td width="832">tenang    saja bapak jadi cukup dengan biaya berlangganan 75k belum termasuk ppn 10%    per bulan, bapak sudah mendapatkan kuota internet, kuota telpon, dan juga    kuota sms, jadi bapak / ibu tidak perlu berkali-kali untuk mengisi pulsa    pembelian kuota internet, kuota telpon ataupun kuota sms, karena bapak / ibu    akan langsung diberikan 1 paket langsung untuk pengguna kartu prabayar akan    mendapat akses telpon dan sms unlimited untuk sesama anggota nya, namun jika    untuk penggunaan diluar anggota bapak / ibu akan mendapatkan 30menit telpon    dan 30 sms. selain itu untuk pengguna pengguna pascabayar bapak / ibu juga    akan mendapatkan benefit yaitu 500menit telpon dan 500 sms untuk sesama    anggotanya, sedangkan untuk penggunaan keluar anggotanya akan dikenakan tarif    normal</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="253">BELUM PERLU</td>
                                  <td width="832">pak    sayang di lewatkan program ini,karna nantinya bapak sudah bisa berbagi kuota    dengan keluarga yg bisa di gunaka di luar rumah, tarifnya 75k+ppn perbulan    bapak sudah mendapatkan kuota 10GB yang bisa bapak bagi nantinya. Jd sangat    menarik sekali</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="253">HARGA MAHAL</td>
                                  <td width="832">Jika    berlangganan paket smooa silver ini bapak sudah sangat nyaman karena paket    kuota internet nya bisa dibagi2 kepda saudara atau anggota keluarga jd lebih    hemat</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="253">tarif mahal</td>
                                  <td width="832">meskipun    sedang diluar rumah penggunaan datanya bisa digunakan,membadgkan biasa pake    paket data setiap bulannya dengan berlanggan smooa jdi lebih hemat paket    datanya</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="253">Belum perlu</td>
                                  <td width="832">daripda    harus isi pulsa untuk paket data,isi pulsa lagi untuk sms dan telpon isi    pulsa lagi untuk nmbh masa aktif biar tdk hangus</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="253">Belum perlu</td>
                                  <td width="832">dengan    program ini bapak bisa memanage keperluan kuota keluarga bapak hanya dengan 1    aplikasi, tanpa harus mengeluarkan banyak cost untuk semua perangkat seluler    di keluarga bapak, sehingga kebutuhan dalam 1 keluarga bisa cover sesuai    dengan kebutuhan dan sesuai budget.&nbsp;</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="253">Mahal</td>
                                  <td width="832">Kalo    bpk beli paketan sendiri di konter atau di aplikasi jauh lebih mahal pak,    sekitar 50rb-100rb per nomor. Sedangkan dengan penawaran program smooa    penambahannya hanya 75k plus ppn 10% bpk bisa daftarkan min 3 nomor, maks 6    nomor. Selain dapat kuota bpk juga dapat paket tlpon dan sms. Dan untuk saat    ini kan kegiatan banyak dirumah, jadi sangat efektif menggunakan program ini    pak. Selain menghemat biaya pengeluaran bulanan, bpk juga dapat sharing dg    anggota keluarga lain</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="253">BELUM PERLU&nbsp;</td>
                                  <td width="832">akan    sangat disayangkan jika dilewatkan, yg kami sampaikan ini bukan untuk tv    ataupun wifi, tapi untuk paket data telkomsel, sama seperti beli di luar,    tapi bedanya kalo beli di luar kan bayarnya per 1 nomor, jatuhnya kan jauh    lbh mahal, tpi kalo smooa ini bp/ib sekali membeli, 1 harga tpi sudah bisa    digunakan maksimal 6 nomor sekaligus itu sudah lengkap paket kuota telkomsel,    telp sms dan bsa memperpanjang kartu, penambahan flat 75k+ppn10% bukan per    nomor tpi sdh maksimal 6 nomor sekaligus</td>
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