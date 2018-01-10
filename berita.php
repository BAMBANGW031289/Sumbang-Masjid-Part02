

 <h2 class="bd-postheader">Kelola Berita</h2>
<br /><br />
  
 
 <table border="1" width="90%">
  <form action="" method="POST">
 
 
 <tr>
 <td height="30"></td>
 <td width="20%">Judul Berita</td>
 <td>:</td>
 <td><input name="jdl" type="text" required></td>
 </tr>
  <tr>
 <td height="30"></td>
 <td>Isi Berita</td>
 <td>:</td>
 <td><textarea rows="3" name="isi"></textarea></td>
 </tr>
 
 
 
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Simpan" name="simpans" class="bd-button" />  </td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['simpans']))
	{
	$jdl = $_POST['jdl'];
	$isi = $_POST['isi'];
	$today = date("Y-m-d H:i:s"); 

	
			mysql_query("INSERT INTO berita values (0,'$jdl','$isi','$today')");
			
	echo "<script>
                alert('Data Berita Berhasil Disimpan');
            </script>";
                echo "<script>
                window.location.href = 'haladmin.php?p=berita';
            </script>";
	//print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=tambah-admin'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
 
 
 
 <?php
 
 $ttl = mysql_query("SELECT SUM(jumlah) FROM donasi where status='ok'  ");
 $ttl1 = mysql_fetch_row($ttl)
 ?>
 
 
 <br /><br />
 
 <table border="1" width="95%" align="center">
 <tr>
  <td width="5%" height="30" align="center"><b>No</b> </td>
  <td width="20%" height="30" align="center"> <b>Tanggal</b></td>
  <td width="20%" height="30" align="center"> <b>Judul</b></td>
  <td width="40%" height="30" align="center"><b>Isi</b>  </td>
   <td width="15%" height="30" align="center"><b>Action </b></td>
 </tr>
 <?php
 $d= mysql_query("select * from berita ");
$no=0;
	while($don = mysql_fetch_row($d))
	{
		$no++;
	$id_d = $don[0];
	$nm1 = $don[1];
	$jml1 = $don[2];
	$bank = $don[3];

 
 ?>
 
 
 <tr>
  <td height="30" align="center"><?php echo $no; ?> </td>
  <td align="center"> <?php echo $bank; ?></td>
  <td align="center"> <?php echo $nm1; ?></td>
  <td align="center"><?php echo $jml1; ?>  </td>
 
  <td align="center"><?php echo "
  
  
  
  <a href=prosesberita.php?id=$id_d><img src=images/unconfirmed.png height=22 width=22 title=Hapus	  /></a>
  "; ?>

  </td>
 </tr>
 
 <?php
	}
	?>
 </table>
  
 
 
 
 
  
 
 