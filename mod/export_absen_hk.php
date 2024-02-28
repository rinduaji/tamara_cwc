<?php

include("./assets/conn.php");

$hostname = "10.194.176.158";
$user = "appdev";
$password = "appdev123";
$database = "cwcv2";

$db = new mysqli($hostname, $user, $password, $database); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}

if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}

if($area != "") {
    $data_area = " a.user5 = '".$area."' AND ";
}
else {
    $data_area = "";
}

$query="SELECT b.date_absen,a.user1, a.user2, a.user3, a.user4, a.user5, COUNT(*) as hk FROM cc147_main_users_extended as a INNER JOIN app_tam_absen as b ON a.user1 = b.username 
WHERE $data_area b.date_absen BETWEEN '$date1 00:00:00' AND '$date2 23:59:59' AND b.keterangan = 'IN' GROUP BY a.user1 ORDER BY a.user5, a.user3, a.user2  ASC";
// echo $query;

function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "Data Absensi Hari Kerja TAM Area-".$area.".xls"; 
 
// Column names 
$fields = array('NO', 'PERIODE', 'LOGIN', 'NAMA', 'JABATAN', 'AREA', 'HARI KERJA (HK)', 'TOTAL TUNJANGAN KEHADIRAN'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) .  "\r\n"; 
 
// Fetch records from database 
$query1 = $db->query($query);
$no=0; 
if($query1->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query1->fetch_assoc()){ 
        if($row['user3'] == "Agent TAM" || $row['user3'] == "qa" || $row['user3'] == "TL TAM DCS" || $row['user3'] == "Trainer" || $row['user3'] == "Tabber TAM") {
            $t_kehadiran = 75000;
        }
        else {
            $t_kehadiran = 0;
        }
        $total_t_kehadiran = $row['hk'] * $t_kehadiran;

        $lineData = array( ++$no , date("Ym",strtotime($row['date_absen'])), $row['user1'], $row['user2'], $row['user3'], $row['user5'], $row['hk'], rupiah($total_t_kehadiran)); 

        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) ."\r\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'."\r\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;