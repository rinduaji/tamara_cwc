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

$login_qco = NULL;
$query_qco = mysqli_query($con, "SELECT qco FROM cc147_main_users WHERE `username`='$login_user_qco'");
while ($data_qco = mysqli_fetch_row($query_qco)) {
	$login_qco = $data_qco[0];
}

if(isset($id_paket_streaming) AND isset($paket_harga)){
	// print_r($id_paket_streaming.' '.$paket_harga);
	$query_harga_paket = mysqli_query($con, "SELECT * FROM app_paket_stream WHERE `id`='$id_paket_streaming'");
	while ($data_harga_paket = mysqli_fetch_array($query_harga_paket)) {
		$convertRupiah = (int) filter_var($data_harga_paket[$paket_harga], FILTER_SANITIZE_NUMBER_INT); 
		if($diskon == "") {
			$diskon = 0;
		} 
		$harga_diskon_total = $convertRupiah + $diskon;
	}
}
else{
	$convertRupiah = 0;
} 

if($_POST['submit_form'] == "ok"){
if (isset($_POST['Save'])) {

	// status call: not connect	
	if ($status == "Not Contacted" || $status == "Follow Up Recall") {
		if ($fastel == ""  or $login == "" or $nama_dm == "" or $tlp == "" or $reg == "" or $status == "" or $jenis == "" or $kategori == "" or $ket == "" ) {
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
			$sql = "INSERT INTO app_tam_data2 (tgl,login,fastel,nama_dm,tlp,reg,jenis,`status`,kategori,ket,follow,valid,input,
					nama_agent,area,upd_qco) VALUES ('$tgl','$login','$fastel','$nama_dm','$tlp','$reg','$jenis','$status','$kategori','$ket',
					'$follow','Not Valid','New','$nama','$area','$login_qco')";
			//echo $sql;
			$query = mysqli_query($con, $sql);

			$sql_update_status_netflix = "UPDATE app_wo_netflix SET status='0', lup='$tgl' WHERE id='$id'";
			mysqli_query($con, $sql_update_status_netflix);
			
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

			
			$cek='sukses';
			clearstatcache();
			$location = "form_wo_netflix.php";
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
		}
	}
	// status call: connect
	// print_r($kategori);
	else if ($status == "Contacted") {
		if ($fastel == ""  or $login == "" or $nama_dm == "" or $tlp == "" or $reg == "" or $status == "" or $jenis == "" or $kategori == "" or $reason == "" or $ket == "" or $follow == "" or $penerima == "") {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			$cek = "kosong";
		} else {
			if($kategori == "Agree"){
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel,prof_agama,prof_facebook,upd_qco,nama_agent,area,
						paket_steaming,speed_asal,speed_tujuan,`param`,internet,ott1,ott2,paket_harga,diskon,total_harga_diskon) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori',
						'$reason','$ket','$follow','Not Valid','New','$add','$chanel','$sub_chanel','$login_qco','$nama','$area','$paket_streaming','$speed_asal','$speed_tujuan','$param','$internet','$ott1',
						'$ott2','$paket_harga','$diskon','$total_harga_diskon')";
				$query = mysqli_query($con, $sql);
				// print_r($sql);
				// die();
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
					"prof_agama" => $chanel,	
					"prof_facebook" => $sub_chanel,
					"follow" => $follow,
					"upd_qco" => $login_qco
				  ];
			}
			else if($kategori == "Follow UP"){
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel,prof_agama,prof_facebook,upd_qco,nama_agent,area,
						paket_steaming,speed_asal,speed_tujuan,`param`,internet,ott1,ott2,paket_harga,diskon,total_harga_diskon) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori',
						'$reason','$ket','$follow','Not Valid','New','$add','$chanel','$sub_chanel','$login_qco','$nama','$area','$paket_streaming','$speed_asal','$speed_tujuan','$param','$internet','$ott1',
						'$ott2','$paket_harga','$diskon','$total_harga_diskon')";
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
					"prof_agama" => $chanel,	
					"prof_facebook" => $sub_chanel,
					"follow" => $follow,
					"upd_qco" => $login_qco
				  ];
			}
			else {
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel,prof_agama,prof_facebook,nama_agent,area,
						paket_steaming,speed_asal,speed_tujuan,`param`,internet,ott1,ott2,paket_harga,diskon,total_harga_diskon) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori',
						'$reason','$ket','$follow','Not Valid','New','$add','$chanel','$sub_chanel','$nama','$area','$paket_streaming','$speed_asal','$speed_tujuan','$param','$internet','$ott1','$ott2',
						'$paket_harga','$diskon','$total_harga_diskon')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';
			//echo $sql;
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
					"prof_agama" => $chanel,	
					"prof_facebook" => $sub_chanel,
					"follow" => $follow	
				];
			}
			// print_r($reason);
			if($kategori == "Not Agree" AND $reason == "RNA") {
				$sql_update_status_netflix = "UPDATE app_wo_netflix SET status='0', lup='$tgl' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_netflix);
			}
			else if($kategori == "Follow UP") {
				$sql_update_status_netflix = "UPDATE app_wo_netflix SET status='0', lup='$tgl' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_netflix);
			}
			else {
				$sql_update_status_netflix = "UPDATE app_wo_netflix SET status='1', lup='$tgl' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_netflix);
			}
			
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
			$location = "form_wo_netflix.php";
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
						<h4 class="title">INPUT WO NETFLIX <small> >>> <?php echo $login; ?></small></h4>
					</div>
					<form id='form1' name="demoform" action='input_wo_netflix.php?id=<?=$id?>' method='post' accept-charset='UTF-8'>

						<?php
							$query_wo_netflix = mysqli_query($con, "SELECT * FROM app_wo_netflix WHERE `login`='$login' AND `id`='$id'");
							while ($data_wo = mysqli_fetch_array($query_wo_netflix)) {
						?>
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No Fastel</label>
										<input class="form-control" type="text" name="fastel" value="<?php echo $data_wo['fastel']; ?>" placeholder="masukkan no fastel" onKeyPress="return isNumberKey(event)" required readonly/>
										<input class="form-control" type="hidden" name="login" value="<?php echo $login; ?>" readonly required />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama DM/Pemilik</label>
										<input class="form-control" type="text" name="nama_dm" value="<?php echo $data_wo['nama_dm']; ?>" placeholder="masukkan nama pemilik" required  readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No. CP/Dial</label>
										<input class="form-control" type="text" name="tlp" id="tlp" value="<?php echo $data_wo['tlp']; ?>" placeholder="masukkan No CP" onKeyPress="return isNumberKey(event)" required  readonly/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Regional</label>
										<select id="se1" name="reg" class="form-control" value="<? echo $data_wo['reg'];?>" readonly>
											<option value="">Pilih Regional</option>
											<option value="I" <?php if ($data_wo['reg'] == "1") {
																	echo "selected";
																} ?>> I </option>
											<option value="II" <?php if ($data_wo['reg'] == "2") {
																	echo "selected";
																} ?>> II </option>
											<option value="III" <?php if ($data_wo['reg'] == "3") {
																	echo "selected";
																} ?>> III </option>
											<option value="IV" <?php if ($data_wo['reg'] == "4") {
																	echo "selected";
																} ?>> IV </option>
											<option value="V" <?php if ($data_wo['reg'] == "5") {
																	echo "selected";
																} ?>> V </option>
											<option value="VI" <?php if ($data_wo['reg'] == "6") {
																	echo "selected";
																} ?>> VI </option>
											<option value="VII" <?php if ($data_wo['reg'] == "7") {
																	echo "selected";
																} ?>> VII </option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Campaign/Rule</label>
										<select name="jenis" class="form-control" onChange="document.demoform.submit()" readonly>
											<option value=" ">Pilih Campaign</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE `aktif`='1'");
											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[1] == "Bundling Netflix") {
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
									<?php 
									
									if($kategori != "Not Agree") { ?>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Paket Streaming Netflix</label>
											<div class="form-group input-group">
												<input type="hidden" name="id_paket_streaming" id="id_paket_streaming" value="<?=$id_paket_streaming?>">
												<input type="hidden" name="speed_asal" id="speed_asal" value="<?=$speed_asal?>">
												<input type="hidden" name="speed_tujuan" id="speed_tujuan" value="<?=$speed_tujuan?>">
												<input type="hidden" name="param" id="param" value="<?=$param?>">
												<input type="hidden" name="internet" id="internet" value="<?=$internet?>">
												<input type="hidden" name="ott1" id="ott1" value="<?=$ott1?>">
												<input type="hidden" name="ott2" id="ott2" value="<?=$ott2?>">
												<input type="text" name="paket_streaming" id="paket_streaming" class="form-control" value="<?=$paket_streaming?>" placeholder="Pilih Paket Streaming" required readonly>
												<span class="input-group-btn">
													<button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
														<i class="fa fa-search"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Jenis Harga Paket Streaming</label>
												<select id="se2" name="paket_harga" class="form-control" onChange="document.demoform.submit()">
													<option value="">-- Pilih Jenis Harga Paket --</option>
													<option value="basic" <?=(($paket_harga == 'basic')?'selected':'')?>>BASIC</option>
													<option value="standard" <?=(($paket_harga == 'standard')?'selected':'')?>>STANDARD</option>
													<option value="premium" <?=(($paket_harga == 'premium')?'selected':'')?>>PREMIUM</option>
												</select>
											</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Harga Paket Streaming</label>
											<!-- <input class="form-control" type="text" name="add" value="<?php echo $convertRupiah; ?>" placeholder="Masukkan Selisih Harga" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' /> -->
											<input class="form-control" type="text" name="add" value="<?php echo $convertRupiah; ?>" placeholder="Masukkan Selisih Harga" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' readonly/>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Diskon Paket Streaming</label>
											<!-- <input class="form-control" type="text" name="add" value="<?php echo $diskon_inet; ?>" placeholder="Masukkan Selisih Harga" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' /> -->
											<input class="form-control" type="text" name="diskon" value="<?=(($data_wo['diskon_inet'] == "")?'0':$data_wo['diskon_inet']); ?>" placeholder="Masukkan Diskon" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' readonly/>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Harga Diskon Paket Streaming</label>
											<!-- <input class="form-control" type="text" name="add" value="<?php echo $harga_diskon_total; ?>" placeholder="Masukkan Selisih Harga" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' /> -->
											<input class="form-control" type="text" name="total_harga_diskon" value="<?=(($harga_diskon_total == NULL OR $harga_diskon_total == "")?'0':$harga_diskon_total); ?>" placeholder="Masukkan Selisih Harga Diskon" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' readonly/>
										</div>
									</div>
									<?php 
										}
									?>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Nama Penerima</label>
											<input class="form-control" type="text" name="penerima" value="<?php echo $penerima; ?>" placeholder="Masukkan Nama Penerima" required />
										</div>
									</div>

									<?php if($kategori != "Not Agree") { ?>
									<div class="col-md-4">
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
									</div>
									<?php 
										}
									?>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" style="color:#008B8B">Keterangan (Tidak boleh ada tanda " dan ')</label>
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
								<?php
								}
								?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
