<?php
$ttl = mysql_query("SELECT SUM(jumlah) FROM donasi where status='ok'  ");
$ttl1 = mysql_fetch_row($ttl);

$ttl11 = mysql_query("SELECT SUM(total_harga) FROM rab_isi   ");
$ttl2 = mysql_fetch_row($ttl11);

$dns = $ttl1[0];
$tk = $ttl2[0];
$kr = $tk-$dns;
?>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
	<script src="assets/js/jquery-1.10.1.min.js"></script>
	<script src="assets/js/highcharts.js"></script>
	<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph',
					type: 'column'
				 },   
				 title: {
					text: 'Chart Kebutuhan dan Pendapatan '
				 },
				 xAxis: {
					categories: ['Kebutuhan dan Pendapatan']
				 },
				 yAxis: {
					title: {
					   text: 'Rupiah'
					}
				 },
					  series:             
					[
						<?php 
					/*	include "../../koneksi.php";
						
						$ttl = mysql_query("SELECT SUM(jumlah) FROM donasi where status='ok'  ");
						$ttl1 = mysql_fetch_row($ttl);
						
						$sql   = "SELECT *  FROM browser";
						$query = mysqli_query( $con, $sql )  or die(mysqli_error());
						while( $temp = mysqli_fetch_array( $query ) )
						{
							$trendbrowser=$temp['browsername'];                     
							$sql_total   = "SELECT total FROM browser WHERE browsername='$trendbrowser'";        
							$query_total = mysqli_query($con,$sql_total ) or die(mysql_error());
							while( $data = mysqli_fetch_array( $query_total ) )
							{
								$total = $data['total'];                 
							}  */           
						?>
							{
							  name: 'Total Anggaran',
							  data: [<?php echo $tk; ?>]
							},
							{
							  name: 'Total Kekurangan',
							  data: [<?php echo $kr; ?>]
							},
							{
							  name: 'Total Pendapatan',
							  data: [<?php echo $dns; ?>]
							},
							<?php 
					//	} 	?>
						]
			  });
		   });	
	</script>




 <br /> <h2 class="bd-postheader">Dashboard</h2>
<br /><br />
  <div id ="mygraph"></div>
  
  <br /><br /><br />
  <table width="90%" align="center" border="1" >
  <tr>
  <td height="50" width="40%"><b>List Donasi</b></td>
  <td width="20%"></td>
  <td width="40%"><b>Total Donasi</b></td>
  </tr>
  <tr>
  <td>
  <marquee direction="up" scrollamount="2"> 
  <?php
  $d= mysql_query("select * from donasi where status='ok' ");
$no=0;
	while($don = mysql_fetch_row($d))
	{
		$no++;
	$id_d = $don[0];
	$nm1 = $don[1];
	$jml1 = $don[2];
	$jml = number_format($jml1, 0, ',', '.');
	
	$u = mysql_query("select * from user where iduser='".$nm1."'  ");
	$us = mysql_fetch_row($u);
	
	$k = mysql_query("select * from konfirmasi where id_donasi='".$id_d."'  ");
	$ko = mysql_fetch_row($k);
	
	$nm = $us[3];
	$tgl = $ko[1];
	
	echo "$nm Rp $jml<br />";
	}
	
  ?>
  <br /><br />
  
  </marquee>
  
  
  </td>
  <td></td>
  <td><font size="5">Rp <?php echo number_format($dns, 0, ',', '.'); ?></b></font></td>
  </tr>
  </table>
  
    <br /><br /><br />

 
  
 
 