<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$area = $_SESSION['area'];
$tgl = date("Y-m-d H:i:s");
$date= date("Y-m-d");

$query="SELECT * FROM app_tam_halo WHERE id='$id'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);

$login_halo=$data['login'];
$upd_qco=$data['upd_qco'];

$query_jumlah_nomer="SELECT jumlah_nomer FROM app_wo_halo WHERE id='$id'";
$hasil_jumlah_nomer = mysqli_query($con,$query_jumlah_nomer);
$data_jumlah_nomer = mysqli_fetch_array($hasil_jumlah_nomer);

$jumlah_nomer=$data_jumlah_nomer['jumlah_nomer'];
$total_nomer = 0;
if($jumlah_nomer == NULL) {
	$total_nomer = 1;
}
else{
	$jumlah_nomer++;
	$total_nomer = $jumlah_nomer;
}

$status_jumlah_nomer = $total_nomer." Nomor Halo";
$status_jumlah_nomer_lebih_satu = "Pelanggan Bersedia Lebih Dari ".$total_nomer." Nomor Halo";
// if($fastel==''){$fastel=$data[4];}
// if($nama_dm==''){$nama_dm=$data[5];}
// if($tlp==''){$tlp=$data[6];}
// if($jenis==''){$jenis=$data[8];}
// if($prof_hp==''){$prof_hp=$data[28];}
// if($prof_email==''){$prof_email=$data[29];}
// if($prof_ttl==''){$prof_ttl=$data[30];}
// if($prof_hoby==''){$prof_hoby=$data[31];}
// if($prof_agama==''){$prof_agama=$data[32];}
// if($prof_facebook==''){$prof_facebook=$data[33];}
// if($add==''){$add=$data[34];}
// if($reg==''){$reg=$data[7];}

// if($add_on_wifi==''){$add_on_wifi=$data[36];}
// if($id_jenis==''){$id_jenis=$data[37];}
$login_qco = NULL;
$query_qco = mysqli_query($con, "SELECT qco FROM cc147_main_users WHERE `username`='$login_user_qco'");
while ($data_qco = mysqli_fetch_row($query_qco)) {
	$login_qco = $data_qco[0];
}


if (isset($_POST['back']) ){
	clearstatcache();
	$location="list_follow_halo.php";
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	}
	
