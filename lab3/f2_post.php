<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 2</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<?php
	echo ("Здравствуйте, " . $_POST["userName_post"]);
	echo ("<hr>");
	echo ("Значение скрытого поля hideField_post равно " . $_POST["hideField_post"]);
	?>
	</body>
</html>

