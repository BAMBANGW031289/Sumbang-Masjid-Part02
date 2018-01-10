<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Lupa Password</title>
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
                             
                                    
									
    <br /><br /><h2 class="bd-postheader">Lupa Password</h2>
<br /><br />

<?php
$p=$_GET["p"];

if ($p==1)
{ ?>
	
	<table border="1" width="70%">
  <form action="" method="POST">
 
 
 <tr>
 <td height="30"></td>
 <td>Email</td>
 <td>:</td>
 <td><input name="email" type="text" required></td>
 </tr>
  
 
 <tr>
 <td></td>
 <td><br /><input type="submit" value="Kirim" name="simpans" class="bd-button" />  </td><td></td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['simpans']))
	{
	
	$email = $_POST['email'];
	
$tg_l = mysql_query("select * from user where email='".$email."' ");
$tg_l1 = mysql_fetch_row($tg_l);
$cek = mysql_num_rows($tg_l);	
			if($cek >= 1)
		{
			$_SESSION["cekid"] = $tg_l1[0];
			$_SESSION["cekemail"] = $tg_l1[4];
			print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =lupapassword.php?p=2'>");	
		} else{
			echo "Email anda tidak terdaftar";
		}
			
	/*echo "<script>
                alert('Data Admin berhasil disimpan');
            </script>";
                echo "<script>
                window.location.href = 'haladmin.php?p=tambah-admin';
            </script>";*/
	//print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =registrasi.php?p=2'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
	
	
<?php
 }
else if ($p==2)
{
	$cekid = $_SESSION["cekid"] ;
	$cekemail = $_SESSION["cekemail"] ;
	?>
	<table border="1" width="70%">
  <form action="" method="POST">
 
 
 <tr>
 <td height="30"></td>
 <td>Email</td>
 <td>:</td>
 <td><input name="email" type="text" value="<?php echo $cekemail; ?>" readonly required><input name="cekid" type="hidden" value="<?php echo $cekid; ?>" ></td>
 </tr>
 
 <tr>
 <td height="30"></td>
 <td>Password Baru</td>
 <td>:</td>
 <td><input name="pswbaru" type="password" maxlength="8" required></td>
 </tr>
  
 
 <tr>
 <td></td>
 <td><br /><input type="submit" value="Kirim" name="simpans1" class="bd-button" />  </td><td></td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['simpans1']))
	{
	$cekid = $_POST['cekid'];
	$email = $_POST['email'];
	$pswb= $_POST['pswbaru'];
	
mysql_query("UPDATE user set password='".$pswb."' where iduser='".$cekid."' and email='".$email."'");
			unset($_SESSION['cekid']);
			unset($_SESSION['cekemail']);
	echo "<script>
                alert('Password Baru berhasil diubah');
            </script>";
                echo "<script>
                window.location.href = 'index.php';
            </script>";
	//print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =registrasi.php?p=2'>");	
		
		
	}	
?>
 
 
 
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