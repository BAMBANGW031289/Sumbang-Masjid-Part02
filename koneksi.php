<?php
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$host = "localhost";
$user = 'root';
$password = '';
$database = "masjiddb";

mysql_connect($host, $user, $password);
mysql_select_db($database);
?>