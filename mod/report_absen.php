<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl=date("Y-m-d");

$data_login = "";
$data_jabatan = "";
$data_area = "";

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}

if($date1 != "" && $date2 != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";
    // $hari =date("d",strtotime($date));
    // $bulan =date("m",strtotime($date));
    // $tahun =date("Y",strtotime($date));

	if($login_cari != ""){
		$data_login = " AND a.user1 = '".$login_cari."' "; 
	}
	else {
		$data_login = "";
	}
	if($jabatan != "") {
		$data_jabatan = " AND a.user3 = '".$jabatan."'";
		// print_r($data_jabatan);
	}
	else {
		$data_jabatan = "";
	}

	if($jb == "qa" || $jb == "Tabber"){
		if($area != "") {
			$data_area = " AND a.user5 = '".$area."'";
		}
		else {
			$data_area = "";
		}
	}
	else {
		$data_area = " AND a.user5='".$area."'";
	}

	$query="SELECT b.date_absen,a.user1, a.user2, a.user3, a.user4, a.user5, COUNT(*) as hk FROM cc147_main_users_extended as a INNER JOIN app_tam_absen as b ON a.user1 = b.username 
			WHERE b.date_absen BETWEEN '$date1 00:00:00' AND '$date2 23:59:59' AND b.keterangan = 'IN' $data_login $data_jabatan $data_area GROUP BY a.user1 ORDER BY a.user5, a.user3, a.user2  ASC";
    $no=0;
    // print_r($query);
	// die();
    $hasil = mysqli_query($con,$query) or die ("Query gagal!");
    $hasil_total = mysqli_num_rows($hasil);
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
					<form name="demoform" action='report_absen.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>REPORT ABSENSI HARI KERJA</b>
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
							<div class="form-group">
								<label style="color:#008B8B">Login</label>
								<input class="form-control"
										   type="text"
										   name="login_cari"
									/>
							</div>
						</tr>
						<tr>
							<div class="form-group">
							<label for="jabatan" style="color:#008B8B">Jabatan</label>
                                <select class="form-control" name="jabatan" id="jabatan">
                                    <option value="">-- Pilih Jabatan --</option>
                                    <?php 
                                        $query_jenis = "SELECT * FROM app_jabatan WHERE status='AKTIF'";
                                        $hasil_jenis = mysqli_query($con, $query_jenis) or die("Query gagal!");
                                        while ($data_jenis = mysqli_fetch_array($hasil_jenis)) {
                                    ?>
                                        <option value="<?=$data_jenis['KodeJabatan']?>" <?=($data_jenis['KodeJabatan'] == $data['jabatan']) ? 'Selected' : '';?>><?=$data_jenis['KodeJabatan']?></option>
                                    <?php
                                        }
                                    ?>
                                 </select>
							</div>
						</tr>
						<tr>
							<div class="form-group">
							<label class="control-label" style="color:#008B8B">Area</label>
								<select  name="area" class="form-control">	
									<option value=""	>Pilih</option>
									<option value="BANDUNG"	>BANDUNG</option>
									<option value="BSD"  	>BSD</option>
									<option value="MALANG"  >MALANG</option>
									<option value="MAKASSAR">MAKASSAR</option>
									<option value="MEDAN"  	>MEDAN</option>
									<option value="SEMARANG">SEMARANG</option>
								</select>		
							</label>
							</div>
						</tr>
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='report_absen.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Daftar Report Absensi Hari Kerja</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
                                if ($date1=="" && $date2=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Inputan anda !</div>";
								}
								}
								?>
								<div style="overflow-x:auto;">
									<table class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">NO</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Periode</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Nama</th>										
											<th align="center"><font color="red" face="Tahoma" size="2">Jabatan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Hari Kerja (HK)</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Total Tunjangan Kehadiran</th>
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
                                      
										while($data = mysqli_fetch_array($hasil)) {
											if($data['user3'] == "Agent TAM" || $data['user3'] == "qa" || $data['user3'] == "TL TAM DCS" || $data['user3'] == "Trainer" || $data['user3'] == "Tabber TAM" || $data['user3'] == "Admin") {
												$t_kehadiran = 75000;
											}
											else {
												$t_kehadiran = 0;
											}
											$total_t_kehadiran = $data['hk'] * $t_kehadiran;
										echo"<tr>
											<th align=\"center\" style=\"font-size:10px\">".++$no."</th>
											<th align=\"center\" style=\"font-size:10px\">".date("Ym",strtotime($data['date_absen']))."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user1']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user3']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user5']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['hk']."</th>
											<th align=\"center\" style=\"font-size:10px\">".rupiah($total_t_kehadiran)."</th>";
												
												
                                         
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
														<form action="report_rooster.php" method="POST" id="FormRekom_qa">
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
														<form action="report_rooster.php" method="POST" id="FormRekom_qa">
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

