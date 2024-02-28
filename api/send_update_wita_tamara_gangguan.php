<?php
$status="DONE ALL";
$jastel="9090";
$tgl_update = date("Y-m-d H:i:s");


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://10.194.176.158/cwctam_v2/api/api_wita.php?function=update_data_tam&jastel='.$jastel,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'status='.$status.'&jastel='.$jastel.'&tgl_update='.$tgl_update,
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic dGFtYXJhdG93aXRhOnNtZ21sZw==',
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;