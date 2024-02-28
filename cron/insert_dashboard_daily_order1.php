<html>
    <body>
        <form method="POST" action="">
            <input type="date" name="tanggal_sekarang"/>
            <input type="submit" value="OK"/>
        </form>
    </body>
</html>
<?php
if(isset($_POST['tanggal_sekarang'])) {
    $con=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");
    $date = date("Y-m-d", strtotime($_POST['tanggal_sekarang']));
    $lup = date("Y-m-d H:i:s", strtotime($_POST['tanggal_sekarang'].' 00:00:00'));
    // print_r($lup);
    // die();
    $query_cek = "SELECT * FROM app_tam_dashboard WHERE tanggal = '$date'";
    $result_cek = mysqli_query($con, $query_cek) or die("Query gagal!");
    $total_cek = mysqli_num_rows($result_cek);

        $query = "
            SELECT d.tanggal, d.area, d.jenis, c.jumlah_agent, c.total_agent, d.jumlah_call, d.total_call, e.jumlah_call_contacted, e.total_call_contacted,
            f.jumlah_call_agree, f.total_call_agree, g.jumlah_revenue, g.total_revenue, (g.jumlah_revenue / c.jumlah_agent) as rpa, (f.jumlah_call_agree / c.jumlah_agent) as ppa
            FROM
            (
                SELECT a.tanggal, a.area, a.rule, a.jumlah_agent, b.total_agent
                FROM
                (
                SELECT DATE(date_absen) as tanggal, UPPER(area) as area, rule, COUNT(username) as jumlah_agent FROM app_tam_absen WHERE keterangan = 'IN' AND jabatan = 'Agent TAM' GROUP BY 
                DATE(date_absen), area, rule ORDER BY tanggal , area, rule ASC 
                ) AS a
                INNER JOIN
                (
                SELECT DATE(date_absen) as tanggal, UPPER(area) as area, COUNT(username) as total_agent FROM app_tam_absen WHERE keterangan = 'IN' AND jabatan = 'Agent TAM' GROUP BY 
                DATE(date_absen), area ORDER BY tanggal , area ASC 
                ) AS b
                ON a.tanggal=b.tanggal WHERE a.area=b.area
            ) as c

            INNER JOIN

            (
                SELECT a.tanggal, a.area, a.jenis, a.jumlah_call, b.total_call
                FROM
                (
                    SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, COUNT(login) as jumlah_call FROM app_tam_data2 GROUP BY DATE(tgl), area, jenis ORDER BY 
                    DATE(tgl), area, jenis ASC
                ) as a	
                INNER JOIN
                (
                        SELECT DATE(tgl) as tanggal, UPPER(area) as area, COUNT(login) as total_call FROM app_tam_data2 GROUP BY DATE(tgl), area ORDER BY 
                    DATE(tgl), area ASC
                ) as b
                ON a.tanggal = b.tanggal WHERE a.area = b.area
            ) AS d
            ON c.tanggal = d.tanggal
            INNER JOIN

            (
                SELECT a.tanggal, a.area, a.jenis, a.jumlah_call_contacted, b.total_call_contacted
                FROM
                (
                    SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, COUNT(login) as jumlah_call_contacted FROM app_tam_data2 WHERE status= 'Contacted' GROUP BY 
                    DATE(tgl), area, jenis ORDER BY DATE(tgl), area, jenis ASC
                ) AS a
                INNER JOIN
                (
                    SELECT DATE(tgl) as tanggal, UPPER(area) as area, COUNT(login) as total_call_contacted FROM app_tam_data2 WHERE status= 'Contacted' GROUP BY 
                    DATE(tgl), area ORDER BY DATE(tgl), area ASC
                ) AS b
                ON a.tanggal = b.tanggal WHERE a.area = b.area
            ) as e
            ON d.tanggal = e.tanggal
            INNER JOIN
            (
                SELECT a.tanggal, a.area, a.jenis, a.jumlah_call_agree, b.total_call_agree
                FROM
                (	
                    SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, COUNT(login) as jumlah_call_agree FROM app_tam_data2 WHERE status= 'Contacted' AND 
                    kategori = 'Agree' AND valid = 'Valid' AND follow = '6' GROUP BY DATE(tgl), area, jenis ORDER BY DATE(tgl), area, jenis ASC
                ) as a
                INNER JOIN
                (
                    SELECT DATE(tgl) as tanggal, UPPER(area) as area, COUNT(login) as total_call_agree FROM app_tam_data2 WHERE status= 'Contacted' AND 
                    kategori = 'Agree' AND valid = 'Valid' AND follow = '6' GROUP BY DATE(tgl), area ORDER BY DATE(tgl), area ASC
                ) as b
                ON a.tanggal = b.tanggal WHERE a.area = b.area
            ) as f 
            ON d.tanggal = f.tanggal
            INNER JOIN
            (
                SELECT a.tanggal, a.area, a.jenis, a.jumlah_revenue, b.total_revenue
                FROM
                (
                    SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, SUM(add_on_tsel) as jumlah_revenue FROM app_tam_data2 
                    WHERE status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND valid = 'Valid' 
                    GROUP BY tanggal, area, jenis ORDER BY tanggal, area, jenis ASC
                ) as a
                INNER JOIN
                (
                    SELECT DATE(tgl) as tanggal, UPPER(area) as area, SUM(add_on_tsel) as total_revenue FROM app_tam_data2 
                    WHERE status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND valid = 'Valid' 
                    GROUP BY tanggal, area ORDER BY tanggal, area ASC
                ) AS b
                ON a.tanggal = b.tanggal WHERE a.area = b.area
            ) as g
            ON d.tanggal = g.tanggal
            WHERE 
                d.area = e.area AND 
                c.area = d.area AND
                d.area = f.area AND
                d.area = g.area AND
                
                d.jenis = c.rule AND 
                d.jenis = e.jenis AND 
                d.jenis = f.jenis AND
                d.jenis = g.jenis AND 
                d.tanggal = '$date'
        ";
        // print_r($query);
        $result = mysqli_query($con, $query) or die("Query gagal!");
        $allData = "INSERT INTO app_tam_dashboard (tanggal, area, jenis, jumlah_agent, total_agent, jumlah_call, total_call, jumlah_call_contacted, total_call_contacted, 
                    jumlah_call_agree, total_call_agree, jumlah_revenue, total_revenue, rpa, ppa) VALUES";
        $area = "";
        $tgl = "";
        $total_rpa = array();
        $total_ppa = array();
        $kota = array();
        while ($row = mysqli_fetch_assoc($result)) {
            if(($area == "" || $area != $row['area'])) {
                $temp_area = $row['area'];
                $area = $temp_area;
                
                $temp_tgl = $row['tanggal'];
                $tgl = $temp_tgl;
                
                $total_rpa[$area] = 0;
                $total_ppa[$area] = 0;
            }
            
            if($temp_area == $area) {
                $area = $row['area'];
                $tgl = $row['tanggal'];
                
                $total_rpa[$area] += $row['rpa'];
                $total_ppa[$area] += $row['ppa'];

                $allData .= " ('".$row['tanggal']."','".$row['area']."','".$row['jenis']."','".$row['jumlah_agent']."','".$row['total_agent']."','".$row['jumlah_call']."','".
                $row['total_call']."','".$row['jumlah_call_contacted']."','".$row['total_call_contacted']."','".$row['jumlah_call_agree']."','".$row['total_call_agree']."','".
                $row['jumlah_revenue']."','".$row['total_revenue']."','".$row['rpa']."','".$row['ppa']."') ,";
                
            }
        }

        $allData = substr($allData, 0, -1);

    if($total_cek > 0) {
        $query_hapus = "DELETE FROM app_tam_dashboard WHERE tanggal = '$date'";
        if(mysqli_query($con, $query_hapus)) {
            $total_data = 0;
        }
    }
    else {
        $total_data = 0;
    }
    if(isset($total_data)) {  
        if($total_data == 0 ) {    
            print_r($allData);
            $hasil = mysqli_query($con, $allData);
            // print_r($allData);
            // print_r($total_ppa);
            // print_r($total_rpa);
            $query1 = "SELECT a.tanggal, a.login, a.nama_agent, a.area, MAX(revenue) as revenue_tertinggi
                        FROM
                        (
                            SELECT DATE(tgl) as tanggal, login, nama_agent, UPPER(area) as area, jenis,  COUNT(jenis) as tot_jenis, SUM(add_on_tsel) as revenue FROM app_tam_data2 
                            WHERE status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND valid = 'Valid' AND DATE(tgl) = '$date' 
                            GROUP BY tanggal, login, jenis ORDER BY tanggal, area, login, jenis ASC
                        ) as a
                        GROUP BY a.area ORDER BY a.area ASC";
            $result1 = mysqli_query($con, $query1) or die("Query gagal!");
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $sql = "UPDATE app_tam_dashboard SET total_rpa='".$total_rpa[$row1['area']]."', total_ppa='".$total_ppa[$row1['area']]."', best_agent = '".$row1['nama_agent'].
                        "', revenue_tertinggi = '".$row1['revenue_tertinggi']."', lup = '".$lup."' WHERE tanggal = '$date' AND area = '".$row1['area']."'";
                $hasil_update = mysqli_query($con, $sql);
            }
        }
    }
}

?>