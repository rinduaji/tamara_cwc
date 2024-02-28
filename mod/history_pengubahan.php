<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
// $tgl=date("Y-m-d");
if($date!=''){ $tgl=date("Y-m",strtotime($date));}
if($site=='AllArea'){$area="";}
else{$area="AND c.user5 = '$site'";}
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);
// if($tgl==''){$tgl = date("Y-m-d H:i:s");}
// if($date!=''){ $tgl=date("Y-m-d",strtotime($date));}
// if($site=='AllArea'){$area="";}
// else{$area="AND b.user5 = '$site'";}

$dataPerPage = 20;
if(isset($_GET['page']))
{
	$noPage = $_GET['page'];
}
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;
// if($jb=="Tabber"){

// $query="SELECT DISTINCT convert(a.tgl, DATE) as tanggal, b.user5 as Site, 
// sum(case when `kategori`='Agree' then 1 else 0 end) as Agree,
// sum(case when `kategori`='Agree' and `follow`='2' then 1 else 0 end) as OnProcessQCO,
// sum(case when `kategori`='Agree' and `follow`='3' then 1 else 0 end) as OnProcessTL,
// sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` in('1','6') then 1 else 0 end) as NotValid,
// sum(case when `kategori`='Agree' and `Valid`='Valid' and `follow` ='6'then 1 else 0 end) as Valid,
// count(a.id) as transaksi,
// sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
// sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` ='5' then 1 else 0 end) as Recall
// FROM app_tam_data2 AS a
// INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
// WHERE a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $area group by b.user5";
// //echo $query;
// }else{
if($tgl != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";

	$query="SELECT * FROM history_app_tam_data2 as a INNER JOIN cc147_main_users as b ON a.login = b.username INNER JOIN cc147_main_users_extended as c ON a.login = c.user1 WHERE a.tgl between '$tgl-01 00:00:00' and '$tgl-31 23:59:59' $area";
  $no=0;
  $hasil = mysqli_query($con,$query) or die ("Query gagal!");
  $hasil_total = mysqli_num_rows($hasil);
  if($hasil_total == 0){
		$message = "Data tidak ditemukan dari hasil pencarian pada input an yang dimasukan! Silahkan cek kembali!";
		echo "<script type='text/javascript'>alert('$message');</script>";
  }

  $query_login_agent = "select a.status_history as kendala, COUNT(a.status_history) as jumlah, b.user5 as area FROM history_app_tam_data2 as a INNER JOIN cc147_main_users_extended as b ON a.login = b.user1 
  WHERE a.status_history LIKE '%tlp%' OR a.status_history LIKE '%nama dm%' 
  OR a.status_history LIKE '%reg%' OR a.status_history LIKE '%status%' OR a.status_history LIKE '%penerima%' OR a.status_history LIKE '%rec qco%'
  OR a.status_history LIKE '%rec tl%' OR a.status_history LIKE '%input%' OR a.status_history LIKE '%prof agama%' OR a.status_history LIKE '%prof facebook%'
  OR a.status_history LIKE '%fastel%' OR a.status_history LIKE '%jenis%' OR a.status_history LIKE '%kategori%' OR a.status_history LIKE '%reason%'
  OR a.status_history LIKE '%ket%' OR a.status_history LIKE '%follow%' OR a.status_history LIKE '%upd_qco%' OR a.status_history LIKE '%valid%'
  OR a.status_history LIKE '%add on tsel%' OR a.status_history LIKE '%selisih%' OR a.status_history LIKE '%id return tl%' OR a.status_history LIKE '%Hapus%' 
  OR a.status_history LIKE '%agree%'
  group by a.status_history, area ORDER BY area, jumlah DESC";
  $hasil_login_agent = mysqli_query($con,$query_login_agent) or die ("Query gagal!");

  $query_login_qco = "select a.login, b.name,d.user5 as area_agent, b.qco, c.user2,c.user5 as area_qco, count(a.login) as total_data_agent FROM 
  history_app_tam_data2 as a INNER JOIN cc147_main_users as b ON a.login=b.username INNER JOIN cc147_main_users_extended as c ON b.qco = c.user1 
  INNER JOIN cc147_main_users_extended as d ON b.username = d.user1 GROUP BY a.login ORDER BY a.login ASC";
  $hasil_login_qco = mysqli_query($con,$query_login_qco) or die ("Query gagal!");
// echo $query;
}

