<?php
require_once("../deft_nav.php");
//include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
//$login = $_SESSION['username'];
//$nama = $_SESSION['name'];
$con=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");
$tgl = date("Y-m-d H:i:s");
$blnin=array('','JANUARI','FEBRUARI','MARET','APRIL','MEI','JUNI','JULI','AGUSTUS','SEPTEMBER','OKTOBER','NOVEMBER','DESEMBER');

$servername_moniqa = "10.194.176.158";
$username_moniqa = "appdev";
$password_moniqa = "appdev123";
$database_moniqa = "kinerja_tam";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$conn = @mysqli_connect("$servername_moniqa", "$username_moniqa", "$password_moniqa", "$database_moniqa");
//cek koneksi error atau tidak
if (!$conn) {
	echo "Error: " . mysqli_connect_error();
	exit();
}

if($save){
	
	$username = $txtlogin;

	$sql="select user_id,username from cc147_main_users where username='$username' ";
    $hasil=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($con,$hasil);
	$total_cwc = mysqli_num_rows($hasil);

	$sql_ext="select user_id,user1 from cc147_main_users_extended where username='$username' ";
    $hasil_ext=mysqli_query($con,$sql_ext);
    $row_ext=mysqli_fetch_row($con,$hasil_ext);
	$total_cwc_ext = mysqli_num_rows($hasil_ext);

	
	$sql_moniqa="select user_id,username from cc147_main_users where username='$username' ";
    $hasil_moniqa=mysqli_query($conn,$sql_moniqa);
    $row_moniqa=mysqli_fetch_row($conn,$hasil_moniqa);
	$total_moniqa = mysqli_num_rows($hasil_moniqa);

	$sql_moniqa_ext="select user_id,user1 from cc147_main_users_extended where username='$username' ";
    $hasil_moniqa_ext=mysqli_query($conn,$sql_moniqa_ext);
    $row_moniqa_ext=mysqli_fetch_row($conn,$hasil_moniqa_ext);
	$total_moniqa_ext = mysqli_num_rows($hasil_moniqa_ext);

	if(($total_moniqa == 0) AND ($total_cwc == 0) AND ($total_moniqa_ext == 0) AND ($total_cwc_ext == 0)) {
		if ($row[0]<>''){
			$rep="Penambahan cc147_main_users gagal.<br>";
		}
		else{
			$nama=$txtnama;
			$qco=$txtqco;
			$tl=$txttl;
			$spv=$txtspv;
			$email = $username."@cctelkom.web.id";
			$password = md5('infomedia');
			$sekarang=date("Y-m-d H:i:s");
			$bulanrek=date("n");
			$tahunrek=date("Y");
			$sarea=$area;
			$skelompok='43';
			$mktime=mktime();
			
			if($sjabat == "Agent TAM" || $sjabat == "Tabber TAM") {
				
			$sql3="INSERT INTO cc147_main_users (username, name, qco, tl, spv, user_email, user_password, user_regdate, user_avatar, user_quiz, user_use, perner) 
											VALUES ('$username', '$nama', '$qco', '$tl', '$spv', '$email', '$password','$mktime' , 'gallery/blank.gif', '0', '0', '$perner')";
											// print_r($sql3);
											// die();
			}
			else {
				$sql3="INSERT INTO cc147_main_users (username, name, qco, tl, spv, user_email, user_password, user_regdate, user_avatar) 
				VALUES ('$username', '$nama', '$qco', '$tl', '$spv', '$email', '$password','$mktime' , 'gallery/blank.gif')";
			}
			
			//echo $sql3."<br>";

			if(!mysqli_query($con,$sql3)) {
				$rep="Penambahan cc147_main_users gagal.<br>";
				$erorr = 'Data Gagal Tersimpan1!';
			}
			
				$sql="select user_id from cc147_main_users where username='$username'";
				$hasil=mysqli_query($con,$sql);
				$row=mysqli_fetch_row($hasil);
				$id_cc147_main_user=$row[0];
				
			
			$sql4="INSERT INTO cc147_main_users_extended (id, user_id, user1,user2,user3,user4,user5,user12,user13) 
			values ('$id_cc147_main_user','$id_cc147_main_user','$txtlogin','$nama','$sjabat','$skelamin','$sarea','nopict.jpg','AKTIF')";
			if(!mysqli_query($con,$sql4)) {
				$rep="Penambahan cc147_main_users_extended gagal.<br>";
				$erorr = 'Data Gagal Tersimpan2!';
			}
			//echo $sql4."<br>";

			$sql6="insert into cc147_main_bbuser_group values ('$skelompok','$id_cc147_main_user','0')";
			if(!mysqli_query($con,$sql6)) {
				$rep="Penambahan cc147_main_bbuser_group gagal.<br>";
				$erorr = 'Data Gagal Tersimpan3!';
			}
			//echo $sql6."<br>";
				$jbt=substr($sjabat,0,5);
				if($jbt=='Agent'){
					$sql7="insert into app_kelompok values ('$blnin[$bulanrek]-$tahunrek','0','$id_cc147_main_user','0','$skelamin','0','$sjabat','auto','$sekarang')";
					//echo $sql7;
					if(!mysqli_query($con,$sql7)) {
						$rep="Penambahan app kelompok gagal.<br>";
						$erorr = 'Data Gagal Tersimpan4!';
					}
				}	

				
				$sql="select user_id from cc147_main_users where username='$username' ";
				
				$hasil=mysqli_query($conn,$sql);
				$row=mysqli_fetch_row($hasil);
				if ($row[0]=='') {
					
					$nama = $txtnama;
					$email = $username."@cctelkom.web.id";
					$user_tl = $txttl;
					$qco = $txtqco;
					$jabatan = $sjabat;

					if($skelamin=="laki-laki") {
						$gender = 'Pria';
					}
					else {
						$gender = 'Wanita';
					}
					

					$password = md5('infomedia');
					$sekarang=date("Y-m-d H:i:s");
					$bulanrek=date("n");
					$tahunrek=date("Y");
					$sarea=$area;
					$mktime=mktime();

					$sql3="INSERT INTO cc147_main_users (username, user_email, user_password,nama_tl,qco, user_regdate, user_avatar, name,user_allow_pm,user_allow_pm_file,user_active) 
							VALUES ('$username', '$email', '$password','$user_tl', '$qco', '$mktime' , 'gallery/blank.gif', '$nama', '0', '0','1')";
					if(!mysqli_query($conn,$sql3)) {
						$rep="Penambahan cc147_main_users gagal atau jangan pakai tanda petik untuk username"; 
						echo "<div id='sas' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  $rep !!</div>";
						$erorr = 'Data Gagal Tersimpan5!';
					}else{
						
						$sql="select user_id from cc147_main_users where username='$username'";
						
						$hasil=mysqli_query($conn,$sql);
						
						$row=mysqli_fetch_row($hasil);
						$id_cc147_main_user=$row[0];
						
						$sql4="INSERT INTO cc147_main_users_extended (id, user_id, user1,user2,user3,user4,user7,user12,user13) values ('$id_cc147_main_user','$id_cc147_main_user','$username','$nama','$jabatan','$gender','$area','nopict.jpg','AKTIF')";
						// print_r($sql4);
						//    echo $sql4;
						if(mysqli_query($conn,$sql4)) {
							$sukses = 'Data Sudah Tersimpan!';
						}
						else {
							$erorr = 'Data Gagal Tersimpan6!';
						}
					}
				}
		}
	}
	else {
		$erorr = 'Data Gagal Tersimpan - Username sudah ada!';
	}
	$txtlogin="";
    $txtnama="";
	$txtqco="";
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
	<style>
		.success {
			background-color: #28a745; /* Warna latar belakang hijau */
			color: #fff; /* Warna teks putih */
			padding: 10px; /* Padding untuk elemen */
			border-radius: 5px; /* Sudut melengkung */
			font-weight: bold; /* Teks tebal */
			text-align: center; /* Tengahkan teks */
		}

		.error {
			background-color: #dc3545; /* Warna latar belakang merah */
			color: #fff; /* Warna teks putih */
			padding: 10px; /* Padding untuk elemen */
			border-radius: 5px; /* Sudut melengkung */
			font-weight: bold; /* Teks tebal */
			text-align: center; /* Tengahkan teks */
		}
	</style>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
					<div class="card card-plain">
						<div class="header">
							<h4 class="title">CREATE USER<small>  CWC </small></h4>
							<?php
							if(isset($sukses)) {
							?>
								<div class="success">
									<?=$sukses?>
								</div>
							<?php
							} elseif(isset($erorr)) {
							?>
								<div class="error">
									<?=$erorr?>
								</div>
							<?php
							}
							?>
						</div>
				
				<form id='input' name="demoform" action='' method='post' accept-charset='UTF-8'>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">login</label><br>
					<input class="form-control"
						   type="text"
						   name="txtlogin"	
						   value="<?php echo $txtlogin; ?>"										   
						   placeholder="masukkan login"	
						   onkeypress=""
						   required
					/>
					
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Perner </label>
					<input class="form-control"
						   type="text"
						   name="perner"
						   value="<?php echo $perner; ?>"
						   placeholder="masukkan perner"	
						   onkeypress=""
						   required
					/>
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama</label>
					<input class="form-control"
						   type="text"
						   name="txtnama"
						   value="<?php echo $txtnama; ?>"
						   placeholder="masukkan Nama"	
						   onkeypress=""
						   required
					/>
					</div>
					</div>
					</div>
					
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Login Pengawakan QCO </label>
					<input class="form-control"
						   type="text"
						   name="txtqco"
						   value="<?php echo $txtqco; ?>"
						   placeholder="masukkan qco"	
						   onkeypress=""
						   required
					/>
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Login Pengawakan TL </label>
					<input class="form-control"
						   type="text"
						   name="txttl"
						   value="<?php echo $txttl; ?>"
						   placeholder="masukkan qco"	
						   onkeypress=""
						   required
					/>
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Login Pengawakan SPV </label>
					<input class="form-control"
						   type="text"
						   name="txtspv"
						   value="<?php echo $txtspv; ?>"
						   placeholder="masukkan qco"	
						   onkeypress=""
						   required
					/>
					</div>
					</div>
					</div>
												
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Jenis Kelamin</label>
					<select id="se1" name="skelamin" class="form-control" value="<? echo $skelamin;?>"> 
					<option value="">Jenis Kelamin</option>
					<option value="Pria"<?php if($skelamin=="laki-laki") {echo "selected";}?>> laki-laki </option>
					<option value="Wanita"<?php if($skelamin=="perempuan") {echo "selected";}?>> perempuan </option>
					
					</select>
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Area</label>
					<select id="se1" name="area" class="form-control" value=""> 
					<option value="">Area</option>
					<option value="BSD"<?php if($area=="BSD") {echo "selected";}?>> BSD </option>
					<option value="BANDUNG"<?php if($area=="BANDUNG") {echo "selected";}?>> BANDUNG </option>
					<option value="MEDAN"<?php if($area=="MEDAN") {echo "selected";}?>> MEDAN </option>
					<option value="MALANG"<?php if($area=="MALANG") {echo "selected";}?>> MALANG </option>
					<option value="MAKASSAR"<?php if($area=="MAKASSAR") {echo "selected";}?>> MAKASSAR </option>
					<option value="SEMARANG"<?php if($area=="SEMARANG") {echo "selected";}?>> SEMARANG </option>
					</select>
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">jabatan</label>
					<select id="se1" name="sjabat" class="form-control" onChange="document.form1.submit()"> 
					 <?php 
					        $sql="select distinct(kodejabatan) from app_jabatan where status='Aktif' ";
							$hasil=mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($hasil)){
								?>
					<option value="<?php echo $row[0];?>" <?php if($sjabat==$row[0]) {echo "selected";}?>> <?php echo $row[0];?> </option>

					        <?php 
					    	}
					        ?>
					</select>
					</div>
					</div>
					</div>
	
				</div>
				</div>
				<input type="reset" class="btn btn-info" onclick="formReset('form'); return false;"rep value="Reset">
				<input type="submit" name="save" class="btn btn-info" value="Simpan">
            
				</form>
				
				</div>
				</div>	

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>