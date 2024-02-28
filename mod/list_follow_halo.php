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
					
			
					<form id='input' name="demoform" action='list_follow_halo.php' method='post' accept-charset='UTF-8'>
						<div>
						
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">LIST FOLLOW UP HALO</h4>
								</div>
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO Telepon</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">fastel</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KTP</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KK</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Alamat</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Alamat Kirim</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Email</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Paket Halo</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Setuju</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">reason</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</font></th>
										
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
	
										// $query="SELECT id,tgl,login,fastel,nama_dm,ket,tlp,rec_qco,rec_tl,jenis FROM app_tam_data2  WHERE follow = '8' AND input ='New' $whr ORDER BY tgl Desc";
										$query="SELECT * FROM app_tam_halo a  WHERE a.follow = '8' AND a.kategori='Follow UP' $whr ORDER BY a.tgl DESC";
										
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_telp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_ktp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_kk']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['alamat']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['alamat_kirim']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['email']."</th>	
											<th align=\"center\" style=\"font-size:10px\">".$data['paket_halo']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_setuju']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
											";
											if ($jb=="Agent" || $login<>""){
													echo "<th align=\"center\" type=\"submit\"><a href=\"form_follow_halo_new.php?id=".$data['id']."\">Follow Up</a></th>";
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