<?php
include 'quizzerdb.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP QUIZZER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background-color="#2980b9">
<header>
	<div class="container">
		<h1>PHP QUIZZER</h1>	
	</div>
	</header>
	<main>
		<div class="container">
			<h2>TEST YOUR PHP KNOWLEDGE</h2>
			<p> This is a multiple choice quiz to test your php knowledge</p>
		<ul>
			<li><strong>Number of questions:</strong>5</li>
			<li><strong>Type:</strong>Multiple choice</li>
			<li><strong>Estimated time:</strong>4 minutes</li>
		</ul>
 <a href="question.php?n=1" class="start"> Start quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			copyright  2019; PHP QUIZZER
		</div>
	</footer>
</body>
</html>