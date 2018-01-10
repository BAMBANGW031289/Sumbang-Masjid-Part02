<script type="text/javascript" src="numberset.js"></script>



  <h2 class="bd-postheader">Ubah Password</h2>
<br /><br />
  
 
 <table border="1" width="70%">
  <form action="ubahpassword.php" method="POST">
  
 <tr>
 <td height="30"></td>
 <td>Password Baru</td>
 <td>:</td>
 <td>
 <input type="password" id="inputku" name="psw" required>
 
 </td>
 </tr>
 
 
 
  
 
 
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Ubah" name="simpan" class="bd-button" />  </td>
 <td>
 
 
 <?php
			//session_start();
	
	
	/*if(isset($_POST['simpan']))
	{
		$idu = $_SESSION['login']["iduser"];
		$jml1= $_POST['jml'];
		$jml= str_replace(".", "", $jml1);
		
	
			mysql_query("INSERT INTO donasi values (0,'$idu','$jml','pending')");
			

		echo "<script>
                alert('Konfirmasi telah dikirim!');
            </script>";
                echo "<script>
                window.location.href = 'halmember.php?p=dashboard_m';
            </script>";
        
		
	}	*/
?>
 
 
 
 </td>
 </tr>
 </table>
 
 
  
 
 