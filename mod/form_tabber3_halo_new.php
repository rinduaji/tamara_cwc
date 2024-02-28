<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$ids=$id;
$not_handel=0;
$tgl = date("Y-m-d H:i:s");

$query_dwh="SELECT * FROM app_tam_halo WHERE id = '$id'";
//echo $query;
$hasil_dwh = mysqli_query($con,$query_dwh);
$data_dwh = mysqli_fetch_array($hasil_dwh);

$query="SELECT * FROM app_tam_halo AS a INNER JOIN cc147_main_users AS b ON a.login = b.username WHERE a.id = '$id'";
//echo $query;
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);
//==============================cek handel=================================
if($jb=="Tabber"){
$N_taber="SELECT count(*) as jml FROM app_tam_halo WHERE follow ='2' and `upd_qco` = '$login'";
$Ne_taber=mysqli_query($con,$N_taber);
$h_taber=mysqli_fetch_row($Ne_taber);
}
if ($h_taber[0] > 35 && $data['upd_qco']==""){
	clearstatcache();
	$location="form_tabber3_halo.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Anda Melebihi Batas Aproval!</div>";
}
else 
if ($data['upd_qco']<>"" && $data['upd_qco']<>$login)
{
	//clearstatcache();
	$location="form_tabber3_halo.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Approval ini sudah di handel $data[upd_qco]</div>";
	
	$not_handel=1;
}
else if ($login=='')
{
	//clearstatcache();
	$location="form_tabber3_halo.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Session user terlogout</div>";
	
	$not_handel=1;
}
// else {
// 	if ($login<>''){
// 	$sql="UPDATE `app_tam_halo` SET durasi='$durasi', upd_qco='$login' WHERE `id`='$ids'";
// 	$query=mysqli_query($con,$sql);
// 	}
// }


