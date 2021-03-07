<html>
	<body>
	<?php
	require "../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
	$link = mysqli_connect($localhost, $login, $password, $db);
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$zapros="UPDATE users SET user_name='".$_GET['name']."'
																	, user_login='".$_GET['login']."'
															, user_password='".$_GET['password']."'
																, user_e_mail='".$_GET['e_mail']."'
																	, user_info='".$_GET['info']."'
																WHERE id_user=".$_GET['id'];
	mysqli_query($link, $zapros);
	if (mysqli_affected_rows($link) > 0){
		echo 'Все сохранено. <a href="task4_1.php"> Вернуться к списку пользователей</a>';
	}
	else {
		echo 'Ошибка сохранения. <a href="task4_1.php"> Вернуться к списку пользователей</a> '; }
	?>
	</body>
</html>
