<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 1</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
		echo ("Здравствуйте, " . $_GET["userName"]);
		echo ("<hr>");
		echo ("Значение скрытого поля hideField равно " .
		$_GET["hideField"]);
		?>
	</body>
</html>

