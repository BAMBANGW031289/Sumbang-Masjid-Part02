<?php
	session_start();
	include 'koneksi.php';
	if($_SESSION['login_lvl']=='admin' )
	{
	
	
	$act=$_GET['act'];
	$id=$_GET['id'];
	
	if($act==1)
		{
		mysql_query("UPDATE donasi set status='ok' where id_donasi='".$id."' ");
	
	echo"<script>";
		echo"alert('Konfirmasi Berhasil')";
		echo"(window.location.href='haladmin.php?p=adminkonfirmasi')";
		echo"</script>";
		}
	else if($act==2)
		{
			mysql_query("UPDATE donasi set status='pending' where id_donasi='".$id."' ");
	
	echo"<script>";
		echo"alert('Data di Reject')";
		echo"(window.location.href='haladmin.php?p=adminkonfirmasi')";
		echo"</script>";
		}
	
	
	$id=$_GET['id'];
	$user=$_GET['id_p'];
	
	
	//print ("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =list_participant.php'>");
	}
	else
	{
		print ("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =index.php'>");
	}
?>
