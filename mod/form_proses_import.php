<?php
session_start();
include("../assets/conn.php");

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

    $sql = "INSERT INTO app_tam_libur (tanggal, username, jabatan, keterangan) VALUES";
    for ($i = 2; $i <= count($sheets); $i++) {
        $tanggal = $sheets[$i]['A'];
        $username = $sheets[$i]['B'];
        $jabatan = $sheets[$i]['C'];
        $keterangan = $sheets[$i]['D'];
        if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $keterangan != NULL) {
            $sql .= " ('$tanggal', '$username', '$jabatan', '$keterangan') ";
            if($i != count($sheets)){
                $sql .= ",";
            }
        }
    }
    $sql = substr($sql, 0, -1);
    mysqli_query($con, $sql) or die(mysqli_error($con));

    unlink($target_dir1);

    header("Location: form_import_libur.php?status=succes");
} else {
    header("Location: form_import_libur.php?status=gagal");
}
