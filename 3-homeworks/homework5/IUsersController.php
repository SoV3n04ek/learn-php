<?php
	interface IUsersController
	{
		// вынести в autho controller
		public function login();
		public function logout();
		public function resetPassword();
	}
?>