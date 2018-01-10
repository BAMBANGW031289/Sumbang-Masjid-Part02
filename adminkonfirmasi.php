 <br /><br /> <h2 class="bd-postheader">Konfirmasi Donasi</h2>
<br /><br />
  
 <?php
 
 $ttl = mysql_query("SELECT SUM(jumlah) FROM donasi where status='ok'  ");
 $ttl1 = mysql_fetch_row($ttl)
 ?>
 
 
 <br /><br />
 
 <table border="1" width="90%" align="center">
 <tr>
  <td width="5%" height="30" align="center"><b>No</b> </td>
  <td width="20%" height="30" align="center"> <b>Nama</b></td>
  <td width="10%" height="30" align="center"> <b>Bank</b></td>
  <td width="25%" height="30" align="center"><b>Tanggal</b>  </td>
  <td width="15%" height="30" align="center"><b>Jumlah </b></td>
   <td width="10%" height="30" align="center"><b>Struk </b></td>
   <td width="25%" height="30" align="center"><b>Action </b></td>
 </tr>
 <?php
 $d= mysql_query("select * from donasi where status='menunggu' ");
$no=0;
	while($don = mysql_fetch_row($d))
	{
		$no++;
	$id_d = $don[0];
	$nm1 = $don[1];
	$jml1 = $don[2];
	$bank = $don[3];
	$jml = number_format($jml1, 0, ',', '.');
	
	$u = mysql_query("select * from user where iduser='".$nm1."'  ");
	$us = mysql_fetch_row($u);
	
	$k = mysql_query("select * from konfirmasi where id_donasi='".$id_d."'  ");
	$ko = mysql_fetch_row($k);
	
	$nm = $us[3];
	$tgl = $ko[1];
	$url = $ko[5];
 
 ?>
 
 
 <tr>
  <td height="30" align="center"><?php echo $no; ?> </td>
  <td align="center"> <?php echo $nm; ?></td>
  <td align="center"> <?php echo $bank; ?></td>
  <td align="center"><?php echo $tgl; ?>  </td>
  <td align="center"><?php echo $jml; ?> </td>
  <td align="center"><?php echo "<div class=bd-layout-cell style=width:20% >
  <img src=konfirm/$url height=22 width=22 title=Struk class=bd-lightbox	  /></div>"; ?> </td>
  <td align="center"><?php echo "
  
  
  <a href=proseskonfirmasi.php?id=$id_d&act=1><img src=images/confirmed.png height=22 width=22 title=Konfirmasi	  /></a>
  <a href=proseskonfirmasi.php?id=$id_d&act=2><img src=images/unconfirmed.png height=22 width=22 title=Reject	  /></a>
  "; ?>

  </td>
 </tr>
 
 <?php
	}
	?>
 </table>
  
 
 