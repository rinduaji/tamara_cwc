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
					
			
					<form id='input' name="demoform" action='list_recall_p2p.php' method='post' accept-charset='UTF-8'>
						<div>
						
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">LIST RECALL P2P CROSS</h4>
								</div>
								<div style="overflow-x:auto;">
									
									<table id="data-table" class="table table-hover table-striped">
										<thead>
                                        <th align="center"><font color="red" face="Tahoma" size="2">Tanggal</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Perner</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Init Offer</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Type</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Label</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">MSISDN</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">reason</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</font></th>
                                            
                                            <th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi&nbsp;QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi&nbsp;TL</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Return&nbsp;QCO</font></th>

											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
										$query="SELECT a.id,a.tgl,a.login,a.perner,a.nama_agent,a.area,a.init_offer,a.label,a.msisdn,a.jenis,a.status,a.kategori,a.reason,a.keterangan,a.rec_qco,a.rec_tl,a.id_return_tl,a.type_p2p FROM app_tam_p2p a LEFT JOIN app_tam_return b ON a.id_return_tl=b.keterangan WHERE a.follow = '5' AND a.type_p2p='CROSS'  $whr ORDER BY a.tgl DESC";
										// echo "$query";
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
                                            echo"<tr><th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['perner']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['init_offer']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['type_p2p']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['label']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['msisdn']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['id_return_tl']."</th>
											";
										if ($jb=="Agent" || $login<>""){
											if($data['jenis'] == "Caring Retensi"){
												echo "<th align=\"center\" type=\"submit\" ><a href=\"list_recall_p2p.php?id=".$data['id']."\">Recall</a></th>";
											}
											else {
												echo "<th align=\"center\" type=\"submit\" ><a href=\"form_recall_p2p.php?id=".$data['id']."\">Recall</a></th>";
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