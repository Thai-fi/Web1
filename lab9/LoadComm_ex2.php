<?php
require "../config.php";
$mysqli = new mysqli($localhost, $login, $password, $db);
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
$link = mysqli_connect($localhost, $login, $password, $db);

$query = "SELECT * FROM comments ORDER BY id_comm";

if($result = $mysqli->query($query)){
	while ($row = mysqli_fetch_array($result)) {
		$posts['id'][] = $row['id_comm'];
		$posts['name'][] = $row['auth_comm'];
		$posts['text'][] = $row['text_comm'];
		$posts['date'][] = $row['date_comm'];
	}
}

echo json_encode($posts);
?>