$Page = $offset;
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form name="demoform" action='history_pengubahan.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>List Data History APP TAM2</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
                        <tr>
							<div class="form-group">
								<label style="color:#008B8B">Bulan dan Tahun</label>
								<input class="form-control"
										   type="month"
										   name="date"
                                           min="2021-01"
										   required
									/>
							</div>
						</tr>
                        <tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Site</label>
								<select  name="site" class="form-control" value="<? echo $exp?>">	
									<option value=""	>Pilih</option>
									<option value="AllArea"	>All Area</option>
									<option value="Bandung"	>Bandung</option>
									
									<option value="BSD"  	>BSD</option>
									<option value="TANGERANG"  	>TANGERANG</option>
									<option value="Malang"  >Malang</option>
									<option value="Makassar">Makassar</option>
									<option value="Medan"  	>Medan</option>
									<option value="Semarang">Semarang</option>
								</select>		
								</label>
								
							</div>							
						</tr>
						
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='pengubahan_data.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Daftar History App Data TAM2</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
								if ($tgl=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Bulan dan Tahun belum dipilih dimasukkan !</div>";
								}
								}
								?>
								<div style="overflow-x:auto;">
									<table class="table table-hover table-striped">
										<thead>
											
											<th align="center"><font color="red" face="Tahoma" size="2">NO</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">ID</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">No Pelanggan</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama DM</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tlp</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Reg</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Reason</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Segment</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Relasi</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Penerima</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Ket</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Follow</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">UPD QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rec QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">UPD TL</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rec TL</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">UPD Suport</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Rec Suport</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl QCO1</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl TL</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Tgl Suport</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Prof HP</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Skrip</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Alasan NOK</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Prof Hobby</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Prof Agama</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Prof Facebook</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Add On Tsel</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">ID Return TL</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tapping Decline</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Status Notif</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Detail Alasan</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Reject</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Status History</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Login QCO</th>				
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										//echo $query;
                                      
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr>
										    <th align=\"center\" style=\"font-size:10px\">".++$no."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['id']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['name']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_pelanggan']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tlp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reg']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
                                            
                                            <th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['segment']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['relasi']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['penerima']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ket']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['follow']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_tl']."</th>

                                            <th align=\"center\" style=\"font-size:10px\">".$data['rec_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_suport']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_suport']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_qco1']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['tgl_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_suport']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['prof_hp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['skrip']."</th>

                                            <th align=\"center\" style=\"font-size:10px\">".$data['alasan_nok']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['prof_hoby']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['prof_agama']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['prof_facebook']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['add_on_tsel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['id_return_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tapping_decline']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status_notif']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['detil_alasan']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['reject']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['status_history']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['qco']."</th>";
														echo "</tr>";
													}
													
													?>	
                            
										</tbody>
									</table>
									
								</div>
								<div class="col-md-12">
                                    
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="header">
                                                <h4 class="title" style="color:#008B8B">Total Data History</h4>
                                            </div>
                                    <table class="table table-hover table-striped">
										<thead>
											
                                            <th align="center"><font color="red" face="Tahoma" size="2">NO</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">LOGIN AGENT</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">NAMA AGENT</th>	
                                            <th align="center"><font color="red" face="Tahoma" size="2">AREA AGENT</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">LOGIN QCO</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">NAMA QCO</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">AREA QCO</th>	
                                            <th align="center"><font color="red" face="Tahoma" size="2">Total Data Agent</th>	
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										//echo $query;
                                        $no=0;
										while($data_qco = mysqli_fetch_array($hasil_login_qco)) {
										echo"<tr>
										    <th align=\"center\" style=\"font-size:10px\">".++$no."</th>
                                            
											<th align=\"center\" style=\"font-size:10px\">".$data_qco['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_qco['name']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data_qco['area_agent']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_qco['qco']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data_qco['user2']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data_qco['area_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_qco['total_data_agent']."</th>";
														echo "</tr>";
													}
													
													?>	
                            
										</tbody>
									</table>
                                                </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                                <div class="header">
                                                    <h4 class="title" style="color:#008B8B">Total Data Kategori History Kendala</h4>
                                                </div>
                                    <table class="table table-hover table-striped">
										<thead>
                                            <th align="center"><font color="red" face="Tahoma" size="2">NO</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">KENDALA</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">JUMLAH</th>	
                                            <th align="center"><font color="red" face="Tahoma" size="2">AREA</th>
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										//echo $query;
                                        $no=0;
                                        $total_data_agent1= mysqli_num_rows($hasil_login_agent);
                                        if($total_data_agent1 > 0){
										while($data_agent = mysqli_fetch_array($hasil_login_agent)) {
										echo"<tr>
                                            <th align=\"center\" style=\"font-size:10px\">".++$no."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data_agent['kendala']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_agent['jumlah']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data_agent['area']."</th>";
														echo "</tr>";
													}
                                        }
													?>	
                            
										</tbody>
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
$('#NoOk').hide();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data('id');
  var LOGIN = button.data('login');
  var FASTEL = button.data('fastel');
  var TGL = button.data('tgl');
  var NO_PELANGGAN = button.data('no_pelanggan');
  var NAMA_DM = button.data('nama_dm');
  var TLP = button.data('tlp');
  var REG = button.data('reg');
  var JENIS = button.data('jenis');
  var STATUS = button.data('status');
  var KATEGORI = button.data('kategori');
  var REASON = button.data('reason');
  var SEGMENT = button.data('segment');
  var RELASI = button.data('relasi');
  var PENERIMA = button.data('penerima');
  var KET = button.data('ket');
  var FOLLOW = button.data('follow');
  var UPD_QCO = button.data('upd_qco');
  var REC_QCO = button.data('rec_qco');
  var UPD_TL = button.data('upd_tl');
  var REC_TL = button.data('rec_tl');
  var UPD_SUPORT = button.data('upd_suport');
  var REC_SUPORT = button.data('rec_suport');
  var TGL_QCO1 = button.data('tgl_qco1');
  var TGL_TL = button.data('TGL_TL');
  var TGL_SUPORT = button.data('tgl_suport');
  var VALID = button.data('valid');
  var INPUT = button.data('input');
  var PROF_HP = button.data('prof_hp');
  var SKRIP = button.data('skrip');
  var ALASAN_NOK = button.data('alasan_nok');
  var PROF_HOBY = button.data('prof_hoby');
  var PROF_AGAMA = button.data('prof_agama');
  var PROF_FACEBOOK = button.data('prof_facebook');
  var ADD_ON_TSEL = button.data('add_on_tsel');
  var ID_RETURN_TL = button.data('id_return_tl');
  var TAPPING_DECLINE = button.data('tapping_decline');
  var STATUS_NOTIF = button.data('status_notif');
  var DETIL_ALASAN = button.data('detil_alasan');
  var REJECT = button.data('reject');

  $('input[name="id"]').val(ID);
  $('input[name="login1"]').val(LOGIN);
  $('input[name="login"]').val(LOGIN);
  $('input[name="fastel"]').val(FASTEL);
  $('input[name="tgl"]').val(TGL);
  $('input[name="no_pelanggan"]').val(NO_PELANGGAN);
  $('input[name="nama_dm"]').val(NAMA_DM);
  $('input[name="tlp"]').val(TLP);
  $('input[name="reg"]').val(REG);
  $('input[name="jenis"]').val(JENIS);
  $('input[name="status"]').val(STATUS);
  $('input[name="kategori"]').val(KATEGORI);
  $('input[name="reason"]').val(REASON);
  $('input[name="segment"]').val(SEGMENT);
  $('input[name="relasi"]').val(RELASI);
  $('input[name="penerima"]').val(PENERIMA);
  $('input[name="ket"]').val(KET);
  $('input[name="follow"]').val(FOLLOW);
  $('input[name="upd_qco"]').val(UPD_QCO);
  $('input[name="rec_qco"]').val(REC_QCO);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="upd_suport"]').val(UPD_SUPORT);
  $('input[name="tgl_qco1"]').val(TGL_QCO1);
  $('input[name="tgl_tl"]').val(TGL_TL);
  $('input[name="tgl_suport"]').val(TGL_SUPORT);
  $('input[name="valid"]').val(VALID);
  $('input[name="input"]').val(INPUT);
  $('input[name="prof_hp"]').val(PROF_HP);
  $('input[name="skrip"]').val(SKRIP);
  $('input[name="alasan_nok"]').val(ALASAN_NOK);
  $('input[name="prof_hoby"]').val(PROF_HOBY);
  $('input[name="prof_agama"]').val(PROF_AGAMA);
  $('input[name="prof_facebook"]').val(PROF_FACEBOOK);
  $('input[name="add_on_tsel"]').val(ADD_ON_TSEL);
  $('input[name="id_return_tl"]').val(ID_RETURN_TL);
  $('input[name="tapping_decline"]').val(TAPPING_DECLINE);
  $('input[name="status_notif"]').val(STATUS_NOTIF);
  $('input[name="detil_alasan"]').val(DETIL_ALASAN);
  $('input[name="reject"]').val(REJECT);

