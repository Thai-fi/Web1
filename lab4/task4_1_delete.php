<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
 	if ($mysqli->connect_errno){
	 	printf("Connect failed: %s\n", $mysqli->connect_error);
	 	exit();
 	}
 	$zapros="DELETE FROM users WHERE id_user=" . $_GET['id_user'];
 	$mysqli->query($zapros);
	header("Location: task4_1.php");
	exit;
?>
