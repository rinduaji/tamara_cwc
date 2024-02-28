<?php
require_once("../deft_nav.php");
include("./assets/conn.php");
if ($_GET) {
	extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
	extract($_POST, EXTR_OVERWRITE);
}
$login = $_SESSION['username'];
$area = $_SESSION['area'];
$nama = $_SESSION['name'];
$upd_qco = $_SESSION['upd_qco'];
$tgl = date("Y-m-d H:i:s");

// $login_qco = NULL;
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

$query_wo_p2p = mysqli_query($con, "SELECT * FROM app_wo_p2p WHERE `login`='$username' AND `id`='$id'");
while ($data_wo = mysqli_fetch_array($query_wo_p2p)) {
	$init_offer = $data_wo['init_offer'];
	$label = $data_wo['label'];
	$msisdn = $data_wo['msisdn'];
	$type_p2p = $data_wo['type_p2p'];
}

if($_POST['submit_form'] == "ok"){
if (isset($_POST['Save'])) {

	// status call: not connect	
	if ($status == "Not Contacted" || $status == "NOT CONTACTEBLE") {
		if ($init_offer == ""  or $label == "" or $msisdn == "" or $perner == "" or $keterangan == "" ) {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			$cek = "kosong";
		} else {

			$follow = '1';

			//$telp="SELECT count(*) as jml FROM app_tam_p2p WHERE tlp = '$tlp'";
			//$tlep=mysqli_query($con,$telp);
			

			$sql = "INSERT INTO app_tam_p2p (tgl,login,perner,nama_agent,area,init_offer,label,msisdn,jenis,status,kategori,reason,keterangan,follow,input,valid,upd_qco,type_p2p) 
					VALUES ('$tgl','$username','$perner','$nama_agent','$area_agent','$init_offer','$label','$msisdn','$jenis','$status','$kategori','$reason','$keterangan',
					'$follow','New','Not Valid','$login_qco','$type_p2p')";
			//echo $sql;
			$query = mysqli_query($con, $sql);

			$sql_update_status_p2p = "UPDATE app_wo_p2p SET status='0', lup='$tgl', pilih_login = '$username' WHERE id='$id'";
			mysqli_query($con, $sql_update_status_p2p);
			
			clearstatcache();
			if($type_p2p == "REGULER") {
				$location = "form_wo_p2p_reguler.php";
			}
			elseif($type_p2p == "CROSS") {
				$location = "form_wo_p2p.php";
			}
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
		}
	}
	// status call: connect
	// print_r($kategori);
	else if ($status == "Contacted") {
		if ($init_offer == ""  or $label == "" or $msisdn == "" or $perner == "" or $keterangan == "" ) {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			$cek = "kosong";
		} else {
			if($kategori == "Agree"){
				if ($init_offer == "" AND $label == "" AND $msisdn == "" AND $nama_plg == "" AND $ktp == "" AND $kk == "" AND $no_hp_lain == "" AND $tgl_lahir == "" AND 
					$tempat_lahir == "" AND $email_plg == "" AND $alamat_ktp_plg == "" AND $alamat_domisili == "" AND $kode_pos == "" AND $no_cp_ref == "" AND 
					$nama_cp_ref == "" AND $tgl_setuju == "" AND $jenis == "" AND $status == "" AND $kategori == "" AND $reason == "" AND $keterangan == "" AND $cls == "" AND $type_p2p == "") {
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				}
				else {
					$sql = "INSERT INTO app_tam_p2p 
					(tgl,login,perner,nama_agent,area,init_offer,label,msisdn,nama_plg,ktp,kk,no_hp_lain,tgl_lahir,tempat_lahir,email_plg,
					alamat_ktp_plg,alamat_domisili,kode_pos,no_cp_ref,nama_cp_ref,tgl_setuju,jenis,status,kategori,reason,keterangan,
					follow,input,valid,revenue,upd_qco,cls,type_p2p) 
					VALUES 
					('$tgl','$username','$perner','$nama_agent','$area_agent','$init_offer','$label','$msisdn','$nama_plg','$ktp','$kk','$no_hp_lain','$tgl_lahir','$tempat_lahir','$email_plg',
					'$alamat_ktp_plg','$alamat_domisili','$kode_pos','$no_cp_ref','$nama_cp_ref','$tgl_setuju','$jenis','$status','$kategori','$reason','$keterangan',
					'$follow','New','Not Valid','$revenue','$login_qco','$cls','$type_p2p')";
					$query = mysqli_query($con, $sql);
					// print_r($sql);
					// die();
					$cek = 'sukses';
				}
			}
			else if($kategori == "Follow Up"){
				$sql = "INSERT INTO app_tam_p2p (tgl,login,perner,nama_agent,area,init_offer,label,msisdn,jenis,status,kategori,reason,keterangan,follow,input,valid,upd_qco,type_p2p) 
						VALUES ('$tgl','$username','$perner','$nama_agent','$area_agent','$init_offer','$label','$msisdn','$jenis','$status','$kategori','$reason','$keterangan',
						'$follow','New','Not Valid','$login_qco','$type_p2p')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';
			}
			else {
				$sql = "INSERT INTO app_tam_p2p (tgl,login,perner,nama_agent,area,init_offer,label,msisdn,jenis,status,kategori,reason,keterangan,follow,input,valid,upd_qco,type_p2p) 
						VALUES ('$tgl','$username','$perner','$nama_agent','$area_agent','$init_offer','$label','$msisdn','$jenis','$status','$kategori','$reason','$keterangan',
						'$follow','New','Not Valid','$login_qco','$type_p2p')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';
			//echo $sql;
			}
			// print_r($reason);
			if($kategori == "Not Agree") {
				$sql_update_status_p2p = "UPDATE app_wo_p2p SET status='1', lup='$tgl', pilih_login = '$username' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_p2p);
			}
			else if($kategori == "Follow Up") {
				$sql_update_status_p2p = "UPDATE app_wo_p2p SET status='1', lup='$tgl', pilih_login = '$username' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_p2p);
			}
			else {
				$sql_update_status_p2p = "UPDATE app_wo_p2p SET status='1', lup='$tgl', pilih_login = '$username' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_p2p);
			}
			
			clearstatcache();
			if($type_p2p == "REGULER") {
				$location = "form_wo_p2p_reguler.php";
			}
			elseif($type_p2p == "CROSS") {
				$location = "form_wo_p2p.php";
			}
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
		}
	}
}
}
// print_r($reason);
?>
<script>
	function Reload() {
		location.reload();
	}
