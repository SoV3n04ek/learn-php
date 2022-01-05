<?php 
	include_once 'Login.php';
	session_start();
?>

<?php
	$login = new Login();
	$log   = $_POST['login'];
	$pass  = $_POST['password'];

	if (isset($log) && isset($pass))
	{
		//var_dump($login->isCorrect(trim($log), trim($pass)));

		if ($login->isCorrect(trim($log), md5(trim($pass))))
		{
			echo '<h1>Succesfuly signed</h1>';
		}
		else
		{
			echo '<h1>Error </h1>';
		}
	}
	else 
	{
		var_dump(false);
	}
?>