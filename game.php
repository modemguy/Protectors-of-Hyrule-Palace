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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/ajax.js"></script>
		<script>
			var currLevel_name;
			var currLevel_intro;
			var currLevel_look;
		</script>
	</head>
	<body>
	
<div class="heroes">
			<ul>
				<li><div class="Hero">
					<img src="img/link.jpg">
				</div></li>
				
				<div class="hero-heart">
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
				</div>
				
				<li><div class="follower1">
					<img src="img/lana.jpg">
				</div></li>
				
				<div class="follower1-heart">
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
				</div>
				
				<li><div class="follower2">
					<img src="img/sheik.jpg">
				</div></li>
				
				<div class="follower2-heart">
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
				</div>
				
				<li><div class="rupees">
					<img src="img/rupee.jpg">
					<p class="count">50</p>
				</div></li>
			</ul>
		</div>
		
		<div class="baddies">
			<ul>
				<li><div class="enemy1">
					<img src="img/ganon.jpg">
				</div></li>
				
				<div class="enemy1-heart">
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
				</div>
				
				<li><div class="enemy2">
					<img src="img/blank.jpg">
				</div></li>
				
				<div class="enemy2-heart">
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
				</div>
				
				<li><div class="enemy3">
					<img src="img/blank.jpg">
				</div></li>
				
				<div class="enemy3-heart">
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
					<li><img class="heart" src="img/heart.jpg"></li>
				</div>
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
					
					echo "<li onclick=\"loadLevel($currLevel)\">$level->name</li>";
				}
			?>
			</ul>
		</div>
	
		<div id="description" class="description "></div>
			
		<div class="navbar">
		<nav class="actions">
				<ul class="combat">
					<li><button type="button">Sword Strike<br>5 Rupees</button></li>
					<li><button type="button">Shoot Arrow<br>5 Rupees</button></li>
					<li><button type="button">Heal<br>5 Rupees</button></li>
					<li><button type="button">Look Around<br>Free Action</button></li>
				</ul>	
				<ul class="skills">	
					<li><button type="button">Shoot Ice Arrow<br>10 Rupees</button></li>
					<li><button type="button">Shoot Fire Arrow<br>10 Rupees</button></li>
					<li><button type="button">Throw Bomb<br>10 Rupees</button></li>
					<li><button type="button">Jump Boots<br>10 Rupees</button></li>
					<li><button type="button">Use Hookshot<br>10 Rupees</button></li>
				</ul>
		</nav>
		</div>
	<div>
	</body>
</html>