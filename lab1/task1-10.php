<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 10</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			$var = 5;
			$i = 0;
			while (++$i <= $var){
				echo $i . ' ';
			}
			echo('<br>');
			$var = 0;
			$i = 6;
			while (--$i > $var){
				echo $i . ' ';
			}
		?>
	</body>
</html>

