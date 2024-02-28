<?php
$con_158=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");
$con_41_9=mysqli_connect("10.194.41.9","duktek","infonusa","tamara");

$date = date("Y-m-d");
$date_time = date("Y-m-d H:i:s");

// $query_total = "SELECT * FROM app_tam_absen WHERE DATE(tgl) = '$date'";
// $result_total = mysqli_query($con_41_9, $query_total) or die("Query gagal!");
// $total_data = mysqli_num_rows($result_total);
// print_r($total_data);
// if($total_data > 0) {
//     $query_hapus = "DELETE FROM app_tam_absen WHERE DATE(tgl) = '$date'";
//     $result1 = mysqli_query($con_41_9, $query_hapus) or die("Query gagal!");
// }
// else {
// }
$query_tgl_last = "SELECT id FROM app_tam_absen WHERE DATE(date_absen) = '$date' ORDER BY id DESC LIMIT 1";
$result_tgl_last = mysqli_query($con_41_9, $query_tgl_last) or die("Query gagal!");
$tgl_last_data = mysqli_fetch_row($result_tgl_last);
$id = $tgl_last_data[0];
print_r($id);
$query_cek_data = "SELECT * FROM app_tam_absen WHERE DATE(date_absen) = '$date' AND id > '$id'";
$result_cek_data = mysqli_query($con_158, $query_cek_data) or die("Query gagal!");
if($result_cek_data) {
    while($row_cek_data = mysqli_fetch_assoc($result_cek_data)) {
        $insert_query = "INSERT INTO app_tam_absen (id,username,id_rooster,status,date_absen,keterangan,rule,area,jabatan,wfh_wfo) 
                        VALUES 
                        ('".$row_cek_data['id']."','".$row_cek_data['username']."','".$row_cek_data['id_rooster']."','".$row_cek_data['status']."','".$row_cek_data['date_absen']."',
                        '".$row_cek_data['keterangan']."','".$row_cek_data['rule']."','".$row_cek_data['area']."','".$row_cek_data['jabatan']."','".$row_cek_data['wfh_wfo']."')";
        print_r($insert_query);
        $result_insert = mysqli_query($con_41_9, $insert_query) or die("Query gagal!");
    }
}

