
(function($) {
	$.fn.TicTac = function(){

		this.css("margin", "auto 0")

		$('<div/>', {
			id: 'chooseFigure',
		}).css({'max-width': '80px'}).appendTo(this)

		$('<input type="radio" id="chooseCross" name="chooseRadio" value="cross" onClick="Clean()" checked>').appendTo('#chooseFigure');
		$('<label for="chooseCross">Крестик</label>').appendTo('#chooseFigure');
		$('<input type="radio" id="chooseZero" name="chooseRadio" value="circle" onClick="Clean()">').appendTo('#chooseFigure');
		$('<label for="chooseZero">Нолик</label>').appendTo('#chooseFigure');

		$('<div/>', {
			id: 'firstMove',
		}).css({'max-width': '140px', 'margin-top': '30px'}).appendTo(this)

		$('<input type="radio" id="first" name="firstMoveRadio" value="player" onClick="Clean()" checked>').appendTo('#firstMove');
		$('<label for="first">Ходить первым</label>').appendTo('#firstMove');
		$('<input type="radio" id="second" name="firstMoveRadio" value="comp" onClick="Clean()">').appendTo('#firstMove');
		$('<label for="second">Ходить вторым</label>').appendTo('#firstMove');

		$('<table />', {
			id: 'idTable',
		}).appendTo(this)

		for(var i=0;i<size;i++){

			$('<tr />', {
				id: 'Row'+ (i+1),
			}).appendTo($('#idTable'))

			for(var j=0;j<size;j++){

				$('<th/>', {
					id: (j+i*size),
					onClick: 'PrintPlayer(this.id)',
					class: 'tableCage',
				}).css({
					'width': '100px',
					'height': '100px',
					'border': '1px solid black',
					'background-color': 'rgba(255, 255, 255, 0.788)',
					'padding': '0',
					'cursor': 'pointer'
				}).appendTo($('#Row'+ (i+1)))
			}
		}

		$('<button/>', {
			id: 'Refresh-btn',
			type:'button',
			text: 'очистить',
			onClick: 'Clean()'
		}).appendTo(this)

	};
})(jQuery);


function Clean(){
	for(let i=0;i<fieldMatrix.length;i++){
		$("#"+i).empty();
		fieldMatrix[i] = 0;
	}


	move = false;
	victoryFlag = false;

	if ($('input[name="firstMoveRadio"]:checked').val() == 'comp'){
		move = true;
		PrintComp()
	}
}

function ChoisePlayerComp(){
	Player.figure = $('input[name="chooseRadio"]:checked').val();
	if ($('input[name="chooseRadio"]:checked').val() == 'cross'){
		Comp.figure = 'circle';
	}
	else{
		Comp.figure = 'cross';
	}
}

function PrintPlayer(obj){
	ChoisePlayerComp();
	if (!move && !victoryFlag){
		Print(obj, Player);
		checkVictory(Player);
		PrintComp();
	}
}

function PrintComp(){
	if(move && !victoryFlag){
		Print(Calculate(), Comp);
	}
	checkVictory(Comp);
}

function Print(this_id, player){
	if(fieldMatrix[this_id] == 0){
			$('#'+this_id).append(returnImage(player.figure))
		fieldMatrix[this_id] = player.ID;
		move = !move
	}
}

function getRand(min, max){
  return Math.floor(Math.random() * (max - min + 1)) + min;
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

/* function Calculate(){
	var best_score = 1000000
	tmp_buf[] = fieldMatrix;
	for(var i=0;i<tmp_buf.length;i++){
		if(tmp_buf == 0){

		}
	}
	return newId;
} */


/* function Calculate(){
	for(var i=0; i<=fieldMatrix.length-3;i+=3){
		if(fieldMatrix[i] == Player.ID && fieldMatrix[i+1] == player.ID && fieldMatrix[i+2] == 0) {
			return i+2;
		}
		else if(fieldMatrix[i] == Player.ID && fieldMatrix[i+2] == player.ID && fieldMatrix[i+1] == 0) {
			return i+1;
		}
		else if(fieldMatrix[i+1] == Player.ID && fieldMatrix[i+2] == player.ID && fieldMatrix[i] == 0) {
			return i;
		}
	}
	for(var i=0; i<size;i++){
		if(fieldMatrix[i] == player.ID && fieldMatrix[i+3] == player.ID && fieldMatrix[i+6] == 0){
			return i+6;
		}
		else if(fieldMatrix[i] == player.ID && fieldMatrix[i+6] == player.ID && fieldMatrix[i+3] == 0){
			return i+3;
		}
		else if(fieldMatrix[i+3] == player.ID && fieldMatrix[i+6] == player.ID && fieldMatrix[i] == 0){
			return i;
		}
	}

	if(fieldMatrix[0] == player.ID && fieldMatrix[4] == player.ID && fieldMatrix[8] == 0){
		return 8
	}
	else if(fieldMatrix[0] == player.ID && fieldMatrix[8] == player.ID && fieldMatrix[4] == 0){
		return 4
	}
	else if(fieldMatrix[4] == player.ID && fieldMatrix[8] == player.ID && fieldMatrix[8] == 0){
		return 0
	}

	if(fieldMatrix[2] == player.ID && fieldMatrix[4] == player.ID && fieldMatrix[6] == 0){
		return 6
	}
	else if(fieldMatrix[2] == player.ID && fieldMatrix[6] == player.ID && fieldMatrix[4] == 0){
		return 4
	}
	else if(fieldMatrix[4] == player.ID && fieldMatrix[6] == player.ID && fieldMatrix[2] == 0){
		return 2
	}
} */

function checkVictory(player){
	for(var i=0; i<=fieldMatrix.length-3;i+=3){
		if(fieldMatrix[i] == player.ID &
			fieldMatrix[i+1] == player.ID &
			fieldMatrix[i+2] == player.ID){
			var k;
			for(var j=0; j<size;j++){
				k = i+j;
				$('#'+k).children('div').css('background-color', player.color);
			}
			victoryFlag = true;
			return false;
		}
	}
	for(var i=0; i<size;i++){
		if(fieldMatrix[i] == player.ID &
			fieldMatrix[i+3] == player.ID &
			fieldMatrix[i+6] == player.ID){
			var k;
			for(var j=0; j<size;j++){
				k = i+j*3;
				$('#'+k).children('div').css('background-color', player.color);
			}
			victoryFlag = true;
			return false;
		}
	}
	if(fieldMatrix[0] == player.ID &
		fieldMatrix[4] == player.ID &
		fieldMatrix[8] == player.ID){
		var k;
		for(var j=0; j<size;j++){
			k = 0+j*4;
			$('#'+k).children('div').css('background-color', player.color);
		}
		victoryFlag = true;
		return false;
	}
	if(fieldMatrix[2] == player.ID &
		fieldMatrix[4] == player.ID &
		fieldMatrix[6] == player.ID){
			var k;
		for(var j=0; j<size;j++){
			k = 2+j*2;
			$('#'+k).children('div').css('background-color', player.color);
		}
		victoryFlag = true;
		return false;
	}
}

function returnImage(strImage){
	return $('<div />').css({
		'width': '100px',
		'height': '100px',
		'background-image': 'url(img/'+strImage+'.svg)',
		'background-size': 'cover'
	})
}

var Player = { figure: 'cross', ID: 1, color: 'green'};
var Comp = {figure: 'circle', ID: 2, color: 'red'};
var move = false;
var victoryFlag = false;
var size = 3;
var fieldMatrix = [0,0,0,0,0,0,0,0,0];
