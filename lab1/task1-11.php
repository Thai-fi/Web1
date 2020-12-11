<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 11</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			$a=rand(1,10);
			$b=rand(10,20);
			print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
			while ($a<=$b) {
				echo $a . "<br>";
				$a=++$a;
			}
		?>
	</body>
</html>

