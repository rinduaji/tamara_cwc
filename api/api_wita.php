<?php
include("./assets/conn.php");

if ($_GET) {
	extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
	extract($_POST, EXTR_OVERWRITE);
}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");

if(function_exists($_GET['function'])) {
    $_GET['function']();
 }   
 
function get_data_tam()
{     
 $query = mysqli_query($con, "SELECT * FROM app_tam_data2");            
 while($row=mysqli_fetch_object($query))
 {
    $data[] =$row;
 }
 $response=array(
                'status' => 1,
                'message' =>'Success',
                'data' => $data
             );
 header('Content-Type: application/json');
 echo json_encode($response);
}
// get_inet_contacted_data_tam();
function get_inet_contacted_data_tam()
{    
   if (!empty($_GET["fastel"])) {
      $fastel = $_GET["fastel"];      
   }   
   // $tgl_update=date("Y-m-d H:i:s");

   // $check = array('status' => '', 'tgl_update' => '', 'keterangan' => '');
   $data_search = array();
   $i=0;
   $check_match = count(array_intersect_key($_POST, $check));         
   if($check_match == count($check)){
      $conn = new mysqli("10.194.176.158","appdev","appdev123","cwcv2");
      $sql = "SELECT * FROM app_tam_data2 WHERE fastel = '$fastel' AND `status`='contacted' AND kategori='Agree' AND valid='Valid'";
      // print_r($sql);      
      $query1 = mysqli_query($conn, $sql);
            while ($data1 = mysqli_fetch_array($query1)) {
               array_push($data_search, $data1); 
               
            }
            $response=array(
               'status' => 1,
               'message' =>'data ditemukan',
               'data'=> $data_search
            );
   }else{
      $response=array(
               'status' => 0,
               'message' =>'Wrong Parameter',
               'data'=> 'data tidak ditemukan'
            );
   }
   header('Content-Type: application/json');
   echo json_encode($response);
}

function insert_data_tam()
      {  
         $check = array('login' => '');
         $check_match = count(array_intersect_key($_POST, $check));
         if($check_match == count($check)){
            $conn = new mysqli("10.194.176.158","appdev","appdev123","cwcv2");
            $query = "INSERT INTO app_tam_data2 SET login = '$_POST[login]'";

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if ($conn->query($query) === TRUE) {
                  $response=array(
                     'status' => 1,
                     'message' =>'Insert Success'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Insert Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Wrong Parameter'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }

   function update_data_tam()
      {
         if (!empty($_GET["jastel"])) {
            $jastel = $_GET["jastel"];      
         }   
         $tgl_update=date("Y-m-d H:i:s");
         
         $check = array('status' => '', 'tgl_update' => '', 'keterangan' => '');

         $check_match = count(array_intersect_key($_POST, $check));         
         if($check_match == count($check)){
            $conn = new mysqli("10.194.176.158","appdev","appdev123","cwcv2");
            $sql = "SELECT * FROM app_wita WHERE jastel = '$jastel'";
            $ket = "";
            $tgl_upd = "";
            $query1 = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($query1)) {
                  $ket = $data['detil_report'];
                  $tgl_upd = $data['tgl_update'];
               }
               if(($ket != '' OR $ket != '') AND ($tgl_upd != '' OR $tgl_upd != '')) {
                     $query = "UPDATE app_wita SET `status2` = '".$_POST['status']."', tgl_update2='".$_POST['tgl_update']."', detil_report2='".$_POST['keterangan']."' WHERE jastel = '$jastel'";
         
                     if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                     }
         
                     if ($conn->query($query) === TRUE) {
                       $response=array(
                          'status' => 1,
                          'message' =>'Update Success 2'
                       );
                    }
                    else
                    {
                       $response=array(
                          'status' => 0,
                          'message' =>'Update Failed 2.'
                       );
                    }
               }
               else {
                  $query = "UPDATE app_wita SET `status` = '".$_POST['status']."', tgl_update='".$_POST['tgl_update']."', detil_report='".$_POST['keterangan']."' WHERE jastel = '$jastel'";
         
                     if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                     }
         
                     if ($conn->query($query) === TRUE) {
                       $response=array(
                          'status' => 1,
                          'message' =>'Update Success'
                       );
                    }
                    else
                    {
                       $response=array(
                          'status' => 0,
                          'message' =>'Update Failed.'
                       );
                    }
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Wrong Parameter',
                     'data'=> $jastel
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
?>