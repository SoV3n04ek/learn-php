<?php
	include_once("IModel.php");
	include_once("User.php");

	Class UserModel implements IModel
	{
		const HOST         = 'localhost';
		const USER         = 'root';
		const PASSWORD     = null;
		const DATABASE     = 'new_test';
		const DELETE_QUERY = 'DELETE FROM `users` WHERE id = ';
		const INSERT_QUERY = "INSERT INTO users (email, password, name, last_name) VALUES";
		const READ_QUERY   = "SELECT * FROM `users`";
		const UPDATE_QUERY = "UPDATE `users` SET ";

		protected $connect;

		public function connect()
		{
			$this->connect = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
			if (!$this->connect) {
			    die('Connecting error: ' . mysql_error());
			}
			// use try catch
		}

		public function close()
		{
			mysql_close($connect);
		}
	

		// add argument User $user
		public function create(User $user) : bool
		{
			$sqlquery = self::INSERT_QUERY . "(
				' " . $user->getEmail()    . " ', 
				' " . $user->getPassword() . " ', 
				' " . $user->getName()     . " ',
				' " . $user->getLastName() . " ');";

			$resultq = $this->connect->query($sqlquery);
			
			if ($resultq != false)
			{
			 	return true;
			}
			else {
			  	return false;
			}
		}

		public function readOne() : User
		{
			$resultq = $this->connect->query(self::READ_QUERY);
			
			$result = $resultq->fetch_all(MYSQLI_ASSOC);
			
			if ($result)
			{
				$id 	   = $result[0]["id"];
				$email 	   = $result[0]["email"];
				$password  = $result[0]["password"];
				$name 	   = $result[0]["name"];
				$last_name = $result[0]["last_name"];

				return new User($id, $email, $password, $name, $last_name); 
			}

			return new User();
		}

		public function readAll()
		{
			$resultq = $this->connect->query(self::READ_QUERY);
			
			$resultq = $resultq->fetch_all(MYSQLI_ASSOC);
			
			if ($resultq)
				return $resultq;  
			
			return false;
		} 

		public function update(User $user)
		{
			if (isset($user))
			{
				$sqlquery = self::UPDATE_QUERY . 
				"   `email`     = ' " . $user->getEmail()    . " ',
					`password`  = ' " . $user->getPassword() . " ',
					`name`      = ' " . $user->getName()     . " ',
					`last_name` = ' " . $user->getLastName() . "'
						WHERE id = " . $user->getId() . " ";

				$this->connect->query($sqlquery);

				return true;
			}
			return false;
		}

		public function delete(User $user)
		{
			$resultq = $this->connect->query(self::DELETE_QUERY . $user->getId());
		}
	}

?>