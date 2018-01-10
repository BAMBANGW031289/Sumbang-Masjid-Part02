<?php
session_start();
$level = $_SESSION['login']['level'];
    
if($level === 'admin'){
    header ("Location: manage/index.php");
} elseif ($level === 'user') {
    header ("Location: dashboard/index.php");
} else {
    session_destroy();
    header("Location: index.php"); 
}

?>