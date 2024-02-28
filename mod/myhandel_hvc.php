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

if($jb=="Tabber"){$whr="WHERE a.follow = '2'  AND a.input = 'Recall' AND a.status_call = 'Agree Upselling'  AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY `id` LIMIT 0 ,5";}
else {$whr="WHERE a.follow ='9' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY `id` LIMIT 0 ,5";}

//cari jumlah need approve
$Need_spv="SELECT count(*) as jml FROM app_tam_hvc WHERE follow = '3' and `upd_tl` = '$login'";
$Ned_spv=mysqli_query($con,$Need_spv);
$hasil_spv=mysqli_fetch_row($Ned_spv);
$Need_taber="SELECT count(*) as jml FROM app_tam_hvc WHERE follow ='2' and `upd_qco` = '$login'";
$Ned_taber=mysqli_query($con,$Need_taber);
$hasil_taber=mysqli_fetch_row($Ned_taber);

//filter query berdasarkan jabatan
if($jb=="Tabber"){$whr="WHERE a.follow ='2' AND a.`upd_qco` = '$login' AND a.status_call = 'Agree Upselling' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY `id` LIMIT 0 ,60";}
else if ($jb=="Supervisor" || $jb == "TL"){$whr="WHERE a.follow = '3' AND a.`upd_tl` = '$login' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY `id` LIMIT 0 ,60";}
else {$whr="WHERE a.follow in ('3','2') AND a.`area` = '$area' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY `id` LIMIT 0 ,60";}
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
									<h4 class="title">MY HANDLE ORDER TRANSAKSI HVC</h4>
								</div>
							
								<div class="row">
								<div class="col-md-12">
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="170px" class="table table-hover table-striped">
									
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">No</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</th>
											<th align="center"><font color="red" face="Tahoma" size="2">No Telepon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">No Internet</th>
											<th align="center"><font color="red" face="Tahoma" size="2">NCLI</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Handphone Utama</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori HVC</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Sub Kategori Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>	
											
										</thead>
										<tbody>
										<?php
	
										$query="SELECT a.id,a.tgl,a.login,a.nama_agent,a.area,a.no_telp,a.no_inet,a.ncli,a.hp_utama,a.nama_plg,a.kategori_hvc,a.sub_kat,a.status_call,a.input FROM app_tam_hvc AS a   $whr ";
										// echo $query;
										$no = 1;
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user5']."</th>			
											<th align=\"center\" style=\"font-size:10px\">".$data['no_telp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_inet']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ncli']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['hp_utama']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['kategori_hvc']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['sub_kat']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status_call']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>											
											";
										if ($jb=="Tabber" && $data['upd_qco']==""){echo "<th align=\"center\"><a href=\"form_tabber3_hvc.php?id=$data[id]\">Approve</a></th>";}
										else if ($jb=="Tabber" && $data['upd_qco']<>"$login"){echo "<th align=\"center\">Handel $qco</th>";}
										else if ($jb=="Tabber" && $data['upd_qco']=="$login"){echo "<th align=\"center\"><a href=\"form_tabber3_hvc.php?id=$data[id]\">My Approve</a></th>";}
										else if ($jb=="Supervisor" || $jb == "TL"){echo "<th align=\"center\"><a href=\"form_spv_hvc.php?id=$data[id]\">Approve</a></th>";}										
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