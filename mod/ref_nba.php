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
						      <p>Rule : <a href="ref_nba.php">NBA</a></p>
						      <p>| <a href="ref_indibox.php">Indibox</a> | <a href="ref_minipack.php">Minipack</a> | <a href="ref_stbtambahan.php">STB_Tambahan</a> | <a href="ref_upgrade.php">Upgrade </a>| <a href="ref_all.php">All</a> | <a href="ref_2p3p.php">2P - 3P</a> | <a href="ref_smoo.php">SMOOA</a> | <a href="ref_downgrade.php">Downgrade</a> | <a href="ref_downgrade2.php">do and don't</a></p>
						      <p>&nbsp;</p>
						      <table border="1" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="102" valign="top"><p><strong>Program</strong></p></td>
                                  <td width="883" valign="top"><p><strong>Rejection Handling</strong></p></td>
                                </tr>
                                <tr>
                                  <td width="102" valign="top"><p>STB</p></td>
                                  <td width="883" valign="top"><p><strong>SKRIP CUSTOMER MENOLAK PROMO STB</strong><br>
                                    Note : Tekankan harga promo yang didapatkan customer terlebih dahulu</p>
                                      <p>Bapak/Ibu, kami mau menyampaikan promo menarik STB yaitu saat ini    Bapak/Ibu hanya cukup membayar harga STB PLC 80 ribu. Jadi Bapak/Ibu    menghemat 20 ribu karna harga normalnya 100 ribu Pak/Bu untuk STB PLC. </p>
                                    <p>&lt;skrip    segmentasi berdasarkan customer&gt;</p>
                                    <p>&bull;&nbsp; Apakah tidak disayangkan    Bapak/Ibu? Dengan begitu banyak benefit dari STB tambahan ini, TV kedua    Bapak/Ibu akan menjadi smart TV di mana TV Bapak/Ibu dapat menonton tayangan    7 hari sebelumnya, terdapat fitur pause, dan juga bisa direcord.</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan BELI STB LEBIH MURAH DI TOKOPEDIA/SHOPEE/E-COMMERCE </strong><br>
                                      &bull; Baik Bapak/Ibu, terima kasih atas responnya. Kami paham bahwa    Bapak/Ibu telah melakukan survey di e-commerce. Namun, Bapak/Ibu, karna    pembelian melalui&nbsp; TOKOPEDIA/SHOPEE/E-COMMERCE    sistemnya adalah beli lepas, saat Bapak/Ibu mengalami kerusakan, tidak ada    support servis/maintenance. Namun, jika Bapak/Ibu membelinya dari Indihome    secara official, Bapak/Ibu tidak perlu khawatir karna kami akan memberikan    support servis/maintenance jika terjadi kerusakan. </p>
                                    <p><strong>Jika pelanggan menolak dengan alasan HARGA </strong><br>
                                      &bull; Baik Bapak/Ibu, terima kasih atas responnya. Kami paham harga    adalah factor yang penting. Namun dengan hanya membayar Rp    &lt;$PRICE_INCR&gt;, Bapak/Ibu akan lebih berhemat dari segi harga    maintenance/servis dimana Bapak/Ibu tidak perlu takut ada pengalaman tidak    baik ke depannya dan penambahan/ kenaikannya Rp &lt;$PRICE_INCR&gt; plus PPN    10% (&lt;$PPN&gt;) per bulannya (total: Rp.&lt;$IncrementalPPN&gt;) selama    Bapak/Ibu berlangganan IndiHome dan program ini bukan promo.</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan BELUM BUTUH </strong><br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami paham bapak/ibu    sudah ada produk ini. Namun dengan penawaran produk ini,pengalaman yang    Bapak/Ibu dapatkan akan lebih puas dan lebih baik. </p>
                                    <p><strong>Jika pelanggan menolak dengan alasan WAKTU/PIKIR-PIKIR DULU</strong> <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami mengerti jika mau    dipikirkan terlebih dahulu. Namun Bapak/Ibu,ini penawaran khusus untuk    Bapak/Ibu dengan hanya membayar &lt;$PRICE_INCR&gt;. Dengan berlangganan hari    ini, Bapak/Ibu akan merasakan keuntungannya secara cepat dan optimal</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan PRODUK KURANG COCOK </strong><br>
                                      &bull;Baik Bapak/Ibu&nbsp; terima kasih    atas responnya. Kami mengerti. Namun berdasarkan sistem kami, Bapak/Ibu cocok    untuk produk ini dikarenakan &lt;I&gt; (agent membacakan profile pelanggan    yang ada di skrip NBA) &lt;/i&gt;</p>
                                  <p>&nbsp;</p></td>
                                </tr>
                                <tr>
                                  <td width="102" valign="top"><p>Upgrade Speed</p></td>
                                  <td width="883" valign="top"><p>&bull;&nbsp; Bapak/Ibu adalah pelanggan    setia Telkom dan pembayarannya lancar. Tidak semua orang berkesempatan    ditawarkan penawaran ini.</p>
                                      <p>&lt;skrip    segmentasi berdasarkan customer&gt;</p>
                                    <p>&nbsp;<strong>Jika pelanggan menolak dengan    alasan HARGA </strong><br>
                                      &bull; Baik Bapak/Ibu, terima kasih atas responnya. Kami paham harga    adalah factor yang penting. Namun dengan hanya membayar&nbsp; Rp &lt;$PRICE_INCR&gt; plus PPN 10%    (&lt;$PPN&gt;) per bulannya (total: Rp.&lt;$IncrementalPPN&gt;), Bapak/Ibu    dapat menikmati kecepatan internet sebesar 30 Mbps dan kami pastikan saat    bermain game tidak berkendala lambat, tidak terputus-putus, dan tidak lelet    sehingga dijamin lebih seru dan lancar. <br>
                                      <strong>Jika pelanggan menolak dengan alasan BELUM BUTUH</strong> <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami paham bapak/ibu    sudah ada produk ini. Namun dengan penawaran produk ini,pengalaman yang    Bapak/Ibu dapatkan akan lebih puas dan lebih baik. </p>
                                    <p><strong>Jika pelanggan menolak dengan alasan WAKTU/PIKIR-PIKIR DULU</strong> <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami mengerti jika mau    dipikirkan terlebih dahulu. Namun Bapak/Ibu,ini penawaran khusus untuk    Bapak/Ibu dengan hanya membayar &lt;$PRICE_INCR&gt;. Dengan berlangganan hari    ini, Bapak/Ibu akan merasakan keuntungannya secara cepat dan optimal</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan PRODUK KURANG COCOK</strong> <br>
                                  &bull;Baik Bapak/Ibu&nbsp; terima kasih    atas responnya. Kami mengerti. Namun berdasarkan sistem kami, Bapak/Ibu cocok    untuk produk ini dikarenakan (agent membacakan profile pelanggan yang ada di    skrip NBA)</p></td>
                                </tr>
                                <tr>
                                  <td width="102" valign="top"><p>Indibox</p></td>
                                  <td width="883" valign="top"><p>&bull;&nbsp; Apabila perangkat Indibox    mengalami kerusakan selama berlangganan dengan IndiHome, biaya    perbaikan/perawatan gratis tidak dikenakan biaya apapun.</p>
                                      <p>&lt;skrip    segmentasi berdasarkan customer&gt;</p>
                                    <p><strong>Apabila customer menolak karena tidak dapat menonton Netflix: </strong><br>
                                      &bull;&nbsp;&nbsp; Telkom IndiHome juga    bekerja sama dengan beberapa service lain selain Netflix, seperti Catchplay,    iFlix, and HOOQ yang juga bisa berfungsi seperti Netflix dengan tayangan yang    tidak kalah beragam dan menarik. Bapak dapat mengaktifkan service ini melalui    myindihome app ya Pak/Bu.</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan HARGA</strong> <br>
                                      &bull; Baik Bapak/Ibu, terima kasih atas responnya. Kami paham harga    adalah factor yang penting. Namun dengan hanya membayar Rp 60.000, Bapak/Ibu    akan lebih berhemat dari segi harga maintenance/servis dimana Bapak/Ibu tidak    perlu takut ada pengalaman tidak baik ke depannya. Selain itu, harga IndiBox    ini jauh lebih murah daripada membeli Smart TV baru.</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan BELUM BUTUH </strong><br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami paham bapak/ibu    sudah ada produk ini. Namun dengan penawaran produk ini,pengalaman yang    Bapak/Ibu dapatkan akan lebih puas dan lebih baik. </p>
                                    <p><strong>Jika pelanggan menolak dengan alasan WAKTU/PIKIR-PIKIR DULU</strong> <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami mengerti jika mau    dipikirkan terlebih dahulu. Namun Bapak/Ibu,ini penawaran khusus untuk    Bapak/Ibu dengan hanya membayar &lt;$PRICE_INCR&gt;. Dengan berlangganan hari    ini, Bapak/Ibu akan merasakan keuntungannya secara cepat dan optimal</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan PRODUK KURANG COCOK </strong><br>
                                  &bull;Baik Bapak/Ibu&nbsp; terima kasih    atas responnya. Kami mengerti. Namun berdasarkan sistem kami, Bapak/Ibu cocok    untuk produk ini dikarenakan &lt;I&gt; (agent membacakan profile pelanggan    yang ada di skrip NBA) &lt;/i&gt;</p></td>
                                </tr>
                                <tr>
                                  <td width="102" valign="top"><p>Minipack</p></td>
                                  <td width="883" valign="top"><p>&bull;&nbsp; [Hanya jika pelanggan telah    menolak 1 kali] Penawaran ini khusus hari ini saja karena tidak semua    pelanggan Telkom IndiHome berkesempatan untuk mendapatkan program spesial    ini. (gunakan jika pelanggan tidak mebutuhkan persetujuan pihak lain)</p>
                                      <p>&lt;skrip segmentasi    berdasarkan customer&gt;</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan HARGA</strong>&nbsp; <br>
                                      &bull; Baik Bapak/Ibu, terima kasih atas responnya. Kami paham harga    adalah factor yang penting. Namun dengan hanya membayar Rp 30.000, Bapak/Ibu    sudah bisa menikmati beragam tayangan action dan program ini kami tegaskan    bukan promo</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan BELUM BUTUH</strong>&nbsp; <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami paham bapak/ibu    sudah ada produk ini. Namun dengan penawaran produk ini,pengalaman yang    Bapak/Ibu dapatkan akan lebih puas dan lebih baik. </p>
                                    <p><strong>Jika pelanggan menolak dengan alasan WAKTU/PIKIR-PIKIR DULU</strong>&nbsp; <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami mengerti jika mau    dipikirkan terlebih dahulu. Namun Bapak/Ibu,ini penawaran khusus untuk    Bapak/Ibu dengan hanya membayar &lt;$PRICE_INCR&gt;. Dengan berlangganan hari    ini, Bapak/Ibu akan merasakan keuntungannya secara cepat dan optimal</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan PRODUK KURANG COCOK</strong>&nbsp; <br>
                                  &bull;Baik Bapak/Ibu&nbsp; terima kasih    atas responnya. Kami mengerti. Namun berdasarkan sistem kami, Bapak/Ibu cocok    untuk produk ini dikarenakan&nbsp; (agent    membacakan profile pelanggan yang ada di skrip NBA) </p></td>
                                </tr>
                                <tr>
                                  <td width="102" valign="top"><p>2P3P</p></td>
                                  <td width="883" valign="top"><p>&bull;&nbsp; [Hanya jika pelanggan telah    menolak 1 kali] Penawaran ini khusus hari ini saja karena tidak semua    pelanggan Telkom IndiHome berkesempatan untuk mendapatkan program spesial    ini. (gunakan jika pelanggan tidak mebutuhkan persetujuan pihak lain)</p>
                                      <p>&lt;skrip    segmentasi berdasarkan customer&gt;</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan HARGA</strong>&nbsp; <br>
                                      &bull; Baik Bapak/Ibu, terima kasih atas responnya. Kami paham harga    adalah factor yang penting. Namun dengan hanya membayar&nbsp; Rp 60.000, Bapak/Ibu akan lebih berhemat    dari segi harga maintenance/servis dimana Bapak/Ibu tidak perlu takut ada    pengalaman tidak baik ke depannya</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan BELUM BUTUH</strong>&nbsp; <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami paham bapak/ibu    sudah ada produk ini. Namun dengan penawaran produk ini,pengalaman yang    Bapak/Ibu dapatkan akan lebih puas dan lebih baik. </p>
                                    <p><strong>Jika pelanggan menolak dengan alasan WAKTU/PIKIR-PIKIR DULU</strong>&nbsp; <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami mengerti jika mau    dipikirkan terlebih dahulu. Namun Bapak/Ibu,ini penawaran khusus untuk    Bapak/Ibu dengan hanya membayar &lt;$PRICE_INCR&gt;. Dengan berlangganan hari    ini, Bapak/Ibu akan merasakan keuntungannya secara cepat dan optimal</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan PRODUK KURANG COCOK</strong>&nbsp; <br>
                                  &bull;Baik Bapak/Ibu&nbsp; terima kasih    atas responnya. Kami mengerti. Namun berdasarkan sistem kami, Bapak/Ibu cocok    untuk produk ini dikarenakan (agent membacakan profile pelanggan yang ada di    skrip NBA) </p></td>
                                </tr>
                                <tr>
                                  <td width="102" valign="top"><p>Homewifi</p></td>
                                  <td width="883" valign="top"><p>&bull;&nbsp; Kami pastikan internet tidak    berkendala lambat, tidak terputus2, dan tidak lelet.<br>
                                    &bull; [Hanya jika pelanggan telah menolak 1 kali] Penawaran ini khusus    hari ini saja karena tidak semua pelanggan Telkom IndiHome berkesempatan    untuk mendapatkan program spesial ini. (gunakan jika pelanggan tidak    mebutuhkan persetujuan pihak lain)<br>
                                    &nbsp;&bull; Karena Bapak/Ibu adalah    pelanggan setia Telkom yang sudah berlangganan selama    &lt;$TENURE_TAHUN_BULAN&gt; dengan pembayarannya yang lancar dan tidak semua    orang berkesempatan mendapatkan penawaran ini. </p>
                                      <p>&lt;skrip    segmentasi berdasarkan customer&gt;</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan HARGA</strong>&nbsp; <br>
                                      &bull; Baik Bapak/Ibu, terima kasih atas responnya. Kami paham harga    adalah factor yang penting. Namun dengan membayar harga Rp    &lt;$PRICE_INCR&gt;, Bapak/Ibu akan lebih berhemat dari segi harga    maintenance/servis dimana Bapak/Ibu tidak perlu takut ada pengalaman tidak    baik ke depannya dan penambahan/ kenaikannya Rp &lt;$PRICE_INCR&gt; plus PPN    10% (&lt;$PPN&gt;) per bulannya (total: Rp.&lt;$IncrementalPPN&gt;) selama    Bapak/Ibu berlangganan IndiHome dan program ini bukan promo.</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan BELUM</strong> <strong>BUTUH</strong>&nbsp; <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami paham bapak/ibu    sudah ada produk ini. Namun dengan penawaran produk ini,pengalaman yang    Bapak/Ibu dapatkan akan lebih puas dan lebih baik. </p>
                                    <p><strong>Jika pelanggan menolak dengan alasan WAKTU/PIKIR-PIKIR DULU</strong>&nbsp; <br>
                                      &bull;Baik Bapak/Ibu, terima kasih atas responnya. Kami mengerti jika mau    dipikirkan terlebih dahulu. Namun Bapak/Ibu,ini penawaran khusus untuk    Bapak/Ibu dengan hanya membayar &lt;$PRICE_INCR&gt;. Dengan berlangganan hari    ini, Bapak/Ibu akan merasakan keuntungannya secara cepat dan optimal</p>
                                    <p><strong>Jika pelanggan menolak dengan alasan PRODUK KURANG COCOK</strong>&nbsp; <br>
                                  &bull;Baik Bapak/Ibu&nbsp; terima kasih    atas responnya. Kami mengerti. Namun berdasarkan sistem kami, Bapak/Ibu cocok    untuk produk ini dikarenakan (agent membacakan profile pelanggan yang ada di    skrip NBA) </p></td>
                                </tr>
                              </table>
						      <p>&lt;skrip  segmentasi berdasarkan customer&gt;</p>
						      <table border="2" cellspacing="0" cellpadding="0" width="991">
                                <tr>
                                  <td width="177"><br>
                                      <strong>SEGMENT</strong> </td>
                                  <td width="814"><p align="center"><strong>Script Rejection</strong> </p></td>
                                </tr>
                                <tr>
                                  <td width="177"><p><strong>Convenience    seeker (S0001)</strong> </p></td>
                                  <td width="814"><p>Bapak/Ibu    [nama pelanggan], kami lihat penggunaan internet dan TV Bapak/Ibu cukup    tinggi, dan paket ini sangat sesuai dengan penggunaan Bapak/Ibu sehari-hari.    Dengan membeli paket ini, akan meningkatkan kepuasan Bapak/Ibu&nbsp; dalam menikmati layanan internet yang cepat    dan tontonan yang berkualitas.<br>
                                          <em>Catatan : </em> </p>
                                      <ol>
                                        <li><span dir="LTR"> </span><em>Customer ini    sering mengajukan complain. Oleh karena itu, pastikan untuk meyakinkan    customer dengan benefit yang akan didapatkan</em> </li>
                                  </ol></td>
                                </tr>
                                <tr>
                                  <td width="177"><p><strong>Malleable    conventionalist (S0002)</strong> </p></td>
                                  <td width="814"><p>Bapak/Ibu [nama    pelanggan], produk yang kami tawarkan jika dibandingkan dengan kualitas yang    akan Bapak/Ibu rasakan, harganya sangat ekonomis. Hanya dengan menambah    &lt;selisih harga produk&gt;, Bapak/Ibu kedepannya dapat merasakan kualitas    yang maksimal tanpa harus membayar mahal. <br>
                                          <em>Catatan :    Jika ada points/promo, diberitahukan ke pelanggan ini karena pelanggan    mempunyai aktivitas loyalty&nbsp;yang tinggi</em> </p></td>
                                </tr>
                                <tr>
                                  <td width="177"><p><strong>Promising    stable (S0003)</strong> </p></td>
                                  <td width="814"><p>Bapak/Ibu    [nama pelanggan], kami tau Bapak/Ibu senang menonton channel yang menarik.    Nah, produk ini sangat cocok untuk Bapak/Ibu karena produk ini menyediakan    channel sesuai dengan tontonan Bapak sehari-hari [ sebutkan channel dari    produk yang ditawarkan] </p></td>
                                </tr>
                                <tr>
                                  <td width="177"><p><strong>Thrifty    Loyal (S0004)</strong> </p></td>
                                  <td width="814"><p>Bapak/Ibu    [nama pelanggan] terimakasih telah menjadi pelanggan setia Indihome dan    selalu mempercayakan Indihome untuk menyediakan layanan terbaik bagi    Bapak/ibu.&nbsp; Produk ini menawarkan    kualitas yang maksimal dengan harga yang terjangkau khusus untuk Bapak/Ibu. </p></td>
                                </tr>
                                <tr>
                                  <td width="177"><p><strong>Engaged Surfer (S0005)</strong> </p></td>
                                  <td width="814"><p>Bapak/Ibu    [nama pelanggan], paket ini sangat sesuai dengan penggunaan Bapak/Ibu    sehari-hari, karena kami lihat penggunaan Internet dan TV Bapak/Ibu sangat    tinggi. Dan tentunya dengan membeli paket ini, dapat meningkatkan kepuasan    Bapak/Ibu dalam menikmati layanan internet yang cepat dan tontonan yang    berkualitas. <br>
                                          <em>Catatan :</em> </p>
                                      <ol>
                                        <li><span dir="LTR"> </span><em>Jika ada    points/promo, diberitahukan ke pelanggan ini karena pelanggan mempunyai    aktivitas loyalty&nbsp;yang tinggi</em> </li>
                                        <li><span dir="LTR"> </span><em>Customer ini    sering mengajukan complain. Oleh karena itu, pastikan untuk meyakinkan    customer dengan benefit yang akan didapatkan</em> </li>
                                  </ol></td>
                                </tr>
                                <tr>
                                  <td width="177"><p><strong>Hungry Newbie (S0006)</strong> </p></td>
                                  <td width="814"><p>Bapak/Ibu    [nama pelanggan], kami lihat penggunaan internet dan TV Bapak/Ibu cukup    tinggi, dan paket ini sangat sesuai dengan penggunaan Bapak/Ibu sehari-hari.    Dengan membeli paket ini, akan meningkatkan kepuasan Bapak/Ibu&nbsp; dalam menikmati layanan internet yang cepat    dan tontonan yang berkualitas. Namun jangan khawatir karena selain menawarkan    kualitas yang maksimal, paket ini juga memiliki harga yang ekonomis untuk    Bapak/Ibu. <br>
                                  C<em>atatan :    Jika ada points/promo, diberitahukan ke pelanggan ini karena pelanggan    mempunyai aktivitas loyalty&nbsp;&nbsp;&nbsp; yang tinggi</em> </p></td>
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