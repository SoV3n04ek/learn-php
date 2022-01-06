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
		//const INSERT_QUERY;
		//const READ_QUERY;
		// 

		protected $connect;

		public function connect()
		{
			$connect = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
			if (!$connect) {
			    die('Connecting error: ' . mysql_error());
			}
			// use try catch
		}

		public function close()
		{
			mysql_close($connect);
		}
		// get all 
		// get one : null | first column 
		// 

		// add argument User $user
		public function create(User $user)
		{
			$sql = "INSERT INTO users (id, email, password, firstname, lastname) 
					VALUES (1, 'john@example.com', 'adsolp12123qaWsq', 'John', 'Doe')";

			if (mysqli_query($sql)
			{
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

		public function read()
		{
			
		}

		public function update()
		{

		}

		public function delete()
		{

		}
	}

?>