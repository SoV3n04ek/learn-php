<?php 
	session_start();
?>

<?php
	if (isset($_POST['login']) && isset($_POST['password']))
	{	

		$handle = fopen('users.txt', 'a+');

		if ($handle) {
			$found = false;

			var_dump($_POST['login']);
			echo "<br>";


		    if (feof($handle)) {
		        echo "Error: unexpected fgets() fail\n";
		    }

		    while (($buffer = fgets($handle, 256)) != false)
		    {
			    //array[0] = login
			    //array[1] = pass

		     	$arr = explode('|', $buffer);
		     
		       	// if user is added
	   			if(strcmp($_POST['login'], $arr[0]) == 0)
				{
					$found = true;
			   		fclose($handle);
			   		break;
				}
		    }
		}

		if ($found == false)
		{
			echo("Oops, invalid login");
		}
		else
		{		
			$string = $arr[1]; 
			
			// delete 2 last symbols
			for ($i = 0; $i < 2; $i++)
			{
				$string = str_replace(
					[
					
						"\n",
						"\r",
					],
					'',
					$string);
	   		}		

			if ($string == $_POST['password']) 
			{
				echo "<h1>You have successfully signed in to your account</h1>";
				$_SESSION["login"] = $arr[0];
				$_SESSION["password"] = $arr[1];				
				$_SESSION["logined"] = true;
					
			}
			else
			{
				echo "<br>";
				var_dump($_POST['password']);
				var_dump($string);	
				echo("Entered password is incorrect");
			}
		} 
	}
?>