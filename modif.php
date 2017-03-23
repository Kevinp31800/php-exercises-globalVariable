<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>modif</title>
</head>
<body>
	<?php 
	echo"<form action='formulaire2.php' method='POST'>
	<label for='login'>Login</label>	
	<input type='login' name='login' value=".$_COOKIE['login'].">
	<label for='password'>Password</label>
	<input type='password' name='mdp' value=".$_COOKIE['mdp'].">
	<input type='submit' name='submit'>
</form>";
?>
</body>
</html>