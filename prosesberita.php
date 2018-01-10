<?php
	session_start();
	include 'koneksi.php';
	if($_SESSION['login_lvl']=='admin' )
	{
	
	
	//$act=$_GET['act'];
	$id=$_GET['id'];
	
	mysql_query("DELETE FROM berita WHERE idberita='".$id."'");
	
	
	
	
	
	
	print ("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =haladmin.php?p=berita'>");
	}
	else
	{
		print ("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =index.php'>");
	}
?>
