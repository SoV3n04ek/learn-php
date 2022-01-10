<?php 
	Class User {
		protected $id;
		protected $email;
		protected $password;
		protected $name;
		protected $last_name;

		public function __construct($id = 0, $email = '', $password = '', $name = '', $last_name = '') 
		{
	 		$this->id 		 = $id;
        	$this->email 	 = $email;
        	$this->password  = $password;
        	$this->name 	 = $name;
        	$this->last_name = $last_name;      	
	    }

	    // getters

	    public function getId() 	  { return $this->id; }

	    public function getEmail() 	  { return $this->email; }

	    public function getPassword() { return $this->password; }

	    public function getName() 	  { return $this->name; }

	    public function getLastName() { return $this->last_name; }

	    // setters
	 
	 	public function setId($id) 			    { $this->id = $id; 			     }
	
	    public function setEmail($email)        { $this->email = $email;		 }

	    public function setPassword($password)  { $this->password = $password;   }

	    public function setName($name) 	        { $this->name = $name; 			 }

	    public function setLastName($last_name) { $this->last_name = $last_name; }
	       
	}
?>