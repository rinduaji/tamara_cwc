<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$jabatan = $_SESSION["jabatan"];
$area = $_SESSION["area"];
$tgl=date("Y-m-d");


$bulan =date("m",strtotime($tgl));
$tahun =date("Y",strtotime($tgl));
// echo $save;
if(isset($save)) {
		$query = "UPDATE app_tam_roosterfix SET status_tkd_cuti='DONE', key_tkd_cuti='CUTI', keterangan='CUTI',pola='CT' WHERE id='$id_cuti'";
		if (!mysqli_query($con, $query)) {
			die("Query gagal dijalankan: " . mysqli_errno($con) .
					" - " . mysqli_error($con));
		} else {
			echo "<script>alert('Data Cuti berhasil di Approve.');window.location='report_rooster_cuti.php';</script>";
		}
}

if(isset($reject)) {
	$query = "UPDATE app_tam_roosterfix SET status_tkd_cuti='', key_tkd_cuti='' WHERE id='$id_cuti'";
	if (!mysqli_query($con, $query)) {
		die("Query gagal dijalankan: " . mysqli_errno($con) .
				" - " . mysqli_error($con));
	} else {
		echo "<script>alert('Data Cuti di Reject .');window.location='report_rooster_cuti.php';</script>";
	}
}

if(isset($search)) {
	if($date1 != "" && $date2 != "") {
		// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
		// app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";

        // $bulan =date("m",strtotime($date));
        // $tahun =date("Y",strtotime($date));
    
        if($login_cari != ""){
            $data_login = " AND d.user1 = '".$login_cari."' "; 
        }
        else {
            $data_login = "";
        }
    
        if($jabatan1 != "") {
            $data_jabatan = " AND d.user3 = '".$jabatan1."' ";
        }
        else {
            $data_jabatan = "";
        }
	
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$username' GROUP BY a.login ORDER BY a.login, a.tgl ASC";
    // $hari =date("d",strtotime($date));
    // $bulan =date("m",strtotime($date));
    // $tahun =date("Y",strtotime($date));
	if($jabatan == "TL TAM DCS"){
		$query="select *, b.id as id_rooster, b.pola as pola_rooster, b.status_tkd_cuti, b.key_tkd_cuti, b.tgl_masuk, b.keterangan, d.user1, d.user3, d.user5, b.jabatan as jabatan_user FROM cc147_main_users as a INNER JOIN app_tam_roosterfix as b ON a.username = b.login INNER JOIN app_tam_master_pola as c ON b.pola = c.pola  
		INNER JOIN cc147_main_users_extended as d ON d.user1=a.username
		WHERE b.key_tkd_cuti = 'CUTI' AND a.tl='$login' AND d.user5='$area' AND b.tgl_masuk BETWEEN '$date1' AND '$date2' $data_login $data_jabatan ORDER BY b.tgl_masuk,b.pola, a.name ASC";
	}
	else if($jabatan == "qa"){
		$query="select *, b.id as id_rooster, b.pola as pola_rooster, b.status_tkd_cuti, b.key_tkd_cuti, b.tgl_masuk, b.keterangan, d.user1, d.user3, d.user5, b.jabatan as jabatan_user FROM cc147_main_users as a INNER JOIN app_tam_roosterfix as b ON a.username = b.login INNER JOIN app_tam_master_pola as c ON b.pola = c.pola  
		INNER JOIN cc147_main_users_extended as d ON d.user1=a.username
		WHERE b.key_tkd_cuti = 'CUTI' AND a.tl='$login' AND b.tgl_masuk BETWEEN '$date1' AND '$date2' $data_login $data_jabatan ORDER BY b.tgl_masuk,b.pola, a.name ASC";
	}
	else if($jabatan == "Supervisor TAM DCS"){
		$query="select *, b.id as id_rooster, b.pola as pola_rooster, b.status_tkd_cuti, b.key_tkd_cuti, b.tgl_masuk, b.keterangan, d.user1, d.user3, d.user5, b.jabatan as jabatan_user FROM cc147_main_users as a INNER JOIN app_tam_roosterfix as b ON a.username = b.login INNER JOIN app_tam_master_pola as c ON b.pola = c.pola  
		INNER JOIN cc147_main_users_extended as d ON d.user1=a.username
		WHERE b.key_tkd_cuti = 'CUTI' AND a.spv='$login' AND b.tgl_masuk BETWEEN '$date1' AND '$date2' $data_login $data_jabatan ORDER BY b.tgl_masuk,b.pola, a.name ASC";
	}
	else if($jabatan == "Supervisor QA TAM"){
		$query="select *, b.id as id_rooster, b.pola as pola_rooster, b.status_tkd_cuti, b.key_tkd_cuti, b.tgl_masuk, b.keterangan, d.user1, d.user3, d.user5, b.jabatan as jabatan_user FROM cc147_main_users as a INNER JOIN app_tam_roosterfix as b ON a.username = b.login INNER JOIN app_tam_master_pola as c ON b.pola = c.pola  
		INNER JOIN cc147_main_users_extended as d ON d.user1=a.username
		WHERE b.key_tkd_cuti = 'CUTI' AND a.spv='$login' AND b.tgl_masuk BETWEEN '$date1' AND '$date2' $data_login $data_jabatan ORDER BY b.tgl_masuk,b.pola, a.name ASC";
	}
	else {
		$query="select *, b.id as id_rooster, b.pola as pola_rooster, b.status_tkd_cuti, b.key_tkd_cuti, b.tgl_masuk, b.keterangan, d.user1, d.user3, d.user5, b.jabatan as jabatan_user FROM cc147_main_users as a INNER JOIN app_tam_roosterfix as b ON a.username = b.login INNER JOIN app_tam_master_pola as c ON b.pola = c.pola  
		INNER JOIN cc147_main_users_extended as d ON d.user1=a.username
		WHERE b.key_tkd_cuti = 'CUTI' AND b.tgl_masuk BETWEEN '$date1' AND '$date2' $data_login $data_jabatan ORDER BY b.tgl_masuk,b.pola, a.name ASC";
	}

    $no=0;
	// print_r($query);
	

    $hasil = mysqli_query($con,$query) or die ("Query gagal!");
    $hasil_total = mysqli_num_rows($hasil);
// echo $query;
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
					
			
					<form name="demoform" action='report_rooster_cuti.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>Report Aprove Cuti</b>
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
                                <select class="form-control" name="jabatan1" id="jabatan">
                                    <option value="">-- Pilih Jabatan --</option>
									<option value="">ALL JABATAN</option>
                                    <?php 
										if($jb == 'Supervisor') {
											if($jabatan == "Supervisor TAM DCS") {
												$query_jenis = "SELECT * FROM app_jabatan WHERE status='AKTIF' AND kodejabatan IN ('TL TAM DCS', 'Admin', 'Trainer')";
											}
											else if($jabatan == "Supervisor QA TAM"){
												$query_jenis = "SELECT * FROM app_jabatan WHERE status='AKTIF' AND kodejabatan IN ('qa')";
											}
										}
										else if($jb == 'TL') {
											$query_jenis = "SELECT * FROM app_jabatan WHERE status='AKTIF' AND kodejabatan IN ('Agent TAM')";
										}
										else if($jb == 'qa') {
											$query_jenis = "SELECT * FROM app_jabatan WHERE status='AKTIF' AND kodejabatan IN ('Tabber TAM')";
										}
										else if($jb == 'Admin' || $jb == 'Analis') {
											$query_jenis = "SELECT * FROM app_jabatan WHERE status='AKTIF'";
										}
										else {
											$query_jenis = "SELECT * FROM app_jabatan WHERE status='AKTIF'";
										}
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
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='report_rooster_cuti.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Report Aprove Cuti</h4>
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
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
                                      
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr>
										    <th align=\"center\" style=\"font-size:10px\">".$data['periode']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_masuk']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['name']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jabatan_user']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['pola_rooster']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['masuk']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['pulang']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ist1']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ist2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ist3']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ist4']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status_tkd_cuti']."</th>";
											if($data['status_tkd_cuti'] == "PENDING") {
											echo "<th align=\"center\" style=\"font-size:10px\">
												<form method=\"POST\" action=\"report_rooster_cuti.php\">
													<input type=\"hidden\" name=\"id_cuti\" value=\"".$data['id_rooster']."\" />
													<button class=\"btn btn-warning\" name=\"save\" value=\"save\">Approve Cuti</button>
													<button class=\"btn btn-warning\" name=\"reject\" value=\"reject\">Reject Cuti</button>
												</form>
											</th>";
											}
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

