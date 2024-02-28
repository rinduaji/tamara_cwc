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
						      <p>Rule : <a href="ref_stbtambahan.php">STB_Tambahan</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> |<a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a>  | <a href="ref_all.php">All</a> | <a href="ref_nba.php">NBA</a></p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="20">
                                  <td height="20" width="138"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="249"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="697"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">kita    pastikan programnya sangat efektif buat bpk krn dengan benefit yg akan    bpk/ibu dapatkan nantinya&nbsp; sayang kalau dilewatkan begitu saja, karena    dengan program ini bpk/ibu sudah bisa menikmati useetvnya di 2 tv sekaligus,    bisa menyaksikan tayangan yang berbeda dalam waktu yg bersamaan,dengan tarif    yg cukup hemat dan terjangkau hanya dengan penambahan 80rb+ppn 10% saja,&nbsp; kami yakin akan sangat bermanfaat bagi    bpk/ibu beserta keluarga..utk tarifnya sendiri sudah mulai ditagihkan dibulan    depan ya pak/bu</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">STB TAMBAHAN</td>
                                  <td width="249">KECEWA    DENGAN TELKOM</td>
                                  <td width="697">mohon maaf pak atas ketidak nyamananya, jadi pak untk saat ini penambahan dekorder yang kita berikan sudah bnyak benefit yg bapak dapatkan, misanya, bpk/ ibu sdh bisa menikmati tayangan yang berbeda di tv ke 2 atau tv yang lain , selain itu mislnya pak/bu dirumh tv tabung itu tdk mslh karena bsa kta setting sprti tv interaktif, jd kalau bpak mau streaming youtube, browsing intrnet,fb, atau karokean tdk perlu lg dari hp/laptop krna smuanya itu sdh bsa bapak nikmati&nbsp; dari tv tabung</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">tidak    semua pelanggan mendapatkan penawaran ini dan kami yakin untuk program second    stb bermanfaat bagi keluarga .krn jika dirumah anggota keluarga yg lain mau    menonton channel yang berbeda dalam waktu bersamaan sudah bisa</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">jika    bapak bersedia berlangganan bapak bisa mendapatkan sensasi&nbsp; yang berbeda    saat menonton 2 tv dengan chanel yang berbeda, bapak bisa berlangganan sampai    kapanpun,kami jaminkan program ini akan memuaskan bapak bersama keluarga</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Untuk    penambahan tarif&hellip;. Sudah berjalan begitu program aktif</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Ini    bisa jauh lebih efektif lagi ketika bp/ibu sudah merasakan manfaatnya karna    dengan menambahkan decorder tambahan ini ibu/bp bisa menonton acara kesukaan    di tempat yg berbeda dan di waktu yg bersamaan tanpa perlu berebut dengan    anggota keluarga lainnya.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Selain    itu benefit yang bpk/ibu dapatkan juga banyak sekali dengan tarif yang hemat    seperti keunggulan nya sendiri ibu/bpk bisa PAUSE AND REWIND,merasakan    pengalaman smart tv bahkan pada tv biasa,tv on demand,record&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">menggunakan    akses internet melalui handphone, laptop, komputer, bpk/ibu juga sdh bisa    mengakses internet langsung dari TV yang bpk/ibu gunakan&quot;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Pada    saat menonton tv, terkadang antar anggota keluarga suka berbeda keinginan    channle yg ingin ditonton, dengan penambahan 2nd STB ini nantinya keluarga    bapak bisa lebih nyaman menonton acara tv dengan channel keinginan    masing-masing</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Kegunaan    Usee TV kami tidak hanya untuk menyaksikan tayangan TV, namun apabila bapak    dan keluarga memiliki hoby lain seperti bernyanyi, bapak bisa menggunakan    fitur karaoke yang tersedia di Usee TV sehingga lebih mengakrabkan anggota    keluarga</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Untuk TV pertama bapak yang sudah terpasang Useetv memang sudah menggunakan smart TV. Tp TV kedua bapak disini bila masih tv tabung, dengan bapak menambahkan decoder ke dua ini TV tabung bapak , bisa kami rubah menjadi tv interaktif, jd bapak bisa memiliki 2 TV interaktif tanpa harus membeli TV kembali pak</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">untuk    saat ini mungkin belum perlu pak, namun dengan pesatnya perkembangan    teknologi untuk browsing<br>
                                  dan menyaksikan youtube bpk/ibu saat ini sudah bisa melalui tv tdk hanya di    hp atau lapto</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">baik pak, untuk penggunaan useetv sendiri ini kan sudah banyak benefit atau manfaat yg bapak bisa nikmati. dengan useetv bapak tidak hanya monoton nonton saja, bapak bisa internetan , buka youtube dan karokean dengan keluarga, bersama sama , apalagi dengan dipasangkan decorder yg kedua nya pak, jadi sudah bisa kedua tv dengan siaran yg beda, dan dari kedua tv nya&nbsp; sudah bisa internetan ,youtubean dan karoean, jadi tidak hanya 1 tv saja, walaupun bapak hubungkan ketv tabung untuk ketv keduanya, tv tabungnya akan diseting seperti TV interaktif. dan Program penawaran ini tidak di semua PL Telkom yang mendapatkannya , hanya yg terpilih saja&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">PENAMBAHAN    Rp xxxx akan dimulai dibulan depan. Kami rasa dengan mengikuti program kami,    bapak sekeluarga bisa menikmati tayangan useetv dengan nyaman tanpa harus    bergantian menonton. Tentu akan membuat waktu senggang bapak dan keluarga    lebih bervariasi nantinya(hilangkan terlebih dahulu )</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Kita yakin untuk programnya sangat bermanfaat karna bapak/ibu dan keluarga dirumah sudah bisa menggunakan useetv nya di tv ke 2&nbsp; dan sudah boleh menonton tayangan yg berbeda, dan karna stb yg ditambahkan sudah bisa akses internet seperti browsing, streaming, buka utube, dan karokean dengan kualitas tayangan sudah HD, dan alatnya bisa difungsikan kesemua jenis tvny. dan tarif penambahan Rp xxxxx sudah berjalan mulai bulan depan</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Kita    cek dari sini penggunaan useetvnya kan aktif dipergunakan..dan karena    sifatnya penawaran&nbsp;karena tdk&nbsp;perlu berebut channel dalam    pemakaiannya karena useetvnya kan sudah bs langsung&nbsp; di pergunakan di TV    KE 2 yg berbeda dengan 2 tayangan yg berbeda dan sudah multifungsi juga sudah    bs streaming ,browsing dan karaokean&nbsp; .dan jika mmg nnti sudah terpasang    dan aktif dari sistem telkom kita maka billingnya pun sudah mulai berjalan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Dimana    bpk/ibu dgn keluarga nantinya sudah bisa mnonton siaran yg berbeda dlm waktu    yg bersamaan sekaligus, sudah bisa internetan jg langsung dari televisi nya;    youtube, streaming video, karokean langsung dari tv nya, dgn tambhan decoder    hybird yg jg sudah berbasis android</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Banyak    acara TV yang memberikan tayangan - tayangan yang berkaitan dengan edukasi,    yg bs dinikmati oleh anggota keluarga, dan dengan penambahan decorder nya    nanti, anggota keluarga dirumah sudah bisa menikmati channel - channel TV    yang sesuai dengan kebutuhan dengan nyaman tanpa harus bergantian menonto dan    tarif yang diberikan juga sangat hemat pak/bu, dan jk sudah aktif tarif sudah    bberjalan ya pak/bu</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Mohon maaf Bapak / Ibu, STB yg kita tambahkan ini sudah yang terbaru  jadi nanti untuk penggunaan useetv-nya dirumah sudah lebih bervariasi dan menarik.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Kita yakin programnya sangat bermanfaat karna bapak/bu dan keluarga untuk useetvnya di televisi ke 2 sekaligus dan sudah boleh menyaksikan tayangan berbeda, dan karna stb yg ditambahkan sudah bisa mengakses internet seperti browsing, streaming, buka youtube dan berkaraoke dengan kualitas gambar yg sudah&nbsp; HD dan alatnya bisa difungsikan kesemua jenis tvnya.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Kedepannya    Bapak / Ibu bisa menikmati channel yang berbeda antar TV pertama&nbsp; dan TV    kedua dalam waktu bersamaan , dan dari televisinya juga bapak/ Ibu bisa    menikmati browsing dan streaming ( sampaikan benefit kembali )...dengan    penambahan tarif per bulannya Rpxx+ pajak 10% di luar penggunaan lainnya...</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Untuk    tarifnya berlaku selama bpk/ibu berlangganan dan tidak promo2 lagi, kalau    promo ada masa berlakunya pak/bu, namun ini tidak karena penambahannya flat    setiap bulannya, cukup dengan penambahan xxx (sebutkan tarif dengan lengkap)</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Penambahan    tarif diberikan hanya 80 ribu rupiah saja perbulan + ppn 10% t, terkecuali    jika bapak&nbsp; / ibu ada penambahan paket add on yg lainnya.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Dikhawatirkan    ada pertanyaan, emang klo pengajuan sendiri berapa? (tdk ada dasarnya).    Sebetulnya tidak mahal Pak, dengan penambahan hanya 80k/bulan bapak sudah    bisa menyaksikan useetv di 2 tv (ruangan berbeda) dengan channel    masing-masing</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Karena    ini bukan promo jadi penambahan (sebut nominal penawaran) tetap (tidak naik    dan tidak turun)<br>
                                  Kalau promo hanya beberapa bulan saja, setelah itu tarifnya akan naik.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Baik    pak, tarif saat ini yang kami berikan cukup hemat tentunya karena bapak tidak    perlu mendaftar 2 nomor indihome. hanya dengan menambahkan 80 rb + ppn 10%    perbulan bapak berhak mendapatkan 1 perangkat useetv dengan paket yang sama    sesuai paket yg terdaftar di indihome bapak, dan sudah bisa menikmati 2    tayangan TV dengan channel yang berbeda dalam waktu yang sama</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Tidak    sayang dilewatkan penawarannya pak,&nbsp; krna&nbsp; penambahannya    hanya&nbsp; 80rb saja plus ppn 10% yg kita berikan tdk untuk semua pelanggan,    dan bpk sekeluarga sudah bisa menikmati useetv langsung di 2 tv yg berbeda    dengan 2 tayangan yg berbeda dan sudah multifungsi juga sudah bs streaming    ,browsing dan karaokean langsung .jadi penggunaan bapak dan keluarga    kedepannya kan sudah jauh lebih nyaman</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Bapak    / Ibu , khan sayang program nya untuk di lewatkan untuk tarif nya ini sudah    kita berikan dengan tarif khusus, jadi hanya dengan penambahan Rp xx saja +    ppn10% per bulan, dan untuk bulan desember di tagihkann belum penuh ya pak ,    tagihan penuhnya nanti di tagihkan di januari tahun depan...</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Baik    pak, tarif saat ini yang kami berikan cukup hemat tentunya karena bapak tidak    perlu mendaftar 2 nomor indihome. hanya dengan menambahkan 80 rb + ppn 10%    bapak berhak mendapatkan 1 perangkat useetv dengan paket yang sama sesuai    paket yg terdaftar di indihome bapak.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">Kan    sayang bapak/ibu, ini penawaran hanya untuk pelanggan terpilih telkom saja,    tidak semua pelanggan mendapat penawaran ini. Dan untuk pembayarannya pun    masih dibulan depan ibu/bapak, karnakan sistemnya telkom pakai dulu baru    bayar, jadi ibu/bapak bisa dioptimalkan&nbsp; untuk penawaran ini Pak/ Bu.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="697">baik    pak, dsini kan kalau untuk tarif nya ini sudah kita berikan dengan tarif    khusus, jadi hanya dengan penambahan 80rb saja + ppn10%.</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="138">STB TAMBAHAN</td>
                                  <td width="249">JARANG    DIGUNAKAN</td>
                                  <td width="697">Program    yang kita tawarakn ini kan sangat menarik pak/bu.. Krn kami berikan dgn    kualitas yang sudah Hybrid ( kualitas gambar ok &amp; suara jernih ) &amp;    saya yakin kedepannya ibu / bpk dan keluarga merasa nyaman dengan program    yang kita tawarkan , krn manfaatnya selain menonton ibu / bpk dan keluarga    juga bisa <br>
                                    - Browsing Internet<br>
                                    - Streaming YouTube<br>
                                    -&nbsp; TvoD (menyaksikan Program Acara    yang telah tayang hingga 7 hari yang lalu)<br>
                                  - Record program</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">JARANG    DIGUNAKAN</td>
                                  <td width="697">Saya    lebih butuhnya internet saja?,.. Baik bpk /ibu dengan fasilitas decorder /    stb Hybrid ini,&nbsp; ibu / bpk sudah bisa internetan browsing &amp;    streaming youtube- melalui TV&nbsp; Bpk/ Ibu    sekeluarga.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">STB TAMBAHAN</td>
                                  <td width="249">JARANG    DIGUNAKAN</td>
                                  <td width="697">Baik    Bpk/ Ibu Mr/Mrs.Xxxxx dan keluarga tentunya seringkali adanya perbedaan    selera pada saat menyaksikan hiburan di Televisi saat bersama keluarga di    rumah,&nbsp; Oleh sebab itu kami&nbsp;  tawarkan khusus STB    Tambahan ini Kepada Bpk/Ibu,&nbsp; Agar kedepannya penggunaan fasilitas    Indihome Bpk/ Ibu lebih Optimal lagi karena bisa menyaksikan siaran Channel    yang berbeda di waktu yang bersamaan.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">JARANG    DIGUNAKAN</td>
                                  <td width="697">Di    sini Bapak memiliki lebih dari 1 TV, jd untuk penggunaan Decoder kedua ini    bisa di letakkan di kamar anak atau bapak sendiri, karna fungsi Usee tv ini    bisa di gunakan untuk menunjang akses internet&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">JARANG    DIGUNAKAN</td>
                                  <td width="697">Pemasangan    Decoder yang kedua ini sifatnya bukann paralel, jd bapak akan mendapatkan    tambahan 1 decoder dan 1 remote , dengan tayangan yang&nbsp; bisa dinikmati    berbeda-beda di setiap TV nya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">JARANG    DIGUNAKAN</td>
                                  <td width="697">Dengan    penambahan decorder nya, keluarga di rumah sudah bisa menonton tayangan yang    berbeda di waktu yang bersamaan, dan tayangan-tayangan yang belum sempat    bpk/ibu tonton mungkin karena kesibukan dalam pekerjaan, masih bisa bpk/ibu    di rewind kembali hingga 7 hari sebelumnya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">STB TAMBAHAN</td>
                                  <td width="249">KECEWA    DENGAN TELKOM</td>
                                  <td width="697">karena    tdk&nbsp;&nbsp;perlu berebut channel dalam pemakaiannya karena useetvnya kan    sudah bs langsung&nbsp; di pergunakan di tv ke 2 yg berbeda dengan 2 tayangan    yg berbeda dan sudah multifungsi juga sudah bs streaming ,browsing dan    karaokean&nbsp; .dan jika mmg nnti sudah terpasang dan aktif dari sistem    telkom maka billingnya pun juga mulai berjalan</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">STB TAMBAHAN</td>
                                  <td width="249">KECEWA    DENGAN TELKOM</td>
                                  <td width="697">Mohon    maaf untuk ketidaknyamanan nya ya Pak/ Bu. Kita pastikan kedepannya hal    tersebut tidak terjadi lagi.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">STB TAMBAHAN</td>
                                  <td width="249">KECEWA    DENGAN TELKOM</td>
                                  <td width="697">kita pastikan untuk produk yg kita tawarkan merupakan program unggulan krn bpk/ibu dgn keluarga nantinya sudah bisa menikmati siaran yg berbeda dlm wktu yg bersamaan, sekaligus sudah bisa internetan langsung dari televisi nya; youtube, streaming video, karokean langsung dari tv, dgn tambhan decoder hybird</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">STB TAMBAHAN</td>
                                  <td width="249">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="697">Baik    pak, produk yg kami tawarkan sangat bermanfaat, hanya dengan menambahkan xxx    (sebutkan tarif penawaran dgn lengkap) bpk/ibu sudah bisa mendapatkan    tambahan 1 perangkat STB PLC (USEE TV) dan nantinya sudah bisa menonton    tayangan di TV ke 2 dengan channel yang berbeda dalam waktu yang sama</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">STB TAMBAHAN</td>
                                  <td width="249">PAKAI    PROVIDER LAIN</td>
                                  <td width="697">benefit    : bpk / ibu bisa menonton di 2 televisi sekaligus dengan channel program    useetv yg berbeda dgn kualitas high definisi.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">STB TAMBAHAN</td>
                                  <td width="249">TIDAK    BISA BUKA MNC GROUP</td>
                                  <td width="697">Untuk    channel MNC group, bapak/ ibu bisa streaming TV/ channel online melalui browser yang sudah kami    sediakan<br>
                                      <br>
                                    hanya untuk pelanggan tanya atau tidak mau krn    tidak ada MNC Group<br>
                                  Kata kuncinya adalah streaming</td>
                                </tr>
                              </table>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="140">
                                  <td height="140" width="138">STB    Tambahan</td>
                                  <td width="250">BELUM    PERLU&nbsp;</td>
                                  <td width="696">sangat menguntungkan bgi bpk/ibu di sni stb ke dua sdh hybrid berbeda dengan yg pertama dan jaringannya menggunakan 1 aliran listrik jadi tidak melubangi dinding rmh bpk/ibu selain itu bpk/ibu bsa menikmati 2 tayangan favorite dari usee tv dengan berbeda di 2 tv dalam waktu yg sama dan mengenai tarif jg terjangkau dengan tambahan perbulan 100 rbu + ppn 10% sdh bsa menikmati acara dalam 2 tv dan  bisa mengakses internet seperti browsing, streaming, buka youtube dan berkaraoke dengan kualitas gambar yg sudah&nbsp; HD dan alatnya bisa difungsikan kesemua jenis tvnya, untuk 2stb ini di fungsikan bgi pelanggan yg membutuhkan tayangan dari usee tv dan hanya pelanggan pilihan yg mendapatkan penawaran</td>
                                </tr>
                                <tr height="260">
                                  <td height="260" width="138">STB Tambahan</td>
                                  <td width="250">Masih    nyaman dengan paket existing</td>
                                  <td width="696"><br>
                                    Sangat kami sayangkan bila penawaran ini tidak bapak / ibu ambil&nbsp; sebagai penawaran terbaik kami ,&nbsp;&nbsp;&nbsp; jika ibu / bapak mengambil penawaran ini    , ibu bisa mendapakan keunggulan dari produk kami , seperti&nbsp;&nbsp; : <br>
                                    <br>
                                    * tampilan gambar pada layar lebih jernih dan jelas<br>
                                    * Fitur Playback, Bapak / Ibu bisa menonton ulang acara TV kesukaan hingga    7 hari<br>
                                    * Bisa menikmati karoke di rumah , apalagi di masa stay at home ini ibu    bisa mendapatkan hiburan dengan di rumah saja . Selain&nbsp; produk yang kami tawarkan ini&nbsp; pemasangan nya mudah dan praktis ,    kenyamanan akses di tiap sudut rumah dan paling penting bapak / ibu tidak    perlu membeli perangkat baru karena hanya membutuhkan instalasi listrik rumah    1 fasa&nbsp; <br>
                                    <br>
                                  Sehingga dengan penawaran STB 2 ini kami yakin kenyamanan bapak / ibu    menggunakan produk Telkom akan jauh lebih maksimal untuk kedepannya</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="127">
                                <col width="297">
                                <col width="848">
                                <tr height="80">
                                  <td height="80" width="164">STB    TAMBAHAN</td>
                                  <td width="242">Menolak diawal    sebelum dilakukan penawaran</td>
                                  <td width="678">bapak/ibu tdk    disayangkan karena ini alat STB tambahan kedua PLC sudah lebih canggih dan    modern yg akan di pasangkan di TV yg kedua yg akan merubah tampilan TV yg    biasa menjadi smart TV dan alatnya nya pun pemasangan nya lebih simple    langsung dicolokan ke stop kontak listrik. kemudian alatnya cabut pasang bu    bisa dipindahkan dari satu ruangan ke ruangan yg lain asalkan masih dlm 1    phasa meteran listri</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="164">STB TAMBAHAN</td>
                                  <td width="242">Pelanggan    tidak mengerti</td>
                                  <td width="678">baik    bapak/ibu ini adalah penawaran perangkat alat tambahan terbaru yaitu PLC    (power line communication) yg dimana alat ini di pasangkan di TV yg kedua yg    akan merubah tampilan TV yg biasa mnjadi smartv. keunggulan nya alat ini    langsung dicolokan ke stop kontak listrik jadi tdk akan ada lagi kabel yg    berserakan jd lebih praktis. benefitnya sama seperti USEETV namun ini alatnya    biasa cabut pasang jd bisa di pasang diruangan yg satu ke ruangan yg lainnya,    asalkan masih dlm 1 phasa atau 1 meteran listrik</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>Update 9 April 2021</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="111">
                                <col width="155">
                                <col width="597">
                                <tr height="120">
                                  <td height="120" width="134">STB</td>
                                  <td width="251">BELUM PERLU</td>
                                  <td width="698">&nbsp;Apa tidak sangat disayangkan pak? Karna    untuk perangkatnya nanti sudah menggunakan sistem yg terbaru yaitu sistem PLC    jd tidak perlu menggunakan tambahan kabel lagi dan juga tidak akan merusak    interior rumah bpk/ibu, perangkatnya juga sudah bisa dipindah2kan dari satu    ruangan ke ruangan lain selama masih terhub ke dlm jaringan listrik 1 fasa.    Kedepannya bpk/ibu dan keluarga sudah bisa menonton channel yg berbeda di tv    kedua dlm waktu bersamaan.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="134">STB</td>
                                  <td width="251">BELUM    PERLU</td>
                                  <td width="698">Kedepannya    untuk tampilan tv bapak sudah sama seperti Smart Tv. Perangkatnya sudah    menggunakan sistem terbaru jd sudah bisa dipindah-pindahkan dari satu ruangan    ke ruangan lainnya selama masih terhub ke dlm jaringan listrik 1 fasa. Kita    pastikan penawaran yang kita berikan sangat menguntungkan untuk bapak/ibu dan    keluarga di rumah. Nanti boleh silahkan dimaksimalkan untuk penggunannya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="134">STB</td>
                                  <td width="251">BELUM    PERLU</td>
                                  <td width="698">dirumah    kan pasti setiap anggota kluarga memiliki channel2 kegemaran masing2 ya pak,    apalagi masih dimasa pandemi seperti ini, kita lebih banyak dirumah. nah    kalao bapak tambah STB PLC nya, anggota keluarga tidak akan berebut channel    pak dan tidak akan bosan kalau lama dirumah</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="134">STB PLC</td>
                                  <td width="251">Sudah    cukup</td>
                                  <td width="698">Terkadang    dalam waktu bersamaan suka ada acara televisi yg disukai oleh keluarga, bapak    lagi menonton bola sedangkan anak bapak ingin menonton film. Dengan STB PLC    ini bapak dan keluarga bisa menonton bersamaan dg channel yang berbeda di tv    yang lainnya</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="134">STB PLC</td>
                                  <td width="251">BELUM    PERLU</td>
                                  <td width="698">penawaran    2ND STB PLC tidak semua PL mendapatkan penawaran <br>
                                    hanya dg berlangganan 100k/bulan<br>
                                    sudah dimendapatkan 1 set alat STB berbasis HYBIRD<br>
                                  yg mempunyai banyak benfit salah satu diantaranya bisa menonton 2 tayangan    yg berbeda di 2 tv yg berbeda buk , sehingga anggota keluarga ibu tdk akan    berebut dalam menonton chanel2 yg ada di useetv&nbsp;</td>
                                </tr>
                                <tr height="133">
                                  <td height="133" width="134">STB TAMBAHAN</td>
                                  <td width="251">HARGA    MAHAL</td>
                                  <td width="698">kita    pastikan programnya sangat efektif buat bpk krn dengan benefit yg akan    bpk/ibu dapatkan nantinya&nbsp; sayang kalau dilewatkan begitu saja, karena    dengan program ini bpk/ibu sudah bisa menikmati useetvnya di 2 tv sekaligus,    bisa menyaksikan tayangan yang berbeda dalam waktu yg bersamaan,dengan tarif    yg cukup hemat dan terjangkau hanya dengan penambahan 80rb+ppn 10%    saja,&nbsp; kami yakin akan sangat bermanfaat bagi bpk/ibu beserta    keluarga..utk tarifnya sendiri sudah mulai ditagihkan dibulan depan ya pak/bu</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="134">STB TAMBAHAN</td>
                                  <td width="251">HARGA    MAHAL</td>
                                  <td width="698">Tidak    sayang dilewatkan penawarannya pak,&nbsp; krna&nbsp; penambahannya    hanya&nbsp; 80rb saja plus ppn 10% yg kita berikan tdk untuk semua pelanggan,    dan bpk sekeluarga sudah bisa menikmati useetv langsung di 2 tv yg berbeda    dengan 2 tayangan yg berbeda dan sudah multifungsi juga sudah bs streaming    ,browsing dan karaokean langsung .jadi penggunaan bapak dan keluarga    kedepannya kan sudah jauh lebih nyaman</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="134">STB TAMBAHAN</td>
                                  <td width="251">HARGA    MAHAL</td>
                                  <td width="698">Programnya    sangat efektif dengan benefit yg akan bpk/ibu dapatkan dari STB tambahan&nbsp; antara lain , bapak/ ibu bisa browsing,    streaming, , ataupun menonton YouTube selain itu bpk bs menonton tayangan yg    berbeda di tv yg kedua dalam waktu yg bersamaan dan dg harga penawaran yang    kami tawarkan sangat ekonomis, hanya dengan penambahan (sebutkan tarif) dari    tagihan bapak/ Ibu sekarang plus PPN 10%</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="134">STB TAMBAHAN</td>
                                  <td width="251">HARGA    MAHAL</td>
                                  <td width="698">Tagihan    sy sudah mahal, Baik bu /pak tdk perlu khawatir karena disaat pandemik    seperti ini semua fasilitas hiburan kan terbatas oleh karena itu bapak /ibu    dberikan fasilitas untuk bisa menyaksikan tontonan hiburan keluarga agar tdk    berebut channel dg nyaman di TV yg kedua nya dg hanya penambahan 100rb plus    ppn 10% setiap bulannya ibu / bapak beserta seluruh anggota keluarga bisa    menikmati 2 tayangan yg berbeda dalam waktu bersamaan,browsing    internet,streaming yutub lgsg di TV yg kedua dg sangat nyaman.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="134">STB TAMBAHAN</td>
                                  <td width="251">Belum    perlu</td>
                                  <td width="698">Saat    ini pak useetv tidak hanya murni berfungsi untuk nonton tanyangan TV saja,    namun tanyangan digital lainnyapun sdh bisa dinikmati melalui STB ini    misalnya youtube.Sehingga dengan era spt saat ini tentunya bisa digunakan sbg    salah satu alternatif untuk memenuhi kebutuhan bpk/ibu dan keluarga.</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="134">STB TAMBAHAN</td>
                                  <td width="251">BELUM    PERLU&nbsp;</td>
                                  <td width="698">untuk    stb plcini sdh hybrid berbeda dengan yg pertama dan tidak melubangi dinding    rumah bpk/ibu selain itu bpk/ibu bisa menikmati 2 tayangan favorite dari usee    tv dengan berbeda di 2 tv dalam waktu yg sama dan untuk tarif disini lebih    hemat bapak, jadi bapak dan keluarga bisa lebih menikmati tayang yang tidak    kalah menariknya dengan bioskop bapak&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="134">STB TAMBAHAN</td>
                                  <td width="251">Belum    perlu</td>
                                  <td width="698">jika    b/i bersedia berlangganan b/i bisa merasakan sensasi yg berbeda saat menontn    2 tv dengan channel yg&nbsp; berbeda secara    bersamaan. B/i bisa berlangganan sampai kapan pun, kami jaminkan b/i program    ini akan memuaskan bagi keluarga.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="134">STB TAMBAHAN</td>
                                  <td width="251">Belum    perlu</td>
                                  <td width="698">karena    tv nya sdh di setting jdi smart tv jadi chanel tvnya bisa dibuat pembelajaran    anak melalu channel edukasi yg sdh ada seblmnya dan&nbsp; tidak mengganggu aktifitas nonton channel    yg lainnya secara bersamaan</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="134">STB TAMBAHAN</td>
                                  <td width="251">mahal</td>
                                  <td width="698">penambahan    hanya 100k saja perbulan ibu/bapak tidak dikenakan biaya instalasi/teknisi,    ini sangat terjangkau bu/pak sebanding dengan benefit/manfaat yang akan bapak    ibu terima, karena alat ini sudah menggunakan teknologi terbaru dan sangat    berkualitas. jika dalam masa pemakaian alatnya mengalami kendala, ibu/bapak    bisa meminta ganti ke kantor telkom tanpa mengeluarkan biaya lagi</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="134">STB TAMBAHAN</td>
                                  <td width="251">Tidak    perlu</td>
                                  <td width="698">Oh    mohon maaf bapak/ibu untuk alat ini keluaran terbaru dr Telkom, kami yakin    akan sangat bermanfaat untuk bapak/ibu sekeluarga nantinya.<br>
                                  Karena jika bapak/ibu bersedia maka bapak/ibu bisa melakukan perbandingan    antara penggunaan sebelum dan sesudah nya. Karena sudah pakai sistem hibrid    untuk alatnya. Lebih jernih gambarnya dan menyajikan banyak fitur yg mudah    diakses oleh pelanggan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="134">STB TAMBAHAN</td>
                                  <td width="251">Belum    perlu</td>
                                  <td width="698">pak    tidak perlu khawatir untuk stb ke 2 ini sudah terbaru dan tanpa membutuhkan    banyak kabel jadi flexibel dan milenial pak,serta sudah cangih</td>
                                </tr>
                              </table>
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