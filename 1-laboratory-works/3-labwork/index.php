<?php 
include_once("UserModel.php");
include_once("PostModel.php");
?>

<!DOCTYPE html>
<html>
<head>
 	<title>Mysqli test</title>
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
</head>
<body>

<table>
	<tr>
		<td>Id</td>
		<td>Title</td>
		<td>Body</td>
		<td>user_id</td>
	</tr>

<?php 

$postModel = new PostModel();
$postModel->connect();
// $post = new Post(0, "some title", "some body", 15);
// $postModel->create($post);
$posts = $postModel->readAll();
var_dump($posts);

foreach ($posts as $post) { ?>

<tr>
		<td><?= $post["id"]; ?></td>
		<td><?= $post["title"]; ?></td>
		<td><?= $post["body"]; ?></td>
		<td><?= $post["user_id"]; ?></td>
	</tr>

<?php } ?>
</table>
</body>
</html>