//   $('#input').change( function() {
//               if(x == 'NOT OK') {
//                 $("#NoOk").show();
//             }
// 			else {
// 				$("#NoOk").hide();
// 			}			
});

$('#myMODALDELETE').on('show.bs.modal', function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data('id');
  var LOGIN = button.data('login');
  var FASTEL = button.data('fastel');
  var TGL = button.data('tgl');
  var NO_PELANGGAN = button.data('no_pelanggan');
  var NAMA_DM = button.data('nama_dm');
  var TLP = button.data('tlp');
  var REG = button.data('reg');
  var JENIS = button.data('jenis');
  var STATUS = button.data('status');
  var KATEGORI = button.data('kategori');
  var REASON = button.data('reason');
  var SEGMENT = button.data('segment');
  var RELASI = button.data('relasi');
  var PENERIMA = button.data('penerima');
  var KET = button.data('ket');
  var FOLLOW = button.data('follow');
  var UPD_QCO = button.data('upd_qco');
  var REC_QCO = button.data('rec_qco');
  var UPD_TL = button.data('upd_tl');
  var REC_TL = button.data('rec_tl');
  var UPD_SUPORT = button.data('upd_suport');
  var REC_SUPORT = button.data('rec_suport');
  var TGL_QCO1 = button.data('tgl_qco1');
  var TGL_TL = button.data('TGL_TL');
  var TGL_SUPORT = button.data('tgl_suport');
  var VALID = button.data('valid');
  var INPUT = button.data('input');
  var PROF_HP = button.data('prof_hp');
  var SKRIP = button.data('skrip');
  var ALASAN_NOK = button.data('alasan_nok');
  var PROF_HOBY = button.data('prof_hoby');
  var PROF_AGAMA = button.data('prof_agama');
  var PROF_FACEBOOK = button.data('prof_facebook');
  var ADD_ON_TSEL = button.data('add_on_tsel');
  var ID_RETURN_TL = button.data('id_return_tl');
  var TAPPING_DECLINE = button.data('tapping_decline');
  var STATUS_NOTIF = button.data('status_notif');
  var DETIL_ALASAN = button.data('detil_alasan');
  var REJECT = button.data('reject');

  $('input[name="id"]').val(ID);
  $('input[name="login1"]').val(LOGIN);
  $('input[name="login"]').val(LOGIN);
  $('input[name="fastel"]').val(FASTEL);
  $('input[name="tgl"]').val(TGL);
  $('input[name="no_pelanggan"]').val(NO_PELANGGAN);
  $('input[name="nama_dm"]').val(NAMA_DM);
  $('input[name="tlp"]').val(TLP);
  $('input[name="reg"]').val(REG);
  $('input[name="jenis"]').val(JENIS);
  $('input[name="status"]').val(STATUS);
  $('input[name="kategori"]').val(KATEGORI);
  $('input[name="reason"]').val(REASON);
  $('input[name="segment"]').val(SEGMENT);
  $('input[name="relasi"]').val(RELASI);
  $('input[name="penerima"]').val(PENERIMA);
  $('input[name="ket"]').val(KET);
  $('input[name="follow"]').val(FOLLOW);
  $('input[name="upd_qco"]').val(UPD_QCO);
  $('input[name="rec_qco"]').val(REC_QCO);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="upd_suport"]').val(UPD_SUPORT);
  $('input[name="tgl_qco1"]').val(TGL_QCO1);
  $('input[name="tgl_tl"]').val(TGL_TL);
  $('input[name="tgl_suport"]').val(TGL_SUPORT);
  $('input[name="valid"]').val(VALID);
  $('input[name="input"]').val(INPUT);
  $('input[name="prof_hp"]').val(PROF_HP);
  $('input[name="skrip"]').val(SKRIP);
  $('input[name="alasan_nok"]').val(ALASAN_NOK);
  $('input[name="prof_hoby"]').val(PROF_HOBY);
  $('input[name="prof_agama"]').val(PROF_AGAMA);
  $('input[name="prof_facebook"]').val(PROF_FACEBOOK);
  $('input[name="add_on_tsel"]').val(ADD_ON_TSEL);
  $('input[name="id_return_tl"]').val(ID_RETURN_TL);
  $('input[name="tapping_decline"]').val(TAPPING_DECLINE);
  $('input[name="status_notif"]').val(STATUS_NOTIF);
  $('input[name="detil_alasan"]').val(DETIL_ALASAN);
  $('input[name="reject"]').val(REJECT);
});

</script>
<?php	require_once("../deft_foo.php"); ?>