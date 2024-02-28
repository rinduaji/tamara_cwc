<?php

$con=mysqli_connect("10.194.176.158","appdev","appdev123","cwcv2");

$date = date("Y-m-d");
// $date = date("Y-m-d",strtotime('2023-07-20'));
$lup = date("Y-m-d H:i:s");
print_r($date);
$query_cek = "SELECT * FROM app_tam_dashboard_halo WHERE jenis='HALO+' AND tanggal = '$date'";
$result_cek = mysqli_query($con, $query_cek) or die("Query gagal!");
$total_cek = mysqli_num_rows($result_cek);

    $query = "  
    SELECT d.tanggal, d.area, d.jenis, c.jumlah_agent, c.total_agent, d.jumlah_call, d.total_call, e.jumlah_call_contacted, e.total_call_contacted,
    f.jumlah_call_agree, f.total_call_agree,h.jumlah_not_agree, h.total_not_agree, i.jumlah_follow_up, i.total_follow_up, g.jumlah_revenue, g.total_revenue, (g.jumlah_revenue / c.jumlah_agent) as rpa, (f.jumlah_call_agree / c.jumlah_agent) as ppa,(g.total_revenue / c.total_agent) as total_rpa, (f.total_call_agree / c.total_agent) as total_ppa
    FROM
    (
        SELECT a.tanggal, a.area, a.rule, a.jumlah_agent, b.total_agent
        FROM
        (
        SELECT DATE(date_absen) as tanggal, UPPER(area) as area, rule, COUNT(username) as jumlah_agent FROM app_tam_absen WHERE keterangan = 'IN' AND jabatan = 'Agent TAM' AND rule='HALO+' GROUP BY 
        DATE(date_absen), area, rule ORDER BY tanggal , area, rule ASC 
        ) AS a
        INNER JOIN
        (
        SELECT DATE(date_absen) as tanggal, COUNT(username) as total_agent FROM app_tam_absen WHERE keterangan = 'IN' AND jabatan = 'Agent TAM' AND rule='HALO+' GROUP BY 
        DATE(date_absen) ORDER BY tanggal ASC 
        ) AS b
        ON a.tanggal=b.tanggal
    ) as c

    INNER JOIN

    (
        SELECT a.tanggal, a.area, a.jenis, a.jumlah_call, b.total_call
        FROM
        (
            SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, COUNT(login) as jumlah_call FROM app_tam_halo GROUP BY DATE(tgl), area, jenis ORDER BY 
            DATE(tgl), area, jenis ASC
        ) as a	
        INNER JOIN
        (
                SELECT DATE(tgl) as tanggal, COUNT(login) as total_call FROM app_tam_halo GROUP BY DATE(tgl) ORDER BY 
            DATE(tgl) ASC
        ) as b
        ON a.tanggal = b.tanggal
    ) AS d
    ON c.tanggal = d.tanggal
    INNER JOIN

    (
        SELECT a.tanggal, a.area, a.jenis, a.jumlah_call_contacted, b.total_call_contacted
        FROM
        (
            SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, COUNT(login) as jumlah_call_contacted FROM app_tam_halo WHERE status= 'Contacted' GROUP BY 
            DATE(tgl), area, jenis ORDER BY DATE(tgl), area, jenis ASC
        ) AS a
        INNER JOIN
        (
            SELECT DATE(tgl) as tanggal, COUNT(login) as total_call_contacted FROM app_tam_halo WHERE status= 'Contacted' GROUP BY 
            DATE(tgl) ORDER BY DATE(tgl) ASC
        ) AS b
        ON a.tanggal = b.tanggal
    ) as e
    ON d.tanggal = e.tanggal
    INNER JOIN
    (
        SELECT a.tanggal, a.area, a.jenis, a.jumlah_call_agree, b.total_call_agree
        FROM
        (	
            SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, COUNT(login) as jumlah_call_agree FROM app_tam_halo WHERE status= 'Contacted' AND 
            kategori = 'Agree' AND valid = 'Valid' AND follow = '6' AND input = 'New' GROUP BY DATE(tgl), area, jenis ORDER BY DATE(tgl), area, jenis ASC
        ) as a
        INNER JOIN
        (
            SELECT DATE(tgl) as tanggal, COUNT(login) as total_call_agree FROM app_tam_halo WHERE status= 'Contacted' AND 
            kategori = 'Agree' AND valid = 'Valid' AND follow = '6' AND input = 'New' GROUP BY DATE(tgl) ORDER BY DATE(tgl) ASC
        ) as b
        ON a.tanggal = b.tanggal
    ) as f 
    ON d.tanggal = f.tanggal
    INNER JOIN
    (
        SELECT a.tanggal, a.area, a.jenis, a.jumlah_revenue, b.total_revenue
        FROM
        (
            SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, SUM(REPLACE((SUBSTR(reason, 21)),'.','')) as jumlah_revenue FROM app_tam_halo 
            WHERE jenis='HALO+' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND valid = 'Valid' AND input = 'New' 
            GROUP BY tanggal, area, jenis ORDER BY tanggal, area, jenis ASC
        ) as a
        INNER JOIN
        (
            SELECT DATE(tgl) as tanggal, SUM(REPLACE((SUBSTR(reason, 21)),'.','')) as total_revenue FROM app_tam_halo 
            WHERE jenis='HALO+' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND valid = 'Valid' AND input = 'New' 
            GROUP BY tanggal ORDER BY tanggal ASC
        ) AS b
        ON a.tanggal = b.tanggal
    ) as g
    ON d.tanggal = g.tanggal
    INNER JOIN
    (
        SELECT a.tanggal, a.area, a.jenis, a.jumlah_not_agree, b.total_not_agree
        FROM
        (	
            SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, COUNT(login) as jumlah_not_agree FROM app_tam_halo WHERE status= 'Contacted' AND 
            kategori = 'Not Agree' GROUP BY DATE(tgl), area, jenis ORDER BY DATE(tgl), area, jenis ASC
        ) as a
        INNER JOIN
        (
            SELECT DATE(tgl) as tanggal, COUNT(login) as total_not_agree FROM app_tam_halo WHERE status= 'Contacted' AND 
            kategori = 'Not Agree' GROUP BY DATE(tgl) ORDER BY DATE(tgl) ASC
        ) as b
        ON a.tanggal = b.tanggal
    ) as h
    ON d.tanggal = h.tanggal
    INNER JOIN
    (
        SELECT a.tanggal, a.area, a.jenis, a.jumlah_follow_up, b.total_follow_up
        FROM
        (	
            SELECT DATE(tgl) as tanggal, UPPER(area) as area, jenis, COUNT(login) as jumlah_follow_up FROM app_tam_halo WHERE status= 'Contacted' AND 
            kategori = 'Follow UP' GROUP BY DATE(tgl), area, jenis ORDER BY DATE(tgl), area, jenis  ASC
        ) as a
        INNER JOIN
        (
            SELECT DATE(tgl) as tanggal, COUNT(login) as total_follow_up FROM app_tam_halo WHERE status= 'Contacted' AND 
            kategori = 'Follow UP' GROUP BY DATE(tgl) ORDER BY DATE(tgl) ASC
        ) as b
        ON a.tanggal = b.tanggal
    ) as i
    ON d.tanggal = i.tanggal
    WHERE 
        d.area = e.area AND 
        c.area = d.area AND
        d.area = f.area AND
        d.area = g.area AND
        d.area = h.area AND
        d.area = i.area AND
        
        d.tanggal = '$date'
    ";
    // print_r($query);
    $result = mysqli_query($con, $query) or die("Query gagal!");
    $allData = "INSERT INTO app_tam_dashboard_halo (tanggal, area, jenis, jumlah_agent, total_agent, jumlah_call, total_call, jumlah_call_contacted, total_call_contacted, 
                jumlah_call_agree, total_call_agree,jumlah_not_agree, total_not_agree, jumlah_follow_up, total_follow_up, jumlah_revenue, total_revenue, rpa, ppa, total_rpa, total_ppa) VALUES";
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
            $row['jumlah_not_agree']."','".$row['total_not_agree']."','".$row['jumlah_follow_up']."','".$row['total_follow_up']."','".
            $row['jumlah_revenue']."','".$row['total_revenue']."','".$row['rpa']."','".$row['ppa']."','".$row['total_rpa']."','".$row['total_ppa']."') ,";
            
        }
    }

    $allData = substr($allData, 0, -1);

