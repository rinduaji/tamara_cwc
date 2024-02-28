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
$jabatan = $_SESSION["jabatan"];
if($jabatan != 'Supervisor QA TAM' AND $jabatan != 'qa' AND $jabatan != 'Duktek' AND $jabatan != 'Admin') {
	// print_r($jabatan);
	die();
}

$tgl = date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);
if ($Login != '') {
	$wlogin = "AND a.login = '$Login'";
}
if ($date != '') {
	$dt = explode("-", trim($date));
	$tgl = "$dt[2]-$dt[1]-$dt[0]";
}
if ($logagent <> '') {
	$wr = "AND a.login = $logagent";
}
if ($fastel <> '') {
	$wr = "AND a.fastel = $fastel";
}
if ($site == 'AllArea') {
	$area = "";
} else {
	$area = "b.user5 = '$site' AND";
}


$dataPerPage = 200;
if(isset($_GET['page']))
{
$noPage = $_GET['page'];
}
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;


if ($jb == "Tabber") {
	$whr = "WHERE $area a.follow ='2' AND (`upd_qco` = ' ' OR `upd_qco` IS NULL) $wr ORDER BY `tgl` asc ";
}
//AND a.input = 'New' AND upd_qco is NULL
else if ($jb == "Supervisor") {
	$whr = "WHERE $area a.follow = '3' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
} else {
	$whr = "WHERE $area a.follow in ('4','3','2','7') AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
}

$tanggal1 = date("Y-m-d", strtotime($tgl));
$tanggaldate1 = $tanggal1.' 00:00:00';
$tanggaldate2 = $tanggal1.' 23:59:59';

$query = "SELECT a.id,a.tgl,a.msisdn,a.type_p2p,a.login,c.user2,a.upd_qco,c.user5,c.user1,d.name,a.kategori FROM app_tam_p2p a INNER JOIN cc147_main_users_extended c ON a.login  = c.user1 INNER JOIN cc147_main_users d ON a.upd_qco=d.username WHERE a.tgl BETWEEN '$tanggaldate1' AND '$tanggaldate2' and a.status='Contacted' and a.kategori='Agree' and a.follow='2' ORDER BY a.upd_qco,a.tgl ASC";
// echo $query;


if ($id != "") {
	$query_edit = "UPDATE app_tam_p2p SET upd_qco='$username_login' WHERE id='$id'";
	mysqli_query($con, $query_edit);
}

//$Page = $offset;
?>

<!-- <!doctype html> -->
<html lang="en">
<title>App TAM</title>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					<div align="center" class="panel-heading">
						<b>FORM Data Share P2P</b>
					</div>
					<div>
						<div>
							<div class="row">
								<div class="col-md-12">
									<div class="card" style="margin-top: 20px;">
										<div class="header">
											<h4 class="title" style="color:#008B8B">Data QCO Share</h4>
										</div>
										<div style="overflow-x:auto;">
											<table class="table table-hover table-striped">
												<thead>
													<th align="center">
														<font color="red" face="Tahoma" size="2">No.
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Tanggal
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">MSISDN
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Type
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Login QCO
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Nama QCO
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Login Agent
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Nama Agent
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Area
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Kategori
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Action
													</th>
												</thead>
												<tbody>
													<?php
													$Page = $Page + 1;
													$jml = 0;
													//echo $query;
													$hasil = mysqli_query($con, $query) or die("Query gagal!");
													while ($data = mysqli_fetch_array($hasil)) {
														echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['tgl'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['msisdn'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['type_p2p'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['upd_qco'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['name'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['user1'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['user2'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['user5'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['kategori'] . "</th>
											
											<th align=\"center\" style=\"font-size:10px\">
											<button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#sendQCO" . $data['id'] . "\">Kirim QCO</button>
											</th>
											";
													?>
														<!-- Modal Edit-->
														<div class="modal fade" id="sendQCO<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Libur" aria-hidden="true" data-backdrop="false">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Form Pilih QCO</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<form action="form_data_share_p2p.php" method="POST" id="FormRekom_qa">
																		<div class="modal-body">
																			<div class="form-group">
																				<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $data['id']; ?>" required>
																				<label for="username_login">Username QA / QCO</label>
																				<div class="form-group input-group">
																					<input type="hidden" name="item-id" id="item-id">
																					<input type="text" name="username_login" id="item-username" class="form-control" value="<?= $data['upd_qco'] ?>" required readonly>
																					<span class="input-group-btn">
																						<button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
																							<i class="fa fa-search"></i>
																						</button>
																					</span>
																				</div>
																				<div class="form-group">
																					<label for="name">Name</label>
																					<input type="text" class="form-control" name="name" id="item-name" value="<?= $data['name'] ?>" required readonly>
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer">
																			<button type="submit" class="btn btn-primary">Save</button>
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

										</div>
										<table>
											<?php
											//$query   = "SELECT COUNT(*) AS jumData FROM app_tam_hvc as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
											//echo $query;
											//$hasil   = mysqli_query($con,$query);
											//$data    = mysqli_fetch_array($hasil);
											//$jumData = $data['jumData'];
											//$jumPage = ceil($jumData/$dataPerPage);
											//if ($noPage > 1) echo  "<td><a href='approve.php?page=".($noPage-1)."&site=$site'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
											//echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
											//if ($noPage < $jumPage)  echo "<td><a href='approve.php?page=".($noPage+1)."&site=$site'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> "; 
											//echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";

											?>
										</table>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-item" tabindex="-1" role="dialog" aria-labelledby="Form Libur" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Pilih Username</h4>
			</div>
			<div class="modal-body table-responsive">
				<table class="table table-bordered table-striped" id="table1" style="width:100%;text-align:center;">
					<thead>
						<tr>
							<th>No</th>
							<th>username</th>
							<th>Nama</th>
							<th>jabatan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$number = 0;
						$query_login = "SELECT * FROM cc147_main_users a INNER JOIN cc147_main_users_extended b ON a.username = b.user1 WHERE b.user3='Tabber TAM'";
						$hasil_login = mysqli_query($con, $query_login) or die("Query gagal!");
						while ($data1 = mysqli_fetch_array($hasil_login)) {
						?>
							<tr>
								<td><?= ++$number ?></td>
								<td><?= $data1['username'] ?></td>
								<td><?= $data1['name'] ?></td>
								<td><?= $data1['user3'] ?></td>
								<td>
									<button class="btn btn-xs btn-info" id="select" data-id="<?= $data1['id'] ?>" data-username="<?= $data1['username'] ?>" data-name="<?= $data1['name'] ?>" data-jabatan="<?= $data1['user3'] ?>">
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

</html>
<?php require_once("../deft_foo.php"); ?>