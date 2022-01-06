<?php
	interface ILogin {
		public function isCorrect($name, $password) : bool;
		public function isLogined() : bool; // isset($_SESSION["is_logined"])
	}
?>