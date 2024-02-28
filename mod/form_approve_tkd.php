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

if(isset($search)) {
	if($date != "") {
		// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
		// app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";
		$hari =date("d",strtotime($date));
		$bulan =date("m",strtotime($date));
		$tahun =date("Y",strtotime($date));
	
		$query="SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login WHERE 
		b.keterangan <> '' AND b.login = '$login' AND b.tgl_masuk='$date'";
		// echo $query;
		$angka=0;
		$hasil = mysqli_query($con,$query) or die ("Query gagal!");
		$hasil_total = mysqli_num_rows($hasil);
		$idTkd = array();

		while($data = mysqli_fetch_array($hasil)) {
			if(strpos($data['keterangan'], 'Libur') !== false){
				if(strpos($data['keterangan'],'(') != '' OR strpos($data['keterangan'],'(') != NULL) {
					$dataKeterangan1 = strpos($data['keterangan'],'(') + 1;
					$dataKeterangan2 = strpos($data['keterangan'],')');
					$len = $dataKeterangan2 - $dataKeterangan1;
					$idTkd = substr($data['keterangan'], $dataKeterangan1, $len);
					
					$query1="SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login WHERE 
					b.keterangan <> '' AND b.login = '$idTkd' AND b.tgl_masuk='$date'";

					$queryCekPemohon = "SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login WHERE 
					b.keterangan <> '' AND b.login = '$idTkd' AND b.tgl_masuk='$date' AND b.tkd_cuti='TKD TERMOHON'";
					$hasilCekPemohon = mysqli_query($con,$queryCekPemohon) or die ("Query gagal!");
					$totalCekPemohon = mysqli_num_rows($hasilCekPemohon);
					// print_r($totalCekPemohon);
					// echo $query;
					$no=0;
					$hasil1 = mysqli_query($con,$query1) or die ("Query gagal!");
					while($data1 = mysqli_fetch_array($hasil1)) {

						if($totalCekPemohon == "1") {
							$data_tampil = array(
								array(
									'tgl' => $date ,
									'pemohon' => $data['user2'],
									'pola_pemohon' => $data['pola'],
									'termohon' => $data1['user2'],
									'pola_termohon' => $data1['pola'],
									'status' =>  $data['status_tkd_cuti'],
									'loginPemohon' => $data['login'],
									'loginTermohon' => $data1['login']
									)
								);
						}
						else {
							$data_tampil = array(
								array(
									'tgl' => $date ,
									'termohon' => $data['user2'],
									'pola_termohon' => $data['pola'],
									'pemohon' => $data1['user2'],
									'pola_pemohon' => $data1['pola'],
									'status' =>  $data['status_tkd_cuti'],
									'loginTermohon' => $data['login'],
									'loginPemohon' => $data1['login']
									)
								);
						}
					}

					$tanggalKeterangan1 = strpos($data['keterangan'],'{') + 1;
					$tanggalKeterangan2 = strpos($data['keterangan'],'}');
					$len1 = $tanggalKeterangan2 - $tanggalKeterangan1;
					$tanggalLiburTkd = substr($data['keterangan'], $tanggalKeterangan1, $len1);

					if(strpos($data['keterangan'],'{') != '' OR strpos($data['keterangan'],'{') != NULL) {
						$query4="SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login WHERE 
						b.keterangan <> '' AND b.login = '$login' AND b.tgl_masuk='$tanggalLiburTkd'";

						// echo $query4;
						$angka=0;
						$hasil4 = mysqli_query($con,$query4) or die ("Query gagal!");
						$hasil_total4 = mysqli_num_rows($hasil4);

						while($data4 = mysqli_fetch_array($hasil4)) {
							$query2="SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login WHERE 
							b.keterangan <> '' AND b.login = '$idTkd' AND b.tgl_masuk='$tanggalLiburTkd'";
							// echo $query2;
							
							$queryCekPemohon2 = "SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login WHERE 
							b.keterangan <> '' AND b.login = '$idTkd' AND b.tgl_masuk='$tanggalLiburTkd' AND b.tkd_cuti='TKD PEMOHON'";
							$hasilCekPemohon2 = mysqli_query($con,$queryCekPemohon2) or die ("Query gagal!");
							$totalCekPemohon2 = mysqli_num_rows($hasilCekPemohon2);
							// print_r($totalCekPemohon2);
							$no=0;
							$hasil2 = mysqli_query($con,$query2) or die ("Query gagal!");
							while($data2 = mysqli_fetch_array($hasil2)) {
								if($totalCekPemohon2 == "1"){
									$data_tampil2 = array(
										array(
											'tgl' => $tanggalLiburTkd ,
											'termohon' => $data4['user2'],
											'pola_termohon' => $data4['pola'],
											'pemohon' => $data2['user2'],
											'pola_pemohon' => $data2['pola'],
											'status' =>  $data2['status_tkd_cuti'],
											'loginTermohon' => $data4['login'],
											'loginPemohon' => $data2['login']
										)
									);
								}
								else{

									$data_tampil2 = array(
										array(
											'tgl' => $tanggalLiburTkd ,
											'pemohon' => $data4['user2'],
											'pola_pemohon' => $data4['pola'],
											'termohon' => $data2['user2'],
											'pola_termohon' => $data2['pola'],
											'status' =>  $data2['status_tkd_cuti'],
											'loginPemohon' => $data4['login'],
											'loginTermohon' => $data2['login']
										)
									);
								}
								
							}
						}
					}
				}
			}
			else {
				if(strpos($data['keterangan'],'(') != '' OR strpos($data['keterangan'],'(') != NULL) {
					$dataKeterangan1 = strpos($data['keterangan'],'(') + 1;
					$dataKeterangan2 = strpos($data['keterangan'],')');
					$len = $dataKeterangan2 - $dataKeterangan1;
					$idTkd = substr($data['keterangan'], $dataKeterangan1, $len);
					
					$query1="SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login WHERE 
					b.keterangan <> '' AND b.login = '$idTkd' AND b.tgl_masuk='$date'";

					$queryCekPemohon = "SELECT * FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login WHERE 
					b.keterangan <> '' AND b.login = '$idTkd' AND b.tgl_masuk='$date' AND b.tkd_cuti='TKD TERMOHON'";
					$hasilCekPemohon = mysqli_query($con,$queryCekPemohon) or die ("Query gagal!");
					$totalCekPemohon = mysqli_num_rows($hasilCekPemohon);
					// print_r($totalCekPemohon);
					// echo $query;
					$no=0;
					$hasil1 = mysqli_query($con,$query1) or die ("Query gagal!");
					while($data1 = mysqli_fetch_array($hasil1)) {
						if($totalCekPemohon == "1") {
							$data_tampil = array(
								array(
									'tgl' => $date ,
									'pemohon' => $data['user2'],
									'pola_pemohon' => $data['pola'],
									'termohon' => $data1['user2'],
									'pola_termohon' => $data1['pola'],
									'status' => $data['status_tkd_cuti'],
									'loginPemohon' => $data['login'],
									'loginTermohon' => $data1['login']
									)
								);
						}
						else {
							$data_tampil = array(
								array(
									'tgl' => $date ,
									'termohon' => $data['user2'],
									'pola_termohon' => $data['pola'],
									'pemohon' => $data1['user2'],
									'pola_pemohon' => $data1['pola'],
									'status' => $data['status_tkd_cuti'],
									'loginTermohon' => $data['login'],
									'loginPemohon' => $data1['login']
									)
								);
						}
					}
				}
			}
		}
	}
}

