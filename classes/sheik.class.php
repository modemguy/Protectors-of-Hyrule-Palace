<?php
	class Sheik extends Character{
		function __construct($name = "Sheik") {
			$this->name = $name;
			$this->melee = 2;
			$this->ranged = 8;
			$this->healing = 4;
			$this->description = "Sheik, Zeldas ninja-like alter ego. She possesses the power of wisdom. She is a master of the bow and marksmanship.";
			$this->img = "sheik.jpg";
		}
	}
?>