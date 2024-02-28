<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl=date("Y-m-d");

if($date1 != "" OR $date2 != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";
    // $hari =date("d",strtotime($date));
    // $bulan =date("m",strtotime($date));
    // $tahun =date("Y",strtotime($date));

	$query="SELECT b.date_absen,a.user1, a.user2, a.user3, a.user4, a.user5, b.`status`, b.keterangan, e.masuk, e.pulang FROM cc147_main_users_extended as a INNER JOIN app_tam_absen as b ON a.user1 = b.username 
			INNER JOIN app_tam_roosterfix as c ON b.id_rooster = c.id INNER JOIN cc147_main_users as d ON d.username=a.user1 INNER JOIN app_tam_master_pola as e ON c.pola=e.pola WHERE 
			b.date_absen BETWEEN '$date1 00:00:00' AND '$date2 23:59:59' AND c.login='$login' ORDER BY c.tgl_masuk, a.user5, a.user2, b.keterangan ASC";

	$no=0;
    $hasil = mysqli_query($con,$query) or die ("Query gagal!");
    $hasil_total = mysqli_num_rows($hasil);
// echo $query;
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
					
			
					<form name="demoform" action='report_absen_agent.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>ABSEN</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal Awal</label>
								<input class="form-control"
										   type="date"
										   name="date1"
										   placeholder="ex: 2018-12-31"
									/>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal Akhir</label>
								<input class="form-control"
										   type="date"
										   name="date2"
										   placeholder="ex: 2018-12-31"
									/>
							</div>
						</tr>
                        <tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='report_absen_agent.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Daftar Rooster</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
                                if ($date1=="" OR $date2=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Inputan anda !</div>";
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
											<th align="center"><font color="red" face="Tahoma" size="2">Jam Absen</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Terlambat</th>	
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
										while($data = mysqli_fetch_array($hasil)) {
											$date_sub = date("Y-m-d")." ".$data['masuk'].":00";	
											$dateBegin = date("Y-m-d h:i:s", strtotime($data['date_absen']));
											$dateEnd = date("Y-m-d h:i:s", strtotime($date_sub));
											if($dateBegin > $dateEnd){									
												$datetime1 = new DateTime($date_sub);
												$datetime2 = new DateTime($data['date_absen']);
												$interval = $datetime2->diff($datetime1);
												$elapsed = $interval->format('%h Jam %i Menit %s Detik');
											}
											else {
												$elapsed = "TIDAK TERLAMBAT";
											}

											if($data['keterangan'] == "IN") {
												echo"<tr  style=\"background-color:powderblue;\">
													<th align=\"center\" style=\"font-size:10px\">".date("Y-m-d",strtotime($data['date_absen']))."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['user1']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['user3']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['user5']."</th>
													<th align=\"center\" style=\"font-size:10px\">".date("H:i:s",strtotime($data['date_absen']))."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']." || Jam Masuk (".$data['masuk'].":00) || JamPulang (".$data['pulang'].":00)</th>
													<th align=\"center\" style=\"font-size:12px\">".$elapsed."</th>";
													}
													else if($data['keterangan'] == "OUT") {
														echo"<tr  style=\"background-color:yellow;\">
														<th align=\"center\" style=\"font-size:10px\">".date("Y-m-d",strtotime($data['date_absen']))."</th>
														<th align=\"center\" style=\"font-size:10px\">".$data['user1']."</th>
														<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
														<th align=\"center\" style=\"font-size:10px\">".$data['user3']."</th>
														<th align=\"center\" style=\"font-size:10px\">".$data['user5']."</th>
														<th align=\"center\" style=\"font-size:10px\">".date("H:i:s",strtotime($data['date_absen']))."</th>
														<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']." || Jam Masuk (".$data['masuk'].":00) || JamPulang (".$data['pulang'].":00)</th>
														<th align=\"center\" style=\"font-size:10px\">-</th>";
													}	
												
                                         
											?>

											<!-- Modal Popup to EDIT Deal Form
											<div class="modal fade" id="editDealModal-<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="editDealModalLabel" aria-hidden="true" data-backdrop="false">
													<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Update List Decline</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="report_rooster_agent.php" method="POST" id="FormRekom_qa">
																	<input type="text" class="form-control" name="id" id="id" value="<?php echo $data['id']; ?>">
																											<input type="text" class="form-control" name="login1" id="login1" value="<?php echo $data['login']; ?>" >
																											<input type="text" class="form-control" name="fastel" id="fastel" value="<?php echo $data['fastel']; ?>" >
																											<label for="input">Input</label>
																											<select name="input" id="input" class="form-control" required>	
																												<option value=""	>Pilih</option>
																												<option value="OK"	>OK</option>
																												<option value="NOT OK"	>NOT OK</option>
																											</select>

																											<div id="NoOk">
																											<label for="alasan">Alasan</label>
																											<select  name="alasan" id="alasan" class="form-control">	
																												<option value="">Pilih</option>
																												<option value="Closing">Closing</option>
																												<option value="Produk Knowledge">Product Knowledge</option>
																												<option value="Respond to Customer">Respond to Customer</option>
																												<option value="Sales Skill">Sales Skill</option>
																												<option value="Voice Quality">Voice Quality</option>
																											</select>	
																											<label for="anti_decline">Anti Decline</label>
																											<select  name="anti_decline" id="anti_decline" class="form-control">	
																												<option value="">Pilih</option>
																												<option value="Pakai">Pakai</option>
																												<option value="Tidak Pakai">Tidak Pakai</option>
																											</select>
																											</div>
																											</form>
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save Changes</button>
														</div>
														</div>
													</div>
											</div> -->

											<!-- Modal Popup to EDIT Deal Form -->
											<div class="modal fade" id="myMODAL" tabindex="-1" role="dialog" aria-labelledby="editDealModalLabel" aria-hidden="true" data-backdrop="false">
													<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Update Open Login</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="report_rooster_agent.php" method="POST" id="FormRekom_qa">
																	<input type="text" class="form-control" name="id" id="id">
																											<label for="status_login">Status Login</label>
																											<select name="status_login" id="status_login" class="form-control" required>	
																												<option value=""	>Pilih</option>
																												<option value="0"	>Tidak Aktif</option>
																												<option value="1"	>Aktif</option>
																											</select>
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<input type="submit" class="btn btn-primary" value="Save Changes"></input>
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

