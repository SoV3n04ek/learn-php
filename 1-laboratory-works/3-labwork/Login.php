<?php include_once 'ILogin.php'; ?>

<?php
	class Login implements ILogin {
		public function isCorrect($login, $password) : bool
		{
			$found = false;

			if (isset($login) && isset($password))
			{
				$handle = fopen('users.txt', 'a+');
				
				if ($handle) 
				{
					echo 'Welcome ' . $login . '!!!';
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
			   			if(strcmp($login, $arr[0]) == 0)
						{
							$found = true;
					   		fclose($handle);
					   		break;
						}
				    }
				}
			}

			if ($found == false) {
				return false;
			}

			$string_pas = $arr[1]; 
			
			// delete 2 last symbols
			for ($i = 0; $i < 2; $i++)
			{
				$string_pas = str_replace(
					[				
						"\n",
						"\r",
					],
					'',
					$string_pas);
	   		}		
						
			if ($string_pas != $password)
			{
				return false;
			} 

			return true;
		}

		public function isLogined() : bool
		{
			if (isset($_SESSION["is_logined"])) {
				return true;
			}

			return false;	
		}
	}
?>