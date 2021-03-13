<?php
	require "../../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$dateStart = $_GET['datestart_day'] . "." . $_GET['datestart_mounth'] . "." . $_GET['datestart_year'];
	$dateFinish = $_GET['datefinish_day'] . "." . $_GET['datefinish_mounth'] . "." . $_GET['datefinish_year'];

	$sql_add = "INSERT INTO repairrequest SET r_datestart='".$dateStart."'
										   									 , r_datefinish='".$dateFinish."'
								                                , rf_id='".$_GET['fridge']."'
									                              , rs_id='".$_GET['servicecenter']."'
									                              , r_fio='".$_GET['fio_']."'
								                               , r_cost='".$_GET['cost_']."'";
	if ($result = $mysqli->query($sql_add)){
		print "<p>Спасибо";
		print "<p><a href=\"RepairRequest.php\">Вернуться к списку</a>";
	}
	else {
		print $sql_add;
		print "Ошибка сохранения. <a href=\"RepairRequest.php\">Вернуться к списку</a>";
	}
?>
