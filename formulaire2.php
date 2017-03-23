<?php 
setcookie(login,$_POST['login']);
setcookie(mdp,$_POST['mdp']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>connection</title>
</head>
<body><h2>Welcome</h2>
	<?php 
	echo $_COOKIE['login']." ".$_COOKIE['mdp'];
	?>
	<a href='modif.php'>modif cookie</a>
</body>
</html>