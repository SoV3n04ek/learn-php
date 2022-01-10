<?php

class migration220110_234019 extends Migration
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
        $this->$connect->query("
        	CREATE TABLE posts (
			    id int NOT NULL AUTO_INCREMENT,
			    body text NOT NULL,
			    title varchar(64),
			    name varchar(64),
			    user_id int NOT NULL,
			    PRIMARY KEY (id),
    			FOREIGN KEY (user_id)  REFERENCES users (id)
			);");
    }
 
    public function down() {
        $this->$connect->query("DROP TABLE posts;");
	}
}

?>