<?php
require "../config.php";
$mysqli = new mysqli($localhost, $login, $password, $db);
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
$link = mysqli_connect("localhost", "root", "root", "web2");

$PostsToLoad = $_POST['Posts'];
$PostsLoaded = $_POST['Start'];
$query = "SELECT * FROM posts1 ORDER BY id_city LIMIT $PostsLoaded, $PostsToLoad";
;
if($result = $mysqli->query($query)){
	while ($row = mysqli_fetch_array($result)) {
		$posts['id'][] = $row['id_city'];
		$posts['name'][] = $row['name_city'];
		$posts['pop'][] = $row['pop_city'];
		$posts['image'][] = $row['image_city'];
	}
}
else{
	echo 'Problem.';
}
echo json_encode($posts);
?>

