<?php 

	class Car{

		private $model;

		public function setModel($model)

		{

			$this -> model = $model;

		}

		public function getModel()

		{

			return "car model" .$this -> model;

		}
	}

	$bmw = new Car();

	$bmw -> setmodel("bmw");

	echo $bmw -> getModel();


?>