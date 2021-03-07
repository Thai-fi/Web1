<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> Редактирование данных о пользователе </title>
	</head>
	<body>
	<?php
	require "../../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$query = "SELECT r_id,
						r_datestart,
					 r_datefinish,
			            rf_id,
									rs_id,
									r_fio,
									r_cost FROM repairrequest WHERE r_id=".$_GET['r_id'];
if ($result = $mysqli->query($query))
{
	while ($st=mysqli_fetch_array($result))
	{
		$id=$_GET['r_id'];
		$datestart = $st['r_datestart'];
		$datefinish = $st['r_datefinish'];
		$fridge_id = $st['rf_id'];
		$center_id = $st['rs_id'];
		$fio = $st['r_fio'];
		$cost = $st['r_cost'];
		$subquery1 = "SELECT f_name FROM fridges WHERE f_id =" . $fridge_id;
		$result1 = $mysqli->query($subquery1);
		while ($row1 = mysqli_fetch_array($result1)){
			$fridge = $row1['f_name'];
		}
		$subquery1 = "SELECT s_name FROM servicecenter WHERE s_id =" . $center_id;
		$result1 = $mysqli->query($subquery1);
		while ($row1 = mysqli_fetch_array($result1)){
			$center = $row1['s_name'];
		}
	}
}
	print "<form action='RepairRequest_save_edit.php' metod='get'>";
	print "Дата начала: 				<input name='datestart' 	size='50' type='datetime' value='".$datestart."'>";
	print "<br> Дата конца: 		<input name='datefinish' 	size='20' type='datetime' value='".$datefinish."'>";
	print "<br>Холодильник:		  <input name='fridge' 			size='20' type='text' 		value='".$fridge."'>";
	print "<br>Сервисный центр: <input name='center' 			size='30' type='text' 		value='".$center."'>";
	print "<br>ФИО владельца: 	<input name='fio' 	 			size='20' type='text' 		value='".$fio."'>";
	print "<br>Цена: 						<input name='cost'   			size='20' type='text' 		value='".$cost."'>";
	print "<br>ID:	 						<input name='id' 										type='hidden' 	value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"RepairRequest.php\"> Вернуться к списку</a>";
	?>
	</body>
</html>
