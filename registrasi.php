<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Form Registrasi</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
        <?php include('assets.php'); ?>
        
        <style>
            table, tr, td{
                border: hidden;
            }
        </style>
    </head>
    <body>
        <div id="bd-main">
            <div class="bd-sheet clearfix">
                <header class="bd-header">

                    <div class="bd-shapes">

                    </div>

                </header>
                <?php include('nav.php'); ?>
                <div class="bd-layout-wrapper">
                    <div class="bd-content-layout">
                        <div class="bd-content-layout-row">
                            <div class="bd-layout-cell bd-sidebar1">
                                <?php include('sidebar.php'); ?>
                            </div>
                            <div >
                             
                                    
									
    <br /><br /><h2 class="bd-postheader">Registrasi Member</h2>
<br /><br />

<?php
$p=$_GET["p"];

if ($p==1)
{ ?>
	
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
 
 $cek_username=mysql_num_rows(mysql_query("SELECT username FROM user WHERE username='$_POST[usr]'"));
// Kalau username sudah ada yang pakai
if ($cek_username > 0){
			echo "<script>
                alert('Data Sudah Ada Mohon Ulangi');
            </script>";
           print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =registrasi.php?p=1'>");	
}
		else if(isset($_POST['simpans']))
	{
	$nm = $_POST['nm'];
	$email = $_POST['email'];
	$tlp = $_POST['tlp'];
	$usr = $_POST['usr'];
	$psw = $_POST['psw'];

	
			mysql_query("INSERT INTO user values (0,'$usr','$psw','$nm','$email','$tlp','user')");
			
	/*echo "<script>
                alert('Data Admin berhasil disimpan');
            </script>";
                echo "<script>
                window.location.href = 'haladmin.php?p=tambah-admin';
            </script>";*/
	print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =registrasi.php?p=2'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
	
	
<?php
 }
else if ($p==2)
{
	?>
	<table width="80%" align="center">
	<tr>
	<td>
	Selamat!!! Akun anda sudah didaftarkan. Silahkan Anda Login. Terima kasih.
	</td>
	</tr>
	</table>
	
<?php 
}

?>
  
 
 
  
 
 
									
									
									
                               </div>
                        </div>
                    </div>
                </div>
                <?php include('footer.php'); ?>

            </div>
        </div>


    </body></html>