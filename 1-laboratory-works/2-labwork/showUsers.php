<!-- <style>
	td {
		border: 1px solid black;
	}
</style> 
 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="nofollow" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<?php

function draw($arr)
{
	echo('<table class="ta ble-striped">');
	echo(
		'<tr class="well">
			<td>' . $arr[0] . '</td>
			<td>' . $arr[1] . '</td>
		 </tr>'
		);
	echo('</table>');
};

$handle = fopen('users.txt', 'a+');

if ($handle) {

	    while (($buffer = fgets($handle, 4096)) !== false)
	    {
	     	$arr = explode('|', $buffer);
	        draw($arr);
	    }
			
	    if (!feof($handle)) {
	    echo "Error: unexpected fgets() fail\n";
		}

	   fclose($handle);
	}

?>