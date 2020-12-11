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
			$var1= '3';
			$var2 = 5;
			echo $var1 . ' - ' . gettype($var1) . '<br>';
			print ($var2 . ' - ' . gettype($var2) . '<br>');
			$var3= 'abc';
			var_dump ($var3);
			echo '<br>';
			$var4=123;
			var_dump ($var4);
		?>
	</body>
</html>
