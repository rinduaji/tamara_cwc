<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$area = $_SESSION['area'];
$tgl = date("Y-m-d H:i:s");

$query="SELECT * FROM app_tam_data2 AS a INNER JOIN app_tam_jenis AS b ON a.jenis = b.keterangan WHERE id='$id'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_row($hasil);
$login=$data[2];
$pelangganx=$data[3];
$upd_qco=$data[17];

if($fastel==''){$fastel=$data[4];}
if($nama_dm==''){$nama_dm=$data[5];}
if($tlp==''){$tlp=$data[6];}
if($jenis==''){$jenis=$data[8];}
if($prof_hp==''){$prof_hp=$data[28];}
if($prof_email==''){$prof_email=$data[29];}
if($prof_ttl==''){$prof_ttl=$data[30];}
if($prof_hoby==''){$prof_hoby=$data[31];}
if($prof_agama==''){$prof_agama=$data[32];}
if($prof_facebook==''){$prof_facebook=$data[33];}
if($add==''){$add=$data[34];}
if($reg==''){$reg=$data[7];}

if($add_on_wifi==''){$add_on_wifi=$data[36];}
if($id_jenis==''){$id_jenis=$data[37];}

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

if (isset($_POST['back']) ){
	clearstatcache();
	$location="list_follow.php";
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	}
	
