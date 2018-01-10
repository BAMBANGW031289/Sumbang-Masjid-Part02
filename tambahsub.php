  <h2 class="bd-postheader">Tambah Sub</h2>
<br /><br />
  
 
 <table border="1" width="70%">
  <form action="" method="POST">
 
 
 <tr>
 <td height="30"></td>
 <td>Nama Sub</td>
 <td>:</td>
 <td><input name="subt" type="text" required></td>
 </tr>
 
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Simpan" name="simpans" class="bd-button" />  </td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['simpans']))
	{
	$subt = $_POST['subt'];

	
			mysql_query("INSERT INTO rab_sub values (0, '$subt','0')");
			
	
	print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=rab'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
 
 
  
 
 