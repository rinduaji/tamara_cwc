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
						      <p>Rule : <a href="ref_minipack.php">Minipack</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php"></a><a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a><a href="ref_downgrade.php"></a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_stb.php">STB</a></p>
						      <p>&nbsp;</p>
						      <p>DAPROS TIDAK SUPPORT</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="73">
                                <col width="113">
                                <col width="98">
                                <col width="120" span="2">
                                <tr height="19">
                                  <td height="19" width="73"><div align="center">1</div></td>
                                  <td colspan="4">Paket beririsan</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td width="113"><div align="center"><strong>NO</strong></div></td>
                                  <td width="98"><div align="center"><strong>PAKET 1</strong></div></td>
                                  <td width="120"><div align="center"><strong>PAKET 2</strong></div></td>
                                  <td width="120"><div align="center"><strong>KETERANGAN</strong></div></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">1</div></td>
                                  <td>esensial</td>
                                  <td>indisport3</td>
                                  <td>NOT COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">2</div></td>
                                  <td>indisport3</td>
                                  <td>esensial</td>
                                  <td>NOT COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">3</div></td>
                                  <td>entry</td>
                                  <td>esensial</td>
                                  <td>COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">4</div></td>
                                  <td>NEW BASIC</td>
                                  <td>esensial</td>
                                  <td>COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">5</div></td>
                                  <td>indiaction</td>
                                  <td>esensial</td>
                                  <td>COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">6</div></td>
                                  <td>combosport</td>
                                  <td>esensial</td>
                                  <td>COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">7</div></td>
                                  <td>Indikorea</td>
                                  <td>Inditainment1</td>
                                  <td>COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">8</div></td>
                                  <td>Indikorea</td>
                                  <td>TVn</td>
                                  <td>COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">9</div></td>
                                  <td>Extra HD</td>
                                  <td>esensial</td>
                                  <td>COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">10</div></td>
                                  <td>IndiJunior Bright</td>
                                  <td>esensial</td>
                                  <td>COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">11</div></td>
                                  <td>Indi Basketball</td>
                                  <td>IndiSport&nbsp;</td>
                                  <td>NOT COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">12</div></td>
                                  <td>Indi Basketball</td>
                                  <td>ComboSport</td>
                                  <td>NOT COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">13</div></td>
                                  <td>IndiSport&nbsp;</td>
                                  <td>ComboSport</td>
                                  <td>NOT COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td><div align="center">14</div></td>
                                  <td>IndiSport2</td>
                                  <td>ComboSport</td>
                                  <td>NOT COMPATIBLE</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center">2</div></td>
                                  <td colspan="4">Indihome passive (usse) tidak    support</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center">3</div></td>
                                  <td colspan="4">PDD tidak boleh</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="20">
                                  <td height="20" width="138"><div align="center"><strong>RULE</strong></div></td>
                                  <td width="248"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                  <td width="698"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">MINIPACK</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">Apabila    bpk mengaktifkan lwt tv, prosesnya tdk bisa langsung karena nanti akan    diverifikasi juga oleh tim telkom yg lain, bpk perlu dihubungi lagi setelah    permintaan bpk masuk lewat sistem sehingga bpk perlu meluangkan wkt kembali    utk diverifikasi. <br>
                                  Sedangkan apabila melalui kami, prosesnya bisa lebih cepat</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">MINIPACK</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">benar    bapak bisa aktifkan sendiri, bapak bisa melihat langsung bermacam nomer    chanel dan nama chanelnya, tetapi bapak belum bisa mengetahui langsung isi    dari chanel tersebut pak<br>
                                  tujuan kami menawarkan secara langsung disini agar bapak tidak salah pilih,    agar bapak bisa mendapatkan chanel hiburan seperti yang bapak harapkan,    tontonan yang lebih fariatif, mungkin bapak hobi petualangan kami bisa    merekomendasikan chanel yang bapak butuhkan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">Apabila    bpk berlanggan melalui kami, maka kami bisa jelaskan lebih detail channel per    channelnya, karena klo melalui tv hanya tertera nama channelnya saja</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">MINIPACK</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">iya    pak , sebenarnya bs bpk aktifkan sendiri tp pasti memerlukan waktu dan    pastinya bpk butuh info tentang isi / diskripsi chanel yg bpk inginkan sblm    mengaktifkan supaya tdk salah mengaktifkan chanel <br>
                                    tp jika penawaran lewat kami bpk tinggal menginfokan bpk menginginkan    chanel apa dan manfaat chanel yg ingin bpk ketahui maka kita akan jelaskan    lengkap beserta manfaatnya , <br>
                                  jadi bpk bisa memilih chanel sesuai dgn kebutuhan bpk dan tinggal menunggu    maka chanelnya yg bpk butuhkan / bpk inginkan diaktifkan saja</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">syg    sekali bapak jika dilewatkan krn jika penawaran dari kita bapak /ibu hanya    restart decoder saja paket yg kita tawarkan sudah aktif, dan kita juga bisa    jelaskan channel2 dan tayangan yg akan bapak/ibu dapatkan dari channel yg    kita tawarkan ini , dan bpk/ibu bisa tanyakan variasi channel lain yg    keluarga inginkan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">memang    benar bapak bisa langsung aktifkan via tv nya namun kalau melalui saya, saya    bisa langsung jelaskan ke bapak maanfaat dari channelny2 pak, jadi bpk tidak    salah pilih paket pak</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">Di    penawaran kami lebih cepat dan simple dan di kami juga bisa menyampaikan    mengenai deskripsi masing2 chanel pak, jadi bapak atau ibu bisa memahami    mengenai paket yanga kami tawarkan dan fungsinya seperti apa.......</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">MINIPACK</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">Untuk    berlangganan CH yang bapak inginkan memang sudah bisa melalui TV,    tetapi<br>
                                  kalau melalui TV informasi mengenai programya sangat terbatas, sementara    jika melalui penawaran dari kami bapak/ibu mendapatkan penjelasan sesuai    dengan CH yang bapak/ibu inginkan dan cukup bapak/ibu menyetujui penawaran    kami, dalam waktu 1x24 CH yang bapak inginkan sudah dapat dinikmati    sekeluarga, cukup restart decodernya saja...</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Kalau    youtube tdk ada pengawasan dari orang tua bisa mengkhawatirkan pak..krna    konten dan tayangannya bebas di akses oleh anak-anak, tetapi utk channel    disney, dll kan full kartun dan tayangan nya mendidik. Jd bapak tdk perlu    khawatir jika meninggalkan putra-putrinya saat menonton tv</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">program yg kami sampaikan tidak setiap saat kami tawarkan belum tentu dilain waktu bpk/ibu masih mendapatkan program yg sama dgn tarif khususnya</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Ibu,kebetulan    untuk program yang saya tawarkan sifatnya penawaran khusus ya, bu, Jadi tarif    yg kita berikan juga tarif khusus dan tidak semua pelanggan mendapatkan    penawaran menarik ini&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">&nbsp;tidak semua pelanggan kita berikan penawaran    menarik ini ,bpk/ibu beserta keluarga juga sdh bisa menikmati channel    tambahan favorit keluarga dirumah, jadi tdk bosan dengan tanyangan yg sudah    ada saat ini saja&nbsp;, dan untuk penambahan tarifnya juga cukup hemat hanya    rp.xx</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">jika    bapak bersedia berlangganan bapak bisa membandingkan kwalitas dan chanel yang    bapak miliki, disini bapak akan mendapatkan fariasi chanel yang lebih banyak,    tentunya akan menambah reverensi keluarga juga untuk menikmati tontonan yang    berkwalitas, program ini sangat bagus dan kami berharap bapak akan tetap    berlangganan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">bapak    bisa memanfaatkan program ini dengan penambahan biaya&hellip;..,program ini hanya di    tawarkan kepada pelanggan pelanggan tertentu saja, ami yakin program yg kami    tawarkan saat ini adalah salah satu program yang&nbsp; bermanfaat untuk    ibu/bapak dan keluarga nikmati</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">penawaran    kami sangat bagus sayang kalau dilewatkan, bapak akan mendapatkan variasi    chanel yang lebih banyak</td>
                                </tr>
                                
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">mohon    maaf ibu/bpk alasannya sendiri kenapa ya bu/pak? karena kan disini channel    nya pun sudah hd pak dimana kualitas gambar dan suaranya sudah sangat jernih    spt tampilan dibioskop jadi akan sangat disayangkan sekali pak/bu melewatkan    penawarannya,karena tdk semua pelanggan mendapatkan penawaran yang sama    pak/bu.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Untuk paket Xtra HD selain bapak bisa menikmati (sebutkan jumlah Channel), untuk tampilannya juga sudah di rubah menjadi HD, sehingga untuk tampilan dan suaranya jauh lebih baik</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Disini    bapak memiliki anak yang masih kecil? disini dengan channel indikids lite ,    untuk anak bapak bisa mendapatkan hiburan dari Disney Junior dan Disney    channel, jadi bapak lebih bisa mengawasi anak bapak tanpa harus main di luar.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">apakah    tidak sayang pak/bu jika bapak/ibu melewatkan penawaran dari telkom    ini?..disinikan untuk no indihome bapak/ibu resmi mendapatkan penawaran dari    telkom ut bisa menikmati channel unggulan dari indihome&hellip;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Sayang    sekali pak,jika programnya dilewatkan , kita yakin programnya ini bermanfaat    untuk bpk dan keluarga dirumah karena tayangan nya sudah lebih bervariasi    pak&nbsp; dan untuk tayanganya bisa ditonton    semua kalangan dlm keluarga pak.&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">biasanya    menggunakan / nonton useetv pada saat liburan saja atau bagaimana bapak&hellip;    (tunggu respon pelanggan), dengan program yang kami tawarkan ini maka bapak    dan keluarga berkesempatan untuk menonton tayangan2 TV yg lbh beraneka ragam    krn&nbsp; bapak akan mendapatkan chanel yang lebih bervariatif dari yang    bapak miliki saat ini</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Sayang    sekali bpk,&nbsp; krna disini bpk&nbsp; pelanggan terpilih kita, tdak semua    pelanggan yg mendapatkan kesempatan ini bpk,&nbsp; bapak akan mendapatkan    chanel yang lebih berfariatif dari segi harga i harga yang kami sampaikan    sangat hemat bapak karena tidak dihitung per chanel, dengan penambahan XX    rupiah plus ppn 10 persen tiap bulan&nbsp;&nbsp; Bapak bersama keluarga sudah    mendapatkan penambahan XX Chanel, sehingga tontonan bapak lebih berfariatif</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Mungkin    saat ini ibu blm begitu memerlukan tp&nbsp; kdpnnya jika ibu memerlukan    sewaktu2, ibu tdk perlu antri atau menghubungi chanel telkom untuk diberikan    penawaran ini, krn tdk smua pelanggan mendapatkan penawaran ini, dr segi    tarif untuk harga yang kami sampaikan sangat hemat ibu karena tidak dihitung    per chanel, dengan penambahan xx rupiah plus ppn 10 persen &hellip;. ibu bersama    keluarga sudah mendapatkan penambahan xx Chanel, sehingga tontonan bapak    lebih bervariasi</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">yang    saya tawarkan saat ini suda terjamin mutu dan gambarnya bu karna sudah HD    serta tarif yang di berikan lebih terjangaku dibanding ibu nonton serial di    bioskop atau striming melalui internet.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Mungkin    saat ini&nbsp; blm begitu memerlukan tp&nbsp; kdpnnya jika&nbsp; memerlukan    sewaktu2, tdk perlu antri atau menghubungi chanel telkom untuk diberikan    penawaran ini , tidak semua pelanggan mendapatkan penawaran spesial dengan    harga spesial juga&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">channel    atau tayangan kami memiliki keunggulan bisa disimpan dan diputar ulang sesuai    dengan waktu yang diinginkan pak, maksimal sampai 7 hari. Jadi kalau bpk/ibu    tidak sedang di rumah, tayangannya bisa diputar saat bpk/ibu sudah    kembali&quot;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">yang    kami tawarkan saat ini kualitasnya HD pak (high definition), jadi tayangannya    lebih jernih, lebih bagus&nbsp;</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Pengunaan    indihomenya sdh 3P bu..sayang jika tayangan tvnya tdk&nbsp;    dipergunakan&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Jika    jarang dirumah pak/ibu justru bisa memanfaatkan fitur TV on demand dimana    kita bisa menonton tayangan tV sd 7 hari kebelakang dan jika pak/ibu sibuk    bekerja ini bisa digunakan untuk refresh saat liburan shg pada saat masuk    kerja lagi sdh fresh.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">MINIPACK</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">&nbsp;chanel    yang kami tawarkan adalah chanel khusus untuk pelnggan terpilih saja yang    masuk ke prospek spesial, untuk itu kami wajib menyampaikan&nbsp; pnawaran yg    sangat penting ini kpd bp/ibu , agar kiranya bisa digunakan sebagai bahan    pertimbangan referensi chanel tambahan yang sangat bermanfaat serta&nbsp;    meningkatkan pengalaman&nbsp; acara yang lebih banyak untuk keluarga    bp/ibu&nbsp;&nbsp; seperti&nbsp; chanel serial drama, berita internasional,    olahraga, kartun, info bisnis dll yang belum ada di paket bp/ibu saat ini    gunakan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">cukup menambahkan 20rbu + ppn 10% setiap bulan dan berlaku selama berlangganan, dan untuk penambahannyapun tetap ( tidak akan ada kenaikan lagi kecuali bpk berganti paket / menambah paket ) </td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Untuk&nbsp; Indinews Bapak hanya menambahkan 15K&nbsp;    dan bapak sudah bisa menyaksikan channel CNN&nbsp;    yg berisi berita baik dalam maupun luar negri, tentunya itu lebih    hemat dibandingkan bapak harus berlangganan koran setiap harinya. Dan    beritanyapun lebih up to date</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Karena    ini bukan promo jadi tarif penambahannya tetap di XX rupiah tiap bulan&nbsp; (tidak naik dan tidak turun kecuali bpk    berganti paket / menambah paket )&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">bpk    tdk sayang jika programnya dilewatkan krn dr segi&nbsp; harga yang kami    sampaikan ini sangat hemat bapak karena tidak dihitung per chanel, dengan    penambahan XX rupiah plus ppn 10% Bapak bersama keluarga sudah mendapatkan    penambahan sejumalah XX Chanel, sehingga tontonan bapak lebih bervariatif    kedpnnya&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Kan sayang Pak/Bu jika dilewatkan programnya, karena tidak semua pelanggan mendapatkan  penawaran ini. Dengan penambahan tarif yang cukup hemat, hanya dengan XX +ppn 10% per bulannya, Bapak/Ibu sudah bisa menikmati programnya yg kita pastikan berkualitas dan bermanfaat ya Pak/Bu.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">boleh    dibantu alasan tdk ingin dipasangkan paketnya pak/bu ?? kan sayang sekali    karena tidak semua pelanggan mendapatkan&nbsp;    penawaran ini. Dengan penambahan tarif yang cukup hemat, hanya dengan    Rp X rb + ppn 10% per bulannya, bpk/ibu sudah bisa menikmati program unggulan    yg menarik dan innovatif bersama keluarga</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">harga    yang kami sampaikan sangat hemat bapak karena tidak dihitung per chanel,    dengan penambahan &hellip;. Bapak bersama keluarga sudah mendapatkan    penambahan&hellip;.&nbsp;</td>
                                </tr>
                                <tr height="300">
                                  <td height="300" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">baik    bp/ibu, jika Jarang Digunakan karena jarang dirumah,, useetv saat ini sudah    ada layanan USEETV GO, sebuah aplikasi berbasis Android dan IOS , Bisa di    akses di smartphone ataupun tablet dengan koneksi internet broadband. dengan    spesifikasi&nbsp; : Jaringan 3G/4G<br>
                                    &nbsp;Android versi 4.1 (jellybean) atau lebih tinggi.<br>
                                    &nbsp;iOS IOS versi 8.0 atau lebih tinggi, jadi ibu bisa melihat tayangan    chanel tambahan yang kami tawarkan tadi pada aplikasi tersebut kapanpun dan    dimanapun bp/ibu brada , atau bisa di akses oleh keluarga ibu seperti :    Education : merupakan konten-konten yang berisi video&nbsp; pengajaran    akademis dan video pengetahuan umum.<br>
                                    Festival Film : FIlm-film yang diproduksi di luar sistem studio film&nbsp;    utama atau diproduksi dan didistribusikan oleh lembaga hiburan&nbsp;    independen.<br>
                                    Kids : Berisi konten video edukasi untuk balita, juga film anak-anak yang    dapat ditonton sampai dengan usia 12 tahun.<br>
                                    Music : Berisi video live performing para penyanyi Indonesia&nbsp; pada    suatu event<br>
                                    Religion : Berisi konten-konten islami yang meliputi Kuliah&nbsp; Ramadhan,    Fiqih, dan cara cepat membaca Al-Quran<br>
                                    Tourism : Video-video yang memuat keindahan Indonesia dari&nbsp; sisi-sisi    tertentu.<br>
                                  Sinetron : Berisi sinetron berjudul Nurlela dalam 6 episode (Sudah tidak    dimunculkan)</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Mungkin    kemarin2 bpk/ibu jarang menggunakan karena channelnya masih terbatas, dengan    penambahan channel (sebutkan penawaran paket minipacknya) saya pastikan    Bpk/Ibu jadi lebih menarik untuk menonton useetvnya</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Untuk    Channel yang kami tawarkan ini tidak hanya dapat dinikamati oleh bapak, tp    juga dapat diikamati oleh keluarga bapak, jadi sangat di sayangkan jika bapak    tidak berlangganan&nbsp; Channel yang kami tawarkan untuk saat ini</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Mungkin    untuk bapak jarang menonton untuk paket channel yang kami tawarkan, tapi kami    yakin kalau untuk berita ,pasti bapak tidak&nbsp; akan melewatkannya, karna    Channel CNN kami sangat up to date dan biaya berlangganannya hanya 15k saja    bapak perbulannya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Pak/bu program ini kami berikan setiap bulan dan setiap hari selama 24 jam penuh. Jadi kalau misalnya bpk/ibu sudah di rumah atau sedang libur, bpk/ibu bisa menonton tayangan ini dgn keluarga bpk/ibu</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">2.    kan kalo menggunakan youtube nanti bisa bufering, menggangu kenyamana bapak    dlm menonton dan tampilannya kecil. Kalo menggunakan useetv nya kan tdk    bufering dan tampilannya lebih besar jadi bisa lebih puas menontonya dan bisa    menikamati layanan tv on demand, jd bapak&nbsp; tdk perku khawatir kalo bapak    melewatkan tayangan kesayangan yg bpk sukai,</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">digali&nbsp;    hobby atau kesukaan menonton saat waktu luang apa?</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">dengan    program yang kami tawarkan ini jika bapak dan keluarga berkesempatan untuk    menonton maka bapak akan mendapatkan chanel yang lebih berfariatif dari yang    bapak miliki saat ini&quot;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Apakah tidak sayang pak, kalau jarang di tonton, namun tiap bulannya kan bapak bayar full. oleh karena itu, bapak ditawarkan untuk dibukakan channel-channel tadi, supaya nanti tayangannya tidak membosankan dan lebih bervariasi, sehingga bapak bisa lebih menikmati fasilitas indihomenya. juga kan bisa dinikmati ketika bapak pulang kerja, atau  kumpul bersama keluarga di rumah</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Justru    itu pak, paket nya bpk kan sudah 3P ya, ada telp, internet dan UseeTV, nanti    dengan channel MINIPACK ini bapak sudah bisa menikmati channel yang program    nya beragam dan kami jamin kualitasnya, jadi dengan harga yang sangat    terjangkau bpk/ibu tidak perlu keluar rumah untuk bisa mendapatkan hiburan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Baik    B/I sebelumnya mohon maaf kalau untuk YouTube tayangannya tidak ada filter    apalagi kalau yang nonton anak B/I dan UseeTV sudah memiliki fitur untuk    filter tayangan untuk anak sehingga orang tua bisa mengontrol</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Sangat    disayangkan Bapak/Ibu jika menolak penawaran dari kami, karena tayang dari    Useetv yang kami tawarkan sangat bagus dan bermanfaat bagi keluarga Bapa/Ibu    terutama anak-anak ibu, dan anak-anak Bapa/Ibu pun akan merasa nyaman    diam/tinggal di rumah karena sudah di fasilitasi Film-film yang sudah cukup    bagus.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">channel    atau tayangan kami memiliki keunggulan bisa disimpan dan diputar ulang sesuai    dengan waktu yang diinginkan pak/bu, maksimal sampai 7 hari. Jadi kalau    bpk/ibu tidak sedang di rumah, tayangannya bisa diputar saat bpk/ibu sudah    kembali&quot;</td>
                                </tr>
                                <tr height="180">
                                  <td height="180" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">baik bp/ibu, jika Jarang Digunakan karena jarang dirumah,, useetv saat ini sudah ada layanan Useetv go, USeeTV go merupakan salah satu media untuk mengakses USeeTV melalui Gadget/PC , bapak/ibu bisa download aplikasi Useetv go di playstor atau dialamat web useetv.com. Dimana pelanggan dapat melakukan streaming video film, Live TV, ataupun TV on Demand.<br>
                                  Dengan adanya Media ini, pelanggan dapat mengakses UseeTv dimanapun dan kapanpun. UseeTV dapat dinikmati diseluruh area selama terkoneksi dengan internet dan paket yang kami tawarkan pun jika ibu bersedia maka juga bisa dinikmati kapanpun dan dimanapun ibu berada</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Tidak    sayang, pak/bu no bpk/ibu sudah 3P ada tlpn, inet dan UseeTV, oleh karena itu    no bpk/ibu saat ini diberikan penawaran untuk bisa menonton tayangan2 dari    paket (sebut nama paket) dan tayangannya ini lebih variatif dan edukatif    sehingga bpk/ibu bisa menggunakan indihomenya secara maksimal</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Bpk/ibu    program ini kami berikan setiap bulan dan setiap hari selama 24 jam. Jadi    kalau misalnya bpk/ibu sudah di rumah atau sedang libur, bpk/ibu bisa    menonton tayangan useeTV bersama keluarga</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Jadi    kedepannya bpk/ibu bisa menonton tayangan yg menarik dari useetv krn ini    sayang sekali, bapak/ibu sudah membayarkan tagihan useetvnya tetapi tidak    memanfaatkannya. Nanti dengan paket (sebut nama channel) bpk/ibu sudah dapat    menonton program yang beragam dan tentunya dengan harga yang sangat    terjangkau&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">MINIPACK</td>
                                  <td width="248">KECEWA    DENGAN TELKOM</td>
                                  <td width="698">mohon    maaf sebelumnya pak/bu atas ketidaknyamanan yang bpk/ibu rasakan, namun saat    ini Telkom selalu berupaya untuk memperbaiki kualiltas layanannya, dan karena    ini programnya adalah penawaran , bukan diberikan kepada semua pelanggan    telkom jdi sangat disayangkan jika programnya dilewatkan.&nbsp;&nbsp;&nbsp;    program yang kami tawarkan ini cukup bervariasi mulai dari penambahan XX ribu    + ppn 10% yang bisa disesuaikan dengan kebutuhan bapak dan keluarga</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">KECEWA    DENGAN TELKOM</td>
                                  <td width="698">Mohon    maaf atas ketidak-nyamanannya bpk/ibu jika ada kendala selain dgn hub 147,    bpk/ibu dapat melaporkan dari aplikasi myindihome, sosmed (@telkomcare)atau    datang langsung ke plasa telkom, sehingga keluhan bapak/ibu dapat langsung    ditindaklanjuti dengan cepat</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">Bpk/Ibu    merupakan pelanggan&nbsp; indihome yang    sudah&nbsp; cukup lama, namun saat ini&nbsp;&nbsp; channelnya yang aktif masih sama seperti    pertama kali di pasangkan, oleh karena itu saat ini bpk/ibu diberikan    penawaran (sebutkan nama paket dan nama channel nya),&nbsp; nanti bpk/ibu sudah bisa menonton channel    yang lebih variatif</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">MINIPACK</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">Bpk/ibu    sebagai pelanggan khusus, tidak di kenakan tarif per channel lagi tapi kita    jadikan satu paket untuk&nbsp; channelnya di    paket (sebut nama paketnya) hanya dgn penambahan xxx (infokan tarif    berlangganan dgn lengkap)</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">MINIPACK</td>
                                  <td width="248">TIDAK    MENARIK</td>
                                  <td width="698">Mohon    maaf atas ketidak-nyamanannya bpk/ibu, untuk saat ini MNC Grup dan/atau Liga    Inggris memang sudah tidak berkerjasama dengan UseeTV namun jika suatu saat    ada penawarannya maka kami akan menghubungi bpk/ibu kembali, dan untuk paket    yang ditawarkan saat ini juga merupakan program unggulan di UseeTV (sebutkan    nama channel dari paket yang ditawarkan)</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">MINIPACK</td>
                                  <td width="248">TIDAK    MENARIK</td>
                                  <td width="698">Atau    mungkin bpk ingin ditambahkan di channel lainnya, ch movie ato olahraganya    bpk yg tdk kalah menarik dan cukup terjangkau juga , digali kebutuhan    pelanggan : mgkn kami ganti ke paket yg lainnya. dsni ibu lbh senangx sm CH    apa? film2, olahraga, action atau mgkn ada CH yg ibu inginkan?</td>
                                </tr>
                              </table>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">BELUM MAU</td>
                                  <td width="702">tdk disayangkan    pak melwatkan penawaran ini, krna ini penawaran khusus utk bapak utk    dibukakan 1 paket channel indiaction dan bapak jg dpt menikmati di 4 channel    sekaligus, dan tdk dikenakan tarif persatu-satu channel melainkan dikenakan    utk&nbsp; 1 paket indiaction HD    penambahan&nbsp; 30rb+ppn 10% utk    perbulannya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">BELUM    MAU</td>
                                  <td width="702">tdak    di sayangkan pak melewati progam ini, hnya dengan penambahan 30rbu saja plus    ppn setiap bulan nya bpk bisa menikmati 4 chanel sekaligus dengan tayangan2    yg lebih menarik dan terdapat tayangan action nya, dan bpk tidak perlu repot2    datang ke plasa.dengan penambahan hanya 30rbu plus ppn perbulan tidak akan da    kenaiakna kembali</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="702">untuk    penawaran INDIACTION ini lebih menguntungkan pak, karena sudah bisa menikmati    4 chanel unggulan dan tayangannya sudah beragam, ada film    action,drama,oloahraga extream pak. jadi akan terhibur nantinya.    penambahannya 30k/bulan untuk 4chanel ini</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="702">Jika    kami lihat dr paket ibu yg saat ini sudah aktif hanya channel basic saja ya    pak/bu ato hanya channel movie saja disini kami berikan lagi bpk/ibu penawran    penambahan channel agar nanti tontonan ibu lebih variatif dn tentunya tidak    monoton itu2 saja (jelaskan ulang benefit paket secara spesifik)</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="702">paket    yang kami tawarkan disini sangat bervariatif pak/bu (kemudian jelaskan    benefit paket secara spesifik) apalagi kami tidak berikan tarif per 1 channel    melainkan dalam 1 paket berisi(&hellip;)channelnya hanya perlu menambahkan(&hellip;..)per    bulan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="140">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="702">mohon    maaf pak karena yang kita tawarkan ini chanel unggulan bukan chanel basic dan    kami jamin kualitasnya kami berikan yang terbaik yaitu sudah HD</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="140">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="702">kami    berikan penawaran ini agar memperluas pengetahuan wawasan serta memperbanyak    referensi dari film2 yang kami tayangkan saat itu</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="140">MINIPACK</td>
                                  <td width="242">BELUM    PERLU&nbsp;</td>
                                  <td width="702">ibu    untuk paket minipack indikorea tarif sepesial perbulan 25 rbu+ppn 10% sdh    mendapatkan 4 chanel bukan 1 chanel saja dan untuk tarif spesialnya selama    belangganan tdak ada masa promo kalau masa promo kan sewaktu waktu berubah,    paket indikorea ini harganya tetap tidak ada perubahan selain itu akan    menguntungkan bagi bpk/ibu tentunya akan menambah reverensi keluarga juga    untuk menikmati tontonan yang berkwalitas&nbsp;    HD, program ini sangat bagus dan kami berharap bapak akan tetap    berlangganan</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="140">MINIPACK</td>
                                  <td width="242">BELUM    PERLU&nbsp;</td>
                                  <td width="702">yg    kita tawarkan kepada bpk/ibu sifatnya penawran kusus jadi memang di tawarkan    kepada pelanggan terpilih sja bukan promo, untuk penambahn tarifnya tetap 30    rbu/bln + ppn 10% selama brpa pun bpk berlangganan untuk tarifnya tetap tidak    ada perubahan dengan demikian bpk /ibu bsa menikmati paket indiaction dengan    4 chanel bersma keluarga tercinta</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="140">MINIPACK</td>
                                  <td width="242">BELUM    PERLU&nbsp;</td>
                                  <td width="702">idak    di sayngkan bapak/ibu karena yg kita tawarkan kepada bpk/ibu sifatnya    penawran kusus jadi memang di tawarkan kepada pelanggan terpilih sja bukan    promo, untuk penambahn tarifnya tetap 30 rbu/bln + ppn 10% selama brpa pun    bpk berlangganan untuk tarifnya tetap tidak ada perubahan dengan demikian bpk    /ibu bsa menikmati paket indiaction dengan 4 chanel bersma keluarga tercinta</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td>cuma 2 orang saja g    perlu tontonan yg lain lain</td>
                                  <td width="702">ini untuk penawarannya terbatas bu ,jika ibu bersedia berlangganan ibu bisa mendapatkan variasi channel yg lebih banyak lg dan tentunya akan menambah referensi keluarga  dari program program yang berkualitas, yang sebelumnya belum pernah ibu tonton</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="140">MINIPACK</td>
                                  <td width="242">Dampak    covid</td>
                                  <td width="702">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu, selain bapak disini adalah    pelanggan terpilih utk mendapatkan penawaran khusus ini yang sangat    disayangkan jika dilewatkan , dan untuk mendukung program pemerintah dimasa    pandemi ini utk berada dirumah saja maka telkom mmberikan penawaran chanel2    yang lbh beragam utk disaksikan bersama keluarga</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="140">MINIPACK</td>
                                  <td width="242">Dampak    covid</td>
                                  <td width="702">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Saat ini kan keluarga bapak/ibu banyak di rumah setiap harinya, agar tidak    membosankan, kami tawarkan untuk penambahan channel useetv, dimana isinya    banyak acara2 hiburan, film untuk keluarga, olahraga dan banyak lagi.</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="140">MINIPACK</td>
                                  <td width="242">Dampak    covid</td>
                                  <td width="702">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Dengan chanel useetv yang beragam supaya&nbsp;    bapak bisa maksimalkan penggunaan useetv bapak , supaya bapak juga    tidak bosan dirumah pak , atau jika bapak menginginkan paket yang lain yang&nbsp; sesuai dengan kesukaan bapak , bisa    diinfokan supaya kita bisa menawarkan paket yang sesuai dengan keinginan    bapak&nbsp;</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="140">MINIPACK</td>
                                  <td width="242">Dampak    covid</td>
                                  <td width="702">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Produk ini sangat mendukung program pemerintah,&nbsp; agar bapak/ibu dan keluarga tidak bosan    dirumah saja,, kita berikan penawaran penambahan channelnya , agar tontonan    bapak/ibu beserta keluarga bisa bervariasi dan pastinya lebih menyenangkan</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="140">MINIPACK</td>
                                  <td width="242">Dampak    covid</td>
                                  <td width="702">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu<br>
                                    saat pandemi ini tentuny lebih sering dirumah kan pak bu?<br>
                                  apa tidak bosan jika hany menonton acara yang itu2 saja, saat ini kita    tawarkan channel xxxx, untuk membuat hari2 bapak dan keluarga lebih berwarna.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="140">MINIPACK</td>
                                  <td>Gak usah</td>
                                  <td width="702">kenapa pak jk dlewatkan kesempatan ini, kami bukan bukan perchannel saja tetapi langsung 4 channel sekaligus bisa bapak nikmati di program Indiaction, ada fox, galaxy premium, kix fight sport, bisa menayaksikan film film action, olahraganya juga pak. Hiburan buat keluarga di masa pandemic ini, cmn penamabahn 30 rb per bulan bisa lsg menikamti sekaligus 4 channnel pilihan</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="140">MINIPACK</td>
                                  <td width="242">JARANG    DIPAKAI</td>
                                  <td width="702">Sangat    disayangkan Bapak di waktu luang bersama keluarga dapat menikmati<br>
                                    tayangan olahraga, film film action apalagi di tengah kondisi saat ini yang    hanya <br>
                                  di rumah saja sangat memungkinkan untuk menonton tayangan kami    pak&quot;<br>                                  </td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="140">MINIPACK</td>
                                  <td width="242">konfirmasi    dulu</td>
                                  <td width="702">sangat    disayangkan jika dilewatkan bu disini ibu tidak perlu khawatir mau    dipergunakan berapa lamapun 4 chanel ini tambahannya hanya 30rb ppn    perbulannya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">MASIH    NYAMAN DENGAN PAKET EKSISTING&nbsp;</td>
                                  <td width="702">Agar    dapat membantu kegiatan bapak di masa situasi pandemi sehingga penggunaan    televisinya bisa lebih optimal. Kami berikan penawaran paket Indiaction,    tayangannya sangat beragam. Lalu mereview kembali benefit paket yang    ditawarkan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">Masih    nyaman dengan paket existing</td>
                                  <td width="702">bapak    ini mumpung ada penawaran khusus dan tidak semua org mendapatkan. lgsg dr    sistem jd bapak tidak perlu repot repot datang ke plasa / menghabiskan pulsa    utk telp ke 147 jika ingin aktifvasi sendiri. praktis dan 1x24 jam sudah    algsg aktif</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">Masih    nyaman dengan paket existing</td>
                                  <td width="702">Karena    useetv nya bapak sudah satu paket pembayaran, jd jika tidak dipakai sgt    disayangkan pak. Dg penawaran minipack di paket indikorea ini hanya dg    penambahan 25k/bl bisa menambah variasi channel bapak biar tidak membosankan.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="140">MINIPACK</td>
                                  <td width="242">Masih    nyaman dengan paket existing</td>
                                  <td width="702">jika    PL nolak saran edukasi knp pak/bu tdk diambil penawaran tambahan channel?atau    ibu mw channel apa bu/pak biar kita bantu cek paketnya krn syg ini pak/bu    jika dilewatkan krn kan sdh membantu bapak/ibu agr tdk perlu repot2 ke telkom    utk nambah channelnya, ini kita bantu bu/pak dari sistem lggs ibu/bapak    tinggal matikan aja dekordernya jika bersedia dan 1x24 jam sdh bisa lgsg    menyakyikan penambahan channelnya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="140">MINIPACK</td>
                                  <td width="242">Masih    nyaman dengan paket existing</td>
                                  <td width="702">Tidak    sayang pak/ibu untuk dilewatkan, karena pak kedepanya chanel TV bapak sudah    sangat beragam tayangan nya pak, dan tarifnya juga sangat Ekonomis pak kita    berikan berhubung bapak saat ini mendptkan penawarannya lngsng, <br>
                                  Atau kalah boleh kita tau pak/ibu untk tayangan yg bapak butuhkan saat ini    agar kita bntu cek penawaran di chanel lain yg sangat bapak/ibu inginkan Ada?</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="140">MINIPACK</td>
                                  <td width="242">Masih    nyaman dengan paket existing</td>
                                  <td width="702">Tidak    sayang pak jika di lewatkan, kedepannya bapak&nbsp;    bisa lebih memaksimalkan tv bapak dengan channel yang di tawarkan    ini,&nbsp; bapak dan keluarga sdh bisa    menikmati konten drama dan menampilkan acara mixed martial arts events,    action movies, extreme sports dan jika bapak&nbsp;    penggemar olahraga ada siaran langsung pertandingan,&nbsp; berita dan analisa dari liga-liga top    khususnya liga Perancis dan Liga Amerika Serikat dan ini juga Menayangkan    hiburan, olahraga, faktual dan film premiere Hollywood,&nbsp; dan ini aktifnya 1x 24 jam setelah bapak    bersedia,</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="140">MINIPACK</td>
                                  <td width="242">nanti    saja</td>
                                  <td width="702">ibu untuk penawaran ini diberikan tarif khusus, begitu program aktif tarif berjalan , bulan depan (sebutkan bulan nya) sudah ada penambahan tarif tapi belum penuh, penambahan penuhnya di bulan (sebutkan nama bulan) sebesar.... perbulan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="140">MINIPACK</td>
                                  <td width="242">PERTIMBANGAN    HARGA</td>
                                  <td width="702">pastinya    bapak akan lebih terhibur dgn tayangan yg lebih menarik, trfnya juga bukan    promo berlaku selama berlangganan, beda juga dgn aplikasi setiap film yg akan    dilihat berbayar, ini beda pak dgn 4 channel hanya di kenakan trf 30K    ditambah ppn 10% perbulan berlaku selama berlangganan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="140">MINIPACK</td>
                                  <td width="242">PERTIMBANGAN    HARGA</td>
                                  <td width="702">Justru    tarifnya hemat yang kami berikan dan sdh mendapatkan 4&nbsp; channel dengan tayangan khusus diantaranya    film, olahraga yang tayangan sudah bervariasi dan tdk monoton</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="140">MINIPACK</td>
                                  <td width="242">TIDAK    COCOK</td>
                                  <td width="702">mungkin    bapak kurang cocok dengan paket channel yang saya sampaikan sebelumnya,    disini juga ada bapak untuk paket channel yang khusus olahraganya yaitu di    paket indisport 2 hd, nanti disini bapak akan mendapat 4 channel diantaranya    usee sport, usee sport 2, champion tv 1, champion tv 2, nah nanti untuk    channel&quot; tsb berisikan tayangan olahraga sepak bola bapak, dan disini    bapak cukup menambahkan 25k + ppn 10% per bulannya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="140">MINIPACK</td>
                                  <td width="242">Tidak    Dulu</td>
                                  <td width="702">jk    penawaran ini dlewatkan begitu saja, sangat dsayangkan krn program ini    terdapat film action buat keluarga, sport bagi bapak dan yg menyukai sport    nya, dberikan lasngsung 4 chnnel hrg murah penamabahn 30 rb per bulan ppn    selama berlangganan, kami pastikan kedepannya akan selalu tetap di penambahan    30 rb per bulan ttp dpt dinikmati selama berlangganan</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="127">
                                <col width="297">
                                <col width="848">
                                <tr height="40">
                                  <td height="40" width="157">MINIPACK</td>
                                  <td width="241">Menolak diawal    sebelum dilakukan penawaran</td>
                                  <td width="686">bapak /ibu    mohon di simak sebentar karena ini penawaran channel terfavourite keluaraga    agar dirumah ibu/bapak untuk tayangan TV nya bisa lebih menarik dan tdk    membosankan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="157">MINIPACK</td>
                                  <td width="241">Pelanggan    tidak mengerti</td>
                                  <td width="686">baik    bapak/ibu ini ada penawaran penambahan channel agar tayangan tv ibu / bapak    jauh lebih menarik dan tdk membosankan, bahkan ada channel2 yg sudah    beredukasi untuk putra putri tercinta. ( sebutkan channelnya)</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="157">MINIPACK</td>
                                  <td width="241">Sudah    berlangganan di nomor lain</td>
                                  <td width="686">bapak/bu    ini kan channel nya akan ditambahkan di TV ibu yg saat ini kami tawarkan jd    untuk menambahkan fasilitas TV ibu agar jauh lebih menarik tayangan nya</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>Update 9 April 2021 </p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="111">
                                <col width="155">
                                <col width="597">
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">BELUM PERLU</td>
                                  <td width="684">sangat    disayangkan jika program ini dilewatkan begitu saja pak, karena dengan bpk    berlangganan xx (sebut nama paket misalnya inditainment 1) maka bapak sudah    bisa menonton tayangan hiburan, pertunjukan musik dan komedi yg berkualitas    dari kami yg dpt menghibur bapak sekeluarga</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="684">jika    bpk berlangganan channel yg kami tawarkan ini maka bapak tdk perlu khawatir    jika ketinggalan menonton siaran favorit nya, krn ada fitur TV on demand yg    dapat memutar ulang tayangan sampai 7 hari kebelakang (namun tdk berlaku utk    channel HBO, krn HBO tdk ada TV on Demand)</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">JARANG    DIGUNAKAN</td>
                                  <td width="684">bapak    jarang menonton namun anggota keluarga yang lain kan ada pak, kluarga bapak    pasti sangat senang jika fasilitasnya ditambah, jadi betah dirumah dan tidak    perlu keluar cari hiburan <br>
                                  </td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="684">sayang    sekali Pak /Bu jika penawarannya dilewatkan dengan berlangganan program    channel yg kita sampaikan ini maka tontonan dirumah bpk/ibu lebih    bervariasi&nbsp; jadi anggota keluarga akan    betah jika dirumah saja seperti situasi yang sekarang ini</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">PROVIDER    LAIN</td>
                                  <td width="684">Program    yang kita tawarkan ini juga tidak kalah menarik pak/bu ,banyak beragam paket    channel yang kita sediakan,&nbsp; jika boleh    tau bpk/ibu hoby tayangan apa y pak? krn banyak beragam channel kesukaan    keluarga yg kita tawarkan ,jadi bisa menambah pengalaman yang baru dikeluarga    bapak/ibu degan berlangganan program kita</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="156">Minipack</td>
                                  <td width="242">Jarang    nonton</td>
                                  <td width="684">Bpk    jarang nonton mungkin karena acaranya kurang menarik, sedangkan paket    minipack yg kami tawarkan ini acaranya belum pernah bapak tonton dan saya    yakin acaranya akan dirasakan lebih menarik sehingga bapak akan lebih    menikmati nonton useetvnya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">Minipack</td>
                                  <td width="242">Jarang    nonton</td>
                                  <td width="684">Dengan    kondisi yang pandemik seperti sekarang harapan kami fasilitas useetv yang    sudah ada di TV bapak/ibu seharusnya lebih bermanfaat untuk keluarga agar    lebih senang banyak di rumah, apalagi kl tontonan/channelnya lebih    variatif..pasti keluarga di rumah lebih senang dan menontonya tidak    membosankan.</td>
                                </tr>
                                <tr height="95">
                                  <td height="95" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="684">mohon    maaf ibu/bpk alasannya sendiri kenapa ya bu/pak? karena kan disini channel    nya pun sudah hd pak dimana kualitas gambar dan suaranya sudah sangat jernih    spt tampilan dibioskop jadi akan sangat disayangkan sekali pak/bu melewatkan    penawarannya,karena tdk semua pelanggan mendapatkan penawaran yang sama    pak/bu.</td>
                                </tr>
                                <tr height="171">
                                  <td height="171" width="156">MINIPACK</td>
                                  <td width="242">JARANG    DIGUNAKAN</td>
                                  <td width="684">baik    bp/ibu, jika Jarang Digunakan karena jarang dirumah,, useetv saat ini sudah    ada layanan Useetv go, USeeTV go merupakan salah satu media untuk mengakses    USeeTV melalui Gadget/PC , bapak/ibu bisa download aplikasi Useetv go di    playstor atau dialamat web useetv.com. Dimana pelanggan dapat melakukan    streaming video film, Live TV, ataupun TV on Demand.<br>
                                  Dengan adanya Media ini, pelanggan dapat mengakses UseeTv dimanapun dan    kapanpun. UseeTV dapat dinikmati diseluruh area selama terkoneksi dengan internet    dan paket yang kami tawarkan pun jika ibu bersedia maka juga bisa dinikmati    kapanpun dan dimanapun ibu berada</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="684">di    sini chanelnya lbh beragam bpk/ibu karena chanel ini berbeda dengan chanel yg    di miliki saat ini, acaranya jga terbaik yg di siarkan&nbsp; akan memenuhi kebutuhan pelanggan    menggunakan chanel yg kami tawarkan berbeda dengan provider lain, untuk    kualitasnya HD high devinision</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">HARGA    MAHAL</td>
                                  <td width="684">untuk    paket minipack yg kami sediakan sangat menguntungkan bagi pelanggan dengan    tarif&nbsp;&nbsp; yg terjangkau kususnya untuk    bapk/ibu, bsa di gunakan 24 jam tanpa buffer dan tidak berpengaruh terhadap    kuota pelanggan selain itu chanel bpk/ibu akan bertambah dengan chanel2    terbaik dari indihome</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="684">Sayang    pak/ bu jika dilewatkan program nya karena bapak/ ibu belum mengetahui    kelebihan dari program migrasi 2p-3p,&nbsp;    jika bapak/ibu bersedia berlangganan maka bapak dan ibu akan bisa    menikmati (sebutkan jumlah ) chanel di usee tv nya ada chanel olahraga film ,    hiburan juga sudah ada . Selain itu bapak/ibu bisa browsing , streaming    langsung dari usee tvnya mau menonton dari layar usee tv kan lebih jelas    kualitasnya jg sudah HD jadi lebih jernih</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="684">Bapak    kalau menggunakan usee tv nya ini mau menonton program yang sebelumnya    terlewatkan 7 hari itu bisa di tonton kembali ada namanya tv on demand juga    ,&nbsp; mau karaoke juga bisa, kalau ada    anak bapak yang suka youtube an juga bisa , jika bapak tidak berada di rumah    pun bapak bisa mengontrol tayangan yang di tonton putra putri bapak dirumah    dengan mengaktifkan program parental di useetv bapak</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU</td>
                                  <td width="684">Baik    pak tidak disayangkan memang bapa sudah tersedia dg channel tersebut(sebutkan    channel apa aja yg berkaitan)namun bapak disini kita lengkapi kembali dg    cahnnel lainnya pak, seperti (sebutkan channel yg belum pelanggan&nbsp; dapatkan di paket tersebut)dg pemanabahan    60rb plus ppn 10% (contoh tarif) bapak /ibu sudah mendapatkan channel yg jauh    lengkap sehingga bapak /ibu bisa dg nyaman menonton tayangan favorite nya</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">Bpk/ibu    tidak perlu khawatir disini tdk ada paksaan dan kami tidak membatasi mau brp    lama bpk/ibu berlangganan nantinya, tentu harapan kami bpk/ibu bs brlangganan    dlm jangka wktu yg panjang.. penawaran khusus ini untuk jangka panjang    kedepannya agar bpk/ibu sekeluarga lebih nyaman di rumah dengan tontonan yg    berkualitas dan menghibur setelah beraktifitas di luar rumah</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">Disini    bapak bisa menilai untuk kedepannya setelah berlanganan dan kebijakannya kami    kembalikan ke bapak dan disini saya pastikan kalau untuk benefid yang di    dapatkan pastinya bagus dan bermanfaat untuk bapak dan sekeluarga</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">Mumpung    bapak mendapatkan kesempatan penawaran ini pak, yg belum tentu semua    pelanggan mendapatkan penawaran yg sama, jadi bapak bisa membuktikan sendiri    manfaat dr benefit program yg kami sampaikan</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU&nbsp;</td>
                                  <td width="684">di    zaman sekrang cahnel-chanel berkualitas sangat dibutuhkan bapak untuk    menujang pengetahuan keluarga bapak dimana kita bisa menoton chanel-chanel    yang lebih menarik yang belum tersedia di pilihan chanel bapak saat ini, dari    penawran yang saya tawarkan ini bapak bisa mengehamat biaya pengeluaran juga,    karna tidak dihitung dari satuan chanel bapak melainkan sudah dijadikan paket    pilihan untuk bapak dan keluarga&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">BELUM    PERLU&nbsp;</td>
                                  <td width="684">&nbsp;jadi nanti ketika sudah aktif chanelnya,    bpk/ibu silahkan dibandingkan dan dinilai sendiri . bilamana bpk/ibu rasakan    manfaatnya kedepan jauh lebih bagus dan menguntungkan. nanti mau dipakai    sampai kapanpun tidak masalah. tapi disini kami jamin jika chanel unggulan    jauh lebih menarik nanti untuk tayanganya.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">Bila    bpk/ibu bersedia berlagganan pnawaran ini, bp/bisa mmbanding kulitas    tyangannya yg lbih bevariatif dan brmnfaat bagi kluarga bpk. Lagi pula utk    pmbayarannya bulan mei blom full pnmbahannya , nanti bulan juni baru full    pnmbahan yg 40k dan ppn 10% nya setiap bulannya. Silahkan dinikmati    tyangannya pak / bu..</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">sayang    sekali bpk,&nbsp; krna disini tdk semua    pelanggan untuk yg tlh diberikan penawaran khusus,&nbsp; bapak akan mendapatkan chanel yang lebih    berfariatif dari segi harga i harga yang kami sampaikan sangat hemat bapak    karena tidak dihitung per chanel, dengan penambahan XX rupiah plus ppn 10    persen tiap bulan</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">Jadi    untuk channel nya tidak ada di tayangan lain ibu,&nbsp; untuk menikmati paket ini, bpk/ ibu tidak    bisa didapatkan melalui saluran youtube,&nbsp;    dan untuk paket ini jauh lebih aman tanpa pengawasan orang tua, karena    sudah terbagi menjadi beberpa channel yg berkualitas, dan tayangan yg kami    tawarkan pastinya Exclusive tidak bisa ditemukan dan ditonton selain    pelanggan yg berlanggan paket kami saja. Begituu bpk/ibu</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="156">MINIPACK</td>
                                  <td width="242">usee    tv jarang digunakan</td>
                                  <td width="684">channel    yang kami tawarkan channel unggulan tidak hnya bisa bapak nonton    lewatlayar&nbsp; tv tapi dilayar hp juga    yaitu mnggunakan aplikasi hbo go</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="156">MINIPACK</td>
                                  <td width="242">Useetb    jarang digunakan</td>
                                  <td width="684">disini    untuk bapak/ibu kan sudah mengambil paket dimana ada wifi dan useetv nya dan    disini untuk useetv nya sudah bapak/ibu bayarkan untuk abonemen setiap    bulannya jadi meskipun jarang di gunakan atau jarang di tonton namun untuk    tagihannya kan selalu bapak/ibu bayarkan di setiap bulannya nah tujuan    diberikan penawaran ini nantinya untuk mengoptimalkan penggunaan useetv nya    dan tentunya untuk chanelnya kan sudah lebih banyak dan bervariatif dari    sebelumnya serta untuk tanyangannya tidak monoton itu2 saja yang ditonton.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">belum    perlu karena memang bapak belum menikmati program yang kami tawarkan pak,    artinya bapak belum merasakan keuntungan dari program ini, silahkan bapak    nikmati sekeluarga agar bisa menilai keuntungan dr program ini</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="156">MINIPACK</td>
                                  <td width="242">Lebih    suka streaming</td>
                                  <td width="684">&nbsp;kalau streaming itu pengaruh kejaringan    pak,kalau&nbsp; penggunanya internet tinggi    bisa lelet lambat. Kalau chanel&nbsp; (xx)    ini sudah terbuka tinggal tonton bahkan sambil internetan.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">pak    bu nantinya sialhkan bisa di nilai untuk tayangan nya kami yakin untuk chanel    ini sangat menguntungkan dan bermanfaat buat ibu.dan ini kami tidak membatasi    ibu berlganan berpa lama karena bukan promo dan chanel nya akan terbuka    selama ibu berlganan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">PAK/IBU    silahkan bisa di bdandingkan sebelum di tambah dan sesudah di tambah ada    chanel ini bagaiamana,kamai yakin chanel nya ini sangat bermnfaat buat ibu    dan keluarga</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="156">MINIPACK</td>
                                  <td width="242">jarang    di gunakan</td>
                                  <td width="684">nah    jarang di gunakan karena memang tayangan nya hanya itu2 saja bu nah dengan    adanya chanel ini kami yakin ibu akan sering melihat untuk siaran tv nya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="156">MINIPACK</td>
                                  <td width="242">Belum    perlu</td>
                                  <td width="684">bapak/ibu    silahkan beralaganan untuk chanel ini ,supaya bpk/ibu bisa menilai chanel nya    ini bermanfaat atau tidak bagi ibu/bpak&nbsp;    karena jika tidak berlaganan maka kita tidak akan tahu chanel nya    bermanfaat apa tidak,tai kami yakin chanel ini bagus dan bermanfaat</td>
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