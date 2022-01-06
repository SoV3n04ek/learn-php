<!-- first part -->
<!-- <?php
	$connection  = mysqli_connect('localhost', 'root', null, 'dbname');

	$result  	 = mysqli_query($connection, 'SELECT * FROM table WHERE 1=1');
	
	/*$prepared 	 = mysqli_prepare($connection, 'SELECT * FROM table WHERE 1=1');
	$stmt = mysqli->prepare
	$prepared-execute();*/


	$array  	 = mysql_fetch_assoc($result);
	$all_records = mysql_fetch_all($result, MYSQLI_ASSOC); // возвращает все строки
	
	mysql_close($connection);
?>


 -->


<?php
	$mysqli = new mysqli("localhost0", "root", null, "database");

	//$stmt = $mysqli->prepare("INSERET INTO test(id, label) VALUES (?, ?)");
	$stmt = $mysqli->prepare("INSERET INTO test(id, label) VALUES (:id, :label)");

	$stmt->bind_param("is", $id, $label); // is 

	$data = [
		1 => 'PHP',
		2 => 'Java',
		3 => 'C++'
	];

	foreach($data as $id => $label)
	{
		$stmt->execute();
	}

	var_dump($result->fetch_all(MYSQLI_ASSOC));


?>

<!-- классы
каждый класс в отдельном файле
создать простую базу данных (2 таблицы:phpmyadmin)
	1. User
		id 
		email
		password
		name
		lastname

	2. Посты
		id
		title
		body
		user_id
	
 -->