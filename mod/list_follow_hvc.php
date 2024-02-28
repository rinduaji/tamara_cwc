<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
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
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='list_follow_hvc.php' method='post' accept-charset='UTF-8'>
						<div>
						
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">LIST FOLLOW UP HVC</h4>
								</div>
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</font></th>
											
											<th align="center"><font color="red" face="Tahoma" size="2">No&nbsp;Internet</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NCLI</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama&nbsp;DM</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">No&nbsp;Telp</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi&nbsp;QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi&nbsp;TL</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Return&nbsp;QCO</font></th>
										
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
	
										// $query="SELECT id,tgl,login,fastel,nama_dm,ket,tlp,rec_qco,rec_tl,jenis FROM app_tam_data2  WHERE follow = '8' AND input ='New' $whr ORDER BY tgl Desc";
										$query="SELECT a.id,a.tgl,a.login,a.no_inet,a.ncli,a.nama_plg,a.hp_utama2,a.rec_qco,a.rec_tl,a.keterangan,a.jenis,a.rec_qco,a.rec_tl,a.id_return_tl FROM app_tam_hvc a  WHERE a.follow = '8' AND a.input='New' $whr ORDER BY a.tgl DESC";
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>	
											<th align=\"center\" style=\"font-size:10px\">".$data['no_inet']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ncli']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['hp_utama2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['id_return_tl']."</th>
											";
											if ($jb=="Agent" || $login<>""){
												if($data['jenis'] == "Caring Retensi"){
													echo "<th align=\"center\" type=\"submit\"><a href=\"form_follow_hvc.php?id=".$data['id']."\">Follow Up</a></th>";
												}
												else {
													echo "<th align=\"center\" type=\"submit\"><a href=\"form_follow_hvc.php?id=".$data['id']."\">Follow Up</a></th>";
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