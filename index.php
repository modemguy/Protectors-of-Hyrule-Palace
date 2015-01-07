<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Protectors of Hyrule Palace</title>
		<link rel="stylesheet" type="text/css" href="css/mayer.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			function getHeroInfo(hero){
				var data = {"hero": hero};
				$.ajax({
					url: 'heroInfo.php', type: 'POST', datatype: 'json', data: data,
					success: function(data) {
						var parse = JSON.parse(data, function (key,value){
							if (!key){return;}
							document.getElementById(key).innerHTML = key + ":" + value;
						});
					}
				});
			}
			
			function validateForm(){
				alert(":D");
				return false;
			}
		</script>
	</head>
	
	<body>
		
	<div class="main-container">
	
		<h1>Protectors of Hyrule Palace</h1>
		<p>You and your followers stand at the entrance to the evil Ganondorfs dungeon.
		Within lies the treasure you seek: the Tri-Force!
		You must find the key to Ganondorfs chamber and the arrow of light
		which is needed to defeat the dark lord.</p>
		
		<p>Before you enter you must pick a Hero on the left as well as a name below.</p>
		
		<form name="char" action="game.php" onsubmit="return validateForm();">
		<input type="text" value="Link" id="name" name="name">
		
		<div>
			<input onclick="getHeroInfo('link')" type="radio" class="radio_item" value="" name="item" id="radio1">
			<label class="label_item" for="radio1"> <img src="img/link.jpg"> </label>
    
			<input onclick="getHeroInfo('lana')" type="radio" class="radio_item" value="" name="item" id="radio2">
			<label class="label_item" for="radio2"> <img src="img/lana.jpg"> </label>

			<input onclick="getHeroInfo('sheik')" type="radio" class="radio_item" value="" name="item" id="radio3">
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