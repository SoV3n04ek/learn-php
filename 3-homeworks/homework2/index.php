<?php 
	function save($country) : bool
	{
		if (isAlreadyExist($country))
			return false;

		$handle = fopen('countries.txt', 'a+');
		fwrite($handle, $country . PHP_EOL);
		
		fclose($handle);

		return true;
	}

	function isAlreadyExist($country) : bool
	{
		$handle = fopen('countries.txt', 'a+');

		if ($handle) {
			$found = false;

		    while (($buffer = fgets($handle, 4096)) !== false)
		    {
		     	// if user is added
			    if(strcmp($country, trim($buffer)) == 0)
				{
					$found = true;
			   		break;
				}

			    if (feof($handle)) {
			        echo "Error: unexpected fgets() fail\n";
			    }			  
		    }	
		}
		
		fclose($handle);

		return $found;
	}

	if (isset($_POST["country"]))
	{
		$country = trim($_POST["country"]);

		if (save($country))
		{
			echo $country . " successful saved to the dictionary";
		}
		else
		{
			echo "Error in saving";
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Country dictionary</title>

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	    <style type="text/css">

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
				<input class="btn-success btn-lg" type="submit" name="" value="Send">
	
			</form>
			
			<br>

			<a href="showCountries.php">Show</a></h1>
		</center>
	</body>
</html>