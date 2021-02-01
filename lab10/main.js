$(document).ready(function(){
	$('#tabs').tabs();
	$('#tooltipEx').tooltip();
	$('#selectCity').selectmenu();
	$('#BUY').button();
	$('#dialogBuy').dialog({
		autoOpen: false
	});
	$('#dialogErr').dialog({
		autoOpen: false
	});

	$('#slider').slider({
		min: 1,
		max: 4,
		value: 1,
		step: 1,
		slide: function( event, ui ) {
			$("#tickets").html(ui.value);
		}
	});

	$('#date').datepicker({
		dateFormat: "dd.mm.yy",
	});

	var availableTags = [
		"Проспект октября",
		"Кутузовский Проспект",
		"Кузнецкий мост",
		"Арбат",
		"Невский проспект",
		"Проспект Салавата Юлаева",
		"Ленина",
		"Баумана",
		"Океанский проспект",
		"Некрасовская"
	];
	$("#search").autocomplete({
		source: availableTags
	});
});

$(function(){
	$("#buyBugatti").bind("click", function(){
		$('#buyAuto').html("Bugatti");
		$("#cost").val(280000000);
		$('.buyList').removeClass("hidden");
	});

	$("#buyLambo").bind("click", function(){
		$("#buyAuto").html("Lamborghini");
		$("#cost").val(16500000);
		$('.buyList').removeClass("hidden");
	});

	$("#buyFerrari").bind("click", function(){
		$("#buyAuto").html("Ferrari");
		$("#cost").val(23555555);
		$('.buyList').removeClass("hidden");
	});

	$("#autpBack").bind("click", function(){
		$("#buyAuto").html("");
		$('.buyList').addClass("hidden");
		$("#cost").val("");
	});

	$("#errOk").bind("click", function(){
		$("#dialogErr").dialog('close');
	});

	$("#buyOk").bind("click", function(){
		$("#dialogBuy").dialog('close');
	});

	$("#BUY").bind("click", function(){
		var totalCost = 0;
		$("#diAuto").html($("#buyAuto").html());
		$("#diName").html($("#name").val());
		$("#diDate").html($("#date").val());
		$("#diCity").html($("#selectCity").val());
		$("#diAddress").html($("#search").val());
		$("#dikol").html($('#slider').slider("value"));
		totalCost =  $("#cost").val() * $('#slider').slider("value");
		if($("#promo").val()){
			totalCost	= totalCost * 0.9;
	 	}
	  $("#diCost").html(totalCost);
		if($("#diName").html() && 	$("#diAuto").html() && $("#diDate").html() && $("#diCity").html() && $("#diAddress").html()){

			$("#dialogBuy").dialog('open');
			return false;
		}
		else{
			$("#dialogErr").dialog('open');
			return false;
		}
	});
});




