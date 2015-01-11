<?php
	class item {
		private $name; private $description; private $quantity;
		
		public function __get($property){
			return $this->$property;
		}
		
		public function __set($property, $value){
			$this->$property = $value;
		}
		
		function __construct($assort) {
			$this->name  = $assort["name"];
			$this->description  = $assort["description"];
			$this->quantity = $assort["quantity"];
		}
	}
	

?>