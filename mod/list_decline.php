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
if($tgl==''){$tgl = date("Y-m-d H:i:s");}
if($Login!=''){$wlogin="AND a.login = '$Login'";}
if($date!=''){ $tgl=date("Y-m-d",strtotime($date));}
if($logagent<>''){$wr="AND a.login = $logagent";}
if($fastel<>''){$wr="AND a.fastel = $fastel";}
if($site=='AllArea'){$area="";}
else{$area="AND b.user5 = '$site'";}

$dataPerPage = 20;
if(isset($_GET['page']))
{
	$noPage = $_GET['page'];
}
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;

if($jb=="Tabber"){$whr="WHERE $area a.follow LIKE '%2%' AND (`upd_qco` = ' ' OR `upd_qco` IS NULL) $wr ORDER BY `tgl` asc ";}
//AND a.input = 'New' AND upd_qco is NULL
else if ($jb=="Supervisor" || $jb=="TL"){$whr="WHERE $area a.follow = '3' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
}										
else {$whr="WHERE $area a.follow in ('4','3','2','7') AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
}

if (isset($input)) {
	// $query = "UPDATE app_tam_data2 SET tapping_decline='$input', alasan_nok='$alasan', skrip = '$anti_decline' WHERE id='$id'";
	$query = "UPDATE app_tam_data2 SET tapping_decline='$input', alasan_nok='$alasan', skrip = '$anti_decline', detil_alasan = '$detail_alasan', reject='$reject' WHERE id='$id'";
	mysqli_query($con, $query);
}
// if($jb=="Tabber"){

// $query="SELECT DISTINCT convert(a.tgl, DATE) as tanggal, b.user5 as Site, 
// sum(case when `kategori`='Agree' then 1 else 0 end) as Agree,
// sum(case when `kategori`='Agree' and `follow`='2' then 1 else 0 end) as OnProcessQCO,
// sum(case when `kategori`='Agree' and `follow`='3' then 1 else 0 end) as OnProcessTL,
// sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` in('1','6') then 1 else 0 end) as NotValid,
// sum(case when `kategori`='Agree' and `Valid`='Valid' and `follow` ='6'then 1 else 0 end) as Valid,
// count(a.id) as transaksi,
// sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
// sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` ='5' then 1 else 0 end) as Recall
// FROM app_tam_data2 AS a
// INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
// WHERE a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $area group by b.user5";
// //echo $query;
// }else{
if($date != "" AND $site != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";

	$query="
	SELECT x.id,x.tgl,x.login,x.user2,x.user5,x.fastel,x.nama_dm,x.tlp,x.jenis,x.`status`,x.valid,x.upd_qco,x.prof_hoby,x.kategori,x.reason,x.ket,x.tapping_decline,x.row_number
	FROM
	(
		SELECT table1.id,table1.tgl,table1.login,table1.user2,table1.user5,table1.fastel,table1.nama_dm,table1.tlp,table1.jenis,table1.`status`,table1.valid,table1.upd_qco,table1.prof_hoby,table1.kategori,table1.reason,table1.ket,table1.tapping_decline,
		(@num:=if(@login = table1.login, @num +1, if(@login := table1.login, 1, 1))) row_number 
		FROM
		(
			SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
			app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN 
			'$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' ORDER BY a.login, a.tgl ASC
			) AS table1 
		CROSS JOIN (select @num:=0, @login:=null) d
		order by table1.login
	) as x
	WHERE x.row_number <= 3
	";

  $no=0;
  $hasil = mysqli_query($con,$query) or die ("Query gagal!");
  $hasil_total = mysqli_num_rows($hasil);
  if($hasil_total == 0){
		$message = "Data tidak ditemukan dari hasil pencarian pada input an yang dimasukan! Silahkan cek kembali!";
		echo "<script type='text/javascript'>alert('$message');</script>";
  }
// echo $query;
}

