<?php
include_once '../config.php';
$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Title</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h2>Posts</h2>
				<a class="btn btn-outline-secondary" href="post.php">Back</a>

				<form action="insert-post.php" method="post">
					<div class="form-group">
						<label for="inputTitle">Title</label>
						<input class="form-control" type="text" name="title">
					</div>
					<textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
					<br>
					<input type="submit" class="btn btn-outline-primary" name="" value="Save">
				</form>

				
				
			</div>

			<div class="col-md-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae illum iste, nulla aliquam, voluptates facere ad, quo numquam rerum incidunt cum saepe aliquid sint culpa! Iure explicabo suscipit cupiditate, molestias!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md12">
				<footer>
					<a href="admin/index.php"></a>
					
				</footer>
			</div>
		</div>
	</div>
</body>
</html>