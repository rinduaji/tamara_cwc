<?php
require_once("../deft_nav.php");
include("./assets/conn.php");
if ($_GET) {
    extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
    extract($_POST, EXTR_OVERWRITE);
}

if ($_GET['status'] == "succes") {
    echo "<script>swal('Data Telah Berhasil di simpan!', '', 'success');</script>";
} else if ($_GET['status'] == "gagal") {
    echo "<script>swal('Data Gagal di simpan!', '', 'error');</script>";
} else if ($_GET['status'] == "pass_not_same") {
    echo "<script>swal('Password lama tidak sama!', '', 'warning');</script>";
} else if ($_GET['status'] == "gagal_pola") {
    echo "<script>swal('Data Import excel terdapat pola yang tidak sesuai dengan menu master pola!', '', 'warning');</script>";
}  else if ($_GET['status'] == "gagal_user") {
    echo "<script>swal('Data Import excel anda Sudah ada pada database atau sudah pernah di upload!', '', 'warning');</script>";
}  else if ($_GET['status'] == "gagal_periode") {
    echo "<script>swal('Data Import excel anda untuk periode belum ada / tidak sesuai format (exp:202201)!', '', 'warning');</script>";
}  else if ($_GET['status'] == "gagal_kolom") {
    echo "<script>swal('Data Import excel anda harus memasukkan rooster selama 1 bulan pada periode tersebut!', '', 'warning');</script>";
}


$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");
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
                        <h4 class="title">Import Rooster<small> >>> <?php echo $login; ?></small></h4>
                    </div>

                    <form id='input' name="demoform" action='import_rooster_proses.php' method='post' accept-charset='UTF-8' enctype="multipart/form-data">
                        <input type="hidden" name="login" value="<?= $login ?>">
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Download Template Rooster Excel</label>
                                        <br>
                                        <a href="../uploads/template_upload_rooster.xlsx" class="btn btn-primary">Template Excel Rooster</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">File Excel Data Rooster</label>
                                        <input class="form-control" type="file" name="excel1" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <input type="reset" class="btn btn-danger" onclick="formReset('form'); return false;" value="Reset">
                        <input type="submit" name="Save" class="btn btn-danger" value="Simpan" >


                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php require_once("../deft_foo.php"); ?>