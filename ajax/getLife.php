<?php
	function autoloader ($pClassName) {
        include( "../classes/" . strtolower($pClassName) . ".class.php");
    }
	spl_autoload_register("autoloader");
	
	session_start();

	if (!isset($_POST['type']) || !isset($_POST['index'])){return;}
	
	if ($_POST["type"] == "enemy"){
		$retval = array("type" => $_POST["type"], "life" => $_SESSION["levels"][$_SESSION["currentLevel"]]->monsters[$_POST["index"]]->life);
	} else if ($_REQUEST["type"] == "character"){
		$retval = array("type" => $_POST["type"], "life" => $_SESSION["characters"][$_POST["index"]]->life);
	}
	
	echo json_encode($retval);
?>