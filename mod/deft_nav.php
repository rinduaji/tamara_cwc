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
					if ($_SESSION['jabatan'] == 'Agent TAM') {
					?>
						<li><a href="dashboard.php"><i class="pe-7s-graph3"></i>
								<p>Dashboard</p>
							</a></li>
						<li><a data-toggle="collapse" href="#coll1"><i class="pe-7s-note"></i>
								<p>Menu Agent<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll1">
								<ul class="nav">
									<li><a href="input.php">Input CWC</a></li>
									<li><a href="form_agent.php">List Order Transaksi</a></li>
									<li><a href="list_recall.php">List Recall</a></li>
									<li><a href="list_follow.php">List Follow Up</a></li>
									<li><a href="form_rekap_agent.php">Rekap Call Agent</a></li>
									<li><a href="news.php">News</a></li>
									<li><a href="ref_all.php">Script Anti Decline</a></li>
									<li><a href="monpros_agent.php">Jobdesk</a></li>
								</ul>
							</div>
						</li>

					<?php } else if ($_SESSION['jabatan'] == 'qa' || $_SESSION['jabatan'] == 'Supervisor TAM DCS' || $_SESSION['jabatan'] == 'Tabber TAM') {	?>
						<li><a href="dashboard_staff.php"><i class="pe-7s-graph1"></i>
								<p>Dashboard</p>
							</a></li>
						<li><a data-toggle="collapse" href="#coll3"><i class="pe-7s-display2"></i>
								<p><?php echo $_SESSION['jb']; ?><b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll3">
								<ul class="nav">
									
									<li><a href="approve.php">Approve QCO</a></li>
									<li><a href="approve_spv.php">Approve TL OPS</a></li>
									<li><a href="approve_recall.php">Approve Recall QCO</a></li>
									<li><a href="form_export.php">Export Data</a></li>
									<li><a href="form_agent.php">List Order Transaksi</a></li>
									<li><a href="list_totrecall.php?mode=list">List Agent Recall </a></li>
									<li><a href="myhandel.php">Myhandle</a></li>
									<li><a href="news.php">News</a></li>
									<li><a href="form_rekap_agent.php">Rekap Call Agent</a></li>
									<li><a href="rekap_site.php">Rekap Call Agree</a></li>
									<li><a href="form_tot_approve.php">Rekap Perolehan QCO</a></li>
									<li><a href="list_decline.php">Tapping Decline</a></li>
									<li><a href="update_status.php">Update Status</a></li>
									<li><a href="monpros.php">Jobdesk</a></li>
									<?php
									if ($_SESSION['jabatan'] == 'qa') {	
									?>
									<li><a href="form_libur.php">Form Libur QCO</a></li>
									<li><a href="form_import_libur.php">Form Import Libur QCO</a></li>
									<li><a href="form_tap_data_libur.php">Form Tapping Data Bebas</a></li>
									<li><a href="release_login.php">Release Login</a></li>
									<li><a href="monpros.php">Jobdesk</a></li>
									<?php
									}
									else if($_SESSION['jabatan'] == 'Supervisor TAM DCS') {
									?>
									<li><a href="release_login.php">Release Login</a></li>
									<?php
									}
									?>
									<li><a href="ref_all.php">Script Anti Decline</a></li>
									<li><a href="monpros.php">Jobdesk</a></li>
								</ul>
							</div>
						</li>


					<?php } else if ($_SESSION['jabatan'] == 'Analisis') {
					?>
						<li><a href="dashboard_staff.php"><i class="pe-7s-graph"></i>
								<p>Dashboard</p>
							</a></li>
						<li><a data-toggle="collapse" href="#coll4"><i class="pe-7s-home"></i>
								<p>Menu Analisis<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll4">
								<ul class="nav">
									<li><a href="dashboard_activity.php">Dashboard Activity</a></li>
									<li><a href="dashboard_convertion2.php">Dashboard Convertion</a></li>
                                    <li><a href="form_libur.php">Form Libur QCO / QA</a></li>
									<li><a href="form_tap_data_libur.php">Form Tapping Data Bebas</a></li>
									<li><a href="total_revenue.php">Total Revenue</a></li>
									<li><a href="history_pengubahan.php">History Pengubahan Data TAM</a></li>
								</ul>
							</div>
						</li>
						<li><a data-toggle="collapse" href="#coll3"><i class="pe-7s-display2"></i>
								<p>Menu SPV<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll3">
								<ul class="nav">
									<li><a href="input.php">Input CWC</a></li>
									<li><a href="approve.php">Approve</a></li>
									<li><a href="approve_recall.php">Approve Recall QCO</a></li>
									<li><a href="form_export.php">Export Data</a></li>
									
									<li><a href="form_agent.php">List Order Transaksi</a></li>
									<li><a href="list_totrecall.php?mode=list">List Agent Recall </a></li>
									<li><a href="myhandel.php">Myhandle</a></li>
									<li><a href="form_rekap_agent.php">Rekap Call Agent</a></li>
									<li><a href="rekap_site.php">Rekap Call Agree</a></li>
									<li><a href="form_tot_approve.php">Rekap Perolehan QCO / QA</a></li>
									
									<li><a href="form_libur.php">Form Libur QCO / QA</a></li>
									<li><a href="form_tap_data_libur.php">Form Tapping Data Bebas</a></li>
									<li><a href="ref_all.php">Script Anti Decline</a></li>
									<li><a href="news.php">News</a></li>
								</ul>
							</div>
						</li>

					<?php } else if ($_SESSION['jabatan'] == 'Duktek') { ?>
						<li><a href="dashboard_staff.php"><i class="pe-7s-graph2"></i>
								<p>Dashboard</p>
							</a></li>

						<li><a data-toggle="collapse" href="#coll1"><i class="pe-7s-note"></i>
								<p>Menu Agent<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll1">
								<ul class="nav">
									<li><a href="input.php">Input CWC</a></li>
									<li><a href="input_dapros.php">Input Dapros CWC</a></li>
									<li><a href="form_agent.php">List Order Transaksi</a></li>
									<li><a href="list_recall.php">List Recall</a></li>
									<li><a href="list_follow.php">List Follow Up</a></li>
									<li><a href="form_rekap_agent.php">Rekap Call Agent</a></li>
								</ul>
							</div>
						</li>

						<li><a data-toggle="collapse" href="#coll3"><i class="pe-7s-display2"></i>
								<p>Menu Spv<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll3">
								<ul class="nav">

									<li><a href="approve.php">Approve</a></li>
									<li><a href="approve_recall.php">Approve Recall QCO</a></li>
									<li><a href="form_export.php">Export Data</a></li>
									<li><a href="list_totrecall.php?mode=list">List Agent Recall </a></li>
									<li><a href="form_agent.php">List Order Transaksi</a></li>
									<li><a href="myhandel.php">Myhandle</a></li>
									<li><a href="form_rekap_agent.php">Rekap Call Agent</a></li>
									<li><a href="rekap_site.php">Rekap Call Agree</a></li>
									<li><a href="form_tot_approve.php">Rekap Perolehan QCO</a></li>
									<li><a href="form_libur.php">Form Libur QCO / QA</a></li>
									<li><a href="form_import_libur.php">Form Import Libur QCO / QA</a></li>
									<li><a href="form_tap_data_libur.php">Form Tapping Data Bebas</a></li>
									<li><a href="ref_all.php">Script Anti Decline</a></li>
									<li><a href="monpros.php">Jobdesk</a></li>
								</ul>
							</div>
						</li>

						<li><a data-toggle="collapse" href="#coll4"><i class="pe-7s-config"></i>
								<p>Menu IT<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll4">
								<ul class="nav">
									<li><a href="adduser.php">Create User Agent</a></li>
									<li><a href="dashboard_activity.php">Dashboard Activity</a></li>
									<li><a href="dashboard_convertion2.php">Dashboard Convertion</a></li>
									<li><a href="dashboard_fasteldouble.php">Dashboard Fastel Double</a></li>
									<li><a href="news.php">News</a></li>
									<li><a href="update_status.php">Update Status</a></li>
									<li><a href="total_revenue.php">Total Revenue</a></li>
									<li><a href="release_login.php">Release Login</a></li>
									<li><a href="input2.php">Input CWC baru</a></li>
									<li><a href="list_decline.php">Tapping Decline</a></li>
									<li><a href="pengubahan_data.php">Pengubahan Data TAM</a></li>
									<li><a href="history_pengubahan.php">History Pengubahan Data TAM</a></li>
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
							<li>
								<a href="#">

									<marquee width=600 style="color:#008B8B">
										<p>TAMARA V2 (Tele-Account Manajemen Report Nasional)</p>
									</marquee>
								</a>
							</li>

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