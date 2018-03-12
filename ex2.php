<html>
<head>
<meta charset="UTF-8">
<title>EX2</title>
</head>

<body>

<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
	<label for="color">Color (ex:FF0000): </label>
    <input type="text" value="" name="color" id="color">
    <input type="submit" value="Valider">
</form>

<?php
if(isset($_GET['size'])){
	$size=$_GET["size"];
	if(isset($_GET['color'])){
		$color=$_GET["color"];
		echo "<p style='color:#{$color};'><span style='font-size :{$size}px'><b>Message de taille {$size}px</b> </span></p>";
}}

else{
	echo "<p style=color:red;><span style='font-size :30px'><b> Erreur</b> </span></p>";
}

?>
</body>
</html>