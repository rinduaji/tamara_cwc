
<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
$tgl_now=date("Y-m-d");


$query3="SELECT area, COUNT(area) as jumlah FROM app_tam_absen WHERE date_absen >= '$tgl_now 00:00:00' AND jabatan = 'Agent TAM' AND keterangan = 'IN' GROUP BY area ASC";
					
                    // echo $query3;
$result3 = mysqli_query($con,$query3);

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
						
						<div align="center" class="panel-heading">
                            <b>Jumlah Login Agent Per Area (<?=date("d F Y", strtotime($tgl_now))?>)</b>
                        </div>
				</div>
				<br><br><br>
                	
				<div class="row" >
				<?php		
				while($data3= mysqli_fetch_array($result3)){
					
				?>
					<div class="col-lg-2 col-md-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calculator fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><h4><b><?=$data3['jumlah']?></b></h4></div>
                                        <div><?=$data3['area']?></div>
										<hr>
                                    </div>
									<?php
										$query2="SELECT area, rule, COUNT(area) as jumlah FROM app_tam_absen WHERE date_absen >= '$tgl_now 00:00:00' AND jabatan = 'Agent TAM' AND keterangan = 'IN' AND area = '".$data3['area']."'
										GROUP BY area, rule ASC";
					
										// echo $query2;
										$result2 = mysqli_query($con,$query2);
										while($data2= mysqli_fetch_array($result2)){
											if(strtolower($data2['area']) == strtolower($data3['area'])) {		
									?>
									<div class="col-xs-9 text-left">
                                        <div><b><?=$data2['rule']?></b></div>
                                    </div>
									<div class="col-xs-3 text-center">
                                        <div><b><?=$data2['jumlah']?></b></div>
                                    </div>
									<hr>
									<?php
										}
									}
									?>
                                </div>
                            </div>
                        </div>
					</div>
				<?php		
				}
				?>	
				</div>
					
				


				</form>	
            </div>
        </div>
<?php	require_once("../deft_foo.php"); ?>