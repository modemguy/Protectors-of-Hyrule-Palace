var currlevelName;
var currlevelIntro;
var currlevelLook;
var inBattle = false;
var currMonster;

function setLevel(levelid) {
	if (inBattle) {
		AddStatus("You cannot leave this room while in a battle");
		return;
	}

	var hasMonsters;

	var handler = function (key, value) {
		if (!key) {return;}

		switch (key) {
		case "name":
			currlevelName = value;
			break;
		case "intro":
			currlevelIntro = value;
			break;
		case "look":
			currlevelLook = value;
			break;
		case "hasMonsters":
			hasMonsters = value;
			break;
		}

		UpdateStatus(currlevelName + "<br>" + currlevelIntro);

		for (i = 1; i <= 3; i++) {
			for (j = 1; j <= 7; j++) {
				document.getElementById("enemy" + i + "-heart" + j).style.visibility = "hidden";
			}
		}

		inBattle = false;

		document.getElementById("enemy1").src = "img/blank.jpg";
		document.getElementById("enemy2").src = "img/blank.jpg";
		document.getElementById("enemy3").src = "img/blank.jpg";

		if (hasMonsters) {
			AddStatus("You encounter enemies!");
			index = 1;
			inBattle = true;
			getMonsters(levelid);
		}
	}

	ajaxRequest("../ajax/setlevel.php", {"levelid" : levelid}, handler);
}

var index;
function getMonsters(levelid) {
	var handler = function (key, value) {
		if (!key) {
			return;
		}
		if (key == "0" || key == "1") {
			index++;
			return;
		}

		switch (key) {
		case "img":
			document.getElementById("enemy" + index).src = "img/" + value;
			break;
		case "life":
			drawLife("enemy", index);
			break;
		}
	}
	ajaxRequest("../ajax/getMonsters.php", {"levelid" : levelid}, handler);
}

function drawLife(type, index) {
	var handler = function (key, value) {
		if (!key) {
			return;
		}
		
		if (key == "life") {
			console.log(value);
			for (i = 1; i <= 7; i++) {
				if (i <= value) {
					console.log(type + index + "-heart" + i);
					document.getElementById(type + index + "-heart" + i).style.visibility = "";
				} else {
					document.getElementById(type + index + "-heart" + i).style.visibility = "hidden";
				}
			}
		}
	}
	
	ajaxRequest("../ajax/getLife.php", {"type" : "enemy", "index" : index - 1}, handler);
}

function action(actionType) {
	switch (actionType) {
	case "sword":
		Attack(actionType);
		break;
	}
}

function Attack(actionType) {
	var handler = function (key, value) {
		if (!key) {return;}

		switch (key) {
		case "message":
		}
	}
}

function UpdateStatus(text) {
	document.getElementById("description").innerHTML = text + "<br>";
}

function AddStatus(text) {
	document.getElementById("description").innerHTML += text + "<br>";
}