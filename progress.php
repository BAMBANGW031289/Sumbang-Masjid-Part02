<?php
$f1= mysql_query("select * from progres_bangun where id_progress=1 ");
$row1 = mysql_fetch_array($f1);
$f2= mysql_query("select * from progres_bangun where id_progress=2 ");
$row2 = mysql_fetch_array($f2);
$f3= mysql_query("select * from progres_bangun where id_progress=3 ");
$row3 = mysql_fetch_array($f3);
$f4= mysql_query("select * from progres_bangun where id_progress=4 ");
$row4= mysql_fetch_array($f4);

$dlm = $row1[2];
$kubah = $row2[2];
$dpn = $row3[2];
$luar = $row4[2];

$dlm1 = $row1[1];
$kubah1 = $row2[1];
$dpn1 = $row3[1];
$luar1 = $row4[1];
?>

 <h2 class="bd-postheader">Progress Pembangunan</h2>
<br /><br />
  
  
  
  <table border="1" width="70%">
  <form action="" method="POST">
 
 
 <tr>
 <td height="30"></td>
 <td>Ruang Dalam</td>
 <td>:</td>
 <td><input name="dlm" type="number" value="<?php echo $dlm; ?>" maxlength="3" required></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Kubah</td>
 <td>:</td>
 <td><input name="kubah" type="number" value="<?php echo $kubah; ?>" maxlength="3" required></td>
 </tr>

 <tr>
 <td height="30"></td>
 <td>Halaman Depan</td>
 <td>:</td>
 <td><input name="dpn" type="number" value="<?php echo $dpn; ?>" maxlength="3" required></td>
 </tr> 
 
  <tr>
 <td height="30"></td>
 <td>Bagian Luar</td>
 <td>:</td>
 <td><input name="luar" type="number" value="<?php echo $luar; ?>" maxlength="3" required></td>
 </tr>
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Simpan" name="update" class="bd-button" />  </td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['update']))
	{
	$dlm = $_POST['dlm'];
$kubah = $_POST['kubah'];
$dpn = $_POST['dpn'];
$luar = $_POST['luar'];
	
			mysql_query("UPDATE progres_bangun SET total='".$dlm."' where id_progress=1");
			mysql_query("UPDATE progres_bangun SET total='".$kubah."' where id_progress=2");
			mysql_query("UPDATE progres_bangun SET total='".$dpn."' where id_progress=3");
			mysql_query("UPDATE progres_bangun SET total='".$luar."' where id_progress=4");
			
	
	print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=progress'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
 
  
  
  
 <br /><br /><br /><br />
 

<table  width="80%" width="98%" align="center">
<tr>
<td height="200px" width="35%" valign="bottom"><?php echo $dlm1; ?><img src="images/galeri/dalam.jpeg" alt="" class="bd-lightbox" height="100%" width="100%" border="0"/><br /></td>
<td height="200px" width="15%" valign="bottom">
<p><b><?php echo $dlm; ?>%</b> <div style="height: <?php echo $dlm; ?>%; width: 50px; background-color: blue;" title="<?php echo $dlm; ?>% "></div></p></td>
<td height="200px" width="35%" valign="bottom"><?php echo $kubah1; ?><img src="images/galeri/kubah.jpg" alt="" class="bd-lightbox" height="100%" width="100%" border="0"/><br /></td>
<td height="200px" width="15%" valign="bottom">
<p><b><?php echo $kubah; ?>%</b>  <div style="height: <?php echo $kubah; ?>%; width: 50px; background-color: blue;" title="<?php echo $kubah; ?>% "></div></p></td>
</tr>
<tr>
<td height="50px" width="35%" valign="bottom"></td>
<td  width="15%" valign="bottom"></td>
<td  width="35%" valign="bottom"></td>
<td  width="15%" valign="bottom"></td>
</tr>
<tr>
<td height="200px" width="35%" valign="bottom"><?php echo $dpn1; ?><img src="images/galeri/halaman-depan.jpg" alt="" class="bd-lightbox" height="100%" width="100%" border="0"/><br /></td>
<td height="200px" width="15%" valign="bottom">
<p><b><?php echo $dpn; ?>%</b> <div style="height: <?php echo $dpn; ?>%; width: 50px; background-color: blue;" title="<?php echo $dpn; ?>%"></div></p></td>
<td height="200px" width="35%" valign="bottom"><?php echo $luar1; ?><img src="images/galeri/luar.jpg" alt="" class="bd-lightbox" height="100%" width="100%" border="0"/><br /></td>
<td height="200px" width="15%" valign="bottom">
<p><b><?php echo $luar; ?>%</b>  <div style="height: <?php echo $luar; ?>%; width: 50px; background-color: blue;" title="<?php echo $luar; ?>%"></div></p></td>
</tr>
</table>
 
 