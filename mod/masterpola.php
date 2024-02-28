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
$area = $_SESSION["area"];
$lup1 = date("Y-m-d h:i:s");
print_r($save);

$tgl = date("Y-m-d");

if ($date != '') {
    $dt = explode("-", trim($date));
    $tgl = "$dt[2]-$dt[1]-$dt[0]";
}

$month = date("m", strtotime($tgl));
$year = date("Y", strtotime($tgl));

if(isset($save)) {
    if ($id == "") {
        $query_insert = "INSERT INTO app_tam_master_pola (pola, masuk, pulang, ist1, ist2, ist3, ist4, jabatan, upd, lup) VALUES ('$pola', '$masuk', '$pulang', '$ist1', '$ist2', '$ist3', '$ist4', '$jabatan', '$upd', '$lup1')";

        if (!mysqli_query($con, $query_insert)) {
            die("Query gagal dijalankan: " . mysqli_errno($con) .
            " - " . mysqli_error($con));
        } else {                
            echo "<script>alert('Data berhasil Disimpan.');window.location='masterpola.php';</script>";
        }
    }
    else {
        if($upd == ''){
            $query_delete = "DELETE FROM app_tam_master_pola WHERE id='$id'";
            if (!mysqli_query($con, $query_delete)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
            } else {
                echo "<script>alert('Data berhasil dihapus.');window.location='masterpola.php';</script>";
            }
        }
        else {
            $query = "UPDATE app_tam_master_pola SET pola='$pola', masuk='$masuk', pulang='$pulang', ist1='$ist1', ist2='$ist2', ist3='$ist3', ist4='$ist4', upd='$upd', lup='$lup1', jabatan='$jabatan' WHERE id='$id'";
            if (!mysqli_query($con, $query)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='masterpola.php';</script>";
            }
        }
    }
}
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
                        <b>MASTER POLA</b>
                    </div>
                    <div>
                        <div>
                            <button class="btn btn-primary btn" style="margin: 20px 20px" data-toggle="modal" data-target="#formBeritaAdd">Tambah Data</button>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="header">
                                            <h4 class="title" style="color:#008B8B">Data Master Pola</h4>
                                        </div>
                                        <div style="overflow-x:auto;">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">NO
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Pola
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Masuk
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Pulang
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Istirahat 1
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Istirahat 2
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Istirahat 3
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Istirahat 4
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">UPD
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">LUP
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Action
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $Page = 1;
                                                    $jml = 0;
                                                    //echo $query;
                                                    $query = "SELECT * FROM app_tam_master_pola";
                                                    $hasil = mysqli_query($con, $query) or die("Query gagal!");
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['pola'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['masuk'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['pulang'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['ist1'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['ist2'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['ist3'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['ist4'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['upd'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['lup'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">
                                                <button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#formSoalEdit" . $data['id'] . "\">Update</button>
                                                <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#formSoalDelete" . $data['id'] . "\">Delete</button>
                                            </th>";

                                                    ?>
                                                    <div class="modal fade" id="formSoalEdit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Master Pola Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="masterpola.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <?php
                                                                                $id = $data['id'];
                                                                                $tanggal = $data['lup'];
                                                                                ?>
                                                                                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
                                                                                <div class="form-group">
                                                                                    <label for="upd">Username</label>
                                                                                    <input type="text" name="upd" id="item-username1" class="form-control" value="<?= $login ?>" required readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="pola">Pola</label>
                                                                                    <input type="text" class="form-control" name="pola" id="item-name1" value="<?= $data['pola'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="masuk">Masuk</label>
                                                                                    <input type="text" class="form-control" name="masuk" id="item-name1" value="<?= $data['masuk'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="pulang">Pulang</label>
                                                                                    <input type="text" class="form-control" name="pulang" id="item-name1" value="<?= $data['pulang'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ist1">Istirahat 1</label>
                                                                                    <input type="text" class="form-control" name="ist1" id="item-name1" value="<?= $data['ist1'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ist2">Istirahat 2</label>
                                                                                    <input type="text" class="form-control" name="ist2" id="item-name1" value="<?= $data['ist2'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ist3">Istirahat 3</label>
                                                                                    <input type="text" class="form-control" name="ist3" id="item-name1" value="<?= $data['ist3'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ist4">Istirahat 4</label>
                                                                                    <input type="text" class="form-control" name="ist4" id="item-name1" value="<?= $data['ist4'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="hidden" class="form-control" name="lup" id="lup" value="<?=$lup1?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="jabatan">Jabatan</label>
                                                                                    <select class="form-control" name="jabatan" id="jabatan" required>
                                                                                        <option value="">-- Pilih Jabatan --</option>
                                                                                    <?php 
                                                                                        $query_jenis = "SELECT * FROM app_jabatan WHERE status='AKTIF'";
                                                                                        $hasil_jenis = mysqli_query($con, $query_jenis) or die("Query gagal!");
                                                                                        while ($data_jenis = mysqli_fetch_array($hasil_jenis)) {
                                                                                    ?>
                                                                                            <option value="<?=$data_jenis['KodeJabatan']?>" <?=($data_jenis['KodeJabatan'] == $data['jabatan']) ? 'Selected' : '';?>><?=$data_jenis['KodeJabatan']?></option>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal Delete-->
                                                        <div class="modal fade" id="formSoalDelete<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Master Pola Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="masterpola.php" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" class="form-control" name="id" id="id" value="<?=$data['id'] ?>" required>
                                                                            <h6 style="text-transform:capitalize;font-weight:normal;">Apakah Anda yakin menghapus data ini ?</h6>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary" name="save">Delete</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    $Page++;
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
<!-- Modal Tambah-->
<div class="modal fade" id="formBeritaAdd" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Master Pola Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="masterpola.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                        $id = $data['id'];
                        $jabatan = $data['jabatan'];
                        ?>
                        <input type="hidden" class="form-control" name="id" id="id" required>
                        <label for="upd">Username</label>
                        <div class="form-group">
                            <input type="hidden" name="id" id="id">
                            <input type="text" name="upd" id="item-username1" class="form-control" value="<?= $login ?>" required readonly>
                        </div>
                        <div class="form-group">
                                                                                    <label for="pola">Pola</label>
                                                                                    <input type="text" class="form-control" name="pola" id="item-name1" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="masuk">Masuk</label>
                                                                                    <input type="text" class="form-control" name="masuk" id="item-name1"  required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="pulang">Pulang</label>
                                                                                    <input type="text" class="form-control" name="pulang" id="item-name1" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ist1">Istirahat 1</label>
                                                                                    <input type="text" class="form-control" name="ist1" id="item-name1" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ist2">Istirahat 2</label>
                                                                                    <input type="text" class="form-control" name="ist2" id="item-name1">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ist3">Istirahat 3</label>
                                                                                    <input type="text" class="form-control" name="ist3" id="item-name1">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="ist4">Istirahat 4</label>
                                                                                    <input type="text" class="form-control" name="ist4" id="item-name1">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="hidden" class="form-control" name="lup" id="lup" value="<?=$lup1?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="jabatan">Jabatan</label>
                                                                                    <select class="form-control" name="jabatan" id="jabatan" required>
                                                                                        <option value="">-- Pilih Jabatan --</option>
                                                                                    <?php 
                                                                                        $query_jenis = "SELECT KodeJabatan FROM app_jabatan WHERE status='AKTIF'";
                                                                                        $hasil_jenis = mysqli_query($con, $query_jenis) or die("Query gagal!");
                                                                                        while ($data_jenis = mysqli_fetch_array($hasil_jenis)) {
                                                                                    ?>
                                                                                            <option value="<?=$data_jenis['KodeJabatan']?>"><?=$data_jenis['KodeJabatan']?></option>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                    </select>
                                                                                </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

</html>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    </script>
<?php require_once("../deft_foo.php"); ?>