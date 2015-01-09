<?PHP
	include ("../classes/level.class.php");
	session_start();
	
	if (!isset($_POST['levelid'])){return;}
	
	$currLevel = $_POST['levelid'];
	$_SESSION['currLevel'] = $currLevel;
	
	$retval = array(
		'name'  => $_SESSION['levels'][$currLevel]->name,
		'intro' => $_SESSION['levels'][$currLevel]->intro,
		'look'  => $_SESSION['levels'][$currLevel]->look);
			
	echo json_encode($retval);
?>