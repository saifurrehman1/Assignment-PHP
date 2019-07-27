<?php

	class Car{

		public $modal;
		public function getModal()
		{
			return "car modal" .$this -> modal;
		}
	}

	$bmw = new Car();

	$bmw -> modal = "bmw";

	echo $bmw -> getModal();


?>