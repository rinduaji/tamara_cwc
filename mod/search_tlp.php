<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");



?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='search_tlp.php' method='post' accept-charset='UTF-8'>
					
						<div align="center" class="panel-heading">
                            <b>SEARCH NO TELEPON DUPLICATE</b>
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
										   type="date"
										   name="date"
										   placeholder="ex: 30-07-2020"
										   required
									/>
							</div>
						</tr>
						<tr>
							<input name="search" type="submit" class="btn btn-danger" Value="Search">
						</tr>
						</table>
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Hasil Searching</h4>
								</div>
								<div style="overflow-x:auto;">
									
									<table id="data-table" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Site</th>
									
											<th align="center"><font color="red" face="Tahoma" size="2">No Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama DM</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Telp</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Penerima</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Reg</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Reason Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Upd QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekom QCO</th>
										</thead>
										<tbody>
										<?php
										if (isset($_POST['search'])){
											$cari_tanggal = date("Y-m-d",strtotime($date));; 
											if ($_POST['date']=="")
											{  
												echo "<div class=\"alert alert-danger\">Mohon periksa kembali! No Telp atau Fastel belum di isi !</div>";
											}
											
											$query="SELECT 
	atd.tgl as tanggal, atd.login, u.user2 as nama , u.user5 as site , atd.fastel, atd.nama_dm, atd.tlp, atd.penerima, atd.reg, atd.jenis, atd.status, atd.valid, atd.kategori, atd.reason, atd.input, atd.upd_qco, atd.rec_qco
FROM 
	app_tam_data2_2020 as atd 
INNER JOIN 
	cc147_main_users_extended as u 
ON atd.login = u.user1 
WHERE atd.valid='Valid' and atd.status='Contacted' AND atd.kategori='Agree' AND DATE_FORMAT(atd.tgl, '%d-%m-%Y') = '$cari_tanggal' 
AND atd.tlp IN 
(
	SELECT atd1.tlp
	FROM 
		app_tam_data2_2020 as atd1 
	INNER JOIN 
		cc147_main_users_extended as u1 
	ON atd1.login = u1.user1 
	WHERE atd1.valid='Valid' and atd1.status='Contacted' AND atd1.kategori='Agree' AND DATE_FORMAT(atd1.tgl, '%d-%m-%Y') = '$cari_tanggal' 
	GROUP BY 
		atd1.tlp 
	HAVING COUNT(atd1.tlp) > 1 
) 
ORDER BY atd.login, atd.tlp";
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($data = mysqli_fetch_array($hasil)) {
											echo"<th align=\"center\" style=\"font-size:10px\">".$data['tanggal']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['nama']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['site']."</th>
												
												<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>										
												<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
												<th align=\"center\" style=\"font-size:10px\"><strong>".$data['tlp']."<strong></th>
												<th align=\"center\" style=\"font-size:10px\">".$data['penerima']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['reg']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
												</tr>
												";
											}

										}
										?>
										</tbody>
									</table>
									
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