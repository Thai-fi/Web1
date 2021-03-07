<?php
	require "../../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
	if ($mysqli->connect_errno){
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$sql_add = "INSERT INTO servicecenter SET s_name='".$_GET['name_']."'
								 										 , s_address='".$_GET['address_']."'";
	if ($result = $mysqli->query($sql_add)){
		print "<p>Спасибо";
		print "<p><a href=\"ServiceCenter.php\">Вернуться к списку</a>";
	}
	else {
		print "Ошибка сохранения. <a href=\"ServiceCenter.php\">Вернуться к списку</a>";
	}
?>
