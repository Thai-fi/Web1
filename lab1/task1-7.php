<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 7</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<p> Наибольшее число:
		<p>
		<?php
			$x=rand(1,10);
			$y=rand(1,10);
			print ('$x =' . $x . "<br>");
			print ('$y =' . $y . "<br>");
			if ($x>$y) echo("Наибольшее =" . $x);
			elseif ($x<$y) echo ("Наибольшее =" . $y);
			else print ("Наибольшего нет");
		?>
	</body>
</html>

