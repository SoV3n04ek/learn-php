<?php

include_once("Seeder.php");

class UserSeeder {
    public function fill() {
		const HOST     = 'localhost';
		const USER     = 'root';
		const PASSWORD = null;
		const DATABASE = 'new_test';

		$connect = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
		
		$this->$connect->query("
				INSERT INTO `users` (`id`, `email`, `password`, `name`, `last_name`) VALUES
				(15, ' mail@rambler.ru ', ' 23945r0qi ', ' IvanBebra88228 ', ' Zolo1814'),
				(16, 'mail1251@rambler.ru', ' e49iw3rtfqo0 ', ' Bibika ', ' Kafedori '),
				(18, ' vanya122112@gmail.con ', ' r392weq0 ', ' Vanya ', ' Popenko '),
				(21, ' waei0fr4@gmail.cpm ', ' 04wefiopa-rt] ', ' Ipen ', ' Asalaiomov ');");

    }
}

?>