if(isset($buttonAppTKD)) {
	$query_update_app_termohon = "UPDATE app_tam_roosterfix SET keterangan='$login_termohon1', pola='$polaPemohon1', status_tkd_cuti='DONE', kode_tkd_cuti = '".$login_termohon1."' WHERE login='$login_pemohon1' AND tgl_masuk='$tanggal_app1'";
	mysqli_query($con,$query_update_app_termohon) or die ("Query gagal!");
	$query_update_app_pemohon = "UPDATE app_tam_roosterfix SET keterangan='$login_pemohon1', pola='$polaTermohon1', status_tkd_cuti='DONE', kode_tkd_cuti = '".$login_pemohon1."' WHERE login='$login_termohon1' AND tgl_masuk='$tanggal_app1'";
	mysqli_query($con,$query_update_app_pemohon) or die ("Query gagal!");

	if(isset($login_pemohon2)){
		$query_update_app_termohon2 = "UPDATE app_tam_roosterfix SET keterangan='$login_termohon2', pola='$polaPemohon2', status_tkd_cuti='DONE', kode_tkd_cuti = '".$login_termohon1."' WHERE login='$login_pemohon2' AND tgl_masuk='$tanggal_app2'";
		mysqli_query($con,$query_update_app_termohon2) or die ("Query gagal!");
		$query_update_app_pemohon2 = "UPDATE app_tam_roosterfix SET keterangan='$login_pemohon2', pola='$polaTermohon2', status_tkd_cuti='DONE', kode_tkd_cuti = '".$login_pemohon2."' WHERE login='$login_termohon2' AND tgl_masuk='$tanggal_app2'";
		mysqli_query($con,$query_update_app_pemohon2) or die ("Query gagal!");
	}
	// echo $query_update_app_pemohon;
}

