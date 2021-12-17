<!DOCTYPE html>
<html>
	<head>
		<title>RGB</title>

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	    <style type="text/css">
	    	button {
	    		margin-top: 20px; 
	    		width: 190px;
	    	}

	    	body {
	    		background: rgb(23,10,247);
				background: linear-gradient(90deg, rgba(23,10,247,1) 0%,
							rgba(9,9,121,1) 35%, 
							rgba(0,212,255,1) 100%);
	    	}
	    	
	    	h3 {
	    		color: white;
	    	}

	    	.sf {
	    		margin: 20px;
	    		background-color: white;
	    		height: 200px;
	    		display: flex; /* establish flex container */
			    justify-content: center; /* center flex items horizontally, in this case */
			    align-items: center; /* center flex items vertically, in this case */
	    	}

	    	input {
	    		width: 190px;
	    	}
	    </style>
	</head>

	<body>
		<center>


			<form id="form1" action="index.php" method='POST'>
				
				<div class="container">
				  	
				  	<div class="row justify-content-around">
					    <div class="col-3 align-self-start">
					    	<h3>Red</h3>
					       	<input type="number" name="Red" value="Red" min="0" max="255">
				    	</div>
				    </div>
				  
				  	<div class="row justify-content-around">
				  		<div class="col-3 align-self-center">
				     		<h3>Green</h3>
				     		<input type="number" name="Green" value="Green" min="0" max="255">
				  		</div>
				  	</div>

					<div class="row justify-content-around">
					  	 <div class="col-3 align-self-end">
					    	 <h3>Blue</h3>
					    	 <input type="number" name="Blue" value="Blue" min="0" max="255">
					    </div>
				 	</div>

					<div class="row justify-content-around">
					  	<div class="col-3 align-self-end">
					    	<button type="submit" value="send" class="btn btn-success" id="submit">Accept</button>
					    </div>
					</div>
				</div>

			</form>
		</center>
	</body>
</html>

<?php
	if (((isset($_POST['Red']) && isset($_POST['Green']) && isset($_POST['Blue']))))
	{			
		$red_value = $_POST['Red'];
		$green_value = $_POST['Green'];
		$blue_value = $_POST['Blue'];

		echo "<div>
				<center>
					<h5 style=\"color: white; margin-top: 20px; \">
						rgb($red_value, $green_value, $blue_value):
					</h5>
				</center>
			 </div>";
		
		echo "<span style=\"background-color: rgb($red_value, $green_value, $blue_value); \" class=\"sf\">
					Full he none no side. Uncommonly surrounded considered for him are its. It we is read good soon. My to considered delightful invitation announcing of no decisively boisterous. Did add dashwoods deficient man concluded additions resources. Or landlord packages overcame distance smallest in recurred. Wrong maids or be asked no on enjoy. Household few sometimes out attending described. Lain just fact four of am meet high.
			 </span>";
	}
?>