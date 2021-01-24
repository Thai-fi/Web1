<html>
	<body>
	<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
	$link = mysqli_connect("localhost", "root", "root", "web2");
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

	$zapros="UPDATE repairrequest SET r_datestart='".$_GET['datestart']."'
																 , r_datefinish='".$_GET['datefinish']."'
																				, rf_id='".$fridge_id."'
																		 		, rs_id='".$center_id."'
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
