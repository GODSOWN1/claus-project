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
			<h2>ADD A QUESTION</h2>
	        <form method="POST" action="admin.php">
	        <p>
	        <label>Question number:</label>	
	        <input type="number" name="question_number">
	        </p>
	        
	        <p>
	        <label>Question text:</label>	
	        <input type="text" name="question_text">
	        </p>

	        <p>
	        <label>Choice 1:</label>	
	        <input type="text" name="choice1">
	        </p>	

	        <p>
	        <label>Choice 2:</label>	
	        <input type="text" name="choice2">
	        </p>	

	        <p>
	        <label>Choice 3:</label>	
	        <input type="text" name="choice3">
	        </p>	

	        <p>
	        <label>Choice 4:</label>	
	        <input type="text" name="choice4">
	        </p>	

	        <p>
	        <label>Choice 5:</label>	
	        <input type="text" name="choice5">
	        </p>	

	         <p>
	        <label> Correct Choice:</label>	
	        <input type="number" name="correct_choice">
	        </p>	

	         <p>	
	        <input type="submit" name="submit" value="submit">
	        </p>	
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