</script>
<SCRIPT language=Javascript>
	function isNumberKey(evt) {
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
						<h4 class="title">INPUT WO P2P <small> >>> <?php echo $login; ?></small></h4>
					</div>
					<form id='form1' name="demoform" action='input_wo_p2p.php?id=<?=$id?>' method='post' accept-charset='UTF-8'>
						<input type="hidden" name="nama_agent" value="<?=$nama?>">
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" name="perner" value="<?=$perner?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Init Offer</label>
										<input class="form-control" type="text" name="init_offer" value="<?php echo $init_offer; ?>" placeholder="masukkan Init Offer" required readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Label</label>
										<input class="form-control" type="text" name="label" value="<?php echo $label; ?>" placeholder="masukkan label" required  readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">MSISDN</label>
										<input class="form-control" type="text" name="msisdn" id="msisdn" value="<?php echo $msisdn; ?>" placeholder="masukkan MSISDN" required  readonly/>
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
											<input class="form-control" type="text" name="type_p2p" id="type_p2p" value="<?php echo strtoupper($type_p2p); ?>" placeholder="masukkan type p2p" required  readonly/>
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
										<input class="form-control" type="text" name="nama_plg" value="<?php echo $nama_plg; ?>" placeholder="masukkan Nama Pelanggan" required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO KTP</label>
										<input class="form-control" type="text" name="ktp" value="<?php echo $ktp; ?>" placeholder="masukkan NO KTP" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO KK</label>
										<input class="form-control" type="text" name="kk" id="kk" value="<?php echo $kk; ?>" placeholder="masukkan No KK" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO HP Lain</label>
										<input class="form-control" type="text" name="no_hp_lain" value="<?php echo $no_hp_lain; ?>" placeholder="masukkan no hp lain" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tanggal Lahir</label>
										<input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" placeholder="masukkan tanggal Lahir" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tempat Lahir</label>
										<input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir; ?>" placeholder="masukkan Tempat Lahir" required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Email Pelanggan</label>
										<input class="form-control" type="email" name="email_plg" value="<?php echo $email_plg; ?>" placeholder="masukkan email pelanggan"  required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat KTP Pelanggan</label>
										<textarea class="form-control" name="alamat_ktp_plg" placeholder="masukkan alamat ktp pelanggan"><?php echo $alamat_ktp_plg; ?></textarea>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat Domisili</label>
										<textarea class="form-control" name="alamat_domisili" placeholder="masukkan alamat Domisili"><?php echo $alamat_domisili; ?></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kode Pos</label>
										<input class="form-control" type="text" name="kode_pos" value="<?php echo $kode_pos; ?>" placeholder="masukkan kode pos" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO CP Reference</label>
										<input class="form-control" type="text" name="no_cp_ref" value="<?php echo $no_cp_ref; ?>" placeholder="masukkan no cp reference" onKeyPress="return isNumberKey(event)" required/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama CP Reference</label>
										<input class="form-control" type="text" name="nama_cp_ref" value="<?php echo $nama_cp_ref; ?>" placeholder="masukkan nama cp reference" required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tanggal Setuju</label>
										<input class="form-control" type="date" name="tgl_setuju" value="<?php echo $tgl_setuju; ?>" placeholder="masukkan tanggal setuju" required/>
									</div>
								</div>
								<?php
									if($reason != NULL){
										$harga = substr($reason,0,strpos($reason,'|'));
									}
									else {
										$harga = '';
									}
									// print_r($harga);
								?>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Revenue</label>
										<input class="form-control" type="text" name="revenue" value="<?=$harga?>" placeholder="masukkan revenue" required readonly/>
										<!-- <select class="form-control" name="revenue" required disabled>
											<option value="">-- PILIH REVENUE --</option>
											<option value="80000" <?=($harga=="80000")?'selected':'';?>>Rp. 80.000</option>
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
									<textarea class="form-control" id="keterangan" name="keterangan" rows="5"  oninput="validateInput(this)"><?php echo $keterangan; ?></textarea>
								</div>
							</div>
						<input class="form-control" type="hidden" name="follow" value="<?php echo $follow; ?>" readonly required />
						</div>
				</div>
				<!-- <input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value=" Reset">
				<input type="submit" name="Save" class="btn btn-danger" value="Simpan" <?php if ($status == '') { ?> disabled<?php } else if ($status == 'Contacted Recall' && $kategori == "" && $ket == "") { ?> disabled <?} else if ( $status=='Not Contacted' && $kategori=="" ){ ?> disabled<?php } else if ($status == "Contacted" && ($kategori == "" || $reason == "")) { ?> disabled<?php } else if ($status == "Follow Up Recall" && $kategori == "") { ?> disabled<?php } ?> onclick="confirm('Apakah anda yakin inputan sesuai yang diinginkan?');"> -->
				<button class="btn btn-danger" onClick="formReset('form'); return false;">Reset</button>
				<button name="Save" class="btn btn-danger" <?php if ($status == '') { ?> disabled<?php } else if ($status == 'Contacted Recall' && $kategori == "" && $ket == "") { ?> disabled <?} else if ( $status=='Not Contacted' && $kategori=="" ){ ?> disabled<?php } else if ($status == "Contacted" && ($kategori == "" || $reason == "")) { ?> disabled<?php } else if ($status == "Follow Up Recall" && $kategori == "") { ?> disabled<?php } ?>>Simpan</button>

			</form>
			<!-- Button to Open the Modal -->

				<!-- The Modal -->
			</div>
		</div>

	</div>
</div>
</div>

<script>

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
// $(document).ready(function(){
//   $('#tlp').bind('copy paste cut',function(e) {
//     e.preventDefault(); //disable cut,copy,paste
//     alert('cut,copy & paste options are disabled !!');
//   });
// });

$(document).ready(function(event) {
    $('#form1').submit(function(event){
		var msg = "Detail Inputan Anda : \n\Perner Agent : " + (($('input[name=perner]').val())?$('input[name=perner]').val():" - ") + "\nLogin Agent : " + (($('input[name=login_user_qco]').val())?$('input[name=login_user_qco]').val():" - ") + "\nNama Agent : " + (($('input[name=nama_agent]').val())?$('input[name=nama_agent]').val():" - ") +"\nINIT OFFER : " + (($('input[name=init_offer]').val())?$('input[name=init_offer]').val():" - ") + "\nlabel : " + (($('input[name=label]').val())?$('input[name=label]').val():" - ") + "\nMSISDN : " + (($('input[name=msisdn]').val())?$('input[name=msisdn]').val():" - ")  + "\nCampaign / Rule : " + (($('select[name=jenis]').val())?$('select[name=jenis]').val():" - ") + "\nStatus Call : " + (($('select[name=status]').val())?$('select[name=status]').val():" - ") + "\nKategori : " + (($('select[name=kategori]').val())?$('select[name=kategori]').val():" - ") + "\nReason Call : " + (($('select[name=reason]').val())?$('select[name=reason]').val():" - ") + "\n\nApakah anda yakin data inputan telah sesuai?";
		
		if($('select[name=status]').val() == " " || $('select[name=kategori]').val() == " ") {
			window.alert('Status Call dan Kategori Wajib Di Isi !!!');
		}
		else if($('textarea[name=ket]').val() == "") {
			window.alert('Keterangan Wajib Di Isi !!!');
		}
		else {
			if(window.confirm(msg) == true) {
				var inputVal = $('input[name=msisdn]').val();
				var gfg = $.isNumeric(inputVal);
				
				userPreference = "Data saved successfully!";
				// document.getElementById("submit_form").value = "ok";
				if(gfg) {
					$('#submit_form').val("ok");
					// document.getElementById("").setAttribute("submit_form", "ok");	
					window.alert(userPreference);
				}
				else {
					window.alert('inputan MSISDN harus Angka !!!');
				}
			}else{
				event.preventDefault();
			}
		}
		//add stuff here
    });

	$( "#btnKirim" ).click(function() {
		let login = "<?=$login?>";
		let nama = "<?=$nama?>";
		let nama_pelanggan = $("#nama_pelanggan").val();
		let no_fastel = $("#no_fastel").val();
		let no_cp = $("#no_cp").val();
		let detail_keterangan = $("#detail_keterangan").val();
		if(login != "" && nama != "" && nama_pelanggan != "" && no_fastel != "" && no_cp != "" && detail_keterangan != "") {

			$.ajax({
				url: "http://10.194.176.158/cwctam_v2/api/send_ganguan_to_wita.php",
				type: "POST",
				dataType: "JSON",
				data: {
					login: login,
					nama: nama,
					jastel: no_fastel,
					nama_pelanggan: nama_pelanggan,
					cp_pelanggan: no_cp,
					keterangan: detail_keterangan
				},
				success: function(data)
				{
					console.log(data);
					$('#formInputWita').modal('hide');
					swal("Success", "Data Berhasil Di Kirim ke WITA oleh Agent!", "success");
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					swal("Gagal", "Data Gagal Di Kirim ke WITA oleh Agent!", "error");
				}
			});
		}
		else {
			swal("Gagal", "Isi Semua Data!", "info");
		}
	});
});


</script>
<?php require_once("../deft_foo.php"); ?>