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

$query_dwh="SELECT * FROM app_tam_hvc WHERE id = '$id'";
//echo $query;
$hasil_dwh = mysqli_query($con,$query_dwh);
$data_dwh = mysqli_fetch_array($hasil_dwh);

$query="SELECT * FROM app_tam_hvc AS a INNER JOIN cc147_main_users AS b ON a.login = b.username WHERE a.id = '$id'";
//echo $query;
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);
//==============================cek handel=================================
if($jb=="Tabber"){
$N_taber="SELECT count(*) as jml FROM app_tam_hvc WHERE follow ='2' and `upd_qco` = '$login'";
$Ne_taber=mysqli_query($con,$N_taber);
$h_taber=mysqli_fetch_row($Ne_taber);
}
if ($h_taber[0] > 35 && $data['upd_qco']==""){
	clearstatcache();
	$location="form_tabber3_hvc.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Anda Melebihi Batas Aproval!</div>";
}
else 
if ($data['upd_qco']<>"" && $data['upd_qco']<>$login)
{
	//clearstatcache();
	$location="form_tabber3_hvc.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Approval ini sudah di handel $data[upd_qco]</div>";
	
	$not_handel=1;
}
else if ($login=='')
{
	//clearstatcache();
	$location="form_tabber3_hvc.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Session user terlogout</div>";
	
	$not_handel=1;
}
// else {
// 	if ($login<>''){
// 	$sql="UPDATE `app_tam_hvc` SET durasi = '$durasi', durasi='$durasi', upd_qco='$login' WHERE `id`='$ids'";
// 	$query=mysqli_query($con,$sql);
// 	}
// }


