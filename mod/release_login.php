<?php
require_once("../deft_nav.php");
//include("./assets/conn.php"); 
if ($_GET) {
    extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
    extract($_POST, EXTR_OVERWRITE);
}
//$login = $_SESSION['username'];
//$nama = $_SESSION['name'];
$con = mysqli_connect("10.194.176.158", "appdev", "appdev123", "cwcv2");
$tgl = date("Y-m-d H:i:s");

if ($save) {

    $username = $txtlogin;
    $query_akses_user = "UPDATE cc147_main_users SET user_use = '0' WHERE username='$username'";
    if (mysqli_query($con, $query_akses_user)) {
        $status = "sukses";
    } else {
        $status = "gagal";
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
<title>App TAM</title>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title">RELEASE LOGIN<small> CWC </small></h4>
                        <br>


                    </div>
                    <?php
                    if ($status == 'sukses') {
                    ?>
                        <div class="alert alert-info alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Data Berhasil di Release !</strong>
                        </div>
                    <?php
                    }
                    else {
                    ?>
                         <div class="alert alert-alert alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Data Gagal di Release !</strong>
                        </div>
                    <?php
                    }
                    ?>
                    <form id='input' name="demoform" action='' method='post' accept-charset='UTF-8'>
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">login</label><br>
                                        <input class="form-control" type="text" name="txtlogin" value="<?php echo $txtlogin; ?>" placeholder="masukkan login" onkeypress="" required />

                                    </div>
                                </div>
                            </div>



                        </div>
                </div>

                <input type="reset" class="btn btn-info" onclick="formReset('form'); return false;" value="Reset">
                <input type="submit" name="save" class="btn btn-info" value="Release">

                </form>

            </div>
        </div>

    </div>
</div>
</div>
<?php
require_once("../deft_foo.php");
?>