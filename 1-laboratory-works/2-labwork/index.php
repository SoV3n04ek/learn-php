<?php 
	session_start();
?>

<link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>

<?php

$i = 0;
$handle = fopen('users.txt', 'a+');

if ($handle) {

	    while (($buffer = fgets($handle, 4096)) !== false)
	    {
	     	$i++;
	    }
			
	    if (!feof($handle)) {
	    echo "Error: unexpected fgets() fail\n";
		}

	   fclose($handle);
	}

echo('<h1>Count users: '. $i . '</h1>');
echo "User ID is " . $_SESSION["is_logined"] . ".<br><br>";


?>

<br>
<h1 class="btn btn-success"><a href="login.php">Login</a></h1>
<br>
<h1 class="btn btn-success"><a href="addUser.php">Registation</a></h1>
<br>
<h1 class="btn btn-success"><a href="showUsers.php">Show</a></h1>