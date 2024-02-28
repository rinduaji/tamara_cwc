<?php
require_once("../deft_nav.php");
//include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$con=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");
$tgl = date("Y-m-d H:i:s");
$date_now = date("Y-m-d");
$hari_ini = date("d");
$bulan_ini = date("m");
$tahun_ini = date("Y");
$blnin=array('','JANUARI','FEBRUARI','MARET','APRIL','MEI','JUNI','JULI','AGUSTUS','SEPTEMBER','OKTOBER','NOVEMBER','DESEMBER');
$query_tampil = "SELECT b.login,a.user2,a.user3,a.user5,b.pola,c.masuk,c.pulang,c.ist1,c.ist2,c.ist3,c.ist4 
FROM cc147_main_users_extended as a INNER JOIN app_tam_roosterfix as b ON a.user1=b.login INNER JOIN 
  app_tam_master_pola as c ON c.pola=b.pola WHERE b.login='$login' AND b.tgl_masuk='$date_now' AND b.pola <> 'X' AND b.pola <> 'CT'";
$hasil_tampil=mysqli_query($con,$query_tampil);
$row_tampil=mysqli_fetch_row($hasil_tampil);
// print_r($row_tampil);

$sql1="select * from app_tam_roosterfix where login='$login' AND tgl_masuk='$date_now' AND pola <> 'X' AND pola <> 'CT'";
	//echo "$sql";
$hasil1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_row($hasil1);
$id_rooster = $row1[0];

$sql="select * from app_tam_absen where username='$login' AND DAY(date_absen)='$hari_ini' AND MONTH(date_absen)='$bulan_ini' AND YEAR(date_absen)='$tahun_ini' AND keterangan='IN'";
//echo "$sql";
$hasil=mysqli_query($con,$sql);
$row=mysqli_fetch_row($hasil);
$cekButton = $row[3];

$sqlAbsenPulang="select * from app_tam_absen where username='$login' AND DAY(date_absen)='$hari_ini' AND MONTH(date_absen)='$bulan_ini' AND YEAR(date_absen)='$tahun_ini' AND keterangan='OUT'";
//echo "$sqlAbsenPulang";
$hasilAbsenPulang=mysqli_query($con,$sqlAbsenPulang);
$rowPulang=mysqli_fetch_row($hasilAbsenPulang);
$cekButtonPulang = $rowPulang[3];

