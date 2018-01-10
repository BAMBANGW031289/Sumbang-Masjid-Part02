  <h2 class="bd-postheader">Donasi</h2>
<br /><br />

<?php
			//session_start();
	
	
	if(isset($_POST['simpan']))
	{
		$idu = $_SESSION['login']["id_user"];
		$nm = $_SESSION['login']["nama"];
		$jml1= $_POST['jml'];
		$jml= str_replace(".", "", $jml1);
		$bank= $_POST['bank'];
		if ($bank=='bca'){
			$bank1="Bank BCA <b>618873899</b>";
		}
		else if ($bank=='bni'){
			$bank1="Bank BNI <b>03002348822</b>";
		}
		else if ($bank=='mandiri'){
			$bank1="Bank Mandiri <b>15600001348838</b>";
		}
		
	
			mysql_query("INSERT INTO donasi values (0,'$idu','$jml','$bank','pending')");
			

		/*echo "<script>
                alert('Konfirmasi telah dikirim!');
            </script>";
                echo "<script>
                window.location.href = 'halmember.php?p=dashboard_m';
            </script>";*/
			
			echo "
			<table width=80% align=center>
			<tr><td>
			Hi <b>$nm</b><br />
			Terima kasih telah berinfaq dalam program pembangunan masjid Al Jauhfar, Semoga infaq yang Bapak/Ibu berikan berguna untuk kemaslahatan umat dan menjadi syiar untuk islam.<br /><br />
			Mohon lakukan pembayaran sejumlah Rp $jml1 ke Rekening $bank1 dalam jangka waktu kurang dari 24 jam. 
			</td></tr></table>
			";
        
		
	}	
?>