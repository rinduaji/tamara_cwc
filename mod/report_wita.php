<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl=date("Y-m-d");

if($date_awal != "" AND $date_akhir != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";
    $tanggal_awal = $date_awal.' 00:00:00';
    $tanggal_akhir = $date_akhir.' 23:59:59';

	$query="select * FROM app_wita WHERE tgl_input BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
    // echo $query;
    $no=0;
    $hasil = mysqli_query($con,$query) or die ("Query gagal!");
    $hasil_total = mysqli_num_rows($hasil);
// echo $query;
}
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form name="demoform" action='report_wita.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>REPORT WITA</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal Awal</label>
								<input class="form-control"
										   type="date"
										   name="date_awal"
										   placeholder="ex: 2018-12-31"
									/>
							</div>
						</tr>
                        <tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal Akhir</label>
								<input class="form-control"
										   type="date"
										   name="date_akhir"
										   placeholder="ex: 2018-12-31"
									/>
							</div>
						</tr>
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='cek_jawaban_salah.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Report WITA</h4>
								</div>
								<?php
								// if (isset($_POST['search'])){
                                // if ($date_awal=="" OR $jastel=="" OR $date_akhir=="")
								// {  
								// 	echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Isi Semua Inputan Pencarian!</div>";
								// }
								// }
								?>
								<div style="overflow-x:auto;">
									<table class="table table-hover table-striped">
										<thead>
											
                                            <th align="center"><font color="red" face="Tahoma" size="2">NO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Input</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Login Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">No Fastel</th>	
                                            <th align="center"><font color="red" face="Tahoma" size="2">CP Pelanggan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kendala</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">LUP</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan </th>		
											<th align="center"><font color="red" face="Tahoma" size="2">LUP 2</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Status Akhir</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Detil Report</th>				
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
                                      
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr>
										    <th align=\"center\" style=\"font-size:10px\">".++$no."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_input']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login_agent']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_pelanggan']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['cp_pelanggan']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_update']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['detil_report']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_update2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['detil_report2']."</th>";
														// $Page = $Page + 1;
														echo "</tr>";
													}
													
													?>	
                            
										</tbody>
									</table>
									
								</div>
								<table>
								
								</table>
								</div>
								
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

