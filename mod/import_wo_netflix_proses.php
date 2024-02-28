<?php
session_start();
include("../assets/conn.php");

$upd=$_POST['login'];
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

    $sql = "INSERT INTO app_wo_netflix_master (tgl_upload, login, fastel, nama_dm, tlp, reg, rule, status, upd, disneyhs, iflix, speed_awal, email, tarif_inet, tagihan, tagihan_total, diskon_inet, `timestamp`,
    speed_tertinggi, speed_loyalty, hssp_type, recom_speed, blast) VALUES";
    for ($i = 2; $i <= count($sheets); $i++) {
        $tgl_upload = date("Y-m-d");
        $login = trim($sheets[$i]['A']);
        $fastel = trim($sheets[$i]['B']);
        $nama_dm = trim(strtoupper($sheets[$i]['C']));
        $tlp = trim($sheets[$i]['D']);
        $reg = trim($sheets[$i]['E']);
        $disneyhs = trim(strtoupper($sheets[$i]['F']));
        $iflix = trim(strtoupper($sheets[$i]['G']));
        $speed_awal = trim(strtoupper($sheets[$i]['H']));
        $tarif_inet = trim(strtoupper($sheets[$i]['I']));
        $tagihan = trim(strtoupper($sheets[$i]['J']));
        $tagihan_total = trim(strtoupper($sheets[$i]['K']));
        $email = trim($sheets[$i]['L']);
        $diskon_inet = trim($sheets[$i]['M']);
        $lup = date("Y-m-d h:i:s");
        $speed_tertinggi = trim(strtoupper($sheets[$i]['N']));
        $speed_loyalty = trim(strtoupper($sheets[$i]['O']));
        $hssp_type = trim(strtoupper($sheets[$i]['P']));
        $recom_speed = trim($sheets[$i]['Q']);
        $blast = trim($sheets[$i]['R']);

        $sql .= " ('$tgl_upload', '$login', '$fastel', '$nama_dm', '$tlp', '$reg', 'Bundling Netflix', '0', '$upd', '$disneyhs', '$iflix', '$speed_awal', '$email', '$tarif_inet', '$tagihan', '$tagihan_total',
         '$diskon_inet', '$lup', '$speed_tertinggi', '$speed_loyalty', '$hssp_type', '$recom_speed', '$blast' ) ";
        if($i != count($sheets)){
            $sql .= ",";
        }
    }
    $sql = substr($sql, 0, -1);
    // print_r($sql);
    // die();
    mysqli_query($con, $sql) or die(mysqli_error($con));
    // unlink($target_dir1);
    header("Location: import_wo_netflix.php?status=succes");
} else {
    header("Location: import_wo_netflix.php?status=gagal");
}
