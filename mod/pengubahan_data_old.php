<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$nama = $_SESSION['name'];
$username = $_SESSION['username'];
$jb = $_SESSION["jb"];
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
        // $query = "UPDATE app_tam_data2 SET tapping_decline='$input', alasan_nok='$alasan', skrip = '$anti_decline' WHERE id='$id'";
        $query = "UPDATE app_tam_data2 SET tgl='$tgl', login='$login', fastel = '$fastel', nama_dm='$nama_dm', tlp='$tlp', 
        reg='$reg', jenis = '$jenis', status = '$status', kategori='$kategori', reason='$reason', penerima = '$penerima', 
        ket='$ket', follow='$follow', upd_qco='$upd_qco', rec_qco = '$rec_qco', 
        tgl_qco1 = '$tgl_qco1', tgl_tl = '$tgl_tl', tgl_suport='$tgl_suport', valid='$valid', input='$input',
        add_on_tsel = '$add_on_tsel', id_return_tl='$detail_return' WHERE id='$id'";
        mysqli_query($con, $query);
    }

    if($status_ubah == "Hapus") {
        $query = "DELETE FROM app_tam_data2 WHERE login='$login' AND fastel LIKE '%$fastel%'AND id='$id' AND tgl='$tgl'";
        mysqli_query($con, $query);
        $ubah_data = "Hapus Data";
    } 
    // if($tgl != "" AND $fastel != "") {
        

        $query = "INSERT INTO `history_app_tam_data2` (`tgl`, `login`, `fastel`, `nama_dm`, `tlp`, `reg`, `jenis`, `status`, `kategori`, 
        `reason`, `penerima`, `ket`, `follow`, `upd_qco`, `rec_qco`, `tgl_qco1`, `tgl_tl`, 
        `tgl_suport`, `valid`, `input`, `add_on_tsel`, `status_history`, `upd`, `nama_upd`, `jabatan_upd`, `tgl_input`,`id_return_tl` ) VALUES ('$tgl', '$login', '$fastel', '$nama_dm', '$tlp', '$reg', '$jenis', '$status', '$kategori', 
        '$reason', '$penerima', '$ket', '$follow', '$upd_qco', '$rec_qco', '$tgl_qco1', '$tgl_tl', 
        '$tgl_suport', '$valid', '$input', '$add_on_tsel', '$ubah_data','$username','$nama','$jb','$date_now','$detail_return')";
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
// FROM app_tam_data2 AS a
// INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
// WHERE a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $area group by b.user5";
// //echo $query;
// }else{
if($fastel != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";

	$query="SELECT * FROM app_tam_data2 as a INNER JOIN cc147_main_users as b ON a.login = b.username WHERE a.fastel = '$fastel'";

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
					
			
					<form name="demoform" action='pengubahan_data.php' method='post' accept-charset='UTF-8'>
						
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
									<h4 class="title" style="color:#008B8B">Data Transaksi</h4>
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
											<th align="center"><font color="red" face="Tahoma" size="2">Nama DM</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tlp</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Reg</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Reason</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Penerima</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Ket</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Follow</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">UPD QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rec QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl QCO1</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl TL</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Tgl Suport</th>
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
                                            <th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tlp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reg']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
                                            
                                            <th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['penerima']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ket']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['follow']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_qco1']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['tgl_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_suport']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['add_on_tsel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['qco']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['upd']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['nama_upd']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['jabatan_upd']."</th>";
                                            

											echo "<th align=\"center\" style=\"font-size:10px\">
                                                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" 
                                                    data-id=\"".$data['id']."\" data-fastel=\"".$data['fastel']."\"  data-login=\"".$data['login']."\" 
                                                    data-tgl=\"".$data['tgl']."\" data-nama_dm=\"".$data['nama_dm']."\" 
                                                    data-tlp=\"".$data['tlp']."\" data-reg=\"".$data['reg']."\"  data-jenis=\"".$data['jenis']."\" 
                                                    data-status=\"".$data['status']."\" data-kategori=\"".$data['kategori']."\"  data-reason=\"".$data['reason']."\" 
                                                    data-penerima=\"".$data['penerima']."\" 
                                                    data-ket=\"".$data['ket']."\" data-follow=\"".$data['follow']."\"  data-upd_qco=\"".$data['upd_qco']."\" 
                                                    data-rec_qco=\"".$data['rec_qco']."\" data-upd_tl=\"".$data['upd_tl']."\"  data-rec_tl=\"".$data['rec_tl']."\" 
                                                    data-upd_suport=\"".$data['upd_suport']."\" data-rec_suport=\"".$data['rec_suport']."\"  data-tgl_qco1=\"".$data['tgl_qco1']."\" 
                                                    data-tgl_tl=\"".$data['tgl_tl']."\" data-tgl_suport=\"".$data['tgl_suport']."\"  data-valid=\"".$data['valid']."\" 
                                                    data-input=\"".$data['input']."\" data-add_on_tsel=\"".$data['add_on_tsel']."\"  
                                                    data-target=\"#myMODAL\">Update</button>

                                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" 
                                                    data-id=\"".$data['id']."\" data-fastel=\"".$data['fastel']."\"  data-login=\"".$data['login']."\" 
                                                    data-tgl=\"".$data['tgl']."\" data-nama_dm=\"".$data['nama_dm']."\" 
                                                    data-tlp=\"".$data['tlp']."\" data-reg=\"".$data['reg']."\"  data-jenis=\"".$data['jenis']."\" 
                                                    data-status=\"".$data['status']."\" data-kategori=\"".$data['kategori']."\"  data-reason=\"".$data['reason']."\"  
                                                    data-penerima=\"".$data['penerima']."\" 
                                                    data-ket=\"".$data['ket']."\" data-follow=\"".$data['follow']."\"  data-upd_qco=\"".$data['upd_qco']."\" 
                                                    data-rec_qco=\"".$data['rec_qco']."\" data-upd_tl=\"".$data['upd_tl']."\"  data-rec_tl=\"".$data['rec_tl']."\" 
                                                    data-upd_suport=\"".$data['upd_suport']."\" data-rec_suport=\"".$data['rec_suport']."\"  data-tgl_qco1=\"".$data['tgl_qco1']."\" 
                                                    data-tgl_tl=\"".$data['tgl_tl']."\" data-tgl_suport=\"".$data['tgl_suport']."\"  data-valid=\"".$data['valid']."\" 
                                                    data-input=\"".$data['input']."\" data-add_on_tsel=\"".$data['add_on_tsel']."\"  
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
														<h5 class="modal-title" id="exampleModalLabel">Update Data TAMARA</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="pengubahan_data.php" method="POST" id="FormRekom_qa">
																	<input type="hidden" class="form-control" name="id" id="id">
																											<input type="hidden" class="form-control" name="login1" id="login1">
                                                                                                            <input type="hidden" class="form-control" name="status_ubah" id="status_ubah" value="Edit">
                                                                                                            <label for="ubah_data">Kendala Data</label>
                                                                                                            <input type="text" class="form-control" name="ubah_data" id="ubah_data" required>
																											
																											<label for="detail_return">Detail Return</label>
                                                                                                            <input type="text" class="form-control" name="detail_return" id="detail_return" required>
																											
                                                                                                            <label for="tgl">TGL</label>
                                                                                                            <input type="text" class="form-control" name="tgl" id="tgl">
                                                                                                            <label for="login">LOGIN</label>
                                                                                                            <input type="text" class="form-control" name="login" id="login">
                                                                                                           
                                                                                                            <label for="fastel">NO FASTEL</label>
																											<input type="text" class="form-control" name="fastel" id="fastel">
                                                                                                            <label for="nama_dm">NAMA DM</label>
                                                                                                            <input type="text" class="form-control" name="nama_dm" id="nama_dm">
                                                                                                            <label for="tlp">TLP</label>
                                                                                                            <input type="text" class="form-control" name="tlp" id="tlp">
                                                                                                            <label for="reg">REG</label>
                                                                                                            <!-- <input type="text" class="form-control" name="reg" id="reg"> -->
                                                                                                            <select id="reg" name="reg" class="form-control">
                                                                                                                <option value="">Pilih Regional</option>
                                                                                                                <option value="I"> I </option>
                                                                                                                <option value="II"> II </option>
                                                                                                                <option value="III"> III </option>
                                                                                                                <option value="IV"> IV </option>
                                                                                                                <option value="V"> V </option>
                                                                                                                <option value="VI"> VI </option>
                                                                                                                <option value="VII"> VII </option>
                                                                                                            </select>
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
                                                                                                           
                                                                                                            <label for="penerima">PENERIMA</label>
                                                                                                            <input type="text" class="form-control" name="penerima" id="penerima">
                                                                                                            <label for="ket">KET</label>
                                                                                                            <input type="text" class="form-control" name="ket" id="ket">
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
                                                                                                           
                                                                                                            <label for="tgl_qco1">TGL QCO1</label>
                                                                                                            <input type="text" class="form-control" name="tgl_qco1" id="tgl_qco1">
                                                                                                            <label for="tgl_tl">TGL TL</label>
																											<input type="text" class="form-control" name="tgl_tl" id="tgl_tl">

                                                                                                            <label for="tgl_suport">TGL SUPORT</label>
                                                                                                            <input type="text" class="form-control" name="tgl_suport" id="tgl_suport">
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
                                                                                                           
                                                                                                            <label for="add_on_tsel">REVENUE</label>
                                                                                                            <input type="text" class="form-control" name="add_on_tsel" id="add_on_tsel">
                                                                                                            
                                                                                                            
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
														<h5 class="modal-title" id="exampleModalLabel">Delete Data TAM2</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="pengubahan_data.php" method="POST" id="FormRekom_qa">
																	<input type="hidden" class="form-control" name="id" id="id">
																	<input type="hidden" class="form-control" name="login" id="login">
																	<input type="hidden" class="form-control" name="fastel" id="fastel">
                                                                    <input type="hidden" class="form-control" name="tgl" id="tgl">
                                                                    <input type="hidden" class="form-control" name="status_ubah" id="status_ubah" value="Hapus">
                                                                    
                                                                    <input type="hidden" class="form-control" name="no_pelanggan" id="no_pelanggan">
                                                                                                           
                                                                                                            <input type="hidden" class="form-control" name="nama_dm" id="nama_dm">
                                                                                                            <input type="hidden" class="form-control" name="tlp" id="tlp">
                                                                                                            <input type="hidden" class="form-control" name="reg" id="reg">
																											<input type="hidden" class="form-control" name="jenis" id="jenis">
                                                                                                            <input type="hidden" class="form-control" name="status" id="status">
                                                                                                            <input type="hidden" class="form-control" name="kategori" id="kategori">
                                                                                                            <input type="hidden" class="form-control" name="reason" id="reason">
																											<input type="hidden" class="form-control" name="segment" id="segment">
                                                                                                            <input type="hidden" class="form-control" name="relasi" id="relasi">
                                                                                                            <input type="hidden" class="form-control" name="penerima" id="penerima">
                                                                                                            <input type="hidden" class="form-control" name="ket" id="ket">
																											<input type="hidden" class="form-control" name="follow" id="follow">
                                                                                                            <input type="hidden" class="form-control" name="upd_qco" id="upd_qco">
                                                                                                            <input type="hidden" class="form-control" name="rec_qco" id="rec_qco">
                                                                                                            <input type="hidden" class="form-control" name="upd_tl" id="upd_tl">
																											<input type="hidden" class="form-control" name="rec_tl" id="rec_tl">
                                                                                                            <input type="hidden" class="form-control" name="upd_suport" id="upd_suport">
                                                                                                            <input type="hidden" class="form-control" name="rec_suport" id="rec_suport">
                                                                                                            <input type="hidden" class="form-control" name="tgl_qco1" id="tgl_qco1">
																											<input type="hidden" class="form-control" name="tgl_tl" id="tgl_tl">
                                                                                                            <input type="hidden" class="form-control" name="tgl_suport" id="tgl_suport">
                                                                                                            <input type="hidden" class="form-control" name="valid" id="valid">
                                                                                                            <input type="hidden" class="form-control" name="input" id="input">
																											<input type="hidden" class="form-control" name="prof_hp" id="prof_hp">
                                                                                                            <input type="hidden" class="form-control" name="skrip" id="skrip">
                                                                                                            <input type="hidden" class="form-control" name="alasan_nok" id="alasan_nok">
                                                                                                            <input type="hidden" class="form-control" name="prof_hoby" id="prof_hoby">
																											<input type="hidden" class="form-control" name="prof_agama" id="prof_agama">
                                                                                                            <input type="hidden" class="form-control" name="prof_facebook" id="prof_facebook">
                                                                                                            <input type="hidden" class="form-control" name="add_on_tsel" id="add_on_tsel">
                                                                                                            <input type="hidden" class="form-control" name="id_return_tl" id="id_return_tl">
																											<input type="hidden" class="form-control" name="tapping_decline" id="tapping_decline">
                                                                                                            <input type="hidden" class="form-control" name="status_notif" id="status_notif">
                                                                                                            <input type="hidden" class="form-control" name="detil_alasan" id="detil_alasan">
                                                                                                            <input type="hidden" class="form-control" name="reject" id="reject">

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
								//$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
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
  $('select[name="reg"]').val(REG);
  $('select[name="jenis"]').val(JENIS);
  $('select[name="status"]').val(STATUS);
  $('select[name="kategori"]').val(KATEGORI);
  $('select[name="reason"]').val(REASON);
  $('input[name="segment"]').val(SEGMENT);
  $('input[name="relasi"]').val(RELASI);
  $('input[name="penerima"]').val(PENERIMA);
  $('input[name="ket"]').val(KET);
  $('select[name="follow"]').val(FOLLOW);
  $('input[name="upd_qco"]').val(UPD_QCO);
  $('input[name="rec_qco"]').val(REC_QCO);
  $('input[name="upd_tl"]').val(UPD_TL);
  $('input[name="rec_tl"]').val(REC_TL);
  $('input[name="upd_suport"]').val(UPD_SUPORT);
  $('input[name="tgl_qco1"]').val(TGL_QCO1);
  $('input[name="tgl_tl"]').val(TGL_TL);
  $('input[name="tgl_suport"]').val(TGL_SUPORT);
  $('select[name="valid"]').val(VALID);
  $('select[name="input"]').val(INPUT);
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