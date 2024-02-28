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
a.nama_agent AS Agent,
a.area AS Site,
a.fastel,
a.nama_dm AS Nama_Pemilik,
a.tlp AS No_CP,
a.reg AS Regional,
a.jenis AS Jenis_Call,
a.status AS Status_Call,
a.kategori AS Kategori,
a.reason AS Reason_Call,
a.penerima AS Nama_Penerima,
a.ket AS Keterangan,
a.rec_qco AS Rekomendasi_QCO1,
a.tgl_qco1,
a.rec_tl AS Rekomendasi_TL,
a.tgl_tl,
a.upd_qco AS Update_QCO1,
a.upd_tl AS Update_TL,
a.input AS Input_Call,
a.add_on_tsel AS Selisih_Harga,
a.follow AS Status_WO,
a.valid,
a.prof_hoby AS Retapping_QA,
a.prof_hp AS Poin,
a.id_return_tl AS Detil_Return,
a.tapping_decline AS Tapping_Decline,
a.alasan_nok AS Alasan_NOK,
a.detil_alasan AS Detil_NOK, 
a.skrip AS Skrip_AntiDecline,
a.reject AS Jml_ditolak,
a.prof_agama AS Chanel_NBA,
a.prof_facebook AS Sub_Chanel_NBA,
a.durasi AS durasi,
a.speed_asal AS Speed_Asal,
a.speed_tujuan AS Speed_tujuan,
a.param AS Param_di_Metranet,
a.internet AS Internet,
a.ott1 AS OTT1,
a.ott2 AS OTT2,
a.paket_harga AS Paket_Harga,
a.paket_steaming AS Paket_Streaming,
a.diskon AS Diskon,
a.total_harga_diskon AS Total_Diskon,
a.hssp_type AS Type_HSSP,
a.recom_speed AS Recommended_Speed,
a.speed_tertinggi AS Speed_Teringgi,
a.blast AS Blast,
a.alamat_instalasi AS Alamat_Instalasi,
a.email AS Email

FROM
app_tam_data2 AS a 
WHERE $whr $wh $pr order by a.login asc";
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
$csv_filename = 'Data TAM '.date('Y-m-d').' '.$site.'.csv';
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);