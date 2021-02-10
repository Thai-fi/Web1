
(function($) {
	$.fn.myPlugin = function() {
		getTable(this);
	};
})(jQuery);

function getTable(obj){
	var table = "<table id='idTable'>";
	for(var i=0;i<size;i++){
		table += "<tr>";
		for(var j=0;j<size;j++){
			var _id = j + i*3;
			table += "<th id='" + _id + "' class='TableCage' style='border: 1px solid black;width: 100px;height: 100px;background-color: rgba(255, 255, 255, 0.788);padding: 0;cursor: pointer;' onClick='PrintPlayer(this.id)'></th>";
		}
		table += "</tr>";
	}
	table += "</table>";
	table += "<button onClick='Clean(this)'>обнулить</button>"
	obj.append(table);
}

function PrintPlayer(obj){
	Print(obj,Cross, 1, 2);
	checkVictory(1, "green");
	PrintComp();
}

function PrintComp(){
	var compId = Calculate();
	Print(compId, Zero, 2, 1);
	checkVictory(2, "red");
}

function Print(this_id, img, player1, player2){
	if(fieldMatrix[this_id] == 0 & fieldMatrix[this_id] != player2 & (move == player1)){
		$('#'+this_id).append(img);
		fieldMatrix[this_id] = player1;
		if(player1 == 1){
			move = 2;
		}
		else{
			move = 1;
		}
	}
}

function Calculate(){
	var newId = getRand(0, fieldMatrix.length-1);
	var flag=0;
	for(var j=0;j<fieldMatrix.length;j++){
		if(fieldMatrix[j]==0){
			flag=1;
		}
	}
	if(flag){
		if(fieldMatrix[newId] != 0){
			while(fieldMatrix[newId] != 0){
				newId = getRand(0, fieldMatrix.length-1);
			}
		}

	}
	else{
		return fieldMatrix.length+1;
	}
	return newId;
}

function getRand(min, max){
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function Clean(obj){
	parentId = obj.parentNode.id;
	$("#" + parentId).html("");
	getTable($("#" + parentId));
	for(let i=0;i<fieldMatrix.length;i++){
		fieldMatrix[i] = 0;
	}
	move = 1;
}

function checkVictory(player, color){
	for(var i=0; i<=fieldMatrix.length-3;i+=3){
		if(fieldMatrix[i] == player &
			fieldMatrix[i+1] == player &
			fieldMatrix[i+2] == player){
			var k;
			for(var j=0; j<size;j++){
				k = i+j;
				$('#'+k).children('div').css('background-color', color);
			}
			move = 0;
			return false;
		}
	}
	for(var i=0; i<size;i++){
		if(fieldMatrix[i] == player &
			fieldMatrix[i+3] == player &
			fieldMatrix[i+6] == player){
			var k;
			for(var j=0; j<size;j++){
				k = i+j*3;
				$('#'+k).children('div').css('background-color', color);
			}
			move = 0;
			return false;
		}
	}
	if(fieldMatrix[0] == player &
		fieldMatrix[4] == player &
		fieldMatrix[8] == player){
		var k;
		for(var j=0; j<size;j++){
			k = 0+j*4;
			$('#'+k).children('div').css('background-color', color);
		}
		move = 0;
		return false;
	}
	if(fieldMatrix[2] == player &
		fieldMatrix[4] == player &
		fieldMatrix[6] == player){
			var k;
		for(var j=0; j<size;j++){
			k = 2+j*2;
			$('#'+k).children('div').css('background-color', color);
		}
		move = 0;
		return false;
	}
}

var Cross="<div style='width: 100%; height: 100%; background-image:url(img/circle.svg); background-size: cover'></div>";
var Zero="<div style='width: 100%; height: 100%; background-image:url(img/cross.svg); background-size: cover'></div>";
var move = 1;
var size = 3;
var fieldMatrix = [0,0,0,0,0,0,0,0,0];
