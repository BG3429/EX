<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EX5</title>
</head>
	
<body>
<form method="GET">
	<label for="nbLignes">Lignes : </label>
    <input type="number" value="" name="nbLignes" id="nbLignes">
    <label for="nbColonnes">Colonnes : </label>
    <input type="number" value="" name="nbColonnes" id="nbColonnes">
	<input type="submit" value="Valider">
</form>
<?php
include ("functions.php");

echo createHtmlTable($nbLignes,$nbColonnes);
?>
</body>
</html>