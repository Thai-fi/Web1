<?php
	require "../../config.php";
	$mysqli = new mysqli($localhost, $login, $password, $db);
 	if ($mysqli->connect_errno){
	 	printf("Connect failed: %s\n", $mysqli->connect_error);
	 	exit();
 	}
 	$zapros="DELETE FROM repairrequest WHERE r_id=" . $_GET['r_id'];
 	$mysqli->query($zapros);
	header("Location: RepairRequest.php");
	exit;
?>
