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

$query = "SELECT a.user_id,a.`name`,a.username,b.user3 ,b.user5, a.user_use, b.user6
FROM cc147_main_users AS a
INNER JOIN cc147_main_users_extended AS b ON a.user_id = b.id WHERE a.username = '$username' AND a.user_password = '$password' AND user_active <>'0'";
$resul =mysqli_query($con, $query);

if (mysqli_num_rows($resul) == 1 AND ($status != "" OR $status != NULL)){
	$row=mysqli_fetch_row($resul);
	$_SESSION["user_id"] = $row[0];
	$_SESSION["username"] = $row[2];
	$_SESSION["name"] = $row[1];
	$_SESSION["jabatan"] = $row[3];
	$jb = explode(" ",trim($row[3]));
	$_SESSION["jb"] = $jb[0];
	$_SESSION["area"] = $row[4];
	$_SESSION["cek_spv"] = $row[6];
	// $_SESSION["akses"] = $row[5];
		$tanggal = date("Y-m-d");
		$sql = "SELECT tanggal, login FROM app_wfh_wfo_status WHERE login = '$row[2]' AND tanggal = '$tanggal'";
		$hasil = mysqli_query($con, $sql);
		$total = mysqli_num_rows($hasil);
		if($total == 0 AND $row[3] == trim("Agent TAM")) {
			$query = "INSERT INTO app_wfh_wfo_status (login, nama, jabatan, kota, status, tanggal) VALUES ('$row[2]', '$row[1]', '$row[3]', '$row[4]', '$status', '$tanggal')";
			mysqli_query($con, $query);
			
		}

		header("Location:./mod/input.php");
	
} else {
	unset($_SESSION["username"]);
	?>  <script language="JavaScript">
            alert('Username atau Password yang anda masukkan tidak sesuai ...');
            document.location='index.html';
        </script>
    <?php
}

?>