<style type="text/css">
		th, td {
			padding: 10px;
		}
		th {
			background: #606060;
			color: #ffffff;
		}
		tr {
			background: #b5b5b5;
		}
		button {
			padding: 10px;
		}
</style>

<table>
		<tr>
		    <td>Id</td>
		    <td>Title</td>
		    <td>Body</td>
		    <td>user_id</td>
	  	</tr>
<?php 
	include_once("PostModel.php");

	$postmodel = new PostModel();
	$postmodel->connect();

	$posts = $postmodel->readAll();

	foreach ($posts as $post) { 


		?>
	<tr>
	    <td><?= $post["id"];      ?></td>
	    <td><?= $post["title"];   ?></td>
	    <td><?= $post["body"];    ?></td>
	    <td><?= $post["user_id"]; ?></td>
	</tr>


<?php
	} 	
?>
</table>

<br>
<a href="index.php"> Go Home </a>