<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 12</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			$a=rand(-5,0);
			$b=rand(0,5);
			print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
			do {
				echo($a . "<br>");
				$a=++$a;
			}	while ($a<=$b);
		?>
	</body>
</html>

