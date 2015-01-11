<?php
	function autoloader ($pClassName) {
        include( "../classes/" . strtolower($pClassName) . ".class.php");
    }
	spl_autoload_register("autoloader");
	
	session_start();
	
	if (!isset($_POST['levelid'])){return;}
	
	$retval = array();

	foreach($_SESSION["levels"][$_POST["levelid"]]->monsters as $monster){
		$retval[] = array(
			"name" => $monster->name,
			"life" => $monster->life,
			"img" => $monster->img);
	}
	
	echo json_encode($retval);
	
?>