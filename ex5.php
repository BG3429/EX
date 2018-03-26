<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>EX5</title>
</head>
	
<body>

<form method="GET">
	<label for="nbLignes">Lignes : </label>
    <input type="number" value="0" name="nbLignes" id="nbLignes">
    <label for="nbColonnes">Colonnes : </label>
    <input type="number" value="0" name="nbColonnes" id="nbColonnes">
	<input type="submit" value="Valider">
</form>
<?php
include ("functions.php");
$nbLignes=$_GET["nbLignes"];    /*Il faut le mettre pour éviter un message d'erreur*/
$nbColonnes=$_GET["nbColonnes"];   /*Il faut le mettre pour éviter un message d'erreur*/
echo createHtmlTable($nbLignes,$nbColonnes);
?>
</body>
</html>