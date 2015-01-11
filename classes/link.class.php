<?php
	class Link extends Character{
		function __construct($name = "Link") {
			$this->name = $name;
			$this->melee = 8;
			$this->ranged = 4;
			$this->healing = 2;
			$this->description = "Link the chosen hero and wielder of the power of courage. With the master sword he is a formidable foe.";
			$this->img = "link.jpg";
		}
	}
?>