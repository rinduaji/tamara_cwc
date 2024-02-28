<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

ini_set("session.gc_maxlifetime",864000);
ini_set("session.cookie_lifetime",864000);
setcookie("username", time() + 86400);
setcookie("jabatan", time() + 86400);

session_start();
$_SESSION["start_session"] = time() + 86400;
include("./assets/conn.php");

//$username = $_POST['username'];
//$username = addslashes(trim($_POST['username']));
//$password = MD5($_POST['password']);
$username = mysqli_escape_string($con,$_POST['username']);
$password = MD5(mysqli_escape_string($con,$_POST['password']));
$status = mysqli_escape_string($con,strtolower($_POST['status']));

$query = "SELECT a.user_id,a.`name`,a.username,b.user3 ,b.user5, a.user_use, b.user6, a.user_quiz, a.spv
FROM cc147_main_users AS a
INNER JOIN cc147_main_users_extended AS b ON a.user_id = b.id WHERE a.username = '$username' AND a.user_password = '$password' AND user_active <>'0'";
$resul =mysqli_query($con, $query);

if (mysqli_num_rows($resul) == 1 ){
	$row=mysqli_fetch_row($resul);
	$_SESSION["user_id"] = $row[0];
	$_SESSION["username"] = $row[2];
	$_SESSION["name"] = $row[1];
	$_SESSION["jabatan"] = $row[3];
	$jb = explode(" ",trim($row[3]));
	$_SESSION["jb"] = $jb[0];
	$_SESSION["area"] = $row[4];
	$_SESSION["cek_spv"] = $row[6];
	$_SESSION["spv"] = $row[7];

	$tgl = date("Y-m-d");

	$hari = date("d", strtotime($tgl));
    $bulan = date("m", strtotime($tgl));
    $tahun = date("Y", strtotime($tgl));

	$query_cek_nilai = "SELECT nilai_total FROM app_tam_nilai WHERE login='$username' AND DAY(lup)='$hari' AND MONTH(lup)='$bulan' AND YEAR(lup)='$tahun'";
    $hasil_cek_nilai = mysqli_query($con, $query_cek_nilai) or die("Query gagal!");
    $total_cek_nilai = mysqli_num_rows($hasil_cek_nilai);
	$row1=mysqli_fetch_row($hasil_cek_nilai);
	
	// $_SESSION["akses"] = $row[5];
    if($row[7] == '1' AND ($row[3] == trim("Agent TAM") OR $row[3] == trim("Tabber TAM"))) {
		if($row1[0] == 100) {
			header("Location:./mod/input5.php");
		}
		else {
			if($row[7] == '1') {
				header("Location:./mod/input5.php");
			} 
			else {
				header("Location:./quiz/index.php");
			}
		}
    }
	else if($row[7] == '0' AND ($row[3] == trim("Agent TAM") OR $row[3] == trim("Tabber TAM"))){
		header("Location:./quiz/index.php");
    }
    else {
		header("Location:./mod/input5.php");
    }
} else {
	unset($_SESSION["username"]);
	?>  <script language="JavaScript">
            alert('Username atau Password yang anda masukkan tidak sesuai ...');
            document.location='index.html';
        </script>
    <?php
}

?>