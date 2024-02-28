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
						      <p>Rule : <a href="ref_upgrade.php">Upgrade</a></p>
						      <p><a href="ref_2p3p.php">2P - 3P </a> | <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_all.php">All</a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a> | <a href="ref_nba.php">NBA</a> | <a href="ref_stb.php">STB</a></p>
						      <p>&nbsp;</p>
						      <p>DAPROS TIDAK SUPPORT</p>
						      <table cellpadding="0" cellspacing="0">
                                <col width="73">
                                <col width="113">
                                <col width="98">
                                <col width="120">
                                <tr height="19">
                                  <td height="19" width="73"><div align="center"><strong>1</strong></div></td>
                                  <td colspan="2" width="211">Treg    3, 4, 5, 7 maksimal 50 mbps</td>
                                  <td width="120"></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"><strong>2</strong></div></td>
                                  <td colspan="3">Prefix papua tidak boleh    penawaran upgrade</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172013</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172009</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172011</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172008</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172203</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172904</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">1729158</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172925</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172924</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172906</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172914</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172920</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172928</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172723</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172723</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172727</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172727</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172727</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172314</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172314</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172311</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172313</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172312</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172326</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172328</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172329</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172332</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"></div></td>
                                  <td align="right"><div align="center">172331</div></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"><strong>3</strong></div></td>
                                  <td colspan="3">Gamer tidak boleh penawaran reguler</td>
                                </tr>
                                <tr height="19">
                                  <td height="19"><div align="center"><strong>4</strong></div></td>
                                  <td>PDD tidak boleh</td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
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
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">sembari    dapat penawaran khusus sayang pak jika dilewatkan karena kedepannya    penggunaan internet merupakan kebutuhan utama</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Maaf pak, kan sayang kalau program ini dilewatkan. Kami yakin program ini akan menguntungkan dan penambahannya hanya 95 rbu + ppn 10% / bulan , program aktif biling berjalan, dibayarkan mulai bulan depan</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">untuk    saat ini mungkin blm begitu diperlukan namun kami yakin dengan semakin    pesatnya perkembangan teknologi informasi kedepannya bapak sekeluarga juga    akan membutukan kecepatan internet yang lebih tinggi lebih stabil dan lebi    handal , karenanya dari telkom memberikan penawaran spesial kepada bapak    dengan penambahan yang sangat kompetitif karena 20 mbps ini sudah kita    tingkatkan 2 kali lipat kecepatannya, pemakaiannya jg sudah unlimetd tanpa    kuota, dan program ini berlaku slm bpk berlangganan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Pemakaian kedepan kpasti akan jauh lebih efektif karena penambahannya hanya 95 rbu + ppn 10% / bulan , program aktif biling berjalan, dibayarkan mulai bulan depan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Baik    bapak/ibu, mungkin sekarang belum memerlukan tapi saya yakin dengan    perkembangan teknologi yg sekarang internet bukan lagi sebagai kebutuhan    pelengkap tapi sudah menjadi kebutuhan pokok.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">jika    dengan kecepatan sebelumnya bapak sudah merasa nyaman maka akan&nbsp; lebih nyaman lagi jika menggunakan    kecepatan yg saat ini, karena kecepatan yang didapat 2x lebih tinggi tetapi    bapak tidak harus membayar 2x lipat dari harga sebelumnya.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Sayang    Ibu/bpk jika programnya dilewatkan, krn tidak semua pelanggan kita berikan    penawaran dengan tarif hemat ini , dan penawarannya juga khusus hari ini    saja&nbsp;<br>
                                      <br>
                                  (tidak berlaku jika pelanggan ingin tanya orang lain)</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM PERLU</td>
                                  <td width="698">jika    bapak bersedia berlangganan bapak bisa membandingkan kecepatan yang saat ini    bapak miliki dengan kecepatan yang kami tawarkan, jauh lebih cepat , lebih    handal, bapak tidak lagi merasakan baffering, ataupun intermiten, kami yakin    program ini sangat bagus buat bapak sekeluarga</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM PERLU</td>
                                  <td width="698">mungkin    saat ini bapak masih belum memrlukan , tetapi kedepannya internet ini    merupaka salah satu kebutuhan utama, sayang kalau penawaran kami di lewatkan    karena penawaran kami tidak setiap saat ada</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">&nbsp;Baik    pak/Ibu , Jika melihat dari usage (penggunaan) Bpk/Ibu sekarang memang sudah    cukup, namun kenapa pihak Telkom memberikan penawaran untuk UPGRADE REGULER    kecepatan Internetnya, karena dari segi penggunaan bpk/ibu kan cukup aktif,    di khawatirkan untuk kedepannya jika penggunaan internet Bpk/ibu terus    meningkat&nbsp; maka tentunya akan mengganggu penggunaan internet bpk/ibu    seperti, sering buffering/melambat. maka dari itu kami berikan penawaran    khusus ini agar kedepannya penggunaan internet bpk/ibu jauh lebih stabil dan    tetap lancar walaupun penggunaan Bpk/Ibu semakin meningkat.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698"><p>Untuk kecepatan yang saya tawarkan ini jauh lebih cepat 2X lipat dari kecepatan Internet yang Bpk/Ibu gunakan, adapun terkait penambahan tarifnya tidak kami kenakan Penambahan 2X Lipat, karena penawaran ini khusus untuk pelanggan untuk pelanggan Terpilih saja. (saat menyampaikan kenaikan berlipat sesuaikan dengan kecepatan yang ditawarkan)</p>
                                  </td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698"><p>Untuk WIFI nya bisa di pergunakan lebih dari 3 user secara bersamaan dengan kecepatan yang jauh lebih stabil stabil</p>
                                  <p>(saat menyampaikan penggunaan sesuaikan dengan kecepatan yang ditawarkan)</p></td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Pemakaian    inet di rumah/kantor bpk/ibu kan ini sangat aktif di khawatirkan    penggunaannya tidak maksimal menjadi lambat, nah ini oleh telkom di berikan    penawarannya ke 20mbps (dst) dengan kmharga khusus xxxrbu. Jadi sangat sayang    jika dilewatkan</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">untuk    paket yang bapa gunakan kan ini paket lama pak dan di seluruh plasa telkompun    sudah tidak di perjualbelikan karna untuk paket 1..2..3..4..5 mega sudah    tidak di komersialkan lagi&nbsp; karna untuk    jaringan sendiri sudah beralih ke sistem FO dengan pendukung kecepatanya di    100.50.40.30.20 jadi agar bapak tidak mengalami kendala seperti loding    bufring lemot ato loskoneksi maka kami tawarkan kecepatan terbaru agar lebih    stabil dan penambahan tarifnya juga cukup hemat hanya rpxx+ppn 10%</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Untuk    saat ini mungkin bapak belum terlalu banyak menggunakan jdi merasa belum    perlu, tapi saya yakin ke depannya kebutuhan akses internet bapak meningkat    seiring dengan zaman yang serba online dan digital seperti saat ini</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM PERLU</td>
                                  <td width="698">Sayang    pak apabila tidak di upgrade kecepatannya, belum tentu saat kedepannya nanti    bapak membutuhkan, bapak mendapatkan harga dan kecepatan seperti yang saat    ini kami tawarkan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM PERLU</td>
                                  <td width="698">Mungkin    saat ini ibu blm begitu memerlukan tapi&nbsp; kedepannya jika bapak/ ibu    memerlukan sewaktu- waktu bapak/ibu tidak perlu lagi datang ke plaza telkom    untuk diberikan penawaran ini , krn ini tidak semua pelanggan saat ini kami    berikan penawaran ini</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="248">BELUM PERLU</td>
                                  <td width="698">Jika    bapak/ ibu di upgrade internetnya bapak/ibu akan merasakan manfaat yg berbeda    seperti, internet bapak/ibu tidak akan lambat lagi, untuk kecepatan upload    dan downloadnya otomatis akan bertambah,dan jika bapak/ibu di upgrade    internetnya ke kecapatan lebih tinggi bapak/ibu tidak perlu khawatir dengan    penggunaan device/gadget yg ada di angota keluarga di rumah, dimana disini    secara otomatis speed inet di device masing2 anggota keluarga akan bertambah    secara otomatis</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">untuk    saat ini mungkin blm begitu diperlukan namun kami yakin dengan semakin    pesatnya perkembangan teknologi informasi kedepannya bapak sekeluarga juga    akan membutukan kecepatan internet yang lebih tinggi lebih stabil dan lebi    handal , karenanya dari telkom memberikan penawaran spesial kepada bapak    dengan penambahan yang sangat kompetitif&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">sayang    sekali pak, disini bapak kita pastikan jauh lebih nyaman menggunakan dengan    kec 20mb nya krn mau bpk downl, upload, streaming pun kita pastikan sdh lebh    cepat dan jauh lbh efektif penggunaannya pak.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">seperti    itu ya pak/bu, klw sy cek pemakaian internet bpk/ibu sangat aktif, dan ketika    sdh di upgrade ke sekian mbps, kec sdh semakin stabil dan kami pastikan    penggunaan nya sdh lbh nyaman utk keluarga bpk/ibu dan tarif yg kami berikan    jg tarif hemat, dgn penambahan perbulan ..... saja, kec internet nya sdh 2X    lbh cepat (sebutkan kec yg akan di up)&nbsp; dan bpk/ibu bs merasakan    pengalaman yg berbeda dr kec intenet saat ini,</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Jika kita cek dr sistem pemakaian Internet Bapak / Ibu sangat aktif digunakan setiap harinya,karena saat pemakaian 10 Mbps itu maksimal digunakan utk 3-4 Smartphone, jika Bapak / Ibu bersedia kami bantu tingkatkan ke 20Mbps maka bisa di gunakan optimal di 5 divece , dengan penambahan tarif khusus setiap bulannya&nbsp; Rp xx + pajak 10% di luar pemakian lainnya...</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM PERLU</td>
                                  <td width="698">bpk/ibu    ini sayang kalau dilewatkan begitu saja karena disini kan penggunaan bpk/ibu    cukup banyak dan ini&nbsp; masih menggunakan kecepatan yg lama, kalo misal    diUPGRADE REGULER nanti kan untuk aksesnya lebih enak juga lebih nyaman</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM PERLU</td>
                                  <td width="698">Jadi    Ibu, mungkin sekarang blm memerlukan tapi saya yakin dengan perkembangan    teknologi yg sekarang internet bukan lagi sebagai kebutuhan pelengkap tp    sudah menjadi kebutuhan pokok.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Dengan    kemajuan teknologi yg semakin canggih, bapak bisa meningkatkan kecepatan    internetnya. jika dengan kecepatan sebelumnya bapak sudah merasa nyaman maka    akan lebih nyaman lagi jika menggunakan kecepatan yang kami tawarkan Karena    kecepatan yang didapat 2x lebih tinggi dan harga yang lebih terjangkau</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">keceptan    yang terbaru ini di jamin ibu tidak akan menyesal karna sangat membantu    aktifitas ibu dan keluarga. Dari segi kecepatan sudh menigkat tarifnya pun    juga terjangaku untuk pemakain sehri-hari.&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">untuk    saat ini mungkin blm begitu diperlukan namun kami yakin dengan semakin    pesatnya perkembangan teknologi informasi kedepannya bapak sekeluarga juga    akan membutukan kecepatan internet yang lebih tinggi lebih stabil dan lebi    handal , karenanya dari telkom memberikan penawaran spesial kepada bapak    dengan penambahan yang sangat kompetitif&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">jika    dg kec sebelumnya bapak sudah merasa nyaman maka akan&nbsp; lebih nyaman lagi    jika menggunakan kec &hellip;.&nbsp; Karena kecepatan yang didapat 2x lebih tinggi    tetapi bapak tidak harus membayar 2x lipat dari harga sebelumnya</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">jika    bapak bersedia berlangganan maka bapak bisa merasakan sensasi yang berbeda    dalam penggunaan internet bapak&hellip;.tidak ada lagi bafering, intermiten,    penggunaan&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Dengan    perkembangan teknologi serta semakin berkembangnya konten2 yg ada saat ini    tentunya sangat diperlukan bandwith internet yg lebih tinggi agar lebih mudah    dan lancar dalam akses internet meninggat penguna internet semakin hari juga    bertambah</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Ada    kelebihan benefit yg luar biasa Bpk/Ibu jika diugrade ke 20Mbps dimana    kecepatan downstream akan naik 2 kali lipat&nbsp;    namun bayarnya tdk dilipatkangandakan hanya cukup menambahkan    Rp.xxx/bulan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">informasi    tambahan juga benefit yg bapak dapatkan jika UPGRADE REGULER selain    kecepatannya di tambah untuk kecepatan upload dan download juga di&nbsp;    tambah apalagi untuk penggunaan youtube pak untuk streaming butuh kecepatan    downloadyg tinggi nah ini sudah kami tambah 2 kali lipat dari yg kemarin</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Untuk    saat ini kecepatan yang b/I masih dikecepatan yang masih rendah memang bisa    digunakan tapi masih belum bisa digunakan secara maksimal baik untuk kualitas    semisal untuk download , upload , searching dan streaming . Jadi juga    seiringnya kebutuhan kedepan pasti juga pasti membutuhkan dengan internet di    kecepatan yang lebih besar</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Saat    ini kan bpk mendapatakan penawaran khusus dari telkom. Untuk 20 mbpsnya cukup    dengan penambahan &hellip; rupiah. Nanti bpk bs bandingkan, 20 mbps ini jauh lebih    stabil. Untuk dowload film, lagu 20 mbps kami pastikan lebih cepat dan stabil    pak.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Sangat    disayangkan jika melewatkan tarif yang kami sampaikan karena tagihan yang    sekarang misalkan 350K itu baru mendapatkan 10M, ini Telkom menambahkan 10M    kembali dengan tarif khusus kami cukup menambahkan 100K (membandingkan harga    dan benefit)</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">Perkembangan    internet dan dunia digital berkembang sangat pesat bpk/ibu jika tdk diimbangi    dengan support inet yang mumpuni nanti akan ketinggalan, contoh inet dl    dengan 1 mbps saja sdh cukup namun saat ini sdh tdk ada lagi dan pilihan    paket sampai dengan 300 mbps oleh krn itu kami berikan penawaran khusus ini    untuk Bpk/ibu...</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">kec    inetnya masih kecil kami tawarkan ditingkatkan biar lebih stabil saat koneksi    tdk buffering/lambat</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">kecepatan    dua kali lipat lebih stabil jaringan dengan harga khusus penggunaan internet    kan untuk jangka panjang diperlukannya ,bnyk info yang bisa kita ketahuai di    dunia maya dengan kecepatan yg lbh cepat dan stabil</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="248">BELUM    PERLU</td>
                                  <td width="698">bapak/ibu    tidak perlu khawatir, karna disini kan untuk jangka panjangnya, kedepannya    bapak/ibu pasti akan membutuhkan internet yg lebih cepat dan stabil. Nah    disini kami bantu upgrade hanya melalui sistem saja cukup mudah kan... dan    jika bapa/ibu bersedia diaktifkan programnya dalam waktu 1x24 jam sudah bisa    bapak/ibu nikmati untuk.......Mbps nya dan penambahannya hanya ......K + ppn    10% setiap bulan dan sudah berlaku selamanya selama bapak/ibu berlangganan    jadi sangat disayangkan jika dilewatkan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">informasi    tambahan juga benefit yg bapak dapatkan jika upgrade selain kecepatannya di    tambah untuk kecepatan upload dan download juga di&nbsp; tambah apalagi untuk penggunaan youtube pak    untuk streaming butuh kecepatan download yg tinggi nah ini sudah kami tambah    2 kali lipat dari yg kemarin</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Untuk    tarif yang ditawarkan saat ini lebih kompetitif hanya dengan penambahan ....    / bulan bapak sudah bisa menikmati kecepatan internet....</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Mohon    maaf bpk/ibu, disini saya pastikan untuk tarif yang disampaikan sudah sesuai,    dan bpk/ibu tdk perlu khawatir karena percakapan kita pun direkam langsung    dari telkom untuk menghindari kesalahpahaman</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">ibu    tidak perlu khawatir percakapan ibu dengan kita sudah di rekam.jika nanti    tarif yg saya sampaikan tidak sesuai bisa di pertangung jawabakan.jadi sayang    sekali jika di lewatkan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Tarif    yang kami berikan kepada bapa/ibu sudah merupakan tarif khusus yang cukup    murah dan terjangkau jika dibandingkan dengan kecepatan internet yang akan    bapa/ibu terima ....... Kali lipat dari kecepatan sebelumnya, jadi sangat    disayangkan jika di lewatkan penawaran ini</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">untuk    tarif ekonomis disini tidak setiap hari ada bapak dan tidak semua pelanggan    mendapatkannya, karna telkom memberikan peningkatan internet ini bertujuan    untuk jangka panjang dan dilihat dari rata-sata pemakaian internet bapak/ibu    juga,untuk penambaha&nbsp; tarif nya sendiri    berlaku selama bapak berlangagan, sudah mendapatkan tarif ekonomis dan    kecepatnya lebih stabil&nbsp; juga...</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">sayang    pak/bu, karena saat ini diberikan tarif khusus yg tdk semua PL diberikan dan    berlaku selamanya</td>
                                </tr>
                                <tr height="20">
                                  <td height="20" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">sayang    sekali jika di lewatkan untuk&nbsp; benefit    nya ....... di sini kami berikan tarif kusus dengan pnmbhan xx perbulan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">tarif    berjalan begitu program aktif, untuk penambahannya bulan pertama masih    prorata atau belum full, penambahan penuhnya Rp.... dibulan ....&nbsp; Jika ibu bersedia berlangganan kecepatan    inetnya sudah bisa dipergunakan dalam waktu 1x24 jam</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Sebenarnya untuk penawaran yg kami berikan ini untuk tarifnya adalah tarif penawaran khusus untuk bapak di karenakan saat ini saja tagihan bapak sudah mencapai XX K dan kecepatan bapak masih kecepatan 10Mbps dan di sini Bapak hanya cukup menambahkan xx K / bulan belum termasuk ppn 10%,  tp kecepatan bapak sudah dinaikkan 2x lipat dari yang saat ini Bapak Gunakan atau di 20Mbps.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Kecepatan    yang kami tawarkan 2x lipat dari yang saat ini bapak gunakan, tp    penambahannya bukan 2x lipat dari harga yng saat ini bapak bayarkan,yaitu    hanya penambahan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Penawarn    ini sifatnya terbatas, hanya di berikan kepada pelanggan yang kami hubungi,    tarif penambahaannnya ..... setiap bulannya , sangat hemat jika dibandingkan    dengan membeli paket data</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">penambahan    tarif yang kami sampaikan ini sudah sangat kompetitif , dan bapak juga tidak    perlu datang ke plaza telkom, atau menelpon 147, untuk permintaan    upgrade&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Penambahan    yang kami tawarkan tidak mahal bapak/ ibu ini bukan harga promo yang berbatas    waktu , penambahan perbulannya berlaku selama bapak berlangganan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Kami    pastikan ini tidak mahal pak/ bu, karena ini penawaran khusus bagi pelanggan    setia telkom (tdk smua pelanggan mendapatkan penawaran ini)&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Ini    lebih hemat pak/ bu, kecepatan yg bapak/ ibu dapatkan minimal 2 kali dr    kecepatan saat ini bapak gunakan tapi untuk harga bapak tdk perlu membayar 2    kali lipat dr tagihan saat ini (penambahannya diulang)&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Baik    Pak / Bu, karena program kami ini adalah penawaran khusus, maka kami berikan    tarif khusus juga. Cukup dengan penambahan 95rb+ppn 10% perbulan bapak / ibu    mendapatkan kecepatan inet dua kali lipat dari saat ini, sementara bapak    tidak perlu membayar tarif dua kali ipat lebih mahal</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">sayang    pak jika dilewatkan , justru yg kita brikan saat in tarif penambahan tidak    mahal . ini kecptny naikkn 2 x lipat, bpk cuman tmbhn 95 k perbulan belum    termasuk ppn 10%</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Program    ini pembayaran bulan depan belum full, masih prorata. Fullnya ditagihkan    dibulan berikutnya (bulan kedua)</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">&nbsp;Di sini bapak tdk perlu khawatir tarif yang bapak dapatkan merupakan tarif khusus yang di berikan Telkom dengan penambahan hanya XXX + ppn 10% / bulan diluar penggunaan lainnya jika ada , artinya bapak sudah kita tingkatkan kecepatan internetnya 2 kali lebih cepat tapi pembayaran tidak 2 kali lipat ,dan untuk pembayaran bapak di bulan depan masih sebagian atau belum full yg bapak bayarkan , terhitung dari tgl aktif nya saja klw untuk fullnya di bayarkan di bulan berikutnya atau di bulan ke dua</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">bapak/ibu    perogram kita ini kan  penawaran khusus ,tarif nya kan juga    khusus pak. penambahannya ini kan hanya 95rb+ppn 10%&nbsp; diluar penggunaan    lain setiap bulannya tidak&nbsp; sampai dua kali lebih besar dari tagihan    sebelumny</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">bapak/ibu&nbsp; kita tidak bisa pastikan nantinya masih    mendapatkan dengan tarif khusus yang sama.kedepannya jika bapak berminat    namun tdk mendapatkan penawaran&nbsp;    tarifnya&nbsp; bisa saja berbeda dr    yang saat ini kita tawarkan pak kan sayang pak</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">bapak/ibu    perogram kita ini adalah penawaran khusus ,tarif nya&nbsp; juga khusus pak. penambahannya ini kan    hanya 95rb+ppn 10%&nbsp; diluar penggunaan lain setiap bulannya tidak&nbsp;    sampai dua kali lebih besar dari tagihan sebelumnya,</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Sebetulnya tidak mahal pak, karena Bapak mendapatkan harga khusus,&nbsp; bapak hanya menambahkan ( Harga Penawaran plus ppn 10% )/ bulan , jadi lebih menguntungkan.<br></td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Penambahan    yg kami tawarkan tdk mahal bpk krn penambahan harga perbulan&nbsp; yang kami    sampaikan berlaku selama bpk berlangganan program yg kami tawarkan&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Ini    lebih hemat pak, kecepatan yg bpk dapatkan minimal 2 kali dr kecepatan saat    ini bpk gunakan tapi untuk harga bpk tdk perlu membayar 2 kali lipat dr    tagihan saat ini ( penambahannya diulang )&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">HARGA    MAHAL</td>
                                  <td width="698">Ini    tdk mahal apabila dibandingkan dengan keuntungan yang ibu nikmati, nanti    bpk/ibu dengan kecepatan 20mbps ini bs digunakan browsing, streaming, bahkan    video call&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">bapak    ini kan klo untuk internet, adalah kebutuhan jangka panjang, jadi kan    disayangkan juga klo dilewatkan, karena kan kebutuhan internet tdk hanya    untuk hari ini saja, mungkin juga digunakan besok atau lusa,jd bapak/ibu    dapat mengetahui kelebihan dari program yg kami tawarkan ini , begitu    bapak/ibu...</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">JARANG    DIGUNAKAN</td>
                                  <td width="698">Mungkin    Bapak jarang menggunakan Internetnya di karenakan kecepatan 10Mbps nya masih    kurang stabil, dan sering mengalami gangguan, jadi kami berikan penawaran    untuk upgrade kecepatan ke 20Mbps nya agar bapak mendapatakan experience    menggunakan internet yang lebih stabil sehingga bapak dapat melakukan    kegiatan secara online lebih nyaman</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">KECEWA    DENGAN TELKOM</td>
                                  <td width="698">Mohon    maaf atas ketidaknyamanan dalam penggunaan produk Indihome kami. Dan supaya    kedepannya tidak ada kendala lambat lagi dalam penggunaaan internetnya disini    kami sarankan untuk di upgrade kecepatan Bapak. Karna Saat ini Kecepatan    Internet bapak masih di 10Mbps.....&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">Mungkin    saat ini bapak masih nyaman dengan kecepatan saat ini, tapi kami yakin    kedepannya penggunaan internet bapak dan keluarga pasti akan lebih    tinggi,apalagi jika disini bapak mempunyai putra dan putri yang masih sekolah    pasti membutuhkan koneksi internet yang cepat dan stabil untuk mengerjakan    tugas onlinenya dan tidak ada gangguan jika internet digunakan secara    bersamaan dengan anggota keluarga yg lain.&nbsp;</td>
                                </tr>
                                <tr height="84">
                                  <td height="84" width="138">UPGRADE</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">Bpk/Ibu    tidak perlu khawatir tarif yang ditawarkan ini merupakan tarif khusus yang    diberikan telkom cukup hanya dengan penambahan xxx (sebutkan tarif penawaran    dgn lengkap) dan bpk/ibu bukan hanya di upgrade kecepatannya namun bpk/ibu    juga sudah mendapatkan channel tambahan yaitu (sebutkan bundling paket    minipack)&nbsp; yang termasuk ke salah satu    channel favorit saat ini</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">Jika    dengan kecepatan sebelumnya bapak sudah merasa nyaman maka akan lebih nyaman    lagi jika menggunakan kecepatan yang kami tawarkan karena kecepatan yang    didapat sudah jauh lebih tinggi dengan harga yang lebih terjangkau</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">ibu untuk paket yang sekerang kan masih di kec.xx nah dan untuk jaringan ibu kan sudah FO yang sudah bs untuk di gunakan dengan keceptan paling tinggi 300 mb sayang sekali jika tidak di upgrade<br></td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">ibu    sayang sekali jika di lewatkan karena penawaran tidak setiap hari ada dan    tidak semua pelgan mendapatkan.nah kusus untuk ibu kami berikan pnawaran ini</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">Mungkin    bapak saat ini merasa cukup , namun untuk kedepannya era nya semua sdh serba    digital pak , jadi mau&nbsp; tdk mau    bapak/ibu akan mengikuti perkembangan zaman sehingga utk kebutuhan inet bapak    perlu kec yg lebih tinggi ,maka dari itu bapak kami berikan kesempatan utk    kami tawarkan upgrade kecepatan yg lebih tinggi dg tarif khusus yg bisa bapak    nikmati selama berlangganan&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">MASIH    NYAMAN DENGAN PAKET EXISTING</td>
                                  <td width="698">Dengan    kemajuan teknologi yg semakin canggih, bapak bisa meningkatkan kecepatan    internetnya. jika dengan kecepatan sebelumnya bapak sudah merasa nyaman maka    akan lebih nyaman lagi jika menggunakan kecepatan terbaru Karena kecepatan    yang didapat 2x lebih tinggi dan harga yang lebih terjangkau<br>                                  </td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="248">REGISTRASI    SENDIRI</td>
                                  <td width="698">Sebetulnya jika bapak/ ibu mau melakukan pengajuan sendiri, bisa. Namun jika kami bantu untuk aktivasi, banyak keuntungan yang akan bapak/ ibu dapatkan. Lebih hemat waktu, bapak tidak perlu antri pergi ke plasa telkom apalagi dalam kondisi pandemi seperti saat ini.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="248">TIDAK    MENARIK</td>
                                  <td width="698">Tidak    sayang pak/bu jika kecepatan nya saat ini di upgrade maka untuk streaming    ataupun youtube-an sudah lebih lancar dan tidak akan lambat lagi</td>
                                </tr>
                              </table>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="165">
                                <col width="221">
                                <col width="745">
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">belum perlu</td>
                                  <td width="697">namun disini bapak diberikan penawaran kec bapak skrg masih di 10mbps, disini kecepatan bapak ditingkatkan menjadi 20mbsp, sangat syg jika dilewatkan pak bapak bisa rasakan kec di 20mbps krna kecepatannya menjadi 2 kali lipat dari yg skrg dan bapak cukup penambahan xxx+ppn 10% utk perbulannya</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Jika    melihat dari usage (penggunaan) Bpk/Ibu sekarang memang sudah cukup, namun    kenapa pihak Telkom memberikan penawaran untuk UPGRADE&nbsp; kecepatan Internetnya, karena dari segi    penggunaan bpk/ibu kan cukup aktif, di khawatirkan untuk kedepannya jika    penggunaan internet Bpk/ibu terus meningkat&nbsp;    maka tentunya akan mengganggu penggunaan internet bpk/ibu seperti,    sering buffering/melambat. maka dari itu kami berikan penawaran ini agar    kedepannya penggunaan internet bpk/ibu jauh lebih stabil dan tetap lancar    walaupun penggunaan Bpk/Ibu semakin meningkat.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">bujuk    benefit dan tekankan agar kedepannya bpk /ibu mndpatkan koneksi terbaik dri    kntor telkom. Dan yg kmi berikan pun ini kecepatan kami tingkatkan 2 kali    lebih cpat namun tagihan bukan kmi tnggkatkan 2 kali, namun bpk kami berikan    tarif jauh lebih hemat penambahan biaya ....</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">mhn    maaf pak/bu jika melihat dr penggunaan internet bapak/ibu, kami lihat cukup    aktif menghindari kendala kedepannya nanti seperti lemot buffering lelet dn    putus2 kami berikan penawaran upgrade ini dimana kecepatan bpk/ibu nantinya    akan lebih cepat upload downloadnya jg kami tambahkan namun dr segi tarif    tidak kita tingkatkan 2/3x lipat namun ibu hanya perlu    menambahkan......setiap bulan</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">disini    kami lihat jangka panjang kedepannya pemakaian inet bpk/ibu seperti apa    karena semakin ibu/bpk sering menggunakan inetnya tentunya batas penggunaan    wajar jg semakin meningkat dan akan berpengaruh pada kecepatan bpk/ibu, oleh    karena itu untuk menghindari masalah lelet lemot jaringan kami tawrkan    upgrade kec ke...utk proses pengaktifannya pun sudah kami bantu dr sini dalam    1x24 jam ibu hanya perlu matikan modem selama 5 mnt lalu kec baru bisa    bpk/ibu rasakan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="697">Kami    yakin bapak/ibu jika bapak/ibu bersedia berlangganan diupgrade untuk    kecepatan internetnya sangat stabil tanpa ada lemot buffering ataupun putus2,    sehingga memberikan kenyamanan bapak/ibu selama kerja dirumah dalam masa    pandemi ini</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU&nbsp;</td>
                                  <td width="697">ini untuk jangka panjangnya penggunaan inet dibutuhkan jd bukan skrg saja kmi yaqin ini kualitas kedepanya jauh lebih baik, bpk/ ibu , jika bersedia berlangganan nanti 1x24jm sdh bisa dinikmati kecepatan barunya namun bln depan blm full penambahan XX baru full penamban XX bln berikutnya</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU&nbsp;</td>
                                  <td width="697">kami rasa untuk upgrade ke 20 mbps sangat menguntungkan dan bermanfaat bagi keluarga bpk/ibu karena kecepatan download dan upload tidak putus2 lbh tinggi dari speed 10 mbps apalgi bpk/ibu di ahir bln pastikan menurun speednya maka dari itu kami upgrade ke 20 mbps 2 kali lipat speednya dan harga tambahan tidak 2 kali lipat melainkan hanya penambahan tarif xxx/bln + ppn 10 % / bulan selama berlangganan dan fup kami tingkatkan jga dari smblnya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU&nbsp;</td>
                                  <td width="697">kami    tidak bisa menjamin internet bapak stabil di kecepatan terendah kami yaitu 10    mbps. penawaran ini kami berikan kepada bapak, karena kami sudah perhitungkan    dan kami ingib berikan pelayanan yang meningkat agar internet bapak tidak    lemot-lemot lagi. bapak juga termasuk pelanggan yang beruntung karena kami    hubungi secara langsung untuk penawaran ini.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU&nbsp;</td>
                                  <td width="697">Penambahan    66ribu perbulan yg kami tawarkan tdk mahal bpk krn penambahan harga    perbulan&nbsp; yang kami sampaikan berlaku    selama bpk berlangganan program yg kami tawarkan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">CUKUP    SAJA</td>
                                  <td width="697">ini kan kalau ke 20 mbps 2 kali lebih cepat hanya penmbhannya perbulan Rp. 15000, ini kan bapak pembyarannya setiapa bulannya Rp. 360500 jadi tdk menmabhkan 2 kali lipatnya cukup dgn penmbhannya Rp. 15000 bapak sudah mendapatkan 20 mbpsnya lebih cepat dan lebih nyaman untuk penggunaannya</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">Dampak covid</td>
                                  <td width="697">iya pak/ bu    (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan semoga    cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Selain program ini tidak untuk semua pelanggan, saat ini pasti pengguna    internetnya lebih banyak dirumah, untuk belajar di rumah, kerja di rumah,    bapak/ ibu pasti membutuhkan speed inet yang lebih cepat</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="138">UPGRADE</td>
                                  <td width="249">Dampak covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                    Jika&nbsp; diupgrade kecepatan inetnya,    bapak tidak perlu keluar rumah, bapak bisa menggunakan jaringat internetnya    untuk melakukan transaksi online dirumah , cukup dengan jaringan yang stabil&nbsp; bapak bisa maksimalkan kegiatan bapak    dirumah <br>
                                  ( mulai dr transaksi jual beli , perbankkan , bahkan kegiatan belajar bisa    dilakukan dirumah )</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">UPGRADE</td>
                                  <td width="249">Dampak    covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu, agar bapak/ibu beserta    keluarga tidak jenuh dirumah saja, maka dengan program kita ini bapak dan    ibuk bisa akses internetnya dari rumah , dan bisa menggunakan secara bersama2    tanpa takut harus lambat atau terputus2 krn dengan upgrade kecepatan menjadi    20mbps maka kecepatan 2x lebih cepat dari yang bapak/ibu gunakan saat ini</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">Dampak    covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu, apalagi saat ini kegiatan    bekerja dan belajar kita lakukan dirumah, sesuai anjuran dari pemerintah. dan    pastinya kebutuhan akan internet semakin meningkat. oleh krn itu telkom hadir    untuk ttp menjaga knyaman bapak dan keluarga dalam penggunaan internetnya,    kita tingkatkan kecepattannya xxxxxx</td>
                                </tr>
                                <tr height="160">
                                  <td height="160" width="138">UPGRADE</td>
                                  <td width="249">Dampak    covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Penambahan setiap bulannya hanya 45k+ppn10% berlaku selama berlangganan,    jadi bukan promo yang berubah-ubah saat promonya sdh habis. dan dilanjutkan    dg simulasi total tagihan. jadi meskipun internet sdh naik 2x lipat tapi    untuk penambahan tidak dikenakan 2x lipat, hanya cukup dg penambahan    45k+ppn10% setiap bulan internet PL sdh kec.40mbps dan PL tidak perlu keluar    rumah untuk antri diplasa karena saat ini juga ada PSBB, tinggal menunggu    dirumah sdh bisa dinikmati untuk upg40mbps nya.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">Dampak    covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu, apalagi saat ini semua    kegiatan dan aktivitas hanya di rumah saja, untuk sekolah, kerja, jadi dg    penawaran ini bapak bisa lebih banyak betah di rumah</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">UPGRADE</td>
                                  <td width="249">Dampak    covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  kami lihat saat ini pemakaian inet bapak/ibu sudah mencapai......GB dan    karena sedang digalakkannya dirumah saja tentunya pemakaian inet akan terus    bertambah dn lebih besar,oleh karena itu kami menawarkan upgrade kec inet    agar penggunaan ineternet bapak/ibu lebih nyaman kedepannya dimana hanya dg    penambahann (sebutkan tarif)</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="138">UPGRADE</td>
                                  <td width="249">Dampak    covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  di sini penmabahannya flat pak setiap bulannya selama bapak berlangganan    hanya 15k + ppn10% setiap bulannya jadi gak perlu khawatir pak untuk    penambahannya dan jika bapak bersedia berlangganani bapak tinggal menunggu    saja 1x 24 jam inet bapak sudah kita upgrade lagsung dr sistem kami langsung    karena skrg msh PSBB jadi bapak tidak perlu keluar rumah untuk melakukan    upgrade kecepatan&nbsp;</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="138">UPGRADE</td>
                                  <td width="249">Dampak    covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  upgrade ke xxx mbps sangat menguntungkan krn kan sekarang pl kebanyakan    dirumah aja nih pak dan kebutuhan inet pl semakin meningkat maka dari itu    kami menawarkan upgrade agar inetnya lebih cepat dan stabil, bapak tidak perlu    lg keluar rumah/k kantor plasa&nbsp; dan    tidak perlu mengeluarkan pulsa buat hub 147 krn kami bisa bantu upgrade    secara langsung 1x 24 jam sdh bisa dinikmati dan tarifnya jg sangat    terjangkau hanya penamabahn perbulan xxx</td>
                                </tr>
                                <tr height="140">
                                  <td height="140" width="138">UPGRADE</td>
                                  <td width="249">Dampak    covid</td>
                                  <td width="697">iya    pak/ bu (nama pelanggan), kita memang sedang mengalami pandemi covid 19 dan    semoga cepat berlalu. Program&nbsp; ini jika    dilihat dari benefit yang akan bapak/ ibu dapatkan, akan membuat harga yang    saya tawarkan menjadi sangat ekonomis pak/ bu,<br>
                                  Saran kami ibu/bapak, untuk kedepannya internetnya&nbsp; agar&nbsp;    jauh lebih nyaman digunakan. Karna setiap hari penggunaan internet&nbsp; meningkat. agar anak, istri dan keluarga    juga bisa merasakan belajar dan bekerja dari rumah dengan nyaman tanpa    buffering dan lelet lelet lagi. Saran kami silahkan di UPGRDE&nbsp; ke&hellip;&hellip; mbps saja karna ibu telah di berikan    penawarn langsung dari telkom. Hanya menambah trf..... perbulannya selama    beralnggganan.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td>Gak usah</td>
                                  <td width="697">diberikan    penawaran agar mencegah adanya putus-putus dan lambat jaringan pada fasilitas    internetnya dan disinipun ibu diberikan kemudahan karna ibu tidak kami    kenakan 2 kali lipatnya juga dari tagihan ibu sebelumnya, ibu cukup    menambahan rp. 20rb ppn perbulan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td>Gak usah</td>
                                  <td width="697">penggunaan    internet bapa kami lihat cukup aktif pa, ini tarif nya khusus selama    berlangganan pa hanya 15rb plus ppn perbulannya ini pun kecepatannya kami    tingkatkan 2x lipat pa dari sebelumnya di 10mbps menjadi 20mbps</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">ini    lambat mba, apa bener bisa lebih kencang</td>
                                  <td width="697">betul    ibu ini kami tingkatkan 2 kali lebih cepat,jd yang sebelumnya lebih    lambat,lemot, buffering , setelah ibu mempergunakan 40 Mbps , penggunaannya    itu lebih lancar dr penggunaan yang sebelumnya, karna dsini kami lihat cukup    aktif juga yah penggunaan nya untuk itu kami hub via telpon</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">jarang    di rumah</td>
                                  <td width="697">Inetnya    cukup aktif digunakan, bulan lalu penggunaan smp dgn 450Gb.Jika penggunaan    kedepannya terus meningkat dikhawatirkan akan mengganggu penggunaan inetnya    spt putus2, buffering. Jika ditingkatkan ke 30Mb, kami jamin penggunaannya    akan jauh lbh stabil dan lancar.</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">jarang    di rumah</td>
                                  <td width="697">kalau ini dari telkomnya sebagai bahan perbandingan , kami jamin ibu akan sangat senang dan nyaman dgn kecepatan barunya yang kami tawarkan. pembyaran ibu kan cukup baik , ini kan ibu pembyaran Rp. 330.000 karna tidak semua telkom dihubungi jadi kan hanya ibu yg mendapatkan penambahan ekonomis , cukup penambahan pembayaran Rp. 15.000 sudah bisa menikmati 20mbpsnya jadi cukup pembayaran Rp. 346500 sudah termasuk ppnya ibu sudah menjadi 20 mbpsnya.<br></td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">kl    saya ga mau gmn?</td>
                                  <td width="697">ini    sifatnya memang penawaran, namun sgt disayangkan sekali jika dilewatkan. Saat    ini ibu bisa menikmati kec di 40Mb hanya dgn penambahan di 30K/bln dan bula    dpn msh prorata dikenakannya, full dibulan xxx. Sedangkan utk fasilitas    40Mbnya sdh bisa dinikmati paling cepat hr ini</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">Lain    kali saja</td>
                                  <td width="697">sangat    disayangkan jika penawarannya dilewatkan krn tidak semua pelanggan    mendapatkan penawaran spesial ini, dan tdk usah khawatir program ini bukan    promo yg sewaktu waktu tarif penambahannya berubah</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">masih    bagus</td>
                                  <td width="697">Saat    ini kan utk bapak masih merasa nyaman, ini dari telkom memberikan benefit    20Mbps nya sebetulnya utk jangka panjang kedepannya, agar koneksi internet yg    bapak gunakan tetap lancar tetap stabil, tapi dari segi tarif hanya    penambahan 20rb/bln plus ppn, dengan tujuan mencegah koneksi putus2 atau    lambat</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">masih    cukup</td>
                                  <td width="697">bapak/ibu    mendapatkan penawaran upgrade kan pemakaiannya berarti banyak, ini agar lebih    stabil, penambahan jg hanya 11rb/bln sdh dg ppn. Ini jg bkn promo, tapi    berlaku utk selama berlangganan, tapi bapak/ibu dapat 2x lipat lebih baik    kedepannya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">masih    cukup</td>
                                  <td width="697">sangat    disayangkan pak, kenapa internet bapak diberikan penawaran krna internet    bapak cukup aktif digunakan, dimana interenet yg bapak gunakan hanya di 10mb    terendah di FO, ini kita tingkatkan menjadi 20MB dengan tambahan 20rb+ppn 10%    perbulannya, tarif nya tdk promo dan tdk berubah-ubah utk penmabahan di    20rb+ppn 10%</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">masih    cukup</td>
                                  <td width="697">Pengunaan    kapasitas di rumah bapak yg telah dsmapaikan sampai 10 pengguna, apalagi masa    pandemi ini dmn memenuhi kebutuhan semua keluarga dalam hal&nbsp; kecepatan inet yg lbh besar dan stabil,    Disini dgn 20 M , kami yakin akan lbh menguntungkan mamfaatnya dgn dkenakan    tambaahn per buklan Cukup 15 rb per bulan ppn selama berlangganan kec 20 M    sdh bisa dnikmati bersama keluarga secepatnya.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">masih    cukup</td>
                                  <td width="697">kalo dr 20mb basicly standar klo 40mb bukan basicly standar lg tp sudah kategori tinggi kalopun untuk digunakan upload download ini akan lebih nyaman krn bandwith nya lebih besar dr yg standar, dan untuk saat ini kn kami yg menawarkan jd untuk naik ke 40mb hanya menambhan perbulan  50rb dan penambahannya ini selama berlangganan tidak akan ada perubahan<br></td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">masih    cukup</td>
                                  <td width="697">sangat di sayangkan jika bpk tidak berlangganan saat ini, karna dengan harga penambahan hanya 60rb per bulan bpk sudah mendaptkan kecepatan 2x lipat dari yang sebelum bpk gunakan,dan jaringan akan lebih cepat dan lebih nyaman saat di gunakan secara bersamaan</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">masih    cukup</td>
                                  <td width="697">disini    kan kami lihat untuk penggunaan ibu sangat aktif sekali dipergunakan, jika    ibu sudah di tingkatkan ke 30 mbps kedepannya baik dari segi jaringan atau    dari segi kecepatan sudah jelas bu jauh lebih cepat dan stabil, programnya    pun bukan promo kalau promo tarifnya berubah berubah ya bu, tapi ini kami    berikan&nbsp; programnya berlaku selama ibu    berlangganan hanya cukup menambahkan 60rb ppn perbulan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">masih    cukup</td>
                                  <td width="697">Utk    upgrade ini bukan hanya kecepatan saja yg ditingkatkan tapi kapasitas nya    juga ikut ditingkatkan sehingga utk penggunaan banyak akan lebih stabil juga    dibandingkan sebelumnya hanya dg menambahkan 15rb/bln&nbsp;</td>
                                </tr>
                                <tr height="120">
                                  <td height="120" width="138">UPGRADE</td>
                                  <td width="249">MASIH    NYAMAN DENGAN PAKET EKSISTING&nbsp;</td>
                                  <td width="697">Apakah    yakin pak karena penggunaan internet bapak tergolong aktif dan besar. Untuk    saat ini semua keluarga kan sedang di rumah sehingga dari telkom diberikan    penawaran ke 40Mbps, jadi bukan ke 30Mb lagi pak melainkan langsung ke 40Mb    penambahan tarif perbulannya 45rb plus ppn 10% saja. (agent mengestimasikan    tagihan pelanggan) ini diluar penggunaan lain itu sudah dengan pajak juga,    bapak sudah bisa menikmati kec 40Mbps. Karena untuk internet kedepan semakin    kita butuhkan ya pak, sangat sayang jika dilewatkan krn internet kan    kebutuhan utama jangka panjang jadi akan sangat menguntungkan, karena semua    orang berinteraksi dengan internet</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">MASIH    NYAMAN DENGAN PAKET EKSISTING&nbsp;</td>
                                  <td width="697">karena    kami lihat penggunaan bapak semakin meningkat dari waktu ke waktu, sehingga    kami berikan penawaran ini untuk menjaga kualitas internet bapak kedepan agar    tetap stabil. Jika bapak sudah berlangganan, bapak bisa membandingkan sendiri    dari segi kualitas dan kuantitas pembayarannya, karena kalau dari segi    kualitas kami pastikan sangat berbeda signifikan, tentunya lebih cepat dan    paling penting akan lebih stabil sehingga permasalah seperti lemot,    buffering, tidak terjadi lagi</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">MASIH    NYAMAN DENGAN PAKET EKSISTING&nbsp;</td>
                                  <td width="697">&nbsp;tarif yang kami tawarkan bukan tarif promo,    bisa dinikmati selamanya selama berlangganan. harapan kami bpk bisa menikmati    benefit dan keuntungannya karena internet sekarang menjadi kebutuhan utama    untuk berkomunikasi. apalagi peningkatannya 3x lipat bapak, namun tarif yang    di berikan ke bapak bukan 3kali lipat. penambahan tarif 60rb perbulan ini    flat, harapan kami dg adanya program penawaran ini bapak bisa lebih nyaman    dengan akses internetnya tanpa khawatir dengan tarif yang mahal</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">Masih    nyaman dengan paket existing</td>
                                  <td width="697">Tidak    sngt di sygkan pak,&nbsp; karena internetnya    bisa bapak pakai dalam jangka panjang,&nbsp;    dan utk penawarannya pak tidak semua PL mendapatkannya,&nbsp; karena utk tarif juga sngt ekonomis pak dan    bisa bapak nikmati selama bapaK berlangganan dan kecepatan inet lebih cepat    pak.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">Masih    nyaman dengan paket existing</td>
                                  <td width="697">karena    mengingat sekarang internet sudah menjadi kebutuhan pokok, selagi untuk saat    ini ibu diberikan penawaran upg dg kec 2 kali lipat tapi diberikan dg&nbsp; dg harga khusus</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">Masih    nyaman dengan paket existing</td>
                                  <td width="697">dengan paket existing	Kita yakin kedepan utk inet bapak jauh lebih cepat.. ini penawaran dari Telkom karena diliat dari pemakaian bpk yg aktif.. sayang jika dilewatkan penawaran nya dgn penambahan perbulan yg hemat Rp xxx utk kecepatan yg lebih baik bisa bpk nikmati</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">Masih    nyaman dengan paket existing</td>
                                  <td width="697">sangat    sayang jika dilewatkan krn ini bukan tarif promo yg sewaktu waktu bisa    berubah tp ini tarif penawaran yg diberikan telkom berlaku selama ibu/bpk    berlangganan, jadi kita yakin bpk/ibu dan keluarga sdh lbh nyaman menikmti    kecepatan yg jauh lbh cepat dr sebelumnya tp dgn tarif yg sangat murah</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">Masih    nyaman dengan paket existing</td>
                                  <td width="697">sangat    disayangkan pak/bu jika di lewatkan karena jika kecepatan nya ditingkatkan    ibu dapat mengakses inet lebih cepat tidak lelet lelet lagi dan tidak semua    pelanggan mendapatkan penawaran ini dengan tarif yang lebih hemat</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">Masih    nyaman dengan paket existing</td>
                                  <td width="697">Apa    tdk sayang pak jika di lewatkan? Sayang loh pak, ap lagi di saat sekarng ini    kita d sarankan untuk stay di rumah, yg lebih bnyak menghabiskan waktu d rmh,    bapak bisa mendapatkan kecepatan 2 kali lipat dri sebelumnya namun bkn dengan    harga yg 2 kali lipat malainkan lebih hemat. Penawaran kita hari ini bersifat    acak pak blm tntu nomer bapak muncul kmbali di sistem kita untuk kdpnnya.    Bapak bisa maksimalkan penggunaannya jk sdh mnjd 20mb,untuk download,    upload,akn lbh cepat,tdk lambat untuk kdpnnya.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">PGRADE</td>
                                  <td width="249">nanti    saja</td>
                                  <td width="697">kalau disini programnya bapak tdk perlu khawatir, ini kan selama lamanya, dan selama bapak berlangganan jadi bukan promo, krna kalau promo tarifnya bisa berubah-ubah namun ini tarif penambahannya flat selama berlangganan, cukup penamabhan perbulan 20rb+ppn 10%, dan setelah diupgrade baik penggunaan youtube, internetan, streaming baik dari segi jaringan dan kecepatan jauh lebih stabil</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">nanti    saja</td>
                                  <td width="697">ditakutkan    programnya sudah tidak ada pak kalau nanti krn sangat disayangkan sekali jika    dilewatkan penawarannya, tidak semua pelanggan mendapatkan penawaran ini</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">nanti    saja</td>
                                  <td width="697">karna pemakaian internet ibu sering melebihi batas pemakaian maka disni kami akan mencarikan solusi dgn cara membantu upgrade ke yang lebih tinggi dengan batas pemakaianpun akan lebih banyak dengan penambahan hanya 30rbu perbulan belum termasuk ppn 10% sudah mendapatkan kec. Di 30Mbps</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td>Gak dulu</td>
                                  <td width="697">Nanti    kl bpk gunakan utk streaming, youtube bersama2 utk di 20Mbps jauh lebih    stabil. Jd dari segi kecepatan bpk sangat diuntungkan krn sudah 2x lebih    cepat tapi dari segi biaya bapak hny cukup menambahkan 10K perbulannya dan    berlaku selama berlangganan.&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">obrolin    dulu ke temen temen</td>
                                  <td width="697">ini    kan klw misalnya bapak lewatkan saat ini sangat disayangkan sekali, ini kami    saat ini memberikan tarifnya khusus selama berlangganan , kami pastikan tidak    ada masa berlakunya, bgtu pak&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">PERTIMBANGAN    HARGA</td>
                                  <td width="697">bapak    kan disini merupakan salah satu pelanggan yang mendapatkan penawaran khusus    secara langsung dari telkom, hanya dengan penambahan 50k plus ppn 10% untuk    disetiap bulannya bapak sudah mendapatkan kecepatan 40mbps, dan tidak perlu    khawatir bapak, untuk tagihan bulan juni bapak masih dikenakan tarif prorata    artinya belum full, dan untuk tagihan bulan juli nya bapak baru dikenakan    tarif penambahan fullnya sebesar 50k plus ppn 10%, dan untuk 1x24jam bapak    sudah bisa menikmati benefit kecepatan di 40mbpsnya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">PERTIMBANGAN    HARGA</td>
                                  <td width="697">apakah    tdk sayang pak utk kedepannya seiring perkembangan teknologi pasti    dibutuhkan, dan saat ini kami berikan hanya dgn penambahan trf 45K perbulan    ditambah ppn 10% diluar pemakaian lainnya,utk kedepannya kami yakin akan    sangat menguntungkan bagi bapak</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">PERTIMBANGAN    HARGA</td>
                                  <td width="697">pakah    tdk sayang pak utk kedepannya seiring perkembangan teknologi pasti    dibutuhkan, dan saat ini kami berikan hanya dgn penambahan trf 45K perbulan    ditambah ppn 10% diluar pemakaian lainnya,utk kedepannya kami yakin akan    sangat menguntungkan bagi bapak</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">PERTIMBANGAN    HARGA</td>
                                  <td width="697">ibu kan dihubungi langsung oleh telkom jadi tarif yg diberikanpun bukan tarif promo yg bbrp bulan atau setahun 2tahun berubah. Dari 20Mb ke 40Mb ibu tdk perlu mmbayar 2kali lipat melainkan hanya dg penambahan perbulan  50rb +ppn 10% ibu sudah mndapatkan kec 40Mb dimana kami jamin kecepatannya lbh stabil tidak putus2 lagi</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">PERTIMBANGAN    HARGA</td>
                                  <td width="697">bu    kan dihubungi langsung oleh telkom jadi tarif yg diberikanpun bukan tarif    promo yg bbrp bulan atau setahun 2tahun berubah. Dari 20Mb ke 40Mb ibu tdk    perlu mmbayar 2kali lipat melainkan hanya dg penambahan 50rb ibu sudah    mndapatkan kec 40Mb dimana kami jamin kecepatannya lbh stabil tidak putus2    lagi</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">PERTIMBANGAN    HARGA</td>
                                  <td width="697">pk    apakah tidak sayangkan bpk gunakan krn pake harga lama dengan kecepatan    paling kecil, padahal harga yg sekarang 30m tidak beda jauh pak,dengan harga    bpk 10m , jd dari tagihan bapk seblumnya hanya menambah 20k saja+ppn setiap    bulanya&nbsp; dapatnya 30m, 2 tingkat lebih    tinggi dan pemakaian secara bersamaan tidak bufering. selisih 20k saja</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">Pertimbangan    Harga</td>
                                  <td width="697">untuk    penawaran upg ke 40Mbps ini lebih menguntungkan pak, karena kecepatan inet    bapak naik 2 kali lebih cepat tapi tdk dikenakan tambhn 2kali lipat namun    hanya dg penambahan di 60k/bulannya</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">Pertimbangan    Harga</td>
                                  <td width="697">apakah    tdk disayangkan bpk untuk penawaran upg ke 20Mbps ini lebih menguntungkan    pak, kecepatan inet bapak akan kami naikkan 2 kali lipat lebih cepat dan    dengan hanya menambahkan 30rb rupiah saja setiap bln</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td>sama aja</td>
                                  <td width="697">ini    kami jamin kecepatan nya akan meningkat dan akan lebih baik FUP nya pun    berbeda pak untuk peningkatan kecepatan ini dan bapak akan lebih nyaman    menggunakannya dan ini akan lebih stabil penambahannya nya pun tetap tdk akan    berubah selama berlangganan</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">Sama    aja</td>
                                  <td width="697">ini    kan pnwaran khusus bapak gx usah report-repot pengajuan ke 147/plaza, nanti    bapak akan merasakan upg ke 20 mbps tanpa lemot , buffering dan juga lebih    nyaman pemakaian inetnya&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">sudah    cukup cepat&nbsp;</td>
                                  <td width="697">tp    untuk saat ini penawarannya 2 kali lipat pak untuk kecepatanya, jd bisa    dibayangkan dari keceptannya yg bapak peroleh sekrang , akan bertambah 2    tingkat lebih cepat hingga memudahkan bapak untuk mengakses apapun secara    efektif juga efisien</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">sudah    cukup cepat&nbsp;</td>
                                  <td width="697">kan disini kami lihat penggunaan bapak sdh melebihi 1500gb cukup aktiv ya pak, kami yakin kecepatan ini kedepannya agak lemot atau buffering dgn penggunaan lbh dr 10 pengguna, dan 1x24 jam kedepan bapak dpt menikmati kecepatan 2 x lipat jauh lebih cepat, penggunaan lbh banyak hanya cukup penambahan 15 rb per bulan ppn berlangganan, dan dsini kami bantu by sistem. jika bapak bersedia berlangganan dalam waktu 1x24 jam kecepatannya sudah bisa bapak nikmati</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">sudah    cukup dgn yg sekarang</td>
                                  <td width="697">kalau dilihat dr pemakaiannya kan sdh melebihi batas maks yaitu di 700gb, sedangkan batasnya di 300Gb dgn kec di 10Mb. Disini hny dgn penambahan tarif perbulan 30rb + ppn 10% saja kami tingkatkan sdh 2x lipatnya utk kecepatannya dan utk fupnya kami tingkatkan juga.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">SUDAH    MEMILIKI PROVIDER LAIN</td>
                                  <td width="697">Ibu    tidak perlu menggunakan kuota internet dari luar kalau sedang di rumah, ibu    bisa menggunakan wifi indihome saja jika di rumah karena kalau sudah kita    upgrade nanti internetnya lebih lancar, stabil dan tidak lemot lagi.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">takut    pembayaran besar</td>
                                  <td width="697">Tidak    perlu khawatir, krn utk penambahannya hanya 30rb/bln + ppn 10%, dan    percakapan juga direkam oleh telkom jadi jika ada penyampaian yg tidak sesuai    bisa di pertanggung jawabkan di plasa telkom terdekat</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">TARIF    MAHAL</td>
                                  <td width="697">mohon    maaf Bapak/ibu untuk tarif yang kami berikan ini sangat terjangkau sekali dan    bapak/ibu sudah langsung bisa merasakan manfaatnya untuk upgrade kecepatan    yang lebih besar tanpa ada buffering, lemot dan putus2 lagi seperti    sebelumnya</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">Tidak    Dulu</td>
                                  <td width="697">sangat    disayangkan jika programnya dilwatkan karena ini bukan promo dan tidak semua    pelanggan mendapatkan penawraan ini krn penambahannya pun tidak akan ada    perubahan selama berlangganan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">yg    pake hanya anak saya</td>
                                  <td width="697">kami disini melihatnya dari akumulasi pemakaian perbulannya dan rata2 perbulannya sudah di 317Gb. Kami taearkan di kec 20Mb bertujuan utk mencegah terjadinya putus2, buffering, atau lambat. Dan dr segi pembayaran hny penambahan di 15K/bln selama berlangganan, tidak ada kenaikan lg utk penambahan tarifnya.</td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <table border="1" cellpadding="0" cellspacing="0">
                                <col width="127">
                                <col width="297">
                                <col width="848">
                                <tr height="40">
                                  <td height="40" width="158">UPGRADE</td>
                                  <td width="251">Pelanggan tidak    mengerti</td>
                                  <td width="675">baik bapak/ibu    program penawaran upgrade ini untuk peningkatan kecepatan inet nya ibu / bapa    agar 2x lebih cepat , lebih nyaman dan lebih stabil tanpa ada lemot atau    buffering</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="158">UPGRADE</td>
                                  <td width="251">Sudah    berlangganan di nomor lain</td>
                                  <td width="675">program    yg saat ini kami tawarkan untuk upgrade kan di no inet yg berbeda ya bu, jd    benefit kecepatan inet yg saat ini kami tawarkan nanti nya inet ibu akan jauh    lebih stabil tanpa lemot atau buffering jd ibu tdk perlu pergi ke tempat / no    inet yg udh di upgrade</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">&nbsp;sayang sekali pak, ini kan inet bapak sudah    jauh lebih cepat pak, dan bisa di pakai dlm jangka panjang, dan utk tarif    juga sudah lebih ekonomis, jd sudah lebih menguntungkan buat keluarga.ketika    keluarga bapak dirumah juga menggunakan lebih merasa nyaman</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">pak    , walaupun bpk sudah kembali ke kantor tetapi pak kebutuhan akan inet juga    tdk akan berhenti pak , krn dgn adanya inet yg stabil maka kegiatan bapak    bisa dilakukan secara online bpk misal jika bpk mau beli makanan&nbsp; online atau bpk ini mengetahui informasi    updated secara online dll&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">maaf    pak/libu memang saat ini setelah adanya kebijakan New Normal aktifitas    perkantoran sdh mulai ber operasi secara perlahan2 dan masih dalam masa    transisi , namun internet Fasilitas kantor yng Bapak Ibu dapatkan hanya    sebatas pada saat bekerja di kantor saja, seelah aktivitas perkantoran    selesai maka bapak akan kembali kerumah dan melakukan aktivitas di rmh&nbsp; , dan dgn kecepatan yg stabil akan    mempermudah bpk untuk melakukan smua aktivitas online dr rmh ( misal : beli    makanan online , cek updated info terbaru , browsing info2 terupdated&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">Bisa    bapak / ibu gunakan saat kumpul bersama keluarga di weekend atau pas pulang    kerja sehingga menghemat kuota internet pada hp seluler bapak atau ibu dan    kami pastikan jaug lebih stabil dalam kecepatan.</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">kalau    internet kan tidak hanya dibutuhkan untuk pekerjaan saja pak/bu, saat kembali    ke rumah atau pun saat tidak bekerja tentu bapak/ibu masih membutuhkan    internet untuk berkomunikasi, refreshing dan kebutuhan lainnya</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">kalau    boleh kami sarankan pak, meskipun aktifitas kerja sudah kembali ke kantor    bapak tetap melakukan upgrade kecepatan internet, karena internet ini    sekarang merupakan kebutuhan utama, mungkin bukan hanya bapak yang    menggunakan internet di rumah, bisa lebih stabil, lebih cepat&nbsp; penggunaan internetnyadan lebih banyak    sharing penggunaan di rumah, jika keluarga dirumah tidak lagi harus    menggunakan paket data, akan sangan membantu menghemat pengeluaran biaya    untuk pembelian paket data, an sekarang bapak mendapatkan penawaran khusus    dari telkom, tidak semua pelanggan mendapatkan kesempatan ini</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">baik    bapak/ibu meski udh kembali beraktivitas namun jaringan inet tetep masih    dibutuhkan untuk kebutuhan ibu/bapak drumah ketika mengerjakan    tugas/pekerjaan, kemudian putra putri tercinta pun akan sangat nyaman ketika    searching untuk kebutuhan tugas2 sekolah nya jd tdk akan ada lagi kendala    lambat atau buffering</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">untuk    penawaran upgrade inet ini meski ibu / bapak udh drumah tetep akan sangat    membantu. saat sedang berkumpul bersama keluarga menonton streaming youtobe    kan tdk akan ada kendala lambat atau buffering. kan skrg acara2 konten    youtobe lebih menarik yg bu/pak dibandingkan channel/tayang TV biasanya</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="158">UPGRADE</td>
                                  <td width="251">Sudah    kerja dari kantor</td>
                                  <td width="675">Untuk    Kecepatan Internet yang kami tawarkan, walaupun Bapak/Ibu sudah mulai    beraktifitas kembali<br>
                                    di kantor saya yakin Bapak/Ibu masih memerlukan untuk keluarga saat    beraktifitas di rumah, Bapak/Ibu <br>
                                    dan keluarga akan jauh lebih hemat&nbsp;    dalam hal kuota internet, dan pastinya kualitas internet Bapak/Ibu    akan jauh lebih setabil<br>
                                  </td>
                                </tr>
                              </table>
						      <p>&nbsp;</p>
						      <p>Update 9 April 2021</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="111">
                                <col width="155">
                                <col width="597">
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">BELUM PERLU</td>
                                  <td width="695">Apa tidak    disayangkan pak/bu? Karna penawaran yang kita berikan, kita pastikan sangat    menguntungkan untuk bapak/ibu dan keluarga dan tidak semua pelanggan    mendapatkannya, hanya pelanggan yg terpilih langsung yg kita berikan    penawaran ini. Dengan penambahan hanya 95k plus ppn 10% diluar penggunaan    lain dan fitur yg baru aktif lainnya. Bapak/ibu sudah bisa menikmati    kecepatan di 30mb</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="695">Untuk    penawaran yang kita berikan ini sudah kita sesuaikan dengan kebutuhan    bapak/ibu. Kalau kita cek untuk tagihan bpk/ibu yg sebelumnya sekitar ....    kalau yg saat ini kita tawarkan penambahan hanya 95k plus ppn 10% diluar    penggunaan lain dan fitur yg baru aktif lainnya. Namun Kecepatannya sudah    kita naikkan 30mb kedepannya sudah bisa bapak maksimalkan penggunaannya karna    tidak lelet lambat maupun terputus-putus</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="695">benar    pak/bu tarif memang bertambah namun penambahannya cukup hemat , namun bpk/ibu    dan keluarga sudah bisa lebih efektif dalam menggunakan internetnya, krn    kecepatannya akan kita tingkatkan dari yang sebelumnya digunakan , jadi bapak    dan keluarga akan lebih nyaman dalam menggunakan fasilitas internet dirumah</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">PELANGGAN    TIDAK FAHAM</td>
                                  <td width="695">Bisa    disampaikan pak/bu tidak paham dibagian apa y? biar kita jelaskan kembali,    krn kita lihat penggunaan internet dirumah bapak aktif jadi sayang sekali    jika program ini dilewatkan</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">Upgrade</td>
                                  <td width="249">Mahal</td>
                                  <td width="695">Sebetulnya    tidak mahal pak, karena kecepatan internetnya kami naikan 2x lipat, yang    awalnya 10Mbps kita tingkatkan menjadi 20mbps, jauh lebih cepat dari    sebelumnya, bapak cukup menambahkan Rp,,,, saja per bulannya, TIDAK menjadi    2x lipat tagihannya.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">Upgrade</td>
                                  <td width="249">Mahal</td>
                                  <td width="695">Mahal    itu sebetulnya relatif pak/bu, apalagi kondisi saat ini internet itu sangat    di butuhkan untuk anak sekolah/kuliah atau keluarga yang di haruskan kerja di    rumah / WFH, jika inet stabil dan lancar maka menunjang juga untuk kegiatan    sekolah/kerja keluarga di rumah dan pastinya jaringan tidakakan lelet atau    loadang lagi...</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">Upgrade</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">Saat    ini inernet sangat di butuhkan pak/bu, sangat di sayangkan jika melewati    penawaran dari kami..selain bapak/ibu mendapatkan kecepatan yang lebih stabil    bapak/ibu juga tidak perlu hubungi&nbsp;    plasa/147 lagi untuk melakukan upgrade, dan penamabahannya pun sangat    murah pak/bu hanya RP............+ ppn 10 % saja sudah pastinya keluarga di    rumah akan lebih nyaman untuk digunakan pembelajaran/kerja</td>
                                </tr>
                                <tr height="133">
                                  <td height="133" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU</td>
                                  <td width="695">bapak/ibu    tidak perlu khawatir, karna disini kan untuk jangka panjangnya, kedepannya    bapak/ibu pasti akan membutuhkan internet yg lebih cepat dan stabil. Nah    disini kami bantu upgrade hanya melalui sistem saja cukup mudah kan... dan    jika bapa/ibu bersedia diaktifkan programnya dalam waktu 1x24 jam sudah bisa    bapak/ibu nikmati untuk.......Mbps nya dan penambahannya hanya ......K + ppn    10% setiap bulan dan sudah berlaku selamanya selama bapak/ibu berlangganan    jadi sangat disayangkan jika dilewatkan</td>
                                </tr>
                                <tr height="114">
                                  <td height="114" width="138">UPGRADE</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="695">&nbsp;Di    sini bapak tdk perlu khawatir tarif yang bapak dapatkan merupakan tarif    khusus yang di berikan Telkom dengan penambahan hanya XXX + ppn 10% / bulan    diluar penggunaan lainnya jika ada , artinya bapak sudah kita tingkatkan    kecepatan internetnya 2 kali lebih cepat tapi pembayaran tidak 2 kali lipat    ,dan untuk pembayaran bapak di bulan depan masih sebagian atau belum full yg    bapak bayarkan , terhitung dari tgl aktif nya saja klw untuk fullnya di    bayarkan di bulan berikutnya atau di bulan ke dua</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">Upgrade</td>
                                  <td width="249">Tidak    pernah digunakan&nbsp;</td>
                                  <td width="695">Bapak    saat ini penggunaan internet semakin tahun semakin meningkat pak , sehingga    sayang pak jika dilewatkan penawarannya hanya dengan menambahkan tarif XX    rupiah bpk sudah bisa upgrade kecepatan ke XX mbps ,&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">HARGA    MAHAL</td>
                                  <td width="695">baik    bapak/ibu tdk disayangkan untuk paket internet yg kami tawarkan saat ini    sudah sangat ekonomis, hanya dengan penambahan 95rb plus ppn10% setiap    bulannya diluar dari penggunaan fitur lainnya bapak sudah bisa menggunakan    kecepatan internet di 30mbps dg penggunaan device gadget atau laptop yg lebih    banyak serta uplod dan donlod yg lebih cepat tanpa batas kuota / unlimited</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">Agar    lebih nyaman dan efektif lagi dalam penggunaan internetnya b/i kedepannya,    maka kami berikan penawaran ditingkatkan kecepatan inet ke .. mbps nya,    karena ketika sudah ditingkatkan kecepatan inet nya kan dr segi upload sm    downlod kmi tambah, jd tdk akan mengalami kendala lemot atau lambat dan lebih    bisa menunjang unt kegiatan b/i drmh yg menggunakan inet</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU&nbsp;</td>
                                  <td width="695">Dalam    masa pandemi seperti ini bapak bisnis-bisnis diluar sana sudah berahli fungsi    ke dunia digital bapak sehingga bapak memerlukan jaringan yang berkuwalitas    dan membutuhkan suport kuota yang cukup untuk kepeluan online bapak jadi    sangat merugi sekali bapak jika penawaran upgradenya dilewatkan&nbsp;</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">BELUM    PERLU&nbsp;</td>
                                  <td width="695">sangat    disayangkan jika dilewatkan karna ini tidak semua pl terpilih dan ini sudah    jangka panjang&nbsp; diberikan tarif yg    sangat terjangkau mungkin saat ini tidak membutukan tapi ini untuk kedpannya    pastinya bp membutuhkan&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">baik    pak/ibu..saat ini memang kecepatan internet bapak ada di 20 mbps, namun saat    ini dari telkom sdh tersedia sampai kecepatan 300mbps, sehingga 20 mbps    menjadi kecepatan terkecil saat ini, apalagi tarif yg kami tawarkan kpd    bpk/ibu, merupakan tarif khusus bukan tarif promo, jd berlaku selama    berlangganan ditelkom.</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">Jarang    di gunakan</td>
                                  <td width="695">Mungkin    untuk saat ini jarang digunakan, namun seiring berkembangnya waktu kebutuhan    internet kan menjadi kebutuhan utama ya pak. Jadi bisa dioptimalkan untuk    penggunaan jangka panjang nya</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">BAPAK    SAYANG SEKALI KALO DILEWATKAN SEIRING BERJALANNYA WAKTU NAMANYA INTERNET KAN    SERING DIPERGUNAKAN SEKOLAH,BEKERJA,DARING SEMUA KAN BUTUH INTERNET DARIPADA    BAPAK BELI PAKET DATA KAN SAYANG JUGA&nbsp;</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">Tarif    mahal</td>
                                  <td width="695">&nbsp;Untuk penggunaan saat ini mungkin masih    cukup pak/bu, tapi disini untuk penggunaan internet kan bisa digunakan dalam    jangka waktu panjang, bisa 1 tahun 2 tahun selama bapak berlangganan,    mengingat kebutuhan internet saat ini sangat penting digunakan untuk sekolah    daring dan kerja di rumah, kami berikan program penawaran khusus bukan promo    agar penggunaan kedepannya tetap stabil dan tidak lemot.</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">kecepatan    lebih stabil jaringan dengan harga khusus penggunaan internet kan untuk    jangka panjang diperlukannya ,bnyk info yang bisa kita ketahuai di dunia maya    dengan kecepatan yg lbh cepat dan stabil dan tdk tergtung brp yang mnggunakan    namun berapa bnyk akses data yang di gunakan dan seberpa sering mnggunakan    media sosial,dan streaming data</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">Kmren    sdh di tingkatkan ttp aj lemot</td>
                                  <td width="695">bpak    /ibu kmi pastikan jauh lebih stabil inetnya silahkan bpk/ ibu rasakan    perbedaan kecepatannya secara langsung per besok, biayanya paket aktif bil    berjalan, bulan pertma prorate bln ke dua full</td>
                                </tr>
                                <tr height="100">
                                  <td height="100" width="138">UPGRADE</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">jika    kecepatan awal .... : sayang pak karena saat ini untuk kecepatan .... sdh    tidak kami jual lagi, jadi memang kedeapannya untuk menjaga kenyamanan bapak,    mengurangi masalah lemot atau lelet bapak kami tawarkan kecepatan diatasnya,    apalagi harga yang kami tawarkan bukan lagi harga promo yang sewaktu waktu    bisa naik jadi bisa bapak nikmati selamanya, selama bapak berlanggana&nbsp;</td>
                                </tr>
                                <tr height="80">
                                  <td height="80" width="138">UPGRADE</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">Krn    saat ini standart terbaru dr telkom sdh 20mb, sprt psb sdh lngsung 20, saat    ini kecepatn bpk msh&nbsp; paling dasar dg    kapasitas msh smngt kecil, shg saat pnggunaan bpk tinggi koneksi krg maximal,    jk pengimbangn nnti bpk pngajaun, nah disyangkan pak. Ini pewran khusus sdh    jauh lbh efektif Dan bukan harga promo</td>
                                </tr>
                                <tr height="60">
                                  <td height="60" width="138">UPGRADE</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">Dari    segi pemakaian pelangan itu di bagi menjadi 3 low midum sama high Klo kami    cek pl termasuk high jadi di khawatirkan kedepan nya lambat jadi bisa saja    pemakain tinggi kecepatan rendah gk sebanding pak dengan yang di nikmati</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">Belum    perlu</td>
                                  <td width="695">ini    mumpung ada harga baru dari telkom jika bapak masih pakai harga lama selisih    nya gk berbeda jauh dengan pl yg keceptan lebih tinggi dari punya bapak&nbsp;</td>
                                </tr>
                                <tr height="40">
                                  <td height="40" width="138">UPGRADE</td>
                                  <td width="249">tarif    mahal</td>
                                  <td width="695">Apakah    tidak disayangkan bapak? karena ini mendapatkan penawarannya khusus bukan    promo, jadi nanti tarif penambahannya sudah flat tidak akan berubah selama    berlangganan</td>
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