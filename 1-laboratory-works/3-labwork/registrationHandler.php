<?php
	if (isset($_POST['login']) && isset($_POST['password']))
	{	
		$found = false;

		$usermodel = new UserModel();
		$usermodel->connect();

		$users = $usermodel->readAll();	
		$userlog      = '';
		$userpassword = '';

		foreach ($users as $user) {
			$userlog      = $user["email"];
			$userpassword = $user["password"]; 
			$userid 	  = $user["id"];
	
			if(strcmp(trim($login), trim($userlog)) == 0)
			{
				$found = true;
		   		break;
			}
		}
			
			
		if ($found == false) {
			return false;
		}

		if (strcmp(trim($userpassword), trim($password)) != 0) {
			return false;
		} 

		return true;

		if ($handle) {
			$found = false;

		    while (($buffer = fgets($handle, 4096)) !== false)
		    {
		     	$arr = explode('|', $buffer);

		     	// if user is added
			    if(strcmp($_POST['login'], $arr[0]) == 0)
				{
					$found = true;
			   		fclose($handle);
			   		break;
				}
			    //array[0] = login

			    if (feof($handle)) {
			        echo "Error: unexpected fgets() fail\n";
			    }			  
		    }	
		}

		if ($found)
		{
			echo("Oops, already exists");
		}
		else
		{				
			$handle = fopen('users.txt', 'a+');
			echo($handle);
			
			var_dump($_POST['login']);
			echo '<br>';
	
			var_dump($_POST['password']);
			echo '<br>';
	
			$log = $_POST['login'];
			$pas = md5($_POST['password']);
			
			fwrite($handle, $log . '|' . $pas . PHP_EOL);
			fclose($handle);
			
			echo("Succes!");
		} 
	}
?>

<br>
<a href="index.php"> Go Home </a>