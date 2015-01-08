<?php
	$_SESSION["levels"];
	
	function generateLevels(){
		$_SESSION["levels"] = array(
			new Level("Entrance to Dungeon","INTRO","LOOK"),
			new Level("Cracked wall","INTRO","LOOK"),
			new Level("Broken Bridge","INTRO","LOOK"),
			new Level("Deep water","INTRO","LOOK"),
			new Level("Ice Wall","INTRO","LOOK"),
			new Level("Bottomless pit","INTRO","LOOK"),
			new Level("Main Hallway","INTRO","LOOK"),
			new Level("Big Room","INTRO","LOOK"),
			new Level("Entrance to Ganon","INTRO","LOOK"),
			new Level("Ganons Chamber","INTRO","LOOK"));
	}
?>