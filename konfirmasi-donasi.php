  <h2 class="bd-postheader">Konfirmasi Donasi</h2>
<br /><br />
  <?php
  $id_user = $_SESSION['login']['id_user'];
$tg_l = mysql_query("select * from donasi where id_user='".$id_user."' and status='pending'  ");
$tg_l1 = mysql_fetch_row($tg_l);
$cek = mysql_num_rows($tg_l);
	$tg_id = $tg_l1[0];
	$tg_n1 = $tg_l1[2];
	$tg_n = number_format($tg_n1, 0, ',', '.');
	$bank = $tg_l1[3];
	if ($bank=='bca'){
			$bank1="Bank BCA <b>618873899</b>";
		}
		else if ($bank=='bni'){
			$bank1="Bank BNI <b>03002348822</b>";
		}
		else if ($bank=='mandiri'){
			$bank1="Bank Mandiri <b>15600001348838</b>";
		}
		
		if($cek >= 1)
		{
  ?>
 
 <table border="1" width="90%">
  <form action="" method="POST" enctype="multipart/form-data">
 <tr>
  <td width="10" height="20"></td>
 <td width="20%">Donasi Anda</td>
 <td>:</td>
 <td><b>Rp <?php echo $tg_n ?></b> 
 <input name="iddonasi" type="hidden" value="<?php echo $tg_id ?>">
 
 </td>
 </tr>
 
 
 <tr>
 <td height="50"></td>
 <td>Jumlah Transfer</td>
 <td>:</td>
 <td>Mohon dipastikan transfer donasi anda <b>Rp <?php echo $tg_n ?></b> Ke Rekening kami <b><?php echo $bank1 ?></b></td>
 </tr>
  
 
  <tr>
 <td height="30"></td>
 <td>Email</td>
 <td>:</td>
 <td>
  <input name="email" type="text" required>
 
 </td>
 </tr>
 
 <tr>
 <td height="30"></td>
 <td>No Telp</td>
 <td>:</td>
 <td><input name="tlp" type="number" required></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Upload Struk</td>
 <td>:</td>
 <td><input name="upload" type="file" required></td>
 </tr>
 
  
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Simpan" name="simpan" class="bd-button" />  </td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['simpan']))
	{
		$iddonasi = $_POST['iddonasi'];
		//$jml= $_POST['jml'];
		$email	= $_POST['email'];
		$tlp = $_POST['tlp'];
		//$upload = $_POST['upload'];
		$today = date("Y-m-d H:i:s");  
		
		$target_dir = "konfirm/";
		$target_file1 = $target_dir . basename($_FILES["upload"]["name"]);
		
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file1, PATHINFO_EXTENSION);
		$filename = md5(uniqid()) . '.' .$imageFileType;
		$target_file = $target_dir . $filename;
	
			mysql_query("INSERT INTO konfirmasi values (0,'$today','$iddonasi','$email','$tlp','$filename')");
			mysql_query("UPDATE donasi SET status='menunggu' where id_donasi='".$iddonasi."'");

				
    if (mysql_affected_rows() > 0) {
		move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
		echo "<script>
                alert('Konfirmasi telah dikirim!');
            </script>";
                echo "<script>
                window.location.href = 'halmember.php?p=dashboard_m';
            </script>";
        /*$check = getimagesize($_FILES["upload"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
            if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
                echo "<script>
                alert('Konfirmasi telah dikirim!');
            </script>";
                echo "<script>
                window.location.href = 'haladmin.php?p=dashboard';
            </script>";
            } else {
                echo "<script>
                alert('Konfirmasi gagal dikirim!');
            </script>";
                echo "<script>
                window.location.href = 'haladmin.php?p=konfirmasi-donasi';
            </script>";
            }
        } else {
            echo "<script>
            alert('File yang diupload bukan gambar!!!.');
        </script>";
            echo "<script>
            window.location.href = 'haladmin.php?p=konfirmasi-donasi';
        </script>";

            $uploadOk = 0;
        }*/
    } else {
        echo "<script>
            alert('Gagal mengirim konfirmasi!!!.');
        </script>";
        echo "<script>
            window.location.href = 'haladmin.php?p=konfirmasi-donasi';
        </script>";
    }

	
			
	
	//print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=rab_l'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
 
 <?php
 }
 else {
	 
	 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda belum memiliki Donasi, Silahkan melakukan donasi </b><br /><br /><br /><br />";
 }
 ?>
 
  
 
 