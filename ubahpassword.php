<?php
	session_start();
	include_once "koneksi.php";
	if($_SESSION['login_lvl']=='user' || $_SESSION['login_lvl']=='admin' )
	{
	
	$id = $_SESSION['login']['id_user'];
	$psw=$_POST['psw'];
	//$pswb=$_GET['pswb'];
	
	mysql_query("UPDATE user set password='".$psw."' where iduser='".$id."' ");
	
	echo"<script>";
		echo"alert('Reset Password Successfully. Password berhasil Di Ubah')";
		if($_SESSION['login_lvl']=='user'  )
	{	
		echo"(window.location.href='halmember.php?p=dashboard_m')";
	}
	else{
		echo"(window.location.href='haladmin.php?p=dashboard')";
	}
		echo"</script>";
	//print ("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =list_participant.php'>");
	}
	else
	{
		print ("<META HTTP-EQUIV = 'Refresh' Content = '0; URL =index.php'>");
	}
?>