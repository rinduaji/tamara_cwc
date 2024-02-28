<?php

$con=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");

$date = date("Y-m-d");
// $date = date("Y-m-d",strtotime('2022-11-12'));
$lup = date("Y-m-d H:i:s");
print_r($date);
$query_cek = "UPDATE app_wo_netflix_master SET `login` = NULL , tgl_upload = NULL WHERE status = '0' AND `login` IS NOT NULL AND tgl_upload IS NOT NULL";
$result_cek = mysqli_query($con, $query_cek) or die("Query gagal!");

$query_cek = "DELETE FROM app_wo_netflix WHERE `status` = '0' AND tgl_upload = DATE_SUB('$date',INTERVAL 1 DAY)";
$result_cek = mysqli_query($con, $query_cek) or die("Query gagal!");

?>