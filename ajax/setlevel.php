<?PHP
	function autoloader ($pClassName) {
        include( "../classes/" . strtolower($pClassName) . ".class.php");
    }
	spl_autoload_register("autoloader");
	
	session_start();
	
	if (!isset($_POST['levelid'])){return;}
	
	$_SESSION["currentLevel"] = $_POST["levelid"];

	$retval = array(
		'name'  => $_SESSION['levels'][$_SESSION["currentLevel"]]->name,
		'intro' => $_SESSION['levels'][$_SESSION["currentLevel"]]->intro,
		'look'  => $_SESSION['levels'][$_SESSION["currentLevel"]]->look,
		'hasMonsters' => $_SESSION['levels'][$_SESSION["currentLevel"]]->hasMonsters);

	echo json_encode($retval);
?>