<html>
<head>
<meta charset="UTF-8">
<title>EX2</title>
</head>

<body>

<form method="GET">
	<label for="message">Message : </label>
    <input type="text" value="" name="message" id="message">
    <label for="size">Size : </label>
    <input type="number" value="12" name="size" id="size">
	<label for="color">Color (ex:FF0000): </label>
    <input type="text" value="000000" name="color" id="color">
    <input type="submit" value="Valider">

</form>


	<br><a href="?message=Hello&size=15&color=FF0000">Afficher Hello</a>
	<br><a href="?message=Salut&size=30&color=00FF00">Afficher Salut</a>
	<br><a href="?message=Coucou&size=50&color=0000FF">Afficher Coucou</a>

	
<?php
if(isset($_GET['size'])){
	$size=$_GET["size"];
	if(isset($_GET['color'])){
		$color=$_GET["color"];
		if(isset($_GET['message'])){
			$message=$_GET["message"];
			echo "<p style='color:#{$color};'><span style='font-size :{$size}px'><b>{$message} ({$size}px ; #{$color})</b> </span></p>";
}}}

else{
	echo "<p style=color:red;><span style='font-size :30px'><b> Erreur</b> </span></p>";

}

?>
</body>
</html>