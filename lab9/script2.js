
window.onload = function(){
	LoadAJAX();
	document.querySelector("#InputSend").onclick = function(event){
		Validation();
	}
}

var validName = false;
var validEmail = false;
var validMess = false;

function SendAJAX(){
	var _Name = $('#InputName').val();
	var _Comment = $('#InputMessege').val();
	var date = new Date();
	var _DateComment = '';
	_DateComment+= date.getDate() + "." + (date.getMonth() + 1) + "." + date.getFullYear() + " " + date.getHours() + ":" +  date.getMinutes() + ":" +  date.getSeconds();
	$('#InputName').val('');
	$('#InputEmail').val('');
	$('#InputMessege').val('');
	$.ajax({
		method: "POST",
		url: "SendComm_ex2.php",
		data: {
			name: _Name,
			comment: _Comment,
			date: _DateComment
		},
		dataType: "json",
		success: function(response){
			if(response){
				LoadAJAX();
			}

		}
	});
}

function LoadAJAX(){
	$.ajax({
		method: "POST",
		url: "LoadComm_ex2.php",
		success: function(response){
			var result = JSON.parse(response);
			if(result){
				var comment = '';
				for(var i=0; i<Object.keys(result.id).length; i++){
					comment+="<div class='comment'>";
					comment+="<h4>"+result.name[i]+"</h4>";
					comment+="<h5>"+result.date[i]+"</h5>";
					comment+="<p>"+result.text[i]+"</p>";
					comment+="</div>";
				}
				document.querySelector('#comments').innerHTML = '';
				document.querySelector('#comments').innerHTML += comment;
			}
		}
	})
}

function Validation(){
	event.preventDefault();
	var border = "border";
		var InValid = "2px solid red";
		var Valid = "1px solid black";

		var Name = $("#InputName");
		var WarningName = $("#InputWarningName");
		var Email = $("#InputEmail");
		var WarningEmail = $("#InputWarningEmail");
		var Messege = $("#InputMessege");
		var WarningMessege = $("#InputWarningMessege");

		if(Name == ""){
			Name.css(border, InValid);
			WarningName.addClass('open').removeClass('hidden');
		}
		else {
			Name.css(border, Valid);
			WarningName.addClass('hidden').removeClass('open');
			validName = true;
		}

		if (Email.val() == ""){
			Email.css(border, InValid);
			WarningEmail.addClass('open').removeClass('hidden');
		}
		else {
			if ((Email.val().match(/.+?\@.+/g) || []).length !== 1)
			{
				Email.css(border, InValid);
				WarningEmail.addClass('open').removeClass('hidden');
			}
			else {
				Email.css(border, Valid);
				WarningEmail.addClass('hidden').removeClass('open');
				validEmail = true;
			}
		}

		if (Messege.val() == ""){
			Messege.css(border, InValid);
			WarningMessege.addClass('open').removeClass('hidden');
		}
		else {
			if(Messege.val().length < 10){
				Messege.css(border, InValid);
				WarningMessege.addClass('open').removeClass('hidden');
			}
			else{
				Messege.css(border, Valid);
				WarningMessege.addClass('hidden').removeClass('open');
				validMess = true;
			}
		}

		if(validName && validEmail && validMess)
		{
			alert("Все поля заполнены верно");
			SendAJAX();
			return false;
		}
		else{
			alert("Что то заполнено неверно");
			return false;
		}
}
