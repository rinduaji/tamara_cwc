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

if ($tgl == '') {
    $tgl = date("Y-m-d H:i:s");
}
if ($fastel != '') {
    $wlogin = "AND a.fastel = '$fastel'";
}
if ($fastel != '') {
    $wlogin = "AND a.fastel = '$fastel'";
}
if ($date != '') {
    $tgl = date("Y-m-d", strtotime($date));
}

if ($id != '' and $follow == 2) {
    $query_update = "UPDATE app_tam_data2 SET follow='2', valid='Not Valid' WHERE id='$id'";
    mysqli_query($con, $query_update);
}

if ($id != '' and $follow == 5) {
    $query_update = "UPDATE app_tam_data2 SET follow='5', valid='Not Valid' WHERE id='$id'";
    mysqli_query($con, $query_update);
}


$dataPerPage = 10;
if (isset($_GET['page'])) {
    $noPage = $_GET['page'];
} else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;
$Page = $offset;



?>

<!doctype html>
<html lang="en">
<title>App TAM</title>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">


                    <form id='input' name="demoform" action='update_status.php' method='post' accept-charset='UTF-8'>
                        <div>
                            <div align="center" class="panel-heading">
                                <b>UPDATE STATUS</b>
                            </div>
                            <div class="row row-centered">
                                <div align="center" class="col-md-4">
                                </div>
                                <div align="center" class="col-md-4">
                                    <table class="table table-hover table-striped">
                                        <tr>
                                            <div class="form-group">
                                                <label style="color:#008B8B">Tanggal</label>
                                                <input class="form-control" type="date" name="date" placeholder="ex: 2018-12-31" required />
                                            </div>
                                        </tr>
                                        <tr>
                                            <div class="form-group">
                                                <label style="color:#008B8B">Fastel</label>
                                                <input class="form-control" type="text" name="fastel" />
                                            </div>
                                        </tr>
                                        <tr>
                                            <input name="search" type="submit" class="btn btn-info" Value="Search">
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <?php
                            if ($id != '' and $follow == 2) {
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Update Status!</strong> Status telah diubah ke NEED APPROVE QCO.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                            }

                            if ($id != '' and $follow == 5) {
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Update Status!</strong> Status telah diubah ke Recall Agent.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                            }
                            ?>
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
                                                            <font color="red" face="Tahoma" size="2">Nama Agent
                                                        </th>

                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="2">Fastel
                                                        </th>
                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="2">Status
                                                        </th>
                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="2">Action
                                                        </th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $query = "SELECT a.id,a.tgl,a.login,b.user2,a.fastel,a.follow, c.keterangan FROM
													app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN app_tam_follow AS c ON a.follow=c.follow WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' $wlogin ORDER BY a.tgl DESC LIMIT $offset, $dataPerPage";
                                                        //echo "$query";
                                                        $Page = $Page + 1;
                                                        $hasil = mysqli_query($con, $query) or die("Query gagal!");
                                                        while ($data = mysqli_fetch_array($hasil)) {
                                                            echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
											    <th align=\"center\" style=\"font-size:10px\">" . date("l, d F Y h:i:s", strtotime($data['tgl'])) . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['login'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['user2'] . "</th>
												
												<th align=\"center\" style=\"font-size:10px\">" . $data['fastel'] . "</th>
												<th align=\"center\" style=\"font-size:10px\">" . $data['keterangan'] . "</th>
                                                <th align=\"center\" style=\"font-size:10px\">
                                                    <a href=\"update_status.php?id=" . $data['id'] . "&follow=2\" class=\"btn btn-primary\">Kembali ke QCO</a>
                                                    <a href=\"update_status.php?id=" . $data['id'] . "&follow=5\" class=\"btn btn-primary\">Kembali ke Recall Agent</a>
                                                </th>
												";
                                                            $Page = $Page + 1;
                                                        }


                                                        ?>
                                                    </tbody>
                                                </table>
                                                <table>
                                                    <?php
                                                    $query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN app_tam_follow AS c ON a.follow=c.follow WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' $wlogin";
                                                    //echo $query;
                                                    $hasil   = mysqli_query($con, $query);
                                                    $data    = mysqli_fetch_array($hasil);
                                                    $jumData = $data['jumData'];
                                                    $jumPage = ceil($jumData / $dataPerPage);
                                                    if ($noPage > 1) echo  "<td><a href='form_agent.php?page=" . ($noPage - 1) . "&site=$site&tgl=$tgl&Login=$Login'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
                                                    echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
                                                    if ($noPage < $jumPage)  echo "<td><a href='form_agent.php?page=" . ($noPage + 1) . "&site=$site&tgl=$tgl&Login=$Login'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> ";
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
                </form>
            </div>
        </div>
    </div>
</div>

</html>
<?php require_once("../deft_foo.php"); ?>