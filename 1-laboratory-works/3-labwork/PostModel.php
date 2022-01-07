<?php
	include_once("IModel.php");
	include_once("Post.php");

	Class PostModel implements IModel
	{
		const HOST         = 'localhost';
		const USER         = 'root';
		const PASSWORD     = null;
		const DATABASE     = 'new_test';
		const DELETE_QUERY = 'DELETE FROM `posts` WHERE id = ';
		const INSERT_QUERY = "INSERT INTO posts (title, body, user_id) VALUES";
		const READ_QUERY   = "SELECT * FROM `posts`";
		const UPDATE_QUERY = "UPDATE `posts` SET ";

		protected $connect;

		public function connect()
		{
			$this->connect = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
			if (!$this->connect) {
			    die('Connecting error: ' . mysql_error());
			}
			// use try catch
		}

		public function close()
		{
			mysqli_close($this->connect);
		}	

		// add argument User $user
		public function create(Post $post) : bool
		{
			$sqlquery = self::INSERT_QUERY . "(
				' " . $post->getTitle()    . " ', 
				' " . $post->getBody()     . " ', 
				' " . $post->getUserId()   . " ');";

			$resultq = $this->connect->query($sqlquery);
			
			var_dump($sqlquery);

			if ($resultq != false)
			 	return true;

		  	return false;			
		}

		public function readOne() : Post
		{
			$resultq = $this->connect->query(self::READ_QUERY);
			
			$result = $resultq->fetch_all(MYSQLI_ASSOC);
			
			if ($result)
			{
				$id 	 = $result[0]["id"];
				$title 	 = $result[0]["title"];
				$body    = $result[0]["body"];
				$user_id = $result[0]["user_id"];				

				return new Post($id, $title, $body, $user_id); 
			}

			return new Post();
		}

		public function readAll()
		{
			$resultq = $this->connect->query(self::READ_QUERY);
			
			$resultq = $resultq->fetch_all(MYSQLI_ASSOC);
			
			if ($resultq)
				return $resultq;  
			
			return false;
		} 

		public function update(Post $post)
		{
			if (isset($post))
			{
				$sqlquery = self::UPDATE_QUERY . 
				"   `title`   = ' " . $post->getTitle() . " ',
					`body`    = ' " . $post->getBody()     . " ',
					`user_id` = ' " . $post->getUserId() . "'
						WHERE id = "  . $post->getId() . " ";

				$this->connect->query($sqlquery);

				return true;
			}
			return false;
		}

		public function delete(Post $post)
		{
			$resultq = $this->connect->query(self::DELETE_QUERY . $post->getId());
		}
	}
?>