<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");

if($login<>""){ $whr= "AND a.login='$login'";}
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
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
								<div class="header">
									<h4 class="title" style="color:#008B8B">LIST RECALL</h4>
								</div>
								<div style="overflow-x:auto;">
									
									<table id="data-table" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</font></th>
											
											<th align="center"><font color="red" face="Tahoma" size="2">No&nbsp;Fastel</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama&nbsp;DM</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">No&nbsp;Telp</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi&nbsp;QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi&nbsp;TL</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Return&nbsp;QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</font></th>
										</thead>
										<tbody>
										<?php
	
										$query="SELECT a.id,a.tgl,a.login,a.fastel,a.nama_dm,a.tlp,a.rec_qco,a.rec_tl,b.keterangan,a.ket,a.jenis FROM app_tam_data2 a LEFT JOIN app_tam_return b ON a.id_return_tl=b.keterangan WHERE a.follow = '5' $whr ORDER BY a.tgl DESC";
										// echo "$query";
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
										
											<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tlp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ket']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
											";
										if ($jb=="Agent" || $login<>""){
											if($data['jenis'] == "Caring Retensi"){
												echo "<th align=\"center\" type=\"submit\" ><a href=\"list_recall.php?id=".$data['id']."\">Recall</a></th>";
											}
											else {
												echo "<th align=\"center\" type=\"submit\" ><a href=\"form_recall.php?id=".$data['id']."\">Recall</a></th>";
											}
											
										}
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