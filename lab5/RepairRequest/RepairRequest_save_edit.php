<html>
	<body>
	<?php
	require "../../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
	$link = mysqli_connect($localhost, $login, $password, $db);
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$subquery1 = "SELECT f_id FROM fridges WHERE f_name ='".$_GET['fridge']."'";
	$result1 = $mysqli->query($subquery1);
	while ($row1 = mysqli_fetch_array($result1)){
		$fridge_id = $row1['f_id'];
	}
	$subquery1 = "SELECT s_id FROM servicecenter WHERE s_name ='".$_GET['center']."'";
	$result1 = $mysqli->query($subquery1);
	while ($row1 = mysqli_fetch_array($result1)){
		$center_id = $row1['s_id'];
	}

	$dateStart = $_GET['datestart_day'] . ":" . $_GET['datestart_mounth'] . ":" . $_GET['datestart_year'];
	$dateFinish = $_GET['datefinish_day'] . ":" . $_GET['datefinish_mounth'] . ":" . $_GET['datefinish_year'];


	$zapros="UPDATE repairrequest SET r_datestart='".$dateStart."'
																 , r_datefinish='".$dateFinish."'
																				, rf_id='".$_GET['fridge']."'
																		 		, rs_id='".$_GET['servicecenter']."'
																				, r_fio='".$_GET['fio']."'
																			 , r_cost='".$_GET['cost']."'
																		 WHERE r_Id=".$_GET['id'];
	mysqli_query($link, $zapros);
	if (mysqli_affected_rows($link) > 0){
		echo 'Все сохранено. <a href="RepairRequest.php"> Вернуться к списку пользователей</a>';
	}
	else {
		echo 'Ошибка сохранения. <a href="RepairRequest.php"> Вернуться к списку пользователей</a> '; }
	?>
	</body>
</html>
