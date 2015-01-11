<?php
	class Level {
		private $name;
		private $intro; private $look;
		private $hasMonsters; private $monsters = array();
		private $hasBoss; private $boss;

		private $hasChest; private $chestContains;
		private $hasChallenge; private $Challenge;
		
		public function & __get($name){
			if (property_exists($this, $name)){
                return $this->$name;
            } else { return "FAIL"; }
		}
		
		public function __set($name, $value){
			if (property_exists($this, $name)){
				$this->$name = $value;
			} else { return "FAIL"; }
		}
		
		public function __construct($assort){
			$this->name  = $assort["name"];
			$this->intro = $assort["intro"];
			$this->look  = $assort["look"];
			$this->hasMonsters = $assort["hasMonsters"];
			$this->hasBoss = $assort["hasBoss"];
			$this->hasChest = $assort["hasChest"];
			$this->hasChallenge = $assort["hasChallenge"];
			$this->monsters = array();
		}
	}
?>