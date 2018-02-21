<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EX1</title>
</head>
	<br><a href="?message=Hello">Afficher Hello</a>
	<br><a href="?message=Salut">Afficher Salut</a>
	<br><a href="?message=Coucou">Afficher Coucou</a>
<body>

<?php
$message=$_GET["message"];
	echo "<br>{$message}";

?>
</body>
</html>