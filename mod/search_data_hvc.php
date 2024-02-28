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
					
			
					<form id='input' name="demoform" action='search_data_hvc.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>SEARCH DATA HVC</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						
						<tr>	
							<div class="form-group">
								<label style="color:#008B8B">No Internet</label>
								<input class="form-control" name="no_inet" >
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
											<th align="center"><font color="red" face="Tahoma" size="2">Internet</th>
											<th align="center"><font color="red" face="Tahoma" size="2">NCLI</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Telp</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</th>																				
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori HVC</th>										
											<th align="center"><font color="red" face="Tahoma" size="2">Input</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Durasi</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Upd QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekom QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Selisih Harga</th>							
										</thead>
										<tbody>
										<?php
										if (isset($_POST['search'])){
											if ($no_inet=="")
											{  
												echo "<div class=\"alert alert-danger\">Mohon periksa kembali! No Internet belum di isi !</div>";
											}											
											$query="SELECT tgl,login,nama_agent,area,no_telp,no_inet,ncli,nama_plg,jenis,status_call,valid,kategori_hvc,input,keterangan,upd_qco,rec_qco,selisih_harga 
											FROM app_tam_hvc WHERE no_inet = '$no_inet' ";
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($data = mysqli_fetch_array($hasil)) {
											echo"<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>											
												<th align=\"center\" style=\"font-size:10px\">".$data['no_inet']."</th>										
												<th align=\"center\" style=\"font-size:10px\">".$data['ncli']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['no_telp']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['status_call']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['kategori_hvc']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['durasi']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['selisih_harga']."</th>
												
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