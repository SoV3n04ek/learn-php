<?php
	//include('functions.php');
	include_once('functions.php');

	//require_once('functions.php'); // fatal error if can't find file
?>

<form id="form1" action="/" method='POST'>
	<input type="hidden" name="cst_token" value="1">
	<div>
		<input type="text" name="login" value="">
	</div>
	<div>
		<input type="password" name="password" value="">
		<input type="submit" name="" value="ClickMe">
	</div>
</form>


<?php
//var_dump($_POST);

if (isset($_POST['login']) && isset($_POST['password']))
{	
	$str = 'vasia|123456'
	$arr = explode('|', $str)
}

/*if (isset($_POST['csr_token']))
{


	var_dump(myFunction());
	$handle = fopen('saved.txt', 'a+');
	fwrite($handle, $_POST['login'].'|'.$_POST['password']);
	fclose($handle);

	$stringToWrite = json_encode($_POST);
	$decoded = json_decode(stringToWrite);
}
*/

?>