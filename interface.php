<?php 

	interface Car{

		public function setModal($name);

		public function getModal();
	}

	class miniCar implements Car{

		private $modal;

		public function setModal($name)

		{

			$this -> modal=$name;

		}

		public function getModal()

		{

			return $this -> modal;
		}

		
	}

?>