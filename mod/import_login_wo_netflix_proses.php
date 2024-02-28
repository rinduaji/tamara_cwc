<?php
session_start();
include("../assets/conn.php");

$lup=date('Y-m-d h:i:s');
$periode= date('Ym');

if (isset($_POST['Save'])) {
    require('../assets/PHPOffice/Classes/PHPExcel.php');
    require('../assets/PHPOffice/Classes/PHPExcel/IOFactory.php');
    
    //upload data excel kedalam folder uploads
    $target_dir1 = "../uploads/" . basename($_FILES['excel1']['name']);
    
    // var_dump($target_dir1);
    // header("Location: ../../uploads/".basename($_FILES['excel1']['name']));
    move_uploaded_file($_FILES['excel1']['tmp_name'], $target_dir1);
    
    $load = PHPExcel_IOFactory::load($target_dir1);
    $sheets = $load->getActiveSheet()->toArray(null, true, true, true);
    
    $total_data = count($sheets) - 1;
    
    for ($i = 2; $i <= count($sheets); $i++) {
        $tgl_upload = $_POST['tanggal'];
        $upd = $_POST['login'];
        $lup = date("Y-m-d h:i:s");
        
        $login = str_replace(' ', '', $sheets[$i]['A']);
        $hssp = strtolower(str_replace(' ', '', $sheets[$i]['B']));
        // die();
        
        // print_r(' <br>');
        $query = "SELECT * FROM app_wo_netflix_master WHERE status='0' AND hssp_type = '$hssp' AND `login` = '' AND lup = '' LIMIT 200";
        $hasil = mysqli_query($con, $query) or die("Query gagal!");
        while ($data = mysqli_fetch_array($hasil)) {
            // print_r($login.' ');
            $id = $data['id'];
            $fastel = $data['fastel'];
            $nama_dm = $data['nama_dm'];
            $tlp = $data['tlp'];
            $reg = $data['reg'];
            $disneyhs = $data['disneyhs'];
            $iflix = $data['iflix'];
            $speed_awal = $data['speed_awal'];
            $email = $data['email'];
            $tarif_inet = $data['tarif_inet'];
            $tagihan = $data['tagihan'];
            $tagihan_total = $data['tagihan_total'];
            $recom_speed = $data['recom_speed'];
            $speed_tertinggi = $data['speed_tertinggi'];
            $speed_loyalty = $data['speed_loyalty'];
            $hssp_type = $data['hssp_type'];
            $diskon_inet = $data['diskon_inet'];
            $blast = $data['blast'];
            
            $sql = "INSERT INTO app_wo_netflix (tgl_upload, login, fastel, nama_dm, tlp, reg, rule, status, upd, disneyhs, iflix, speed_awal, email, tarif_inet, tagihan, tagihan_total, diskon_inet,
                    speed_tertinggi, speed_loyalty, hssp_type, recom_speed, blast) VALUES";
            $sql .= " ('$tgl_upload', '$login', '$fastel', '$nama_dm', '$tlp', '$reg', 'Bundling Netflix', '0', '$upd', '$disneyhs', '$iflix', '$speed_awal', '$email', '$tarif_inet', '$tagihan', '$tagihan_total', 
                        '$diskon_inet', '$speed_tertinggi', '$speed_loyalty', '$hssp_type', '$recom_speed', '$blast' ) ";
            if(mysqli_query($con, $sql)) {
                $query_update = "UPDATE app_wo_netflix_master SET `login` = '$login', tgl_upload='$tgl_upload' WHERE fastel='$fastel'";
                mysqli_query($con, $query_update);
            } 
        }
    }
    // die();
    // unlink($target_dir1);
    header("Location: import_login_wo_netflix.php?status=succes");
} else {
    header("Location: import_login_wo_netflix.php?status=gagal");
}
