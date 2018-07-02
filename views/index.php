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

				<?php foreach ($blogPosts as $blogPost): ?>
					<div class="blog-post">
						<h2><?php echo $blogPost['title'] ?></h2>
						<p>Jan 1,2020 by <a href=""title="">Ms</a></p>
							<div class="blog-post-image">
								<img src="images/keyboard.jpg"alt="">
							</div>
							<div class="blog-post-content">
								<?php echo $blogPost['content'] ?>
							</div>
					</div>
				<?php endforeach?>
			</div>

			<div class="col-md-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae illum iste, nulla aliquam, voluptates facere ad, quo numquam rerum incidunt cum saepe aliquid sint culpa! Iure explicabo suscipit cupiditate, molestias!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md12">
				<footer>
					<a href="admin/index.php">Admin panel</a>
					
				</footer>
			</div>
		</div>
	</div>
</body>
</html>