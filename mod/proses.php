<?php
// Load file koneksi.php

$hostname = "10.194.176.158";
$user = "appdev";
$password = "appdev123";
$database = "cwcv2";



$conn = mysqli_connect($hostname, $user, $password, $database);

// Load plugin PHPExcel nya
require_once 'PHPExcel/PHPExcel.php';

// Panggil class PHPExcel nya
$csv = new PHPExcel();

// Settingan awal fil excel
$csv->getProperties()->setCreator('My Notes Code')
					   ->setLastModifiedBy('My Notes Code')
					   ->setTitle("Data Siswa")
					   ->setSubject("Siswa")
					   ->setDescription("Laporan Semua Data Siswa")
					   ->setKeywords("Data Siswa");

// Buat header tabel nya pada baris ke 1
$csv->setActiveSheetIndex(0)->setCellValue('A1', "NO"); // Set kolom A1 dengan tulisan "NO"
$csv->setActiveSheetIndex(0)->setCellValue('B1', "NIS"); // Set kolom B1 dengan tulisan "NIS"
$csv->setActiveSheetIndex(0)->setCellValue('C1', "NAMA"); // Set kolom C1 dengan tulisan "NAMA"
$csv->setActiveSheetIndex(0)->setCellValue('D1', "JENIS KELAMIN"); // Set kolom D1 dengan tulisan "JENIS KELAMIN"
$csv->setActiveSheetIndex(0)->setCellValue('E1', "TELEPON"); // Set kolom E1 dengan tulisan "TELEPON"
$csv->setActiveSheetIndex(0)->setCellValue('F1', "ALAMAT"); // Set kolom F1 dengan tulisan "ALAMAT"

// Buat query untuk menampilkan semua data siswa
$sql = mysqli_query($conn, "SELECT * FROM app_tam_halo WHERE `status` = 'Contacted' and kategori = 'Agree'");

$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 2
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$csv->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	$csv->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['fastel']);
	$csv->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['login']);
	$csv->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['nama']);
	
	// Khusus untuk no telepon. kita set type kolom nya jadi STRING
	$csv->setActiveSheetIndex(0)->setCellValueExplicit('E'.$numrow, $data['no_kk'], PHPExcel_Cell_DataType::TYPE_STRING);
	
	$csv->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['no_ktp']);
	
	$no++; // Tambah 1 setiap kali looping
	$numrow++; // Tambah 1 setiap kali looping
}

// Set orientasi kertas jadi LANDSCAPE
$csv->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

// Set judul file excel nya
$csv->getActiveSheet(0)->setTitle("Laporan Data Transaksi");
$csv->setActiveSheetIndex(0);

// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data Siswa.csv"'); // Set nama file excel nya
header('Cache-Control: max-age=0');

$write = new PHPExcel_Writer_CSV($csv);
$write->save('php://output');
?>
