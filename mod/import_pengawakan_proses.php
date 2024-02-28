<?php
session_start();
include("../assets/conn.php");

require('../assets/PHPOffice/Classes/PHPExcel.php');
require('../assets/PHPOffice/Classes/PHPExcel/IOFactory.php');

$servername_moniqa = "10.194.176.158";
$username_moniqa = "appdev";
$password_moniqa = "appdev123";
$database_moniqa = "kinerja_tam";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$conn = @mysqli_connect("$servername_moniqa", "$username_moniqa", "$password_moniqa", "$database_moniqa");
//cek koneksi error atau tidak
if (!$conn) {
	echo "Error: " . mysqli_connect_error();
	exit();
}

$upd=$_POST['login'];
$lup=date('Y-m-d h:i:s');

if (isset($_POST['Save'])) {
    
    //upload data excel kedalam folder uploads
    $target_dir1 = "../uploads/" . basename($_FILES['excel1']['name']);
    
    // var_dump($target_dir1);
    // header("Location: ../../uploads/".basename($_FILES['excel1']['name']));
    move_uploaded_file($_FILES['excel1']['tmp_name'], $target_dir1);
    
    $load = PHPExcel_IOFactory::load($target_dir1);
    $sheets = $load->getActiveSheet()->toArray(null, true, true, true);
    // $sql = '';
    // $status = '';
    // print_r(count($sheets));
    for ($i = 3; $i <= count($sheets); $i++) {
        $username = trim($sheets[$i]['B']);
        $login_tl = trim($sheets[$i]['C']);
        $login_spv = trim($sheets[$i]['D']);
        $login_qco = trim($sheets[$i]['E']);
        // print_r($username);
        $cek = "SELECT * FROM cc147_main_users WHERE username = '$username'";
        $result = mysqli_query($con, $cek);
        $total_data = mysqli_num_rows($result);

        $cek_moniqa = "SELECT * FROM cc147_main_users WHERE username = '$username'";
        $result_moniqa = mysqli_query($conn, $cek_moniqa);
        $total_data_moniqa = mysqli_num_rows($result_moniqa);
        
        if(!(empty($username))) {
            if($total_data == 1 AND $total_data_moniqa == 1) {
                if(!(empty($login_tl))) {
                    $sql = "UPDATE cc147_main_users SET tl = '$login_tl' WHERE username = '$username'";
                    if(mysqli_query($con, $sql)) {   
                        $status = 'sukses';
                    }
                    else {
                        $status = 'erorr';
                    }

                    $sql_moniqa = "UPDATE cc147_main_users SET nama_tl = '$login_tl' WHERE username = '$username'";
                    if(mysqli_query($conn, $sql_moniqa)) {   
                        $status = 'sukses';
                    }
                    else {
                        $status = 'erorr';
                    }
                }
                if(!(empty($login_spv))) {
                    $sql = "UPDATE cc147_main_users SET spv = '$login_spv' WHERE username = '$username'";
                    if(mysqli_query($con, $sql)) {   
                        $status = 'sukses';
                    }
                    else {
                        $status = 'erorr';
                    }
                }
                if(!(empty($login_qco))) {
                    $sql = "UPDATE cc147_main_users SET qco = '$login_qco' WHERE username = '$username'";
                    if(mysqli_query($con, $sql)) {   
                        $status = 'sukses';
                    }
                    else {
                        $status = 'erorr';
                    }

                    $sql_moniqa = "UPDATE cc147_main_users SET qco = '$login_qco' WHERE username = '$username'";
                    if(mysqli_query($conn, $sql_moniqa)) {   
                        $status = 'sukses';
                    }
                    else {
                        $status = 'erorr';
                    }
                }
            }
            else {
                $header = "Location: import_pengawakan.php?status=gagal&username=".$username."";
                print_r($header);
                header($header);
            }
        }
        else {
            $header = "Location: import_pengawakan.php?status=gagal&username=".$username."";
            print_r($header);
            // header($header);
        }
    }

    unlink($target_dir1);
    if($status == 'sukses') {
        header("Location: import_pengawakan.php?status=succes");
    }
    elseif($status == 'erorr') {
        header("Location: import_pengawakan.php?status=gagal");
    }
  

} else {
    header("Location: import_pengawakan.php?status=gagal");
}
