<?php
	$_SESSION["levels"];
	$_SESSION["currentlevel"] = 0;

	function gameStart(){
		generateLevels();
		
	}
	
	
	
	function generateLevels(){
		$_SESSION["levels"] = array(
			new Level("Entrance to Dungeon","you enter the dark dungeon leading to your final challenge, the evil lord Ganondorf. The door slams shut behind you, there is no turning back now","this room is empty save for the torches lighting up your path deeper into the dungeon."),
			new Level("Cracked wall","You enter a small room that seems to be no more than a dead end.","You spot a crack in the wall. maybe you can break through some how"),
			new Level("Broken Bridge","You enter this chamber only to find a gaping hole and the collapsed bridge that once allowed passage to the other side.","On the other side you see a chest and a strange bullseye on the wall above it."),
			new Level("Deep water","The first thing you notice in this chamber is the damp air and smell of stagnant water. The source is the large pool of water in the center of the room","In the middle of the pool on a small platform is a chest. You could probably swim over to the other side but the ledge there is to high up for you to be able to climb up."),
			new Level("Ice Wall","The walls of this room are covered with ice and your breath turns to smoke as you exhale","You peer through the window like surface of the ice and you think you see something on the other side. If only there was a way to break through to the other side"),
			new Level("Bottomless pit","This chamber consists mostly of a chasm that divides the room and a small ledge on either side.","When you look closer you can se a chest perched on the other side of the chasm. there must be a way to get to the other side."),
			new Level("Main Hallway","This large empty hall echoes your presence though the dungeon with each step but seems empty at first glance.","A closer look reveals a chest hidden on a ledge high above you."),
			new Level("Big Room","This dark room sends shivers down your spine. It smells of death and the floor is covered in the bones of fallen warriors","In the far end of the room you see a chest."),
			new Level("Entrance to Ganon","You see the ominous door leading to the evil lord Ganondorf.","The door won't open without the key"),
			new Level("Ganons Chamber","You enter the dark chamber of Ganondorf who towers over you","The walls around you are covered in spikes and the door you came from has disappeared"));
	}
?>