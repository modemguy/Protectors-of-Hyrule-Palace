<?PHP
	class Link extends Character{
		function __construct() {
			$this->name = "Link";
			$this->melee = 8;
			$this->ranged = 4;
			$this->healing = 2;
			$this->description = "text";
		}
	}
?>