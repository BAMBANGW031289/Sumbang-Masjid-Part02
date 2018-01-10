  <h2 class="bd-postheader">Edit Rencana Anggaran Biaya</h2>
<br /><br />
  
 <?php
 $id_r = $_GET['id'];
 
$is= mysql_query("select * from rab_isi where id_ri='".$id_r."'  ");
 //$is1= mysql_query("select SUM(total_harga) from rab_isi where id_rs='".$idrs."'  ");
 $isi = mysql_fetch_row($is);
 
		$id_rs = $isi[1];
		$id_r = $isi[0];
		$krj = $isi[2];
		$satuan = $isi[3];
		$vol = $isi[4];
		$hrg1 = $isi[5];
		$spek = $isi[7];
		$ket	 = $isi[8];
$d= mysql_query("select * from rab_sub where id_rs='".$id_rs."'  ");
$don = mysql_fetch_row($d);
$ksub=$don[0];
$nsub=$don[1];
 
 
 
 
 ?>
 <table border="1" width="70%">
  <form action="" method="POST">
 <tr>
  <td width="10" height="30"></td>
 <td>Sub Bab</td>
 <td>:</td>
 <td>
 <select name="sub" required>
<option value="<?php echo $ksub; ?>" selected><?php echo $nsub; ?></option>
<?php
$tg_l = mysql_query("select * from rab_sub order by id_rs ASC  ");
while($tg_l1 = mysql_fetch_row($tg_l))
{
	$tg_id = $tg_l1[0];
	$tg_n = $tg_l1[1];

echo "<option value=$tg_id>$tg_n</option>";

}
?>

</select> 
 
 
 </td>
 </tr>
 
 <tr>
 <td height="30"></td>
 <td>Pekerjaan</td>
 <td>:</td>
 <td><input name="kerja" type="text" required value="<?php echo $krj; ?>">
 <input name="idri" type="hidden" value="<?php echo $id_r; ?>"></td>
 </tr>
 
  <tr>
 <td height="30"> </td>
 <td>Satuan</td>
 <td>:</td>
 <td>
 <select name="satuan" required>
<option value="<?php echo $satuan; ?>"selected><?php echo $satuan; ?></option>
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
  <input name="volume" type="number" required value="<?php echo $vol; ?>">
 
 </td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Harga Satuan</td>
 <td>:</td>
 <td><input name="harga" type="number" required value="<?php echo $hrg1; ?>"></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Spesifikasi </td>
 <td>:</td>
 <td><input name="spesifik" type="text" required value="<?php echo $spek; ?>"></td>
 </tr>
 
  <tr>
 <td height="30"></td>
 <td>Keterangan</td>
 <td>:</td>
 <td><input name="ket" type="text" required value="<?php echo $ket; ?>"></td>
 </tr>
 
 <tr>
 <td></td>
 <td><br /><br /><br /><input type="submit" value="Simpan" name="simpan" class="bd-button" />  </td>
 <td>
 
 
 <?php
			//session_start();
	
	
	if(isset($_POST['simpan']))
	{
		$idri = $_POST['idri'];
	$sub = $_POST['sub'];
$kerja = $_POST['kerja'];
$satuan = $_POST['satuan'];
$volume = $_POST['volume'];
$harga = $_POST['harga'];
$spesifik = $_POST['spesifik'];
$ket = $_POST['ket'];
$total = $volume*$harga;

	mysql_query("UPDATE rab_isi set id_rs='".$sub."' , pekerjaan='".$kerja."' , satuan='".$satuan."' , volume='".$volume."' , harga_satuan='".$harga."' , total_harga='".$total."' , spesifikasi='".$spesifik."', keterangan='".$ket."' where id_ri='".$idri."' ");
			//mysql_query("INSERT INTO rab_isi values (0, '$sub','$kerja','$satuan','$volume','$harga','0','$spesifik','$ket')");
			
	
	print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=rab_l'>");	
		
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
 
 
  
 
 