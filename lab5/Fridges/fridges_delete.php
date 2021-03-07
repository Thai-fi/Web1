<?php
	require "../../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
 	if ($mysqli->connect_errno){
	 	printf("Connect failed: %s\n", $mysqli->connect_error);
	 	exit();
 	}
 	$zapros="DELETE FROM fridges WHERE f_id=" . $_GET['f_id'];
 	$mysqli->query($zapros);
	header("Location: fridges.php");
	exit;
?>
