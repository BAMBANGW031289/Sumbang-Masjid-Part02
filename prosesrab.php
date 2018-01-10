<?php
	session_start();
	include 'koneksi.php';
	if($_SESSION['login_lvl']=='admin' )
	{
	
	
	//$act=$_GET['act'];
	$id=$_GET['id'];
	
	mysql_query("DELETE FROM rab_isi WHERE id_ri='".$id."'");
	
	
	
	
	
	
	print ("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=rab_l'>");
	}
	else
	{
		print ("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =index.php'>");
	}
?>
