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
					    	<h3>Enter month(number from 1 to 12)</h3>
					       	<input type="number" name="month" value="<?= $standart_value ?>" min="1" max="12">
				    	</div>
				    </div>
			
				</div>

				<br>
				<input type="submit" name="" value="Show">
	
			</form>
		</center>
	</body>
</html>

<?php
	function drawCalendar($month)
	{
		$i=0;
		print('<table border=1><tr>');
		$n = array('1'=>'Понедельник','2'=>'Вторник','3'=>'Среда','4'=>'Четверг','5'=>'Пятница','6'=>'Суббота','7'=>'Восресенье');
		
		do{
		    $i++;
		    echo '<td>'.$n[$i].' </td>';
		}while($i < count($n));
		echo '</tr><tr>';
		
		$day=1;
		switch($month)
		{
			case 1: 
				$day = 6;
				break;
			case 2:
				$day = 2;
				break;
			case 3:
 				$day = 2;
				break;
		    case 4:
		        $day = 5;
		        break;
		    case 5:
		    	$day = 7;
		    	break;
		    case 6:
		    	$day = 3;
		    	break;
			case 7:
		    	$day = 5;
		    	break;
   			case 8:
		    	$day = 1;
		    	break;
   			case 9:
		    	$day = 4;
		    	break;
   			case 10:
		    	$day = 4;
		    	break;
   			case 11:
		    	$day = 2;
		    	break;
   			case 12:
		    	$day = 4;
		}

		if ($day > 1)
		{
			for ($i = 1; $i != $day; $i++)
			{
				echo "<td>  </td>";
			}
		}
		$countDaysInMonth = date('t', mktime(0, 0, 0, $month, 1, 2022));

		for($i = 1; $i < $countDaysInMonth + 1; $i++)
		{
		    if($i == date('d') && $month == date('n')) {
		         echo '<td bgcolor=black><font color=white><b>' . $i . '</b></font></td>';
		    } else {
		        if ($day > 7)
		        {
		          $day=1;
		        }

		        $date = date('Y-n')."-".$i;
		        
		        $now_day = (strftime("%w", strtotime($date))==0) ? 7 : strftime("%w", strtotime($date));
		        
		        if ($day == 6 || $day == 7)
		        {
		        	echo '<td class="dayOff"> ' . $i . ' </td>';
		        }
		        else
		        {
		        	echo "<td>" . $i . " </td>";
		        }		        
		    }

		    if($day == 7)
		    	echo '</tr>';
		    $day++;
		}
		echo '</tr><table>';
	};

	if ((isset($_POST['month'])))
	{			
		drawCalendar($_POST['month']);
	}

?>