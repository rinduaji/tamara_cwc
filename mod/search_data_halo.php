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
					
			
					<form id='input' name="demoform" action='search_data_halo.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>SEARCH DATA HALO</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						
						<tr>	
							<div class="form-group">
								<label style="color:#008B8B">NO TELEPON</label>
								<input class="form-control" name="no_telp" >
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
                                        <th align="center"><font color="red" face="Tahoma" size="2">No</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Tanggal</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO Telepon</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">MSISDN</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Fastel</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KTP</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KK</font></th>
											
											<th align="center"><font color="red" face="Tahoma" size="2">Alamat Kirim</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kota / Kabupaten</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Setuju</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tempat Lahir</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Lahir</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</font></th>
                                            
                                            <th align="center"><font color="red" face="Tahoma" size="2">Valid</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">reason</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">UPD QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</font></th>
										</thead>
										<tbody>
										<?php
                                        $no = 1;
										if (isset($_POST['search'])){
											if ($no_telp=="")
											{  
												echo "<div class=\"alert alert-danger\">Mohon periksa kembali! No Internet belum di isi !</div>";
											}											
											$query="SELECT * FROM app_tam_halo WHERE no_telp = '$no_telp' ";
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['no_telp']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['msisdn']."</th>
												
                                                <th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['no_ktp']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['no_kk']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['alamat_kirim']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['kota']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tgl_setuju']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tempat_lahir']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tgl_lahir']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>	

                                                <th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
                                               
                                                <th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
												
												</tr>
												";
                                                $no = $no + 1;
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