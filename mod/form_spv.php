<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login_awal = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$ids=$id;
$login_TL = $login_awal;

$tgl = date("Y-m-d H:i:s");
$query="SELECT a.id,a.tgl,a.login,a.no_pelanggan,a.fastel,a.nama_dm,a.tlp,a.reg,a.jenis,a.`status`,a.kategori,a.reason,a.ket,b.`name`,a.rec_qco,a.upd_qco, a.id_return_tl  
FROM app_tam_data2 AS a INNER JOIN cc147_main_users AS b ON a.login = b.username WHERE a.id = '$id'";
//echo $query;
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);
//==============================cek handel=================================

// $query1 = "INSERT INTO app_tam_notif (username, deskripsi, status, fastel, tanggal, nama_rekom) VALUES ('$login1','$rekom_qa','1','$fastel',now(),'$nama_dm')";
//     mysqli_query($con, $query1);

if (isset($_POST['recall']) ){
if ($rec_tl=="") {
	//clearstatcache();
	$location="form_spv.php?id=$ids";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Rekomendasi yg anda masukkan belum lengkap!</div>";
}else{
	$sql="UPDATE `app_tam_data2` SET follow = '5' , `rec_tl`='$rec_tl', upd_tl='$uname' , tgl_tl='$tgl' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);

	$query1 = "INSERT INTO app_tam_notif_recall_agent (username, deskripsi, status, fastel, tanggal, nama_rekom) VALUES ('$login','Ada Data Return','1','$fastel',now(),'$nama')";
    mysqli_query($con, $query1);
	//clearstatcache();
	$location="myhandel.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	var_dump($_POST['recall']);
	echo "<script>window.location.href='approve.php';</script>";
}}
else if (isset($_POST['Save']) ){
if ($rec_tl=="") {
	//clearstatcache();
	$location="form_spv.php?id=$ids";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	
	echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Rekomendasi yg anda masukkan belum lengkap!</div>";
}else{
	$sql="UPDATE `app_tam_data2` SET follow = '2' , `rec_tl`='$rec_tl', upd_tl='$uname' , tgl_tl='$tgl' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	//clearstatcache();
	$location="myhandel.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<script>window.location.href='approve.php';</script>";
	
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
							<h4 class="title">Form SPV TAM</h4>	
						</div>
				
				<form id='input' name="demoform" action='form_spv.php?id=<?php echo "$ids";?>' method='post' accept-charset='UTF-8'>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Login Agent</label><br>
					<input class="form-control"
						   type="text"
						   name="login"										  
						   value="<?php echo $data['login']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Nama Agent</label><br>
					<input class="form-control"
						   type="text"
						   name="login"										  
						   value="<?php echo $data['name']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Tanggal</label><br>
					<input class="form-control"
						   type="text"
						   name="tgl"										  
						   value="<?php echo $data['tgl']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Alasan Return</label><br>
					<input class="form-control"
						   type="text"
						   name="pelanggan"	
						   value="<?php echo $data['id_return_tl']; ?>"
						   readonly						   
					/>					
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">No Fastel</label>
					<input class="form-control"
						   type="text"
						   name="fastel"
						   value="<?php echo $data['fastel']; ?>"
						   readonly
					/>
					</div>
					</div>					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Nama DM/Pemilik</label>
					<input class="form-control"
						   type="text"
						   name="nama_dm"
						   value="<?php echo $data['nama_dm']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">No Telepon</label>
					<input class="form-control"
						   type="text"
						   name="tlp"
						   value="<?php echo $data['tlp']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Regional</label>
					<input class="form-control"
						   type="text"
						   name="reg"
						   value="<?php echo $data['reg']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Jenis Call</label>
					<input class="form-control"
						   type="text"
						   name="jenis"
						   value="<?php echo $data['jenis']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">				
					<label class="control-label">Status call</label>
					<input class="form-control"
						   type="text"
						   name="status"
						   value="<?php echo $data['status']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Kategori</label>
					<input class="form-control"
						   type="text"
						   name="kategori"
						   value="<?php echo $data['kategori']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Reason Call</label>
					<input class="form-control"
						   type="text"
						   name="reason"
						   value="<?php echo $data['reason']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					
				
								
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Keterangan Agent</label>
					<textarea class="form-control" name="ket" readonly rows="5" ><?php echo $data['ket'];?></textarea>
					</div>
					</div>
					
					
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Rekomendasi QCO</label>
					<textarea class="form-control" name="ket" readonly rows="5" ><?php echo $data['rec_qco'];?></textarea>
					</div>
					</div>
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Rekomendasi TL</label>
					<textarea class="form-control" name="rec_tl"  rows="5" ></textarea>
					</div>
					</div>
				
				
				<div class="col-md-4">
				  <div class="form-group">
					<label class="control-label">Login QCO</label>
					<input class="form-control"
						   type="text"
						   name="updqco"										  
						   value="<?php echo $data['upd_qco']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<br>
					<br>
				<input type="submit" name="recall" class="btn btn-info" value="Recall Agent">
				<input type="submit" name="Save" class="btn btn-info" value="Approve to QCO">
				

				</form>
				
				</div>
				</div>	

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>