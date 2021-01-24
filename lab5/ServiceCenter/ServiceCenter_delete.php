<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
 	if ($mysqli->connect_errno){
	 	printf("Connect failed: %s\n", $mysqli->connect_error);
	 	exit();
 	}
 	$zapros="DELETE FROM servicecenter WHERE s_id=" . $_GET['s_id'];
 	$mysqli->query($zapros);
	header("Location: ServiceCenter.php");
	exit;
?>
