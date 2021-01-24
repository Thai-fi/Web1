<html>
	<body>
	<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
	$link = mysqli_connect("localhost", "root", "root", "web2");
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$zapros="UPDATE fridges SET f_name='".$_GET['name']."'
														, f_model='".$_GET['model']."'
												 , f_defrost='".$_GET['defrost']."'
																, f_volume='".$_GET['volume']."'
																	, f_guarantee='".$_GET['garan']."'
																WHERE f_Id=".$_GET['id'];
	mysqli_query($link, $zapros);
	if (mysqli_affected_rows($link) > 0){
		echo 'Все сохранено. <a href="fridges.php"> Вернуться к списку пользователей</a>';
	}
	else {
		echo 'Ошибка сохранения. <a href="fridges.php"> Вернуться к списку пользователей</a> '; }
	?>
	</body>
</html>
