<?php

	class Car{

		protected $modal;

		public function setModal($modal)

		{

			$this -> modal =$modal;

		}

	}

	class sportsCar extends Car{

		public function hello()

		{

			return "beep! I am a <i>" .$this -> modal."</i><br/>";
		}

	}

	$sportsCar1 = new SportsCar();

	$sportsCar1 -> setmodal('Mercedes');

	echo $sportsCar1 -> hello();

?>