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
// if ($Login != '') {
//     $wlogin = "AND a.login = '$Login'";
// }
// if ($date != '') {
//     $dt = explode("-", trim($date));
//     $tgl = "$dt[2]-$dt[1]-$dt[0]";
// }
// if ($logagent <> '') {
//     $wr = "AND a.login = $logagent";
// }
// if ($fastel <> '') {
//     $wr = "AND a.fastel = $fastel";
// }
// if ($site == 'AllArea') {
//     $area = "";
// } else {
//     $area = "b.user5 = '$site' AND";
// }


// //$dataPerPage = 20;
// //if(isset($_GET['page']))
// //{
// //$noPage = $_GET['page'];
// //}
// //else $noPage = 1;
// //$offset = ($noPage - 1) * $dataPerPage;


// if ($jb == "Tabber") {
//     $whr = "WHERE $area a.follow ='2' AND (`upd_qco` = ' ' OR `upd_qco` IS NULL) $wr ORDER BY `tgl` asc ";
// }
// //AND a.input = 'New' AND upd_qco is NULL
// else if ($jb == "Supervisor") {
//     $whr = "WHERE $area a.follow = '3' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
// } else {
//     $whr = "WHERE $area a.follow in ('4','3','2','7') AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
// }

$bulan = date("m", strtotime($tanggal));
$tahun = date("Y", strtotime($tanggal));
$month = date("m", strtotime($tgl));
$year = date("Y", strtotime($tgl));

if (isset($tanggal)) {
    $query = "SELECT * FROM app_tam_libur a INNER JOIN cc147_main_users b ON a.username=b.username WHERE MONTH(a.tanggal) = '$bulan' AND YEAR(a.tanggal) = '$tahun'";
} else {
    $query = "SELECT * FROM app_tam_libur a INNER JOIN cc147_main_users b ON a.username=b.username WHERE MONTH(a.tanggal) = '$month' AND YEAR(a.tanggal) = '$year'";
}
if ($id != "") {
    if (isset($username_login)) {

        $query_edit = "UPDATE app_tam_libur SET tanggal='$tanggal_libur', username='$username_login', jabatan='$jabatan', keterangan='$keterangan' WHERE id='$id'";
        mysqli_query($con, $query_edit);
    } else {
        $query_delete = "DELETE FROM app_tam_libur WHERE id='$id'";
        mysqli_query($con, $query_delete);
    }
}
if ($id == "") {
    if (isset($username_login)) {

        $query_insert = "INSERT INTO app_tam_libur (tanggal, username, jabatan, keterangan) VALUES ('$tanggal_libur', '$username_login', '$jabatan', '$keterangan')";
        mysqli_query($con, $query_insert);
    }
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
                        <b>FORM LIBUR</b>
                    </div>
                    <div>
                        <div class="row row-centered">
                            <div align="center" class="col-md-4">
                            </div>
                            <div align="center" class="col-md-4">
                                <form id='input' name="demoform" action='form_libur.php' method='post' accept-charset='UTF-8'>
                                    <tr>
                                    <tr>
                                        <div class="form-group">
                                            <label style="color:#008B8B">Bulan dan Tahun</label>
                                            <input class="form-control input-sm" type="month" name="tanggal">
                                        </div>
                                    </tr>
                                    <tr>
                                        <input name="search" type="submit" class="btn btn-danger" Value="Search">
                                    </tr>
                                    </tr>
                                </form>
                            </div>
                        </div>
                        <div>

                            <button class="btn btn-primary btn" style="margin: 20px 20px" data-toggle="modal" data-target="#formLiburAdd" id="tombol">Tambah Data</button>

                            <!-- Modal Tambah-->
                            <div class="modal fade" id="formLiburAdd" tabindex="-1" role="dialog" aria-labelledby="Form Libur" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Libur Tambah</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="form_libur.php" method="POST" id="FormRekom_qa">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <?php
                                                    $id = $data['id'];
                                                    $jabatan = $data['jabatan'];
                                                    $nama = $data['nama'];
                                                    $username = $data['username'];
                                                    ?>
                                                    <input type="hidden" class="form-control" name="id" id="id" required>
                                                    <label for="username_login">Username</label>
                                                    <div class="form-group input-group">
                                                        <input type="hidden" name="item-id" id="item-id">
                                                        <input type="text" name="username_login" id="item-username" class="form-control" required readonly>
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item" id="tombol">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" name="name" id="item-name" required readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jabatan">Jabatan</label>
                                                        <input type="text" class="form-control" name="jabatan" id="item-jabatan" required readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tanggal">Tanggal</label>
                                                        <input type="date" class="form-control" name="tanggal_libur" id="tanggal" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="keterangan">Keterangan</label>
                                                        <textarea class="form-control" name="keterangan" id="keterangan" required></textarea>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="header">
                                            <h4 class="title" style="color:#008B8B">Data Libur</h4>
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
                                                        <font color="red" face="Tahoma" size="2">Login
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Nama
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Jabatan
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Keterangan
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
											<th align=\"center\" style=\"font-size:10px\">" . date("l, d F Y", strtotime($data['tanggal'])) . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['username'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['name'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['jabatan'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['keterangan'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">
                                                <button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#formLiburEdit" . $data['id'] . "\">Update</button>
                                                <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#formLiburDelete" . $data['id'] . "\">Delete</button>
                                            </th>
                                            ";
                                                    ?>

                                                        <!-- Modal Edit-->
                                                        <div class="modal fade" id="formLiburEdit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Libur" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Form Libur Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="form_libur.php" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <?php
                                                                                $id = $data['id'];
                                                                                $jabatan = $data['jabatan'];
                                                                                $nama = $data['name'];
                                                                                $username = $data['username'];
                                                                                $tanggal = $data['tanggal'];
                                                                                $keterangan = $data['keterangan'];
                                                                                ?>
                                                                                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
                                                                                <label for="username_login">Username</label>
                                                                                <div class="form-group input-group">
                                                                                    <input type="hidden" name="item-id" id="item-id">
                                                                                    <input type="text" name="username_login" id="item-username" class="form-control" value="<?= $username ?>" required readonly>
                                                                                    <span class="input-group-btn">
                                                                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                                                                            <i class="fa fa-search"></i>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Name</label>
                                                                                    <input type="text" class="form-control" name="name" id="item-name" value="<?= $nama ?>" required readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="jabatan">Jabatan</label>
                                                                                    <input type="text" class="form-control" name="jabatan" id="item-jabatan" value="<?= $jabatan ?>" required readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="tanggal">Tanggal</label>
                                                                                    <input type="date" class="form-control" name="tanggal_libur" id="tanggal" value="<?= $tanggal ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="keterangan">Keterangan</label>
                                                                                    <textarea class="form-control" name="keterangan" id="keterangan" required><?= $keterangan ?></textarea>
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

                                                        <!-- Modal Delete-->
                                                        <div class="modal fade" id="formLiburDelete<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Libur" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Form Libur Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="form_libur.php" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
                                                                            <h6 style="text-transform:capitalize;font-weight:normal;">Apakah Anda yakin menghapus data ini ?</h6>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Delete</button>
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
                                            //$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
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
                        $query_login = "SELECT * FROM cc147_main_users a INNER JOIN cc147_main_users_extended b ON a.username = b.user1 WHERE b.user3='qa' OR b.user3='Tabber TAM'";
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