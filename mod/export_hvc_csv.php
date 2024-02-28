<?php
include("./assets/conn.php");

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


$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59'";
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
if ($site=='AllArea'){$wh="";}
else{$wh="and a.area like '$site'";}

$query="SELECT
a.tgl AS Tanggal,
a.login,
a.nama_agent AS Nama_Agent,
a.area AS Site,
a.no_telp AS No_Telepon,
a.no_inet AS No_Internet,
a.ncli AS NCLI,
a.hp_utama AS Handphone_Utama,
a.nama_plg AS Nama_Pelanggan,
a.kelamin AS Jenis_Kelamin,
a.kendala AS Kendala,
a.layanan AS Layanan,
a.symptom AS Symptomp,
a.kategori_hvc AS Kategori_HVC,
a.nama_pemilik AS Nama_Pemilik,
a.relasi AS Relasi_Kepemilikan,
a.hp_utama2 AS Handphone_Utama_2,
a.hp_lain AS Handphone_Lain,
a.email,
a.alamat,
a.kota,
a.saran,
a.kategori,
a.sub_kat AS Sub_kategori,
a.status_call AS Status_Call,
a.keterangan,
a.kode_voucher,
a.tgl_in_voucher AS Tanggal_Input_Voucher,
a.nama_voucher,
a.upd_qco AS Login_QCO,
a.rec_qco AS Rekomendasi_QCO,
a.tgl_qco AS Tanggal_Input_QCO, 
a.valid,
a.durasi,
a.input,
a.channel,
a.opt_in AS Hobby_Favorit,
a.jenis AS Jenis_Call,
a.reason AS Reason_Call,
a.selisih_harga,
a.id_return_tl

FROM
app_tam_hvc AS a 
WHERE $whr order by a.login asc";
// echo $query;

$csv_export = '';
// query to get data from database
$query = mysqli_query($conn, $query);
$field = mysqli_field_count($conn);

// create line with field names
for($i = 0; $i < $field; $i++) {
    $csv_export.= mysqli_fetch_field_direct($query, $i)->name.';';
}

// newline (seems to work both on Linux & Windows servers)
$csv_export.= '
';

// loop through database query and fill export variable
while($row = mysqli_fetch_array($query)) {
    // create line with field values
    for($i = 0; $i < $field; $i++) {
        $csv_export.= '"'.$row[mysqli_fetch_field_direct($query, $i)->name].'";';
    }
    $csv_export.= '
';
}
// filename for export
$csv_filename = 'Data TAM HVC '.date('Y-m-d').' '.$site.'.csv';
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);