  <h2 class="bd-postheader">Rencana Anggaran Biaya</h2>
<br /><br />
  
 
 <table border="1" width="70%">
  <form action="" method="POST">
 <tr>
  <td width="10" height="30"></td>
 <td>Sub Bab</td>
 <td>:</td>
 <td>
 <select name="sub" required>
<option value="">Select</option>
<?php
$tg_l = mysql_query("select * from rab_sub order by id_rs ASC  ");
while($tg_l1 = mysql_fetch_row($tg_l))
{
	$tg_id = $tg_l1[0];
	$tg_n = $tg_l1[1];

echo "<option value=$tg_id>$tg_n</option>";

}
?>

</select> <a href="haladmin.php?p=tambahsub">tambah sub</a>
 
 
 </td>
 </tr>
 
 <tr>
 <td height="30"></td>
 <td>Pekerjaan</td>
 <td>:</td>
 <td><input name="kerja" type="text" required></td>
 </tr>
 
  <tr>
 <td height="30"> </td>
 <td>Satuan</td>
 <td>:</td>
 <td>
 <select name="satuan" required>
<option value="">Select</option>
<option value="m2">m2</option>	
<option value="m1">m1</option>
<option value="m3">m3</option>
<option value="OH">OH</option>
<option value="Kg">Kg</option>
<option value="pc">pcs</option>
<option value="ls">ls</option>
<option value="Titik">Titik</option>
</select>
 
 </td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Volume</td>
 <td>:</td>
 <td>
  <input name="volume" type="number" required>
 
 </td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Harga Satuan</td>
 <td>:</td>
 <td><input name="harga" type="number" required></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Spesifikasi </td>
 <td>:</td>
 <td><input name="spesifik" type="text" required></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Keterangan</td>
 <td>:</td>
 <td><input name="ket" type="text" required></td>
 </tr>
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Simpan" name="simpan" class="bd-button" />  </td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['simpan']))
	{
	$sub = $_POST['sub'];
$kerja = $_POST['kerja'];
$satuan = $_POST['satuan'];
$volume = $_POST['volume'];
$harga = $_POST['harga'];
$spesifik = $_POST['spesifik'];
$ket = $_POST['ket'];
$total = $volume*$harga;
	
			mysql_query("INSERT INTO rab_isi values (0, '$sub','$kerja','$satuan','$volume','$harga','$total','$spesifik','$ket')");
			
	
	print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=rab_l'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
 
 
  
 
 