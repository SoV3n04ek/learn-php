<!DOCTYPE html>
<html>
	<head>
		<title>RGB</title>

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	    <style type="text/css">
	 
	    </style>
	</head>

	<body>
		<center>

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
		for($i=0;$i<32;$i++)
		{
		    if($i == date('d')) {
		         echo '<td bgcolor=black><font color=red><b>'.$i.'</b></font></td>';
		    } else {
		        if ($day>7) { $day=1; }
		        $date = date('Y-n')."-".$i;
		        
		        $now_day = (strftime("%w", strtotime($date))==0) ? 7 : strftime("%w", strtotime($date));
		        
		        if($now_day==$day){
		            echo "<td>".$i.'</td>';
		        }
		        else{
		            echo "<td>0</td>";
		        }
		        
		    }
		    if($i == 6 || $i == 13 || $i == 20 || $i == 27) echo '</tr>';
		    $day++;
		}
		echo '</tr><table>';
	};

	drawCalendar(2);

	if (((isset($_POST['Red']) && isset($_POST['Green']) && isset($_POST['Blue']))))
	{			
		
	}