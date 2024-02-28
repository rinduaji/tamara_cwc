<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];


?>

<!doctype html>
<html lang="en">
	<title>CWC TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='export_p2p_csv.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>FORM EXPORT DATA P2P</b>
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
										   type="text"
										   name="date"
										   id="datepicker"
										   placeholder="ex: 30-07-2020"
										   required
									/>
							</div>
						</tr>
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Site</label>
								<select  name="site" class="form-control" value="<? echo $exp?>">	
									<option value="ALL AREA">ALL AREA</option>
									<option value="BANDUNG"	>BANDUNG</option>
									<option value="BSD"  	>BSD</option>
									<option value="MAKASSAR"  	>MAKASSAR</option>
									<option value="MALANG"	>MALANG</option>
									<option value="MEDAN"  	>MEDAN</option>
									<option value="SEMARANG"	>SEMARANG</option>
								</select>		
								</label>
								
							</div>							
						</tr>
						<tr>	
							<div class="form-group">
								<label class="control-label" style="color:#008B8B">Pilihan Data</label>
								<select  name="pilih_data" class="form-control" value="<? echo $exp?>">	
									<option value="ALL">ALL</option>
									<option value="Agree">Contacted | Agree</option>
									<option value="Not Agree">Contacted | Not Agree</option>
									<option value="Follow UP">Contacted | Follow UP</option>
									<option value="RNA">Not Contacted | RNA</option>
									<option value="VOICEMAIL / TIDAK AKTIF / DI LUAR JANGKAUAN">Not Contacted | VOICEMAIL / TIDAK AKTIF / DI LUAR JANGKAUAN</option>
									<option value="BUSY / REJECTED CALLBUSY / REJECTED CALL">Not Contacted | BUSY / REJECTED CALLBUSY / REJECTED CALL</option>
								</select>		
								</label>
								
							</div>							
						</tr>
						<tr>	
							<div class="form-group">
								<label class="control-label" style="color:#008B8B">Pilihan tipe</label>
								<select  name="pilih_tipe" class="form-control" value="<? echo $exp?>">	
									<option value="REGULER">REGULER</option>
									<option value="CROSS">CROSS</option>
								</select>		
								</label>
								
							</div>							
						</tr>
						<tr>
							<input name="search" type="submit" class="btn btn-info" Value="Export To Excel">
						</tr>
						</table>
						</div>
						</div>
<?php 

if ($_POST['date'] And $_POST['exp'] And $_POST['site'])
{
	echo "$tgl"; 
	//include "export.php";
}

?>
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>