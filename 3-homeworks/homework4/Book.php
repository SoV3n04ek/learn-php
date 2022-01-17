<?php
	class Book
	{
		private $id;
		private $name;
		private $description;
		private $author_id;

		public function __construct($id = 0, $name = '', $description = '', $author_id = '') 
		{
	 		$this->id 		   = $id;
        	$this->name        = $name;
        	$this->description = $description;
        	$this->author_id   = $author_id;      	
	    }

	    // getters

	    public function getId() 	     { return $this->id; }

	    public function getName() 	     { return $this->email; }

	    public function getDescription() { return $this->password; }

	    public function getAuthorId() 	 { return $this->author_id; }

	    // setters
	 
	 	public function setId($id) 			         { $this->id = $id; }
	
	    public function setName($name)               { $this->name = $name; }

	    public function setDescription($description) { $this->description = $description;   }

	    public function setAuthorId($name) 	         { $this->name = $name; }
	}
?>