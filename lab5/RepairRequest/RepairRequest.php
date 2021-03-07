<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задание</title>
	</head>
	<body>
	<?php
		require "../../config.php";
		$mysqli = new mysqli($localhost, $login, $password, $db);
		if ($mysqli->connect_errno)
		{
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
	?>
	<a href="../Fridges/fridges.php">Холодильники</a><br>
	<a href="../ServiceCenter/ServiceCenter.php">Сервисные центры</a><br>
	<h2>Заявки на ремонт:</h2>
	<table border="1">
	<tr>
 	<th>Дата начала</th><th>Дата конца</th><th>Холодильник</th><th>Сервисный центр</th><th>ФИО владельца</th><th>Цена услуги</th><th>Редактировать</th><th>Удалить</th></tr>
	<?php
		$query = "SELECT r_id, r_datestart, r_datefinish, rf_id, rs_id, r_fio, r_cost FROM repairrequest";
		$result = $mysqli->query($query);
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$row['r_datestart']."</td><td>".$row['r_datefinish']."</td>";
			$subquery1 = "SELECT f_name FROM fridges WHERE f_id =" . $row['rf_id'];
			$result1 = $mysqli->query($subquery1);
			while ($row1 = mysqli_fetch_array($result1)){
				echo "<td>".$row1['f_name']."</td>";
			}
			$subquery1 = "SELECT s_name FROM servicecenter WHERE s_id =" . $row['rs_id'];
			$result1 = $mysqli->query($subquery1);
			while ($row1 = mysqli_fetch_array($result1)){
				echo "<td>".$row1['s_name']."</td>";
			}
			echo "<td>".$row['r_fio']."</td><td>".$row['r_cost']."</td>";
			echo "<td><a href='RepairRequest_edit.php?r_id=".$row['r_id']."'>Редактировать</a></td>"; // запуск скрипта для редактирования
			echo "<td><a href='RepairRequest_delete.php?r_id=".$row['r_id']."'>Удалить</a></td>"; // запуск скрипта для удаления записи
			echo "</tr>";
		}
		print "</table>";
		$num_rows = mysqli_num_rows($result); // число записей в таблице БД
		print("<P>Всего:$num_rows</p>");
	?>
	<p><a href="RepairRequest_new.html">Добавить</a>
	</body>
</html>
