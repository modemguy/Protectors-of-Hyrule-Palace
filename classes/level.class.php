<?php
	class Level {
		private $intro, $look, $chest;
		
		public function __get($name){
			return $this->data[$name];
		}
		
		public function __set($name, $value){
			$this->data[$name] = $value;
		}
		
		public function new($intro, $look, $chest){
			$this->intro = $intro;
			$this->look = $look;
			$this->leave = $leave;
			$this->chest = $chest;
		}
	}

	//L�XA TILL DAVID #1
	class skapabana{
		$bana[];
		$bana[0]  = new Level("you enter the dark dungeon leading to your final challenge, the evil lord Ganondorf. The door slams shut behind you, there is no turning back now","this room is empty save for the torches lighting up your path deeper into the dungeon.")); // ska kunna hopa
		$bana[1]  = new Level("as you enter the chamber you hear something from above. you look up, oh no bats! ","You spot a crack in the wall. maybe you can break through some how"));
		$bana[2]  = new Level("introtext","tittarunt"));
		$bana[3]  = new Level("introtext","tittarunt"));
		$bana[4]  = new Level("introtext","tittarunt"));
		$bana[5]  = new Level("introtext","tittarunt"));
		$bana[6]  = new Level("introtext","tittarunt"));
		$bana[7]  = new Level("introtext","tittarunt"));
		$bana[8]  = new Level("You see the ominous door leading to the evil lord Ganondorf.","The door won't open without the key"));
		$bana[9]  = new Level("You enter the dark chamber of Ganon who towers over you","The walls around you are covered in spikes and the door you came from has disappeared"));
	}
	
	//L�XA TILL DAVID #2
	class skapamonster{
		$monster[];
		$monster[0] = new monster("Namn","Beskrivning");
		$monster[1] = new monster("Namn","Beskrivning");
		$monster[2] = new monster("Dark player","Beskrivning");
	}
?>