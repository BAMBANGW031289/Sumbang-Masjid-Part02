<?php
session_start();
include 'koneksi.php';

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$encpass = mysql_real_escape_string(($password));

$query = "SELECT * FROM user WHERE username='$username' AND password='$encpass' LIMIT 1;";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
if(mysql_num_rows($result) > 0){
	$lvl = $row[6];
	
	
	if ($lvl=='admin')
	{
		
		$_SESSION['login_lvl'] = 'admin';
    $_SESSION['login'] = array(
        'status' => TRUE,
		'id_user' => $row['iduser'],
        'username' => $row['username'],
        'nama' => $row['nama'],
        'email' => $row['email'],
        'telepon' => $row['telepon'],
        'level' => $row['level'],
        'last' => date('d-m-Y H:i:s')
    );
    
    header("Location: haladmin.php?p=dashboard");
		
	}
	else {
	
	
	
	
    //$row = mysql_fetch_array($result);
	$_SESSION['login_lvl'] = 'user';
    $_SESSION['login'] = array(
        'status' => TRUE,
		'id_user' => $row['iduser'],
        'username' => $row['username'],
        'nama' => $row['nama'],
        'email' => $row['email'],
        'telepon' => $row['telepon'],
        'level' => $row['level'],
        'last' => date('d-m-Y H:i:s')
    );
    
    header("Location: index.php");
	}
} else {
    echo "<script>
            alert('Kombinasi username dan password tidak dikenal!!!.');
        </script>";
    echo "<script>
            window.location.href = 'index.php';
        </script>";
}