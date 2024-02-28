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
$data_login = "";
$data_jabatan = "";
$data_area = "";

$bulan =date("m",strtotime($tgl));
$tahun =date("Y",strtotime($tgl));
if(isset($search)) {
	if($date != "") {
		// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
		// app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";

        $bulan =date("m",strtotime($date));
        $tahun =date("Y",strtotime($date));
    
        if($login_cari != ""){
            $data_login = " AND b.login = '".$login_cari."' "; 
        }
        else {
            $data_login = "";
        }
    
        if($jabatan != "") {
            $data_jabatan = " AND b.jabatan = '".$jabatan."' ";
        }
        else {
            $data_jabatan = "";
        }
    
        if($area != "") {
            $data_area = " AND b.area = '".$area."' ";
        }
        else {
            $data_area = "";
        }

		if($bulan != "" AND $tahun != "") {
            $bulan_tahun = " AND MONTH(b.tgl_masuk) = '".$bulan."' AND YEAR(b.tgl_masuk) = '".$tahun."'";
        }
        else {
            $bulan_tahun = "";
        }
	
		$query="
				(
					select b.tgl_masuk, b.login as login_pemohon, a.user2 as nama_pemohon ,b.pola as pola_pemohon, d.login as login_termohon, c.user2 as nama_termohon ,d.pola as pola_termohon, d.status_tkd_cuti, 
					d.key_tkd_cuti from cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login RIGHT JOIN cc147_main_users_extended as c ON b.kode_tkd_cuti = c.user1 
					INNER JOIN app_tam_roosterfix as d ON c.user1 = d.login WHERE b.keterangan LIKE 'ReqTKD (%' AND d.keterangan LIKE 'ReqTKD (%' AND b.tkd_cuti = 'TKD PEMOHON' AND d.tkd_cuti= 'TKD TERMOHON' 
					AND d.status_tkd_cuti <> '' $data_login $data_jabatan $data_area $bulan_tahun ORDER BY b.tgl_masuk, a.user2, b.login, d.login ASC
				)
				UNION ALL
				(
					select b.tgl_masuk, b.login as login_pemohon, a.user2 as nama_pemohon ,b.pola as pola_pemohon, d.login as login_termohon, c.user2 as nama_termohon ,d.pola as pola_termohon, d.status_tkd_cuti, 
					d.key_tkd_cuti from cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login RIGHT JOIN cc147_main_users_extended as c ON b.kode_tkd_cuti = c.user1 INNER JOIN 
					app_tam_roosterfix as d ON c.user1 = d.login WHERE b.keterangan LIKE 'ReqTKDLibur (%' AND d.keterangan LIKE 'ReqTKDLibur (%' AND b.tkd_cuti = 'TKD PEMOHON' AND d.tkd_cuti= 'TKD TERMOHON' AND 
					b.pola <> d.pola AND b.tgl_masuk = d.tgl_masuk AND d.status_tkd_cuti <> '' $data_login $data_jabatan $data_area $bulan_tahun ORDER BY b.tgl_masuk, a.user2, b.login, d.login ASC
				)
				UNION ALL
				(
					select b.tgl_masuk, b.login as login_pemohon, a.user2 as nama_pemohon ,b.pola as pola_pemohon, d.login as login_termohon, c.user2 as nama_termohon ,d.pola as pola_termohon, d.status_tkd_cuti, 
					d.key_tkd_cuti from cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1 = b.login RIGHT JOIN cc147_main_users_extended as c ON b.kode_tkd_cuti = c.user1 INNER JOIN 
					app_tam_roosterfix as d ON c.user1 = d.login WHERE b.keterangan NOT LIKE 'ReqTKDLibur (%' AND d.keterangan NOT LIKE 'ReqTKDLibur (%' AND b.keterangan NOT LIKE 'ReqTKD (%' AND 
					d.keterangan NOT LIKE 'ReqTKD (%' AND b.tkd_cuti = 'TKD PEMOHON' AND d.tkd_cuti= 'TKD TERMOHON' AND b.pola <> d.pola AND b.tgl_masuk = d.tgl_masuk AND d.status_tkd_cuti <> '' 
					$data_login $data_jabatan $data_area $bulan_tahun ORDER BY b.tgl_masuk, a.user2, b.login, d.login ASC
				)";
        // die();
		// print_r($query);
		$angka=0;
		$hasil = mysqli_query($con,$query) or die ("Query gagal!");
		$hasil_total = mysqli_num_rows($hasil);
        

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
					
			
					<form name="demoform" action='report_tkd.php' method='post' accept-charset='UTF-8'>
						
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
										   type="month"
										   name="date"
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
							<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='report_tkd.php';">Refresh</button>
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
									<h4 class="title" style="color:#008B8B">Daftar TKD dan TKD Libur</h4>
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
											<th align="center"><font color="red" face="Tahoma" size="2">Status TKD</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
										$page=1;
										// print_r($data_tampil3);
										$baris=1;
										
										while($data = mysqli_fetch_array($hasil)) {
											// print_r($data);
											if($data['key_tkd_cuti'] == 'TKD') {
												echo"<tr>
													<th align=\"center\" style=\"font-size:10px\">".$page."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['tgl_masuk']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['login_pemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['nama_pemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['pola_pemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['login_termohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['nama_termohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['pola_termohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['key_tkd_cuti']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['status_tkd_cuti']."</th>";
													
												echo "</tr>";
												$baris=1;
											}
											else if($data['key_tkd_cuti'] == 'TKD LIBUR' && $baris == 1) {
												echo"<tr>
													<th align=\"center\" style=\"font-size:10px\" rowspan=\"2\">".$page."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['tgl_masuk']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['login_pemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['nama_pemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['pola_pemohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['login_termohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['nama_termohon']."</th>
													<th align=\"center\" style=\"font-size:10px\">".$data['pola_termohon']."</th>
													<th align=\"center\" style=\"font-size:10px\" rowspan=\"2\">".$data['key_tkd_cuti']."</th>
													<th align=\"center\" style=\"font-size:10px\" rowspan=\"2\">".$data['status_tkd_cuti']."</th>
													</th>";
												$baris++;
											}
											else if($data['key_tkd_cuti'] == 'TKD LIBUR' && $baris == 2) {
														
													echo "</tr>
														<tr>
															<th align=\"center\" style=\"font-size:10px\">".$data['tgl_masuk']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data['login_pemohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data['nama_pemohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data['pola_pemohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data['login_termohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data['nama_termohon']."</th>
															<th align=\"center\" style=\"font-size:10px\">".$data['pola_termohon']."</th>
															</tr>";
													$baris = 1;
											}
											$no++;
											$page++;
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

