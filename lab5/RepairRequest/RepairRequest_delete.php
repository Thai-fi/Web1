<?php
	$mysqli = new mysqli("localhost", "root", "root", "web2");
 	if ($mysqli->connect_errno){
	 	printf("Connect failed: %s\n", $mysqli->connect_error);
	 	exit();
 	}
 	$zapros="DELETE FROM repairrequest WHERE r_id=" . $_GET['r_id'];
 	$mysqli->query($zapros);
	header("Location: RepairRequest.php");
	exit;
?>
