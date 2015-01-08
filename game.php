<?php
	session_start();
	
	include("classes/character.class.php");
	include("classes/link.class.php");
	include("classes/lana.class.php");
	include("classes/sheik.class.php");
	include("classes/level.class.php");
	include("classes/levels.class.php");
	include("functions.php");
	
	gameStart();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Protectors of Hyrule Palace</title>
		<link rel="stylesheet" type="text/css" href="css/mayer.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<script>
		function loadLevel(){
			
		}
	</script>
	<body>
	
		<div class="heroes">
			<ul>
				<li><div class="Hero">
					<img src="img/link.jpg">
				</div></li>
				
				<li><div class="follower1">
					<img src="img/lana.jpg">
				</div></li>
				
				<li><div class="follower2">
					<img src="img/sheik.jpg">
				</div></li>
				
				<li><div class="rupees">
					<img src="img/rupee.jpg">
				</div></li>
			</ul>
		</div>
		
		<div class="baddies">
			<ul>
				<li><div class="enemy1">
					<img src="img/ganon.jpg">
				</div></li>
				
				<li><div class="enemy2">
					<img src="img/blank.jpg">
				</div></li>
				
				<li><div class="enemy3">
					<img src="img/blank.jpg">
				</div></li>
			</ul>
		</div>
	
	<div class="main-container">
		<h1>Protectors of Hyrule Palace</h1>
	
		<div class="map">
			<ul>
			<?php
				foreach($_SESSION["levels"] as $level){
					$currLevel = array_search($level, $_SESSION["levels"]);
					if ($currLevel % 5 == 0 && $currLevel != 0){echo "</ul><ul>";}
					
					echo "<li onclick=\"alert('BANA $currLevel');\">$level->name</li>";
				}
			?>
			</ul>
		</div>
	
		<div class="description ">
			text här
		</div>
			
		<div class="navbar">
		<nav class="actions">
				<ul class="combat">
					<li><button type="button">Sword Strike</button></li>
					<li><button type="button">Shoot Arrow</button></li>
					<li><button type="button">Heal</button></li>
				</ul>	
				<ul class="skills">	
					<li><button type="button">Shoot Ice Arrow</button></li>
					<li><button type="button">Shoot Fire Arrow</button></li>
					<li><button type="button">Throw Bomb</button></li>
					<li><button type="button">Jump Boots</button></li>
					<li><button type="button">Use Hookshot</button></li>
				</ul>
		</nav>
		</div>
	<div>
	</body>
</html>