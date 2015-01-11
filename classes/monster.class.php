<?php
	class Monster{
		private $name;
		private $img;
		private $life;
		
		public function __get($property){
			return $this->$property;
		}
			
		public function __set($property, $value){
			$this->$property = $value;
		}
		
		public function __construct($assort){
			$this->name  = $assort["name"];
			$this->life = $assort["life"];
			$this->img  = $assort["img"];
		}
	}
?>