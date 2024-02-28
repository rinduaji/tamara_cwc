<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$area = $_SESSION["area"];
$tgl=date("Y-m-d");

if(isset($pilih)) {
	$query1="select id, tgl_masuk , pola FROM app_tam_roosterfix WHERE tgl_masuk='$date' AND login='$login' AND jabatan like '$jb%' AND keterangan IS NULL";
	// echo $query1;
	// print_r($query1);
    $no=0;
    $hasil1 = mysqli_query($con,$query1) or die ("Query gagal!");
}
if(isset($cari)) {
	if($date_cari != "" AND $pola_anda != "" AND $pola_tukar != "") {
		// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
		// app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";
		$hari =date("d",strtotime($date));
		$bulan =date("m",strtotime($date));
		$tahun =date("Y",strtotime($date));

		if($jb != "") {
			$data_jabatan = " AND a.user3 LIKE '".$jb."%'";
		}
		else {
			$data_jabatan = "";
		}

		if($jb == "qa" || $jb == "Tabber"){
			$data_area = "";
		}
		else {
			$data_area = " AND a.user5='".$area."'";
		}
		// echo $date_cari;
		$query="SELECT b.id, b.tgl_masuk, a.user1, a.user2, a.user3, a.user5, b.pola FROM cc147_main_users_extended as a INNER JOIN 
		app_tam_roosterfix as b ON a.user1=b.login WHERE b.tgl_masuk='$date_cari' AND b.login <> '$login' AND 
		b.pola='$pola_tukar' $data_area $data_jabatan AND b.keterangan IS NULL ORDER BY a.user5, a.user2";
		// print_r($query);
		$no=0;
		$hasil = mysqli_query($con,$query) or die ("Query gagal!");
		$hasil_total = mysqli_num_rows($hasil);
	// echo $query;
		$id2=$id1;
	}
}

if(isset($buttonTKD)) {
	if($id_termohon != "" AND $id_pemohon != "" AND $login_pemohon != "" AND $login_termohon != "") {
		$query_tkd1="UPDATE app_tam_roosterfix SET keterangan = 'ReqTKD (".$login_pemohon.")', tkd_cuti='TKD TERMOHON', status_tkd_cuti='PENDING', key_tkd_cuti = 'TKD', kode_tkd_cuti = '".$login_pemohon."' WHERE id='$id_termohon'";
		$hasil_tkd1 = mysqli_query($con,$query_tkd1) or die ("Query gagal!");

		$query_tkd2="UPDATE app_tam_roosterfix SET keterangan = 'ReqTKD (".$login_termohon.")', tkd_cuti='TKD PEMOHON', status_tkd_cuti='PENDING', key_tkd_cuti = 'TKD', kode_tkd_cuti = '".$login_termohon."' WHERE id='$id_pemohon'";
		$hasil_tkd2 = mysqli_query($con,$query_tkd2) or die ("Query gagal!");
	}
}

