<?php 

	trait Price{

		public function changePriceByDollars($price, $change)
		{

			return $price + $change;

		}

	}

	class Bmw{

		use Price;

	}

	class Mercedes {

		use Price;

	}

	$bmw1 = new Bmw(); 

	echo $bmw1 -> changePriceByDollars(45000, +3000);
	echo "<br />";

	$mercedes1 = new Mercedes();
	
	echo $mercedes1 -> changePriceByDollars(42000, -2100);

?>