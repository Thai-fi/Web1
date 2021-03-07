<?php
	require "../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	$sql_add = "INSERT INTO users SET user_name='" . $_GET['name']."'
		 														, user_login='" . $_GET['login']."'
														 , user_password='" . $_GET['password']."'
															 , user_e_mail='" . $_GET['e_mail']."'
																 , user_info='" . $_GET['info']. "'";
	echo $sql_add;
	 if ($result = $mysqli->query($sql_add)){
		print "<p>Спасибо, вы зарегистрированы в базе данных.";
		print "<p><a href=\"task4_1.php\"> Вернуться к списку пользователей </a>";
	}
	else {
		print "Ошибка сохранения. <a href=\"task4_1.php\">Вернуться к списку книг </a>";
	}
?>
