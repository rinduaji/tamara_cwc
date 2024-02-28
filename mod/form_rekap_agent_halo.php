<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['useBUSY / REJECTED CALLBUSY / REJECTED CALLme'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");
if($Login!=''){$wlogin="AND login = '$Login'";}
if($date!=''){ $tgl=date("Y-m-d",strtotime($date));}

?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">		
					<form id='input' name="demoform" action='form_rekap_agent_halo.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>REKAP CALL AGENT HALO</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal</label>
								<input class="form-control"
										   type="date"
										   name="date"
										   placeholder="ex: 2018-12-31"
										   required
									/>
							</div>
						</tr>
						
						<tr>
							<input name="search" type="submit" class="btn btn-info" Value="Search">
						</tr>
						</table>
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Hasil Rekap Call Agent HALO</h4>
								</div>
								
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">NO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Site</th>										
											<th align="center"><font color="red" face="Tahoma" size="2">Agree</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Not Agree</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Follow UP</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Total Contacted</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Pelanggan minta dihubungi kembali</th>
											<th align="center"><font color="red" face="Tahoma" size="2">VOICEMAIL / TIDAK AKTIF / DI LUAR JANGKAUAN</th>
											<th align="center"><font color="red" face="Tahoma" size="2">BUSY / REJECTED CALLBUSY / REJECTED CALL</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Invalid Number</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Terhubung dg Non Decision Maker</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Total Not Contacted</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Total Call</th>
											
										</thead>
										<tbody>
										<?php
										if (isset($_POST['search'])){
											
											
											$query="SELECT 
											(login),(nama_agent), (area), 
											sum(case when `status`='Contacted' then 1 else 0 end) as contacted,
											sum(case when `kategori`='Agree' then 1 else 0 end) as Agree,
											sum(case when `Valid`='Valid' then 1 else 0 end) as Valid,
											sum(case when `kategori`='Not Agree' then 1 else 0 end) as Not_Agree ,
											sum(case when `kategori`='Follow UP' then 1 else 0 end) as Follow_UP,
											sum(case when `status`='Not Contacted' then 1 else 0 end) as not_contacted , 
											sum(case when `kategori`='Pelanggan minta dihubungi kembali' then 1 else 0 end) as Pelanggan_dihubungi,
											sum(case when `kategori`='VOICEMAIL / TIDAK AKTIF / DI LUAR JANGKAUAN' then 1 else 0 end) as VOICEMAIL,
											sum(case when `kategori`='BUSY / REJECTED CALLBUSY / REJECTED CALL' then 1 else 0 end) as BUSY,
											sum(case when `kategori`='Invalid Number' then 1 else 0 end) as Invalid_Number,
											sum(case when `kategori`='Terhubung dg Non Decision Maker' then 1 else 0 end) as Decision_Maker,
											count(`status`) as total   
											FROM app_tam_halo 
											where  tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $jenisx  group by login order by login DESC";
											// echo "$query";
											$no = 1;
											$hasil = mysqli_query($con,$query);
											while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Agree']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Valid']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Not_Agree']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Follow_UP']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['contacted']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Pelanggan_dihubungi']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['VOICEMAIL']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['BUSY']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Invalid_Number']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Decision_Maker']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['not_contacted']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['total']."</th></tr>
												";
												
											$no = $no + 1;
											$contacted = $contacted + $data['contacted']; 
											$Agree = $Agree + $data['Agree']; 
											$Valid = $Valid + $data['Valid'];
											$Not_Agree = $Not_Agree + $data['Not_Agree']; 
											$Follow_UP = $Follow_UP + $data['Follow_UP']; 
											$not_contacted = $not_contacted + $data['not_contacted']; 
											$Pelanggan_dihubungi = $Pelanggan_dihubungi + $data['Pelanggan_dihubungi']; 
											$VOICEMAIL = $VOICEMAIL + $data['VOICEMAIL']; 
											$BUSY = $BUSY + $data['BUSY']; 
											$Invalid_Number = $Invalid_Number + $data['Invalid_Number']; 
											$Decision_Maker = $Decision_Maker + $data['Decision_Maker']; 
											$total = $total + $data['total'];
											}
											echo"<tr><th align=\"center\"></th>
												<th align=\"center\"></th>
												<th align=\"center\"></th>
												<th align=\"center\">Total</th>
												
												<th align=\"center\">$Agree</th>
												<th align=\"center\">$Valid</th>
												<th align=\"center\">$Not_Agree</th>
												<th align=\"center\">$Follow_UP</th>
												<th align=\"center\">$contacted</th>
												<th align=\"center\">$Pelanggan</th>
												<th align=\"center\">$VOICEMAIL</th>
												<th align=\"center\">$BUSY</th>
												<th align=\"center\">$Invalid_Number</th>
												<th align=\"center\">$Decision_Maker</th>
												<th align=\"center\">$not_contacted</th>
												<th align=\"center\">$total</th></tr>
												";
										}
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