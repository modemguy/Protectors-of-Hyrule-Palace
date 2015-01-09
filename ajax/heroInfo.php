<?PHP
	include "../classes/character.class.php";
	
	if (!isset($_POST['hero'])){return;}
		
	switch($_POST['hero']){
		case "link":
			include "../classes/link.class.php";
			$hero = new Link;
			break;
		case "lana":
			include "../classes/lana.class.php";
			$hero = new Lana;
			break;
		case "sheik":
			include "../classes/sheik.class.php";
			$hero = new Sheik;
			break;
		default:
			return;
	}

	$retval = array('name' => $hero->name,'melee' => $hero->melee,'ranged' => $hero->ranged,'healing' => $hero->healing,'description' => $hero->description);
	echo json_encode($retval);
?>