<?php
session_start();
include("../assets/conn.php");

require('../assets/PHPOffice/Classes/PHPExcel.php');
require('../assets/PHPOffice/Classes/PHPExcel/IOFactory.php');

$abjad31 = array("F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ");
$abjad30 = array("F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI");
$abjad29 = array("F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH");
$abjad28 = array("F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "AA", "AB", "AC", "AD", "AE", "AF", "AG");


$upd=$_POST['login'];
$lup=date('Y-m-d h:i:s');

if (isset($_POST['Save'])) {
    
    //upload data excel kedalam folder uploads
    $target_dir1 = "../uploads/" . basename($_FILES['excel1']['name']);
    
    // var_dump($target_dir1);
    // header("Location: ../../uploads/".basename($_FILES['excel1']['name']));
    move_uploaded_file($_FILES['excel1']['tmp_name'], $target_dir1);
    
    $load = PHPExcel_IOFactory::load($target_dir1);
    $sheets = $load->getActiveSheet()->toArray(null, true, true, true);

    $bulan = substr($sheets[1]['B'],4);
    $tahun = substr($sheets[1]['B'],0,4);
    $dayTotal=cal_days_in_month(CAL_GREGORIAN,$bulan,$tahun);
    
    $periode= $tahun.$bulan;
    $colNumber= $dayTotal + 4;

    $colString = PHPExcel_Cell::stringFromColumnIndex($colNumber);
    
    $total_data = count($sheets) - 1;

    $query="select * FROM app_tam_master_pola";
    $hasil = mysqli_query($con,$query) or die ("Query gagal!");
    $hasil_total = mysqli_num_rows($hasil);

    if($periode != "" && strlen($periode) == 6) {
        $sql = "INSERT INTO app_tam_roosterfix (login, tgl_masuk, pola, jabatan, upd, lup, periode, area, nama) VALUES";
        if($hasil_total > 0 ) {
            while($data = mysqli_fetch_assoc($hasil)) {
                for ($i = 4; $i <= count($sheets); $i++) {
                    $username = trim(strtolower($sheets[$i]['B']));
                    $nama = trim(strtoupper($sheets[$i]['C']));
                    $area = trim(strtoupper($sheets[$i]['D']));
                    $jabatan = trim($sheets[$i]['E']);
                    $index=0;
                    $no = 0;
                    for($j = 1; $j <= $dayTotal; $j++){
                        
                        if($dayTotal == 31 && $colString == $abjad31[$dayTotal-1]) {
                            $kolomPola = $abjad31[$index];
                            $hari = trim(strtoupper($sheets[3][$kolomPola]));
                            // print_r($hari.' ');
                            if($j < 10) {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            else {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            $pola = trim(strtoupper($sheets[$i][$kolomPola]));
                            // $querySudahInsert ="select * FROM app_tam_roosterfix WHERE login='$username' AND nama='$nama' AND area='$area' AND jabatan='$jabatan' AND tgl_masuk='$tanggal'";
                            // $hasilSudahInsert = mysqli_query($con,$querySudahInsert) or die ("Query gagal!");
                            // $hasil_totalSudahInsert = mysqli_num_rows($hasilSudahInsert);

                            // if($hasil_totalSudahInsert < 1) {
                                if($data['pola'] == $pola) {
                                    if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $pola != NULL and $area != NULL and $nama != NULL) {
                                        $sql .= " ('$username', '$tanggal', '$pola', '$jabatan', '$upd', '$lup', '$periode', '$area', '$nama' ) ";
                                        if($no != $dayTotal){
                                            // print($i.' '.count($sheets));
                                            $sql .= ",";
                                            $no++;
                                        }
                                    }
                                }
                                // else{
                                //     header("Location: import_rooster.php?status=gagal_pola");
                                // }
                            // }
                            // else{
                            //     header("Location: import_rooster.php?status=gagal_user");
                            // }
                            $index++;
                        }
                        else if($dayTotal == 30 && $colString == $abjad30[$dayTotal-1]) {
                            $kolomPola = $abjad30[$index];
                            $hari = trim(strtoupper($sheets[3][$kolomPola]));
                            // print_r($hari.' ');
                            if($j < 10) {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            else {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            $pola = trim(strtoupper($sheets[$i][$kolomPola]));
                            // $querySudahInsert ="select * FROM app_tam_roosterfix WHERE login='$username' AND nama='$nama' AND area='$area' AND jabatan='$jabatan' AND tgl_masuk='$tanggal'";
                            // $hasilSudahInsert = mysqli_query($con,$querySudahInsert) or die ("Query gagal!");
                            // $hasil_totalSudahInsert = mysqli_num_rows($hasilSudahInsert);
                            // if($hasil_totalSudahInsert < 1) {
                                if($data['pola'] == $pola) {
                                    if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $pola != NULL and $area != NULL and $nama != NULL) {
                                        $sql .= " ('$username', '$tanggal', '$pola', '$jabatan', '$upd', '$lup', '$periode', '$area', '$nama' ) ";
                                        if($no != $dayTotal){
                                            // print($i.' '.count($sheets));
                                            $sql .= ",";
                                            $no++;
                                        }
                                    }
                                }
                                // else{
                                //     header("Location: import_rooster.php?status=gagal_pola");
                                // }
                            // }
                            // else{
                            //     header("Location: import_rooster.php?status=gagal_user");   
                            // }
                            $index++;
                        }
                        else if($dayTotal == 29 && $colString == $abjad29[$dayTotal-1]) {
                            $kolomPola = $abjad29[$index];
                            $hari = trim(strtoupper($sheets[3][$kolomPola]));
                            // print_r($hari.' ');
                            if($j < 10) {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            else {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            $pola = trim(strtoupper($sheets[$i][$kolomPola]));
                            // $querySudahInsert ="select * FROM app_tam_roosterfix WHERE login='$username' AND nama='$nama' AND area='$area' AND jabatan='$jabatan' AND tgl_masuk='$tanggal'";
                            // $hasilSudahInsert = mysqli_query($con,$querySudahInsert) or die ("Query gagal!");
                            // $hasil_totalSudahInsert = mysqli_num_rows($hasilSudahInsert);
                            // if($hasil_totalSudahInsert < 1) {
                                if($data['pola'] == $pola) {
                                    if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $pola != NULL and $area != NULL and $nama != NULL) {
                                        $sql .= " ('$username', '$tanggal', '$pola', '$jabatan', '$upd', '$lup', '$periode', '$area', '$nama' ) ";
                                        if($no != $dayTotal){
                                            $sql .= ",";
                                            // print($i.' '.count($sheets));
                                            $no++;
                                        }
                                    }
                                }
                                // else{
                                //     header("Location: import_rooster.php?status=gagal_pola"); 
                                // }
                        // }
                        // else{
                            
                        //     header("Location: import_rooster.php?status=gagal_user");  
                        //     }
                            $index++;
                        }
                        else if($dayTotal == 28 && $colString == $abjad28[$dayTotal-1]) {
                            // print_r($hari.' ');
                            $kolomPola = $abjad28[$index];
                            $hari = trim(strtoupper($sheets[3][$kolomPola]));
                            // print_r($hari.' ');
                            if($j < 10) {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            else {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            // print_r($tanggal.' ');
                            $pola = trim(strtoupper($sheets[$i][$kolomPola]));
                            // print_r($pola);
                            // $querySudahInsert ="select * FROM app_tam_roosterfix WHERE login='$username' AND nama='$nama' AND area='$area' AND jabatan='$jabatan' AND tgl_masuk='$tanggal'";
                            // $hasilSudahInsert = mysqli_query($con,$querySudahInsert) or die ("Query gagal!");
                            // $hasil_totalSudahInsert = mysqli_num_rows($hasilSudahInsert);
                            // if($hasil_totalSudahInsert < 1) {
                                if($data['pola'] == $pola) {
                                    // print_r($dayTotal.' '.$colString);
                                    if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $pola != NULL and $area != NULL and $nama != NULL) {
                                        $sql .= " ('$username', '$tanggal', '$pola', '$jabatan', '$upd', '$lup', '$periode', '$area', '$nama' ) ";
                                        if($no != $dayTotal){
                                            // print($i.' '.count($sheets));
                                            $sql .= ",";
                                            $no++;
                                        }
                                    }
                                }
                                // else {
                                //     header("Location: import_rooster.php?status=gagal_pola");
                                // }
                        //     // }
                        //     // else{
                        //     //     header("Location: import_rooster.php?status=gagal_user");    
                        //     // }
                            $index++;
                        }
                        else {
                            header("Location: import_rooster.php?status=gagal_kolom"); 
                        }
                    }
                }
            }
        }
        $sql = substr($sql, 0, -1);
        // print_r($sql);
        if(mysqli_query($con, $sql)) {   
            header("Location: import_rooster.php?status=succes");
        }
        
        $query="select * FROM app_tam_master_pola";
        $hasil = mysqli_query($con,$query) or die ("Query gagal!");
        $hasil_total = mysqli_num_rows($hasil);
        $sql = "INSERT INTO app_tam_roosterfixasli (login, tgl_masuk, pola, jabatan, upd, lup, periode, area, nama) VALUES";
        if($hasil_total > 0 ) {
            while($data = mysqli_fetch_assoc($hasil)) {
                for ($i = 4; $i <= count($sheets); $i++) {
                    $username = trim($sheets[$i]['B']);
                    $nama = trim($sheets[$i]['C']);
                    $area = trim(strtoupper($sheets[$i]['D']));
                    $jabatan = trim($sheets[$i]['E']);
                    $index=0;
                    $no = 0;
                    for($j = 1; $j <= $dayTotal; $j++){
                        if($dayTotal == 31 && $colString == $abjad31[$dayTotal-1]) {
                            $kolomPola = $abjad31[$index];
                            $hari = trim(strtoupper($sheets[3][$kolomPola]));
                            // print_r($hari.' ');
                            if($j < 10) {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            else {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            $pola = trim(strtoupper($sheets[$i][$kolomPola]));
                            // $querySudahInsert ="select * FROM app_tam_roosterfixasli WHERE login='$username' AND nama='$nama' AND area='$area' AND jabatan='$jabatan' AND tgl_masuk='$tanggal'";
                            // $hasilSudahInsert = mysqli_query($con,$querySudahInsert) or die ("Query gagal!");
                            // $hasil_totalSudahInsert = mysqli_num_rows($hasilSudahInsert);
                            // if($hasil_totalSudahInsert < 1) {
                                if($data['pola'] == $pola) {
                                    if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $pola != NULL and $area != NULL and $nama != NULL) {
                                        $sql .= " ('$username', '$tanggal', '$pola', '$jabatan', '$upd', '$lup', '$periode', '$area', '$nama' ) ";
                                        if($no != $dayTotal){
                                            // print($i.' '.count($sheets));
                                            $sql .= ",";
                                            $no++;
                                        }
                                    }
                                }
                                // else {
                                //     header("Location: import_rooster.php?status=gagal_pola");
                                // }
                            // }
                            // else{
                            //     header("Location: import_rooster.php?status=gagal_user");    
                            // }
                            $index++;
                        }
                        else if($dayTotal == 30 && $colString == $abjad30[$dayTotal-1]) {
                            $kolomPola = $abjad30[$index];
                            $hari = trim(strtoupper($sheets[3][$kolomPola]));
                            // print_r($hari.' ');
                            if($j < 10) {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            else {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            $pola = trim(strtoupper($sheets[$i][$kolomPola]));
                            // $querySudahInsert ="select * FROM app_tam_roosterfixasli WHERE login='$username' AND nama='$nama' AND area='$area' AND jabatan='$jabatan' AND tgl_masuk='$tanggal'";
                            // $hasilSudahInsert = mysqli_query($con,$querySudahInsert) or die ("Query gagal!");
                            // $hasil_totalSudahInsert = mysqli_num_rows($hasilSudahInsert);
                            // if($hasil_totalSudahInsert < 1) {
                                if($data['pola'] == $pola) {
                                    if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $pola != NULL and $area != NULL and $nama != NULL) {
                                        $sql .= " ('$username', '$tanggal', '$pola', '$jabatan', '$upd', '$lup', '$periode', '$area', '$nama' ) ";
                                        if($no != $dayTotal){
                                            // print($i.' '.count($sheets));
                                            $sql .= ",";
                                            $no++;
                                        }
                                    }
                                }
                                // else {
                                //     header("Location: import_rooster.php?status=gagal_pola");
                                // }
                            // }
                            // else{
                            //     header("Location: import_rooster.php?status=gagal_user");    
                            // }
                            $index++;
                        }
                        else if($dayTotal == 29 && $colString == $abjad29[$dayTotal-1]) {
                            $kolomPola = $abjad29[$index];
                            $hari = trim(strtoupper($sheets[3][$kolomPola]));
                            // print_r($hari.' ');
                            if($j < 10) {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            else {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            $pola = trim(strtoupper($sheets[$i][$kolomPola]));
                            // $querySudahInsert ="select * FROM app_tam_roosterfixasli WHERE login='$username' AND nama='$nama' AND area='$area' AND jabatan='$jabatan' AND tgl_masuk='$tanggal'";
                            // $hasilSudahInsert = mysqli_query($con,$querySudahInsert) or die ("Query gagal!");
                            // $hasil_totalSudahInsert = mysqli_num_rows($hasilSudahInsert);
                            // if($hasil_totalSudahInsert < 1) {
                                if($data['pola'] == $pola) {
                                    if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $pola != NULL and $area != NULL and $nama != NULL) {
                                        $sql .= " ('$username', '$tanggal', '$pola', '$jabatan', '$upd', '$lup', '$periode', '$area', '$nama' ) ";
                                        if($no != $dayTotal){
                                            $sql .= ",";
                                            // print($i.' '.count($sheets));
                                            $no++;
                                        }
                                    }
                                }
                                // else {
                                //     header("Location: import_rooster.php?status=gagal_pola");
                                // }
                            // }
                            // else{
                            //     header("Location: import_rooster.php?status=gagal_user");    
                            // }
                            $index++;
                        }
                        else if($dayTotal == 28 && $colString == $abjad28[$dayTotal-1]) {
                            $kolomPola = $abjad28[$index];
                            $hari = trim(strtoupper($sheets[3][$kolomPola]));
                            // print_r($hari.' ');
                            if($j < 10) {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            else {
                                $tanggal = $tahun.'-'.$bulan.'-'.$hari;
                            }
                            $pola = trim(strtoupper($sheets[$i][$kolomPola]));
                            // $querySudahInsert ="select * FROM app_tam_roosterfixasli WHERE login='$username' AND nama='$nama' AND area='$area' AND jabatan='$jabatan' AND tgl_masuk='$tanggal'";
                            // $hasilSudahInsert = mysqli_query($con,$querySudahInsert) or die ("Query gagal!");
                            // $hasil_totalSudahInsert = mysqli_num_rows($hasilSudahInsert);
                            // if($hasil_totalSudahInsert < 1) {
                                if($data['pola'] == $pola) {
                                    if ($tanggal != NULL and $username != NULL and $jabatan != NULL and $pola != NULL and $area != NULL and $nama != NULL) {
                                        $sql .= " ('$username', '$tanggal', '$pola', '$jabatan', '$upd', '$lup', '$periode', '$area', '$nama' ) ";
                                        if($no != $dayTotal){
                                            // print($i.' '.count($sheets));
                                            $sql .= ",";
                                            $no++;
                                        }
                                    }
                                }
                                // else {
                                //     header("Location: import_rooster.php?status=gagal_pola");
                                // }
                            // }
                            // else{
                            //     header("Location: import_rooster.php?status=gagal_user");    
                            // }
                            $index++;
                        }
                        else {
                            header("Location: import_rooster.php?status=gagal_kolom"); 
                        }
                    }
                    
                    
                }
            }
        }
        $sql = substr($sql, 0, -1);
        // print_r($sql);
        if(mysqli_query($con, $sql)) {
            header("Location: import_rooster.php?status=succes");
        }
    }
    else {
        header("Location: import_rooster.php?status=gagal_periode");
    }

    // unlink($target_dir1);

} else {
    header("Location: import_rooster.php?status=gagal");
}
