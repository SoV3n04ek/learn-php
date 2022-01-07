<?php
	include_once("UserModel.php");

	if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['last_name']))
	{	
		$found = false;
		
		$login     = trim($_POST['login']);
		$password  = trim($_POST['password']); 
		$name      = trim($_POST['name']);
		$last_name = trim($_POST['last_name']);

		$usermodel = new UserModel();
		$usermodel->connect();

		$users = $usermodel->readAll();	
		$userlog      = '';
		$userpassword = '';

		foreach ($users as $user) {
			$userlog = trim($user["email"]);
	
			if(strcmp($login, $userlog) == 0)
			{
				$found = true;
		   		break;
			}
		}			
			
		if ($found) {
			echo "OOOOPS, user with this login already exist<br>";
		}
		else
		{
			$user = new User(null, $login, $password, $name, $last_name);
			$usermodel->create($user);
			echo "User Added Succesfuly";
		}
		
		
	}
?>

<br>
<a href="index.php"> Go Home </a>