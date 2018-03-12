<html>
<head>
<meta charset="UTF-8">
<title>EX4</title>
</head>

<body>

<?php
if(isset($_GET['nbLignes'])){
	$nbLignes=$_GET["nbLignes"];
	if(isset($_GET['nbColonnes'])){
		$nbColonnes=$_GET["nbColonnes"];

		echo "<table border='1'>
			  <tbody>";
			
		for ($nombre_de_lignes = 0; $nombre_de_lignes <= $nbLignes; $nombre_de_lignes++)
		{			
			if ($nombre_de_lignes % 2 == 1)
			{
			echo "<tr>";
			for ($nombre_de_colonnes = 0; $nombre_de_colonnes <= $nbColonnes; $nombre_de_colonnes++)
			{
				if ($nombre_de_colonnes % 2 == 1)
				{
					echo"<td style='color:red;font-weight:bold;'>{$nombre_de_lignes}-{$nombre_de_colonnes}</td>";
				}
				else{echo"<td style='color:black;font-weight:bold;';>{$nombre_de_lignes}-{$nombre_de_colonnes}</td>";}
			}
			echo "</tr>";
}

			else{
				echo "<tr>";
				for ($nombre_de_colonnes = 0; $nombre_de_colonnes <= $nbColonnes; $nombre_de_colonnes++)
				{
					if ($nombre_de_colonnes % 2 == 1)
					{
						echo"<td style='color:red;'>{$nombre_de_lignes}-{$nombre_de_colonnes}</td>";
					}
					else{echo"<td>{$nombre_de_lignes}-{$nombre_de_colonnes}</td>";}
				}
				echo "</tr>";
			}
		}
		echo"</tbody>
			 </table>";

}}
		
?>
</body>
</html>

