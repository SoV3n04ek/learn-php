<?php 
include_once("User.php");
include_once("Post.php");
include_once("UserModel.php");

?>

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

$usermodel = new UserModel();
$usermodel->connect();

$users = $usermodel->readAll();
var_dump($users);
foreach ($users as $user) { ?>
<tr>
		<td> <?= $user["id"];   	   ?> </td>
		<td> <?= $user["email"];	   ?> </td>
		<td> <?= $user["password"]; ?> </td>
		<td> <?= $user["name"];	   ?> </td>
		<td> <?= $user["last_name"]; ?> </td>
	</tr>

<?php } ?>

</table>
</body>
</html>