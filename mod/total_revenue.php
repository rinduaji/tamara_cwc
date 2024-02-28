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
if ($tgl == '') {
    $tgl = date("Y-m-d H:i:s");
}
if ($Login != '') {
    $wlogin = "AND login = '$Login'";
}
if ($date1 != '') {
    $tgl = date("Y-m-d", strtotime($date1));
}
if ($date2 != '') {
    $tgl = date("Y-m-d", strtotime($date2));
}
if ($logagent <> '') {
    $wr = "AND login = $logagent";
}
if ($fastel <> '') {
    $wr = "AND fastel = $fastel";
}
if ($site == 'AllArea') {
    $area = "";
} else {
    $area = "AND area = '$site'";
}

$dataPerPage = 20;
if (isset($_GET['page'])) {
    $noPage = $_GET['page'];
} else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;



$query = "SELECT DATE_FORMAT(tgl, '%Y-%m-%d') as tanggal, login, nama_agent, area, jenis,  COUNT(jenis) as tot_jenis, SUM(add_on_tsel) as revenue FROM app_tam_data2 
WHERE area='$site' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND valid = 'Valid' AND tgl BETWEEN '$date1 00:00:00' AND '$date2 23:59:59' 
GROUP BY tanggal, login, jenis ORDER BY tanggal, area, login, jenis ASC;";
//echo $query;
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


                    <form id='input' name="demoform" action='total_revenue.php' method='post' accept-charset='UTF-8'>

                        <div align="center" class="panel-heading">
                            <b>TOTAL REVENUE</b>
                        </div>
                        <div>
                            <div class="row row-centered">
                                <div align="center" class="col-md-4">
                                </div>
                                <div align="center" class="col-md-4">

                                    <tr>
                                        <div class="form-group">
                                            <label style="color:#008B8B">Tanggal Awal</label>
                                            <input class="form-control" type="date" name="date1" placeholder="ex: 2018-12-31" required />
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">
                                            <label style="color:#008B8B">Tanggal Akhir</label>
                                            <input class="form-control" type="date" name="date2" placeholder="ex: 2018-12-31" required />
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="form-group">

                                            <label class="control-label" style="color:#008B8B">Agent Site</label>
                                            <select name="site" class="form-control" value="<? echo $exp?>">
                                                <option value="">Pilih</option>
                                                <option value="Bandung">Bandung</option>
                                                <option value="BSD">BSD</option>
                                                <option value="TANGERANG">TANGERANG</option>
                                                <option value="Malang">Malang</option>
                                                <option value="Makassar">Makassar</option>
                                                <option value="Medan">Medan</option>
                                                <option value="Semarang">Semarang</option>
                                            </select>
                                            </label>

                                        </div>
                                    </tr>
                                    <tr>
                                        <input name="search" type="submit" class="btn btn-danger" Value="Search">
                                    </tr>
                                    <?php

                                    if (isset($_POST['search'])) {
                                        // header('Content-Type: text/csv');
                                        // header('Content-Disposition: attachment; filename=csv_total_revenue.csv');
                                        // $output = fopen("php://output", "w");
                                        // fputcsv($output, array('Tanggal', 'Login', 'Nama', 'Area', 'Revenue'));
                                        // $result = mysqli_query($con, $query) or die("Query gagal!");
                                        // while ($row = mysqli_fetch_assoc($result)) {
                                        //     fputcsv($output, $row);
                                        // }
                                        // fclose($output);
                                        $allData = "";
                                        $result = mysqli_query($con, $query) or die("Query gagal!");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $allData .= $row['tanggal'].','.$row['login'].','.$row['nama_agent'].','.$row['area'].','.$row['jenis'].','.$row['tot_jenis'].','.$row['revenue']."\n";
                                        }
                                        $response = "data:text/csv;charset=utf-8,Tanggal,Login,Nama,Area,Jenis,Total Jenis,Revenue\n";
                                        $response.=$allData;
                                    ?>
                                    <tr>
                                        <a href='<?=$response?>' class="btn btn-primary" download="Data TAM - Total Revenue_<?=$tgl?>_<?=$site?>.csv">Export to CSV</a>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tr>

                                </div>
                            </div>

                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card ">
                                            <div class="header">
                                                <h4 class="title" style="color:#008B8B">Rekap per hari</h4>
                                            </div>
                                            <?php
                                            if (isset($_POST['search'])) {
                                                if ($site == "") {
                                                    echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Agent Site belum dipilih !</div>";
                                                }
                                            }
                                            ?>
                                            <div style="overflow-x:auto;padding:20px 20px 20px 20px">
                                                <table class="table table-hover table-striped">
                                                    <thead>

                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="3"><strong>Tanggal</strong>
                                                        </th>
                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="3"><strong>Login</strong>
                                                        </th>
                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="3"><strong>Nama</strong>
                                                        </th>
                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="3"><strong>Area</strong>
                                                        </th>
                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="3"><strong>Jenis</strong>
                                                        </th>
                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="3"><strong>Total Jenis</strong>
                                                        </th>
                                                        <th align="center">
                                                            <font color="red" face="Tahoma" size="3"><strong>REVENUE</strong>
                                                        </th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        //$Page = $Page + 1;$jml=0;
                                                        //echo $query;
                                                        $hasil = mysqli_query($con, $query) or die("Query gagal!");
                                                        while ($data = mysqli_fetch_array($hasil)) {
                                                            echo "<tr>
										
											<th align=\"center\" style=\"font-size:12px\">" . date('l, d F Y', strtotime($data['tanggal'])) . "</th>
											<th align=\"center\" style=\"font-size:12px\">" . $data['login'] . "</th>
											<th align=\"center\" style=\"font-size:12px\">" . $data['nama_agent'] . "</th>
											<th align=\"center\" style=\"font-size:12px\">" . strtoupper($data['area']) . "</th>
                                            <th align=\"center\" style=\"font-size:12px\">" . $data['jenis'] . "</th>
                                            <th align=\"center\" style=\"font-size:12px\">" . $data['tot_jenis'] . "</th>
											<th align=\"center\" style=\"font-size:12px\">" . $data['revenue'] . "</th>
											";

                                                            //if ($jb=="Tabber" && $data['upd_qco']==""){echo "<th align=\"center\"><a href=\"form_tabber.php?id=$data[id]\">Approve</a></th>";}
                                                            //else if ($jb=="Tabber" && $data['upd_qco']<>"$uname"){echo "<th align=\"center\">Handel $qco</th>";}
                                                            //else if ($jb=="Tabber" && $data['upd_qco']=="$uname"){echo "<th align=\"center\"><a href=\"form_tabber.php?id=$data[id]\">My Approve</a></th>";}
                                                            //else if ($jb=="Supervisor"){echo "<th align=\"center\"><a href=\"form_spv.php?id=$data[id]\">Approve</a></th>";}										
                                                            //else if ($jb=="Koordinator"){echo "<th align=\"center\">$qco | $tl </a></th>";}
                                                            //else { echo "<th align=\"center\">#</a></th>";}
                                                            //$Page = $Page + 1;										
                                                        }

                                                        ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <table>
                                                <?php
                                                //$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
                                                //echo $query;
                                                $hasil   = mysqli_query($con, $query);
                                                $data    = mysqli_fetch_array($hasil);
                                                //$jumData = $data['jumData'];
                                                //$jumPage = ceil($jumData/$dataPerPage);
                                                //if ($noPage > 1) echo  "<td><a href='approve.php?page=".($noPage-1)."&site=$site'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
                                                //echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
                                                //if ($noPage < $jumPage)  echo "<td><a href='approve.php?page=".($noPage+1)."&site=$site'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> "; 
                                                //echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";

                                                if ($_POST['date'] and $_POST['exp'] and $_POST['site']) {
                                                    echo "$tgl";
                                                    //include "export.php";
                                                }

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

</html>
<?php require_once("../deft_foo.php"); ?>