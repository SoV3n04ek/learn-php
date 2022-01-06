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

$user = $usermodel->readOne();

$user->setPassword("23945r0qi");
$user->setName("Ivan");


if ($usermodel->update($user))
{
	echo "Succes Update";
}
else 
	echo "ERROR in Update";

$user->setId(14);

$usermodel->delete($user);

?>

</table>
</body>
</html>