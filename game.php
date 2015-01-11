<?php
	if(!$_POST){header("Location: index.php");}
	
	session_start();
	
	function autoloader ($pClassName) {
        include( "classes/" . $pClassName . ".class.php");
    }
	spl_autoload_register("autoloader");
	
	$game = new Game();
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
		<script src="js/game.js"></script>
		<script>
			$( document ).ready(function() {
				setLevel(<?php echo $_SESSION["currentLevel"]; ?>);
			});
		</script>
	</head>
	<body>
		<div class="main-container">
			<div class="heroes">
				<ul>
					<li><div class="Hero">
						<?php
							echo "<img src=\"img/" . $_SESSION["characters"][0]->img . "\">";
						?>
					</div></li>
					
					<div class="hero-heart">
						<li><img class="heart" id="char1-heart1" src="img/heart.jpg"></li>
						<li><img class="heart" id="char1-heart2" src="img/heart.jpg"></li>
						<li><img class="heart" id="char1-heart3" src="img/heart.jpg"></li>
						<li><img class="heart" id="char1-heart4" src="img/heart.jpg"></li>
						<li><img class="heart" id="char1-heart5" src="img/heart.jpg"></li>
						<li><img class="heart" id="char1-heart6" src="img/heart.jpg"></li>
						<li><img class="heart" id="char1-heart7" src="img/heart.jpg"></li>
					</div>
					
					<li><div class="follower1">
						<?php
							echo "<img src=\"img/" . $_SESSION["characters"][1]->img . "\">";
						?>
					</div></li>
					
					<div class="follower1-heart">
						<li><img class="heart" id="char2-heart1" src="img/heart.jpg"></li>
						<li><img class="heart" id="char2-heart2" src="img/heart.jpg"></li>
						<li><img class="heart" id="char2-heart3" src="img/heart.jpg"></li>
						<li><img class="heart" id="char2-heart4" src="img/heart.jpg"></li>
						<li><img class="heart" id="char2-heart5" src="img/heart.jpg"></li>
						<li><img class="heart" id="char2-heart6" src="img/heart.jpg"></li>
						<li><img class="heart" id="char2-heart7" src="img/heart.jpg"></li>
					</div>
					
					<li><div class="follower2">
						<?php
							echo "<img src=\"img/" . $_SESSION["characters"][2]->img . "\">";
						?>
					</div></li>
					
					<div class="follower2-heart">
						<li><img class="heart" id="char3-heart1" src="img/heart.jpg"></li>
						<li><img class="heart" id="char3-heart2" src="img/heart.jpg"></li>
						<li><img class="heart" id="char3-heart3" src="img/heart.jpg"></li>
						<li><img class="heart" id="char3-heart4" src="img/heart.jpg"></li>
						<li><img class="heart" id="char3-heart5" src="img/heart.jpg"></li>
						<li><img class="heart" id="char3-heart6" src="img/heart.jpg"></li>
						<li><img class="heart" id="char3-heart7" src="img/heart.jpg"></li>
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
						<img id="enemy1" src="img/ganon.jpg">
					</div></li>
					
					<div class="enemy1-heart">
						<li><img class="heart" id="enemy1-heart1" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy1-heart2" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy1-heart3" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy1-heart4" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy1-heart5" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy1-heart6" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy1-heart7" src="img/heart.jpg"></li>
					</div>
					
					<li><div class="enemy2">
						<img id="enemy2" src="img/blank.jpg">
					</div></li>
					
					<div class="enemy2-heart">
						<li><img class="heart" id="enemy2-heart1" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy2-heart2" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy2-heart3" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy2-heart4" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy2-heart5" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy2-heart6" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy2-heart7" src="img/heart.jpg"></li>
					</div>
					
					<li><div class="enemy3">
						<img id="enemy3" src="img/blank.jpg">
					</div></li>
					
					<div class="enemy3-heart">
						<li><img class="heart" id="enemy3-heart1" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy3-heart2" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy3-heart3" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy3-heart4" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy3-heart5" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy3-heart6" src="img/heart.jpg"></li>
						<li><img class="heart" id="enemy3-heart7" src="img/heart.jpg"></li>
					</div>
				</ul>
			</div>
		
		<div class="container">
		<h1>Protectors of Hyrule Palace</h1>
	
		<div class="map">
			<ul>
			<?php
				foreach($_SESSION["levels"] as $level){
					$currLevel = array_search($level, $_SESSION["levels"]);
					if ($currLevel % 5 == 0 && $currLevel != 0){echo "</ul><ul>";}
					
					echo "<li onclick=\"setLevel($currLevel)\">$level->name</li>";
				}
			?>
			</ul>
			</div>
		
			<div id="description" class="description "></div>
				
			<div class="navbar">
			<nav class="actions">
					<ul class="combat">
						<li><button type="button" onclick("Action('sword');">Sword Strike<br>5 Rupees</button></li>
						<li><button type="button" onclick("Action('arrow');">Shoot Arrow<br>5 Rupees</button></li>
						<li><button type="button" onclick("Action('heal');">Heal<br>5 Rupees</button></li>
						<li><button type="button" onclick("Action('look');">Look Around<br>Free Action</button></li>
					</ul>	
					<ul class="skills">	
						<li><button type="button" onclick="">Shoot Ice Arrow<br>10 Rupees</button></li>
						<li><button type="button" onclick="">Shoot Fire Arrow<br>10 Rupees</button></li>
						<li><button type="button" onclick="">Throw Bomb<br>10 Rupees</button></li>
						<li><button type="button" onclick="">Jump Boots<br>10 Rupees</button></li>
						<li><button type="button" onclick="">Use Hookshot<br>10 Rupees</button></li>
					</ul>
					<ul class="skills">
					<li><button type="button" onclick="">Arrow of Light<br>50 Rupees</button></li>
					<li><button type="button" onclick="">Open Chest<br>Free Action</button></li>
					<li><button type="button" onclick="">Boss Key<br>Free Action</button></li>
					</ul>
			</nav>
			</div>
		</div>
	</body>

			<script>

			
			
			
		</script>
					
	
</html>