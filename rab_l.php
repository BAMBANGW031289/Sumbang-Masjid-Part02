  <br /><br /><h2 class="bd-postheader">Rencana Anggaran Biaya</h2>
<br /><br />
  
 
 <table border="1px" width="100%" align="center">
 <tr>
  <td width="3" height="50" align="center"><b>No</b> </td>
  <td width="30" align="center"> <b>URAIAN PEKERJAAN </b></td>
  <td width="10"  align="center"><b>SATUAN</b>  </td>
  <td width="10" align="center"><b>VOLUME </b></td>
  <td width="17" align="center"><b>HARGA SATUAN</b></td>
  <td width="30"  align="center"><b>JUMLAH HARGA</b></td>
  <td width="30"  align="center"><b>SPESIFIKASI </b></td>
   <td width="30" align="center"><b> </b></td>
  <!--<td width="30" height="30" align="center"><b>KETERANGAN</b></td>-->
 </tr>
 
 <?php
 $d= mysql_query("select * from rab_sub  ");
$no=0;
	while($don = mysql_fetch_row($d))
	{
		$no++;
		$idrs = $don[0];
		$nm = $don[1];
		
 
 ?>
  <tr>
  <td height="30" align="center"><?php echo $no; ?> </td>
  <td colspan="7" >&nbsp;&nbsp; <b><?php echo $nm; ?></b></td>
  </tr>
 <?php
 $is= mysql_query("select * from rab_isi where id_rs='".$idrs."'  ");
 $is1= mysql_query("select SUM(total_harga) from rab_isi where id_rs='".$idrs."'  ");
 $is2 = mysql_fetch_row($is1);
 $ttls1 = $is2[0];
 $ttls = number_format($ttls1, 0, ',', '.');
$noo=0;
	while($isi = mysql_fetch_row($is))
	{
		$noo++;
		$id_r = $isi[0];
		$krj = $isi[2];
		$satuan = $isi[3];
		$vol = $isi[4];
		$hrg1 = $isi[5];
		$spek = $isi[7];
		$ket	 = $isi[8];
		$jml1 = $vol*$hrg1;
		$hrg = number_format($hrg1, 0, ',', '.');
		$jml = number_format($jml1, 0, ',', '.');
 ?>
 <tr>
  <td height="30" align="right"><?php //echo "$no.$noo"; ?> </td>
  <td > &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$no.$noo $krj"; ?></td>
  <td align="center"><?php echo $satuan; ?>  </td>
  <td align="center"><?php echo $vol; ?> </td>
  <td align="center"><?php echo $hrg; ?> </td>
  <td align="center"><?php echo $jml ?> </td>
  <td align="center"><?php echo $spek; ?> </td>
  <td align="center">
  <a href="haladmin.php?p=rab-edit&id=<?php echo $id_r; ?>"><img src="images/edit.png" height="18" width="18" title="Edit" /></a>
  <a href="prosesrab.php?id=<?php echo $id_r; ?>"><img src="images/unconfirmed.png" height="12" width="12" title="Hapus" /></a></td>
  <!--<td align="center"><?php //echo $ket; ?> </td>-->
 </tr>
 
 <?php
	}
	
	echo "<tr><td colspan=5 align=center height=30><b>TOTAL</b></td>
	<td align=center><b>$ttls</b></td>
	<td></td>
	</tr>
	<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
	<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
	<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
	}
	?>
 </table>
  
 
 