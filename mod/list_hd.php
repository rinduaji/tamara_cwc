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
$tgl = date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);



$dataPerPage = 300;
if(isset($_GET['page']))
{
$noPage = $_GET['page'];
}
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;

if(isset($_POST['handel'])) {
    $sql = "UPDATE app_tam_data2 SET upd_hd = '$login' WHERE id='$id'"; 
    if(mysqli_query($con,$sql)) {
        echo "<div class=\"alert alert-success\">Data Berhasil di Handel oleh ".$login." !</div>"; 
    }
    else {
        echo "<div class=\"alert alert-danger\">Data Gagal di Handel oleh ".$login." !</div>"; 
    }
    clearstatcache();
	$location="list_hd.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}

$query = "SELECT * FROM app_tam_data2 WHERE follow = '6' AND valid = 'Valid' AND kategori = 'Agree' AND status = 'Contacted' AND jenis = 'Bundling Netflix' AND status_hd = '0' AND (upd_hd is NULL OR upd_hd = '' OR upd_hd = '$login') ORDER BY tgl, login ASC";


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
						<b>Data Approve Netflix HD</b>
					</div>
					<div>
						<div>
							<div class="row">
								<div class="col-md-12">
									<div class="card" style="margin-top: 20px;">
										<div class="header">
											<h4 class="title" style="color:#008B8B">Data Approve Netflix HD</h4>
										</div>
										<div style="overflow-x:auto;">
											<table class="table table-hover table-striped">
												<thead>
													<th align="center">
														<font color="red" face="Tahoma" size="2">NO
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Tanggal Agree
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Login Agent
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Site
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Fastel
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Nama Pemilik
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">NO TLP
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Regional
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Jenis Call
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Status Call
													</th>
													
													<th align="center">
														<font color="red" face="Tahoma" size="2">Kategori
													</th>
													
													<th align="center">
														<font color="red" face="Tahoma" size="2">Nama Penerima
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Valid
													</th>
                                                    <th align="center">
														<font color="red" face="Tahoma" size="2">UPD HD
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
														echo "<tr>
																<th align=\"center\" style=\"font-size:10px\">$Page</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['tgl'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['login'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['area'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['fastel'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['nama_dm'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['tlp'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['reg'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['jenis'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['status'] . "</th>
                                                                <th align=\"center\" style=\"font-size:10px\">" . $data['kategori'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['penerima'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['valid'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['upd_hd'] . "</th>";
                                                        if($data['upd_hd'] != "") {
														echo   "<th align=\"center\" style=\"font-size:10px\">
																	<a href=\"form_hd.php?id=".$data['id']."\" class=\"btn btn-primary\">APPROVE HD</a>
																</th>
															</tr>
														";
                                                        }
                                                        else {
                                                            echo   "<th align=\"center\" style=\"font-size:10px\">
                                                            <form action=\"list_hd.php?id=".$data['id']."\" method=\"POST\">
                                                            <button class=\"btn btn-warning\" name=\"handel\">MY HANDEL HD</button>
                                                            </form>
                                                        </th>
                                                    </tr>
                                                ";  
                                                        }
														$Page = $Page + 1;
													}

													?>
												</tbody>
											</table>

										</div>
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
</html>
<?php require_once("../deft_foo.php"); ?>