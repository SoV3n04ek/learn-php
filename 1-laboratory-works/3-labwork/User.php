<?php 
	Class User {
		protected $id;
		protected $email;
		protected $password;
		protected $name;
		protected $last_name;

		public function __construct($id = 0, $email = null, $password = null, $name = null, $last_name = null) 
		{
	 		
	 		$this->id 		 = $id;
        	$this->email 	 = $email;
        	$this->password  = $password;
        	$this->name 	 = $name;
        	$this->last_name = $last_name;
        	
	    }

	    public function getId() 	  { return $id; }

	    public function getEmail() 	  { return $email; }

	    public function getPassword() { return $password; }

	    public function getName() 	  { return $name; }

	    public function getLastName() { return $last_name; }

	    // settors
	 
	 	public function setId($id) {	
	    	$this->id = $id;
	    }

	    public function setEmail($email) {
	    	$this->email = $email;
	    }

	    public function setPassword($password) {
	    	$this->password = $password;
	    }

	    public function setName($name) {
	    	$this->name = $name;
	    }

	    public function setLastName($last_name) {
			$this->last_name = $last_name;
	    }

	       
	}
?>