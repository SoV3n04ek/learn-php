<?php

class m130627_124312 extends Migration
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
		// use try catch
	}

	public function close() {
		mysql_close($connect);
	}
	
    public function up() {
        $this->$connect->query("");
    }
 
    public function down() {
        $this->$connect->query("");
	}
}

?>