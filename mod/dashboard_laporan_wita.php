<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
$tgl_now=date("Y-m-d");


$query3="SELECT COUNT(*) as total_wita,
        IF(`status2` <> '', sum(case when `status2` LIKE '%Closed%' then 1 else 0 end), sum(case when `status` LIKE '%Closed%' then 1 else 0 end)) as closed,
        IF(`status2` <> '', sum(case when `status2` NOT LIKE '%Closed%' then 1 else 0 end), sum(case when `status` NOT LIKE '%Closed%' then 1 else 0 end)) as on_progress,
        AVG(TIME_TO_SEC(TIMEDIFF(tgl_update, tgl_input))) as avg_sla
        FROM app_wita
        WHERE tgl_input between '$tanggal_awal 00:00:00' and '$tanggal_akhir 23:59:59'";
					
                    // echo $query3;
$result3 = mysqli_query($con,$query3);
$data3= mysqli_fetch_array($result3);
?>

<style>
   
    .bigicon {
        font-size:30px;
        color:white;
    }

    .panel{
        border-radius:0;        
    }

    .stats-item{        
        padding:1;     
        min-height:35;   

    }

    .header-item{
        font-size:15px;
        color:white;
    }

    .data-item {
        font-size:18px;
        color: black;
    }
</style>

<!doctype html>
<html lang="en">
	
        <div class="content">
            <div class="container-fluid">
				<div class="row">
				<form id='input' name="demoform" action='dashboard_laporan_wita.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>Dashboard Laporan WITA</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						
						<tr>
                            <tr>	
                                <div class="form-group">
                                    <label class="control-label">Tanggal Awal</label>
                                    <input type="date"  name="tanggal_awal" class="form-control">	
                                    </label>
                                </div>							
							</tr>
                            <tr>	
                                <div class="form-group">
                                    <label class="control-label">Tanggal Akhir</label>
                                    <input type="date"  name="tanggal_akhir" class="form-control">	
                                    </label>
                                </div>							
							</tr>
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Generate">
							</tr>							
						</tr>
						</div>
						</div>
						</div>
						<br><br><br>
				<?php		
				if (isset($_POST['search'])){
					
				?>
                	
				<div class="row" >
					<div class="col-lg-2 col-md-4">
					</div>
					<div class="col-lg-2 col-md-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calculator fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><h4><b><?php if ($data3['total_wita']==''){ echo "0";}else{echo $data3['total_wita'];}?></b></h4></div>
                                        <div>TOTAL REQUEST WITA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-lg-2 col-md-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><h4><b><?php if ($data3['closed']==''){ echo "0";}else{echo $data3['closed'];}?></b></h4></div>
                                        <div>TOTAL CLOSED WITA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-lg-2 col-md-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-spinner fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><h4><b><?php if ($data3['on_progress']==''){ echo "0";}else{echo $data3['on_progress'];}?></b></h4></div>
                                        <div>TOTAL ON PROGRESS WITA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-lg-2 col-md-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><h4><b><?php if ($data3['avg_sla']==''){ echo "0";}else{echo number_format((float)$data3['avg_sla'], 2, ',', '');}?></b></h4></div>
                                        <div>AVG SLA WITA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-2 col-md-4">
					</div>
				</div>
					
				<?php		
				}
				?>	
				


				</form>	
            </div>
        </div>
<?php	require_once("../deft_foo.php"); ?>