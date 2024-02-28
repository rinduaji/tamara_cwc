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
								  <h4 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> <a href="fup.php">Fair Usage Policy (FUP)</a> | <a href="desc_tdkditawarkan.php">Tidak Bisa dilakukan Penawaran</a></h4>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>Deskripsi  : <a href="desc_minipack.php">Minipack</a></p>
						      <p><a href="script_minipack.php"></a><a href="script_stbtambahan.php"></a><a href="desc_stbtambahan.php">STB Tambahan</a> | <a href="desc_2p3p.php">2P-3P</a> | <a href="desc_up-reguler.php">Upgrade Reguler</a> | <a href="desc_up-gamer.php">Upgrade Gamer</a> | <a href="desc_homewifi.php">Homewifi</a></p>
						      <p>&nbsp;</p>
						      <p>FAQ I-KONSER</p>
						      <p>1.	Apa iKonser itu?<br>
						        iKonser adalah adalah sebuah channel music TV yang menyajikan tayangan live music concert sebagai sajian utama. Live Concert di channel I-Konser akan menanyangkan artis- artis terkenal dari segala genre musik, baik artis-artis dalam negeri maupun artis internasional.</p>
						      <p><br>
						        2.	Sejak kapan iKonser ini mulai tayang?<br>
						        iKonser mulai tayang pada 1 Januari 2020, tetapi selama sebulan itu kita masih uci coba tayang. Kalau benar-benar tayang secara tertata kita mulai awal Februari kemarin dengan diawali kick off program bersamaan dengan konser Yura Yunita di M Bloc Space, Jakarta, pada tanggal 29 Januari 2020.</p>
						      <p><br>
						        3.	Sebenarnya target iKonser sendiri gimana?<br>
						        iKonser menargetkan diri untuk menjadi sebuah alternatif channel music televion yang berbeda dengan menyajikan tayangan musik dari panggung konser langsung. Kita tahu sebuah konser musik menyajikan begitu banyak aksi spontan yang sangat menarik untuk ditonton, baik itu spontanitas artis maupun spontanitas penonton yang menyaksikan konser.</p>
						      <p><br>
						        4.	Di tengah media online yang sangat massif sekarang seperti dengan adanya YouTube, Spotify, dan semacamnya, positioning iKonser ada dimana?<br>
						        Karena iKonser ada di platform Usee TV, jadi yang paling utama kita memang ingin memberikan sebuah alternative channel baru yang berkualitas untuk para pelanggan indihome dan Usee TV. Tetapi ke depan, ketika iKonser telah benar-benar establish, kita berharap iKonser akan menjadi salah satu daya tarik orang untuk berlangganan indihome dan Usee TV.</p>
						      <p><br>
						        5.	Sejauh ini bagaimana tanggapan para artis dengan adanya iKonser ini?<br>
						        Sejauh ini kita sudah mencoba berkomunikasi dengan beberapa artis untuk mengadakan konser yang akan kita tayangkan di iKonser, dan rata-rata mereka menyambut dengan baik. Malah sudah ada beberapa artis yang berinisitiaf terlebih dulu ingin bekerjasama dengan iKonser. Para artis itu biasanya sudah punya konsep konser yang memang berbeda dengan konser-konser yang biasa mereka adakan, dan mereka ingin iKonser menayangkannya secara live streaming dan kita senang bisa bekerjasama dengan para artis yang telah mempunyai konsep pertunjukan konser yang spesifik.</p>
						      <p><br>
						        6.	Selain tayangan konser musik, apalagi yang ditayangkan di iKonser?<br>
						        Di samping tayangan live concert, iKonser juga akan menyajikan tayangan seputar musik dan konser-konser dari seluruh dunia, contohnya ada beberapa program yang bukan live concert, tetapi masih ada kaitannya dengan konser musik seperti Historia, sebuah program acara tentang konser-konser paling bersejarah yang pernah diadakan di Indonesia. Juga ada program acara Persona, sebuah program acara yang mengulas tentang orang-orang yang bekerja di balik konser, dan sebagainya.</p>
						      <p><br>
						        7.	Apa program acara unggulan iKonser?<br>
						        Ikonser punya program acara unggulan konser setiap bulan yang bisa disaksikan secara live streaming untuk subscriber iKonser, baik dengan konsep konser tunggal artis tertentu atau festival. Pada bulan Januari ada Yura, an Intimate Concert, lalu bulan Februari ada Kunto Aji, Maret ada Jogjarockarta Festival, April ada Pusakata, Juli ada Prambanan Jazz, Oktober ada Batik Music Festival, dan Desember aka nada Mocosik Festival.</p>
						      <p><br>
						        8.	Sekarang ini sedang sangat banyak festival musik yang sedang hype. Apakah iKonser juga mempunyai niat untuk membuat festival musik sendiri?<br>
						        Kita sedang menggagas sebuah festival musik yang berbeda dari festival-festival musik yang sudah ada. Konsep besarnya festival ini akan menggabungkan antara konser musik dan beberapa budaya popular yang sekarang sedang digandrungi anak-anak muda. Semoga tahun ini sudah bisa terlaksana.</p>
						      <p>9.	Bagaimana caranya dapat menyaksikan iKonser?<br>
						        Untuk dapat menyaksikan siaran Live Concert di channel I-Konser, pelanggan Usee Tv akan dikenakan biaya subscribe sebesar 15 ribu/bulan, dengan fasilitas dapat menonton seluruh acara di channel I-Konser. Sedangkan untuk yang bukan pelanggan Usee Tv bisa mengakses Live Concert dengan PPV yang besarannya akan menyesuaikan dengan artis yang akan ditayangkan secara Live.</p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/minipack1.jpg" width="810" height="454"></p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/minipack2.jpg" width="813" height="458"></p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/new channel.jpg" width="1180" height="596"></p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                                <col width="28">
                                <col width="132">
                                <col width="147">
                                <col width="503">
                                <col width="144">
                                <tr height="21">
                                  <td width="28" height="21" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center"><strong>NO</strong></div></td>
                                  <td width="132" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center"><strong>Genre</strong></div></td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center"><strong>Nama Channel</strong></div></td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center"><strong>Deskripsi</strong></div></td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center"><strong>Target Penonton</strong></div></td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">1</td>
                                  <td width="132" rowspan="60" bordercolor="#000000" bgcolor="#CCCCCC">GEN ENT &amp; TV SERIES</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">ABC AUSTRALIA</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    Internasional yang berasal dari Australia yang menayangkan berita and hiburan</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;2</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">ANIMAX CHANNEL</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Animax menayangkan animasi-animasi kartun anak.    Saluran Animax boleh ditontoni oleh semua lapisan masyarakat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Remaja    Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Usia 12 &ndash; 18 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;3</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">ANIPLUS CHANNEL</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Menghadirkan premiere seri-seri anime Jepang dan    eksklusif setiap minggunya, menghadirkan drama,&nbsp; action, sci-fi/fantasy    dan komedi berdasarkan manga dan video game populer.&nbsp;</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pencinta    Manga &amp; Animasi</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Usia&nbsp; 15 &ndash; 25 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;4</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">ARIRANG</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Cahnnel    yang berasal dari Korea yang menyiarkan berita nasional dan politik, Korea    Utara, ekonomi, teknologi, dll</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;5</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">AXN CHANNEL</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel hiburan terbaik Asia yang menampilkan    drama seri terbaik, film blockbuster, program seri realitas serta produksi    original.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt;18 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;6</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">BLUE    ANT ENTERTAINMENT</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    hiburan yang menampilkan campuran terbaik reality, drama, komedi dan program    harian lainnya, dan serial hit.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;7</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">CCTV    4</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    berita yang berbahsa Mandarin menayangkan berita dan urusan politis Republik    Rakyat Tiongkok</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="43">
                                  <td width="28" height="63" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">8&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">CITRA DRAMA</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Film Televisi unggulan yang hadir dengan variasi    drama dengan tema menarik dan menghibur. Mengangkat kisah kehidupan    sehari-hari yang dapat dipetik hikmah serta nilai moralnya.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">18 &ndash; 45 Tahun&nbsp;&nbsp;Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;9</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Citra    Entertainment</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    24 jam yang menyajikakn acara variety show dari Indonesia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;10</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">DIVA</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    hiburan Korea yang menampilkan serial drama, variety show, film dan program    gaya hidup K-pop, kecantikan dan fashion.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;11</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">DONGNAN    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Berasal    dari provinsi Fujian. Karakter channel ini merupakan berita dan hiburan yang    banyak disukai oleh komunitas China di Indonesia.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;12</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">DUNIA LAIN</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Saluran televisi yang khusus menyiarkan    acara-acara yang berhubungan dengan misteri dan cerita-cerita mitos para    penduduk di suatu tempat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Dewasa</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt;18 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;13</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">E!    Entertainment</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    hiburan untuk berita, selebriti, berita selebriti dan gossip dunia hiburan    Hollywood</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;14</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Fox</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Menayangkan hiburan, olahraga, faktual dan film    premiere Hollywood pemenang Award secara eksklusif</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    dan wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt; 18&nbsp; tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;15</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Fox Crime</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Saluran hiburan yang fokus kepada tayangan    kejahatan, penyelidikan , dan kriminalitas</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Dewasa    25 &ndash; 54 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;16</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">FOX LIFE / STARWORLD</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Saluran hiburan terkemuka di Asia bagi    perempuan, yang berfokus untuk memberikan hiburan terbaik dan menawarkan    akses eksklusif untuk drama, komedi, reality show, dan acara lainnya.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Perempuan</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;17</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">FX&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Menayangkan konten drama dan komedi. FX landasan    beresonansi terutama dengan penonton laki-laki</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 25 &ndash; 49 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">18</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">HI    INDO</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang berisikan program mandarin dengan subtitle bahasa Indonesia, menayangkan    program drama, dokumenter, serial animasi, dsb.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">19</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">K+ /&nbsp;K &ndash; PLUS</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Saluran hiburan Korea yang menampilkan serial    drama, variety show, film dan program gaya hidup K-pop, kecantikan dan    fashion.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Remaja    dan dewasa</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 15 &ndash; 54 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Perempuan</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">20</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">KBS World</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Jendela utama Anda untuk konten hiburan populer    Korea selama 24 jam/hari. Selain itu juga terdapat berita nasional dan    internasional, drama, serta musik dari korea</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Remaja    dan dewasa</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 18 &ndash; 44 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Perempuan</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">21&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;KIX</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Kix merupakan saluran yang menampilkan acara    mixed martial arts events, action movies, extreme sports dan classic martial    arts masterpieces. Dengan konten action mengagumkan dari seluruh Asia, yang    dibuat khusus untuk pemirsa Asia.&nbsp;</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Usia    18 &ndash; 45 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">Laki-laki / Penggemar olahraga extreme</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">22&nbsp;</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;KUNGFU    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Fokus    pada tayangan tentang kungfu dii China. Termasuk didalamnya film, drama,    pertandingan dan dokumenter.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;23</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Lejel    Home Shopping LIVE&nbsp;</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Sebuah    tayangan hiburan yang menawarkan kualitas tertinggi dari drama, film, dan    program realita.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;24</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">NHK World Premium&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel general entertainment Jepang yang    tersedia dalam bahasa Inggris. Meliputi drama, reality show, dokumenter,    musik, olahraga, berita, dan lainnya</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 18 tahun keatas</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">25</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">NHK    World Japan</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menayangkan program variety show dari jepang</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">25</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">POPULAR    ENTERTAINMENT</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang memfokuskan pada hiburan yang populer, reality show dan pencarian bakat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">27</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">SBS    IN</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    Korea yang memiliki program - program terbaik dari SBS, penyedia content    Korea No. 1 di Asia Tenggara dengan program yang beraneka ragam mulai dari    acara variety</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">28</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">S-GEM</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Saluran ini menampilkan drama dan komedi, komedi    dan variety entertainment pertama yang dijalankan dan eksklusif, dari negara    Jepang dan korea.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    dan wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">29</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">SHENZHEN    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang&nbsp; menyiarkan acara hiburan untuk anak muda di lunar negeri china.    Menyiarkan musik, berita dan acara talkshow</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="35">
                                  <td width="28" height="72" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">30</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">S-ONE</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Menampilkan program drama dan hiburan Korea    Selatan terbaru. Ini termasuk drama prime time yang dipilih dalam waktu 24    jam setelah debut debut mereka di Korea. Program-program unggulan : LIVE UP    TO YOUR NAME, CHEESE IN THE TRAP, HEART SIGNAL</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    dan wanita</td>
                                </tr>
                                <tr height="37">
                                  <td width="162" height="37" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="35">
                                  <td width="28" height="55" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">31</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">STAR CHINESE CHANNEL</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Saluran hiburan Mandarin yang terkemuka di Asia.    Saluran ini menyajikan berbagai jenis rancangan termasuk serial drama,    talkshow, game show, lifestyle, dan masih banyak lagi.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Usia    18 &ndash; 45 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">32</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TV5MONDE</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    generalis terdepan yang berasal dar perancis</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td width="28" height="71" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">33</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">TVN</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Saluran no.1 TV berbayar di Korea. Menjadi    pemimpin tren konten, menyediakan hiburan umum terbaik melalui rangkaian    variety show top-rated, drama hit memecahkan rekor, pertunjukan musik kelas    dunia, program gaya hidup terdepan, dan produksi asli bertabur bintang khusus    untuk pemirsa Asia.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    dan Wanita</td>
                                </tr>
                                <tr height="33">
                                  <td width="162" height="33" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt; 18th</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">34</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">WakuWaku    Japan</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">saluran    hiburan yang menayangkan program TV Jepang, yang seluruh program TV dapat    disaksikan dalam bahasa setempat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    - Wanita<br>
                                  Usia &gt;18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">35</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">WARNER TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel rumah    untuk film legendaris dari Studio Warner Bros</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">36</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">ZHEJIANG    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    hiburan yang populer selama bertahun-tahun untuk para kaula muda di China</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">37</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">CHINESE    DRAMA</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    Drama TV Series Tiongkok terbaik dan terupdate</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">38</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Lifetime</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Lifetime    menghadirkan tayangan modern yang berani dan seru, lewat reality show, serial    drama, dan film &ndash; film terbaik, khususnya bagi kaum perempuan dan keluarga.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Wanita<br>
                                  Usia &gt; 18th</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">39&nbsp;</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">INSERT&nbsp;</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    televisi yang memberikan berita entertaiment dan liputan mendalam tentang    televisi, film, musik, selebriti, fashion, kecantikan, dan gaya hidup - semua    budaya. Dibawakan oleh host artis secara santai dan hangat&nbsp;</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Remaja Pria dan    Wanita<br>
                                  Usia &gt;16 tahun&nbsp;</td>
                                </tr>
                                <tr height="36">
                                  <td width="28" height="76" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">40</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Ruang Trampil</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Satu-satunya channel di Indonesia yang mengedepankan TUTORIAL    ilmu pendidikan non formal (ketrampilan) yang dapat dijadikan sebagai ruang    belajar &amp; BERKREASI serta adanya unsur digital sehingga dapat dijadikan    landasan untuk memasuki dunia 4.0</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria dan Wanita</td>
                                </tr>
                                <tr height="40">
                                  <td width="162" height="40" bordercolor="#000000" bgcolor="#CCCCCC">Usia 18-65 tahun&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">41</td>
                                  <td width="132" rowspan="7" bordercolor="#000000" bgcolor="#CCCCCC">INHOUSE CHANNEL</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">IDKU&nbsp;</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang mengedepankan karya anak bangsa dengan pendeketan millennial.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">42</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">USEE    PHOTO&nbsp;</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Satu-satunya    channel di Indonesia yang mengupas Tuntas mengenai dunia fotografi.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">43</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">USEE PRIME</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel In-House yang menyajikan    tayangan-tayangan berkualitas dan unggulan untuk memenuhi kebutuhan anda.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Semua    Gender</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 17 - 35 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">44</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Usee    Sports</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menampilkan program unggulan Dari Kompetisi Dari berbagai cabang    olahraga khususnya di Indonesia (Liga 1 Shoppee)</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">45</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">USEE    TODAY</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang berisi info terupdate mengenai features yang ada di UseeTV dan berbagai    macam&nbsp; minipack untuk melengkapi kebutuhan anda</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">46</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Usee    Sports 2</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menampilkan program unggulan Dari Kompetisi Dari berbagai cabang    olahraga khususnya di Indonesia (Liga 1 Shoppee)</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">47&nbsp;</td>
                                  <td width="132" rowspan="31" bordercolor="#000000" bgcolor="#CCCCCC">KIDS</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">BABY FIRST&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang menginspirasi dan mengedukasiuntuk    ibu dan anak.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Ibu    dan anak</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &lt; 5 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">48&nbsp;</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;BOOMERANG</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Saluran hiburan yang lucu, dalam lingkungan yang    aman yang akan membuat anak &ndash; anak atau kaum muda dan orang tua menikmati    tayangan kartun bersama-sama</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Anak &ndash; anak</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 4 - 9 tahun</td>
                                </tr>
                                <tr height="38">
                                  <td width="28" height="58" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">49&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;CARTOON NETWORK</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Mencerminkan semangat dan energi anak &ndash;    anak dalam tayangan animasi yang menghibur dan menyenangkan.&nbsp; Berisikan    kisah pertemanan, petualangan, action, komedi dan keunikan dari sebuah    animasi dalam kehidupan anak-anak</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Anak &ndash; anak</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 7 &ndash; 15 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">50&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">DA VINCI LEARNING</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel anak yang memberikan kesan belajar    diluar kelas ke dalam rumah</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Usia 6 &ndash; 12 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Edukatif</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">51&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Disney Channel (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Menayangkan program berkualitas untuk anak dan    keluarga melalui serial, film dan program lain</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Anak-anak dan Keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 6 &ndash; 16 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">52&nbsp;</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">DIVA    (+HD)&nbsp;</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang memberikan pengalaman menarik bagi anak-anak untuk belajar dan mengenal    karakter favorit mereka setiap hari</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">53&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;DreamWorks (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel anak yang menawarkan kepada keluarga    tayangan animasi yang menghibur. Tampil lebih segar dengan konten original    tiap tahunnya</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Segala usia, anak &ndash; anak</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">54&nbsp;</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;DUCK TV</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel untuk anak batita dengan program kartun    yang produksinya diawasi oleh psikolog anak</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Anak-anak</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">Pria dan Wanita &lt;6tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">55&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;DUNIA ANAK</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel lokal indonesia yang menyiarkan acara    khusus anak-anak</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Anak-anak</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 4 &ndash; 12 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">56&nbsp;</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;HOREE</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang menampilkan pendidikan untuk anak    dengan cara yang menghibur. Channel berbahasa Indonesia sehingga memudahkan    anak dalam menonton dan mengerti bahasanya</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">Anak-anak dan Keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 12 &ndash; 14 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">57&nbsp;</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;KAKU    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    animasi dari China, menghadirkan beragam film kartu</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">58&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">NICKELODEON&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Nickleodeon merupakan saluran untuk anak pra    sekolah. Menyediakan acara yangmenstimulasi, mendidik, melibatkan dan    mengembangkan pikiran.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Anak-anak    dan Keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 2 &ndash; 6 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">59&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">SPACETOON PLUS&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Spacetoon merupakan edutainment anak-anak, yang    mencakup berbagai kartun yang kebanyakan tentang petualangan.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Anak &ndash; anak</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 4 &ndash; 20 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">60&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Disney Junior</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Menayangkan program berkualitas untuk anak dan    keluarga melalui serial, film dan program lain spesialisasi anak usia 2-7    tahun</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Anak-anak dan Keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia &lt; 8 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">61&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">NICK JR&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang dikhususkan untuk anak (pre-school)    untuk belajar dan bermain.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Anak-anak dan Keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 2 &ndash; 6 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">62</td>
                                  <td width="132" rowspan="9" bordercolor="#000000" bgcolor="#CCCCCC">KNOWLEDGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">CGTN    Documentary (+HD)&nbsp;</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menayangkan berbagai macam budaya, agama, karya seni, dan sejarah dari    berbagai macam tempat dan disiarkan dalam bahasa Inggris.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">63</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;CRIME+    INVESTIGATION</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang memberikan informasi fakta perihal kehidupan kriminalitas</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="33">
                                  <td width="28" height="69" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">64</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">DISCOVERY CHANNEL&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel dikhususkan untuk menciptakan hiburan    dengan kualitas terbaik di dunia. Menawarkan kepada pemirsa rangkaian hiburan    non-fiksi berkualitas tinggi dari sifat, sains dan teknologi blue-chip,    sejarah kuno dan kontemporer, film dokumenter petualangan, budaya dan topikal</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Pria    dan Wanita</td>
                                </tr>
                                <tr height="36">
                                  <td width="162" height="36" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">65</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;History    (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Menghadirkan    hiburan dengan kualitas terbaik yang mengantarkan penontonnya dengan sejarah    yang cukup mendalam dan informatif.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">66</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Nat    Geo Wild (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang membawa anda lebih dekat dengan satwa liar dan menceritakan kisah &ndash;    kisah yang tak terlupakan dari kerajaan hewan.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td width="28" height="58" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">67</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">National Geographic Channel (+HD)&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel bagi para pemirsa yang memiliki    keingintahuan yang tinggi. Nat Geo akan mengubah cara anda melihat dunia    dengan menyediakan tayangan yang berani, penuh petualangan, dan menegangkan.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">68</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;PANDA    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyajikan tentang panda yang tersaji dalam 24 jam</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="38">
                                  <td width="28" height="58" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">69</td>
                                  <td width="132" rowspan="16" bordercolor="#000000" bgcolor="#CCCCCC">LIFESTYLE</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">AFN (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Saluran penyiar makanan dan gaya hidup pertama    dan terkemuka di Asia. Menyediakan wawasan tentang top table dunia, koki top    dan&nbsp; campuran sehat antara konten Timur dan Barat dalam berbagai format    sepanjang hari dari seluruh dunia.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Mayoritas Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia &gt;18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">70</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">EAT &amp; GO</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang membahas tentang rekomendasi tempat    yang unik untuk dikunjungi dan kuliner khas yang perlu dicicipi.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">Remaja Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 12 &ndash; 18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">71</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Fashion One (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang memfokuskan pada sinergi antara    fashion, film, dan TV</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">Remaja Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt;18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">72</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Fashion TV (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel fashion 1 dari Perancis ang    memperbaharui fashion terkini berupa video, kampanye, fashion shows, dan    pesta.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">Remaja Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt;18 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">73</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">LEJEL    HOME SHOPPING</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menghadirkan produk-produk inovatif dan berkualitas bagi masyarakat    dengan hanya menelepon dan sistem layanan antar.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">74</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Lejel    Home Shopping</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menghadirkan produk-produk inovatif dan berkualitas bagi masyarakat    dengan hanya menelepon dan sistem layanan antar.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">75</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">MNC    SHOP</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menayangkan produk home shopping milih MNC group</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="46">
                                  <td width="28" height="92" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">76</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Nat Geo People (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang menampilkan gaya hidup melalui    hiburan faktual menyenangkan dengan menjelajahi tempat-tempat dan budaya    menarik. Menampilkan cerita makanan dan wisata terbaik</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria dan Wanita</td>
                                </tr>
                                <tr height="46">
                                  <td width="162" height="46" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 20 &ndash; 40 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">77</td>
                                  <td width="132" rowspan="29" bordercolor="#000000" bgcolor="#CCCCCC">LOCAL CHANNEL&nbsp;</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">ANTARA</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    bermutu untuk jaringan televisi lokal, nasional, dan global, dengan format    tayangan berita, features dan dokumenter.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">78</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">ANTV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang merupakan channel lokal Indonesia yang memiliki acara beragam seperti    reality show, kuis, berita, hingga film dan seial TV Bollywood</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">79</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">BALI    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    TV yang menyiarkan program dari Bali untuk mempertahankan dan menjaga alam    Bali,Adat, Budaya, Agama Hindhu dan ketahanan Ekonomi Bali.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">80</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">BANDUNG    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">siaran    televisi yang menayangkan program acara beragam dari berita lokal, olah raga,    hiburan, seni budaya khususnya budaya sunda</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">81</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">BERITA    SATU</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang memiliki keunggulan pada kecepatan, ketepatan, kelengkapan, dan    pemilihan isu yang tepat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">82</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">CNN Indonesia (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang menyiarkan berita tentang Indonesia    dan dunia dengan menampilkan isu - isu terkini, fitur yang menarik dan    penting tentang Indonesia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Dewasa Yang Cerdas</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Pria dan Wanita</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">83</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">DAAI    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    TV tidak didirikan untuk tujuan komersial tetapi sebagai aliran jernih bagi    hati dan pikiran manusia.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">84</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">INDOSIAR</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang merupakan channel hiburan lokal Indonesia yang memiliki acara beragam    seperti olahraga, acara musik dangdut, reality show dll</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">85</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">JAK    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    televisi Jabodetabek yang mampu menjangkau wilayah siaran Nasional</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">86</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">JiTV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    resmi milik Pemerintah Daerah DIY yang menyiarkan informasi seputar Jogja.    Meliputi berita di lingkungan Pemda DIY, pariwisata, dll.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">87</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">JTV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    singkatan dari Jawa Timur yang memang channel ini merupakan televisi    didedikasikan untuk dan dari Jawa Timur</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">88</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">KOMPAS    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang mengutamakan mengutamakan hiburan, olahraga dan berita. Menjadi rumah    pertama acara stand up comedy Indonesia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">89</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Metro    TV (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyediakan berita dalam Negeri Indonesia dan luar negeri dan menyiarkan    acara taalkshow yang inspiratif</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">90</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">MNC    SHOP LIVE</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    online shopping terpercaya di Indonesia. Menyediakan segala keperluan tv    shopping dan home shopping terbaik</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">91</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">MYTV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    dengan konsep sebagai televisi perempuan pertama di Indonesia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="68">
                                  <td width="28" height="68" bordercolor="#000000" bgcolor="#CCCCCC">92</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">NET    TV (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Siaran    yang paling banyak digemari oleh para pecinta siaran televisi di Indonesia,    bahkan banyak orang yang rela menghabiskan waktu berjam-jam hanya untuk    menanti dan menonton siaran terbaik. Menayangkan Talk show, Reality show,    kuis, dll.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">93</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">PELANGI</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Program yang menayangan hiburan film-film drama    pakistan dan sinetron indonesia terlaris di masanya dari tayangan tahun 2000    sampai saat ini.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria dan wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">94</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">RRI    NET</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang bertujuan untuk memberikan edukasi kepada masyarakat melalui informasi    dan meraih pendengar sebanyak-banyaknya. Sehingga misi negara akan sampai    kepada masyarakat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">95</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">RTV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Stasiun    televisi nasional yang mengedepankan unsur edukasi</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">96</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">SCTV    (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyediakan acara hiburan, berita, dan sinetron yang dibintangi oleh    bintang terkenal</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">97</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TRANS    7 (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyediakan acara hiburan, berita, dan reality show yang menarik bagi    pemirsa</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">98</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TRANS    TV (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyediakan acara hiburan, berita, dan film blockbuster yang tayang    pertama kali di channel lokal Indonesia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">99</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">TV EDUKASI</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel ini khusus ditujukan untuk menyebarkan    informasi di bidang pendidikan dan berfungsi sebagai media pembelajaran    masyarakat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt; 6 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">100</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TV    ONE</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyediakan 70% program berita dan program lainnya seperti hiburan dan    olahraga.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">101</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TVRI</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Stasiun    TV&nbsp; pertama yang ada di Indonesia, mengedepankan isu-isu nasional</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">102</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">IDX    Channel</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    berita bisnis selama 24 jam yang menjangkau wilayah Indonesia yang menyiarkan    berita dan informasi bisnis dari Bursa Efek Indonesia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">103</td>
                                  <td width="132" rowspan="44" bordercolor="#000000" bgcolor="#CCCCCC">MOVIES</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">BIOSKOP INDONESIA</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang menampilkan FTV terbaik dengan    kualitas Biskop dari berbagai genre popular Indonesia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Remaja    Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia 12 &ndash; 18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">104</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;CELESTIAL MOVIES</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Program film yang disiarkan 24 jam non-stop.    Film ini menggunakan film-film drama action berbahasa Mandarin.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">- Cocok untuk penggemar film</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">105</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">CHINESE    ANCIENT COSTUME DRAMA&nbsp;</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    saluran dari China yang popular dan penuh sejarah.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">106</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">CINEMA WORLD</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel film yang memberikan hiburan baru diluar    Hollywood, tontonan terbaik dan film pemenang penghargaan, sukses di    box-office dunia, film favorit kritikus dari seluruh dunia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Pria dan wanita</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">- Cocok untuk penggemar film</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">107</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Cinemax    (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    yang menayangkan film &ndash; film action, sci-fi, dan penuh ketegangan.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">108</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Flik    (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    film indonesia yang telah di restorasi, juga menampilkan film produksi    original FLIK dan koleksi yang beragam dari berbagai jenis aliran film yang    menggambarkan industri film Indonesia.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">109</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Fox Action Movies (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Didedikasikan untuk tema program yang unik dan    stunts dengan showcase yang lebih baik hits favorit dan fitur tindakan ikonik    dari seluruh dunia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 15 &ndash; 49 Tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">110</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Fox Family Movies (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channnel yang menyenangkan, dengan konten    animasi yang cocok untuk keluarga serta film untuk segala usia untuk    dinikmati bersama-sama</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Umur 4 &gt;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Semua umur</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">111</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Fox Movies (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Menayangkan konten premiere film &ndash; film    Hollywood pemenang Award secara eksklusif.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria dan wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 15-49 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">112</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">GALAXY</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel film Hollywood dengan lebih dari 200    judul baru setiap tahunnya</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar film</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">113</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">HBO    (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Sentra    film blockbuster Hollywood terbaik dan seri HBO Originals yang tayang perdana    di layar kaca dengan tematik konten setiap bulannya</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">114</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;HBO Family (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Ditujukan sebagai tontonan keluarga, yang    menawarkan film dan serial yang menyenangkan dan ceria bagi seluruh anggota    keluarga</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Segala usia</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Cocok untuk keluarga</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="71" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">115</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">HBO Hits (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Saluran yang menayangkan film &ndash; film blockbuster    Hollywood terbaik dan top hits box office dengan tematik konten</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Remaja dan dewasa</td>
                                </tr>
                                <tr height="51">
                                  <td width="162" height="51" bordercolor="#000000" bgcolor="#CCCCCC">- usia 18 &ndash; 50 tahun Cocok untuk pecinta film</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="91" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">116</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">HBO Signature (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Rumah bagi&nbsp; seri HBO Originals, film &ndash; film    spesial dan kumpulan serial yang mendapatkan penghargaan dari sinema film    internasional.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Pria dan wanita</td>
                                </tr>
                                <tr height="51">
                                  <td width="162" height="51" bordercolor="#000000" bgcolor="#CCCCCC">- Cocok untuk penggemar film dan serial</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">117</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">HOOQ</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Layanan    Video on demand yang menyediakan film-film hollywood dan konten televisi da    film lokal</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">118</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">IMC</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    pertama yang berisi film Indonesia Block buster. Berisi film Indonesia dari    beragam genre dan tahun produksi terkini</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">119</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">RED    by HBO (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    film dan serial asia dibawah kepopuleran HBO. Film-film Asia yangberasal dari    Jepang, Korea dan China</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="71" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">120</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Star Chinese Movies (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Saluran premium film Mandarin No. 1 yang    menyediakan kombinasi dari film blockbuster Asia dan film pemenang    penghargaan. Bahasa akan ditampilkan dalam bahasa mandarin</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Pria dan Wanita</td>
                                </tr>
                                <tr height="31">
                                  <td width="162" height="31" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar film mandarin&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="68" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">121</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;STAR CHINESE MOVIES LEGEND</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Menampilkan selama film &ndash; film top Hongkong    tahun 70an hingga 90an, yang dibintangi antara lain oleh Jackie Chan, Jet Li,    Bruce Lee, Sammo Hung, dan aktor top lainnya</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;- Usia &gt; 18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Pria dan Wanita</td>
                                </tr>
                                <tr height="28">
                                  <td width="162" height="28" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar film mandarin</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">122</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">THRILL</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Saluran film pertama dan hanya di Asia    didedikasikan untuk genre horor. Saluran ini mengutamakan siaran film horor    Hollywood dan Asia tetapi juga menyiarkan program lain&nbsp;termasuk drama    supranatural Barat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Usia 18 - 45 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Pria dan Wanita</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">- Cocok untuk penggemar film horor</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">123</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TVN    MOVIES (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    TV pertama dan satu-satunya yang menyajikan berbagai genre&nbsp; film    blockbuster Korea</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">124</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">ZEE BIOSKOP</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang menayangkan film Blockbuster    Bollywood dan juga berbagai hiburan India&nbsp; selama 24 jam yang&nbsp;    sudah di dubbing ke Bahasa Indonesia, channel ini menayangkan Film berbagai    genre seperti Drama, Action, Comedy, Romantis, Horor, juga Serial Drama    Premium dan Talk Show</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Usia 25 &ndash; 34 Tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Wanita</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">125</td>
                                  <td width="132" rowspan="6" bordercolor="#000000" bgcolor="#CCCCCC">MUSIC&nbsp;&nbsp;&nbsp;</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Channel    V (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    musik yang memberikan program terbaik kepada generasi muda yang juga akan    dipandu oleh VJ&nbsp; populer</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">126</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">MTV Live (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel musik internasional yang merekam    penampilan LIVE pertunjukkan musik, video musik, dokumentari musik, dll.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Remaja    Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt; 16 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">127</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">PRAMBORS</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    musik non-stop yang siap menemani kawula muda dengan kumpulan video klip    terhits.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">128</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">T-MUSIC</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel khusus musik yang memutarkan lagu dari    seluruh dunia dalam beberapa era.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pendengar    Musik</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">Pria dan Wanita (&gt;18 tahun)</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">129</td>
                                  <td width="132" rowspan="14" bordercolor="#000000" bgcolor="#CCCCCC">NEWS</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Al Jazeera (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang memberikan informasi mengenai    berita dan analisis dari timur tengah dan dunia. Menyiarkan opini,    dokumentari, podcast, dll.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Pria &amp; Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia tahun 12&gt;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">130</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;BLOOMBERG</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel informasi bisnis yang tayang 24 jam dan    menyajikan informasi mengenai berita, data, dan analisis pasar</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Pria - Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt;18 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">131</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;Channel News Asia (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang menyediakan berita dan informasi    terkait perkembangan global dari perspective Asia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    - Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt;18 tahun</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">132</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;CNBC    ASIA</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang memberikan berita bisnis dan perkembangan pasar saham terkini</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;-    Para pelaku bisnis dan profesional keuangan</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">133</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;CNN International (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang memberikan berita terkini seputar    ekonomi, politik, sosial dan berbagai peristiwa dunia selama 24 jam</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pelaku Bisnis dan Pegusaha</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Pria dan Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">135</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">DW    TV (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    berita dari Jerman</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">136</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">EURONEWS&nbsp;</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    berita nomor satu di eropa.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">137</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">France    24 (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    berita dari seluruh dunia dengan perpektif Perancis yang muncul pada tahun    2006. Mengedepankan budaya dan sebagai alternative untuk suber berita    konvensional</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">138</td>
                                  <td width="132" rowspan="14" bordercolor="#000000" bgcolor="#CCCCCC">RELIGIOUS&nbsp;</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;AL    QURAN AL KAREEM</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    Live Streaming dari Masjidil Haram Mekkah</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">139</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">DMI    CHANNEL</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    berbasis Islami berisikan ragam program dan acara talkshow untuk semua    kalangan terutama untuk generasi millennial</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">140</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">HOPE    CHANNEL</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Hope    channel merupakan channel yang menyajikan konten yang berfokus kepada    kehidupan Kristen, dan mencakup topik seperti pikiran, tubuh, jiwa, keluarga,    dan masyarakat.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">141</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">KHAZANAH</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyiarkan acara-acara yang berhubungan dengan religi Islam</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="54" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">142</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">MQTV</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Cahnnel yang menyiarkan televisi lokal Kota    Bandung dengan siaran bernuansa Islam</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">Pria    dan Wanita (Islam)</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">Usia &gt;12 tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">143</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">MTA    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    dakwah Islam</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">144</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">RODJA    TV</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyiarkan tilawah Al-Quran dan Kajian islam</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">145</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TV    MU</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    islam sebagai sumber informasi, pendidikan, dakwah dan kontrol sosial.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">146</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TV    MUI</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menyediakan acara ceramah, berita, dan kajian keIslaman</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="20" bordercolor="#000000" bgcolor="#CCCCCC">147</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">TV9</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    yang menayangkan informasi dan hiburan sputar tradisi kaum muslim.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">148</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">U CHANNEL</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Uchannel adalah channel nasrani yang beroperasi    di satelit palapa, yang berfokuskan terhadap lifestyle dan mempunyai misi    untuk mengajak kaum nasrani untuk hidup lebih baik.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Pria Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Nasrani</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">149</td>
                                  <td width="132" rowspan="24" bordercolor="#000000" bgcolor="#CCCCCC">SPORTS</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="74" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">150</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">BeIN Sports 2 (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Membawa para penggemar olahraga ke dalam siaran langsung pertandingan, berita dan analisa dari liga-liga top khususnya liga Italia, LA LIGA/Liga Spanyol, France dan kompetisi di seluruh dunia, serta konten eksklusif</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia &gt; 15 tahun</td>
                                </tr>
                                <tr height="34">
                                  <td width="162" height="34" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar sepakbola</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">151</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">EGG    NETWORK</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Saluran    24/7 yang menampilkan liga dan turnamen eSports terbesar, dan yang terbaik    dalam hiburan game. Permainan seperti Dota 2, Liga Legends, CS: GO, FIFA    Online 3, Hearthstone dan banyak lagi.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">152</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Fight    Sports (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Fight Sports adalah channel TV yang menayangkang pertarungan-pertarungan seru kelas dunia seperti Tinju, Karate, Sumo dan jenis seni olah raga bela diri yang lain di seluruh dunia dipadu dengan film, berita, dokumenter dan drama yang bertema action dan kebugaran tubuh</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">153</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Fox Sports (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Menampilkan laga laga top sepakbola dan olahraga    lainnya. Membawa anda untuk melihat dimensi baru dalam olahraga</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 15 - 54tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar olahraga</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="60" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">154</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Fox Sports 2 (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang memanjakan para penggila atletik    seperti sepak bola, dll</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia 15 - 54tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar olahraga</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">155</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Fox Sports 3 (+HD)&nbsp;</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Channel yang akan memancing adrenalin penonton    seperti tayangan MotoGP dan Extreme Game Asia</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Usia 15 - 54tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar olahraga</td>
                                </tr>
                                <tr height="49">
                                  <td width="28" height="94" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">156</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">GOLF+ (+HD)</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Menayangkan PGA TOUR lebih lengkap, mulai dari    tayangan LIVE hingga berita-berita seputar PGA TOUR. Selain itu, Channel    Golf+ juga akan menyempurnakan tayangan Golf Channel yang dikenal kaya akan    konten lokal serta menayangkan turnamen terbaik dari European Tour (Ryder    Cup) dan Asian Tour (Eurasia Cup).</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria Wanita</td>
                                </tr>
                                <tr height="45">
                                  <td width="162" height="45" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar Golf</td>
                                </tr>
                                <tr height="39">
                                  <td width="28" height="79" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">157</td>
                                  <td width="147" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">NBA TV (+HD)</td>
                                  <td width="609" rowspan="3" bordercolor="#000000" bgcolor="#CCCCCC">Menampilkan kehidupan pemain bola basket    individual, dokumenter yang berfokus pada tim NBA tertentu dan mengarsipkan    siaran dari game-game terkenal. Menawarkan liputan non-stop dari semua    tindakan yang terdiri dari NBA, WNBA dan Liga Pengembangan NBA.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria Wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- 10 &gt; tahun</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Penggemar Basket</td>
                                </tr>
                                <tr height="51">
                                  <td width="28" height="51" bordercolor="#000000" bgcolor="#CCCCCC">158</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Bein    Sports Rugby (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Membawa    para penggemar olahraga khususnya rugby ke dalam siaran langsung    pertandingan, berita dan analisa dari liga-liga top khususnya liga Spanyol    dan kompetisi di seluruh dunia, serta konten eksklusif.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">159</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Champions    TV 1 (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    khusus pecinta sepak bola menyanagkan pertandingan Champions League (UCL dan    UEL) </td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="34">
                                  <td width="28" height="34" bordercolor="#000000" bgcolor="#CCCCCC">160</td>
                                  <td width="147" bordercolor="#000000" bgcolor="#CCCCCC">Champions    TV 2 (+HD)</td>
                                  <td width="609" bordercolor="#000000" bgcolor="#CCCCCC">Channel    khusus pecinta sepak bola menyanagkan pertandingan Champions League (UCL dan    UEL) </td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td width="28" height="40" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">164</td>
                                  <td width="132" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">&nbsp;</td>
                                  <td width="147" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">SONY CHANNEL</td>
                                  <td width="609" rowspan="2" bordercolor="#000000" bgcolor="#CCCCCC">Tayangan drama, komedi dan gaya hidup, dan yang    paling akhir dalam film Hollywood yang enak, semuanya disampaikan langsung    dari AS.</td>
                                  <td width="162" bordercolor="#000000" bgcolor="#CCCCCC">-    Pria dan wanita</td>
                                </tr>
                                <tr height="20">
                                  <td width="162" height="20" bordercolor="#000000" bgcolor="#CCCCCC">- Usia &gt; 18&nbsp; tahun</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <!-- <p>Berikut chanel2 sepakbola :<br>
						        - LA LIGA/Liga Spanyol, Liga Perancis, Liga Italia (Beinsport)<br>
						        - Bundes Liga, Liga Inggris,Liga Belanda, A-League: Australia (Mola TV, wajib download aplikasi Mola TV dan berlangganan)<br>
						        - Liga Champion (Champion TV)<br>
						        - Liga Indonesia/Liga 1 (UseeSport)<br>
					          - AFC League (Fox Sport)</p>
						      <p>- UEFA EUROPA LEAGE (USEE SPORT)<br>
					          - Premier league dan la liga (OTT)</p> -->

                  <p>Untuk acara sepak bola :<br>
                    - LA LIGA/Liga Spanyol, LIGUE 1/Liga Prancis, Series A/Liga Italia, Major League Soccer/Liga Amerika Serikat ( Channel Beinsport)<br>
                    - Liga Inggris/Premiere League ( Melalui Mola TV, wajib download aplikasi Mola TV dan berlangganan)<br>
                    - UEFA Champion League dan UEFA Europe League (Champion TV, melalui aplikasi vidio dan berbayar)<br>
                    - BRI Liga 1 Indonesia (Channel Usee Sport/Indisport 2)</p>
						      <p>&nbsp;</p>
						      <p>NOMOR CHANNEL USEETV <br>
						        Berikut adalah update daftar nomor channel USEETV PER TANGGAL&nbsp;13 September 2019 <br>
						      </p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="288">
                                <col width="64">
                                <col width="70">
                                <col width="190">
                                <tr height="46">
                                  <td rowspan="2" height="67" width="288"><div align="center"><strong>CHANNEL NAME</strong></div></td>
                                  <td colspan="2" width="134"><div align="center"><strong>NOMOR CHANNEL</strong></div></td>
                                  <td rowspan="2" width="190"><div align="center"><strong>GENRE</strong></div></td>
                                </tr>
                                <tr height="21">
                                  <td height="21" width="64"><div align="center"><strong>SD</strong></div></td>
                                  <td width="70"><div align="center"><strong>HD</strong></div></td>
                                </tr>
                                <tr height="22">
                                  <td height="22">E! ENTERTAINMENT</td>
                                  <td align="right">500</td>
                                  <td align="right">963</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DIVA</td>
                                  <td align="right">501</td>
                                  <td align="right">961</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">ANIMAX</td>
                                  <td align="right">502</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX LIFE</td>
                                  <td align="right">504</td>
                                  <td align="right">950</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">LIFETIME</td>
                                  <td align="right">505</td>
                                  <td align="right">962</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">KIX</td>
                                  <td align="right">506</td>
                                  <td align="right">954</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">AXN</td>
                                  <td align="right">509</td>
                                  <td align="right">960</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TV5MONDE</td>
                                  <td align="right">510</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BLUE ANT ENTERTAINMENT</td>
                                  <td align="right">511</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX</td>
                                  <td align="right">512</td>
                                  <td align="right">951</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX CRIME</td>
                                  <td align="right">513</td>
                                  <td align="right">956</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FX</td>
                                  <td align="right">514</td>
                                  <td align="right">957</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">COMEDY CENTRAL</td>
                                  <td align="right">515</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TVN</td>
                                  <td align="right">516</td>
                                  <td align="right">955</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">KBS WORLD</td>
                                  <td align="right">517</td>
                                  <td align="right">958</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">ANIPLUS</td>
                                  <td align="right">518</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NHK WORLD PREMIUM</td>
                                  <td align="right">519</td>
                                  <td align="right">953</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">WAKUWAKU JAPAN</td>
                                  <td align="right">520</td>
                                  <td align="right">959</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">STAR CHINESE CHANNEL</td>
                                  <td align="right">521</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">K+</td>
                                  <td align="right">523</td>
                                  <td align="right">952</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">POPULAR ENTERTAINMENT</td>
                                  <td align="right">524</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HI INDO</td>
                                  <td align="right">525</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DUNIA LAIN</td>
                                  <td align="right">527</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">SHOWCASE</td>
                                  <td align="right">529</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">AUSTRALIA +</td>
                                  <td align="right">531</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">ARIRANG</td>
                                  <td align="right">532</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CCTV 4</td>
                                  <td align="right">533</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CITRA DRAMA</td>
                                  <td align="right">534</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CITRA ENTERTAINMENT</td>
                                  <td align="right">535</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">S-GEM</td>
                                  <td align="right">536</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">S-ONE</td>
                                  <td align="right">537</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">ZHEJIANG TV</td>
                                  <td align="right">538</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">SHENZHEN TV</td>
                                  <td align="right">539</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DONGNAN TV</td>
                                  <td align="right">540</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">KUNGFU TV</td>
                                  <td align="right">541</td>
                                  <td>&nbsp;</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NHK WORLD TV</td>
                                  <td align="right">807</td>
                                  <td align="right">987</td>
                                  <td>GEN ENT &amp; TV SERIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DISNEY CHANNEL</td>
                                  <td align="right">301</td>
                                  <td align="right">930</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DISNEY JUNIOR</td>
                                  <td align="right">302</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DA VINCI LEARNING</td>
                                  <td align="right">303</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NICKELODEON</td>
                                  <td align="right">304</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NICK JR</td>
                                  <td align="right">305</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CARTOON NETWORK</td>
                                  <td align="right">306</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BOOMERANG</td>
                                  <td align="right">308</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DUCK TV</td>
                                  <td align="right">309</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DREAMWORKS</td>
                                  <td align="right">310</td>
                                  <td align="right">932</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BABY FIRST</td>
                                  <td align="right">311</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DUNIA ANAK</td>
                                  <td align="right">312</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">KAKU TV</td>
                                  <td align="right">313</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">SPACETOON PLUS</td>
                                  <td align="right">314</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HOREE</td>
                                  <td align="right">315</td>
                                  <td>&nbsp;</td>
                                  <td>KIDS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">INFO RUANG GURU</td>
                                  <td align="right">86</td>
                                  <td>&nbsp;</td>
                                  <td>KNOWLEDGE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NATIONAL GEOGRAPHIC CHANNEL</td>
                                  <td align="right">201</td>
                                  <td align="right">920</td>
                                  <td>KNOWLEDGE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NAT GEO WILD</td>
                                  <td align="right">202</td>
                                  <td align="right">921</td>
                                  <td>KNOWLEDGE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CRIME+ INVESTIGATION</td>
                                  <td align="right">203</td>
                                  <td>&nbsp;</td>
                                  <td>KNOWLEDGE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CGTN Documentary</td>
                                  <td align="right">204</td>
                                  <td>&nbsp;</td>
                                  <td>KNOWLEDGE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HISTORY</td>
                                  <td align="right">205</td>
                                  <td align="right">922</td>
                                  <td>KNOWLEDGE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">PANDA TV</td>
                                  <td align="right">206</td>
                                  <td>&nbsp;</td>
                                  <td>KNOWLEDGE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DISCOVERY CHANNEL</td>
                                  <td align="right">207</td>
                                  <td>&nbsp;</td>
                                  <td>KNOWLEDGE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">LEJEL HOME SHOPPING (LIVE)</td>
                                  <td align="right">106</td>
                                  <td>&nbsp;</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">MNC SHOP LIVE</td>
                                  <td align="right">110</td>
                                  <td>&nbsp;</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">LEJEL HOME SHOPPING</td>
                                  <td align="right">113</td>
                                  <td>&nbsp;</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">MNC SHOP</td>
                                  <td align="right">117</td>
                                  <td>&nbsp;</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">THE STARTUP CHANNEL</td>
                                  <td align="right">119</td>
                                  <td>&nbsp;</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HOLLA SHOP</td>
                                  <td align="right">121</td>
                                  <td>&nbsp;</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FYI</td>
                                  <td align="right">401</td>
                                  <td>&nbsp;</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">AFC</td>
                                  <td align="right">402</td>
                                  <td align="right">943</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">EAT &amp; GO</td>
                                  <td align="right">403</td>
                                  <td>&nbsp;</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FASHION TV</td>
                                  <td align="right">404</td>
                                  <td align="right">940</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NAT GEO PEOPLE</td>
                                  <td align="right">405</td>
                                  <td align="right">941</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FASHION ONE</td>
                                  <td align="right">408</td>
                                  <td align="right">947</td>
                                  <td>LIFESTYLE</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">USEE INFO</td>
                                  <td align="right">80</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">USEE SPORTS</td>
                                  <td align="right">85</td>
                                  <td align="right">905</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">USEE SPORTS 2</td>
                                  <td align="right">86</td>
                                  <td align="right">906</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">USEE PRIME</td>
                                  <td align="right">88</td>
                                  <td align="right">908</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">USEE PHOTO</td>
                                  <td align="right">89</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">USEE TODAY</td>
                                  <td align="right">91</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TVRI</td>
                                  <td align="right">100</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">METRO TV</td>
                                  <td align="right">101</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CNN INDONESIA</td>
                                  <td align="right">102</td>
                                  <td align="right">913</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TV ONE</td>
                                  <td align="right">103</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TRANS TV</td>
                                  <td align="right">104</td>
                                  <td align="right">911</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TRANS 7</td>
                                  <td align="right">105</td>
                                  <td align="right">912</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">SCTV</td>
                                  <td align="right">107</td>
                                  <td align="right">914</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">ANTV</td>
                                  <td align="right">108</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">INDOSIAR</td>
                                  <td align="right">109</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NET TV</td>
                                  <td align="right">112</td>
                                  <td align="right">910</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">KOMPAS TV</td>
                                  <td align="right">114</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BERITA SATU</td>
                                  <td align="right">115</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">JAK TV</td>
                                  <td align="right">116</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">RTV</td>
                                  <td align="right">118</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DAAI TV</td>
                                  <td align="right">120</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BALI TV</td>
                                  <td align="right">122</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">JTV</td>
                                  <td align="right">123</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">ANTARA</td>
                                  <td align="right">124</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">INTV</td>
                                  <td align="right">125</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BANDUNG TV</td>
                                  <td align="right">126</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TV EDUKASI</td>
                                  <td align="right">127</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">PELANGI</td>
                                  <td align="right">128</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">O CHANNEL</td>
                                  <td align="right">129</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">INSERT</td>
                                  <td align="right">503</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TV MUI</td>
                                  <td align="right">860</td>
                                  <td>&nbsp;</td>
                                  <td>LOCAL CHANNEL</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">IFLIX</td>
                                  <td align="right">600</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HBO</td>
                                  <td align="right">601</td>
                                  <td align="right">991</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HBO SIGNATURE</td>
                                  <td align="right">602</td>
                                  <td align="right">993</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CINEMAX</td>
                                  <td align="right">603</td>
                                  <td align="right">996</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HBO HITS</td>
                                  <td align="right">604</td>
                                  <td align="right">992</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HBO FAMILY</td>
                                  <td align="right">605</td>
                                  <td align="right">994</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX MOVIES</td>
                                  <td align="right">607</td>
                                  <td align="right">998</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX FAMILY MOVIES</td>
                                  <td align="right">608</td>
                                  <td align="right">997</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX ACTION MOVIES</td>
                                  <td align="right">609</td>
                                  <td align="right">999</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">THRILL</td>
                                  <td align="right">610</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CELESTIAL MOVIES</td>
                                  <td align="right">611</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HOOQ</td>
                                  <td align="right">612</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">ZEE BIOSKOP</td>
                                  <td align="right">614</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CINEMA WORLD</td>
                                  <td align="right">615</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">AMC</td>
                                  <td align="right">616</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">GALAXY</td>
                                  <td align="right">617</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BIOSKOP INDONESIA</td>
                                  <td align="right">618</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FLIK</td>
                                  <td align="right">619</td>
                                  <td align="right">990</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">IMC</td>
                                  <td align="right">620</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">STAR CHINESE MOVIES</td>
                                  <td align="right">622</td>
                                  <td align="right">968</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">STAR CHINESE MOVIES LEGEND</td>
                                  <td align="right">623</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">RED BY HBO</td>
                                  <td align="right">626</td>
                                  <td align="right">995</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CHINESE ANCIENT COSTUME DRAMA</td>
                                  <td align="right">629</td>
                                  <td>&nbsp;</td>
                                  <td>MOVIES</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">MTV LIVE</td>
                                  <td align="right">450</td>
                                  <td>&nbsp;</td>
                                  <td>MUSIC</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">C MUSIC TV</td>
                                  <td align="right">451</td>
                                  <td>&nbsp;</td>
                                  <td>MUSIC</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CHANNEL V</td>
                                  <td align="right">452</td>
                                  <td align="right">942</td>
                                  <td>MUSIC</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">PRAMBORS</td>
                                  <td align="right">453</td>
                                  <td>&nbsp;</td>
                                  <td>MUSIC</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">T-MUSIC</td>
                                  <td align="right">454</td>
                                  <td>&nbsp;</td>
                                  <td>MUSIC</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">EURONEWS</td>
                                  <td align="right">800</td>
                                  <td>&nbsp;</td>
                                  <td>NEWS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CNN INTERNATIONAL</td>
                                  <td align="right">801</td>
                                  <td align="right">982</td>
                                  <td>NEWS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BLOOMBERG</td>
                                  <td align="right">802</td>
                                  <td>&nbsp;</td>
                                  <td>NEWS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CNBC ASIA</td>
                                  <td align="right">803</td>
                                  <td>&nbsp;</td>
                                  <td>NEWS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CHANNEL NEWS ASIA</td>
                                  <td align="right">804</td>
                                  <td>&nbsp;</td>
                                  <td>NEWS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">AL JAZEERA</td>
                                  <td align="right">805</td>
                                  <td>&nbsp;</td>
                                  <td>NEWS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FRANCE 24</td>
                                  <td align="right">806</td>
                                  <td>&nbsp;</td>
                                  <td>NEWS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DW TV</td>
                                  <td align="right">808</td>
                                  <td align="right">988</td>
                                  <td>NEWS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">AL QURAN AL KAREEM</td>
                                  <td align="right">850</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">KHAZANAH</td>
                                  <td align="right">851</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">RODJA TV</td>
                                  <td align="right">852</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">MTA TV</td>
                                  <td align="right">853</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">MQTV</td>
                                  <td align="right">854</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TV9</td>
                                  <td align="right">855</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">TV MU</td>
                                  <td align="right">856</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">DMI CHANNEL</td>
                                  <td align="right">858</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">HOPE CHANNEL</td>
                                  <td align="right">870</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">U CHANNEL</td>
                                  <td align="right">871</td>
                                  <td>&nbsp;</td>
                                  <td>RELIGIOUS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BEIN SPORTS 1</td>
                                  <td align="right">701</td>
                                  <td align="right">970</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BEIN SPORTS 2</td>
                                  <td align="right">702</td>
                                  <td align="right">971</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BEIN SPORTS 3 (DITURUNKAN)</td>
                                  <td align="right">703</td>
                                  <td align="right">972</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">BEIN SPORTS RUGBY</td>
                                  <td align="right">703</td>
                                  <td align="right">972</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FIGHT SPORTS</td>
                                  <td align="right">704</td>
                                  <td align="right">976</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX SPORTS</td>
                                  <td align="right">705</td>
                                  <td align="right">973</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX SPORTS 2</td>
                                  <td align="right">706</td>
                                  <td align="right">974</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">FOX SPORTS 3</td>
                                  <td align="right">707</td>
                                  <td align="right">975</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NBA TV</td>
                                  <td align="right">708</td>
                                  <td>&nbsp;</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">EGG NETWORK</td>
                                  <td align="right">709</td>
                                  <td>&nbsp;</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">GOLF</td>
                                  <td align="right">710</td>
                                  <td align="right">978</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">GOLF+</td>
                                  <td align="right">711</td>
                                  <td align="right">979</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CHAMPIONS TV 1</td>
                                  <td align="right">712</td>
                                  <td align="right">980</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">CHAMPIONS TV 2</td>
                                  <td align="right">713</td>
                                  <td align="right">981</td>
                                  <td>SPORTS</td>
                                </tr>
                                <tr height="22">
                                  <td height="22">NBA TV</td>
                                  <td align="right">977</td>
                                  <td>&nbsp;</td>
                                  <td>SPORTS</td>
                                </tr>
                              </table>
						      <p>&nbsp; </p>
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