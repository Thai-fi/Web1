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
	$query="SELECT user_name
							, user_login
					 , user_password
					   , user_e_mail
							 , user_info FROM users WHERE id_user=".$_GET['id_user'];
if ($result = $mysqli->query($query))
{
	while ($st=mysqli_fetch_array($result))
	{
		$id=$_GET['id_user'];
		$name = $st['user_name'];
		$login = $st['user_login'];
		$password = $st['user_password'];
		$e_mail = $st['user_e_mail'];
		$info = $st['user_info'];
	}
}
	print "<form action='task4_1_save_edit.php' metod='get'>";
	print "Имя: <input name='name' size='50' type='text' value='".$name."'>";
	print "<br>Логин: <input name='login' size='20' type='text' value='".$login."'>";
	print "<br>Пароль: <input name='password' size='20' type='text' value='".$password."'>";
	print "<br>Е-mail: <input name='e_mail' size='30' type='text' value='".$e_mail."'>";
	print "<br>Информация: <textarea name='info' rows='4' cols='40'>".$info."</textarea>";
	print "<input type='hidden' name='id' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"task4_1.php\"> Вернуться к списку пользователей </a>";
	?>
	</body>
</html>
