<?php	
	class Lana extends Character{
		function __construct($name = "Lana") {
			$this->name = $name;
			$this->melee = 2;
			$this->ranged = 4;
			$this->healing = 8;
			$this->description = "Lana the white sorceress. She has a deep knowledge of spells and monsters and is a master healer.";
			$this->img = "lana.jpg";
		}
	}
?>