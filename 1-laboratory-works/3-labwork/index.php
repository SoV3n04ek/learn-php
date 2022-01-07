<?php 

session_start();

include_once("UserModel.php");
include_once("PostModel.php");

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


<?php 
	if (isset($_SESSION['isSigned']))
	{
		echo '<h1>Welcome to the site, ' . $_SESSION['login'] . '!!!<br>';
		echo '<h1 class="btn btn-success"><a href="showUsers.php">Show</a></h1>';
		echo '<h1><a href="logoutHandler.php">Logout</a></h1>';
	} 
	else
	{
		echo '<h1 class="btn btn-success"><a href="loginForm.php">Login</a></h1>
			<br>
			<h1 class="btn btn-success">
				<a href="registrationForm.php">Registration</a>
			</h1>
			<br>';
	}
?>



</table>
</body>
</html>