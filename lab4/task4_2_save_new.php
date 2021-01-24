<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	else{
		printf("Подключение установлено");
	}
	$sql_add = "INSERT INTO fridges SET f_name='".$_GET['name_']."'
									 , f_model='".$_GET['model_']."'
								   , f_defrost='".$_GET['defrost_']."'
									, f_volume='".$_GET['volume_']."'
								 , f_guarantee='".$_GET['garan_']."'";
	if ($result = $mysqli->query($sql_add)){
		print "<p>Спасибо";
		print "<p><a href=\"task4_2.php\">Вернуться к списку</a>";
	}
	else {
		print "Ошибка сохранения. <a href=\"task4_2.php\">Вернуться к списку</a>";
	}
?>
