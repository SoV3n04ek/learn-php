<?php 
include_once 'ILogin.php';
include_once 'UserModel.php';
?>

<?php
	class Login implements ILogin {
		public function isCorrect($login, $password) : bool
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