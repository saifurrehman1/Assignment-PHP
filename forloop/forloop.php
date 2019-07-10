<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>

	<style type="text/css">
		
		h1{
			color: blue;
		}

	</style>
<body>

	<?php

	$colors = array("red", "green", "blue", "yellow");

	$lenght = count($colors);

	for ($i = 0; $i < $lenght; $i++){
		echo "<h1>$colors[$i]</h1>";
		echo"<br>";
		echo"<br>";
	}

	?>


</body>
</html>