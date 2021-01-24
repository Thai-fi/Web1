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
	<a href="../Fridges/fridges.php">Холодильники</a><br>
	<a href="../RepairRequest/RepairRequest.php">Запросы на ремонт</a><br>
	<h2>Сервисные центры:</h2>
	<table border="1">
	<tr>
 	<th>Название</th><th>Адрес</th><th>Редактировать</th><th>Удалить</th></tr>
	<?php
		$query = "SELECT s_id, s_name, s_address FROM servicecenter";
		$result = $mysqli->query($query);
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$row['s_name']."</td><td>".$row['s_address']."</td>";
			echo "<td><a href='ServiceCenter_edit.php?s_id=".$row['s_id']."'>Редактировать</a></td>"; // запуск скрипта для редактирования
			echo "<td><a href='ServiceCenter_delete.php?s_id=".$row['s_id']."'>Удалить</a></td>"; // запуск скрипта для удаления записи
			echo "</tr>";
		}
		print "</table>";
		$num_rows = mysqli_num_rows($result); // число записей в таблице БД
		print("<P>Всего:$num_rows</p>");
	?>
	<p><a href="ServiceCenter_new.html">Добавить</a>
	</body>
</html>
