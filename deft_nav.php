<!doctype html>
<html lang="en">
<title>App TAM v2</title>

<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/Infomedia.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="../assets/summernote/summernote.css" />
	<!--link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet" -->

	<!-- Animation library for notifications   -->
	<link href="../assets/css/animate.min.css" rel="stylesheet" />

	<!-- Light Bootstrap Table core CSS    -->
	<link href="../assets/css/bootstrap-dashboard-light.css" rel="stylesheet" />

	<!-- Fonts and icons     -->
	<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

	<link href="../agency/awesome/css/font-awesome.min.css" rel="stylesheet" type='text/css' />

	<link href="../assets/sweetalert/sweetalert2.min.css" rel="stylesheet" />
	<link href="../assets/select2/select2.min.css" rel="stylesheet" />
	<!-- Datepicker and auto complete   -->
	<link rel="stylesheet" href="../assets/css/datepicker-jquery-ui.css" />
	<link rel="stylesheet" href="../assets/css/awesomplete.css" />

<!-- include summernote css/js -->

	
	<script src="../assets/js/awesomplete.js" async></script>
	<script src="../assets/js/jquery-3.5.1.js"></script>
	<script src="../assets/js/jquery-3.5.1.min.js"></script>
	<script src="../assets/summernote/summernote.js"></script>
<!--script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script -->
	<script src="../assets/js/jquery-ui.js"></script>
	<script src="../assets/js/canvasjs.min.js"></script>
	<script src="../assets/js/sweetalert.min.js"></script>
	<script src="../assets/select2/select2.min.js"></script>
	
	<?php

	include("../assets/conn.php");
	include("../assets/script.php");

	?>
</head>

