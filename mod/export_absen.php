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


$query="SELECT b.date_absen,a.user1, a.user2, a.user3, a.user4, a.user5, b.`status`, b.keterangan, e.masuk, e.pulang FROM cc147_main_users_extended as a INNER JOIN app_tam_absen as b ON a.user1 = b.username 
INNER JOIN app_tam_roosterfix as c ON b.id_rooster = c.id INNER JOIN cc147_main_users as d ON d.username=a.user1 INNER JOIN app_tam_master_pola as e ON c.pola=e.pola WHERE 
b.date_absen BETWEEN '$date1 00:00:00' AND '$date2 23:59:59' AND a.user5='$area' ORDER BY c.tgl_masuk, a.user5, a.user3, a.user2, b.keterangan ASC";
// echo $query;

function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "Data Absensi TAM Area-".$area.".xls"; 
 
// Column names 
$fields = array('NO', 'TANGGAL', 'LOGIN', 'NAMA', 'JABATAN', 'AREA', 'JAM ABSEN', 'KETERANGAN', 'TERLAMBAT'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) .  "\r\n"; 
 
// Fetch records from database 
$query1 = $db->query($query);
$no=0; 
if($query1->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query1->fetch_assoc()){ 
        $date_sub = date("Y-m-d")." ".$row['masuk'].":00";	
        $dateBegin = date("Y-m-d H:i:s", strtotime($row['date_absen']));
        $dateEnd = date("Y-m-d H:i:s", strtotime($date_sub));
        $elapsed = "";

        if($dateBegin > $dateEnd){	
            $datetime1 = new DateTime($date_sub);
            $datetime2 = new DateTime($row['date_absen']);
            $interval = $datetime2->diff($datetime1);
            $elapsed = $interval->format('%h Jam %i Menit %s Detik');
        }
        else {
            $elapsed = "TIDAK TERLAMBAT";
        }

        if($row['keterangan'] == "IN") {
            $lineData = array( ++$no , date("Y-m-d",strtotime($row['date_absen'])), $row['user1'], $row['user2'], $row['user3'], $row['user5'], date("H:i:s",strtotime($row['date_absen'])), $row['keterangan'], $elapsed); 
        }
        else if($row['keterangan'] == "OUT"){
            $lineData = array( ++$no , date("Y-m-d",strtotime($row['date_absen'])), $row['user1'], $row['user2'], $row['user3'], $row['user5'], date("H:i:s",strtotime($row['date_absen'])), $row['keterangan'], '-'); 
        }

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