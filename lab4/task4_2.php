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
	<h2>Холодильники</h2>:</h2>
	<table border="1">
	<tr>
 	<th> Фирма </th> <th> модель </th> <th> разморозка </th> <th> объем </th>
 	<th> Редактировать </th> <th> Уничтожить </th> </tr>
	<?php
		$query = "SELECT f_id, f_name, f_model, f_defrost, f_volume FROM fridges";
		$result = $mysqli->query($query);
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['f_name'] . "</td>";
			echo "<td>" . $row['f_model'] . "</td>";
			echo "<td>" . $row['f_defrost'] . "</td>";
			echo "<td>" . $row['f_volume'] . "</td>";
			echo "<td><a href='task4_2_edit.php?f_id=" . $row['f_id']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
			echo "<td><a href='task4_2_delete.php?f_id=" . $row['f_id']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
			echo "</tr>";
		}
		print "</table>";
		$num_rows = mysqli_num_rows($result); // число записей в таблице БД
		print("<P>Всего: $num_rows </p>");
	?>
	<p> <a href="task4_2_new.html">Добавить</a>
	</body>
</html>
