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

$query_dwh="SELECT * FROM app_tam_p2p WHERE id = '$id'";
//echo $query;
$hasil_dwh = mysqli_query($con,$query_dwh);
$data_dwh = mysqli_fetch_array($hasil_dwh);

$query="SELECT * FROM app_tam_p2p AS a INNER JOIN cc147_main_users AS b ON a.login = b.username WHERE a.id = '$id'";
//echo $query;
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);
//==============================cek handel=================================
if($jb=="Tabber"){
$N_taber="SELECT count(*) as jml FROM app_tam_p2p WHERE follow ='2' and `upd_qco` = '$login'";
$Ne_taber=mysqli_query($con,$N_taber);
$h_taber=mysqli_fetch_row($Ne_taber);
}
if ($h_taber[0] > 35 && $data['upd_qco']==""){
	clearstatcache();
	$location="form_tabber3_p2p.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Anda Melebihi Batas Aproval!</div>";
}
else 
if ($data['upd_qco']<>"" && $data['upd_qco']<>$login)
{
	//clearstatcache();
	$location="form_tabber3_p2p.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Approval ini sudah di handel $data[upd_qco]</div>";
	
	$not_handel=1;
}
else if ($login=='')
{
	//clearstatcache();
	$location="form_tabber3_p2p.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Session user terlogout</div>";
	
	$not_handel=1;
}
// else {
// 	if ($login<>''){
// 	$sql="UPDATE `app_tam_p2p` SET durasi='$durasi', upd_qco='$login' WHERE `id`='$ids'";
// 	$query=mysqli_query($con,$sql);
// 	}
// }


