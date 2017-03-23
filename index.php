<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo1</title>
</head>
<body>
	<?php 

	echo $_SERVER['HTTP_USER_AGENT'].' ';
	echo $_SERVER["REMOTE_ADDR"].' ';
	echo $_SERVER["SERVER_NAME"].' ';
	echo "<a href='server.php'>page suivante</a>";

	?>
</body>
</html>