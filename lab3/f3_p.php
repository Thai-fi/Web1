<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 3</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<?
	if ($_POST["d"]=="plus") {
	$c=$_POST["a"]+$_POST["b"];
	echo ("сумма чисел = $c");
	} else {
	$c=$_POST["a"]*$_POST["b"];
	echo ("произведение чисел = $c");
	}
	echo ("<BR> <A href='task3_3.html'> Вернуться назад </A>");
	?>
	</body>
</html>

