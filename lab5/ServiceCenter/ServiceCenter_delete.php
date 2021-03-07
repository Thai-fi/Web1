<?php
	require "../../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
 	if ($mysqli->connect_errno){
	 	printf("Connect failed: %s\n", $mysqli->connect_error);
	 	exit();
 	}
 	$zapros="DELETE FROM servicecenter WHERE s_id=" . $_GET['s_id'];
 	$mysqli->query($zapros);
	header("Location: ServiceCenter.php");
	exit;
?>
