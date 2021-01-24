<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задание</title>
	</head>
	<body>
	<?php
		$mysqli = new mysqli("localhost", "root", "root", "web2");
		if ($mysqli->connect_errno)
		{
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
	?>
	<a href="../RepairRequest/RepairRequest.php">Запросы на ремонт</a><br>
	<a href="../ServiceCenter/ServiceCenter.php">Сервисные центры</a><br>
	<h2>Холодильники:</h2>
	<table border="1">
	<tr>
 	<th>Фирма</th><th>Модель</th><th>Разморозка</th><th>Объем</th><th>Редактировать</th><th>Удалить</th></tr>
	<?php
		$query = "SELECT f_id, f_name, f_model, f_defrost, f_volume FROM fridges";
		$result = $mysqli->query($query);
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$row['f_name']."</td><td>".$row['f_model']."</td><td>".$row['f_defrost']."</td><td>".$row['f_volume']."</td>";
			echo "<td><a href='fridges_edit.php?f_id=".$row['f_id']."'>Редактировать</a></td>"; // запуск скрипта для редактирования
			echo "<td><a href='fridges_delete.php?f_id=".$row['f_id']."'>Удалить</a></td>"; // запуск скрипта для удаления записи
			echo "</tr>";
		}
		print "</table>";
		$num_rows = mysqli_num_rows($result); // число записей в таблице БД
		print("<P>Всего:$num_rows</p>");
	?>
	<p><a href="fridges_new.html">Добавить</a>
	</body>
</html>
