<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> Редактирование данных о пользователе </title>
	</head>
	<body>
	<?php
	require "../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$query="SELECT f_name
							, f_model
					 , f_defrost
					   , f_volume
							 , f_guarantee FROM fridges WHERE f_id=".$_GET['f_id'];
if ($result = $mysqli->query($query))
{
	while ($st=mysqli_fetch_array($result))
	{
		$id=$_GET['f_id'];
		$name = $st['f_name'];
		$model = $st['f_model'];
		$defrost = $st['f_defrost'];
		$volume = $st['f_volume'];
		$guarantee = $st['f_guarantee'];
	}
}
	print "<form action='task4_2_save_edit.php' metod='get'>";
	print "Название: <input name='name' size='50' type='text' value='".$name."'>";
	print "<br> Модель: <input name='model' size='20' type='text' value='".$model."'>";
	print "<br>Тип разморозки: <input name='defrost' size='20' type='text' value='".$defrost."'>";
	print "<br>Объем: <input name='volume' size='30' type='text' value='".$volume."'>";
	print "<br>Гарантия (месяцев): <textarea name='garan' rows='4' cols='40'>".$guarantee."</textarea>";
	print "<input type='hidden' name='id' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"task4_2.php\"> Вернуться к списку пользователей </a>";
	?>
	</body>
</html>
