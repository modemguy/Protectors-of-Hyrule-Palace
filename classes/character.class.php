<?PHP
	class Character{
		private $melee = 0; private $ranged = 0; private $healing = 0; 
		private $name = ""; private $description = "";
		
		public function __get($property){
			return $this->$property;
		}
		
		public function __set($property, $value){
			$this->$property = $value;
		}
	}
?>