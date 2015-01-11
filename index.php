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
			function validateForm(){
				var submitOk = true;

				var char1 = document.getElementById("radio1").checked;
				var char2 = document.getElementById("radio2").checked;
				var char3 = document.getElementById("radio3").checked;
				var name  = document.getElementById("name").value;
						
				if (name.length < 4){
					alert("Du måste ha minst 4 bokstäver");
					submitOk = false;
				}
				
				if (!char1 && !char2 && !char3){
					alert("Välj en karaktär");
					submitOk = false;
				}
				
				return submitOk;
			}
			
			function getHeroInfo(hero){
				var handler = function (key,value){
					if (!key){return;}
						document.getElementById(key).innerHTML = key + ":" + value;
						
						if (key == "name"){
							document.getElementById("name").value = value;
						}
					}
				ajaxRequest('../ajax/heroInfo.php', {'hero' : hero}, handler);
}		</script>
	</head>
	
	<body>	
		<div class="main-container">
		
			<h1>Protectors of Hyrule Palace</h1>
			<p>You and your followers stand at the entrance to the evil Ganondorfs dungeon.
			Within lies the treasure you seek: the Tri-Force!
			You must find the key to Ganondorfs chamber and the arrow of light
			which is needed to defeat the dark lord.</p>
			
			<p>Before you enter you must pick a Hero on the left as well as a name below.</p>
			
			<form method="POST" name="char" action="game.php" onsubmit="return validateForm();">
			<input type="text" value="" id="name" name="name">
			
			<div>
				<input onclick="getHeroInfo('link')" type="radio" class="radio_item" value="link" name="item" id="radio1">
				<label class="label_item" for="radio1"> <img src="img/link.jpg"> </label>
		
				<input onclick="getHeroInfo('lana')" type="radio" class="radio_item" value="lana" name="item" id="radio2">
				<label class="label_item" for="radio2"> <img src="img/lana.jpg"> </label>

				<input onclick="getHeroInfo('sheik')" type="radio" class="radio_item" value="sheik" name="item" id="radio3">
				<label class="label_item" for="radio3"> <img src="img/sheik.jpg"> </label>
			</div>
			<div>
				<p id="name"></p>
				<p id="melee"></p>
				<p id="ranged"></p>
				<p id="healing"></p>
				<p id="description"></p>
			</div>
			<input type="submit" value="Start Game">
			</form>
		</div>
	</body>
</html>