<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");

if($login<>""){ $whr= "AND login='$login'";}
?>

<!doctype html>
<html lang="en">
	<title>REFERENSI</title>
<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
			  <div class="card card-plain">
					
			
				<form id='input' name="demoform" action='list_recall.php' method='post' accept-charset='UTF-8'>
				  <div>
						
					<div class="row">
					  <div class="col-md-12">
					    <div class="card ">
		      <div class="header"></div>
					      <div style="overflow-x:auto;"><img src="../agency/img/visimisi.jpg" width="1229" height="655">
					        <p>&nbsp;</p>
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