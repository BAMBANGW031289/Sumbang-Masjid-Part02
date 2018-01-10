

 <h2 class="bd-postheader">Tambah Admin</h2>
<br /><br />
  
 
 <table border="1" width="70%">
  <form action="" method="POST">
 
 
 <tr>
 <td height="30"></td>
 <td>Nama Lengkap</td>
 <td>:</td>
 <td><input name="nm" type="text" required></td>
 </tr>
  <tr>
 <td height="30"></td>
 <td>Email</td>
 <td>:</td>
 <td><input name="email" type="text" required></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>No Telp</td>
 <td>:</td>
 <td><input name="tlp" type="number" required></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>username</td>
 <td>:</td>
 <td><input name="usr" type="text" required></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Password</td>
 <td>:</td>
 <td><input name="psw" type="password" maxlength="8" required></td>
 </tr>
 
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Simpan" name="simpans" class="bd-button" />  </td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['simpans']))
	{
	$nm = $_POST['nm'];
	$email = $_POST['email'];
	$tlp = $_POST['tlp'];
	$usr = $_POST['usr'];
	$psw = $_POST['psw'];

	
			mysql_query("INSERT INTO user values (0,'$usr','$psw','$nm','$email','$tlp','admin')");
			
	echo "<script>
                alert('Data Admin berhasil disimpan');
            </script>";
                echo "<script>
                window.location.href = 'haladmin.php?p=tambah-admin';
            </script>";
	//print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=tambah-admin'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
 
 
  
 
 