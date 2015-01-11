<?php
	class Game{
	
		function generateItems(){
			$_SESSION["items"] = array(
				new Item(array(
					"name"=>"Magic arrow",
					"description"=>"You found a mysticly glowing arrow",
					"quantity"=>1)),			
				new Item(array(
					"name"=>"Bosskey",
					"description"=>"You found a key.",
					"quantity"=>1)),
				new Item(array(
					"name"=>"Heart",
					"description"=>"You found a heartcontainer, this adds one heart to your lifebar",
					"quantity"=>1)),
				new Item(array(
					"name"=>"Heart",
					"description"=>"You found a heartcontainer, this adds one heart to your lifebar",
					"quantity"=>1)),
				new Item(array(
					"name"=>"Rupee",
					"description"=>"You found 10 rupees",
					"quantity"=>10)),
				new Item(array(
					"name"=>"Rupee",
					"description"=>"You found 20 rupees",
					"quantity"=>20)),
				new Item(array(
					"name"=>"Rupee",
					"description"=>"You found a single rupee",
					"quantity"=>1)),
				new Item(array(
					"name"=>"Rupee",
					"description"=>"You found 50 rupees",
					"quantity"=>50)),
				new Item(array(
					"name"=>"Rupee",
					"description"=>"You found 100 rupees",
					"quantity"=>100)));
		}
		
		function generateChests(){
			shuffle($_SESSION["items"]);
			$count = 0;
			foreach($_SESSION["levels"] as $level){		
				if (!$level->hasChest){continue;}	
				$level->chestContains = $count;
				$count++;
			}
		}
		function generateLevels(){
			$_SESSION["levels"] = array(
				new Level(array(
					"name"=>"Entrance to Dungeon",
					"intro"=>"you enter the dark dungeon leading to your final challenge, the evil lord Ganondorf. The door slams shut behind you, there is no turning back now",
					"look"=>"this room is empty save for the torches lighting up your path deeper into the dungeon.",
					"hasMonsters"=>false, 
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>false)),
				new Level(array(
					"name"=>"Cracked wall",
					"intro"=>"You enter a small room that seems to be no more than a dead end.",
					"look"=>"You spot a crack in the wall. maybe you can break through some how",
					"hasMonsters"=>true,
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>true)),
				new Level(array(
					"name"=>"Broken Bridge",
					"intro"=>"You enter this chamber only to find a gaping hole and the collapsed bridge that once allowed passage to the other side.",
					"look"=>"On the other side you see a chest and a strange bullseye on the wall above it.",
					"hasMonsters"=>true,
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>true)),
				new Level(array(
					"name"=>"Deep water",
					"intro"=>"The first thing you notice in this chamber is the damp air and smell of stagnant water. The source is the large pool of water in the center of the room",
					"look"=>"In the middle of the pool on a small platform is a chest. You could probably swim over to the other side but the ledge there is to high up for you to be able to climb up.",
					"hasMonsters"=>false,
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>true)),
				new Level(array(
					"name"=>"Ice Wall",
					"look"=>"The walls of this room are covered with ice and your breath turns to smoke as you exhale",
					"intro"=>"You peer through the window like surface of the ice and you think you see something on the other side. If only there was a way to break through to the other side",
					"hasMonsters"=>true,
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>true)),
				new Level(array(
					"name"=>"Bottomless pit",
					"look"=>"This chamber consists mostly of a chasm that divides the room and a small ledge on either side.",
					"intro"=>"When you look closer you can se a chest perched on the other side of the chasm. there must be a way to get to the other side.",
					"hasMonsters"=>false,
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>true)),
				new Level(array(
					"name"=>"Main Hallway",
					"look"=>"This large empty hall echoes your presence though the dungeon with each step but seems empty at first glance.",
					"intro"=>"A closer look reveals a chest hidden on a ledge high above you.",
					"hasMonsters"=>true,
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>true)),
				new Level(array(
					"name"=>"Big Room",
					"look"=>"This dark room sends shivers down your spine. It smells of death and the floor is covered in the bones of fallen warriors",
					"intro"=>"In the far end of the room you see a chest.",
					"hasMonsters"=>true,
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>false)),
				new Level(array(
					"name"=>"Entrance to Ganon",
					"look"=>"You see the ominous door leading to the evil lord Ganondorf.",
					"intro"=>"The door won't open without the key",
					"hasMonsters"=>false,
					"hasBoss"=>false,
					"hasChest"=>true,
					"hasChallenge"=>true)),
				new Level(array(
					"name"=>"Ganons Chamber",
					"look"=>"You enter the dark chamber of Ganondorf who towers over you",
					"intro"=>"The walls around you are covered in spikes and the door you came from has disappeared",
					"hasMonsters"=>false,
					"hasBoss"=>true,
					"hasChest"=>false,
					"hasChallenge"=>true,
					"monster"=>new Ganondorf()))
			);
		}
				
		function generateCharacters(){
			switch($_POST["item"]){
				case "link":
					$_SESSION["characters"] = array(
						new Link($_POST["name"]),
						new Lana(),
						new Sheik());
					break;
				case "lana":
					$_SESSION["characters"] = array(
						new Lana($_POST["name"]),
						new Link(),
						new Sheik());
					break;
				case "sheik":
					$_SESSION["characters"] = array(
						new Sheik($_POST["name"]),
						new Link(),
						new Lana());
					break;
			}
		}
		
		function generateMonsters(){	
			foreach($_SESSION["levels"] as $level){
				//Continue loop if monsters cannot spawn on level
				if (!$level->hasMonsters){continue;}

				//Number of monsters (1 to 3)
				$monsterNumber = mt_rand(1,3);
				
				//Create monsters
				for ($counter = 1; $counter <= $monsterNumber; $counter++){
					//Randomize monstertype (0 to 2)
					$monster_type = mt_rand(0,2);
					
					switch ($monster_type){
						case 0:
							//Add monster object to class
							array_push ($level->monsters, new Skull());
							break;
						case 1:
							//Add monster object to class
							array_push ($level->monsters, new Spider());
							break;
						case 2:
							//Add monster object to class
							array_push ($level->monsters, new Skeleton());
							break;
					}
				}
			}
		}
		
		function __construct(){	
			$this->newGame();
		}
		
		function newGame(){
			session_unset();
			$_SESSION["currentLevel"] = 0;
			
			$this->generateLevels();
			$this->generateCharacters();
			$this->generateMonsters();
			$this->generateItems();
			$this->generateChests();
		}
	}
?>