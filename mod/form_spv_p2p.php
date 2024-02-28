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
$query="SELECT * FROM app_tam_p2p AS a INNER JOIN cc147_main_users AS b ON a.login = b.username WHERE a.id = '$id'";
//echo $query;
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);

$query1="SELECT * FROM cc147_main_users WHERE username = '".$data['login']."'";
//echo $query;
$hasil1 = mysqli_query($con,$query1);
$data1 = mysqli_fetch_array($hasil1);
//==============================cek handel=================================

// $query1 = "INSERT INTO app_tam_notif (username, deskripsi, status, fastel, tanggal, nama_rekom) VALUES ('$login1','$rekom_qa','1','$no_inet',now(),'$nama_dm')";
//     mysqli_query($con, $query1);

if (isset($_POST['recall']) ){
if ($rec_tl=="") {
	//clearstatcache();
	$location="form_spv_p2p.php?id=$ids";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Rekomendasi yg anda masukkan belum lengkap!</div>";
}else{
	$sql="UPDATE `app_tam_p2p` SET follow = '5' , `rec_tl`='$rec_tl', upd_tl='".$data1['username']."' , tgl_tl='$tgl' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);

	// $query1 = "INSERT INTO app_tam_notif_recall_agent (username, deskripsi, status, fastel, tanggal, nama_rekom) VALUES ('$login','Ada Data Return','1','$no_inet',now(),'$nama')";
    // mysqli_query($con, $query1);
	//clearstatcache();
	$location="myhandel_p2p.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	// var_dump($_POST['recall']);
	echo "<script>window.location.href='approve_spv_p2p.php';</script>";
}}
else if (isset($_POST['Save']) ){
if ($rec_tl=="") {
	//clearstatcache();
	$location="form_spv_p2p.php?id=$ids";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	
	echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Rekomendasi yg anda masukkan belum lengkap!</div>";
}else{
	$sql="UPDATE `app_tam_p2p` SET follow = '6' , `rec_tl`='$rec_tl', upd_tl='".$data1['username']."' , tgl_tl='$tgl' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	//clearstatcache();
	$location="myhandel_p2p.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<script>window.location.href='approve_spv_p2p.php';</script>";
	
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
							<h4 class="title">Form SPV TAM P2P</h4>	
						</div>
				
				<form id='input' name="demoform" action='form_spv_p2p.php?id=<?php echo "$ids";?>' method='post' accept-charset='UTF-8'>
					<div>
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
                                            <select name="status" class="form-control" onChange="document.demoform.submit()" readonly>
                                                <option value=" ">Pilih Status call</option>
                                                <?php
                                                $qsk = mysqli_query($con, "SELECT * FROM app_tam_status WHERE `jenis`= '$id_jenis' and `aktif`='1'");

                                                $k = 1;
                                                while ($rsk = mysqli_fetch_row($qsk)) {
                                                    if ($rsk[2] == $data['status']) {
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" style="color:#008B8B">Kategori</label>
                                            <select name="kategori" class="form-control" onChange="document.demoform.submit()" readonly>
                                                <option value=" ">Pilih Kategori call</option>
                                                <?php
                                                $qsk = mysqli_query($con, "SELECT * FROM app_tam_kategori WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `aktif`='1'");

                                                $k = 1;
                                                while ($rsk = mysqli_fetch_row($qsk)) {
                                                    if ($rsk[3] == $data['kategori']) {
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
                                </div>
                                <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" style="color:#008B8B">Reason Call</label>
                                                <select name="reason" class="form-control" onChange="document.demoform.submit()" readonly>
                                                    <option value=" ">Pilih Reason Call</option>
                                                    <?php
                                                    $qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");

                                                    $k = 1;
                                                    while ($rsk = mysqli_fetch_row($qsk)) {
                                                        if ($rsk[4] == $data['reason']) {
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
                                            <input class="form-control" type="email" name="email_plg" value="<?=($email_plg == NULL)?$data['email_plg']:$email_plg; ?>" placeholder="masukkan email pelanggan"  required readonly/>
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
                                            <input class="form-control" type="text" name="revenue" value="<?=$harga?>" placeholder="masukkan revenue" required readonly/>
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
                                            <select class="form-control" name="cls" required onChange="document.demoform.submit()" readonly>
                                                <option value="">-- PILIH CLS --</option>
                                                    <?php
                                                    $qsk = mysqli_query($con, "SELECT  * FROM app_tam_halo_cls WHERE penawaran='$harga'");

                                                    $k = 1;
                                                    while ($rsk = mysqli_fetch_array($qsk)) {
                                                        if ($rsk['penawaran'] == $harga) {
                                                            if($cls==$rsk['pilihan1']){
                                                                $sel = "selected";
                                                                $pilihan = 'pilihan1';
                                                            }
                                                            else if($cls==$rsk['pilihan2']){
                                                                $sel = "selected";
                                                                $pilihan = 'pilihan2';
                                                            }
                                                            else if($cls==$rsk['pilihan3']){
                                                                $sel = "selected";
                                                                $pilihan = 'pilihan3';
                                                            }

                                                        } else {
                                                            $sel = "";
                                                        }
                                                        
                                                        echo "<option value=\"".$rsk['pilihan1']."\" ".(($pilihan == 'pilihan1')?$sel:'').">".$rsk['pilihan1']."</option>";
                                                        echo "<option value=\"".$rsk['pilihan2']."\" ".(($pilihan == 'pilihan2')?$sel:'').">".$rsk['pilihan2']."</option>";
                                                        if($rsk['pilihan3'] != NULL OR $rsk['pilihan3'] != ''){
                                                            echo "<option value=\"".$rsk['pilihan3']."\" ".(($pilihan == 'pilihan3')?$sel:'').">".$rsk['pilihan3']."</option>";
                                                        }
                                                        $k++;
                                                    }
                                                    ?>
                                            </select>
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
					<textarea class="form-control" name="rec_qco"  rows="5" readonly><?=$data['rec_qco']?></textarea>
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
					<br>
					<br>
				<input type="submit" name="recall" class="btn btn-info" value="Recall Agent">
				<input type="submit" name="Save" class="btn btn-info" value="Approve to QCO">
					</div>
					</div>
					
					</div>
					
				

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