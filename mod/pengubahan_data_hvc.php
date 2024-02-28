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
$date_now = date("Y-m-d");
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

if(isset($id)) {
    
    if ($status_ubah == "Edit") {
        // $query = "UPDATE app_tam_hvc SET tapping_decline='$input', alasan_nok='$alasan', skrip = '$anti_decline' WHERE id='$id'";
        $query = "UPDATE app_tam_hvc SET tgl='$tgl', login='$login', no_inet = '$no_inet', nama_plg='$nama_plg', no_telp='$no_telp', 
        nama_pemilik = '$nama_pemilik', keterangan='$keterangan', follow='$follow', upd_qco='$upd_qco', rec_qco = '$rec_qco', 
        tgl_qco = '$tgl_qco', valid='$valid', input='$input',
        selisih_harga = '$selisih_harga', id_return_tl = '$return_tl' WHERE id='$id'";
        mysqli_query($con, $query);
    }

    if($status_ubah == "Hapus") {
        $query = "DELETE FROM app_tam_hvc WHERE login='$login' AND no_inet LIKE '%$no_inet%'AND id='$id' AND tgl='$tgl'";
        mysqli_query($con, $query);
        $ubah_data = "Hapus Data";
    } 
    // if($tgl != "" AND $no_inet != "") {
        

        $query = "INSERT INTO `app_tam_hvc_history` (`tgl`, `login`, `no_inet`, `nama_plg`, `no_telp`, `nama_pemilik`, `keterangan`, `follow`, `upd_qco`, `rec_qco`, `tgl_qco`, 
        `valid`, `input`, `selisih_harga`, `status_history`, `upd`, `nama_upd`, `jabatan_upd`, `tgl_input`, `id_return_tl`) VALUES ('$tgl', '$login', '$no_inet', '$nama_plg', 
        '$no_telp', '$nama_pemilik', '$keterangan', '$follow', '$upd_qco', '$rec_qco', '$tgl_qco', '$valid', '$input', '$selisih_harga', '$ubah_data','$username','$nama','$jb',
        '$date_now', '$return_tl')";
        mysqli_query($con, $query);
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
// FROM app_tam_hvc AS a
// INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
// WHERE a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $area group by b.user5";
// //echo $query;
// }else{
if($no_inet != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.no_inet,a.nama_plg,a.no_telp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.keterangan,a.tapping_decline FROM
    // app_tam_hvc AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";

	$query="SELECT * FROM app_tam_hvc as a INNER JOIN cc147_main_users as b ON a.login = b.username WHERE a.no_inet = '$no_inet'";

  $no=0;
  $hasil = mysqli_query($con,$query) or die ("Query gagal!");
  $hasil_total = mysqli_num_rows($hasil);
  if($hasil_total == 0){
		$message = "Data tidak ditemukan dari hasil pencarian pada input an yang dimasukan! Silahkan cek kembali!";
		echo "<script type='text/javascript'>alert('$message');</script>";
  }
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
					
			
					<form name="demoform" action='pengubahan_data_hvc.php' method='post' accept-charset='UTF-8'>
						
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
								
								<label class="control-label" style="color:#008B8B">No. inet</label>
								<input class="form-control" type="text" name="no_inet"/>	
								</label>
								
							</div>							
						</tr>
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='pengubahan_data_hvc.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Data TAMARA HVC</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
								if ($no_inet=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! No no_inet belum dipilih dimasukkan !</div>";
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
                                            <th align="center"><font color="red" face="Tahoma" size="2">no_inet</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama DM</th>
											<th align="center"><font color="red" face="Tahoma" size="2">no_telp</th>
											<th align="center"><font color="red" face="Tahoma" size="2">nama_pemilik</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Follow</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">UPD QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rec QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl QCO</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Detil Return</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</th>		
											<th align="center"><font color="red" face="Tahoma" size="2">Revenue</th>
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
                                            <th align=\"center\" style=\"font-size:10px\">".$data['no_inet']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_telp']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['nama_pemilik']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['follow']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_qco']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['id_return_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['selisih_harga']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['qco']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['upd']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['nama_upd']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['jabatan_upd']."</th>";
                                            

											echo "<th align=\"center\" style=\"font-size:10px\">
                                                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" 
                                                    data-id=\"".$data['id']."\" 
													data-no_inet=\"".$data['no_inet']."\"  
													data-login=\"".$data['login']."\" 
                                                    data-tgl=\"".$data['tgl']."\" 
													data-nama_plg=\"".$data['nama_plg']."\" 
                                                    data-no_telp=\"".$data['no_telp']."\"  
                                                    data-nama_pemilik=\"".$data['nama_pemilik']."\" 
                                                    data-keterangan=\"".$data['keterangan']."\" 
													data-follow=\"".$data['follow']."\"  
													data-upd_qco=\"".$data['upd_qco']."\" 
                                                    data-rec_qco=\"".$data['rec_qco']."\" 
													
													data-tgl_qco=\"".$data['tgl_qco']."\" 
                                                    data-id_return_tl=\"".$data['id_return_tl']."\"   
													data-valid=\"".$data['valid']."\" 
                                                    data-input=\"".$data['input']."\" 
													data-selisih_harga=\"".$data['selisih_harga']."\"  
                                                    data-target=\"#myMODAL\">Update</button>

                                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" 
                                                    data-id=\"".$data['id']."\" 
													data-no_inet=\"".$data['no_inet']."\"  
													data-login=\"".$data['login']."\" 
                                                    data-tgl=\"".$data['tgl']."\" 
													data-nama_plg=\"".$data['nama_plg']."\" 
                                                    data-no_telp=\"".$data['no_telp']."\" 
                                                    data-nama_pemilik=\"".$data['nama_pemilik']."\" 
                                                    data-keterangan=\"".$data['keterangan']."\" 
													data-follow=\"".$data['follow']."\"  
													data-upd_qco=\"".$data['upd_qco']."\" 
                                                    data-rec_qco=\"".$data['rec_qco']."\" 
													
													data-tgl_qco=\"".$data['tgl_qco']."\" 
                                                    data-id_return_tl=\"".$data['id_return_tl']."\" 
													data-valid=\"".$data['valid']."\" 
                                                    data-input=\"".$data['input']."\" 
													data-selisih_harga=\"".$data['selisih_harga']."\"  
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
																											<input type="text" class="form-control" name="no_inet" id="no_inet" value="<?php echo $data['no_inet']; ?>" >
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
														<h5 class="modal-title" id="exampleModalLabel">Update Data TAM2</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="pengubahan_data_hvc.php" method="POST" id="FormRekom_qa">
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
                                                                                                           
                                                                                                            <label for="no_inet">NO Inet</label>
																											<input type="text" class="form-control" name="no_inet" id="no_inet">
                                                                                                            <label for="nama_plg">Nama Pelanggan</label>
                                                                                                            <input type="text" class="form-control" name="nama_plg" id="nama_plg">
                                                                                                            <label for="no_telp">no telp</label>
                                                                                                            <input type="text" class="form-control" name="no_telp" id="no_telp">
                                                                                                            <label for="nama_pemilik">nama pemilik</label>
                                                                                                            <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik">
                                                                                                            <label for="keterangan">Keterangan</label>
                                                                                                            <input type="text" class="form-control" name="keterangan" id="keterangan">
                                                                                                            <label for="follow">FOLLOW</label>
																											<!-- <input type="text" class="form-control" name="follow" id="follow"> -->
                                                                                                            <select name="follow" class="form-control" id="follow">
                                                                                                                <option value=" ">Pilih Follow</option>
                                                                                                                <?php
                                                                                                                $qsk = mysqli_query($con, "SELECT * FROM app_tam_follow");

                                                                                                                $k = 1;
                                                                                                                while ($rsk = mysqli_fetch_row($qsk)) {
                                                                                                                    echo "<option value=\"$rsk[0]\"> $rsk[0] - $rsk[1]</option>";
                                                                                                                    $k++;
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>

                                                                                                            <label for="upd_qco">UPD QCO</label>
                                                                                                            <input type="text" class="form-control" name="upd_qco" id="upd_qco">
                                                                                                            <label for="rec_qco">REC QCO</label>
                                                                                                            <input type="text" class="form-control" name="rec_qco" id="rec_qco">
                                                                                                           
                                                                                                            <label for="tgl_qco">TGL QCO</label>
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
                                                                                                            </select>
                                                                                                           
                                                                                                            <label for="selisih_harga">REVENUE</label>
                                                                                                            <input type="text" class="form-control" name="selisih_harga" id="selisih_harga">
                                                                                                            
                                                                                                            
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
														<h5 class="modal-title" id="exampleModalLabel">Delete Data TAMARA</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="pengubahan_data_hvc.php" method="POST" id="FormRekom_qa">
																	<input type="hidden" class="form-control" name="id" id="id">
																	<input type="hidden" class="form-control" name="login" id="login">
																	<input type="hidden" class="form-control" name="no_inet" id="no_inet">
                                                                    <input type="hidden" class="form-control" name="tgl" id="tgl">
                                                                    <input type="hidden" class="form-control" name="status_ubah" id="status_ubah" value="Hapus">
                                                                    
                                                                                                           
                                                                                                            <input type="hidden" class="form-control" name="nama_plg" id="nama_plg">
                                                                                                            <input type="hidden" class="form-control" name="no_telp" id="no_telp">
																											<input type="hidden" class="form-control" name="relasi" id="relasi">
                                                                                                            <input type="hidden" class="form-control" name="nama_pemilik" id="nama_pemilik">
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
                                                                                                            <input type="hidden" class="form-control" name="selisih_harga" id="selisih_harga">
                                                                                                            <input type="hidden" class="form-control" name="id_return_tl" id="id_return_tl">

                                                                    <label for="no_inet">Apakah Anda Yakin data ini dihapus ?</label>
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
								//$query   = "SELECT COUNT(*) AS jumData FROM app_tam_hvc as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
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
  var no_inet = button.data('no_inet');
  var TGL = button.data('tgl');
  var NO_PELANGGAN = button.data('no_pelanggan');
  var nama_plg = button.data('nama_plg');
  var no_telp = button.data('no_telp');
  var REG = button.data('reg');
  var JENIS = button.data('jenis');
  var STATUS = button.data('status');
  var KATEGORI = button.data('kategori');
  var REASON = button.data('reason');
  var SEGMENT = button.data('segment');
  var RELASI = button.data('relasi');
  var nama_pemilik = button.data('nama_pemilik');
  var KETerangan = button.data('keterangan');
  var FOLLOW = button.data('follow');
  var UPD_QCO = button.data('upd_qco');
  var REC_QCO = button.data('rec_qco');
  var UPD_TL = button.data('upd_tl');
  var REC_TL = button.data('rec_tl');
  var UPD_SUPORT = button.data('upd_suport');
  var REC_SUPORT = button.data('rec_suport');
  var TGL_QCO = button.data('tgl_qco');
  var ID_RETURN_TL = button.data('id_return_tl');
  var VALID = button.data('valid');
  var INPUT = button.data('input');
  var PROF_HP = button.data('prof_hp');
  var SKRIP = button.data('skrip');
  var ALASAN_NOK = button.data('alasan_nok');
  var PROF_HOBY = button.data('prof_hoby');
  var PROF_AGAMA = button.data('prof_agama');
  var PROF_FACEBOOK = button.data('prof_facebook');
  var selisih_harga = button.data('selisih_harga');
  var ID_RETURN_TL = button.data('id_return_tl');
  var TAPPING_DECLINE = button.data('tapping_decline');
  var STATUS_NOTIF = button.data('status_notif');
  var DETIL_ALASAN = button.data('detil_alasan');
  var REJECT = button.data('reject');

  $('input[name="id"]').val(ID);
  $('input[name="login1"]').val(LOGIN);
  $('input[name="login"]').val(LOGIN);
  $('input[name="no_inet"]').val(no_inet);
  $('input[name="tgl"]').val(TGL);
  $('input[name="no_pelanggan"]').val(NO_PELANGGAN);
  $('input[name="nama_plg"]').val(nama_plg);
  $('input[name="no_telp"]').val(no_telp);
  $('select[name="reg"]').val(REG);
  $('select[name="jenis"]').val(JENIS);
  $('select[name="status"]').val(STATUS);
  $('select[name="kategori"]').val(KATEGORI);
  $('select[name="reason"]').val(REASON);
  $('input[name="segment"]').val(SEGMENT);
  $('input[name="relasi"]').val(RELASI);
  $('input[name="nama_pemilik"]').val(nama_pemilik);
  $('input[name="keterangan"]').val(KETerangan);
  $('select[name="follow"]').val(FOLLOW);
  $('input[name="upd_qco"]').val(UPD_QCO);
  $('input[name="rec_qco"]').val(REC_QCO);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="upd_suport"]').val(UPD_SUPORT);
  $('input[name="tgl_qco"]').val(TGL_QCO);
  $('input[name="id_return_tl"]').val(ID_RETURN_TL);
  $('select[name="valid"]').val(VALID);
  $('select[name="input"]').val(INPUT);
  $('input[name="prof_hp"]').val(PROF_HP);
  $('input[name="skrip"]').val(SKRIP);
  $('input[name="alasan_nok"]').val(ALASAN_NOK);
  $('input[name="prof_hoby"]').val(PROF_HOBY);
  $('input[name="prof_agama"]').val(PROF_AGAMA);
  $('input[name="prof_facebook"]').val(PROF_FACEBOOK);
  $('input[name="selisih_harga"]').val(selisih_harga);
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
  var no_inet = button.data('no_inet');
  var TGL = button.data('tgl');
  var NO_PELANGGAN = button.data('no_pelanggan');
  var nama_plg = button.data('nama_plg');
  var no_telp = button.data('no_telp');
  var REG = button.data('reg');
  var JENIS = button.data('jenis');
  var STATUS = button.data('status');
  var KATEGORI = button.data('kategori');
  var REASON = button.data('reason');
  var SEGMENT = button.data('segment');
  var RELASI = button.data('relasi');
  var nama_pemilik = button.data('nama_pemilik');
  var KETerangan = button.data('keterangan');
  var FOLLOW = button.data('follow');
  var UPD_QCO = button.data('upd_qco');
  var REC_QCO = button.data('rec_qco');
  var UPD_TL = button.data('upd_tl');
  var REC_TL = button.data('rec_tl');
  var UPD_SUPORT = button.data('upd_suport');
  var REC_SUPORT = button.data('rec_suport');
  var TGL_QCO = button.data('tgl_qco');
  var ID_RETURN_TL = button.data('id_return_tl');
  var VALID = button.data('valid');
  var INPUT = button.data('input');
  var PROF_HP = button.data('prof_hp');
  var SKRIP = button.data('skrip');
  var ALASAN_NOK = button.data('alasan_nok');
  var PROF_HOBY = button.data('prof_hoby');
  var PROF_AGAMA = button.data('prof_agama');
  var PROF_FACEBOOK = button.data('prof_facebook');
  var selisih_harga = button.data('selisih_harga');
  var ID_RETURN_TL = button.data('id_return_tl');
  var TAPPING_DECLINE = button.data('tapping_decline');
  var STATUS_NOTIF = button.data('status_notif');
  var DETIL_ALASAN = button.data('detil_alasan');
  var REJECT = button.data('reject');

  $('input[name="id"]').val(ID);
  $('input[name="login1"]').val(LOGIN);
  $('input[name="login"]').val(LOGIN);
  $('input[name="no_inet"]').val(no_inet);
  $('input[name="tgl"]').val(TGL);
  $('input[name="no_pelanggan"]').val(NO_PELANGGAN);
  $('input[name="nama_plg"]').val(nama_plg);
  $('input[name="no_telp"]').val(no_telp);
  $('input[name="reg"]').val(REG);
  $('input[name="jenis"]').val(JENIS);
  $('input[name="status"]').val(STATUS);
  $('input[name="kategori"]').val(KATEGORI);
  $('input[name="reason"]').val(REASON);
  $('input[name="segment"]').val(SEGMENT);
  $('input[name="relasi"]').val(RELASI);
  $('input[name="nama_pemilik"]').val(nama_pemilik);
  $('input[name="keterangan"]').val(KETerangan);
  $('input[name="follow"]').val(FOLLOW);
  $('input[name="upd_qco"]').val(UPD_QCO);
  $('input[name="rec_qco"]').val(REC_QCO);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="upd_suport"]').val(UPD_SUPORT);
  $('input[name="tgl_qco"]').val(TGL_QCO);
  $('input[name="id_return_tl"]').val(ID_RETURN_TL);
  $('input[name="valid"]').val(VALID);
  $('input[name="input"]').val(INPUT);
  $('input[name="prof_hp"]').val(PROF_HP);
  $('input[name="skrip"]').val(SKRIP);
  $('input[name="alasan_nok"]').val(ALASAN_NOK);
  $('input[name="prof_hoby"]').val(PROF_HOBY);
  $('input[name="prof_agama"]').val(PROF_AGAMA);
  $('input[name="prof_facebook"]').val(PROF_FACEBOOK);
  $('input[name="selisih_harga"]').val(selisih_harga);
  $('input[name="id_return_tl"]').val(ID_RETURN_TL);
  $('input[name="tapping_decline"]').val(TAPPING_DECLINE);
  $('input[name="status_notif"]').val(STATUS_NOTIF);
  $('input[name="detil_alasan"]').val(DETIL_ALASAN);
  $('input[name="reject"]').val(REJECT);
});

</script>
<?php	require_once("../deft_foo.php"); ?>