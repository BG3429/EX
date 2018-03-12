<html>
<head>
<meta charset="UTF-8">
<title>EX3</title>
</head>

<body>

<form method="POST">
	<label for="message">Message : </label>
    <textarea name="message" rows="1" cols="50" id="message">Vous pouvez écrire quelque chose ici.</textarea>
    <label for="size">Size : </label>
    <input type="number" value="12" name="size" id="size">
	<label for="color">Color (ex:FF0000): </label>
    <input type="text" value="000000" name="color" id="color">
    <input type="submit" value="Valider">

</form>

	
<?php
if(isset($_POST['size'])){
	$size=$_POST["size"];
	if(isset($_POST['color'])){
		$color=$_POST["color"];
		if(isset($_POST['message'])){
			$message=$_POST["message"];
			echo "<p style='color:#{$color};'><span style='font-size :{$size}px'><b>{$message} ({$size}px ; #{$color})</b></span></p>";
}}}

else{
	echo "<p style=color:red;><span style='font-size :30px'><b> Erreur</b> </span></p>";

}

?>
</body>
</html>