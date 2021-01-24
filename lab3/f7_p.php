<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 7</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<?
	$s3=($_POST["f"]." ".$_POST["n"]);
	$s4=". Мы рады приветствовать вас на нашем сайте.";
	$s5 = $_POST["about"];
	switch ($_POST["z"]) {
	// смотрим, чему равна переменная $z
	case 1:
	// 1 — это обращение «господин»…
	$s1="Уважаемый ";
	$s2="господин ";
	break;
	case 2:
	// 2 — это обращение «госпожа»…
	$s1="Уважаемая ";
	$s2="госпожа ";
	break;
	case 3:
	// 3 — это обращение «товарищ»…
	$s1="Уважаемый ";
	$s2="товарищ ";
	break;
	}
	echo ($s1 . $s2 . $s3 . $s4 . '<br> Информация:' . $s5);
	?>
	</body>
</html>

