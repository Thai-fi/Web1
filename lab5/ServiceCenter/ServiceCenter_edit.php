<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> Редактирование данных о пользователе </title>
	</head>
	<body>
	<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$query="SELECT s_name
							, s_address
	 FROM servicecenter WHERE s_id=".$_GET['s_id'];
if ($result = $mysqli->query($query))
{
	while ($st=mysqli_fetch_array($result))
	{
		$id=$_GET['s_id'];
		$name = $st['s_name'];
		$address = $st['s_address'];
	}
}
	print "<form action='ServiceCenter_save_edit.php' metod='get'>";
	print "Название: <input name='name' size='20' type='text' value='".$name."'>";
	print "<br> Адресс: <input name='address' size='50' type='text' value='".$address."'>";
	print "<input type='hidden' name='id' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"ServiceCenter.php\">Вернуться к списку</a>";
	?>
	</body>
</html>
