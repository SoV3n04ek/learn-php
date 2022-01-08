<?php 
	function showCountries()
	{
		$handle = fopen('countries.txt', 'a+');

	
		if ($handle) {

			echo "<table>
				<tr>
					<td>№</td>
					<td>Country name</td>
				</tr>";

			$countrynum = 1;
		    while (($buffer = fgets($handle, 4096)) !== false)
		    {
		     	echo "<tr>
		     			<td>" . $countrynum . "</td>
		     			<td>" . $buffer . "<td>
		     		 </tr>"; 
		     	$countrynum++;
		    }
				
		    if (!feof($handle)) {
		    	echo "Error: unexpected fgets() fail\n";
			}


		   echo "</table>";
		   fclose($handle);
		}
		else
		{
			echo "Error in opening file";
		}	
	}

	showCountries();
?>