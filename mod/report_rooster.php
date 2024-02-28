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

$bulan =date("m",strtotime($tgl));
$tahun =date("Y",strtotime($tgl));

if ($id != "") {
	if(isset($delete)){
		$query_delete = "DELETE FROM app_tam_roosterfix WHERE id='$id'";
		if (!mysqli_query($con, $query_delete)) {
			die("Query gagal dijalankan: " . mysqli_errno($con) .
					" - " . mysqli_error($con));
		} else {
			echo "<script>alert('Data berhasil dihapus.');window.location='report_rooster.php';</script>";
		}
	}
	if(isset($save)) {
		$query = "UPDATE app_tam_roosterfix SET pola='$pola' WHERE id='$id'";
		if (!mysqli_query($con, $query)) {
			die("Query gagal dijalankan: " . mysqli_errno($con) .
					" - " . mysqli_error($con));
		} else {
			echo "<script>alert('Data berhasil diubah.');window.location='report_rooster.php';</script>";
		}
	}
}

if($date1 != "" && $date2 != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";
    // $hari =date("d",strtotime($date));

	if($login_cari != ""){
		$data_login = "c.user1 = '".$login_cari."' AND "; 
	}
	else {
		$data_login = "";
	}

	if($jabatan != "") {
		$data_jabatan = "c.user3 = '".$jabatan."' AND ";
	}
	else {
		$data_jabatan = "";
	}

	if($jb == "qa"){
		if($area != "") {
			$data_area = "c.user5 = '".$area."' AND ";
		}
		else {
			$data_area = "";
		}
	}
	else {
		$data_area = "c.user5='".$area."' AND ";
	}

	
	$query="select a.id, a.periode, a.tgl_masuk, a.login, c.user2, c.user3, c.user5, a.pola, b.masuk, b.pulang, b.ist1, b.ist2, b.ist3, b.ist4, a.keterangan FROM app_tam_roosterfix as a INNER JOIN 
			app_tam_master_pola as b ON a.pola = b.pola INNER JOIN cc147_main_users_extended as c ON a.login = c.user1 WHERE $data_login $data_jabatan $data_area a.tgl_masuk BETWEEN '$date1' AND '$date2' 
			ORDER BY a.tgl_masuk, a.pola, c.user2 ASC";
    // print_r($query);
	$no=0;
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
					<form name="demoform" action='report_rooster.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>ROOSTER BULANAN</b>
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
										   placeholder="ex: 2018-12-31" required
									/>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal Akhir</label>
								<input class="form-control"
										   type="date"
										   name="date2"
										   placeholder="ex: 2018-12-31" required
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
                                <select class="form-control" name="jabatan" id="jabatan"  required>
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
								<select  name="area" class="form-control"  required>	
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
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='report_rooster.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
					</form>	
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Daftar Rooster Bulanan</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
                                if ($date1=="" || $date2=="" )
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
                                            <th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Jabatan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</th>					
											<th align="center"><font color="red" face="Tahoma" size="2">Pola</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Masuk</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Pulang</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Istirahat 1</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Istirahat 2</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Istirahat 3</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Istirahat 4</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
                                      
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr>
										
										<th align=\"center\" style=\"font-size:10px\">".++$no."</th>
										    <th align=\"center\" style=\"font-size:10px\">".$data['periode']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_masuk']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user3']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user5']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['pola']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['masuk']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['pulang']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ist1']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ist2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ist3']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ist4']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>";
											
											if($jb == 'Admin' || $jb == 'Duktek') {
												echo "<th align=\"center\" style=\"font-size:10px\">
                                                <button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#formRoosterEdit" . $data['id'] . "\">Update</button>";
                                            //    echo "<button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#formRoosterDelete" . $data['id'] . "\">Delete</button>";
                                            echo "</th>";
											}
											?>
											<div class="modal fade" id="formRoosterEdit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Rooster Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="report_rooster.php" enctype="multipart/form-data" method="POST">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <?php
                                                                                $id = $data['id'];
                                                                                ?>
                                                                                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
                                                                                <div class="form-group">
                                                                                    <label for="pola">Pola</label>
                                                                                    <Select class="form-control" name="pola" id="item-name1"  required>
																						<option value="">-- Pilih Pola --</option>
																						<?php
																							$query_pola="select distinct * FROM app_tam_master_pola";
																							// print_r($query);
																							$hasil_pola = mysqli_query($con, $query_pola) or die("Query gagal!");
                                                                                        	while ($data_pola = mysqli_fetch_array($hasil_pola)) {
																						?>
																						  <option value="<?=$data_pola['pola']?>" <?=($data_pola['pola'] == $data['pola']) ? 'Selected' : '';?>><?=$data_pola['pola']?> || (MASUK) <?=$data_pola['masuk']?>  || (PULANG) <?=$data_pola['pulang']?></option>
																						<?php
																							}
																						?>
																					</select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal Delete-->
                                                        <div class="modal fade" id="formRoosterDelete<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Rooster Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="report_rooster.php" method="POST">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" class="form-control" name="id" id="id" value="<?=$data['id'] ?>"  required>
                                                                            <h6 style="text-transform:capitalize;font-weight:normal;">Apakah Anda yakin menghapus data ini ?</h6>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary" name="delete">Delete</button>
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
                </div>
				</div>		
						</div>
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
// $('#myMODAL').on('show.bs.modal', function(event) {
// // $('#NoOk').hide();
//   var button = $(event.relatedTarget); // Button that triggered the modal
//   var ID = button.data('id');
//   console.log(ID);
//   var STATUS = button.data('status');
//   $('input[name="id"]').val(ID);
//   $('select[name="status_login"]').val(STATUS);
// //   $('#input').change( function() {
// //               if(x == 'NOT OK') {
// //                 $("#NoOk").show();
// //             }
// // 			else {
// // 				$("#NoOk").hide();
// // 			}			
// });
</script>
<?php	require_once("../deft_foo.php"); ?>