if (isset($_POST['valid']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_halo.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_halo` SET follow = '6' , durasi = '$durasi' , `rec_qco`='$rec_qco', tgl_qco='$tgl' , valid='Valid' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_halo.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}
}else if (isset($_POST['tl']) AND ($pilihan_return_tl != "")){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_halo.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_halo` SET follow = '3', durasi = '$durasi', `rec_qco`='$rec_qco', tgl_qco='$tgl', id_return_tl = '$pilihan_return_tl' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_halo.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}}
else if (isset($_POST['novalid']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_halo.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	// $sql_update_status_halo = "UPDATE app_wo_halo SET status='0', lup='$tgl' WHERE no_telp='$no_telp'";
	// mysqli_query($con, $sql_update_status_halo);

	$sql_update_no_halo = "UPDATE app_no_halo SET status_nomer = '0', tgl_pickup='' WHERE no_halo='$msisdn'";
	mysqli_query($con, $sql_update_no_halo);

	$sql="UPDATE `app_tam_halo` SET follow = '1', durasi = '$durasi', `rec_qco`='$rec_qco', tgl_qco='$tgl',valid='Not Valid' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_halo.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}}

?>
<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
					<div class="card card-plain">
						<div class="header">
							<h4 class="title">Form QCO TAM HALO</h4>	
						</div>
				
				<form id='input' name="demoform" action='form_tabber3_halo.php?id=<?php echo "$ids";?>' method='post' accept-charset='UTF-8'>
					<input type="hidden" name="login_user_qco" value="<?=$data['login']?>">
					<input type="hidden" id="submit_form" name="submit_form" value="">
					<div>
							<?php
							if(isset($no_ktp))
							$no_ktp = $no_ktp;

							
							?>
							<div class="row">
								<div class="col-md-4">
								
									
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO KTP</label>
										<input class="form-control" type="text" name="no_ktp" value="<?=($no_ktp == NULL) ? $data['no_ktp'] : $no_ktp; ?>" placeholder="masukkan nomor ktp" onKeyPress="return isNumberKey(event)" />
										<input class="form-control" type="hidden" name="login" value="<?=($login == NULL) ? $data['login'] : $login; ?>"  required />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO KK</label>
										<input class="form-control" type="text" name="no_kk" value="<?=($no_kk == NULL) ? $data['no_kk'] : $no_kk; ?>" placeholder="masukkan nomor kk" onKeyPress="return isNumberKey(event)" />
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">TELEPON</label>
										<input class="form-control" type="text" name="no_telp" id="no_telp" value="<?=($no_telp == NULL) ? $data['no_telp'] : $no_telp; ?>" placeholder="masukkan telepon" onKeyPress="return isNumberKey(event)" required />
									</div>
								</div>
							</div>
							
						</div>
						<div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">ALAMAT</label>
										<input class="form-control" type="text" name="alamat" value="<?=($alamat == NULL) ? $data['alamat'] : $alamat; ?>" placeholder="masukkan Alamat" />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">EMAIL</label>
										<input class="form-control" type="email" name="email" value="<?=($email == NULL) ? $data['email'] : $email; ?>" placeholder="masukkan Email" />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">KOTA / KABUPATEN ALAMAT PENGIRIM</label>
										<input class="form-control" type="text" name="kota" value="<?=($kota == NULL) ? $data['kota'] : $kota; ?>" placeholder="Masukkan Kota / Kabupaten Alamat Pengirim" />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">ALAMAT KIRIM</label>
										<input class="form-control" type="text" name="alamat_kirim" value="<?=($alamat_kirim == NULL) ? $data['alamat_kirim'] : $alamat_kirim; ?>" placeholder="masukkan Alamat Pengirim" />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tanggal Persetujuan</label>
										<input class="form-control" type="date" name="tgl_setuju" value="<?=($tgl_setuju == NULL) ? $data['tgl_setuju'] : $tgl_setuju; ?>" placeholder="Masukkan tanggal persetujuan"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">FASTEL</label>
										<input class="form-control" type="text" name="fastel" value="<?=($fastel == NULL) ? $data['fastel'] : $fastel; ?>" placeholder="fastel" required />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NAMA PELANGGAN</label>
										<input class="form-control" type="text" name="nama_plg" value="<?=($nama_plg == NULL) ? $data['nama_plg'] : $nama_plg; ?>" placeholder="nama_plg" required />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">TREG</label>
										<input class="form-control" type="text" name="reg" value="<?=($reg == NULL) ? $data['reg'] : $reg; ?>" placeholder="reg" required readonly/>
										<!-- <select id="reg" name="reg" class="form-control" value="<? echo $data['reg'];?>" onChange="document.demoform.submit()" disabled>
											<option value="">PILIH TREG</option>
											<option value="1" <?=($data['reg'] == "1") ? "selected" : "";?>>1</option>
											<option value="2" <?=($data['reg'] == "2") ? "selected" : "";?>>2</option>
											<option value="3" <?=($data['reg'] == "3") ? "selected" : "";?>>3</option>
											<option value="4" <?=($data['reg'] == "4") ? "selected" : "";?>>4</option>
											<option value="5" <?=($data['reg'] == "5") ? "selected" : "";?>>5</option>
											<option value="6" <?=($data['reg'] == "6") ? "selected" : "";?>>6</option>
											<option value="7" <?=($data['reg'] == "7") ? "selected" : "";?>>7</option>
										</select> -->
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">PROVINSI</label>
										<input class="form-control" type="text" name="pilih_provinsi" value="<?=($pilih_provinsi == NULL) ? $data['pilih_provinsi'] : $pilih_provinsi; ?>" placeholder="pilih_provinsi" readonly />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">IBU KOTA</label>
										<input class="form-control" type="text" name="pilih_ibu_kota" value="<?=($pilih_ibu_kota == NULL) ? $data['pilih_ibu_kota'] : $pilih_ibu_kota; ?>" placeholder="pilih_ibu_kota" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">PILIH AREA</label>
										<input class="form-control" type="text" name="pilih_area" value="<?=($pilih_area == NULL) ? $data['pilih_area'] : $pilih_area; ?>" placeholder="pilih_area" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">TEMPAT LAHIR</label>
										<input class="form-control" type="text" name="tempat_lahir" value="<?=($tempat_lahir == NULL) ? $data['tempat_lahir'] : $tempat_lahir; ?>" placeholder="tempat_lahir" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">TANGGAL LAHIR</label>
										<input class="form-control" type="text" name="tgl_lahir" value="<?=($tgl_lahir == NULL) ? $data['tgl_lahir'] : $tgl_lahir; ?>" placeholder="tgl_lahir" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">DURASI</label>
										<input class="form-control" type="number" name="durasi" value="<?=($durasi == NULL) ? $data['durasi'] : $durasi; ?>" placeholder="durasi" required />
									</div>
								</div>
								
								<!-- <div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">PAKET HALO</label>
										<select id="paket_halo" name="paket_halo" class="form-control" value="<? echo $data['paket_halo'];?>">
											<option value="">PILIH PAKET HALO</option>
											<option value="DIAMOND" <?=($data['paket_halo'] == "DIAMOND") ? "selected" : "";?>>DIAMOND</option>
											<option value="PLATINUM" <?=($data['paket_halo'] == "PLATINUM") ? "selected" : "";?>>PLATINUM</option>
											<option value="GOLD" <?=($data['paket_halo'] == "GOLD") ? "selected" : "";?>>GOLD</option>
											<option value="SILVER" <?=($data['paket_halo'] == "SILVER") ? "selected" : "";?>>SILVER</option>
											<option value="REGULER" <?=($data['paket_halo'] == "REGULER") ? "selected" : "";?>>REGULER</option>
										</select>
									</div>
								</div> -->
							</div>
						</div>
						<div>
							
							<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label" style="color:#008B8B">Jenis Call</label>
															<select id="se1" name="jenis_call" class="form-control" value="<? echo $jenis_call;?>" onChange="document.demoform.submit()" readonly>
																<option value="">Pilih Jenis Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE jenis='32' AND `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[1] == $data['jenis']) {
																			$sel = "selected";
																			$id_jenis = $rsk[0];
																		} else {
																			$sel = "";
																		}
																		echo "<option value=\"$rsk[1]\" $sel> $rsk[1]</option>";
																		$k++;
																	}
																?>
															</select>
														</div>
													</div>
													<div class="col-md-4">
													<div class="form-group">
															<label class="control-label" style="color:#008B8B">Status Call</label>
															<select id="se1" name="status_call" class="form-control" value="<? echo $status_call;?>" onChange="document.demoform.submit()" readonly>
																<option value="">Pilih Status Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_status WHERE `jenis`= '$id_jenis'  and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[2] == $data['status']) {
																			$sel = "selected";
																			$id_status = $rsk[1];
																			$nama_status = $rsk[2];
																			$follow = $rsk[6];
																		} else {
																			$sel = "";
																		}
																		echo "<option value=\"$rsk[2]\" $sel> $rsk[2]</option>";
																		$k++;
																	}
																?>
															</select>
														</div>
													</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kategori Call</label>
										<select id="se1" name="kategori" class="form-control" value="<? echo $kategori;?>" onChange="document.demoform.submit()" readonly>
											<option value="">Pilih Kategori Call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_kategori WHERE `jenis`= '$id_jenis' and `status`= '$id_status' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[3] == $data['kategori']) {
													$sel = "selected";
													$id_kategori = $rsk[2];
													$nama_kategori = $rsk[3];
												} else {
													$sel = "";
												}
												echo "<option value=\"$rsk[3]\" $sel> $rsk[3] </option>";
												$k++;
											}
											?>
										</select>
									</div>
								</div>
								
								
												
												
													<?php
													$qsk1 = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");
													$total = mysqli_num_rows($qsk1);
													$k = 1;
													// print_r($id_kategori.' '.$id_sub_kategori);
													// print_r($total);
													if($total > 0) {
													?>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label" style="color:#008B8B">Reason Call</label>
															<select id="se1" name="reason_call" class="form-control" value="<? echo $reason_call;?>" onChange="document.demoform.submit()" readonly>
																<option value="">Pilih Reason Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[4] == $data['reason']) {
																			$sel = "selected";
																			// $follow = $rsk[6];
																		} else {
																			$sel = "";
																		}
																		echo "<option value=\"$rsk[4]\" $sel> $rsk[4]</option>";
																		$k++;
																	}
																?>
															</select>
														</div>
													</div>
													<?php 
													}
													?>
								</div>
								<?php
								if($nama_status == 'Contacted' AND $nama_kategori == "Agree") {
								?>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">MSISDN</label>
											<input class="form-control" type="text" name="msisdn" value="<?=($msisdn == NULL) ? $data['msisdn'] : $msisdn; ?> | <?=($area_tsel == NULL) ? $data['area_tsel'] : $area_tsel; ?>" placeholder="masukkan MSISDN" required readonly/>
											
										</div>
									</div>
									<!-- <div class="col-md-4">
														<div class="form-group">
															<label class="control-label" style="color:#008B8B">MSISDN</label>
															<select id="js-example-basic-multiple" name="msisdn" class="form-control" onChange="document.demoform.submit()" readonly>
																<option value="">PILIH MSISDN</option>
																<?php
																	
																	$qsk = mysqli_query($con, "SELECT * FROM app_no_halo WHERE status_nomer = 1 ORDER BY no_halo ASC");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[3] == $data['msisdn']) {
																			$sel = "selected";
																			$reserve_id = $rsk[4];
																			$area_tsel = $rsk[1];
																			// $id_jenis = $rsk[6];
																		} else {
																			$sel = "";
																		}
																		echo "<option value=\"$rsk[3]\" $sel> $rsk[3] | $rsk[1] </option>";
																		$k++;
																	}
																?>
															</select>
															<!-- <input class="form-control" type="text" name="nama_voucher" value="<?php echo $result['nama_voucher']; ?>" placeholder="Masukkan Nama Voucher" required/> -->
														</div>
													</div> -->
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">RESERVE ID</label>
											<input class="form-control" type="text" name="reserve_id" value="<?=($reserve_id == NULL) ? $data['reserve_id'] : $reserve_id; ?>" placeholder="masukkan reserve id" onKeyPress="return isNumberKey(event)" required readonly />
											<!-- <input class="form-control" type="hidden" name="login" value="<?=($login == NULL) ? $data['login'] : $login; ?>"  required /> -->
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">AREA TSEL</label>
											<input class="form-control" type="text" name="area_tsel" value="<?=($area_tsel == NULL) ? $data['area_tsel'] : $area_tsel; ?>" placeholder="masukkan area tsel" required readonly />
											<!-- <input class="form-control" type="hidden" name="login" value="<?=($login == NULL) ? $data['login'] : $login; ?>"  required /> -->
										</div>
									</div>
								</div>
								<?php
								}
								?>
								<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Keterangan Agent</label>
										<textarea class="form-control" id="keterangan" name="keterangan" rows="5" ><?=($keterangan == NULL) ? $data['keterangan'] : $keterangan; ?></textarea>
									</div>
								</div>
							</div>
							
						</div>
							
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Rekomendasi QCO</label>
					<textarea class="form-control" name="rec_qco"  rows="5" ></textarea>
					</div>
					</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Pilihan Status</label>
										<select id="pilihan_status" name="pilihan_status" class="form-control" onChange="funcPilihStatus()">
											<option value="">--- Pilih Status ---</option>
											<option value="Valid / Not Valid"> Valid / Not Valid </option>
											<option value="Return TL"> Return TL </option>
										</select>
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Pilihan Return TL</label>
                                        <select id="pilihan_return_tl" name="pilihan_return_tl" class="form-control" disabled>
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
									</div>
                                </div>
				</div>
				</div>
				<?php if ($not_handel == 1 OR $login == '')
				{ 
					?><a href="http://localhost/apptam/mod/approve.php">
					   <input type="button" value="Back" />
					  </a><?php
				}
				else if ($not_handel == 0 OR $login <> ''){
				?>
				<input type="submit" id="valid" name="valid" class="btn btn-success" value="valid" disabled>
				<input type="submit" id="tl" name="tl" class="btn btn-danger" value="Return to TL" disabled>
				<input type="hidden" id="novalid" name="novalid" class="btn btn-warning" value="Not Valid" disabled>
				<?php } ?>
                
				</form>
				
				</div>
				</div>	

				</div>
			</div>
		</div>
        <script>
		$(document).ready(function() {
			$('#js-example-basic-multiple').select2();
			$("#js-example-basic-multiple").select2("readonly", true);
		});
		</script>
<?php	require_once("../deft_foo.php"); ?>