if (isset($_POST['valid']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_p2p.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_p2p` SET follow = '6' , durasi = '$durasi' , `rec_qco`='$rec_qco', tgl_qco='$tgl' , valid='Valid' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_p2p.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}
}else if (isset($_POST['tl']) AND ($pilihan_return_tl != "")){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_p2p.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_p2p` SET follow = '3', durasi = '$durasi', `rec_qco`='$rec_qco', tgl_qco='$tgl', id_return_tl = '$pilihan_return_tl' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_p2p.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}}
else if (isset($_POST['novalid']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_p2p.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	// $sql_update_status_p2p = "UPDATE app_wo_p2p SET status='0', lup='$tgl' WHERE no_telp='$no_telp'";
	// mysqli_query($con, $sql_update_status_p2p);

	$sql_update_no_p2p = "UPDATE app_no_p2p SET status_nomer = '0', tgl_pickup='' WHERE no_p2p='$msisdn'";
	mysqli_query($con, $sql_update_no_p2p);

	$sql="UPDATE `app_tam_p2p` SET follow = '1', durasi = '$durasi', `rec_qco`='$rec_qco', tgl_qco='$tgl',valid='Not Valid' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_p2p.php";		
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
							<h4 class="title">Form QCO TAM P2P</h4>	
						</div>
				
				<form id='input' name="demoform" action='form_tabber3_p2p.php?id=<?php echo "$ids";?>' method='post' accept-charset='UTF-8'>
					<input type="hidden" name="login_user_qco" value="<?=$data['login']?>">
					<input type="hidden" id="submit_form" name="submit_form" value="">
					
					
					<input type="hidden" name="nama_agent" value="<?=$data['nama_agent']?>">
						<input type="hidden" name="perner" value="<?=$data['perner']?>">
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
										<input class="form-control" type="text" name="status" id="status" value="<?=($status == NULL)?$data['status']:$status ?>" placeholder="masukkan status" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kategori</label>
										<input class="form-control" type="text" name="kategori" id="kategori" value="<?=($kategori == NULL)?$data['kategori']:$kategori ?>" placeholder="masukkan kategori" required  readonly/>
									</div>
								</div>
							</div>
							<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Reason Call</label>
											<input class="form-control" type="text" name="reason" id="reason" value="<?=($reason == NULL)?$data['reason']:$reason ?>" placeholder="masukkan reason" required  readonly/>
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
							if($data['status'] == "Contacted" AND $data['kategori'] == "Agree") {
							?>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama Pelanggan</label>
										<input class="form-control" type="text" name="nama_plg" value="<?=($nama_plg == NULL)?$data['nama_plg']:$nama_plg; ?>" placeholder="masukkan Nama Pelanggan" required readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO KTP</label>
										<input class="form-control" type="text" name="ktp" value="<?=($ktp == NULL)?$data['ktp']:$ktp; ?>" placeholder="masukkan NO KTP" onKeyPress="return isNumberKey(event)" required readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO KK</label>
										<input class="form-control" type="text" name="kk" id="kk" value="<?=($kk == NULL)?$data['kk']:$kk; ?>" placeholder="masukkan No KK" onKeyPress="return isNumberKey(event)" required readonly/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO HP Lain</label>
										<input class="form-control" type="text" name="no_hp_lain" value="<?=($no_hp_lain == NULL)?$data['no_hp_lain']:$no_hp_lain; ?>" placeholder="masukkan no hp lain" onKeyPress="return isNumberKey(event)" required readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tanggal Lahir</label>
										<input class="form-control" type="date" name="tgl_lahir" value="<?=($tgl_lahir == NULL)?$data['tgl_lahir']:$tgl_lahir; ?>" placeholder="masukkan tanggal Lahir" required readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tempat Lahir</label>
										<input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?=($tempat_lahir == NULL)?$data['tempat_lahir']:$tempat_lahir; ?>" placeholder="masukkan Tempat Lahir" required readonly/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Email Pelanggan</label>
										<input class="form-control" type="email" name="email_plg" value="<?=($email_plg == NULL)?$data['email_plg']:$email_plg; ?>" placeholder="masukkan email pelanggan" required readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat KTP Pelanggan</label>
										<textarea class="form-control" name="alamat_ktp_plg" placeholder="masukkan alamat ktp pelanggan" readonly><?=($alamat_ktp_plg == NULL)?$data['alamat_ktp_plg']:$alamat_ktp_plg; ?></textarea>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat Domisili</label>
										<textarea class="form-control" name="alamat_domisili" placeholder="masukkan alamat Domisili" readonly><?=($alamat_domisili == NULL)?$data['alamat_domisili']:$alamat_domisili; ?></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kode Pos</label>
										<input class="form-control" type="text" name="kode_pos" value="<?=($kode_pos == NULL)?$data['kode_pos']:$kode_pos; ?>" placeholder="masukkan kode pos" onKeyPress="return isNumberKey(event)" required readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO CP Reference</label>
										<input class="form-control" type="text" name="no_cp_ref" value="<?=($no_cp_ref == NULL)?$data['no_cp_ref']:$no_cp_ref; ?>" placeholder="masukkan no cp reference" onKeyPress="return isNumberKey(event)" required readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama CP Reference</label>
										<input class="form-control" type="text" name="nama_cp_ref" value="<?=($nama_cp_ref == NULL)?$data['nama_cp_ref']:$nama_cp_ref; ?>" placeholder="masukkan nama cp reference" required readonly/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Tanggal Setuju</label>
										<input class="form-control" type="date" name="tgl_setuju" value="<?=($tgl_setuju == NULL)?$data['tgl_setuju']:$tgl_setuju; ?>" placeholder="masukkan tanggal setuju" required readonly/>
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
										<input class="form-control" type="text" name="revenue" value="<?=($revenue == NULL)?$data['revenue']:$revenue;?>" placeholder="masukkan revenue" required readonly/>
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
										<input class="form-control" type="text" name="cls" value="<?=($cls == NULL)?$data['cls']:$cls;?>" placeholder="masukkan cls" required readonly/>
									</div>
								</div>
							</div>

							<?php
							}
							?>

							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" style="color:#008B8B">Keterangan Agent</label>
									<textarea class="form-control" id="keterangan" name="keterangan" rows="5"><?=($keterangan == NULL)?$data['keterangan']:$keterangan; ?></textarea>
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
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_return_p2p");
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