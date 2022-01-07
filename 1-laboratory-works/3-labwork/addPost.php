<?php
	
	if (isset($_GET["user_id"]))
		$user_id = $_GET["user_id"];
?>

<h1>Add post form</h1>
<?php 
	echo '<form id="form1" action="addPostHandler.php?id=' . $user_id . '" method="POST">';
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