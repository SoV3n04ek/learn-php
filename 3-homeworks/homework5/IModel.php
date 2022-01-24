<?php
	interface IModel
	{
		public function insert();
		public function update();
		public function readAll();
		public function readOne();
		public function delete();
		
	   	public function connect();
	    public function close();
	}
?>
