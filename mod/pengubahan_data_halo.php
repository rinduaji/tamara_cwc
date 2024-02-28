<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$nama = $_SESSION['name'];
$username = $_SESSION['username'];
$jb = $_SESSION["jb"];
$jabatan = $_SESSION["jabatan"];
if($jabatan != 'Supervisor QA TAM' AND $jabatan != 'qa' AND $jabatan != 'Duktek' AND $jabatan != 'Admin' AND $jabatan != 'Supervisor TAM DCS') {
	// print_r($jabatan);
	die();
}
// $tgl=date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);
$date_now = date("Y-m-d H:i:s");
// if($tgl==''){$tgl = date("Y-m-d H:i:s");}
// if($date!=''){ $tgl=date("Y-m-d",strtotime($date));}
// if($site=='AllArea'){$area="";}
// else{$area="AND b.user5 = '$site'";}
// echo $username;
$dataPerPage = 20;
if(isset($_GET['page']))
{
	$noPage = $_GET['page'];
}
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;

if($fastel != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_plg,a.no_telp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_halo AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";

	$query="SELECT * FROM app_tam_halo as a INNER JOIN cc147_main_users as b ON a.login = b.username WHERE a.fastel = '$fastel'";

  $no=0;
  $hasil = mysqli_query($con,$query) or die ("Query gagal!");
  $hasil_total = mysqli_num_rows($hasil);
//   if($hasil_total == 0){
// 		$message = "Data tidak ditemukan dari hasil pencarian pada input an yang dimasukan! Silahkan cek kembali!";
// 		echo "<script type='text/javascript'>alert('$message');</script>";
//   }
//   echo $query;
  
}