<div class="modal fade" id="modal-item" tabindex="-1" role="dialog" aria-labelledby="Form Libur" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">PILIH DATA PAKET STREAMING NETFLIX</h4>
			</div>
			<div class="modal-body table-responsive">
				<table class="table table-bordered table-striped" id="table1" style="width:100%;text-align:center;">
					<thead>
						<tr>
							<th>No</th>
							<th>Paket Streaming</th>
							<th>Speed Asal</th>
							<th>Speed Tujuan</th>
							<th>Param di METRANET</th>
							<th>internet</th>
							<th>OTT1</th>
							<th>OTT2</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$number = 0;
						$query_login = "SELECT * FROM app_paket_stream";
						$hasil_login = mysqli_query($con, $query_login) or die("Query gagal!");
						while ($data1 = mysqli_fetch_array($hasil_login)) {
						?>
							<tr>
								<td><?= ++$number ?></td>
								<td><?= $data1['paket_streaming'] ?></td>
								<td><?= $data1['speed_asal'] ?></td>
								<td><?= $data1['speed_tujuan'] ?></td>
								<td><?= $data1['param'] ?></td>
								<td><?= $data1['internet'] ?></td>
								<td><?= $data1['ott1'] ?></td>
								<td><?= $data1['ott2'] ?></td>
								<td>
									<button class="btn btn-xs btn-info" id="select_paket_streaming" data-id="<?= $data1['id'] ?>" 
									data-paketstreaming="<?= $data1['paket_streaming'] ?>" data-speedasal="<?= $data1['speed_asal'] ?>" 
									data-speedtujuan="<?= $data1['speed_tujuan'] ?>" data-param="<?= $data1['param'] ?>" data-internet="<?= $data1['internet'] ?>" 
									data-ott1="<?= $data1['ott1'] ?>" data-ott2="<?= $data1['ott2'] ?>">
										<i class="fa fa-check"></i> Pilih
									</button>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
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
		var msg = "Detail Inputan Anda : \n\nNama Agent : " + (($('input[name=login]').val())?$('input[name=login]').val():" - ") +"\nNO FASTEL : " + (($('input[name=fastel]').val())?$('input[name=fastel]').val():" - ") + "\nNama DM / Pemilik : " + (($('input[name=nama_dm]').val())?$('input[name=nama_dm]').val():" - ") + "\nNO CP / NO TLP : " + (($('input[name=tlp]').val())?$('input[name=tlp]').val():" - ") + "\nRegional : " + (($('select[name=reg]').val())?$('select[name=reg]').val():" - ") + "\nCampaign / Rule : " + (($('select[name=jenis]').val())?$('select[name=jenis]').val():" - ") + "\nStatus Call : " + (($('select[name=status]').val())?$('select[name=status]').val():" - ") + "\nKategori : " + (($('select[name=kategori]').val())?$('select[name=kategori]').val():" - ") + "\nReason Call : " + (($('select[name=reason]').val())?$('select[name=reason]').val():" - ") + "\nSelisih Harga : " + (($('input[name=add]').val())?$('input[name=add]').val():" - ") + "\nNama Penerima : " + (($('input[name=penerima]').val())?$('input[name=penerima]').val():" - ") + "\nSuggested Package : " + (($('select[name=chanel]').val())?$('select[name=chanel]').val():" - ") + "\nSub Suggested Package : " + (($('select[name=sub_chanel]').val())?$('select[name=chanel]').val():" - ") + "\nKeterangan : " + (($('textarea[name=ket]').val())?$('textarea[name=ket]').val():" - ") + "\n\nApakah anda yakin data inputan telah sesuai?";
		
		if($('select[name=status]').val() == " " || $('select[name=kategori]').val() == " ") {
			window.alert('Status Call dan Kategori Wajib Di Isi !!!');
		}
		else if($('select[name=reason]').val() == " ") {
			window.alert('Reason Call Wajib Di Isi !!!');
		}
		else if($('select[name=paket_streaming]').val() == "" ) {
			window.alert('Paket Streaming Netflix Di Isi !!!');
		}
		else if($('select[name=paket_harga]').val() == "" ) {
			window.alert('Jenis Harga Paket Streaming Di Isi !!!');
		}
		else if($('input[name=add]').val() == "0" ) {
			window.alert('Harga Paket Streaming Di Isi !!!');
		}
		else if($('textarea[name=ket]').val() == "") {
			window.alert('Keterangan Wajib Di Isi !!!');
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