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
$tgl = date("Y-m-d H:i:s");

$login_qco = NULL;
$query_qco = mysqli_query($con, "SELECT qco FROM cc147_main_users WHERE `username`='$login_user_qco'");
while ($data_qco = mysqli_fetch_row($query_qco)) {
	$login_qco = $data_qco[0];
}

$convertRupiah = (int) filter_var($add, FILTER_SANITIZE_NUMBER_INT);  
if(isset($biaya_bulan)){
	$convertRupiahBiayaBulan = (int) filter_var($biaya_bulan, FILTER_SANITIZE_NUMBER_INT);  
}
else {
	$convertRupiahBiayaBulan = 0;
}


if($_POST['submit_form'] == "ok"){
if (isset($_POST['Save'])) {

	// status call: not connect	
	if ($status == "Not Contacted" || $status == "Follow Up Recall") {
		if ($fastel == ""  or $login == "" or $nama_dm == "" or $tlp == "" or $reg == "" or $status == "" or $jenis == "" or $kategori == "" ) {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			$cek = "kosong";
		} else {

			if ($status == "Not Contacted") {
				$follow = '1';
			} elseif ($status == "Follow Up Recall") {
				$follow = '8';
			}


			//$telp="SELECT count(*) as jml FROM app_tam_data2 WHERE tlp = '$tlp'";
			//$tlep=mysqli_query($con,$telp);
			$sql = "INSERT INTO app_tam_data2 (tgl,login,fastel,nama_dm,tlp,reg,jenis,`status`,kategori,ket,follow,valid,input,nama_agent,area) VALUES ('$tgl','$login','$fastel','$nama_dm','$tlp','$reg','$jenis','$status','$kategori','$ket','$follow','Not Valid','New','$nama','$area')";
			//echo $sql;
			$query = mysqli_query($con, $sql);
			$cek='sukses';

			$data = [
				"tgl" => $tgl,	
				"login" => $login,	
				"nama_agent" => $nama,	
				"area" => $area,	
				"fastel" => $fastel,	
				"nama_dm" => $nama_dm,	
				"tlp" => $tlp,	
				"reg" => $reg,	
				"jenis" => $jenis,	
				"status" => $status,	
				"kategori" => $kategori,	
				"ket" => $ket,
				"follow" => $follow,
				"valid" => "Not Valid",
				"input" => "New"
			  ];
			
			  $pdata = json_encode($data);
			  
			  $curl = curl_init();
			
			  curl_setopt_array($curl, [
				CURLOPT_URL => 'http://10.194.17.17/api/inputInteraction',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => $pdata,
				CURLOPT_HTTPHEADER => [
				  'Authorization: Bearer eyJpdiI6ImpGeko3QjdkSU5BTHNjcVJMa2VOR1E9PSIsInZhbHVlIjoiYkJ2citDeTZqZXJkc1hpdW4wRGxZdz09IiwibWFjIjoiZDZkZGM3NzU4NGI4ZTU2ODU1Mzk1NzQ5MWFlYWM3ZTIzOTE3MGM0NjFmZGNjYWM0MzEyOGM2ZjQwMzczNWE5NiIsInRhZyI6IiJ9',
				  'Content-Type: application/json'
				],
			  ]);
			
			  $response = curl_exec($curl);
			
			  curl_close($curl);
			//   echo $response;
			// var_dump($response);
			clearstatcache();
			$location = "input5.php";
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
		}
	}
	// status call: connect
	// print_r($kategori);
	else if ($status == "Contacted") {
		if ($fastel == ""  or $login == "" or $nama_dm == "" or $tlp == "" or $reg == "" or $status == "" or $jenis == "" or $kategori == "" or $reason == "" or $ket == "" or $follow == "" or $convertRupiah == "" ) {
			// echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			$cek = "kosong";
		} else {
			if($kategori == "Agree"){
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,
						valid,input,add_on_tsel,upd_qco,nama_agent,area, biaya_bulan,alamat_instalasi,email) VALUES ('$tgl','$login','$nama_dm',
						'$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason','$ket','$follow','Not Valid','New',
						'$convertRupiah','$login_qco','$nama','$area','$convertRupiahBiayaBulan','$alamat_instalasi','$email')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';

				$data = [
					"tgl" => $tgl,	
					"login" => $login,	
					"nama_agent" => $nama,	
					"area" => $area,	
					"fastel" => $fastel,	
					"nama_dm" => $nama_dm,	
					"tlp" => $tlp,	
					"reg" => $reg,	
					"jenis" => $jenis,	
					"status" => $status,	
					"kategori" => $kategori,	
					"reason" => $reason,	
					"penerima" => $penerima,	
					"ket" => $ket,	
					"input" => "New",	
					"add_on_tsel" => $convertRupiah,	
					"valid" => "Not Valid",	
					"follow" => $follow,
					"upd_qco" => $login_qco
				  ];
			}
			else if($kategori == "Follow UP"){
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,
						valid,input,add_on_tsel,upd_qco,nama_agent,area,biaya_bulan,alamat_instalasi,email) VALUES ('$tgl','$login','$nama_dm',
						'$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason','$ket','$follow','Not Valid','New',
						'$convertRupiah','$login_qco','$nama','$area','$convertRupiahBiayaBulan','$alamat_instalasi','$email')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';

				$data = [
					"tgl" => $tgl,	
					"login" => $login,	
					"nama_agent" => $nama,	
					"area" => $area,	
					"fastel" => $fastel,	
					"nama_dm" => $nama_dm,	
					"tlp" => $tlp,	
					"reg" => $reg,	
					"jenis" => $jenis,	
					"status" => $status,	
					"kategori" => $kategori,	
					"reason" => $reason,	
					"penerima" => $penerima,	
					"ket" => $ket,	
					"input" => "New",	
					"add_on_tsel" => $convertRupiah,	
					"valid" => "Not Valid",	
					"follow" => $follow,
					"upd_qco" => $login_qco
				  ];
			}
			else {
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,
						valid,input,add_on_tsel,nama_agent,area,biaya_bulan,alamat_instalasi,email) VALUES ('$tgl','$login','$nama_dm','$tlp',
						'$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason','$ket','$follow','Not Valid','New',
						'$convertRupiah','$nama','$area','$convertRupiahBiayaBulan','$alamat_instalasi','$email')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';

				$data = [
					"tgl" => $tgl,	
					"login" => $login,	
					"nama_agent" => $nama,	
					"area" => $area,	
					"fastel" => $fastel,	
					"nama_dm" => $nama_dm,	
					"tlp" => $tlp,	
					"reg" => $reg,	
					"jenis" => $jenis,	
					"status" => $status,	
					"kategori" => $kategori,	
					"reason" => $reason,	
					"penerima" => $penerima,	
					"ket" => $ket,	
					"input" => "New",	
					"add_on_tsel" => $convertRupiah,	
					"valid" => "Not Valid",	
					"follow" => $follow	
				  ];
			//echo $sql;
			}
			
			  $pdata = json_encode($data);
			
			  $data = [
				"tgl" => $tgl,	
				"login" => $login,	
				"nama_agent" => $nama,	
				"area" => $area,	
				"fastel" => $fastel,	
				"nama_dm" => $nama_dm,	
				"tlp" => $tlp,	
				"reg" => $reg,	
				"jenis" => $jenis,	
				"status" => $status,	
				"kategori" => $kategori,	
				"ket" => $ket,
				"follow" => $follow,
				"valid" => "Not Valid",
				"input" => "New"
			  ];
			
			  $pdata = json_encode($data);
			  
			  $curl = curl_init();
			
			  curl_setopt_array($curl, [
				CURLOPT_URL => 'http://10.194.17.17/api/inputInteraction',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => $pdata,
				CURLOPT_HTTPHEADER => [
				  'Authorization: Bearer eyJpdiI6ImpGeko3QjdkSU5BTHNjcVJMa2VOR1E9PSIsInZhbHVlIjoiYkJ2citDeTZqZXJkc1hpdW4wRGxZdz09IiwibWFjIjoiZDZkZGM3NzU4NGI4ZTU2ODU1Mzk1NzQ5MWFlYWM3ZTIzOTE3MGM0NjFmZGNjYWM0MzEyOGM2ZjQwMzczNWE5NiIsInRhZyI6IiJ9',
				  'Content-Type: application/json'
				],
			  ]);
			
			  $response = curl_exec($curl);
			
			  curl_close($curl);

			clearstatcache();
			$location = "input5.php";
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
						<h4 class="title">INPUT CWC <small> >>> <?php echo $login; ?></small></h4>
					</div>
					<form id='form1' name="demoform" action='input5.php' method='post' accept-charset='UTF-8'>
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No Fastel</label>
										<input class="form-control" type="text" name="fastel" value="<?php echo $fastel; ?>" placeholder="masukkan no fastel" onKeyPress="return isNumberKey(event)" required />
										<input class="form-control" type="hidden" name="login" value="<?php echo $login; ?>" readonly required />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama DM/Pemilik</label>
										<input class="form-control" type="text" name="nama_dm" value="<?php echo $nama_dm; ?>" placeholder="masukkan nama pemilik" required />
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No. CP/Dial</label>
										<input class="form-control" type="text" name="tlp" id="tlp" value="<?php echo $tlp; ?>" placeholder="masukkan No CP" onKeyPress="return isNumberKey(event)" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Area</label>
										<select id="se1" name="reg" class="form-control" value="<? echo $reg;?>">
											<option value="">Pilih Area</option>
											
											<option value="Area 1" <?php if ($reg == "Area 1") {
																	echo "selected";
																} ?>> Area 1 </option>
											<option value="Area 2" <?php if ($reg == "Area 2") {
																	echo "selected";
																} ?>> Area 2 </option>
											<option value="Area 3" <?php if ($reg == "Area 3") {
																	echo "selected";
																} ?>> Area 3 </option>
											<option value="Area 4" <?php if ($reg == "Area 4") {
																	echo "selected";
																} ?>> Area 4 </option>
											
										</select>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Campaign/Rule</label>
										<select name="jenis" class="form-control" onChange="document.demoform.submit()">
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
												if($rsk[1] != "") {
												echo "<option value=\"$rsk[1]\" $sel> $rsk[1] </option>";
												$k++;
												}
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
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kategori</label>
										<select name="kategori" class="form-control" onChange="document.demoform.submit()">
											<option value=" ">Pilih Status call</option>
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


								<?php if ($status == "Contacted") { ?>
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
											<label class="control-label" style="color:#008B8B">Selisih Harga</label>
											<input class="form-control" type="text" name="add" value="<?php echo $convertRupiah; ?>" placeholder="Masukkan Selisih Harga" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' />
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Nama Penerima</label>
											<input class="form-control" type="text" name="penerima" value="<?php echo $penerima; ?>" placeholder="Masukkan Nama Penerima" required />
										</div>
									</div>
									<?php if ($status == "Contacted" and $jenis == "PSB IH JITU" or $jenis == "PSB IH DYNAMIC") { ?>
									<div class="col-md-4">
										<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kisaran Biaya Telekomunikasi Per Bulan?</label>
											<input class="form-control" type="text" name="biaya_bulan" value="<?php echo $convertRupiahBiayaBulan; ?>" placeholder="Masukkan Biaya Bulan" id="biaya_bulan" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat Instalasi</label>
											<input class="form-control" type="text" name="alamat_instalasi" value="<?php echo $alamat_instalasi; ?>" placeholder="Masukkan Alamat Instalasi" id="alamat_instalasi" required />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										<label class="control-label" style="color:#008B8B">Email</label>
											<input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="Masukkan Email" id="email" required />
										</div>
									</div>
									<?php } ?>
									<!-- <div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">SUGGESTED PACKAGE</label>
											<select id="se2" name="chanel" class="form-control" onChange="document.demoform.submit()">
												<option value="">Pilih Suggested Package</option>
												<?php
												$qsk = mysqli_query($con, "SELECT  distinct nba FROM app_tam_nba");

												$k = 1;
												while ($rsk1 = mysqli_fetch_row($qsk)) {

													if ($rsk1[0] == $chanel) {
														$sel = "selected";
													} else {
														$sel = "";
													}
													echo "<option value=\"$rsk1[0]\" $sel> $rsk1[0]</option>";
													$k++;
												}
												?>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">SUB SUGGESTED PACKAGE</label>
											<select name="sub_chanel" class="form-control">
												<option value="">Pilih Sub Channel</option>
												<?php
												$qska = mysqli_query($con, "SELECT sub_nba FROM app_tam_nba WHERE `nba`= '$chanel'");
												$k = 1;
												while ($rska = mysqli_fetch_row($qska)) {
													if ($rska[0] == $sub_chanel) {
														$sel = "selected";
														$sub_chanel = $rska[0];
													} else {
														$sel = "";
													}
													echo "<option value=\"$rska[0]\" $sel> $rska[0] </option>";
													$k++;
												}
												?>
											</select>
										</div>
									</div> -->
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" style="color:#008B8B">Keterangan </label>
									<textarea class="form-control" id="ket" name="ket" rows="5" value="<?php echo $ket; ?>"></textarea>
								</div>
							</div>
						<?php }
								if ($status == "Follow Up Recall" || $status == "Not Contacted") { ?>
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" style="color:#008B8B">Keterangan</label>
									<textarea class="form-control" id="ket" name="ket" rows="5" value="<?php echo $ket; ?>"></textarea>
								</div>
							</div>
						<?php } ?>
						<input class="form-control" type="hidden" name="follow" value="<?php echo $follow; ?>" readonly required />
						</div>
				</div>
				<!-- <input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value=" Reset">
				<input type="submit" name="Save" class="btn btn-danger" value="Simpan" <?php if ($status == '') { ?> disabled<?php } else if ($status == 'Contacted Recall' && $kategori == "" && $ket == "") { ?> disabled <?} else if ( $status=='Not Contacted' && $kategori=="" ){ ?> disabled<?php } else if ($status == "Contacted" && ($kategori == "" || $reason == "")) { ?> disabled<?php } else if ($status == "Follow Up Recall" && $kategori == "") { ?> disabled<?php } ?> onclick="confirm('Apakah anda yakin inputan sesuai yang diinginkan?');"> -->
				<button class="btn btn-danger" onClick="formReset('form'); return false;">Reset</button>
				<button name="Save" class="btn btn-danger" <?php if ($status == '') { ?> disabled<?php } else if ($status == 'Contacted Recall' && $kategori == "" && $ket == "") { ?> disabled <?} else if ( $status=='Not Contacted' && $kategori=="" ){ ?> disabled<?php } else if ($status == "Contacted" && ($kategori == "" || $reason == "")) { ?> disabled<?php } else if ($status == "Follow Up Recall" && $kategori == "") { ?> disabled<?php } ?>>Simpan</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formInputWita" id="btnWita" style="float:right">
				Input Wita
				</button>
			</form>
			<!-- Button to Open the Modal -->

				<!-- The Modal -->
				<div class="modal" id="formInputWita" tabindex="-1" aria-hidden="true" data-backdrop="false">
					<div class="modal-dialog">
						<div class="modal-content">
							<form id="formInputWita" role="form" method="POST" action="">
								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Form Input Wita</h4>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<div class="form-group">
										<label class="control-label">Nama Pelanggan</label>
										<div>
											<input type="text" class="form-control input-lg" name="nama_pelanggan" id="nama_pelanggan">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">NO FASTEL</label>
										<div>
											<input type="number" class="form-control input-lg" name="no_fastel" id="no_fastel">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">NO CP</label>
										<div>
											<input type="number" class="form-control input-lg" name="no_cp" id="no_cp">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Detail Kendala</label>
										<div>
											<textarea class="form-control input-lg" name="detail_keterangan" id="detail_keterangan" rows="5"></textarea>
										</div>
									</div>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary" id="btnKirim">Send</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
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
		var msg = "Detail Inputan Anda : \n\nNama Agent : " + (($('input[name=login]').val())?$('input[name=login]').val():" - ") +"\nNO FASTEL : " + (($('input[name=fastel]').val())?$('input[name=fastel]').val():" - ") + "\nNama DM / Pemilik : " + (($('input[name=nama_dm]').val())?$('input[name=nama_dm]').val():" - ") + "\nNO CP / NO TLP : " + (($('input[name=tlp]').val())?$('input[name=tlp]').val():" - ") + "\nRegional : " + (($('select[name=reg]').val())?$('select[name=reg]').val():" - ") + "\nCampaign / Rule : " + (($('select[name=jenis]').val())?$('select[name=jenis]').val():" - ") + "\nStatus Call : " + (($('select[name=status]').val())?$('select[name=status]').val():" - ") + "\nKategori : " + (($('select[name=kategori]').val())?$('select[name=kategori]').val():" - ") + "\nReason Call : " + (($('select[name=reason]').val())?$('select[name=reason]').val():" - ") + "\nSelisih Harga : " + (($('input[name=add]').val())?$('input[name=add]').val():" - ") + "\nNama Penerima : " + (($('input[name=penerima]').val())?$('input[name=penerima]').val():" - ") + "\nKeterangan : " + (($('textarea[name=ket]').val())?$('textarea[name=ket]').val():" - ") + "\n\nApakah anda yakin data inputan telah sesuai?";
		
		if($('select[name=status]').val() == " " || $('select[name=kategori]').val() == " ") {
			window.alert('Status Call dan Kategori Wajin Di Isi !!!');
		}
		else {
			if(window.confirm(msg) == true) {
				var inputVal = $('input[name=tlp]').val();
				var gfg = $.isNumeric(inputVal);
				
				userPreference = "Data saved successfully!";
				// document.getElementById("submit_form").value = "ok";
				if(gfg) {
					$('#submit_form').val("ok");
					// document.getElementById("").setAttribute("submit_form", "ok");	
					window.alert(userPreference);
				}
				else {
					window.alert('inputan NO. CP / DIAL harus Angka !!!');
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