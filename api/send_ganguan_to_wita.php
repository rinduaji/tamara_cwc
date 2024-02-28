<?php
$conn = new mysqli("10.194.176.158","appdev","appdev123","cwcv2");
$login_agent = $_POST['login'];
$nama_agent = $_POST['nama'];
$nomor_jastel = $_POST['jastel'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$cp_pelanggan = $_POST['cp_pelanggan'];
$detail_kendala = $_POST['keterangan'];
$tgl_input = date("Y-m-d H:i:s");


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '10.194.7.32/Wita/API/tamaratowita.php?function=insert_tiket',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'login='.$login_agent.'&nama='.$nama_agent.'&jastel='.$nomor_jastel.'&nama_pelanggan='.$nama_pelanggan.'&cp_pelanggan='.$cp_pelanggan.'&keterangan='.$detail_kendala,
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic dGFtYXJhdG93aXRhOnNtZ21sZw==',
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

$query = "INSERT INTO app_wita SET login_agent='$login_agent', nama_agent='$nama_agent', jastel='$nomor_jastel', nama_pelanggan='$nama_pelanggan', cp_pelanggan='$cp_pelanggan', keterangan='$detail_kendala', tgl_input='$tgl_input', `status`='ON PROGRESS'";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query($query);

curl_close($curl);
echo $response;