if(isset($id)) {
    
    if ($status_ubah == "Edit") {
        // $query = "UPDATE app_tam_halo SET tapping_decline='$input', alasan_nok='$alasan', skrip = '$anti_decline' WHERE id='$id'";
        $query = "UPDATE app_tam_halo SET tgl='$tgl', login='$login', fastel = '$fastel', nama_plg='$nama_plg', no_telp='$no_telp', 
        no_ktp='$no_ktp', no_kk='$no_kk', alamat='$alamat', alamat_kirim='$alamat_kirim', email='$email', msisdn='$msisdn',  reserve_id='$reserve_id', area_tsel='$area_tsel', 
        jenis = '$jenis', status = '$status', kategori='$kategori', reason='$reason', no_kk = '$no_kk', 
        keterangan='$keterangan', follow='$follow', upd_qco='$upd_qco', rec_qco = '$rec_qco', 
        tgl_qco = '$tgl_qco', valid='$valid', input='$input',
        durasi = '$durasi', id_return_tl = '$return_tl', kota='$kota' WHERE id='$id'";
        mysqli_query($con, $query);
    }

    if($status_ubah == "Hapus") {
        $query = "DELETE FROM app_tam_halo WHERE login='$login' AND fastel LIKE '%$fastel%'AND id='$id' AND tgl='$tgl'";
        mysqli_query($con, $query);
        $ubah_data = "Hapus Data";
    } 
    // if($tgl != "" AND $fastel != "") {
        

        $query = "INSERT INTO `history_app_tam_halo` (`tgl`, `login`, `nama_agent`, `area`, `upd_tl`, `rec_tl`, `tgl_tl`, `pick_data_bebas`, `fastel`, `nama_plg`, `no_telp`, `no_ktp`, `no_kk`, `alamat`, `alamat_kirim`, `email`, `msisdn`, `reserve_id`, `area_tsel`, `kota`, 
        `jenis`, `status`, `kategori`, `reason`, `keterangan`, `follow`, `upd_qco`, `rec_qco`, `tgl_qco`, `valid`, `input`, `status_history`, `upd`, `nama_upd`, `jabatan_upd`, `tgl_input`, `id_return_tl`,`durasi`) 
        VALUES ('$tgl', '$login','$nama_agent','$area','$upd_tl','$rec_tl','$tgl_tl','$pick_data_bebas', '$fastel', '$nama_plg', '$no_telp', '$no_ktp', '$no_kk', '$alamat', '$alamat_kirim', '$email', '$msisdn', '$reserve_id', '$area_tsel', '$kota', '$jenis', 
        '$status', '$kategori', '$reason', '$keterangan', '$follow', '$upd_qco', '$rec_qco', '$tgl_qco', '$valid', '$input', '$ubah_data','$username','$nama','$jb','$date_now', '$return_tl','$durasi')";
        mysqli_query($con, $query);
        // echo $query;
    // }
}
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
// FROM app_tam_halo AS a
// INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
// WHERE a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $area group by b.user5";
// //echo $query;
// }else{


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
					
			
					<form name="demoform" action='pengubahan_data_halo.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>Update Data</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
							
							<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">No. Fastel</label>
								<input class="form-control" type="text" name="fastel"/>	
								</label>
								
							</div>							
						</tr>
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='pengubahan_data_halo.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Data TAMARA HALO</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
								if ($fastel=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! No Fastel belum dipilih dimasukkan !</div>";
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
                                            <th align="center"><font color="red" face="Tahoma" size="2">Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO Telepon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KTP</th>	
                                            <th align="center"><font color="red" face="Tahoma" size="2">NO KK</th>	
                                            <th align="center"><font color="red" face="Tahoma" size="2">Alamat</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Alamat Kirim</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Kota / Kabupaten</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Email</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Setuju</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">MSISDN</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Reserve ID</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area Tsel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Reason</th>										
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Follow</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">UPD QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rec QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl QCO1</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Detil Return</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</th>	
                                            <th align="center"><font color="red" face="Tahoma" size="2">Durasi</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">ID Return TL</th>	
                                            <th align="center"><font color="red" face="Tahoma" size="2">Login QCO</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Login Pengubah Data</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Nama Pengubah Data</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Jabatan Pengubah Data</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>							
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
                                            <th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_telp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_ktp']."</th>

                                            <th align=\"center\" style=\"font-size:10px\">".$data['no_kk']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['alamat']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['alamat_kirim']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['kota']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['email']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['tgl_setuju']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['msisdn']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reserve_id']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['area_tsel']."</th>

											<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['follow']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_qco']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['id_return_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['durasi']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['id_return_tl']."</th>

											<th align=\"center\" style=\"font-size:10px\">".$data['qco']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['upd']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['nama_upd']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['jabatan_upd']."</th>";
                                            

											echo "<th align=\"center\" style=\"font-size:10px\">
                                                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" 
                                                    data-id=\"".$data['id']."\" 
													data-fastel=\"".$data['fastel']."\"  
													data-login=\"".$data['login']."\" 
                                                    data-tgl=\"".$data['tgl']."\" 
													data-nama_plg=\"".$data['nama_plg']."\" 
                                                    data-no_telp=\"".$data['no_telp']."\" 
													data-no_ktp=\"".$data['no_ktp']."\" 
                                                    
                                                    data-no_kk=\"".$data['no_kk']."\"  
													data-alamat=\"".$data['alamat']."\" 
                                                    data-alamat_kirim=\"".$data['alamat_kirim']."\" 
                                                    data-kota=\"".$data['kota']."\"
													data-email=\"".$data['email']."\" 
                                                    data-tgl_setuju=\"".$data['tgl_setuju']."\" 
													data-msisdn=\"".$data['msisdn']."\"
                                                    data-reserve_id=\"".$data['reserve_id']."\" 
													data-area_tsel=\"".$data['area_tsel']."\" 

                                                    data-nama_agent=\"".$data['nama_agent']."\" 
                                                    data-area=\"".$data['area']."\" 
                                                    data-upd_tl=\"".$data['upd_tl']."\" 
                                                    data-rec_tl=\"".$data['rec_tl']."\" 
                                                    data-tgl_tl=\"".$data['tgl_tl']."\" 
                                                    data-pick_data_bebas=\"".$data['pick_data_bebas']."\" 

													data-jenis=\"".$data['jenis']."\" 
                                                    data-status=\"".$data['status']."\" 
													data-kategori=\"".$data['kategori']."\"  
													data-reason=\"".$data['reason']."\" 
                                                    data-keterangan=\"".$data['keterangan']."\" 
													data-follow=\"".$data['follow']."\"  
													data-upd_qco=\"".$data['upd_qco']."\" 
                                                    data-rec_qco=\"".$data['rec_qco']."\" 
													
													data-tgl_qco=\"".$data['tgl_qco']."\" 
                                                    data-id_return_tl=\"".$data['id_return_tl']."\"   
													data-valid=\"".$data['valid']."\" 
                                                    data-input=\"".$data['input']."\" 
													data-durasi=\"".$data['durasi']."\" 													
                                                    data-target=\"#myMODAL\">Update</button>

                                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" 
                                                    data-id=\"".$data['id']."\" 
													data-fastel=\"".$data['fastel']."\"  
													data-login=\"".$data['login']."\" 
                                                    data-tgl=\"".$data['tgl']."\" 
                                                    data-nama_plg=\"".$data['nama_plg']."\" 
                                                    data-no_telp=\"".$data['no_telp']."\" 
													data-no_ktp=\"".$data['no_ktp']."\" 
                                                    
                                                    data-no_kk=\"".$data['no_kk']."\"  
													data-alamat=\"".$data['alamat']."\" 
                                                    data-alamat_kirim=\"".$data['alamat_kirim']."\" 
                                                    data-kota=\"".$data['kota']."\" 
													data-email=\"".$data['email']."\" 
                                                    data-tgl_setuju=\"".$data['tgl_setuju']."\" 
													data-msisdn=\"".$data['msisdn']."\"
                                                    data-reserve_id=\"".$data['reserve_id']."\" 
													data-area_tsel=\"".$data['area_tsel']."\" 

                                                    data-nama_agent=\"".$data['nama_agent']."\" 
                                                    data-area=\"".$data['area']."\" 
                                                    data-upd_tl=\"".$data['upd_tl']."\" 
                                                    data-rec_tl=\"".$data['rec_tl']."\" 
                                                    data-tgl_tl=\"".$data['tgl_tl']."\" 
                                                    data-pick_data_bebas=\"".$data['pick_data_bebas']."\" 
                                                    
                                                    data-jenis=\"".$data['jenis']."\" 
                                                    data-status=\"".$data['status']."\" 
													data-kategori=\"".$data['kategori']."\"  
													data-reason=\"".$data['reason']."\"  
                                                    data-keterangan=\"".$data['keterangan']."\" 
													data-follow=\"".$data['follow']."\"  
													data-upd_qco=\"".$data['upd_qco']."\" 
                                                    data-rec_qco=\"".$data['rec_qco']."\" 
													
													data-tgl_qco=\"".$data['tgl_qco']."\" 
                                                    data-id_return_tl=\"".$data['id_return_tl']."\" 
													data-valid=\"".$data['valid']."\" 
                                                    data-input=\"".$data['input']."\" 
													data-durasi=\"".$data['durasi']."\"  
													
                                                    data-target=\"#myMODALDELETE\">DELETE</button>
                                                 </th>";
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
														<form action="list_decline.php" method="POST" id="FormRekom_qa">
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
														<h5 class="modal-title" id="exampleModalLabel">Update Data TAM HALO</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="pengubahan_data_halo.php" method="POST" id="FormRekom_qa">
																	<input type="hidden" class="form-control" name="id" id="id">
																											<input type="hidden" class="form-control" name="login1" id="login1">
                                                                                                            <input type="hidden" class="form-control" name="status_ubah" id="status_ubah" value="Edit">
                                                                                                            <label for="ubah_data">Kendala Data</label>
                                                                                                            <input type="text" class="form-control" name="ubah_data" id="ubah_data" required>
																											
                                                                                                            <label for="return_tl">Detil Return</label>
                                                                                                            <!--input type="text" class="form-control" name="return_tl" id="return_tl" required-->
																											 <select id="return_tl" name="return_tl" class="form-control" enabled>
																											<option value=" ">--- Pilih Return TL ---</option>
																												<?php
																												$qsk = mysqli_query($con, "SELECT * FROM app_tam_return");
																												$k = 1;
																												while ($rsk = mysqli_fetch_row($qsk)) {
																													echo "<option value=\"$rsk[1]\"> $rsk[1] </option>";
																													$k++;
																												}
																												?>
																											</select>
																											
																											<label for="tgl">TGL</label>
                                                                                                            <input type="text" class="form-control" name="tgl" id="tgl">
                                                                                                            <label for="login">LOGIN</label>
                                                                                                            <input type="text" class="form-control" name="login" id="login">
                                                                                                            <label for="nama_agent">NAMA AGENT</label>
                                                                                                            <input type="text" class="form-control" name="nama_agent" id="nama_agent" readonly>
                                                                                                            <label for="area">AREA</label>
                                                                                                            <input type="text" class="form-control" name="area" id="area" readonly>
                                                                                                            <label for="upd_tl">UPD TL</label>
                                                                                                            <input type="text" class="form-control" name="upd_tl" id="upd_tl">
                                                                                                            <label for="rec_tl">REC TL</label>
                                                                                                            <input type="text" class="form-control" name="rec_tl" id="rec_tl">
                                                                                                            <label for="tgl_tl">TGL TL</label>
                                                                                                            <input type="text" class="form-control" name="tgl_tl" id="tgl_tl">
                                                                                                            <label for="pick_data_bebas">PICK DATA BEBAS</label>
                                                                                                            <input type="text" class="form-control" name="pick_data_bebas" id="pick_data_bebas" readonly>

                                                                                                            <label for="fastel">NO FASTEL</label>
																											<input type="text" class="form-control" name="fastel" id="fastel">
                                                                                                            <label for="nama_plg">NAMA Pelanggan</label>
                                                                                                            <input type="text" class="form-control" name="nama_plg" id="nama_plg">
                                                                                                            <label for="no_telp">NO Telepon</label>
                                                                                                            <input type="text" class="form-control" name="no_telp" id="no_telp">
                                                                                                            <label for="no_ktp">NO KTP</label>
                                                                                                            <input type="text" class="form-control" name="no_ktp" id="no_ktp">
                                                                                                            <label for="no_kk">NO KK</label>
                                                                                                            <input type="text" class="form-control" name="no_kk" id="no_kk">
                                                                                                            <label for="alamat">Alamat</label>
                                                                                                            <input type="text" class="form-control" name="alamat" id="alamat">
                                                                                                            <label for="alamat_kirim">Alamat Kirim</label>
                                                                                                            <input type="text" class="form-control" name="alamat_kirim" id="alamat_kirim">
                                                                                                            <label for="email">Email</label>
                                                                                                            <input type="email" class="form-control" name="email" id="email">
                                                                                                            <label for="tgl_setuju">Tanggal Setuju</label>
                                                                                                            <input type="date" class="form-control" name="tgl_setuju" id="tgl_setuju">
                                                                                                            <label for="msisdn">MSISDN</label>
                                                                                                            <input type="text" class="form-control" name="msisdn" id="msisdn">
                                                                                                            <label for="reserve_id">Reserve ID</label>
                                                                                                            <input type="text" class="form-control" name="reserve_id" id="reserve_id">
                                                                                                            <label for="area_tsel">Area Tsel</label>
                                                                                                            <input type="text" class="form-control" name="area_tsel" id="area_tsel">
                                                                                                            <label for="kota">Kota</label>
                                                                                                            <input type="text" class="form-control" name="kota" id="kota">

                                                                                                            <label for="jenis">JENIS</label>
																											<!-- <input type="text" class="form-control" name="jenis" id="jenis"> -->
                                                                                                            <select name="jenis" class="form-control" id="jenis">
                                                                                                                <option value=" ">Pilih Campaign</option>
                                                                                                                <?php
                                                                                                                $qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE `aktif`='1'");
                                                                                                                $k = 1;
                                                                                                                while ($rsk = mysqli_fetch_row($qsk)) {
                                                                                                                    if ($rsk[1] == $jenis) {
                                                                                                                        $sel = "selected";
                                                                                                                        $id_jenis = $rsk[0];
                                                                                                                    } else {
                                                                                                                        $sel = "";
                                                                                                                    }
                                                                                                                    echo "<option value=\"$rsk[1]\" $sel> $rsk[1] </option>";
                                                                                                                    $k++;
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                            <label for="status">STATUS</label>
                                                                                                            <!-- <input type="text" class="form-control" name="status" id="status"> -->
                                                                                                            <select name="status" class="form-control" id="status">
                                                                                                                <option value=" ">Pilih Status call</option>
                                                                                                                <option value="Contacted">Contacted</option>
                                                                                                                <option value="Not Contacted">Not Contacted</option>
                                                                                                                <option value="Follow Up Recall">Follow Up Recall</option>
                                                                                                            </select>
                                                                                                            <label for="kategori">KATEGORI</label>
                                                                                                            <!-- <input type="text" class="form-control" name="kategori" id="kategori"> -->
                                                                                                            <select name="kategori" class="form-control" id="kategori">
                                                                                                                <option value=" ">Pilih Kategori</option>
                                                                                                                <option value="Agree">Agree</option>
                                                                                                                <option value="Not Agree">Not Agree</option>
                                                                                                                <option value="Follow UP">Follow UP</option>
                                                                                                            </select>
                                                                                                            <label for="reason">REASON</label>
                                                                                                            <!-- <input type="text" class="form-control" name="reason" id="reason"> -->
                                                                                                            <select name="reason" class="form-control" id="reason">
                                                                                                                <option value=" ">Pilih Reason Call</option>
                                                                                                                <?php
                                                                                                                $qsk = mysqli_query($con, "SELECT DISTINCT keterangan FROM app_tam_reason WHERE `aktif`='1'");

                                                                                                                $k = 1;
                                                                                                                while ($rsk = mysqli_fetch_row($qsk)) {
                                                                                                                    echo "<option value=\"$rsk[0]\"> $rsk[0]</option>";
                                                                                                                    $k++;
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                           
                                                                                                            
                                                                                                            <label for="keterangan">KETERANGAN</label>
                                                                                                            <input type="text" class="form-control" name="keterangan" id="keterangan">
                                                                                                            <label for="follow">FOLLOW</label>
																											<!-- <input type="text" class="form-control" name="follow" id="follow"> -->
                                                                                                            <select name="follow" class="form-control" id="follow">
                                                                                                                <option value=" ">Pilih Follow</option>
                                                                                                                <?php
                                                                                                                $qsk = mysqli_query($con, "SELECT * FROM app_tam_follow");

                                                                                                                $k = 1;
                                                                                                                while ($rsk = mysqli_fetch_row($qsk)) {
                                                                                                                    echo "<option value=\"$rsk[0]\"> $rsk[0]</option>";
                                                                                                                    $k++;
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>

                                                                                                            <label for="upd_qco">UPD QCO</label>
                                                                                                            <input type="text" class="form-control" name="upd_qco" id="upd_qco">
                                                                                                            <label for="rec_qco">REC QCO</label>
                                                                                                            <input type="text" class="form-control" name="rec_qco" id="rec_qco">
                                                                                                           
                                                                                                            <label for="tgl_qco">TGL QCO1</label>
                                                                                                            <input type="text" class="form-control" name="tgl_qco" id="tgl_qco">
                                                                                                                                                                                                                        
                                                                                                            <label for="valid">VALID</label>
                                                                                                            <!-- <input type="text" class="form-control" name="valid" id="valid"> -->
                                                                                                            <select name="valid" class="form-control" id="valid">
                                                                                                                <option value=" ">Pilih Valid</option>
                                                                                                                <option value="Valid">Valid</option>
                                                                                                                <option value="Not Valid">Not Valid</option>
                                                                                                            </select>
                                                                                                            <label for="input">INPUT</label>
                                                                                                            <!-- <input type="text" class="form-control" name="input" id="input"> -->
                                                                                                            <select name="input" class="form-control" id="input">
                                                                                                                <option value=" ">Pilih Input</option>
                                                                                                                <option value="New">New</option>
                                                                                                                <option value="Recall">Recall</option>
                                                                                                                <option value="Follow UP">Follow UP</option>
                                                                                                            </select>
                                                                                                           
                                                                                                            <label for="durasi">DURASI</label>
                                                                                                            <input type="text" class="form-control" name="durasi" id="durasi">
                                                                                                            
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<input type="submit" class="btn btn-primary" value="Save Changes"></input>
														</div>
																											</form>
														</div>
													</div>
											</div>
                                            <!-- Modal Popup to DELETE Deal Form -->
											<div class="modal fade" id="myMODALDELETE" tabindex="-1" role="dialog" aria-labelledby="editDealModalLabelDELETE" aria-hidden="true" data-backdrop="false">
													<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Delete Data TAMARA HALO</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="pengubahan_data_halo.php" method="POST" id="FormRekom_qa">
																	<input type="hidden" class="form-control" name="id" id="id">
																	<input type="hidden" class="form-control" name="login" id="login">
																	<input type="hidden" class="form-control" name="fastel" id="fastel">
                                                                    <input type="hidden" class="form-control" name="tgl" id="tgl">
                                                                    <input type="hidden" class="form-control" name="status_ubah" id="status_ubah" value="Hapus">
                                                                    
                                                      
                                                                                                            <input type="hidden" class="form-control" name="nama_plg" id="nama_plg">
                                                                                                            <input type="hidden" class="form-control" name="no_telp" id="no_telp">
                                                                                                            <input type="hidden" class="form-control" name="no_ktp" id="no_ktp">
                                                                                                            <input type="hidden" class="form-control" name="no_kk" id="no_kk">
                                                                                                            <input type="hidden" class="form-control" name="alamat" id="alamat">
                                                                                                            <input type="hidden" class="form-control" name="alamat_kirim" id="alamat_kirim">
                                                                                                            <input type="hidden" class="form-control" name="email" id="email">
                                                                                                            <input type="hidden" class="form-control" name="tgl_setuju" id="tgl_setuju">
                                                                                                            <input type="hidden" class="form-control" name="msisdn" id="msisdn">
                                                                                                            <input type="hidden" class="form-control" name="reserve_id" id="reserve_id">
                                                                                                            <input type="hidden" class="form-control" name="area_tsel" id="area_tsel">
                                                                                                            <input type="hidden" class="form-control" name="kota" id="kota">
                                                                                                            <input type="hidden" class="form-control" name="nama_agent" id="nama_agent">
                                                                                                            <input type="hidden" class="form-control" name="area" id="area">
                                                                                                            <input type="hidden" class="form-control" name="upd_tl" id="upd_tl">
                                                                                                            <input type="hidden" class="form-control" name="rec_tl" id="rec_tl">
                                                                                                            <input type="hidden" class="form-control" name="tgl_tl" id="tgl_tl">
                                                                                                            <input type="hidden" class="form-control" name="pick_data_bebas" id="pick_data_bebas">

																											<input type="hidden" class="form-control" name="jenis" id="jenis">
                                                                                                            <input type="hidden" class="form-control" name="status" id="status">
                                                                                                            <input type="hidden" class="form-control" name="kategori" id="kategori">
                                                                                                            <input type="hidden" class="form-control" name="reason" id="reason">
                                                                                                            <input type="hidden" class="form-control" name="keterangan" id="keterangan">
																											<input type="hidden" class="form-control" name="follow" id="follow">
                                                                                                            <input type="hidden" class="form-control" name="upd_qco" id="upd_qco">
                                                                                                            <input type="hidden" class="form-control" name="rec_qco" id="rec_qco">
                                                                                                            <input type="hidden" class="form-control" name="upd_tl" id="upd_tl">
																											<input type="hidden" class="form-control" name="rec_tl" id="rec_tl">
                                                                                                            <input type="hidden" class="form-control" name="tgl_qco" id="tgl_qco">
																											<!--input type="hidden" class="form-control" name="tgl_tl" id="tgl_tl"-->
                                                                                                            <!--input type="hidden" class="form-control" name="tgl_suport" id="tgl_suport"-->
                                                                                                            <input type="hidden" class="form-control" name="valid" id="valid">
                                                                                                            <input type="hidden" class="form-control" name="input" id="input">
                                                                                                            <input type="hidden" class="form-control" name="input" id="durasi">
                                                                                                            <input type="hidden" class="form-control" name="id_return_tl" id="id_return_tl">

                                                                    <label for="fastel">Apakah Anda Yakin data ini dihapus ?</label>
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<input type="submit" class="btn btn-primary" value="Hapus Data"></input>
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
								<?php
								//$query   = "SELECT COUNT(*) AS jumData FROM app_tam_halo as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
								//echo $query;
								$hasil   = mysqli_query($con,$query);
								$data    = mysqli_fetch_array($hasil);
								//$jumData = $data['jumData'];
								//$jumPage = ceil($jumData/$dataPerPage);
								//if ($noPage > 1) echo  "<td><a href='approve.php?page=".($noPage-1)."&site=$site'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
								//echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
								//if ($noPage < $jumPage)  echo "<td><a href='approve.php?page=".($noPage+1)."&site=$site'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> "; 
								//echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";
								
								if ($_POST['date'] And $_POST['exp'] And $_POST['site'])
								{
									// echo "$tgl"; 
									//include "export.php";
								}
								
								?>
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
$('#NoOk').hide();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data('id');
  var LOGIN = button.data('login');
  var FASTEL = button.data('fastel');
  var TGL = button.data('tgl');
  var NAMA_PLG = button.data('nama_plg');
  var NO_TELP = button.data('no_telp');
  var NO_KTP = button.data('no_ktp');
  var NO_KK = button.data('no_kk');
  var ALAMAT = button.data('alamat');
  var ALAMAT_KIRIM = button.data('alamat_kirim');
  var EMAIL = button.data('email');
  var TGL_SETUJU = button.data('tgl_setuju');
  var MSISDN = button.data('msisdn');
  var RESERVE_ID = button.data('reserve_id');
  var AREA_TSEL = button.data('area_tsel');
  var KOTA = button.data('kota');

  var NAMA_AGENT = button.data('nama_agent');
  var AREA = button.data('area');
  var UPD_TL = button.data('upd_tl');
  var REC_TL = button.data('rec_tl');
  var TGL_TL = button.data('tgl_tl');
  var PICK_DATA_BEBAS = button.data('pick_data_bebas');

  var JENIS = button.data('jenis');
  var STATUS = button.data('status');
  var KATEGORI = button.data('kategori');
  var REASON = button.data('reason');
  var KETERANGAN = button.data('keterangan');
  var FOLLOW = button.data('follow');
  var UPD_QCO = button.data('upd_qco');
  var REC_QCO = button.data('rec_qco');
  var UPD_TL = button.data('upd_tl');
  var REC_TL = button.data('rec_tl');
  var TGL_QCO = button.data('tgl_qco');
  var ID_RETURN_TL = button.data('id_return_tl');
  var VALID = button.data('valid');
  var INPUT = button.data('input');
  var DURASI = button.data('durasi');

  $('input[name="id"]').val(ID);
  $('input[name="login1"]').val(LOGIN);
  $('input[name="login"]').val(LOGIN);
  $('input[name="fastel"]').val(FASTEL);
  $('input[name="tgl"]').val(TGL);
  $('input[name="nama_plg"]').val(NAMA_PLG);
  $('input[name="no_telp"]').val(NO_TELP);
  $('input[name="no_ktp"]').val(NO_KTP);

  $('input[name="no_kk"]').val(NO_KK);
  $('input[name="alamat"]').val(ALAMAT);
  $('input[name="alamat_kirim"]').val(ALAMAT_KIRIM);
  $('input[name="email"]').val(EMAIL);
  $('input[name="tgl_setuju"]').val(TGL_SETUJU);
  $('input[name="msisdn"]').val(MSISDN);
  $('input[name="reserve_id"]').val(RESERVE_ID);
  $('input[name="area_tsel"]').val(AREA_TSEL);
  $('input[name="kota"]').val(KOTA);

  $('input[name="nama_agent"]').val(NAMA_AGENT);
  $('input[name="area"]').val(AREA);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="tgl_tl"]').val(TGL_TL);
  $('input[name="pick_data_bebas"]').val(PICK_DATA_BEBAS);

  $('select[name="jenis"]').val(JENIS);
  $('select[name="status"]').val(STATUS);
  $('select[name="kategori"]').val(KATEGORI);
  $('select[name="reason"]').val(REASON);
  $('input[name="keterangan"]').val(KETERANGAN);
  $('select[name="follow"]').val(FOLLOW);
  $('input[name="upd_qco"]').val(UPD_QCO);
  $('input[name="rec_qco"]').val(REC_QCO);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="tgl_qco"]').val(TGL_QCO);
  $('input[name="id_return_tl"]').val(ID_RETURN_TL);
  $('select[name="valid"]').val(VALID);
  $('select[name="input"]').val(INPUT);
  $('input[name="durasi"]').val(DURASI);
  

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
  var NAMA_PLG = button.data('nama_plg');
  var NO_TELP = button.data('no_telp');
  var NO_KTP = button.data('no_ktp');
  var NO_KK = button.data('no_kk');
  var ALAMAT = button.data('alamat');
  var ALAMAT_KIRIM = button.data('alamat_kirim');
  var EMAIL = button.data('email');
  var TGL_SETUJU = button.data('tgl_setuju');
  var MSISDN = button.data('msisdn');
  var RESERVE_ID = button.data('reserve_id');
  var AREA_TSEL = button.data('area_tsel');
  var KOTA = button.data('kota');

  var NAMA_AGENT = button.data('nama_agent');
  var AREA = button.data('area');
  var UPD_TL = button.data('upd_tl');
  var REC_TL = button.data('rec_tl');
  var TGL_TL = button.data('tgl_tl');
  var PICK_DATA_BEBAS = button.data('pick_data_bebas');

  var JENIS = button.data('jenis');
  var STATUS = button.data('status');
  var KATEGORI = button.data('kategori');
  var REASON = button.data('reason');
  var KETERANGAN = button.data('keterangan');
  var FOLLOW = button.data('follow');
  var UPD_QCO = button.data('upd_qco');
  var REC_QCO = button.data('rec_qco');
  var UPD_TL = button.data('upd_tl');
  var REC_TL = button.data('rec_tl');
  var TGL_QCO = button.data('tgl_qco');
  var ID_RETURN_TL = button.data('id_return_tl');
  var VALID = button.data('valid');
  var INPUT = button.data('input');
  var DURASI = button.data('durasi');
 

  $('input[name="id"]').val(ID);
  $('input[name="login1"]').val(LOGIN);
  $('input[name="login"]').val(LOGIN);
  $('input[name="fastel"]').val(FASTEL);
  $('input[name="tgl"]').val(TGL);
  $('input[name="nama_plg"]').val(NAMA_PLG);
  $('input[name="no_telp"]').val(NO_TELP);
  $('input[name="no_ktp"]').val(NO_KTP);

  $('input[name="no_kk"]').val(NO_KK);
  $('input[name="alamat"]').val(ALAMAT);
  $('input[name="alamat_kirim"]').val(ALAMAT_KIRIM);
  $('input[name="email"]').val(EMAIL);
  $('input[name="tgl_setuju"]').val(TGL_SETUJU);
  $('input[name="msisdn"]').val(MSISDN);
  $('input[name="reserve_id"]').val(RESERVE_ID);
  $('input[name="area_tsel"]').val(AREA_TSEL);
  $('input[name="kota"]').val(KOTA);

  $('input[name="nama_agent"]').val(NAMA_AGENT);
  $('input[name="area"]').val(AREA);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="tgl_tl"]').val(TGL_TL);
  $('input[name="pick_data_bebas"]').val(PICK_DATA_BEBAS);

  $('select[name="jenis"]').val(JENIS);
  $('select[name="status"]').val(STATUS);
  $('select[name="kategori"]').val(KATEGORI);
  $('select[name="reason"]').val(REASON);
  $('input[name="keterangan"]').val(KETERANGAN);
  $('select[name="follow"]').val(FOLLOW);
  $('input[name="upd_qco"]').val(UPD_QCO);
  $('input[name="rec_qco"]').val(REC_QCO);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="tgl_qco"]').val(TGL_QCO);
  $('input[name="id_return_tl"]').val(ID_RETURN_TL);
  $('select[name="valid"]').val(VALID);
  $('select[name="input"]').val(INPUT);
  $('input[name="durasi"]').val(DURASI);

});

</script>
<?php	require_once("../deft_foo.php"); ?>