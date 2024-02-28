<?php
include("../assets/conn.php");
// include("../assets/PHPExcel/PHPExcel.php");
require_once "../assets/PHPExcel-1.8/PHPExcel-1.8/Classes/PHPExcel.php";

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

$hostname = "10.194.176.158";
$user = "appdev";
$password = "appdev123";
$database = "cwcv2";



$conn = mysqli_connect($hostname, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
// $dt = explode("-",trim($month)); 
// $tglx="$dt[2]-$dt[1]-$dt[0]";

$dt_month = explode("-",trim($date)); 
$month="$dt_month[1]-$dt_month[0]";
// print_r($month);

// $whr="a.tgl BETWEEN '$tglx 00:00:00' AND '$tglx 23:59:59'";
// //else if ($_POST['exp']=='support'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.follow='6'";}
// else if ($_POST['exp']=='valid'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.follow='6' AND valid='valid' AND kategori= 'Agree'";}
// else if ($_POST['exp']=='agree_all'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.follow IN ('1', '2', '3', '5') AND kategori= 'Agree'";}
// //else if ($_POST['exp']=='qco'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_qco<>''";}
// //else if ($_POST['exp']=='tl'){$whr=" a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_tl<>''";}
// //else if ($_POST['exp']=='qcotgl'){$whr="a.tgl_qco1 BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_qco<>''";}
// else if ($_POST['exp']=='followup'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.follow ='8'";}
// // create empty variable to be filled with export data

// $produk=$_POST['produk'];
// if ($produk=='ALLprod'){$pr="";}
// else{$pr="and a.jenis like '$produk'";}

// $site=$_POST['site'];
// if ($site=='ALL AREA'){$wha="";}
// else{$wha=" and a.area like '$site'";}

// $pilih_data=$_POST['pilih_data'];
// if ($pilih_data=='ALL'){$wh="";}
// elseif($pilih_data=='Agree') {$wh=" and a.status = 'Contacted' and a.kategori = 'Agree' and a.follow='6'";}
// elseif($pilih_data=='Not Agree') {$wh=" and a.status = 'Contacted' and a.kategori = 'Not Agree'";}
// elseif($pilih_data=='Follow UP') {$wh=" and a.status = 'Contacted' and a.kategori = 'Follow UP'";}
// elseif($pilih_data=='RNA') {$wh=" and a.status = 'Not Contacted' and a.kategori = 'RNA'";}
// elseif($pilih_data=='VOICEMAIL / TIDAK AKTIF / DI LUAR JANGKAUAN') {$wh=" and a.status = 'Not Contacted' and a.kategori = 'VOICEMAIL / TIDAK AKTIF / DI LUAR JANGKAUAN'";}
// elseif($pilih_data=='BUSY / REJECTED CALLBUSY / REJECTED CALL') {$wh=" and a.status = 'Not Contacted' and a.kategori = 'BUSY / REJECTED CALLBUSY / REJECTED CALL'";}
// else{$wh=" and a.status = 'Contacted' and a.kategori = 'Agree'";}

// print_r($pilih_data);
// die();
// $query="SELECT
// a.tgl AS TANGGAL,
// a.login AS LOGIN_AGENT,
// a.nama_agent AS NAMA_AGENT,
// a.area AS AREA_AGENT,
// a.fastel AS FASTEL_PELANGGAN,
// a.nama_plg AS NAMA_PELANGGAN,
// a.no_ktp AS NO_KTP,
// a.no_kk AS NO_KK,
// a.no_telp AS NO_TELEPON,
// a.msisdn AS MSISDN,
// a.reserve_id AS RESERVE_ID,
// a.area_tsel AS AREA_TSEL,
// a.alamat AS ALAMAT,
// a.email AS EMAIL,
// a.alamat_kirim AS ALAMAT_PENGIRIMAN,
// a.tgl_setuju AS TANGGAL_SETUJU,
// a.jenis AS JENIS_CALL,
// a.status AS STATUS_CALL,
// a.kategori AS KATEGORI,
// a.reason AS REASON_CALL,
// a.keterangan AS KETERANGAN

// FROM
// app_tam_halo AS a 
// WHERE $whr $wh order by a.login asc";
// // echo $query;

// $csv_export = '';
// // query to get data from database
// $query = mysqli_query($conn, $query);
// $field = mysqli_field_count($conn);

// // create line with field names
// for($i = 0; $i < $field; $i++) {
//     $csv_export.= mysqli_fetch_field_direct($query, $i)->name.';';
// }

// // newline (seems to work both on Linux & Windows servers)
// $csv_export.= '
// ';

// // loop through database query and fill export variable
// while($row = mysqli_fetch_array($query)) {
//     // create line with field values
//     for($i = 0; $i < $field; $i++) {
//         $csv_export.= '"'.$row[mysqli_fetch_field_direct($query, $i)->name].'";';
//     }
//     $csv_export.= '
// ';
// }
// // filename for export
$csv_filename = 'Data TAM FMC HALO '.date('M Y',strtotime($date));
// // Export the data and prompt a csv file for download
// header("Content-type: text/x-csv");
// header("Content-Disposition: attachment; filename=".$csv_filename."");
// echo($csv_export);

$query_all = "SELECT 
all_halo.tanggal, all_halo.total_agent, all_halo.total_call, all_halo.total_call_contacted, all_halo.total_call_agree, all_halo.total_revenue, all_halo.total_ppa, all_halo.total_rpa, 
bdg_halo.jumlah_agent_bdg, bdg_halo.jumlah_call_bdg, bdg_halo.jumlah_call_contacted_bdg, bdg_halo.jumlah_call_agree_bdg, bdg_halo.jumlah_revenue_bdg, bdg_halo.ppa_bdg, bdg_halo.rpa_bdg,
bsd_halo.jumlah_agent_bsd, bsd_halo.jumlah_call_bsd, bsd_halo.jumlah_call_contacted_bsd, bsd_halo.jumlah_call_agree_bsd, bsd_halo.jumlah_revenue_bsd, bsd_halo.ppa_bsd, bsd_halo.rpa_bsd,
mlg_halo.jumlah_agent_mlg, mlg_halo.jumlah_call_mlg, mlg_halo.jumlah_call_contacted_mlg, mlg_halo.jumlah_call_agree_mlg, mlg_halo.jumlah_revenue_mlg, mlg_halo.ppa_mlg, mlg_halo.rpa_mlg,
mks_halo.jumlah_agent_mks, mks_halo.jumlah_call_mks, mks_halo.jumlah_call_contacted_mks, mks_halo.jumlah_call_agree_mks, mks_halo.jumlah_revenue_mks, mks_halo.ppa_mks, mks_halo.rpa_mks,
mdn_halo.jumlah_agent_mdn, mdn_halo.jumlah_call_mdn, mdn_halo.jumlah_call_contacted_mdn, mdn_halo.jumlah_call_agree_mdn, mdn_halo.jumlah_revenue_mdn, mdn_halo.ppa_mdn, mdn_halo.rpa_mdn,
smg_halo.jumlah_agent_smg, smg_halo.jumlah_call_smg, smg_halo.jumlah_call_contacted_smg, smg_halo.jumlah_call_agree_smg, smg_halo.jumlah_revenue_smg, smg_halo.ppa_smg, smg_halo.rpa_smg
FROM 
(
SELECT
tanggal,
total_agent,
total_call,
total_call_contacted,
total_call_agree,
total_revenue,
total_rpa,
total_ppa
FROM
app_tam_dashboard_halo
WHERE MONTH(tanggal) = '$month' GROUP BY tanggal order by tanggal asc
) AS all_halo
LEFT JOIN
(
SELECT
    tanggal as tanggal_bdg,
    jumlah_agent as jumlah_agent_bdg,
    jumlah_call as jumlah_call_bdg,
    jumlah_call_contacted as jumlah_call_contacted_bdg,
    jumlah_call_agree as jumlah_call_agree_bdg,
    jumlah_revenue as jumlah_revenue_bdg,
    rpa as rpa_bdg,
    ppa as ppa_bdg
FROM
app_tam_dashboard_halo
WHERE MONTH(tanggal) = '$month' AND area = 'BANDUNG' GROUP BY tanggal order by tanggal asc
) AS bdg_halo
ON all_halo.tanggal = bdg_halo.tanggal_bdg
LEFT JOIN
(
SELECT
    tanggal as tanggal_bsd,
    jumlah_agent as jumlah_agent_bsd,
    jumlah_call as jumlah_call_bsd,
    jumlah_call_contacted as jumlah_call_contacted_bsd,
    jumlah_call_agree as jumlah_call_agree_bsd,
    jumlah_revenue as jumlah_revenue_bsd,
    rpa as rpa_bsd,
    ppa as ppa_bsd
FROM
app_tam_dashboard_halo
WHERE MONTH(tanggal) = '$month' AND area = 'BSD' GROUP BY tanggal order by tanggal asc
) AS bsd_halo
ON all_halo.tanggal = bsd_halo.tanggal_bsd
LEFT JOIN
(
SELECT
    tanggal as tanggal_mlg,
    jumlah_agent as jumlah_agent_mlg,
    jumlah_call as jumlah_call_mlg,
    jumlah_call_contacted as jumlah_call_contacted_mlg,
    jumlah_call_agree as jumlah_call_agree_mlg,
    jumlah_revenue as jumlah_revenue_mlg,
    rpa as rpa_mlg,
    ppa as ppa_mlg
FROM
app_tam_dashboard_halo
WHERE MONTH(tanggal) = '$month' AND area = 'MALANG' GROUP BY tanggal order by tanggal asc
) AS mlg_halo
ON all_halo.tanggal = mlg_halo.tanggal_mlg
LEFT JOIN
(
SELECT
    tanggal as tanggal_mks,
    jumlah_agent as jumlah_agent_mks,
    jumlah_call as jumlah_call_mks,
    jumlah_call_contacted as jumlah_call_contacted_mks,
    jumlah_call_agree as jumlah_call_agree_mks,
    jumlah_revenue as jumlah_revenue_mks,
    rpa as rpa_mks,
    ppa as ppa_mks
FROM
app_tam_dashboard_halo
WHERE MONTH(tanggal) = '$month' AND area = 'MAKASSAR' GROUP BY tanggal order by tanggal asc
) AS mks_halo
ON all_halo.tanggal = mks_halo.tanggal_mks
LEFT JOIN
(
SELECT
    tanggal as tanggal_mdn,
    jumlah_agent as jumlah_agent_mdn,
    jumlah_call as jumlah_call_mdn,
    jumlah_call_contacted as jumlah_call_contacted_mdn,
    jumlah_call_agree as jumlah_call_agree_mdn,
    jumlah_revenue as jumlah_revenue_mdn,
    rpa as rpa_mdn,
    ppa as ppa_mdn
FROM
app_tam_dashboard_halo
WHERE MONTH(tanggal) = '$month' AND area = 'MEDAN' GROUP BY tanggal order by tanggal asc
) AS mdn_halo
ON all_halo.tanggal = mdn_halo.tanggal_mdn
LEFT JOIN
(
SELECT
    tanggal as tanggal_smg,
    jumlah_agent as jumlah_agent_smg,
    jumlah_call as jumlah_call_smg,
    jumlah_call_contacted as jumlah_call_contacted_smg,
    jumlah_call_agree as jumlah_call_agree_smg,
    jumlah_revenue as jumlah_revenue_smg,
    rpa as rpa_smg,
    ppa as ppa_smg
FROM
app_tam_dashboard_halo
WHERE MONTH(tanggal) = '$month' AND area = 'SEMARANG' GROUP BY tanggal order by tanggal asc
) AS smg_halo
ON all_halo.tanggal = smg_halo.tanggal_smg ORDER BY all_halo.tanggal ASC"; 

// print_r($query_all);
// Load plugin PHPExcel nya

// Panggil class PHPExcel nya
$excel = new PHPExcel();

// Settingan awal file excel
$excel->getProperties()->setCreator('DATA FMC HALO+')
             ->setLastModifiedBy('DATA FMC HALO+')
             ->setTitle("DATA FMC HALO+")
             ->setSubject("DATA FMC HALO+")
             ->setDescription("DATA FMC HALO+")
             ->setKeywords("DATA FMC HALO+");
// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
  'font' => array('bold' => true), // Set font nya jadi bold
  'alignment' => array(
    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
  'alignment' => array(
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA FMC HALO+ (".date('M Y',strtotime($date)).')'); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:F1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

// // Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('B3', "TANGGAL"); // Set kolom A3 dengan tulisan "NO"
$excel->getActiveSheet()->mergeCells('A3:A4'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->mergeCells('B3:B4'); // Set Merge Cell pada kolom A1 sampai F1

$excel->setActiveSheetIndex(0)->setCellValue('C3', "ALL"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('C3:I3'); // Set Merge Cell pada kolom A1 sampai F1

$excel->setActiveSheetIndex(0)->setCellValue('C4', "AGENT"); // Set kolom B4 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('D4', "CALL"); // Set kolom C4 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('E4', "CONTACTED"); // Set kolom D4 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('F4', "AGREE"); // Set kolom E4 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('G4', "REVENUE"); // Set kolom F4 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('H4', "PPA"); // Set kolom A4 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('I4', "RPA"); // Set kolom B3 dengan tulisan "NIS"

$excel->setActiveSheetIndex(0)->setCellValue('J3', "BANDUNG"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('J3:P3'); // Set Merge Cell pada kolom A1 sampai F1

$excel->setActiveSheetIndex(0)->setCellValue('J4', "AGENT"); // Set kolom B4 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('K4', "CALL"); // Set kolom C4 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('L4', "CONTACTED"); // Set kolom D4 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('M4', "AGREE"); // Set kolom E4 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('N4', "REVENUE"); // Set kolom F4 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('O4', "PPA"); // Set kolom A4 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('P4', "RPA"); // Set kolom B4 dengan tulisan "NIS"

$excel->setActiveSheetIndex(0)->setCellValue('Q3', "BSD"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('Q3:W3'); // Set Merge Cell pada kolom A1 sampai F1

$excel->setActiveSheetIndex(0)->setCellValue('Q4', "AGENT"); // Set kolom B4 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('R4', "CALL"); // Set kolom C4 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('S4', "CONTACTED"); // Set kolom D4 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('T4', "AGREE"); // Set kolom E4 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('U4', "REVENUE"); // Set kolom F4 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('V4', "PPA"); // Set kolom A4 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('W4', "RPA"); // Set kolom B4 dengan tulisan "NIS"

$excel->setActiveSheetIndex(0)->setCellValue('X3', "MAKASSAR"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('X3:AD3'); // Set Merge Cell pada kolom A1 sampai F1

$excel->setActiveSheetIndex(0)->setCellValue('X4', "AGENT"); // Set kolom B4 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('Y4', "CALL"); // Set kolom C4 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('Z4', "CONTACTED"); // Set kolom D4 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('AA4', "AGREE"); // Set kolom E4 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AB4', "REVENUE"); // Set kolom F4 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AC4', "PPA"); // Set kolom A4 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('AD4', "RPA"); // Set kolom B3 dengan tulisan "NIS"

$excel->setActiveSheetIndex(0)->setCellValue('AE3', "MALANG"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('AE3:AK3'); // Set Merge Cell pada kolom A1 sampai F1

$excel->setActiveSheetIndex(0)->setCellValue('AE4', "AGENT"); // Set kolom B4 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('AF4', "CALL"); // Set kolom C4 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('AG4', "CONTACTED"); // Set kolom D4 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('AH4', "AGREE"); // Set kolom E4 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AI4', "REVENUE"); // Set kolom F4 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AJ4', "PPA"); // Set kolom A4 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('AK4', "RPA"); // Set kolom B4 dengan tulisan "NIS"

$excel->setActiveSheetIndex(0)->setCellValue('AL3', "MEDAN"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('AL3:AR3'); // Set Merge Cell pada kolom A1 sampai F1

$excel->setActiveSheetIndex(0)->setCellValue('AL4', "AGENT"); // Set kolom B4 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('AM4', "CALL"); // Set kolom C4 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('AN4', "CONTACTED"); // Set kolom D4 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('AO4', "AGREE"); // Set kolom E4 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AP4', "REVENUE"); // Set kolom F4 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AQ4', "PPA"); // Set kolom A4 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('AR4', "RPA"); // Set kolom B4 dengan tulisan "NIS"

$excel->setActiveSheetIndex(0)->setCellValue('AS3', "SEMARANG"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('AS3:AY3'); // Set Merge Cell pada kolom A1 sampai F1

$excel->setActiveSheetIndex(0)->setCellValue('AS4', "AGENT"); // Set kolom B4 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('AT4', "CALL"); // Set kolom C4 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('AU4', "CONTACTED"); // Set kolom D4 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('AV4', "AGREE"); // Set kolom E4 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AW4', "REVENUE"); // Set kolom F4 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AX4', "PPA"); // Set kolom A4 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('AY4', "RPA"); // Set kolom B4 dengan tulisan "NIS"

// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('X3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Y3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Z3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AA3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AB3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AC3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AD3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AE3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AF3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AG3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AH3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AI3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AJ3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AK3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AL3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AM3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AN3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AO3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AP3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AQ3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AR3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AS3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AT3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AU3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AV3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AW3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AX3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AY3')->applyFromArray($style_col);

$excel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('E4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('J4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('O4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('P4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Q4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('R4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('S4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('T4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('U4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('V4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('W4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('X4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Y4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Z4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AA4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AB4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AC4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AD4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AE4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AF4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AG4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AH4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AI4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AJ4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AK4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AL4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AM4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AN4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AO4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AP4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AQ4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AR4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AS4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AT4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AU4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AV4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AW4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AX4')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AY4')->applyFromArray($style_col);
// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);

$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
// Buat query untuk menampilkan semua data siswa
$sql_all =  mysqli_query($conn, $query_all);
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = mysqli_fetch_assoc($sql_all)){ // Ambil semua data dari hasil eksekusi $sql
    // print_r($data);'

  $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
  $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, date("Ymd", strtotime($data['tanggal'])));
  $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['total_agent']);
  $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['total_call']);
  $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['total_call_contacted']);
  $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['total_call_agree']);
  $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['total_revenue']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('H'.$numrow, $data['total_ppa'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('I'.$numrow, $data['total_rpa'], PHPExcel_Cell_DataType::TYPE_STRING);

  $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['jumlah_agent_bdg']);
  $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data['jumlah_call_bdg']);
  $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['jumlah_call_contacted_bdg']);
  $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data['jumlah_call_agree_bdg']);
  $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data['jumlah_revenue_bdg']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('O'.$numrow, $data['ppa_bdg'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('P'.$numrow, $data['rpa_bdg'], PHPExcel_Cell_DataType::TYPE_STRING);

  $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data['jumlah_agent_bsd']);
  $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data['jumlah_call_bsd']);
  $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data['jumlah_call_contacted_bsd']);
  $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data['jumlah_call_agree_bsd']);
  $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data['jumlah_revenue_bsd']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('V'.$numrow, $data['ppa_bsd'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('W'.$numrow, $data['rpa_bsd'], PHPExcel_Cell_DataType::TYPE_STRING);

  $excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data['jumlah_agent_mks']);
  $excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['jumlah_call_mks']);
  $excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data['jumlah_call_contacted_mks']);
  $excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data['jumlah_call_agree_mks']);
  $excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data['jumlah_revenue_mks']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('AC'.$numrow, $data['ppa_mks'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('AD'.$numrow, $data['rpa_mks'], PHPExcel_Cell_DataType::TYPE_STRING);

  $excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $data['jumlah_agent_mlg']);
  $excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow, $data['jumlah_call_mlg']);
  $excel->setActiveSheetIndex(0)->setCellValue('AG'.$numrow, $data['jumlah_call_contacted_mlg']);
  $excel->setActiveSheetIndex(0)->setCellValue('AH'.$numrow, $data['jumlah_call_agree_mlg']);
  $excel->setActiveSheetIndex(0)->setCellValue('AI'.$numrow, $data['jumlah_revenue_mlg']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('AJ'.$numrow, $data['ppa_mlg'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('AK'.$numrow, $data['rpa_mlg'], PHPExcel_Cell_DataType::TYPE_STRING);

  $excel->setActiveSheetIndex(0)->setCellValue('AL'.$numrow, $data['jumlah_agent_mdn']);
  $excel->setActiveSheetIndex(0)->setCellValue('AM'.$numrow, $data['jumlah_call_mdn']);
  $excel->setActiveSheetIndex(0)->setCellValue('AN'.$numrow, $data['jumlah_call_contacted_mdn']);
  $excel->setActiveSheetIndex(0)->setCellValue('AO'.$numrow, $data['jumlah_call_agree_mdn']);
  $excel->setActiveSheetIndex(0)->setCellValue('AP'.$numrow, $data['jumlah_revenue_mdn']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('AQ'.$numrow, $data['ppa_mdn'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('AR'.$numrow, $data['rpa_mdn'], PHPExcel_Cell_DataType::TYPE_STRING);

  $excel->setActiveSheetIndex(0)->setCellValue('AS'.$numrow, $data['jumlah_agent_smg']);
  $excel->setActiveSheetIndex(0)->setCellValue('AT'.$numrow, $data['jumlah_call_smg']);
  $excel->setActiveSheetIndex(0)->setCellValue('AU'.$numrow, $data['jumlah_call_contacted_smg']);
  $excel->setActiveSheetIndex(0)->setCellValue('AV'.$numrow, $data['jumlah_call_agree_smg']);
  $excel->setActiveSheetIndex(0)->setCellValue('AW'.$numrow, $data['jumlah_revenue_smg']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('AX'.$numrow, $data['ppa_smg'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('AY'.$numrow, $data['rpa_smg'], PHPExcel_Cell_DataType::TYPE_STRING);

  // Khusus untuk no telepon. kita set type kolom nya jadi STRING
  $textFormat='@';
  // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
  $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('G'.$numrow)->getNumberFormat()->setFormatCode("Rp _(* #,##0.00_);_(* \(#.##0,00\);_(* \"-\"??_);_(@_)");
  $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row); 
  $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('N'.$numrow)->getNumberFormat()->setFormatCode("Rp _(* #,##0.00_);_(* \(#.##0,00\);_(* \"-\"??_);_(@_)");
  $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row); 
  $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('U'.$numrow)->getNumberFormat()->setFormatCode("Rp _(* #,##0.00_);_(* \(#.##0,00\);_(* \"-\"??_);_(@_)");
  $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row); 
  $excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AB'.$numrow)->getNumberFormat()->setFormatCode("Rp _(* #,##0.00_);_(* \(#.##0,00\);_(* \"-\"??_);_(@_)");
  $excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AF'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AG'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AH'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AI'.$numrow)->getNumberFormat()->setFormatCode("Rp _(* #,##0.00_);_(* \(#.##0,00\);_(* \"-\"??_);_(@_)");
  $excel->getActiveSheet()->getStyle('AI'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AJ'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AK'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AL'.$numrow)->applyFromArray($style_row); 
  $excel->getActiveSheet()->getStyle('AM'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AN'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AO'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AP'.$numrow)->getNumberFormat()->setFormatCode("Rp _(* #,##0.00_);_(* \(#.##0,00\);_(* \"-\"??_);_(@_)");
  $excel->getActiveSheet()->getStyle('AP'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AQ'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AR'.$numrow)->applyFromArray($style_row); 
  $excel->getActiveSheet()->getStyle('AS'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AT'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AU'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AV'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AW'.$numrow)->getNumberFormat()->setFormatCode("Rp _(* #,##0.00_);_(* \(#.##0,00\);_(* \"-\"??_);_(@_)");
  $excel->getActiveSheet()->getStyle('AW'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AX'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AY'.$numrow)->applyFromArray($style_row);
  
  $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
  
  $no++; // Tambah 1 setiap kali looping
  $numrow++; // Tambah 1 setiap kali looping
}
// Set width kolom
$excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('AO')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AP')->setAutoSize(true); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('AQ')->setAutoSize(true); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('AR')->setAutoSize(true); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('AS')->setAutoSize(true); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('AT')->setAutoSize(true); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('AU')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AV')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AW')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AX')->setAutoSize(true); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('AY')->setAutoSize(true); // Set width kolom F
// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Laporan Data FMC Halo+");
$excel->setActiveSheetIndex(0);
// Proses file excel
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="'.$csv_filename.'.xls"'); // Set nama file excel nya
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$write = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
$write->save('php://output');
// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment; filename="Data Siswa.csv"'); // Set nama file excel nya
// header('Cache-Control: max-age=0');
// $write = new PHPExcel_Writer_CSV($csv);
// $write->save('php://output');
?>
