<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 6.1</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<?php
			require "functions.php";
			print('Дана квадратная матрица порядка N. Для каждого столбца матрицы найти наименьший
			элемент. Вычислить и напечатать произведение найденных наименьших элементов. <br/>');
			$N = rand(10,15);
			$arr = GetArr($N, 5, 50)
		?>

		<TABLE border=1>
			<?php
				OutPutArr($arr, $N)
			?>
		</TABLE>
		<?php
		for ($i=0; $i<$N; $i++){
			$array[$i] = 10000;
		}
			for ($i=0; $i<$N; $i++){
				for ($j=0; $j<$N; $j++){
					if($arr[$i][$j] < $array[$j]){
						$array[$j] = $arr[$i][$j];
					}
				}
			}
			$sum = 1;
			print('Наименьшие элементы в столбцах = ');
			for ($i=0; $i<$N; $i++){
				print($array[$i] . ' ');
				$sum *=$array[$i];
			}
			print('<br>произведение - ' . $sum);
		?>
	</body>
</html>
