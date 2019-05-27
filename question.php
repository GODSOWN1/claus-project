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
			<div class="current">Question 1 of 5</div>
			<p class="question">what does PHP stand for?</p>
			<form method="POST" action="process.php">
				<ul class="choices">
					<li><input type="radio" name="choices" value="1"> hypertext preprocessor</li>
					<li><input type="radio" name="choices" value="1">private homepage</li>
					<li><input type="radio" name="choices" value="1"> personal homepage</li>
					<li><input type="radio" name="choices" value="1">public homepage</li>
				</ul>
				<input type="submit" value="submit">
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			copyright  2019; PHP QUIZZER
		</div>
	</footer>
</body>
</html>