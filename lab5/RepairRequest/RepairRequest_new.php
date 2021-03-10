<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Задание</title>
	</head>
	<body>
<H2>Добавление:</H2>
	<form action="RepairRequest_save_new.php" metod="get">
		Дата начала ремонта:
		<input name="datestart_day" size="3" type="datetime" placeholder="дд">
		<input name="datestart_mounth" size="3" type="datetime" placeholder="мм">
		<input name="datestart_year" size="5" type="datetime" placeholder="гггг"><br>
		Дата конца ремонта:
		<input name="datefinish_day" size="3" type="datetime" placeholder="дд">
		<input name="datefinish_mounth" size="3" type="datetime" placeholder="мм">
		<input name="datefinish_year" size="5" type="datetime" placeholder="гггг"><br>
		Холодильник:
		<?php
		require "../../config.php";
		$mysqli = new mysqli($localhost, $login, $password, $db);
		if ($mysqli->connect_errno){
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
		$query = "SELECT f_id, f_name FROM fridges";
		if ($result = $mysqli->query($query))
		{
			echo "<select name='fridge'>";
			echo "<option value=''>--choose--</option>";
			while ($row = mysqli_fetch_array($result))
			{
				echo "<option value='". $row['f_id'] ."'>".$row['f_name']."</option>";
			}
			echo "<select><br>";
			echo "Сервисный центр:";
		}
		$query = "SELECT s_id, s_name FROM servicecenter";
		if ($result = $mysqli->query($query))
		{
			echo "<select name='servicecenter'>";
			echo "<option value=''>--choose--</option>";
			while ($row = mysqli_fetch_array($result))
			{
				echo "<option value='". $row['s_id'] ."'>" . $row['s_name'] . "</option>";
			}
			echo "<select><br>";
		}
		?>
		ФИО владельца:
		<input name="fio_" size="50" type="text"><br>
		Цена услуги:
		<input name="cost_" size="50" type="text"><br>
	  <p>
			<input name="add" type="submit" value="Добавить">
			<input name="b2" type="reset" value="Очистить">
		</p>
	</form>
<p>
<a href="RepairRequest.php"> Вернуться к списку</a>
</body>
</html>