if (isset($_POST['Save']) ){
	if($msisdn != "" && $reserve_id != "") {
		$query_cek_msisdn = mysqli_query($con, "SELECT * FROM app_tam_halo WHERE msisdn = '$msisdn' AND reserve_id = '$reserve_id'");
		$total_msisdn = mysqli_num_rows($query_cek_msisdn);
		if($total_msisdn > 0) {
			while ($result_msisdn = mysqli_fetch_array($query_cek_msisdn)) {
				if($msisdn == $result_msisdn['msisdn']) {
					$msisdn = NULL;
					$reserve_id = NULL;
					
					$cek_msisdn = "double";
				}
			}
		}
	}

	if($cek_msisdn == "double") {
		echo "<div class=\"alert alert-danger\">Mohon pilih kembali MSISDN karena telah di Pick Up !</div>";
		$cek = "kosong";
	}
	else {
	// status call: not connect	
			if ($status_call == "Not Contacted" || $status_call == "Follow Up") {
				if ($no_telp == "" or $jenis_call == "" or $kategori == "" or $status_call == "" ) {
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				} else {
					// print_r($status_call);
					if ($status_call == "Not Contacted") {
						$follow = '1';
					} elseif ($status_call == "Follow Up") {
						$follow = '8';
					}

					$sql = "INSERT INTO app_tam_halo (tgl,login,nama_agent,area,no_telp,no_ktp,tgl_setuju,no_kk,alamat_kirim,paket_halo,email,alamat,kategori,keterangan,follow,jenis,`status`,reason,fastel,nama_plg,input,kota,valid,reg,pilih_area,pilih_ibu_kota,pilih_provinsi) 
							VALUES 
							('$tgl','$login_agent','$nama_agent','$area_agent','$no_telp','$no_ktp','$tgl_setuju','$no_kk','$alamat_kirim','$paket_halo','$email','$alamat','$kategori','$keterangan','$follow',
							'$jenis_call','$status_call','$reason_call','$fastel','$nama_plg','Follow UP','$kota','Not Valid','$reg','$pilih_area','$pilih_ibu_kota','$pilih_provinsi')";

					$query = mysqli_query($con, $sql);
					$cek='sukses';

					$cek = 'sukses';
					if ($status_call == "Not Contacted") {
						$sql_update_status_halo = "UPDATE app_wo_halo SET status='0', lup='$tgl' WHERE no_telp='$no_telp'";
						mysqli_query($con, $sql_update_status_halo);
					} elseif ($status_call == "Follow Up") {
						$sql_update_status_halo = "UPDATE app_wo_halo SET status='1', lup='$tgl' WHERE no_telp='$no_telp'";
						mysqli_query($con, $sql_update_status_halo);
					}
					$sql_update_follow = "UPDATE app_tam_halo SET follow='1' WHERE id='$id'";
					mysqli_query($con, $sql_update_follow);

					clearstatcache();
					$location = "list_wo_halo.php";
					echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
				}
			}
			// status call: connect
			else if ($status_call == "Contacted") {
				if ($no_telp == "" or $jenis_call == "" or  $reason_call == "" or $kategori == "" or $status_call == "" ) {
					// print_r($nama_plg);
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				} else {
					if($kategori == "Agree"){
						if ($no_telp == "" or $msisdn == "" or $jenis_call == "" or $kategori == "" or $status_call == "" or $no_ktp == "" or $no_kk == "" or $alamat == "" or $alamat_kirim == "" or $email == "" 
							or $tgl_setuju == "" or $no_ktp == "" or $fastel == "" or $nama_plg== ""  or $keterangan == "" or $kota == "") {
							// print_r($nama_plg);
							echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
							$cek = "kosong";
						}
						else {
							$sql = "INSERT INTO app_tam_halo (tgl,login,nama_agent,area,no_telp,no_ktp,msisdn,reserve_id,area_tsel,tgl_setuju,no_kk,alamat_kirim,paket_halo,email,alamat,kategori,keterangan,follow,jenis,`status`,reason,fastel,nama_plg,input,kota,upd_qco,valid,reg,pilih_area,pilih_ibu_kota,pilih_provinsi,tempat_lahir,tgl_lahir, jumlah_pelanggan) 
							VALUES 
							('$tgl','$login_agent','$nama_agent','$area_agent','$no_telp','$no_ktp','$msisdn','$reserve_id','$area_tsel','$tgl_setuju','$no_kk','$alamat_kirim','$paket_halo','$email','$alamat','$kategori','$keterangan','2',
							'$jenis_call','$status_call','$reason_call','$fastel','$nama_plg','New','$kota','$login_qco','Not Valid','$reg','$pilih_area','$pilih_ibu_kota','$pilih_provinsi','$tempat_lahir','$tgl_lahir','$jumlah_pelanggan')";
							// print_r($sql);
								$query = mysqli_query($con, $sql);
								$cek = 'sukses';

								if($jumlah_pelanggan == $status_jumlah_nomer){
									$sql_update_status_halo = "UPDATE app_wo_halo SET status='1', lup='$tgl', jumlah_nomer = '$total_nomer' WHERE no_telp='$no_telp'";
									mysqli_query($con, $sql_update_status_halo);
								}
								elseif($jumlah_pelanggan == $status_jumlah_nomer_lebih_satu) {
									$sql_update_status_halo = "UPDATE app_wo_halo SET status='0', lup='$tgl', jumlah_nomer = '$total_nomer' WHERE no_telp='$no_telp'";
									mysqli_query($con, $sql_update_status_halo);
								}

								$sql_update_no_halo = "UPDATE app_no_halo SET status_nomer = '1', tgl_pickup='$date', pilih_login = '$login_agent' WHERE no_halo='$msisdn'";
								mysqli_query($con, $sql_update_no_halo);

								$sql_update_follow = "UPDATE app_tam_halo SET follow='1' WHERE id='$id'";
								mysqli_query($con, $sql_update_follow);
						}
						

					}
					else if($kategori == "Follow UP"){
						$sql = "INSERT INTO app_tam_halo (tgl,login,nama_agent,area,no_telp,no_ktp,tgl_setuju,no_kk,alamat_kirim,paket_halo,email,alamat,kategori,keterangan,follow,jenis,`status`,reason,fastel,nama_plg,input,kota,valid,reg,pilih_area,pilih_ibu_kota,pilih_provinsi,tempat_lahir,tgl_lahir) 
						VALUES 
						('$tgl','$login_agent','$nama_agent','$area_agent','$no_telp','$no_ktp','$tgl_setuju','$no_kk','$alamat_kirim','$paket_halo','$email','$alamat','$kategori','$keterangan','8',
						'$jenis_call','$status_call','$reason_call','$fastel','$nama_plg','Follow UP','$kota','Not Valid','$reg','$pilih_area','$pilih_ibu_kota','$pilih_provinsi','$tempat_lahir','$tgl_lahir')";

						$query = mysqli_query($con, $sql);
						$cek = 'sukses';
	
						$sql_update_status_halo = "UPDATE app_wo_halo SET status='1', lup='$tgl' WHERE no_telp='$no_telp'";
						mysqli_query($con, $sql_update_status_halo);

						$sql_update_no_halo = "UPDATE app_no_halo SET status_nomer = '1', tgl_pickup='$date', pilih_login = '$login_agent' WHERE no_halo='$msisdn'";
						mysqli_query($con, $sql_update_no_halo);

						$sql_update_follow = "UPDATE app_tam_halo SET follow='1' WHERE id='$id'";
						mysqli_query($con, $sql_update_follow);
					}
					else {
						$sql = "INSERT INTO app_tam_halo (tgl,login,nama_agent,area,no_telp,no_ktp,tgl_setuju,no_kk,alamat_kirim,paket_halo,email,alamat,kategori,keterangan,follow,jenis,`status`,reason,fastel,nama_plg,input,kota,valid,reg,pilih_area,pilih_ibu_kota,pilih_provinsi) 
						VALUES 
						('$tgl','$login_agent','$nama_agent','$area_agent','$no_telp','$no_ktp','$tgl_setuju','$no_kk','$alamat_kirim','$paket_halo','$email','$alamat','$kategori','$keterangan','1',
						'$jenis_call','$status_call','$reason_call','$fastel','$nama_plg','Follow UP','$kota','Not Valid','$reg','$pilih_area','$pilih_ibu_kota','$pilih_provinsi')";

						$query = mysqli_query($con, $sql);
						$cek = 'sukses';
	
						$sql_update_status_halo = "UPDATE app_wo_halo SET status='1', lup='$tgl' WHERE no_telp='$no_telp'";
						mysqli_query($con, $sql_update_status_halo);

						$sql_update_no_halo = "UPDATE app_no_halo SET status_nomer = '1', tgl_pickup='$date', pilih_login = '$login_agent' WHERE no_halo='$msisdn'";
						mysqli_query($con, $sql_update_no_halo);

						$sql_update_follow = "UPDATE app_tam_halo SET follow='1' WHERE id='$id'";
						mysqli_query($con, $sql_update_follow);
					// echo $sql;
					}
					
					
					clearstatcache();
					$location = "list_wo_halo.php";
					echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
				}
			}
		}
	
}
				
