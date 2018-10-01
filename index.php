<?php
		require("config/config.php");
		require("lib/db.php");
		$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
		$result = mysqli_query($conn, 'SELECT * FROM topic');
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/style.css">
		<link href="/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
		<body id="target">
		<div class="container">
				<header class="jumbotron text-center">
						<img src="https://download.qnap.com/QPKG/img/python_640x400.png" alt="파이썬" id="logo">
						<h1><a href="/index.php">Python</a></h1>
				</header>
				<div class="row">
						<nav class="col-md-3">
								<ol class="nav nav-pills nav-stacked">
										<?php
												while ($row = mysqli_fetch_assoc($result)) {
														echo '<li><a href="/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
												}
										?>
								</ol>
						</nav>
						<div class="col-md-9">
								<article>
										<?php
												if (empty($_GET['id'])===false) {
														$sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
														$result = mysqli_query($conn, $sql);
														$row = mysqli_fetch_assoc($result);
														echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
														echo strip_tags($row['description'], '<a><h1><h2><h3><ul><ol>(li)');
												}
										?>
								</article>
								<hr>
								<div id="control">
										<div class="btn-group" role="group" aria-label="...">
												<input type="button" value="white" id='white_btn' class="btn btn-default btn-lg"/>
												<input type="button" value="black" id='black_btn' class="btn btn-default btn-lg"/>
										</div>
										<a href="/write.php" class="btn btn-success btn-lg">쓰기</a>
								</div>
						</div>
				</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
		<script src="http://localhost/script.js"></script>
</body>
</html>
