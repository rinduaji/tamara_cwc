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
					
			
					<form id='input' name="demoform" action='export_csv2.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>FORM EXPORT DATA</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal Awal</label>
								<input class="form-control"
										   type="datetime-local"
										   name="dateStart"
										   required
									/>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal Akhir</label>
								<input class="form-control"
										   name="dateEnd"
										   type="datetime-local"
										   required
									/>
							</div>
						</tr>
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Data Transaksi</label>
								<select  name="exp" class="form-control" value="<? echo $exp?>">	
									<option value="ALL" >ALL</option>
									<option value="valid"  >Agree Valid</option>
									<option value="agree_all"  >Agree Not Valid</option>
									
									<option value="followup"  >Follow Up Agent</option>
								</select>		
								</label>
								
							</div>							
						</tr>
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Produk</label>
								<select  name="produk" class="form-control" value="<? echo $exp?>">	
									<option value="ALLprod" >ALL</option>
									<option value="OTT VIDIO">OTT VIDIO</option>
									<option value="STB Tambahan">STB Tambahan</option>
									<option value="Mini Pack">Mini Pack</option>
									<option value="Indihome 2P to 3P">Indihome 2P to 3P</option>
									<option value="Upgrade Indihome">Upgrade Indihome</option>
									<option value="FMC Akuisisi">FMC Akuisisi</option>
									<option value="SMOOA">SMOOA</option>
									
								</select>		
								</label>
								
							</div>							
						</tr>
						
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Site</label>
								<select  name="site" class="form-control" value="<? echo $exp?>">	
									<option value="AllArea"	>All Area</option>
									<option value="Medan"  	>Medan</option>
									<option value="BSD"  	>BSD</option>
									<option value="Bandung"	>Bandung</option>								
									<option value="Semarang">Semarang</option>									
									<option value="Malang"  >Malang</option>
									<option value="Balikpapan">Balipapan</option>
									<option value="Makassar">Makassar</option>
									
								</select>		
								</label>
								
							</div>							
						</tr>
						<tr>
							<input name="search" type="submit" class="btn btn-info" Value="Export To CSV">
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
		<script>
$(function () {
  $('#example1').datetimepicker();
});
</script>
</html>
<?php	require_once("../deft_foo.php"); ?>