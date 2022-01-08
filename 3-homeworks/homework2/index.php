<?php 
	$standart_value = 1;
	
	if (isset($_POST['month']))
		$standart_value = $_POST['month'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>RGB</title>

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	    <style type="text/css">
	 		.dayOff {
	 			background-color: green;
	 		}
	    </style>
	</head>

	<body>
		<center>

			<form id="form" action="index.php" method='POST'>
				
				<div class="container">
				  	
				  	<div class="row justify-content-around">
					    <div class="col-5 align-self-start">
					    	<h3>Enter country name</h3>
					       	<input type="text" name="country" value="">
				    	</div>
				    </div>
			
				</div>

				<br>
				<input type="submit" name="" value="Send">
	
			</form>
		</center>
	</body>
</html>