$sqlcekabsen="select * from app_tam_absen where username='$login' AND keterangan='OUT' AND id_rooster=$id_rooster";
//echo "$sql";
// print_r($sqlcekabsen); 
$cekabsen=mysqli_query($con,$sqlcekabsen);
$totalcekabsen=mysqli_num_rows($cekabsen);
// print_r(($cekButton));
// die();
if($totalcekabsen > 0) {
	echo "<script>alert('Anda sudah absen hari ini Absen.');</script>";
}
else {
if(isset($save) AND isset($status)) {
	//echo "$txtlogin";
	if ($row[0]<>''){
		echo "<script>alert('Gagal Absen Masuk.');window.location='absen.php';</script>";
	}
	else{
	if(isset($rule)){

		$sql3="INSERT INTO app_tam_absen (username, id_rooster, status, date_absen, keterangan, area, jabatan,rule,wfh_wfo) 
									VALUES ('$login', $id_rooster, '$status', '$tgl', 'IN', '$area', '$jabatan', '$rule', '$wfh_wfo')";
	}
	else{
		$sql3="INSERT INTO app_tam_absen (username, id_rooster, status, date_absen, keterangan, area, jabatan, wfh_wfo) 
									VALUES ('$login', $id_rooster, '$status', '$tgl', 'IN', '$area','$jabatan','$wfh_wfo')";
	}
	
	//echo $sql3."<br>";

	if(!mysqli_query($con,$sql3)) {
		echo "<script>alert('Gagal Absen Masuk.');window.location='absen.php';</script>";
	} 
	else {
		echo "<script>alert('Absen Masuk Berhasil.');window.location='absen.php';</script>";
	}
   
	}
}

if(isset($savePulang) AND isset($status)) {
	//echo "$txtlogin";
	if ($rowPulang[0]<>''){
		echo "<script>alert('Gagal Absen Pulang.');window.location='absen.php';</script>";
	}
	else{
   
	if(isset($rule)){
	$sql3="INSERT INTO app_tam_absen (username, id_rooster, status, date_absen, keterangan, area, jabatan, wfh_wfo,rule,wfh_wfo) 
									VALUES ('$login', $id_rooster, '$status', '$tgl', 'OUT', '$area', '$jabatan', '$rule', '$wfh_wfo')";
	}
	else {
		$sql3="INSERT INTO app_tam_absen (username, id_rooster, status, date_absen, keterangan, area, jabatan, wfh_wfo) 
		VALUES ('$login', $id_rooster, '$status', '$tgl', 'OUT', '$area','$jabatan','$wfh_wfo')";	
	}
	//echo $sql3."<br>";

	if(!mysqli_query($con,$sql3)) {
		echo "<script>alert('Gagal Absen Pulang.');window.location='absen.php';</script>";
	} 
	else {
		echo "<script>alert('Absen Pulang Berhasil.');window.location='absen.php';</script>";
	}
   
	}
}
// print($query_tampil);
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
							<h4 class="title">ABSENSI</h4><br>
							
							

						</div>
				
				<form id='input' name="demoform" action='' method='post' accept-charset='UTF-8'>
					<input class="form-control"
						   type="hidden"
						   name="status"	
						   value="1"
					/>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">login</label><br>
					<input class="form-control"
						   type="text"
						   name="login"	
						   value="<?php echo $row_tampil[0]; ?>"										   
						   placeholder="masukkan login"	
						   onkeypress=""
						   readonly
					/>
					
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama</label>
					<input class="form-control"
						   type="text"
						   name="nama"
						   value="<?php echo $row_tampil[1]; ?>"
						   placeholder="masukkan Nama"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Jabatan</label>
					<input class="form-control"
						   type="text"
						   name="jabatan"
						   value="<?php echo $row_tampil[2]; ?>"
						   placeholder="masukkan jabatan"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Area</label>
					<input class="form-control"
						   type="text"
						   name="area"
						   value="<?php echo $row_tampil[3]; ?>"
						   placeholder="masukkan area"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Pola</label>
					<input class="form-control"
						   type="text"
						   name="pola"
						   value="<?php echo $row_tampil[4]; ?>"
						   placeholder="masukkan pola"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Masuk</label>
					<input class="form-control"
						   type="text"
						   name="masuk"
						   value="<?php echo $row_tampil[5]; ?>"
						   placeholder="masukkan masuk"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Pulang</label>
					<input class="form-control"
						   type="text"
						   name="pulang"
						   value="<?php echo $row_tampil[6]; ?>"
						   placeholder="masukkan pulang"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Istirahat 1</label>
					<input class="form-control"
						   type="text"
						   name="istirahat1"
						   value="<?php echo $row_tampil[7]; ?>"
						   placeholder="masukkan istirahat1"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Istirahat 2</label>
					<input class="form-control"
						   type="text"
						   name="istirahat2"
						   value="<?php echo $row_tampil[8]; ?>"
						   placeholder="masukkan istirahat2"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Istirahat 3</label>
					<input class="form-control"
						   type="text"
						   name="istirahat3"
						   value="<?php echo $row_tampil[9]; ?>"
						   placeholder="masukkan istirahat3"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Istirahat 4</label>
					<input class="form-control"
						   type="text"
						   name="istirahat4"
						   value="<?php echo $row_tampil[10]; ?>"
						   placeholder="masukkan istirahat4"	
						   onkeypress=""
						   readonly
					/>
					</div>
					</div>
					<?php
					if($row_tampil[2] == "Agent TAM" && $cekButton != "1") {
					?>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Rule</label>
					<select class="form-control" name="rule" id="rule" required>
                                    <option value="">-- Pilih Rule --</option>
                                    <?php 
										
											$query_jenis = "SELECT * FROM app_tam_jenis WHERE aktif='1'";
                                        $hasil_jenis = mysqli_query($con, $query_jenis) or die("Query gagal!");
                                        while ($data_jenis = mysqli_fetch_array($hasil_jenis)) {
											if($data_jenis['keterangan'] == "P2P") {
												?>
												<option value="<?=$data_jenis['keterangan']?> REGULER" ><?=$data_jenis['keterangan']?> REGULER</option>
												<option value="<?=$data_jenis['keterangan']?> CROSS" ><?=$data_jenis['keterangan']?> CROSS</option>
											<?php
											}
											else {
                                    ?>
                                        <option value="<?=$data_jenis['keterangan']?>" ><?=$data_jenis['keterangan']?></option>
                                    <?php
											}
                                        }
                                    ?>
                                 </select>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Status Kehadiran</label>
					<select class="form-control" name="wfh_wfo" id="wfh_wfo" required>
                        <option value="">-- Pilih Status Kehadiran --</option>
                        <option value="WFO" >WFO</option>
						<option value="WFH" >WFH</option>
					</select>
					</div>
					</div>
					<?php
						}
					?>
					</div>
					
				</div>
				</div>
				<?php
					if($row_tampil != NULL) {
						if($row_tampil[4] != "X" || $row_tampil[4] != "CT") {
				?>
				<input type="submit" name="save" class="btn btn-info" value="ABSEN MASUK" <?=($cekButton) ? 'disabled' : 'enabled'?>>
				<input type="submit" name="savePulang" class="btn btn-danger" value="ABSEN PULANG" <?=($cekButtonPulang == 1 && $cekButton == 1) ? 'disabled' : ($cekButton == NULL) ? 'disabled' : 'enabled'?>>
				<?php
						}
					}
				?>
				</form>
				
				</div>
				</div>	

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>