<!DOCTYPE html>
<html lang="en">
	<head >
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Задание 1-1</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<p> Вариант 6
		<p>
		<?php
			$a=rand(-20,20);
			$c=rand(-20,20);
			$d=rand(-20,20);
			print (a . ' = ' . $a . '<br>' . c . ' = ' . $c . '<br>' . d . ' = ' . $d . '<br>');
			print (' F = ' . (2 * $c - 42 * $d)/($c + $a - 1) . '<br>');
		?>
		<p> Вариант 1
		<p>
		<?php
			$a=rand(-20,20);
			$c=rand(-20,20);
			$d=rand(-20,20);
			print (a . ' = ' . $a . '<br>' . c . ' = ' . $c . '<br>' . d . ' = ' . $d . '<br>');
			print (' F = ' . (2 * $c - $d)/(($a / 4) - 1) . '<br>');
		?>
	</body>
</html>
