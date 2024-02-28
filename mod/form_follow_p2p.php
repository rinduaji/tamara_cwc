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

$query="SELECT * FROM app_tam_p2p WHERE id='$id'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);

$login_p2p=$data['login'];
$upd_qco=$data['upd_qco'];
$type_p2p=$data['type_p2p'];

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

$query_perner = mysqli_query($con, "SELECT a.perner, a.username, b.user2, b.user5 FROM cc147_main_users as a INNER JOIN cc147_main_users_extended as b ON a.username = b.user1 WHERE `username`='$username'");
while ($data_perner = mysqli_fetch_row($query_perner)) {
	$perner = $data_perner[0];
	$username = $data_perner[1];
	$nama_agent = $data_perner[2];
	$area_agent = $data_perner[3];
}

if (isset($_POST['back']) ){
	clearstatcache();
	$location="list_follow_p2p.php";
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	}
	
if (isset($_POST['Save']) ){
	
	
	
	
	// status call: not connect	
			if ($status == "Not Contacted" || $status == "NOT CONTACTEBLE") {
				if ($init_offer == ""  or $label == "" or $msisdn == "" or $perner == "" or $keterangan == "" ) {
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				} else {
					// print_r($status);
					// if ($status == "Not Contacted") {
						$follow = '1';
					// } elseif ($status == "Follow Up") {
					// 	$follow = '8';
					// }

					$sql = "INSERT INTO app_tam_p2p (tgl,login,perner,nama_agent,area,init_offer,label,msisdn,jenis,status,kategori,reason,keterangan,follow,input,valid,upd_qco,type_p2p) 
					VALUES ('$tgl','$username','$perner','$nama_agent','$area_agent','$init_offer','$label','$msisdn','$jenis','$status','$kategori','$reason','$keterangan',
					'$follow','Follow UP','Not Valid','$login_qco','$type_p2p')";

					$query = mysqli_query($con, $sql);
					$cek='sukses';

					$cek = 'sukses';
					// if ($status == "Not Contacted") {
						// $sql_update_status_halo = "UPDATE app_wo_halo SET status='0', lup='$tgl' WHERE no_telp='$no_telp'";
						// mysqli_query($con, $sql_update_status_halo);
					// } 
                    // elseif ($status == "Follow Up") {
					// 	$sql_update_status_halo = "UPDATE app_wo_halo SET status='1', lup='$tgl' WHERE no_telp='$no_telp'";
					// 	mysqli_query($con, $sql_update_status_halo);
					// }
					$sql_update_status_p2p = "UPDATE app_wo_p2p SET status='0', lup='$tgl', pilih_login = '$username' WHERE msisdn='$msisdn'";
			        mysqli_query($con, $sql_update_status_p2p);
                    $sql_update_follow = "UPDATE app_tam_p2p SET follow='1' WHERE id='$id'";
					mysqli_query($con, $sql_update_follow);

					clearstatcache();
					if($type_p2p == "REGULER") {
						$location = "list_follow_p2p_reguler.php";
					}
					elseif($type_p2p == "CROSS") {
						$location = "list_follow_p2p.php";
					}
					echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
				}
			}
			// status call: connect
			else if ($status == "Contacted") {
				// print_r('test');
				if ($init_offer == ""  or $label == "" or $msisdn == "" or $perner == "" or $keterangan == "" ) {
					// print_r($nama_plg);
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				} else {
					if($kategori == "Agree"){
						if ($init_offer == "" AND $label == "" AND $msisdn == "" AND $nama_plg == "" AND $ktp == "" AND $kk == "" AND $no_hp_lain == "" AND $tgl_lahir == "" AND 
                            $tempat_lahir == "" AND $email_plg == "" AND $alamat_ktp_plg == "" AND $alamat_domisili == "" AND $kode_pos == "" AND $no_cp_ref == "" AND 
                            $nama_cp_ref == "" AND $tgl_setuju == "" AND $jenis == "" AND $status == "" AND $kategori == "" AND $reason == "" AND $keterangan == "" AND $cls == "") {
                            echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
                            $cek = "kosong";
                        }
                        else {
							$sql = "INSERT INTO app_tam_p2p 
                                    (tgl,login,perner,nama_agent,area,init_offer,label,msisdn,nama_plg,ktp,kk,no_hp_lain,tgl_lahir,tempat_lahir,email_plg,
                                    alamat_ktp_plg,alamat_domisili,kode_pos,no_cp_ref,nama_cp_ref,tgl_setuju,jenis,status,kategori,reason,keterangan,
                                    follow,input,valid,revenue,upd_qco,type_p2p,cls) 
                                    VALUES 
                                    ('$tgl','$username','$perner','$nama_agent','$area_agent','$init_offer','$label','$msisdn','$nama_plg','$ktp','$kk','$no_hp_lain','$tgl_lahir','$tempat_lahir','$email_plg',
                                    '$alamat_ktp_plg','$alamat_domisili','$kode_pos','$no_cp_ref','$nama_cp_ref','$tgl_setuju','$jenis','$status','$kategori','$reason','$keterangan',
                                    '$follow','New','Not Valid','$revenue','$login_qco','$type_p2p','$cls')";
	
								$query = mysqli_query($con, $sql);
								$cek = 'sukses';
	
								$sql_update_status_p2p = "UPDATE app_wo_p2p SET status='1', lup='$tgl', pilih_login = '$username' WHERE msisdn='$msisdn'";
								mysqli_query($con, $sql_update_status_p2p);

								$sql_update_follow = "UPDATE app_tam_p2p SET follow='1' WHERE id='$id'";
								mysqli_query($con, $sql_update_follow);
						}
						

					}
					else if($kategori == "Follow Up"){
						$sql = "INSERT INTO app_tam_p2p (tgl,login,perner,nama_agent,area,init_offer,label,msisdn,jenis,status,kategori,reason,keterangan,follow,input,valid,upd_qco,type_p2p) 
						VALUES ('$tgl','$username','$perner','$nama_agent','$area_agent','$init_offer','$label','$msisdn','$jenis','$status','$kategori','$reason','$keterangan',
						'$follow','Follow UP','Not Valid','$login_qco','$type_p2p')";

						$query = mysqli_query($con, $sql);
						$cek = 'sukses';
	
						$sql_update_status_p2p = "UPDATE app_wo_p2p SET status='1', lup='$tgl', pilih_login = '$username' WHERE msisdn='$msisdn'";
						mysqli_query($con, $sql_update_status_p2p);

						$sql_update_follow = "UPDATE app_tam_p2p SET follow='1' WHERE id='$id'";
						mysqli_query($con, $sql_update_follow);
					}
					else {
						$sql = "INSERT INTO app_tam_p2p (tgl,login,perner,nama_agent,area,init_offer,label,msisdn,jenis,status,kategori,reason,keterangan,follow,input,valid,upd_qco,type_p2p) 
						VALUES ('$tgl','$username','$perner','$nama_agent','$area_agent','$init_offer','$label','$msisdn','$jenis','$status','$kategori','$reason','$keterangan',
						'$follow','Follow UP','Not Valid','$login_qco','$type_p2p')";

						$query = mysqli_query($con, $sql);
						$cek = 'sukses';
	
						$sql_update_status_p2p = "UPDATE app_wo_p2p SET status='1', lup='$tgl', pilih_login = '$username' WHERE msisdn='$msisdn'";
						mysqli_query($con, $sql_update_status_p2p);

						$sql_update_follow = "UPDATE app_tam_p2p SET follow='1' WHERE id='$id'";
						mysqli_query($con, $sql_update_follow);
					// echo $sql;
					}
					
					
					clearstatcache();
					if($type_p2p == "REGULER") {
						$location = "list_follow_p2p_reguler.php";
					}
					elseif($type_p2p == "CROSS") {
						$location = "list_follow_p2p.php";
					}
					echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
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
							<h4 class="title">CWC TAM NAS<small>   Form Input Follow UP P2P &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $nama; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='form_follow_p2p.php?id=<?php echo "$id";?>' method='post' accept-charset='UTF-8'>
				<input type="hidden" name="login_user_qco" value="<?=$login?>">
					<div>
						<!-- <input class="form-control" type="hidden" name="login" value="<?php echo $data['login']; ?>" readonly required/> -->
						<input type="hidden" id="submit_form" name="submit_form" value="">
						
                        <input type="hidden" name="nama_agent" value="<?=$nama?>">
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" name="perner" value="<?=$perner?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Init Offer</label>
										<input class="form-control" type="text" name="init_offer" value="<?=($init_offer == NULL)?$data['init_offer']:$init_offer; ?>" placeholder="masukkan Init Offer" required readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Label</label>
										<input class="form-control" type="text" name="label" value="<?=($label == NULL)?$data['label']:$label; ?>" placeholder="masukkan label" required  readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">MSISDN</label>
										<input class="form-control" type="text" name="msisdn" id="msisdn" value="<?=($msisdn == NULL)?$data['msisdn']:$msisdn; ?>" placeholder="masukkan MSISDN" required  readonly/>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Campaign/Rule</label>
										<select name="jenis" class="form-control" onChange="document.demoform.submit()" readonly>
											<option value=" ">Pilih Campaign</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE `aktif`='1'");
											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[1] == "P2P") {
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
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Status Call</label>
										<select name="status" class="form-control" onChange="document.demoform.submit()">
											<option value=" ">Pilih Status call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_status WHERE `jenis`= '$id_jenis' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[2] == $status) {
													$sel = "selected";
													$id_status = $rsk[1];
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
										<label class="control-label" style="color:#008B8B">Kategori</label>
										<select name="kategori" class="form-control" onChange="document.demoform.submit()">
											<option value=" ">Pilih Kategori call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_kategori WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[3] == $kategori) {
													$sel = "selected";
													$id_kategori = $rsk[2];
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
							</div>
							<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Reason Call</label>
											<select name="reason" class="form-control" onChange="document.demoform.submit()">
												<option value=" ">Pilih Reason Call</option>
												<?php
												$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");

												$k = 1;
												while ($rsk = mysqli_fetch_row($qsk)) {
													if ($rsk[4] == $reason) {
														$sel = "selected";
														$follow = $rsk[6];
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
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Type</label>
											<input class="form-control" type="text" name="type_p2p" id="type_p2p" value="<?=($type_p2p == NULL)?$data['type_p2p']:$type_p2p ?>" placeholder="masukkan type p2p" required  readonly/>
										</div>
									</div>
							</div>
							<?php
							if($status == "Contacted" AND $kategori == "Agree") {
							?>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama Pelanggan</label>
										<input class="form-control" type="text" name="nama_plg" value="<?=($nama_plg == NULL)?$data['nama_plg']:$nama_plg; ?>" placeholder="masukkan Nama Pelanggan" required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO KTP</label>
										<input class="form-control" type="text" name="ktp" value="<?=($ktp == NULL)?$data['ktp']:$ktp; ?>" placeholder="masukkan NO KTP" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO KK</label>
										<input class="form-control" type="text" name="kk" id="kk" value="<?=($kk == NULL)?$data['kk']:$kk; ?>" placeholder="masukkan No KK" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO HP Lain</label>
										<input class="form-control" type="text" name="no_hp_lain" value="<?=($no_hp_lain == NULL)?$data['no_hp_lain']:$no_hp_lain; ?>" placeholder="masukkan no hp lain" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tanggal Lahir</label>
										<input class="form-control" type="date" name="tgl_lahir" value="<?=($tgl_lahir == NULL)?$data['tgl_lahir']:$tgl_lahir; ?>" placeholder="masukkan tanggal Lahir" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tempat Lahir</label>
										<input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?=($tempat_lahir == NULL)?$data['tempat_lahir']:$tempat_lahir; ?>" placeholder="masukkan Tempat Lahir" required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Email Pelanggan</label>
										<input class="form-control" type="email" name="email_plg" value="<?=($email_plg == NULL)?$data['email_plg']:$email_plg; ?>" placeholder="masukkan email pelanggan"  required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat KTP Pelanggan</label>
										<textarea class="form-control" name="alamat_ktp_plg" placeholder="masukkan alamat ktp pelanggan"><?=($alamat_ktp_plg == NULL)?$data['alamat_ktp_plg']:$alamat_ktp_plg; ?></textarea>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat Domisili</label>
										<textarea class="form-control" name="alamat_domisili" placeholder="masukkan alamat Domisili"><?=($alamat_domisili == NULL)?$data['alamat_domisili']:$alamat_domisili; ?></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kode Pos</label>
										<input class="form-control" type="text" name="kode_pos" value="<?=($kode_pos == NULL)?$data['kode_pos']:$kode_pos; ?>" placeholder="masukkan kode pos" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO CP Reference</label>
										<input class="form-control" type="text" name="no_cp_ref" value="<?=($no_cp_ref == NULL)?$data['no_cp_ref']:$no_cp_ref; ?>" placeholder="masukkan no cp reference" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama CP Reference</label>
										<input class="form-control" type="text" name="nama_cp_ref" value="<?=($nama_cp_ref == NULL)?$data['nama_cp_ref']:$nama_cp_ref; ?>" placeholder="masukkan nama cp reference" required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tanggal Setuju</label>
										<input class="form-control" type="date" name="tgl_setuju" value="<?=($tgl_setuju == NULL)?$data['tgl_setuju']:$tgl_setuju; ?>" placeholder="masukkan tanggal setuju" required/>
									</div>
								</div>

								<?php
									if($reason != NULL){
										$harga = substr($reason,0,strpos($reason,'|'));
									}
									else {
										$harga = '';
									}
								?>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Revenue</label>
										<input class="form-control" type="text" name="revenue" value="<?=$harga?>" placeholder="masukkan revenue" required readonly/>
										<!-- <select class="form-control" name="revenue" required disabled>
											<option value="">-- PILIH REVENUE --</option>
											<option value="100000" <?=($harga=="100000")?'selected':'';?>>Rp. 100.000</option>
											<option value="120000" <?=($harga=="120000")?'selected':'';?>>Rp. 120.000</option>
											<option value="140000" <?=($harga=="140000")?'selected':'';?>>Rp. 140.000</option>
											<option value="150000" <?=($harga=="150000")?'selected':'';?>>Rp. 150.000</option>
											<option value="160000" <?=($harga=="160000")?'selected':'';?>>Rp. 160.000</option>
											<option value="180000" <?=($harga=="180000")?'selected':'';?>>Rp. 180.000</option>
											<option value="200000" <?=($harga=="200000")?'selected':'';?>>Rp. 200.000</option>
											<option value="250000" <?=($harga=="250000")?'selected':'';?>>Rp. 250.000</option>
											<option value="300000" <?=($harga=="300000")?'selected':'';?>>Rp. 300.000</option>
											<option value="550000" <?=($harga=="550000")?'selected':'';?>>Rp. 550.000</option>
										</select> -->
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">CLS</label>
										<select class="form-control" name="cls" required>
											<option value="">-- PILIH CLS --</option>
												<?php
												$qsk = mysqli_query($con, "SELECT  * FROM app_tam_halo_cls WHERE penawaran='$harga'");

												$k = 1;
												while ($rsk = mysqli_fetch_array($qsk)) {
													if ($rsk['penawaran'] == $harga) {
														if($cls==$rsk['pilihan1']){
															$sel = "selected";
															$pilihan = 'pilihan1';
														}
														else if($cls==$rsk['pilihan2']){
															$sel = "selected";
															$pilihan = 'pilihan2';
														}
														else if($cls==$rsk['pilihan3']){
															$sel = "selected";
															$pilihan = 'pilihan3';
														}

													} else {
														$sel = "";
													}
													
													echo "<option value=\"".$rsk['pilihan1']."\" ".(($pilihan == 'pilihan1')?$sel:'').">".$rsk['pilihan1']."</option>";
													echo "<option value=\"".$rsk['pilihan2']."\" ".(($pilihan == 'pilihan2')?$sel:'').">".$rsk['pilihan2']."</option>";
													if($rsk['pilihan3'] != NULL OR $rsk['pilihan3'] != ''){
														echo "<option value=\"".$rsk['pilihan3']."\" ".(($pilihan == 'pilihan3')?$sel:'').">".$rsk['pilihan3']."</option>";
													}
													$k++;
												}
												?>
										</select>
									</div>
								</div>
							</div>

							<?php
							}
							?>

							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" style="color:#008B8B">Keterangan </label>
									<textarea class="form-control" id="keterangan" name="keterangan" rows="5" oninput="validateInput(this)"><?=($keterangan == NULL)?$data['keterangan']:$keterangan; ?></textarea>
								</div>
							</div>
                        
						<input class="form-control" type="hidden" name="follow" value="<?=($follow == NULL)?$data['follow']:$follow; ?>" readonly required />
						</div>
				</div>
				<input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value="Reset">
		<input type="submit" name="Save" class="btn btn-danger" value="Save">
		<input name="back" type="submit"class="btn btn-danger" Value="Back" value="back">

                
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