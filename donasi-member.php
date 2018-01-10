<script type="text/javascript" src="numberset.js"></script>



  <h2 class="bd-postheader">Donasi</h2>
<br /><br />
  <?php
$id_user = $_SESSION['login']['id_user'];
$tg_l = mysql_query("select * from donasi where id_user='".$id_user."' and status='pending'  ");
$tg_l1 = mysql_fetch_row($tg_l);
$cek = mysql_num_rows($tg_l);

if($cek >= 1)
		{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda belum melakukan konfirmasi donasi sebelumnya, Silahkan melakukan konfirmasi donasi anda. </b><br /><br /><br /><br />";
		}
		else
		{
?>
 
 <table border="1" width="70%">
  <form action="halmember.php?p=prosesdonasi" method="POST">
  
 <tr>
 <td height="30"></td>
 <td>Jumlah Donasi</td>
 <td>:</td>
 <td>
 <input type="text" id="inputku" name="jml" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
 
 </td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Metode Pembayaran</td>
 <td>:</td>
 <td>
 <select name="bank" required>
<option value="">Select</option>
<option value="bca">Transfer BCA</option>
<option value="bni">Transfer BNI</option>
<option value="mandiri">Transfer Mandiri</option>
<?php
/*$tg_l = mysql_query("select * from rab_sub order by id_rs ASC  ");
while($tg_l1 = mysql_fetch_row($tg_l))
{
	$tg_id = $tg_l1[0];
	$tg_n = $tg_l1[1];

echo "<option value=$tg_id>$tg_n</option>";

}*/
?>

</select>
 </td>
 </tr>
 
 
 
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Kirim" name="simpan" class="bd-button" />  </td>
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
 
 <?php
		}
		?>
 
 
  
 
 