if (isset($_POST['valid']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_hvc.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_hvc` SET durasi = '$durasi', follow = '6' , `rec_qco`='$rec_qco', tgl_qco='$tgl' , valid='Valid' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_hvc.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}
}else if (isset($_POST['tl']) AND ($pilihan_return_tl != "")){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_hvc.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_hvc` SET durasi = '$durasi', follow = '3', `rec_qco`='$rec_qco', tgl_qco='$tgl', id_return_tl = '$pilihan_return_tl' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_hvc.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}}
else if (isset($_POST['novalid']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber3_hvc.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_hvc` SET durasi = '$durasi', follow = '6', `rec_qco`='$rec_qco', tgl_qco='$tgl',valid='Not Valid' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel_hvc.php";		
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
							<h4 class="title">Form QCO TAM HVC</h4>	
						</div>
				
				<form id='input' name="demoform" action='form_tabber3_hvc.php?id=<?php echo "$ids";?>' method='post' accept-charset='UTF-8'>
					<div>
					<input type="hidden" name="login_user_qco" value="<?=$data['login']?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
							<div class="header">
								<h5 class="title">A. Memastikan Penanggungjawab</small></h5>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No Telepon</label>
										<input class="form-control" type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" placeholder="masukkan nomor telepon" onKeyPress="return isNumberKey(event)" required  readonly/>
										<input class="form-control" type="hidden" name="login" value="<?php echo $data['login']; ?>" readonly required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No Internet</label>
										<input class="form-control" type="text" name="no_inet" value="<?php echo $data['no_inet']; ?>" placeholder="masukkan nomor intrernet" onKeyPress="return isNumberKey(event)" required  readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NCLI</label>
										<input class="form-control" type="text" name="ncli" id="ncli" value="<?php echo $data['ncli']; ?>" placeholder="masukkan NCLI" onKeyPress="return isNumberKey(event)" required  readonly/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Handphone Utama</label>
										<input class="form-control" type="text" name="hp_utama" value="<?php echo $data['hp_utama']; ?>" placeholder="masukkan handphone utama" onKeyPress="return isNumberKey(event)" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama Pelanggan</label>
										<input class="form-control" type="text" name="nama_plg" value="<?php echo $data['nama_plg']; ?>" placeholder="masukkan nama pelanggan" required  readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Jenis Kelamin</label><br>
										<select id="kelamin" name="kelamin" class="form-control" value="<? echo $data['kelamin'];?>"  readonly>
											<option value="">Pilih Jenis Kelamin</option>
											<option value="Male" <?=($data['kelamin'] == "Male") ? "selected" : "";?>>Male</option>
											<option value="Female" <?=($data['kelamin'] == "Female") ? "selected" : "";?>>Female</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="header">
								<h5 class="title">B. Identifikasi</small></h5>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kendala</label>
										<select id="kendala" name="kendala" class="form-control" value="<? echo $data['kendala'];?>" onChange="document.demoform.submit()"  readonly>
											<option value="">Pilih Kendala</option>
											<option value="Tidak Ada Kendala" <?=($data['kendala'] == "Tidak Ada Kendala") ? "selected" : "";?>>Tidak Ada Kendala</option>
											<option value="Kendala" <?=($data['kendala'] == "Kendala") ? "selected" : "";?>>Kendala</option>
										</select>
									</div>
								</div>
								<?php
								if($data['kendala'] == 'Kendala' || $data['layanan'] != "") {
								?>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Layanan</label>
										<select id="layanan" name="layanan" class="form-control" value="<? echo $data['layanan'];?>" onChange="document.demoform.submit()"  readonly>
											<option value="">Pilih Layanan</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_hvc_kendala WHERE `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[1] == $data['layanan']) {
													$sel = "selected";
													$id_layanan = $rsk[0];
												} else {
													$sel = "";
												}
												echo "<option value=\"$rsk[1]\" $sel> $rsk[1]</option>";
												$k++;
											}
											?>
										</select>
									</div>
								</div>
								<?php
								}
								else {
									$data['layanan'] = '';
								}

								if($data['layanan'] != "") {
								?>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Symptomp</label>
											<select id="symptomp" name="symptomp" class="form-control" value="<? echo $data['symptomp'];?>" onChange="document.demoform.submit()"  readonly>
												<option value="">Pilih Symptomp</option>
											<?php
												$qsk1 = mysqli_query($con, "SELECT * FROM app_hvc_subkendala WHERE `aktif`='1' AND `kategori`='$id_layanan'");

												$k = 1;
												while ($rsk1 = mysqli_fetch_row($qsk1)) {
													if ($rsk1[2] == $data['symptomp']) {
														$sel = "selected";
														$id_symptomp = $rsk1[0];
													} else {
														$sel = "";
													}
													echo "<option value=\"$rsk1[2]\" $sel> $rsk1[2]</option>";
													$k++;
												}
											?>
											</select>
										</div>
									</div>
								<?php
								}
								else {
									$symptomp='';
								}
								?>
							</div>
						</div>
						<div>
							<div class="header">
								<h5 class="title">C. Informasi & Verifikasi</small></h5>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kategori HVC</label>
										<select id="kategori_hvc" name="kategori_hvc" class="form-control" value="<? echo $data['kategori_hvc'];?>"  readonly>
											<option value="">Pilih Kategori HVC</option>
											<option value="DIAMOND" <?=($data['kategori_hvc'] == "DIAMOND") ? "selected" : "";?>>DIAMOND</option>
											<option value="PLATINUM" <?=($data['kategori_hvc'] == "PLATINUM") ? "selected" : "";?>>PLATINUM</option>
											<option value="GOLD" <?=($data['kategori_hvc'] == "GOLD") ? "selected" : "";?>>GOLD</option>
											<option value="SILVER" <?=($data['kategori_hvc'] == "SILVER") ? "selected" : "";?>>SILVER</option>
											<option value="REGULER" <?=($data['kategori_hvc'] == "REGULER") ? "selected" : "";?>>REGULER</option>
										</select>
									</div>
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama Pemilik</label>
										<input class="form-control" type="text" name="nama_pemilik" value="<?php echo $data['nama_pemilik']; ?>" placeholder="Masukkan Nama Pemilik" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Relasi kepemilikan</label>
										<select id="relasi" name="relasi" class="form-control" value="<? echo $data['relasi'];?>"  readonly>
											<option value="">Pilih Relasi Kepemilikan</option>
											<option value="Pemilik" <?=($data['relasi'] == 'Pemilik') ? 'selected':''?>>Pemilik</option>
											<option value="Bapak / Ibu" <?=($data['relasi'] == 'Bapak / Ibu') ? 'selected':''?>>Bapak / Ibu</option>
											<option value="Suami / Istri" <?=($data['relasi'] == 'Suami / Istri') ? 'selected':''?>>Suami /Istri</option>
											<option value="Anak" <?=($data['relasi'] == 'Anak') ? 'selected':''?>>Anak</option>
											<option value="Keluarga" <?=($data['relasi'] == 'Keluarga') ? 'selected':''?>>Keluarga</option>
											<option value="Kontrak" <?=($data['relasi'] == 'Kontrak') ? 'selected':''?>>Kontrak</option>
											<option value="Karyawan" <?=($data['relasi'] == 'Karyawan') ? 'selected':''?>>Karyawan</option>
										</select>
											<!-- <input class="form-control" type="text" name="nama_dm" value="<?php echo $nama_dm; ?>" placeholder="Masukkan Relasi kepemilikan" required /> -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Handphone Utama</label>
										<input class="form-control" type="text" name="hp_utama2" value="<?php echo $data['hp_utama2']; ?>" placeholder="Masukkan Handphone Utama" onKeyPress="return isNumberKey(event)" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Handphone Lainnya</label>
										<input class="form-control" type="text" name="hp_lain" value="<?php echo $data['hp_lain']; ?>" placeholder="Masukkan Handphone Lainnya"  onKeyPress="return isNumberKey(event)" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Email Utama</label>
										<input class="form-control" type="email" name="email" value="<?php echo $data['email']; ?>" placeholder="Masukkan Email Utama" required  readonly/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat</label>
										<input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Masukkan Alamat" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kota</label>
										<input class="form-control" type="text" name="kota" value="<?php echo $data['kota']; ?>" placeholder="Masukkan Kota" required  readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Durasi</label>
										<input class="form-control" type="number" name="durasi" value="<?php echo $data['durasi']; ?>" placeholder="Masukkan durasi" required  />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Saran</label>
										<select id="se1" name="saran" class="form-control" value="<? echo $data['saran'];?>" required readonly>
											<option value="">Pilih Saran</option>
											<option value="Koneksi Internet Lebih Stabil" <?=($data['saran'] == 'Koneksi Internet Lebih Stabil') ? 'selected':''?>>Koneksi Internet Lebih Stabil</option>
											<option value="Respon Kendala Lebih Stabil" <?=($data['saran'] == 'Respon Kendala Lebih Stabil') ? 'selected':''?>>Respon Kendala Lebih Stabil</option>
											<option value="Coverage Lebih Luas Lagi / Perluas Jaringan" <?=($data['saran'] == 'Coverage Lebih Luas Lagi / Perluas Jaringan') ? 'selected':''?>>Coverage Lebih Luas Lagi / Perluas Jaringan</option>
											<option value="Perbanyak Channerl Usee TV" <?=($data['saran'] == 'Perbanyak Channerl Usee TV') ? 'selected':''?>>Perbanyak Channerl Usee TV</option>
											<option value="Tarif Lebih Terjangkau" <?=($data['saran'] == 'Tarif Lebih Terjangkau') ? 'selected':''?>>Tarif Lebih Terjangkau</option>
											<option value="Tingkatkan Kualitas Produk" <?=($data['saran'] == 'Tingkatkan Kualitas Produk') ? 'selected':''?>>Tingkatkan Kualitas Produk</option>
											<option value="Tingkatkan Pelayanan Petugas" <?=($data['saran'] == 'Tingkatkan Pelayanan Petugas') ? 'selected':''?>>Tingkatkan Pelayanan Petugas</option>
											<option value="Perbandingan Upload dan Download 1 : 1" <?=($data['saran'] == 'Perbandingan Upload dan Download 1 : 1') ? 'selected':''?>>Perbandingan Upload dan Download 1 : 1</option>
											<option value="Belum Ada Saran" <?=($data['saran'] == 'Belum Ada Saran') ? 'selected':''?>>Belum Ada Saran</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Preference Channel</label>
										<select id="se1" name="channel" class="form-control" value="<? echo $data['channel'];?>" required readonly>
											<option value="">Pilih Preference Channel</option>
											<option value="SMS" <?=($data['channel'] == 'SMS') ? 'selected':''?>>SMS</option>
											<option value="WA" <?=($data['channel'] == 'WA') ? 'selected':''?>>WA</option>
											<option value="Email" <?=($data['channel'] == 'Email') ? 'selected':''?>>Email</option>
											<option value="Telepon" <?=($data['channel'] == 'Telepon') ? 'selected':''?>>Telepon</option>
										</select>
										<!-- <input class="form-control" type="text" name="saran" value="<?php echo $saran; ?>" placeholder="Masukkan Saran" required /> -->
									</div>
								</div>
								<?php
								$opt_in = explode(', ',$data['opt_in']);
								?>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Data Hobby Favorit</label>
										<select id="js-example-basic-multiple" class="form-control"  name="opt_in[]"  multiple="multiple" readonly>
											<option value="">Pilih Data Hobby Favorit</option>
											<option value="Food & Beverage" <?=($opt_in[array_search('Food & Beverage', $opt_in)] == 'Food & Beverage') ? 'selected':''?>>Food & Beverage</option>
											<option value="Otomotif" <?=($opt_in[array_search('Otomotif', $opt_in)] == 'Otomotif') ? 'selected':''?>>Otomotif</option>
											<option value="Entertaiment" <?=($opt_in[array_search('Entertaiment', $opt_in)] == 'Entertaiment') ? 'selected':''?>>Entertaiment</option>
											<option value="Healty" <?=($opt_in[array_search('Healty', $opt_in)] == 'Healty') ? 'selected':''?>>Healty</option>
											<option value="Sport" <?=($opt_in[array_search('Sport', $opt_in)] == 'Sport') ? 'selected':''?>>Sport</option>
											<option value="Movie" <?=($opt_in[array_search('Movie', $opt_in)] == 'Movie') ? 'selected':''?>>Movie</option>
											<option value="Education" <?=($opt_in[array_search('Education', $opt_in)] == 'Education') ? 'selected':''?>>Education</option>
											<option value="Religi" <?=($opt_in[array_search('Religi', $opt_in)] == 'Religi') ? 'selected':''?>>Religi</option>
											<option value="Kids" <?=($opt_in[array_search('Kids', $opt_in)] == 'Kids') ? 'selected':''?>>Kids</option>
										</select>
										<!-- <input class="form-control" type="text" name="saran" value="<?php echo $saran; ?>" placeholder="Masukkan Saran" required /> -->
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="header">
								<h5 class="title">D. Penutup</small></h5>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kategori Call</label>
										<select id="se1" name="kategori" class="form-control" value="<? echo $data['kategori'];?>" onChange="document.demoform.submit()"  readonly>
											<option value="">Pilih Kategori Call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_status WHERE `jenis`= '4' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[2] == $data['kategori']) {
													$sel = "selected";
													$id_kategori = $rsk[1];
												} else {
													$sel = "";
												}
												echo "<option value=\"$rsk[2]\" $sel> $rsk[2] </option>";
												$k++;
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Sub Kategori Call</label>
										<select id="se1" name="sub_kat" class="form-control" value="<? echo $data['sub_kat'];?>" onChange="document.demoform.submit()"  readonly>
											<option value="">Pilih Sub Kategori Call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_kategori WHERE `jenis`= '4' and `status`='$id_kategori' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[3] == $data['sub_kat']) {
													$sel = "selected";
													$id_sub_kategori = $rsk[2];
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
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label" style="color:#008B8B">Nama Voucher</label>
														<select id="se1" name="nama_voucher" class="form-control" value="<? echo $data['nama_voucher'];?>" onChange="document.demoform.submit()" readonly>
															<option value="">Pilih Nama Voucher</option>
															<?php
																$qsk = mysqli_query($con, "SELECT a.nama_voucher FROM 
																(SELECT * FROM app_hvc_voucher WHERE status_voucher = '0' AND tgl_kadaluarsa >= '$date') as a GROUP BY a.nama_voucher ASC");

																$k = 1;
																while ($rsk = mysqli_fetch_row($qsk)) {
																	if ($rsk[0] == $data['nama_voucher']) {
																		$sel = "selected";
																		// $id_jenis = $rsk[6];
																	} else {
																		$sel = "";
																	}
																	echo "<option value=\"$rsk[0]\" $sel> $rsk[0]</option>";
																	$k++;
																}
															?>
														</select>
														<!-- <input class="form-control" type="text" name="nama_voucher" value="<?php echo $data['nama_voucher']; ?>" placeholder="Masukkan Nama Voucher" required/> -->
													</div>
												</div>
												
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label" style="color:#008B8B">Kode Voucher</label>
														<input class="form-control" type="text" name="kode_voucher" value="<?php echo $data['kode_voucher']; ?>" placeholder="Masukkan Kode Voucher" required readonly/>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label" style="color:#008B8B">Tanggal Input Voucher</label>
														<input class="form-control" type="text" name="tgl_in_voucher" value="<?php echo $data['tgl_in_voucher']; ?>" placeholder="Masukkan Tanggal Input Voucher" required readonly/>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
															<label class="control-label" style="color:#008B8B">Status Call</label>
															<select id="se1" name="status_call" class="form-control" value="<? echo $data['status_call'];?>" onChange="document.demoform.submit()" readonly>
																<option value="">Pilih Status Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '4' and `status`='$id_kategori' and `kategori`= '$id_sub_kategori' and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[4] == $data['status_call']) {
																			$sel = "selected";
																			$id_status = $rsk[3];
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
												</div>
												
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label" style="color:#008B8B">Jenis Call</label>
															<select id="se1" name="jenis_call" class="form-control" value="<? echo $data['jenis'];?>" onChange="document.demoform.submit()" readonly>
																<option value="">Pilih Jenis Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[1] == $data['jenis']) {
																			$sel = "selected";
																			$id_jenis = $rsk[0];
																		} else {
																			$sel = "";
																		}
																		echo "<option value=\"$rsk[1]\" $sel> $rsk[1]</option>";
																		$k++;
																	}
																?>
															</select>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label" style="color:#008B8B">Reason Call</label>
															<select id="se1" name="reason_call" class="form-control" value="<? echo $data['reason'];?>" onChange="document.demoform.submit()" readonly>
																<option value="">Pilih Reason Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_kategori' and `kategori`= '$id_sub_kategori' and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[4] == $data['reason']) {
																			$sel = "selected";
																			// $follow = $rsk[6];
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
															<input class="form-control" type="text" name="selisih_harga" value="<?php echo $data['selisih_harga']; ?>" placeholder="Masukkan Selisih Harga" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' readonly/>
														</div>
													</div>
										
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Keterangan Agent</label>
										<textarea class="form-control" id="ket" name="ket" rows="5" value="<?php echo $data['keterangan']; ?>" readonly><?=($data['keterangan']!=NULL)?$data['keterangan']:''?></textarea>
									</div>
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
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_return");
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
				<input type="submit" id="novalid" name="novalid" class="btn btn-warning" value="Not Valid" disabled>
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