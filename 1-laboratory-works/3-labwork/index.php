<?php include_once("User.php"); ?>
<!-- <h1>Create new user</h1>

<form id="form1" action="registrationHandler.php" method='POST'>
	<input type="hidden" name="cst_token" value="1">
	<div>
		<input type="text" name="login" value="">
	</div>
	<div>
		<input type="password" name="password" value="">
	</div>
	<div>
		<input type="submit" name="" value="Submit">
	</div>
</form>
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Mysqli test</title>
	<style type="text/css">
		th, td {
			padding: 10px;
		}
		th {
			background: #606060;
			color: #ffffff;
		}
		tr {
			background: #b5b5b5;
		}
		button {
			padding: 10px;
		}
	</style>
</head>
<body>

<table>
	<tr>
		<td>Id</td>
		<td>Email</td>
		<td>Password</td>
		<td>Name</td>
		<td>Last Name</td>
	</tr>

<?php 

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = null;
const DATABASE = 'new_test';
 
$mysqli = new mysqli(HOST,  USER, PASSWORD, DATABASE);

if (!$mysqli)
{
	die('Error connect to database!');
}

$result = $mysqli->query("SELECT * FROM users");

if ($result == false)
{
	die('mysqli query error');
}

$rows = $result->fetch_all(MYSQLI_ASSOC);// разбить полученое на массив объектов user

foreach ($rows as $row) { ?>
	<tr>
		<td> <?= $row["id"] 	   ?> </td>
		<td> <?= $row["email"] 	   ?> </td>
		<td> <?= $row["password"]  ?> </td>
		<td> <?= $row["name"] 	   ?> </td>
		<td> <?= $row["last_name"] ?> </td>
	</tr>
<?php
	}

$mysqli->close();

?>
</table>

<br>
<h3></h3>
<form action="addUser.php" method="post">
	<p>Email</p>
	<input type="text" name="email">
	<p>Password</p>	
	<input type="password" name="password">
	<p>Name</p>
	<input type="text" name="name">
	<p>Last Name</p>
	<input type="text" name="last_name">
	<br><br>
	<button type="submit">Add new user</button>
</form>

<br>

<table>
<?php 

// test user
$user = new User(0, "email@go", "32312p", "name22", "last_name321");

	?>

	<tr>
		<td> <?= $user->getId();   ?> </td>
		<td> <?= $user->getEmail();	   ?> </td>
		<td> <?= $user->getPassword();  ?> </td>
		<td> <?= $user->getName();	   ?> </td>
		<td> <?= $user->getLastName(); ?> </td>
	</tr>

</table>

</body>
</html>