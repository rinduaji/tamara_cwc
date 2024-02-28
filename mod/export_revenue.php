<?php
if(isset($_POST['export'])) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('Tanggal', 'Login', 'Nama', 'Area', 'Revenue'));
    $result = mysqli_query($con,$query) or die ("Query gagal!");
    while($row=mysqli_fetch_assoc($result)){
        fputcsv($output,$row);
    }
    fclose($output);
}
?>