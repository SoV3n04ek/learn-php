<?php
	if (isset($_POST['login']) && isset($_POST['password']))
	{	

		$handle = fopen('users.txt', 'a+');

		if ($handle) {
			$found = false;

		    while (($buffer = fgets($handle, 4096)) !== false)
		    {
		     	$arr = explode('|', $buffer);
		    }

			// if user is added
		    if(strcmp($_POST['login'], $arr[0]))
		    {
		    	$found = true;
		    }
		    //array[0] = login

		    if (!feof($handle)) {
		        echo "Error: unexpected fgets() fail\n";
		    }

		    fclose($handle);
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
			var_dump($_POST['password']);
			fwrite($handle, $_POST['login'].'|'.$_POST['password'].PHP_EOL);
			fclose($handle);
			echo("Succes!");
		} 
	}
?>