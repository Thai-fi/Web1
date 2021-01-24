<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 4</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			print('Найти среднее арифметическое S элементов таблицы A(N). Выяснить, сколько
			элементов таблицы равно S, больше S, меньше S <br/>');
			$N = rand(10,20);
			$min = 1000;

			$SUM1 = 0;
			$SUM2 = 0;
			$SUM = 0;

			print('Массив: ');
			for ($i=0; $i<$N; $i++){
				$arr[$i] = rand(0, 50);
				print($arr[$i] . ' ');
				$SUM+=$arr[$i];
			}
			print('сумма элементов массива: ' . $SUM . '<br>');

			for($k=1;$k<$N-1;$k++){
				for($j1=0; $j1<$k; $j1++){
					$SUM1 += $arr[$j1];
				}
				if($SUM1 > $SUM/2){
					break;
				}
				else{
					$SUM1 = 0;
				}
			}
			print('k = ' . $k . '<br>');
		?>
	</body>
</html>

