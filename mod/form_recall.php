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
if($chanel==''){$prof_agama=$data[32];}
if($sub_chanel==''){$prof_facebook=$data[33];}
if($add==''){$add=$data[34];}
if($reg==''){$reg=$data[7];}
if($add_on_wifi==''){$add_on_wifi=$data[36];}
if($id_jenis==''){$id_jenis=$data[37];}
	
if (isset($_POST['back']) ){
	clearstatcache();
	$location="list_recall.php";
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	}
	
if (isset($_POST['Save']) ){
	// status call: not connect	
	if($status=="Not Contacted" || $status=="Follow Up Recall")
		{   
			if ($fastel==""  or $login=="" or $nama_dm=="" or $reg=="" or $tlp=="" or $status=="" or $jenis=="" or $kategori=="")
			{	
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			}else{
				$sql="UPDATE `app_tam_data2` SET `follow`='1'  WHERE (`id`='$id')";
				$query=mysqli_query($con,$sql);
				
				$sql="INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,upd_qco,valid,input,add_on_tsel,nama_agent,area) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason','$kets','5','$upd_qco','Not Valid','Recall','$add','$nama','$area')";
				
				//echo $sql;
				$query = mysqli_query($con,$sql);
				clearstatcache();
				$location="list_recall.php";		
				echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
			}
		}
		// status call: connect
	else if($status=="Contacted")
	{
		if ($kategori == "Follow UP") { $fol = 5; $input ="Recall";} else { $fol = 2; $input ="Recall";}
		if ( $fastel==""  or $login=="" or $nama_dm=="" or $reg=="" or $tlp=="" or $status=="" or $jenis=="" or $kategori=="" or $reason=="" or $kets=="" or $follow=="" or $add=="")
		{	
		echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
		}else{  
			$sql="UPDATE `app_tam_data2` SET `follow`='1'  WHERE (`id`='$id')";
			$query=mysqli_query($con,$sql);
					
			$sql="INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,upd_qco,valid,input,add_on_tsel,nama_agent,area,biaya_bulan,alamat_instalasi,email) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori','$reason','$kets','$fol','$upd_qco','Not Valid','Recall','$add','$nama','$area','$biaya_bulan','$alamat_instalasi','$email')";
			$query = mysqli_query($con,$sql);
			//echo $sql;
			clearstatcache();
			$location="list_recall.php";		
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
							<h4 class="title">CWC <small>Form Input Recall <?php echo $nama; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='form_recall.php?id=<?php echo "$id";?>' method='post' accept-charset='UTF-8'>
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
						   required
					/>
					<input class="form-control"
						   type="hidden"
						   name="login"										  
						   value="<?php echo $login; ?>"
						   readonly
						   required
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
						   required
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
						   required
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Regional</label>
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
					<label class="control-label">Campaign/Rule</label>
					<select  name="jenis" class="form-control" onChange="document.demoform.submit()">
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
					<label class="control-label">Status Call</label>
					<select name="status" class="form-control" onChange="document.demoform.submit()">
					<option value=" ">Pilih Status call</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT * FROM app_tam_status WHERE `jenis`= '$id_jenis' and `aktif`='1'");
						
						$k=1;
						while ($rsk=mysqli_fetch_row($qsk))
						{
						if ($rsk[2]==$status){$sel="selected";$id_status=$rsk[1];}else{$sel="";}
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
					<label class="control-label">Kategori</label>
					<select name="kategori" class="form-control" onChange="document.demoform.submit()">
					<option value=" ">Pilih Status call</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT * FROM app_tam_kategori WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `aktif`='1'");
						
						$k=1;
						while ($rsk=mysqli_fetch_row($qsk))
						{
						if ($rsk[3]==$kategori){$sel="selected"; $id_kategori=$rsk[2];}else{$sel="";}
						echo "<option value=\"$rsk[3]\" $sel> $rsk[3] </option>";
						$k++;
						}
					?>					
					</select>
					</div>
					</div>
					
					
					<?php if( $status == "Contacted"){?>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Reason Call</label>
					<select name="reason" class="form-control" onChange="document.demoform.submit()">
					<option value=" ">Pilih Reason Call</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");
						
						$k=1;
						while ($rsk=mysqli_fetch_row($qsk))
						{
						if ($rsk[4]==$reason){$sel="selected";$follow=$rsk[6];}else{$sel="";}
						echo "<option value=\"$rsk[4]\" $sel> $rsk[4]</option>";
						$k++;
						}
					?>
					</select>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Selisih Harga</label>
					<input class="form-control"
						   type="text"
						   name="add"
						   value="<?php echo $add; ?>"
						   placeholder="Masukkan Selisih Harga"	
						   onkeypress="return isNumberKey(event)"
						   required
					/>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Nama Penerima</label>
					<input class="form-control"
						   type="text"
						   name="penerima"
						   value="<?php echo $penerima; ?>"
						   placeholder="Masukkan Nama Penerima"	
						   required
					/>
					</div>
					</div>		
					<?php if ($status == "Contacted" and $jenis == "PSB IH JITU" or $jenis == "PSB IH DYNAMIC") { ?>
									<div class="col-md-4">
										<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kisaran Biaya Telekomunikasi Per Bulan?</label>
											<input class="form-control" type="text" name="biaya_bulan" value="<?php echo $biaya_bulan; ?>" placeholder="Masukkan Biaya Bulan" id="biaya_bulan" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat Instalasi</label>
											<input class="form-control" type="text" name="alamat_instalasi" value="<?php echo $alamat_instalasi; ?>" placeholder="Masukkan Alamat Instalasi" id="alamat_instalasi" />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										<label class="control-label" style="color:#008B8B">Email</label>
											<input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="Masukkan Email" id="email" />
										</div>
									</div>
					<?php } ?>			
					<!-- <div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Chanel NBA</label>
					<select id="se2" name="chanel" class="form-control" onChange="document.demoform.submit()">
					<option value="">Pilih Chanel NBA</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT  distinct nba FROM app_tam_nba");
						
						$k=1;
						while ($rsk1=mysqli_fetch_row($qsk))
						{
						
						if ($rsk1[0]==$chanel){$sel="selected";}else{$sel="";}
						echo "<option value=\"$rsk1[0]\" $sel> $rsk1[0]</option>";
						$k++;
						}
					?>				
					</select>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Sub Chanel NBA</label>
					<select name="sub_chanel" class="form-control">
					<option value="">Pilih Sub Chanel NBA</option>
					<?php  
						$qska=mysqli_query($con,"SELECT sub_nba FROM app_tam_nba WHERE `nba`= '$chanel'");
						$k=1;
						while ($rska=mysqli_fetch_row($qska))
						{
						if ($rska[0]==$sub_chanel){$sel="selected"; $sub_chanel=$rska[0];}else{$sel="";}
						echo "<option value=\"$rska[0]\" $sel> $rska[0] </option>";
						$k++;
						}
					?>						
					</select>
					</div>
					</div>					 -->
					</div>
					
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Keterangan (Tidak boleh ada tanda " dan ')</label>
					<textarea class="form-control" name="kets" rows="5" value="<?php echo $ket;?>"></textarea>
					</div>
					</div>
					<?php }if ( $status == "Follow Up Recall" || $status=="Not Contacted"){?>
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Keterangan</label>
					<textarea class="form-control" name="ket" rows="5" value="<?php echo $ket;?>"></textarea>
					</div>
					</div>
					<?php }?>
					<input class="form-control"
						   type="hidden"
						   name="follow"										  
						   value="<?php echo $follow; ?>"
						   readonly
						   required
					/>
				</div>
				</div>
				<input type="reset" class="btn btn-danger" onClick="formReset('form'); return false; value="Reset">
		<input type="submit" name="Save" class="btn btn-danger" value="Approve"<?php if ( $status=='' ){ ?> disabled<?php } else if ( $status=='Contacted Recall' && $kategori=="" && $ket==""){ ?> disabled <?} else if ( $status=='Not Contacted' && $kategori==""){ ?> disabled<?php } else if ($status=="Contacted" && ($kategori=="" || $reason=="" )){?> disabled<?php }else if ($status=="Follow Up Recall" && $kategori=="" ){?> disabled<?php }?>>
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
<?php	require_once("../deft_foo.php"); ?>