$Page = $offset;
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form name="demoform" action='list_decline.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>LIST DECLINE</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">Tanggal</label>
								<input class="form-control"
										   type="date"
										   name="date"
										   placeholder="ex: 2018-12-31"
									/>
							</div>
						</tr>
							
							<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Agent Site</label>
								<select  name="site" class="form-control" value="<? echo $exp?>">	
									<option value=""	>Pilih</option>
									<option value="AllArea"	>All Area</option>
									<option value="Bandung"	>Bandung</option>
									
									<option value="BSD"  	>BSD</option>
									
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
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='list_decline.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Daftar Data Decline</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
								if ($site=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Agent Site belum dipilih !</div>";
								}
                                if ($date=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Agent Site belum dipilih !</div>";
								}
								}
								?>
								<div style="overflow-x:auto;">
									<table class="table table-hover table-striped">
										<thead>
											
											<th align="center"><font color="red" face="Tahoma" size="2">NO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Pelanggan</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">CP</th>	
											
											<th align="center"><font color="red" face="Tahoma" size="2">Rule</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</th>
                                            <th align="center"><font color="red" face="Tahoma" size="2">Reason</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>							
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										//echo $query;
                                      
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr>
										    <th align=\"center\" style=\"font-size:10px\">".++$no."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
                                            <th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tlp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>	
											<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>";
											
											
                                            if($data['tapping_decline'] == "") {
												// echo "<th align=\"center\" style=\"font-size:10px\"><a href=\"#\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#formDecline".$data['id']."\" data-id=\"".$data['id']."\" id=\"modalClick\">Update</a></th>";
												// echo "<th align=\"center\" style=\"font-size:10px\"><button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-id=\"".$data['id']."\" data-target=\"#editDealModal-".$data['id']."\">Update</button></th>";
												echo "<th align=\"center\" style=\"font-size:10px\"><button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-id=\"".$data['id']."\" data-fastel=\"".$data['fastel']."\"  data-login=\"".$data['login']."\" data-target=\"#myMODAL\">Update</button></th>";
												
												
                                            }
                                            else {
												echo "<th align=\"center\" style=\"font-size:10px\"></th>";
                                            }
											?>

											<!-- Modal Popup to EDIT Deal Form
											<div class="modal fade" id="editDealModal-<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="editDealModalLabel" aria-hidden="true" data-backdrop="false">
													<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Update List Decline</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="list_decline.php" method="POST" id="FormRekom_qa">
																	<input type="text" class="form-control" name="id" id="id" value="<?php echo $data['id']; ?>">
																											<input type="text" class="form-control" name="login1" id="login1" value="<?php echo $data['login']; ?>" >
																											<input type="text" class="form-control" name="fastel" id="fastel" value="<?php echo $data['fastel']; ?>" >
																											<label for="input">Input</label>
																											<select name="input" id="input" class="form-control" required>	
																												<option value=""	>Pilih</option>
																												<option value="OK"	>OK</option>
																												<option value="NOT OK"	>NOT OK</option>
																											</select>

																											<div id="NoOk">
																											<label for="alasan">Alasan</label>
																											<select  name="alasan" id="alasan" class="form-control">	
																												<option value="">Pilih</option>
																												<option value="Closing">Closing</option>
																												<option value="Produk Knowledge">Product Knowledge</option>
																												<option value="Respond to Customer">Respond to Customer</option>
																												<option value="Sales Skill">Sales Skill</option>
																												<option value="Voice Quality">Voice Quality</option>
																											</select>	
																											<label for="anti_decline">Anti Decline</label>
																											<select  name="anti_decline" id="anti_decline" class="form-control">	
																												<option value="">Pilih</option>
																												<option value="Pakai">Pakai</option>
																												<option value="Tidak Pakai">Tidak Pakai</option>
																											</select>
																											</div>
																											</form>
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save Changes</button>
														</div>
														</div>
													</div>
											</div> -->

											<!-- Modal Popup to EDIT Deal Form -->
											<div class="modal fade" id="myMODAL" tabindex="-1" role="dialog" aria-labelledby="editDealModalLabel" aria-hidden="true" data-backdrop="false">
													<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Update List Decline</h5>
																									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																										<span aria-hidden="true">&times;</span>
																									</button>
														</div>
														<div class="modal-body">
														<form action="list_decline.php" method="POST" id="FormRekom_qa">
																	<input type="hidden" class="form-control" name="id" id="id">
																											<input type="hidden" class="form-control" name="login1" id="login1">
																											<input type="hidden" class="form-control" name="fastel" id="fastel">
																											<label for="input">Input</label>
																											<select name="input" id="input" class="form-control" required>	
																												<option value=""	>Pilih</option>
																												<option value="OK"	>OK</option>
																												<option value="NOT OK"	>NOT OK</option>
																											</select>

																											<div id="NoOk">
																											<label for="alasan">Alasan</label>
																											<select  name="alasan" id="alasan" class="form-control">	
																												<option value="">Pilih</option>
																												<option value="Closing">Closing</option>
																												<option value="Produk Knowledge">Product Knowledge</option>
																												<option value="Respond to Customer">Respond to Customer</option>
																												<option value="Sales Skill">Sales Skill</option>
																												<option value="Voice Quality">Voice Quality</option>
																											</select>	
																											<label for="anti_decline">Anti Decline</label>
																											<select  name="anti_decline" id="anti_decline" class="form-control">	
																												<option value="">Pilih</option>
																												<option value="Pakai">Pakai</option>
																												<option value="Tidak Pakai">Tidak Pakai</option>
																											</select>
																											<label for="detail_alasan">Detail Alasan</label>
																											<input type="text" class="form-control" name="detail_alasan" id="detail_alasan">
																											<label for="reject">Reject</label>
																											<input type="number" class="form-control" name="reject" id="reject">
																											
																											</div>
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<input type="submit" class="btn btn-primary" value="Save Changes"></input>
														</div>
																											</form>
														</div>
													</div>
											</div>

												<?php
														// $Page = $Page + 1;
														echo "</tr>";
													}
													
													?>	
                            
										</tbody>
									</table>
									
								</div>
								<table>
								<?php
								//$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
								//echo $query;
								$hasil   = mysqli_query($con,$query);
								$data    = mysqli_fetch_array($hasil);
								//$jumData = $data['jumData'];
								//$jumPage = ceil($jumData/$dataPerPage);
								//if ($noPage > 1) echo  "<td><a href='approve.php?page=".($noPage-1)."&site=$site'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
								//echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
								//if ($noPage < $jumPage)  echo "<td><a href='approve.php?page=".($noPage+1)."&site=$site'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> "; 
								//echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";
								
								if ($_POST['date'] And $_POST['exp'] And $_POST['site'])
								{
									echo "$tgl"; 
									//include "export.php";
								}
								
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
<script>
// $('#input').change( function() {
//             // var x = $('#input').val();
//             // $('#alasan').prop('disabled','true');
//             // $('#anti_decline').prop('disabled','true');
//             // if(x == 'NOT OK') {
//             //     $('#alasan').removeAttr('disabled');
//             //     $('#anti_decline').removeAttr('disabled');
//             // }
//             // alert(x);
// 			$("#NoOk").toggle();
//         });
$('#myMODAL').on('show.bs.modal', function(event) {
$('#NoOk').hide();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data('id');
  var LOGIN = button.data('login');
  var FASTEL = button.data('fastel');
  $('input[name="id"]').val(ID);
  $('input[name="login1"]').val(LOGIN);
  $('input[name="fastel"]').val(FASTEL);
  $('select[name="input"]')[0].selectedIndex = 0;

  $('select[name="input"]').change( function() {
	  var x = $('select[name="input"]').val();
	  if(x == 'NOT OK') {
		  $('#NoOk').show();
	  }
	  else {
		$('#NoOk').hide();
	  }
  });
//   $('#input').change( function() {
//               if(x == 'NOT OK') {
//                 $("#NoOk").show();
//             }
// 			else {
// 				$("#NoOk").hide();
// 			}			
});
</script>
<?php	require_once("../deft_foo.php"); ?>