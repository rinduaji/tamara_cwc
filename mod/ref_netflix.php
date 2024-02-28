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
						      <p>Rule : <a href="ref_netflix.php">Netflix</a></p>
						      <p>| <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade </a>| <a href="ref_all.php">All</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do &amp; don't</a><a href="ref_downgrade.php"></a> | <a href="ref_stb.php">STB</a> | <a href="ref_homewifi.php">Home WiFi</a> | <a href="ref_terbuka.php">Kalimat Terbuka</a> | <a href="ref_p3k.php">P3K</a> | <a href="ref_video.php"></a><a href="ref_ott.php">OTT</a> | <a href="ref_kalibrasi.php">Kalibrasi</a><a href="ref_all.php"></a><a href="ref_risalahkalibrasi.php"></a> | <a href="ref_2p3p.php">2P - 3P</a></p>
						      <p>&nbsp;</p>
						      <p><em><strong>DAPROS TIDAK SUPPORT</strong></em></p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="64">
                                <col width="440">
                                <tr height="19">
                                  <td height="19" width="64"><div align="center"><strong>1</strong></div></td>
                                  <td width="440"><strong>Indihome passive (usse) tidak    support</strong></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"><strong>2</strong></div></td>
                                  <td><strong>100 mbps tidak suport</strong></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"><strong>3</strong></div></td>
                                  <td><strong>40 mbps tidak support</strong></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"><strong>4</strong></div></td>
                                  <td><strong>Gamer tidak boleh</strong></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"><strong>5</strong></div></td>
                                  <td><strong>PDD tidak boleh</strong></td>
                                </tr>
                                <tr height="38">
                                  <td height="38"><div align="center"><strong>6</strong></div></td>
                                  <td width="440"><strong>Jika pl sudah aktif OTT disney    di item doosier yg ada billingnya maka mohon tdk ditawarkan bundling netflix    yg disney dan sebaliknya&nbsp;</strong></td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="110">
                                <col width="185">
                                <col width="800">
                                <tr height="19">
                                  <td height="19" width="110"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="185"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="800"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="134">
                                  <td height="134">Bundling    netflix</td>
                                  <td>Belum perlu</td>
                                  <td width="800">Netflix    saat ini merupakan&nbsp; streaming video    yang paling populer dan terkemuka pak/ bu, penontonnya banyak di seluruh    dunia.<br>
                                    Saya coba jelaskan ulang keuntungan yang akan bapak/ ibu dapatkan dengan    program ini,<br>
                                    Bapak/ ibu bisa nonton mulai dari acara TV pemenang penghargaan, film,    anime, serial drama terkini hingga acara gaya hidup, reality show, film    terbaru, konten sejarah, dokumenter, acara desain, komedi, acara anak-anak,    dan masih banyak lagi.<br>
                                    Untuk kecepatan internet juga kami tingkatkan menjadi xx mbps, bapak/ ibu    akan mendapatkan prioritas bandwidth, akan lebih puas streamingnya, saat    menggunakan netflix juga tidak akan ada lag dan buffering. Langganan netflix    gampang, tidak perlu pakai kartu credit, karena akan digabungkan dengan    tagihan indhome.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">Bundling    netflix</td>
                                  <td>Belum perlu</td>
                                  <td width="800">Program    yang saat ini kami tawarkan hanya untuk pelanggan pilihan, yang dilihat dari    pembayaran selalu lancar. Silahkan bapak/ ibu program ini akan sangat    bermanfaat buat bapak dan keluarga.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">Bundling    netflix</td>
                                  <td>Belum perlu</td>
                                  <td width="800">jika    bapak/ ibu berlangganan upgrade bundling netflix maka bapak/ibu bisa nonton    film hollywood, drama korea, animasi, komedi dan reality show yang tentunya    akan menjadi hiburan bagi keluarga bapak/ibu dirumah</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">Bundling    netflix</td>
                                  <td>Belum perlu</td>
                                  <td width="800">Jika    bapak melewatkan penawaran upgrade bundling netflix ini sangat disayangkan    pak, karena untuk film-film, drama korea, variety show dan animasi yang    ditayangkan di netflix ini merupakan tayangan yang berkualitas untuk keluarga    dirumah</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">Bundling    netflix</td>
                                  <td>Belum perlu</td>
                                  <td width="800">Jika    dengan penawaran yang kita sampaikan ini, bapak dan keluarga pasti merasa    lebih puas karena selain bisa menikmati tontonan yang bervariasi, bapak/ibu    juga akan diberikan prioritas bandwidth, jadi tidak perlu khawatir untuk    jaringan lambat atau nge lag saat bapak / ibu melakukan streaming</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">Bundling    netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Bapak/    ibu tidak hanya mendapatkan netflix, kecepatan internet juga kami tingkatkan    menjadi xx mbps, bapak/ ibu akan mendapatkan prioritas bandwidth, akan lebih    puas streamingnya, saat menggunakan netflix juga tidak akan ada lag dan    buffering.</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">Bundling    netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">&nbsp;Untuk dipertimbangkan pk/ibu dari produk    yang kami sampaikan tadi dengan Tarif yang kita tawarkansangat lah ekonomis    bapak / ibu, hanya&nbsp; dengan penambahan    perbulan&nbsp;&nbsp; XXX&nbsp; + ppn 11% bapak/ ibu sudah bisa&nbsp; streaming netfix dan we TV&nbsp; bapak/ibu dapat menikmati berbagai tayangan    serial WeTV Original dan berbagai hiburan Asia terbaik melalui layar IndiHome    TVa</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">Bundling    netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Sangat    disayangkan jika bapak/ ibu tidak berlangganan program yang kami tawarkan,    karna tidak semua pelanggan yang kami hubungi, kami yakin program ini akan    sangat bermanfaat untuk bapak/ibu dan keluarga, dan tontonan bapak/ibu dan    keluarga dirumah akan lebih menarik</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Dengan    penawaran yang kami berikan ini bapak/ibu bisa dipergunakan bersama dengan    keluarga, biasanya dari gadget masing-masing ini bisa di tayangkan di usee tv    bapak/ibu. mulai dari acara TV pemenang penghargaan, film, anime, serial    drama terkini hingga acara gaya hidup, reality show, film terbaru, konten    sejarah, dokumenter, acara desain, komedi, acara anak-anak, dan masih banyak    lagi. Kami jamin bapak/ibu akan sangat menyukai penawaran bundling netflix    ini.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Mungkin    sekarang belum perlu, namun kami pastikan apabila bapak berlangganan netflix,    bapak dan keluarga pasti akan menyukainya karena variasi tontonan lebih    banyak dari mulai film hollywood sampai dalam negeri juga ada</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Ini    akan sangat menghibur pak membuat tontonannya jauh lebih menarik tentunya    bapak dan keluarga akan sangat suka karena menampilkan berbagai&nbsp; konten menarik mulai dari film, serial,    anime, dokumenter, original series netflix dan masih banyak lagi yang    disajikan tanpa iklan yang bisa ditonton mulai dari anak-anak hingga orang    dewasa</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Mungkin    karena fitur sebelumnya belum lengkap Pak, sehingga bapak/ ibu tidak&nbsp; tertarik untuk menonton tapi setelah bapak    berlangganan Program yang kami tawarkan ini untuk jenis film dan&nbsp; tayangannya jauh lebih bervariatif lagi pak</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Akan    sangat disayangkan jika bapak tidak berlangganan program yang kami tawarkan    ini, karena program yang saat ini kami tawarkan hanya untuk pelanggan    pilihan, yang dilihat dari pembayaran selalu lancar. Silahkan bapak program    ini akan sangat bermanfaat buat bapak dan keluarga</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Penawaran    yang kami berikan sangat menarik pak/ bu cukup penambahan xxxxx(tergantung    paket yang ditawarkan Agent) bapak/ibu sudah bisa menikmati upgrade kecepatan    internet bundling dengan netflix dan xxxxx(tergantung paket yang ditawarkan    Agent)&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Program    yang saat ini kami tawarkan hanya untuk pelanggan pilihan, yang dilihat dari    pembayarn selalu lancar.silakan bapak program ini akan sangat bermanfaat buat    bapak dan keluarga</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Sebenarnya    bapak/ibu bisa mendapatkan keuntungan yang lebih banyak jika berlangganan    Netflix, karena ini adalah layanan streaming yang menawarkan berbagai acara    TV pemenang penghargaan, film, anime, dokumenter, dan banyak lagi. bapak/ ibu    bisa menonton sepuasnya, kapan pun&nbsp;    mau, semuanya dengan satu harga bulanan yang murah. cukup dengan    menambahkan(sebut tarif) blm termasuk ppn11% setiap bln dari tagihan    sekarang,&nbsp; Selalu ada tontonan dan    acara TV serta film yang diupdate setiap minggu</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Penawaran    yang kami berikan sangat menarik pak/ bu, dimana untuk bundling netflix ini    kecepatannya kami berikan kecepatan bandwitch prioritas dari kami jadi lebih    stabil untuk kecepatannya jadi streming netflixnya ibu lebih nyaman tanpa lag    dan buffering</td>
                                </tr>
                                <tr height="96">
                                  <td height="96" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Dengan    berlangganan netflix bapak/ibu bisa menikmati&nbsp;    layanan streaming berbagai konten menarik mulai dari film, serial,    anime, dokumenter, original series netflix dan masih banyak lagi yang    disajikan tanpa iklan. Selain itu jika ada anak dirumah, juga terdapat Akses    bagian khusus anak-anak dengan membuat akun khusus anak-anak, hadir untuk    memberikan berbagai macam pilihan konten anak terbaik. Selain itu jika    dirumah ada banyak keluarga juga bisa Streaming Bersama, yaitu&nbsp; Tonton di dua hingga 4 layar sekaligus per    akun&quot;</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">netflix    ini aplikasi streaming paling diminati masyarakat saat ini, karna film-film    sudah beragam, dari mulai film hollywood sampai dalam negeri sudah ada.    Bahkan filmnya tidak ada di layanan streaming lain</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Netflix    saat ini merupakan&nbsp; streaming video    yang paling populer dan terkemuka pak/ bu bukan hanya di indonesia tapi    seluruh dunia, Bapak/ibu sdh bisa Akses streaming lebih puas bahkan sudah    Anti Lag, anti Buffering</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Mungkin    sekarang belum perlu, tapi seiring dengan berkembangnya aplikasi streaming    kedepannya, dan yang lebih menarik, selain netflix dan peningkatan kecepatan    bapak juga akan mendapatkan layanan weTV/Disney+Hotstar</td>
                                </tr>
                                <tr height="96">
                                  <td height="96" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Kami    yakin penawaran bundling ini sangat menarik bagi ibu dan bapak sekeluarga,    dimana merasakan serunya nonton film, drama series, TV series, berbagai acara    TV pemenang penghargaan, anime, dokumenter, hingga Netflix Original. Jika    sampai dllewatkan sungguh sayang sekali , karena penawaran bundling Netflik    dengan disney hostar ini berisikan&nbsp;    tayangan hits global, regional, dan Indonesia. Film-film blockbuster    Hollywood dan berbagai film yang meraih penghargaan milik Disney, Marvel,    Star Wars, Pixar, National Geographic.&nbsp;</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Mungkin    saat ini bapak/ibu merasa belum perlu, tapi apabila bapak/ibu sudah    merasakan/menyaksikan programnya ini bapak akan merasa jauh lebih    menguntungkan buat bapak dan keluarga, bapak/ibu akan mendapatkan layanan    WeTV/ Disney+ Hotstar.dapat menikmati berbagai tayangan,Film-film blockbuster    Hollywood,tidak hanya ini saja Plus bapak/ibu akan mendaptkan peningkatan    kecepatan ke (30/ 50/100) mbps,1 kali penawaran bapak/ibu akan mndptkan 2    sekaligus keuntungan di paket yang saya tawarkan ini</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">Netflix    pada saat ini adalah streaming video yang lagi digemari dari semua kalangan ,    bisa saya coba jelaskan sedikit ya bu/pak, di netflix ini jika ada anak    bapak/ibu yang gemar dengan serial korea , jepang , anime di dalam netlix ini    sudah banyak&nbsp; judul film yang akan di    tayangkan dan kualitas nya juga sudah jernih&nbsp;</td>
                                </tr>
                                <tr height="96">
                                  <td height="96" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">sangat    disayangkan jika bapak lewatkan. karena saat ini kan telkom menawarkan kepada    bapak upgrade speed ke 50mbps. jadi nanti akses internet bapak jauh lebih    cepat dari speed sebelumnya. jumlah device yang bisa mengakses internetnya    pun bertambah pak, bisa sampai 10-12 device. jadi lebih nyaman dalam    penggunaan internetnya.<br>
                                    dan bapak juga mendapat kesempatan untuk bisa menikmati film-film dan    berbagai tayangan menarik lainnya yang disediakan dari netflix dan disney    hotstar. dengan jaminan tidak akan mengalami lag pada internet bapak walaupun    bapak streaming netflixnya</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Belum    perlu</td>
                                  <td width="800">apa    tidak di sayangkan bapak/ibu keuntunganya bapak/ibu bisa menikmati streming    video dengan dari berbagai macam genre yang ada mulai dari film action,    horor, dan movie dan selain itu&nbsp; untuk    kecepatan internet bapak/ibu juga kami tingkatkan ke xxx bapak/ibu juga    mendapatkan proiritas bandwitch, akan lebih puas streamingnya, saat    menggunakan netflix juga inet bapak/ibu tidak lag dan buffering dan juga    untuk tagihan nya bapak/ibu akan di tagihkan di menjadi satu tagihan dengan    tagihan indihome bapak/ibu&nbsp;</td>
                                </tr>
                                <tr height="77">
                                  <td height="77">Bundling    netflix</td>
                                  <td>Jarang nonton</td>
                                  <td width="800">Mungkin    karena memang belum ada tontonan yang menarik pak/ bu.<br>
                                    Netflix saat ini merupakan&nbsp; streaming    video yang paling populer dan terkemuka di seluruh dunia, bapak/ ibu bisa    nonton mulai dari acara TV pemenang penghargaan, film, anime, serial drama    terkini hingga acara gaya hidup, reality show, film terbaru, konten sejarah,    dokumenter, acara desain, komedi, acara anak-anak, dan masih banyak lagi.</td>
                                </tr>
                                <tr height="77">
                                  <td height="77">Bundling    netflix</td>
                                  <td>Jarang nonton</td>
                                  <td width="800">Apakah    tidak sayang bapak/ibu jika menolak penawaran ini, dengan upgrade bundling    streaming ini benefitnya akan menarik karena bapak/ibu juga bisa berlangganan    netflix, wetv/ disney hotstar yang akan menambah kualitas tayangan ditv nya    atau bisa juga diakses melalui handphone bapak/ibu jika sedang bersantai.    Bapak/Ibu pun akan merasa nyaman tinggal di rumah karena sudah banyak    tayangan film-film yang sudah cukup bagus.</td>
                                </tr>
                                <tr height="96">
                                  <td height="96">Bundling    netflix</td>
                                  <td>Jarang nonton</td>
                                  <td width="800">Kedepannya    bapak akan merasakan sensasi peningkatan kecepatan internet lebih tinggi dari    yang bapak rasakan saat ini dan sudah bundling dengan Netflix, WeTV atau    Disney Hotstar yang berisikan beragam tayangan favorit keluarga, seperti film    populer keluarga, tayangan animasi anak, serial drama, reality show serta    berbagai tayangan lainnya lagi. Jadi bapak tidak perlu khawatir lagi karena    tayangan untuk keluarga bapak akan lebih beragam lagi, dan untuk Netflix,    WeTV atau Disney Hotstar ini berbeda seperti channel TV yang biasa bapak    nikmati, kedepannya bapak bisa langsung memilih tayangan yang ingin dinikmati    secara langsung</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">Bundling    netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Kelebihan    yang kami berikan selain harganya yang terjangkau, kami memiliki 3 pilihan    paket dengan berlangganan layanan Netflix melalui IndiHome, bapak/ibu dapat    menggunakannya diperangkat lain juga, jika meningkatkanlayanan Netflix Basic    ke layanan Netflix Standard/ Netflix Premium yang memungkinkan streaming    aplikasi Netflix melalui 2 perangkat atau lebih.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Mungkin    bapak/ibu jarang menonton karena acara tvnya telah diatur dari chanelnya ,    sedangkan di Netflix ini banyak sekali ragam tayangan dan genre film yang    terbaru dimana bapak/ibu bisa mencari dan memilih sendiri tayangan apa yang    ingin ditonton</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Sangat    disayangkan pak/bu, karena film film yang kami hadirkan sudah sangat beragam,    ada dari berbagai genre pastinya bisa disaksikan juga oleh beragam kalangan,    film anak-anak juga ada, selain itu ada juga konten film dan series original    netflix yang tidak ada di manapun yang tentunya sangat menarik.</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Bapak/ibu    tidak disayangkan menolak penawaran ini, dengan upgrade bundling streaming    ini dapat banyak benefitnya dan tayangan yang lebih&nbsp; menarik karena bapak/ibu juga bisa    berlangganan netflix, wetv/ disney hotstar yang akan menambah kualitas    tayangan di tv nya serta beragam tayangan atau bisa juga diakses melalui    handphone bapak/ibu jika sedang bersantai. akan merasa nyaman untuk Bapak /    ibu untuk di rumah karena sudah di fasilitasi film-film dan series yang sudah    cukup bagus.</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Bapak/ibu    keunggulan dari produk ini akan diberikan pengalaman menonton yang lebih baik    yakni streaming netflix sepuasnya,&nbsp;    jaminan akses tanpa lag, bandwidth priotitas dengan internet cepat dan    stabil dari IndiHome, selain netflix dan peningkatan kecepatan ke (30/    50/100) mbps, bapak/ ibu juga akan mendapatkan layanan WeTV Iflix/ Disney+    Hotstar yang pasti tontonan keluarga akan lebih seru dan menarik lagi saat    berkumpul bersama dan tidak monoton lagi dg berbagai variasi tontonan</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Jangan    khawatir ibu/pak jika memang saat ini jarang nonton bisa di saksikan melalui    Hp bapak/ibu dapat langsung memilih tambahan paket Netflix Standar atau    Premium dalam arti bisa menentukan kualitas gambar yang di inginkan pelanggan    selain itu untuk kecepatan internet juga kami upgrade agar lbh cepat tidak    terjadi lag dan buffering</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Penawaran    yang kami berikan sangat menarik, jika berlangganan netflixnya ini bapak/ibu    mungkin bapak dan keluarga akan lebih aktif dalam penggunaan fasilitas    telkomnya, karena dengan aplikasi netfilx bapak/ ibu bisa streaming mulai    dari acara TV pemenang penghargaan, film, anime, serial drama terkini hingga    acara gaya hidup, reality show, film terbaru, konten sejarah, dokumenter,    acara desain, komedi, acara anak-anak, dan masih banyak lagi.</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Penawaran    yang kami berikan sangat menarik untuk bapak/ ibu lewatkan , saat ini mungkin    bapak/ibu jarang nonton bapak/ibu dikarenakan untuk televisi nya masih belum    memliki tayangan yang lebih lengkap , jika bapak/ibu berlangganan netflix nya    ini bapak/ibu dan keluarga bisa lebih banyak untuk menonton dan menikmati    berbagai film-film yang lebih menarik untuk disaksikan bersama dengan    keluarga.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Mungkin    saat ini jarang nonton karna tayangannya blm bervariatif, namun kami pastikan    dgn Bapak berlangganan netflix,&nbsp;    tayangan tv Bapak akan lebih sering digunakan karna tayangannya    menarik ada film local,hollywood,dll jadi sdh bisa di tonton berbagai    kalangan</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Dengan    berlangganan netflix ini, bapak/ibu bisa menikmati berbagi pilihan film dari    berbagai genre.<br>
                                    dari banyak nya pilihan film yang tersedia akan lebih membuat useetv    bapk/ibu lebih aktif digunakan. dan dengan <br>
                                    jaminan bandwith prioritas, dan akses jaringan tanpa lag membuat kesan    menonton lebih nyaman</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">Mungkin    dikarenakan tontonan dirumah bapak/ibu tidak variatif sehingga useetvnya    jarang dipergunakan, disini kami bantu agar lebih banyak lagi pilihan    tontonan lengkap dan terbaik. Disini banyak pilihan bundling selain kecepatan    bapak lebih meningkat tontonannya pun makin beragam&nbsp;</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">tidak    disayangkan disini bapak/ibu sudah dapat menonton film dari berbagai genre    seperti action, horor, komedi, romantis, thriller dan masih banyak lagi.    semua sudah bisa bapak/ibu tonton melalui tv indihomenya atau di gedgetnya    tanpa harus bersusah payah pergi ke bioskop. dan disini bapak/ibu tidak akan    mengalami buffring dan dapat akses streaming lebih puas.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Jarang    nonton</td>
                                  <td width="800">dengan    adanya streaming netfilix ini bapak/ibu serta keluarga ibu pasti akan lebih    tertarik untuk menonton tv, karena judul flim ny sudah beragam , mau gendre    apa pun sudah ada di streaming netlix ini</td>
                                </tr>
                                <tr height="77">
                                  <td height="77">Bundling    netflix</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="800">Sebetulnya,    jika dibandingkan dengan keuntungan yang akan bapak/ ibu dapatkan, harga yang    kami tawarkan sangat ekonomis.<br>
                                    Untuk kecepatan internet bapak/ ibu sudah kami tingkatkan menjadi xx mbps,    bapak/ ibu akan mendapatkan prioritas bandwidth, akan lebih puas    streamingnya, saat menggunakan netflix juga tidak akan ada lag dan buffering.    Langganan netflix gampang, tidak perlu pakai kartu credit, karena akan    digabungkan dengan tagihan indhome.</td>
                                </tr>
                                <tr height="77">
                                  <td height="77">Bundling    netflix</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="800">Bapak/ibu,    tarif yang kami tawarkan cukup murah. Hanya dengan penambahan xxx perbulan +    ppn11%, bapak/ibu mendapatkan upgrade kecepatan ke xx mbps dan bisa mengakses    koleksi film dan serial televisi yang terhimpun dalam perpustakaan Netflix,    harganya cukup ekomomis bapak/ibu karena benefit yang akan didapat juga sudah    banyak, saat melakukan streaming juga tidak akan buffer dan nge lag</td>
                                </tr>
                                <tr height="77">
                                  <td height="77">Bundling    netflix</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="800">Bapak/Ibu    dapat harga yang sangat ekonomis dan juga kompetitif, bila memilih paket    NETFLIX bundling internet yang bapak/Ibu miliki<br>
                                    Disamping akselerasi kecepatan internet bapak/Ibu yang maksimal dan    internet bapak/IBU kami tingkatkan serta keuntungan lainnya Bapak/Ibu dapat    prioritas bandwidth dan yang lebih menarik lagi Bapak/Ibu tdk perlu repot    menggunakan kartu credit, karena akan digabungkan dengan tagihan indhome&nbsp;</td>
                                </tr>
                                <tr height="77">
                                  <td height="77">Bundling    netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Tidak    disayangkan bapak/ibu?, karena&nbsp;    keuntungan yang akan bapak/ ibu dapatkan, selain dengan harga yang    terjangkau, bapak/ibu juga dapat kecepatan inetrnet menjadi 30Mbps bapak/ ibu    juga akan mendapatkan Jaminan akses tanpa lag, Better experience, Akses    streaming lebih puas,&nbsp; prioritas    bandwidth, One Gate Payment (bayar dalam 1 tagihan indihome saja tidak perlu    menggunakan credit card lagi) hanya cukup di penambhan (sebutkan tarif+ppn11%)    perbulan diluar penggunaan lainnya.&nbsp;&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">Bundling    netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Terkait    tarif yang kami sampaikan ini lebih hemat karena bapak/ibu akan mendapatkan    banyak benefit diantaranya di UG kecepatan ke 30M, tidak ngelag, tidak    buffering karena mendapatkan kecepatan prioritas dan juga bisa menikmati WeTV    Iflix atau Disney hostar</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Penambahan    yang kami tawarkan tidak mahal bapak/ ibu ini bukan harga promo&nbsp; karena akan di sesuaikan dengan paket yang    bapak pilih ada 30 Mbps , 40 Mbps dan 50 Mbps&nbsp;    yang&nbsp;&nbsp; di bundling&nbsp; dengan OTT Neflix atau OTT lainnya ,    sehingga selain kecepatan internet&nbsp;    bapak meningkat bapak juga bisa menonton Neflix dan layanan lainnya    melalui indihome</td>
                                </tr>
                                <tr height="96">
                                  <td height="96">Bundling    netflix</td>
                                  <td>Pertimbangan harga</td>
                                  <td width="800">Untuk&nbsp; harga penawaran yang kami tawarkan sangat    menarik dan ekonomis, hanya dengan penambahan (sebutkan tarif) dari tagihan    bapak/ Ibu sekarang plus PPN 11%, ibu / Bapak sdh bisa menikmati&nbsp; menikmati berbagai tayangan hits global,    regional, dan Indonesia. Film-film blockbuster Hollywood dan berbagai film    yang meraih penghargaan milik Disney, Marvel, Star Wars, Pixar, National    Geographic.<br>
                                    (untuk OTT Disney+ Hotstar)</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Jika    dilihat dari benefit yang bapak/ ibu dapatkan harga yang kami tawarkan ini    cukup ekonomis, selain kecepatan internet bapak/ ibu ditingkatkan bapak/ ibu    jg sudah mendapatkan streaming netflix sepuasnya tanpa buffering di berbagai    kualitas resolusi video nya dengan harga yang cukup terjangkau.</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Kalau&nbsp; kita bandingkan dengan&nbsp; benefit yang didapatkan, tarif penambahan    yang kita berikan sudah sangat hemat bapak/bu . Dengan penambahan (RpXXX),    bapak/ibu sudah bisa upgrade kecepatan internet sekaligus mendapatkan    berlangganan netflix dengan tagihan dijadikan 1 di pembayaran indihome.    silahkan rasakan untuk pengalaman Anti Lag,&nbsp;    anti Buffering dan Akses streaming lebih puas.&nbsp;</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Untuk    Netflix disney+Hostar ini harga penawaran kami sangat terjangkau pak, hanya    dengan penambahan&hellip;.. bapak/ ibu Bisa mempergunakan streeeming disney    hostarnya.kami jamin dgn harga terjangkau ini bapak bisa menonton streaming    sepuasnya tanpa khawatir internetnya buffering<br>                                  </td>
                                </tr>
                                <tr height="96">
                                  <td height="96" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Justru    tarifnya hemat yang kami berikan selain Netflix nanti sudah mendapatkan    bandwidth priotitas dengan internet cepat dan stabil dari IndiHome, dan    peningkatan kecepatan internet Bapak/ibu dari (kecepatan awal pl) ke    kecepatan (30 /50/100 mbps) + Netflik + (layanan WeTV, Iflix)/Disney+ Hotstar    dari tagihan Bapak/ibu yang sekarang penambahan tarif (sampaikan tarif) +ppn    11% setiap bulannya selama berlanggnan.<br>                                  </td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Penawaran    yang kami berikan sangat menarik, karena penambahan biaya tidak mahal pak/bu    karena harga promo ini berlaku selama bapak/ibu berlangganan program yang    kami tawarkan dan tidak semua pelanggan mendapatkan penawaran ini</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Program    yang kami tawarkan sangat terjangkau dan hemat, cukup dengan menambahkan..    bapak/ibu sudah bisa mendapatkan bundling upgrade kecepatan dan layanan    streaming&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">sangat    disayangkan bapa/ibu, sebetulnya tidak mahal ibu/bapa, cukup dengan    penambahan xxx bapa bisa mendapatkan benefit diupgrade ke xx mbps dan juga    mendapatkan layanan netflix</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Bapak/ibu    bisa menikmati semua benefitnya di dalam satu tagihan saja. Jadi, tidak perlu    repot bayar tagihan IndiHome dan Netflix secara terpisah setiap bulannya.</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">Indihome    memberikan penawaran tarif sangat menarik dan kompetitif , hanya cukup    menambahkan ...... plus ppn 11% perbulan sudah bisa menapatkan .... Mbps    dengan bundling Netflik dan WeTV atau ..... plus ppn 11% perbulan untuk    ....Mbps dengan bundling Netflik dan Disneyhostar.</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">keuntungan    yang bapak/ibu dapat sebenar nya sudah lebih menguntungkan dan harganya juga    sudah ekonomis , untuk kecepatan inet bapak/ibu sebelumnya sudah di    tingkatkan dan bapak/ibu juga bisa menikmati streaming netflix sepuasnya    tanpa harus memikirkan tambhan biaya lainnya karena biling sudah menjadi satu</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Pertimbangan    harga</td>
                                  <td width="800">dengan    tarif penambahan ...... +ppn11% perbulan, sebenarnya ini tidak mahal bapak.    karena selain kecepatan internet bapak dinaikkan menjadi .... mbps, bapak    juga mendapat kesempatan untuk bisa menikmati netflix dan disney hotstar.    jadi sudah sangat menguntungkan untuk bapak</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">Bundling    netflix</td>
                                  <td>Sudah berlangganan    netflix</td>
                                  <td width="800">Kalau    yang sekarang untuk pembayaran netflix dan indihome harus masing- masing ya    pak/ bu, dan masih menggunakan kartu kartu kredit, debit, atau dompet digital    lainnya, kalau dari indihome pembayaran gampang dan tidak repot, karena nanti    akan digabungkan dengan tagihan indihome.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">Bundling    netflix</td>
                                  <td>Sudah berlangganan    netflix</td>
                                  <td width="800">Kedepannya    bapak /ibu tidak perlu repot dalam melakukan pembayaran tagihannya, karena    akan kita gabungkan dengan tagihan internet bapak/ibu</td>
                                </tr>
                                <tr height="58">
                                  <td height="58">Bundling    netflix</td>
                                  <td>Sudah berlangganan    netflix</td>
                                  <td width="800">Benefitnya    bukan hanya netflixnya saja bisa didapatkan Bu, kecepatan internetnya juga    ditingkatkan. Dan Ibu tidak perlu khawatir untuk pembayarannya nanti    dijadikan 1 billing Bu digabungkan dengan pembayaran&nbsp; indihome Ibu, tidak perlu menggunakan    credit card lagi</td>
                                </tr>
                                <tr height="38">
                                  <td height="38">Bundling    netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Dengan    berlangganan netflix ini banyak sekali benefit yang tidak dimiliki oleh OTT    lainnya seperti akses streaming lebih puas karena anti lag dan anti buffering</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Paket    yang kami tawarkan tidak hanya memiliki benefit netflix saja,karena hanya    dengan penambahan Rp xxxxx bapak akan mendapatkan kecepatan internet yang    lebih tinggi yaitu kec (sebutkan kecepatannya) dan mendapatkan juga WeTV    Iflix atau Disney Hotstar (sesuai paket yang ditawarkan)</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">jika    bapak/ ibu sudah berlangganan netflix&nbsp;    tidak masalah pak, karna bapak juga bisa tingkatkan kecepatan internet    bapak dan kita jamin Akses streaming lebih puas selain itu penggunaannya bisa    digunakan di berbagai macam perangkat (Tonton&nbsp;    melalui&nbsp; STB&nbsp; IndiHome&nbsp;    TV, ponsel, tablet, atau laptop menggunakan akun IndiHome</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Bapak/Ibu    melalui penawaran Upgrade bundling Netflix ini, bapak/ibu bisa mendapatkan    OTT lainnya seperti WeTVIflix atau Disney+ Hotstar dengan tayangan film-film    yang sangat menarik, bervariasi dan nyaman ditonton bersama keluarga dengan    akses internet yang lebih puas. Bapak/Ibu bisa juga nanti mengupgrade paket    Netflixnya menjadi 2 layar atau 4 layar sesuai dengan kebutuhan Bapak/Ibu    sehingga bisa menonton bersama-sama tanpa harus berebutan dengan keluarga.</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Keuntungannya    jika bapak sudah berlangganan netflix disini jika bapak/ibu bersedia    berlangganan ott netflix yang kami tawarkan tagihannya nanti akan jadi 1 dg    tagihan indihome bapak/ibu, jd tidak terpisah. Asal dengan log in email yang    sama maka otomatis tagihan langganan netflix sebelumnya akan dijadikan 1    dengan tagihan indihome bapak/ibu.</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Kalau    biasanya bapak/ibu hanya berlangganan Netflix saja kalau dari Indihome dalam    1 paket bapak/ibu bisa dapat berlangganan langsung Upgrade Speed, Netflix dan    We TV Iflix/Disney+Hotstar</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Program    yang ditawarkan ini bisa jadi solusi untuk bapak/ibu beserta keluarga,    penggunaan netflix Bapak/ibu nantinya tagihan bisa di gabungkan jadi satu    tagihan indihomenya, pembayaran tidak perlu repot ke tempat lainnya</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Penawaran    yang kami berikan sangat menarik untuk bapak/ ibu lewatkan terlebih paket    yang di tawarkan sudah berikut menambah kecepatan internet nya.</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Penawaran    yang kami berikan sangat menarik untuk bapak/ ibu lewatkan, karena penawaran    ini bisa menunjang aktivitas bapak/ibu saat menikmati netflix di layar    televisi bapak/ibu. bila kecepatan internet tinggi maka bapak/ibu bisa    menikmati netflix dengan resolusi tayangan yamg tinggi dan tanpa buffering.</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Selain    menguntungkan jika berlangganan, benefit lainnya meskipun bapak/ ibu    digunakan streaming netflix internetnya bapak atau ibu anti lelet ditambah    juga tidak pelu pusing-pusing mengingat waktu perpanjangan setiap bulannya    karena akan ditagihkan bersamaan dengan tagihan indihome bapak / ibu jadi    bisa perpanjangan otomatis dan bisa menikmati tanpa rasa was was lagi</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Kalau    yang sekarang kan untuk internetnya bapak kan belum prioritas bandwidth pak,    kalau di indihome nanti sudah prioritas pak, jadi tidak akan lambat.&nbsp; Sudah anti Lag dan anti Buffering.&nbsp;</td>
                                </tr>
                                <tr height="58">
                                  <td height="58" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Pak/bu    memang sudah berlangganan netflix namun agar nyaman lagi apakah tidak mau    berlanggan paket bundling neflix bu/pak selain bisa nonton kecepatan internet    ibu/bapak juga ditingkatkan ke xxmbps, bahkan bapak ibu akan diberikan    bandwith prioritas pak</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">kelebihan    dari paket ini jika bapak sudah berlangganan, tentunya dengan harga yang    lebih ekonomis dibandingkan dengan bapak beserta keluarga harus pergi nonton    ke bioskop,jaminan akses nya tanpa lag,Better Experience dan Akses streaming    lebih puas</td>
                                </tr>
                                <tr height="77">
                                  <td height="77" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">Selama    ini kan bapak/ibu menonton Netfliknya melalui HP, sedangkan disini    menggunakan useetv sehingga bisa disaksikan bersama keluarga. Selain    mempererat dan meningkatkan Quality Time bersama keluarga , tontonan dari    disneyHostar merupakan tayangan film terbaik. Pembayarannya pun dimudahkan    karena disatukan dengan tagihan Indihome. Tidak perlu lagi menggunakan    CC.Tidak perlu lagi mengeluarkan bunga tagihan.&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td height="38" width="110">Bundling netflix</td>
                                  <td width="185">Sudah    berlangganan netflix</td>
                                  <td width="800">untuk    paket netflix yang bapak/ibu gunakan saat ini kan pembayarannya masih    terpisah , yang saat ini kami tawarkan pembayaranny sudah di satukan dengan    pembayaran tagihan indihome ibu/bapak, jadi ini juga memudahkan pelanggan.</td>
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