if($total_cek > 0) {
    $query_hapus = "DELETE FROM app_tam_dashboard_halo WHERE jenis='HALO+' AND tanggal = '$date'";
    if(mysqli_query($con, $query_hapus)) {
        $total_data = 0;
    }
}
else {
    $total_data = 0;
}
    // print_r($total_cek);
if(isset($total_data)) {  
    if($total_data == 0 ) {    
        $hasil = mysqli_query($con, $allData);
        // print_r($allData);
        // print_r($total_ppa);
        // print_r($total_rpa);
        $query1 = "
        SELECT * FROM (
        SELECT b.tanggal, b.login, b.nama_agent, b.area, b.jenis, b.revenue, b.rank
        FROM
        (
            SELECT a.tanggal, a.login, a.nama_agent, a.area, a.jenis, a.revenue,
              ( @curr_count := IF ( @curr_value = a.area, @curr_count + 1, 1 ) ) AS rank,
              ( @curr_value := a.area ) AS curr_user_id
            FROM
            (
                    SELECT DATE(tgl) as tanggal, login, nama_agent, UPPER(area) as area, jenis,  COUNT(jenis) as tot_jenis, SUM(REPLACE((SUBSTR(reason, 21)),'.','')) as revenue
                    FROM app_tam_halo 
                    WHERE jenis='HALO+' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND input = 'New' AND valid = 'Valid' AND DATE(tgl) = '$date' 
                    GROUP BY login ORDER BY revenue DESC
            ) as a, (SELECT @curr_count:=0) r, (SELECT @curr_value:=0) q
            ORDER BY a.area ASC, a.revenue DESC
        ) as b 
        WHERE b.curr_user_id = b.area ORDER BY b.rank ASC
        ) AS c GROUP BY c.area";
$result1 = mysqli_query($con, $query1) or die("Query gagal!");
$_best_month = mysqli_num_rows($result1);
print_r($total1);

        while ($row1 = mysqli_fetch_assoc($result1)) {
            // print_r($row1);
            $sql = "UPDATE app_tam_dashboard_halo SET total_rpa='".$total_rpa[$row1['area']]."', total_ppa='".$total_ppa[$row1['area']]."', best_agent = '".$row1['nama_agent'].
                    "', revenue_tertinggi = '".$row1['revenue']."', lup = '".$lup."' WHERE jenis = '".$row1['jenis']."' AND tanggal = '$date' AND area = '".$row1['area']."'";
            $hasil_update = mysqli_query($con, $sql);

        }

        $query_best_month = "
        SELECT * FROM (
                    SELECT b.tanggal, b.login, b.nama_agent, b.area, b.jenis, b.revenue, b.rank
                    FROM
                    (
                        SELECT a.tanggal, a.login, a.nama_agent, a.area, a.jenis, a.revenue,
                        ( @curr_count := IF ( @curr_value = a.area, @curr_count + 1, 1 ) ) AS rank,
                        ( @curr_value := a.area ) AS curr_user_id
                        FROM
                        (
                                SELECT DATE(tgl) as tanggal, login, nama_agent, UPPER(area) as area, jenis,  COUNT(jenis) as tot_jenis, SUM(REPLACE((SUBSTR(reason, 21)),'.','')) as revenue
                                FROM app_tam_halo 
                                WHERE jenis='HALO+' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND input = 'New' AND valid = 'Valid' AND MONTH(tgl) = MONTH('$date') 
                                GROUP BY login ORDER BY revenue DESC
                        ) as a, (SELECT @curr_count:=0) r, (SELECT @curr_value:=0) q
                        ORDER BY a.area ASC, a.revenue DESC
                    ) as b 
                    WHERE b.curr_user_id = b.area ORDER BY  b.rank ASC
        ) AS c GROUP BY c.area
                            ";
        $result_best_month = mysqli_query($con, $query_best_month) or die("Query gagal!");
        $_best_month = mysqli_num_rows($result_best_month);
        while ($row_month = mysqli_fetch_assoc($result_best_month)) {  
            $sql = "UPDATE app_tam_dashboard_halo SET best_agent_month = '".$row_month['nama_agent'].
                "', revenue_tertinggi_month = '".$row_month['revenue']."', lup = '".$lup."' WHERE jenis = '".$row_month['jenis']."' AND tanggal = '$date' AND area = '".$row_month['area']."'";
            $hasil_update = mysqli_query($con, $sql);
        }    

        $query_best_week = "
        SELECT * FROM (
        SELECT b.tanggal, b.login, b.nama_agent, b.area, b.jenis, b.revenue, b.rank
        FROM
        (
            SELECT a.tanggal, a.login, a.nama_agent, a.area, a.jenis, a.revenue,
              ( @curr_count := IF ( @curr_value = a.area, @curr_count + 1, 1 ) ) AS rank,
              ( @curr_value := a.area ) AS curr_user_id
            FROM
            (
                    SELECT DATE(tgl) as tanggal, login, nama_agent, UPPER(area) as area, jenis,  COUNT(jenis) as tot_jenis, SUM(REPLACE((SUBSTR(reason, 21)),'.','')) as revenue
                    FROM app_tam_halo 
                    WHERE jenis='HALO+' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND input = 'New' AND valid = 'Valid' AND YEARWEEK(tgl) = YEARWEEK('$date') 
                    GROUP BY login ORDER BY revenue DESC
            ) as a, (SELECT @curr_count:=0) r, (SELECT @curr_value:=0) q
            ORDER BY a.area ASC, a.revenue DESC
        ) as b 
        WHERE b.curr_user_id = b.area ORDER BY b.rank ASC
        ) AS c GROUP BY c.area
                            ";
        $result_best_week = mysqli_query($con, $query_best_week) or die("Query gagal!");
        $_best_week = mysqli_num_rows($result_best_week);
        while ($row_week = mysqli_fetch_assoc($result_best_week)) {  
            $sql = "UPDATE app_tam_dashboard_halo SET best_agent_week = '".$row_week['nama_agent'].
                "', revenue_tertinggi_week = '".$row_week['revenue']."', lup = '".$lup."' WHERE jenis = '".$row_week['jenis']."' AND tanggal = '$date' AND area = '".$row_week['area']."'";
            $hasil_update = mysqli_query($con, $sql);
        }  


        $query_low_agent = "
        SELECT * FROM (
        SELECT b.tanggal, b.login, b.nama_agent, b.area, b.jenis, b.revenue, b.rank
        FROM
        (
            SELECT a.tanggal, a.login, a.nama_agent, a.area, a.jenis, a.revenue,
              ( @curr_count := IF ( @curr_value = a.area, @curr_count + 1, 1 ) ) AS rank,
              ( @curr_value := a.area ) AS curr_user_id
            FROM
            (
                    SELECT DATE(tgl) as tanggal, login, nama_agent, UPPER(area) as area, jenis,  COUNT(jenis) as tot_jenis, SUM(REPLACE((SUBSTR(reason, 21)),'.','')) as revenue
                    FROM app_tam_halo 
                    WHERE jenis='HALO+' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND input = 'New' AND valid = 'Valid' AND DATE(tgl) = '$date' 
                    GROUP BY login ORDER BY revenue
            ) as a, (SELECT @curr_count:=0) r, (SELECT @curr_value:=0) q
            ORDER BY a.area, a.revenue
        ) as b 
        WHERE b.curr_user_id = b.area ORDER BY b.rank ASC
        ) AS c GROUP BY c.area";
$result_low_agent = mysqli_query($con, $query_low_agent) or die("Query gagal!");
$_low_month = mysqli_num_rows($result_low_agent);
print_r($total1);

        while ($row1 = mysqli_fetch_assoc($result_low_agent)) {
            // print_r($row1);
            $sql = "UPDATE app_tam_dashboard_halo SET total_rpa='".$total_rpa[$row1['area']]."', total_ppa='".$total_ppa[$row1['area']]."', low_agent = '".$row1['nama_agent'].
                    "', revenue_low = '".$row1['revenue']."', lup = '".$lup."' WHERE jenis = '".$row1['jenis']."' AND tanggal = '$date' AND area = '".$row1['area']."'";
            $hasil_update = mysqli_query($con, $sql);

        }

        $query_low_month = "
        SELECT * FROM (
                    SELECT b.tanggal, b.login, b.nama_agent, b.area, b.jenis, b.revenue, b.rank
                    FROM
                    (
                        SELECT a.tanggal, a.login, a.nama_agent, a.area, a.jenis, a.revenue,
                        ( @curr_count := IF ( @curr_value = a.area, @curr_count + 1, 1 ) ) AS rank,
                        ( @curr_value := a.area ) AS curr_user_id
                        FROM
                        (
                                SELECT DATE(tgl) as tanggal, login, nama_agent, UPPER(area) as area, jenis,  COUNT(jenis) as tot_jenis, SUM(REPLACE((SUBSTR(reason, 21)),'.','')) as revenue
                                FROM app_tam_halo 
                                WHERE jenis='HALO+' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND input = 'New' AND valid = 'Valid' AND MONTH(tgl) = MONTH('$date') 
                                GROUP BY login ORDER BY revenue
                        ) as a, (SELECT @curr_count:=0) r, (SELECT @curr_value:=0) q
                        ORDER BY a.area, a.revenue
                    ) as b 
                    WHERE b.curr_user_id = b.area ORDER BY b.rank ASC
        ) AS c GROUP BY c.area
                            ";
        $result_low_month = mysqli_query($con, $query_low_month) or die("Query gagal!");
        $_low_month = mysqli_num_rows($result_low_month);
        while ($row_month = mysqli_fetch_assoc($result_low_month)) {  
            $sql = "UPDATE app_tam_dashboard_halo SET low_agent_month = '".$row_month['nama_agent'].
                "', revenue_low_month = '".$row_month['revenue']."', lup = '".$lup."' WHERE jenis = '".$row_month['jenis']."' AND tanggal = '$date' AND area = '".$row_month['area']."'";
            $hasil_update = mysqli_query($con, $sql);
        }    

        $query_low_week = "
        SELECT * FROM (
        SELECT b.tanggal, b.login, b.nama_agent, b.area, b.jenis, b.revenue, b.rank
        FROM
        (
            SELECT a.tanggal, a.login, a.nama_agent, a.area, a.jenis, a.revenue,
              ( @curr_count := IF ( @curr_value = a.area, @curr_count + 1, 1 ) ) AS rank,
              ( @curr_value := a.area ) AS curr_user_id
            FROM
            (
                    SELECT DATE(tgl) as tanggal, login, nama_agent, UPPER(area) as area, jenis,  COUNT(jenis) as tot_jenis, SUM(REPLACE((SUBSTR(reason, 21)),'.','')) as revenue
                    FROM app_tam_halo 
                    WHERE jenis='HALO+' AND status = 'Contacted' AND kategori = 'Agree' AND follow = '6' AND input = 'New' AND valid = 'Valid' AND YEARWEEK(tgl) = YEARWEEK('$date') 
                    GROUP BY login ORDER BY revenue
            ) as a, (SELECT @curr_count:=0) r, (SELECT @curr_value:=0) q
            ORDER BY a.area, a.revenue
        ) as b 
        WHERE b.curr_user_id = b.area ORDER BY b.rank ASC
        ) AS c GROUP BY c.area
                            ";
        $result_low_week = mysqli_query($con, $query_low_week) or die("Query gagal!");
        $_low_week = mysqli_num_rows($result_low_week);
        while ($row_week = mysqli_fetch_assoc($result_low_week)) {  
            $sql = "UPDATE app_tam_dashboard_halo SET low_agent_week = '".$row_week['nama_agent'].
                "', revenue_low_week = '".$row_week['revenue']."', lup = '".$lup."' WHERE jenis = '".$row_week['jenis']."' AND tanggal = '$date' AND area = '".$row_week['area']."'";
            $hasil_update = mysqli_query($con, $sql);
        }
    }
}

?>