?>
<script>
function Reload() {
    location.reload();
}
</script>
<SCRIPT language=Javascript>
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</SCRIPT>
<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
					<div class="card card-plain">
						<div class="header">
							<h4 class="title">CWC TAM NAS<small>   Form Input Follow UP HALO &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $nama; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='form_follow_halo_new.php?id=<?php echo "$id";?>' method='post' accept-charset='UTF-8'>
				<input type="hidden" name="login_user_qco" value="<?=$login?>">
				<input type="hidden" name="login_agent" value="<?=$login?>">
				<input type="hidden" name="area_agent" value="<?=$area?>">
				<input type="hidden" name="nama_agent" value="<?=$nama?>">
					<div>
						<!-- <input class="form-control" type="hidden" name="login" value="<?php echo $data['login']; ?>" readonly required/> -->
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
										<input class="form-control" type="text" name="no_ktp" value="<?=$data['no_ktp']?>" placeholder="masukkan nomor ktp" onKeyPress="return isNumberKey(event)" />
										<input class="form-control" type="hidden" name="login" value="<?=($login == NULL) ? $data['login'] : $login; ?>"  required />
										<input class="form-control" type="hidden" name="nama" value="<?=($nama == NULL) ? $data['nama'] : $nama; ?>"  required />
										<input class="form-control" type="hidden" name="area" value="<?=($area == NULL) ? $data['area'] : $area; ?>"  required />
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
										<select id="pilih_provinsi" name="pilih_provinsi" class="form-control" value="<? echo $data['pilih_provinsi'];?>" onChange="document.demoform.submit()">
											<option value="">PILIH PROVINSI</option>

											<?php
												$qsk = mysqli_query($con, "SELECT * FROM app_tam_provinsi");

												$k = 1;
												while ($rsk = mysqli_fetch_row($qsk)) {
													if ($rsk[1] == $pilih_provinsi) {
														$sel = "selected";
														$pilih_ibu_kota = $rsk[2];
														$pilih_area = $rsk[3];
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
										<input class="form-control" type="text" name="tempat_lahir" value="<?=($tempat_lahir == NULL) ? $data['tempat_lahir'] : $tempat_lahir; ?>" placeholder="tempat_lahir"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">TANGGAL LAHIR</label>
										<input class="form-control" type="text" id="datepicker" name="tgl_lahir" value="<?=($tgl_lahir == NULL) ? $data['tgl_lahir'] : $tgl_lahir; ?>" placeholder="tgl_lahir"/>
									</div>
								</div>
							</div>
						</div>
						<div>
							
							<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label" style="color:#008B8B">Jenis Call</label>
															<select id="se1" name="jenis_call" class="form-control" value="<? echo $jenis_call;?>" onChange="document.demoform.submit()">
																<option value="">Pilih Jenis Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE jenis='32' AND `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[1] == $jenis_call) {
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
															<select id="se1" name="status_call" class="form-control" value="<? echo $status_call;?>" onChange="document.demoform.submit()">
																<option value="">Pilih Status Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_status WHERE `jenis`= '$id_jenis'  and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[2] == $status_call) {
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
										<select id="se1" name="kategori" class="form-control" value="<? echo $kategori;?>" onChange="document.demoform.submit()">
											<option value="">Pilih Kategori Call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_kategori WHERE `jenis`= '$id_jenis' and `status`= '$id_status' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[3] == $kategori) {
													$sel = "selected";
													$id_kategori = $rsk[2];
													$nama_kategori = $rsk[3];
												} else {
													$sel = "";
												}
												if($rsk[3] != 'Follow UP') {
													echo "<option value=\"$rsk[3]\" $sel> $rsk[3] </option>";
												}
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
															<select id="se1" name="reason_call" class="form-control" value="<? echo $reason_call;?>" onChange="document.demoform.submit()">
																<option value="">Pilih Reason Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[4] == $reason_call) {
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
								<h4 class="title" style="padding: 10px 10px">INFORMASI : </h4>
													<div style="background-color: #FFFFFF; padding: 10px 10px;border: 2px solid">
													<h5 class="title">Area 1 Tsel (Sumatra) <small> <b style="color:red">>>>  = TREG 1 TELKOM</b></small></h5>
													<h5 class="title">Area 2 Tsel (Jabotabek Jabar) <small><b style="color:red"> >>>  = TREG 2 dan TREG 3 TELKOM</b></small></h5>
													<h5 class="title">Area 3 Tsel (Jateng, Jatim, Bali Nusra) <small> <b style="color:red">>>>  = TREG 4 dan TREG 5 TELKOM</b></small></h5>
													<h5 class="title">Area 4 Tsel (Papua, Maluku, Sulawesi dan Kalimantan) <small> <b style="color:red">>>> = TREG 6 dan TREG 7 TELKOM</b></small></h5>
													</div>
								<div class="row">
									<!-- <div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">MSISDN</label>
											<input class="form-control" type="text" name="msisdn" value="<?=($msisdn == NULL) ? $data['msisdn'] : $msisdn; ?>" placeholder="masukkan MSISDN" onKeyPress="return isNumberKey(event)" required />
											
										</div>
									</div> -->
									<div class="col-md-4">
														<div class="form-group">
															<label class="control-label" style="color:#008B8B">MSISDN</label>
															<select id="js-example-basic-multiple" name="msisdn" class="form-control" onChange="document.demoform.submit()">
																<option value="">PILIH MSISDN</option>
																<?php
																	$whr_area = '';
																	if(isset($pilih_area)) {
																		$whr_area = " AND area_tsel = '$pilih_area' ";
																	}

																	$qsk = mysqli_query($con, "SELECT * FROM app_no_halo WHERE status_nomer = 0 $whr_area ORDER BY no_halo ASC");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[3] == $msisdn) {
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
													</div>
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
									<div class="row">
											<div class="form-group">
												<label class="control-label" style="color:#008B8B">Status Jumlah Pelanggan </label><br>
												<input type="radio" id="satu_nomor_halo" name="jumlah_pelanggan" value="<?=$status_jumlah_nomer?>" checked>
												<label for="satu_nomor_halo" style="color:#008B8B"> <?=$status_jumlah_nomer?></label><br>
												<input type="radio" id="lebih_dari_satu_nomor_halo" name="jumlah_pelanggan" value="<?=$status_jumlah_nomer_lebih_satu?>">
												<label for="lebih_dari_satu_nomor_halo" style="color:#008B8B"> <?=$status_jumlah_nomer_lebih_satu?></label><br>
											</div>
										</div>
								</div>
								<?php
								}
								?>
								<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Keterangan </label>
										<textarea class="form-control" id="keterangan" name="keterangan" rows="5" oninput="validateInput(this)"><?=($keterangan == NULL) ? $data['keterangan'] : $keterangan; ?></textarea>
									</div>
								</div>
							</div>
							
						<input class="form-control" type="hidden" name="follow" value="<?php echo $follow; ?>" readonly required />
						</div>
				</div>
				<input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value="Reset">
		<input type="submit" name="Save" class="btn btn-danger" value="Save">
		<input name="back" type="submit"class="btn btn-danger" Value="Back" value="back">

                
				</form>
				<? php 
				if (isset($_POST['Save']) ){echo "test"; }
				
				
				?>
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

		var rupiah = document.getElementById('rupiah');
	if(rupiah){
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
	}
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
		</script>
<?php	require_once("../deft_foo.php"); ?>