if(isset($buttonRejectTKD)) {
	$query_update_reject_termohon = "UPDATE app_tam_roosterfix SET keterangan='', status_tkd_cuti='', kode_tkd_cuti = '' WHERE login='$login_pemohon1' AND tgl_masuk='$tanggal_app1'";
	mysqli_query($con,$query_update_reject_termohon) or die ("Query gagal!");
	$query_update_reject_pemohon = "UPDATE app_tam_roosterfix SET keterangan='', status_tkd_cuti='', kode_tkd_cuti = '' WHERE login='$login_termohon1' AND tgl_masuk='$tanggal_app1'";
	mysqli_query($con,$query_update_reject_pemohon) or die ("Query gagal!");

	if(isset($login_pemohon2)){
		$query_update_reject_termohon2 = "UPDATE app_tam_roosterfix SET keterangan='', status_tkd_cuti='', kode_tkd_cuti = '' WHERE login='$login_pemohon2' AND tgl_masuk='$tanggal_app2'";
		mysqli_query($con,$query_update_reject_termohon2) or die ("Query gagal!");
		$query_update_reject_pemohon2 = "UPDATE app_tam_roosterfix SET keterangan='', status_tkd_cuti='', kode_tkd_cuti = '' WHERE login='$login_termohon2' AND tgl_masuk='$tanggal_app2'";
		mysqli_query($con,$query_update_reject_pemohon2) or die ("Query gagal!");
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
					
			
					<form name="demoform" action='form_approve_tkd.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>Form Approve TKD</b>
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
							<input name="search" type="submit" class="btn btn-danger" Value="Search">
							<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='form_approve_tkd.php';">Refresh</button>
						</tr>
						<br><br>
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
											<th align="center"><font color="red" face="Tahoma" size="2">NO</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Login Pemohon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pemohon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Pola Pemohon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login Termohon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Termohon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Pola Termohon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
										$page=1;
										// print_r($data_tampil2);
										if(isset($data_tampil2)) {
											while($no < COUNT($data_tampil)) {
												echo"<tr>
													<th align=\"center\" style=\"font-size:10px\" rowspan=\"2\">".$page."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['tgl']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['loginPemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['pemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['pola_pemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['loginTermohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['termohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['pola_termohon']."</th>
													<th align=\"center\" style=\"font-size:10px\"  rowspan=\"2\">".$data_tampil[$no]['status']."</th>
													<th align=\"center\" style=\"font-size:10px\" rowspan=\"2\">";
												if($totalCekPemohon == "0" && $totalCekPemohon2 == "1") {
												echo"<form method=\"POST\" action=\"form_approve_tkd.php\">
														<input type='hidden' name='login_termohon1' value='".$data_tampil[$no]['loginTermohon']."'/>
														<input type='hidden' name='login_pemohon1' value='".$data_tampil[$no]['loginPemohon']."'/>
														<input type='hidden' name='tanggal_app1' value='".$data_tampil[$no]['tgl']."'/>
														<input type='hidden' name='polaTermohon1' value='".$data_tampil[$no]['pola_pemohon']."'/>
														<input type='hidden' name='polaPemohon1' value='".$data_tampil[$no]['pola_termohon']."'/>
														<input type='hidden' name='login_termohon2' value='".$data_tampil2[$no]['loginTermohon']."'/>
														<input type='hidden' name='login_pemohon2' value='".$data_tampil2[$no]['loginPemohon']."'/>
														<input type='hidden' name='tanggal_app2' value='".$data_tampil2[$no]['tgl']."'/>
														<input type='hidden' name='polaTermohon2' value='".$data_tampil2[$no]['pola_pemohon']."'/>
														<input type='hidden' name='polaPemohon2' value='".$data_tampil2[$no]['pola_termohon']."'/>
														<button class=\"btn btn-primary\" name=\"buttonAppTKD\" value=\"ReqAppTKD\">Approve</button>
													</form>";
												}
												echo"<form method=\"POST\" action=\"form_approve_tkd.php\">
														<input type='hidden' name='login_termohon1' value='".$data_tampil[$no]['loginTermohon']."'/>
														<input type='hidden' name='login_pemohon1' value='".$data_tampil[$no]['loginPemohon']."'/>
														<input type='hidden' name='tanggal_app1' value='".$data_tampil[$no]['tgl']."'/>
														<input type='hidden' name='polaTermohon1' value='".$data_tampil[$no]['pola_pemohon']."'/>
														<input type='hidden' name='polaPemohon1' value='".$data_tampil[$no]['pola_termohon']."'/>
														<input type='hidden' name='login_termohon2' value='".$data_tampil2[$no]['loginTermohon']."'/>
														<input type='hidden' name='login_pemohon2' value='".$data_tampil2[$no]['loginPemohon']."'/>
														<input type='hidden' name='tanggal_app2' value='".$data_tampil2[$no]['tgl']."'/>
														<input type='hidden' name='polaTermohon2' value='".$data_tampil2[$no]['pola_pemohon']."'/>
														<input type='hidden' name='polaPemohon2' value='".$data_tampil2[$no]['pola_termohon']."'/>
														<button class=\"btn btn-warning\" name=\"buttonRejectTKD\" value=\"ReqRejectTKD\">Reject</button>
													</form>
													</th>";
														
													echo "</tr>
														<tr>
															<th align=\"center\" style=\"font-size:10px\">".$data_tampil2[$no]['tgl']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data_tampil2[$no]['loginPemohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data_tampil2[$no]['pemohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data_tampil2[$no]['pola_pemohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data_tampil2[$no]['loginTermohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data_tampil2[$no]['termohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data_tampil2[$no]['pola_termohon']."</th>
															</tr>";
																$no++;
																$page++;
															}
										}
										else {
											$page=1;
										if(isset($data_tampil)){
										while($no < COUNT($data_tampil)) {
										echo"<tr>
											<th align=\"center\" style=\"font-size:10px\">".$page."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['loginPemohon']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['pemohon']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['pola_pemohon']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['loginTermohon']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['termohon']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['pola_termohon']."</th>
										    <th align=\"center\" style=\"font-size:10px\">".$data_tampil[$no]['status']."</th>
											<th align=\"center\" style=\"font-size:10px\">";
										if($login != $data_tampil[$no]['loginPemohon']) {
										echo "<form method=\"POST\" action=\"form_approve_tkd.php\">
												<input type='hidden' name='login_termohon1' value='".$data_tampil[$no]['loginTermohon']."'/>
												<input type='hidden' name='login_pemohon1' value='".$data_tampil[$no]['loginPemohon']."'/>
												<input type='hidden' name='tanggal_app1' value='".$data_tampil[$no]['tgl']."'/>
												<input type='hidden' name='polaTermohon1' value='".$data_tampil[$no]['pola_pemohon']."'/>
												<input type='hidden' name='polaPemohon1' value='".$data_tampil[$no]['pola_termohon']."'/>
												<button class=\"btn btn-primary\" name=\"buttonAppTKD\" value=\"ReqAppTKD\">Approve</button>
											</form>";
										}
										echo"<form method=\"POST\" action=\"form_approve_tkd.php\">
												<input type='hidden' name='login_termohon1' value='".$data_tampil[$no]['loginTermohon']."'/>
												<input type='hidden' name='login_pemohon1' value='".$data_tampil[$no]['loginPemohon']."'/>
												<input type='hidden' name='tanggal_app1' value='".$data_tampil[$no]['tgl']."'/>
												<input type='hidden' name='polaTermohon1' value='".$data_tampil[$no]['pola_pemohon']."'/>
												<input type='hidden' name='polaPemohon1' value='".$data_tampil[$no]['pola_termohon']."'/>
												<button class=\"btn btn-warning\" name=\"buttonRejectTKD\" value=\"ReqRejectTKD\">Reject</button>
											</form>
											</th>";
												
														echo "</tr>";
														$no++;
														$page++;
													}
												}
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
                </div>
				</div>		
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
        
                                                
</html>
<script>
// $('#input').change( function() {
//             // var x = $('#input').val();
//             // $('#alasan').prop('disabled','true');
//             // $('#anti_decline').prop('disabled','true');
//             // if(x == 'NOT OK') {
//             //     $('#alasan').removeAttr('disabled');
//             //     $('#anti_decline').removeAttr('disabled');
//             // }
//             // alert(x);
// 			$("#NoOk").toggle();
//         });
$('#myMODAL').on('show.bs.modal', function(event) {
// $('#NoOk').hide();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data('id');
  console.log(ID);
  var STATUS = button.data('status');
  $('input[name="id"]').val(ID);
  $('select[name="status_login"]').val(STATUS);
//   $('#input').change( function() {
//               if(x == 'NOT OK') {
//                 $("#NoOk").show();
//             }
// 			else {
// 				$("#NoOk").hide();
// 			}			
});
</script>
<?php	require_once("../deft_foo.php"); ?>

