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
$area = $_SESSION['area'];
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");
$date = date("Y-m-d");

$query="SELECT * FROM app_wo_hvc WHERE id='$id'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);

$login_qco = NULL;
$query_qco = mysqli_query($con, "SELECT qco FROM cc147_main_users WHERE `username`='$login_user_qco'");
while ($data_qco = mysqli_fetch_row($query_qco)) {
	$login_qco = $data_qco[0];
}



if($_POST['submit_form'] == "ok"){
if (isset($_POST['Save'])) {
	if($selisih_harga == '') {
		$selisih_harga = 0;
	}
	$convertRupiah = (int) filter_var($selisih_harga, FILTER_SANITIZE_NUMBER_INT); 
	$hobbyFav = implode(", ", $opt_in);
	if($kode_voucher != "") {
		$query_cek_kode_voucher = mysqli_query($con, "SELECT * FROM app_tam_hvc WHERE kode_voucher = '$kode_voucher'");
		$total_kode_voucher = mysqli_num_rows($query_cek_kode_voucher);
		if($total_kode_voucher > 0) {
			while ($result_kode_voucher = mysqli_fetch_array($query_cek_kode_voucher)) {
				if($kode_voucher == $result_kode_voucher['kode_voucher']) {
					$kode_voucher = '';
					$nama_voucher = '';
					$tgl_in_voucher = '';
					$reason_call = '';
					$jenis_call = '';
					$selisih_harga = '';
					
					$cek_kode_voucher = "double";
				}
			}
		}
	}

	if($cek_kode_voucher == "double") {
		echo "<div class=\"alert alert-danger\">Mohon pilih kembali kolom Nama Voucher atau Kode Voucher telah di Pick Up !</div>";
		$cek = "kosong";
	}
	else {
	// status call: not connect	
			if ($kategori == "Not Contacted" || $kategori == "Follow Up Recall") {
				if ($no_inet == ""  or $no_telp == "" or $login == "" or $nama_plg == ""  or $kategori == "" or $sub_kat == "" ) {
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				} else {

					if ($kategori == "Not Contacted") {
						$follow = '1';
					} elseif ($kategori == "Follow Up Recall") {
						$follow = '8';
					}

					$sql = "INSERT INTO app_tam_hvc (tgl,login,nama_agent,area,no_telp,no_inet,ncli,nama_plg,kelamin,hp_utama,layanan,symptom,kategori_hvc,nama_pemilik,relasi,hp_utama2,hp_lain,email,alamat,kota,
							saran,kategori,sub_kat,status_call,keterangan,kode_voucher,tgl_in_voucher,nama_voucher,kendala,follow,valid,input,channel,opt_in,jenis,reason,selisih_harga) 
							VALUES 
							('$tgl','$login','$nama','$area','$no_telp','$no_inet','$ncli','$nama_plg','$kelamin','$hp_utama','$layanan','$symptomp','$kategori_hvc','$nama_pemilik','$relasi','$hp_utama2','$hp_lain',
							'$email','$alamat','$kota','$saran','$kategori','$sub_kat','$status_call','$ket','$kode_voucher','$tgl_in_voucher','$nama_voucher','$kendala','$follow','Not Valid','New','$channel','$hobbyFav','$jenis_call','$reason_call','$convertRupiah')";

					$query = mysqli_query($con, $sql);
					$cek='sukses';

					$sql_update_status_netflix = "UPDATE app_wo_hvc SET status='0', lup='$tgl' WHERE id='$id'";
					mysqli_query($con, $sql_update_status_netflix);

					clearstatcache();
					$location = "list_wo_hvc.php";
					echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
				}
			}
			// status call: connect
			else if ($kategori == "Contacted") {
				if ($no_inet == ""  or $login == "" or $nama_plg == "" or $no_telp == "" or $kategori == "" or $sub_kat == ""  or $kendala == "" ) {
					// print_r($nama_plg);
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				} else {
					if($sub_kat == "Success"){
						if($status_call == "Agree Upselling" || $status_call == 'Retention' || $status_call == 'Profilling') {
							$sql = "INSERT INTO app_tam_hvc (tgl,login,nama_agent,area,no_telp,no_inet,ncli,nama_plg,kelamin,hp_utama,layanan,symptom,kategori_hvc,nama_pemilik,relasi,hp_utama2,hp_lain,email,alamat,kota,
							saran,kategori,sub_kat,status_call,keterangan,kode_voucher,tgl_in_voucher,nama_voucher,kendala,follow,upd_qco,valid,input,channel,opt_in,jenis,reason,selisih_harga) 
							VALUES 
							('$tgl','$login','$nama','$area','$no_telp','$no_inet','$ncli','$nama_plg','$kelamin','$hp_utama','$layanan','$symptomp','$kategori_hvc','$nama_pemilik','$relasi','$hp_utama2','$hp_lain',
							'$email','$alamat','$kota','$saran','$kategori','$sub_kat','$status_call','$ket','$kode_voucher','$tgl_in_voucher','$nama_voucher','$kendala','2','$login_qco','Not Valid','New','$channel','$hobbyFav','$jenis_call','$reason_call','$convertRupiah')";
							// echo $sql;
							$query = mysqli_query($con, $sql);
							$cek = 'sukses';

							$sql1 = "UPDATE app_hvc_voucher SET  status_voucher = '1' WHERE kode_voucher = '$kode_voucher' AND tgl_in_voucher = '$tgl_in_voucher' AND nama_voucher = '$nama_voucher'";
							$query = mysqli_query($con, $sql1);
							$cek = 'sukses';

							$sql_update_status_netflix = "UPDATE app_wo_hvc SET status='1', lup='$tgl' WHERE id='$id'";
							mysqli_query($con, $sql_update_status_netflix);
						}
						else {
							$sql = "INSERT INTO app_tam_hvc (tgl,login,nama_agent,area,no_telp,no_inet,ncli,nama_plg,kelamin,hp_utama,layanan,symptom,kategori_hvc,nama_pemilik,relasi,hp_utama2,hp_lain,email,alamat,kota,
							saran,kategori,sub_kat,status_call,keterangan,kode_voucher,tgl_in_voucher,nama_voucher,kendala,follow,valid,input,channel,opt_in,jenis,reason,selisih_harga) 
							VALUES 
							('$tgl','$login','$nama','$area','$no_telp','$no_inet','$ncli','$nama_plg','$kelamin','$hp_utama','$layanan','$symptomp','$kategori_hvc','$nama_pemilik','$relasi','$hp_utama2','$hp_lain',
							'$email','$alamat','$kota','$saran','$kategori','$sub_kat','$status_call','$ket','$kode_voucher','$tgl_in_voucher','$nama_voucher','$kendala','$follow','Not Valid','New','$channel','$hobbyFav','$jenis_call','$reason_call','$convertRupiah')";
							// echo $sql;
							$query = mysqli_query($con, $sql);
							$cek = 'sukses';

							$sql1 = "UPDATE app_hvc_voucher SET  status_voucher = '1' WHERE kode_voucher = '$kode_voucher' AND tgl_in_voucher = '$tgl_in_voucher' AND nama_voucher = '$nama_voucher'";
							$query = mysqli_query($con, $sql1);
							$cek = 'sukses';

							$sql_update_status_netflix = "UPDATE app_wo_hvc SET status='1', lup='$tgl' WHERE id='$id'";
							mysqli_query($con, $sql_update_status_netflix);
						}
						

						// $data = [
						// 	"tgl" => $tgl,	
						// 	"login" => $login,	
						// 	"nama_agent" => $nama,	
						// 	"area" => $area,	
						// 	"fastel" => $fastel,	
						// 	"nama_dm" => $nama_dm,	
						// 	"tlp" => $tlp,	
						// 	"reg" => $reg,	
						// 	"jenis" => $jenis,	
						// 	"status" => $status,	
						// 	"kategori" => $kategori,	
						// 	"ket" => $ket,
						// 	"follow" => $follow,
						// 	"valid" => "Not Valid",
						// 	"input" => "New"
						//   ];
						
						//   $pdata = json_encode($data);
						
						//   $curl = curl_init();
						
						//   curl_setopt_array($curl, [
						// 	CURLOPT_URL => 'http://10.194.17.17/api/inputInteraction',
						// 	CURLOPT_RETURNTRANSFER => true,
						// 	CURLOPT_ENCODING => '',
						// 	CURLOPT_MAXREDIRS => 10,
						// 	CURLOPT_TIMEOUT => 0,
						// 	CURLOPT_FOLLOWLOCATION => true,
						// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						// 	CURLOPT_CUSTOMREQUEST => 'POST',
						// 	CURLOPT_POSTFIELDS => $pdata,
						// 	CURLOPT_HTTPHEADER => [
						// 	  'Authorization: Bearer eyJpdiI6ImpGeko3QjdkSU5BTHNjcVJMa2VOR1E9PSIsInZhbHVlIjoiYkJ2citDeTZqZXJkc1hpdW4wRGxZdz09IiwibWFjIjoiZDZkZGM3NzU4NGI4ZTU2ODU1Mzk1NzQ5MWFlYWM3ZTIzOTE3MGM0NjFmZGNjYWM0MzEyOGM2ZjQwMzczNWE5NiIsInRhZyI6IiJ9',
						// 	  'Content-Type: application/json'
						// 	],
						//   ]);
						
						//   $response = curl_exec($curl);
						
						//   curl_close($curl);

					}
					else if($sub_kat == "Follow UP"){
						$sql = "INSERT INTO app_tam_hvc (tgl,login,nama_agent,area,no_telp,no_inet,ncli,nama_plg,kelamin,hp_utama,layanan,symptom,kategori_hvc,nama_pemilik,relasi,hp_utama2,hp_lain,email,alamat,kota,
							saran,kategori,sub_kat,status_call,keterangan,kode_voucher,tgl_in_voucher,nama_voucher,kendala,follow,valid,input,channel,opt_in,jenis,reason,selisih_harga) 
							VALUES 
							('$tgl','$login','$nama','$area','$no_telp','$no_inet','$ncli','$nama_plg','$kelamin','$hp_utama','$layanan','$symptomp','$kategori_hvc','$nama_pemilik','$relasi','$hp_utama2','$hp_lain',
							'$email','$alamat','$kota','$saran','$kategori','$sub_kat','$status_call','$ket','$kode_voucher','$tgl_in_voucher','$nama_voucher','$kendala','$follow','Not Valid','New','$channel','$hobbyFav','$jenis_call','$reason_call','$convertRupiah')";
							// echo $sql;
						$query = mysqli_query($con, $sql);
						$cek = 'sukses';

						$sql_update_status_netflix = "UPDATE app_wo_hvc SET status='1', lup='$tgl' WHERE id='$id'";
						mysqli_query($con, $sql_update_status_netflix);
					}
					else {
						$sql = "INSERT INTO app_tam_hvc (tgl,login,nama_agent,area,no_telp,no_inet,ncli,nama_plg,kelamin,hp_utama,layanan,symptom,kategori_hvc,nama_pemilik,relasi,hp_utama2,hp_lain,email,alamat,kota,
							saran,kategori,sub_kat,status_call,keterangan,kode_voucher,tgl_in_voucher,nama_voucher,kendala,follow,valid,input,channel,opt_in,jenis,reason,selisih_harga) 
							VALUES 
							('$tgl','$login','$nama','$area','$no_telp','$no_inet','$ncli','$nama_plg','$kelamin','$hp_utama','$layanan','$symptomp','$kategori_hvc','$nama_pemilik','$relasi','$hp_utama2','$hp_lain',
							'$email','$alamat','$kota','$saran','$kategori','$sub_kat','$status_call','$ket','$kode_voucher','$tgl_in_voucher','$nama_voucher','$kendala','$follow','Not Valid','New','$channel','$hobbyFav','$jenis_call','$reason_call','$convertRupiah')";
							// echo $sql;
						$query = mysqli_query($con, $sql);
						$cek = 'sukses';

						$sql_update_status_netflix = "UPDATE app_wo_hvc SET status='1', lup='$tgl' WHERE id='$id'";
						mysqli_query($con, $sql_update_status_netflix);
					// echo $sql;
					}
					
					
					clearstatcache();
					$location = "list_wo_hvc.php";
					echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
				}
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
<title>TAM HVC</title>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					<div class="header">
						<h4 class="title">INPUT WO HVC <small> >>> <?php echo $login; ?></small></h4>
					</div>
					<form id='form1' name="demoform" action='form_wo_hvc.php?id=<?=$data['id']?>' method='post' accept-charset='UTF-8'>
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
							<div class="header">
								<h5 class="title">A. Memastikan Penanggungjawab</small></h5>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No Telepon</label>
										<input class="form-control" type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" placeholder="masukkan nomor telepon" onKeyPress="return isNumberKey(event)" required />
										<input class="form-control" type="hidden" name="login" value="<?php echo $login; ?>" readonly required />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">No Internet</label>
										<input class="form-control" type="text" name="no_inet" value="<?php echo $data['no_inet']; ?>" placeholder="masukkan nomor intrernet" onKeyPress="return isNumberKey(event)" required readonly/>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NCLI</label>
										<input class="form-control" type="text" name="ncli" id="ncli" value="<?php echo $data['ncli']; ?>" placeholder="masukkan NCLI" onKeyPress="return isNumberKey(event)" required readonly/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Handphone Utama</label>
										<input class="form-control" type="text" name="hp_utama" value="<?php echo $hp_utama; ?>" placeholder="masukkan handphone utama" onKeyPress="return isNumberKey(event)" required />
										<!-- <input class="form-control" type="hidden" name="login" value="<?php echo $login; ?>" readonly required /> -->
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama Pelanggan</label>
										<input class="form-control" type="text" name="nama_plg" value="<?php echo $nama_plg; ?>" placeholder="masukkan nama pelanggan" required />
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Jenis Kelamin</label><br>
										<select id="kelamin" name="kelamin" class="form-control" value="<? echo $kelamin;?>">
											<option value="">Pilih Jenis Kelamin</option>
											<option value="Male" <?=($kelamin == "Male") ? "selected" : "";?>>Male</option>
											<option value="Female" <?=($kelamin == "Female") ? "selected" : "";?>>Female</option>
										</select>
										<!-- <input type="radio" id="male" name="jenis_kelamin" value="60">
										<label for="male">Male</label>
										<input type="radio" id="female" name="jenis_kelamin" value="60">
										<label for="female">Female</label><br>   -->
										<!-- <input class="form-control" type="text" name="tlp" id="tlp" value="<?php echo $tlp; ?>" placeholder="masukkan No CP" onKeyPress="return isNumberKey(event)" required /> -->
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
										<select id="kendala" name="kendala" class="form-control" value="<? echo $kendala;?>" onChange="document.demoform.submit()">
											<option value="">Pilih Kendala</option>
											<option value="Tidak Ada Kendala" <?=($kendala == "Tidak Ada Kendala") ? "selected" : "";?>>Tidak Ada Kendala</option>
											<option value="Kendala" <?=($kendala == "Kendala") ? "selected" : "";?>>Kendala</option>
										</select>
									</div>
								</div>
								<?php
								if($kendala == 'Kendala' || $layanan != "") {
								?>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Layanan</label>
										<select id="layanan" name="layanan" class="form-control" value="<? echo $layanan;?>" onChange="document.demoform.submit()">
											<option value="">Pilih Layanan</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_hvc_kendala WHERE `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[1] == $layanan) {
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
									$layanan = '';
								}

								if($layanan != "") {
								?>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Symptomp</label>
											<select id="symptomp" name="symptomp" class="form-control" value="<? echo $symptomp;?>" onChange="document.demoform.submit()">
												<option value="">Pilih Symptomp</option>
											<?php
												$qsk1 = mysqli_query($con, "SELECT * FROM app_hvc_subkendala WHERE `aktif`='1' AND `kategori`='$id_layanan'");

												$k = 1;
												while ($rsk1 = mysqli_fetch_row($qsk1)) {
													if ($rsk1[2] == $symptomp) {
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
										<input class="form-control" type="text" name="kategori_hvc" value="<?php echo $data['kategori_hvc']; ?>" placeholder="Masukkan Kategori HVC"  readonly/>
										<!-- <select id="kategori_hvc" name="kategori_hvc" class="form-control" value="<? echo $data['kategori_hvc'];?>" readonly>
											<option value="">Pilih Kategori HVC</option>
											<option value="DIAMOND" <?=($data['kategori_hvc'] == "DIAMOND") ? "selected" : "";?>>DIAMOND</option>
											<option value="PLATINUM" <?=($data['kategori_hvc'] == "PLATINUM") ? "selected" : "";?>>PLATINUM</option>
											<option value="GOLD" <?=($data['kategori_hvc'] == "GOLD") ? "selected" : "";?>>GOLD</option>
											<option value="SILVER" <?=($data['kategori_hvc'] == "SILVER") ? "selected" : "";?>>SILVER</option>
											<option value="REGULER" <?=($data['kategori_hvc'] == "REGULER") ? "selected" : "";?>>REGULER</option>
										</select> -->
									</div>
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Nama Pemilik</label>
										<input class="form-control" type="text" name="nama_pemilik" value="<?php echo $nama_pemilik; ?>" placeholder="Masukkan Nama Pemilik"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Relasi kepemilikan</label>
										<select id="relasi" name="relasi" class="form-control" value="<? echo $relasi;?>">
											<option value="">Pilih Relasi Kepemilikan</option>
											<option value="Pemilik" <?=($relasi == 'Pemilik') ? 'selected':''?>>Pemilik</option>
											<option value="Bapak / Ibu" <?=($relasi == 'Bapak / Ibu') ? 'selected':''?>>Bapak / Ibu</option>
											<option value="Suami / Istri" <?=($relasi == 'Suami / Istri') ? 'selected':''?>>Suami /Istri</option>
											<option value="Anak" <?=($relasi == 'Anak') ? 'selected':''?>>Anak</option>
											<option value="Keluarga" <?=($relasi == 'Keluarga') ? 'selected':''?>>Keluarga</option>
											<option value="Kontrak" <?=($relasi == 'Kontrak') ? 'selected':''?>>Kontrak</option>
											<option value="Karyawan" <?=($relasi == 'Karyawan') ? 'selected':''?>>Karyawan</option>
										</select>
											<!-- <input class="form-control" type="text" name="nama_dm" value="<?php echo $nama_dm; ?>" placeholder="Masukkan Relasi kepemilikan" required /> -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Handphone Utama</label>
										<input class="form-control" type="text" name="hp_utama2" value="<?php echo $hp_utama2; ?>" placeholder="Masukkan Handphone Utama" onKeyPress="return isNumberKey(event)"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Handphone Lainnya</label>
										<input class="form-control" type="text" name="hp_lain" value="<?php echo $hp_lain; ?>" placeholder="Masukkan Handphone Lainnya"  onKeyPress="return isNumberKey(event)"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Email Utama</label>
										<input class="form-control" type="email" name="email" value="<?php echo $data['email']; ?>" placeholder="Masukkan Email Utama"/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Alamat</label>
										<input class="form-control" type="text" name="alamat" value="<?php echo $alamat; ?>" placeholder="Masukkan Alamat"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kota</label>
										<input class="form-control" type="text" name="kota" value="<?php echo $kota; ?>" placeholder="Masukkan Kota"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Saran</label>
										<select id="se1" name="saran" class="form-control" value="<? echo $saran;?>">
										<option value="">Pilih Saran</option>
											<option value="Koneksi Internet Lebih Stabil" <?=($saran == 'Koneksi Internet Lebih Stabil') ? 'selected':''?>>Koneksi Internet Lebih Stabil</option>
											<option value="Respon Kendala Lebih Stabil" <?=($saran == 'Respon Kendala Lebih Stabil') ? 'selected':''?>>Respon Kendala Lebih Stabil</option>
											<option value="Coverage Lebih Luas Lagi / Perluas Jaringan" <?=($saran == 'Coverage Lebih Luas Lagi / Perluas Jaringan') ? 'selected':''?>>Coverage Lebih Luas Lagi / Perluas Jaringan</option>
											<option value="Perbanyak Channerl Usee TV" <?=($saran == 'Perbanyak Channerl Usee TV') ? 'selected':''?>>Perbanyak Channerl Usee TV</option>
											<option value="Tarif Lebih Terjangkau" <?=($saran == 'Tarif Lebih Terjangkau') ? 'selected':''?>>Tarif Lebih Terjangkau</option>
											<option value="Tingkatkan Kualitas Produk" <?=($saran == 'Tingkatkan Kualitas Produk') ? 'selected':''?>>Tingkatkan Kualitas Produk</option>
											<option value="Tingkatkan Pelayanan Petugas" <?=($saran == 'Tingkatkan Pelayanan Petugas') ? 'selected':''?>>Tingkatkan Pelayanan Petugas</option>
											<option value="Perbandingan Upload dan Download 1 : 1" <?=($saran == 'Perbandingan Upload dan Download 1 : 1') ? 'selected':''?>>Perbandingan Upload dan Download 1 : 1</option>
											<option value="Belum Ada Saran" <?=($saran == 'Belum Ada Saran') ? 'selected':''?>>Belum Ada Saran</option>
										</select>
										<!-- <input class="form-control" type="text" name="saran" value="<?php echo $saran; ?>" placeholder="Masukkan Saran" required /> -->
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Preference Channel</label>
										<select id="se1" name="channel" class="form-control" value="<? echo $channel;?>">
											<option value="">Pilih Preference Channel</option>
											<option value="SMS" <?=($channel == 'SMS') ? 'selected':''?>>SMS</option>
											<option value="WA" <?=($channel == 'WA') ? 'selected':''?>>WA</option>
											<option value="Email" <?=($channel == 'Email') ? 'selected':''?>>Email</option>
											<option value="Telepon" <?=($channel == 'Telepon') ? 'selected':''?>>Telepon</option>
										</select>
										<!-- <input class="form-control" type="text" name="saran" value="<?php echo $saran; ?>" placeholder="Masukkan Saran" required /> -->
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Data Hobby Favorit</label>
										<select id="js-example-basic-multiple" class="form-control"  name="opt_in[]"  multiple="multiple" >
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
										<select id="se1" name="kategori" class="form-control" value="<? echo $kategori;?>" onChange="document.demoform.submit()">
											<option value="">Pilih Kategori Call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_status WHERE `jenis`= '4' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[2] == $kategori) {
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
										<select id="se1" name="sub_kat" class="form-control" value="<? echo $sub_kat;?>" onChange="document.demoform.submit()">
											<option value="">Pilih Sub Kategori Call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_kategori WHERE `jenis`= '4' and `status`='$id_kategori' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[3] == $sub_kat) {
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
								
								<?php
									if($id_kategori == "1" && $id_sub_kategori == "1") {
										$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '4' and `status`='$id_kategori' and `kategori`= '$id_sub_kategori' and `aktif`='1'");
										$total = mysqli_num_rows($qsk);
										$k = 1;
										// print_r($id_kategori.' '.$id_sub_kategori);
										if($total > 0) {
											
													// print_r($result);
												?>
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label" style="color:#008B8B">Nama Voucher</label>
														<select id="se1" name="nama_voucher" class="form-control" value="<? echo $nama_voucher;?>" onChange="document.demoform.submit()">
															<option value="">Pilih Nama Voucher</option>
															<?php
																$qsk = mysqli_query($con, "SELECT a.nama_voucher FROM 
																(SELECT * FROM app_hvc_voucher WHERE status_voucher = '0' AND tgl_kadaluarsa >= '$date') as a GROUP BY a.nama_voucher ASC");

																$k = 1;
																while ($rsk = mysqli_fetch_row($qsk)) {
																	if ($rsk[0] == $nama_voucher) {
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
														<!-- <input class="form-control" type="text" name="nama_voucher" value="<?php echo $result['nama_voucher']; ?>" placeholder="Masukkan Nama Voucher" required/> -->
													</div>
												</div>
												
												<?php
												$query = mysqli_query($con, "SELECT * FROM app_hvc_voucher WHERE status_voucher = '0' AND nama_voucher='$nama_voucher' AND tgl_kadaluarsa >= '$date' ORDER BY RAND(id) LIMIT 1");
												$total_voucher = mysqli_num_rows($query);
												if($total_voucher > 0) {
													while ($result = mysqli_fetch_array($query)) {
												?>
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label" style="color:#008B8B">Kode Voucher</label>
														<input class="form-control" type="text" name="kode_voucher" value="<?php echo $result['kode_voucher']; ?>" placeholder="Masukkan Kode Voucher" required readonly/>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label" style="color:#008B8B">Tanggal Input Voucher</label>
														<input class="form-control" type="text" name="tgl_in_voucher" value="<?php echo $result['tgl_in_voucher']; ?>" placeholder="Masukkan Tanggal Input Voucher" required readonly/>
													</div>
												</div>
												
												<?php
												}
											}
											else {
												$nama_voucher = '';
												$kode_voucher = '';
												$tgl_in_voucher = '';
											}
											?>
												<div class="col-md-4">
													<div class="form-group">
															<label class="control-label" style="color:#008B8B">Status Call</label>
															<select id="se1" name="status_call" class="form-control" value="<? echo $status_call;?>" onChange="document.demoform.submit()">
																<option value="">Pilih Status Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '4' and `status`='$id_kategori' and `kategori`= '$id_sub_kategori' and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[4] == $status_call) {
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
												<?php
												if($id_status == '1'){
												?>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label" style="color:#008B8B">Jenis Call</label>
															<select id="se1" name="jenis_call" class="form-control" value="<? echo $jenis_call;?>" onChange="document.demoform.submit()">
																<option value="">Pilih Jenis Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[1] == $jenis_call) {
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
															<select id="se1" name="reason_call" class="form-control" value="<? echo $reason_call;?>" onChange="document.demoform.submit()">
																<option value="">Pilih Reason Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_kategori' and `kategori`= '$id_sub_kategori' and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[4] == $reason_call) {
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
															<input class="form-control" type="text" name="selisih_harga" value="<?php echo $convertRupiah; ?>" placeholder="Masukkan Selisih Harga" id="rupiah" onKeyPress="return isNumberKey(event)" required oncopy='return false' oncut='return false' onpaste='return false' />
														</div>
													</div>
												<?php
													}
													else {
														$kode_voucher = '';
														$nama_voucher = '';
														$tgl_in_voucher = '';
														$status_call = '';
														$reason_call = '';
														$jenis_call = '';
														$selisih_harga = '';
													}
										}
										else {
											?>
												<div class="col-md-4">
													<div class="form-group">
															<label class="control-label" style="color:#008B8B">Status Call</label>
															<select id="se1" name="status_call" class="form-control" value="<? echo $status_call;?>" onChange="document.demoform.submit()">
																<option value="">Pilih Status Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '4' and `status`='$id_kategori' and `kategori`= '$id_sub_kategori' and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[4] == $status_call) {
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
												<?php
											$kode_voucher = '';
											$nama_voucher = '';
											$tgl_in_voucher = '';
											$reason_call = '';
											$jenis_call = '';
											$selisih_harga = '';
										}
									}
									else {
										$kode_voucher = '';
										$nama_voucher = '';
										$tgl_in_voucher = '';
										$reason_call = '';
										$jenis_call = '';
										$selisih_harga = '';
										?>
										<div class="col-md-4">
													<div class="form-group">
															<label class="control-label" style="color:#008B8B">Status Call</label>
															<select id="se1" name="status_call" class="form-control" value="<? echo $status_call;?>" onChange="document.demoform.submit()">
																<option value="">Pilih Status Call</option>
																<?php
																	$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '4' and `status`='$id_kategori' and `kategori`= '$id_sub_kategori' and `aktif`='1'");

																	$k = 1;
																	while ($rsk = mysqli_fetch_row($qsk)) {
																		if ($rsk[4] == $status_call) {
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
										<?php
									}
									
								?>
								
								
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Keterangan </label>
										<textarea class="form-control" id="ket" name="ket" rows="5" value="<?php echo $ket; ?>"></textarea>
									</div>
								</div>
							</div>
							
						<input class="form-control" type="hidden" name="follow" value="<?php echo $follow; ?>" readonly required />
						</div>
				</div>
				<!-- <input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value=" Reset">
				<input type="submit" name="Save" class="btn btn-danger" value="Simpan" <?php if ($status == '') { ?> disabled<?php } else if ($status == 'Contacted Recall' && $kategori == "" && $ket == "") { ?> disabled <?} else if ( $status=='Not Contacted' && $kategori=="" ){ ?> disabled<?php } else if ($status == "Contacted" && ($kategori == "" || $reason == "")) { ?> disabled<?php } else if ($status == "Follow Up Recall" && $kategori == "") { ?> disabled<?php } ?> onclick="confirm('Apakah anda yakin inputan sesuai yang diinginkan?');"> -->
				<button class="btn btn-danger" onClick="formReset('form'); return false;">Reset</button>
				<button name="Save" class="btn btn-danger" >Simpan</button>
				<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formInputWita" id="btnWita" style="float:right">
				Input Wita
				</button> -->
			</form>
			<!-- Button to Open the Modal -->

				<!-- The Modal -->
				<div class="modal" id="formInputWita" tabindex="-1" aria-hidden="true" data-backdrop="false">
					<div class="modal-dialog">
						<div class="modal-content">
							<form id="formInputWita" role="form" method="POST" action="">
								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Form Input Wita</h4>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<div class="form-group">
										<label class="control-label">Nama Pelanggan</label>
										<div>
											<input type="text" class="form-control input-lg" name="nama_pelanggan" id="nama_pelanggan">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">NO FASTEL</label>
										<div>
											<input type="number" class="form-control input-lg" name="no_fastel" id="no_fastel">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">NO CP</label>
										<div>
											<input type="number" class="form-control input-lg" name="no_cp" id="no_cp">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Detail Kendala</label>
										<div>
											<textarea class="form-control input-lg" name="detail_keterangan" id="detail_keterangan" rows="5"></textarea>
										</div>
									</div>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary" id="btnKirim">Send</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</div>

<script>
	$(document).ready(function() {
		$('#js-example-basic-multiple').select2();
	});

	var rupiah = document.getElementById('rupiah');
	if(rupiah){
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
	}
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
// $(document).ready(function(){
//   $('#tlp').bind('copy paste cut',function(e) {
//     e.preventDefault(); //disable cut,copy,paste
//     alert('cut,copy & paste options are disabled !!');
//   });
// });

$(document).ready(function(event) {

    $('#form1').submit(function(event){
		var msg = "Detail Inputan Anda : \n\nNama Agent : " + (($('input[name=login]').val())?$('input[name=login]').val():" - ") +"\nNO INTERNET : " + (($('input[name=no_inet]').val())?$('input[name=no_inet]').val():" - ") + "\nNama Pemilik : " + (($('input[name=nama_pemilik]').val())?$('input[name=nama_pemilik]').val():" - ") + "\nNO TELEPON : " + (($('input[name=no_telp]').val())?$('input[name=no_telp]').val():" - ") + "\n\nApakah anda yakin data inputan telah sesuai?";
		
		if($('select[name=kategori]').val() == "" || $('select[name=sub_kat]').val() == "") {
			window.alert('Kategori Call dan Sub Kategori Wajib Di Isi !!!');
		}
		else {
			if(window.confirm(msg) == true) {
				var inputVal = $('input[name=no_telp]').val();
				var gfg = $.isNumeric(inputVal);
				
				userPreference = "Data saved successfully!";
				// document.getElementById("submit_form").value = "ok";
				if(gfg) {
					$('#submit_form').val("ok");
					// document.getElementById("").setAttribute("submit_form", "ok");	
					window.alert(userPreference);
				}
				else {
					window.alert('inputan NO TELEPON harus Angka !!!');
				}
			}else{
				event.preventDefault();
			}
		}
		//add stuff here
    });

	$( "#btnKirim" ).click(function() {
		let login = "<?=$login?>";
		let nama = "<?=$nama?>";
		let nama_pelanggan = $("#nama_pelanggan").val();
		let no_fastel = $("#no_fastel").val();
		let no_cp = $("#no_cp").val();
		let detail_keterangan = $("#detail_keterangan").val();
		if(login != "" && nama != "" && nama_pelanggan != "" && no_fastel != "" && no_cp != "" && detail_keterangan != "") {

			$.ajax({
				url: "http://10.194.176.158/cwctam_v2/api/send_ganguan_to_wita.php",
				type: "POST",
				dataType: "JSON",
				data: {
					login: login,
					nama: nama,
					jastel: no_fastel,
					nama_pelanggan: nama_pelanggan,
					cp_pelanggan: no_cp,
					keterangan: detail_keterangan
				},
				success: function(data)
				{
					console.log(data);
					$('#formInputWita').modal('hide');
					swal("Success", "Data Berhasil Di Kirim ke WITA oleh Agent!", "success");
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					swal("Gagal", "Data Gagal Di Kirim ke WITA oleh Agent!", "error");
				}
			});
		}
		else {
			swal("Gagal", "Isi Semua Data!", "info");
		}
	});
});


</script>
<?php require_once("../deft_foo.php"); ?>