<?php
	session_start();
	
	if(isset($_SESSION['login_lvl']) )
	{
		session_unset();
		session_destroy();
	}
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
?>