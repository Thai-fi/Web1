<?php
	require "../../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$subquery1 = "SELECT f_id FROM fridges WHERE f_name ='".$_GET['fridge_']."'";
	$result1 = $mysqli->query($subquery1);
	while ($row1 = mysqli_fetch_array($result1)){
		$fridge_id = $row1['f_id'];
		echo $fridge_id;
	}
	$subquery1 = "SELECT s_id FROM servicecenter WHERE s_name='".$_GET['center_']."'";
	$result1 = $mysqli->query($subquery1);
	while ($row1 = mysqli_fetch_array($result1)){
		$service_id = $row1['s_id'];
		echo $service_id;
	}
	$sql_add = "INSERT INTO repairrequest SET r_datestart='".$_GET['datestart_']."'
										   									 , r_datefinish='".$_GET['datefinish_']."'
								                                , rf_id='".$fridge_id."'
									                              , rs_id='".$service_id."'
									                              , r_fio='".$_GET['fio_']."'
								                               , r_cost='".$_GET['cost_']."'";
	if ($result = $mysqli->query($sql_add)){
		print "<p>Спасибо";
		print "<p><a href=\"RepairRequest.php\">Вернуться к списку</a>";
	}
	else {
		print "Ошибка сохранения. <a href=\"RepairRequest.php\">Вернуться к списку</a>";
	}
?>
