<?php
$con_158=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");
$con_41_9=mysqli_connect("10.194.41.9","duktek","infonusa","tamara");

$date = date("Y-m-d");
$date_time = date("Y-m-d H:i:s");

// $query_total = "SELECT * FROM app_tam_p2p WHERE DATE(tgl) = '$date'";
// $result_total = mysqli_query($con_41_9, $query_total) or die("Query gagal!");
// $total_data = mysqli_num_rows($result_total);
// print_r($total_data);
// if($total_data > 0) {
//     $query_hapus = "DELETE FROM app_tam_p2p WHERE DATE(tgl) = '$date'";
//     $result1 = mysqli_query($con_41_9, $query_hapus) or die("Query gagal!");
// }
// else {
// }
$query_tgl_last = "SELECT id FROM app_tam_p2p WHERE DATE(tgl) = '$date' ORDER BY id DESC LIMIT 1";
$result_tgl_last = mysqli_query($con_41_9, $query_tgl_last) or die("Query gagal!");
$tgl_last_data = mysqli_fetch_row($result_tgl_last);
$id = $tgl_last_data[0];
print_r($id);
$query_cek_data = "SELECT * FROM app_tam_p2p WHERE DATE(tgl) = '$date' AND id > '$id'";
$result_cek_data = mysqli_query($con_158, $query_cek_data) or die("Query gagal!");
if($result_cek_data) {
    while($row_cek_data = mysqli_fetch_assoc($result_cek_data)) {
        $insert_query = "INSERT INTO app_tam_p2p (id,tgl,login,perner,nama_agent,area,init_offer,label,msisdn,nama_plg,ktp,kk,no_hp_lain,tgl_lahir,tempat_lahir,email_plg,alamat_ktp_plg,alamat_domisili,
                        kode_pos,no_cp_ref,nama_cp_ref,cls,tgl_setuju,jenis,status,kategori,reason,keterangan,follow,input,valid,revenue,upd_qco,rec_qco,tgl_qco,upd_tl,rec_tl,tgl_tl,id_return_tl,durasi,
                        pick_data_bebas,type_p2p,pilih_area,pilih_provinsi,pilih_ibu_kota) 
                        VALUES 
                        ('".$row_cek_data['id']."','".$row_cek_data['tgl']."','".$row_cek_data['login']."','".$row_cek_data['perner']."','".$row_cek_data['nama_agent']."','".$row_cek_data['area']."',
                        '".$row_cek_data['init_offer']."','".$row_cek_data['label']."','".$row_cek_data['msisdn']."','".$row_cek_data['nama_plg']."','".$row_cek_data['ktp']."','".$row_cek_data['kk']."',
                        '".$row_cek_data['no_hp_lain']."','".$row_cek_data['tgl_lahir']."','".$row_cek_data['tempat_lahir']."','".$row_cek_data['email_plg']."','".$row_cek_data['alamat_ktp_plg']."',
                        '".$row_cek_data['alamat_domisili']."','".$row_cek_data['kode_pos']."','".$row_cek_data['no_cp_ref']."','".$row_cek_data['nama_cp_ref']."','".$row_cek_data['cls']."',
                        '".$row_cek_data['tgl_setuju']."','".$row_cek_data['jenis']."','".$row_cek_data['status']."','".$row_cek_data['kategori']."','".$row_cek_data['reason']."',
                        '".$row_cek_data['keterangan']."','".$row_cek_data['follow']."','".$row_cek_data['input']."','".$row_cek_data['valid']."','".$row_cek_data['revenue']."',
                        '".$row_cek_data['upd_qco']."','".$row_cek_data['rec_qco']."','".$row_cek_data['tgl_qco']."','".$row_cek_data['upd_tl']."','".$row_cek_data['rec_tl']."',
                        '".$row_cek_data['tgl_tl']."','".$row_cek_data['id_return_tl']."','".$row_cek_data['durasi']."','".$row_cek_data['pick_data_bebas']."','".$row_cek_data['type_p2p']."',
                        '".$row_cek_data['pilih_area']."','".$row_cek_data['pilih_provinsi']."','".$row_cek_data['pilih_ibu_kota']."')";
        print_r($insert_query);
        $result_insert = mysqli_query($con_41_9, $insert_query) or die("Query gagal!");
    }
}

