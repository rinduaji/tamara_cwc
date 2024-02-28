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
$dt = explode("-",trim($date)); 
$tglx="$dt[2]-$dt[1]-$dt[0]";


$whr="a.tgl BETWEEN '$tglx 00:00:00' AND '$tglx 23:59:59'";
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

$site=$_POST['site'];
if ($site=='ALL AREA'){$wha="";}
else{$wha=" and a.area like '$site'";}

$pilih_tipe=$_POST['pilih_tipe'];
if ($pilih_tipe=='REGULER'){$wht=" AND a.type_p2p='REGULER' ";}
else{$wht=" AND a.type_p2p='CROSS' ";}

$pilih_data=$_POST['pilih_data'];
if ($pilih_data=='ALL'){$wh="";}
elseif($pilih_data=='Agree') {$wh=" and a.status = 'Contacted' and a.kategori = 'Agree' and a.follow='6'";}
elseif($pilih_data=='Not Agree') {$wh=" and a.status = 'Contacted' and a.kategori = 'Not Agree'";}
elseif($pilih_data=='Follow UP') {$wh=" and a.status = 'Contacted' and a.kategori = 'Follow UP'";}
elseif($pilih_data=='RNA') {$wh=" and a.status = 'Not Contacted' and a.kategori = 'RNA'";}
elseif($pilih_data=='VOICEMAIL / TIDAK AKTIF / DI LUAR JANGKAUAN') {$wh=" and a.status = 'Not Contacted' and a.kategori = 'VOICEMAIL / TIDAK AKTIF / DI LUAR JANGKAUAN'";}
elseif($pilih_data=='BUSY / REJECTED CALLBUSY / REJECTED CALL') {$wh=" and a.status = 'Not Contacted' and a.kategori = 'BUSY / REJECTED CALLBUSY / REJECTED CALL'";}
else{$wh=" and a.status = 'Contacted' and a.kategori = 'Agree'";}

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
$csv_filename = 'Data P2P '.$pilih_tipe.' '.date('Y-m-d').' site('.$site.') data('.$pilih_data.')';
// // Export the data and prompt a csv file for download
// header("Content-type: text/x-csv");
// header("Content-Disposition: attachment; filename=".$csv_filename."");
// echo($csv_export);

$query = "SELECT
a.tgl AS TANGGAL,
a.login AS LOGIN_AGENT,
a.perner AS PERNER_AGENT,
a.nama_agent AS NAMA_AGENT,
a.area AS AREA_AGENT,
a.init_offer AS INIT_OFFER,
a.label AS LABEL,
a.msisdn AS MSISDN,
a.nama_plg AS NAMA_PELANGGAN,
a.ktp AS NO_KTP,
a.kk AS NO_KK,
a.no_hp_lain AS NO_TELEPON_LAIN,
a.tgl_lahir AS TGL_LAHIR,
a.tempat_lahir AS TEMPAT_LAHIR,
a.email_plg AS EMAIL_PELANGGAN,
a.alamat_ktp_plg AS ALAMAT_KTP,
a.alamat_domisili AS ALAMAT_DOMISILI,
a.kode_pos AS KODE_POS,
a.no_cp_ref AS NO_CP_REFERENSI,
a.nama_cp_ref AS NAMA_CP_REFERENSI,
a.tgl_setuju AS TANGGAL_SETUJU,
a.revenue AS REVENUE,
a.jenis AS JENIS_CALL,
a.status AS STATUS_CALL,
a.kategori AS KATEGORI,
a.reason AS REASON_CALL,
a.keterangan AS KETERANGAN,
a.follow AS FOLLOW,
a.input AS INPUT,
a.valid AS VALID,
a.upd_qco AS LOGIN_QCO,
a.rec_qco AS REKOMENDASI_QCO,
a.tgl_qco AS TANGGAL_TAPPING_QCO,
a.upd_tl AS LOGIN_TL,
a.rec_tl AS REKOMENDASI_TL,
a.tgl_tl AS TANGGAL_TAPPING_TL,
a.id_return_tl AS ID_RETURN,
a.durasi AS DURASI,
a.cls AS CLS,
a.type_p2p AS TYPE_P2P

FROM
app_tam_p2p AS a 
WHERE $whr $wh $wha $wht order by a.tgl asc"; 

// print_r($query);
// Load plugin PHPExcel nya

// Panggil class PHPExcel nya
$excel = new PHPExcel();

