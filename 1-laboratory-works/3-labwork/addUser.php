<?php

print_r($_POST);

$email 	   = $_POST["email"];
$pass 	   = $_POST["password"];
$name 	   = $_POST["name"];
$last_name = $_POST["last_name"];


const HOST = 'localhost';
const USER = 'root';
const PASSWORD = null;
const DATABASE = 'new_test';
$mysqli = new mysqli(HOST,  USER, PASSWORD, DATABASE);


if (!$mysqli)
{
	die('Error connect to database!');
}

$result = $mysqli->query("
	INSERT INTO users(id, email, password, name, last_name)
	VALUES (
		NULL, 
		' " . $email . " ',
		' " . $pass . " ',
		' " . $name . " ',
		' " . $last_name . " ')");

// INSERT INTO users(id, email, password, name, last_name) VALUES (NULL, 'email','pass','name','last_name');

if ($result == false)
{
	die('Error in query!');
}
else
{
	echo '<h1>Succesful adding</h1>';
}

header('Location: /');

?>