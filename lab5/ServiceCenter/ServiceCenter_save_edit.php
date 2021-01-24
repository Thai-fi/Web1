<html>
	<body>
	<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
	$link = mysqli_connect("localhost", "root", "root", "web2");
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$zapros="UPDATE servicecenter SET s_name='".$_GET['name']."'
														, s_address='".$_GET['address']."'
																WHERE s_Id=".$_GET['id'];
	mysqli_query($link, $zapros);
	if (mysqli_affected_rows($link) > 0){
		echo 'Все сохранено. <a href="ServiceCenter.php"> Вернуться к списку пользователей</a>';
	}
	else {
		echo 'Ошибка сохранения. <a href="ServiceCenter.php"> Вернуться к списку пользователей</a> '; }
	?>
	</body>
</html>
