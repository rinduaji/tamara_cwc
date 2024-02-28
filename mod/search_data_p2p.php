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
					
			
					<form id='input' name="demoform" action='search_data_p2p.php' method='post' accept-charset='UTF-8'>
						
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
								<label style="color:#008B8B">TYPE</label>
								<select class="form-control" name="type_p2p" >
                                    <option value="ALL">ALL</option>
                                    <option value="REGULER">REGULER</option>
                                    <option value="CROSS">CROSS</option>
                                </select>
							</div>							
						</tr>
						<tr>	
							<div class="form-group">
								<label style="color:#008B8B">MSISDN</label>
								<input class="form-control" name="msisdn" >
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
											<th align="center"><font color="red" face="Tahoma" size="2">Perner</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Init Offer</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Label</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">MSISDN</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KTP</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KK</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO HP Lain</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Lahir</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tempat Lahir</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Email Pelanggan</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Alamat KTP Pelanggan</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Alamat Domisili</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kode Pos</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO CP Referensi</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama CP Referensi</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">CLS</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Setuju</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Type</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Reason</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Valid</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Revenue</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Tapping QCO</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login TL</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi TL</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Tapping TL</font></th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">ID_Return</font></th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Durasi</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</font></th>
										</thead>
										<tbody>
										<?php
                                        $no = 1;
										if (isset($_POST['search'])){
											if ($msisdn=="")
											{  
												echo "<div class=\"alert alert-danger\">Mohon periksa kembali! No Internet belum di isi !</div>";
											}	
                                            if($type_p2p!="ALL") {
                                                $s_type = " AND type_p2p='$type_p2p'";
                                            }										
                                            else {
                                                $s_type = "";
                                            }
											$query="SELECT * FROM app_tam_p2p WHERE msisdn = '$msisdn' $s_type";
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['perner']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['init_offer']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['label']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['msisdn']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['ktp']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['kk']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['no_hp_lain']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tgl_lahir']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tempat_lahir']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['email_plg']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['alamat_ktp_plg']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['alamat_domisili']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['kode_pos']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['no_cp_ref']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['nama_cp_ref']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['cls']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tgl_setuju']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['type_p2p']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>	

                                                <th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['revenue']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tgl_qco']."</th>	
                                                <th align=\"center\" style=\"font-size:10px\">".$data['upd_tl']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['rec_tl']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['tgl_tl']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['id_return_tl']."</th>
                                                <th align=\"center\" style=\"font-size:10px\">".$data['durasi']."</th>	

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