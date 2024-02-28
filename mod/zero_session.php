<?php
$con=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");
session_start();
$_SESSION["start_session"] = time() - 86400;
$username = $_SESSION['username'];
$query_akses_user = "UPDATE cc147_main_users SET user_use = '0' WHERE username='$username'";
mysqli_query($con, $query_akses_user);

unset($_SESSION["username"]);
unset($_SESSION["jabatan"]);
session_destroy();
setcookie("username", time() - 86400);
setcookie("jabatan", time() - 86400);
header("Location: ../index.html");
