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
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");

$login_qco = NULL;
$query_qco = mysqli_query($con, "SELECT qco FROM cc147_main_users WHERE `username`='$login_user_qco'");
while ($data_qco = mysqli_fetch_row($query_qco)) {
	$login_qco = $data_qco[0];
}
if($_POST['submit_form'] == "ok"){
if (isset($_POST['Save'])) {

	// status call: not connect	
	if ($status == "Not Contacted" || $status == "Follow Up Recall") {
		if ($fastel == ""  or $login == "" or $nama_dm == "" or $tlp == "" or $reg == "" or $status == "" or $jenis == "" or $kategori == "") {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
		} else {

			if ($status == "Not Contacted") {
				$follow = '1';
			} elseif ($status == "Follow Up Recall") {
				$follow = '8';
			}


			//$telp="SELECT count(*) as jml FROM app_tam_data2 WHERE tlp = '$tlp'";
			//$tlep=mysqli_query($con,$telp);
			$sql = "INSERT INTO app_tam_data2 (tgl,login,fastel,nama_dm,tlp,reg,jenis,`status`,kategori,ket,follow,valid,input,add_on_tsel) VALUES ('$tgl','$login','$fastel','$nama_dm','$tlp','$reg','$jenis','$status','$kategori','$ket','$follow','Not Valid','New','$add')";
			//echo $sql;
			$query = mysqli_query($con, $sql);
			clearstatcache();
			$location = "input.php";
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
		}
	}
	// status call: connect
	// print_r($kategori);
	else if ($status == "Contacted") {
		if ($fastel == ""  or $login == "" or $nama_dm == "" or $tlp == "" or $reg == "" or $status == "" or $jenis == "" or $kategori == "" or $reason == "" or $ket == "" or $follow == "" or $add == "" or $chanel == "" or $sub_chanel == "") {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
		} else {
			if($kategori == "Agree"){
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel,prof_agama,prof_facebook,upd_qco) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason','$ket','$follow','Not Valid','New','$add','$chanel','$sub_chanel','$login_qco')";
				$query = mysqli_query($con, $sql);
			}
			else if($kategori == "Follow UP"){
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel,prof_agama,prof_facebook,upd_qco) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason','$ket','$follow','Not Valid','New','$add','$chanel','$sub_chanel','$login_qco')";
				$query = mysqli_query($con, $sql);
			}
			else {
				$sql = "INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel,prof_agama,prof_facebook) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason','$ket','$follow','Not Valid','New','$add','$chanel','$sub_chanel')";
				$query = mysqli_query($con, $sql);
			//echo $sql;
			}
			clearstatcache();
			$location = "input.php";
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

					<form id='form1' name="demoform" action='input.php' method='post' accept-charset='UTF-8'>
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No Fastel</label>
										<input class="form-control" type="text" name="fastel" value="<?php echo $fastel; ?>" placeholder="masukkan no fastel" onkeypress="return isNumberKey(event)" required />
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
										<input class="form-control" type="text" name="tlp" value="<?php echo $tlp; ?>" placeholder="masukkan No CP" onkeypress="return isNumberKey(event)" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Regional</label>
										<select id="se1" name="reg" class="form-control" value="<? echo $reg;?>">
											<option value="">Pilih Regional</option>
											<option value="I" <?php if ($reg == "I") {
																	echo "selected";
																} ?>> I </option>
											<option value="II" <?php if ($reg == "II") {
																	echo "selected";
																} ?>> II </option>
											<option value="III" <?php if ($reg == "III") {
																	echo "selected";
																} ?>> III </option>
											<option value="IV" <?php if ($reg == "IV") {
																	echo "selected";
																} ?>> IV </option>
											<option value="V" <?php if ($reg == "V") {
																	echo "selected";
																} ?>> V </option>
											<option value="VI" <?php if ($reg == "VI") {
																	echo "selected";
																} ?>> VI </option>
											<option value="VII" <?php if ($reg == "VII") {
																	echo "selected";
																} ?>> VII </option>
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
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Selisih Harga</label>
											<input class="form-control" type="text" name="add" value="<?php echo $add; ?>" placeholder="Masukkan Selisih Harga" onkeypress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' />
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Nama Penerima</label>
											<input class="form-control" type="text" name="penerima" value="<?php echo $penerima; ?>" placeholder="Masukkan Nama Penerima" required />
										</div>
									</div>
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
				<button class="btn btn-danger" onclick="formReset('form'); return false;">Reset</button>
				<button name="Save" class="btn btn-danger" <?php if ($status == '') { ?> disabled<?php } else if ($status == 'Contacted Recall' && $kategori == "" && $ket == "") { ?> disabled <?} else if ( $status=='Not Contacted' && $kategori=="" ){ ?> disabled<?php } else if ($status == "Contacted" && ($kategori == "" || $reason == "")) { ?> disabled<?php } else if ($status == "Follow Up Recall" && $kategori == "") { ?> disabled<?php } ?>>Simpan</button>

				</form>
			</div>
		</div>

	</div>
</div>
</div>
<script>

$(document).ready(function(event) {
    $('#form1').submit(function(event){
		var msg = "Detail Inputan Anda : \n\nNama Agent : " + (($('input[name=login]').val())?$('input[name=login]').val():" - ") +"\nNO FASTEL : " + (($('input[name=fastel]').val())?$('input[name=fastel]').val():" - ") + "\nNama DM / Pemilik : " + (($('input[name=nama_dm]').val())?$('input[name=nama_dm]').val():" - ") + "\nNO CP / NO TLP : " + (($('input[name=tlp]').val())?$('input[name=tlp]').val():" - ") + "\nRegional : " + (($('select[name=reg]').val())?$('select[name=reg]').val():" - ") + "\nCampaign / Rule : " + (($('select[name=jenis]').val())?$('select[name=jenis]').val():" - ") + "\nStatus Call : " + (($('select[name=status]').val())?$('select[name=status]').val():" - ") + "\nKategori : " + (($('select[name=kategori]').val())?$('select[name=kategori]').val():" - ") + "\nReason Call : " + (($('select[name=reason]').val())?$('select[name=reason]').val():" - ") + "\nSelisih Harga : " + (($('input[name=add]').val())?$('input[name=add]').val():" - ") + "\nNama Penerima : " + (($('input[name=penerima]').val())?$('input[name=penerima]').val():" - ") + "\nSuggested Package : " + (($('select[name=chanel]').val())?$('select[name=chanel]').val():" - ") + "\nSub Suggested Package : " + (($('select[name=sub_chanel]').val())?$('select[name=chanel]').val():" - ") + "\nKeterangan : " + (($('textarea[name=ket]').val())?$('textarea[name=ket]').val():" - ") + "\n\nApakah anda yakin data inputan telah sesuai?";
		
		if(window.confirm(msg) == true) {
			userPreference = "Data saved successfully!";
			// document.getElementById("submit_form").value = "ok";
			$('#submit_form').val("ok");
			// document.getElementById("").setAttribute("submit_form", "ok");	
			window.alert(userPreference);
		}else{
        	event.preventDefault();
		}
		//add stuff here
    });
});

</script>
<?php require_once("../deft_foo.php"); ?>