// Settingan awal file excel
$excel->getProperties()->setCreator('DATA P2P')
             ->setLastModifiedBy('DATA P2P')
             ->setTitle("DATA P2P")
             ->setSubject("DATA P2P")
             ->setDescription("DATA P2P")
             ->setKeywords("DATA P2P");
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
$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA P2P - ".$pilih_data); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:F1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
// // Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('B3', "TANGGAL"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "LOGIN_AGENT"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "PERNER_AGENT"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('E3', "NAMA_AGENT"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('F3', "AREA_AGENT"); // Set kolom D3 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('G3', "INIT_OFFER"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('H3', "LABEL"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('I3', "MSISDN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('J3', "NAMA_PLG"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('K3', "KTP"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('L3', "KK"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('M3', "NO_TELEPON_LAIN"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('N3', "TGL_LAHIR"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('O3', "TEMPAT_LAHIR"); // Set kolom D3 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('P3', "EMAIL_PELANGGAN"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('Q3', "ALAMAT_KTP_PLG"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('R3', "ALAMAT_DOMISILI"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('S3', "KODE_POS"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('T3', "NO_CP_REF"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('U3', "NAMA_CP_REF"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('V3', "TGL_SETUJU"); // Set kolom D3 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('W3', "REVENUE"); // Set kolom D3 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('X3', "JENIS"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('Y3', "STATUS"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('Z3', "KATEGORI"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('AA3', "REASON"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AB3', "KETERANGAN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AC3', "FOLLOW"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AD3', "INPUT"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AE3', "VALID"); // Set kolom D3 dengan tulisan "JENIS"
$excel->setActiveSheetIndex(0)->setCellValue('AF3', "UPD_QCO"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AG3', "REC_QCO"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AH3', "TGL_QCO"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('AI3', "UPD_TL"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AJ3', "REC_TL"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AK3', "TGL_TL"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('AL3', "ID_RETURN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AM3', "DURASI"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AN3', "CLS"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AO3', "TYPE_P2P"); // Set kolom F3 dengan tulisan "ALAMAT"


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
// Buat query untuk menampilkan semua data siswa
$sql =  mysqli_query($conn, $query);
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = mysqli_fetch_assoc($sql)){ // Ambil semua data dari hasil eksekusi $sql

  $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
  $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, date("d-m-Y H:i:s", strtotime($data['TANGGAL'])));
  $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['LOGIN_AGENT']);
  $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['PERNER_AGENT']);
  $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['NAMA_AGENT']);
  $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['AREA_AGENT']);
  $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['INIT_OFFER']);
  $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['LABEL']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('I'.$numrow, $data['MSISDN'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['NAMA_PELANGGAN']);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('K'.$numrow, $data['NO_KTP'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('L'.$numrow, $data['NO_KK'], PHPExcel_Cell_DataType::TYPE_STRING);
  $excel->setActiveSheetIndex(0)->setCellValueExplicit('M'.$numrow, $data['NO_TELEPON_LAIN'], PHPExcel_Cell_DataType::TYPE_STRING); 
  $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, date("d-m-Y", strtotime($data['TGL_LAHIR'])));
  $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data['TEMPAT_LAHIR']);
  $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data['EMAIL_PELANGGAN']);
  $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data['ALAMAT_KTP']);
  $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data['ALAMAT_DOMISILI']);
   $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data['KODE_POS']); 
 $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data['NO_CP_REFERENSI']);
  $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data['NAMA_CP_REFERENSI']);
  $excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, date("d-m-Y", strtotime($data['TANGGAL_SETUJU'])));
  $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data['REVENUE']);
   $excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data['JENIS_CALL']);
  $excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['STATUS_CALL']);
  $excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data['KATEGORI']);
  $excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data['REASON_CALL']);
  $excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data['KETERANGAN']);
  $excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $data['FOLLOW']);
  $excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data['INPUT']);
  $excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $data['VALID']);
  $excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow, $data['LOGIN_QCO']);
  $excel->setActiveSheetIndex(0)->setCellValue('AG'.$numrow, $data['REKOMENDASI_QCO']);
  $excel->setActiveSheetIndex(0)->setCellValue('AH'.$numrow, date("d-m-Y H:i:s", strtotime($data['TANGGAL_TAPPING_QCO'])));
  $excel->setActiveSheetIndex(0)->setCellValue('AI'.$numrow, $data['LOGIN_TL']);
  $excel->setActiveSheetIndex(0)->setCellValue('AJ'.$numrow, $data['REKOMENDASI_TL']);
  $excel->setActiveSheetIndex(0)->setCellValue('AK'.$numrow, date("d-m-Y H:i:s", strtotime($data['TANGGAL_TAPPING_TL'])));
  $excel->setActiveSheetIndex(0)->setCellValue('AL'.$numrow, $data['ID_RETURN']);
  $excel->setActiveSheetIndex(0)->setCellValue('AM'.$numrow, $data['DURASI']);
  $excel->setActiveSheetIndex(0)->setCellValue('AN'.$numrow, $data['CLS']);
  $excel->setActiveSheetIndex(0)->setCellValue('AO'.$numrow, $data['TYPE_P2P']);

 
  // Khusus untuk no telepon. kita set type kolom nya jadi STRING
  $textFormat='@';
  // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
  $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row); 
  $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row); 
  $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row); 
  $excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AF'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AG'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AH'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AI'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AJ'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AK'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AL'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AM'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AN'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('AO'.$numrow)->applyFromArray($style_row);
  
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
$excel->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('AO')->setAutoSize(true); // Set width kolom C

// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Laporan Data P2P");
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
