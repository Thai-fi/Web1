<?php
require "../config.php";
$mysqli = new mysqli($localhost, $login, $password, $db);
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
$link = mysqli_connect("localhost", "root", "root", "web2");

$Name = $_POST['name'];
$Text = $_POST['comment'];
$Date = $_POST['date'];

$query = "INSERT INTO comments SET auth_comm='".$Name."'
																	 , text_comm='".$Text."'
																	, date_comm='".$Date."'";
if ($mysqli->query($query)){
	$message = "good";
}
else{
	$message = "bad";
}
$answer = array(
	'messаge' => $message
);

header('Content-Type: text/json; charset=utf-8');
echo json_encode($answer);
?>

