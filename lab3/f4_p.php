<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 4</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<?
	if ($_POST["d"]=="plus") {
		$c=$_POST["a"]+$_POST["b"];
		if ($_POST["f"].checked == checked) {
			echo ($_POST['a']."+".$_POST['b']."=".$c);
		}
		else {
			echo ("Результат = ".$c);
		}
	}
	else {
		$c=$_POST["a"]*$_POST["b"];
		if (isset($_POST["f"])) {
			echo ("Результат = ".$c);
		}
		else {
			echo ($_POST['a']."*".$_POST['b']." = ".$c);
		}
		echo ("<BR> <A href='task3_4.html'> Вернуться назад </A>");
	}
	?>
	</body>
</html>

