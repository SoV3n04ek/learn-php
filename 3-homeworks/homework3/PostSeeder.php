<?php

include_once("Seeder.php");

class PostSeeder {
    public function fill() {
		const HOST     = 'localhost';
		const USER     = 'root';
		const PASSWORD = null;
		const DATABASE = 'new_test';

		$connect = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
		
		$this->$connect->query("
			INSERT INTO `posts` (`id`, `title`, `body`, `user_id`) VALUES
				(10, ' Meow777 best holiday ', ' body 2 ', 15),
				(11, ' <h1>Title</h1> ', ' <h3>I love some cookes<br>I love some mashrooms</h3> ', 15),
				(29, ' к3ца4у ', ' уцащылз ', 18),
				(30, ' some title ', ' body of this post ', 18),
				(31, ' some title ', ' body of this post ', 18);");
    }
}

?>