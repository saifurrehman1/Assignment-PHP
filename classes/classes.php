<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Opps Classes</title>
</head>
<body>

	<?php

	class Car {

		public $comp;
		public $color = 'blue';
		public $hasSunRoof = true;
		public function hello()

		{
			return "lights";
		}
	}


	$kawasaki = new Car();
	$lamborgini = new Car();


	echo $kawasaki -> color;
	echo "<br />";
	echo $lamborgini -> color;
	



	$kawasaki -> color = 'black';
	echo "<br />"; 
	$lamborgini -> color = 'red';
	echo "<br />"; 
	$kawasaki -> comp = "kawasaki";
	echo "<br />"; 
	$lamborgini -> comp = "lamborgini";


	echo $kawasaki -> color;
	echo "<br />"; 
	echo $kawasaki -> comp;
	echo "<br />";
	echo $lamborgini -> color;
	echo "<br />"; 
	echo $lamborgini -> comp;
	echo "<br />"; 
	echo $kawasaki -> hello();
	echo "<br />"; 
	echo $lamborgini -> hello();





	?>

</body>
</html>