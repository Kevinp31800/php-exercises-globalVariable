<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>server2</title>
</head>
<body>
	<?php 
	session_start();
	echo $_SESSION['prenom']." ";
	echo $_SESSION['nom']." ";
	echo $_SESSION['age'];
	?>
	<a href='server.php'>page precedente</a>"

</body>
</html>