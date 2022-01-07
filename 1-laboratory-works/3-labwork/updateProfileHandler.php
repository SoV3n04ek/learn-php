<?php
include_once 'UserModel.php';

if (isset($_POST["email"]) && isset($_POST["password"]))
{
	$email     = trim($_POST["email"]);
	$password  = trim($_POST["password"]);
	$name      = trim($_POST["name"]);
	$last_name = trim($_POST["last_name"]);
	$user_id = 0;

	if (isset($_GET["id"]))
		$user_id = $_GET["id"];
	

	$usermodel = new UserModel();
	$usermodel->connect();

	$user = new User($user_id, $email, $password, $name, $last_name);
	if ($usermodel->update($user))
		echo "User seccesful updated";
	else
		echo "Error in user updating";
}
?>

<br>

<a href="index.php"> Go Home </a>