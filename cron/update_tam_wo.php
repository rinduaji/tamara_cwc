<?php
$con_158=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");

$date = date("Y-m-d");
$date_yesterday = date("Y-m-d", strtotime("-1 days"));

$query1 = "update app_wo_halo set tgl_upload='$date' where tgl_upload='$date_yesterday' and status='0'";
mysqli_query($con_158, $query1);
$query2 = "update app_wo_hvc  set tgl_upload='$date' where tgl_upload='$date_yesterday' and status='0'";
mysqli_query($con_158, $query2);
$query3 = "update app_wo_p2p  set tgl_upload='$date' where tgl_upload='$date_yesterday' and status='0' and type_p2p='CROSS'";
mysqli_query($con_158, $query3);
$query4 = "update app_wo_p2p  set tgl_upload='$date' where tgl_upload='$date_yesterday' and status='0' and type_p2p='REGULER'";
mysqli_query($con_158, $query4);


