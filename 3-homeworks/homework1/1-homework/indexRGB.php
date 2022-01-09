<?php 
	$standartRedValue = 0;
	$standartGreenValue = 0;
	$standartBlueValue = 0;

	if (isset($_POST['red']))
		$standartRedValue = $_POST['red'];
	
	if (isset($_POST['green']))
		$standartGreenValue = $_POST['green'];
	
	if (isset($_POST['blue']))
		$standartBlueValue = $_POST['blue'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>RGB</title>

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	    <style type="text/css">
	 		.rectangle {
			  width: 200px;
			  height: 100px;
			}
	    </style>
	</head>

	<body>
		<center>

			<form id="form" action="index.php" method='POST'>
				
				<div class="container">
				  	
				  	<div class="row justify-content-around">
					    <div class="col-5 align-self-start">
					    	<h3>Enter red value:</h3>
					       	<input type="number" name="red" value="<?= $standartRedValue ?>" min="0" max="255">
					       	<h3>Enter green value</h3>
					       	<input type="number" name="green" value="<?= $standartGreenValue ?>" min="0" max="255">
					       	<h3>Enter blue value</h3>
					       	<input type="number" name="blue" value="<?= $standartBlueValue ?>" min="0" max="255">
				    	</div>
				    </div>
			
				</div>

				<br>
				<input type="submit" name="" value="Show">
	
			</form>

<?php 
	if (isset($_POST['red']) && isset($_POST['green']) && isset($_POST['blue']))
	{
		$r = $_POST['red'];
		$g = $_POST['green'];
		$b = $_POST['blue'];

		echo '<h4> rgb(' . $r . ',' . $g  .',' . $b . ')</h4>';
		echo '<div class="rectangle" style="background: rgb(' . $r . ',' . $g . ',' . $b . ');"></div>';
	}
?>

		</center>
	</body>
</html>
