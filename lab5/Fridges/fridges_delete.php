<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
 	if ($mysqli->connect_errno){
	 	printf("Connect failed: %s\n", $mysqli->connect_error);
	 	exit();
 	}
 	$zapros="DELETE FROM fridges WHERE f_id=" . $_GET['f_id'];
 	$mysqli->query($zapros);
	header("Location: fridges.php");
	exit;
?>
