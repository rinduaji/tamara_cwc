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
					
			
					<form id='input' name="demoform" action='export_absen_hk.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>FORM EXPORT DATA ABSEN HK</b>
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
										   type="date"
										   name="date1"
										   required
									/>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal Akhir</label>
								<input class="form-control"
										   name="date2"
										   type="date"
										   required
									/>
							</div>
						</tr>
						
						
						<tr>
							<div class="form-group">
							<label class="control-label" style="color:#008B8B">Area</label>
								<select  name="area" class="form-control"  required>	
									<option value=""	>Pilih</option>
                                    <option value=""	>ALL SITE</option>
									<option value="BANDUNG"	>BANDUNG</option>
									<option value="BSD"  	>BSD</option>
									<option value="TANGERANG">TANGERANG</option>
									<option value="MALANG"  >MALANG</option>
									<option value="MAKASSAR">MAKASSAR</option>
									<option value="MEDAN"  	>MEDAN</option>
									<option value="SEMARANG">SEMARANG</option>
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