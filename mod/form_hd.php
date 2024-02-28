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

$query_dwh="SELECT * FROM app_tam_data2 WHERE id = '$id'";
//echo $query;
$hasil_dwh = mysqli_query($con,$query_dwh);
$data_dwh = mysqli_fetch_array($hasil_dwh);

$query="SELECT * FROM app_tam_data2 WHERE id = '$id'";
// echo $query;
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);


if (isset($_POST['approve']) ){
    // print_r($add_on_tsel);
    $update_sql = "INSERT INTO app_approve_netflix (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,ket,follow,valid,input,selisih_harga,nama_agent,area,
    paket_steaming,speed_asal,speed_tujuan,`param`,internet,ott1,ott2,paket_harga,diskon,total_harga_diskon, tgl_qco1, upd_qco, hd_fu, inputer, hasil_inputer, ket_hd, upd) VALUES ('$tgl','$login_agent','$nama_dm',
    '$tlp','$status','$reg','$fastel','$penerima','$jenis','$kategori',
    '$ket','$follow','$valid','New','$add_on_tsel','$nama_agent','$area','$paket_steaming','$speed_asal','$speed_tujuan','$param','$internet','$ott1','$ott2',
    '$paket_harga','$diskon','$total_harga_diskon', '$tgl_qco1', '$upd_qco', '$hd_fu', '$inputer', '$hasil_inputer', '$ket_hd', '$upd')";
    // print($update_sql);
	$query_update=mysqli_query($con,$update_sql);

	$sql="UPDATE `app_tam_data2` SET status_hd='1' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="list_hd.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}

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
							<h4 class="title">Data Approve Netflix HD</h4>	
						</div>
				
				<form id='input' name="demoform" action='form_hd.php?id=<?php echo "$ids";?>' method='post' accept-charset='UTF-8'>
                    <input class="form-control"
						   type="hidden"
						   name="upd"										  
						   value="<?php echo $login; ?>"
						   readonly
					/>
					<div>
					<div class="row">
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Tanggal Agree</label><br>
					<input class="form-control"
						   type="text"
						   name="tgl"										  
						   value="<?php echo $data['tgl']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Login Agent</label><br>
					<input class="form-control"
						   type="text"
						   name="login_agent"										  
						   value="<?php echo $data['login']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama Agent</label><br>
					<input class="form-control"
						   type="text"
						   name="nama_agent"										  
						   value="<?php echo $data['nama_agent']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Site</label><br>
					<input class="form-control"
						   type="text"
						   name="area"	
						   value="<?php echo $data['area']; ?>"
						   readonly						   
					/>					
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">No Fastel</label>
					<input class="form-control"
						   type="text"
						   name="fastel"
						   value="<?php echo $data['fastel']; ?>"
						   readonly
					/>
					</div>
					</div>					
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama Pemilik</label>
					<input class="form-control"
						   type="text"
						   name="nama_dm"
						   value="<?php echo $data['nama_dm']; ?>"
						   readonly
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">No Telepon</label>
					<input class="form-control"
						   type="text"
						   name="tlp"
						   value="<?php echo $data['tlp']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Regional</label>
					<input class="form-control"
						   type="text"
						   name="reg"
						   value="<?php echo $data['reg']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Jenis Call</label>
					<input class="form-control"
						   type="text"
						   name="jenis"
						   value="<?php echo $data['jenis']; ?>"
						   readonly
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">				
					<label class="control-label" style="color:#008B8B">Status call</label>
					<input class="form-control"
						   type="text"
						   name="status"
						   value="<?php echo $data['status']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Kategori</label>
					<input class="form-control"
						   type="text"
						   name="kategori"
						   value="<?php echo $data['kategori']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama Penerima</label>
					<input class="form-control"
						   type="text"
						   name="penerima"
						   value="<?php echo $data['penerima']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					
					
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Selisih Harga</label>
					<input class="form-control"
						   type="text"
						   name="add_on_tsel"
						   value="<?php echo $data['add_on_tsel']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Tanggal QCO</label>
					<input class="form-control"
						   type="text"
						   name="tgl_qco1"
						   value="<?php echo $data['tgl_qco1']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Login QCO</label>
					<input class="form-control"
						   type="text"
						   name="upd_qco"
						   value="<?php echo $data['upd_qco']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Status Validasi</label>
					<input class="form-control"
						   type="text"
						   name="valid"
						   value="<?php echo $data['valid']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Speed Asal</label>
					<input class="form-control"
						   type="text"
						   name="speed_asal"
						   value="<?php echo $data['speed_asal']; ?>"
						   required
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Speed Tujuan</label>
					<input class="form-control"
						   type="text"
						   name="speed_tujuan"
						   value="<?php echo $data['speed_tujuan']; ?>"
						   required
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Param di Metranet</label>
					<input class="form-control"
						   type="text"
						   name="param"
						   value="<?php echo $data['param']; ?>"
						   required
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Internet</label>
					<input class="form-control"
						   type="text"
						   name="internet"
						   value="<?php echo $data['internet']; ?>"
						   required
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">OTT1</label>
					<input class="form-control"
						   type="text"
						   name="ott1"
						   value="<?php echo $data['ott1']; ?>"
						   required
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">OTT2</label>
					<input class="form-control"
						   type="text"
						   name="ott2"
						   value="<?php echo $data['ott2']; ?>"
						   required
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Paket Harga</label>
					<input class="form-control"
						   type="text"
						   name="paket_harga"
						   value="<?php echo $data['paket_harga']; ?>"
						   required
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Paket Streaming</label>
					<input class="form-control"
						   type="text"
						   name="paket_steaming"
						   value="<?php echo $data['paket_steaming']; ?>"
						   required
					/>
					</div>
					</div>
					
					</div>	
                    <div class="row">
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Diskon</label>
					<input class="form-control"
						   type="text"
						   name="diskon"
						   value="<?php echo $data['diskon']; ?>"
						   required
					/>
					</div>
					</div>
                    <div class="col-md-3">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Total Harga Diskon</label>
					<input class="form-control"
						   type="text"
						   name="total_harga_diskon"
						   value="<?php echo $data['total_harga_diskon']; ?>"
						   required
					/>
					</div>
					</div>
					
					</div>
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Keterangan Agent</label>
					<textarea class="form-control" name="ket"  rows="5" ><?php echo $data['ket'];?></textarea>
					</div>
					</div>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="color:#008B8B">Follow Up HD</label>
                        <select id="hd_fu" name="hd_fu" class="form-control">
                            <option value="">--- Pilih Follow Up HD ---</option>
                            <option value="Paket Tidak Tersedia"> Paket Tidak Tersedia </option>
                            <option value="Isolir"> Isolir </option>
                            <option value="Sedang Ada Permintaan Berlangsung"> Sedang Ada Permintaan Berlangsung </option>
                            <option value="Sudah Berlangganan Netflix"> Sudah Berlangganan Netflix </option>
                            <option value="ND Tidak Ditemukan"> ND Tidak Ditemukan </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Inputer</label>
					<input class="form-control"
						   type="text"
						   name="inputer"
						   value="<?php echo $data['inputer']; ?>"
						   
					/>
					</div>
					</div>
                    <div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Hasil Inputer</label>
					<input class="form-control"
						   type="text"
						   name="hasil_inputer"
						   value="<?php echo $data['hasil_inputer']; ?>"
						   
					/>
					</div>
					</div>
                <div class="col-md-12">
                <div class="form-group">
                <label class="control-label" style="color:#008B8B">Keterangan HD</label>
                <textarea class="form-control" name="ket_hd"  rows="5" ></textarea>
                </div>
                
				</div>
				</div>
				
				<input type="submit" id="approve" name="approve" class="btn btn-primary" value="APPROVE">
                
				</form>
				
				</div>
				</div>	

				</div>
			</div>
		</div>
        
<?php	require_once("../deft_foo.php"); ?>