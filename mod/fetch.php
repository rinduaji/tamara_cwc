<?php
// include_once("./assets/conn.php");
// if(isset($_POST['view'])){
session_start();
$username =$_SESSION['username'];
if($_POST["view"] != '')
{
   $update_query = "UPDATE app_tam_notif SET status = '0' WHERE status='1' AND username='$username'";
   if(mysqli_query(mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2"), $update_query)) {

   echo "sukses";
   }
}
// $query = "SELECT * FROM app_tam_data2 WHERE status_notif='1' ORDER BY status_notif DESC LIMIT 5";
// $result = mysqli_query($con, $query);
// $output = '';
// $total = mysqli_num_rows($result);
// if($total > 0)
// {
// while($row = mysqli_fetch_array($result))
// {
//   $output .= '
//   <li>
//   <a href="#">
//   <strong>Rekomendasi QA</strong><br />
//   <small><em>'.$row["prof_hoby"].'</em></small>
//   </a>
//   </li>
//   ';
// }
// }
// else{
//     $output .= '<li><a href="#" class="text-bold text-italic">No Notif Found'.$total.'</a></li>';
// }
// $status_query = "SELECT * FROM app_tam_data2 WHERE status_notif='1'";
// $result_query = mysqli_query(mysqli_connect("10.194.176.158","appdev","appdev123","maincc147"), $status_query);
// $count = mysqli_num_rows($result_query);
// $data = array(
//    'notification' => $output,
//    'unseen_notification'  => $count
// );
// echo json_encode($data);

?>