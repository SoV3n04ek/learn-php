<?php 
	Class Post {
		protected $id;
		protected $title;
		protected $body;
		protected $user_id;

		public function __construct($id = 0, $title = '', $body = '', $user_id = 0) 
		{
	 		$this->id 	   = $id;
        	$this->title   = $title;
        	$this->body    = $body;
        	$this->user_id = $user_id;   	
	    }

	    public function getId() 	  { return $this->id;      }

	    public function getTitle() 	  { return $this->title;   }

	    public function getBody()     { return $this->body;    }

	    public function getUserId()   { return $this->user_id; }

	    // settors

		public function setId($id) 		   { $this->id = $id;    	    }
	
	    public function setEmail($title)   { $this->title = $title;		}

	    public function setPassword($body) { $this->body = $body;       }

	    public function setName($user_id)  { $this->user_id = $user_id; }
	       
	}
?>