if(isset($tgl_libur_pemohon)) {
	if($tgl_libur_pemohon != '') {
		$idLibur1= 0;
		$idLibur2= 0;

		$queryLiburPemohon="SELECT * FROM app_tam_roosterfix WHERE tgl_masuk='$tgl_libur_pemohon' AND login='$login_pemohon' AND keterangan IS NULL";
		// echo $queryLiburPemohon;
		$no=0;
		$hasilPemohon = mysqli_query($con,$queryLiburPemohon) or die ("Query gagal!");

		while($dataPemohon=mysqli_fetch_array($hasilPemohon)) {
			$idLibur1=$dataPemohon['id'];
		}

		$queryLiburPemohon1="SELECT * FROM app_tam_roosterfix WHERE tgl_masuk='$tgl_libur_pemohon' AND login='$login_termohon' AND keterangan IS NULL";
		// echo $queryLiburPemohon1;
		$no=0;
		$hasilPemohon1 = mysqli_query($con,$queryLiburPemohon1) or die ("Query gagal!");

		while($dataPemohon1=mysqli_fetch_array($hasilPemohon1)) {
			$idLibur2=$dataPemohon1['id'];
		}

		$query_tkd1="UPDATE app_tam_roosterfix SET keterangan = 'ReqTKDLibur (".$login_pemohon.") {".$tgl_libur_pemohon."}', tkd_cuti='TKD TERMOHON', status_tkd_cuti='PENDING', key_tkd_cuti = 'TKD LIBUR', kode_tkd_cuti = '".$login_pemohon."' WHERE id='$id_termohon'";
		$hasil_tkd1 = mysqli_query($con,$query_tkd1) or die ("Query gagal!");

		$query_tkd2="UPDATE app_tam_roosterfix SET keterangan = 'ReqTKDLibur (".$login_termohon.") {".$tgl_libur_pemohon."}', tkd_cuti='TKD PEMOHON', status_tkd_cuti='PENDING', key_tkd_cuti = 'TKD LIBUR', kode_tkd_cuti = '".$login_termohon."' WHERE id='$id_pemohon'";
		$hasil_tkd2 = mysqli_query($con,$query_tkd2) or die ("Query gagal!");

		
		$query_tkd1="UPDATE app_tam_roosterfix SET keterangan = 'ReqTKDLibur (".$login_termohon.") {".$tgl_libur_termohon."}', tkd_cuti='TKD PEMOHON', status_tkd_cuti='PENDING', key_tkd_cuti = 'TKD LIBUR', kode_tkd_cuti = '".$login_termohon."' WHERE id='$idLibur1'";
		$hasil_tkd1 = mysqli_query($con,$query_tkd1) or die ("Query gagal!");

		$query_tkd2="UPDATE app_tam_roosterfix SET keterangan = 'ReqTKDLibur (".$login_pemohon.") {".$tgl_libur_termohon."}', tkd_cuti='TKD TERMOHON', status_tkd_cuti='PENDING', key_tkd_cuti = 'TKD LIBUR', kode_tkd_cuti = '".$login_pemohon."' WHERE id='$idLibur2'";
		$hasil_tkd2 = mysqli_query($con,$query_tkd2) or die ("Query gagal!");
	}
}
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">

			
					<form name="demoform" action='form_tkd.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>Form TKD</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal</label>
								<input class="form-control"
										   type="date"
										   name="date"
										   placeholder="ex: 2018-12-31"
									/>
							</div>
						</tr>
						<tr>
							<input name="pilih" type="submit" class="btn btn-info" Value="PILIH">
						</tr>
						<br><br>
					</form>
					<form name="demoform" action='form_tkd.php' method='post' accept-charset='UTF-8'>
						<?php
							while($data1 = mysqli_fetch_array($hasil1)) {
						?>
						<input class="form-control"
										   type="hidden"
										   name="id1" 
										   value="<?=$data1['id']?>" 
										   readonly
									/>
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">tanggal</label>
								<input class="form-control"
										   type="text"
										   name="date_cari" 
										   value="<?=$data1['tgl_masuk']?>" 
										   readonly
									/>
							</div>
						</tr>
                        <tr>
							<div class="form-group">
								
								<label style="color:#008B8B">Pola Anda</label>
								<input class="form-control"
										   type="text"
										   name="pola_anda"
										   value="<?=$data1['pola']?>" readonly
									/>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Pola Tukar</label>
								<?php
									$tgl_cari = $data1['tgl_masuk'];
									$query_cari="select a.pola, b.masuk, b.pulang from app_tam_roosterfix as a INNER JOIN 
									app_tam_master_pola as b ON a.pola = b.pola WHERE a.login <> '$login' AND 
									a.jabatan LIKE '%$jb%' AND a.tgl_masuk = '$tgl_cari' AND (a.keterangan = '' OR a.keterangan is NULL) GROUP BY a.pola";
									// echo $query2;


									$hasil_cari = mysqli_query($con,$query_cari) or die ("Query gagal!");
								?>
								<select class="form-control"
										   name="pola_tukar"
								>
									<option value="">-- Pilih Pola --</option>
									<?php
										if($data1['pola'] != "CT") {
											while($data_cari=mysqli_fetch_array($hasil_cari)) {
												if($data_cari['pola'] != 'CT') {
									?>
												<option value="<?=$data_cari['pola']?>"><?=$data_cari['pola']?> || <?=$data_cari['masuk']?> || <?=$data_cari['pulang']?></option>
									<?php
												}
											}
										}
									?>
								</select>
							</div>
						</tr>
						
							<tr>
								<input name="cari" type="submit" class="btn btn-danger" Value="Cari">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='form_tkd.php';">Refresh</button>
							</tr>
						<?php
							}
						?>	
						</tr>
						</form>
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Daftar Jadwal</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
                                if ($date=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Agent Site belum dipilih !</div>";
								}
								}
								?>
								<div style="overflow-x:auto;">
									<table class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jabatan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Pola</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
                                      
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_masuk']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user1']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user3']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user5']."</th>
										    <th align=\"center\" style=\"font-size:10px\">".$data['pola']."</th>
											<th align=\"center\" style=\"font-size:10px\">";
										if($data['pola'] == 'X') {
											echo "<th align=\"center\" style=\"font-size:10px\">
												<button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal".$data['id']."\">Request TKD Libur</button>
											</th>";
										
										}
										else if($pola_anda == 'X'){
											echo "<th align=\"center\" style=\"font-size:10px\">
												<button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModalLibur".$data['id']."\">Request TKD Libur</button>
											</th>";
										}
										else {
											echo "<form method=\"POST\" action=\"form_tkd.php\">
											<input type='hidden' name='id_termohon' value='".$data['id']."'/>
											<input type='hidden' name='id_pemohon' value='".$id2."'/>
											<input type='hidden' name='login_pemohon' value='".$username."'/>
											<input type='hidden' name='login_termohon' value='".$data['user1']."'/>
											<button class=\"btn btn-primary\" name=\"buttonTKD\" value=\"ReqTKD\">Request TKD</button>
											</form>
											</th>";
										}
												
												
                                         
											?>


											<!-- Modal -->
											<div class="modal fade" id="myModal<?=$data['id']?>" role="dialog" tabindex="-1" role="dialog" aria-labelledby="Form TKD Libur" aria-hidden="true" data-backdrop="false">
												<div class="modal-dialog">
												
													<!-- Modal content-->
													<div class="modal-content">
													<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Form Libur TKD</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<form action="form_tkd.php" method="POST" id="FormRekom_qa">
																		<div class="modal-body">
																			<div class="form-group">
																			<input type='hidden' name='id_termohon' value='<?=$data['id']?>'/>
																			<input type='hidden' name='id_pemohon' value='<?=$id2?>'/>
																			<input type='hidden' name='login_pemohon' value='<?=$username?>'/>
																			<input type='hidden' name='login_termohon' value='<?=$data['user1']?>'/>
																			<input type='hidden' name='tgl_libur_termohon' value='<?=$data['tgl_masuk']?>'/>
																				<div class="form-group">
																					<label for="tgl_libur_pemohon">Tanggal Libur Pemohon</label>
																				<?php
																					$tgllibur = $data1['tgl_masuk'];
																					$querylibur="SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b 
																					ON a.user1 = b.login WHERE b.pola= 'X' AND b.login = '$login' AND b.tgl_masuk >= '$tgl'";
																					// echo $query2;

																					$hasillibur = mysqli_query($con,$querylibur) or die ("Query gagal!");
																				?>
																				<select class="form-control"
																						name="tgl_libur_pemohon"
																				>
																					<option value="">-- Pilih Tanggal --</option>
																					<?php
																						
																						while($datalibur=mysqli_fetch_array($hasillibur)) {
																					?>
																						<option value="<?=$datalibur['tgl_masuk']?>"><?=$datalibur['tgl_masuk']?></option>
																					<?php
																						}
																					?>
																				</select>
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer">
																			<button type="submit" class="btn btn-primary">Save</button>
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</form>
													</div>
													
												</div>
											</div>

											<!-- Modal -->
											<div class="modal fade" id="myModalLibur<?=$data['id']?>" role="dialog" tabindex="-1" role="dialog" aria-labelledby="Form TKD Libur" aria-hidden="true" data-backdrop="false">
												<div class="modal-dialog">
												
													<!-- Modal content-->
													<div class="modal-content">
													<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Form Libur TKD</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<form action="form_tkd.php" method="POST" id="FormRekom_qa">
																		<div class="modal-body">
																			<div class="form-group">
																			<input type='hidden' name='id_termohon' value='<?=$data['id']?>'/>
																			<input type='hidden' name='id_pemohon' value='<?=$id2?>'/>
																			<input type='hidden' name='login_pemohon' value='<?=$username?>'/>
																			<input type='hidden' name='login_termohon' value='<?=$data['user1']?>'/>
																			<input type='hidden' name='tgl_libur_termohon' value='<?=$data['tgl_masuk']?>'/>
																				<div class="form-group">
																					<label for="tgl_libur_pemohon">Tanggal Libur Pemohon</label>
																				<?php
																					$tgllibur = $data1['tgl_masuk'];
																					$loginPilih = $data['user1'];
																					$querylibur="SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b 
																					ON a.user1 = b.login WHERE b.pola= 'X' AND b.login = '$loginPilih' AND b.tgl_masuk >= '$tgl'";
																					// echo $query2;

																					$hasillibur = mysqli_query($con,$querylibur) or die ("Query gagal!");
																				?>
																				<select class="form-control"
																						name="tgl_libur_pemohon"
																				>
																					<option value="">-- Pilih Tanggal --</option>
																					<?php
																						
																						while($datalibur=mysqli_fetch_array($hasillibur)) {
																					?>
																						<option value="<?=$datalibur['tgl_masuk']?>"><?=$datalibur['tgl_masuk']?></option>
																					<?php
																						}
																					?>
																				</select>
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer">
																			<button type="submit" class="btn btn-primary">Save</button>
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</form>
													</div>
													
												</div>
											</div>

												<?php
														// $Page = $Page + 1;
														echo "</tr>";
													}
													
													?>	
                            
										</tbody>
									</table>
									
								</div>
								<table>
								
								</table>
								</div>
								
							</div>
						</div>
					</form>
                </div>
				</div>		
						</div>
				</div>
			</div>
			</div>
		</div>
        
                                                
</html>
<?php	require_once("../deft_foo.php"); ?>

