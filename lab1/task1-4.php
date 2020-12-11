<!DOCTYPE html>
<html lang="en">
	<head >
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 4</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			$NUM_E = 2.71828;
			print ('Число e равно ' . $NUM_E .  '<br>');
			$num_e1 = $NUM_E;
			print ('Переменная: ' . num_e1 . '<br>' . 'Значение: ' . $num_e1 . '<br>' . 'Тип: ' . gettype($num_e1). '<br>');
			print ('------------------------------------'. '<br>');
			print (num_e1 . ' - ' . $num_e1 . ' - ' . gettype($num_e1));
		?>
	</body>
</html>
