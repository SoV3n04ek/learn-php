<?php
	include_once("UserModel.php");

	$usermodel = new UserModel();
	$usermodel->connect();



	$user_id   = 0;
	$password  = '';
	$name      = '';
	$last_name = '';

	if (isset($_GET["id"]))
		$user_id = $_GET["id"];

	$users = $usermodel->readAll();


	foreach ($users as $user) {
		$userlog   = trim($user["email"]);
		$password  = trim($user["password"]);
		$name      = trim($user["name"]);
		$last_name = trim($user["last_name"]);
		$user_id   = $user["id"];
		
		if($user["id"] == $user_id)
		  	break;
	}			

?>

<h1>Update Profile form</h1>
<?php 
	echo '<form id="form" action="updateProfileHandler.php?id=' . $user_id . ' " method="POST">';
?>
	<h4>Email</h4>
	<div>
		<input type="text" name="email" value="<?= $userlog ?>">
	</div>
	<h4>Password</h4>
	<div>
		<input type="password" name="password" value="<?= $password ?>">
	</div>
	<h4>Name</h4>
	<div>
		<input type="text" name="name" value="<?= $name ?>">
	</div>
	<h4>Last Name</h4>
	<div>
		<input type="text" name="last_name" value="<?= $last_name ?>">
	</div>
	<br>
	<input type="submit" name="" value="ClickMe">
	
</form>

<br>
<a href="index.php"> Go Home </a>