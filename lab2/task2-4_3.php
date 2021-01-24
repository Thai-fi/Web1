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
			print('В массиве чисел А(N) найти число, повторяющееся максимальное количество раз. Если их
			несколько, то одно из них. <br/>');
			$N = rand(30,40);
			$max = 0;
			$elem = 0;
			$SUM = 0;
			print(' массив - ');
			for ($i=0; $i<$N; $i++){
				$arr[$i] = rand(0, 50);
				print(' ' . $arr[$i]);
			}

			for ($k=0; $k<$N; $k++){
				for ($i=0; $i<$N; $i++){
					if($arr[$i] == $arr[$k] )
					{
						$SUM=$SUM+1;
					}
				}
				if($SUM > $max){
					$max = $SUM;
					$elem = $arr[$k];
					$SUM = 0;
				}
				else{
					$SUM = 0;
				}
			}
			print('<br> максималльное количество - ' . $max);
			print('<br> элемент - ' . $elem);

		?>
	</body>
</html>

