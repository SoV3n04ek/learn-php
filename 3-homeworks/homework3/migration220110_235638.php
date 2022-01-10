<?php

class migration220110_235638 extends Migration
{
	const HOST     = 'localhost';
	const USER     = 'root';
	const PASSWORD = null;
	const DATABASE = 'new_test';

	private $connect;

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
        $this->$connect->query("ALTER TABLE users 
        	ADD COLUMN age int AFTER name;");
    }
 
    public function down() {
        $this->$connect->query("ALTER TABLE users
								DROP COLUMN age;");
	}
}

?>