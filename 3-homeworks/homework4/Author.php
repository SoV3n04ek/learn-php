<?php 
	Class Author {
		protected $id;
		protected $name;
		protected $biography;
		protected $last_name;

		public function __construct($id = 0, $name = '', $last_name = '', $biography = '') 
		{
	 		$this->id 		 = $id;
        	$this->biography  = $biography;
        	$this->name 	 = $name;
        	$this->last_name = $last_name;      	
	    }

	    // getters

	    public function getId() 	  { return $this->id; }

	    public function getBiography() { return $this->biography; }

	    public function getName() 	  { return $this->name; }

	    public function getLastName() { return $this->last_name; }

	    // setters
	 
	 	public function setId($id) 			    { $this->id = $id; 			     }

	    public function setBiography($biography)  { $this->biography = $biography;   }

	    public function setName($name) 	        { $this->name = $name; 			 }

	    public function setLastName($last_name) { $this->last_name = $last_name; }
	       
	}
?>