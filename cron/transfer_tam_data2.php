<?php
$con_158=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");
$con_41_9=mysqli_connect("10.194.41.9","duktek","infonusa","tamara");

$date = date("Y-m-d");
$date_time = date("Y-m-d H:i:s");

// $query_total = "SELECT * FROM app_tam_data2 WHERE DATE(tgl) = '$date'";
// $result_total = mysqli_query($con_41_9, $query_total) or die("Query gagal!");
// $total_data = mysqli_num_rows($result_total);
// print_r($total_data);
// if($total_data > 0) {
//     $query_hapus = "DELETE FROM app_tam_data2 WHERE DATE(tgl) = '$date'";
//     $result1 = mysqli_query($con_41_9, $query_hapus) or die("Query gagal!");
// }
// else {
// }
$query_tgl_last = "SELECT id FROM app_tam_data2 WHERE DATE(tgl) = '$date' ORDER BY id DESC LIMIT 1";
$result_tgl_last = mysqli_query($con_41_9, $query_tgl_last) or die("Query gagal!");
$tgl_last_data = mysqli_fetch_row($result_tgl_last);
$id = $tgl_last_data[0];
print_r($id);
$query_cek_data = "SELECT * FROM app_tam_data2 WHERE DATE(tgl) = '$date' AND id > '$id'";
$result_cek_data = mysqli_query($con_158, $query_cek_data) or die("Query gagal!");
if($result_cek_data) {
    while($row_cek_data = mysqli_fetch_assoc($result_cek_data)) {
        $insert_query = "INSERT INTO app_tam_data2 (id,tgl,login,no_pelanggan,fastel,nama_dm,tlp,reg,jenis,status,kategori,
                         reason,segment,durasi,penerima,ket,follow,upd_qco,rec_qco,upd_tl,rec_tl,upd_suport,
                         rec_suport,tgl_qco1,tgl_tl,tgl_suport,valid,input,prof_hp,skrip,alasan_nok,prof_hoby,
                         prof_agama,prof_facebook,add_on_tsel,id_return_tl,tapping_decline,status_notif,detil_alasan,
                         reject,nama_agent,area,speed_asal,speed_tujuan,param,internet,ott1,ott2,paket_harga,
                         paket_steaming,diskon,total_harga_diskon,speed_loyalty,hssp_type,recom_speed,blast,speed_tertinggi,
                         upd_hd,status_hd) 
                         VALUES 
                         ('".$row_cek_data['id']."','".$row_cek_data['tgl']."','".$row_cek_data['login']."','".$row_cek_data['no_pelanggan']."','".$row_cek_data['fastel']."',
                         '".$row_cek_data['nama_dm']."','".$row_cek_data['tlp']."','".$row_cek_data['reg']."','".$row_cek_data['jenis']."','".$row_cek_data['status']."',
                         '".$row_cek_data['kategori']."','".$row_cek_data['reason']."','".$row_cek_data['segment']."','".$row_cek_data['durasi']."','".$row_cek_data['penerima']."',
                         '".$row_cek_data['ket']."','".$row_cek_data['follow']."','".$row_cek_data['upd_qco']."','".$row_cek_data['rec_qco']."','".$row_cek_data['upd_tl']."',
                         '".$row_cek_data['rec_tl']."','".$row_cek_data['upd_suport']."','".$row_cek_data['rec_suport']."','".$row_cek_data['tgl_qco1']."','".$row_cek_data['tgl_tl']."',
                         '".$row_cek_data['tgl_suport']."','".$row_cek_data['valid']."','".$row_cek_data['input']."','".$row_cek_data['prof_hp']."','".$row_cek_data['skrip']."',
                         '".$row_cek_data['alasan_nok']."','".$row_cek_data['prof_hoby']."','".$row_cek_data['prof_agama']."','".$row_cek_data['prof_facebook']."',
                         '".$row_cek_data['add_on_tsel']."','".$row_cek_data['id_return_tl']."','".$row_cek_data['tapping_decline']."','".$row_cek_data['status_notif']."',
                         '".$row_cek_data['detil_alasan']."','".$row_cek_data['reject']."','".$row_cek_data['nama_agent']."','".$row_cek_data['area']."','".$row_cek_data['speed_asal']."',
                         '".$row_cek_data['speed_tujuan']."','".$row_cek_data['param']."','".$row_cek_data['internet']."','".$row_cek_data['ott1']."','".$row_cek_data['ott2']."',
                         '".$row_cek_data['paket_harga']."','".$row_cek_data['paket_steaming']."','".$row_cek_data['diskon']."','".$row_cek_data['total_harga_diskon']."',
                         '".$row_cek_data['speed_loyalty']."','".$row_cek_data['hssp_type']."','".$row_cek_data['recom_speed']."','".$row_cek_data['blast']."','".$row_cek_data['speed_tertinggi']."',
                         '".$row_cek_data['upd_hd']."','".$row_cek_data['status_hd']."')";
        print_r($insert_query);
        $result_insert = mysqli_query($con_41_9, $insert_query) or die("Query gagal!");
    }
}

