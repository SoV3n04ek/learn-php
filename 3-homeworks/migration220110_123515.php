<?php

class migration220110_124312 extends Migration
{
	const HOST     = 'localhost';
	const USER     = 'root';
	const PASSWORD = null;
	const DATABASE = 'new_test';

	private $connect = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE);

	public function connect()
	{
		$this->connect = new mysqli(self::HOST, self::USER,
								self::PASSWORD, self::DATABASE);
		if (!$this->connect) {
		    die('Connecting error: ' . mysql_error());
		}
	}

	public function close() {
		mysql_close($connect);
	}
	
    public function up() {
        $this->$connect->query("
        	CREATE TABLE users (
			    id int NOT NULL AUTO_INCREMENT,
			    email varchar(64),
			    password varchar(64),
			    name varchar(64),
			    last_name varchar(64),
			    PRIMARY KEY (id)
			);");
    }
 
    public function down() {
        $this->$connect->query("DROP TABLE users;");
	}
}

?>