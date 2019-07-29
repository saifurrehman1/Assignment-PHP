<?php 

	interface Car{

		public function setModal($name);

		public function getModal();
	}

	interface Vehicle {

		public function setHasWheels($bool);

		public function getHasWheels();

	}



	class miniCar implements Car,Vehicle {

		private $modal;

		public function setModal($name)

		{

			$this -> modal=$name;

		}

		public function getModal()

		{

			return $this -> modal;
		}

		public function setHasWheels($bool)

		{

			$this -> hasWheels = $bool;

		}
 		
 		public function getHasWheels()

 		{
 			return ($this -> hasWheels)? "has wheels" : "no wheels";

 		}

	}

?>