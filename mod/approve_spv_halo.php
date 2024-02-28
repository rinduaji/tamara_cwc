<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl=date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);
if($Login!=''){$wlogin="AND login = '$Login'";}
if($date!=''){$dt = explode("-",trim($date)); $tgl="$dt[2]-$dt[1]-$dt[0]";}

if($site=='AllArea'){$area="";}
else{$area="area = '$site' AND";}


//$dataPerPage = 20;
//if(isset($_GET['page']))
//{
	//$noPage = $_GET['page'];
//}
//else $noPage = 1;
//$offset = ($noPage - 1) * $dataPerPage;


if ($jb=="Supervisor" || $jb=="TL"){$whr="WHERE $area follow = '3' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
}										
else {$whr="WHERE $area follow in ('4','3','2','7') AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
}
if($jb=="Supervisor" || $jb=="TL"){
//update Okt 2018
	$query="SELECT * FROM app_tam_halo  $whr ";

//$query="SELECT a.id,a.tgl,a.login,b.user2,a.no_pelanggan,a.fastel,a.nama_dm,a.tlp,a.jenis,a.reason,a.ket,a.upd_qco,a.rec_qco,a.upd_tl,a.rec_tl,a.upd_qco,a.input ,a.upd_suport FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr LIMIT $offset, $dataPerPage";
//echo $query;
}else{
	$query="SELECT * FROM app_tam_halo $whr ";

	//echo $query;
}

// if($jb=="Tabber"){$whr="WHERE $area a.follow ='2' AND (`upd_qco` = ' ' OR `upd_qco` IS NULL) $wr ORDER BY `tgl` asc ";}
// //AND a.input = 'New' AND upd_qco is NULL
// else if ($jb=="Supervisor" || $jb=="TL"){$whr="WHERE $area a.follow = '3' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
// }										
// else {$whr="WHERE $area a.follow in ('4','3','2','7') AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
// }
// if($jb=="Tabber"){
// //update Okt 2018
// //$query="SELECT a.id,a.tgl,a.login,b.user2,a.no_pelanggan,a.fastel,a.nama_dm,a.tlp,a.jenis,a.reason,a.ket,a.upd_qco,a.rec_qco,a.upd_tl,a.rec_tl,a.upd_qco,a.input ,a.upd_suport FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr LIMIT $offset, $dataPerPage";
// $query="SELECT a.id,a.tgl,a.login,b.user2,a.fastel,a.jenis,a.upd_qco,a.rec_qco,a.upd_tl,a.rec_tl,a.upd_qco,a.input ,a.upd_suport FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
// //echo $query;
// }else{
// 	$query="SELECT a.id,a.tgl,a.login,b.user2,a.fastel,a.jenis,a.upd_qco,a.rec_qco,a.upd_tl,a.rec_tl,a.upd_qco,a.input ,a.upd_suport FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
// //echo $query;
// }
//$Page = $offset;
?>

<!-- <!doctype html> -->
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='approve_spv_halo.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>APPROVE RETURN HALO</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						
						<tr>
							
							
							<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Agent Site</label>
								<select  name="site" class="form-control" value="<? echo $exp?>">	
									<option value=""	>Pilih</option>
									<option value="AllArea"	>All Area</option>
									<option value="Bandung"	>Bandung</option>
									<option value="BSD"  	>BSD</option>
									<option value="TANGERANG"  	>TANGERANG</option>
									<option value="Malang"  >Malang</option>
									<option value="Makassar">Makassar</option>
									<option value="Medan"  	>Medan</option>
									<option value="Semarang">Semarang</option>
								</select>		
								</label>
								
							</div>							
						</tr>
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Hasil Searching</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
								if ($site=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Agent Site belum dipilih !</div>";
								}
								}
								?>
								<div style="overflow-x:auto;">
									<table class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">No.</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Area</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO Telepon</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">fastel</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KTP</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">NO KK</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Alamat</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Alamat Kirim</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Email</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Setuju</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">reason</font></th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan</font></th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>											
										</thead>
										<tbody>
										<?php
										$Page = $Page + 1;$jml=0;
										//echo $query;
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\" style=\"font-size:10px\">".$Page."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['nama_agent']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['area']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['no_telp']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['nama_plg']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['no_ktp']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['no_kk']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['alamat']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['alamat_kirim']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['email']."</th>	
                                        <th align=\"center\" style=\"font-size:10px\">".$data['tgl_setuju']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
                                        <th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
												
											";
								
										if ($jb=="Tabber" && $data['upd_qco']==""){echo "<th align=\"center\"><a href=\"form_tabber3_halo_new.php?id=$data[id]\">Approve</a></th>";}
										else if ($jb=="Tabber" && $data['upd_qco']<>"$uname"){echo "<th align=\"center\">Handel $qco</th>";}
										else if ($jb=="Tabber" && $data['upd_qco']=="$uname"){echo "<th align=\"center\"><a href=\"form_tabber3_halo_new.php?id=$data[id]\">My Approve</a></th>";}
										else if ($jb=="Supervisor" || $jb=="TL"){echo "<th align=\"center\"><a href=\"form_spv_halo.php?id=$data[id]\">Approve</a></th>";}										
										else if ($jb=="Koordinator"){echo "<th align=\"center\">$qco | $tl </a></th>";}
										else { echo "<th align=\"center\">#</a></th>";}
										$Page = $Page + 1;										
										}										
										
										?>
										</tbody>
									</table>
									
								</div>
								<table>
								<?php
								//$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
								//echo $query;
								//$hasil   = mysqli_query($con,$query);
								//$data    = mysqli_fetch_array($hasil);
								//$jumData = $data['jumData'];
								//$jumPage = ceil($jumData/$dataPerPage);
								//if ($noPage > 1) echo  "<td><a href='approve.php?page=".($noPage-1)."&site=$site'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
								//echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
								//if ($noPage < $jumPage)  echo "<td><a href='approve.php?page=".($noPage+1)."&site=$site'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> "; 
								//echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";
								
								?>
								</table>
								</div>
								
							</div>
						</div>
                </div>
				</div>		
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>