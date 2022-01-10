<?php
	$user_id = 0;
	if (isset($_GET["id"]))
		$user_id = $_GET["id"];
?>

<h1>Add post form</h1>
<?php 
	echo '<form id="form" action="addPostHandler.php?id=' . $user_id . ' " method="POST">';
?>
	<h4>Title</h4>
	<div>
		<input type="text" name="title" value="">
	</div>
	<h4>Body</h4>
	<div>
		<input type="text" name="body" value="">
	</div>
	<br>
	<input type="submit" name="" value="ClickMe">
	
</form>

<br>
<a href="index.php"> Go Home </a>