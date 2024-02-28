<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$area = $_SESSION['area'];
$jb = $_SESSION["jb"];

$tgl=date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 31, date("Y"));
$last = date("Y-m-d", $prevN);

if($jb=="TL"){$whr="WHERE a.follow = '2'  AND a.input = 'Recall' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY a.`id` LIMIT 0 ,5";}
else {$whr="WHERE a.follow ='9' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY a.`id` LIMIT 0 ,5";}

//cari jumlah need approve
$Need_spv="SELECT count(*) as jml FROM app_tam_p2p WHERE follow = '3' and `upd_tl` = '$login'";
$Ned_spv=mysqli_query($con,$Need_spv);
$hasil_spv=mysqli_fetch_row($Ned_spv);
$Need_taber="SELECT count(*) as jml FROM app_tam_p2p WHERE follow ='2' and `upd_qco` = '$login'";
$Ned_taber=mysqli_query($con,$Need_taber);
$hasil_taber=mysqli_fetch_row($Ned_taber);

//filter query berdasarkan jabatan
if($jb=="TL"){$whr="WHERE a.follow in ('3','2') AND a.`upd_qco` = '$login' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY a.`id` LIMIT 0 ,60";}
// else if ($jb=="Supervisor"){$whr="WHERE a.follow = '3' AND a.`upd_tl` = '$login' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY a.`id` LIMIT 0 ,60";}
else {$whr="WHERE a.follow in ('3','2') AND a.`area` = '$area' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY a.`id` LIMIT 0 ,60";}
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='approve_recall.php' method='post' accept-charset='UTF-8'>
						<div>
						
						
							<div class="card ">
								<div class="header">
									<h4 class="title">MY HANDLE ORDER TRANSAKSI P2P</h4>
								</div>
							
								<div class="row">
								<div class="col-md-12">
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="170px" class="table table-hover table-striped">
									
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">No</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Tanggal</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</font></th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Type</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">MSISDN</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>	
											
										</thead>
										<tbody>
										<?php
	
										$query="SELECT a.id,a.tgl,a.login,a.perner,a.nama_agent,a.area,a.init_offer,a.type_p2p,a.label,a.msisdn,a.ktp,a.kk,a.nama_plg,a.alamat_ktp_plg,a.email_plg,a.tgl_setuju,a.jenis,a.status,a.kategori,a.reason,a.keterangan,a.input FROM app_tam_p2p AS a   $whr ";
										
										//echo $query;
										// print_r($query);
										$no = 1;
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['type_p2p']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['msisdn']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>											
											";
										if ($jb=="Tabber" && $data['upd_qco']==""){echo "<th align=\"center\"><a href=\"form_tabber3_p2p.php?id=$data[id]\">Approve</a></th>";}
										else if ($jb=="Tabber" && $data['upd_qco']<>"$login"){echo "<th align=\"center\">Handel $qco</th>";}
										else if ($jb=="Tabber" && $data['upd_qco']=="$login"){echo "<th align=\"center\"><a href=\"form_tabber3_p2p.php?id=$data[id]\">My Approve</a></th>";}
										else if ($jb=="Supervisor" || $jb == "TL"){echo "<th align=\"center\"><a href=\"form_spv_p2p.php?id=$data[id]\">Approve</a></th>";}										
										else if ($jb=="Koordinator"){echo "<th align=\"center\">$qco | $tl </a></th>";}
										else { echo "<th align=\"center\">#</a></th>";}
										
										$no = $no + 1;	
										}
										echo"</tr>";

										?>
										</tbody>
									</table>

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