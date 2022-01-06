<?php
	include_once("IModel.php");
	include_once("User.php");

	Class UserModel implements IModel
	{
		const HOST = 'localhost';
		const USER = 'root';
		const PASSWORD = null;
		const DATABASE = 'new_test';
		//const DELETE_QUERY;
		const INSERT_QUERY = "INSERT INTO users (email, password, name, last_name) VALUES";
		const READ_QUERY = "SELECT * FROM `users`";
		// 

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
			$resultq = $resultq->fetch_all(MYSQLI_ASSOC);
			
			if (!isset($resultq))
			{
				$id 	   = $resultq[0]["id"];
				$email 	   = $resultq[0]["email"];
				$password  = $resultq[0]["password"];
				$name 	   = $resultq[0]["name"];
				$last_name = $resultq[0]["last_name"];

				$resultUser = new User($id, $email, $password, $name, $last_name);
				return $resultUser;
			}

			return new User();
		}

		public function readAll()
		{
			$resultq = $this->connect->query(self::READ_QUERY);
			$resultq = $resultq->fetch_all(MYSQLI_ASSOC);
			
			if (isset($resultq))
				return $resultq;  
			
			return false;
		} 

		public function update()
		{

		}

		public function delete()
		{

		}
	}

?>