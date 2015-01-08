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
