<?php

	trait price{

		public function changePriceByDollars($price, $change)

		{

			return $price + $change;

		}
	}

	trait SpecialSell{

		public function annonunceSpecialSell()

		{

			return __CLASS__."on special sell";

		}

	}

	class kawasaki{

		use price;

		use SpecialSell;

	}

	$kawasaki1 = new Kawasaki();

	echo $kawasaki1 -> changePriceByDollars(42000, -2100);
	echo "<br />";

	echo $kawasaki1 -> annonunceSpecialSell();


?>