<body>
	<div class="wrapper">
		<div class="sidebar" style="background-color: #000000" data-color="black" data-image="">

			<!--
		Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
		Tip 2: you can also add an image using data-image tag
	-->


			<div class="sidebar-wrapper container-fluid" style="overflow:auto;">
				<span calss="imgContainer">
					<img src="../agency/img/info4.png">
				</span>
				<ul class="nav">
					<?php
					if ($_SESSION['jabatan'] == 'Agent TAM' || $_SESSION['jabatan'] == 'Agent Carring') {
					?>
						<li><a href="dashboard.php"><i class="pe-7s-graph3"></i>
								<p>Dashboard</p>
							</a></li>
						
						<!-- <div class="collapse" id="coll1"  style="font-size:12px">
								<ul class="nav">
									<li><a href="dashboard_laporan_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard WITA</a></li>
									<li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Activity</a></li>
									<li><a href="http://10.194.176.158/dashboard_tam/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Revenue</a></li>
									<li><a href="http://10.194.176.158/wallboard_hvc/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wallboard HVC</a></li>
								</ul>
							</div>
						</li> -->
						<li><a data-toggle="collapse" href="#coll1"><i class="pe-7s-note"></i>
								<p>Menu Agent<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll1" style="font-size:12px;">
								<ul class="nav">
									<!-- <li><a href="absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi</a></li> -->
									<li><a href="list_wo_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO HALO</a></li>
									<li><a href="form_wo_p2p_reguler.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO P2P REGULER</a></li>
									<li><a href="form_wo_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO P2P CROSS</a></li>
									<li><a href="list_wo_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO HVC</a></li>
									<li><a href="input_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input HVC</a></li>
									<li><a href="list_recall_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall HALO</a></li>
									<li><a href="list_recall_p2p_reguler.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall P2P REGULER</a></li>
									<li><a href="list_recall_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall P2P CROSS</a></li>
									<li><a href="list_recall_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall HVC</a></li>
									<li><a href="list_follow_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FU HVC</a></li>
									<li><a href="list_follow_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FU HALO</a></li>
									<li><a href="list_follow_p2p_reguler.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FU P2P REGULER</a></li>
									<li><a href="list_follow_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FUP2P CROSS</a></li>
									<li><a href="input5.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input CWC</a></li>
									<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Transaksi</a></li>
									<li><a href="list_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall AddOn</a></li>				
									<li><a href="list_follow.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow Up</a></li>									
										
									<li><a href="form_rekap_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
									<li><a href="form_rekap_agent_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent HALO</a></li>
									<li><a href="form_rekap_agent_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent P2P</a></li>
									<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
									<li><a href="ref_all.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Anti Decline</a></li>
									<li><a href="monpros_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jobdesk</a></li>
									<li><a href="cek_jawaban_salah_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>
									<li><a href="report_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report WITA</a></li>
									<!--li><a href="form_wo_netflix.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO NETFLIX</a></li> -->
								</ul>
							</div>
						</li>
												
						<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu WFM<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi</a></li >
									
									<li><a href="report_rooster_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Rooster</a></li>
									<li><a href="report_absen_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Absen </a></li>
									<!-- <li><a href="report_rooster_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rooster Agent</a></li> -->
									<!-- <li><a href="form_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan Cuti</a></li> -->
									<li><a href="form_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan TKD</a></li>
									<li><a href="form_approve_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve TKD</a></li>
									
									<li><a href="form_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan Cuti</a></li>
									<li><a href="report_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Cuti</a></li>
									
									<li><a href="report_absen_hk_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi HK <?=$_SESSION['jabatan']?></a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll6"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll6" style="font-size:12px;">
								<ul class="nav">
									<li><a href="visimisi.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visi Misi</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
									
								</ul>
							</div>
						</li>

					<?php } else if ($_SESSION['jabatan'] == 'qa' || $_SESSION['jabatan'] == 'Supervisor TAM DCS' || $_SESSION['jabatan'] == 'TL TAM DCS' || $_SESSION['jabatan'] == 'Tabber TAM' || $_SESSION['jabatan'] == 'Trainer'  || $_SESSION['jabatan'] == 'Supervisor QA TAM') {	?>
						
						<!-- <li><a href="dashboard_staff.php"><i class="pe-7s-graph1"></i>
								<p>Dashboard</p>
							</a></li>
						<li><a href="dashboard_laporan_wita.php"><i class="pe-7s-graph3"></i>
								<p>Dashboard WITA</p>
							</a></li>
							<li><a href="dashboard_activity.php"><i class="pe-7s-graph3"></i>
								<p>Dashboard Activity</p>
							</a></li> -->
						<li><a data-toggle="collapse" href="#coll1"><i class="pe-7s-graph2"></i>
								<p>Dashboard<b class="caret"></b></p>
							</a>

							<div class="collapse" id="coll1"  style="font-size:12px">
								<ul class="nav">
									<li><a href="dashboard_laporan_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard WITA</a></li>
									<li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Activity</a></li>
									<li><a href="http://10.194.176.158/dashboard_tam/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Revenue</a></li>
									<li><a href="http://10.194.176.158/wallboard_hvc/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wallboard HVC</a></li>
								</ul>
							</div>
						</li>
						
						<div class="collapse" id="coll1"  style="font-size:12px">
								<ul class="nav">
									<li><a href="dashboard_laporan_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard WITA</a></li>
									<li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Activity</a></li>
									<li><a href="http://10.194.176.158/dashboard_tam/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Revenue</a></li>
									<li><a href="http://10.194.176.158/wallboard_hvc/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wallboard HVC</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll3"><i class="pe-7s-display2"></i>
								<p><?php echo $_SESSION['jb']; ?><b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll3" style="font-size:12px">
								<ul class="nav">
									
									<li><a href="approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve QC</a></li>
									<li><a href="approve_spv.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve TL OPS</a></li>
									<li><a href="approve_spv_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve TL OPS HVC</a></li>
									<li><a href="approve_spv_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve TL HALO</a></li>
									<li><a href="approve_spv_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve TL P2P CROSS</a></li>
									<li><a href="approve_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve Recall QC</a></li>
									<li><a href="form_export.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data</a></li>
									<li><a href="form_export_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data HVC</a></li>
									<li><a href="form_export_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data HALO</a></li>
									
									<li><a href="form_export_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data P2P</a></li>
									<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Order Transaksi</a></li>
									<li><a href="list_totrecall.php?mode=list">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Agent Recall </a></li>
									<li><a href="myhandel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle</a></li>
									<li><a href="myhandel_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle HALO</a></li>
									<li><a href="myhandel_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle P2P</a></li>
									<li><a href="myhandel_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle HVC</a></li>
									<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
									<li><a href="form_rekap_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
									<li><a href="form_rekap_agent_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent HALO</a></li>
									<li><a href="form_rekap_agent_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent P2P</a></li>
									<li><a href="rekap_site.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agree</a></li>
									<li><a href="form_tot_approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap QC</a></li>
									<li><a href="list_decline.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tapping Decline</a></li>
									<li><a href="monpros.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jobdesk</a></li>
									<li><a href="form_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libur QCO</a></li>
									<li><a href="report_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report WITA</a></li>
									
									<?php
									if ($_SESSION['jabatan'] == 'qa'  || $_SESSION['jabatan'] == 'Supervisor QA TAM') {	
									?>
									
									<li><a href="form_approve_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve TKD</a></li>
									<li><a href="form_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libur QCO</a></li>
									<li><a href="form_import_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import Libur QC</a></li>
									<li><a href="form_tap_data_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Bebas</a></li>
									<li><a href="form_data_libur_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HALO</a></li>
									<li><a href="form_data_libur_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas P2P CROSS</a></li>
									<li><a href="form_data_libur_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HVC</a></li>
									
									<li><a href="release_login.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Release Login</a></li>
									<li><a href="pengubahan_data.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data</a></li>
									<!-- <li><a href="pengubahan_data_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data HALO</a></li>
									<li><a href="pengubahan_data_hvc1.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data HVC</a></li> -->
									<?php
									if($_SESSION['username'] == 'spv_bdg2' || $_SESSION['username'] == 'spv_bsd1') {
									?>
									<li><a href="pengubahan_data_hvc1.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data HVC</a></li>
									<?php
									}
									?>
									<li><a href="history_pengubahan.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;History Ubah Data</a></li>
									<li><a href="list_quiz_update.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aktivasi Login Agent</a></li>
									<li><a href="report_quiz.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Quiz</a></li>
									<li><a href="cek_jawaban_salah.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>
									<li><a href="update_status.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Status</a></li>
									<li><a href="form_data_share_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share HVC</a></li>
									<li><a href="form_data_share_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share HALO</a></li>
									<li><a href="form_data_share_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share P2P CROSS</a></li>
									
									<!--li><a href="form_export_hd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXPORT APPROVE HD</a></li> -->
									<?php
										if($_SESSION['jabatan'] == 'Supervisor QA TAM') {
									?>
										<li><a href="form_export_halo_fmc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export FMC HALO+</a></li>
										<li><a href="form_tap_data_share.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share</a></li>
										
										
									<?php
										}
									}
									else if($_SESSION['jabatan'] == 'Supervisor TAM DCS' || $_SESSION['jabatan'] == 'TL TAM DCS' || $_SESSION['jabatan'] == 'Trainer'  || $_SESSION['jabatan'] == 'Supervisor QA TAM') {
									?>
									<li><a href="release_login.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Release Login</a></li>
									<li><a href="list_quiz_update.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aktivasi Login Agent</a></li>
									<li><a href="report_quiz.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Quiz</a></li>
									<li><a href="cek_jawaban_salah.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>
									<?php
										if($_SESSION['jabatan'] == 'Supervisor TAM DCS' AND $_SESSION['cek_spv'] == 'spv') {
											?>
											<li><a href="form_export_halo_fmc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export FMC HALO+</a></li>
											<li><a href="pengubahan_data.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data</a></li>
											<li><a href="pengubahan_data_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data HALO</a></li>
											<li><a href="pengubahan_data_hvc1.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data HVC</a></li>
											<li><a href="history_pengubahan.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;History Ubah Data</a></li>
											<li><a href="form_data_share_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share HVC</a></li>
											<li><a href="form_data_share_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share HALO</a></li>
											<li><a href="form_data_share_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share P2P CROSS</a></li>
											
											<?php
										}
									}
									else if($_SESSION['jabatan'] == 'Tabber TAM') {
									?>
									<li><a href="cek_jawaban_salah_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>
									<?php
									}
									?>
									<li><a href="ref_all.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Anti Decline</a></li>
								</ul>
							</div>
						</li>

						<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu WFM<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi</a></li >
									
									<li><a href="report_rooster_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Rooster</a></li>
									<li><a href="report_absen_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Absen </a></li>
									<!-- <li><a href="report_rooster_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rooster Agent</a></li> -->
									<!-- <li><a href="form_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan Cuti</a></li> -->
									<li><a href="form_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan TKD</a></li>
									<li><a href="form_approve_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve TKD</a></li>
									
									<li><a href="form_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan Cuti</a></li>
									<li><a href="report_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Cuti</a></li>
									<li><a href="report_absen_hk_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi HK <?=$_SESSION['jabatan']?></a></li>
									<?php
									if($_SESSION['jabatan'] == 'Supervisor TAM DCS' || $_SESSION['jabatan'] == 'TL TAM DCS' || $_SESSION['jabatan'] == 'Trainer' || $_SESSION['jabatan'] == 'qa'  || $_SESSION['jabatan'] == 'Supervisor QA TAM') {
										?>
										<li><a href="report_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Approve Cuti</a></li>
									<li><a href="report_rooster_tl_qa.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rooster Pengawakan</a></li>
									<li><a href="report_absensi_tl_qa.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi Pengawakan</a></li>
									<?php
										if($_SESSION['jabatan'] == 'Supervisor QA TAM') {
									?>
									<li><a href="form_export_absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Absensi</a></li>
									<?php
										}
									}
									?>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll6"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll6" style="font-size:12px;">
								<ul class="nav">
									<li><a href="visimisi.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visi Misi</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>


					<?php } else if ($_SESSION['jabatan'] == 'Analisis') {
					?>
						<div class="collapse" id="coll1"  style="font-size:12px">
								<ul class="nav">
									<li><a href="dashboard_laporan_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard WITA</a></li>
									<li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Activity</a></li>
									<li><a href="http://10.194.176.158/dashboard_tam/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Revenue</a></li>
									<li><a href="http://10.194.176.158/wallboard_hvc/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wallboard HVC</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll4"><i class="pe-7s-home"></i>
								<p>Menu Analisis<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll4" style="font-size:12px">
								<ul class="nav">
									
                                    <li><a href="form_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libur QCO</a></li>
									<li><a href="form_tap_data_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Bebas</a></li>
									<li><a href="form_data_libur_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HALO</a></li>
									<li><a href="form_data_libur_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas P2P CROSS</a></li>
									<li><a href="form_data_libur_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HVC</a></li>
									<li><a href="total_revenue.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Revenue</a></li>
									<li><a href="total_revenue_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Revenue HALO</a></li>
									<li><a href="total_revenue_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Revenue P2P</a></li>
									<li><a href="history_pengubahan.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;History Ubah Data</a></li>
									<li><a href="soal_quiz.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soal Quiz</a></li>
									<li><a href="list_quiz_update.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aktivasi Login Agent</a></li>
									<li><a href="report_quiz.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Quiz</a></li>
									<li><a href="cek_jawaban_salah.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>
									<li><a href="report_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report WITA</a></li>
									<li><a href="form_export_hd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXPORT APPROVE HD</a></li>
									
									
									<!-- <li><a href="import_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import Rooster</a></li> -->
									<!-- <li><a href="masterpola.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master Pola</a></li> -->
									<!-- <li><a href="report_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Rooster</a></li> -->
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll3"><i class="pe-7s-display2"></i>
								<p>Menu SPV<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll3" style="font-size:12px">
								<ul class="nav">
									<li><a href="input5.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input CWC</a></li>
									<li><a href="list_wo_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO HVC</a></li>
									<li><a href="list_wo_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO HALO</a></li>
									<li><a href="form_wo_p2p_reguler.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO P2P REGULER</a></li>
									<li><a href="form_wo_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO P2P CROSS</a></li>
									<li><a href="approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve</a></li>
									<li><a href="approve_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve Recall QC</a></li>
									<li><a href="form_export.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data</a></li>
									<li><a href="form_export_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data HVC</a></li>
									<li><a href="form_export_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data HALO</a></li>
									<li><a href="form_export_halo_fmc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export FMC HALO+</a></li>
									<li><a href="form_export_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data P2P</a></li>
									
									<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Order Transaksi</a></li>
									<li><a href="list_totrecall.php?mode=list">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Agent Recall </a></li>
									<li><a href="myhandel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle</a></li>
									<li><a href="myhandel_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle HALO</a></li>
									<li><a href="myhandel_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle P2P</a></li>
									<li><a href="form_rekap_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
									<li><a href="form_rekap_agent_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent HALO</a></li>
									<li><a href="form_rekap_agent_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent P2P</a></li>
									<li><a href="rekap_site.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agree</a></li>
									<li><a href="form_tot_approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap QC</a></li>
									
									<li><a href="form_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libur QCO/QA</a></li>
									<li><a href="form_tap_data_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Bebas</a></li>
									<li><a href="form_data_libur_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HALO</a></li>
									<li><a href="form_data_libur_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas P2P CROSS</a></li>
									<li><a href="form_data_libur_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HVC</a></li>
									<li><a href="ref_all.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Anti Decline</a></li>
									<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
									<li><a href="report_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report WITA</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu WFM<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
								<li><a href="absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi</a></li>
									
									<li><a href="import_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import Rooster</a></li>
									<li><a href="masterpola.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master Pola</a></li>
									
									<li><a href="form_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan Cuti</a></li>
									<li><a href="report_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Approve Cuti</a></li>

									<li><a href="report_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TKD Bulanan</a></li>
									<li><a href="report_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Rooster Bulanan</a></li>

									<li><a href="report_absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Absensi HK</a></li>
									<li><a href="report_absensi_user.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Absensi User</a></li>
									<li><a href="report_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Approve Cuti</a></li>
									<li><a href="report_rooster_tl_qa.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rooster Pengawakan</a></li>
									<li><a href="report_absensi_tl_qa.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi Pengawakan</a></li>
									<li><a href="form_export_absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Absensi</a></li>
									<li><a href="form_export_absen_hk.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Absensi HK</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll6"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll6" style="font-size:12px;">
								<ul class="nav">
									<li><a href="visimisi.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visi Misi</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
						
					<?php } else if ($_SESSION['jabatan'] == 'Admin') {
					?>
						<div class="collapse" id="coll1"  style="font-size:12px">
								<ul class="nav">
									<li><a href="dashboard_laporan_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard WITA</a></li>
									<li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Activity</a></li>
									<li><a href="http://10.194.176.158/dashboard_tam/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Revenue</a></li>
									<li><a href="http://10.194.176.158/wallboard_hvc/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wallboard HVC</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll4"><i class="pe-7s-home"></i>
								<p>Menu Admin<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll4" style="font-size:12px">
								<ul class="nav">
									<li><a href="form_export.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data</a></li>
									<li><a href="form_export_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data HVC</a></li>
									<li><a href="form_export_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data HALO</a></li>
									<li><a href="form_export_halo_fmc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export FMC HALO+</a></li>
									<li><a href="form_export_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data P2P</a></li>
									<li><a href="form_tap_data_share.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share</a></li>
									<li><a href="form_tap_data_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Bebas</a></li>
									<li><a href="form_data_libur_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HALO</a></li>
									<li><a href="form_data_libur_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas P2P CROSS</a></li>
									<li><a href="form_data_libur_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HVC</a></li>
									<li><a href="form_data_share_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share HVC</a></li>
									<li><a href="form_data_share_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share HALO</a></li>
									<li><a href="form_data_share_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share P2P CROSS</a></li>
									<li><a href="monpros.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jobdesk</a></li>
									
									
									<!-- <li><a href="import_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import Rooster</a></li> -->
									<!-- <li><a href="masterpola.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master Pola</a></li> -->
									<!-- <li><a href="report_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Rooster</a></li> -->
									
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu WFM<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
								<li><a href="absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi</a></li>
									
									<li><a href="import_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import Rooster</a></li>
									<li><a href="masterpola.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master Pola</a></li>
									
									<li><a href="form_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan Cuti</a></li>
									
									<li><a href="report_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Cuti</a></li>
									<li><a href="report_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Approve Cuti</a></li>
									<li><a href="report_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TKD Bulanan</a></li>
									<li><a href="report_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Rooster Bulanan</a></li>

									<li><a href="report_absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Absensi HK</a></li>
									<li><a href="report_absensi_user.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Absensi User</a></li>
									<li><a href="form_export_absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Absensi</a></li>
									<li><a href="form_export_absen_hk.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Absensi HK</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll6"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll6" style="font-size:12px;">
								<ul class="nav">
									<li><a href="visimisi.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visi Misi</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>	
					<?php } else if ($_SESSION['jabatan'] == 'Document Control') { ?>
						<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="visimisi.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visi Misi</a></li>
									<li><a href="dokumen_kategori.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Kategori</a></li>
									<li><a href="dokumen_item.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Item</a></li>
									<li><a href="dokumen_upload.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Upload</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
					<?php } else if ($_SESSION['jabatan'] == 'Duktek') { ?>
						<!-- <li><a href="dashboard_staff.php"><i class="pe-7s-graph2"></i>
								<p>Dashboard</p>
							</a></li>
						<li><a href="dashboard_laporan_wita.php"><i class="pe-7s-graph3"></i>
								<p>Dashboard WITA</p>
							</a></li>
							<li><a href="dashboard_activity.php"><i class="pe-7s-graph3"></i>
								<p>Dashboard Activity</p>
							</a></li> -->
						<li><a data-toggle="collapse" href="#coll1"><i class="pe-7s-graph2"></i>
								<p>Dashboard<b class="caret"></b></p>
							</a>

							<div class="collapse" id="coll1"  style="font-size:12px">
								<ul class="nav">
									<li><a href="dashboard_laporan_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard WITA</a></li>
									<li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Activity</a></li>
									<li><a href="http://10.194.176.158/dashboard_tam/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard Revenue</a></li>
									<li><a href="http://10.194.176.158/wallboard_hvc/index.php/Dashboard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wallboard HVC</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll2"><i class="pe-7s-note"></i>
								<p>Menu Agent<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll2"  style="font-size:12px">
								<ul class="nav">
									<li><a href="input5.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input CWC</a></li>
									<li><a href="list_wo_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO HALO</a></li>
									<li><a href="form_wo_p2p_reguler.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO P2P REGULER</a></li>
									<li><a href="form_wo_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO P2P CROSS</a></li>
									<li><a href="list_wo_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO HVC</a></li>
									<li><a href="input_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input HVC</a></li>
									<li><a href="input_dapros.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input Dapros CWC</a></li>
									<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Transaksi</a></li>
									<li><a href="list_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall AddOn</a></li>
									<li><a href="list_recall_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall HALO</a></li>
									<li><a href="list_recall_p2p_reguler.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall P2P REGULER</a></li>
									<li><a href="list_recall_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall P2P CROSS</a></li>
									<li><a href="list_recall_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recall HVC</a></li>
									<li><a href="list_follow.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FU AddOn</a></li>
									<li><a href="list_follow_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FU HALO</a></li>
									<li><a href="list_follow_p2p_reguler.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FU P2P REGULER</a></li>	
									<li><a href="list_follow_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FU P2P CROSS</a></li>	
									<li><a href="list_follow_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FU HVC</a></li>
									<li><a href="form_rekap_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
									<li><a href="form_rekap_agent_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent HALO</a></li>
									<li><a href="form_rekap_agent_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent P2P</a></li>
								</ul>
							</div>
						</li>

						<li><a data-toggle="collapse" href="#coll3"><i class="pe-7s-display2"></i>
								<p>Menu Spv<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll3" style="font-size:12px">
								<ul class="nav">

									<li><a href="approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve</a></li>
									<li><a href="approve_recall.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve Recall QC</a></li>
									<li><a href="form_export.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data</a></li>
									<li><a href="form_export_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data HVC</a></li>
									<li><a href="form_export_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data HALO</a></li>
									<li><a href="form_export_halo_fmc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export FMC HALO+</a></li>
									<li><a href="form_export_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Data P2P</a></li>
									<li><a href="list_totrecall.php?mode=list">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Agent Recall </a></li>
									<li><a href="form_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Order Transaksi</a></li>
									<li><a href="myhandel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle</a></li>
									<li><a href="myhandel_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle HALO</a></li>
									<li><a href="myhandel_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle P2P</a></li>
									<li><a href="myhandel_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Myhandle HVC</a></li>
									<li><a href="form_rekap_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent</a></li>
									<li><a href="form_rekap_agent_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent HALO</a></li>
									<li><a href="form_rekap_agent_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agent P2P</a></li>
									<li><a href="rekap_site.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap Call Agree</a></li>
									<li><a href="form_tot_approve.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekap QC</a></li>
									<li><a href="form_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Libur QCO/QA</a></li>
									<li><a href="form_import_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import Libur QC</a></li>
									<!-- <li><a href="form_tap_data_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas</a></li>-->
									<li><a href="ref_all.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Script Anti Decline</a></li>
									<li><a href="monpros.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jobdesk</a></li>
								</ul>
							</div>
						</li>

						<li><a data-toggle="collapse" href="#coll4"><i class="pe-7s-config"></i>
								<p>Menu IT<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll4" style="font-size:12px">
								<ul class="nav" >
									<li><a href="adduser.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create User Agent</a></li>
									<li><a href="import_pengawakan.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import Pengawakan</a></li>
									<!-- <li><a href="dashboard_activity.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Activity</a></li> -->
									<!-- <li><a href="dashboard_convertion2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Convertion</a></li> -->
									<li><a href="dashboard_fasteldouble.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fastel Double</a></li>
									<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
									<li><a href="update_status.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Status</a></li>
									<li><a href="total_revenue.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Revenue</a></li>
									<li><a href="total_revenue_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Revenue HALO</a></li>
									<li><a href="total_revenue_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Revenue P2P</a></li>
									<li><a href="release_login.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Release Login</a></li>
									<li><a href="input5.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Input CWC baru</a></li>
									<li><a href="list_decline.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tapping Decline</a></li>
									<li><a href="pengubahan_data.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data</a></li>
									<!-- <li><a href="pengubahan_data_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data HALO</a></li>
									<li><a href="pengubahan_data_hvc1.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data HVC</a></li> -->
									<li><a href="pengubahan_data_hvc1.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengubahan Data HVC</a></li>
									<li><a href="history_pengubahan.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;History Ubah Data</a></li>
									<li><a href="soal_quiz.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soal Quiz</a></li>
									<li><a href="list_quiz_update.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aktivasi Login Agent</a></li>
									<li><a href="report_quiz.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Quiz</a></li>
									<li><a href="cek_jawaban_salah.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cek Jawaban Quiz</a></li>
									<li><a href="form_data_share.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Share</a></li>
									<li><a href="form_data_libur.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas</a></li>
									<li><a href="form_data_libur_halo.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HALO</a></li>
									<li><a href="form_data_libur_p2p.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas P2P CROSS</a></li>
									<li><a href="form_data_libur_hvc.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Data Bebas HVC</a></li>
									
									<li><a href="report_wita.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report WITA</a></li>
									<!-- <li><a href="import_login_wo_netflix.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMPORT LOGIN WO NETFLIX</a></li>
									<li><a href="import_wo_netflix.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMPORT WO NETFLIX</a></li>
									<li><a href="form_wo_netflix.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO NETFLIX</a></li>
									
									<li><a href="list_hd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPROVE NETFLIX HD</a></li>
									<li><a href="form_export_hd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXPORT APPROVE HD</a></li> -->
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="visimisi.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visi Misi</a></li>
									<li><a href="dokumen_kategori.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Kategori</a></li>
									<li><a href="dokumen_item.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Item</a></li>
									<li><a href="dokumen_upload.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Upload</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll6"><i class="pe-7s-note"></i>
								<p>Menu WFM<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll6" style="font-size:12px;">
								<ul class="nav">
									<li><a href="absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi</a></li>
									
									<li><a href="import_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Import Rooster</a></li>
									<li><a href="masterpola.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master Pola</a></li>
									
									<li><a href="form_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan Cuti</a></li>
									
									<li><a href="report_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Cuti</a></li>
									<li><a href="report_rooster_cuti.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Approve Cuti</a></li>

									<li><a href="form_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengajuan TKD</a></li>
									<li><a href="form_approve_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve TKD</a></li>
									<li><a href="report_tkd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report TKD Bulanan</a></li>
									<li><a href="report_rooster_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Rooster </a></li>
									<li><a href="report_rooster.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Rooster Bulanan</a></li>

									<li><a href="report_absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Absensi HK</a></li>
									<li><a href="report_absen_hk_agent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi HK <?=$_SESSION['jabatan']?></a></li>
									<li><a href="report_absensi_user.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Absensi User</a></li>
									<li><a href="form_export_absen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Absensi</a></li>
									<li><a href="form_export_absen_hk.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export Absensi HK</a></li>
								</ul>
							</div>
						</li>	
					<?php } else if ($_SESSION['jabatan'] == 'Agent HD') { ?>
						<li><a data-toggle="collapse" href="#coll4"><i class="pe-7s-config"></i>
								<p>Menu <?=$_SESSION['jabatan']?><b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll4" style="font-size:12px">
								<ul class="nav" >
									
									<li><a href="list_hd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPROVE NETFLIX</a></li>
									<li><a href="form_export_hd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXPORT APPROVE</a></li>
								</ul>
							</div>
						</li>
					<?php } ?>
					<li><a href="form_passwordd.php"><i class="pe-7s-tools"></i>
							<p>Ganti Password</p>
						</a></li>
					<li><a href="search.php"><i class="pe-7s-search"></i>
							<p>Search</p>
						</a></li>
						<li><a href="search_psb_ih.php"><i class="pe-7s-search"></i>
							<p>Search PSB IH</p>
						</a></li>
					<li><a href="search_data_hvc.php"><i class="pe-7s-search"></i>
							<p>Search Data HVC</p>
						</a></li>	
						<li><a href="search_data_halo.php"><i class="pe-7s-search"></i>
							<p>Search Data HALO</p>
						</a></li>	
						<li><a href="search_data_p2p.php"><i class="pe-7s-search"></i>
							<p>Search Data P2P</p>
						</a></li>	
					<li><a href="search_tlp.php"><i class="pe-7s-search"></i>
							<p>Data Double</p>
						</a></li>

				</ul>
			</div>
		</div>

		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">

					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left">
						<?php
						$query_marquee = "SELECT * FROM news ORDER BY tanggal DESC LIMIT 1";
						$hasil_marquee = mysqli_query($con, $query_marquee);
						$total_marquee = mysqli_num_rows($hasil_marquee);

						if ($total_marquee > 0) {
							while ($row1 = mysqli_fetch_array($hasil_marquee)) {
								echo '
								<li>
									<a href="#">
									<marquee width=600 style="color:#008B8B">
										<p>Silahkan Baca News Terbaru ('.$row1['judul'].')</p>
									</marquee>
									</a>
								</li>
							  ';
							}	
						}
						?>

						</ul>
						<?php
						$username = $_SESSION['username'];
						$name = $_SESSION['name'];
						$query_notif = "SELECT * FROM app_tam_notif WHERE status='1' AND username='$username'";
						$hasil = mysqli_query($con, $query_notif);
						$total = mysqli_num_rows($hasil);

						$query_notif_recall_agent = "SELECT * FROM app_tam_notif_recall_agent WHERE status='1' AND `username`='$name'";
						$hasil_recall_agent = mysqli_query($con, $query_notif_recall_agent);
						$total_recall_agent = mysqli_num_rows($hasil_recall_agent);
						
						?>

						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#">
									<p><?php echo substr($_SESSION['name'], 0, 90); ?></p>
									<p><?php echo substr($_SESSION['area'], 0, 60); ?></p>
								</a>
							</li>
							<?php
								if($_SESSION['jb'] != 'Agent') {

							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<p>Notif Rekom QA</p>
									<span class="label label-pill label-danger count" style="border-radius:10px;"></span>
									<span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>
									<span class="badge badge-danger" style="background-color:red"><?php echo $total; ?></span>

								</a>
								<ul class="dropdown-menu">
									<?php
									if ($total > 0) {
										while ($row = mysqli_fetch_array($hasil)) {
											echo '
										  <li>
										  <a href="#">
										  <strong>Rekomendasi QA ('.$row['nama_rekom'].')</strong><br />
										  <small><em>note : ' . $row['deskripsi'] . '</em></small>
										  <strong> | </strong><small><em>tanggal : ' . date("d M Y h:i:s", strtotime($row['tanggal'])) . '</em></small>
										  </a>
										  </li>
										  ';
										}
										
									} else {
										echo '<li><a href="#" class="text-bold text-italic">No Notif Found</a></li>';
									}
									?>
								</ul>
							</li>
							<?php
								}
							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle-recall-agent" data-toggle="dropdown">
									<p>Notif Return TL</p>
									<span class="label label-pill label-danger count" style="border-radius:10px;"></span>
									<span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>
									<span class="badge badge-danger" style="background-color:red"><?php echo $total_recall_agent; ?></span>

								</a>
								<ul class="dropdown-menu">
									<?php
									if ($total_recall_agent > 0) {
										while ($row = mysqli_fetch_array($hasil_recall_agent)) {
											echo '
										  <li>
										  <a href="list_recall.php">
										  <strong>Rekomendasi TL ('.$row['nama_rekom'].')</strong><br />
										  <small><em>note : ' . $row['deskripsi'] . '</em></small>
										  <strong> | </strong><small><em>tanggal : ' . date("d M Y h:i:s", strtotime($row['tanggal'])) . '</em></small><br />
										  <strong><em>Klik untuk melihat Data</em></strong>
										  </a>
										  </li>
										  ';
										}
										
									} else {
										echo '<li><a href="#" class="text-bold text-italic">No Notif Found</a></li>';
									}
									?>
								</ul>
							</li>

							<li>
								<a href="zero_session.php">
									<p>LOG OUT</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>