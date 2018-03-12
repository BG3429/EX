<html>
<head>
<meta charset="UTF-8">
<title>EX2</title>
</head>

<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>

<body>

<?php

echo "<div style='font-size: {$size}px;'>Message de taille {$size}px en rouge</div>";

?>
</body>
</html>