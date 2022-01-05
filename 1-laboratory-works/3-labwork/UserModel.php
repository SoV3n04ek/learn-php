<?php

	Class UserModel implements IModel
	{
		const HOST = 'localhost';
		const USER = 'root';
		const PASSWORD = null;
		const DATABASE = 'new_test';

		protected $connect;

	  	public function __construct() {
	   
	    }

		public function connect()
		{
			$connect = mysql_connect(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
			if (!$connect) {
			    die('Connecting error: ' . mysql_error());
			}
			// use try catch
		}

		// get all 
		// get one : null | first column 
		// 

		// add argument User $user
		public function create()
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

		public function close()
		{
			mysql_close($connect);
		}
	}

?>