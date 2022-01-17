<?php
	include_once("Book.php");

	$b = new Book(1);

	var_dump($b->getId());
?>

<h1> Welcome to the book store! </h1>

<a href="showBookList.php"> show list books </a>
