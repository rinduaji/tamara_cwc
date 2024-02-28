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
								  <h5 align="center" class="title"><a href="ref_2p3p.php">Script Anti Decline</a> | <a href="script_2p-3p.php">Script Penawaran</a><strong> | </strong><a href="desc_stbtambahan.php">Deskripsi Produk</a> | <a href="fup.php">Fair Usage Policy </a>| <a href="promo.php">Promo Indihome TV</a> | <a href="script_terima_ggn.php">Script Terima Komplain Gangguan </a> </h5>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <p>Rule : <a href="ref_all.php">All</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_smoo.php">SMOOA</a>  | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a> | <a href="ref_all.php">All</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_stb.php">STB</a> | <a href="ref_terbuka.php">Kalimat Terbuka</a><a href="ref_downgrade.php"></a> | <a href="ref_p3k.php">P3K</a> | <a href="ref_kalibrasi.php">Risalah Kalibrasi</a> </p>
						      <p>&nbsp;</p>
						      <p><em><strong>Update 27 Maret 2023 </strong></em></p>
						      <p><strong>Script Customer Consent</strong></p>
						      <p>Saat ini Telkom sedang melakukan pembaharuan kontrak berlangganan pelanggan indihome, kami sudah mengirim link melalui sms atau email, mohon di cek pak/ bu (nama pelanggan) dan silahkan klik link upload, menyetujui  serta mengirim data yang dibutuhkan untuk kenyamanan dan keamananan bapak/ ibu dalam mengunakan layanan indihome.</p>
						      <p>&nbsp;</p>
						      <p><strong>Script Paperles</strong> (paperless sudah tdk disampaikan per <strong><em>29-Agustus-2023</em></strong>) </p>
						      <p>Untuk proses berlangganan, bisa diinformasikan nomor handphone/ email pak/ bu (nama pelanggan)?</p>
						      <p>Bapak/ ibu akan mendapatkan sms atau email dari kami, silahkan langsung klik linknya agar (sebukan program yang ditawarkan) segera aktif dan bisa bapak/ ibu nikmati.<br>
						        Link akan expired dalam waktu 3 X 24 jam setelah sms/ email diterima</p>
						      <p>=================</p>
						      <p>&nbsp;</p>
						      <p><strong>Pilihan closing Decline </strong></p>
						      <p>1. jika ada penawaran menarik lainnya izinkan kami hubungi kembali yah Bapak/Ibu.<br>
						        selamat pagi/siang/malam pak/ bu (nama pelanggan),selamat beraktifitas / selamat beristirahat</p>
						      <p>2.Terima kasih bapak untuk kesedian waktunya, besar harapan bapak / ibu berkenan untuk menerima telepon kami selanjutnya dan berminat untuk program terbaru kami, sehat selalu<br>
						        selamat pagi/siang/malam pak/ bu (nama pelanggan).</p>
						      <p>3.Terima kasih ibu /bapak, atas waktunya, jika ada penawaran menarik lainnya izinkan kami hubungi kembali yah Bapak/Ibu.<br>
						        Selamat pagi/siang/malam pak/ bu (nama pelanggan),selamat beraktifitas</p>
						      <p>4.Terimakasih bapak/ibu atas waktu yang telah di berikan, jika ke depan ada promo/penawaran menarik lainnya ijinkan kami untuk menghubunggi bapak/ibu kembali<br>
						        Sehat selalu dan semoga selalu di berikan kelancaran rezeki<br>
						        selamat pagi/siang/malam pak/ bu (nama pelanggan).</p>
						      <p>5. Terimakasih sudah meluangkan waktunya, mungkin lain kali kalau ada penawaran yang lebih baik bisa kami hubungi kembali ya pak/ bu.<br>
						        selamat pagi/siang/malam pak/ bu (nama pelanggan), selamat beraktifitas</p>
						      <p>6. Terima kasih atas kesempatan yang diberikan pada kami...ijinkan dilain waktu kami dapat menghubungi Bpk/Ibu jika ada penawaran yang sesuai dengan kebutuhan Bpk/ibu dirumah.<br>
						        Semoga Bpk/Ibu bersama keluarga sehat selalu dan dilancarkan rezekinya<br>
						        selamat pagi/siang/malam pak/ bu (nama pelanggan).</p>
						      <p>7.Terima kasih ya bapak/ bu atas waktunya, kami berharap lain waktu bisa terhubung dengan bapak/ ibu, tentunya dengan dengan program- program menarik lainnya. sehat selalu ya bu, semoga sukses selalu menyertai<br>
						        selamat pagi/siang/malam pak/ bu (nama pelanggan).</p>
						      <p>8. Senang sekali bisa terhubung dengan Ibu/Bapak, harapan kami kedepannya Ibu/Bapak bersedia dengan penawaran kami yang lainnya, sehat selalu ya Ibu/Bapak dan selamat pagi/siang/malam pak/ bu (nama pelanggan).</p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="68" span="2">
                                <col width="770">
                                <tr height="18">
                                  <td height="18" width="68"><div align="center"><strong>NO</strong></div></td>
                                  <td width="83"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="1124"><div align="center"><strong>SCRIPT HUMANIS</strong></div></td>
                                </tr>
                                <tr height="37">
                                  <td height="37">1</td>
                                  <td>2P3P</td>
                                  <td width="1124">Apakah Bapakk    masih menggunakan TV tabung, Lcd atau Led yang biasa? Kami memiliki penawaran    agar TV Bapakk di setting layaknya Smart TV dengan berbagai pilihan paket    sesuai keinginan Bapakk?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">2</td>
                                  <td>2P3P</td>
                                  <td width="1124">Bapakk ibu    apakah di rumahnya ada anak kecil yang suka menonton tv? Jika ada, Kami ada    beberapa pilihan paket tayangan untuk anak2 yang tentunya aman dibandingkan    dengan jika anak2 menonton youtube&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">3</td>
                                  <td>2P3P</td>
                                  <td width="1124">Bapakk/ibu    biasanya tvnya ditonton oleh berapa orang, disini kami ingin memberikan    penawaran tontonan dengan kategori tayangan yang beragam, biasanya keluarga    suka dan lebih cenderung dengan siaran seperti apa pak/bu?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">4</td>
                                  <td>2P3P</td>
                                  <td width="1124">Biasanya bapak    atau Ibu sering melakukan aktivitas inetrnet untuk apa Ibu , browsing ,    belanja online , streaming Youtube atau Game Online?</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">5</td>
                                  <td>2P3P</td>
                                  <td width="1124">Biasanya    televisi ibu selain digunakan untuk menonton acara yang disukai, biasanya    digunakan untuk apa? Dengan adanya indihome useetv ibu juga bisa streaming di    tv jadi tidak&nbsp; perlu ribet di hape lagi&nbsp;</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">6</td>
                                  <td>2P3P</td>
                                  <td width="1124">Maaf Bapak/Ibu    apakah anak-anaknya selama ini suka menonton youtube dari hp pak/bu? Disini    kami ada penawaran tv interaktif yang sangat menarik sehingga anak2    nanti&nbsp; tidak hanya&nbsp; menonton dari hp saja, nanti sudah bisa    juga menonton Youtube dari layar televisinya, Apakah Bapakk/ibu berkenan kami    jelaskan?&nbsp;</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">7</td>
                                  <td>2P3P</td>
                                  <td width="1124">Maaf pak / bu    apakah anak-anaknya selama ini suka menonton youtube dari hp pak/bu? Disini    kita ada pnawaran usee tv sehingga anak-anak tidak perlu menonton dari hp yng    bisa menyebabkan mata perih, ada fitur pause, dan ada fitur untuk menonton    ulang 7 hari ke belakang. Apakah Bapakk/ibu berkenan kita jelaskan?&nbsp;&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">8</td>
                                  <td>2P3P</td>
                                  <td width="1124">Pak/bu apakah    pernah menikmati usee tv mengunakan laptop/hp?</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">9</td>
                                  <td>2P3P</td>
                                  <td width="1124">Pak/bu untuk di    rumah ada berapa tv?</td>
                                </tr>
                                <tr height="92">
                                  <td height="92">10</td>
                                  <td>2P3P</td>
                                  <td width="1124">Untuk    televisi dilokasi sering ditonton tayangan apa pa/bu. jika ibu atau suami dan    keluarga ingin menonton kembali tayangan yg sudah terlewat terutama untuk    acara acara favourite. kami jga disini memiliki tv interaktif dimana tv    interaktif kami memiliki keunggulan yaitu tv on demand, dimana jika bapak/bu    ketinggalan siaran berita, drama, film, yang bapak/ibu sukai bapak/ibu bisa    memutar kembali hingga 7 hari kebelakang untuk mengetahui berita atau acara    acara tv tersebut dan bisa dilihat juga&nbsp;    bahwa resolusi untuk tv kami juga cukup baik bapak/ibu ?</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">11</td>
                                  <td>ALL</td>
                                  <td width="1124">Bagaimana    bapak/ibu sudah jelas dengan penawaran yang kami sampaikan? Tertarik dengan    penawaran terbaik dari indihomenya&nbsp;    bapak/ibu?</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">12</td>
                                  <td>ALL</td>
                                  <td width="1124">Kenyamanan    adalah prioritas kami saat ini kami tawarkan utk upgrade/penambahan usee    tv/channel2 menarik bagaimana Bapak/ibu lebih menyukai yang mana?</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">13</td>
                                  <td>ALL</td>
                                  <td width="1124">Untuk    penawaran yang kami jelaskan mungkin ada yang ingin bapak atau ibu tanyakan?</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">14</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">Apakah    ibu/bapa sudah mengetahui apa itu aplikasi useetv Go?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">15</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">apakah    tayangan di tonton sudah memuaskan untuk semua anggota keluarga?? kami punya    penawaran menarik utk Bapakk/ibu sekeluarga yang dapat memenuhi hiburan utk    keluarga di rumah</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">16</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">biasanya    yang sering kluarga&nbsp; dan Bapakk tonton    itu siaran apa yang menarik pak?</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">17</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">kalo    saya boleh tau untuk kesukaan bapak/ibu dan keluarga sering menonton tayangan    apa ? kebetulan sekali dari indihome memiliki penawaran menarik terkait paket    minipack yang beragam. bapa/ibu tidak perlu membayar di satu satu channel.    kita ada paketan minipack yang lebih hemat dan ekonomis untuk tarif    berlanggganannya</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">18</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">Kami    memiliki&nbsp; beragam&nbsp; tayangan yang menarik untuk paket channel    useetv yang ibu miliki, kalau boleh tau, dirumah lebih sering menononton    tayangan apa pak/ibu? kalau ibu/ Bapakk berkenan kami jelaskan terkait    penawaran dipaket</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">19</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">Ketika    bersama keluarga tayangan atau tontonan apa pak/ bu yang sering di nikmati    bersama? mungkin film / olahraga / tayangan anak? dengan paket channel    (sebutkan nama paket) saya tawarkan ini kedepannya Bapakk akan lebih    menikmati ragam dan refrensi film/ olahraga/ tayangan anak lainnya, jadi    Bapakk/ ibu akan merasakan sensasi baru dalam menikmati channel-channel di    useetv nya&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">20</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">Menurut    Bapak/ibu tanyangan seperti apa yang perlu dihadirkan oleh indihome?</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">21</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">Pak/bu    lebih suka acara olah raga/drama/film?</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">22</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">Tayangan    seperti apa yang sering ditonton keluarga di rumah Bu? Kami memiliki    penawaran paket ch sesuai dengan tayangan yang sering keluarga ibu tonton di    rumah&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">23</td>
                                  <td>MINIPACK</td>
                                  <td width="1124">Untuk    didaerah Bapak/ibu apakah semua channel TV sudah bisa dinikmati pak/ibu?</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">24</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Apakah    anaknya dirumah sering menonton kartun dihari libur pak/bu? Atau lebih suka    tayangan yang edukasi untuk anak pak/bu?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">25</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Apakah    dirumah penggunaan Untuk Chanel TV&nbsp;    aktif pak/buk? Jika boleh kami tahu Chanel tayangan apa yang lebih    dominan di tonton pak/buk?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">26</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Apakah    untuk paket channel yang kami tawarkan sudah sesuai dengan kegemaran Bapakk    atau keluarga Bapakk? Atau mungkin Bapakk ingin dibukakan channel yang    seperti apa, agar kami bantu tawarkan?</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">27</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Apakah    untuk paket channel yang kami tawarkan sudah sesuai dengan kegemaran Bapakk    atau keluarga Bapakk? Atau mungkin Bapakk ingin dibukakan channel yang spt    apa, nanti kami bantu?&nbsp;</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">28</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Bapakk/i    untk saat ini boleh kita ketahui yang paling sangat aktf menonton TV setiap    hari siapa ibu,suka nonton apa ya pak/buk? oleh karena itu saat ini kita ada    penawaran paket chanel yang cukup menarik, di paket chanel (sebutkan nma pket    chanel) apakah boleh kita smpaikan beberapa menit saja untk paket chnel    menarik nya Bapakk/ibu?&nbsp;</td>
                                </tr>
                                <tr height="74">
                                  <td height="74">29</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Bapakk/Ibu    biasanya sering menyukai tayangan yang seperti apa ya Pak/Ibu kalau nonton di    rumah bersama keluarga ? Disini kami ada beberapa paket channel tayangan    seperti berita, drama, olahraga, hiburan, film, komedi, musik, edukasi dan    masih banyak lainnya. Dan disini bisa dinikmati berbagai kalangan ya Pak/Ibu,    seperti pria, wanita, orang tua dan anak-anak. Jadi Bapakk/Ibu nanti bisa    memilih sesuai dg kesukaan Bapakk/Ibu yang bisa dinikmati di layar TV    Bapakk/Ibu sekeluarga.&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">30</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Bapakk/ibu    saat ini kita cek paket useetv ibu masih banyak yang terkunci ya pak/bu kita    ada penawaran yang menarik untuk chanel- channelnya yang bisa ibu nikmati    setiap harinya , kira- kira chanel yang Bapakk/ ibu suka tonton tayangan    seperti apa?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">31</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Bapakk/ibu    selama ini ussetv-nya dipergunakan dengan baik ya, ada keluhan atau ada    tanyangan lain yang ingin ditonton namun masih belum bisa pak/bu?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">32</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Biasanya&nbsp; Bapakk lebih mnyukai tayangn sprti apa y    pak di tvnya? karena kami ada penawaran yang sangat menarik untuk Bapakk    dengan beberapa paket channel&nbsp; pilihan    yang nantinya Bapakk&nbsp; bisa mnikmati    tayangan favorit Bapakk di layar tvnya&nbsp;</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">33</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">bu/pa    saat ini kan untuk useetvnya masih banyak channel yang terkunci ya pa/bu ,    sebelumnya ibu/Bapak dan keluarga lebih menyukai acara spt apa bu saat    ditonton ? saat ini ibu/Bapak diberikan penawaran tambahan paket channel di    useetvnya apakah ibu berkenan kami jelaskan ?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">34</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">pak    saat ini kita cek paket usee tv yang terbuka masih sedikit ya pak, boleh kita    bantu buka kan paket channel nya? kira-kira channel apa saja yang Bapakk    gemari ?</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">35</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">pak/bu    apakah ada tayangan yang Bapakk/ibu sukai selama menggunakan usse tv&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">36</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Pak/bu    jika sedang berkumpul dengan keluarga biasanya menonton untuk tayangan apa ,    karena kami memiliki pilihan untuk paket paket channel yang menarik untuk di    tonton bersama keluarga ?</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">37</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Pak/bu    selama berlangganan indihome tv lebih sering menonton chanel apa?&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">38</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">pak/bu    siapa yang&nbsp; yang suka nonton televisi    dirumah?&nbsp; Karena kami punya banyak    pilihan paket menarik utk paket channel minipack</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">39</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">untuk    ussetv dirumah saat ini apakah sering di pergunakan bu /Bapak? disini ada    berbagai penawaran chanel yang menarik&nbsp;    untuk ibu /Bapak bisa nikmati setiap hari, salah satunya chanel untuk    tayangan sport nya</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">40</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">usse    tv ibu&nbsp; saat ini apakah sering di    pergunakan? karna kita ada berbagai penawaran chanel menarik&nbsp; yang bisa ibu nikmati setiap hari, salah    satunya chanel untuk anak-anak&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">41</td>
                                  <td>MINIPACK&nbsp;</td>
                                  <td width="1124">Yang    sering nonton TV di rumah siapa saja bu?&nbsp;    karena kami menawarkan beberapa paket pilihan paket&nbsp; channel&nbsp;    agar ibu dan keluarga bisa menonton TV sesuai dengan usia dan hobby    anggota keluarga ibu ??&nbsp;&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">42</td>
                                  <td>SMOOA&nbsp;</td>
                                  <td width="1124">Bapakk/Ibu    kalau boleh tau saat ini menggunakan paket data apa untuk internetan diluar    rumah? Saat ini kami ada penawaran untuk bisa menikmati paket hemat    internetan diluar rumah, yang bisa digunakan 3-6 anggota dengan berbagai    pilihan kuota.</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">43</td>
                                  <td>SMOOA&nbsp;</td>
                                  <td width="1124">bu/pak    utk kegiatannya lebih srg dirumah atau diluar rumah?jika diluar rmh    Bapakk/ibu kita tawrkan program terbaru dari telkom paket smooa yang bisa    digunakan ketika ibu/Bapakk srg diluar rumah</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">44</td>
                                  <td>SMOOA&nbsp;</td>
                                  <td width="1124">Maaf    pak untuk saat ini biasanya berapa banyak kuota internet diluar rumah yang    Bapakk dan keluarga gunakan? Karena kami ada program khusus untuk menunjang    kuota internet keluarga Bapakk dengan harga terjangkau yang dibayarkan dalam    satu billing tagihan, boleh kami.jelaskan terlebih dahulu programnya?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">45</td>
                                  <td>SMOOA&nbsp;</td>
                                  <td width="1124">Pak/buk    biasanya jika keluar rumah menggunakan provider apa ? dan biasanya    membutuhkan berapa GB utk penggunaan data inet di setiap bulannya ?&nbsp;</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">46</td>
                                  <td>SMOOA&nbsp;</td>
                                  <td width="1124">paket    data yang digunakan jika diluar rumah ada berapa GB bu? itu untuk satu orang    saja ya bu? ini kami ada penawaran menarik untuk paket data yang bisa    digunakan bersama keluarga dengan harga yang lebih terjangkau dibandingkan    harus beli paket per1 orang, ada 4 paket boleh kami jelaskan bu?</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">47</td>
                                  <td>SMOOA&nbsp;</td>
                                  <td width="1124">Saat    Bapakk/ ibu diluar rumah, biasanya untuk akses internet menggunakan apa?    Disini kami ada beberapa pilihan paket kuota internet, telepon dan sms yang    bisa disesuaikan dengan kebutuhan Bapakk sekeluarga&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">48</td>
                                  <td>SMOOA&nbsp;</td>
                                  <td width="1124">Seperti    yang kita tahu kalau internet sangat berpengaruh terhadap aktivitas kita di    media sosial baik untuk aktivitas kerja, hiburan ataupun aktivitas sosial,    kalau Bapakk dan keluarga kira-kira berapa penggunaan Kuota Internet yang    digunakan untuk perbulannya?</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">49</td>
                                  <td>SMOOA&nbsp;</td>
                                  <td width="1124">untuk    penggunaan internetnya di luar rumah menggunakan provider apa pa/bu? untuk    kuota yang dipergunakan setiap bulannya Bapak/ibu bisa menghabiskan berapa    GB?&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">50</td>
                                  <td>UPGRADE</td>
                                  <td width="1124">Bagaimana    menurut Bapak/ibu dengan kebutuhan internet saat ini?</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">51</td>
                                  <td>UPGRADE</td>
                                  <td width="1124">Berapa    orang yang menggunakan inet di rumah bu?&nbsp;    kami memiliki paket penawaran sesuai&nbsp;    banyak nya jumlah pengguna inet di rumah ibu , dengan harga yang    bervariasi , ibu bisa memilih paket sesuai dengan kebutuhan ibu&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">52</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Bagaimana    Pa/Bu Paket yang saya tawarkan sudah cocok dengan kebutuhan akses digital    Pa/Bu untuk akses internet lebih cepat?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">53</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Bapakk    / ibu untuk inetnya di rumah di pergunakan brpa device, disini kami ada    penawaran menarik untuk di naikkan kecepatannya ke yang lebih atas dan bisa    stabil di pemakaian di atasnya, apakah Bapakk / ibu berkenan kami lanjutkan    penawarannya?&nbsp;</td>
                                </tr>
                                <tr height="37">
                                  <td height="37">54</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Bapakk    / ibu untuk inetnya di rumah siapa saja yang menggunakan? disini kami ada    penawaran menarik untuk di naikkan kecepatannya agar lebih stabil, apakah    Bapakk / ibu berkenan kami lanjutkan penawarannya?</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">55</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Bapakk/i    maaf sebelumnya , kalau kami lihat didata sekrang Bapakk/i menggunakan    kecepatan (sebutkan kecepatan inet), untuk kecepatan yang dipergunakan    sekarang apakah cukup membantu ibu dalam beraktifitas penggunaan internetnya    sehari hari?, kalau Bapakk/i membutuhkan disini kita ada penawaran    peningkatan kecepatan internet bpak/i 9sebutkan kecepatan inet</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">56</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Bapakk/ibu    untuk saat ini kecepatan internetnya di 20 mbps, klo boleh tau penggunaannya    biasa untuk akses apa ya? browsing kah, streaming kah, main games atau nonton    youtube kah? Saat ini kami ada penawaran untuk upgrade kecepatannya bu/pak    agar akses internetnya lebih cepat lagi&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">57</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Kecepatan    internet baoak. Ibu sekarang di 20mbps, saat ini digunakan untuk berapa    perangkat pak/bu?</td>
                                </tr>
                                <tr height="55">
                                  <td height="55">58</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Maaf    pak sebelumnya Bapakk informasikan kec inet nya lambat. Berapa perangkat atau    device yang dgunakan oleh semua keluarga Bapakk? (pelanggan jawab). Disini    ada penawaran menarik kami tingkatkan kec dmn penggunaan device lbh banyak dr    sebelumnya shg menghindari kedepannya buffering dan lelet lemot lagi pak.    Selain itu upelangganoad dan donload kami tingkatkan&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">59</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Pak    untuk kecepatan internet Bapakk yang saat ini, biasanya di gunakan berapa    perangkat pak di sambungkan, apakah cukup pak?&nbsp;</td>
                                </tr>
                                <tr height="18">
                                  <td height="18">60</td>
                                  <td>UPGRADE&nbsp;</td>
                                  <td width="1124">Pak/bu    biasanya untuk internetnya digunakan berapa orang atau berapa perangkat bu    dirumah?&nbsp;</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="127">
                                <col width="297">
                                <col width="848">
                                <tr height="20">
                                  <td height="20" width="127"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="297"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="848"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="127">ALL PRODUK</td>
                                  <td width="297">Menolak    diawal sebelum dilakukan penawaran</td>
                                  <td width="848">kita    ada penawaran menarik pak, yang akan membuat bapak dan keluarga lebih nyaman    dirumah, krn penawaran ini juga tidak semua pelanggan kita hubungi pak</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="127">ALL PRODUK</td>
                                  <td width="297">Menolak    diawal sebelum dilakukan penawaran</td>
                                  <td width="848">Mhn    maaf pak kita memang mau melakukan penawaran namun bpk/ibu tdk perlu kuatir    dsini tidak ada unsur pemaksaan krn semua keputusan selanjutnya kami serahkan    kpd pelangan namun izinkan kami untuk menyampaikan beberapa informasi terkait    produk dr kami agar sewaktu2 bpk/Ibu membutuhkan sdh tau update produk dr    kami...</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="127">ALL PRODUK</td>
                                  <td width="297">Menolak    diawal sebelum dilakukan penawaran</td>
                                  <td width="848">Mohon    maaf pak ini kami menyampaikan penawaran gunanya untuk bisa memberikan    pendangan yang lain mengenai produck kami sehingga menambah variasi dalam    paketnya bapak atau ibu</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="127">ALL PRODUK</td>
                                  <td width="297">Menolak    diawal sebelum dilakukan penawaran</td>
                                  <td width="848">maaf    pak/bu atas ketidak nyamanan yang terjadi (jika sebelumny ada keluhan), saya    boleh minta waktuny sebentar ya pak bu, tujuan saya menghubungi untuk    menyampaiakan penawaran yang diberikan telkom agar bapak dan ibu lebih nyaman    dalam menggunakan indihomenya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="127">ALL PRODUK</td>
                                  <td width="297">Menolak    diawal sebelum dilakukan penawaran</td>
                                  <td width="848">mohon    maaf bapak mungkin bisa kami jelaskan terlebih dahulu kabar baik dari telkom    ini pak, mungkin apa yang akan saya sampaikan sangat bermanfaat atau    menguntungkan bapak, boleh minta waktunya sebentar saja pak, sayang sekali    jika kabar baik ini dilewatkan begitu saja tanpa bapak ketahui keuntungannya    buat bapak dan keluarga</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="127">ALL PRODUK</td>
                                  <td width="297">Menolak    diawal sebelum dilakukan penawaran</td>
                                  <td width="848">Kalau    boleh tau kenapa Bapa/Ibu menolak penawaran dari kami? Sementara kami belum    menyampaikan kelebihan dari produk kami,Apakah boleh saya lanjutkan    penawarannya? Saya jamin Bapak?Ibu akan tertarik.., Tarif nya murah loh pa/bu    dan benefitnya bisa dinikmati bapak/ibu beserta keluarag</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="127">ALL PRODUK</td>
                                  <td width="297">Pelanggan    tidak mengerti</td>
                                  <td width="848">Bisa    kita jelaskan kembali pak/bu untuk point yg kurang jelas? Atau bapak/ibu mau    kita jelaskan dipoint yg mana,krn benefit yg kita sampaian ini sangat menarik</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="127">ALL PRODUK</td>
                                  <td width="297">Pelanggan    tidak mengerti</td>
                                  <td width="848">mhn    maaf pak/buk tidak mengertinya mengenai tarif atau benefit produknya. saat pl    menjawab keduanya atau salah satu, maka agent harus secara jelas menjelaskan    mengenai produk yg ditawarkan, jadi, jika bapak/ibu bersedia berlangganan    produk yg kami tawarkan manfaat nya akan banyak sekali. misalnya produk xxxx    , lalu infokan keunggulan produknya ( ex : UPGRAGEkecepatan bapak/ibu akan    meningkat dan inet nya tidak lambat )&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="127">ALL PRODUK</td>
                                  <td width="297">Pelanggan    tidak mengerti</td>
                                  <td width="848">mohon    maaf pak , untuk yg blm jelas yg bagian mana pak, agar bisa saya jelaskan    ulang, ulangi keunggulan produk dan tarifnya</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="127">ALL PRODUK</td>
                                  <td width="297">Pelanggan    tidak mengerti</td>
                                  <td width="848">Pak    / bu, boleh kami jelaskan secara detail mengenail benefit dan tarif dari    produck yang kami tawarkan. Kami yakin bapak / ibu akan tertarik karena    benefit yang akan diperoleh jauh lebih banyak namun secara penambahan cukup    terjangkau</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="127">ALL PRODUK</td>
                                  <td width="297">Pelanggan    tidak mengerti</td>
                                  <td width="848">maaf    ibu/bapak boleh dibantu tidak paham dibagian mana? Saya jelaskan ulang    kembali ya pak/bu</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="127">ALL PRODUK</td>
                                  <td width="297">Pelanggan    tidak mengerti</td>
                                  <td width="848">mohon    maaf&nbsp; bapak yang kurang dimengerti atau    kurang dipahami, dibagian mananya, bisa saya jelaskan kembali (tunggu respon    pelanggan) , atau mungkin ada anggota keluarga lain yang bisa kami hubungi    untuk kami jelaskan kembali terkait penawaran dari telkom dan untuk anggota    keluarga yang kami hubungi nanti apakah juga berwenang memutuskan persetujuan    penawaran yang kami sampaikan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="127">ALL PRODUK</td>
                                  <td width="297">Pelanggan    tidak mengerti</td>
                                  <td width="848">Boleh    saya ulangi terkait kelebihan Produk yang kami tawarkan?<br>
                                    Dari mulai Tarif dan benefit nya...,karena produk yang saya tawarkan    menguntungkan Bpak/Ibu dan keluarga,<br>
                                    selain itu tarif yang di berikan pun sangat hemat...</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="127">ALL PRODUK</td>
                                  <td width="297">Sudah    berlangganan di nomor lain</td>
                                  <td width="848">boleh    dioptimalkan juga pak dinomor ini, krn jika swaktu2 di nomor lain ada    kendala, maka bapak dan keluarga tetap bisa menikmati nya di nomor ini, dan    seluruh keluarga dirumah juga bisa menggunakannya lebih optimal</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="127">ALL PRODUK</td>
                                  <td width="297">Sudah    berlangganan di nomor lain</td>
                                  <td width="848">dr    berlangganan di no lain , bpk bisa tau manfaat yg bisa bpk dapatkan , maka    sangat disayangkan jika dilewatkan pak , krn dgn penambahan XX rupiah bpk    bisa mendapat manfaat yg besar ( baru diinfokan keunggulan produknya )&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="127">ALL PRODUK</td>
                                  <td width="297">Sudah    berlangganan di nomor lain</td>
                                  <td width="848">aktivitas    bapak / ibu kan lumayan tinggi jadi bisa digunakan untuk menunjang aktivitas    mobile dan dari segi tarif pun cukup terjangkau juga hanya menambahkan Rp xxx    Ribu + PPN 10%</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="127">ALL PRODUK</td>
                                  <td width="297">Sudah    berlangganan di nomor lain</td>
                                  <td width="848">sdh    menggunakan dinomer lain, berarti ibu/bapak kan sudah tahu manfaat dan    keunggulannya pak/bu. olah karena itu jangan&nbsp;    dilewatkan penawarannya pak/bu</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="127">ALL PRODUK</td>
                                  <td width="297">Sudah    berlangganan di nomor lain</td>
                                  <td width="848">meskipun    sudah berlangganan di nomer A boleh pak ditambahkan lagi di nomer B, jadi    fungsi dan maanfaat yang bapak pergunakan bisa lebih optimal lagi, tidak    harus menunggu salah satu nomer, misal ada kendala di nomer A bapak dan    keluarga tetap bisa pergunakan di nomer B, karena fungsi yang dimiliki sama</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="127">ALL PRODUK</td>
                                  <td width="297">Sudah    berlangganan di nomor lain</td>
                                  <td width="848">Owh,    tidak apa2 pa/bu..<br>
                                    Disaat bapak/ibu memang aktifitas penggunaan Internetnya lebih banyak, jadi    aktifitas bapak/ibu tidak akan terhambat<br>
                                    selain itu juga tarif yang kami tawarkan sangat murah dan hemat...</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>Update 9 April 2021 </p>
						      <table border="3" cellpadding="0" cellspacing="0">
                                <col width="76">
                                <col width="155">
                                <col width="597">
                                <tr height="20">
                                  <td height="20" width="112"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="255"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="713"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="112">All Produk</td>
                                  <td width="255">Belum    perlu</td>
                                  <td width="713">Mumpung    bapak mendapatkan kesempatan penawaran ini pak, yg belum tentu semua    pelanggan mendapatkan penawaran yg sama, jadi bapak bisa membuktikan sendiri    manfaat dr benefit program yg kami sampaikan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="112">All Produk</td>
                                  <td width="255">Belum    perlu</td>
                                  <td width="713">Untuk    dipertimbangkan pk/ibu dari produk yang kami sampaikan tadi dengan Tarif yang    kita tawarkan belum tentu di dapatkan di tempat lain.</td>
                                </tr>
                              </table>

							<p>&nbsp;</p>
						      	<p>Update 29 OKTOBER 2021 </p>
						      	<table border="3" cellpadding="0" cellspacing="0">
                                <col width="76">
                                <col width="155">
                                <col width="597">
                                <tr height="20">
                                  <td height="20" width="112"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="255"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="713"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="112">All Produk</td>
                                  <td width="255">HARGA    MAHAL</td>
                                  <td width="713">Sebetulnya tidak mahal pak/ bu, sesuai dengan benefit yang akan bapak/ ibu dapatkan.(ulangi kembali benefit produk)</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="112">All Produk</td>
                                  <td width="255">HARGA    MAHAL</td>
                                  <td width="713">Sebetulnya tidak mahal pak/ bu, saya coba jelaskan kembali benefit yang akan bapak/ ibu dapatkan ya (ulangi kebali benefit produk)</td>
                                </tr>
				    <tr height="40">
                                  <td height="40" width="112">All Produk</td>
                                  <td width="255">Belum    perlu</td>
                                  <td width="713">Untuk penawaran yang kita berikan ini sudah kita sesuaikan dengan kebutuhan bapak/ibu. Kalau kita cek untuk tagihan bpk/ibu yg sebelumnya sekitar .... kalau yg saat ini kita tawarkan penambahan hanya 95k plus ppn 10% diluar penggunaan lain dan fitur yg baru aktif lainnya. Namun Kecepatannya sudah kita naikkan 30mb kedepannya sudah bisa bapak maksimalkan penggunaannya karna tidak lelet lambat maupun terputus-putus</td>
                                </tr>

                              </table>

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