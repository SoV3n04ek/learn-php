<?php 
	session_start();

	unset($_SESSION['isSigned']);
	unset($_SESSION['login']);

	session_destroy();

	echo '<h1><a>logout successful</a></h1><br>';
	echo '<a href="index.php"> Go Home </a>';
?>