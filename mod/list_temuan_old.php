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
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d", strtotime($tanggal));
$area = ucwords($area);
// if($tgl==''){$tgl = date("Y-m-d H:i:s");}
if ($login != '') {
	$wlogin = "AND a.login = '$login'";
}
if ($Login != '') {
	$wlogin = "AND a.login = '$Login'";
}
// if($date!=''){ $tgl=date("Y-m-d",strtotime($date));}

$dataPerPage = 50;
if (isset($_GET['page'])) {
	$noPage = $_GET['page'];
} else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;
$Page = $offset;

if (isset($rekom_qa)) {
	$query = "UPDATE app_tam_data2 SET prof_hoby='$rekom_qa', status_notif='1' WHERE id='$id'";
	mysqli_query($con, $query);
	$query1 = "INSERT INTO app_tam_notif (username, deskripsi, status, fastel, tanggal, nama_rekom) VALUES ('$login1','$rekom_qa','1','$fastel',now(),'$nama')";
    mysqli_query($con, $query1);
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


					<div>
						<div align="center" class="panel-heading">
							<b>DAFTAR AGREE VALID by QCO</b>
						</div>
						<div class="row row-centered">
							<div align="center" class="col-md-4">
							</div>
							<div align="center" class="col-md-4">
								<form id='input' name="demoform" action="list_temuan.php?area=<?php echo $area; ?>&tanggal=<?php echo $tgl; ?>" method='post' accept-charset='UTF-8'>

									<table class="table table-hover table-striped">
										<tr>
											<div class="form-group">
												<label style="color:#008B8B">Login Agent</label>
												<input class="form-control" type="text" name="Login" />
											</div>
										</tr>
										<tr>
											<input name="search" type="submit" class="btn btn-info" Value="Search">
										</tr>
									</table>
								</form>
							</div>
						</div>


						<div>
							<div class="row">
								<div class="col-md-12">
									<div class="card ">
										<div class="header">
											<h4 class="title" style="color:#008B8B">Hasil Searching</h4>
										</div>
										<div style="overflow-x:auto;">
											<table id="data-table" width="170px" class="table table-hover table-striped">
												<thead>
													<th align="center">
														<font color="red" face="Tahoma" size="2">No
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Tgl
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Login
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Agent
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Area
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Fastel
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Nama DM
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Telp
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Penerima
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Reg.
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Jenis Call
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Status Call
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Validasi
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">UPD QCO
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Rekom QA
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Action
													</th>
												</thead>
												<tbody>
													<?php
													if ((!(isset($Login))) or ($Login == "")) {
														$query = "SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.penerima,a.reg,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket FROM
													app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.valid='Valid' AND a.`status`='Contacted' AND b.user5='$area' ORDER BY a.tgl DESC LIMIT $offset, $dataPerPage";
													} else {
														$query = "SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.penerima,a.reg,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket FROM
													app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.valid='Valid' AND a.`status`='Contacted' AND b.user5='$area' AND a.login='$Login' ORDER BY a.tgl DESC LIMIT $offset, $dataPerPage";
													}
													//echo "$query";
													$Page = $Page + 1;
													$hasil = mysqli_query($con, $query) or die("Query gagal!");
													while ($data = mysqli_fetch_array($hasil)) {
														echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
											    <th align=\"center\" style=\"font-size:10px\">" . date("d M Y H:i:s", strtotime($data['tgl'])) . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['login'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['user2'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['user5'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['fastel'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['nama_dm'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['tlp'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['penerima'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['reg'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['jenis'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['status'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['valid'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['upd_qco'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['prof_hoby'] . "</th>
												<th align=\"center\" style=\"font-size:10px\"><button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#formTemuan".$data['id']."\">Update</button></th>
												";
												?>
												<!-- Modal -->
												<div class="modal fade" id="formTemuan<?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="Form Temuan" aria-hidden="true" data-backdrop="false">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Update Temuan</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<form action="list_temuan.php?area=<?php echo $area;?>&tanggal=<?php echo $tgl;?>" method="POST" id="FormRekom_qa">
																<div class="modal-body">
																	<div class="form-group">
																	<?php
																	$id = $data['id'];
																	$login1= $data['login'];
																	$deskripsi = $data['prof_hoby'];
																	$fastel = $data['fastel'];
																	$hari_ini = date("Y-m-d H:i:s");
																	?>
																		<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
																		<input type="hidden" class="form-control" name="login1" id="login1" value="<?php echo $login1; ?>" required>
																		<input type="hidden" class="form-control" name="fastel" id="fastel" value="<?php echo $fastel; ?>" required>
																		<label for="rekom_qa">Rekomendasi QA</label>
																		<input type="text" class="form-control" name="rekom_qa" id="rekom_qa" placeholder="Rekomendasi QA" value="<?php echo $data['prof_hoby']; ?>" required>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="submit" class="btn btn-primary">Update</button>
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																</div>
															</form>
														</div>
													</div>
												</div>
													<?php
														$Page = $Page + 1;
													}

													?>
												</tbody>
											</table>
											<table>
												<?php
												if ((!(isset($Login))) or ($Login == "")) {
													$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59'  AND a.valid='Valid' AND a.`status`='Contacted' AND b.user5='$area'";
												} else {
													$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59'  AND a.valid='Valid' AND a.`status`='Contacted' AND b.user5='$area' AND a.login='$Login'";
												}

												//echo $query;
												$hasil   = mysqli_query($con, $query);
												$data    = mysqli_fetch_array($hasil);
												$jumData = $data['jumData'];
												$jumPage = ceil($jumData / $dataPerPage);
												if ($noPage > 1) echo  "<td><a href='list_temuan.php?page=" . ($noPage - 1) . "&area=$area&tanggal=$tgl'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
												echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
												if ($noPage < $jumPage)  echo "<td><a href='list_temuan.php?page=" . ($noPage + 1) . "&area=$area&tanggal=$tgl'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> ";
												echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";

												?>
											</table>
										</div>
									</div>

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</html>

<?php require_once("../deft_foo.php"); ?>