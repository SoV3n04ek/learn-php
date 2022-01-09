<?php 

session_start();

include_once("UserModel.php");
include_once("PostModel.php");


$login = ''; 


$user_id = 0;
if (isset($_SESSION['isSigned']))
{
	$login = trim($_SESSION['login']);
	 
	$usermodel = new UserModel();
	$usermodel->connect();

	$users = $usermodel->readAll();

	foreach ($users as $user) {
		$userlog = trim($user["email"]);
		$user_id = $user["id"];
		if(strcmp($login, $userlog) == 0)
		{
	   		break;
		}
	}			
}

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
		echo '<h1>Welcome to the site, ' . $login . '!!!<br>';
		echo '<h1 class="btn btn-success"><a href="showPosts.php">Show Posts</a></h1>';
		echo '<h1 class="btn btn-success"><a href="addPost.php?id='. $user_id.'">Add post</a></h1>';
		echo '<h1 class="btn btn-success"><a href="updateProfile.php">Update Profile Data</a></h1>';
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