<html>
<head>
	<title> Сведения о прользователях сайта </title> </head>
	<body>
	<?php
		require "../config.php";
		$mysqli = new mysqli($localhost, $login, $password, $db);
		if ($mysqli->connect_errno)
		{
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
	?>
	<h2>Зарегистрированные пользователи:</h2>
	<table border="1">
	<tr>
 	<th> Имя </th> <th> E-mail </th>
 	<th> Редактировать </th> <th> Уничтожить </th> </tr>
	<?php
		$query = "SELECT id_user, user_name, user_e_mail FROM users";
		$result = $mysqli->query($query);
		while ($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['user_name'] . "</td>";
			echo "<td>" . $row['user_e_mail'] . "</td>";
			echo "<td><a href='task4_1_edit.php?id_user=" . $row['id_user']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
			echo "<td><a href='task4_1_delete.php?id_user=" . $row['id_user']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
			echo "</tr>";
		}
		print "</table>";
		$num_rows = mysqli_num_rows($result); // число записей в таблице БД
		print("<P>Всего пользователей: $num_rows </p>");
	?>
	<p> <a href="task4_1_new.html"> Добавить пользователя </a>
	</body>
</html>
