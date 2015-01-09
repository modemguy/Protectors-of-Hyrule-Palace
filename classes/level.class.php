<?php
	class Level {
		private $name;
		private $intro; private $look;
		private $isMonsters; private $Monsters;
		private $isBoss; private $Monster;

		private $isChest; private $Chest;
		private $isChallenge; private $Challenge;
		
		public function __get($name){
			if (property_exists($this, $name)){
                return $this->$name;
            } else { return "FAIL"; }
		}
		
		public function __set($name, $value){
			if (property_exists($this, $name)){
				$this->$name = $value;
			}
		}
		
		public function __construct($name, $intro, $look){
			$this->name = $name;
			$this->intro = $intro;
			$this->look = $look;
		}
	}
/*
	class skapabana{
        $bana[];
        $bana[0]  = new Level("you enter the dark dungeon leading to your final challenge, the evil lord Ganondorf. The door slams shut behind you, there is no turning back now","this room is empty save for the torches lighting up your path deeper into the dungeon."));
        $bana[1]  = new Level("You enter a small room that seems to be no more than a dead end.","You spot a crack in the wall. maybe you can break through some how"));
        $bana[2]  = new Level("The walls of this room are covered with ice and your breath turns to smoke as you exhale","You peer through the window like surface of the ice and you think you see something on the other side. If only there was a way to break through to the other side"));
        $bana[3]  = new Level("This chamber consists mostly of a chasm that divides the room and a small ledge on either side.","When you look closer you can se a chest perched on the other side of the chasm. there must be a way to get to the other side."));
        $bana[4]  = new Level("This dark room sends shivers down your spine. It smells of death and the floor is covered in the bones of fallen warriors","In the far end of the room you see a chest."));
        $bana[5]  = new Level("The first thing you notice in this chamber is the damp air and smell of stagnant water. The source is the large pool of water in the center of the room","In the middle of the pool on a small platform is a chest. You could probably swim over to the other side but the ledge there is to high up for you to be able to climb up."));
        $bana[6]  = new Level("You enter this chamber only to find a gaping hole and the collapsed bridge that once allowed passage to the other side.","On the other side you see a chest and a strange bullseye on the wall above it. "));
        $bana[7]  = new Level("This large empty hall echoes your presence though the dungeon with each step but seems empty at first glance.","A closer look reveals a chest hidden on a ledge high above you."));
        $bana[8]  = new Level("You see the ominous door leading to the evil lord Ganondorf.","The door won't open without the key"));
        $bana[9]  = new Level("You enter the dark chamber of Ganondorf who towers over you","The walls around you are covered in spikes and the door you came from has disappeared"));
    }
     
 
    class skapamonster{
        $monster[];
        $monster[0] = new monster("Spider","Every hair on your body stands on end as a giant spider drops down from the darkness above.");
        $monster[1] = new monster("Winged Skull","The flapping of leathery wings and the dead stare pierce into you as you see the winged skull flying towards you.");
        $monster[2] = new monster("Skelleton Warrior","The pile of bones on the cold floor begins to stand up as the door behind you closes, brands its sword, and charges towards you.");
        $monster[3] = new monster("The evil Lord Ganondorf stands patiently waiting for you as you enter his chamber. As you draw your weapon he does the same...");
    }
*/
?>