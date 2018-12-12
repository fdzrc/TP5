
			<!DOCTYPE html>
<html>
	
	<head>
<meta charset="utf-8">
	<title>notre captcha</title>
	
	</head>
	<body>
	<h1>code de sécurité:</h1>
			<?php
			session_start();

echo "<img src='script-captchas.php' alt='captchas' />";

?>
		<form action ="index.php" method="POST">
		<label for="text">
		<input type="text" id="titre" name="titre">
			<input type="submit" name="envoyer" value="envoyer">
		</form>
		</body>
		</html>
