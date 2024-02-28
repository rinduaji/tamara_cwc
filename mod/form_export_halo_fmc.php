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
					
			
					<form id='input' name="demoform" action='export_halo_fmc_csv.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>FORM EXPORT DATA FMC - HALO+</b>
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
										   type="month"
										   name="date"
										   placeholder="ex: 30-07-2020"
										   required
									/>
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