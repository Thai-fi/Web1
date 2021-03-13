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
		$datestart = explode(".", $st['r_datestart'], 3);
		$datefinish = explode(".", $st['r_datefinish'], 3);
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
	print "Дата начала: <input name='datestart_day'     size='3' type='datetime' placeholder='дд'   value='" .$datestart[0] ."'>";
	print							 "<input name='datestart_mounth'  size='3' type='datetime' placeholder='мм'   value='" .$datestart[1] ."'>";
	print							 "<input name='datestart_year'    size='5' type='datetime' placeholder='гггг' value='" .$datestart[2] ."'><br>";
	print "Дата конца: 	<input name='datefinish_day'    size='3' type='datetime' placeholder='дд'   value='" .$datefinish[0] ."'>";
	print							 "<input name='datefinish_mounth' size='3' type='datetime' placeholder='мм'   value='" .$datefinish[1] ."'>";
	print							 "<input name='datefinish_year'   size='5' type='datetime' placeholder='гггг' value='" .$datefinish[2] ."'><br>";

	$query = "SELECT f_id, f_name FROM fridges WHERE f_id != '". $fridge_id ."'";
	echo "Холодильник: <select name='fridge'>";
	echo "<option value='". $fridge_id ."' selected>". $fridge ."</option>";
	if ($result = $mysqli->query($query))
	{
		while ($row = mysqli_fetch_array($result))
		{
			echo "<option value='". $row['f_id'] ."'>".$row['f_name']."</option>";
		}
		echo "<select><br>";
		echo "Сервисный центр:";
	}

	$query = "SELECT s_id, s_name FROM servicecenter WHERE s_id != '". $center_id ."'";
	echo "Сервисный центр: <select name='servicecenter'>";
	echo "<option value='". $center_id ."' selected>". $center ."</option>";
	if ($result = $mysqli->query($query))
	{
		while ($row = mysqli_fetch_array($result))
		{
			echo "<option value='". $row['s_id'] ."'>" . $row['s_name'] . "</option>";
		}
		echo "<select><br>";
	}

	print "ФИО владельца: 	<input name='fio' 	 			size='20' type='text' 		value='".$fio."'>";
	print "<br>Цена: 						<input name='cost'   			size='20' type='text' 		value='".$cost."'>";
	print "<input name='id' 										type='hidden' 	value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"RepairRequest.php\"> Вернуться к списку</a>";
	?>
	</body>
</html>
