function getHeroInfo(hero){
	var data = {"hero": hero};
	$.ajax({
		url: '../ajax/heroInfo.php', type: 'POST', datatype: 'json', data: data,
		success: function(data) {
			var parse = JSON.parse(data, function (key,value){
				if (!key){return;}
				document.getElementById(key).innerHTML = key + ":" + value;
			});
		}
	});
}

function loadLevel(levelID){
	var data = {"levelid" : levelID};
	$.ajax({
		url: '../ajax/levelInfo.php', type: 'POST', datatype: 'json', data: data,
		success: function(data) {
			var parse = JSON.parse(data, function (key,value){
				if (!key){return;}
				
				if (key=="name"){
					currLevel_name = value;
				} else if (key=="look"){
					currLevel_look = value;
				} else {
					currLevel_intro = value;
				}
				
				document.getElementById('description').innerHTML = currLevel_name + "<br/>" + currLevel_intro;
				//document.getElementById('description').innerHTML = value;
			});
		}
	});
}