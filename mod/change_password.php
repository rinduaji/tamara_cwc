<?php 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$con=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");

$pass=md5($old_password);
$new_pass=md5($new_password);
$query=mysqli_query($con, "select count(1) username from cc147_main_users where username = '$userid' and user_password='$pass' ");
 $queryy=mysqli_fetch_row($query);



if ($queryy[0]==1) {
	$status='ok';
	mysqli_query($con, "UPDATE `cc147_main_users` SET `user_password` = '$new_pass' WHERE `username` = '$userid' ");

}else{
	$status='nok';
}


 ?>


[{"status":"<?php echo $status; ?>","status_desc":"Old Password salah"}]