<table border="1" width="100%" align="center">
 <tr>
  <td width="5" height="30" align="center"><b>No</b> </td>
  <td width="45" height="30" align="center"> <b>Nama</b></td>
  <td width="20" height="30" align="center"><b>Tanggal</b>  </td>
  <td width="30" height="30" align="center"><b>Jumlah </b></td>
 </tr>
 <?php
 include 'koneksi.php';
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
 
 ?>
 
 
 <tr>
  <td height="30" align="center"><?php echo $no; ?> </td>
  <td align="center"> <?php echo $nm; ?></td>
  <td align="center"><?php echo $tgl; ?>  </td>
  <td align="center"><?php echo $jml; ?> </td>
 </tr>
 
 <?php
	}
	?>
 </table>