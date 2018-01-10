

 <h2 class="bd-postheader">Tambah Foto</h2>
<br /><br />
  
 
 <table border="1" width="70%">
  <form name="form1" action="" method="post" enctype="multipart/form-data">
 
 
 <tr>
 <td height="30"></td>
 <td>Nama Gambar</td>
 <td>:</td>
 <td><input name="nm" type="text" required></td>
 </tr>
  <tr>
 <td height="30"></td>
 <td>Upload Gambar</td>
 <td>:</td>
 <td><input name="upload" type="file" required></td>
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
	$upload = $_POST['upload'];
	$fileName = $_FILES['upload']['name'];
	$move = move_uploaded_file($_FILES['upload']['tmp_name'], 'images/galeri/'.$fileName);
	if($move){
			mysql_query("INSERT INTO galeri_foto values (0,'$fileName','$nm','aktif')");
			
	echo "<script>
                alert('Foto berhasil disimpan');
            </script>";
                echo "<script>
                window.location.href = 'haladmin.php?p=tambah-foto';
            </script>";
	//print("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=tambah-admin'>");	
	}
		
	}	
?>
 
 
 
 </td>
 </tr>
 </table>
 
 <br />
 <br />
 
 <table width="80%" align="center">
		<tr>
		<?php
		$f= mysql_query("select * from galeri_foto where status='aktif' ");
		$i = 1;
		while($row = mysql_fetch_array($f)){
		?>
			<td><?php echo $row['deskripsi'];?><br/>
				<div class="bd-layout-cell" style="width: 20%" >
                                                    <p>
				<img src="images/galeri/<?php echo $row['nama_file'];?>" alt="" class="bd-lightbox" width="200" border="0"/>
				</p>
                                                </div>
				
			</td>
		<?php
			if($i % 3 == 0){
				echo '</tr><tr>';
			}
			$i++;
		}
		?>
		</tr>
	</table>
  
 
 