if (isset($_POST['Save']) ){
	// status call: not connect	
	if($status=="Not Contacted" || $status=="Follow Up Recall")
		{   
			if ($fastel==""  or $login=="" or $nama_dm=="" or $tlp=="" or $reg=="" or $status=="" or $jenis=="" or $kategori=="")
			{	
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			}else{
				if ($status=="Not Contacted"){$follow = '8'; $ket="";}
				else if ($status=="Follow Up Recall"){$follow = '8';}
				$sql="UPDATE `app_tam_data2` SET `follow`='1'  WHERE (`id`='$id')";
				$query=mysqli_query($con,$sql);
				
				$sql="INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel,nama_agent,area,
				paket_steaming,speed_asal,speed_tujuan,`param`,internet,ott1,ott2,paket_harga,diskon,total_harga_diskon, hssp_type, recom_speed, blast, speed_tertinggi, status_hd) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason',
				'$ket','8','Not Valid','New','$add','$nama','$area','$paket_streaming','$speed_asal','$speed_tujuan','$param','$internet','$ott1','$ott2','$paket_harga','$diskon','$total_harga_diskon','$hssp_type','$recom_speed','$blast','$speed_tertinggi','0')";
				
				//echo $sql;
				$query = mysqli_query($con,$sql);
				clearstatcache();
				$location="list_follow.php";		
				echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
			}
		}
		// status call: connect
	else if($status=="Contacted")
	{
		if ( $fastel==""  or $login=="" or $nama_dm=="" or $tlp=="" or $reg=="" or $status=="" or $jenis=="" or $kategori=="" or $reason=="" or $ket=="" or $follow=="")
		{	
		echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
		}else{
		  
			$sql="UPDATE `app_tam_data2` SET `follow`='1'  WHERE (`id`='$id')";
			$query=mysqli_query($con,$sql);
			
			$sql="INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel,upd_qco,nama_agent,area,
			paket_steaming,speed_asal,speed_tujuan,`param`,internet,ott1,ott2,paket_harga,diskon,total_harga_diskon, hssp_type, recom_speed, blast, speed_tertinggi, status_hd) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason',
			'$ket','$follow','Not Valid','New','$add','$login_qco','$nama','$area','$paket_streaming','$speed_asal','$speed_tujuan','$param','$internet','$ott1','$ott2','$paket_harga','$diskon','$total_harga_diskon','$hssp_type','$recom_speed','$blast','$speed_tertinggi','0')";
			
			$query = mysqli_query($con,$sql);
			//echo $sql;
			clearstatcache();
			$location="list_follow.php";		
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
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
							<h4 class="title">CWC <small>Form Input Follow Netflix<?php echo $nama; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='form_follow_netflix.php?id=<?php echo "$id";?>' method='post' accept-charset='UTF-8'>
				<?php
							$sql_wo_netflix = "SELECT * FROM app_tam_data2 WHERE `login`='$login' AND `id`='$id'";
							$query_wo_netflix = mysqli_query($con, $sql_wo_netflix);
							// print_r($sql_wo_netflix);
							while ($data_wo = mysqli_fetch_array($query_wo_netflix)) {
								if($data_wo['hssp_type'] == 'hssp1') {
									$hssp = $data_wo['hssp_type'];
									if($data_wo['speed_tertinggi']=='10240'){
										$speed_inet_awal = 10;
									}
									elseif($data_wo['speed_tertinggi']=='102400'){ 
										$speed_inet_awal = 100;
									}
									elseif($data_wo['speed_tertinggi']=='20480'){ 
										$speed_inet_awal = 20;
									}
									elseif($data_wo['speed_tertinggi']=='30720'){ 
										$speed_inet_awal = 30;
									}
									elseif($data_wo['speed_tertinggi']=='51200'){ 
										$speed_inet_awal = 50;
									}
								}
								else if($data_wo['hssp_type'] == 'hssp2') {
									$hssp = $data_wo['hssp_type'];
									if($data_wo['recom_speed']=='10240'){
										$speed_inet_awal = 10;
									}
									elseif($data_wo['recom_speed']=='102400'){ 
										$speed_inet_awal = 100;
									}
									elseif($data_wo['recom_speed']=='20480'){ 
										$speed_inet_awal = 20;
									}
									elseif($data_wo['recom_speed']=='30720'){ 
										$speed_inet_awal = 30;
									}
									elseif($data_wo['recom_speed']=='51200'){ 
										$speed_inet_awal = 50;
									}
								}
						?>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">No Fastel</label>
					<input class="form-control"
						   type="text"
						   name="fastel"
						   value="<?php echo $fastel; ?>"
						   placeholder="masukkan no fastel"	
						   onkeypress="return isNumberKey(event)"
						   required readonly
					/>
					<input class="form-control"
						   type="hidden"
						   name="login_user_qco"										  
						   value="<?php echo $login; ?>"
						   readonly
						   required readonly
					/>
					</div>
					</div>					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Nama DM/Pemilik</label>
					<input class="form-control"
						   type="text"
						   name="nama_dm"
						   value="<?php echo $nama_dm; ?>"
						   placeholder="masukkan nama pemilik"
						   required readonly
					/>
					</div>
					</div>	
					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">No CP</label>
					<input class="form-control"
						   type="text"
						   name="tlp"
						   value="<?php echo $tlp; ?>"
						   placeholder="masukkan no telepon"	
						   onkeypress="return isNumberKey(event)"
						   required readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Regional</label>
					<select id="se1" name="reg" class="form-control" value="<? echo $reg;?>" readonly> 
					<option value="">Pilih Regional</option>
					<option value="I"<?php if($reg=="I") {echo "selected";}?>> I </option>
					<option value="II"<?php if($reg=="II") {echo "selected";}?>> II </option>
					<option value="III"<?php if($reg=="III") {echo "selected";}?>> III </option>
					<option value="IV"<?php if($reg=="IV") {echo "selected";}?>> IV </option>
					<option value="V"<?php if($reg=="V") {echo "selected";}?>> V </option>
					<option value="VI"<?php if($reg=="VI") {echo "selected";}?>> VI </option>
					<option value="VII"<?php if($reg=="VII") {echo "selected";}?>> VII </option>
					</select>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">				
					<label class="control-label">Campaign/Rule</label>
					<select  name="jenis" class="form-control" onChange="document.demoform.submit()" readonly>
					<option value=" ">Pilih Campaign</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT * FROM app_tam_jenis WHERE `aktif`='1'");						
						$k=1;
						while ($rsk=mysqli_fetch_row($qsk))
						{
						if ($rsk[1]==$jenis){$sel="selected";$id_jenis=$rsk[0];}else{$sel="";}
						echo "<option value=\"$rsk[1]\" $sel> $rsk[1] </option>";
						$k++;
						}
					?>
					</select>
					</div>
					</div>	
					<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">HSSP TYPE</label>
										<input class="form-control" type="text" name="hssp_type" value="<?php echo $data_wo['hssp_type']; ?>" placeholder="HSSP Type" required  readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Speed Tertinggi</label>
										<input class="form-control" type="text" name="speed_tertinggi" id="speed_tertinggi" value="<?php echo $data_wo['speed_tertinggi']; ?>" placeholder="Speed Tertinggi" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Recommended Speed Offer</label>
										<input class="form-control" type="text" name="recom_speed" id="recom_speed" value="<?php echo $data_wo['recom_speed']; ?>" placeholder="Recommended Speed Offer" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Blast</label>
										<input class="form-control" type="text" name="blast" id="blast" value="<?= $data_wo['blast'] ?>" placeholder="Blast" required  readonly/>
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
											<input class="form-control" type="text" name="diskon" value="<?=(($data_wo['diskon'] == "")?'0':$data_wo['diskon']); ?>" placeholder="Masukkan Diskon" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' readonly/>
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
				</div>
				<input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value="Reset">
		<input type="submit" name="Save" class="btn btn-danger" value="Save"<?php if ( $status=='' ){ ?> disabled<?php } else if ( $status=='Contacted Recall' && $kategori=="" && $ket==""){ ?> disabled <?} else if ( $status=='Not Contacted' && $kategori==""){ ?> disabled<?php } else if ($status=="Contacted" && ($kategori=="" || $reason=="" )){?> disabled<?php }else if ($status=="Follow Up Recall" && $kategori=="" ){?> disabled<?php }?>>
		<input name="back" type="submit"class="btn btn-danger" Value="Back" value="back">
				<?php
				}
				?>
                
				</form>
				<?php 

				if (isset($_POST['Save']) ){echo "test"; }
				
				
				?>
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
						$query_login = "SELECT * FROM app_paket_stream WHERE speed_asal = '$speed_inet_awal' AND paket_streaming LIKE '$hssp%'";
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

<?php	require_once("../deft_foo.php"); ?>