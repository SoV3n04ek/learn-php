<?php

$user_id = 0;

if (isset($_GET["user_id"]))
	$user_id = $_GET["user_id"];

include_once "PostModel.php";

if (isset($_POST['title']) && isset($_POST['body']))
{
	$title   = $_POST['title'];
	$body    = $_POST['body'];
	$user_id = $_POST['user_id'];
	
	$postmodel = new PostModel();
	$postmodel->connect();

	$post = new Post(null, $title, $body, $user_id);
	if ($postmodel->create($post))
		echo "Post succesful created ";
	else
		echo "Error in post creation";
}
?>


<br>
<a href="index.php"> Go Home </a>