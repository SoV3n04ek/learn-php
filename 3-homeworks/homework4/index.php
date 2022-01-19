<?php
	include_once("Book.php");

	$b = new Book(1, 'Abrakadabra', 'dfsgdifoasdoo', 11, 16);

	var_dump($b->getId());
	var_dump($b->getName());
	var_dump($b->getDescription());
	var_dump($b->getAuthorId());
	var_dump($b->getGenreId());

	$b->setId(13);
	$b->setName("name1");
	$b->setDescription("safa");
	$b->setAuthorId(13);
	$b->setGenreId(13);
	
	echo '<br>';

	var_dump($b->getId());
	var_dump($b->getName());
	var_dump($b->getDescription());
	var_dump($b->getAuthorId());
	var_dump($b->getGenreId());
?>



<h1> Welcome to the book store! </h1>

<a href="showBookList.php"> show list books </a>
